<?php
require_once("../connect.php");
  mysqli_query($con,"UPDATE clients SET " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE idclients='".$_POST["idclients"]."'");
?>