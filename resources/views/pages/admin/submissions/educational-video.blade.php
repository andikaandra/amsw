@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12 col-lg-md-12">

        <div class="card card-content">
            <div class="card-header">
                <h5>Educational Video Submissions</h5>
            </div>
            <div class="card-body">
                <div class="edvid">
                    <table class="table table-hover table-striped edvid-table">
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
    <div class="modal-dialog" role="document">
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
                    <p><strong>Video Link</strong></p>
                    <div class="link">
                        <a href="http://youtbue.com">Video Link</a>
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
    $(".modal").modal('show')
    const edvid_table = $(".edvid-table").DataTable({
        responsive: true,
        ajax: '{{url('admin/submissions')}}?competition=Educational+Video',
        columns: [
            {data: 'name'},
            {data: 'email'},
            {data: 'submissions.competition.competition_status', render: function(data, type, row) {
                    return data.replace(/\b\w/g, l => l.toUpperCase());
                }
            },
            {data: 'submissions.created_at'},            
            {data: 'submissions.competition_id', render: function(data, type, row) {
                if(row.competitions[0].verification_status == 'unverified') {
                    return `<button class='btn btn-success submission-accept mr-2' comp-id='${data}'>Accept</button><button class='btn btn-warning submission-info' comp-id='${data}'>Info</button>`;
                }                                
                }, orderable: false
            }
        ]
    });

});
</script>
@endsection