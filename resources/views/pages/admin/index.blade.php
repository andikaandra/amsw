@extends('layouts.admin')

@section('path', 'Home')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12">

        <div class="card card-content">
            <div class="card-header">
                <h5>Competitions Management</h5>
            </div>
            <div class="card-body">
                <div class="comps">
                    <table class="table table-hover table-striped comps-table">
                        <thead>
                            <tr class="bg-info">
                                <th>Name</th>
                                <th>Registration Status</th>
                                <th>Submission Status</th>                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>                               
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal comp-management fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="comp-form">
                <form action="#">
                    <div class="form-group">
                        <label for="waves">Waves</label>
                        <input type="number" min="1" step="1" name="waves" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="current_wave">Current Wave</label>
                        <input type="number" min="1" step="1" name="current_wave" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="registration_status">Registration Status</label>
                        <select name="registration_status" id="registration_status" class="form-control" required>
                            <option value="close">Close</option>
                            <option value="open">Open</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="submission_status">Submission Status</label>
                        <select name="submission_status" id="submission_status" class="form-control" required>
                            <option value="close">Close</option>
                            <option value="open">Open</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="final_registration_status">Final Registration Status</label>
                        <select name="final_registration_status" id="final_registration_status" class="form-control" required>
                            <option value="close">Close</option>
                            <option value="open">Open</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="registration_amount">Registration Amount</label>
                        <input type="text" name="registration_amount" id="registration_amount" class="form-control price" required>
                    </div>

                    <div class="form-group">
                        <label for="final_amount">Final Amount</label>
                        <input type="text" name="final_amount" id="final_amount" class="form-control price" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success comp-save">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    <input type="hidden" name="comp_id" id="comp_id">
                </form>                
            </div>
        </div>
     
        </div>
    </div>
</div>
@endsection


@section('script')
<script>

$(document).ready(function() {

    const compsTable = $('.comps-table').DataTable({
        responsive: true,
        ajax: '{{url('admin/competitions')}}',
        columns: [
            {data: 'name'},
            {data: 'registration_status', render: function(data, type, row) {
                    return data.replace(/\b\w/g, l => l.toUpperCase());
                }
            },
            {data: 'submission_status', render: function(data, type, row) {
                    return data.replace(/\b\w/g, l => l.toUpperCase());
                }
            },
            {data: 'id', render:function(data, type, row) {
                    return `<button class='btn btn-warning comp-info' comp-id='${data}'>Info</button>`;
                }, orderable: false
            }
        ]
    });

    $(document).on('click', '.comp-info', async function() {
        const comp_id = $(this).attr('comp-id');
        $("#comp_id").val(comp_id);

        let compData;

        try {
            compData = await $.ajax({
               url: '{{url('admin/competitions')}}/' + comp_id
            });
        } catch (error) {
            alert("Error");
            console.log(error);
            return;
        }

        $("[name='waves']").val(compData.waves);
        $("[name='current_wave']").val(compData.current_wave);
        $("[name='registration_status']").val(compData.registration_status);
        $("[name='final_registration_status']").val(compData.final_registration_status);

        $("[name='submission_status']").val(compData.submission_status);
        $("[name='registration_amount']").val(parseInt(compData.registration_amount));
        $("[name='final_amount']").val(parseInt(compData.final_amount));
        $(".price").trigger("paste");
        $('.price').unmask().mask('0.000.000.000.000', {reverse: true});

        $(".modal.comp-management").modal('show');


    });


    $(".comp-form form").submit(async function(e) {
        e.preventDefault();

        const compData = $(this).serialize();        

        const compId = $("#comp_id").val();

        try {
            await $.ajax({
                method: 'put',
                data: compData,
                dataType: 'json',
                _token: '{{csrf_token()}}',
                url: '{{url('admin/competitions')}}/' + compId
            });
        } catch (error) {
            alert('Error');
            console.log(error);
            return;
        }

        $(".modal.comp-management").modal('hide');
        $(".comp-form form")[0].reset();

        compsTable.ajax.reload(null, false);

        alertify.success("Competition updated!");
    });
});

</script>
@endsection