<?php
/*
Plugin Name: Russian Date by Axelnsk
Description: Русские даты. Русские названия месяцев и дней недели для WordPress. Что бы не склонять названия месяцев используйте "--"
Version: 1.0
Author: Axelnsk
Author URI: https://vk.com/axelnsk
*/


function axel_russian_date($timedate = '') {
	if ( substr_count($timedate , '--') > 0 ) return str_replace('--', '', $timedate);

	$rus_date_array = array (
	"Январь" => "января",
	"Февраль" => "февраля",
	"Март" => "марта",
	"Апрель" => "апреля",
	"Май" => "мая",
	"Июнь" => "июня",
	"Июль" => "июля",
	"Август" => "августа",
	"Сентябрь" => "сентября",
	"Октябрь" => "октября",
	"Ноябрь" => "ноября",
	"Декабрь" => "декабря",
	"January" => "января",
	"February" => "февраля",
	"March" => "марта",
	"April" => "апреля",
	"May" => "мая",
	"June" => "июня",
	"July" => "июля",
	"August" => "августа",
	"September" => "сентября",
	"October" => "октября",
	"November" => "ноября",
	"December" => "декабря",	
	"Sunday" => "воскресенье",
	"Monday" => "понедельник",
	"Tuesday" => "вторник",
	"Wednesday" => "среда",
	"Thursday" => "четверг",
	"Friday" => "пятница",
	"Saturday" => "суббота",
	"Sun" => "воскресенье",
	"Mon" => "понедельник",
	"Tue" => "вторник",
	"Wed" => "среда",
	"Thu" => "четверг",
	"Fri" => "пятница",
	"Sat" => "суббота",
	"th" => "",
	"st" => "",
	"nd" => "",
	"rd" => ""

	);
   	return strtr($timedate, $rus_date_array);
}

add_filter('the_time', 'axel_russian_date');
add_filter('get_the_time', 'axel_russian_date');
add_filter('the_date', 'axel_russian_date');
add_filter('get_the_date', 'axel_russian_date');
add_filter('the_modified_time', 'axel_russian_date');
add_filter('get_the_modified_date', 'axel_russian_date');
add_filter('get_post_time', 'axel_russian_date');
add_filter('get_comment_date', 'axel_russian_date');

