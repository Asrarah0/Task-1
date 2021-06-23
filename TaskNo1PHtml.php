
<!DOCTYPE html>
<html dir="rtl">
<head >
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Gentium+Basic|Merienda&display=swap" rel="stylesheet">
<style>
.slidecontainer {
  width: 40%;
  margin-right:200px;
  margin-left:20px;
  margin-up:20px;
  color: #800080;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 20px;
  background: #ffffff;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
  
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 20px;
  background: #800080	;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
/*////////////////////////////////////////////*/
 h3 {
color: #800080;
margin-right:90px; 
font-family :'Gentium Basic'    
}       
section {
margin-top: 50px;   
}
h1 {
 font-family: 'Merienda';
 font-size: 150%;
 color: #800080;
}      
#content article {
margin-bottom: 30px;
}
        
#comments article {
background: #f9e6ff;
padding: 10px;
border-radius: 200px;
margin-bottom: 20px;
}
#comments1 {
background: #f9e6ff;
padding: 10px;
border-radius: 100px;
margin-bottom: 10px;
margin-left:200px;
margin-right:200px;
margin-top: 20px
}
        
#comments article header {
font-weight: bold;   
}
/*////////////////////////////////////////////*/
.button {
  color: #800080;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  float: left;
  background: #ffffff
}
.button1 {
  color: #800080;
  padding: 9px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  float: left;
  margin-left:200px;
  background: #ffffff 
}
</style>
<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
</head>
<body>
<header id="comments1">
<h1 align="center"> Task #1 <br>
<br>
لوحة تحكم لروبوت
</h1>
</header>
<form action="TaskNo1.php" method="POST">
<section id="comments">
<article>
<h3>المحرك رقم 1</h3>	
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange" name="motor1"> 
<p align="left"> Value: <span id="demo"></span></p> 
</div>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->	
<h3>المحرك رقم 2</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange1" name="motor2">
<p align="left"> Value: <span id="demo1"></span></p>
</div>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<h3>المحرك رقم 3</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange2" name="motor3">
<p align="left">Value: <span id="demo2"></span></p>
</div>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->	
<button type="button" class="button1"> إيقاف</button>	
<button type="button" class="button">تشغيل</button>
<button type="submit" class="button" name="sub" > حفظ</button> 
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->	
<h3>المحرك رقم 4</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange3" name="motor4">
<p align="left"> Value: <span id="demo3"></span></p>
</div>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->	
<h3>المحرك رقم 5</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange4" name="motor5">
<p align="left"> Value: <span id="demo4"></span></p>
</div>
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->	
<h3>المحرك رقم 6</h3>
<div class="slidecontainer">
<input type="range" min="0" max="180" value="90" class="slider" id="myRange5" name="motor6">
<p align="left"> Value: <span id="demo5"></span></p>
</form>
</div>	
</article>
</section>	
<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->	
<script     >
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
output.innerHTML = this.value;
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
output1.innerHTML = this.value; 
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
output2.innerHTML = this.value; 
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
output3.innerHTML = this.value; 
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
output4.innerHTML = this.value; 
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
output5.innerHTML = this.value; 
}
</script>
</body>
</html>