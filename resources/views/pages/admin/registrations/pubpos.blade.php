@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 col-lg-md-12">

        <div class="card card-content">
            <div class="card-header">
                <h5>Public Poster Registration</h5>
            </div>
            <div class="card-body">
                <div class="pubpos">
                    <table class="table table-hover table-striped pubpos-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Wave</th>
                                <th>Status</th>
                                <th>Registration Date</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal registration fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="registration-form">                
                <div class="participant-1">
                    <div class="form-group">
                        <h5><strong>Participant 1</strong></h5>
                        <label for="participant">Name</label>
                        <input type="text" name="" id="" value="Adis Azhar" class="form-control"
                        readonly>
                        <br>
                        <a class="text-info" href="#">Download Participant's Files</a>
                    </div>
                    <hr>                        
                </div>

                <div class="participant-2">
                    <div class="form-group">
                        <h5><strong>Participant 2</strong></h5>
                        <label for="participant">Name</label>
                        <input type="text" name="" id="" value="Adis Azhar" class="form-control"
                        readonly>
                        <br>
                        <a class="text-info" href="#">Download Participant's Files</a>
                    </div>
                    <hr>                        
                </div>

                <div class="payment">
                    <div class="form-group">
                        <h5><strong>Payment</strong></h5>                            
                        <a class="text-info" href="#">Check Payment </a>
                    </div>
                </div>                
                <input type="hidden" name="comp_id" id="comp_id">                        
            </div>
        </div>

        <div class="modal-footer">                        
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
        </div>
    </div>
</div>
@endsection


@section('script')
<script>
$(document).ready(function() {
    const pubpos_table = $(".pubpos-table").DataTable({
        responsive: true,
        ajax: '{{url('admin/teams')}}?competition=Public+Poster',
        columns: [
            {data: 'name'},
            {data: 'email'},
            {data: 'competitions.0.wave'},
            {data: 'competitions.0.verification_status', render: function(data, type, row) {
                    return data.replace(/\b\w/g, l => l.toUpperCase());
                }
            },
            {data: 'competitions.0.created_at'},            
            {data: 'competitions.0.id', render: function(data, type, row) {
                if(row.competitions[0].verification_status == 'unverified') {
                    return `<button class='btn btn-success comp-accept mr-2' comp-id='${data}'>Accept</button><button class='btn btn-danger comp-decline mr-2' comp-id='${data}'>Decline</button><button class='btn btn-warning comp-info' comp-id='${data}'>Info</button>`;
                }
                
                else if(row.competitions[0].verification_status == 'verified') {
                    return `<button class='btn btn-success comp-accept mr-2' comp-id='${data}' disabled>Accept</button><button class='btn btn-danger comp-decline mr-2' comp-id='${data}'>Decline</button><button class='btn btn-warning comp-info' comp-id='${data}'>Info</button>`;
                } else {
                    return `<button class='btn btn-success comp-accept mr-2' comp-id='${data}'>Accept</button><button class='btn btn-danger comp-decline mr-2' comp-id='${data}' disabled>Decline</button><button class='btn btn-warning comp-info' comp-id='${data}'>Info</button>`;
                }
                
                }, orderable: false
            }
        ]
    });

    $(document).on('click', ".comp-info", async function() {
        const compId = $(this).attr('comp-id');
        $(".registration-form").html('');

        let compData;


        try {
            compData = await $.ajax({
                url: '{{url('admin/teams')}}/' + compId + '/participants',
                dataType: 'json'                
            });
        } catch (error) {
            alert('error');
            console.log(error);
            return;
        }        

        const participants = compData[0].participants;
        let participants_html = '';

        for (let index = 0; index < participants.length; index++) {
            participants_html +=    `<div class="participant-${index+1}">
                    <div class="form-group">
                        <h5><strong>Participant ${index+1}</strong></h5>
                        <label for="participant">Name</label>
                        <input type="text" name="" id="" value="${participants[index].name}" class="form-control"
                        readonly>
                        <br>
                        <a class="text-info" href="/admin/participant/${participants[index].id}/files">Download Participant's Files</a>
                    </div>
                    <hr>                        
                </div>`
            
        }

        const payment = compData[0].user.payments[0];        

        const payment_html = `<div class="payment">
            <div class="form-group">
                <h5><strong>Payment</strong></h5>                            
                <a class="text-info" target='_blank' href="/admin/payments/${payment.id}">Check Payment </a>
            </div>
        </div>`;

        $(".registration-form").html(participants_html + payment_html);
        $(".modal.registration").modal('show');

    });

    $(document).on('click', '.comp-accept', function() {

        const comp_id = $(this).attr('comp-id');

        alertify.confirm('Confirmation', 'Would you like to accept this team?', async function() {
                let res;
                try {
                    res = await $.ajax({
                                url: `/admin/teams/${comp_id}/accept`, 
                                method: 'PUT',
                                data: {'_token': '{{ csrf_token() }}'}
                            });    
                } catch (error) {
                    alert("error accepting");
                    console.log(error);
                    return;
                }
                
                alertify.success('Team and participants accepted!');
                pubpos_table.ajax.reload(null, false);

            }, 
            function() { 
                // alertify.error('Cancel')
            }
        );
    });

    $(document).on('click', '.comp-decline', function() {

        const comp_id = $(this).attr('comp-id');

        alertify.confirm('Confirmation', 'Would you like to decline this team?', async function() {
                let res;
                try {
                    res = await $.ajax({
                                url: `/admin/teams/${comp_id}/decline`, 
                                method: 'PUT',
                                data: {'_token': '{{ csrf_token() }}'}
                            });    
                } catch (error) {
                    alert("error declining");
                    console.log(error);
                    return;
                }
                
                alertify.success('Team and participants declined!');
                pubpos_table.ajax.reload(null, false);

            }, 
            function() { 
                // alertify.error('Cancel')
            }
        );

    });


});
</script>
@endsection