
    <!DOCTYPE html>
    <!-- html -->
    <html>
    <!-- head -->
    <head>
    <title>Burmese Power:: LoginSingup</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
    <link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <!--meta data-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Online Recharge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//meta data-->
    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- /online fonts -->

    </head>
    <!-- //head -->
    <!-- body -->
    <body >
    <!--header-->
    <header>
        <div class="container">
            <!--logo-->
                <div class="logo">
                    <h1><a href="index.html">BURMESE POWER</a></h1>
                </div>
            <!--//logo-->
              <div class="w3layouts-login">
                    <a data-toggle="modal" data-target="#myModal" href="#"><i class="glyphicon glyphicon-user"> </i>Login/Register</a>
                </div>
                    <div class="clearfix"></div>
        <!--Login modal-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;</button>
                            <h4 class="modal-title" id="myModalLabel">
                                BURMESE POWER</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-8 extra-w3layouts" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#Login" data-toggle="tab">Register</a></li>

                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="Login">
                                                <form  class="form-horizontal" action="loginSignup" method="post">
                                                        <div class="form-group">
                                                            <label for="email" class="col-sm-2 control-label">
                                                                Name</label>
                                                            <div class="col-sm-10">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                                        <select class="form-control">
                                                                            <option>Mr.</option>
                                                                            <option>Ms.</option>
                                                                            <option>Mrs.</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                                                        <input type="text" class="form-control" placeholder="Name" name="name" required="required" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email" class="col-sm-2 control-label">
                                                                Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" name="email"  placeholder="Email" required="required" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mobile" class="col-sm-2 control-label">
                                                                Mobile</label>
                                                            <div class="col-sm-10">
                                                                <input type="tel" class="form-control" name="phone"  placeholder="Mobile" required="required" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="mobile" class="col-sm-2 control-label">
                                                                    NRC</label>
                                                                <div class="col-sm-10">
                                                                    <input type="tel" class="form-control" name="nrc"  placeholder="address" required="required" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label for="mobile" class="col-sm-2 control-label">
                                                                        Address</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="tel" class="form-control" name="address" placeholder="address" required="required" />
                                                                    </div>
                                                                </div>
                                                        <div class="form-group">
                                                            <label for="password" class="col-sm-2 control-label">
                                                                Password</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control" name="password" placeholder="Password" required="required" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-2">
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <button type="submit" class="submit btn btn-primary btn-sm">
                                                                    Save & Continue</button>
                                                                <button type="reset" class="submit btn btn-default btn-sm">
                                                                    Cancel</button>
                                                                    <a href="loginSignup" class="agileits-forgot">Log In</a>
                                                            </div>
                                                        </div>
                                                        @csrf
                                                        </form>
                                        </div>

                                    </div>
                                    <div id="OR" >
                                        OR</div>
                                </div>
                                <div class="col-md-4 extra-agileits">
                                    <div class="row text-center sign-with">
                                        <div class="col-md-12">
                                            <h3 class="other-nw">
                                                Sign in with</h3>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="btn-group btn-group-justified">
                                                <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                                    Google +</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--//Login modal-->
        </div>
    </header>

    <!--//-->
        <div class=" header-right">
            <div class="banner">
                 <div class="slider">
                    <div class="callbacks_container">
                      <ul class="rslides" id="slider">
                         <li>
                               <div class="banner1">
                                   <div class="caption">
                                      <h3><span>Get a</span> coupon voucher on Mobile Recharge</h3>
                                      <p><a href="#mobilew3layouts" class="scroll">Recharge now</a></p>
                                  </div>
                              </div>
                         </li>
                         <li>
                               <div class="banner2">
                                   <div class="caption">
                                      <h3><span>50% off</span> on train Tickets</h3>
                                    <p><a href="train.html">Book now</a></p>
                                  </div>
                              </div>
                         </li>
                         <li>
                               <div class="banner3">
                                   <div class="caption">
                                      <h3><span>Flat Rs.200 Cash back</span>  on Movie Tickets</h3>
                                      <p><a href="movies.html">Book now</a></p>
                                  </div>
                              </div>
                         </li>
                          <li>
                               <div class="banner4">
                                   <div class="caption">
                                      <h3><span>Upto Rs.125 Discount </span> & Flat 100% Money Back</h3>
                                      <p><a href="bus.html">Book now</a></p>
                                  </div>
                              </div>
                         </li>
                      </ul>
                  </div>
                </div>
            </div>
        </div>






    <!-- Support content -->
        <div class="w3l-support">
            <div class="container">
                <div class="col-md-5 w3_agile_support_left">
                    <img src="images/cus.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-7 w3_agile_support_right">
                    <h5>Online Payment System For Electricity in Myanmar</h5>
                    <h3>24/7 Customer Service Support</h3>
                    <p>you can pay easily your electricity bill at any time , any where.</p>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- //Support content -->


    <!--partners-->

    <!--//partners-->

    <!-- subscribe -->

    <!-- //subscribe -->

    <!--footer-->
    <footer>

        <div class="w3l-footer-bottom">
            <div class="container-fluid">
                <div class="col-md-4 w3-footer-logo">
                    <h2><a href="index.html">BURMESE POWER</a></h2>
                </div>
                <div class="col-md-8 agileits-footer-class">
                    <p >© 2019 BURMESE POWER. All Rights Reserved | Design by CSM    </p>
                </div>
            <div class="clearfix"> </div>
             </div>
        </div>
    </footer>
    <!--//footer-->

    <!-- for bootstrap working -->
            <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working --><!-- Responsive-slider -->
        <!-- Banner-slider -->
    <script src="js/responsiveslides.min.js"></script>
       <script>
        $(function () {
          $("#slider").responsiveSlides({
              auto: true,
              speed: 500,
            namespace: "callbacks",
            pager: true,
          });
        });
      </script>
        <!-- //Banner-slider -->
    <!-- //Responsive-slider -->
    <!-- Bootstrap select option script -->
    <script src="js/bootstrap-select.js"></script>
    <script>
      $(document).ready(function () {
        var mySelect = $('#first-disabled2');

        $('#special').on('click', function () {
          mySelect.find('option:selected').prop('disabled', true);
          mySelect.selectpicker('refresh');
        });

        $('#special2').on('click', function () {
          mySelect.find('option:disabled').prop('disabled', false);
          mySelect.selectpicker('refresh');
        });

        $('#basic2').selectpicker({
          liveSearch: true,
          maxOptions: 1
        });
      });
    </script>
    <!-- //Bootstrap select option script -->

    <!-- easy-responsive-tabs -->
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
    <!-- //easy-responsive-tabs -->
        <!-- here stars scrolling icon -->
                <script type="text/javascript">
                    $(document).ready(function() {
                        /*
                            var defaults = {
                            containerID: 'toTop', // fading element id
                            containerHoverID: 'toTopHover', // fading element hover id
                            scrollSpeed: 1200,
                            easingType: 'linear'
                            };
                        */

                        $().UItoTop({ easingType: 'easeOutQuart' });

                        });
                </script>
                <!-- start-smoth-scrolling -->
                <script type="text/javascript" src="js/move-top.js"></script>
                <script type="text/javascript" src="js/easing.js"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
                <!-- start-smoth-scrolling -->
            <!-- //here ends scrolling icon -->
    </body>
    <!-- //body -->
    </html>
    <!-- //html -->
