<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>留言板</title>
<style>
div.one{width:1200px;height:500px;background:url(images/duihua.jpg) no-repeat;}
</style>
</head>
<body>
<div>
<div><a class="btn btn-primary" href="index.html">返回</a></div>
<div class="one">
       <?php include("php/conn.php")?><?php

	if(isset($_POST["submit"])){
		    $gsex=$_POST['sex'];
    $grelation=$_POST['relation'];
    $gname=$_POST['name'];
    $gduihua=$_POST['duihua'];
	$re="$info->name";
	$cha="insert into duihua(sex,relation,name,duihua,dtime) values('$gsex','$grelation','$gname','$gduihua',sysdate())";
	$chax="SELECT * FROM duihua order by dtime desc limit 0,5;";
	$charu=mysql_query($cha,$connID);
    $chaxun=mysql_query($chax,$connID);
	$info=mysql_fetch_array($chaxun);
	}	
    if(!$info){
		echo "<font color='red'>无信息</font>";
		}
		do{
			?><h1 style="color:#60F"><?php echo $info[2].":";?></h1><p><?php echo "我的".$info[1]?><h style="color:blue;"><?php echo $info[2]?></h><?php echo $info[3]?><?php echo "你好"."我已在".$info[4]."收到你发的信息:"?><p style="color:#0F0"><?php echo $info[0]?></p><?php echo "我会尽快回复你";?></p><?php
			}while($info=mysql_fetch_array($chaxun));
	
	mysql_close($connID);?>
	  </div>
</div>
</body>
</html>