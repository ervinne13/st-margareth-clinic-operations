<div class="navbar-default navbar navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="current navbar-brand" href="{{url("/")}}">
                <img alt="{{config("app.")}}" class="h-20" src="{{url("/static-img/Caduceus.png")}}">
            </a>
            <button class="action-right-sidebar-toggle navbar-toggle collapsed" data-target="#navdbar" data-toggle="collapse" type="button">
                <i class="fa fa-fw fa-align-right"></i>
            </button>
            <button class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
                <i class="fa fa-fw fa-user"></i>
            </button>
            <button class="action-sidebar-open navbar-toggle collapsed" type="button">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar">

            <!-- START Search Mobile -->
            <div class="form-group hidden-lg hidden-md hidden-sm">
                <div class="input-group hidden-lg hidden-md">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i></button>
                    </span>
                </div>
            </div>
            <!-- END Search Mobile -->

            <!-- START Left Side Navbar -->
            <ul class="nav navbar-nav navbar-left clearfix yamm">

                <!-- START Switch Sidebar ON/OFF -->
                <li id="sidebar-switch" class="hidden-xs">
                    <a class="action-toggle-sidebar-slim" data-placement="bottom" data-toggle="tooltip" href="#" title="Slim sidebar on/off">
                        <i class="fa fa-lg fa-bars fa-fw"></i>
                    </a>
                </li>
                <!-- END Switch Sidebar ON/OFF -->

                <li class="spin-search-box clearfix hidden-xs">
                    <a href="#" class="pull-left">
                        <i class="fa fa-search fa-lg icon-inactive"></i>
                        <i class="fa fa-close fa-lg icon-active"></i>
                    </a>
                    <div class="input-group input-group-sm pull-left p-10">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </li>
            </ul>
            <!-- START Left Side Navbar -->

            <!-- START Right Side Navbar -->
            <ul class="nav navbar-nav navbar-right">

                <li role="separator" class="divider hidden-lg hidden-md hidden-sm"></li>
                <li class="dropdown-header hidden-lg hidden-md hidden-sm text-gray-lighter text-uppercase">
                    <strong>Your Profile</strong>
                </li>

                <!-- START Notification -->
                <li class="dropdown">

                    <!-- START Icon Notification with Badge (10)-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        <i class="fa fa-lg fa-fw fa-bell hidden-xs"></i>
                        <span class="hidden-sm hidden-md hidden-lg">
                            Notifications <span class="badge badge-primary m-l-1">10</span>
                        </span>
                        <span class="label label-primary label-pill label-with-icon hidden-xs">10</span>
                        <span class="fa fa-fw fa-angle-down hidden-lg hidden-md hidden-sm"></span>
                    </a>
                    <!-- END Icon Notification with Badge (10)-->

                    <!-- START Notification Dropdown Menu -->
                    <ul class="dropdown-menu dropdown-menu-right p-t-0 b-t-0 p-b-0 b-b-0 b-a-0">
                        <li>
                            <div class="yamm-content p-t-0 p-r-0 p-l-0 p-b-0">
                                <ul class="list-group m-b-0 b-b-0">
                                    <li class="list-group-item b-r-0 b-l-0 b-r-0 b-t-r-0  b-t-l-0 b-b-2 w-350">
                                        <small class="text-uppercase">
                                            <strong>Notifications</strong>
                                        </small>
                                        <a role="button" href="../apps/settings-edit.html" class="btn m-t-0 btn-xs btn-default pull-right">
                                            <i class="fa fa-fw fa-gear"></i>
                                        </a>
                                    </li>

                                    <!-- START Scroll Inside Panel -->
                                    <li class="list-group-item b-a-0 p-x-0 p-y-0 b-t-0">
                                        <div class="scroll-300 custom-scrollbar">
                                            <a href="../pages/timeline.html" class="list-group-item b-r-0 b-t-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <span class="fa-stack fa-lg">
                                                            <i class="fa fa-circle-thin fa-stack-2x text-danger"></i>
                                                            <i class="fa fa-close fa-stack-1x fa-fw text-danger"></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0">
                                                            <span>Use the 1080p AI panel, then you can quantify the haptic bandwidth!</span>
                                                        </h5>
                                                        <p class="text-nowrap small m-b-0">
                                                            <span>26-Nov-2014, 01:10</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="../pages/timeline.html" class="list-group-item b-r-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <span class="fa-stack fa-lg">
                                                            <i class="fa fa-circle-thin fa-stack-2x text-primary"></i>
                                                            <i class="fa fa-info fa-stack-1x text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0">
                                                            <span>Use the multi-byte TCP panel, then you can bypass the open-source bandwidth!</span>
                                                        </h5>
                                                        <p class="text-nowrap small m-b-0">
                                                            <span>28-May-2011, 02:10</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="../pages/timeline.html" class="list-group-item b-r-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <span class="fa-stack fa-lg">
                                                            <i class="fa fa-circle-thin fa-stack-2x text-success"></i>
                                                            <i class="fa fa-check fa-stack-1x text-success"></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0">
                                                            <span>You can&apos;t input the transmitter without quantifying the back-end TCP array!</span>
                                                        </h5>
                                                        <p class="text-nowrap small m-b-0">
                                                            <span>22-Sep-2011, 05:41</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="../pages/timeline.html" class="list-group-item b-r-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <span class="fa-stack fa-lg">
                                                            <i class="fa fa-circle-thin fa-stack-2x text-warning"></i>
                                                            <i class="fa fa-exclamation fa-stack-1x fa-fw text-warning"></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="m-t-0">
                                                            <span>We need to connect the redundant EXE bandwidth!</span>
                                                        </h5>
                                                        <p class="text-nowrap small m-b-0">
                                                            <span>04-Feb-2013, 02:42</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>

                                    <!-- END Scroll Inside Panel -->
                                    <li class="list-group-item b-a-0 p-x-0 p-y-0 r-a-0 b-b-0">
                                        <a class="list-group-item text-center b-r-0 b-b-0 b-l-0 b-r-b-r-0 b-r-b-l-0" href="../pages/timeline.html">
                                            See All Notifications <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                    </ul>
                    <!-- END Notification Dropdown Menu -->

                </li>
                <!-- END Notification -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        <i class="fa fa-lg fa-fw fa-envelope hidden-xs"></i>
                        <span class="hidden-sm hidden-md hidden-lg">Messages <span class="badge badge-info m-l-1">3</span></span>
                        <span class="label label-info label-pill label-with-icon hidden-xs">3</span>
                        <span class="fa fa-fw fa-angle-down hidden-lg hidden-md hidden-sm"></span>
                    </a>

                    <!-- START Messages Dropdown Menu -->
                    <ul class="dropdown-menu dropdown-menu-right p-t-0 b-t-0 p-b-0 b-b-0 b-a-0">
                        <li>
                            <div class="yamm-content p-t-0 p-r-0 p-l-0 p-b-0">
                                <ul class="list-group m-b-0">
                                    <li class="list-group-item b-r-0 b-l-0 b-r-0 b-t-r-0 b-t-l-0 b-b-2 w-350">
                                        <small class="text-uppercase">
                                            <strong>Messages</strong>
                                        </small>
                                        <a role="button" href="../apps/new-email.html" class="btn m-t-0 btn-xs btn-default pull-right">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </li>

                                    <!-- START Scroll Inside Panel -->
                                    <li class="list-group-item b-a-0 p-x-0 p-y-0 b-t-0">
                                        <div class="scroll-200 custom-scrollbar">

                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-t-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/thimo_cz/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-danger b-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-auto">
                                                        <h5 class="m-b-0 m-t-0">
                                                            <span>Kenna Bradtke</span>
                                                            <small><span>03:10</span></small>
                                                        </h5>
                                                        <p class="m-t-0 m-b-0">
                                                            <span>Velit voluptas hic voluptatem excepturi dicta officiis saepe ratione laudantium.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/hafeeskhan/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-warning b-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-auto">
                                                        <h5 class="m-b-0 m-t-0">
                                                            <span>Hermann Block</span>
                                                            <small><span>12:34</span></small>
                                                        </h5>
                                                        <p class="m-t-0 m-b-0">
                                                            <span>Eum ad corrupti.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/low_res/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-success b-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-auto">
                                                        <h5 class="m-b-0 m-t-0">
                                                            <span>Sid Stroman</span>
                                                            <small><span>05:26</span></small>
                                                        </h5>
                                                        <p class="m-t-0 m-b-0">
                                                            <span>Non sequi harum explicabo sint.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/nomidesigns/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-danger b-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-auto">
                                                        <h5 class="m-b-0 m-t-0">
                                                            <span>Ezekiel Bode</span>
                                                            <small><span>05:05</span></small>
                                                        </h5>
                                                        <p class="m-t-0 m-b-0">
                                                            <span>Ut quia necessitatibus aut minima.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/gregkilian/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-warning b-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-auto">
                                                        <h5 class="m-b-0 m-t-0">
                                                            <span>Maybell Jakubowski</span>
                                                            <small><span>05:24</span></small>
                                                        </h5>
                                                        <p class="m-t-0 m-b-0">
                                                            <span>Culpa vero quia atque autem eos qui.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="../apps/email-details.html" class="list-group-item b-r-0 b-l-0">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <div class="avatar">
                                                            <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/loganjlambert/128.jpg" alt="Avatar">
                                                            <i class="avatar-status avatar-status-bottom bg-success b-gray-darker"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body media-auto">
                                                        <h5 class="m-b-0 m-t-0">
                                                            <span>Ivy Bartell</span>
                                                            <small><span>07:57</span></small>
                                                        </h5>
                                                        <p class="m-t-0 m-b-0">
                                                            <span>Atque id minus deserunt modi.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </li>
                                    <!-- END Scroll Inside Panel -->

                                    <li class="list-group-item b-a-0 p-x-0 b-b-0 p-y-0 r-a-0">
                                        <a class="list-group-item text-center b-b-0 b-r-0 b-l-0 b-r-b-r-0 b-r-b-l-0" href="../apps/inbox.html">
                                            See All Messages <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- END Messages Dropdown Menu -->

                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle user-dropdown" data-toggle="dropdown" href="#" role="button">
                        <span class="m-r-1">Sarina Murphy</span>
                        <div class="avatar avatar-image avatar-sm avatar-inline">
                            <img alt="User" src="https://s3.amazonaws.com/uifaces/faces/twitter/darylws/128.jpg">
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">
                            <small class="text-uppercase"><strong>Account</strong></small>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="../apps/profile-details.html">
                                <i class="fa fa-user fa-fw text-gray-dark m-r-1"></i>
                                Your Profile
                            </a>
                        </li>
                        <li>
                            <a href="../apps/profile-edit.html">
                                <i class="fa fa-gear fa-fw text-gray-dark m-r-1"></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="../apps/faq.html">
                                <i class="fa fa-file fa-fw text-gray-dark m-r-1"></i>
                                Faq
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="../pages/login.html">
                                <i class="fa fa-sign-out fa-fw text-gray-dark m-r-1"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-xs">
                    <a class="action-right-sidebar-toggle" title="Right sidebar on/off">
                        <i class="fa fa-lg fa-align-right"></i>
                    </a>
                </li>
            </ul>
            <!-- END Right Side Navbar -->
        </div>

    </div>
</div>