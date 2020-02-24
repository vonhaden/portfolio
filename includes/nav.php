<!---------------------- NAVBAR ---------------------->
<nav class="container-fluid navigation nav-desktop">

    <!-- Logo -->
    <div class="logo">
        <img src="images/yale-art-logo.png" alt="Yale School of Art Crest">
        <div class="logo-text">Yale School of Art</div>
    </div>


    <!-- Links -->
    <div class="nav-links">
        <!-- ABOUT US -->
        <div class="link-box">
            <a class="main-link" href="#">About Us</a>
            <div class="dropdown">
                <a href="#">About</a>
                <a href="#">Facilities</a>
                <a href="#">Faculty & Staff</a>
                <a href="#">Study Areas</a>
                <a href="#">Visiting</a>
                <a href="#">Support</a>
                <a href="#">Contact</a>
            </div>
        </div>

        <!-- STUDENT WORK -->
        <div class="link-box">
            <a class="main-link" href="student-work.php">Student Work</a>
            <div class="dropdown">
                <a href="student-work.php">Student Work</a>
                <a href="upload.php">Submit Art</a>
                <a href="#">Exhibits & Publications</a>
            </div>
        </div>

        <!-- PROGRAMS -->
        <div class="link-box">
            <a class="main-link" href="programs.php">Programs</a>
            <div class="dropdown">
                <a href="programs.php">Programs</a>
                <a href="courses.php">Courses</a>
                <a href="#">Summer Programs</a>
            </div>
        </div>

        <!-- CALENDAR -->
        <div class="link-box">
            <a class="main-link" href="calendar.php">Calendar</a>
        </div>


        <!-- STUDENT RESOURCES -->
        <div class="link-box ">
            <a class="main-link" href="#">Student Resources</a>
            <div class="dropdown">
                <a href="#">Student Resources</a>
                <a href="#">Financial Aid</a>
                <a href="#">How To Apply</a>
                <a href="#">General Info</a>
                <a href="#">Residencies</a>
                <a href="#">Undergraduate</a>
                <a href="#">Apply</a>
                <a href="#">Tuition & Fees</a>
                <a href="#">On Campus Resources</a>
                <a href="#">Incentives</a>
            </div>
        </div>
    </div>


    <!-- RIGHT -->
    <?php if ($_SESSION['loggedin'] == false): ?>
    <div class="nav-right">
        <a class="right-link" href="login.php">Login</a>
        <a href="https://apply.art.yale.edu/apply/" class="btn btn-primary right-btn">Apply</a>
        <button class="btn btn-primary btn-grey-borders"><i class="fas fa-search"></i></button>
    </div>
    <?php endif; ?>

    <?php if ($_SESSION['loggedin'] == true): ?>
        <div class="nav-right">
            <a class="right-link" href="index.php?login=false">logout</a>
            <a href="upload.php" class="btn btn-primary right-btn">Submit Art</a>
            <button class="btn btn-primary btn-grey-borders"><i class="fas fa-search"></i></button>
        </div>
    <?php endif; ?>


</nav>