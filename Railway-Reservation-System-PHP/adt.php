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
          <a href="adt.php" class="active">
            <i class='bx bx-plus' ></i>
            <span class="links_name">Add Train Details</span>
          </a>
        </li>
        <!-- <li>
          <a href="edt.php">
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
          <a href="index.php">
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
        <span class="admin_name">Subhash</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    </section>
    <div class="container">
      <div class="title">Adding Train Details</Details></div>
      <div class="content">
        <form action="#" method="POST">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Train Name</span>
              <input type="text" name="name" placeholder="Enter Train Name" required>
            </div>
            <div class="input-box">
              <span class="details">Train No</span>
              <input type="text" name="trainno" placeholder="Enter Train NO" required>
            </div>
            <div class="input-box">
              <span class="details">Source</span>
              <input type="text" name="source" placeholder="Enter Source" required>
            </div>
            <div class="input-box">
              <span class="details">Destination</span>
              <input type="text" name="dest" placeholder="Enter Destination" required>
            </div>
            <div class="input-box">
              <span class="details">Departure Time</span>
              <input type="time" name="depart" placeholder="Enter Departure Time" required>
            </div>
            <div class="input-box">
              <span class="details">Arrival Time</span>
              <input type="time" name="arrival" placeholder="Enter Arrival Time" required>
            </div>
            <div class="input-box">
              <span class="details">Fare</span>
              <input type="text" name="fare" placeholder="Enter Fare" required>
            </div>
          
          <div class="button">
            <input type="submit" name="submit" value="Add Train Details">
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


<?php 
  include 'connect.php';

  if(isset($_POST['submit'])){

    $Train_Name = $_POST['name'];
    $Train_No = $_POST['trainno'];
    $Source = $_POST['source'];
    $Destination = $_POST['dest'];
    $Departure = $_POST['depart'];
    $Arrival = $_POST['arrival'];
    $Fare = $_POST['fare'];


    $insertquery = " insert into train_details(Train_Name,Train_No,Source,Destination,Departure,Arrival,Fare)
    values('$Train_Name','$Train_No','$Source','$Destination','$Departure','$Arrival','$Fare')";
    
    $res = mysqli_query($con,$insertquery);

    if($res){
      ?>
      <script>
        alert('Train Details Added Successfully')
      </script>
      <?php
    }else{
      ?>
      <script>
        alert('Train Details Not Added')
      </script>
      <?php
    }
  }

?>