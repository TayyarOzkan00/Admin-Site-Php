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
                    İletişim Ayar
                  </p>
                  <form class="forms-sample" action="../netting/islem.php" method = "POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Telen Numarası</label>
                      <input type="text" class="form-control" name="ayar_tel" id="exampleInputUsername1" required="required" value="<?php echo $ayarcek['ayar_tel'] ?>" required="required"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Gsm Numarası</label>
                      <input type="text" class="form-control" name="ayar_gsm" value="<?php echo $ayarcek['ayar_gsm']; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Faks</label>
                      <input type="text" class="form-control" name ="ayar_faks" value="<?php echo $ayarcek['ayar_faks'] ?>" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Mail</label>
                      <input type="text" class="form-control" name="ayar_mail" value="<?php echo $ayarcek ['ayar_mail'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">İlçe</label>
                      <input type="text" class="form-control" name="ayar_ilce" value="<?php echo $ayarcek ['ayar_ilce'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">İl</label>
                      <input type="text" class="form-control" name="ayar_il" value="<?php echo $ayarcek ['ayar_il'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Adress</label>
                      <input type="text" class="form-control" name="ayar_adres" value="<?php echo $ayarcek ['ayar_adres'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Mesai</label>
                      <input type="text" class="form-control" name="ayar_mesai" value="<?php echo $ayarcek ['ayar_mesai'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="iletisimkaydet" class="btn btn-primary me-2">Düzenle</button>
                  </form>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include "footer.php" ?>