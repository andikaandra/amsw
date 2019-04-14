@extends('layouts.participant')

@section('path', 'Dashboard')

@section('style')

@endsection
@section('content')
    <div class="card card-content">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-5">
            <h4 class="card-title mb-0">Upload Submission</h4>
            <div class="small text-muted">AMSW <?php echo date("Y"); ?></div>
          </div>
          <div class="col-sm-7 d-none d-md-block">            
          </div>          
        </div>
        <hr>
        <div class="chart-wrapper mt-3" style="min-height:300px;">
          @if($errors->any())
            <div class="alert alert-danger">
              <strong>Failed to submit: </strong>
              @if ($errors->has('file'))
                <br>Uploaded file file cannot exceed 7 mb.
                <br>Uploaded file has to be zip format.
              @endif
              @if ($errors->has('title'))
                <br>Title may not exceed 256 characters
              @endif
              @if ($errors->has('description'))
                <br>Description may not exceed 256 characters
              @endif
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

            {{-- ceksudah upload apa belum --}}
            @if(isset($submission))
              <p>You have uploaded "{{$submission->title}}".</p>
              @if(Auth::user()->competition == "Educational Video")
              <p>Video Link : <a target="_blank" href="{{$submission->file_path}}">here</a></p>
              @endif
              <p>Submission time : {{date('M d Y', strtotime($submission->created_at))}}</p>
            @else
              @if($lomba->submission_status=='close')
                <div class="alert alert-danger">
                  Sorry, you cant submit your work for a while!. Submissions for <strong>{{$lomba->name}}</strong> is not open.
                </div>
              @else
                <form method="post" id="" enctype="multipart/form-data" action="{{route('upload.submission')}}">
                  @csrf
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Your submission title" maxlength="128" required>
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="3" id="field" onkeyup="countChar(this)" maxlength="255" required>Describe your submission</textarea>
                    <small id="charNum">0</small>/<small>255</small>
                  </div>
                  <div class="form-group">
                  @if(Auth::user()->competition == "Educational Video")
                    <label for="">Video</label>
                    <br><input type="text" class="form-control" name="file" value="" placeholder="Your uploaded video link" maxlength="255" required><br>
                    <small class="form-text text-muted">Video must uploaded before submitted</small>
                  @else
                    <label for="">File</label>
                    <br><input type="file" name="file" accept="application/zip" value="" required><br>
                    <small class="form-text text-muted">File must be .zip extension, max size 7 mb</small>
                  @endif
                  </div>
                  <input type="hidden" name="user" value="{{Auth::user()->id}}">
                  <br>
                  <button class="btn btn-sm btn-info text-white" type="submit">
                    <i class="far fa-paper-plane"></i>&nbsp; Submit
                  </button>
                </form>
              @endif
          @endif
        </div>
      </div>
      <div class="card-footer">

      </div>
    </div>
@endsection

@section('script')
<script>
      function countChar(val) {
        var len = val.value.length;
          $('#charNum').text(len);
      };
    </script>
@endsection