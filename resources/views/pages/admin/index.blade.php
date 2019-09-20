@extends('layouts.admin')

@section('path', 'Home')

@section('style')
{{--<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />--}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" integrity="sha256-bLNUHzSMEvxBhoysBE7EXYlIrmo7+n7F4oJra1IgOaM=" crossorigin="anonymous" />

@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-sm-4 col-md-3">
        <div class="card card-content">
            <div class="card-header text-center bg-info">
                Essay
            </div>
            <div class="card-body text-center">
                {{$satu}} Teams
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-3">
        <div class="card card-content">
            <div class="card-header text-center bg-info">
                Literature Review
            </div>
            <div class="card-body text-center">
                {{$dua}} Teams
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-3">
        <div class="card card-content">
            <div class="card-header text-center bg-info">
                Public Poster
            </div>
            <div class="card-body text-center">
                {{$tiga}} Teams
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-3">
        <div class="card card-content">
            <div class="card-header text-center bg-info">
                Research Paper
            </div>
            <div class="card-body text-center">
                {{$empat}} Teams
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-3">
        <div class="card card-content">
            <div class="card-header text-center bg-info">
                Educational Video
            </div>
            <div class="card-body text-center">
                {{$lima}} Teams
            </div>
        </div>
    </div>
</div>                
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

{{--                    <div class="form-group">--}}
{{--                        <label for="final_registration_status">Final Registration Status</label>--}}
{{--                        <select name="final_registration_status" id="final_registration_status" class="form-control" required>--}}
{{--                            <option value="close">Close</option>--}}
{{--                            <option value="open">Open</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="registration_amount">Registration Amount</label>
                        <input type="text" name="registration_amount" id="registration_amount" class="form-control price" required>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="final_amount">Final Amount</label>--}}
{{--                        <input type="text" name="final_amount" id="final_amount" class="form-control price" required>--}}
{{--                    </div>--}}
                    
                    <div class="form-group">
                        <label for="final_wave_1_start">Final Wave 1 Start Date and Time</label><br>
                        <input id="final_wave_1_start_datepicker" name='final_wave_1_start_datepicker' class="datepicker">
                        <input type="time" name="final_wave_1_start_timepicker" id="final_wave_1_start_timepicker">
                    </div>

                    <div class="form-group">
                        <label for="final_wave_1_end">Final Wave 1 End Date and Time</label><br>
                        <input id="final_wave_1_end_datepicker" name='final_wave_1_end_datepicker' class="datepicker">
                        <input type="time" name="final_wave_1_end_timepicker" id="final_wave_1_end_timepicker">
                    </div>

                    <div class="form-group">
                        <label for="final_amount">Final Wave 1 Amount</label>
                        <input type="text" name="final_amount_wave_1" id="final_amount_wave_1" class="form-control price" required>
                    </div>

                    <div class="form-group">
                        <label for="final_wave_2_start">Final Wave 2 Start Date and Time</label><br>
                        <input id="final_wave_2_start_datepicker" name='final_wave_2_start_datepicker' class="datepicker">
                        <input type="time" name="final_wave_2_start_timepicker" id="final_wave_2_start_timepicker">
                    </div>

                    <div class="form-group">
                        <label for="final_wave_2_end">Final Wave 2 End Date and Time</label><br>
                        <input id="final_wave_2_end_datepicker" name='final_wave_2_end_datepicker' class="datepicker">
                        <input type="time" name="final_wave_2_end_timepicker" id="final_wave_2_end_timepicker">
                    </div>

                    <div class="form-group">
                        <label for="final_amount">Final Wave 2 Amount</label>
                        <input type="text" name="final_amount_wave_2" id="final_amount_wave_2" class="form-control price" required>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success comp-save">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    <input type="hidden" name="comp_id" id="comp_id">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>                
            </div>
        </div>
     
        </div>
    </div>
</div>
@endsection


@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js" integrity="sha256-JIBDRWRB0n67sjMusTy4xZ9L09V8BINF0nd/UUUOi48=" crossorigin="anonymous"></script>
<script>

$(document).ready(function() {
    $('#final_wave_1_start_datepicker').datepicker({
        // uiLibrary: 'bootstrap4'
    });

    $('#final_wave_2_start_datepicker').datepicker({
        // uiLibrary: 'bootstrap4'
    });

    $('#final_wave_1_end_datepicker').datepicker({
        // uiLibrary: 'bootstrap4'
    });

    $('#final_wave_2_end_datepicker').datepicker({
        // uiLibrary: 'bootstrap4'
    });

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

        $("[name='final_amount_wave_1']").val(parseInt(compData.final_wave_1_amount));
        $("[name='final_amount_wave_2']").val(parseInt(compData.final_wave_2_amount));

        $(".price").trigger("paste");
        $('.price').unmask().mask('0.000.000.000.000', {reverse: true});

        const finalWave1Start = new Date(compData.final_wave_1_start);
        const finalWave1End = new Date(compData.final_wave_1_end);

        const finalWave2Start = new Date(compData.final_wave_2_start);
        const finalWave2End = new Date(compData.final_wave_2_end);


        let finalWave1StartTime = finalWave1Start.getHours() + ":";
        let finalWave1EndTime = finalWave1End.getHours() + ":";

        let finalWave2StartTime = finalWave2Start.getHours() + ":";
        let finalWave2EndTime = finalWave2End.getHours() + ":";

        if( ('' + finalWave1Start.getMinutes()).length == 1 ) {
            finalWave1StartTime = finalWave1StartTime + "0" + finalWave1Start.getMinutes()
        } else {
            finalWave1StartTime = finalWave1StartTime + finalWave1Start.getMinutes()
        }

        if( ('' + finalWave1End.getMinutes()).length == 1 ) {
            finalWave1EndTime = finalWave1EndTime + "0" + finalWave1End.getMinutes()
        } else {
            finalWave1EndTime = finalWave1EndTime + finalWave1End.getMinutes()
        }

        if( ('' + finalWave2Start.getMinutes()).length == 1 ) {
            finalWave2StartTime = finalWave2StartTime + "0" + finalWave2Start.getMinutes()
        } else {
            finalWave2StartTime = finalWave2StartTime + finalWave2Start.getMinutes()
        }

        if( ('' + finalWave2End.getMinutes()).length == 1 ) {
            finalWave2EndTime = finalWave2EndTime + "0" + finalWave2End.getMinutes()
        } else {
            finalWave2EndTime = finalWave2EndTime + finalWave2End.getMinutes()
        }

        //

        if( ('' + finalWave1Start.getHours()).length == 1 ) {
            finalWave1StartTime =  "0" + finalWave1StartTime;
        }

        if( ('' + finalWave1End.getHours()).length == 1 ) {
            finalWave1EndTime = "0" + finalWave1EndTime;
        }

        if( ('' + finalWave2Start.getHours()).length == 1 ) {
            finalWave2StartTime = "0" + finalWave2StartTime;
        }

        if( ('' + finalWave2End.getHours()).length == 1 ) {
            finalWave2EndTime = "0" + finalWave2EndTime;
        } else {
            finalWave2EndTime = "0" + finalWave2EndTime;
        }

        $("#final_wave_1_start_datepicker").datepicker('setDate', finalWave1Start);
        $("#final_wave_1_end_datepicker").datepicker('setDate', finalWave1End);

        $("#final_wave_2_start_datepicker").datepicker('setDate', finalWave2Start);
        $("#final_wave_2_end_datepicker").datepicker('setDate', finalWave2End);

        $("#final_wave_1_start_timepicker").val(finalWave1StartTime);
        $("#final_wave_1_end_timepicker").val(finalWave1EndTime);

        $("#final_wave_2_start_timepicker").val(finalWave2StartTime);
        $("#final_wave_2_end_timepicker").val(finalWave2EndTime);





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

{{--<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>--}}
@endsection
