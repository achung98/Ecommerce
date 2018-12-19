<script type="text/javascript">
  alert("Done! You will be redirected to the main page");
</script>

<?php
    session_start();
    unset($_SESSION['cart']);
    header("refresh:1; url=../Main/main.php");
?>
