<?php
// Author: zbqyexingknog
// Creat Date: 2014.10
// Email: zbqyexingkong@163.com
// Github:https://github.com/zbqyxingkong
include_once ("../autoload.php");

class savemail {
	private $email;
	private $result;

/**
 * 注册页面逻辑功能类的构造函数
 * @param  $email 注册验证邮箱
 */
	function __construct($email) {
		
		$this->email = trim($email);
		$this->save();
	}

	/**
	 * 返回注册后结果信息
	 * @return boolean 返回布尔类型值
	 */
	function getResult() {
		return $this->result;
	}

	/**
	 * 注册逻辑功能实现函数，并通过邮箱验证
	 * @return
	 */
	function save() {
		$operdb = new operatedb();
		$sql = "select mail from useremail where mail = '$this->email'";
		$query = $operdb->executeSQL($sql);

		if (is_array($query)) {
			$this->result = false;
			return;
		}

		$sql = "insert into `useremail` (`mail`) values ({$this->email}')";
		$this->result = $operdb->executeSQL($sql);

	}

}

?>
