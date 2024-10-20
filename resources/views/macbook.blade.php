<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="x-icon" href="/images/logo.png">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        body,
        html {
            height: 100%;
            margin: 0;
            font-family: "Roboto", sans-serif;
        }

        .content {
            margin-top: 70px;
        }

        .catalog-title {
            font-size: 60px;
            font-weight: bold;
            color: black;
            text-shadow: 0 0px 0px 3px rgba(0, 0, 0, 0.5);
        }

        .catalog-subtitle {
            font-size: 18px;
            color: gray;
            font-weight: 300;
            text-align: center;
            margin-top: 10px;
        }

        .divider {
            height: 1px;
            background-color: lightgray;
            margin: 20px 0;
        }

        .logo {
            width: 40px;
            height: auto;
        }

        .catalog-container {
            width: 80%;
            margin: auto;
        }

        .navbar-toggler {
            border: none;
        }

        .scrolling-wrapper {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 20px;
        }

        .card {
            min-width: 300px;
            flex: 0 0 auto;
        }

        .card img {
            max-width: 100%;
            height: auto;
        }

        .card-body {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                    aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <i class="bi bi-apple" style="font-size: 20px"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <h5 class="navbar-brand">Apple.</h5>
                </a>
                <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('product')}}">Product</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="content">
        <div class="catalog-container">
            <div class="text-center mb-3">
                <h1 class="catalog-title">Our Macbook Series</h1>
            </div>
            <div class="catalog-subtitle">
                We are committed to crafting high-quality products that not only meet your needs but also enhance your
                everyday life. We believe in innovation and excellence, ensuring every item we create brings joy and
                satisfaction.
            </div>
            <div class="divider"></div>

            <div class="scrolling-wrapper">
                <div class="card">
                    <img src="macbook-m1.jpeg" alt="Macbook M1">
                    <div class="card-body">
                        <h5 class="card-title">Macbook M1</h5>
                        <p class="card-text" id="price-m1">IDR 20000000</p>
                    </div>
                </div>

                <div class="card">
                    <img src="macbook-m2.jpeg" alt="Macbook M2">
                    <div class="card-body">
                        <h5 class="card-title">Macbook M2</h5>
                        <p class="card-text" id="price-m2">IDR 20000000</p>
                    </div>
                </div>

                <div class="card">
                    <img src="macbook-m3.jpg" alt="Macbook M3">
                    <div class="card-body">
                        <h5 class="card-title">Macbook M3</h5>
                        <p class="card-text" id="price-m3">IDR 20000000</p>
                    </div>
                </div>

                <div class="card">
                    <img src="macbook-m4.jpeg" alt="Macbook M4">
                    <div class="card-body">
                        <h5 class="card-title">Macbook M4</h5>
                        <p class="card-text" id="price-m4">IDR 20000000</p>
                    </div>
                </div>

                <div class="card">
                    <img src="macbook-m5.jpeg" alt="Macbook M5">
                    <div class="card-body">
                        <h5 class="card-title">Macbook M5</h5>
                        <p class="card-text" id="price-m5">IDR 20000000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        function formatPrice(price) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(price);
        }

        document.getElementById('price-m1').textContent = formatPrice(20000000);
        document.getElementById('price-m2').textContent = formatPrice(20000000);
        document.getElementById('price-m3').textContent = formatPrice(20000000);
        document.getElementById('price-m4').textContent = formatPrice(20000000);
        document.getElementById('price-m5').textContent = formatPrice(20000000);
    </script>

</body>
</html>