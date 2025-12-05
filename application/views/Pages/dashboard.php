<?php 
define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
require DOC_ROOT_PATH . $this->config->item('header1');
?>
<style type="text/css">
    .card-block .card-main {
        background: #ffffff !important;
        padding: 0;
    }
</style>
<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <h2 style="color: #ffffff;">Game On</h2>
        </div>
        <div class="right">
            <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a>
            <a href="app-settings.html" class="headerButton">
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged w32">
                <span class="badge badge-danger">6</span>
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">


       <!-- Wallet Card -->
       <div class="section wallet-card-section pt-1">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title">Saldo Walet</span>
                    <h1 class="total">Rp. <?php echo $data['member_data'][0]['member_saldo']; ?></h1>
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            <div class="wallet-footer">
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                        <div class="icon-wrapper bg-danger">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>Top Up</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                        <div class="icon-wrapper">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <strong>Kirim</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="app-cards.html">
                        <div class="icon-wrapper bg-success">
                            <ion-icon name="fast-food-outline"></ion-icon>
                        </div>
                        <strong>Order</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="https://wa.me/6285245139056">
                        <div class="icon-wrapper bg-warning">
                            <ion-icon name="alarm-outline"></ion-icon>
                        </div>
                        <strong>Booking</strong>
                    </a>
                </div>

            </div>
            <!-- * Wallet Footer -->
        </div>
    </div>
    <!-- Wallet Card -->

    <!-- Deposit Action Sheet -->
    <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Balance</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account1">Nominal</label>
                                    <select class="form-control custom-select" id="account1">
                                        <option value="50000">50.000</option>
                                        <option value="100000">100.000</option>
                                        <option value="150000">150.000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                data-bs-dismiss="modal">Deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Deposit Action Sheet -->

    <!-- Withdraw Action Sheet -->
    <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Top Up</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2d">Nominal:</label>
                                    <select class="form-control custom-select" id="account2d">
                                        <option value="50000">Rp. 50,000</option>
                                        <option value="100000">Rp. 100,000</option>
                                        <option value="150000">Rp. 150,000</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2d">Pembayaran:</label>
                                    <select class="form-control custom-select" id="account2d">
                                        <option value="Cash">Cash</option>
                                        <option value="Transfer">Transfer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                data-bs-dismiss="modal">Top Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Withdraw Action Sheet -->

    <!-- Send Action Sheet -->
    <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kirim Saldo</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2">Ke</label>
                                    <select class="form-control custom-select" id="account2">
                                        <option value="0">Hendry</option>
                                        <option value="1">Ahmad</option>
                                        <option value="2">Mose</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Nominal</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1">Rp. </span>
                                    <input type="text" class="form-control" placeholder="Enter an amount"
                                    value="100">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                data-bs-dismiss="modal">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Send Action Sheet -->

    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Point</div>
                    <div class="value text-success"><?php echo $data['member_data'][0]['member_point']; ?></div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Sisa Waktu</div>
                    <?php 
                    $timeString = $data['member_data'][0]['member_remaining_time'];
                    $time = DateTime::createFromFormat('H:i:s', $timeString);
                    $remaining_time = $time ? $time->format('H:i') : '00:00';
                    ?>
                    <div class="value text-danger"><?php echo $remaining_time; ?></div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Stats -->

    <!-- Wallet Card -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Info</h2>
            <a href="" class="link">View All</a>
        </div>
        <!-- carousel single -->
        <div class="carousel-single splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php foreach ($data['promo_data'] as $row_promo) { ?>
                        <li class="splide__slide">
                            <!-- card block -->
                            <div class="card-main">
                                <img src="<?php echo base_url(); ?>assets/img/banner/<?php echo $row_promo['ms_promo_banner_image']?>" style="width:100%; border-radius:5% ;">
                            </div>
                            <!-- * card block -->
                        </li>

                    <?php  } ?>
                </ul>
            </div>
        </div>
        <!-- * carousel single -->
    </div>
    <!-- Wallet Card -->

    <!-- Transactions -->
    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">Tukar Point</h2>
            <a href="" class="link">View All</a>
        </div>
        <ul class="listview image-listview media">
            <?php foreach ($data['exchange_point_data'] as $row_exchage) { ?>
                <li>
                    <a href="#" class="item">
                        <div class="imageWrapper">
                            <img src="<?php echo base_url(); ?>assets/img/exchangepoint/<?php echo $row_exchage['ms_exchange_point_image']?>" alt="image" class="imaged w64">
                        </div>
                        <div class="in">
                            <div>
                                <?php echo $row_exchage['ms_exchange_point_name']?>
                                <div class="text-muted"><?php echo $row_exchage['ms_exchange_point_point']?> Point</div>
                            </div>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!-- * Transactions -->

    <!-- app footer -->
    <div class="appFooter" style="margin-top:10px;">
        <div class="footer-title">
            Game On Application
        </div>
    </div>
    <!-- * app footer -->

</div>
<!-- * App Capsule -->


<?php 
require DOC_ROOT_PATH . $this->config->item('botmenu');
require DOC_ROOT_PATH . $this->config->item('footer1');
?>
<script>
    // Add to Home with 2 seconds delay.
    //AddtoHome("2000", "twice");
</script>

</body>

</html>