<div class="header @@classList">
    <!-- navbar -->
    <nav class="navbar-classic navbar navbar-expand-lg">
        <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
        <div class="ms-lg-3 d-none d-md-none d-lg-block">
            <!-- Form -->
            <form class="d-flex align-items-center">
                <input type="search" class="form-control" placeholder="Search" />
            </form>
        </div>
        <!--Navbar nav -->
        <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
            <li class="dropdown stopevent">
                <a class="btn btn-light btn-icon rounded-circle indicator
          indicator-primary text-muted" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="bell"></i>
                </a>

            <!-- List -->
            <li class="dropdown ms-2">

                <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md">
                        <img alt="avatar" src="{{ asset('/assets') }}/images/my-img/1.png"
                            class="rounded-circle" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                    <div class="px-4 pb-0 pt-2">


                        <div class="lh-1 ">
                            <h5 class="mb-1">Waqyu Setiadi</h5>
                            <a href="{{ url('about-me') }}" class="text-inherit fs-6">View my profile</a>
                        </div>
                        <div class=" dropdown-divider mt-3 mb-2"></div>
                    </div>



                </div>
            </li>
        </ul>
    </nav>
</div>
