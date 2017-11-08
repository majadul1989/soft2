<?php include_once('header.php'); ?>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mother">
    <div class="col-md-2 col-lg-2 menubar">
        <div class="row">
            <?php include_once('menubar.php');?>
        </div>

    </div><!--menubar-->
    <div class="col-md-10 col-lg-10 main">
        <?php print_r($_SESSION);?>
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 catebox">

            <!-- <div class="cf nestable-lists"> -->
            <div class="cf nestable-lists">
                <div class="dd" id="nestable">
                    <div class="allcategory"><h3>All Categories</h3></div>
                    <ul class="dd-list fixdata">
                        <?php foreach ($result as $key => $item): ?>
                        <li class="dd-item" data-id="<?php echo $item->CategoryId; ?>">
                            <div class="dd-handle"><?php echo $item->CategoryName; ?></div>
                        </li>
                        <?php endforeach; ?>
                    </ul><!--dd-list-->
                </div> <!--nestable-->
            </div> <!--nestable-lists-->
        </div><!--catebox-->
        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 menuCate">
            <div class="dd" id="nestable2">
                <ul class="dd-list">
                    <li class="dd-item" data-id="13">
                        <div class="dd-handle">Item 13</div>
                    </li>
                    <li class="dd-item" data-id="13">
                        <div class="dd-handle">Item 13</div>
                    </li>
                </ul><!--dd-list-->
            </div><!--nestable2-->
        </div><!--menuCate-->
        <textarea id="nestable2-output"></textarea>
    </div> <!--main-->

</div><!--Mother-->

<script>
    $(document).ready(function() {

        var updateOutput = function(e) {

            var list   = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
//                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                window.menudata =  window.JSON.stringify($('#nestable2').nestable('serialize'));
//                console.log(menudata);
//                alert(menudata);
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };

        // activate Nestable for list 1
        $('#nestable').nestable({
            group: 1
        })
            .on('change', updateOutput);

        $('#nestable2').nestable({
            group: 1

        })
            .on('change', updateOutput);


        // output initial serialised data
         updateOutput($('#nestable').data('output', $('#nestable-output')));
//         var menudata = updateOutput($('#nestable2').data('output', $('#nestable2-output')));



    });
</script>
<?php include_once('footer.php'); ?>



