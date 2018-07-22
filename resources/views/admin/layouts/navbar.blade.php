<nav class="navbar navbar-expand-lg bb-1 navbar-light br-full-dark bg-dark fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-dark bb-1 br-1 br-light-dark">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
        <a class="gredient-cl navbar-brand" href="#">Wayra</a>
    </header>
    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav bg-light-dark" id="exampleAccordion">

                <!-- Start Dashboard-->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tours">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Dashboard" data-parent="#exampleAccordion">
                        <i class="ti i-cl-1 ti-dashboard"></i>
                        <span class="nav-link-text">Tours</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="Dashboard">
                        <li>
                            <a href="#">Crear</a>
                        </li>
                        <li>
                            <a href="#">Ver todo</a>
                        </li>

                    </ul>
                </li>
                <!-- End Dashboard -->




                <!-- Start Table -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mas">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#table" data-parent="#exampleAccordion">
                        <i class="ti i-cl-6 ti-shopping-cart"></i>
                        <span class="nav-link-text">Mas</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="table">

                        <li>
                            <a href="#">Categorias</a>
                        </li>

                        <li>
                            <a href="#">Etiquetas</a>
                        </li>
                        <li>
                            <a href="#">Post Inactivos</a>
                        </li>


                    </ul>
                </li>
                <!-- End Table -->

                <!-- ============ Channels starts============  -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Canales">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#canales" data-parent="#exampleAccordion">
                        <i class="ti i-cl-6 ti-light-bulb"></i>
                        <span class="nav-link-text">Canales</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="canales">

                        <li>
                            <a href="#">Ver Todos </a>
                        </li>


                    </ul>
                </li>
                <!-- ============ Channels ends============  -->


            </ul>
        </div>
        <!-- =============== End Side Menu ============== -->

        <!-- =============== Search Bar ============== -->
        <ul class="navbar-nav ml-left">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">
							  <i class="ti-search"></i>
							</button>
						</span>
                        <input class="form-control" type="text" placeholder="Type In TO Search">
                    </div>
                </form>
            </li>
        </ul>
        <!-- =============== End Search Bar ============== -->

        <!-- =============== Header Rightside Menu ============== -->
        <ul class="navbar-nav ml-auto">

            <!-- Messages -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="gredient-cl ti-email"></i>
                    <span class="a-nav__link-badge a-badge a-badge--pink">3</span>
                    <span class="hidden-lg hidden-md mrg-l-10">New Notification</span>
                </a>
                <div class="dropdown-menu animated flipInX" aria-labelledby="messagesDropdown">
                    <div class="dropdown-header text-center pink-bg">
                        <span class="a-dropdown__header-title">3 New</span>
                        <span class="a-dropdown__header-subtitle">User Messages</span>
                    </div>
                    <div class="ground-list ground-list-hove" id="message-box">
                        <div class="ground ground-single-list">
                            <a href="#">
                                <img class="ground-avatar" src="{{ asset('assets/dist/img/git_user.png') }}" alt="...">
                                <span class="profile-status bg-online pull-right"></span>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Co-Founder</small>
                            </div>

                            <div class="ground-right">
                                <span class="small">Online</span>
                            </div>
                        </div>


                    </div>
                    <a class="dropdown-item view-all" href="#">View all Messages</a>
                </div>
            </li>
            <!-- End Messages -->

            <!-- Notification -->
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="gredient-cl ti-bell"></i>
                    <span class="a-nav__link-badge a-badge a-badge--accent a-animate-blink">6</span>
                    <span class="hidden-lg hidden-md mrg-l-10">
                        New Notification
                    </span>
                </a>

                <div class="dropdown-menu animated flipInX" aria-labelledby="alertsDropdown">
                    <div class="dropdown-header text-center accent-bg">
                        <span class="a-dropdown__header-title">6 New</span>
                        <span class="a-dropdown__header-subtitle">User Notifications</span>
                    </div>

                    <div class="ground-list ground-list-hove" id="notification-box">


                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-purple"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">You can Change Your Pass..</small>
                                <span class="small">18 Min Ago</span>
                            </div>
                        </div>
                    </div>
                    <a class="dropdown-item view-all" href="#">View all Notifications</a>
                </div>
            </li>
            <!-- End Notification -->

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

{{--                    <b class="f-size-17"> {{ Auth::user()->name }}</b>--}}
                    <b class="f-size-17">Manu</b>

                </a>

                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">
                    <li class="dropdown-header green-bg">
                        <div class="header-user-pic">
                            <img src="{{ asset('assets/dist/img/git_user.png') }}" alt="user-img" width="36" class="img-circle">
                        </div>
                        <div class="header-user-det">
                            <span class="a-dropdown__header-title">
                                {{--{{ Auth::user()->name }}--}}
                                Manu
                            </span>
                            <span class="a-dropdown__header-subtitle">
                                Sistema Agencia</span>
                        </div>
                    </li>
                    <li>
                        {{--<a class="dropdown-item" href="{{ route('user.profile') }}"><i class="ti-user"></i> Mi Perfil</a>--}}
                        <a class="dropdown-item" href="#"><i class="ti-user"></i> Mi Perfil</a>
                    </li>


                </ul>
            </li>
        </ul>
        <!-- =============== End Header Rightside Menu ============== -->
    </div>
</nav>