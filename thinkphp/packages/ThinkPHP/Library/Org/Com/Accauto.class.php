<?php
namespace Org\Com;


class Accauto{
	//自动开户
	public function acc($Operation,$MT4_account_name,$Email,$Phone,$Country){
    	$ch = curl_init();  

		$URL = "47.91.229.126:8576";

		//$params="{\"Operation\":\"Deposit\",\"MT4_account_name\":\"100852\",\"Money\":\"0.1\"}";  

		$params="{\"Operation\":\"$Operation\",\"MT4_account_name\":\"$MT4_account_name\",\"Email\":\"$Email\",\"Phone\":\"$Phone\",\"Country\":\"$Country\"}";  

		curl_setopt ($ch, CURLOPT_URL, $URL); //发贴地址  
		curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: text/json'));//设置header属性  
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
		curl_setopt($ch, CURLOPT_POST,true);  
		curl_setopt($ch, CURLOPT_POSTFIELDS,$params);  
		//curl_exec($ch);
		$file_contents = curl_exec($ch);//获得返回值
		//$aaa=json_decode($file_contents,true);
		//echo $aaa['Result'];
		
		curl_close($ch);
		return $file_contents; 
    }


    //自动入金MT4
    public function dep($Deposit,$MT4_account_name,$Money){
    	$ch = curl_init();  

		$URL = "47.91.229.126:8576";

		$params = "{\"Operation\":\"$Deposit\",\"MT4_account_name\":\"$MT4_account_name\",\"Money\":\"$Money\"}";  

		curl_setopt ($ch, CURLOPT_URL, $URL); //发贴地址  
		curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: text/json'));//设置header属性  
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
		curl_setopt($ch, CURLOPT_POST,true);  
		curl_setopt($ch, CURLOPT_POSTFIELDS,$params);  
		//curl_exec($ch);
		$file_contents = curl_exec($ch);//获得返回值
		curl_close($ch);
		return $file_contents;
    }

    //自动出金MT4
    public function with($Withdrawal,$MT4_account_name,$Money){
        $ch = curl_init();

        $URL = "47.91.229.126:8576";

        $params="{\"Operation\":\"$Withdrawal\",\"MT4_account_name\":\"$MT4_account_name\",\"Money\":\"$Money\"}";

        curl_setopt ($ch, CURLOPT_URL, $URL);
        curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: text/json'));
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_POST,true);
        curl_setopt ($ch, CURLOPT_POSTFIELDS,$params);

        $file_contents = curl_exec($ch);
        curl_close($ch);
        return $file_contents;

    }







    //找回MT4密码
    public function findMT4Pwd($GetNewPassWord,$account){
    		$ch = curl_init();  

			$URL = "47.91.229.126:8576";

			$params="{\"Operation\":\"$GetNewPassWord\",\"MT4_account_name\":\"$account\"}";

			curl_setopt ($ch, CURLOPT_URL, $URL); //发贴地址  
			curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: text/json'));//设置header属性  
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
			curl_setopt($ch, CURLOPT_POST,true);  
			curl_setopt($ch, CURLOPT_POSTFIELDS,$params);  
			//curl_exec($ch);
			$file_contents = curl_exec($ch);//获得返回值
			curl_close($ch);
			return $file_contents;
    }






     //查询对应MT4账户的余额，净值，仓位
    public function getMT4Info($QueryUserMarginInfo,$account){
    		$ch = curl_init();  

			$URL = "47.91.229.126:8576";

			$params="{\"Operation\":\"$QueryUserMarginInfo\",\"MT4_account_name\":\"$account\"}";

			curl_setopt ($ch, CURLOPT_URL, $URL); //发贴地址  
			curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-type: text/json'));//设置header属性  
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
			curl_setopt($ch, CURLOPT_POST,true);  
			curl_setopt($ch, CURLOPT_POSTFIELDS,$params);  
			//curl_exec($ch);
			$file_contents = curl_exec($ch);//获得返回值
			curl_close($ch);
			return $file_contents;
    }





















}



