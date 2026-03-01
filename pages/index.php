<?php

include('../../auth/sessions.php');

startSession();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}


include("../../config/db.php");
include("../../functions/users_functions.php");
$conn = connectDatabase();
$total_registered_users =  countTotal($conn, 'users');
$total_applications =  countTotal($conn, 'applications_tb');

$getTotal_completed_Applications = getTotal($conn, 'applications_tb', 'applicationStatus_id = 1');
$getTotal_applicationMethod_online = getTotal($conn, 'applications_tb', 'applicationMethod_id=1');
$getTotal_interview_status_accepted = getTotal($conn, 'applications_tb', 'interview_status = accepted');


?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>

  <link rel="stylesheet" href="../css/dashboard.css" />
  <link rel="stylesheet" href="../css/table_styles.css" />
  <link rel="stylesheet" href="../css/main_container-layout.css" />
  <link rel="stylesheet" href="../css/sidebar_component.css" />
  <link rel="stylesheet" href="../css/util.css" />
</head>

<body>
  <div class="dashboard-container">

    <!-- Sidebar menu Starts here -->
      <aside class="sidebar">
        <section class="sidebar-header">
          <div class="title-wrap">
            <h1 class="logo">Opptrackiie</h1>
          </div>
          <div class="close-sidebar">
            <img
              src="../images/close-circle-line.svg"
              alt="Close Sidebar"
              class="icons"
            />
          </div>
        </section>

        <section class="sidabar-content-wrap">
          <nav>
            <ul>
              <li class="side-bar-link active-page"><a href="index.php">Dashboard</a></li>

              <!-- Job Applications -->
              <li class="dropdown">
                <div class="dropdown-toggle">
                  <span>Job Applications</span>
                  <span class="arrow">▶</span>
                </div>
                <ul class="dropdown-menu">
                  <li>
                    <a href="add_application.php">Add Application</a>
                  </li>
                  <li>
                    <a href="applications_view.php">View Job Application</a>
                  </li>

                  <li>
                    <a href="jobType.php">Add Job Category</a>
                  </li>
                  <li>
                    <a href="add_applicationMode.php">Add Application Mode</a>
                  </li>
                </ul>
              </li>

              <!-- Scholarships -->
              <li class="dropdown">
                <div class="dropdown-toggle">
                  <span>Scholarships</span>
                  <span class="arrow">▶</span>
                </div>
                <ul class="dropdown-menu">
                  <li><a href="#">Scholarships</a></li>
                  <li><a href="#">View Scholarships</a></li>
                  <li><a href="#">Add Scholarship</a></li>
                </ul>
              </li>

              <!-- users -->
              <li class="dropdown">
                <div class="dropdown-toggle">
                  <span>Users</span>
                  <span class="arrow">▶</span>
                </div>
                <ul class="dropdown-menu">
                  <li class=""><a href="add_user.php">Add user</a></li>
                  <li><a href="view_users.php">View users</a></li>
                </ul>
              </li>
              <li class="side-bar-link"><a href="#">Settings</a></li>
              <li class="side-bar-link"><a href="#">Logout</a></li>
            </ul>
          </nav>

          <!-- <div class="upgradeBadge"></div> -->
        </section>
      </aside>
    <!-- Sidebar end here -->

    <!-- Main Content -->
    <main class="main_container">

      <!-- Topbar -->
      <section class="topbar">
        <div class="searchBar-wrap">
          <input type="text" placeholder="Search..." />
          <button>Search</button>
        </div>

        <div class="profile">
          <div class="hamburger">
            <img src="../images/menu-outline.svg" alt="Menu" />
          </div>
          <div class="profile-wrap">
            <p>
              <?php
              echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
              ?>
            </p>
            <img src="<?php 
            if (!empty($_SESSION['profileImage'])) {
                echo '../../uploads/' . htmlspecialchars($_SESSION['profileImage']);
            } else {
                echo '../images/account-circle-fill.svg'; // fallback image
            }
        ?>"  alt="Profile" />
          </div>
        </div>
      </section>

      <!-- Cards -->
      <section class="main-content">
        <div class="cards">
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>Total Users</p>
            </div>
            <div class="card-body">
              <em class="statistics"><?php echo $total_registered_users ?></em>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>Total Applications</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $total_applications ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>Scholarships</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $getTotal_interview_status_accepted ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>Completed Applications</p>
            </div>
            <div class="card-body"><em class="statistics"><?PHP echo $getTotal_completed_Applications ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>interviewed jobs</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $getTotal_interview_status_accepted ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>Online jobs</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $getTotal_interview_status_accepted ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>Online Application</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $getTotal_applicationMethod_online ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>Physical Application</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $getTotal_interview_status_accepted ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>pending interviews</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $getTotal_interview_status_accepted ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>On-site jobs</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $getTotal_interview_status_accepted ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>interviewed jobs</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $getTotal_interview_status_accepted ?></em></div>
          </div>
          <div class="card">
            <div class="card-header">
              <i>icon</i>
              <p>Accepted jobs</p>
            </div>
            <div class="card-body"><em class="statistics"><?php echo $getTotal_interview_status_accepted ?></em></div>
          </div>
        </div>

        <!-- Tables Section -->
        <div class="main-content-tables">
          <div class="left-bottom-content">
            <!-- Recent Applications -->
            <div class="left-bottom-content-card">
              <h3>Recent Applications</h3>
              <hr />
              <ul class="recent-list">
                <li>
                  <strong>Frontend Developer</strong>
                  <span>Google</span>
                  <small>Applied: 20 Feb 2026</small>
                </li>
                <li>
                  <strong>UI/UX Designer</strong>
                  <span>Amazon</span>
                  <small>Applied: 18 Feb 2026</small>
                </li>
                <li>
                  <strong>IT Support Officer</strong>
                  <span>UNICEF</span>
                  <small>Applied: 15 Feb 2026</small>
                </li>
              </ul>
            </div>
          </div>
          <div class="right-content">
            <!-- Upcoming Interviews -->
            <div class="right-card">
              <h3>Upcoming Interviews</h3>
              <div class="interview-item">
                <p><strong>Backend Developer</strong></p>
                <span>Microsoft</span>
                <small>Date: 25 Feb 2026 | 10:00 AM</small>
              </div>
              <div class="interview-item">
                <p><strong>Web Designer</strong></p>
                <span>Andela</span>
                <small>Date: 27 Feb 2026 | 02:00 PM</small>
              </div>
            </div>
            <!-- Quick Actions -->
            <div class="right-card">
              <h3>Quick Actions</h3>
              <div class="quick-actions">
                <button class="btn-primary">Add Application</button>
                <button class="btn-secondary">Add Scholarship</button>
                <button class="btn-danger">Generate Report</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer>Opptrackiie &copy; 2026</footer>
    </main>
  </div>

  <script src="../scripts/main.js"></script>
</body>

</html>