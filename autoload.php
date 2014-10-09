<?php
// Author: zbqyexingknog
// Creat Date: 2014.9
// Email: zbqyexingkong@163.com
// Github:https://github.com/zbqyxingkong

#自动实例化需要使用的类,其他每个.php文件都应include此文件
function __autoload($class_path) {

	header("Content-type: text/html; charset=utf-8");
	define("AUTOPATH", str_replace("\\", "/", dirname(__FILE__)) . '/');
	$classname = AUTOPATH . "funcclass/" . $class_path . ".class.php";
	// echo $classname . "<br/>";
	if (file_exists($classname)) {
		include_once ($classname);
		// echo $classname;
	} else {
		echo "<script>alert('$classname 不存在！');</script>";
	}
}

?>