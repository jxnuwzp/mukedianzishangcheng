<?php
/**
 * Created by PhpStorm.
 * User: tete
 * Date: 2017/2/9
 * Time: 22:16
 */
function alertMes($mes,$url){
    echo "<script>alert('{$mes}');</script>";
    echo "<script>window.location='{$url}';</script>";
}