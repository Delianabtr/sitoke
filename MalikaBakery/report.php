<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css" />
</head>

<body>
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-3" style="background-color: #D2B48C;">
                <!-- START SIDEBAR -->
                <?php
                require "sidebarmg.php";
                ?>
                <!-- END SIDEBAR -->
            </div>

            <div class="col-lg-9" style="background-color: #FFEBCD;">
                <!-- start content -->
                <h1 class="ms-0" style="text-align: center;">REPORT</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputmulai" class="col-sm-4 col-form-label">Strat From</label>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control border-0" id="inputmulai" style="background-color: #F5F5DC;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputsampai" class="col-sm-2 col-form-label">To</label>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control border-0" id="inputsampai" style="background-color: #F5F5DC;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mt-5">
                        <center>
                            <div class="card bg-transparent border-0">
                                <center>
                                    <a href="home.php">
                                        <img src="images/tag.png" class="card-img-center" alt="..." style="width: 150px; height:100px;">
                                    </a>
                                </center>
                                <div class="card-body">
                                    <h5 class="card-title">Laporan Penjualan</h5>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-sm-6 mt-5">
                        <center>
                            <div class="card bg-transparent border-0">
                                <center>
                                    <a href="home.php">
                                        <img src="images/box.png" class="card-img-center" alt="..." style="width: 150px; height:100px;">
                                    </a>
                                </center>
                                <div class="card-body">
                                    <h5 class="card-title">Laporan Barang Masuk</h5>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <center>
                            <div class="card bg-transparent border-0">
                                <center>
                                    <a href="home.php">
                                        <img src="images/line-chart.png" class="card-img-center" alt="..." style="width: 150px; height:100px;">
                                    </a>
                                </center>
                                <div class="card-body">
                                    <h5 class="card-title">Laporan Laba Rugi</h5>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <!-- end content -->
            </div>

        </div>
    </div>

    <!-- Page level custom scripts -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>