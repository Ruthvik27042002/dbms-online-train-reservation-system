<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
    <script src="v tickets.js"></script>
   </head>
<body onload="realtimeclock()">
<style>
  body {
  height: 100vh;
  display: flex;
  align-items: center;
  text-align: center;
  font-family: sans-serif;
  justify-content: center;
  background-image: url(img/train.jpg);
  background-size: cover;
  background-position: center;
}
.container1 {
  
  width:800px;
  padding: 25px 30px;
  border-radius: 15px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  margin-left:70px ;
  margin-top: 5px;
  background-attachment: fixed;
  background: #ffffff;
  background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
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
<section class="header1">
        <nav class="navbar"style="left: 0px;">
            <a href="index.html"><img src="images/Full logo.jpg" alt=""></a> 
            <div  class="nav-links">
                <ul style="
    padding-left: 0px;
    padding-right: 80px;">
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
    <div class="container1">
    <table border=1 CELLPADDING=20 CELLSPACING=0 class="table">
<thead>
  <tr>
    <th>Train Name</th>
    <th>Train No</th>
    <th>Source Location</th>
    <th>Destination Location</th>
    <th>Arrival Time</th>
    <th>Departure Time</th>
    <th>Fare</th>
    
  </tr>
</thead>

<tbody>
<?php
 include 'connect1.php';

 $selectquery = " select * from train_details ";

 $query = mysqli_query($con,$selectquery);

 $nums = mysqli_num_rows($query);

 while($res = mysqli_fetch_array($query)){

?>
  <tr>
   <td><?php echo $res['Train_Name']; ?> </td>
   <td><?php echo $res['Train_No']; ?> </td>
   <td><?php echo $res['Source']; ?> </td>
   <td><?php echo $res['Destination']; ?> </td>
   <td><?php echo $res['Departure']; ?> </td>
   <td><?php echo $res['Arrival']; ?> </td>
   <td><?php echo $res['Fare']; ?> </td>
  </tr>
<?php
 }

 ?>
</tbody>
 
</table>
<br>
<br><br>
<button type="button"><a href="booktkt.php">Book Your Tickets!</button>
</div>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});


 </script>

 

</body>
</html>