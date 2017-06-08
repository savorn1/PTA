<?php
//index.php
      $connect = mysqli_connect("localhost", "root", "", "pta");
      $province = '';
      $query = "SELECT province FROM area GROUP BY province ORDER BY province ASC";
      $result = mysqli_query($connect, $query);
      while($row = mysqli_fetch_array($result))
              {
                  $province .= '<option value="'.$row["province"].'">'.$row["province"].'</option>';
              }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/background_image.js"></script>
    <title>PTA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/MyStyle.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

<!--Footer Style-->
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
<!---->
    <script src="vendor/bootstrap.js"></script>
    <script src="vendor/bootstrap.min.js"></script>
    <script src="vendor/jquery-3.1.1.min.js"></script>
    <script src="vendor/index.js"></script>
   

    <script src="js/affix.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/button.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/collapse.js"></script>

    <script src="js/dropdown.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/popover.js"></script>
    <script src="js/scrollspy.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/transition.js"></script>
<!--Script Slide-->
   



      <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <script src="js/jssor.slider-22.2.8.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
                $AutoPlay: true,
                $AutoPlaySteps: 4,
                $SlideDuration: 160,
                $SlideWidth: 200,
                $SlideSpacing: 3,
                $Cols: 4,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $Steps: 4
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $SpacingX: 1,
                    $SpacingY: 1
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>

    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body>
