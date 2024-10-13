<?php
session_start();
if (isset($_GET['mail']) && isset($_GET['code'])) {
  ?>
  <script>
    window.location.href = 'https://admin.perisai2023.id/qrscan.php?mail=<?=$_GET['mail']?>&code=<?=$_GET['code']?>'
  </script>
  <?php
  exit();
}
?>