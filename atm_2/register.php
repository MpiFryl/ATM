<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang!</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="bg-dark">
    <form action="proses/p_register.php" method="post">
        <div class="login" style="margin: 100px 150px 0 150px;">
            <!-- username -->
            <h2 class="text-white text-center mb-5">Daftar</h2>
            <div class="input-group flex-nowrap mb-2">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="addon-wrapping" name="username" required>
            </div>

            <!-- no telp -->
            <div class="input-group flex-nowrap mb-2">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-phone"></i></span>
                <input type="number" class="form-control" placeholder="No. telp" aria-label="Telp"
                    aria-describedby="addon-wrapping" name="no_telp" required>
            </div>

            <!-- password -->
            <div class="input-group flex-nowrap mb-2">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                    aria-describedby="addon-wrapping" minlength="8" name="password" required>
            </div>

            <!-- pin -->
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" placeholder="Pin untuk transaksi" aria-label="Pin"
                    aria-describedby="addon-wrapping" minlength="6" name="pin" required>
            </div>
            <a href="index.php" class="text-decoration-none">Sudah punya akun?</a>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Konfirmasi</button>
            </div>
        </div>
    </form>
</body>

</html>