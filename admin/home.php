
<style>
    .group1 {
        display: flex;
        margin-top: 20px;
        margin-left: 570px;
        cursor: pointer;

        
        
    }

    
    .group2 {
        display: flex;
        margin-top: 20px;
        margin-left: 570px;
        cursor: pointer;
    }
    
    
    .admin-panel-label {
        text-align: center;
    }
    </style>


<h1 class="admin-panel-label">Updates <?php echo $_settings->info('name') ?></h1>
<div class="row">


        <!-- /.info-box -->
    </div>

<div class="group1">
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-secondary elevation-1"><i class="fas fa-table"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Pending Reservation</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `reservation_list` where `status` = 0 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-table"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Confirmed Reservation</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `reservation_list` where `status` = 1 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

</div>









<div class="group2">
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-danger elevation-1"><i class="fas fa-table"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Cancelled Reservation</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `reservation_list` where `status` = 2 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
 
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-teal elevation-1"><i class="fas fa-question-circle"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Unread Inquiries</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `message_list` where status=0 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    </div>
</div>


