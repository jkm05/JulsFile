<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BCC Main Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets')?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets')?>/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url('assets')?>/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets')?>/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets')?>/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets')?>/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Main CSS -->
    <link href="<?php echo base_url('assets')?>/css/main.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url();?>">BCC Job Seekers</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="http://localhost/admin.bcc/">
                        &nbsp;
                    </a>
                </li>
                <li>
                    <button class="btn btn-small btn-default" data-toggle="modal" data-target="#loginmodal">
                        Sign In
                    </button>
                </li>
                <li>
                    <button class="btn btn-small btn-default" data-toggle="modal" data-target="#signupmodal">
                        Sign Up
                    </button>
                </li>
            </ul>

            <ul class="nav navbar-top-links navbar-left">
                <li>
                    <a href="#">
                        My Career Builder
                    </a>
                </li>
                <li>
                    <a href="#">
                        Find Jobs
                    </a>
                </li>
                <li>
                    <a href="#">
                        Resumes
                    </a>
                </li>
                <li>
                    <a href="#">
                        Recommendations
                    </a>
                </li>
                <li>
                    <a href="http://localhost/admin.bcc">
                        Resources
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /#wrapper -->
    <div class="container caromain">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img src="<?php echo base_url('assets/images/')?>/imgmain.jpg" alt="image1">
              <div class="carousel-caption carousel-caption-box">
                  <div class="carousel-title" style="color: #1C3F94;display: inline-block;padding: 10px 20px 20px !important;margin-bottom: 40px;background: rgba(255,255,255,0.85);">
                    <h1><span class="total-count">Thousand jobs in the </span>Philippines</h1>
                    <h2>
                    <span class="quality-job">Most Quality Jobs</span><span class="bullet">&nbsp;•&nbsp;</span>
                    <span class="quality-emp">Most Quality Employers</span><span class="bullet">&nbsp;•&nbsp;</span>
                    <span class="quality-trust">Most Trusted</span>
                    </h2>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#signupmodal">Free Sign Up</button>
                    <a class="btn btn-default btn-lg" id="search_job_link" href="#">Search Jobs</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-6">
                <h3 style="color: #023658;font-size: 2.5em;font-weight: 300;">Add your resume today.</h3>
                <h4>We can find you job without even applying to it.</h4>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    &nbsp;
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-success btn-lg" id="addresume">Add Your Resume</button>

                </div>
            </div>
        </div>
    </div>
    <!--</div>-->
    <div class="clearfix"></div>
