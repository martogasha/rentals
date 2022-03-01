<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/rentup-live/rentup/my-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Feb 2022 10:21:13 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RentUP - Residence & Real Estate Template</title>

    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

</head>

<body class="yellow-skin">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader"></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="#">
                        <img src="assets/img/logo.png" class="logo" alt="" />
                    </a>
                    <div class="nav-toggle"></div>
                    <div class="mobile_nav">
                        <ul>
                            <li class="_my_prt_list"><a href="#"><span>2</span>My List</a></li>
                            <li><a href="submit-property.html" class="add_prt"><i class="fas fa-plus-circle"></i></a></li>
                            <li>
                                <div class="btn-group account-drop p-0">
                                    <button type="button" class="btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/img/user-5.jpg" class="avater-img" alt="">
                                    </button>
                                    <div class="dropdown-menu pull-right animated flipInX">
                                        <div class="drp_menu_headr">
                                            <h4>Hi, Daniel</h4>
                                        </div>
                                        <ul>
                                            <li><a href="{{url('admin')}}"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>
                                            <li><a href="{{url('profile')}}"><i class="fa fa-user-tie"></i>My Profile</a></li>
                                            <li><a href="{{url('message')}}"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper">
                    <ul class="nav-menu">

                        <li><a href="{{url('admin')}}">Dashboard<span class="submenu-indicator"></span></a>
                        </li>

                        <li class="active"><a href="{{url('property')}}">Manage Property<span class="submenu-indicator"></span></a>
                        </li>
                        <li><a href="{{url('orders')}}">Orders<span class="submenu-indicator"></span></a>
                        </li>

                    </ul>
                    <ul class="nav-menu nav-menu-social align-to-right dhsbrd">

                        <li>
                            <div class="btn-group account-drop">
                                <button type="button" class="btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/img/user-5.jpg" class="avater-img" alt="">
                                </button>
                                <div class="dropdown-menu pull-right animated flipInX">
                                    <div class="drp_menu_headr">
                                        <h4>Hi, Daniel</h4>
                                    </div>
                                    <ul>
                                        <li><a href="{{url('admin')}}"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>
                                        <li><a href="{{url('profile')}}"><i class="fa fa-user-tie"></i>My Profile</a></li>
                                        <li><a href="{{url('message')}}"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="add-listing">
                            <a href="submit-property.html"  class="theme-cl">
                                <i class="fas fa-plus-circle mr-1"></i>Add Property
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Page Title Start================================== -->

    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ User Dashboard ================================== -->
    <section class="gray pt-5 pb-5">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="property_dashboard_navbar">

                     @include('admin.credentials')

                        <div class="dash_user_menues">
                            <ul>
                                <ul>
                                    <li><a href="{{url('admin')}}"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>
                                    <li><a href="{{url('orders')}}"><i class="fa fa-cart-plus"></i>Orders<span class="notti_coun style-1">4</span></a></li>
                                    <li class="active"><a href="{{url('property')}}"><i class="fa fa-tasks"></i>My Properties</a></li>
                                    <li><a href="{{url('messages')}}"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
                                </ul>
                            </ul>
                        </div>

                        <div class="dash_user_footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-power-off"></i></a></li>
                                <li><a href="#"><i class="fa fa-comment"></i></a></li>
                                <li><a href="#"><i class="fa fa-cog"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-12">
                    <h4>4 Bhk Luxury Villa</h4>
                    <div class="dashboard-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <p class="card-text">TOTAL MONTHLY</p>
                                            <h2 class="card-title">1051111</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <p class="card-text">BALANCE MONTHLY</p>
                                            <h2 class="card-title"><b style="color: red">1051111</b></h2>
                                        </div>
                                    </div>
                                </div><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <h2 class="card-title"><b style="font-size: 15px;color: green">Total Houses</b>110</h2>
                                            <h2 class="card-title"><b style="font-size: 15px;color: blue">Vacant Houses</b>11</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="/action_page.php">
                            <label for="birthday">From:</label>
                            <input type="date" id="birthday" name="birthday">
                            <label for="birthday">To:</label>
                            <input type="date" id="birthday" name="birthday">
                            <input type="submit" value="Submit">
                        </form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="_prt_filt_dash">
                                    <div class="_prt_filt_dash_flex">
                                        <div class="foot-news-last">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append">
                                                    <span type="button" class="input-group-text theme-bg b-0 text-light"><i class="fas fa-search"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_prt_filt_dash_last m2_hide">
                                        <div class="_prt_filt_add_new">
                                            <a href="{{'addTenant'}}" class="prt_submit_link"><i class="fas fa-plus-circle"></i><span class="d-none d-lg-block d-md-block">New Tenant</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="dashboard_property">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">House No</th>
                                                <th scope="col" class="m2_hide">Tenant</th>
                                                <th scope="col" class="m2_hide">Rent</th>
                                                <th scope="col" class="m2_hide">Balance</th>
                                                <th scope="col">Due Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_caption">
                                                            <h5>A1</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">Maxmillan Ndegwa Kibe</h5></div>

                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up">50000</h5></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up" style="color: red">20000</h5></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_view_title"><span>12/02/2022</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-eye"></i></a>
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->


                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ User Dashboard End ================================== -->

    <!-- ============================ Call To Action ================================== -->
    <section class="theme-bg call_action_wrap-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="call_action_wrap">
                        <div class="call_action_wrap-head">
                            <h3>Do You Have Questions ?</h3>
                            <span>We'll help you to grow your career and growth.</span>
                        </div>
                        <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer style-2">
        <div class="footer-middle">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-5">
                        <div class="footer_widget">
                            <img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" />
                            <h4 class="extream mb-3">Do you need help with<br>anything?</h4>
                            <p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every month</p>
                            <div class="foot-news-last">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <div class="input-group-append">
                                        <button type="button" class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 ml-auto">
                        <div class="row">

                            <div class="col-lg-4 col-md-4">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Layouts</h4>
                                    <ul class="footer-menu">
                                        <li><a href="#">Home Page</a></li>
                                        <li><a href="#">About Page</a></li>
                                        <li><a href="#">Service Page</a></li>
                                        <li><a href="#">Property Page</a></li>
                                        <li><a href="#">Contact Page</a></li>
                                        <li><a href="#">Single Blog</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="footer_widget">
                                    <h4 class="widget_title">All Sections</h4>
                                    <ul class="footer-menu">
                                        <li><a href="#">Headers<span class="new">New</span></a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Attractive<span class="new">New</span></a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Videos</a></li>
                                        <li><a href="#">Footers</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Company</h4>
                                    <ul class="footer-menu">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Changelog<span class="update">Update</span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mb-0">© 2021 RentUP. Designd By <a href="https://themezhub.com/">ThemezHub</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-xl login-pop-form" role="document">
            <div class="modal-content overli" id="registermodal">
                <div class="modal-body p-0">
                    <div class="resp_log_wrap">
                        <div class="resp_log_thumb" style="background:url(assets/img/log.jpg)no-repeat;"></div>
                        <div class="resp_log_caption">
                            <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                            <div class="edlio_152">
                                <ul class="nav nav-pills tabs_system center" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false"><i class="fas fa-user-plus mr-2"></i>Register</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                    <div class="login-form">
                                        <form>

                                            <div class="form-group">
                                                <label>User Name</label>
                                                <div class="input-with-icon">
                                                    <input type="text" class="form-control">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <div class="input-with-icon">
                                                    <input type="password" class="form-control">
                                                    <i class="ti-unlock"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="eltio_ol9">
                                                    <div class="eltio_k1">
                                                        <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                                        <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                                    </div>
                                                    <div class="eltio_k2">
                                                        <a href="#">Lost Your Password?</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md full-width pop-login">Login</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                                    <div class="login-form">
                                        <form>

                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <div class="input-with-icon">
                                                    <input type="text" class="form-control">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <div class="input-with-icon">
                                                    <input type="email" class="form-control">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <div class="input-with-icon">
                                                    <input type="password" class="form-control">
                                                    <i class="ti-unlock"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="eltio_ol9">
                                                    <div class="eltio_k1">
                                                        <input id="dds" class="checkbox-custom" name="dds" type="checkbox">
                                                        <label for="dds" class="checkbox-custom-label">By using the website, you accept the terms and conditions</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md full-width pop-login">Register</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ion.rangeSlider.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/slider-bg.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/daterangepicker.js"></script>
<script src="assets/js/custom.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>

<!-- Mirrored from themezhub.net/rentup-live/rentup/my-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Feb 2022 10:21:13 GMT -->
</html>
