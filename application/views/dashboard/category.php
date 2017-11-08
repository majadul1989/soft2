<?php include_once('header.php'); ?>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div class="col-md-2 col-lg-2 menubar">
        <div class="row">
            <?php include_once('menubar.php');?>
        </div>

    </div><!--menubar-->
    <div class="col-md-10 col-lg-10 main">
        <?php print_r($_SESSION);?>
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 addNewCate">
            <form action="<?php echo base_url('dashboard/categories/store')?>" method="post">
                <div class="form-group">
                <h3 class="">Add New Category</h3>
                    <?php
                    if (isset($add)) {
                    echo '<div class="btn-success btn success">'.$add.'</div>';
                    } ?>
                <hr>

                    <div class="col-sm-9">
                        <input type="text" value="<?php echo set_value('categoryName'); ?>" class="form-control" id="categoryName" name="categoryName" placeholder="Add New Category">
                        <?php echo form_error('categoryName', '<div class="red">', '</div>'); ?>
                    </div>
                    <div class="col-sm-3 padding">
                        <input type="submit" class="btn btn-primary"  id="submit" name="submit" value="Add New">
                    </div>

                </div>
            </form>
        </div><!--addNewCate-->
        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 showCate">
        <h3 class="text-center">List of Categories</h3>
            <hr>
            <div class="listStyle">
                <?php // print_r($result); ?>
                <ul id="sortable">
                    <?php foreach ($result as $key => $cate): ?>
                    <li><a class="cate" href="<?php echo base_url('dashboard/categories/update/'.$cate->CategoryId);?>"><?php echo $cate->CategoryName; ?> </a> <span><a href="<?php echo base_url('dashboard/categories/update/'.$cate->CategoryId);?>">Edit</a> || <a href="<?php echo base_url('dashboard/categories/delete/'.$cate->CategoryId);?>">Delete</a></span></li>
                <?php endforeach; ?>
                </ul>
            </div><!--listStyle-->
        </div><!--showCate-->
            <?php
//            // set Barcode39 object
//            $bc = new Barcode39("Shay Anderson");
//
//            // display new barcode
//            echo $bc->draw();
            ?>
    </div><!--main-->

</div>
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#sortable').sortable({
            revert: true,
            helper: 'clone',
});
 });
</script> -->
<?php include_once('footer.php'); ?>



