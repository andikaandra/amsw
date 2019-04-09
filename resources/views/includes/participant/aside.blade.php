      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link">
              <i class="icon-list"></i>
            </a>
          </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Completed Steps</div>
              <div class="list-group-item list-group-item-accent-info list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Create account                    
                  </div>
                  <div class="col-2 float-right text-right">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status > 1 ? 'info' : 'danger' }} list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Choose competition branch
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 1)
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status > 2 ? 'info' : 'danger' }} list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Upload personal data & proof of payment
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 2)
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status > 2 ? 'info' : 'danger' }} list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Verified by admin
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 3)
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-{{ Auth::user()->status > 2 ? 'info' : 'danger' }} list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Upload Submission
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 4)
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            @if(Auth::user()->status > 5)
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Final Steps</div>
              <div class="list-group-item list-group-item-accent-info list-group-item-divider">
                <div class="row">
                  <div class="col-10">
                  Final registration
                  </div>
                  <div class="col-2 float-right text-right">
                    @if(Auth::user()->status > 6)
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    @else
                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </aside>