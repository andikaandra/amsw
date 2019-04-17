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
            @if($errors->any())
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                  @endforeach
                </div>
            @endif
            <div class="alert alert-info final-alert">
                <p>
                    The amount you must transfer to attend the Final is <strong>                         Rp {{ number_format(\App\Models\CompetitionManagement::where('name', Auth::user()->competition)->first()->final_amount + Auth::user()->id + 000 ,2,',','.')}}
                    </strong>
                </p>
            </div>
        </div>        
    </div>
    <div class="col-md-6">
            <div class="chart-wrapper mt-3" style="min-height:300px;">        
                <form action="{{url('participant/final-registration')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="comp_id" value="{{Auth::user()->competitions[0]->id}}">

                    {{ csrf_field() }}
                    <div class="can-go-to-final">  
                        <div class="form-group">
                        <label for="nama_bank">Travel Plan Link</label>
                        <input type="text" class="form-control" name="travel_plan" placeholder="ex : https://travelamsw.com?plan=surabata" required>
                        <small class="text-muted">Please attach the full link</small>
                        </div>   

                        <div class="form-group">
                        <label for="nama_bank">Bank name</label>
                        <input type="text" class="form-control" name="nama_bank" placeholder="ex : BNI" required>
                        </div>   
                                                    
                        <div class="form-group">
                        <label for="nama_pengirim">Account Sender</label>
                        <input type="text" class="form-control" name="nama_pengirim" placeholder="Account Sender" required>
                        <small class="text-muted">The bank account name used to transfer</small>
                        </div>
                        <div class="form-group">
                        <label for="jumlah_tf">Amount</label>
                        <input type="text" class="form-control price" name="jumlah_tf" placeholder="Amount" required>
                        <small class="text-muted">The amount you transferred</small>
                        </div>
                        <div class="form-group">
                        <label for="">Proof of Payment</label>
                        <br><input type="file" name="bukti_pembayaran" accept="image/*" value="" required><br>
                        <small class="form-text text-muted">JPG or PNG. Max size 1 mb</small>
                        </div>                            
                        <small class="text-danger">* By submitting this form, you cannot reset your final registration data.</small><br>                          
                    </div>
                    <button class="btn btn-sm btn-info text-white" type="submit">
                    <i class="far fa-paper-plane"></i>&nbsp; Submit
                    </button>
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

});
</script>
@endsection