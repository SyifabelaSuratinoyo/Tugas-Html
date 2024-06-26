<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syifabela Suratinoyo - Student</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="styles/style.css">
</head>

  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Syifa<span>bela</span>.</a>

      <div class="navbar-nav">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#gallery">Galerry</a>
          <a href="#blog">Blog</a> 
          <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
          <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->


    <!--untuk home-->
    <div class="wrapper">
         <section id="home">
              <div class="detel">
                   <h1>Hello! I'm <span>Syifabela Suratinoyo</span></h1>
                   <p>Welcome to my personal homepage! Discover memorable moments in the gallery,
                         <br>interesting stories on the blog, and feel free to contact me through the contact page. Enjoy!
                        </p>
                         
                        <div class="images">
                           <img src="assets/cipa.png" alt="syifabela">
                        </div>       
             </div>
         </section>
    </div>


    <!--untuk about-->
    <section id="about">
      <div class="container">
        <div class="box-about">
          <div class="box">
            <img src="assets/cipa1.jpg" alt="me">
          </div>
          <div class="box">
            <h1>About <span>Me</span></h1>
            <h2>Hi! I'm <span>Syifabela</span></h2>
                <p> I am an Informatics Engineering student who is currently in my second year at Sam Ratulangi University.</p>
                <p1>
                <br>I was born in Gorontalo on July 20th, making me a Cancer zodiac sign. I have 2 siblings, an older sister and an older 
                <br>brother. Our family has 42 cats, and I hope the number doesn't increase. Currently, my activities involve attending 
                <br>classes, participating in the "Unity" campus community, and also being part of the religious organization 
                <br>"BTFT Universitas Sam Ratulangi".
                </p1>
                <p1>
                     <br><br>Right now, I am learning how to create websites using HTML, CSS, JavaScript, and PHP. Additionally, I am also studying 
                     <br>UI/UX through the Unity community, which provides specialized learning for those who are truly interested 
                     <br>in learning.
                </p1>
          </div>
        </div>
      </div>
    </section>


     <!--untuk gallery-->
     <section id="gallery">
          <div class="photo">
               <div class="gallery-title">
                    <h2>My <span>Gallery</span> </h2>
               </div>
               <div class="gallery-icon">
                        <div class="image"> <img src="assets/foto1.jpg" alt="Foto 1" width="200">
                          <div class="image-text">
                            <a href="#" id="location"><i data-feather="map-pin"></i></a><h1>Tanamera, Manado</h1>
                            <p>Foto yang harusnya diabadikan di Caffe Kai Meya yang berada di Tomohon tetapi harus batal dikarenakan ketika saya dan teman-teman sampai, Caffe tersebut dalam keadaan listrik padam. Membuat perjalanan ke Tomohon sia-sia.</p>
                          </div>
                        </div>
                        <div class="image"> <img src="assets/foto2.jpg" alt="Foto 2" width="200"> 
                          <div class="image-text">
                            <a href="#" id="location"><i data-feather="map-pin"></i></a><h1>Cafe Ramadhan Kawasan</h1>
                            <p>Foto yang diabadikan ketika saya dan teman-teman sedang buka bersama di Cafe Ramadhan Kawasan.</p>
                          </div>
                        </div>
                        <div class="image"> <img src="assets/foto3.jpg" alt="Foto 3" width="200"> 
                          <div class="image-text">
                            <a href="#" id="location"><i data-feather="map-pin"></i></a><h1>Lapangan Basket Unsrat</h1>
                            <p>Foto yang diabadikan saat bersantai setelah selesainya kelas</p>
                          </div>
                        </div>
                        <div class="image"> <img src="assets/foto4.jpg" alt="Foto 4" width="200"> 
                          <div class="image-text">
                            <a href="#" id="location"><i data-feather="map-pin"></i></a><h1>Rumah Intan</h1>
                            <p>Foto yang diabadikan saat berkunjung ke rumah Intan untuk merayakan Idul Fitri</p>
                          </div>
                        </div>
                        <div class="image"> <img src="assets/foto6.jpg" alt="Foto 5" width="200"> 
                          <div class="image-text">
                            <a href="#" id="location"><i data-feather="map-pin"></i></a><h1>Kantor Lurah Calaca</h1>
                            <p>Foto yang diabadikan ketika mengikuti volunteer setiap sabtu</p>
                          </div>
                        </div>
                        <div class="image"> <img src="assets/foto7.jpg" alt="Foto 6" width="200"> 
                          <div class="image-text">
                            <a href="#" id="location"><i data-feather="map-pin"></i></a><h1>Kompi A Yonif 712</h1>
                            <p>Foto yang diabadikan ketika mengikuti kegiatan Studi Dasar Islam 2022</p>
                          </div>
                        </div>
                        <div class="image"> <img src="assets/foto8.jpg" alt="Foto 7" width="200"> 
                          <div class="image-text">
                            <a href="#" id="location"><i data-feather="map-pin"></i></a><h1>Kompi A Yonif 712</h1>
                            <p>Foto yang diabadikan saat penggelaran Pentas Seni pada malam kegiatan Studi Dasar Islam 2022</p>
                          </div>
                        </div>
                        <div class="image"> <img src="assets/foto9.jpg" alt="Foto 8" width="200"> 
                          <div class="image-text">
                            <a href="#" id="location"><i data-feather="map-pin"></i></a><h1>Kantor Lurah Calaca</h1>
                            <p>Foto yang diabadikan saat pengenalan pengajar di komunitas Dinding</p>
                          </div>
                        </div>
                        <div class="image"> <img src="assets/foto10.jpg" alt="Foto 9" width="200"> 
                          <div class="image-text">
                            <a href="#" id="location"><i data-feather="map-pin"></i></a><h1>Sogogi Manado</h1>
                            <p>Foto yang diabadikan saat perayaan ulang tahun orang tua saya</p>
                          </div>
                        </div>
               </div>
          </div>
     </section>
     
     <!--untuk blog-->
     <section id="blog">
          <div class="container">
               <div class="blog-title">
                    <h2>Recent <span>Article</span></h2>
               </div>
          </div>

          <div class="article-container">
                <!--article 1-->
                 <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
                <div class="article-content">
                  
                
                  <img src="assets/<?= $row["image"] ?>" alt="Gambar 1">
                  <div class="article-title">
                    <h2><?= $row["judul"] ?></h2>
                    <p><?= $row["deskripsi"] ?></p>
                      <a href="https://www.antaranews.com/berita/4034493/smartfren-perkuat-jaringan-dan-beri-promo-kuota-sambut-idul-fitri?utm_source=antaranews&utm_medium=desktop&utm_campaign=top_news" class="article-link">Read More</a>  
                  </div>
                </div>  
                  <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>
                <!--article 2-->
                            
          </div>
     </section>

     <!--untuk contact-->
     <section id="contact" class="contact-me">
      <div class="contact-text">
          <h2>Contact <span>Me</span></h2>
          <div class="contact-box">
              <div class="contact">
                  <h4>Address</h4>
                  <p>Dapoerkarisya_jo</p>
              </div>
              <div class="contact">
                  <h4>Email</h4>
                  <p>syifasuratinoyo@gmail.com</p>
              </div>
              <div class="contact">
                  <h4>Phone</h4>
                  <p>+6282293749996</p>
              </div>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15954.110405928945!2d124.82068185290929!3d1.457433027326487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328775df2c48af87%3A0x3ada9fa7b2b73b12!2sDapoerkarisya_jo!5e0!3m2!1sen!2sid!4v1713876296618!5m2!1sen!2sid"
           width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </section>
   
    <footer>
     <div id="footer-content">
          <div class="phone">
               <div class="footer">
                    <div class="footer-section">
                         <h3><span>Address</span></h3>
                         <p>Yusuf Hasiru Street No. 143, Kleak, Neighborhood II, Malalayang, Manado.
                              <br>In the alley of State 
                              <br>Senior High School 9 Regular
                              <br><br>(Google Maps: Dapoerkarisya Jo).
                         </p>
                    </div>
                    <div class="footer-section">
                         <h3><span>Phone</span></h3>
                         <p>+82293749996
                         </p>
                    </div>
                    <div class="footer-section">
                         <h3><span>Social</span></h3>
                         <a href="https://www.instagram.com/syifasuratinoyo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="> <i data-feather="instagram"></i></a>
                    </div>
                    <div class="footer-section">
                         <h3><span>Email</span></h3>
                         <p>syifasuratinoyo@gmail.com
                         </p>
                    </div>
               </div>

          </div>
     </div>
     <div class="cr">
          <p>&copy; 2024. <b>Syifabela Suratinoyo</b> All Rights Reserved</p>
     </div>

    </footer>



    <!-- Feather icons-->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>

  </body>
</html>