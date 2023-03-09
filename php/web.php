<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dhevi.</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="webstyle.css" />
    <link rel="stylesheet" href="reset.css" />
    <!-- Icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <!-- Function PHP -->
  <?php include('function.php');?>

  <body>
    <div class="container-nav">
      <nav>
        <div class="logo">
          <img src="label.jpg" alt="logo" />
        </div>
        <div class="menu">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#contact">Contact</a>
        </div>
      </nav>
    </div>
    <section id="home" class="page1">
      <div class="container-1">
        <h1>DHEVI PUSPITASARI</h1>
        <p>
          INFORMATICS STUDENT UPN “Veteran” <br />
          Jawa Timur
        </p>
      </div>
    </section>

    <section id="about" class="page2">
      <div class="container-2">
        <div class="box1">
          <img src="foto 2.jpg" alt="" />
        </div>
        <div class="box2">
          <h2>This is</h2>
          <h1>About Me</h1>
          <p>
            Hai, Nama saya Dhevi Puspitasari. Saat ini saya adalah mahasiswa
            semester 4 jurusan informatika UPN “Veteran” Jawa Timur. Selain
            sibuk kuliah, saya juga mengikuti ukm yang ada di kampus, salah
            satunya adalah UKM Persma sebagai wartawan 21. <br />
          </p>
          <div class="box-table">
            <table class="tabel-1">
              <tr>
                <td><b>Nama : </b></b><?php echo $profil ["nama"] ?></td>
              </tr>
              <tr>
                <td><b>NPM : </b><?php echo $profil ["npm"] ?></td>
              </tr>
              <tr>
                <td><b>Kelas : </b><?php echo $profil ["kelas"] ?></td>
              </tr>
            </table>
            <table class="tabel-2">
              <tr>
                <td><b>Alamat : </b><?php echo $profil ["alamat"] ?></td>
              </tr>
              <tr>
                <td><b>Agama : </b><?php echo $profil ["agama"] ?></td>
              </tr>
              <tr>
                <td><b>Umur : </b><?php umur(); ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="page3">
      <div class="container-3">
        <h1>Con<span>tact.</span></h1>
        <div class="box-sm">
          <div class="box-sosmed">
            <a
              href="mailto:dhevipuspita812@gmail.com"
              type="button"
              class="button-contact email"
              target="_blank"
              ><i class="bx bx-envelope"></i>
              <p>Email</p></a
            >
            <a
              href="https://instagram.com/dhevipuspitaa"
              type="button"
              class="button-contact instagram"
              target="_blank"
              ><i class="bx bxl-instagram"></i>
              <p>Instagram</p></a
            >
            <a
              href="https://github.com/Dhepp2002"
              type="button"
              class="button-contact github"
              target="_blank"
              ><i class="bx bxl-github"></i>
              <p>Github</p></a
            >
            <a
              href="https://www.linkedin.com/in/dhevi-puspitasari-71014921b"
              type="button"
              class="button-contact linkedin"
              target="_blank"
              ><i class="bx bxl-linkedin"></i>
              <p>Linkedin</p></a
            >
          </div>
        </div>
      </div>
    </section>
    <footer>
      <p>copyright by <i class="bx bx-copyright"></i>Dhevi 1/3/2023.</p>
    </footer>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </body>
</html>


