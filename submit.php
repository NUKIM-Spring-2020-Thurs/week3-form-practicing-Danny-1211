<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>

<?php
$name=$_POST["chname"];
	echo "姓名:".$name."<br/>";
$gen=$_POST["gender"];
	echo "性別:".$gen."<br/>";
$birthday=$_POST["day"];
	echo "出生年月日:".$birthday."<br/>";
$ID=$_POST["id"];
	echo "身分證字號:".$ID."<br/>";
$tellphone=$_POST["phone"];
	echo "連絡電話:".$tellphone."<br/>";
$parent1=$_POST["parent"];
	echo "緊急聯絡人姓名:".$parent1."<br/>";
$parentphone1=$_POST["parentphone"];
	echo "緊急聯絡人電話:".$parentphone1."<br/>";
$addre=$_POST["address"];
	echo "聯絡地址:".$addre."<br/>";
$mail=$_POST["email"];
	echo "信箱:".$mail."<br/>";
$sch=$_POST["school"];
	echo "就讀學校:".$sch."<br/>";
$inclass=$_POST["class"];
	echo "就讀班級:".$inclass."<br/>";
$comment1=$_POST["comment"];
	echo nl2br($comment1);  
$sub=$_POST["int"];
$countsub=count($sub);
//echo "count:".$countsub."<br/>";
	for($i=0;$i<$countsub;$i++){
		echo "<br/>"."有興趣的科目".$sub[$i];
	}
	
?>

