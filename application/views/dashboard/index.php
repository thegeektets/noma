

<body>

    <div class="off-canvas-wrap" data-offcanvas>
        <!-- right sidebar wrapper -->
        <div class="inner-wrap">


            <!-- Right sidemenu -->
            <div id="skin-select">
                <!--      Toggle sidemenu icon button -->
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>
                <!--      End of Toggle sidemenu icon button -->

                <div class="skin-part">
                    <div id="tree-wrap">
                        <!-- Profile -->
                        <div class="profile">
                                  <h3><a href='<?php echo base_url();?>' style="color:#fff">NOMA SANA</a></h3>


                        </div>
                        <!-- End of Profile -->

                        <!-- Menu sidebar begin-->
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav slicknav">
                                <li class="active">
                                    <a id="menu-select" class="tooltip-tip" href="<?php echo base_url('index.php/users/dashboard'); ?>" title="Dashboard">
                                        <i class="icon-monitor"></i>
                                        <span>Dashboard</span>

                                    </a>

                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#">
                                        <i class=" icon-window"></i>
                                        <span>SHENG</span>

                                    </a>
                                    <ul>

                                        <li>
                                            <a href="<?php echo base_url('index.php/users/add_new'); ?>">ADD NEW</a>
                                        </li>
                                        <li>
                                             <a href="<?php echo base_url('index.php/users/contributions'); ?>">CONTRIBUTIONS</a>
                              
                                        </li>
                                        <li>
                                            <a href="sidebar-fixed.html">CONTRIBUTE</a>
                                        </li>  
                                     
                        
                                    </ul>
                                </li>

                              

                                <li>
                                    <a class="tooltip-tip" href="<?php echo base_url('index.php/users/dictionary'); ?>" title="Mail">
                                        <i class=" icon-mail"></i>
                                        <span>SHENG DICTIONARY</span>

                                    </a>
                                   
                                </li>
                             
                            </ul>
                        </div>
                                        
                    </div>
                </div>
            </div>
            <!-- end of Rightsidemenu -->



            <div class="wrap-fluid" id="paper-bg">
     <div id="header">
            <div class="header-wrap row">
                <div class="large-12 columns">
               
               <section class="top-bar-section ">
                           
                       
           

                            <ul class="right" style="margin-top:10px;list-style:none;line-height: 38px;">
                                <li class="bg-green has-dropdown" style="background:#18453B;color:#fff">
                                    <a class="bg-green" href="#"><i class="fi-torsos-all"></i> <span style="font-family:'Josefin Sans', sans-serif;
 ">Hi, <?php echo $this->session->userdata('username')?> </span>
                                    </a>

                                    <ul style="background:#18453B;color:#fff" class=" dropdown dropdown-nest profile-dropdown">

                                        <li  style="background:#18453B;color:#fff">
                                            <i class="icon-user"></i>
                                            <a  class="bg-green" href="#">
                                                <h4>Profile<span class="text-aqua fontello-record" ></span></h4>
                                            </a>
                                        </li>
                                       
                                        <li style="background:#18453B;color:#fff">
                                            <i class="icon-upload"></i>
                                           <a class="bg-green" href="<?php echo base_url('index.php/users/logout') ?>">
                                                <h4>Logout<span class="text-dark-blue fontello-record" ></span></h4>
                                            </a>
                                        </li>

                                     
                                    </ul>
                                </li>
                               
                            </ul>
                        </section>


            <?php 
             if($this->session->userdata('logged_in') == "TRUE") {
                ?>

           
            <div class="dashboard" ><a  style="padding: 14px 20px;" href="<?php echo base_url('index.php/users/dashboard') ?>"><i class="fi-torsos-all"></i> Dashboard </a></div>
            
                <?php 
             }
             else{

                ?>
                <?php }?>

        </div>
    </div>
