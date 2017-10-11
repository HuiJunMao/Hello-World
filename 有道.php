<?php
/**
 * Created by PhpStorm.
 * User: maohuijun
 * Date: 2017/10/6
 * Time: 下午3:03
 */function translation($a){
    $seperation = (explode(",",$a));
    $ap=$seperation[0];
    $pe=$seperation[1];
    $gr=$seperation[2];
    print_r($ap);
    print_r($pe);
    print_r($gr);
    $url = "http://fanyi.youdao.com/openapi.do?keyfrom=xujiangtao&key=1490852988&type=data&doctype=json&version=1.1&q=$ap".$content;
    $list = file_get_contents($url);
    $js_de = json_decode($list,true);
    print_r($js_de);
    $url = "http://fanyi.youdao.com/openapi.do?keyfrom=xujiangtao&key=1490852988&type=data&doctype=json&version=1.1&q=$pe".$content;
    $list = file_get_contents($url);
    $js_de = json_decode($list,true);
    print_r($js_de);
    $url = "http://fanyi.youdao.com/openapi.do?keyfrom=xujiangtao&key=1490852988&type=data&doctype=json&version=1.1&q=$gr".$content;
    $list = file_get_contents($url);
    $js_de = json_decode($list,true);
    print_r($js_de);
}
translation("apple,pear,grape");

