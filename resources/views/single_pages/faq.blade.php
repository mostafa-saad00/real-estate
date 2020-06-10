@extends('layouts.master')

@section('title', 'FAQ')
@section('content')


    <!--Breadcrumb section starts-->
    <div class="breadcrumb-section bg-h" style="background-image: url(images/logo.png)">
        <div class="overlay op-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="breadcrumb-menu">
                        <h2>FAQ</h2>
                        <span><a href="{{ url('/') }}">Home</a></span>
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section ends-->
    <!--FAQ Section starts-->
    <div class="list-details-section faq-section pt-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="list-menu" class="list_menu faq-menu">
                        <ul class="list-details-tab fixed_nav">
                            <li class="nav-item active"><a href="#buy" class="active">Buy</a></li>
                            <li class="nav-item"><a href="#rent">Rent</a></li>
                            <li class="nav-item"><a href="#mortgage">Mortgage</a></li>
                            <li class="nav-item"><a href="#terms_conditions">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!--Listing Details starts-->
                    <div class="list-details-wrap">
                        <div id="buy" class="list-details-section">
                            <h4>Buy A property</h4>
                            <div id="accordion1" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="heading_Two">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            consectetur adipisicing elit. Earum, eius ?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_Two">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="heading_Three">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Labore omnis unde in dicta neque eligendi ?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_Three">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="heading_Four">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Lorem consectetur adipisicing elit Dolore veniam ?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_Four">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="rent" class="list-details-section">
                            <h4>Rent a Property</h4>
                            <div id="accordion2" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="head_1">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_1" aria-expanded="false" aria-controls="collapseOne">
                                            Iusto aperiam esse quasi eum quod?
                                        </a>
                                    </div>
                                    <div id="collapse_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head_1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="head_2">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2" aria-expanded="false" aria-controls="collapseTwo">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head_2">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="head_3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_3" aria-expanded="false" aria-controls="collapseThree">
                                            Consectetur adipisicing elit Totam quisquam?
                                        </a>
                                    </div>
                                    <div id="collapse_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head_3">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="head_4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" aria-expanded="false" aria-controls="collapse_4">
                                            Molestias incidunt pariatur modi enim.
                                        </a>
                                    </div>
                                    <div id="collapse_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head_4">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="mortgage" class="list-details-section">
                            <h4>Mortgage a Property</h4>
                            <div id="accordion3" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="heading_One">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_5" aria-expanded="false" aria-controls="collapseOne">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapse_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_One">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_6" aria-expanded="false" aria-controls="collapseTwo">
                                            consectetur adipisicing elit. Earum, eius ?
                                        </a>
                                    </div>
                                    <div id="collapse_6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="heading_3">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_7" aria-expanded="false" aria-controls="collapseThree">
                                            Labore omnis unde in dicta neque eligendi ?
                                        </a>
                                    </div>
                                    <div id="collapse_7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_3">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse_8" aria-expanded="false" aria-controls="collapseFour">
                                            Lorem consectetur adipisicing elit Dolore veniam ?
                                        </a>
                                    </div>
                                    <div id="collapse_8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="general" class="list-details-section">
                            <h4>Terms &amp; Conditions</h4>
                            <div id="accordion5" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="heading_2">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse_14" aria-expanded="false" aria-controls="collapseTwo">
                                            Voluptates accusamus officia laudantium ullam ad id?
                                        </a>
                                    </div>
                                    <div id="collapse_14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_2">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse_15" aria-expanded="false" aria-controls="collapseThree">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapse_15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="heading_4">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse_16" aria-expanded="false" aria-controls="collapseFour">
                                            Molestias incidunt pariatur modi enim.
                                        </a>
                                    </div>
                                    <div id="collapse_16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_4">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget leo massa. Mauris sed enim ac orci semper consequat sed vel ipsum. Nulla mauris arcu, malesuada sollicitudin condimentum vitae, porta quis est
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FAQ Section starts-->
                </div>
            </div>
        </div>
    </div>
    <!--FAQ Section ends-->
    <!-- Scroll to top starts-->
    <span class="scrolltotop"><i class="lnr lnr-arrow-up"></i></span>
    <!-- Scroll to top ends-->
</div>
<!--Page Wrapper ends-->


@endsection