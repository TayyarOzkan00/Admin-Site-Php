<?php include "header.php";

$kullanicisor=$db->prepare("SELECT * FROM kullanici");
$kullanicisor->execute();




?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste</h4>
                  <p class="card-description">
                    Kullanıcı <code>.Listesi</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Ad Soyad</th>
                          <th>Zaman</th>
                          <th>Tel</th>
                          <th>Mail</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
                         
                         while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>
                        
                        <tr>
                          <td><?php echo $kullanicicek['kullanici_adsoyad'] ?></td>
                          <td><?php echo $kullanicicek['kullanici_zaman'] ?></td>
                          <td><?php echo $kullanicicek['kullanici_gsm'] ?></td>
                          <td><?php echo $kullanicicek['kullanici_mail'] ?></td>
                          <td><center><a href="restart.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                          <td><center><a href="../netting/islem.php?kullanici_id=<?php echo $kullanicicek[kullanici_id];?> &kullanicisil=ok "><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                        </tr>

                         <?php }                        
                         ?>


                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
     <?php include "footer.php" ?>