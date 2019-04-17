@extends('layouts.participant')

@section('path', 'Dashboard')

@section('style')

@endsection
@section('content')

@if(\Session::has('email_verified'))
<div class="row">
  <div class="col-md-12">
      <div class="alert alert-success">
        <p>{!! \Session::get('email_verified') !!}</p>
      </div>
  </div>
</div>
@endif

@if(\Session::has('success'))
<div class="row">
  <div class="col-md-12">
      <div class="alert alert-success">
        <p>{!! \Session::get('success') !!}</p>
      </div>
  </div>
</div>
@endif

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
              submissions and many things. You have been verified by the committee. Check out the <strong>Submissions</strong> menu if you're ready to upload your work.</p>
              @if(Auth::user()->status == 5)
              Your registration and submission has been finished, please wait for further information. 
              @elseif(Auth::user()->status == 6 && Auth::user()->competitions[0]->competition_status == 'final'
              )
                <p>The committe has viewed your work submission.</p>
                <p><strong>Congratulations</strong>, you are selected to continue to the Final. Please confirm your availability to attend the Final event <br>at: _____ <br>on: ______.<br>Please click <a href="{{url('participant/final-registration')}}">Here</a></p>
                @if(Auth::user()->competitions[0]->can_go_to_final == 'no')
                <p>You have confirmed your Final attendance. You aren't able to attend the final.</p>
                @elseif(Auth::user()->competitions[0]->can_go_to_final == 'yes')
                <p>You have confirmed your Final attendance. You are able to attend the final.</p>
                @endif
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