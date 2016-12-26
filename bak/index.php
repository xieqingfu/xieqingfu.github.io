<hr>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>谢青福的主页</title>
<style>
div.bbg{width:100%;height:1000px;background:100% #3FF;background:url(images/bg.png);}
div.bg{margin-left:5%;vertical-align:top;width:1200px;height:900px;border:1px solid blue;background:url(images/bg.png ) no-repeat;}
div.topone{width:1200px;height:100px;float:top;background:no-repeat ;}
div.png{width:1200;height:70px;background:url("images/bg2.png");}
div.leftone{float:left;width:196px;height:700px;border:1px solid blue;background:no-repeat;}
div.lefttitle{color:#0F3;text-align:center;width:200px;height:165px;text-aligh:center;}
div.middleone{ opacity:.8;overflow:scroll;float:left;width:1000px;height:500px;;background:no-repeat;}
div.middleone1{opacity:.8;overflow:auto;width:98px;height:100px;float:right;border:1px solid blue;}
div.middleone2{ opacity:.8;overflow:scroll;float:left;width:880px;height:600px;border:1px solid blue;background:no-repeat;}
div.bottleone{float:left;width:600px;height:200px;background:  no-repeat ;}
div.png{width:1200;height:70px;}
div.bottleone1{float:right;width:600px;height:400px;background:no-repeat white;position:absolute;right:100px;top:700px;}

div.titlebg{width:1200px;height:30px;border:1px solid blue;}
div.title1{width:240px;height:30px;float:left;text-align:center;color:#909;background:no-repeat;}
div.bbottle{width:1200px height:1000px border:2px solid red;background:red;float:left;}
div.shengming{{width:1200px;height:100px;float:center;}
div.one{width:500px;height:500px;background:url(images/duihua.jpg) no-repeat;}

</style>
</head>
<body>
<div class="bbg";>
<div class="bg" ><!--背景控制-->

	<div class="topone";>
    <div class="png"></div><!--顶图<-->
		<div class="titlebg" >
        <div class="title1"  id="ti" color="blue";>主页</div> <div class="title1" id="ti1"><a href="jianjie.html" target="_self" onClick="color:blue;">简历</a></div><div class="title1" id="ti2"><a href="http://www.scdyzx.com/" target="_self" onClick="color:blue;">毕业学校</a></div><div class="title1" id="ti3"><a href="hometown.html" target="_self" onClick="color:blue;">家乡</a></div><div class="title1" id="ti4"><a href="hometown.html" target="_self" onClick="color:blue;">中江</a></div>

	   <!--导航--></div>
       </div><!--顶框-->
	<div class="leftone";><div class="lefttitle"><br/><br/><br/><a href="jianjie.html#ouxiang" target="_self" onClick="color:blue;">偶像</a></div><div class="lefttitle"><br/><br/><br/><a href="jianjie.html#dianying" target="_self" onClick="color:blue;">喜欢的电影</a></div><div class="lefttitle"><br/><br/><br/><a href="http://v.ifeng.com/mil/arms/201501/0127eae2-9a0c-4d6a-8389-1fd068567eca.shtml?ptag=vsogou" target="_self" onClick="color:blue;">喜欢的节目</a></div><div class="lefttitle"><br/><br/><br/><a href="jianjie.html#xue" target="_self" onClick="color:blue;">正在学习</a></div></div><!--左边框-->
    
	<div class="middleone";>
    <div class="middleone2" id="mid2"><img src="images/116.jpg" alt="" ></div>
     <div class="middleone1" id="mid1"><img src="images/1121.jpg" alt=""/></div><div class="middleone1" id="mid3"><img src="images/1131.jpg" alt=""/></div><div class="middleone1" id="mid4"><img src="images/1141.jpg" alt=""/></div><div class="middleone1" id="mid5"><img src="images/1151.jpg" alt=""/><p></p></div><div class="middleone1" id="mid6"><img src="images/1161.jpg" alt=""/></div>
   
    </div><!--中相册，视屏-->
    
	<div class="bottleone"><div>
    <form action="php.php" method="post" name="form">
    <textarea  method="post" name="duihua" cols="50" rows="5";></textarea>请你填入留言内容！<br/>
    <input type="text" name="name" >姓名<br/>
    你的性别:<input type="radio" name="sex" value="先生" checked>男
     <input type="radio" name="sex" value="女士" >女<br/>
     与我的关系:
     <input type="radio" name="relation" value="同学" checked>同学
       <input type="radio" name="relation" value="朋友">朋友
       <input type="radio" name="relation" value="老师">师生
    </div><!--文本域-->
    <input type="submit" name="submit">提交</form>
   
<!--底框-->
    <div class="bottleone1" >
    <div class="one">
       <?php include("php/conn.php")?><?php

	if(isset($_POST["submit"])){
		    $gsex=$_POST['sex'];
    $grelation=$_POST['relation'];
    $gname=$_POST['name'];
    $gduihua=$_POST['duihua'];
	$re="$info->name";
	$cha="insert into duihua(sex,relation,name,duihua,dtime) values('$gsex','$grelation','$gname','$gduihua',sysdate())";
	$chax="SELECT * FROM duihua order by dtime desc;";
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
    <p>&nbsp; </p>
    </div><!--显示留言-->
</div><!--背景结束。-->
<div class="bbottle"> </div><!--下介绍-->
<div class="shengming">本作品由谢青福制作，2014.1.12</div><!--声明-->
</div><!--大背景-->
<script>
window.onload=function(){
var	mid1=document.getElementById('mid1');//小图
var	mid2=document.getElementById('mid2');//大图
var	mid3=document.getElementById('mid3');
var	mid4=document.getElementById('mid4');
var	mid5=document.getElementById('mid5');
var	mid6=document.getElementById('mid6');
var ti=document.getElementById('ti');//标题背景
var ti1=document.getElementById('ti1');
var ti2=document.getElementById('ti2');
var ti3=document.getElementById('ti3');
var ti4=document.getElementById('ti4');
		//移入       
         ti.onmouseover=tii;
        function tii(){
     ti.style.background="url(images/bgc.png)";
        };
       ti1.onmouseover=tii1;
        function tii1(){
     ti1.style.background="url(images/bgc.png)";
        };  
          ti2.onmouseover=tii2;
        function tii2(){
     ti2.style.background="url(images/bgc.png)";
        };  
          ti3.onmouseover=tii3;
        function tii3(){
     ti3.style.background="url(images/bgc.png)";
        };  
          ti4.onmouseover=tii4;
        function tii4(){
     ti4.style.background="url(images/bgc.png)";
        };  
        //移除
        
         ti.onmouseout=tiio;
        function tiio(){
     ti.style.background="";
        };
       ti1.onmouseout=tii1o;
        function tii1o(){
     ti1.style.background="";
        };  
          ti2.onmouseout=tii2o;
        function tii2o(){
     ti2.style.background="";
        };  
          ti3.onmouseout=tii3o;
        function tii3o(){
     ti3.style.background="";
        };  
          ti4.onmouseout=tii4o;
        function tii4o(){
     ti4.style.background="";
        };
        //
        
	mid1.onmouseover=show1;
	function show1(){
		mid2.innerHTML='<img src="images/112.jpg" alt="">';
		}
		
		mid3.onmouseover=show3;
		function show3(){
		mid2.innerHTML='<img src="images/113.jpg" alt="">';
		}
		mid4.onmouseover=show4;
		function show4(){
		mid2.innerHTML='<img src="images/114.jpg" alt="">';
		}
		mid5.onmouseover=show5;
		function show5(){
		mid2.innerHTML='<img src="images/115.jpg" alt="">';
		}
		mid6.onmouseover=show6;
		function show6(){
		mid2.innerHTML='<img src="images/116.jpg" alt="">';
		}
        
	};
</script>
<!--js大图片变换-->
</body>
</html>
