<!doctype html>
<html lang="en">

<?php 
    require ('dashboard_header.php');
?>
<body>
    <div class="dashboard-main-wrapper">

       <?php
            require ('dashboard_navigation.php');
            require ('dashboard_sidebar.php');
       ?>
        <div class="dashboard-wrapper" style="position: relative;">
            <div class="container-fluid dashboard-content" >
            <?php
                require ('status.php');
            ?>
                <div class="row"  style="margin-bottom: 60px">
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Dashboard </h2>
                                    <p class="pageheader-text"></p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card-columns">
                                  
                                    <a href="<?php echo base_url('Accountant/accounts_section')?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px;">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/accounts.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Accounting</h3>
                                            <p class="card-text">Manage & track accounts</p>
                                           
                                        </div>
                                    </div>
                                    </a>
                                    <a href="<?php echo base_url('Accountant/packing_list_section')?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px;">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/packing.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Packing</h3>
                                            <p class="card-text">Manage & track packing</p>
                                           
                                        </div>
                                    </div>
                                    </a>
                                    <a href="<?php echo base_url('Accountant/consumers_activity')?>">
                                    <div class="card" style=" padding: 10px 10px 10px 10px;">
                                        <img class="card-img-top img-responsive" src="<?php echo base_url('asset/img/buyer.png'); ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Buyers</h3>
                                            <p class="card-text">Manage buying companies</p>
                                           
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>


                        <div class="row" style="margin-left: 0px">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card-columns">
                                </div>
                            </div>
                        </div>
                        </div>
                     
                    </div>
                </div>
            </div>
  <?php
    include ('dashboard_footer.php');
  ?>
</body>
 
</html>
