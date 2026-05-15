<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz@10..48&family=Noto+Sans+TC:wght@700&family=REM:ital,wght@0,400;1,300&family=Roboto+Slab:wght@400;500;600&display=swap"
        rel="stylesheet">

    <style>
        .contactus a {
            text-decoration: none;
            color: black;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <!-- agr koi parent div ya section mai nav ho ga  to usy sticky-top dain gy agr ni to nav ko fixed-top dain gy -->
    <section class="header_wrapper sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ms-5">
                <a class="navbar-brand" href="#">
                    <img src="img/soft-logo-blue.png" alt="" width="130px" height="40px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu bg-light">
                                <li><a class="dropdown-item " href="enterprise-app.php">Enterprise Applications</a></li>
                                <li><a class="dropdown-item" href="ecommerce.php">Ecommerce</a></li>
                                <li>

                                </li>
                                <li><a class="dropdown-item" href="mobileapp.php">Mobile App</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Solutions
                            </a>
                            <ul class="dropdown-menu bg-light">
                                <li><a class="dropdown-item" href="ERP.php">ERP</a></li>
                                <li><a class="dropdown-item" href="CRM.php">CRM</a></li>

                                <li><a class="dropdown-item" href="HR-software.php">HR Softare</a></li>
                                <li><a class="dropdown-item" href="ELearning.php">ELearning</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php"> Courses</a>
                        </li>

                    </ul>
                    <!-- <div>
                        <h5><i class="fa-solid fa-magnifying-glass"></i></h5>
                    </div> -->

                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->

                    <!-- <button class="btn btn-outline-success me-3 contactus" type="submit">
                        <a href="/contactus.php">Contact US</a></button> -->
                        <button onclick="window.location.href='/contactus.php'" 
        class="btn btn-outline-success me-3 contactus">
  Contact US
</button>

                        
                    </form>

                </div>
            </div>
        </nav>
    </section>