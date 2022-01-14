<?php 
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$pnr=$_POST['pnr'];
$sql = "SELECT t_status FROM tickets WHERE PNR= '$pnr'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
	if($row==NULL)	echo "<script type='text/javascript'>alert('PNR not found');</script>";
	else echo "<script type='text/javascript'>alert('Your status is ' +'$row[t_status]');</script>";	
}
if (isset($_POST['cancel']))
{
$pnr=$_POST['pnr'];
$sql = "DELETE FROM tickets WHERE PNR=$pnr;";
if(mysqli_query($conn, $sql))
	echo "<script type='text/javascript'>alert('Your ticket has been cancelled');</script>";
	else echo "<script type='text/javascript'>alert('Cancellation failed');</script>";	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PNR Status</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<style type="text/css">
		#pnr	{
			font-size: 20px;
			background-color: white;
			width: 500px;
			height: 300px;
			margin: auto;
			border-radius: 25px;
			border: 2px solid blue; 
			margin: auto;
  			position: absolute;
  			left: 0; 
  			right: 0;
  			padding-top: 40px;
  			padding-bottom:20px;
  			margin-top: 130px;
			background-color: rgba(255, 255, 255, 0.8);
 
		}
		html { 
		  background: url(img/bg14.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#pnrtext	{
			padding-top: 20px;
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
</head>
<body>
<section class="header1">
        <nav class="navbar">
            <a href="index.html"><img src="images/Full logo.jpg" alt=""></a> 
            <div  class="nav-links">
                <ul style="
    padding-left: 0px;
    padding-right: 50px;
">
                    <li><a href="index.php"><i class="fa fa-home"></i>HOME</a></li>
                    <li><a href="booktkt.php"><i class="fa fa-align-justify"></i>BOOK</a>
                    </li>
                    <li><a href="admin.php"><i class="fa fa-clone"></i>ADMIN LOGIN</a></li>
                    <li><a href="register.php"><i class="fa fa-comments"></i>USER LOGIN</a></li>
                    <li><a href="eleventhpage.html"><i class="fa fa-phone"></i>CONTACT</a></li>
                </ul>
            </div>
        </nav>
    </section>
<center>
	<div id="pnr">Check your PNR status here:<br/><br/>
	<form method="post" name="pnrstatus" action="pnrstatus.php">
	<div id="pnrtext"><input type="text" name="pnr" size="30" maxlength="10" placeholder="Enter PNR here"></div>
	<br/><br/>
	<input type="submit" name="submit" value="Check here!" class="button" id="submit"><br/><br/>
	<?php  
		if(isset($_SESSION['user_info'])){
			echo '<form action="pnrstatus.php" method="post"><input type="submit" class="button" value="Cancel your ticket!" name="cancel" id="cancel"/></form>';
        }
		else
			echo '<A HREF="register.php">Login/Register</A>';
		?>
	</form>
	</div>
</center>
</body>
</html>