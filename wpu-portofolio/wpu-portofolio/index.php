<?php
function get_Curl($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_Curl("https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCFQoE23adk7NSPNhBlanu4w&key=AIzaSyAXB98x0NXtBs1Zykb0c4_qLDIPg9jMilI");

$youtubeProfilePic = $result['items'][0]['snippet'] ['thumbnails']['default']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

// API Key dan Channel ID
$apiKey = "AIzaSyAXB98x0NXtBs1Zykb0c4_qLDIPg9jMilI";
$channelId = "UCFQoE23adk7NSPNhBlanu4w";

// Ambil video terbaru
$urlLatestVideo = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&maxResults=1&order=date&part=snippet&type=video";
$result = get_Curl($urlLatestVideo);

// Simpan video ID untuk digunakan di section social media
if (isset($result['items'][0]['id']['videoId'])) {
    $latestVideoId = $result['items'][0]['id']['videoId'];
} else {
    $latestVideoId = null;
}

// Data Instagram dari code 2 (hardcoded seperti di code 2)
$usernameIG = "@sandikagalih";
$profilePictureIG = "img/profile1.png"; // Menggunakan gambar yang sama seperti di code 2
$followersIG = "70000";

// Gambar Instagram dari code 2
$gambar1 = "img/thumbs/1.png";
$gambar2 = "img/thumbs/2.png";
$gambar3 = "img/thumbs/1.png"; // Menggunakan gambar yang sama seperti di code 2

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>My Portfolio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Desy Reolina Sari</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/dere.png" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Desy Reolina Sari</h1>
          <h3 class="lead">Lecturer | Programmer | Desainer</h3>
        </div>
      </div>
    </div>

    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>I am a UI/UX designer dedicated to creating digital experiences that are intuitive, functional, and visually appealing. With a background in web development and graphic design, along with a deep understanding of user behavior, I design interfaces that are not only aesthetically pleasing but also easy to navigate. I apply user-centered design principles in every project, from wireframes to interactive prototypes. Proficient in tools like Figma and Adobe XD, I deliver efficient and collaborative design solutions. In addition, my skills in visual storytelling through videography and photography enhance the overall digital product experience. As a creative professional, I am committed to crafting design solutions that elevate user experiences and strengthen brand identity in the digital age.</p>
          </div>
          <div class="col-md-5">
            <p>Saya adalah seorang desainer UI/UX yang berfokus pada menciptakan pengalaman digital yang intuitif, fungsional, dan estetis. Dengan latar belakang dalam web development, desain grafis, serta pemahaman mendalam terhadap perilaku pengguna, saya merancang antarmuka yang tidak hanya menarik secara visual tetapi juga mudah digunakan. Saya terbiasa menerapkan prinsip desain berbasis pengguna (user-centered design) dalam setiap proyek, mulai dari wireframe hingga prototipe interaktif. Keahlian saya dalam tools seperti Figma dan Adobe XD membantu saya menghasilkan desain yang efisien dan kolaboratif. Selain itu, saya juga memiliki kemampuan dalam visual storytelling melalui videografi dan fotografi yang memperkuat nilai estetika dari produk digital. Sebagai profesional kreatif, saya berkomitmen untuk menciptakan solusi desain yang meningkatkan pengalaman pengguna dan memperkuat identitas merek di era digital.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Youtube & IG -->
    <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col md-4">
                <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName; ?></h5>
                <p><?= $subscriber; ?> Subscriber.</p>
                <div class="g-ytsubscribe" data-channelid="UC5djXA3ShHS9_Z12sB5QQ9Q" data-layout="default" data-count="default"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <?php if ($latestVideoId): ?>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>" allowfullscreen></iframe>
                </div>
                <?php else: ?>
                <p>Video terbaru tidak ditemukan.</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <!-- Instagram section dari code 2 -->
            <div class="row mt-3 pb-3">
              <div class="col-md-4">
                <img src="<?= $profilePictureIG; ?>" width="150" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $usernameIG ?></h5>
                <p><?= $followersIG ?> Followers</p>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="<?= $gambar1; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar2; ?>">
                </div>
                <div class="ig-thumbnail">
                  <img src="<?= $gambar3; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/1.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/2.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/3.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/5.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/6.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Setiabudhi No. 193, Bandung</li>
              <li class="list-group-item">West Java, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; 2018.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>