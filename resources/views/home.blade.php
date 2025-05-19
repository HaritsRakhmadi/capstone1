
<!--
warna 
biru: rgba(3,60,135,255)
kuning: rgba(248,202,31,255)
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BarbershopGloria.Com</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #f8f9fa; 
    }

    .navbar {
      padding-top: 0.25rem;
      padding-bottom: 0.25rem;
    }

    .navbar, .footer {
      background-color: rgba(3,60,135,255);
     
    }

    .navbar-brand, .nav-link, .footer-text {
      color: rgba(248,202,31,255) !important;
    }

    .section-heading {
      color:rgba(248,202,31,255); 
    }
    .btn-primary {
      background-color: rgba(3,60,135,255);
      border-color: rgba(3,60,135,255);
    }
    .main-section{
     background-color: rgba(137, 207, 240, 0.4);
    }

    .chartHarga{
      background-color:hsl(210, 22%, 94.5%);
    }
    
    .btn-primary:hover {
      background-color: rgba(248,202,31,255);
      border-color: rgba(248,202,31,255);
    }
    .custom-margin{
      margin-bottom: 30px;
    }

    .navbar-logo{
      height: 6rem;
      width: auto;
        
    }

    .hair-images{
      width: 50vw;
      height: auto;
      
    }

    .navbar {
    padding-top: 0.2rem !important;
    padding-bottom: 0.2rem !important;
    }

    hr {
      width: 300px;
      margin: 10px auto;
    }

    .dropdown-toggle::after {
    display: none !important; 
    }

    .yellow-icon{
      color: rgba(248,202,31,255);
      font-size: 2rem;
    }

    .icon-button{
      padding: 0;
      margin-top: 0;
      margin-right: 10px;
      align-self: flex-start;
    }

  </style>
 
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="d-flex justify-content-between align-items-center w-100">
    <img src="images/logo.png" alt="Logo" class="navbar-logo" style="margin-left: 2.5rem;">
    
    <div class="dropdown icon-button" style="margin-right: 30px;">
    <button class="btn btn-link dropdown-toggle " id= "dropdownIconButton" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-box-arrow-in-right yellow-icon "></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="login">Login</a></li>
      <li><a class="dropdown-item" href="register">Register</a></li>
    </ul>
    </div>
    </div>
  </nav>

  <!-- Hero Image -->
  <section class="text-center">
    <img src="images/heroImage.jpg" alt="Images" class="img-fluid w-100 d-block hair-images">
  </section>

  <!-- Prinsip -->
  <section class="py-5 main-section">
    <div class="container">
      <h2 class="section-heading text-center">Prinsip Kami</h2>
      <p class="text-center">Barber Dengan Pengalaman Dewa dari Asgar</p>
      <div class="row mt-4">
        <div class="col-md-4 text-center">
          <h5>1. Customer Oriented</h5>
          <p>Barber kami telah dilatih untuk menjadi seseorang yang ramah dan berorientasi kepada kepusan pelanggan!</p>
          <img src="images/pict1.jpg" alt="customer-oriented" style="width: 300px; height: 300px" class="rounded-circle">
        </div>
        <div class="col-md-4 text-center">
          <h5>2. Profesional</h5>
          <p>Barber kami mempunyai skill mencukur rambut level dewa dan mempunyai sifat profesionalimse yang tinggi! </p>
          <img src="images/pict2.jpg" alt="profesional" style="width: 300px; height: 300px" class="rounded-circle">
        </div>
        <div class="col-md-4 text-center">
          <h5>3. Besih dan Rapih</h5>
          <p>Semua peralatan akan dibersihkan setiap hari secara detail, sehingga mencegah penyebaran penyakit</p>
          <img src="images/pict3.jpg" alt="besih-dan-rapih" style="width: 300px; height: 300px" class="rounded-circle">
        </div>
      </div>
    </div>
  </section>

  <!-- Jasa yang ditawarkan -->
  
  <section class="py-5 chartHarga">
    <div class="container" style="font-family: Arial, Helvetica, sans-serif; text-align: center;">
    <h2 class="text-center" style="font-weight: bold;">Harga</h2>
      <hr>
      <p>Dewasa: 25K</p>
      <p>Anak2: 20K</p>
      <button style="background: #00FF00; color: white; font-weight: bold; padding: 15px 30px;
      border: none; border-radius: 10px; cursor: pointer; margin-top: 20px;"><a href="login">BOOK NOW</a></button>
    </div>
  </section>

 

  <!-- map -->
  <section class="py-5 bg-light">
    <div class="container" style="text-align: center;">
    <h2 style="margin-bottom: 50px;">Our Location</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2361505307636!2d106.92874207499045!3d-6.232568993755616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698cbf3de782d3%3A0xbd46d3cbdc26d58e!2sBarber%20Shop%20Gloria!5e0!3m2!1sen!2sid!4v1746531014615!5m2!1sen!2sid" width="600" height="450" style="border: 2px solid grey; border-radius: 15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer py-3 text-center">
    <div class="container">
      <span class="footer-text">© 2025 BarbershopGloria.Com</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function(){
        $("#questionForm").on('submit', function(e){
          e.preventDefault();

          let dataForm = $(this).serialize();

          $.ajax({
          url: 'mainProcess.php',          
          method: 'POST',       
          data: dataForm,               
          success: function(response) {  
            alert("Your message has been sent successfully!");
            $('#questionForm')[0].reset();
          },
          error: function(xhr, status, error) {
            alert("Error, message hasn't been sent!");
          }
        });
      });
    });
    
    
  </script>
  
</body>
</html>
