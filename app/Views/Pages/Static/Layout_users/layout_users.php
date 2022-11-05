<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Web Penjualan Madu</title>
    <!-- CSS files -->
    <link href="assets/users/css/tabler.min.css" rel="stylesheet" />
    <link href="assets/users/tabler-flags.min.css" rel="stylesheet" />
    <link href="assets/users/tabler-payments.min.css" rel="stylesheet" />
    <link href="assets/users/tabler-vendors.min.css" rel="stylesheet" />
    <link href="assets/users/demo.min.css" rel="stylesheet" />

    <script></script>
</head>

<body>
    <div class="page">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">

                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                        <img src="#" alt="logo" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                    </a>
                </h1>

                <div class="navbar-nav flex-row order-md-last">

                    <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r="4" />
                                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <div class="d-none d-xl-block ps-2">
                                <?php if (session()->get('stat') == 'login-admin' || session()->get('stat') == 'login-user') { ?>
                                    <div><?= session()->get('nama'); ?></div>
                                    <div class="mt-1 small text-muted"><?= session()->get('nama'); ?></div>
                                <?php } else { ?>
                                    <div>Must Login</div>
                                    <div class="mt-1 small text-muted">Must Login</div>
                                <?php } ?>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="/login" class="dropdown-item">Login</a>
                            <a href="/regist" class="dropdown-item">Regist</a>
                            <?php if (session()->get('stat') == 'login-admin' || session()->get('stat') == 'login-user') { ?>
                                <a href="/chat" class="dropdown-item">Chat</a>
                                <a href="/keranjang" class="dropdown-item">Keranjang</a>
                                <div class="dropdown-divider"></div>
                                <a href="/logout" class="dropdown-item">Logout</a>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>
        </header>

        <div class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar navbar-light">
                    <div class="container-xl">

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Home
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/product">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                                            <line x1="12" y1="12" x2="20" y2="7.5" />
                                            <line x1="12" y1="12" x2="12" y2="21" />
                                            <line x1="12" y1="12" x2="4" y2="7.5" />
                                            <line x1="16" y1="5.25" x2="8" y2="9.75" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Product
                                    </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="page-wrapper">

            <?= $this->renderSection('content_user'); ?>

            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">

                        <div class="col-lg-auto ms-lg-auto">
                        </div>

                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; RWM 2022
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </footer>

        </div>

    </div>

    <!-- Libs JS -->
    <script src="assets/users/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/users/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
    <script src="assets/users/libs/jsvectormap/dist/maps/world.js"></script>
    <script src="assets/users/libs/jsvectormap/dist/maps/world-merc.js"></script>
    <!-- Tabler Core -->
    <script src="assets/users/js/tabler.min.js"></script>
    <script src="assets/users/js/demo.min.js"></script>
</body>

</html>