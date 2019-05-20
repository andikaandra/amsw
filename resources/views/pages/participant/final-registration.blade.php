@extends('layouts.participant')

@section('path', 'Final Registration')

@section('style')

@endsection
@section('content')

<div class="card card-content">
    <div class="card-body">
    <div class="row">
        <div class="col-sm-5">
        <h4 class="card-title mb-0">AMSW <?php echo date("Y"); ?></h4>
        <div class="small text-muted">Final Registration</div>
        </div>
        <div class="col-sm-7 d-none d-md-block">
        </div>          
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info final-alert" style="display: none">
                <p>
                    The amount you must transfer to attend the Final is <strong>                         Rp {{ number_format(\App\Models\CompetitionManagement::where('name', Auth::user()->competition)->first()->final_amount + Auth::user()->id + 000 ,2,',','.')}}
                    </strong>
                </p>
            </div>
        </div>        
    </div>
    <div class="col-md-6">
        <div class="chart-wrapper mt-3">
            <p>Will you be able to attend the final on October 12th, 2019. at Universitas Airlangga ?</p>
            <form action="" method="POST">
                <a href="{{url('participant/final-registration?page=2')}}" class="btn btn-success" style="width: 100px">Yes</a>
                <input type="hidden" name="_method" value="PUT">       
                <button class="btn btn-danger" type="submit" style="width: 100px">No</button>
                <br>
                <input type="hidden" name="comp_id" value="{{Auth::user()->competitions[0]->id}}">
                <input type="hidden" name="can_attend" value="no">
                <small class="text-muted color-danger">If you click No it cannot be undone!</small>
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
   
    </div>
    <div class="card-footer">

    </div>
</div>
@endsection


@section('script')
<script>
$(document).ready(function() {
    $(".confirmation-select select").change(function() {
        const val = $(this).val();
        if(val == 'yes') {
            $(".can-go-to-final").css('display', 'block');
            $(".final-alert").css('display', 'block');
            
        } else {
            $(".can-go-to-final").css('display', 'none');
            $(".final-alert").css('display', 'none');
            $(".can-go-to-final input").val("");
        }        
    });
});
</script>
@endsection