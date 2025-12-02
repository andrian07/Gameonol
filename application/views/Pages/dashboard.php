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
                    <h1 class="total">Rp. 100.000</h1>
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
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
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

    <!-- Exchange Action Sheet -->
    <div class="modal fade action-sheet" id="exchangeActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Exchange Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="currency1">From</label>
                                            <select class="form-control custom-select" id="currency1">
                                                <option value="1">EUR</option>
                                                <option value="2">USD</option>
                                                <option value="3">AUD</option>
                                                <option value="4">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="currency2">To</label>
                                            <select class="form-control custom-select" id="currency2">
                                                <option value="1">USD</option>
                                                <option value="1">EUR</option>
                                                <option value="2">AUD</option>
                                                <option value="3">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon2">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount"
                                    value="100">
                                </div>
                            </div>



                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                data-bs-dismiss="modal">Exchange</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Exchange Action Sheet -->

    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Point</div>
                    <div class="value text-success">150</div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Sisa Waktu</div>
                    <div class="value text-danger">30:50</div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Stats -->

    <!-- Wallet Card -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Info</h2>
            <a href="app-cards.html" class="link">View All</a>
        </div>
        <!-- carousel single -->
        <div class="carousel-single splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-main">
                            <img src="<?php echo base_url(); ?>assets/img/banner/promotopup.png" style="width:100%; border-radius:5% ;">
                        </div>
                        <!-- * card block -->
                    </li>

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-main">
                            <img src="<?php echo base_url(); ?>assets/img/banner/Tournament.png" style="width:100%; border-radius:5% ;">
                        </div>
                        <!-- * card block -->
                    </li>

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-main">
                            <img src="<?php echo base_url(); ?>assets/img/banner/minuman.png" style="width:100%; border-radius:5% ;">
                        </div>
                        <!-- * card block -->
                    </li>


                </ul>
            </div>
        </div>
        <!-- * carousel single -->
    </div>
    <!-- Wallet Card -->

    <!-- Transactions -->
    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">Trending Today's</h2>
            <a href="app-transactions.html" class="link">View All</a>
        </div><ul class="listview image-listview media">
            <li>
                <a href="#" class="item">
                    <div class="imageWrapper">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w64">
                    </div>
                    <div class="in">
                        <div>
                            Sonic Yoga
                            <div class="text-muted">subtext</div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="imageWrapper">
                        <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w64">
                    </div>
                    <div class="in">
                        <div>
                            21 Pilates
                            <div class="text-muted">subtext</div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="imageWrapper">
                        <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w64">
                    </div>
                    <div class="in">
                        <div>
                            Striking Class
                            <div class="text-muted">subtext</div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- * Transactions -->

    <!-- app footer -->
    <div class="appFooter">
        <div class="footer-title">
            Game On Application
        </div>
    </div>
    <!-- * app footer -->

</div>
<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="<?php echo base_url(); ?>Dashboard" class="item">
        <div class="col" >
            <ion-icon name="home-outline"></ion-icon>
            <strong>Home</strong>
        </div>
    </a>
    <a href="app-transactions.html" class="item">
        <div class="col">
            <ion-icon name="document-text-outline"></ion-icon>
            <strong>Class</strong>
        </div>
    </a>
    <a href="<?php echo base_url(); ?>User/absence" class="item">
        <div class="col">
            <div class="action-button large">
                <ion-icon name="qr-code-outline" role="img" class="md flip-rtl hydrated"></ion-icon>
            </div>
            <strong>Absen</strong>
        </div>
    </a>
    <a href="app-cards.html" class="item">
        <div class="col">
            <ion-icon name="bar-chart-outline"></ion-icon>
            <strong>Video</strong>
        </div>
    </a>
    <a href="<?php echo base_url(); ?>User/setting" class="item active">
        <div class="col">
            <ion-icon name="settings-outline"></ion-icon>
            <strong>Settings</strong>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->

<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged  w36">
                    </div>
                    <div class="in">
                        <strong>Adrian</strong>
                        <div class="text-muted">4029209</div>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                    </a>
                </div>
                <!-- * profile box -->
                <!-- balance -->
                <div class="sidebar-balance">
                    <div class="listview-title">Balance</div>
                    <div class="in">
                        <h1 class="amount">100.000</h1>
                    </div>
                </div>
                <!-- * balance -->



                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>

                            <div class="in">
                                Home
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-pages.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Transaksi
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-components.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="diamond-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Turnament
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">Others</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="app-settings.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Settings
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="component-messages.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Support
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-login.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Log out
                            </div>
                        </a>
                    </li>


                </ul>
                <!-- * others -->


            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->



<!-- iOS Add to Home Action Sheet -->
<div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add to Home Screen</h5>
                <a href="#" class="close-button" data-bs-dismiss="modal">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content text-center">
                    <div class="mb-1"><img src="<?php echo base_url();?>assets/img/logo.png" alt="image" class="imaged w64 mb-2">
                    </div>
                    <div>
                        Install <strong>Ellunagym</strong> on your iPhone's home screen.
                    </div>
                    <div>
                        Tap <ion-icon name="share-outline"></ion-icon> and Add to homescreen.
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" data-bs-dismiss="modal" id="installBtn">Install</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- * iOS Add to Home Action Sheet -->


<!-- Android Add to Home Action Sheet -->
<div class="modal inset fade action-sheet android-add-to-home" id="android-add-to-home-screen" tabindex="-1"
role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add to Home Screen</h5>
            <a href="#" class="close-button" data-bs-dismiss="modal">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <div class="modal-body">
            <div class="action-sheet-content text-center">
                <div class="mb-1">
                    <img src="<?php echo base_url();?>assets/img/logo.png" alt="image" class="imaged w64 mb-2">
                </div>
                <div>
                    Install <strong>Ellunagym</strong> on your Android's home screen.
                </div>
                <div>
                    Tap <ion-icon name="ellipsis-vertical"></ion-icon> and Add to homescreen.
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- * Android Add to Home Action Sheet -->

<?php 
require DOC_ROOT_PATH . $this->config->item('footer1');
?>
<script>
    // Add to Home with 2 seconds delay.
    //AddtoHome("2000", "twice");
</script>

</body>

</html>