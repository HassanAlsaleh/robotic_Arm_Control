<!DOCTYPE html>
<html>
<head>
	<title>Control</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	  <meta charset="UTF-8">
      <meta name = "keywords" content = "Robotic, Robot, arm, robotic arm, control, engine" />
      <meta name = "description" content = "A page to control the 6 engines of a robotic arm made by Smart Methods" />
      <link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
<form action="updatedb.php" method="get">
<div class="container con">
<div class="slidecontainer">
  <input type="range" min="0" max="180" name="engine1" value="0" class="slider" id="myRange">
    <p>Value of engine 1: <span id="demo"></span></p>
</div>

<div class="slidecontainer">
  <input type="range" min="0" max="180" name="engine2" value="0" class="slider" id="myRange1">
    <p>Value of engine 2: <span id="demo1"></span></p>
</div>


<div class="slidecontainer">
  <input type="range" min="-0" max="180" name="engine3" value="0" class="slider" id="myRange2">
    <p>Value of engine 3: <span id="demo2"></span></p>
</div>

<div class="slidecontainer">
  <input type="range" min="0" max="180" name="engine4" value="0" class="slider" id="myRange3">
    <p>Value of engine 4: <span id="demo3"></span></p>
</div>

<div class="slidecontainer">
  <input type="range" min="0" max="180" name="engine5" value="0" class="slider" id="myRange4">
    <p>Value of engine 5: <span id="demo4"></span></p>
</div>
<div class="slidecontainer">
<div >
  <input type="range" min="0" max="180" name="engine6" value="0" class="slider" id="myRange5">
    <p>Value of engine 6: <span id="demo5"></span></p>
</div>

</div>
<div>
	
	<input type="submit" value="save" name="save"  class="btn btn-info btn-lg" role="button">
		
</div>
</div>
</form>
<div class="container con">
<form action="startarm.php" method="get">
	<input type="submit" value="start" name="start"  class="btn btn-info btn-lg" role="button">
	</form>
	</div>
<script>
var slider1 = document.getElementById("myRange");
var output1 = document.getElementById("demo");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
</script>

<script>
var slider2 = document.getElementById("myRange1");
var output2 = document.getElementById("demo1");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
</script>

<script>
var slider3 = document.getElementById("myRange2");
var output3 = document.getElementById("demo2");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}
</script>
<script>
var slider4 = document.getElementById("myRange3");
var output4 = document.getElementById("demo3");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}
</script>
<script>
var slider5 = document.getElementById("myRange4");
var output5 = document.getElementById("demo4");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
}
</script>

<script>
var slider6 = document.getElementById("myRange5");
var output6 = document.getElementById("demo5");
output6.innerHTML = slider6.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;
}
</script>


</body>
</html>