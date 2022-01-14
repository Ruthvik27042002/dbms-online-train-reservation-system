<?php
session_start();
if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$email=$_POST['email'];
$pw=$_POST['pw'];
$sql = "SELECT * FROM passengers WHERE email = '$email' AND password = '$pw';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['email'];
			$message='Logged in successfully';
		}
		else{
			$message = 'Wrong email or password.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
</style>
	<title>Login</title>
</head>
<script type="text/javascript">
	function validate()	{
		var EmailId=document.getElementById("email");
		var atpos = EmailId.value.indexOf("@");
    	var dotpos = EmailId.value.lastIndexOf(".");
		var pw=document.getElementById("pw");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
		{
        	alert("Enter valid email-ID");
			EmailId.focus();
        	return false;
   		}
   		if(pw.value.length< 8)
		{
			alert("Password consists of atleast 8 characters");
			pw.focus();
			return false;
		}
		return true;
	}
</script>
<style type="text/css">
	#loginarea{
		background-color: white;
		width: 35%;
		margin: auto;
		border-radius: 25px;
		border: 2px solid blue;
		margin-top: 300px;
		background-color: rgba(255, 255, 255, 0.7);
	    box-shadow: inset -2px -2px rgba(255, 255, 255, 0.8);
	    padding: 40px;
	    font-family:sans-serif;
		font-size: 20px;
		color: white;
	}
	html { 
		background: url(img/bg18.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	#submit	{
		border-radius: 5px;
		background-color: rgba(0,0,0,0);
		padding: 7px 7px 7px 7px;
		box-shadow: inset -1px -1px rgba(0,0,0,0.5);
		font-family:"Comic Sans MS", cursive, sans-serif;
		font-size: 17px;
		margin:auto;
		margin-top: 20px;
  		display:block;
  		color: white;
	}
	#logintext	{
		text-align: center;
	}
	.data	{
		color: white;
	}
	#journeytext{
		color: black;
		font-size: 32px;
		font-family: 'Roboto', sans-serif;
}

nav{
    display: flex;
    padding: 1% 1%;
    justify-content: space-between;
    align-items: center;
    transition: 2s;
    flex-direction: row;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 2;
}
.navbar{
    background-color: rgba(28, 4, 30, 0.562);
}
nav img{
    width: 180px;

}
.nav-links{
    flex: 1;
    text-align: right;  
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 20px;

}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #fa5f05;
    display: block;
    margin: auto;
    transition:0.5s

}
.nav-links ul li:hover::after{
    width: 100%;
}
.submenu1{
    display: none;
}
.nav-links ul li:hover .submenu1{
    display: block;
    position: absolute;
    background: rgba(28, 4, 30, 0.562);
    margin-top: 10px;
    margin-left: -15px;
}
.nav-links ul li:hover .submenu1 ul{
    margin: 10px;
    display: block;
}
.nav-links ul li:hover .submenu1 ul li{
    width: 150px;
    padding: 10px;
    text-align: left;
}
.nav-links .fa{
    margin-right: 8px;
}
.fa-angle-right{
    float: right;
}
	
</style>
<body>
<section class="header1">
        <nav class="navbar">
            <div  class="nav-links">
                <ul style="
    padding-left: 0px;
    padding-right: 50px;">
                    <li><a href="index.php"><i class="fa fa-home"></i>HOME</a></li>
                    <li><a href="pnrstatus.php"><i class="fa fa-align-justify"></i>PNR STATUS</a>
                    </li>
                    <li><a href="thirdpage.html"><i class="fa fa-clone"></i>ADMIN LOGIN</a></li>
                    <li><a href="booktkt.php"><i class="fa fa-comments"></i>BOOK</a></li>
                    <li><a href="eleventhpage.html"><i class="fa fa-phone"></i>CONTACT</a></li>
                </ul>
            </div>
        </nav>
    </section>
	<div id="loginarea">
	<form id="login" action="login.php" onsubmit="return validate()" method="post" name="login">
	<div id="journeytext">&emsp;&emsp;&emsp;&emsp;&emsp;Login to Indian Railways!</div><br/><br/>
	<table>
		<tr><td><div class="data"id="journeytext">Enter USER E-Mail ID:</div></td><td><input type="text" id="email" size="30" maxlength="30" name="email"/></td></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<tr><td><div class="data"id="journeytext">Enter USER Password:</div></td><td><input type="password" id="pw" size="30" maxlength="30" name="pw"/></td></tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	</table>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<INPUT TYPE="Submit" value="Submit" name="submit" id="journeytext" class="button">
	</form></div>
</body>
</html>