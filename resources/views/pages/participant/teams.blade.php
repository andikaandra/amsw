@extends('layouts.participant')

@section('path', 'My Team')

@section('style')

@endsection
@section('content')
    <div class="card card-content">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-5">
            <h4 class="card-title mb-0">My Team</h4>
            <div class="small text-muted">AMSW <?php echo date("Y"); ?></div>
          </div>
          <div class="col-sm-7 d-none d-md-block">            
          </div>          
        </div>
        <hr>
        <div class="chart-wrapper mt-3" style="min-height:300px;">
          <h6><strong>Your Data</strong></h6>
          <ul>
            <li><p>University : {{Auth::user()->university}}</p></li>
            <li><p>Competition Branch : {{Auth::user()->competition}}</p></li>
            <li><p>Registered during wave : {{Auth::user()->competitions[0]->wave}}</p></li>
          </ul>
          <h6><strong>Your Team Members</strong></h6>
          <ol>
          @foreach($participants as $participant)
            <li><p>Name : {{$participant->name}}</p></li>
          @endforeach
          </ol>
        </div>
      </div>
      <div class="card-footer">

      </div>
    </div>
@endsection