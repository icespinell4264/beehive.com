
<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" type= "text/css"href="css1/stylecss.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
      .dropdown{
        display: none;
        position: absolute;
        margin-left:10px;
      }
      .dropdown ul{
        background-color: #11101d;
      }
      .dropdown  a{ 
         font-size: 18px;
         border-radius: 12px;
         line-height: 50px;
         color: white;
         align-items: center;
         font-size: 15px;
         font-weight: 400;
      }
      .dropdown  li:hover {
        color: white;
        background: #1d1b31;
      }
       
      .nav-list :hover .dropdown{
         display: block;
         color: white;
      }
      .logout  {
        padding-top: 150px;
      }
      .nav-list li a {
        background: #1d1b31;
        color:white;
      }
      
      </style>
   </head>
<body>
  <div class="sidebar"> 
   
    <div class="logo-details">
    
    <i class='bx bxl-hive'></i>
        <div class="logo_name">Bee Hive</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      
      <?php

      if (isset($_SESSION["useruid"])) {
        echo "<li><a href='home2.php'> <i class='bx bx-grid-alt'></i> <span class='links_name'>Home</span></a></li>";
      echo "<li><a href='MainTable.php'> <i class='bx bx-table'></i> <span class='links_name'>Main Table</span></a></li>";
      echo "<li><a href='export.php'> <i class='bx bx-notepad'></i><span class='links_name'>Export</span></a></li>"; 
      echo "<li><a href='About.php'> <i class='bx bx-question-mark'></i><span class='links_name'>About</span></a></li>"; 
      echo "<li><a href='#.php'> <i class='bx bx-table'></i> <span class='links_name'>Beehives</span></a>
      <div class= 'dropdown'>
      <div class= 'vertical-menu'>
      <ul>
      <li><a href = 'colmena1.php'>Beehive1</a>
      <li><a href = 'colmena2.php'>Beehive2</a>
      <li><a href = 'colmena3.php'>Beehive3</a>
      <li><a href = 'colmena4.php'>Beehive4</a>
      <li><a href = 'colmena5.php'>Beehive5</a>
      <li><a href = 'colmena6.php'>Beehive6</a>
      <li><a href = 'colmena7.php'>Beehive7</a>
      <li><a href = 'colmena8.php'>Beehive8</a>
      <li><a href = 'colmena9.php'>Beehive9</a>
      <li><a href = 'colmena10.php'>Beehive10</a>
      <li><a href = 'colmena11.php'>Beehive11</a>
      <li><a href = 'colmena12.php'>Beehive12</a>
      <li><a href = 'colmena13.php'>Beehive13</a>
      <li><a href = 'colmena14.php'>Beehive14</a>
      <li><a href = 'colmena15.php'>Beehive15</a>
      <li><a href = 'colmena16.php'>Beehive16</a>
      <li><a href = 'colmena17.php'>Beehive17</a>
      <li><a href = 'colmena18.php'>Beehive18</a>
      <li><a href = 'colmena19.php'>Beehive19</a>
      <li><a href = 'colmena20.php'>Beehive20</a>
      </ul>
      </div>
      </div>
      </li>";
      echo "<div class='logout'><li><a href='includes/logout.inc.php'><i class='bx bx-log-out' id='log_out'></i><span class='links_name'>Log out</span></a></li></div>";
        }
        else {
      echo "<li><a href='signup.php'> <i class='bx bxs-user-account'></i> <span class='links_name'>Sign Up</span></a></li>";
      echo "<li><a href='login.php'> <i class='bx bxs-log-in' ></i><span class='links_name'>Log In</span></a> </li>";
        }
      ?>
    </ul>
  </div>
  
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });



  
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
   }
  }
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}


  </script>
</body>
</html>