<?php include 'includes/header.php'; include 'includes/db.php'; ?>
<div class="container mt-4">
  <h2>Checkout</h2>
  <p>Total dan QR Anda:</p>
  <?php
  $total = 0;
  if (!empty($_POST['qty'])) {
    foreach ($_POST['qty'] as $id => $jumlah) {
      if ($jumlah > 0) {
        $query = mysqli_query($conn, "SELECT * FROM menu WHERE id=$id");
        $data = mysqli_fetch_assoc($query);
        $subtotal = $data['harga'] * $jumlah;
        $total += $subtotal;
        mysqli_query($conn, "UPDATE menu SET stok = stok - $jumlah WHERE id = $id");
        echo '<p>'.$data['nama'].' x '.$jumlah.' = Rp'.$subtotal.'</p>';
      }
    }
  }
  echo '<h4>Total: Rp'.$total.'</h4>';
  ?>
  <img src="img/qr_dummy.png" alt="QR Code" width="200">
</div>
<?php include 'includes/footer.php'; ?>
