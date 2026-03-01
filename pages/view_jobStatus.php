<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>dashbaord</title>
  <link rel="stylesheet" href="../css/form.css" />
  <!-- <link rel="stylesheet" href="dashboard.css" /> -->

  <link rel="stylesheet" href="../css/main_container-layout.css">
  <link rel="stylesheet" href="../css/sidebar_component.css">
  <link rel="stylesheet" href="../css/table_styles.css">
  <link rel="stylesheet" href="../css/util.css">

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
              <li class="side-bar-link"><a href="index.php">Dashboard</a></li>

              <!-- Job Applications -->
              <li class="dropdown">
                <div class="dropdown-toggle active-dropdown">
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

                  <li class="active-page">
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

    <!-- overlay -->
    <div class="overlay"></div>
    <!-- main section -->
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
            <p>Hi!, Steven</p>
            <img src="../images/account-circle-fill.svg" alt="Profile" />

          </div>

        </div>
      </section>
      
      <!-- tabs -->
      <section class="tabs">
        <button class="tab-btn"> <?PHP echo '<a href="jobType.php">Add job Type</a> ';?></button>
        <button class="tab-btn"> <?PHP echo '<a href="add_applicationStatus.php">Add Application Status</a>';?></button>
        <button class="tab-btn"> <?PHP echo '<a href="add_interviewStatus.php">Add Interview Status</a>';?></button>
        <button class="tab-btn"> <?PHP echo '<a href="add_applicationMode.php">Add Application Mode</a>';?></button>
        <button class="tab-btn"> <?PHP echo '<a href="add_jobStatus.php">Job Status</a> '?></button>
        <button class="tab-btn"> <?PHP echo '<a href="applications_view.php">View Applications</a>';?></button>
      </section>

      <section class="main-container">
        <div class="main-content-wrapper">
          <!-- <div class="form-header">
            <h2>Add New Application</h2>
          </div>
          <div class="left-content">
          </div> -->
          <div class="right-content">
            <div class="table-header">
              <h2>All Job Status</h2>
            </div>

            <div class="table-wrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Stephen</td>
                    <td>stephen@gmail.com</td>
                    <td>1234</td>
                    <td>Admin</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Stephen</td>
                    <td>stephen@gmail.com</td>
                    <td>1234</td>
                    <td>Admin</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Stephen</td>
                    <td>stephen@gmail.com</td>
                    <td>1234</td>
                    <td>Admin</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Stephen</td>
                    <td>stephen@gmail.com</td>
                    <td>1234</td>
                    <td>Admin</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      </section>
      <footer>Opptrackiie&copy;2026</footer>
    </main>
  </div>
  <script src="../scripts/main.js"></script>
</body>

</html>