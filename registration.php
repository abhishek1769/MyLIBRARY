<?php
$db=mysql_connect("localhost", "root", "ankur@1") or die("Error connecting to database: ".mysql_error());
mysql_select_db('mylibrary',$db) or die(mysql_error($db));
?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
<link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
<html>
<head>
<title>Registration Page</title>
<style>
body{
background-image:url("hasura.png");
}
h2{
color:#FF3E96;
}
.class1{
margin:auto;
border:2px solid #FF0000;
float:right;}
.class2{
margin:auto;
border:2px solid #FF0000;
float:right;}
img{
border:2px solid #FF0000;
float:both;
}
.class3{
margin:auto;
border:2px solid #FF0000;
float:both;}
.class4{
margin:auto;
border:2px solid #FF0000;
float:left;}
.demo1{
text-decoration:underline;
color:#36648B;}
.user{
background-color:transparent;
backgopacity:0.5;
padding:5px 30px 5px 30px;
border-color:white;
border-width:0px 0px 1px 0px;
font-size:24px;
outline:none;
color:white;
}

.pass{
background-color:transparent;
backgopacity:0.5;
padding:5px 30px 5px 30px;
border-color:white;
border-width:0px 0px 1px 0px;
font-size:24px;
outline:none;
color:white;
}
</style>
</head>
<body>
<script type="text/javascript">
<!--
function verify1(){
a=document.myform1.name1.value
b=document.myform1.uname.value
c=document.myform1.pass.value
d=document.myform1.pass1.value
e=document.myform1.email.value
f=document.myform1.mob.value
g=document.myform1.uploadfile.value
if(a==""){
alert("Enter valid Name")
return false}
else if(b==""){
alert("Enter valid Username")
return false}
else if(c==""){
alert("Enter valid password")
return false}
else if(d=="" || d!=c){
alert("Please enter correct and same password")
return false}
else if(e==""){
alert("Enter valid email id")
return false}
else if(f==""){
alert("Enter valid mobile number")
return false}
else{
return true}
}
//-->
</script>
<center>
<h2>Welcome to <span class="demo1">Registration</span> page</h2></center>
<h3>Please enter the details carefully.</h3>
<img class="class1" src="Book_cover/photo21.jpg" width="600" height="300">
<img class="class2" src="Book_cover/photo23.jpg" width="250" height="300">
<form name="myform1" onsubmit="verify1();" action="doneit.php?action=submit" method="post" enctype="multipart/form-data">
<div class="input-group">
<table>
<tr>
<td>
<div class="form-group has-success has-feedback">
<span class="glyphicon glyphicon-font form-control-feedback"></span>
 <input class = "user form-control" type="text" name="name1" placeholder = "Name" /></td>
 </div>
</tr>

 
 <tr>
<td>
<div class="form-group has-success has-feedback">
<span class="glyphicon glyphicon-user form-control-feedback"></span>
 <input class = "user form-control" type="text" name="uname" placeholder = "Username" /></td>
 </div>
</tr>

<tr>
<td>
<div class="form-group has-success has-feedback">
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
 <input class = "user form-control" type="password" name="pass" placeholder = "Password" /></td>
 </div>
</tr>

<tr>
<td>
<div class="form-group has-success has-feedback">
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
 <input class = "user form-control" type="password" name="pass1" placeholder = "Confirm Password" /></td>
 </div>
</tr>
 
<tr>
<td>
<div class="form-group has-success has-feedback">
<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
 <input class = "user form-control" type="email" name="email" placeholder = "Email ID" /></td>
 </div>
</tr>

<tr>
<td>
<div class="form-group has-success has-feedback">
<span class="glyphicon glyphicon-earphone form-control-feedback"></span>
 <input class = "user form-control" type="text" name="mob" placeholder = "Mobile" /></td>
 </div>
</tr>

<tr>
<td>
<div class="form-group has-success has-feedback">
<span class="glyphicon glyphicon- form-control-feedback"></span>
 <input class = "user form-control" type="file" name="uploadfile" " />
 <label>Upload Profile Photo</label></td>
 </tr>


<tr><td></td><td><input type="submit" name="submit" value="Register Now" /></td></tr>

</table>
</div>
</form>

<h3>To go to LogIn page<a href="index.php">Click Here</a></h3>
<h3>To Register as Librarian<a href="librarian.php">Click Here</a></h3>
<center>
<img src="Book_cover/photo20.jpg" width="500" height="300"></center>
<img class="class3" src="Book_cover/photo28.jpg" width="200" height="300">
<img class="class4" src="Book_cover/photo29.jpg" width="200" height="300">
<img src="Book_cover/photo30.jpg" width="200" height="300">
<img src="Book_cover/photo22.jpg" width="200" height="300">
<img src="Book_cover/photo24.jpg" width="200" height="300">
<img src="Book_cover/photo25.jpg" width="200" height="300">
<img src="Book_cover/photo26.jpg" width="200" height="300">
<img src="Book_cover/photo27.jpg" width="200" height="300">
</body>
</html>