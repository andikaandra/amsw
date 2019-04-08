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
                  
                </div>
              </div>
              <div class="card-footer">

              </div>
            </div>
@endsection