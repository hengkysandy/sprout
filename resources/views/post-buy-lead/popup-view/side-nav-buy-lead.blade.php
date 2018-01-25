<div class="col-md-3 col-sm-12 col-xs-12 hide-on-med-and-down">
          <ul class="no-ul-style menu-wrapper">
            <li>
              <a href="home" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-home padding-top-2px padding-right-8px"></i> <span>Home</span>
              </a>
            </li>
            <li>
              <a href="post-buy-lead" class="btn btn-orange active-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-pencil-square padding-top-2px padding-right-8px"></i> 
                @if( session()->get('userSession')[0]->role_id == 2 )
                  <span>Buy Lead / Quotation</span>
                @elseif( in_array(session()->get('userSession')[0]->role_id, [3,4]) )
                  <span>Post Buy Lead</span>
                @elseif( in_array(session()->get('userSession')[0]->role_id, [5,6]) )
                  <span>Buy Lead List</span>
                @endif
              </a>
            </li>
            <li>
              <a href="company-database" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-building padding-top-2px padding-right-8px"></i> <span>Company Database</span>
              </a>
            </li>
            <li>
              <a href="meeting-schedule" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-calendar padding-top-2px padding-right-8px"></i> <span>Meeting Schedule</span>
              </a>
            </li>
            <li>
              <a href="profile" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-gear padding-top-2px padding-right-8px"></i> <span>Profile</span>
              </a>
            </li>
            <li>
              <a href="logoutUser" class="btn btn-orange btn-lg padding-transition no-border-radius">
                <i class="pull-left fa fa-power-off padding-top-2px padding-right-8px"></i> <span>Logout</span>
              </a>
            </li>
          </ul>
        </div>