<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=mydb', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM products  WHERE product_name  LIKE (:keyword) ORDER BY product_id  ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['product_name']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['product_code']).'\')">'.$name.'</li>';
}
?>