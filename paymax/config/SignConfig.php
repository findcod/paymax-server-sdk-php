<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/7 下午3:08
 * Description:
 */

namespace Paymax\config;


class SignConfig
{
    //商户自己的私钥
    //样例 见 rsa_private_key.pem
    private static $privateKeyPath;

    //Paymax提供给商户的SecretKey，登录网站后查看
    private static $secretKey;

    //Paymax提供给商户的公钥路径
    //【登录网站后查看,把它保存到一个pem文件中】
    //样例 见 paymax_rsa_public_key.pem
    private static $paymaxPublicKeyPath;

    /**
     * @return mixed
     */
    public static function getPrivateKeyPath()
    {
        return self::$privateKeyPath;
    }

    /**
     * @param mixed $privateKeyPath
     */
    public static function setPrivateKeyPath($privateKeyPath)
    {
        self::$privateKeyPath = $privateKeyPath;
    }

    /**
     * @return mixed
     */
    public static function getSecretKey()
    {
        return self::$secretKey;
    }

    /**
     * @param mixed $secretKey
     */
    public static function setSecretKey($secretKey)
    {
        self::$secretKey = $secretKey;
    }

    /**
     * @return mixed
     */
    public static function getPaymaxPublicKeyPath()
    {
        return self::$paymaxPublicKeyPath;
    }

    /**
     * @param mixed $paymaxPublicKeyPath
     */
    public static function setPaymaxPublicKeyPath($paymaxPublicKeyPath)
    {
        self::$paymaxPublicKeyPath = $paymaxPublicKeyPath;
    }

}