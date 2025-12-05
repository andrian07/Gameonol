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
        Qr Code Pembayaran
    </div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->


<!-- App Capsule -->
<div id="appCapsule">
    
   
     
    <div class="section">
      
        <div class="splash-page mt-5 mb-5">
            <h2 class="mb-2" style="margin-top:50px;">Pembaryan QR Code</h2>
            <div class="mb-3">
                <img src="<?php echo base_url(); ?>assets/img/sample/qr.png" alt="QR Code" class="imaged square w240">
            </div>
            <h2 class="mb-2">Scan QR Code</h2>
            <p>
                Untuk Melakukan Pembayaran Sialahkan Tunjukan Ke Kasir
            </p>
        </div>
        <div class="row" style="margin-top:170px;">
                <div class="col-12">
                    <a href="app-pages.html" class="btn btn-lg btn-outline-secondary btn-block">Go Back</a>
                </div>
            </div>
    </div>

</div>
<!-- * App Capsule -->

<?php 
require DOC_ROOT_PATH . $this->config->item('botmenu');
require DOC_ROOT_PATH . $this->config->item('footer1');
?>

</body>

</html>