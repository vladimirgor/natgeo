<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 15.10.2015
 * Time: 18:34
 */
echo 'php_code'."</br>";
foreach ( $_POST as $key => $value )
{
    echo 'key-'.$key."</br>";
    echo 'value-'.$value."</br>";
}