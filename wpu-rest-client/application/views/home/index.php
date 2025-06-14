<!-- Hero / Jumbotron -->
<div class="jumbotron jumbotron-fluid bg-dark text-light mb-0" id="home">
  <div class="container text-center">
    <img src="<?= base_url(); ?>assets/img/profile2.png" class="rounded-circle img-thumbnail shadow mb-3" width="200">
    <h1 class="display-4">Desy Reolina Sari</h1>
    <h3 class="lead text-secondary">Desainer | Programmer | Vlogger</h3>
  </div>
</div>

<!-- Portfolio / About Me -->
<section class="portfolio bg-secondary text-light py-5" id="portfolio">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2 class="text-white">About Me</h2>
      </div>
    </div>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md mb-4">
        <div class="card bg-dark text-light border-light shadow">
          <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Lahir di Binjai, tetepi besar di Mandailing Natal</p>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md mb-4">
        <div class="card bg-dark text-light border-light shadow">
          <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/4.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Sedang berkuliah di salah satu Universitas terbaik di Sumatera, UIN Imam Bonjol Padang.</p>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md mb-4">
        <div class="card bg-dark text-light border-light shadow">
          <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/5.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Berharap agar bisa menjadi salah satu Desainer terbaik di Indonesia</p>
          </div>
        </div>
      </div>   
    </div>
  </div>
</section>

<!-- Contact -->
<section class="contact bg-dark text-light py-5" id="contact">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Contact</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card bg-light text-black mb-4 text-center shadow">
          <div class="card-body">
            <h5 class="card-title">Contact Me</h5>
            <p class="card-text">Silakan hubungi saya melalui form di samping atau datang langsung ke alamat saya.</p>
          </div>
        </div>
        
        <ul class="list-group mb-4">
          <li class="list-group-item bg-dark text-white border-secondary"><h5>Location</h5></li>
          <li class="list-group-item bg-dark text-white border-secondary">My Home</li>
          <li class="list-group-item bg-dark text-white border-secondary">Jl. Sirsak II No.80, Padang</li>
          <li class="list-group-item bg-dark text-white border-secondary">West Sumatera, Indonesia</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control border-0" id="nama">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control border-0" id="email">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control border-0" id="phone">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control border-0" id="message" rows="3"></textarea>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-outline-light btn-block shadow">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
