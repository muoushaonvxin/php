<?php
include 'db.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('date.timezone','Asia/Shanghai'); 
set_time_limit(0);
$conn = new AMQPConnection(array(
	'host' => "10.203.206.234",
	'port' => "5672",
	'login' => "hitrader",
	'password' => "hitrader123",
	'vhost' => '/'
));

// 创建连接和channel
if (!$conn->connect()) {
	die("Cannot connect to the broker");
}

$e_name = 'ExCommodityPrice';
$k_route = 'price';

$channel = new AMQPChannel($conn);
$ex = new AMQPExchange($channel);
$ex->setName($e_name);
$ex->setType(AMQP_EX_TYPE_DIRECT);

$mes = commodity_data();

while(true){
	$send_res = $ex->publish(json_encode($mes), $k_route);
	if ($send_res !== true) {
		break; // 发送设置最大持仓单数参数信号失败
	}
}

?>
