<?php
namespace Org\Com;

//短信发送类
class Sms {
	//CLX  参数
	private $username = 'HiTrader_gw0';
	private $password = 'HA4vRy6p';
	private $endpoint = 'http://sms1.clxnetworks.net:3800/sendsms';
	
	// //亿美软通API参数
	 private $_url = "http://sdk4rptws.eucp.b2m.cn:8080/sdkproxy/sendsms.action";
	 private $_cdkey = "6SDK-EMY-6688-JDVNQ";
	 private $_password = "823629";
	// private $_addserial = "Hitrader";

    /**
     * 
     * @param $code 国际区号
     * @param $tel 手机号
     * @param $message 短信内容
     * @param $sender 发信人
     * @param $type 短信内容编码类型 默认0. 内容含有汉字用2 针对 CLX  
     */
   
    public function SendSms($code,$tel, $message) {
     	set_time_limit(60);
    	//return $this->sendEmaySms($tel,$message);
    	//$sender = ($code == 86 || $code == "+86" || $code == "0086")? "BDN" : $sender;

     	 if ($code == '86') { 
     	 	return $this->sendEmaySms($tel,$message);
         } else { 
     		$number = $code.$tel;
     		$sender = "BDN";
     		$message = str_replace("【BDN】", "[BDN] ", $message);
       		//判断字符串中是否有中文
    		if (preg_match("/[\x7f-\xff]/", $message)) {  
		 		$unicode = 2;   //可以发中文汉字，针对繁体	
		 	} else { 
		 		$unicode = 0;
		 	}

     		return $this->sendClxSms($sender,$number,$message,$unicode);
     	 }
    }

    //CLX短信发送
    public function sendClxSms($sender,$number,$message,$unicode) { 

			$ch = curl_init();
			curl_setopt ($ch, CURLOPT_URL, $this->endpoint."?username=".$this->username."&password=".$this->password."&from=".$sender."&to=".$number."&text=".urlencode($message)."&coding=".$unicode);
            curl_setopt ($ch, CURLOPT_POST, false);   //get方式
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close ( $ch );

			if (isset($response) && strlen($response)==32) { 
					return true;	
			}else{
				return false;
			}



    }


    //   //亿美软通短信发送
    public function sendEmaySms($tel,$message) { 
     	//http://sdk4rptws.eucp.b2m.cn:8080/sdkproxy/sendsms.action?cdkey=6SDK-EMY-6688-JDVNQ&password=823629&phone=13311791399&message=aaa&addserial=Hitrader
     	$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $this->_url."?cdkey=".$this->_cdkey."&password=".$this->_password."&phone=".$tel."&message=".urlencode($message));

		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
		$result = curl_exec($ch);
		curl_close($ch);

		$xml = simplexml_load_string(trim($result));//解析返回的XML数据

		if (isset($xml->error) && (string) $xml->error == 0) { 
			return true;
		} else { 
			return false;
		}
    }










  //   public function SendSms($code,$tel, $message, $sender='Hitrader') {
  //    	set_time_limit(60);

  //   	$sender = ($code == 86 || $code == "+86" || $code == "0086")? "海锤" : $sender;

  //   	if ($code == 86 || $code == "+86" || $code == "0086") { 
  //   		return $this->sendEmaySms($tel,$message);
  //   	} else { 
  //   		$number = $code.$tel;
  //   		$sender = ($code == 1 || $code == "+1" || $code == "001")? "12184141128" : $sender;
  //   		$message = str_replace("【Hitrader】", "[HiTrader] ", $message);
  //   		//判断字符串中是否有中文
  //   		if (preg_match("/[\x7f-\xff]/", $message)) {  
		// 		$unicode = true;	
		// 	} else { 
		// 		$unicode = false;
		// 	}

  //   		return $this->sendNexmoSms($sender,$number,$message,$unicode);
  //   	}
  //   }

  //   //Nexmo短信发送
  //   public function sendNexmoSms($sender,$number,$message,$unicode = false) { 
  //   	try {
  //   		$params = array(
		//         'api_key' => $this->key,
		//         'api_secret' => $this->secret,
		//         'to' => $number,
		//         'from' => $sender,
		//         'text' => $message
		//     );
		//     if ($unicode === true) { 
		//     	$params['type'] = "unicode"; 
		//     }

	 //    	$url = 'https://rest.nexmo.com/sms/json?'. http_build_query($params);

		// 	$ch = curl_init($url);
		// 	curl_setopt ( $ch, CURLOPT_HEADER, 0 ); //设置header
		// 	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 ); //要求结果为字符串且输出到屏幕上
		// 	curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false);
		// 	$response = curl_exec($ch);

		// 	curl_close ( $ch );
		// 	if ($response != false) { 
		// 		$obj = json_decode($response);
		// 		if (isset($obj->messages[0]->status) && $obj->messages[0]->status == 0) { 
		// 			return true;
		// 		}
		// 		return false;
		// 	}

		// } catch (Exception $e) {
		// 	return false;
		// }

  //   }

  









    


    
}


