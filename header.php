<div class="header-top">
                <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">

                            <div class="col-md-4">
                                <span>Welcome Back!</span>
                            </div>
                            <div class="col-md-3 sign-btn">
                                <a href="login.php" >
                                    <i class="fas fa-lock"></i> Sign In</a>
                            </div>
                            <div class="col-md-3 sign-btn">
                                <a href="register.php">
                                    <i class="far fa-user"></i> Register</a>
                            </div>
                            <div class="search col-md-2">
                                <div class="mobile-nav-button">
                                    <button id="trigger-overlay" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                <!-- open/close -->
                                <div class="overlay overlay-door">
                                    <button type="button" class="overlay-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                    <form action="#" method="post" class="d-flex">
                                        <input class="form-control" type="search" placeholder="Search here..." required="">
                                        <button type="submit" class="btn btn-primary submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- open/close -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                            <h1>
                                <a class="navbar-brand" href="index.php">
                                    WORK GURU</a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="how.php">How it works</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ser_login.php">Become Service-Provider</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.php">Services</a>
                                </li>
                                
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                               

                            <li class="nav-item dropdown active" >
                                <?php if(strlen($_SESSION['login']))
    {   ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo htmlentities($_SESSION['username']);?>
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#"><?php echo htmlentities($_SESSION['username']);?></a>
                                        <a class="dropdown-item" href="profile_client.php" title="">My Account</a>
                                        <a class="dropdown-item" href="logout.php" title="">Log Out</a>
                                        


                                    </div>
                                    <?php } ?>
                                </li>
                                <li class="nav-item dropdown active">
                                <?php if(strlen($_SESSION['ser_login']))
    {   ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo htmlentities($_SESSION['username']);?>
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#"><?php echo htmlentities($_SESSION['username']);?></a>
                                        <a class="dropdown-item" href="ser_pro_account.php" title="">My Account</a>
                                        <a class="dropdown-item" href="ser_profile.php" title="">Work Profile</a>
                                        <a class="dropdown-item" href="services_list.php" title="">Service(Work) Lists </a>
                                        <a class="dropdown-item" href="logout.php" title="">Log Out</a>
                                        


                                    </div>
                                    <?php } ?>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>
            </div>