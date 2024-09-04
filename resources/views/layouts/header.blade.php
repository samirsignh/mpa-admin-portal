<style>
    .header {
        background: var(--bs-white);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 2px 5px;
    }

    /* .user-img {
        border: 1px solid #1400ff;
        border-radius: 10%;
    } */
</style>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item">
                        <div class="dropdown header-profile2">
                            <a class="nav-link ms-0" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="header-info2 d-flex align-items-center">
                                    <div class="d-flex align-items-center sidebar-info">

                                    </div>
                                    <img class="user-img" src="{{ asset('images/user.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end pb-0" style="">
                                <div class="card mb-0">
                                    <div class="card-header p-3">
                                        <ul class="d-flex align-items-center">
                                            <li>
                                                <img src="{{ asset('images/user.jpg') }}" class="ms-0" alt="">
                                            </li>
                                            <li class="ms-2">
                                                @if (Auth::user()->userType == 1)
                                                <h4 class="mb-0">Super Admin</h4>
                                                @elseif (Auth::user()->userType == 2)
                                                <h4 class="mb-0">MPA Admin</h4>
                                                @elseif (Auth::user()->userType == 3)
                                                <h4 class="mb-0">Normal User</h4>
                                                @endif
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="card-footer text-center p-3">
                                        <a href="{{ route('logout') }}"
                                            class="dropdown-item ai-icon btn btn-primary light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12"></line>
                                            </svg>
                                            <span class="ms-2 text-primary">Logout </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</div>
