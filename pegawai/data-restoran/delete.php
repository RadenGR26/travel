<?php
include_once("../../koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM restoran WHERE id='$id'");

?>
<script>
  alert('Success to delete!');
  window.location.href = 'list.php';
</script>
<?php
?>