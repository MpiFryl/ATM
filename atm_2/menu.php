<?php
session_start();
include "proses/conn.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

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

<body>

    <div class="bg-primary p-2 d-flex rounded align-items-center gap-2 mb-2" style="margin: 180px 250px 0 250px">
        <i class="fa-solid fa-user fa-fw"></i>

        <?php
        $current_user = $_SESSION['username'];
        $sql = "SELECT username FROM users WHERE username = '$current_user'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<span style='font-weight: bold; color: white;'>" . ($row["username"]) . "</span>";
        } else {
            echo "User not found";
        }
        ?>

        <a href="index.php" class="text-decoration-none text-light ms-auto"><i
                class="fa-solid fa-right-from-bracket fa-fw"></i></a>
    </div>

    <div class="d-flex w-100" style="padding: 0 250px 0 250px">
        <!-- Kolom 1 -->
        <div
            class="bg-primary me-2 p-4   w-100 text-light rounded d-flex align-items-center justify-content-center gap-3">
            <i class="fa-solid fa-wallet" style="font-size: 50px;"></i>
            <div>
                <h4 class="m-0">Kamu punya saldo</h4>

                <?php
                $username = $_SESSION['username'];
                $sql = "SELECT saldo FROM users WHERE username='$username'";
                $result = $conn->query($sql);
                $user = $result->fetch_assoc();

                echo "<p>Rp. " . number_format($user['saldo'], 0, ',', '.') . "</p>";
                ?>

            </div>
        </div>

        <!-- Kolom 2 -->
        <div class="d-flex flex-column w-100">
            <a href="tarik_simpan.php" class="text-decoration-none w-100">
                <div class="bg-primary p-4 w-100 text-light text-center rounded mb-2 d-flex align-items-center gap-2">
                    <i class="fa-solid fa-money-bill fa-xl"></i>
                    <h5 class="m-0">Tarik dan simpan saldo</h5>
                </div>
            </a>

            <a href="transfer.php" class="text-decoration-none w-100">
                <div class="bg-primary p-4 w-100 text-light text-center rounded d-flex align-items-center gap-2">
                    <i class="fa-solid fa-money-bill-transfer fa-xl"></i>
                    <h5 class="m-0">Transfer ke rekening lain</h5>
                </div>
            </a>
        </div>

    </div>

</body>

</html>