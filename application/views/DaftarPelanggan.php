<div class="container-fluid">
    <div class="block-header">
        <h2>
            DAFTAR PELANGGAN
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <?php 
                        $notifikasi = $this->session->flashdata('notif');
                        if($notifikasi != null){
                            echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
                        }
                    ?>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="<?php echo base_url('index.php/Pelanggan/SendDataPelanggan')?>">
                        <br><div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="NamaPelanggan" placeholder="Nama Pelanggan">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="NoTelp" placeholder="No. Telepon">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="Password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="Alamat" cols="30" rows="5" class="form-control no-resize" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
</div>