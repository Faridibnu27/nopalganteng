<?php include 'includes/header.php'; include 'includes/db.php'; ?>
<div class="container mt-4">
  <h2>Daftar Menu Kantin</h2>
  <div class="row">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM menu");
    while($row = mysqli_fetch_assoc($result)) {
      echo '<div class="col-md-3"><div class="card mb-4">
              <img src="menu_img/'.$row['gambar'].'" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">'.$row['nama'].'</h5>
                <p>Harga: Rp'.$row['harga'].'</p>
                <p>Stok: '.$row['stok'].'</p>
              </div>
            </div></div>';
    }
    ?>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
