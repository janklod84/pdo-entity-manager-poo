<?php 

function ptr($arr, $die = false)
{
	 echo '<pre>';
     print_r($arr);
     echo '</pre>';
     if($die) die;
}


function dd($arr, $die = false)
{
     echo '<pre>';
     var_dump($arr);
     echo '</pre>';
     if($die) die;
}