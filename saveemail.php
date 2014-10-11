<?php

include_once ("autoload.php");

if (isset($_POST['submit'])) {

	$email = $_POST['email'];

	if ( !empty($email)) {

		$usereg = new savemail($email);

		$rest = $usereg->getResult();

		//用户邮箱保存失败操作
		if ($rest == false) {
			echo '<script>alert("用户名已存在，请换个其他的用户名");window.history.go(-1);</script>';
			exit;
		} else {
			echo '<script>window.location.href="#";</script>';//可将#号替换成需要跳转的页面地址
		}

	}

}

?>
