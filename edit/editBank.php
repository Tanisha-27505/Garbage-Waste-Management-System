<?php
require_once("../connect.php");
  mysqli_query($con,"UPDATE banks SET " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE idbanks='".$_POST["idbanks"]."'");
?>