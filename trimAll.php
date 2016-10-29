<?php
/**
 * Created by PhpStorm.
 * User: zoco
 * Date: 16/10/29
 * Time: 17:10
 */

function trimall($str)//删除空格
{
    //去除空格，回车，tab
    // $before = array(" ","　","\t","\n","\r");
    // $after = array("","","","","");
    //去除空格
    $before = array(" ","　","\t");
    $after = array("","","");
    return str_replace($before,$after,$str);
}
$handle = fopen("before.txt",'r');
if($handle)
{
    while (!feof($handle))
    {
        $buffer = fgets($handle,4096);
        $buffer_s = trimall($buffer);
        file_put_contents('after.txt',$buffer_s,FILE_APPEND);
    }
}