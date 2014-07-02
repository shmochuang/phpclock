<?php 
# set time zone
date_default_timezone_set('America/New_York');

$time_zone = date('e');

#get current time
$current_time = date('g:i a');
$current_hour = date('G');



# switch between images and background colors
# create if elseif statements for:
# morning
if ($current_hour >= 05 && $current_hour < 11){
	#morning image
	$image = 'php-morning.png';
	
	#morning background class
	$class = 'morning';
}
# afternoon
elseif ($current_hour >= 11 && $current_hour < 16){
	#afternoon image
	$image = 'php-afternoon.png';
	
	#afternoon background class
	$class = 'afternoon';
	
}
# evening
elseif ($current_hour >= 16 && $current_hour < 20){
	#evening image
	$image = 'php-evening.png';
	
	#evening background class
	$class = 'evening';
}
# night
else {
	#night image
	$image = 'php-night.png';
	
	#night background class
	$class = 'night';
}
echo $class;
echo $image;