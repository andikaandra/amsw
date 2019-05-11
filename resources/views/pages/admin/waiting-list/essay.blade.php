@extends('layouts.admin')

@section('path', 'Waiting List')

@section('content')
<div class="row">
    <div class="col-lg-12 col-lg-md-12">

        <div class="card card-content">
            <div class="card-header">
                <h5>Essay Final Registration</h5>
            </div>
            <div class="card-body">
                <div class="essays">
                    <table class="table table-hover table-striped essays-table">
                        <thead>
                            <tr class="bg-info">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Wave</th>
                                <th>Registration Status</th>
                                <th>Participant Attendance Status</th>
                                {{-- <th>Registration Final Date</th> --}}
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
    const essays_table = $(".essays-table").DataTable({
        responsive: true,
        ajax: '{{url('admin/waiting-list')}}?competition=Essay',
        columns: [
            {data: 'name'},
            {data: 'email'},
            {data: 'competitions.0.wave'},
            {data: 'competitions.0.final_verification_status', render: function(data, type, row) { 
                return data.replace(/\b\w/g, l => l.toUpperCase());
                }
            },
            {data: 'competitions.0.can_go_to_final', render: function(data, type, row) {
                    if (data == 'pending') {
                        return 'Pending';
                    } else if(data == 'yes') {
                        return 'Can attend final';
                    } else {
                        return 'Cannot attend final';
                    }
                }
            },
            // {data: 'competitions.0.created_at'},
            {data: 'competitions.0.id', render: function(data, type, row) {
                if(row.competitions[0].can_go_to_final == 'pending') {
                    return "Participant hasn't confirmed their attendance and hasn't registered for Final event.";
                }
                else if(row.competitions[0].final_verification_status == 'unverified') {
                    return `<button class='btn btn-success comp-accept mr-2' comp-id='${data}'>Accept</button><button class='btn btn-danger comp-decline mr-2' comp-id='${data}'>Decline</button><button class='btn btn-warning comp-info' user-id='${row.id}'>Info</button>`;
                }
                
                else if(row.competitions[0].final_verification_status == 'verified') {
                    return `<button class='btn btn-success comp-accept mr-2' comp-id='${data}' disabled>Accept</button><button class='btn btn-danger comp-decline mr-2' comp-id='${data}'>Decline</button><button class='btn btn-warning comp-info' user-id='${row.id}}'>Info</button>`;
                } else {
                    return `<button class='btn btn-success comp-accept mr-2' comp-id='${data}'>Accept</button><button class='btn btn-danger comp-decline mr-2' comp-id='${data}' disabled>Decline</button><button class='btn btn-warning comp-info' user-id='${row.id}}'>Info</button>`;
                }
                
                }, orderable: false
            }
        ]
    });

    $(document).on('click', ".comp-info", async function() {
        const compId = $(this).attr('comp-id');
        $(".registration-form").html('');

        let payment;

        const user_id = $(this).attr('user-id');

        try {
            payment = await $.ajax({                
                url: `{{url('admin/users/${user_id}/payments')}}`,
                dataType: 'json'                
            });
        } catch (error) {
            alert('error');
            console.log(error);
            return;
        }          

        const payment_html = `<div class="payment">
            <div class="form-group">
                <h5><strong>Payment</strong></h5>   
                <label for="">Bank Account Name</label>
                <input type="text" readonly class="form-control" value="${payment[0].bank_account_name}">
                <label for="">Bank Name</label>
                <input type="text" readonly class="form-control" value="${payment[0].bank_name}">
                <label for="">Amount Transferred</label>
                <input type="text" readonly class="form-control price" value="${parseInt(payment[0].amount)}">  
                <a class="text-info" target='_blank' href="{{url('admin/payments/${payment[0].id}')}}">Check Payment </a>
                <br>
                <label for="">Travel Plan Link</label>
                <input type="text" readonly class="form-control travel" value="${payment[1].travel_plan}">
            </div>
        </div>`;

        $(".registration-form").html(payment_html);

        $('.price').unmask().mask('0.000.000.000.000', {reverse: true});

        $(".modal.registration").modal('show');

    });

    $(document).on('click', '.comp-accept', function() {

        const comp_id = $(this).attr('comp-id');

        alertify.confirm('Confirmation', 'Would you like to accept this team?', async function() {
                let res;
                try {
                    res = await $.ajax({
                                url: `../final-registration/accept/teams/${comp_id}`, 
                                method: 'PUT',
                                data: {'_token': '{{ csrf_token() }}'}
                            });    
                } catch (error) {
                    alert("error accepting");
                    console.log(error);
                    return;
                }
                
                alertify.success('Team and participants accepted!');
                essays_table.ajax.reload(null, false);

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
                                url: `../final-registration/decline/teams/${comp_id}`, 
                                method: 'PUT',
                                data: {'_token': '{{ csrf_token() }}'}
                            });    
                } catch (error) {
                    alert("error declining");
                    console.log(error);
                    return;
                }
                
                alertify.success('Team and participants declined!');
                essays_table.ajax.reload(null, false);

            }, 
            function() { 
                // alertify.error('Cancel')
            }
        );

    });


});
</script>
@endsection