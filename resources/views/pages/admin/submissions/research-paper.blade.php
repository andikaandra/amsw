@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 col-lg-md-12">

        <div class="card card-content">
            <div class="card-header">
                <h5>Research Paper Submissions</h5>
            </div>
            <div class="card-body">
                <div class="essays">
                    <table class="table table-hover table-striped research-paper-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Submission Date</th>
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
                <div class="submission">
                    <div class="form-group">
                        <p><strong>Title</strong></p>
                        <div class="title">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <p><strong>Description</strong></p>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ullam nemo iusto quo voluptatem commodi, eum sunt debitis cum earum iste, a aperiam, quisquam assumenda nesciunt sint delectus provident fuga?</p>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <p><strong>Download File</strong></p>
                        <div class="link">
                            <a target="_blank" id="download" href="#">Download</a>
                        </div>
                    </div>
    
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
    $(document).on('click', '.submission-info', async function() {
        const submission_id = $(this).attr('submission-id');

        const submission = await $.ajax({
            url: '{{url("admin/submissions")}}/' + submission_id,
            dataType: 'json'
        });

        console.log(submission);

        $(".title").html(submission.title);
        $(".description").html(submission.description);
        $("#download").attr('href', '{{url("admin/download/submissions")}}/' + submission_id);

        $(".modal").modal('show');
    });

    $(document).on('click', '.submission-accept', function() {
        const comp_id = $(this).attr('competition-id');
        alertify.confirm('Confirmation', "Would you like to accept this team's submission? Once you've accepted the submission, this team can then start to complete the Final Registration process. <strong>This proccess cannot be undone!</strong>", async function() {
                let res;
                try {
                    res = await $.ajax({
                                url: `/admin/submissions/${comp_id}/`, 
                                method: 'PUT',
                                data: {'_token': '{{ csrf_token() }}'}
                            });    
                } catch (error) {
                    alert("error accepting");
                    console.log(error);
                    return;
                }
                
                alertify.success('Submission accepted!');
                research_paper_table.ajax.reload(null, false);

            }, 
            function() { 
                // alertify.error('Cancel')
            }
        );
    });

    const research_paper_table = $(".research-paper-table").DataTable({
        responsive: true,
        ajax: '{{url('admin/submissions')}}?competition=Research+Paper',
        columns: [
            {data: 'name'},
            {data: 'email'},
            {data: 'submissions.competition.competition_status', render: function(data, type, row) {
                if (data == "group"){
                    return "Group stage";           
                } else {
                    return "Final stage";
                }
                }
            },
            {data: 'submissions.created_at'},            
            {data: 'submissions.competition_id', render: function(data, type, row) {    
                if(row.submissions.competition.competition_status == 'final') {
                    return `<button class='btn btn-success disabled mr-2' competition-id='${data}'>Accept</button><button class='btn btn-warning submission-info' submission-id='${row.submissions.id}'>Info</button>`;         
                } else {
                    return `<button class='btn btn-success submission-accept mr-2' competition-id='${data}'>Accept</button><button class='btn btn-warning submission-info' submission-id='${row.submissions.id}'>Info</button>`;                
                }
                }, orderable: false
            }
        ]
    });


});
</script>
@endsection