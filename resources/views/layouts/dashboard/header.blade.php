{{-- Start Top Header --}}
  <header class="top-header">
    <nav class="navbar navbar-expand gap-3">
      <div class="mobile-menu-button"><ion-icon name="menu-sharp"></ion-icon></div>
      <div class="top-navbar-right ms-auto">

      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown dropdown-user-setting">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
            <div class="user-setting">
              {{-- <h6>{{ Auth::user()->email }} <img src="{{ asset('dashboard/images/person.png') }}" class="user-img" alt=""></h6> --}}
              <h6> <img src="{{ asset('dashboard/images/person.png') }}" class="user-img" alt=""></h6>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex flex-row align-items-center gap-2">
                    <img src="{{ asset('dashboard/images/person.png') }}" alt="" class="rounded-circle" width="54" height="54">
                    <div class="">
                      <h6 class="mb-0 dropdown-user-name"></h6>
                    </div>
                  </div>
                </a>
              </li>             
              <li><hr class="dropdown-divider"></li>
              <li>
                <form id="formLogOut" action="" method="POST">
                  @csrf
                </form>
                <a class="dropdown-item" href="" onclick="event.preventDefault(); getElementById('formLogOut').submit();">
                  <div class="d-flex align-items-center">
                    <div class=""><ion-icon name="log-out-outline"></ion-icon></div>
                    <div class="ms-3"><span>Logout</span></div>
                  </div>
                </a>
              </li>
          </ul>
        </li>

        </ul>

      </div>
    </nav>
  </header>
{{-- End Top Header --}}