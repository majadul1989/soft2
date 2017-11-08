<div class="row">
<?php $pageUrl =  $this->router->fetch_class(); ?>
<div class="sidebar hidden-xs hidden-sm" data-spy="affix" data-offset-top="50">
    <ul class="menu">
        <li><a class="<?php echo  ($pageUrl == 'dashboard'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/dashboard'); ?>">Dashboard</a></li>
        <li><a class="dropdown" href="javascript:;">Basic Settings<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: <?php echo  ($pageUrl == 'branch' || $pageUrl == 'menu' ? 'block' : 'none'); ?>;">
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Company</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Branch</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Marketing</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Customer</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Supplier</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Main Head</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Ledger</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Company Bank</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Customer Bank</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Color</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Size</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Depertment</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Grade</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Designation</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Employee</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Leave Entry Form</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Manual Attendance</a></li>
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Weekend Holiday</a></li>
            </ul>
        </li>
        <li><a class="dropdown" href="javascript:;">Inventory<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: <?php echo  ($pageUrl == 'addNew' || $pageUrl == 'lists' ? 'block' : 'none'); ?>;">
                <li><a class="<?php echo  ($pageUrl == 'addNew'? 'active2' : ''); ?>" href="<?php echo base_url('product/addNew'); ?>">Item</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('product/lists'); ?>">Description</a></li>
            </ul>
        </li>
        <li><a class="dropdown" href="javascript:;">Transactions<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: <?php echo  ($pageUrl == 'addUser' || $pageUrl == 'lists' ? 'block' : 'none'); ?>;">
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Openning Stock</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('user/lists'); ?>">Openning Balance</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('user/lists'); ?>">Receive</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('user/lists'); ?>">Payment</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('user/lists'); ?>">Daily Transaction</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('user/lists'); ?>">Journal Entry</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('user/lists'); ?>">Purchase</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('user/lists'); ?>">Purchase Return</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('user/lists'); ?>">Sales</a></li>
                <li><a class="<?php echo  ($pageUrl == 'lists'? 'active2' : ''); ?>" href="<?php echo base_url('user/lists'); ?>">Sales Return</a></li>
            </ul>
        </li>
        <li><a class="dropdown" href="javascript:;">Administration<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: <?php echo  ($pageUrl == 'addUser' || $pageUrl == 'lists' ? 'block' : 'none'); ?>;">
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">New User</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">User List</a></li>
               </li>
            </ul>
        </li>
        <li><a class="dropdown" href="javascript:;">Banking<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: <?php echo  ($pageUrl == 'addUser' || $pageUrl == 'lists' ? 'block' : 'none'); ?>;">
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">CC Loan Limit Setup</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Cash Deposit</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Cash Whithdraw</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Cash Cheque Deposit</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Payment Cheque Bounch</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Party Cheque Bounch</a></li>
                </li>
            </ul>
        </li>
        <li><a class="dropdown" href="javascript:;">Report<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: <?php echo  ($pageUrl == 'addUser' || $pageUrl == 'lists' ? 'block' : 'none'); ?>;">
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Product List</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Customer List</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Supplier List</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Debtors/Creditors List</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Stock Information</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Reorder Lavel</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Sales Invoice Details</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Purchse Invoice Details</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Loading Charge Report</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Chart of Account</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Marketing Ledger Summary</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Ledger Report</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Party Ledger Summary</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Item Wise Ledger</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Description Ledger Book</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Matured Check In</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Matured Check Out</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Bank Balance Statment</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Money Receipt</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Income / Expenses Report</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Receive / Payment Report</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">All Receive Repoet</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">All Payment Repoet</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Trial Balance</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Profit/ Loss from Sale Item</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Drading Account</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Profit And Loss Account</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Balance Sheet</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Attendance Register</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Present, Late, Early Out and Absent Report</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Time Card Report</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Leave Information</a></li>
                <li><a class="<?php echo  ($pageUrl == 'addUser'? 'active2' : ''); ?>" href="<?php echo base_url('user/addUser'); ?>">Salary Sheet</a></li>
            </ul>
        </li>
<!--        <li><a href="#">Dashboard</a></li>-->
<!--        <li><a href="#">Dashboard</a></li>-->
        <li><a class="dropdown" href="javascript:;">Settings<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: <?php echo  ($pageUrl == 'categories' || $pageUrl == 'menu' ? 'block' : 'none'); ?>;">
                <li><a class="<?php echo  ($pageUrl == 'categories'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/categories'); ?>">Categories</a></li>
                <li><a class="<?php echo  ($pageUrl == 'menu'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/menu'); ?>">Menus</a></li>
            </ul>
        </li>
    </ul>
</div>

</div>
<script>
    // Dropdown Menu fuctions here
    $(document).ready(function(){
        $(document).on("click",".dropdown", function(e){
            if($(this).children(".fa").hasClass("fa-chevron-circle-down")){
                $(this).children(".fa").removeClass("fa-chevron-circle-down");
                $(this).children(".fa").addClass("fa-chevron-circle-up");
            }
            else{
                $(this).children(".fa").addClass("fa-chevron-circle-down");
                $(this).children(".fa").removeClass("fa-chevron-circle-up");
            }

            $(".sub_menu").not(this).slideUp('slow'); // it call to other open element
            $(".dropdown").not(this).children(".fa").addClass("fa-chevron-circle-down");
            $(this).siblings(".sub_menu").slideDown('slow');

        }) ;

    });

</script>
