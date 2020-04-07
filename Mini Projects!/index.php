<html>
<head>
<title>HERO</title>
<script src="jquery191.min.js"></script>
<style type="text/CSS">
body
{

background-color:black;
}
#r
{
color:yellow;
background-color:purple;
text-decoration:none;
text-align:center;
margin:30px;
border:solid;
border-color:blue;
border-radius:50%;
height:50px;
font-size:250%;
}
#q1
{ background-color:white;
 width: 300px;
 font-size:300%;
position:absolute;
top:170px;
text-align:center;
color:black;
border-radius:50px;
margin-left:20px;
}
#q2
{ background-color:white;
 width: 300px;
 font-size:300%;
position:absolute;
top:250px;
text-align:center;
color:black;
border-radius:50px;
margin-left:20px;
}
#q3
{ background-color:white;
 width: 300px;
 font-size:300%;
 color:white;
position:absolute;
top:330px;
text-align:center;
color:black;
border-radius:50px;
margin-left:20px;
}
#q4
{ background-color:white;
 width: 300px;
 font-size:300%;
 color:black;
position:absolute;
top:410px;
text-align:center;
margin-left:20px;
border-radius:50px;
}
#q5
{ background-color:white;
 width: 300px;
 font-size:300%;

position:absolute;
top:490px;
text-align:center;
color:black;
border-radius:50px;
margin-left:20px;
}
#q6
{ background-color:white;
 width: 300px;
 font-size:300%;
 color:black;
position:absolute;
top:570px;
text-align:center;
border-radius:50px;
margin-left:20px;
}
#y
{
position:absolute;
left:1170px;
font-size:300%;
top:350px;
}
#t
{
font-size:300%;
position:absolute;
left:1230px;
color:blue;
top:250px;
}
#gh
{
position:absolute;
top:150px;
left:640px;
}
#ques
{
background-color:black;
width:530px;
height:50px;
position:absolute;
left:500px;
top:390px;
border:ridge;
border-radius:10px;
border-color:yellow;
color:blue;
text-align:center;
font-size:150%;
}
#o1
{
background-color:black;
width:250px;
height:30px;
position:absolute;
left:500px;
top:470px;
border:ridge;
border-radius:10px;
border-color:yellow;
color:blue;
text-align:center;
font-size:150%;

}
#o2
{

background-color:black;
width:250px;
height:30px;
position:absolute;
left:780px;
top:470px;
border:ridge;
border-radius:10px;
border-color:yellow;
color:blue;
text-align:center;
font-size:150%;
}
#o3
{
background-color:black;
width:250px;
height:30px;
position:absolute;
left:500px;
top:520px;
border:ridge;
border-radius:10px;
border-color:yellow;
color:blue;
text-align:center;
font-size:150%;

}
#o4
{

background-color:black;
width:250px;
height:30px;
position:absolute;
left:780px;
top:520px;
border:ridge;
border-radius:10px;
border-color:yellow;
color:blue;
text-align:center;
font-size:150%;
}
#o1:hover
{
background-color:yellow;
border-color:white;
}
#o2:hover
{
background-color:yellow;
border-color:white;
}
#o3:hover
{
background-color:yellow;
border-color:white;
}
#o4:hover
{
background-color:yellow;
border-color:white;
}

#but
{
position:absolute;
left:740px;
top:700px;
}


</style>
</head>
<body>
<h1 id="r">Kaun Banega CrorePati</h1>
<div id="q1">$10000</div>
<div id="q2">$8000</div>
<div id="q3">$6000</div>
<div id="q4">$4000</div>
<div id="q5">$2000</div>
<div id="q6">$1000</div>
<h3 id="t">LifeLines</h3>

<select id="y">Choose
<option "selected">Phone a Friend</option>
<option>50-50</option>
</select>
<img src="kbc.jpg" id="gh">
<div id="ques" style="display:none">1. Which among these are Actors?</div>

<div class="def" id="o1" style="display:none"><b>a.Mayawati</b></div>
<div class="def" id="o2" style="display:none"><b>b. rahul gandhi</b></div>
<div class="def" id="o3" style="display:none"><b>c. SRK</b></div>
<div class="def"  id="o4" style="display:none"><b>d. none of these</b></div>

<button id="but">Question</button>
<script type="text/javascript">
$("#but").click(function()
{ $("#ques").fadeIn();
$("#o1").fadeIn();
$("#o2").fadeIn();
$("#o3").fadeIn();
$("#o4").fadeIn();
});
$(".def").click(function()
{
$(this).css("background-color","yellow")
});



</script>
</body>
</html>
