<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
  </head>
    <body  style="background-image:url('p4.jpg')">
<p id="demo"></p>

	<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
<script>
</script>
<style>
.button1{
width:30% 
;}

.s{
position:absolute;
top:230px;
	left:20px;
	
}

.s2{
position:absolute;
top:290px;
	left:20px;
	
}

.s3{
position:absolute;
top:360px;
	left:20px;
	
}

.s4{
position:absolute;
top:440px;
	left:20px;


	
}
.d{
position:absolute;
top:380px;
	left:1px;
	
}
.d2{
	position:absolute;
top:450px;
	left:1px;
	
}

.d0{
position:absolute;
top:300px;
	left:1px;
		
}

.d00{
position:absolute;
top:240px;
	left:1px;
		
}
.c{position:absolute;

}


.b1{
	width:30%;
background-color:yellow;
	}
.button2{width:15% ;}
.a{
	position:absolute;
	top:300px;
	right:10px;
	border:3px solid black}
.bb{position:absolute;
	background-color:yellow;
	width:10%;
	height:8%;
	top:530px;
	right:80px;
	}
	
.new{
position:absolute;
	width:10%;
	height:8%;
	top:490px;
	right:80px;
	background-color:orange;
	
}

	</style>
<div>
<div font="5px"><div id="clockdiv"></div></font></div>
<script> 
var time_in_minutes =1;
var current_time = Date.parse(new Date());
var deadline = new Date(current_time + time_in_minutes*60*1000);


function time_remaining(endtime){
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor( (t/1000) % 60 );
	var minutes = Math.floor( (t/1000/60) % 60 );
	var hours = Math.floor( (t/(1000*60*60)) % 24 );
	var days = Math.floor( t/(1000*60*60*24) );
	return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
}
function run_clock(id,endtime){
	var clock = document.getElementById(id);
	function update_clock(){
		var t = time_remaining(endtime);
		clock.innerHTML = 'TIME LEFT:'+t.minutes+':'+t.seconds;
		if(t.total<=0){ clearInterval(timeinterval); 
		
		setInterval('document.quiz.submit()',1);
		}
	}
	update_clock(); // run function once at first to avoid delay
	var timeinterval = setInterval(update_clock,1000);
}
run_clock('clockdiv',deadline);
</script> 

<div  class=text-center><font color="blue"><b><u><font size="6">COMPUTER SCIENCE EXAMINATION</u><b></div><br>

<form method=post action="submit2.php"> 
<font size="5"><font color="red">7. Product of first n natural numbers</font><br>

<div ><font size="3" > <br><div class="d00"><input type="radio" name="g" value="d"></div><div class="border border-dark button1 s"> <input type="button"class="btn btn-primary btn-lg btn-block"value="A            n(n+1)"> </div>
<br><div class="d0"><input type="radio" name="g" value="d"></div><div class="border border-dark button1 s2"><input type="button" class="btn btn-primary btn-lg btn-block" value="B                      n" > </div>
 <br><div class="d"><input type="radio" name="g" value="0.3"></div><div class="border border-dark button1 s3"><input type="button" class="btn btn-primary btn-lg btn-block "value="C            all factors"></div>
 <br><div class="d2"><input type="radio" name="g" value="factorial"></div><div class="border border-dark button1 s4"><input type="button"class="btn btn-primary btn-lg btn-block " value="D          factorial" ></div>


</div>
<br>
<div class="a">
<a href="test2.php"><button type="button" class="rounded-circle b1">1</button></a>

    <a href="2.php"> <button type="button" class="rounded-circle b1">2</button></a>

<a href="3.php"><button type="button" class="rounded-circle b1">3</button></a>
<a href="4.php"><button type="button" class="rounded-circle b1">4</button></a>
<a href="5.php"><button type="button" class="rounded-circle b1">5</button></a>
<a href="6.php"><button type="button" class="rounded-circle b1">6</button></a>
<a href="7.php"><button  type="button" class="rounded-circle b1">7</button></a>
<a href="8.php"><button type="button" class="rounded-circle b1">8</button></a>
<a href="9.php"><button  type="button" class="rounded-circle b1">9</button></a>
<a href="10.php"><button type="button" class="rounded-circle b1">10</button></a>
</div>
<input type="submit" class="new" value="SUBMIT EXAM">

 <a href="8.php"><button type="button" class="bb">SAVE and NEXT</button></a>