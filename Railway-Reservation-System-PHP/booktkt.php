<?php 
  include 'connect.php';

if (isset($_POST['submit']))
{

	$p_fname = $_POST['fname'];
    $p_phoneno = $_POST['phoneno'];
    $p_date = $_POST['date'];
    $p_nop = $_POST['nop'];
	$insertquery = "insert into passenger_booking(p_fname, p_phoneno, p_date, p_nop)values('$p_fname', '$p_phoneno', '$p_date', '$p_nop')";
	$res = mysqli_query($con,$insertquery);

	if($res)
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Book a ticket</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<style type="text/css">
		#booktkt	{
			margin:auto;
			margin-top: 200px;
			width: 40%;
			height: 50%;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			background-color: rgba(0,0,0,0.5);
			border-radius: 25px;
		}
		html { 
		  background: url(img/bg8.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#journeytext	{
			color: white;
			font-size: 28px;
			font-family:"Comic Sans MS", cursive, sans-serif;
			margin-left:-40px;
		}
		#trains	{
			margin-left: 170px;
			font-size: 15px;
		}
		#button	{
			margin-left: 240px;
			margin-bottom: 40px;
			margin-top: 30px;
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
	<script type="text/javascript">
		function validate()	{
			var trains=document.getElementById("trains");
			if(trains.selectedIndex==0)
			{
				alert("Please select your train");
				trains.focus();
				return false;		
			}
		}
	</script>
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
                    <li><a href="pnrstatus.php"><i class="fa fa-align-justify"></i>PNR STATUS</a>
                    </li>
                    <li><a href="admin.php"><i class="fa fa-clone"></i>ADMIN LOGIN</a></li>
                    <li><a href="register.php"><i class="fa fa-comments"></i>USER LOGIN</a></li>
                    <li><a href="eleventhpage.html"><i class="fa fa-phone"></i>CONTACT</a></li>
                </ul>
            </div>
        </nav>
    </section>
		<div id="booktkt">
	<h1 align="center" id="journeytext">Choose your journey</h1><br/>
	<form method="post" name="journeyform" action="sample.php">
		<select id="trains" name="trains" required>
			<option selected disabled>-------------------Select trains here---------------</option>
			<option value="rajdhani" >Howrah SP Express - Kanyakumari to Howrah</option>
			<option value="duronto" >Rajdhani Express - Delhi to Chennai</option>
			<option value="geetanjali">Kongu Express - Hyderabad to Coimbatore</option>
			<option value="garibrath" >Coromandel Rath - Kakinada to Chennai Egmore</option>
			<option value="mysoreexp" >Shatabdhi Express - Delhi to Amritsar</option>
		</select>
		<br>
		<br>
		<label for="fname"id="journeytext"><i class="fa fa-user"></i>&emsp;&emsp;&emsp;&emsp;Full Name&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" id="name1" name="fname" placeholder="Name">
			<br>
             <label for="fname"id="journeytext"><i class="fa fa-phone"></i>&emsp;&emsp;&emsp;&emsp;Phone No &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" id="pp" name="phoneno" placeholder="Phone No"  ><br>
			<label id="journeytext">&emsp;&emsp;&emsp;&emsp;Arrival Date  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; </label>
            <input type="date" placeholder="d/m/Y" name="date"><br><br>
            <label id="journeytext">&emsp;&emsp;&emsp;&emsp;Number of Passengers&emsp;&nbsp;</label>
            <input type="number" placeholder="4" class="nop"><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<button class="button"><a href="sample.php" class="pn">SUBMIT</a></button>
	</form>
	</div>
	</body>
	</html>