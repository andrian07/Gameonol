<?php 
define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
require DOC_ROOT_PATH . $this->config->item('header1');
?>
<!-- App Header -->
<div class="appHeader">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
        Setting
    </div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->


<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-3 text-center">
        <div class="avatar-section">
            <a href="#">
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w100 rounded">
                <span class="button">
                    <ion-icon name="camera-outline" role="img" class="md hydrated"></ion-icon>
                </span>
            </a>
        </div>
    </div>

    <div class="listview-title mt-1">Theme</div>
    <ul class="listview image-listview text inset no-line">
        <li>
            <div class="item">
                <div class="in">
                    <div>
                        Dark Mode
                    </div>
                    <div class="form-check form-switch  ms-2">
                        <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                        <label class="form-check-label" for="darkmodeSwitch"></label>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <div class="listview-title mt-1">Profile Settings</div>
    <ul class="listview image-listview text inset">
        <li>
            <a href="#" class="item">
                <div class="in">
                    <div>Ubah Nama</div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item">
                <div class="in">
                    <div>Update E-mail</div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item">
                <div class="in">
                    <div>Update No HP</div>
                </div>
            </a>
        </li>
    </ul>

    <div class="listview-title mt-1">Security</div>
    <ul class="listview image-listview text mb-2 inset">
        <li>
            <a href="#" class="item">
                <div class="in">
                    <div>Ganti PIN</div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item">
                <div class="in">
                    <div>Ubah Password</div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item">
                <div class="in">
                    <div>Log out devices</div>
                </div>
            </a>
        </li>
    </ul>


</div>
</div>
<!-- * App Capsule -->

<?php 
require DOC_ROOT_PATH . $this->config->item('botmenu');
require DOC_ROOT_PATH . $this->config->item('footer1');
?>

</body>

</html>