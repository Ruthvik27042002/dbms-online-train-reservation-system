<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include 'links.php' ?>
   </head>
<body onload="realtimeclock()">
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-train'></i>
      <span class="logo_name">Train Ticket Reservation</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="vt.php">
            <i class="bx bx-train"></i>
            <span class="links_name">View Trains</span>
          </a>
        </li><li>
          <a href="adt.php" >
            <i class='bx bx-plus' ></i>
            <span class="links_name">Add Train Details</span>
          </a>
        </li>
        <!-- <li>
          <a href="edt.php" class="active">
            <i class='bx bx-pencil' ></i>
            <span class="links_name">Edit Train Details</span>
          </a>
        </li> -->
        <li>
          <a href="vt1.php">
            <i class='bx bx-ticket-alt' ></i>
            <span class="links_name">View Tickets</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-stats' ></i>
            <span class="links_name">PNR Status</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message-detail' ></i>
            <span class="links_name">Feedbacks</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    </section>
    <div class="container">
      <?php 
  include 'connect.php';

$Train_Nos = $_GET['Train_No'];

$showquery = "select * from train_details where Train_No={$Train_Nos}";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata); 



  if(isset($_POST['submit'])){

    $Train_NoUP = $_GET['Train_No'];

    $Train_Name = $_POST['name'];
    $Train_No = $_POST['trainno'];
    $Source = $_POST['source'];
    $Destination = $_POST['dest'];
    $Departure = $_POST['depart'];
    $Arrival = $_POST['arrival'];
    $Fare = $_POST['fare'];


    //$insertquery = " insert into train_details(Train_Name,Train_No,Source,Destination,Departure,Arrival,Fare)
    //values('$Train_Name','$Train_No','$Source','$Destination','$Departure','$Arrival','$Fare')";
    
    $query = "update train_details set Train_Name='$Train_Name',Train_No='$Train_No',Destination='$Destination',
    Departure='$Departure',Arrival='$Arrival',Fare='$Fare' where Train_No = $Train_NoUP ";

    $res = mysqli_query($con,$query);

    if($res){
      ?>
      <script>
        alert('Train Details Updated Successfully')
      </script>
      <?php
    }else{
      ?>
      <script>
        alert('Train Details Not Updated')
      </script>
      <?php
    }
  }

?>

    <div class="title">Editing Train Details</Details></div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
         
          <div class="input-box">
            <span class="details">Train Name</span>
            <input type="text" name="name" placeholder="Enter Train name" value="<?php echo $arrdata['Train_Name']; ?>" required>
          </div>
          <div class="input-box">
              <span class="details">Train No</span>
              <input type="text" name="trainno" placeholder="Enter Train NO" value="<?php echo $arrdata['Train_No']; ?>" required>
            </div>
          
          <div class="input-box">
            <span class="details">Source</span>
            <input type="text" name ="source"placeholder="Enter Source" value="<?php echo $arrdata['Source']; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Destination</span>
            <input type="text" name="dest" placeholder="Enter Destination" value="<?php echo $arrdata['Destination']; ?>"  required>
          </div>
          <div class="input-box">
            <span class="details">Departure Time</span>
            <input type="text" name="depart" placeholder="Enter Departure Time" value="<?php echo $arrdata['Departure']; ?>"  required>
          </div>
          <div class="input-box">
            <span class="details">Arrival Time</span>
            <input type="text" name="arrival" placeholder="Enter Arrival Time" value="<?php echo $arrdata['Arrival']; ?>"  required>
          </div>
          <div class="input-box">
            <span class="details">Fare</span>
            <input type="text" name="fare" placeholder="Enter Fare"  value="<?php echo $arrdata['Fare']; ?>" required>
          </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Update Train Details">
        </div>
      </form>
    </div>
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
 </script>

</body>
</html>