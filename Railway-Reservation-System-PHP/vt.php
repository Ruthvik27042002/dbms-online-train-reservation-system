<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include 'links.php' ?>
    <script src="v tickets.js"></script>
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
          <a href="vt.php" class="active">
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
    <div class="container1">
    <table border=1 CELLPADDING=15 CELLSPACING=0 class="table">
<thead>
  <tr>
    <th>Train Name</th>
    <th>Train No</th>
    <th>Source Location</th>
    <th>Destination Location</th>
    <th>Arrival Time</th>
    <th>Departure Time</th>
    <th>Fare</th>
    <th colspan="2">Operations</th>
  </tr>
</thead>

<tbody>
<?php
 include 'connect.php';

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
   <td> <a href="edt.php?Train_No=<?php echo $res['Train_No']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE">
   <i class="fa fa-edit" area-hidden="true"></i></td>  
   <td><a href="delete.php?Train_NoD=<?php echo $res['Train_No']; ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE">
   <i class="fa fa-trash" area-hidden="true"></i></a></td>  
  </tr>
<?php
 }

 ?>
</tbody> 
</table>
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