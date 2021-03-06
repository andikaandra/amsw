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
        @if(Auth::user()->status > 1 && Auth::user()->status < 3)
          <form id="reset" method="post" action="{{route('reset.data')}}">
            @csrf
          <div class="alert alert-info">
            @if(Auth::user()->competition!='Research Paper')
              <p>Hello <strong>{{Auth::user()->name}}</strong>. You have been assigned unique <strong>ID {{Auth::user()->id + 000}}</strong>. The amount you must transfer to register <strong>{{Auth::user()->competition}}</strong> is <strong>Rp {{ number_format($lomba->registration_amount + Auth::user()->id + 000 ,2,',','.')}}</strong>. This is to make sure the verification process is done fast.</p>
            @elseif(Auth::user()->competition=='Research Paper')
              <p>Hello <strong>{{Auth::user()->name}}</strong>. You have been assigned unique <strong>ID {{Auth::user()->id + 000}}</strong>. Registration for <strong>{{Auth::user()->competition}}</strong> is free, please complete your information.</p>
            @endif
            <hr>
             @if(Auth::user()->status < 4 )
              After you click submit button you cannot undo the changes. If you would like to start over, you may <a href="#" style="text-decoration: none;" onclick="$('#reset').submit(); return false;" id="submit">Click here to reset</a>
             @endif
          </div>
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          </form>
        @endif
        @if($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              {{ $error }}<br>
            @endforeach
          </div>
        @elseif(\Session::has('success'))
            <div class="alert alert-success">
              {!! \Session::get('success') !!}
            </div>
        @elseif(\Session::has('error'))
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
            @if(Auth::User()->competitions[0]->verification_status == 'declined')
              <div class="alert alert-danger">
                  Unfortunately, your registration has been <strong>declined</strong> by the committee. Contact the committee for more details.
              </div>
            @else
              <div class="alert alert-info">
                Your registration and payment data is being <strong> verified</strong> by the committee.<br>
                Please contact .... for more information.
              </div>
            @endif            
          @else
            <div class="alert alert-info">
              Your registration data has been verified.
            </div>
          @endif
          {{-- <h6>Here are your account data</h6> --}}
          
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

    let text = $('#cabang-list').val();

    $('#rule-name').html(text);
    $('#rule-link').html("<i class='fas fa-download'></i> Download " + text + " guidebook");
    $('#rule-link').attr("href", "{{url('download/guidebook-')}}"+ (text.toLowerCase()).replace(" ", "-"));

    //todo : add rule

    // $('#rule-list').html(text);
  });


    var addCols = function (num){
        for (var iter = 1; iter <= num; iter++) {
            var myCol = $('<div class=""></div>');
            var myPanel = $('<div class="col-md-12"><div align="center"><strong>Participant '+iter+'</strong></div><div class="form-group"><label for="nama'+iter+'">Full Name</label><input type="text" class="form-control" id="nama'+iter+'" name="nama'+iter+'" placeholder="" required></div><div class="form-group"><label for="">Personal Data</label><br><input type="file" accept="application/zip" name="file'+iter+'" id="file" required><small class="form-text text-muted">File must be .zip extension contains <em>Curriculum vitae</em>, ID card, Student card, 4x6 photo , Max size 5 mb.</small><a href="{{url('participant/download/templates/cv')}}">Download CV templates</a></div></div><hr>');
            myPanel.appendTo(myCol);
            myCol.appendTo('#participant-box');
        }
    };

  let peserta = $('#participant').find(":selected").text();
  $('#participant').on('change', function() {

    let peserta = $('#participant').val();

    $("#participant-box").empty();

    if (peserta>=3 && peserta<=6) {
        addCols(peserta);
    }
    return false;

  });

  $("#dataPeserta").submit(e => {
    if ($('#participant').val()==0) {
      e.preventDefault();
    }
    $('#jumlah_peserta').val($('#participant').val());
  });
</script>
@endsection