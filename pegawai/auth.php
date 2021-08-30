
<?
sesion_start();
if(!isset($_SESSION["username"])) {
	heaer("Location: login.php");
	exit(); }
	?>
}