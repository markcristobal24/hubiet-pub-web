<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous" />

  <title>Hubient Bar & Lounge</title>
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <ul>
        <li>
          <a href="#">
            <img src="hubientLogo.png" alt="Hubient Logo" class="logo" title="Hubient" />
          </a>
        </li>
        <li class="t11">
          <a href="adminhome.php">
            <img src="dashboard.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title1">Dashboard</div>
          </a>
        </li>
        <li class="t2">
          <a href="bookings.php">
            <img src="bookingicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Bookings</div>
          </a>
        </li>
        <li class="">
          <a href="managepackages.php">
            <img src="managepackagesicon.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Manage Packages</div>
          </a>
        </li>
        <li class="t5">
          <a href="#">
            <img src="settings.png" alt="test" class="img2" width="23px" height="20px" />
            <div class="title">Account Settings</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="top-bar">
        <div class="search">
          <input type="text" name="search" placeholder="Search" />
        </div>
        <div class="navbar">
          <ul>
            <li><a href="">ADMIN</a></li>
          </ul>
        </div>
      </div>
      <div class="tablesbook">
        <div class="lastest-bookings2">
          <div class="heading">
            <h2>Bookings</h2>
          </div>
          <table class="">
            <thead>
              <td>Name</td>
              <td>Package #</td>
              <td>Price</td>
              <td>Actions</td>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>