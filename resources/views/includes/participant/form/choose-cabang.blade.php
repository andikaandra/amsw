                  <form method="post" action="{{route('choose.cabang')}}">
                    @csrf
                    <div class="form-group">
                      <label for="competition">Competition Branch</label>
                      <select class="form-control" name="competition">
                        <option value="1">Essay</option>
                        <option value="2">Literature Review</option>
                        <option value="3">Poster Publik</option>
                        <option value="4">Research Paper</option>
                        <option value="5">Video Edukasi</option>
                      </select>
                    </div>
                    <input type="hidden" name="user" value="{{Auth::user()->id}}">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="far fa-paper-plane"></i>&nbsp; Submit
                    </button>
                  </form>