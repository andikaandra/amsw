@extends('layouts.participant')

@section('path', 'Registration')

@section('style')

@endsection
@section('content')
            <div class="card card-content">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <h4 class="card-title mb-0">Registration</h4>
                    <div class="small text-muted">AMSW <?php echo date("Y"); ?></div>
                  </div>
                  <div class="col-sm-7 d-none d-md-block">

                  </div>
                </div>
                <hr>
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                      {!! \Session::get('success') !!}
                    </div>
                @endif
                @if (\Session::has('error'))
                    <div class="alert alert-danger">
                      {!! \Session::get('error') !!}
                    </div>
                @endif
                <div class="chart-wrapper mt-3" style="min-height:300px;">
                  @if(Auth::user()->status==1)
                    @include('includes.participant.form.choose-cabang')
                  @elseif(Auth::user()->status==2)
                    form upload personal data dan bukti pembayaran
                  @elseif(Auth::user()->status==2)
                    notifikasi menunggu pemberitahuan admin
                  @endif
                </div>
              </div>
              <div class="card-footer">

              </div>
            </div>
@endsection