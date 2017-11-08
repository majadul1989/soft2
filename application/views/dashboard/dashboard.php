<?php include_once('header.php'); ?>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div class="col-md-2 col-lg-2 menubar">
        <div class="row">
            <?php include_once('menubar.php');?>
        </div>

    </div><!--menubar-->
    <div class="col-md-10 col-lg-10 main">
        <?php print_r($_SESSION);
        echo $this->session->userdata['logged_in']['UserId']; ?>
    </div><!--main-->

</div>



