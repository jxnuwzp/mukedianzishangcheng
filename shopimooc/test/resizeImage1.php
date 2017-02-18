<?php
/**
 * Created by PhpStorm.
 * User: tete
 * Date: 2017/2/18
 * Time: 16:06
 */
$filename="des_big.jpg";
list($src_w,$src_h,$imagetype)=getimagesize($filename);
$mime=image_type_to_mime_type($imagetype);
//echo $mime;