<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: halaman_login.php");
    exit(); // Terminate script execution after the redirect
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="halaman_panel.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container-logout">

        <form action="logout.php" method="POST" class="login-email">
            <h1>Selamat Datang,
                <?php echo $_SESSION['username']; ?>!
            </h1>
            <div class="input-group">
                <button type="submit" class="btn">Logout</button>
            </div>
        </form>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>WAKTU</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>PESAN</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM contact";
            $result = mysqli_query($conn, $query);
            $NO = 1;
            while ($fetch_pesan = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $NO . "</td>";
                echo "<td>" . $fetch_pesan['created_at'] . "</td>";
                echo "<td>" . $fetch_pesan['name'] . "</td>";
                echo "<td>" . $fetch_pesan['email'] . "</td>";
                echo "<td>" . $fetch_pesan['pesan'] . "</td>";
                echo "<td>";
                echo "<a href='delete_comment.php?id=" . $fetch_pesan['id'] . "' class='btn btn-danger' onclick='return confirmDelete()'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
                $NO++;
            }
            ?>
             <script src="script.js"></script>
        </tbody>
    </table>
</body>

</html>