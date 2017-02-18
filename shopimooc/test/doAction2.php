<?php
/**
 * Created by PhpStorm.
 * User: tete
 * Date: 2017/2/17
 * Time: 22:25
 */
//print_r($_FILES);
require_once '../lib/string.func.php';
require_once 'upload.func.php';
header("content-type:text/html;charset=utf-8");
foreach ($_FILES as $val){
    $mes=uploadFile($val);
    echo $mes;
}