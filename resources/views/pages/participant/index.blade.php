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
          @if(Auth::user()->email_verification == 'unverified')
          <div class="email-unverified">
            <p>Hello <strong>{{Auth::user()->name}}</strong>. <br> Welcome to your AMSW user Dashboard. Please verify your account by checking the email we sent you. Open your mailbox using the email you registered with.</p>
          </div>
          @else
          <div class="email-verified">
            <p>Hello <strong>{{Auth::user()->name}}</strong>. Welcome to your AMSW user Dashboard.
            @if(Auth::user()->status == 3)
              You will find relevant information like payment and account status,
              submissions and many things. If you see this message it means you have completed the registration process. Although our admins may still have to
              verify your payment(s).</p>
            @elseif(Auth::user()->status > 3)
              You will find relevant information like payment and account status,
              submissions and many things. You have been verified <i class="fas fa-check text-info"></i></p>
              @if(Auth::user()->status == 5)
              Congratulation, your registration and submission has been finished, please wait for further information. 
              @endif
            @else
              You can begin your registration from Registration menu or just click <a href="{{@url('participant/registration')}}">here</a>.</p>
            @endif
          </div>
          @endif
        </div>
      </div>
      <div class="card-footer">

      </div>
    </div>
@endsection