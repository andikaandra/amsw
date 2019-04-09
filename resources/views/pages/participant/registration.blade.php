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
            @include('includes.participant.form.upload-data')
          @elseif(Auth::user()->status==3)
            hjh
          @endif
        </div>
      </div>
      <div class="card-footer">

      </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
  //menghandle jika direfresh tapi udah diganti
  let text = $('#cabang-list').find(":selected").text();
  $('#rule-name').html(text);
  $('#rule-link').html("<i class='fas fa-download'></i> Download " + text + " guidebook");
  $('#rule-link').attr("href", "{{url('download/guidebook-')}}"+ (text.toLowerCase()).replace(" ", "-"));

  $('#cabang-list').on('change', function() {

    let text = $('#cabang-list').find(":selected").text();

    $('#rule-name').html(text);
    $('#rule-link').html("<i class='fas fa-download'></i> Download " + text + " guidebook");
    $('#rule-link').attr("href", "{{url('download/guidebook-')}}"+ (text.toLowerCase()).replace(" ", "-"));

    //todo : add rule
    if($(this).val()==1) {
      $('#rule-list').html(text);
    }
    else if($(this).val()==2) {
      $('#rule-list').html(text);
    }
    else if($(this).val()==3) {
      $('#rule-list').html(text);
    }
    else if($(this).val()==4) {
      $('#rule-list').html(text);
    }
    else if($(this).val()==5) {
      $('#rule-list').html(text);
    }
  });
</script>
@endsection