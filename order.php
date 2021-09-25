<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-10/css/all.css">

    <!-- person css -->
    <link rel="stylesheet" href="./access/css/style.css">

</head>

<body>

    <!-- begin heading -->
    <div class="heading">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">
                                <img src="./access/image/logo/logo.png" alt="logo" class="img-fluid">
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./categories.php">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./foods.php">Foods</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end heading -->


    <!-- begin order -->
    <div class="food-order">
        <div class="container">
            <div class="row">
                <h1 class="text-white text-center pb-4 pt-5">Fill this form to comfirm your order.</h1>
            </div>
            <div class="row">
                <div class="col justify-content-center d-flex pb-4">
                    <fieldset class="">
                        <legend>Selected Food</legend>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="./access/image/food-img/menu-pizza.jpg"
                                        class="img-fluid border-radius p-3" alt="pizza">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">Food Title</h5>
                                        <p class="card-text">$2.3
                                        </p>
                                        <p class="card-text fw-bold">Quanlity</p>
                                        <input class="w-100" type="number">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>


            </div>
            <div class="row">
                <div class="col justify-content-center d-flex pb-4">
                    <fieldset style=" width: 540px;">
                        <legend>Selected Food</legend>
                        <div class="card mb-3 p-2" style="max-width: 540px;">
                            <div class="fw-bold mt-2">Full Name</div>
                            <input type="text" class="" placeholder="E.g. duylor">
                            <div class="fw-bold mt-2">Phone Number</div>
                            <input type="tel" class="" placeholder="E.g. 123456xxxx">
                            <div class="fw-bold mt-2">Email</div>
                            <input type="email" class="" placeholder="E.g. abc@xxx.com">
                            <div class="fw-bold mt-2">Address</div>
                            <textarea name="address" class="" rows="10"
                                placeholder="E.g. Street, City, Country"></textarea>
                            <button type="button" class="btn btn-danger w-25 mt-4">Danger</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end order -->
    <!-- begin footer -->
    <div class="footer">
        <div class="container">
            <div class="row col-6 justify-content-center pt-3 pb-3 m-auto">
                <div class="col-1">
                    <i class="fab fa-facebook"></i>
                </div>
                <div class="col-1 ">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="col-1 ">
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="row col">
                <p class="text-center">All right reserved. Design By <a href="#"
                        class="text-decoration-none coppyright">DuyLoR</a></p>
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->


</body>

</html>