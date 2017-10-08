<?php
/**
 * Created by PhpStorm.
 * User: maohuijun
 * Date: 2017/10/6
 * Time: 下午3:03
 */$apple= "apple,pear,grape";
 $happy = (explode(",",$apple));
print_r($happy);
$url = "http://www.youdao.com";
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$contents = curl_exec($ch);
curl_close($ch);
echo $contents;