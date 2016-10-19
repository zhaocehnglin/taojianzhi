<?php
/*
 *  Copyright (c) 2016 The KXTSMS project authors. All Rights Reserved.
 *
 * 说明：
 * 以下代码只是为了方便客户测试而提供的样例代码，客户可以根据自己网站的需要，按照技术文档自行编写,并非一定要使用该代码。
 * 该代码仅供学习和研究使用，只是提供一个参考。
 */
 class KXTSmsSDK{
	private $Address;
	private $Port;
	private $Account;
	private $Token;
	private $UserId;
	function __construct($Address,$Port,$Account,$Token,$UserId){
		$this->Address = $Address;
		$this->Port = $Port;
		$this->Account = $Account;
		$this->Token = $Token;
		$this->UserId = $UserId;
	}
	/**
     * 发起HTTP请求
     */
     function curl_post($url,$data,$header,$post=1)
     {
       //初始化curl
       $ch = curl_init();
       //参数设置  
       $res= curl_setopt($ch, CURLOPT_URL,$url);//请求地址
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);//不验证host
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//不验证证书
       curl_setopt($ch, CURLOPT_HEADER, 0);
	   curl_setopt($ch, CURLOPT_TIMEOUT, 50);
       curl_setopt($ch, CURLOPT_POST, $post);//请求方式
       if($post){
          curl_setopt($ch, CURLOPT_POSTFIELDS, $data);//post数据
	   }
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch,CURLOPT_HTTPHEADER,$header);//设置头信息
       $result = curl_exec ($ch);
       //连接失败
       if($result == FALSE){
          $result = "";
       }
       curl_close($ch);
       return $result;
     }
	/**
    * 发送短信
    * @param mobile 手机号码
    * @param body 内容
    */       
    function send($mobile, $body)
    {
        // 生成请求
		$body = urlencode($body);//url编码
		$url = "http://$this->Address:$this->Port/sms.aspx";
		$data = "action=send&userid=$this->UserId&account=$this->Account&password=$this->Token&mobile=$mobile&content=$body";
        // 生成包头
        $header = array("charset=utf-8");
        // 发送请求
        return $this->curl_post($url,$data,$header,1);
    }
 }
 ?>