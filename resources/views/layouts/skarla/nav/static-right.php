<div class="right-sidebar shadow-box">
    <!-- DodatkowyContent: data-target-extra-content wskazuje, że ten konkretny div ma być przykrywany przez kontener o id chatpanel2 -->
    <div class="container-fluid" data-target-extra-content="chatpanel2">
        <div class="row">

            <!-- <a href="#" class="extra-content-open">Extra content Large</a>-->

            <!-- START Tabs -->
            <div class="tabbable-line">
                <ul class="nav nav-tabs m-r-1 m-t-2">
                    <!-- Tab: Calendar -->
                    <li role="presentation" class="visible-xs">
                        <a class="action-right-sidebar-toggle" href="javascript:void(0)" role="tab">
                            <span class="fa fa-times"></span>
                        </a>
                    </li>
                    <!-- Tab: Calendar -->
                    <li class="active" role="presentation">
                        <a data-toggle="tab" href="#tab-calendar" role="tab"><span class="fa fa-calendar-o"></span></a>
                    </li>
                    <!-- Tab: Statisticts -->
                    <li role="presentation">
                        <a data-toggle="tab" href="#tab-statistics" role="tab"><span class="fa fa-area-chart"></span></a>
                    </li>
                    <!-- Tab: Users -->
                    <li role="presentation">
                        <a data-toggle="tab" href="#right-sidebar-users" role="tab"><span class="fa fa-users"></span></a>
                    </li>
                    <!-- Tab: Timeline -->
                    <li role="presentation">
                        <a data-toggle="tab" href="#right-sidebar-timeline" role="tab"><span class="fa fa-list"></span></a>
                    </li>
                    <!-- Tab: Settings -->
                    <li role="presentation">
                        <a data-toggle="tab" href="#right-sidebar-settings" role="tab"><span class="fa fa-gear"></span></a>
                    </li>
                </ul>
                <!-- END Tabs -->

                <!-- START Tab: Calendar -->
                <div class="tab-content vertical-scroll-container" id="myTabContent">
                    <div class="tab-pane fade in active p-r-1" id="tab-calendar" role="tabpanel">

                        <p class="small text-uppercase text-gray-light m-b-0 m-t-1"><strong>Weather</strong></p>
                        <!-- START Widget - Weather Current -->
                        <div class="m-t-0 m-b-3">
                            <p class="h1 m-t-0 m-b-0">
                                <span>Tuesday</span>
                            </p>
                            <span class="h4 m-t-0 m-b-0">30 January</span>
                            <p class="m-t-2">Partly cloudy today, temperature minimum 11&#xBA;, maximum 15&#xBA;</p>
                            <a href="../start/weather.html">More Details <i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- END Widget - Weather Current -->

                        <!-- START Widget - Stock -->
                        <table class="table table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th class="small text-gray-light text-uppercase">
                                        <strong>Stock</strong>
                                    </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-gray-darker">DOW J</td>
                                    <td>17 552,89</td>
                                    <td class="text-right"><span class="badge badge-danger badge-outline">-0.29%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-gray-darker">APPL</td>
                                    <td>1 987</td>
                                    <td class="text-right"><span class="badge badge-success badge-outline">+7.10%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-gray-darker">CAC</td>
                                    <td>17 552,89</td>
                                    <td class="text-right"><span class="badge badge-danger badge-outline">-0.29%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-gray-darker">DAX</td>
                                    <td>1 987</td>
                                    <td class="text-right"><span class="badge badge-success badge-outline">+7.10%</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END Widget - Stock -->

                        <!-- START Widget - Emails Today -->
                        <table class="table m-t-2 m-b-3">
                            <thead>
                                <tr>
                                    <th class="small text-gray-light text-uppercase">
                                        <strong>Emails Today </strong>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <a href="../apps/email-details.html">
                                                    <div class="avatar avatar-image"> 
                                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/lososina/128.jpg" alt="Avatar">
                                                        <i class="avatar-status avatar-status-bottom bg-success b-white"></i> 
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="media-body media-auto">
                                                <h5 class="m-b-0">
                                                    <span>Sammy Bogisich</span> 
                                                    <small><span>08:53</span></small>
                                                </h5>
                                                <p class="m-t-0 m-b-0">
                                                    <span>Unde et a voluptatibus unde quas laboriosam.</span>
                                                </p>
                                                <div class="btn-group" role="group">
                                                    <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                        <i class="fa fa-reply text-gray-light"></i>
                                                    </a>
                                                    <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                        <i class="fa fa-archive text-gray-light"></i>
                                                    </a>
                                                    <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                        <i class="fa fa-trash text-gray-light"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <a href="../apps/email-details.html">
                                                    <div class="avatar avatar-image"> 
                                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kiwiupover/128.jpg" alt="Avatar">
                                                        <i class="avatar-status avatar-status-bottom bg-danger b-white"></i> 
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="media-body media-auto">
                                                <h5 class="m-b-0">
                                                    <span>April Cormier</span> 
                                                    <small><span>07:27</span></small>
                                                </h5>
                                                <p class="m-t-0 m-b-0">
                                                    <span>Doloribus quisquam ad repudiandae odio iure distinctio.</span>
                                                </p>
                                                <div class="btn-group" role="group">
                                                    <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                        <i class="fa fa-reply text-gray-light"></i>
                                                    </a>
                                                    <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                        <i class="fa fa-archive text-gray-light"></i>
                                                    </a>
                                                    <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                        <i class="fa fa-trash text-gray-light"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <a href="../apps/email-details.html">
                                                    <div class="avatar avatar-image"> 
                                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/chandlervdw/128.jpg" alt="Avatar">
                                                        <i class="avatar-status avatar-status-bottom bg-warning b-white"></i> 
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="media-body media-auto">
                                                <h5 class="m-b-0">
                                                    <span>Eveline Johnson</span> 
                                                    <small><span>05:01</span></small>
                                                </h5>
                                                <p class="m-t-0 m-b-0">
                                                    <span>Sequi nemo sed et.</span>
                                                </p>
                                                <div class="btn-group" role="group">
                                                    <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                        <i class="fa fa-reply text-gray-light"></i>
                                                    </a>
                                                    <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                        <i class="fa fa-archive text-gray-light"></i>
                                                    </a>
                                                    <a role="button" class="btn btn-link btn-xs" href="../apps/email-details.html">
                                                        <i class="fa fa-trash text-gray-light"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <!-- END Widget - Emails Today -->

                        <!-- START Widget - Tasks -->
                        <table class="table table-condensed m-t-2 m-b-0">

                            <thead>
                                <tr>
                                    <th class="small text-gray-light text-uppercase">
                                        <strong>Tasks</strong>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <a href="../apps/tasks-details.html">
                                                    <span>Try to transmit the HTTP program, maybe it will reboot the neural capacitor!</span>
                                                </a>
                                                <span class="m-t-1 small">
                                                    <br><i class="fa fa-history small"></i> 
                                                    <span>10-Aug-2013, 04:06</span> 
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" checked>
                                                <del> 
                                                    <a href="../apps/tasks-details.html" class="text-gray-light">
                                                        <span>Use the optical AI firewall, then you can override the online driver!</span></a>
                                                </del>
                                                <span class="m-t-1 small">
                                                    <br><i class="fa fa-history small text-gray-light"></i> 
                                                    <span>02-Apr-2014, 04:16</span> 
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="" checked>
                                                <del>
                                                    <a href="../apps/tasks-details.html" class="text-gray-light">
                                                        <span>Use the solid state IB hard drive, then you can reboot the solid state feed!</span>
                                                    </a>
                                                </del>
                                                <span class="m-t-1 small">
                                                    <br><i class="fa fa-history small text-gray-light"></i> 
                                                    <span>22-Apr-2014, 12:31</span> 
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <!-- END Widget - Emails Today -->

                    </div>
                    <!-- END Tab: Calendar -->

                    <!-- START Tab: Statistics -->
                    <div class="tab-pane fade p-r-1" id="tab-statistics" role="tabpanel">

                        <p class="small text-uppercase text-center text-gray-light m-b-0 m-t-1"><strong>Statisticts</strong></p>
                        <!-- START Peity Charts -->
                        <div class="row m-t-3">
                            <div class="col-sm-4">
                                <p class="data-attributes text-center">
                                    <span data-peity="{ &quot;fill&quot;: [&quot;RGBA(86, 161, 245, 1.00)&quot;, &quot;RGBA(86, 161, 245, 0.2)&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }">4/7</span>
                                </p>
                                <h5 class="m-b-0 text-center">CPU
                                </h5>
                                <p class="m-t-0 p-t-0 text-center">76%</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="data-attributes text-center">
                                    <span data-peity="{ &quot;fill&quot;: [&quot;RGBA(70, 197, 152, 1.00)&quot;, &quot;RGBA(70, 197, 152, 0.2)&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }">6/7</span>
                                </p>
                                <h5 class="m-b-0 text-center">Drive
                                </h5>
                                <p class="m-t-0 p-t-0 text-center">98%</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="data-attributes text-center">
                                    <span data-peity="{ &quot;fill&quot;: [&quot;RGBA(248, 93, 76, 1.00)&quot;, &quot;RGBA(248, 93, 76, 0.2)&quot;],  &quot;innerRadius&quot;: 20, &quot;radius&quot;: 28 }">2/7</span>
                                </p>
                                <h5 class="m-b-0 text-center">Memory
                                </h5>
                                <p class="m-t-0 p-t-0 text-center">16%</p>
                            </div>
                        </div>
                        <!-- END Peity Charts -->

                        <!-- START Network -->
                        <p class="small text-center text-gray-light text-uppercase m-t-2">
                            <strong>Network</strong>
                        </p>
                        <p class="text-nowrap text-center m-t-0">
                            <span class="text-gray-darker small">21 KB/s</span> 
                            <i class="fa fa-level-down text-primary m-r-2"></i>
                            <i class="fa fa-level-up text-primary"></i> 
                            <span class="text-gray-darker small">89 KB/s</span>
                        </p>
                        <!-- END Network -->

                        <!-- START Table: System -->
                        <table class="table m-t-2  v-a-m">
                            <thead>
                                <tr>
                                    <th class="small">
                                        <i class="fa text-gray-light fa-database m-r-1"></i>
                                        <span class="text-uppercase text-gray-light">
                                            <strong>system</strong>
                                        </span>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="small v-a-m">
                                    <td> Disabled </td>
                                    <td class="text-right v-a-m text-gray-darker">1:36</td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td> Processing </td>
                                    <td class="text-right v-a-m text-gray-darker">
                                        <span>61476</span>
                                    </td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td> CPU User </td>
                                    <td class="text-right v-a-m text-gray-darker">16%</td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td> CPU System </td>
                                    <td class="text-right v-a-m text-gray-darker">19%</td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td> CPU Free </td>
                                    <td class="text-right v-a-m text-gray-darker">78%</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END Table: System -->
                        <!-- START Table: LAN -->
                        <table class="table v-a-m">
                            <thead>
                                <tr>
                                    <th class="small"><i class="fa fa-wifi text-gray-light m-r-1"></i>
                                        <span class="text-uppercase text-gray-light"><strong>Lan</strong></span></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="small v-a-m">
                                    <td>Wi-Fi</td>
                                    <td class="text-right v-a-m text-gray-darker"><i class="fa fa-fw fa-sort"></i></td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td>IP</td>
                                    <td class="text-right v-a-m text-gray-darker"><samp><span>246.170.114.128</span></samp></td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td>MAC</td>
                                    <td class="text-right v-a-m text-gray-darker"><samp><span>13:5b:bc:22:5d:19</span></samp></td>
                                </tr>
                                <tr class="small v-a-m">
                                    <td>
                                        <i class="fa fa-long-arrow-down"></i>
                                    </td>
                                    <td class="text-right v-a-m text-gray-darker"><span class="m-r-1">483.00  KB/s</span>
                                        <span>729.00 MB</span>
                                    </td>
                                </tr>
                                <tr class=" small v-a-m">
                                    <td>
                                        <i class="fa fa-long-arrow-up text-gray-darker"></i>
                                    </td>
                                    <td class="text-right v-a-m text-gray-darker"><span class="m-r-1">475.00  KB/s</span>
                                        <span>240.00 MB</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END Table: LAN -->
                        <!-- START Widget - Usage -->
                        <ul class="list-group b-a-0 m-t-3">

                            <li class="list-group-item">
                                <i class="fa fa-hdd-o small  m-r-1"></i> 
                                <span class="text-uppercase small m-t-0">
                                    <strong>Macintosh</strong> 
                                    <span class="pull-right text-right text-gray-darker">
                                        <span>41.00</span>
                                    </span>
                                </span>
                                <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                    <div class="progress-bar" role="progressbar" style="width: 60%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <span class="m-t-0">
                                    <span class="text-gray-darker">
                                        <span>574.00 GB</span>
                                    </span>
                                </span>
                                <span class="text-gray-light"> / 845.00 GB</span>
                            </li>

                            <li class="list-group-item">
                                <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-2"><strong>Windows</strong>
                                    <span class="pull-right text-right text-gray-darker"><span>694.00</span></span>
                                </span>
                                <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <span class="m-t-0">
                                    <span class="text-gray-darker">
                                        <span>811.00 GB</span>
                                    </span>
                                </span>
                                <span class="text-gray-light"> / 787.00 GB</span>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-hdd-o small m-r-1"></i> <span class="text-uppercase small m-t-2"><strong>Linux</strong>
                                    <span class="pull-right text-right text-gray-darker"><span>188.00</span></span>
                                </span>
                                <div class="progress b-r-a-0 m-t-1 m-b-1 h-3">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <span class="m-t-0">
                                    <span class="text-gray-darker">
                                        <span>110.00 GB</span>
                                    </span>
                                </span>
                                <span class="text-gray-light"> / 918.00 GB</span>
                            </li>
                        </ul>
                        <!-- END Widget - Usage -->
                    </div>
                    <!-- END Tab: Statisticts -->

                    <!-- START Tab: Users -->
                    <div class="tab-pane fade p-r-1" id="right-sidebar-users" role="tabpanel">
                        <p class="small text-uppercase text-gray-light m-b-2 m-t-1"><strong>Users with Chat</strong></p>
                        <!-- START Search Input -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i></button>
                            </span>
                        </div>
                        <!-- END Search Input -->
                        <!-- DodatkowyContent: data-target-extra-content wskazuje, że ten konkretny div ma być przykrywany przez kontener o id chatpanel -->
                        <div class="m-t-1" data-target-extra-content="chatpanel">


                            <ul class="nav nav-pills nav-stacked">

                                <li role="presentation">
                                    <p class="small text-uppercase text-gray-light m-t-2"><strong>Online (3)</strong></p>
                                </li>

                                <!-- START User Online (Small) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/madysondesigns/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-success b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Maverick Orn</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Future Research Supervisor</span></p>
                                            </div>
                                            <div class="media-right media-middle">
                                                <span class="badge">4</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Small) -->

                                <!-- START User Online (Small) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left  media-middle">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/megdraws/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-success b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Rusty Yundt</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Internal Program Specialist</span></p>
                                            </div>

                                            <div class="media-right  media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Small) -->

                                <!-- START User Online (Small) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left  media-middle">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/leandrovaranda/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-success b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Tyrel Botsford</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Corporate Web Strategist</span></p>
                                            </div>

                                            <div class="media-right media-middle">

                                                <span class="badge bg-danger">13</span>

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Small) -->
                                <li role="presentation">
                                    <p class="small text-uppercase text-gray-light m-t-2"><strong>Busy (3)</strong></p>
                                </li>

                                <!-- START User Online (Busy) -->
                                <li class="collapsed" role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm ">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/gregsqueeb/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-danger b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Clay Feil</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Forward Identity Planner</span></p>
                                            </div>

                                            <div class="media-right  media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Busy) -->

                                <!-- START User Online (Busy) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm ">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mikebeecham/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-danger b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Eino Kuhn</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>National Research Technician</span></p>
                                            </div>

                                            <div class="media-right  media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Busy) -->

                                <!-- START User Online (Busy) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm ">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/juaumlol/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-danger b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Alek Hagenes</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Human Intranet Consultant</span></p>
                                            </div>

                                            <div class="media-right  media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Busy) -->

                                <li role="presentation">
                                    <p class="small text-gray-light text-uppercase m-t-2"><strong>Away (3)</strong></p>
                                </li>

                                <!-- START User Online (Away) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm ">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/andytlaw/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-warning b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Antonina Sanford</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Forward Security Officer</span></p>
                                            </div>

                                            <div class="media-right  media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Away) -->

                                <!-- START User Online (Away) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm ">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/lokesh_coder/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-warning b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Isabel Monahan</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Global Accounts Strategist</span></p>
                                            </div>

                                            <div class="media-right media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Away) -->

                                <!-- START User Online (Away) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm ">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/divya/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-warning b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Breanne Schowalter</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Legacy Research Executive</span></p>
                                            </div>

                                            <div class="media-right  media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Away) -->

                                <li role="presentation">
                                    <p class="small text-gray-light text-uppercase m-t-2"><strong>Offline (3)</strong></p>
                                </li>

                                <!-- START User Online (Away) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm ">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/sbtransparent/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-gray-lighter b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Javon Mayert</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Dynamic Configuration Orchestrator</span></p>
                                            </div>

                                            <div class="media-right  media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Away) -->

                                <!-- START User Online (Away) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm ">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/weglov/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-gray-lighter  b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Wilfrid Bergstrom</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Lead Quality Producer</span></p>
                                            </div>

                                            <div class="media-right  media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Away) -->

                                <!-- START User Online (Away) -->
                                <li role="presentation">
                                    <a href="#" class="extra-content-open">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <div class="avatar avatar-image avatar-sm ">
                                                    <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/daykiine/128.jpg" alt="Avatar">
                                                    <i class="avatar-status avatar-status-bottom  bg-gray-lighter  b-white"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="m-t-0 m-b-0"><span>Hilton Nader</span></h5>
                                                <p class="small text-gray-light m-b-0"><span>Dynamic Configuration Planner</span></p>
                                            </div>

                                            <div class="media-right  media-middle">

                                            </div>

                                        </div>
                                    </a>
                                </li>
                                <!-- START User Online (Away) -->

                            </ul>

                        </div>

                        <!-- START Chat Content (Hide Tab: Users) -->
                        <div class="right-sidebar-extra-content p-r-2" id="chatpanel">

                            <div class="panel panel-default m-t-3">

                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <a class="extra-content-close small" href="javascript:void(0);"><i class="fa fa-fw fa-chevron-left"></i></a>
                                        </div>
                                        <div class="col-xs-6 text-center">
                                            <span>G. Mann</span>
                                        </div>
                                        <div class="col-xs-3 text-right">
                                            <a href="#" class="text-gray-lighter"><i class="fa fa-fw fa-circle text-success"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">

                                    <!-- START Left Chat -->
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/abotap/128.jpg" alt="Avatar">
                                                <i class="avatar-status avatar-status-bottom  bg-warning b-brand-gray-darker"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="panel-default">
                                                <div class="panel-body bg-gray-light text-white b-r-a-3">
                                                    <span>Et est veritatis totam aliquam itaque impedit unde velit nam.</span>
                                                </div>
                                            </div>
                                            <h6 class="m-t-1"><span>Nikita Gislason</span>   <small><span> 03:54</span></small></h6>
                                        </div>
                                    </div>
                                    <!-- END Left Chat -->

                                    <!-- START Right Chat -->
                                    <div class="media m-b-0">
                                        <div class="media-body">
                                            <div class="panel-default">
                                                <div class="panel-body bg-primary text-white b-r-a-3">
                                                    <span>Harum voluptas quasi incidunt animi exercitationem non.</span>
                                                </div>
                                            </div>
                                            <h6 class="m-t-1"><span>Vidal Mohr</span>   <small><span> 02:28</span></small></h6>
                                        </div>
                                        <div class="media-right">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img class="media-object img-circle" alt="Avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/malykhinv/128.jpg">
                                                <i class="avatar-status avatar-status-bottom  bg-danger b-brand-gray-darker"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Right Chat -->

                                    <!-- START Left Chat -->
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/_dwite_/128.jpg" alt="Avatar">
                                                <i class="avatar-status avatar-status-bottom  bg-success b-brand-gray-darker"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="panel-default">
                                                <div class="panel-body bg-gray-light text-white b-r-a-3">
                                                    <span>Vitae laudantium est ipsum eveniet ut. Sed ut magni molestiae architecto ea.</span>
                                                </div>
                                            </div>
                                            <h6 class="m-t-1"><span>Trever Cronin</span>   <small><span>05:21</span></small></h6>
                                        </div>
                                    </div>
                                    <!-- END Left Chat -->

                                    <!-- START Right Chat -->
                                    <div class="media m-b-0">
                                        <div class="media-body">
                                            <div class="panel-default">
                                                <div class="panel-body bg-gray-light text-white b-r-a-3">
                                                    <span>Modi asperiores asperiores ipsa alias.</span>
                                                </div>
                                            </div>
                                            <h6 class="m-t-1"><span>Stanton Hammes</span>   <small><span> 07:21</span></small></h6>
                                        </div>
                                        <div class="media-right">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img class="media-object img-circle" alt="Avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/aaronalfred/128.jpg">
                                                <i class="avatar-status avatar-status-bottom  bg-danger b-brand-gray-darker"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Right Chat -->

                                </div>

                                <!-- START Input Your Message -->
                                <div class="panel-footer">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <i class="fa fa-fw fa-plus"></i>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Your Message...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                                <!-- END Input Your Message -->

                            </div>

                        </div>
                        <!-- END Chat Content (Hide Tab: Users) -->
                    </div>
                    <!-- END Tab: Users -->

                    <!-- START Tab: Settings -->
                    <div class="tab-pane fade p-r-1" id="right-sidebar-settings" role="tabpanel">

                        <p class="text-uppercase small m-t-1 m-b-2"><strong>Settings</strong></p>

                        <div class="row m-b-1">
                            <div class="col-sm-6"><span class="text-gray-darker">Notifications</span></div>
                            <div class="col-sm-6 text-right"> <input type="checkbox" class="js-switch-small" checked></div>
                        </div>
                        <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                        <div class="row m-b-1">
                            <div class="col-sm-6"><span class="text-gray-darker">Activity</span></div>
                            <div class="col-sm-6 text-right"><input type="checkbox" class="js-switch-small-primary" checked></div>
                        </div>
                        <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                        <div class="row m-b-1">
                            <div class="col-sm-6"><span class="text-gray-darker">Statisticts</span></div>
                            <div class="col-sm-6 text-right"><input type="checkbox" class="js-switch-small-warning" checked></div>
                        </div>
                        <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                        <div class="row m-b-1">
                            <div class="col-sm-9"><span class="text-gray-darker">Settings for Responsive</span></div>
                            <div class="col-sm-3 text-right"><input type="checkbox" class="js-switch-small-danger" checked></div>
                        </div>
                        <p class="m-b-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    </div>
                    <!-- END Tab: Settings -->

                    <!-- START Tab: Timeline -->
                    <div class="tab-pane fade p-r-1" id="right-sidebar-timeline" role="tabpanel">

                        <p class="text-uppercase small m-t-1 m-b-2"><strong>Timeline</strong></p>

                        <!-- START Timeline - Active Entry (Day) -->
                        <div class="timeline">
                            <!-- Timeline - Badge Date -->
                            <div class="timeline-date">
                                <span class="badge">Today</span>
                            </div>
                            <div class="timeline-item p-r-1">
                                <!-- Timeline - Mini Icon -->
                                <div class="timeline-icon">
                                    <i class="fa fa-fw fa-times-circle text-danger"></i>
                                </div>

                                <!-- Timeline - Icon  -->
                                <div class="timeline-item-head clearfix m-b-0">
                                    <!-- Timeline - Header & Subtitle -->

                                    <!-- START Avatar, Message & Time -->
                                    <div class="row">

                                        <div class="col-lg-12 m-l-1">

                                            <span class="badge badge-danger badge-outline">Alert</span>
                                            <br>
                                            <p class="text-gray-darker m-t-1"><span>Try to copy the AGP system, maybe it will index the online panel!</span></p>
                                            <p class="text-nowrap small"><span>22-Jul-2016, 03:49</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END Avatar, Message & Time -->

                                </div>
                            </div>
                        </div>
                        <!-- END Timeline - Active Entry (Day) -->

                        <!-- START Timeline - Active Entry -->
                        <div class="timeline">
                            <div class="timeline-item p-r-1">
                                <!-- Timeline - Mini Icon -->
                                <div class="timeline-icon">
                                    <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                </div>

                                <!-- Timeline - Icon  -->
                                <div class="timeline-item-head clearfix m-b-0">
                                    <!-- Timeline - Header & Subtitle -->

                                    <!-- START Avatar, Message & Time -->
                                    <div class="row">

                                        <div class="col-lg-12 m-l-1">

                                            <span class="badge badge-warning badge-outline">Warning</span>
                                            <br>
                                            <p class="text-gray-darker m-t-1"><span>I&apos;ll quantify the redundant SDD monitor, that should port the SMTP sensor!</span></p>
                                            <p class="text-nowrap small"><span>05-Apr-2012, 05:52</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END Avatar, Message & Time -->

                                </div>
                            </div>
                        </div>
                        <!-- END Timeline - Active Entry -->

                        <!-- START Timeline - Active Entry -->
                        <div class="timeline">
                            <div class="timeline-item p-r-1">
                                <!-- Timeline - Mini Icon -->
                                <div class="timeline-icon">
                                    <i class="fa fa-fw fa-info-circle text-info"></i>
                                </div>

                                <!-- Timeline - Icon  -->
                                <div class="timeline-item-head clearfix m-b-0">
                                    <!-- Timeline - Header & Subtitle -->

                                    <!-- START Avatar, Message & Time -->
                                    <div class="row">

                                        <div class="col-lg-12 m-l-1">

                                            <span class="badge badge-info badge-outline">Info</span>
                                            <br>
                                            <p class="text-gray-darker m-t-1">15 Files Uploaded</p>
                                            <p class="text-nowrap small"><span>08-Mar-2012, 02:38</span>
                                            </p>
                                            <i class="m-l-1 fa fa-file-text-o fa-fw"></i> read_me.txt<br>
                                            <i class="m-l-1 fa fa-file-zip-o fa-fw"></i> all-files.zip<br>
                                            <i class="m-l-1 fa fa-file-word-o fa-fw"></i> alice-feedback.doc<br>

                                            <span class="badge m-t-1 m-b-1">+12</span>

                                        </div>
                                    </div>
                                    <!-- END Avatar, Message & Time -->

                                </div>
                            </div>
                        </div>
                        <!-- END Timeline - Active Entry -->

                        <!-- START Timeline - Active Entry -->
                        <div class="timeline">
                            <div class="timeline-item p-r-1">
                                <!-- Timeline - Mini Icon -->
                                <div class="timeline-icon">
                                    <i class="fa fa-fw fa-plus-circle  text-primary"></i>
                                </div>

                                <!-- Timeline - Icon  -->
                                <div class="timeline-item-head clearfix m-b-0">
                                    <!-- Timeline - Header & Subtitle -->

                                    <!-- START Avatar, Message & Time -->
                                    <div class="row">

                                        <div class="col-lg-12 m-l-1">

                                            <span class="badge badge-primary badge-outline">Message</span>
                                            <br>
                                            <p class="text-gray-darker m-t-1">6 users have been accepted by the Admin</p>
                                            <p class="text-nowrap small"><span>17-Jun-2016, 09:43</span>
                                            </p>
                                            <div class="m-b-1">
                                                <div class="avatar avatar-image avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                    <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/bryan_topham/128.jpg" alt="Avatar">
                                                </div>
                                                <div class="avatar avatar-image avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                    <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/ryanjohnson_me/128.jpg" alt="Avatar">
                                                </div>
                                                <div class="avatar avatar-image  avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                    <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/slowspock/128.jpg" alt="Avatar">
                                                </div>
                                                <div class="avatar avatar-image  avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                    <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/thaodang17/128.jpg" alt="Avatar">
                                                </div>
                                                <div class="avatar avatar-image  avatar-sm visible-lg-inline-block visible-md-inline-block visible-sm-inline-block visible-xs-inline-block">
                                                    <img class="img-circle avatar avatar-sm" src="https://s3.amazonaws.com/uifaces/faces/twitter/gonzalorobaina/128.jpg" alt="Avatar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Avatar, Message & Time -->

                                </div>
                            </div>
                        </div>
                        <!-- END Timeline - Active Entry -->

                        <!-- START Timeline - Active Entry (Day) -->
                        <div class="timeline">
                            <!-- Timeline - Badge Date -->
                            <div class="timeline-date">
                                <span class="badge">Yesterday</span>
                            </div>
                            <div class="timeline-item p-r-1">
                                <!-- Timeline - Mini Icon -->
                                <div class="timeline-icon">
                                    <i class="fa fa-fw fa-check-circle text-success"></i>
                                </div>

                                <!-- Timeline - Icon  -->
                                <div class="timeline-item-head clearfix m-b-0">
                                    <!-- Timeline - Header & Subtitle -->

                                    <!-- START Avatar, Message & Time -->
                                    <div class="row">

                                        <div class="col-lg-12 m-l-1">

                                            <span class="badge badge-success badge-outline">Success</span>
                                            <br>
                                            <p class="text-gray-darker m-t-1"><span>Try to index the XML capacitor, maybe it will synthesize the haptic array!</span></p>
                                            <p class="text-nowrap small"><span>22-Apr-2012, 03:18</span>
                                            </p>

                                            <p><span>Earum mollitia perspiciatis voluptatum cum et nam quisquam quia.</span></p>
                                        </div>
                                    </div>
                                    <!-- END Avatar, Message & Time -->

                                </div>
                            </div>
                        </div>
                        <!-- END Timeline - Active Entry (Day) -->

                        <!-- START Timeline - Active Entry -->
                        <div class="timeline">

                            <div class="timeline-item p-r-1">
                                <!-- Timeline - Mini Icon -->
                                <div class="timeline-icon">
                                    <i class="fa fa-fw fa-circle text-gray"></i>
                                </div>

                                <!-- Timeline - Icon  -->
                                <div class="timeline-item-head clearfix m-b-0">
                                    <!-- Timeline - Header & Subtitle -->

                                    <!-- START Avatar, Message & Time -->
                                    <div class="row">

                                        <div class="col-lg-12 m-l-1">

                                            <span class="badge badge-gray badge-outline">Obsolete</span>
                                            <br>
                                            <del><p class="m-t-1"><span>If we back up the program, we can get to the THX application through the primary THX firewall!</span></p></del>
                                            <p class="text-nowrap small"><span>21-Nov-2015, 03:14</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- END Avatar, Message & Time -->

                                </div>
                            </div>
                        </div>
                        <!-- END Timeline - Active Entry  -->
                    </div>
                    <!-- END Tab: Timeline -->
                </div>
                <!-- END Tabs All Content -->
            </div>
        </div>
    </div>
    <!-- START Content Show in Full-Height -->
    <div class="right-sidebar-extra-content" id="chatpanel2">
        <a href="#" class="extra-content-close">Back</a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ipsa, rem. Accusantium autem blanditiis dolor ducimus earum eius eligendi, eos est exercitationem id illo in mollitia neque optio pariatur placeat quisquam recusandae reiciendis repellat reprehenderit. Amet at deleniti dicta distinctio dolorem eveniet hic id, iusto magnam maxime modi officiis perspiciatis porro praesentium quas, recusandae repudiandae rerum tempora totam unde velit voluptate, voluptatem. Alias consequatur consequuntur et nisi quibusdam quo quos ut. Asperiores commodi deserunt dicta dolor eligendi ex fugit, harum itaque laborum maiores mollitia nam nihil obcaecati officiis quae quis repellendus tenetur voluptate. Eos ratione saepe voluptatibus? Animi, illo magni!</p>
    </div>
    <!-- END Content Show in Full-Height -->
</div>