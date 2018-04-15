<?php
$db=mysql_connect('localhost','root','ankur@1') or die('Unable to connect.Check your connection parameters');
mysql_select_db('mylibrary',$db) or die(mysql_error($db));
?>
<html>
<head>
<title>Librarian</title>
<style>
body{
background-color:#EEE9E9;
}
h2{
color:#B22222;
}
.class1{
	color:#FF7F24;
	text-decoration:underline;
}
</style>
</head>
<body>
<center>
<h2>Welcome to Librarian Page</h2>
</center>
<h3>There are few important information regarding for Librarian.</h3>
<h4>*) Since, It is a paid job so must be serious about it</h4>
<h4>*) You can work from home too or work at our office space</h4>
<h4>*) There can be either day shift or night shift for job</h4>
<h3>For more information you can contact us:<span class="class1"> +919078069831</span> or mail at <a href = "mailto: amit.sinha073@gmail.com">Send Email</a></h3>
</body>
</html>