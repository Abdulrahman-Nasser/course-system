<?php
include '../shared/header.php';

if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("location:../auth/login.php");
}
?>

<header class="header" id="header1">

  <div class="Navbar">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand courses animate__animated animate__bounceInLeft" data-wow-delay="1s" href="#">COURSES</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ms-auto">


            <li class="nav-item">
              <a class="nav-link   active" data-wow-delay="1s" aria-current="page" href="/courses/home/index.php">Home</a>
            </li>
            <li class="nav-item mainMenu">
              <a class="nav-link animate__animated animate__bounceInUp" href="#">Branches <span><i class="bi bi-caret-down-fill"></i></span></a>
              <div class="menu">
                <a href="/courses/branches/insert.php">Add New Branch</a>
                <a href="/courses/branches/list.php">List of Branches</a>
              </div>
            </li>
            <li class="nav-item mainMenu">
              <a class="nav-link animate__animated animate__bounceInUp" href="#">Courses <span><i class="bi bi-caret-down-fill"></i></span></a>
              <div class="menu">
                <a href="/courses/courses/insert.php">Add New Course</a>
                <a href="/courses/courses/list.php">List of Courses</a>
              </div>
            </li>
            <li class="nav-item mainMenu">
              <a class="nav-link animate__animated animate__bounceInDown" href="#">Students <span><i class="bi bi-caret-down-fill"></i></span></a>
              <div class="menu">
                <a href="/courses/student/createStudent.php">Create Student</a>
                <a href="/courses/student/ListStudent.php">Show Students</a>
                <a href="/courses/student/registered.php">Show Registered</a>
              </div>
            </li>
            <li class="nav-item mainMenu">
              <a class="nav-link animate__animated animate__bounceInDown" href="#">Admin <span><i class="bi bi-caret-down-fill"></i></span></a>
              <div class="menu">
                <a href="/courses/admin/createAdmin.php">Add new Admin</a>
                <a href="/courses/admin/ListAdmin.php">List Admin</a>
              </div>
            </li>

          </ul>
          <?php if (isset($_SESSION['userName'])) : ?>
            <form class="d-flex ms-auto header-login" method="post" role="search">
              <button name="logout" href="/Horus/login.php" class="btn btn-danger margin-response m-auto animate__animated animate__lightSpeedInRight">Logout </button>
            </form>

          <?php else : ?>
            <form class="d-flex ms-auto header-login" role="search">
              <a href="/Horus/login.php" class="Btn margin-response m-auto animate__animated animate__lightSpeedInRight" data-wow-delay="1s"> Login</a>
            </form>
            <a href="/Horus/Admin/login.php" class=" margin-response m-auto animate__animated animate__lightSpeedInRight" data-wow-delay="1s"> <img src="Admin/assets/img/software-engineer.png" style="width: 30px;" alt=""></a>
          <?php endif; ?>
        </div>
      </div>
    </nav>
  </div>


  <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/Projects/odc-crud/home/index.php"> Home <span class="sr-only">(current)</span></a>

          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Branches
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/Projects/odc-crud/branches/insert.php">Insert new branch</a>
              <?php
              //  if(!isset($_SESSION['adminid'])) {
              ?>
              <a class="dropdown-item" href="/Projects/odc-crud/branches/list.php"> Show branches</a>
              <?php
              // }
              ?>
            </div>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Courses
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/Projects/odc-crud/courses/insert.php">Insert New Course</a>
              <?php
              // if(!isset($_SESSION['adminid'])) { 
              ?>
              <a class="dropdown-item" href="/Projects/odc-crud/courses/list.php"> Show Courses</a>
              <?php
              //  } 
              ?>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Students
            </a>
            <div class="dropdown-menu">
              <?php
              //  if(isset($_SESSION['adminid'])) { 
              ?>
              <a class="dropdown-item" href="/Projects/odc-crud/student/createStudent.php">Insert new student</a>
              <?php
              // }
              ?>
              <a class="dropdown-item" href="/Projects/odc-crud/student/ListStudent.php"> Show students</a>
              <a class="dropdown-item" href="/Projects/odc-crud/student/registered.php"> Show Registered</a>

            </div>
          </li>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/Projects/odc-crud/admin/createAdmin.php">Add new Admin</a>
              <a class="dropdown-item" href="/Projects/odc-crud/admin/ListAdmin.php">List Admin</a>

            </div>
          </li>


        </ul>
        <form action="" method="post">
          <button class="btn btn-danger" name="logout">logout</button>

        </form>
      </div>
    </div>
  </nav> -->
</header>