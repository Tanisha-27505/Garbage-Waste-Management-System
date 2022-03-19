<?php
require_once("../connect.php");
  mysqli_query($con,"UPDATE services SET " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE idservices='".$_POST["idservices"]."'");
?>