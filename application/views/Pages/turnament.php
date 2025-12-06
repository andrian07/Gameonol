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
    <div id="appCapsule" style="background: #ffffff;">
        <div class="section mt-2">
            <?php foreach ($data['turnament_info'] as $row_turney) { ?>
                <!-- card block -->
                <div class="card-block mb-2" style="height: 220px; !important">
                    <div class="card-main">
                        <img src="<?php echo base_url(); ?>assets/img/Turney/<?php echo $row_turney['ms_turnament_image']?>" style="width:100%;">
                    </div>
                </div>
                <!-- * card block -->
            <?php } ?>
        </div>
        <div class="section mt-2">
            <h1 style="font-size: 21px; color: #ff99ff;">
                PES Tournament PS4
            </h1>
            <div class="blog-header-info mt-2 mb-2">
                <div>
                    <h2 style="font-size: 15px;">Game:</h2>
                </div>
            </div>
            <div class="lead" style="margin-top:-15px;">
                <ul>
                    <li>Platform: PlayStation 4</li>
                    <li>Game: eFootball PES</li>
                </ul>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Durasi</th>
                            <td>5–6 menit</td>
                        </tr>
                        <tr>
                            <th scope="row">Extra Time</th>
                            <td>ON (Final & semifinal)</td>
                        </tr>
                        <tr>
                            <th scope="row">Penalti</th>
                            <td>ON</td>
                        </tr>
                        <tr>
                            <th scope="row">Injuries</th>
                            <td>OFF</td>
                        </tr>
                        <tr>
                            <th scope="row">Game Speed</th>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <th scope="row">Camera</th>
                            <td>Pan Normal (default universal)</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <div class="blog-header-info mt-2 mb-2">
                <div>
                    <h2 style="font-size: 15px;">Game:</h2>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-block btn-lg" data-bs-dismiss="modal">Join</button>
        </div>
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