
    
      <!-- nav bar -->

    <nav class="navbar navbar-expand-lg bg-footer sticky-top">
      <div class="container">

        <a class="navbar-brand" href="dashboard.php">
          <img src="picture/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
          <span class="logo">M.E.L.O</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active mr-5">
              <a class="nav-link text-white" href="dashboard.php">HOME</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link text-white" href="viewalbum.php">ALBUM</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link text-white" href="song.php">TRENDING</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link text-white" href="#">PLAYLIST</a>
            </li>
            <li class="nav-item dropdown mr-5">
              <a class="nav-link text-white dropdown-toggle"  href="editprofile.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user prefix white-text"></i>
              </a>
              <div class="dropdown-menu" id="sidenave" aria-labelledby="navbarDropdown">
                <a class="dropdown-item naba sidenaver" href="editprofile.php"><span class="fa fa-user prefix"></span> &nbsp; Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item sidenaver" name="signout" href="signout.php"><span class="fa fa-sign-out-alt prefix"></span> &nbsp;Signout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <!-- nav bar -->

      
    <div class="container-fluid row">

        <!-- side bar-->
        <div class="col-md-2 pl-0 sidenaver" id="sidenave">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link sidenaver" id="v-pills-home-tab" data-toggle="pill" href="song.php" role="tab" aria-selected="true"><span class="fa fa-music prefix"></span> &nbsp;<strong>My Music</strong></a>
            <a class="nav-link sidenaver" href="editprofile.php" id="v-pills-profile-tab" data-toggle="pill" href="editprofile" role="tab"  aria-selected="false"><span class="fa fa-user prefix"></span> &nbsp; <strong>Profile</strong></a>
            <a class="nav-link sidenaver" id="v-pills-messages-tab" data-toggle="pill" href="#" role="tab"  aria-selected="false"><span class="fa fa-play prefix"></span> &nbsp;<strong>Now Playing</strong></a>
            <a class="nav-link sidenaver" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab"  aria-selected="false"><span class="fa fa-compact-disc prefix"></span> &nbsp;<strong>Playlists</strong></a>
          </div>
        </div>
        <!-- side bar-->
