<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>tt</title>
</head>
<?php
	
	$tt=new ttAPI ;
	$Fond_tt=$tt->Fund();
	var_dump($Fond_tt);
	
	class ttAPI {
	var  $access_key="25608af3-d9a8-4854-b034-4134acb5dfca";
	var  $secret_key="1058AB3D9240F4131A29EF5BBA86E94F8064795B43A2976B";
	
	function httpRequest($pUrl, $pData){
		$tCh = curl_init();
		curl_setopt($tCh, CURLOPT_POST, true);
		curl_setopt($tCh, CURLOPT_POSTFIELDS, $pData);
		curl_setopt($tCh, CURLOPT_HTTPHEADER, array("Content-type: application/x-www-form-urlencoded"));
		curl_setopt($tCh, CURLOPT_URL, $pUrl);
		curl_setopt($tCh, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($tCh, CURLOPT_SSL_VERIFYPEER, false);
		$tResult = curl_exec($tCh);
		curl_close($tCh);
		$tResult=json_decode ($tResult,true);
		return $tResult;
	}
	
	function createSign($pParams = array()){    
		$tPreSign = http_build_query($pParams, '', '&');
		$SecretKey = $this->secret_key;
		$tSign=hash_hmac('md5',$tPreSign,$SecretKey);
		$pParams['sign'] = $tSign;
		$pParams['reqTime'] = time()*1000;
		$tResult=http_build_query($pParams, '', '&');
		return $tResult;
	}
	
	 function Fund(){
		 $parameters=array("accessKey"=>$this->access_key);
		 $url='https://api.ttex.com/member/getAccount?';
		 $post=$this->createSign($parameters);
		 $res=$this->httpRequest($url,$post);
		 return $res;
	}	

}
?>
<body>
</body>
</html>
