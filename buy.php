<?php include 'includes/header.php'; include 'includes/db.php'; ?>
<div class="container mt-4">
  <h2>Pilih Menu</h2>
  <form method="post" action="checkout.php">
    <div class="row">
      <?php
      $result = mysqli_query($conn, "SELECT * FROM menu");
      while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-md-3"><div class="card mb-4">
                <img src="menu_img/'.$row['gambar'].'" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">'.$row['nama'].'</h5>
                  <p>Harga: Rp'.$row['harga'].'</p>
                  <input type="number" name="qty['.$row['id'].']" min="0" max="'.$row['stok'].'" class="form-control mb-2" placeholder="Jumlah">
                </div>
              </div></div>';
      }
      ?>
    </div>
    <button type="submit" class="btn btn-success">Checkout</button>
  </form>
</div>
<?php include 'includes/footer.php'; ?>