<div class="container">
        <div class="row">
            <div class="row">
			
        <div class="col-md-4 col-xs-2" style="padding-top: 1em; padding-left: 2em;">
            <a href="/">
                <img class=""  src="images/LOGO PTA.png" width="150px" height="150px">
            </a>
        </div>
        <div class="col-md-4 col-xs-10 text-center">
            <h3 style=" color:#317eac">Private Taxi Agency Cambodia</h3>
            <p style="font-size: 1.5em;font-family: 'Khmer OS Battambang'">ទិញសំបុត្រភ្លាម ចេញដំណើរភ្លែត </p>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="row" style="padding-right: 1em; padding-bottom: 0em">
                <div class="collapse navbar-collapse" id="search-navbar-collapse">
                    <div class="row">
                        <form method="post" class="navbar-form navbar-right" role="form" action="/newsearch"><input type="hidden" name="_token" value="m43mziOivKNI9Vz5H3Mzl20lUea25bN7RnAGmqks">
                            <div class="form-group">
                                <input type="text" class="form-control" name='search_input' placeholder="Search..."/>
                            </div>
                          <!-- <button type="submit" class="btn btn-primary &lt;!&ndash;hidden-xs&ndash;&gt;">
                                <i class="fa fa-btn fa-search" style="color: white"></i>
                            </button>- -->

                            <button type="submit" class="btn btn-primary ">
                                Search
                            </button>
                        </form>
                    </div>
                    <div class="row text-right hidden-xs">
                        <a href="/advand_search">Advanced search</a>
                    </div>
                </div>
            </div>

            <div class="row text-right" style="padding-top: 1em; padding-right:1em; font-size: 1.25em">
                <a href="/language/kh"><em>ភាសារខ្មែរ</em></a>
                &nbsp;
                <a href="/language/en"><em>ENGLISH</em></a>
            </div>
             </div>
            </div>
        </div>
        <nav class="row">
            <nav class="navbar navbar-default" >
                 <div class="navbar-header" style="padding-left: 1em;">
            <!-- Collapsed Hamburger -->
                 <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#app-navbar-collapse">
                     <span class="sr-only">Toggle Navigation</span>
                         <i class="fa fa-btn fa-bars" style="color:black;"></i>
                </button>
                 <!-- Collapsed Search -->
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search-navbar-collapse">
                     <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-search" style="color: black;"></i>
                </button>
                  <!-- Branding Image -->
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #34a6e7;">
                  <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav" >
                  <li class="dropdown"><a href="index.php" style="color: white">Home</a></li>
                  <li ><a href="ticketPopUp.php"  style="color: white">Ticket</a></li>
                  <li><a href="info.php"     style="color: white">News & Info</a></li>
                  <li><a href="contact.php"  style="color: white">Contact</a> </li>
                  <li><a href="about.php"  style="color: white">About</a> </li>
              </ul>
        <!-- Right Side Of Navbar -->
             </div>
            </nav>
        </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-12" >
            <div class="row">
                <div class="col-md-12 col-sm-12 hidden-xs">
                    <div class="search-block bg_image"  >
                        <div class="container-fluid" >
                            <div class="jumbotron img-responsive" id="background_image" >
                                <div class="container" >
                                    <div class="col-md-12">
                                       
                                        <div class="grid_3 grid_5">
                                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                                <ul id="myTab" class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" ><h5 style="color: orange;size: 10cm"><strong><span class="fa fa-ticket"></span> Ticket</strong></h5></a></li>
                                                    <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false"><h5 style="color: orange;size: 10cm"><strong><span class="fa fa-car"></span>Travel</strong></h5></a></li>
                                                </ul>
                                                <div id="myTabContent" class="tab-content"><br>
                                                    <div role="tabpanel" class="tab-pane fade in active " id="home" aria-labelledby="home-tab">
                                                        <div class="row col-md-7">
                                                            <form class="form-horizontal" id="insert" action="proces.php" method="POST">
                                                                      <div class='input-group date' id='datetimepicker1' style="color: green">
                                                                            <input type='text' class="form-control" name="date" />
                                                                            <span class="input-group-addon">
                                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                                            </span>
                                                                      </div><br>
                                                                     <select name="province" id="province" class="form-control action"> <option value="">Select Porvince</option>
                                                                        <?php echo $province; ?>
                                                                      </select><br />
                                                                     <select name="district" id="district" class="form-control action">
                                                                           <option value="">Select Disctrict</option>
                                                                     </select><br />
                                                                     <button class="btn btn-info" name="submit">submit</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-4" style="background-color: white">
                                                        </div>


                                                    </div>

                                                    <div role="tabpanel" class="tab-pane fade row col-md-7" id="profile" aria-labelledby="profile-tab">
                                                         <div class='input-group date' id='datetimepicker2' style="color: green">
                                                                <input type='text' class="form-control" name="date" />
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <select name="province" id="province" class="form-control action">
                                                                    <option value="">Select Porvince</option>
                                                                    <?php echo $province; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="select-data form-control" name="province">
                                                                <option value="">Persons</option>
                                                                <option value="1">4-6</option>
                                                                <option value="1">6-20</option>
                                                                <option value="1">20+</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input placeholder="Input Your Phone Number" class="form-control">
                                                        </div>
                                                        <div class="form-group" align="center">
                                                            <a class="btn btn-md btn-warning"style="width: 100px" href="requestnow.html" type="submit">Request now</a>

                                                           
                                                        </div>
                                                        <div id="modal-container1" style="hight: 100px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="row top-buffer">
                        <h4 class=" container row partner-slide-header">Partners</h4>
                        <div class="col-md-9">
                         <!--Slide -->
                            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:809px;height:150px;overflow:hidden;visibility:hidden;">
                                <!-- Loading Screen -->
                                <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                    <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                </div>
                                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:809px;height:150px;overflow:hidden;">
                                    <div>
                                        <img data-u="image" src="images/005.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/006.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/011.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/013.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/014.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/019.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/020.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/021.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/022.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/024.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/025.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/027.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/029.jpg" />
                                    </div>
                                    <a data-u="any" href="http://www.jssor.com" style="display:none">Carousel</a>
                                    <div>
                                        <img data-u="image" src="images/030.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/031.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/030.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/034.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/038.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/039.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/043.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/044.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/047.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="images/050.jpg" />
                                    </div>
                                </div>
                                <!-- Bullet Navigator -->
                                <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
                                    <!-- bullet navigator item prototype -->
                                    <div data-u="prototype" style="width:21px;height:21px;">
                                        <div data-u="numbertemplate"></div>
                                    </div>
                                </div>
                                <!-- Arrow Navigator -->
                                <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                                <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
                            </div>
                            <!--End Slide-->
                        </div>
                    </div>

                    <div class="row top-buffer">
                        <h4 class="partner-slide-header">Company Partners</h4>

                        <div class="col-md-12 row">
                            <div class=" col-lg-4">
                                <img data-u="image" src="images/01.jpg" class="img-responsive" />
                            </div>
                            <div class=" col-lg-4">
                                <img data-u="image" src="images/02.jpg" class="img-responsive" />
                            </div>
                            <div class=" col-lg-4">
                                <img data-u="image" src="images/04.jpg" class="img-responsive" />
                            </div>
                            
                            <div class="col-md-12 row" >
                            <footer class="footer-distributed">

                                <div class="footer-left">

                                    <h3>PTA<span>logo</span></h3>

                                    <p class="footer-links">
                                        <a href="index.html">Home</a>
                                        ·
                                        <a href="ticketPopUp.html">Ticket</a>
                                        ·
                                        <a href="info.html">News & Info</a>
                                        ·
                                        <a href="contact.html">Contact</a>
                                        ·
                                        <a href="contact.html">About</a>
                                        ·

                                    </p>

                                    <p class="footer-company-name">Private Taxi Agency Cambodia &copy; 2015</p>
                                </div>

                                <div class="footer-center">

                                    <div>
                                        <i class="fa fa-map-marker"></i>
                                        <p><span>Russian Conf. Blvd </span> Phnom Penh, Cambodia</p>
                                    </div>

                                    <div>
                                        <i class="fa fa-phone"></i>
                                        <p>+855 10 288 083</p>
                                    </div>

                                    <div>
                                        <i class="fa fa-envelope"></i>
                                        <p><a href="pta.com">pta@gmail.com</a></p>
                                    </div>

                                </div>

                                <div class="footer-right">

                                    <p class="footer-company-about">
                                        <span>About the company</span>
                                        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                                    </p>

                                    <div class="footer-icons">

                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-github"></i></a>

                                    </div>

                                </div>

                            </footer>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="">
                            <input type="hidden" name="_token" value="uavQ3BH05rKza7uhfpyX7xKXxjbGenPj6dUAQkr5">

                            <div class="form-group">
                                <label for="email">E-Mail Address</label>

                                <input type="email" class="form-control" name="email" value="">


                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>

                                <input type="password" class="form-control" name="password">


                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in icon-right-margin"></i>Login
                                    </button>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div>

                                    </div>
                                </div>

                                <div>
                                    <br/>
                                </div>
                                <div>
                                    <a class="btn btn-link" href="">Forgot Your Password?</a>
                                </div>



                        </form>
                    </div>
                </div>
            </div>
   <div class="row">
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h3 class="panel-title">Contact US			</h3>

                    </div>

                    <div class="panel-body">
                        <div class="wrapper">
                            <h1 align="center" class="contact-us-heading" style="color: #2B81AF"><b>PTA</b></h1>
                            <p class="">PO Box 86, Russian Conf. Blvd. Phnom Penh, Cambodia.</p>
                            <p>Tel : +855 855 10 288 883 </p>
                            <p>E-mail : pta@gmail.com</p>
                            <p>Website : <a href="http://google.com">pta.com</a></p>
                            <button class="btn btn-info" type="button" data-toggle="modal" ><i class="fa fa-envelope fa-fw"></i> Email US</button>
                            <!-- Modal -->
                            
                            <div id="contactUsModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Contact US</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" role="form"><input name="_token" type="hidden" value="uavQ3BH05rKza7uhfpyX7xKXxjbGenPj6dUAQkr5">
                                                <div class="form-group">
                                                    <label for="name" class="control-label col-md-2">Name</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" required="required" name="name" type="text" id="name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-md-2">Email</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" required="required" name="email" type="email" id="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="subject" class="control-label col-md-2">Subject</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" required="required" name="subject" type="text" id="subject">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message" class="control-label col-md-2">Message</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" rows="5" required="required" name="message" cols="50" id="message"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row" align="right" style="padding-right: 1em;">
                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

                <!-- Your like button code -->
            </div>
            <footer class="container-fluid text-center">
            </footer>

<script>
  $(document).ready(function(){
      $(document).ready(function(){
              $('.action').change(function(){
                    if($(this).val() != ''){
                         var action = $(this).attr("id");
                         var query = $(this).val();
                         var result = '';
                         if(action == "province"){
                              result = 'district';
                         }
                         else{
                               result='';
                         }

                         $.ajax({
                          url:"fetch.php",
                          method:"POST",
                          data:{action:action, query:query},
                          success:function(data){
                           $('#'+result).html(data);
                          }
                      })
              }
         });

      })

    });
</script>
<script type="text/javascript">
       $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        $(function () {
                $('#datetimepicker2').datetimepicker();
            });
</script>

</body>
</html>