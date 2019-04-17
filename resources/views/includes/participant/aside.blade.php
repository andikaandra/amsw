      <aside class="aside-menu" data-step="2" data-intro="This is your registration status">
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Registration Steps</div>
              <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Create account                    
                  </div>
                  <div class="col-2 float-right text-right">
                    <i class="fa fa-check text-success" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status >= 1 ? (Auth::user()->status == 1 ? 'info' : 'success' ) : 'danger' }} list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Choose competition branch
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status == 1)
                      <i class="fa fa-chevron-circle-left text-info" aria-hidden="true"></i>
                    @elseif(Auth::user()->status >= 2)
                      <i class="fa fa-check text-success" aria-hidden="true"></i>
                    @else
                    <i data-toggle="tooltip" title="You aren't up to this step yet." class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status >= 2 ? (Auth::user()->status == 2 ? 'info' : 'success' ) : 'danger' }} list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Upload personal data & proof of payment
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status == 2)
                      <i class="fa fa-chevron-circle-left text-info" aria-hidden="true"></i>
                    @elseif(Auth::user()->status >= 3)
                    <i class="fa fa-check text-success" aria-hidden="true"></i>
                    @else
                    <i data-toggle="tooltip" title="You aren't up to this step yet." class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status >= 3 ? (Auth::user()->status == 3 ? 'info' : 'success' ) : 'danger' }} list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Verification by committee
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status == 3)
                      <i class="fa fa-chevron-circle-left text-info" aria-hidden="true"></i>
                    @elseif(Auth::user()->status >= 4)
                    <i class="fa fa-check text-success" aria-hidden="true"></i>
                    @else
                    <i data-toggle="tooltip" title="You aren't up to this step yet." class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
              
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status >= 4 ? (Auth::user()->status == 4 ? 'info' : 'success' ) : 'danger' }} list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Upload submission
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status == 4)
                      <i class="fa fa-chevron-circle-left text-info" aria-hidden="true"></i>
                    @elseif(Auth::user()->status >= 5)
                    <i class="fa fa-check text-success" aria-hidden="true"></i>
                    @else
                    <i data-toggle="tooltip" title="You aren't up to this step yet." class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>

            </div>

            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Registration for Final - Only for selected participants</div>
              
                @if(Auth::user()->status < 5)
                <div data-toggle="tooltip" title="You aren't up to this step yet." class="list-group-item list-group-item-accent-danger list-group-item-divider">
                @elseif(Auth::user()->status == 5 )
                <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                @elseif(Auth::user()->status == 6)
                <div class="list-group-item list-group-item-accent-info list-group-item-divider">
                @else
                <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                @endif
                
                <div class="row">
                  <div class="col-10">
                  Final registration
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status == 5)
                    <i data-toggle="tooltip" title="Committee is still reviewing your work submission." class="fa fa-question-circle" aria-hidden="true"></i>
                    @elseif(Auth::user()->status == 6)
                    <i class="fa fa-chevron-circle-left text-info" aria-hidden="true"></i>
                    @elseif(Auth::user()->status > 6)
                    <i class="fa fa-check text-success" aria-hidden="true"></i>
                    @else
                    <i data-toggle="tooltip" title="You aren't up to this step yet." class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>