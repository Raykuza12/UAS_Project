<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AIStudyBuddy</title>
    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- Nav Bar Start-->
    <nav class="navbar">
        <a href="#home" class="nav-logo"><span>AI</span>.StudyBuddy</a>

        <div class="nav">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#tools">Tools</a>
            <a href="#demo">Demo</a>
        </div>

        <div class="nav-ex">
            <a href="login/index.php" id="user"><i data-feather="user"></i></a>
        </div>
    </nav>
    <!-- Nav Bar End -->
    <!-- Main Start-->
    <section class="main" id="home">
        <main class="content">
            <h1><span>Knowledge</span> Accelerator</h1>
            <p>Learn New Ways To Learn</p>
            <a href="#tools" class="cta">View</a>
        </main>
    </section>
    <!-- Main End-->
    <!-- about start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="about-img">
                <img src="image/about.jpg" alt="tentang kami" />
            </div>
            <div class="content">
                <h3>Jadikanlah <span>AI</span> Sebagai Temanmu</h3>
                <p>
                    AiStudyBuddy adalah platform inovatif yang didedikasikan untuk
                    membantu para pelajar dalam menjalani perjalanan akademik mereka.
                    Dengan gabungan teknologi kecerdasan buatan (AI) dan informasi
                    terkini, AiStudyBuddy menyediakan berbagai tools dan sumber daya
                    yang memungkinkan pelajar untuk mengoptimalkan proses pembelajaran
                    mereka. Kami bertekad untuk memberikan solusi yang efektif dan
                    efisien dalam menyelesaikan tugas, memahami materi, dan meningkatkan
                    keterampilan studi. Dengan AiStudyBuddy, pelajar dapat meraih
                    kesuksesan akademik dengan dukungan AI yang cerdas dan terpercaya.
                </p>
            </div>
        </div>
    </section>
    <!-- about end -->
    <!-- PHP -->
    <section id="tools" class="tools">
        <h2>Tools <span>AI</span></h2>
        <div class="container my-container">
            <table class="tools-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tipe</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM ai2");
        while ($d = mysqli_fetch_array($data)) {
          $imageData = $d['img'];
          $imageDataEncoded = base64_encode($imageData);
          $imageSrc = "data:image/jpeg;base64,$imageDataEncoded";
        ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['tipe']; ?></td>
                        <td>
                            <a href="full_desc.php?id=<?php echo $d['id']; ?>" class="full-desc">View</a>
                        </td>
                    </tr>
                    <?php 
        }
        ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Tools section end -->
    <!-- Demo section start-->
    <section id="demo" class="demo">
        <h2>Demo <span>AI</span></h2>
        <p class="desk">Demo beberapa Tools AI yang tersedia</p>
        <table>
            <tr>
                <td>`
                    <h3>Deskripsi</h3>
                </td>
                <td>
                    <h3>Media</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>ChatGpt</h3>
                    <p>
                        GPT-3 adalah AI yang dapat memberikan output berupa text semakin spesifik input yang
                        diberikan maka semakin spesifik juga output yang dihasilkan. GPT-3 juga dapat membantu pengguna
                        dalam belajar seperti menjadi mentor untuk belajar.
                    </p>
                </td>
                <td>
                    <div class="media-container-1">
                        <img src="image/chatgpt_main.jpg" alt="Foto" width="480px" height="270px">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>GPT-4</h3>
                    <p>
                        GPT-4 adalah upgrade dari GPT-3 yang merupakan versi berbayar namun GPT-4 memiliki banyak
                        keunggulan dibandingkan pendahulunya berupa penambahan variasi output yang diberikan
                    </p>
                </td>

                <td>
                    <video controls width="480px" height="270px">
                        <source src="video/GPT-4_Introduction.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </td>
            </tr>

            <tr>
                <td>
                    <h3>DALL-E-2</h3>
                    <p>
                        DALL-E-2 adalah AI yang dapat mengenerate gambar dari input berupa text semakin spesifik
                        input yang diberikan maka output yang diberikan akan semakin spesifik. Jika kita merasa tidak
                        cukup suka
                        mengenai hasil yang diberikan kita bisa meminta hasil yang lain.
                    </p>
                </td>
                <td>
                    <div class="media-container-2">
                        <img src="image/DALL-E-2.jpg" alt="Foto" width="480px" height="270px">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Musicfy</h3>
                    <p>
                        Musicfy adalah AI yang dapat mengubah vokal dari suatu lagu menjadi suara vokal orang
                        lain, namun pada versi gratis hanya diberikan suara AI hasil training dari Musicfy. Jika kita
                        berlangganan, maka suara yang tersedia semakin bervariasi.
                    </p>
                </td>
                <td>
                    <div class="media-container-3">
                        <audio controls>
                            <source src="music_and_sound/Toxic_AI_Remix.wav" type="audio/mp3">
                            Your browser does not support the audio tag.
                        </audio>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Uberduck</h3>
                    <p>
                        Uberduck adalah AI yang berfungsi sama seperti Musicfy, namun Uberduck memiliki fitur
                        yang dapat mengubah text menjadi suara figur terkenal. Namun, untuk fitur mengubah suara vokal
                        dari
                        musik, Uberduck harus berlangganan terlebih dahulu.
                    </p>
                </td>
                <td>
                    <div class="media-container-4">
                        <audio controls>
                            <source src="music_and_sound/musicfy_Squidward.wav" type="audio/mp3">
                            Your browser does not support the audio tag.
                        </audio>
                    </div>
                </td>
            </tr>
        </table>
    </section>
    <!-- Demo section end-->
    <section id="footer" class="footer">
        <div class="footer-container">
            <h3>&copy;<span>AI</span>.StudyBuddy,2023</h3>
        </div>
    </section>
    <!-- icons -->
    <script>
    feather.replace();
    </script>
    <!-- JavaScript -->
    <script src="JS/script.js"></script>
</body>

</html>