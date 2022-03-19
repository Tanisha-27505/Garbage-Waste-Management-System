<?php
require_once("../letsmerge.php");
  mysqli_query($con,"UPDATE suppliers SET " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE idsuppliers='".$_POST["idsuppliers"]."'");
?>