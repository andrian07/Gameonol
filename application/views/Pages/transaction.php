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
        History Transaksi
    </div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->


<!-- App Capsule -->
<div id="appCapsule">


    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">History</h2>
        </div>
        <div class="card">
            <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                <?php foreach($transaction_list as $row){ ?>
                    <li>
                     <a href="<?php echo base_url(); ?>Transaction/detailtransaction?id=<?php echo $row['transaction_id']; ?>" class="item content" style="display: none;">
                        <div class="icon-box bg-danger">
                            <ion-icon name="arrow-down-outline" role="img" class="md flip-rtl hydrated"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <strong>Transaksi</strong>
                                <div class="text-small text-secondary">#<?php echo $row['transaction_inv']; ?></div>
                            </div>
                            <div class="text-end">
                                <strong>Rp. <?php echo number_format($row['transaction_total_bill']); ?></strong>
                                <div class="text-small">
                                    <?php echo $row['created_at']; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

            <?php } ?>
            <!-- * item -->
        </ul>
    </div>
</div>
<div class="section mt-2 mb-2">
    <?php if($transaction_list != null){ ?>
        <a href="#" class="btn btn-primary btn-block btn-lg" id="loadMore">Load More</a>
    <?php }else{ ?>
        <a href="#" class="btn btn-primary btn-block btn-lg">Tidak Ada Transaksi</a>
    <?php } ?>
</div>


</div>
<!-- * App Capsule -->

<?php 
require DOC_ROOT_PATH . $this->config->item('botmenu');
require DOC_ROOT_PATH . $this->config->item('footer1');
?>

</body>

</html>