
 <!DOCTYPE html>
 <!-- html -->
 <html>
 <!-- head -->
 <head>
 <title>Burmese Power | index </title>
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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 </head>
 <!-- //head -->
 <!-- body -->
 <body >
 <!--header-->
 <header>
     <div class="container">
         <!--logo-->
             <div class="logo">
                 <h1><a href="index.html">Burmese Power</a></h1>
             </div>
         <!--//logo-->
           <div class="w3layouts-login">
                 <a data-toggle="modal" data-target="#myModal" href="#"><i class="glyphicon glyphicon-user"> </i>Login/Register</a>
             </div>
                 <div class="clearfix"></div>
     <!--Login modal-->


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


 <!--geolocatoin-->
     <div class="phone" id="mobileappagileits">

<div class="container">
    <h2>User Informations</h2>

<table>

        <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Paid</th>
              </tr>

    @foreach ($informations as $informations)

    <tr>
            <td>{{$informations->userID}}</td>
            <td>{{$informations->name}}</td>
            <td>{{$informations->phone}}</td>
            <td>{{$informations->email}}</td>
            <td>unpaid</td>
          </tr>
    @endforeach

  </table>

  </div>
     </div>
 <!--//geolocation-->

 <!--Vertical Tab-->
 <div class="categories-section main-grid-border" id="mobilew3layouts">
     <div class="container">
         <div class="category-list">
             <div id="parentVerticalTab">
                 <div class="agileits-tab_nav">
                 <ul class="resp-tabs-list hor_1">

                     <li><i class="icon fa fa-lightbulb-o" aria-hidden="true"></i>Electricity Bill Pay Here</li>

                 </ul>
                 </div>
                 <div class="resp-tabs-container hor_1">
                     <!-- tab1 -->
                     <div>
                         <div class="tabs-box">



              <div class="clearfix"> </div>

                           <form action="eAdmin" method="get" class="creditly-card-form agileinfo_form">
                                 <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                     <div class="credit-card-wrapper">
                                         <div class="first-row form-group">
                                             <div class="controls">
                                                 <label class="control-label">User ID</label>
                                                 <input class="billing-address-name form-control" type="text" name="userid" >
                                             </div>
                                             <div class="controls">
                                                    <label class="control-label">Unit</label>
                                                    <input class="billing-address-name form-control" type="text" name="unit" >
                                                </div>
                                                <div class="controls">
                                                        <label class="control-label">Last Date</label>
                                                        <input class="billing-address-name form-control" type="text" name="lastDate" >
                                                    </div>


                                         </div>
                                         <button class="submit" name="update"><span>Update Bill<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></button>
                                     </div>
                                 </section>
                                 @csrf
                             </form>

                             @foreach ($bill as $bill )

                             {{$bill->billAmount}}
                             {{$bill->userID}}
                             @endforeach


         <div class="clearfix"> </div>
     </div>
 <!-- script -->
     <script>
         $(document).ready(function() {
             $("#tab2").hide();
             $("#tab3").hide();
             $("#tab4").hide();
             $(".tabs-menu a").click(function(event){
                 event.preventDefault();
                 var tab=$(this).attr("href");
                 $(".tab-grid").not(tab).css("display","none");
                 $(tab).fadeIn("slow");
             });
         });
     </script>





                      </div>

                 </div>
                 <div class="clearfix"></div>
             </div>
         </div>
     </div>
 </div>
 <!--Plug-in Initialisation-->
 <script type="text/javascript">
 $(document).ready(function() {

     //Vertical Tab
     $('#parentVerticalTab').easyResponsiveTabs({
         type: 'vertical', //Types: default, vertical, accordion
         width: 'auto', //auto or any width like 600px
         fit: true, // 100% fit in a container
         closed: 'accordion', // Start closed if in accordion view
         tabidentify: 'hor_1', // The tab groups identifier
         activate: function(event) { // Callback function if tab is switched
             var $tab = $(this);
             var $info = $('#nested-tabInfo2');
             var $name = $('span', $info);
             $name.text($tab.text());
             $info.show();
         }
     });
 });
</script>
 <!-- //Categories -->



 <!-- Support content -->
     <div class="w3l-support">
         <div class="container">
             <div class="col-md-5 w3_agile_support_left">
                 <img src="images/cus.jpg" alt=" " class="img-responsive" />
             </div>
             <div class="col-md-7 w3_agile_support_right">
                 <h5>Online Payment System For Electricity</h5>
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
     <div class="w3-subscribe agileits-w3layouts">
         <div class="container">
             <div class="col-md-6 social-icons w3-agile-icons">
                 <h4>Join Us</h4>
                 <ul>
                     <li><a href="#" class="fa fa-facebook sicon facebook"> </a></li>
                     <li><a href="#" class="fa fa-twitter sicon twitter"> </a></li>
                     <li><a href="#" class="fa fa-google-plus sicon googleplus"> </a></li>

             </div>
             <div class="col-md-6 w3-agile-subscribe-right">
                 <h3 class="w3ls-title">Send Feedback To Us <br><span>Newsletter</span></h3>
                 <form action="#" method="post">
                     <input type="email" name="email" placeholder="Enter your Email..." required="">
                     <input type="submit" value="Subscribe">
                     <div class="clearfix"> </div>
                 </form>
             </div>
             <div class="clearfix"> </div>
         </div>
     </div>
 <!-- //subscribe -->

 <!--footer-->
 <footer>

     <div class="w3l-footer-bottom">
         <div class="container-fluid">
             <div class="col-md-4 w3-footer-logo">
                 <h2><a href="index.html">Burmese Power</a></h2>
             </div>
             <div class="col-md-8 agileits-footer-class">
                 <p >© 2017 Burmese Power. All Rights Reserved | Design by  Chit San Maung </p>
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
