<?php 
define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
require DOC_ROOT_PATH . $this->config->item('header1');
?>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="<?php echo base_url() ?>Auth" class="headerButton">
                Login
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>Register now</h1>
            <h4>Create an account</h4>
        </div>
        <div class="section mb-5 p-2">
            <form action="index.html">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="phone">No HP</label>
                                <input type="number" class="form-control" id="phone" placeholder="No HP">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="gender">Jenis Kelamin</label>
                                <select class="form-control" id="gender">
                                    <option value="L">Pria</option>
                                    <option value="P">Wanita</option>
                                </select>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="pass">Password</label>
                                <input type="password" class="form-control" id="pass">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="cfpass">Confirm Password</label>
                                <input type="password" class="form-control" id="cfpass">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="pass">Kore Referal</label>
                                <input type="text" class="form-control" id="referal_code">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="form-button-group transparent">
                    <button id="btnsave" class="btn btn-primary btn-block btn-lg">Register</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->

    <?php 
    require DOC_ROOT_PATH . $this->config->item('footer1');
    ?>

    <script type="text/javascript">

        $('#btnsave').click(function(e){
            e.preventDefault();
            var name          = $("#name").val();
            var phone         = $("#phone").val();
            var email         = $("#email").val();
            var gender        = $("#gender").val();
            var pass          = $("#pass").val();
            var cfpass        = $("#cfpass").val();
            var referal_code  = $("#referal_code").val();
            let csrfName = $('meta[name=csrf-name]').attr('content');
            let csrfHash = $('meta[name=csrf-hash]').attr('content');

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Register/save_member",
                dataType: "json",   
                data: {
                    [csrfName]: csrfHash,    // kirim CSRF DINAMIS
                    name:name,
                    phone:phone,
                    email:email,
                    gender:gender,
                    pass:pass,
                    cfpass:cfpass,
                    referal_code:referal_code
                },
                success : function(data){
                    console.log(data);
                    if (data.result.csrf_name && data.result.csrf_hash) {
                        $('meta[name=csrf-name]').attr('content', data.result.csrf_name);
                        $('meta[name=csrf-hash]').attr('content', data.result.csrf_hash);
                    }
                    if (data.code == "200"){
                        window.location.href = "<?php echo base_url(); ?>Auth";
                        Swal.fire('Saved!', '', 'success');
                    }else {
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: data.result.result,
                    })
                  }
              }
          });
        });
    </script>