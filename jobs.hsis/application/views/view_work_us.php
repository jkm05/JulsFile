<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HSIS - Main</title>

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;height: 70px;">
            <div class="navbar-header">
                <!--<a class="navbar-brand" href="<?php echo base_url();?>">JOBS HSIS</a>-->
                <a class="navbar-brand" href="<?php echo base_url();?>">
                    <img src="<?php echo base_url('assets/images/hsis.jpg');?>" width="50%">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="http://localhost/hsis/admin.hsis/">
                        Admin
                    </a>
                </li>
                <li>
                    <button class="btn btn-small btn-success" data-toggle="modal" data-target="#loginmodal">
                        Log In
                    </button>
                </li>
                <li>
                    <button class="btn btn-small btn-primary" data-toggle="modal" data-target="#signupmodal">
                        Sign Up
                    </button>
                </li>
            </ul>
        </nav>
    </div>
<div>
    <img src="<?php echo base_url('assets/images/')?>/work_us.jpg" alt="image1">
</div>
    
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                <h2>Company Overview</h2>
                <span>
                    <h3>
                        hsis.com has been the pioneer Online Job Site in Asia Pacific since 1995 and today we operate in eight countries.  We have been helping companies, big and small,  meet their talent needs by providing a comprehensive suite of talent sourcing, employer branding and talent management solutions.
                    </h3>
                    <h3>
                        hsis.com is the No. 1 online job site in the Philippines and a recognized leader in Asia. For the past 19 years, we have been at the forefront of deploying world-class technology and solutions to help companies and candidates connect better.  
                    </h3>
                </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                <h2>Why Join Us?</h2>
                <span>
                    <h3>
                        Most companies are about profit. hsis.com is about helping society find employment.  We believe we can make the world a better place, one job at a time.  What does this mean?  It’s simple…better Jobs mean better lives.  It’s why we started this company and it remains our core principle today.
                    </h3>
                    <h3>
                        We believe the best employee is not just the smartest and brightest.  Instead, it’s the people who share our passion, commitment and obsession in carrying out our mission of improving lives through better careers.
                    </h3>
                    <h3>
                        Join our team and help us develop new and innovative products and services in order to improve the lives of others, and the way people will be hired in the future.
                    </h3>
                </span>
            </div>
        </div>
    </div>
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="panel-heading">
                        <div class="panel-title main">
                            <a id="footer_about_us" href="<?php echo base_url('main/view_about_us');?>">The Company</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="panel-heading">
                        <div class="panel-title main">
                            <a id="footer_about_us" href="<?php echo base_url('main/work_us');?>">Work with Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="panel-heading">
                        <div class="panel-title main">
                            <a id="footer_about_us" href="<?php echo base_url('main/contact_us');?>">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="panel-heading">
                        <div class="panel-title main">
                            <h5>Copyright © 2016 hsis.com</h5>
                        </div>
                    </div>
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
              <h4 class="modal-title" id="myModalLabel">Applicant Log In</h4>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <div class="form-group">
                                <input type="text" name="logusername" id="logusername" class="form-control" placeholder="Email or Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="logpassword" id="logpassword" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="loginapp">Log In</button>
            </div>
          </div>
        </div>
    </div>
    
    <div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Applicant Sign Up</h4>
              <h5 class="modal-title" id="myModalLabel">Sign up for FREE to easily get job matches and apply.</h5>
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
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                        <div class="col-lg-10 col-md-10 col-sm-10">
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
                else if($('#signpassword').val().length < 8){
                    alert('Password should not be less than 8 charaters');
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
