<?php include "header.php";

?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">Menü Düzenle  |                
                  <p class="card-description">
                    Site Ayar
                  </p>
                  <form class="forms-sample" action="../netting/islem.php" method = "POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Site Ad</label>
                      <input type="text" class="form-control" name="menu_ad" id="exampleInputUsername1" required="required" required="required"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Menü Url</label>
                      <input type="text" class="form-control" name="menu_url" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Menü Sıra</label>
                      <input type="text" class="form-control" name ="menu_sira"  id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Menü Detay</label>
                      <input type="text" class="form-control" name="menu_detay"  id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>

                    <button type="submit" name="menukaydet" class="btn btn-success">Kaydet</button>
                  </form>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include "footer.php" ?>