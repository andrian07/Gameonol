
<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="<?php echo base_url(); ?>Dashboard" class="item">
        <div class="col" >
            <ion-icon name="home-outline"></ion-icon>
            <strong>Home</strong>
        </div>
    </a>
    <a href="<?php echo base_url(); ?>Transaction" class="item">
        <div class="col">
            <ion-icon name="document-text-outline"></ion-icon>
            <strong>Transaksi</strong>
        </div>
    </a>
    <a href="<?php echo base_url(); ?>Transaction/Qrcode" class="item">
        <div class="col">
            <div class="action-button large">
                <ion-icon name="qr-code-outline" role="img" class="md flip-rtl hydrated"></ion-icon>
            </div>
            <strong>Bayar</strong>
        </div>
    </a>
    <a href="<?php echo base_url(); ?>Turnament" class="item">
        <div class="col">
            <ion-icon name="game-controller-outline"></ion-icon>
            <strong>Turnamen</strong>
        </div>
    </a>
    <a href="<?php echo base_url(); ?>setting" class="item">
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
                        <strong><?php echo $_SESSION['user_name']; ?></strong>
                        <div class="text-muted"><?php echo $data['member_data'][0]['member_code']; ?></div>
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
                        <h1 class="amount">Rp. <?php echo $data['member_data'][0]['member_saldo']; ?></h1>
                    </div>
                </div>
                <!-- * balance -->



                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="<?php echo base_url(); ?>Dashboard" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>

                            <div class="in">
                                Home
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Transaction" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Transaksi
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Turnament" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="game-controller-outline"></ion-icon>
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
                        <a href="<?php echo base_url(); ?>setting" class="item">
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
                        <a href="<?php echo base_url();?>Auth/logout" class="item">
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
