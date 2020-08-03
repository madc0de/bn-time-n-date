<?php
/*
Plugin Name: Bangla Date And Time
Plugin URI: https://github.com/madc0de/bn-time-n-date
Description: This is just any wordpress site English language all date and time convert to bangla language.
Version: 1.0
Author: Rayhan
Author URI: https://github.com/madc0de
*/


function make_bangla_number($str)
{
$engNumber = array(1,2,3,4,5,6,7,8,9,0);
$bangNumber = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
$engMonth = array("January","February","March","April","May","Jun","July","August","September","October","November","December");
$bangMonth = array("জানুয়ারি","ফেব্রুয়ারি","মার্চ","এপ্রিল","মে","জুন","জুলাই","আগস্ট","সেপ্টেম্বর","অক্টোবর","নভেম্বর","ডিসেম্বর");
$converted = str_replace($engNumber, $bangNumber, $str);
$converted = str_replace($engMonth, $bangMonth, $converted);

return $converted;
}
  
add_filter( 'get_the_time', 'make_bangla_number' );
add_filter( 'the_date', 'make_bangla_number' );
add_filter( 'get_the_date', 'make_bangla_number' );
add_filter( 'comments_number', 'make_bangla_number' );
add_filter( 'get_comment_date', 'make_bangla_number' );
add_filter( 'get_comment_time', 'make_bangla_number' );


?>
