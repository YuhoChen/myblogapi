<?php

function postimg($posturl,$path){

    $obj = new CurlFile($path);
    $obj->setMimeType("application/octet-stream");//必须指定文件类型，否则会默认为application/octet-stream，二进制流文件</span>
    $post['file'] =  $obj;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, false);
    //启用时会发送一个常规的POST请求，类型为：application/x-www-form-urlencoded，就像表单提交的一样。
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Chrome 42.0.2311.135');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_BINARYTRANSFER,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
    curl_setopt($ch, CURLOPT_URL, $posturl);//上传类
    $info= curl_exec($ch);
    curl_close($ch);
    return $info;
}
echo postimg('http://120.79.33.193:8888/upload/localhost','/home/yuhao/Pictures/Selection_007.png');