<!--    <div class="container">
        <div class="row text-center circle-text">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>Fast Registration</h3>
                <img src="<?php echo base_url('assets/images/')?>/circleimg1.jpg" alt="image1">
                <p>Create an account without hustle and in no time.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>Beautiful Account</h3>
                <img src="<?php echo base_url('assets/images/')?>/circleimg2.jpg" alt="image1">
                <p>Log In into your account and configure it in your own way!</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>Great Jobs</h3>
                <img src="<?php echo base_url('assets/images/')?>/circleimg3.jpg" alt="image1">
                <p>Find a great job that suit's your own will.</p>
            </div>
        </div>
    </div>-->
    <br>
    <br>
    <br>
    
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="panel-heading">
                        <div class="panel-title main">JobSeekers</div>
                    </div>
                    <div class="panel-collapse collapse in" style="height: auto;">
                        <ul class="list-unstyled footer-link">
                            <li><a id="footer_about_us" href="#">Find Jobs</a></li>
                            <li><a id="footer_work_with_us" href="#">Top Categories</a></li>
                            <li><a id="footer_contact_us" href="#">Top Locations</a></li>
                            <li><a id="footer_contact_us" href="#">Top Keywords</a></li>
                            <li><a id="footer_contact_us" href="#">Career Resources</a></li>
                            <li><a id="footer_contact_us" href="#">Accessibility</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="panel-heading">
                        <div class="panel-title main">LEGAL</div>
                    </div>
                    <div class="panel-collapse collapse in" style="height: auto;">
                        <ul class="list-unstyled footer-link">
                            <li><a id="footer_about_us" href="#">Security & Fraud</a></li>
                            <li><a id="footer_work_with_us" href="#">Privacy Policy</a></li>
                            <li><a id="footer_contact_us" href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="panel-heading">
                        <div class="panel-title main">CAREERBUILDER</div>
                    </div>
                    <div class="panel-collapse collapse in" style="height: auto;">
                        <ul class="list-unstyled footer-link">
                            <li><a id="footer_about_us" href="#">About Us</a></li>
                            <li><a id="footer_work_with_us" href="#">Work at CareerBuilder</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="panel-heading">
                        <div class="panel-title main">SOCIAL</div>
                    </div>
                    <div class="panel-collapse collapse in" style="height: auto;">
                        <ul class="list-unstyled footer-link">
                            <li><a id="footer_about_us" href="#">Facebook</a></li>
                            <li><a id="footer_work_with_us" href="#">Twitter</a></li>
                            <li><a id="footer_work_with_us" href="#">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer-last">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    © 2015 BCC Jobs. All rights reserved.
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    
    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 500px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">User Sign In</h4>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <div class="form-group">
                                <input type="text" name="logusername" id="logusername" class="form-control" placeholder="Your Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="logpassword" id="logpassword" class="form-control" placeholder="Your Password">
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="loginapp">Sign In</button>
            </div>
          </div>
        </div>
    </div>
    
    <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">User Sign Up</h4>
              <h5 class="modal-title" id="myModalLabel">Sign up for FREE, get a job in a jiffy!!!</h5>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="form-group">
                                <input type="text" name="signfname" id="signfname" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="form-group">
                                <input type="text" name="signlname" id="signlname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="form-group">
                                <input type="text" name="signage" id="signage" class="form-control" placeholder="Age">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="form-group">
                                <input type="text" name="signgender" id="signgender" class="form-control" placeholder="Gender">
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <!-- <div class="form-group">
                                <input type="text" name="signaddress" id="signaddress" class="form-control" placeholder="Address">
                            </div> -->
                            <div class="form-group">
                                <input type="text" name="signemail" id="signemail" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="signpassword" id="signpassword" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="csignpassword" id="csignpassword" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="signupapp">Sign Up</button>
            </div>
          </div>
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="<?php echo base_url('assets');?>/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets');?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!--<script src="<?php echo base_url('assets');?>/bower_components/metisMenu/dist/metisMenu.min.js"></script>-->

    <!-- Morris Charts JavaScript -->
    <!--<script src="<?php echo base_url('assets');?>/bower_components/raphael/raphael-min.js"></script>-->
    <!--<script src="<?php echo base_url('assets');?>/bower_components/morrisjs/morris.min.js"></script>-->
    <!--<script src="<?php echo base_url('assets');?>/js/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <!--<script src="<?php echo base_url('assets');?>/dist/js/sb-admin-2.js"></script>-->
    
    <script type="text/javascript" lang="javascript">
        $(document).ready(function() {

            $('#loginapp').click(function(){
                var logusername = $('#logusername').val();
                var logpassword = $('#logpassword').val();
                if(logusername == '' || logpassword == ''){
                    alert('Username and Password required');
                    return false;
                }
                
                $.ajax({
                    url: '<?php echo base_url('home/login');?>',
                    type: 'post',
                    data: {'logusername':logusername,'logpassword':logpassword},
                    dataType : 'json',
                    success: function(datus) {
                        if(datus.success == true){
                            window.location = '<?php echo base_url('home')?>';
                        }
                        else{
                            alert('Please check your username and password!');
                        }
                    }
                });
            });

            $('#signupapp').click(function(){
                var signfname = $('#signfname').val();
                var signlname = $('#signlname').val();
                var signemail = $('#signemail').val();
                var signpassword = $('#signpassword').val();
                var csignpassword = $('#csignpassword').val();
                if(signfname == '' || signlname == '' || signemail == '' || signpassword == '' || csignpassword == ''){
                    alert('First Name, Last Name, Username ,Password and Confirm Password are required');
                    return false;
                }

                if(csignpassword != signpassword){
                    alert('Password And Password Confirmation must be match!');
                    return false;
                }

                $.ajax({
                    url: '<?php echo base_url('home/signup');?>',
                    type: 'post',
                    dataType: 'json',
                    data: {'signfname':signfname,'signlname':signlname, 'signemail' : signemail, 'signpassword' : signpassword},
                    success: function(datus) {console.log(datus);
                        if(datus.success){
                            alert('Account Successfully created! Welcome ' + signfname + '!');
                            window.location = '<?php echo base_url('home')?>';
                        }
                        else{
                            alert(datus.message);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>