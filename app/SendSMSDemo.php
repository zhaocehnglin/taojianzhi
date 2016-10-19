<?php
/*
 *	发送短信示例
 *  Copyright (c) 2016 The KXTSMS project authors. All Rights Reserved.
 *
 *  说明：
 * 以下代码只是为了方便客户测试而提供的样例代码，客户可以根据自己网站的需要，按照技术文档自行编写,并非一定要使用该代码。
 * 该代码仅供学习和研究使用，只是提供一个参考。
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
include_once ("KXTSmsSDK.php");
class  SendSMSDemo extends Model
{
    
 private $Address = "120.76.25.160";//IP地址 不加http://
private $Port = "7788";//端口
 private $Account = "Kexun_0188";//账户
private $Token = "Kx12345";//密码
private $UserId = "113";//用户Id
private $mobile = 15957132524;
private $body="你好，你的验证码是123456";
    /**
     * 发送短信
     * 发送合法的手机号
     * 短信内容
     */
    function sendSMS($mobile, $body)
    {
        global $Address, $Port, $Account, $Token, $UserId;
        //初始化SDK
        $rest = new KXTSmsSDK($Address, $Port, $Account, $Token, $UserId);
        // 发送短信
        $result = $rest->send($mobile, $body);
        if ($result == NULL) {
            echo "result error!";
            // break;
        }
        //自己代码业务逻辑
        echo $result;

    }
}
//调用
//sendSMS($mobile,"【科迅时代】您的验证码：88888.");
?>