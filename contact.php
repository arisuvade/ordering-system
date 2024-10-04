<?php
$contactDetails = [
  "title" => "Contact Us",
  "facebook" => [
    "url" => "https://web.facebook.com/apo.delacruz.1",
    "text" => "Facebook Page"
  ],
  "map" => "https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d635.5122858746629!2d120.90105903697201!3d14.953459179041667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1727837871181!5m2!1sen!2sph"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $contactDetails['title'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: "Arial", sans-serif;
      background-color: #1a1a1a;
      color: #f0e68c;
    }

    .navbar {
      background-color: #3a3a3a;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    .navbar-brand {
      margin-left: 1rem;
      font-size: 1.75rem;
      font-weight: bold;
      color: #ffcc00 !important;
    }

    .nav-item {
      font-weight: bold;
      margin-right: 1rem;
    }

    .nav-link {
      color: #f0e68c !important;
    }

    .nav-link:hover {
      color: #ffae42 !important;
    }

    #contact {
      margin-top: 3rem;
      padding: 2rem;
      background-color: #2e2e2e;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    #contact h2 {
      color: #ffcc00;
      margin-bottom: 1.5rem;
    }

    .btn-primary {
      background-color: #ffcc00;
      color: #1a1a1a;
      border: none;
    }

    .btn-primary:hover {
      background-color: #ffae42;
    }

    #map {
      width: 100%;
      height: 400px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    footer {
      margin-top: 3rem;
      background-color: #3a3a3a;
      color: #ffcc00;
      padding: 1.5rem 0;
    }

    footer p {
      margin: 0;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.html">Baliwag's Best Sizzling House</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <section id="contact" class="container">
    <h1 class="text-center font-weight-bold"><?= $contactDetails['title'] ?></h1>
    <br />
    <div class="text-center">
      <p>Follow us on Facebook for updates:</p>
      <a
        href="<?= $contactDetails['facebook']['url'] ?>"
        target="_blank"
        class="btn btn-primary"><?= $contactDetails['facebook']['text'] ?></a>
      <br />
    </div>

    <div id="map" class="my-4">
      <iframe
        src="<?= $contactDetails['map'] ?>"
        width="100%"
        height="400"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"></iframe>
    </div>
  </section>

  <footer class="text-center">
    <p>&copy; 2024 Baliwag's Best Sizzling House. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>