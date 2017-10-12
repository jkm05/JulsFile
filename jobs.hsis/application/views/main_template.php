<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HSIS Main Page</title>

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;height: 80px;">
            <div class="navbar-header">
                <!--<a class="navbar-brand" href="index.html">JOBS HSIS</a>-->
                <a class="navbar-brand" href="<?php echo base_url('jobs');?>">
                    <img src="<?php echo base_url('assets/images/hsis.jpg');?>" width="50%">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('home/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="margin-top: 100px;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
<!--                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search Job..." id="search_job">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                             /input-group 
                        </li>-->
                        <li>
                            <a href="<?php echo base_url('my_account');?>"><i class="fa fa-dashboard fa-fw"></i> My Account</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/experience');?>"><span class="glyphicon glyphicon-briefcase"></span> Job Experience</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('education');?>"><span class="glyphicon glyphicon-education"></span> Educational Background</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('skills');?>"><span class="glyphicon glyphicon-wrench"></span> Skill Sets</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('upload_resume');?>"><span class="glyphicon glyphicon-paperclip"></span> Add Resume</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('notification');?>"><span class="glyphicon glyphicon-menu-hamburger"></span> Notifications</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('jobs');?>"><span class="glyphicon glyphicon-search"></span> Search Job</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php $this->load->view($template, $data);?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets')?>/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
<!--    <script src="<?php echo base_url('assets')?>/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url('assets')?>/bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets')?>/dist/js/sb-admin-2.js"></script>
    <script lang="javascript">
        var base_url = '<?php echo base_url();?>'
        
        $(document).ready(function() {
            $('#search_job').keyup(function(evt){
                if (evt.which == 13 || evt.keyCode == 13) {
                    window.location=base_url + 'jobs?search_jobs=' + $(this).val();
                }
            });
        });
    </script>
    
    <?php
        if($js_file){
            foreach ($js_file as $nkey1 => $vals){
    ?>
                <script src="<?php echo base_url('assets')?>/js/<?php echo $vals;?>.js"></script>
    <?php
            }
        }
    ?>
</body>

</html>
