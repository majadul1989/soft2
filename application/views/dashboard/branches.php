<?php include_once('header.php'); ?>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div class="col-md-2 col-lg-2 menubar">
        <div class="row">
            <?php include_once('menubar.php');?>
        </div>

    </div><!--menubar-->
    <div class="col-md-10 col-lg-10 main">
        <?php print_r($_SESSION);?>
        <div class="col-md-6 col-lg-6 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12 addbranch">
            <h2>New Branch Descriptions</h2><hr>
            <form class="form-horizontal" id="contact_form" role="form" action="<?php echo base_url('dashboard/categories/store')?>" method="post">
                <div class="form-group">
                    <label for="mail" class="col-sm-3 control-label text-right">Email :</label>
                    <div class="col-sm-9">
                        <input type="email" value="<?php echo set_value('email'); ?>" class="form-control" id="email" name="email" placeholder="Email" autofocus required>
                    </div>
                    <label for="mail" class="col-sm-3 control-label"></label>
                    <div class="col-sm-9">
                        <?php echo form_error('email', '<div class="red">', '</div>'); ?>
                    </div>
                </div>
            </form>
        </div><!--addNewCate-->

    </div><!--main-->

</div>
<?php include_once('footer.php'); ?>



