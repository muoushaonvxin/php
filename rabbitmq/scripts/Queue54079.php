<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('date.timezone','Asia/Shanghai'); 
set_time_limit(0);
$conn = new AMQPConnection(array(
    'host' => "10.47.39.123",
    'port' => "5672",
    'login' => "cjiajiaHT",
    'password' => "HitHt01.&>",
    'vhost' => '/'
));

// 创建连接和channel
if (!$conn->connect()) {
	die("Cannot connect to the broker");
}

$e_name = 'ExPhpToMt4.Dir';
$q_name = 'Queue54079';
$k_route = '54079';

$channel = new AMQPChannel($conn);
$ex = new AMQPExchange($channel);
$ex->setName($e_name);
$ex->setType(AMQP_EX_TYPE_DIRECT);

// 创建接受绑定反馈的队列Queue
$queue = new AMQPQueue($channel);
$queue->setName($q_name);
$queue->setFlags(AMQP_DURABLE);
$queue->declareQueue();

// 绑定交换机与队列，并指定路由键
$queue->bind($e_name, $k_route);

while (true){
    $messages = $queue->get(AMQP_AUTOACK); // 非阻塞模式
    if($messages !== false){
        //阻塞：做某件事情，直到完成，除非超时
        //非阻塞：尝试做，如果不能做，就不做（直接返回），如果能做，就做。
        $receive = chop($messages->getBody());   //右侧移除空格
        echo $receive."\n";
    }
}

?>
