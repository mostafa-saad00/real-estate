<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Links -->
    <link rel="icon" type="image/png" href="#" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="css/plugin.css" rel="stylesheet" />
    <!-- Perfect scrollbar CSS-->
    <link href="css/perfect-scrollbar.css" rel="stylesheet">
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Dashboard CSS -->
    <link href="css/dashboard.css" rel="stylesheet" />

    <style type="text/css">
        .router-link-active{
            background-color: white
        }
    </style>
    <!-- Document Title -->
    <title>DashBoard</title>
</head>

<body>

    <div class="page-wrapper" id="app">
        <!--Sidebar Menu Starts-->
        <aside class="menu-sidebar js-right-sidebar d-block">
            <div class="logo">
                <a href="#">
                    <img src="images/Sweet_Home_Logo.png" alt="SarchHolm" />
                </a>
            </div>


            <div class="menu-sidebar__content js-scrollbar2">
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                                <router-link to="/dashboard">
                                    <i class="ion-ios-gear-outline"></i>Dashboard
                                </router-link>
                            
                        </li>

                        <li>
                            <router-link to="/message">
                                <i class="ion-ios-email-outline"></i>Messages</router-link>
                            <span class="inbox-num pending">3</span>
                        </li>
                        <li>
                            <router-link to="/properties">
                                <i class="ion-ios-home"></i>My Properties</router-link>
                            
                        </li>


                        <li>
                            <router-link to="/bookingrequest">
                                <i class="ion-ios-copy-outline"></i>Booking Request</router-link>
                        </li>

                        <li>
                            <router-link to="/profile">
                                <i class="ion-ios-person-outline"></i>My profile</router-link>
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cog"></i>Mangments
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>

                                    <router-link to="add_user"><i class="fas fa-user-plus"></i>Add Users</router-link>
                                    <router-link to="add-property"><i class="ion-ios-plus-outline"></i>Add Property</router-link>
                                    
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="{{ url('/add_property') }}">
                                <i class="ion-ios-plus-outline"></i>Add Property</a>
                        </li>


                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="ion-ios-upload-outline"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!--Sidebar Menu ends-->
        <!--Dashboard content Wrapper starts-->
        <div class="dash-content-wrap">
            <!-- Top header starts-->
            <header class="db-top-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-9 col-sm-6 col-4">
                            <div class="site-navbar-wrap v2 style2">
                                <div class="site-navbar">
                                    <nav class="site-navigation">
                                        <div class="container">
                                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                                <li class="has-children">
                                                    <a href="#">Home</a>
                                                    <ul class="dropdown">
                                                        <li><a href="home-v1.html">Home Hero</a></li>
                                                        <li><a href="home-v2.html">Home Tab</a></li>
                                                        <li><a href="home-v3.html">Home Video</a></li>
                                                        <li><a href="home-v4.html">Home parallax</a></li>
                                                        <li><a href="home-v5.html">Home Slider</a></li>
                                                        <li><a href="home-v6.html">Home Map</a></li>
                                                        <li><a href="single-agency-home.html">Home Single Property</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">Listings</a>
                                                    <ul class="dropdown">
                                                        <li class="has-children">
                                                            <a href="#">List Layout</a>
                                                            <ul class="dropdown sub-menu">
                                                                <li><a href="list-fullwidth.html">Full Width</a></li>
                                                                <li><a href="list-fullwidth-map.html">Fullwidth with google map</a></li>
                                                                <li><a href="list-fullwidth-leaflet-map.html">Fullwidth with Leaflet map</a></li>
                                                                <li><a href="list-left-sidebar.html">Left Sidebar</a></li>
                                                                <li><a href="list-right-sidebar.html">Right Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Grid Layout</a>
                                                            <ul class="dropdown sub-menu">
                                                                <li><a href="grid-fullwidth.html">Full Width</a></li>
                                                                <li><a href="grid-fullwidth-map.html">Fullwidth with google map</a></li>
                                                                <li><a href="grid-fullwidth-leaflet-map.html">Fullwidth with leaflet map</a></li>
                                                                <li><a href="grid-two-column.html">Grid two column</a></li>
                                                                <li><a href="grid-left-sidebar.html">Left Sidebar</a></li>
                                                                <li><a href="grid-right-sidebar.html">Right Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Map Layout - google</a>
                                                            <ul class="dropdown sub-menu">
                                                                <li><a href="list-left-sidemap.html">List Left sidemap</a></li>
                                                                <li><a href="list-right-sidemap.html">List Right sidemap</a></li>
                                                                <li><a href="grid-left-sidemap.html">Grid Left sidemap</a></li>
                                                                <li><a href="grid-right-sidemap.html">Grid Right sidemap</a></li>
                                                                <li><a href="grid-search-half-map.html">advanced search</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Tab Layout</a>
                                                            <ul class="dropdown sub-menu">
                                                                <li><a href="tab-fullwidth.html">Tab fullwidth</a></li>
                                                                <li><a href="tab-left-sidebar.html">Tab left sidebar</a></li>
                                                                <li><a href="tab-right-sidebar.html">Tab right sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Map Layout - Leaflet</a>
                                                            <ul class="dropdown sub-menu">
                                                                <li><a href="list-left-leaflet-sidemap.html">List Left sidemap</a></li>
                                                                <li><a href="list-right-leaflet-sidemap.html">List Right sidemap</a></li>
                                                                <li><a href="grid-left-leaflet-sidemap.html">Grid Left sidemap</a></li>
                                                                <li><a href="grid-right-leaflet-sidemap.html">Grid Right sidemap</a></li>
                                                                <li><a href="grid-search-half-leafletmap.html">advanced search</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">Property</a>
                                                    <ul class="dropdown sub-menu">
                                                        <li><a href="single-listing-one.html">Single Property Hero Header </a></li>
                                                        <li><a href="single-listing-two.html">Single Property Video Header </a></li>
                                                        <li><a href="single-listing-three.html">Single Property Parallax Header </a></li>
                                                        <li><a href="single-listing-four.html">Single Property Slider Heade v1 </a></li>
                                                        <li><a href="single-listing-five.html">Single Property Slider Header v2 </a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">Pages</a>
                                                    <ul class="dropdown">
                                                        <li class="has-children">
                                                            <a href="#">Agents</a>
                                                            <ul class="dropdown sub-menu">
                                                                <li><a href="agent-list.html">Agents-List</a>
                                                                </li>
                                                                <li><a href="agent-grid.html">Agents-Grid</a>
                                                                </li>
                                                                <li><a href="single-agent.html">Agent-Profile</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="db.html">Dashboard</a></li>
                                                    <li><a href="about.html">About us</a></li>
                                                        <li><a href="contact.html">Contact us</a></li>
                                                    <li><a href="membership-package.html">Membership Packages</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="404-page.html">404 error</a></li>
                                                        <li><a href="add-listing.html">Add Listing</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">News</a>
                                                    <ul class="dropdown">
                                                        <li><a href="news-left-sidebar.html">News Left sidebar</a></li>
                                                        <li><a href="news-right-sidebar.html">News right sidebar</a></li>
                                                        <li><a href="news-without-sidebar.html">News without sidebar</a></li>
                                                        <li><a href="single-news-one.html">Single News one</a></li>
                                                        <li><a href="single-news-two.html">Single News two</a></li>
                                                        <li><a href="single-news-three.html">Single News three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                    <div class="d-lg-none sm-right">
                                        <a href="#" class="mobile-bar js-menu-toggle">
                                            <span class="lnr lnr-menu"></span>
                                        </a>
                                    </div>
                                    <!--mobile-menu starts -->
                                    <div class="site-mobile-menu">
                                        <div class="site-mobile-menu-header">
                                            <div class="site-mobile-menu-close  js-menu-toggle">
                                                <span class="lnr lnr-cross"></span> </div>
                                        </div>
                                        <div class="site-mobile-menu-body"></div>
                                    </div>
                                    <!--mobile-menu ends-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-8">
                            <div class="header-button">
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="ion-ios-bell-outline"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__item">
                                            <div class="content">
                                                <p>Your Property <b>Villa On Hartford</b> has been approved!</p>
                                                <span class="date">5 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="content">
                                                <p>You have 3 unread Messages</p>
                                                <span class="date">5 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notify-bottom text-center py-20">
                                            <a href="#">View All Notification</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item js-sidebar-btn">
                                    <img src="images/dashboard/agent_db_1.jpg" alt="...">
                                    <span>{{ Auth::user()->name }} <i class="ion-arrow-down-b"></i></span>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="db-my-profile.html">
                                                Profile</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="db-my-profile.html">
                                                Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Top header ends-->

            <div id="test">
                @yield('content')
            </div>


            <!--Dashboard footer starts-->
            <div class="dash-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>© 2019 SarchHolm . All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Dashboard footer ends-->
        </div>
        <!--Dashboard content Wrapper ends-->
    </div>










    <script src="{{ asset('js/app.js') }}"></script>
    <script src="js/plugin.js"></script>
    <!--Perfect Scrollbar JS-->
    <script src="js/perfect-scrollbar.min.js"></script>
    <!-- Chart JS -->
    <script src='js/chart.js'></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- Dashboard JS-->
    <script src="js/dashboard.js"></script>
    

    @yield('javascript')
</body>

</html>