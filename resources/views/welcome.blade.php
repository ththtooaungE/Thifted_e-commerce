<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/d0eb289ef5.js" crossorigin="anonymous"></script>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
        }

        .item1 {
            grid-row-start: 1;
            grid-row-end: 3;
        }

        .item3 {
            grid-column-start: 3;
            grid-column-end: 4;
            grid-row-start: 1;
            grid-row-end: 3;
        }

        .item5 {
            grid-column-start: 5;
            grid-column-end: 6;
            grid-row-start: 1;
            grid-row-end: 3;
        }
    </style>
</head>

<body style="background-color: #cddef7;">

    <div class="container-lg" style="background-color: #cddef7;">
        <nav class="navbar p-3 m-2 d-flex">
            <a href="" class="nav-brand nav-link mx-3 px-2" style="font-size:40px">Thrifted</a>
            <form action="" class="d-flex form flex-grow-1">
                <input type="search" class="form-control me-2 border border-dark rounded-pill" placeholder="search">
                <input type="submit" value="search" class="btn btn-outline-dark rounded-pill">
            </form>
            <ul class="nav px-2 mx-2">
                <li class="nav-item">
                    <a href="" class="nav-link">Sign in</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link"><i class="fa-solid fa-heart"></i></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Cart</a>
                </li>
            </ul>
            <ul class="container nav mt-3">
                <li class="nav-item">
                    <a href="" class="nav-link">Top wear</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Pants</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Kintted Pieces</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Acceressories</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Shoes</a>
                </li>
            </ul>
        </nav>

        <div class="container">
            <div class="d-flex justify-content-around p-3  mx-5 mt-3">
                <img src="https://geocominstal.ro/wp-content/uploads/2018/11/blog-ph.jpg" alt="..."
                    class="rounded-circle" style="height:115px;">
                <img src="https://geocominstal.ro/wp-content/uploads/2018/11/blog-ph.jpg" alt="..."
                    class="rounded-circle" style="height:115px;">
                <img src="https://geocominstal.ro/wp-content/uploads/2018/11/blog-ph.jpg" alt="..."
                    class="rounded-circle" style="height:115px;">
                <img src="https://geocominstal.ro/wp-content/uploads/2018/11/blog-ph.jpg" alt="..."
                    class="rounded-circle" style="height:115px;">
                <img src="https://geocominstal.ro/wp-content/uploads/2018/11/blog-ph.jpg" alt="..."
                    class="rounded-circle" style="height:115px;">
                <img src="https://geocominstal.ro/wp-content/uploads/2018/11/blog-ph.jpg" alt="..."
                    class="rounded-circle" style="height:115px;">
            </div>
        </div>

        <div class="container-fluid my-5">
            <p class=" p-0 m-0">Recentily view & more ...</p>
            <div class="d-flex">
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
            </div>
            <div class="d-flex">
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
                <div class="p-2" style="width:100%;">
                    <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded"
                        style="width:100%; height:170px; object-fit:cover;">
                </div>
            </div>

        </div>

        


        <div class="grid-container my-5">
            <div class="item1 p-1 m-1">
                <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded" style="width: 100%;height: 100%;">
            </div>
            <div class="item2 p-1 m-1">
                <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded" style="width: 100%;">

            </div>
            <div class="item3 p-1 m-1">
                <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded" style="width: 100%;height: 100%;">

            </div>
            <div class="item4 p-1 m-1">
                <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded" style="width: 100%;">

            </div>
            <div class="item5 p-1 m-1">
                <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded" style="width: 100%;height: 100%;">

            </div>
            <div class="item6 p-1 m-1">
                <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded" style="width: 100%;">

            </div>
            <div class="item7 p-1 m-1">
                <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" class="rounded" style="width: 100%;">

            </div>

        </div>

        <div class="row">
            <div class="col-3">
                <div class="card text-center p-2">
                    <div>
                        <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" style="width: 80%;" class="p-2 m-2">
                    </div>
                    <p>Category</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-center p-2">
                    <div>
                        <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" style="width: 80%;" class="p-2 m-2">
                    </div>
                    <p>Category</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-center p-2">
                    <div>
                        <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" style="width: 80%;" class="p-2 m-2">
                    </div>
                    <p>Category</p>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-center p-2">
                    <div>
                        <img src="https://m.media-amazon.com/images/I/B1tjGm9q9bS._CLa%7C2140%2C2000%7C417DGzFq9LL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="" style="width: 80%;" class="p-2 m-2">
                    </div>
                    <p>Category</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mb-5">
            <div class="card w-75 p-3 m-2">
                <p class="h3 text-center m-3 p-2">What is Thrifted?</p>
                <div class="row">
                    <div class="col-6 p-4">
                        <h6 class="h5">Thrifited is</h6>
                        <p>Thrifited is a online used-clothes selling website. The organization is located in Myanmar.
                        </p>
                    </div>
                    <div class="col-6 p-4">
                        <h6 class="h5">Goals</h6>
                        <p>We aim to reduce the waste as could as possible. Instead of keeping things in your closet and
                            letting them destroy naturally, you could get profits from selling on our website. Be a
                            change by joing us.</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="min-height: 100px;"></div>

    </div>
    <footer>
        <div class="text-white" style="background-color: #124b9f;">
            <div class="container">
                <div class="row mt-4 pt-4">
                    <div class="col-3 p-3">
                        <h6 class="h5 py-1">Shop</h6>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Men</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Women</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Kid</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Bags</a>
                    </div>
                    <div class="col-3 p-3">
                        <h6 class="h5 py-1">Sell</h6>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Products</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Upgrade your
                            account</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Proficts</a>
                    </div>
                    <div class="col-3 p-3">
                        <h6 class="h5 py-1">About</h6>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Thrifited</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Donate</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Community</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Contact us</a>
                    </div>
                    <div class="col-3 p-3">
                        <h6 class="h5 py-1">Help</h6>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Help center</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Contact us</a>
                        <a href="" class="list-group-item list-group-item-action fw-light lh-lg">Privacy settings</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>

</html>