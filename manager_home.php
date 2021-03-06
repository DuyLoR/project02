<!doctype html>
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


    <title>Wow Food!</title>
</head>

<body>

    <!-- begin heading -->
    <div class="heading heading-manager border-2 border-dark border-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid ">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="./manager_home.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="./manager_admin.php">Admin</a>
                                    </li>
                                    <a class="nav-link" href="./manager_categories.php">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./manager_food.php">Food</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./manager_order.php">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Logout</a>
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

    <!-- begin dashboard -->
    <div class="dashboard bg-secondary bg-opacity-25">
        <div class="container">
            <div class="row col p-4 pt-5 pb-5">
                <h1>Dashboard</h1>
            </div>
            <div class="row pb-5 justify-content-between">
                <div class="col-md-3 border bg-white text-center">
                    <h2 class="pt-3">4</h2>
                    <p class="pb-3" >Catagories</p>
                </div>
                
                <div class="col-md-3 border bg-white text-center">
                    <h2 class="pt-3">6</h2>
                    <p class="pb-3" >Foods</p>
                </div>
                <div class="col-md-3 border bg-white text-center">
                    <h2 class="pt-3">3</h2>
                    <p class="pb-3" >Tood Orders</p>
                </div>
                <div class="col-md-3 border bg-white text-center">
                    <h2 class="pt-3">$36.00</h2>
                    <p class="pb-3" >Revenue Generated</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end dashboard -->

    <!-- begin footer -->
    <div class="footer footer-manager bg-danger">
        <div class="container">
            <div class="row col pt-2 ">
                <p class="text-center">2021 All right reserved, Food house.Developed By - <a href="#"
                        class="coppyright text-primary">DuyLoR</a></p>
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