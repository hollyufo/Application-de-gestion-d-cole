<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./views/assets/css/dashboard.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title></title>
</head>
<body class="">
    <nav class="sidebar close overflow-hidden">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./views/assets/img/blank-profile-picture-973460_640.png" alt="">
                </span>
                <div class="text logo-text">
                    <span class="name"><?php echo $_SESSION['username']?></span>
                    <span class="profession">ADMIN</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle' style="margin-right: 40px!important; margin-top: 50px!important;"></i>
        </header>

        <div class="menu-bar overflow-hidden">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="./dashboard">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./teachers">
                            <i class='bx bx-id-card icon' ></i>
                            <span class="text nav-text">Teachers</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./students">
                            <i class='bx bx-user-circle icon'></i>
                            <span class="text nav-text">Student</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="./parents">
                            <i class='bx bx-run icon'></i>
                            <span class="text nav-text">Parents</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="./admin">
                            <i class='bx bx-male-female icon'></i>
                            <span class="text nav-text">Admin's</span>
                        </a>
                    </li>
                    
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="./logout">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
        <?php
            //checking if user is loged in
            if(!isset($_SESSION['loggedin'])){
                redirect('/login');
            }
        ?>

    </nav>