</div>
               
                <!-- end of top nav -->

                <!-- breadcrumbs -->
                <ul class="breadcrumbs">
                    <li><a href="#"><span class="entypo-home"></span></a>
                    </li>
                    <li>Dashboard
                    </li>
                   
                </ul>
                <!-- end of breadcrumbs -->



                <!-- Container Begin -->
                <div class="row" style="margin-top:-20px">
                    <div class="large-8 columns">
                        <div class="box bg-transparent ">
                            <!-- /.box-header -->
                            <div class="box-header no-pad bg-transparent">

                                <h3 style="margin-bottom:20px;" class="box-title">
                                    <span>ACTIVE STUDENTS</span>
                                </h3>


                            </div>
                            <div class="box-body no-pad">

                                <div id="line-chart" style="height: 235px;"></div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="large-4 columns">
                        <div class="box bg-transparent ">
                            <!-- /.box-header -->
                            <div class="box-header no-pad bg-transparent">

                                <h3 style="margin:0 20px 0 -5px;" class="box-title">
                                    <span>STATS</span>
                                </h3>


                            </div>
                            <div style="margin:15px 0 0" class="box-body no-pad">

                                <div class="stats-wrap">
                                    <h2><b class="counter-up" style="color:#666;">65,800</b> <span  style="background:#666;" >+<b  class="counter-up">20</b>%</span></h2>
                                    <p class="text-grey">Total students<small>This Year</small>
                                    </p>

                                    <h4><b class="counter-up" style="color:#888;">1,204</b> <span style="background:#888;">+<b class="counter-up">5</b>%</span></h4>
                                    <p>Graduate <small>This week</small>
                                    </p>

                                    <h4 style="color:#333;"><b class="counter-up">2,690</b> <span  style="background:#333;">+<b class="counter-up">12,5</b></span></h4>
                                    <p>New students<small>This Month</small>
                                    </p>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>



                <div class="row">
                    <div class="large-6 columns">
                        <div class="your-account">
                            <div class="row">
                                <div class="medium-3 columns">
                                    <!-- <div class="circle-progress"></div> -->
                                    <div class="circlestat" data-dimension="90" data-text="55%" data-width="8" data-fontsize="16" data-percent="55" data-fgcolor="#222" data-border="5" data-bgcolor="#D5DAE6" data-fill="#FFF"></div>
                                </div>
                                <div class="medium-9 columns ">
                                    <div style="margin:0 10px;padding:0 0 0 20px" class="summary-border-left">
                                        <h4>Your Account isn't complete!</h4>
                                        <h6>You must <strong>complete</strong> this issues.</h6>
                                        <ul>
                                            <li class="label round bg-green"><a href="#"><i class="text-white fontello-location"></i></a>
                                            </li>
                                            <li class="label round bg-green"><a href="#"><i class="text-white fontello-user-add"></i></a>
                                            </li>
                                            <li class="label round bg-green"><a href="#"><i class="text-white fontello-loop"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="large-2 columns">
                        <div class="bg-complete-profile">
                            <span class="bg-green fontello-wallet"></span>
                            <!--   <img src="img/bag.png"> -->
                            <h6 class="bg-black text-white"><strong>Your Balance</strong></h6>
                        </div>

                    </div>
                    <div class="large-2 columns">
                        <div class="bg-complete-profile">
                            <span class="bg-green  fontello-doc-1"></span>
                            <!-- <img src="img/box.png"> -->
                            <h6 class="bg-black text-white">General Info</h6>
                        </div>

                    </div>
                    <div class="large-2 columns">
                        <div class="bg-complete-profile">
                            <span class="bg-green  fontello-params"></span>
                            <!--  <i class="img/count.png"></i> -->
                            <h6 class="bg-black text-white">Main Setting</h6>
                        </div>

                    </div>

                </div>


                <!-- Widget  -->
                <div class="row">

                    <div class="large-4 columns">

                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-graph-pie"></i>
                                    <span>SUMMARY</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">


                                <div style="margin:0" class="row summary-border-top">
                                    <div class="large-6 columns">
                                        <div class="summary-nest">
                                            <h2 class="text-black"><span class="counter-up">132</span><small>K</small></h2>
                                            <p>Women</p>
                                        </div>

                                    </div>
                                    <div class="large-6 columns summary-border-left">
                                        <div class="summary-nest">
                                            <h2 class="text-black"><span class="counter-up">160</span><small>K</small></h2>
                                            <p>Man</p>
                                        </div>
                                    </div>
                                </div>

                                <div style="margin:0" class="row">
                                    <div class="large-6 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <span class="text-center"><canvas height="70" width="70" id="partly-cloudy-day"></canvas></span>
                                        </div>

                                    </div>

                                    <div class="large-6 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <h4 class="text-left"><span class="counter-up">05</span>/<span class="counter-up">12</span>/<span class="counter-up">2014</span></h4>
                                            <p class="text-left">Today</p>
                                        </div>

                                    </div>


                                </div>

                                <div style="margin:0" class="row summary-border-bottom">
                                    <div class="large-6 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <h2 class="text-black "><span class="counter-up">82</span><small>%</small></h2>
                                            <p>Graduate</p>

                                        </div>

                                    </div>
                                    <div class="large-6 columns summary-border-left">
                                        <div class="summary-nest summary-pad-nest">
                                            <h2 class="text-black"><span class="counter-up">24</span><small>th</small></h2>
                                            <p>Avarage</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- /.box-body -->
                    </div>


                    <div class="large-4 columns">
                        <!-- timeline item -->
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-view-list"></i>
                                    <span>EVENTS</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="display: block;">
                                <div class="events-nest">
                                    <div class="bg-green text-black">
                                        <h1 class="text-black"><b class="counter-up-fast">25</b></h1>
                                        <span>3 Event</span>
                                        <p>Monday <i class="fontello-record"></i> Februari 2015</p>

                                    </div>
                                    <ul>
                                        <li>
                                            <h4><span class="counter-up-fast">08</span>:00<small>PM</small></h4>
                                            <p>Mathematic Lesson <i class="icon-download"></i><i class="  icon-document-new"></i><i class="icon-heart"></i>
                                            </p>
                                        </li>
                                        <li>
                                            <h4><span class="counter-up-fast">09</span>:<span class="counter-up-fast">30</span><small>PM</small></h4>
                                            <p>Meeting With Josh<i class="icon-download"></i><i class="  icon-document-new"></i><i class="icon-heart"></i>
                                            </p>
                                        </li>
                                        <li>
                                            <h4><span class="counter-up-fast">12</span>:<span class="counter-up-fast">15</span><small>PM</small></h4>
                                            <p>Launch time<i class="icon-download"></i><i class="  icon-document-new"></i><i class="icon-heart"></i>
                                            </p>
                                        </li>


                                    </ul>

                                </div>




                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>

                    <div class="large-4 columns">
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class=" icon-calendar"></i>
                                    <span>SCHOOL TIMETABLE</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="display: block;">
                                <div class="school-timetable">
                                    <hr>
                                    <h5><strong>English </strong>with<i> William Shakespear</i></h5>
                                    <h6><i class=" fontello-home-outline"></i> Room <span class="bg-green">104 B</span></h6>
                                    <h6><i class=" fontello-clock"></i> Mon, October 21st<span class="bg-black">10.00 AM - 12.00 AM</span></h6>

                                    <ul>
                                        <li><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/men/10.jpg">
                                        </li>
                                        <li><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/women/11.jpg">
                                        </li>
                                        <li><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/women/12.jpg">
                                        </li>
                                        <li><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/men/13.jpg">
                                        </li>
                                        <li><span class="fontello-cw"></span>
                                        </li>
                                    </ul>
                                    <hr>
                                    <h5><strong>Mathematic </strong>with<i> Albert Enstein</i></h5>
                                    <h6><i class=" fontello-home-outline"></i> Room <span class="bg-green">98 C</span></h6>
                                    <h6><i class=" fontello-clock"></i> Fri, November 1st<span class="bg-black">09.00 AM - 10.00 AM</span></h6>

                                    <ul>
                                        <li><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/women/14.jpg">
                                        </li>
                                        <li><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/women/15.jpg">
                                        </li>
                                        <li><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/women/16.jpg">
                                        </li>
                                        <li><img alt="" class="chat-pic" src="http://api.randomuser.me/portraits/thumb/men/17.jpg">
                                        </li>
                                        <li><i style="margin-top:-40px" class=" fontello-flickr"></i>
                                        </li>
                                    </ul>
                                    <hr>

                                </div>




                            </div>
                            <!-- /.box-body -->
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
                <!-- End of Widget  -->



                <footer>
                    <div id="footer">Copyright &copy; 2015 <a href="<?php echo base_url(); ?>">NOMA SANA</a></div>

                </footer>
            </div>

            <!-- End of Container Begin -->








          
            <!-- close the off-canvas menu -->
            <a class="exit-off-canvas"></a>
            <!-- End of Right Menu -->
        </div>
        <!-- end paper bg -->

    </div>
    <!-- end of off-canvas-wrap -->

    <!-- end of inner-wrap -->



</body>

</html>
