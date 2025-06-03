<?php include 'includes/header.php'; ?>
<div class="container mt-4">
  <h2>Contact Us</h2>
  <form method="post" action="">
    <div class="mb-3">
      <input type="text" name="nama" placeholder="Nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <input type="email" name="email" placeholder="Email" class="form-control" required>
    </div>
    <div class="mb-3">
      <textarea name="pesan" placeholder="Pesan" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>
<?php include 'includes/footer.php'; ?>
