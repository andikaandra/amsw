@extends('layouts.participant')

@section('path', 'Dashboard')

@section('style')

@endsection
@section('content')
    <div class="card card-content">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-5">
            <h4 class="card-title mb-0">AMSW <?php echo date("Y"); ?></h4>
            <div class="small text-muted">Dashboard</div>
          </div>
          <div class="col-sm-7 d-none d-md-block">            
          </div>          
        </div>
        <hr>
        <div class="chart-wrapper mt-3" style="min-height:300px;">
          {{-- Not verified yet --}}
          <div class="email-unverified">
            <p>Hello <strong>{{Auth::user()->name}}</strong>. <br> Welcome to your AMSW Web Dashboard. Please verify your account by checking the email we sent you. Open your mailbox using the email you registered with.</p>
          </div>
        </div>
      </div>
      <div class="card-footer">

      </div>
    </div>
@endsection