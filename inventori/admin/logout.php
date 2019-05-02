<?php
session_start();
session_destroy();
echo "<script>alert('Sampai Jumpa $_SESSION[nama_lengkap]');
window.location = 'index.php'</script>";

?>