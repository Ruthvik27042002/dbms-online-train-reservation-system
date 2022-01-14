<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> IRCTC</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@400;500;600;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600;700;800&display=swap" rel="stylesheet">
<style>
	*{
    margin:0;
    padding: 0;
    font-family: 'Recursive', sans-serif;
    box-sizing: border-box;
    scroll-behavior: smooth !important;
}
.over{
    overflow: hidden;
}
.banner{
    height: 100vh;
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
}
.banner img{
    width: 120%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    animation: zoom-out 5s;
}
@keyframes zoom-out{
    100%{
        width: 100%;
    }
}

.header{
    height: 100vh;
    width: 100%;
    background-image:url(img/train.jpg);
    background-position: center;
    background-size:cover;   
    border-style: s ;
}

.text-box
{
    width: 90%;
    color: rgb(247, 247, 247);
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.text-box h1{
    font-size: 62px;
    font-family: 'Recursive', sans-serif;
}
.text-box p{
    margin: 10px 0px 40px;
    font-size:14px ;
    color: #fff;
    font-family: 'Recursive', sans-serif;
}
.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 3px solid rgb(44, 85, 221);
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
    font-family: 'Roboto Slab', serif;
}
.hero-btn:hover{
    border:1px solid rgb(236, 153, 85);
    background:rgb(236, 153, 85);
    transition: 1s;
    color:black;
    
}
.button1{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 3px solid rgb(44, 85, 221);
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
    font-family: 'Roboto Slab', serif;
}
.button1:hover{
    border:1px solid rgb(236, 153, 85);
    background:rgb(236, 153, 85);
    transition: 1s;
    color:black;
    
}
.header1{
    background-color: #5d5e5e;
}
.video{
    background-color: #5d5e5e;
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
<body class="over">
    <section class="header">
        <nav>
            <a href="index.html"><img src="img/irctc.png" alt=""></a>
            <div class="nav-links">
                <ul>
                    <li><a href=""><i class="fa fa-home"></i>HOME</a></li>
                    <li><a href="pnrstatus.php"><i class="fa fa-align-justify"></i>PNR Status</a></li>
                    <li><a href="booktkt.php"><i class="fa fa-clone"></i>BOOk</a></li>
                    <li><a href="register.php"><i class="fas fa-sign-in-alt"></i></i>User_Login</a></li>    
                    <li><a href="admin.php"><i class="fas fa-sign-in-alt"></i></i>Admin_Login</a></li> 
                    <li><a href="eleventhpage.html"><i class="fa fa-phone"></i>CONTACT</a></li>
                    <li><a href="index.php"><i class="fa fa-phone"></i>Logout</a></li>  

                </ul>

            </div>
        </nav>
    <div class="banner">
        <img src="images/train.jpg "  alt="university">
        <div class="text-box">
            <h1 style="color: white;">INDIAN RAILWAY CATERING AND TOURISM CORPORATION</h1>
            <P style="color: white;">Indian Railway Catering and Tourism Corporation is under the ownership of Indian Railways, Ministry of Railways, Government of India that provides ticketing, catering, and tourism services for the Indian Railways.IRCTC Next Generation eTicketing System.
            </P>
            <a href="trains.php"  class="hero-btn">BOOK HERE</a>
        </div>
    </div>
    </section>
</body>
</html>