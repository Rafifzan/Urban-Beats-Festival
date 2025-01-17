<?php
session_start();

// Cek jika ada parameter 'code-rsvp' dalam URL
if(isset($_POST['code-rsvp'])){
    $code = $_POST['code-rsvp'];
    if($code == '123456'){
      // Simpan data ke sesi untuk digunakan di registration-view.php
      $_SESSION['valid_code'] = true;
        header('Location: registration-view.php');
        exit();
    } else {
      echo "<p>Salah Input Code RSVP</p>";
    }
}
    // Hapus session sebelumnya
    if(isset($_SESSION['guest_data'])){
      header("Location: home.php");
      unset($_SESSION['guest_data']);
      exit();
    }
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/userUI.css">
  <link rel="stylesheet" href="assets/home.css">
  <link rel="stylesheet" href="style/home-mobile.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&amp;family=Roboto&amp;display=swap"
    rel="stylesheet" />
  <title>Urban Beats Festival</title>
</head>

<body>
  <!-- Audio element for background music -->
  <audio id="bg-music" autoplay loop>
    <source src="./assets/music/travis song.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <!-- Navbar tidak ganti class -->
  <nav class="navbar">
    <ul>
      <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
    </ul>
    <li><a href="#couple"><i class="fas fa-heart"></i>guest</a></li>
    <li><a href="#information"><i class="fas fa-calendar-alt"></i>Events</a></li>
    <li><a href="#rsvp"><i class="fas fa-envelope"></i>Invitation</a></li>
    <li><a href="#comments"><i class="fas fa-comments"></i>Comments</a></li>
  </nav>
  <!-- Navbar -->

  <main>
    <!-- Content ganti class line 64 & 65 -->
    <section class="content">
      <h1>Highest in the Room, Loudest in the Crowd!</h1>
      <p>"Turn Up the Volume, Turn Off the World!"</p>
    </section>
    <section id="couple">
      <div class="groom-bride-section">
        <img alt="Background image of the edm" class="bgedm" src="assets/img/bgedm2.jpeg"
          width="1200" />
        <div class="overlay">
          <h2>SPECIAL GUEST</h2>
          <div class="profile-wrap">
            <div class="profile">
              <img alt="travis" src="assets/img/travis.jpeg" />
              <h3>Travis Scott</h3>
              <p>La Flame Never Dies! </p>
              <a href="" target="_blank"><i class="fab fa-instagram fa-fw"></i>@rafi.fzan</a>
            </div>
            <div class="profile and">
              <span>&</span>
            </div>
            <div class="profile">
              <img alt="Bride's profile picture" src="assets/img/kempot.jpeg" />
              <h3>Almighty Godfather Didi Kempot</h3>
              <p>Suara Hati yang Ambyar!</p>
              <a href="" target="_blank"><i class="fab fa-instagram fa-fw"></i>@elryanleonard</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content -->


    <!-- Information -->
    <section id="information" class="information">
      <h2>TIMELINE</h2>
      <div class="dates">
        <p class="date">17</p>
        <p class="month">Oktober<br>2025</p>
      </div>
      <div class="information-wrapping">
        <article class="event">
          <h2 class="title">DAY 1</h2>
          <h3>Gunadarma Kampus E</h3>
          <p class="time">21:30 - 02:00 <span>WIB</span></p>
          <button onclick="window.open('https://calendar.app.google/YHVgGto7gYsrbhvm8', '_blank');"><i
              class="fas fa-calendar-alt"></i> Add to Calendar</button>
        </article>
        <article class="event">
          <h2 class="title">DAY 2</h2>
          <h3>Gunadarma Kampus D</h3>
          <p class="time">21:00 - 02:00 <span>WIB</span></p>
          <button onclick="window.open('https://calendar.app.google/YHVgGto7gYsrbhvm8', '_blank');"><i
              class="fas fa-calendar-alt"></i> Add to Calendar</button>
        </article>
        <article class="event">
          <h2 class="title">DAY 3</h2>
          <h3>Gunadarma Kampus H</h3>
          <p class="time">19:30 - 22:00 <span>WIB</span></p>
          <button onclick="window.open('https://calendar.app.google/YHVgGto7gYsrbhvm8', '_blank');"><i
              class="fas fa-calendar-alt"></i> Add to Calendar</button>
        </article>
        <article class="location">
          <h2>Catch the Beat, Claim Your Seat Now!</h2>
          <p>Gunadarma Kampus D</p>
          <p>Margonda Raya, Depok</p>
          <button onclick="window.open('https://www.google.co.id/maps/place/Universitas+Gunadarma+Kampus+D/@-6.3691146,106.8306195,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69ed01b68548ad:0x89aea3afc2b2e77d!8m2!3d-6.3691146!4d106.8331944!16s%2Fg%2F11r_tyb614?entry=ttu&g_ep=EgoyMDI1MDExNC4wIKXMDSoASAFQAw%3D%3D');"><i
              class="fas fa-map-marker-alt"></i> View Map</button>
        </article>
      </div>
    </section>
    <!-- Information -->
    <!-- GALLERY -->
    <section class="gallery">
      <img alt="Avici" height="400"
        src="./assets/img/guest1.jpeg" width="600" />
      <img alt="Dj Khaled" height="400" src="./assets/img/guest2.jpeg"
        width="600" />
      <img alt="Drake" height="400" src="./assets/img/guest3.jpeg"
        width="600" />
      <img alt="Skrillex" height="400" src="./assets/img/guest5.jpeg" width="600" />
      <img alt="Justin bieber" height="400" src="./assets/img/guest4.jpeg"
        width="600" />
      <img alt="Dj snake" height="400"
        src="./assets/img/guest6.jpeg" width="600" />
    </section>
    <!-- GALLERY -->
    <!-- RSVP -->
    <section id="rsvp">
      <article class="rsvp">
        <h1>RSVP</h1>
        <p>Put your 6 digits invitation code</p>
        <form method="post" class="rsvpButton">
          <input type="text" placeholder="Invitation Code" name="code-rsvp" required minlength="6">
          <button type="submit">RSVP</button>

        </form>

      </article>
      <article class="countdown-wrapping countdown">
        <h2>See You Where Music Comes Alive!</h2>
        
    </div>
      </article>
    </section>
    <!-- RSVP -->
    <!-- COMMENTS -->
    <section id="comments" class="comments">
      <h1>Let the beats flow, drop your vibe below!</h1>
          <!-- <form method="POST" action="../Model/post_comment.php">
            <div class="form-group">
              <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <textarea name="text" placeholder="Say something..." required></textarea>
            </div>
            <button type="submit">Post Comment</button>
          </form> -->
      <div id="comment-list">
        <!-- Komentar yang ada akan ditampilkan di sini -->
        <?php
        require_once '../Config/db.php';
        $sql = "SELECT * FROM guests ORDER BY created_at DESC";
        $stmt = $pdo->query($sql);
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($comments as $comment) {
          if($comment['notes'] != null){
            echo '<div class="comment">';
            echo '<div class="name">' . htmlspecialchars($comment['name']) . '</div>';
            echo '<div class="text">' . htmlspecialchars($comment['notes']) . '</div>';
            echo '<div class="time">' . date('d M Y H:i', strtotime($comment['created_at'])) . '</div>';
            echo '</div>';
          }else{
            echo "";
          }
        }
        ?>
      </div>
    </section>
    <!-- COMMENTS -->
    <!-- MUSIC -->
    <div class="music-control">
      <button id="play-button" class="music-button">
        <img src="./assets/img/play.png" alt="Play Music">
      </button>
      <button id="stop-button" class="hide music-button">
        <img src="./assets/img/stop.png" alt="Stop Music">
      </button>
    </div>
    <!-- MUSIC -->
  </main>
  <footer></footer>
  <script src="assets/javascript/index.js"></script>
  <script src="assets/javascript/home.js"></script>
</body>

</html>