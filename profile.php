<!doctype html>
<html lang="en">

<head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php
    include "headlink.php";
    ?>
 <link rel="stylesheet" href="css/profile.css">  
</head>

<body id="top">

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <!-- NAVBAR -->
        <?php
        include "header.php";
        ?>

        <!-- HOME -->
        <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-white font-weight-bold">Profile</h1>
                        <div class="custom-breadcrumbs">
                            <a href="#">Home</a> <span class="mx-2 slash">/</span>
                            <span class="text-white"><strong>name</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mt-4">
        <div class="row">
            <!-- Sidebar Section -->
            <div class="col-lg-4">
                <aside class="resume-3-sidebar">
                    <div class="n-candidate-info">
                        <h4>Candidate Detail</h4>
                        <ul>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <div class="resume-detail-meta">
                                    <small>Date of Birth:</small>
                                    <strong>October 1, 2018</strong>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="resume-detail-meta">
                                    <small>Location:</small>
                                    <strong>Chickasaw, USA</strong>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-user-clock"></i>
                                <div class="resume-detail-meta">
                                    <small>Member Since:</small>
                                    <strong>September 14, 2018</strong>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-mars"></i>
                                <div class="resume-detail-meta">
                                    <small>Gender:</small>
                                    <strong>Male</strong>
                                </div>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-block"><i class="fas fa-heart"></i> Save Resume</button>
                        <a href="#" class="btn btn-secondary btn-block"><i class="fas fa-download"></i> Generate Resume</a>
                    </div>
                </aside>
            </div>

            <!-- Main Content Section -->
            <div class="col-lg-8">
                <div class="resume-3-detail">
                    <!-- About Me Section -->
                    <div class="resume-3-box">
                        <h4>About Me</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius vel justo sed ullamcorper. Mauris pulvinar dapibus purus sit amet tempus.</p>
                    </div>

                    <!-- Skills Section -->
                    <div class="resume-3-box resume-skills">
                        <h4>Skills and Tools</h4>
                        <div class="bar-wrapper">
                            <span class="progress-text">Patience</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%;"></div>
                            </div>
                        </div>
                        <div class="bar-wrapper">
                            <span class="progress-text">Commitment</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="bar-wrapper">
                            <span class="progress-text">Trainings</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 80%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Education Section -->
                    <div class="resume-3-box">
                        <h4>Education</h4>
                        <div class="resume-timeline-box">
                            <span class="degree-duration">May 2010 - March 2018</span>
                            <h5 class="degree-name">Software Engineering</h5>
                            <span class="institute-name">Stanford University</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php
        include "footer.php";
        ?>

    </div>

    <!-- SCRIPTS -->
    <?php
    include "jslink.php";
    ?>

    <!-- SCRIPTS -->




</body>

</html>