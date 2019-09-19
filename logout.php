<?php
  session_start();
  session_destroy();
  echo "<script>alert('Anda telah keluar dari Halaman Utama'); window.location = 'index'</script>";
?>
