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
                    Sosyal Ayarlar
                  </p>
                  <form class="forms-sample" action="../netting/islem.php" method = "POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Maps</label>
                      <input type="text" class="form-control" name="ayar_maps" id="exampleInputUsername1" required="required" value="<?php echo $ayarcek['ayar_maps'] ?>" required="required"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Analystic</label>
                      <input type="text" class="form-control" name="ayar_analystic" value="<?php echo $ayarcek['ayar_analystic']; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Zopim</label>
                      <input type="text" class="form-control" name ="ayar_zopim" value="<?php echo $ayarcek['ayar_zopim'] ?>" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Facebook</label>
                      <input type="text" class="form-control" name="ayar_facebook" value="<?php echo $ayarcek ['ayar_facebook'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Twitter</label>
                      <input type="text" class="form-control" name="ayar_twitter" value="<?php echo $ayarcek ['ayar_twitter'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Google</label>
                      <input type="text" class="form-control" name="ayar_google" value="<?php echo $ayarcek ['ayar_google'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Youtube</label>
                      <input type="text" class="form-control" name="ayar_youtube" value="<?php echo $ayarcek ['ayar_youtube'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="sosyalkaydet" class="btn btn-primary me-2">Düzenle</button>
                  </form>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include "footer.php" ?>