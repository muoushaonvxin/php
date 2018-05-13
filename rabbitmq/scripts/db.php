<?php

function commodity_data(){
	define("DB_HOST", "10.203.206.234");
	define("DB_USER", "hia");
	define("DB_PWD", "SubVersion1234567890");
	define("DB_NAME", "hia");

	$link = @mysql_connect(DB_HOST, DB_USER, DB_PWD);
	if(!$link){
		echo "<li>连接MySQL数据库失败!</li>";
		exit();   // 中止程序继续向下运行
	}

	// 选择MySQL数据库
	if(!mysql_select_db(DB_NAME)){
		echo "<li>选择数据库{DB_NAME}失败!</li>";
		exit();   // 中止程序向下运行
	}

	// 设置MySQL返回的数据的字符集
	mysql_query("set names utf8"); 

	$message = Array();
	$num = 0;

	// 数据库查询
	$result = mysql_query("select id,name,ask_price,bid_price from t_commodity");
	while($row = mysql_fetch_assoc($result)){
		$message[$num] = $row;
		$num+=1;
	}

	//关闭数据库连接
	mysql_close($link);
	
	return $message;
}

?>
