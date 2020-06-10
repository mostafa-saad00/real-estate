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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style type="text/css">
        .preview-images-zone {
            width: 100%;
            border: 1px solid #ddd;
            min-height: 180px;
            /* display: flex; */
            padding: 5px 5px 0px 5px;
            position: relative;
            overflow:auto;
        }
        .preview-images-zone > .preview-image:first-child {
            height: 185px;
            width: 185px;
            position: relative;
            margin-right: 5px;
        }
        .preview-images-zone > .preview-image {
            height: 90px;
            width: 90px;
            position: relative;
            margin-right: 5px;
            float: left;
            margin-bottom: 5px;
        }
        .preview-images-zone > .preview-image > .image-zone {
            width: 100%;
            height: 100%;
        }
        .preview-images-zone > .preview-image > .image-zone > img {
            width: 100%;
            height: 100%;
        }
        .preview-images-zone > .preview-image > .tools-edit-image {
            position: absolute;
            z-index: 100;
            color: #fff;
            bottom: 0;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
            display: none;
        }
        .preview-images-zone > .preview-image > .image-cancel {
            font-size: 18px;
            position: absolute;
            top: 0;
            right: 0;
            font-weight: bold;
            margin-right: 10px;
            cursor: pointer;
            display: none;
            z-index: 100;
        }
        .preview-image:hover > .image-zone {
            cursor: move;
            opacity: .5;
        }
        .preview-image:hover > .tools-edit-image,
        .preview-image:hover > .image-cancel {
            display: block;
        }
        .ui-sortable-helper {
            width: 90px !important;
            height: 90px !important;
        }
        .router-link-active{
            background-color: white
        }


    </style>

    <!-- Document Title -->
    <title>@yield('title')</title>
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


                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="ion-social-buffer-outline"></i>My Properties
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="db-my-listing.html">Active</a>
                                    <span class="inbox-num active">4</span>
                                </li>
                                <li>
                                    <a href="db-my-listing.html">Pending</a>
                                    <span class="inbox-num pending">1</span>
                                </li>
                            </ul>
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



                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="myFunction()">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>

                <script>
                function myFunction() {
                  $("#exampleModal").modal('hide');
                }
                </script>

                <!--Dashboard content starts-->
                <div class="dash-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <form method="POST" action="add-realestates" enctype="multipart/form-data" >
                                    {{ csrf_field() }}

                                <div class="db-add-list-wrap">
                                    <div class="act-title">
                                        <h5>General Information :</h5>
                                    </div>
                                    <div class="db-add-listing">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Property Title ( English )</label>
                                                    <input type="text" name="en_title" class="form-control filter-input" placeholder="Add The Property title here ...">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Property Title ( Arabic )</label>
                                                    <input type="text" name="ar_title" class="form-control filter-input" placeholder="Add The Property title here ...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Select Property Status </label>
                                                    <select name="buyorrent" class="listing-input hero__form-input  custom-select">
                                                        <option>For Sale</option>
                                                        <option>For Rent</option>
                                                    </select>                                
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Select City</label>
                                                <select name="city" class="listing-input hero__form-input  custom-select">
                                                    <option>Cairo</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Select Area</label>
                                                <select name="area" class="listing-input hero__form-input  custom-select">
                                                    <option>Tagamoaa Al Khames</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Select Property Type</label>
                                                <select class="listing-input hero__form-input  custom-select" name="type">
                                                    <option>Apartment</option>
                                                    <option>Villa</option>
                                                    <option>Townhouse</option>
                                                    <option>penthouse</option>
                                                    <option>Compound</option>
                                                    <option>Chalet</option>
                                                    <option>Twin house</option>
                                                    <option>Duplex</option>
                                                    <option>Full floor</option>
                                                    <option>Half floor</option>
                                                    <option>Whole Building</option>
                                                    <option>Land</option>
                                                    <option>Bulk sale unit</option>
                                                    <option>Bungalow</option>
                                                    <option>Hotel Apartment</option>
                                                    <option>iVilla</option>
                                                </select>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Property Price</label>
                                                    <input type="text" name="price" class="form-control filter-input" placeholder="$$$$$">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="list_info">Description ( English )</label>
                                                    <textarea class="form-control" name="en_desc"  rows="4" placeholder="Enter Description here"></textarea>
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label for="list_info">Description ( Arabic )</label>
                                                    <textarea class="form-control" name="ar_desc"  rows="4" placeholder="Enter Description here"></textarea>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="db-add-list-wrap">
                                    <div class="act-title">
                                        <h5>Gallery :</h5>
                                    </div>
                                    <div class="db-add-listing">
                                        <div class="row">
                                            <div class="col-md-12 mb-5">
                                                <div class="form-group">
                                                    <fieldset class="form-group">

                                                        <input type="file" name="file[]" class="form-control-file" id="pro-image"  multiple placeholder="upload photos">

                                                    </fieldset>
                                                    <div class="preview-images-zone">

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>




                                <div class="db-add-list-wrap">
                                    <div class="act-title">
                                        <h5>Property Details :</h5>
                                    </div>
                                    <div class="db-add-listing">
                                        <div class="row mb-30">
                                            <div class="col-md-4">
                                                <label>Property ID</label>
                                                <input type="text" name="property_id" class="form-control filter-input" placeholder="ZOAC25">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Number of Bedrooms</label>
                                                    <select name="bedrooms" class="listing-input hero__form-input  custom-select">
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Number of Bathrooms</label>
                                                    <select name="bathrooms" class="listing-input hero__form-input  custom-select">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Number of Garages</label>
                                                    <select name="parking" class="listing-input hero__form-input  custom-select">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Total Area</label>
                                                    <input type="text" name="total_area" class="form-control filter-input" placeholder="Total area">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Property</button>
                               

                                </form>



                            </div>
                        </div>
                    </div>
                </div>
                <!--Dashboard content ends-->



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


        </div>
                <!--Dashboard content Wrapper ends-->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    
    <!-- Plugin JS-->
    
    <!--Perfect Scrollbar JS-->
    <script src="js/perfect-scrollbar.min.js"></script>
    <!-- Chart JS -->
    <script src='js/chart.js'></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- Dashboard JS-->
    <script src="js/dashboard.js"></script>

    

    <script type="text/javascript">
        $(document).ready(function() {
            document.getElementById('pro-image').addEventListener('change', readImage, false);
            
            $( ".preview-images-zone" ).sortable();
            
            $(document).on('click', '.image-cancel', function() {
                let no = $(this).data('no');
                $(".preview-image.preview-show-"+no).remove();
            });
        });



        var num = 4;
        function readImage() {
            if (window.File && window.FileList && window.FileReader) {
                var files = event.target.files; //FileList object
                var output = $(".preview-images-zone");
                

                for (let i = 0; i < files.length; i++) {
                    var file = files[i];
                    if (!file.type.match('image')) continue;
                    
                    var picReader = new FileReader();
                    
                    picReader.addEventListener('load', function (event) {
                        var picFile = event.target;
                        var html =  '<div class="preview-image preview-show-' + num + '">' +
                                    '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                                    '</div>';

                        output.append(html);
                        num = num + 1;
                    });

                    picReader.readAsDataURL(file);
                }
                
            } else {
                console.log('Browser not support');
            }
        }


    </script>
   
</body>

</html>