<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page</title>
    <!-- CSS files -->
    <link href="assets/users/css/tabler.min.css" rel="stylesheet" />
    <link href="assets/users/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="assets/users/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="assets/users/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="assets/users/css/demo.min.css" rel="stylesheet" />
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container-tight py-4">

            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="#" alt="Logo" height="36"></a>
            </div>

            <form class="card card-md" action="#" method="POST">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Login ke Akun yang telah dimiliki</h2>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Username" autofocus>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>

                </div>
            </form>

            <div class="text-center text-muted mt-3">
                Belum memiliki akun? <a href="/regist" tabindex="-1">Regist</a>
            </div>

            <div class="text-center text-muted mt-3">
                Kembali ke home <a href="/" tabindex="-1">Back</a>
            </div>

        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="assets/users/js/tabler.min.js" defer></script>
    <script src="assets/users/js/demo.min.js" defer></script>
</body>

</html>