<?php
include_once("../../koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM akun WHERE id='$id'");

?>
<script>
  alert('Success to delete!');
  window.location.href = 'list.php';
</script>
<?php
?>