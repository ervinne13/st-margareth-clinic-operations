<aside class="navbar-default sidebar">
    <div class="sidebar-overlay-head">
        <img src="../assets/images/logo-warning-white@2X.png" alt="Logo" width="80">
        <a href="#" class="sidebar-switch action-sidebar-close">
            <i class="fa fa-times"></i>
        </a>
    </div>
    <div class="sidebar-content">
        <!-- START Sidebar Header -->
        <div class="add-on-container">
            <div class="sidebar-container-default sidebar-section">
                <div class="media">
                    <div class="media-body">

                        <div class="avatar avatar-image avatar-lg center-block">
                            <img src="{{url("/static-img/Caduceus.png")}}" alt="Avatar">                            
                        </div>
                        <h5 class="media-heading text-center m-t-2 m-b-0 text-white"><span>Guy Jacobson</span></h5>
                        <p class="text-center small">Senior Front-end Developer</p>
                    </div>
                </div>

            </div>

            <div class="sidebar-container-big-icons">
                <div class="avatar avatar-image avatar-inline m-b-1">
                    <img src="{{url("/static-img/Caduceus.png")}}" alt="Avatar">                       
                </div>
                <p class="text-white m-y-0">Aidan Fadel</p>
            </div>

            <div class="sidebar-container-slim">
                <div class="avatar avatar-image avatar-sm">
                    <img src="{{url("/static-img/Caduceus.png")}}" alt="Avatar">                       
                </div>
            </div>
        </div>
        <!-- END Sidebar Header -->
        <div class="sidebar-default-visible small text-uppercase sidebar-section m-t-3 m-b-2">
            <strong>Navigation</strong>
        </div>

        <!-- START Tree Sidebar Common -->
        <ul class="side-menu auto-select-sidebar-nav">

            <li class="">
                <a href="{{url("/")}}">
                    <i class="fa fa-home fa-lg fa-fw"></i>
                    <span class="nav-label">Home</span>                                
                </a>
            </li>        

            @foreach ($moduleTree AS $moduleGroup)
            <li class="primary-submenu has-submenu">
                <a href="javascript: void(0)" title="{{$moduleGroup["name"]}}" class="menu-toggle">
                    <i class="fa {{$moduleGroup["icon"]}} fa-lg fa-fw"></i>
                    <span class="nav-label">{{$moduleGroup["name"]}}</span>
                    <i class="fa arrow"></i>
                </a>
                <ul data-submenu-title="{{$moduleGroup["name"]}}" class="submenu-level-1 auto-select-sidebar-nav">

                    @foreach($moduleGroup["modules"] AS $module)
                    <li class="">
                        <a href="{{url($module["url"])}}">
                            <i class="fa {{$module["icon"]}} fa-lg fa-fw"></i>
                            <span class="nav-label">{{$module["name"]}}</span>                                
                        </a>
                    </li>
                    @endforeach                       
                </ul>
            </li>
            @endforeach

        </ul>
        <!-- END Tree Sidebar Common  -->

    </div>
</aside>