<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">

    <title>Pokemon List</title>
</head>

<body>
    <?php include_once('../php_partials/menu.php'); ?>
    <div class="container-fluid">

        <div class="row row-cols-1 row-cols-md-5  g-4 my-1">
            <div class="col">
                <div class="card h-100 border border-secondary">
                    <img src="../media/001.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">001-Bulbasaur</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border border-secondary">
                    <img src="../media/002.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">002-Ivysaur</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 border border-secondary">
                    <img src="../media/003.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">003-Venusaur</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>
<script src=" ../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>

</html>