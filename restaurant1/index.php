<?php
include("config.php");
// Lakukan koneksi ke database
if(isset($_POST['post_comment'])){
$name = $_POST['name'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Lakukan validasi data jika diperlukan

// Simpan komentar ke dalam database
$sql = "INSERT INTO contact  (name, email, pesan) VALUES ('$name', '$email', '$pesan')";
if($conn->query($sql) === TRUE ){
    echo ""; 
}
else{
echo "Error" .$sql. "<br>" .$conn->error;
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JW Restaurant Official Web</title>
    <!-- link to css -->
    <link rel="stylesheet" href="style.css">
    <!-- box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-- navbar  -->
    <header>
        <a href="#" class="logo"><img src="img/logo.png" alt="">JW Restaurant</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home" class="nav-items navbar-activate">Home</a></li>
            <li><a href="#about" class="nav-items">Deals</a></li>
            <li><a href="#shop" class="nav-items">Menu</a></li>
            <li><a href="#customer" class="nav-items">Customer</a></li>
            <li><a href="#contact" class="nav-items">Contact</a></li>
            <li><a href="halaman_login.php" class="nav-items">Admin</a></li>
        </ul>
    </header>
    <!-- home -->
    <section class="home" id="home">
        <div class="home-text">
            <span>Selamat Datang di</span>
            <h1>JW Restaurant <br>Official Web !</h1>
            <p>Pada web ini kami memberi informasi untuk para pelanggan mengenai isi dari Restoran kami. Di Restoran ini
                kami
                menjual makanan - makanan yang sehat seperti sayur - sayuran, salad, dll. Kami juga menyediakan beberapa
                minuman
                yang dibuat dari buah - buahan juga.
            </p>
        </div>
        <div class="home-img">
            <img src="img/salad.png" alt="">
        </div>
    </section>
    <!-- about -->
    <section class="about" id="about">
        <h1>Today Deals</h1>

        <div class="about-container">
            <!-- box 1 -->
            <div class="about-box">
                <div class="box-img">
                    <img src="img/about5.png" alt="">
                </div>
                <h3>Gado Gado Salad</h3>
                <h2 class="asli">Rp 52.000,00</h2>
                <h3 style="font-size:20px;">Rp 32.000,00</h3>
            </div>
            <!-- box 2 -->
            <div class="about-box">
                <div class="box-img">
                    <img src="img/about2.png" alt="">
                </div>
                <h3 >Green Tofu Salad</h3>
                <h2 class="asli">Rp 32.000,00</h2>
                <h3 style="font-size:20px;">Rp 20.000,00</h3>
            </div>
            <!-- box 3 -->
            <div class="about-box">
                <div class="box-img">
                    <img src="img/about3.png" alt="">
                </div>
                <h3>Green Salad</h3>
                <h2 class="asli">Rp 44.000,00</h2>
                <h3 style="font-size:20px;">Rp 35.000,00</h3>
            </div>
            <!-- box 4 -->
            <div class="about-box">
                <div class="box-img">
                    <img src="img/about4.png" alt="">
                </div>
                <h3>Tomato Salad</h3>
                <h2 class="asli">Rp 47.000,00</h2>
                <h3 style="font-size:20px;">Rp 36.000,00</h3>
            </div>
        </div>
    </section>
    <!-- shop -->
    <section class="shop" id="shop">
        <div class="heading">
            <h2>Our Menu</h2>
            <p>List - list makanan dan minuman yang terdapat pada menu Restoran kami.</p>
        </div>
        <div class="shop-container">
            <div class="shop-box">
                <div class="shop-img">
                    <img src="img/greenpapayasalad.webp" alt="">
                </div>
                <h3>Green Papaya Salad</h3>
                <h2>Rp 65.000,00</h2>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="img/gadogado.jpg" alt="">
                </div>
                <h3>Gado Gado Salad</h3>
                <h2>Rp 45.000,00</h2>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="img/pastasalad.jpg" alt="">
                </div>
                <h3>Pasta Salad</h3>
                <h2>Rp 75.000,00</h2>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="img/jusmangga.webp" alt="">
                </div>
                <h3>Jus Mangga</h3>
                <h2>Rp 25.000,00</h2>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="img/jusnaga.jpg" alt="">
                </div>
                <h3>Jus Buah Naga</h3>
                <h2>Rp 37.000,00</h2>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="img/juswortel.webp" alt="">
                </div>
                <h3>Jus Wortel</h3>
                <h2>Rp 28.000,00</h2>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="img/saladbuah.jpeg" alt="">
                </div>
                <h3>Salad Buah</h3>
                <h2>Rp 56.000,00</h2>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="img/greeksalad.jpg" alt="">
                </div>
                <h3>Greek Salad</h3>
                <h2>Rp 67.000,00</h2>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="img/nicoisesalad.jpg" alt="">
                </div>
                <h3>Nicoise Salad</h3>
                <h2>Rp 59.000,00</h2>
            </div>

        </div>
    </section>
    <section class="customer" id="customer">
        <div class="heading">
            <h2>Our Customers</h2>
            <p>Beberapa customer kami yang memberikan ulasan langsung terhadap Restoran kami.</p>
        </div>
        <div class="customer-container">
            <div class="box">
                <img src="img/c1.jpg" alt="">
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>Pelayanan di Restoran ini sangatlah baik. Para pelayan juga sangat ramah terhadap pelanggan disini.
                    Menurut saya Restoran ini terbaik untuk dikunjungi!</p>
                <h2>Taylor</h2>
            </div>

            <div class="box">
                <img src="img/c2.jpg" alt="">
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>Restoran ini sudah cukup bagus dari segi makanan, minuman, dan pelayanan yang sangat baik dan ramah.
                    Tapi, saya masih kurang suka terhadap kebersihan dalam toilet nya.
                </p>
                <h2>Zayn</h2>
            </div>

            <div class="box">
                <img src="img/c3.jpg" alt="">
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p> Saya adalah pelanggan setia dari Restoran ini. Makanan dan minuman di Restoran ini
                    sangatlah baik untuk kesehatan tubuh. Ini adalah Restoran terbaik !
                </p>
                <h2>Prilia</h2>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact Us</h2>
            <p>Jika anda mempunyai saran terhadap Restoran kami, silahkan hubungi kami melalui form dibawah ini.</p>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <p>Jika anda ingin mengetahui lebih lanjut informasi terhadap Restoran kami, silahkan kunjungi media
                    sosial kami yang<br>tertera dibawah ini.</p>
                <div class="adress">
                    <i class="bx bxs-map"><span>Bekasi, Tambun Selatan, Indonesia</span></i>
                    <i class="bx bxs-phone"><span>+62 85716343425</span></i>
                    <i class="bx bxs-envelope"><span>contact@jwrestaurant.com</span></i>
                </div>
                <div class="social">
                    <a href="https://id-id.facebook.com/" target="_blank"><i class="bx bxl-facebook"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.whatsapp.com/" target="_blank"><i class="bx bxl-whatsapp"></i></a>
                </div>
            </div>

            <div class="contact-form">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Name*" required>
                    <input type="email" name="email" placeholder="Email*" required>
                    <textarea name="pesan" id="" cols="30" rows="10" placeholder="Message*" required></textarea>
                    <input type="submit" name="post_comment" value="Kirim" class="btn">
                </form>
            </div>
        </div>
    </section>
    <!-- copyright -->
    <div class="copyright">
        <p>&#169; JW Restaurant Official Web</p>
    </div>

    <!-- link to js -->
    <script src="script.js"></script>
    <script src="https://unpkg.com/@sidsbrmnn/scrollspy@1.x/dist/scrollspy.min.js"></script>
</body>

</html>`