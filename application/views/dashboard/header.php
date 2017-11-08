<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['UserName']);
    $id       = ($this->session->userdata['logged_in']['UserId']);
    $actived  = ($this->session->userdata['logged_in']['RowStatus']);
}else{
//    @$actived = "";
        redirect('/login', 'refresh');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="opensource rich wysiwyg text editor jquery bootstrap execCommand html5" />
    <meta name="description" content="This tiny jQuery Bootstrap WYSIWYG plugin turns any DIV into a HTML5 rich text editor" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- jQuery 2.2.3 -->

    <script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>


    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom_style.css');?>">
<!--    font Awasame-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fontAwasme/css/font-awesome.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/datepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nested_style.css');?>">
 <!--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->


    <title>Welcome to CodeIgniter</title>
    <nav class="headermenu navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <?php if ('Active' ==  $actived){
                    $url =  base_url('dashboard/dashboard'); // set variable to login link
                }else{
                    $url =  base_url('/'); // set variable to defualt link
                } ?>
                <a class="navbar-brand" href="<?php echo $url;?>"> <span class="glyphicon glyphicon-home"></span> <i class="fa fa-home"></i>SB Marketing</a>
            </div>
            <ul class="nav navbar-right navbar-nav">
                <?php
                if ('Active' ==  $actived){?>
                    <li><a class="userProfileName" href="<?php echo $url;?>">Hi <?php echo $username; ?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle userProfilePic" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="<?php echo base_url('dashboard/changePassword'); ?>">Change Password</a></li>
                            <li><a href="#">Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('login/logout');?>">Logout</a></li>
                        </ul>
                    </li>



                <?php  }else{ ?>
                    <li><a href="<?php echo base_url('login');?>">Login</a></li>
                    <li><a href="<?php echo base_url('user');?>">Registration</a></li>
                <?php  }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    </head>
<body class="bodysuccess">

    <div class="container-fluid">
        <div class="row">
