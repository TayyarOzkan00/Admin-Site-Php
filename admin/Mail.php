<?php include "header.php" ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">Genel Ayarlar  |
                <?php  
                    if ($_GET['durum']=="ok") {?>
                      <b style ="color:green";>İşlem Başarılı</b>
                    <?php } elseif ($_GET['durum']=="no") {?>
                      <b style ="color:red";>İşlem Başarısız</b>
                    <?php }
                    
                    ?>
       
                  <p class="card-description">
                    Mail Ayarlar
                  </p>
                  <form class="forms-sample" action="../netting/islem.php" method = "POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Host</label>
                      <input type="text" class="form-control" name="ayar_smtphost" id="exampleInputUsername1" required="required" value="<?php echo $ayarcek['ayar_smtphost'] ?>" required="required"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">User</label>
                      <input type="text" class="form-control" name="ayar_smtpuser" value="<?php echo $ayarcek['ayar_smtpuser'] ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" class="form-control" name ="ayar_smtppassword" value="<?php echo $ayarcek['ayar_smtppassword'] ?>" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Port</label>
                      <input type="text" class="form-control" name="ayar_smtpport" value="<?php echo $ayarcek ['ayar_smtpport'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Bakim</label>
                      <input type="text" class="form-control" name="ayar_bakim" value="<?php echo $ayarcek ['ayar_bakim'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="mailkaydet" class="btn btn-primary me-2">Düzenle</button>
                  </form>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include "footer.php" ?>
