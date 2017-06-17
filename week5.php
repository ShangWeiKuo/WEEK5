<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP的時間函式</title>
	<style>
		.head {text-align:center; font-size:50px; font-weight:bold; font-family: DFKai-sb; padding-top: 30px}
		.legend {font-weight: bold}
		.nowtime {margin-left: 500px; text-align: center; font-weight: bold; width: 450px; border-color: green}
		.rest-time {margin-left: 495px; text-align: center; font-weight: bold; width: 460px; border-color: green}
		.picture-align {margin-left: 425px;text-align: center; width: 600px; font-weight:bold;border-color: green}
		.picture-head {float: left; font-weight: bold}
		.text-align {text-align: center; font-weight:bold}
		.picture-size {width: 600px}
		.picture-internal-size {width: 300px}
	</style>
</head>
<body> 
	<div class="head">
		末日時鐘
	</div>
	<br>
	<br>

	<fieldset class="nowtime">
	<?php 

	//$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

		echo date('Y年');

		switch(date('F'))
		{
			case 'January':
				echo "一月";
				break;

			case 'February':
				echo "二月";
				break;

			case 'March':
				echo "三月";
				break;

			case 'April':
				echo "四月";
				break;

			case 'May':
				echo "五月";
				break;

			case 'June':
				echo "六月";
				break;

			case 'July':
				echo "七月";
				break;

			case 'August':
				echo "八月";
				break;

			case 'September':
				echo "九月";
				break;

			case 'October':
				echo "十月";
				break;

			case 'November':
				echo "十一月";
				break;

			case 'December':
				echo "十二月";
				break;
		}
		echo date('d日');

		echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
		date_default_timezone_set('Asia/Taipei');
		echo date('H時i分s秒');

	echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
	switch(date('l'))
	{
		case 'Monday':
			echo "星期一";
			break;

		case 'Tuesday':
			echo "星期二";
			break;

		case 'Wednesday':
			echo "星期三";
			break;

		case 'Thursday':
			echo "星期四";
			break;

		case 'Friday':
			echo "星期五";
			break;

		case 'Saturday':
			echo "星期六";
			break;

		case 'Sunday':
			echo "星期日";
			break;
	}
	?>
	</fieldset>
	<br>
	<br>

	<fieldset class="rest-time">
	<?php
	$resttime = mktime(0, 0, 0, 12, 31, date('Y',time())) - time();

	$day =		(int) ($resttime / (86400));
	$hours = 	(int) (($resttime%86400) / 3600);
	$minutes = 	(int) (($resttime%3600) / 60);
	$seconds =	($resttime%60);

	echo "距離世界末日剩餘: " . $day . " 日 " . $hours . " 時 " . $minutes . " 分 " . $seconds . " 秒";
	?>
	</fieldset>
	<br>
	<br>

	<fieldset class="picture-align">

	<div class="picture-head">
		回顧今年每個月的風景:
	</div>
	<br>

	<div class="text-align">
	<?php
	echo "<br>";

		if (date('n')==1) 
		{
			echo "一月";
		}
		else if (date('n')==2) 
		{
			echo "二月";
		}
		else if (date('n')==3) 
		{
			echo "三月";
		}
		else if (date('n')==4) 
		{
			echo "四月";
		}
		else if (date('n')==5) 
		{
			echo "五月";
		}
		else if (date('n')==6) 
		{
			echo "六月";
		}
		else if (date('n')==7)
		{
			echo "七月";
		}
		else if (date('n')==8)
		{
			echo "八月";
		}
		else if (date('n')==9)
		{
			echo "九月";
		}
		else if (date('n')==10)
		{
			echo "十月";
		}
		else if (date('n')==11)
		{
			echo "十一月";
		}
		else if (date('n')==12)
		{
			echo "十二月";
		}
		echo "<br>";
	?>
	</div>

	<div class="picture-size">
	<?php
		if (date('n')==1) 
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2017/03/P7041300.jpg" class="picture-internal-size">';
		}
		else if (date('n')==2) 
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2017/03/P7040058.jpg" class="picture-internal-size">';
		}
		else if (date('n')==3)
		{
			echo '<img src="schoolday.jpg" class="picture-internal-size">';
		}
		else if (date('n')==4)
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2017/02/P7040129.jpg" class="picture-internal-size">';
		}
		else if ((date('n')+2)==5)
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2017/03/IMG_0220-2.jpg" class="picture-internal-size">';
		}
		else if (date('n')==6)
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2015/01/IMG_1374.jpg" class="picture-internal-size">';
		}
		else if (date('n')==7) 
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2016/11/P7021064.jpg" class="picture-internal-size">';
		}
		else if (date('n')==8)
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2014/09/IMG_4382.jpg" class="picture-internal-size">';
		}
		else if (date('n')==9)
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2015/01/IMG_2353.jpg" class="picture-internal-size">';
		}
		else if (date('n')==10) 
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2015/10/PA240540.jpg" class="picture-internal-size">';
		}
		else if (date('n')==11)
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2014/12/IMG_0464.jpg" class="picture-internal-size">';
		}
		else if (date('n')==12) 
		{
			echo '<img src="http://mmtstock.com/wp-content/uploads/2017/03/P1241112.jpg" class="picture-internal-size">';
		}
	?>
	</div>
	</fieldset>
</body>
</html>