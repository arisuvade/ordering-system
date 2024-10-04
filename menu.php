<?php
$menu = [
  "Agahan (Breakfast)" =>
  [[
    "name" => "Longgadog",
    "price" => "₱75.00",
    "img" => "assets/longgadog.jpg",
    "desc" => "Savory longganisa paired with a fried egg and garlic rice."
  ], ["name"
  => "Porkalog", "price" => "₱80.00", "img" => "assets/porkalog.jpg", "desc" =>
  "Fried pork with a side of garlic rice and a sunny-side-up egg."], ["name" =>
  "Hotkalog", "price" => "₱80.00", "img" => "assets/hotkalog.jpg", "desc" =>
  "Tasty hotdog served with garlic rice and an egg."], [
    "name" => "Chixkalog",
    "price" => "₱80.00",
    "img" => "assets/chixkalog.jpg",
    "desc" => "Crispy fried
chicken, garlic rice, and egg for a hearty start."
  ], [
    "name" => "Tokalog",
    "price" => "₱70.00",
    "img" => "assets/tokalog.jpg",
    "desc" => "Fried tofu,
paired with garlic rice and egg for a light breakfast."
  ], ["name" =>
  "Longgkalog", "price" => "₱60.00", "img" => "assets/longgkalog.jpg", "desc" =>
  "Traditional longganisa with garlic rice and an egg."],],
  "Tanghalian (Lunch)"
  => [[
    "name" => "Chao Fan",
    "price" => "₱80.00",
    "img" => "assets/chao_fan.jpg",
    "desc" => "Flavorful fried rice mixed with vegetables and spices."
  ], ["name" =>
  "Chicken BBQ", "price" => "₱80.00", "img" => "assets/chicken_bbq.jpg", "desc" =>
  "Juicy grilled chicken with a smoky barbecue flavor."], [
    "name" => "Pork Chop",
    "price" => "₱80.00",
    "img" => "assets/pork_chop.jpg",
    "desc" => "Tender pork
chop seasoned and fried to perfection."
  ], ["name" => "Pork Liempo", "price" =>
  "₱80.00", "img" => "assets/pork_liempo.jpg", "desc" => "Grilled pork belly with
a rich, smoky taste."], ["name" => "Pork Tapa", "price" => "₱80.00", "img" =>
  "assets/pork_tapa.jpg", "desc" => "Marinated pork strips cooked to a perfect
balance of sweet and savory."],],
  "Hapunan (Dinner)" => [["name" => "Sizzling
Pusit", "price" => "₱80.00", "img" => "assets/sizzling_pusit.jpg", "desc" =>
  "Tender squid served on a sizzling plate with savory sauce."], ["name" => "Pork
Sisig", "price" => "₱80.00", "img" => "assets/pork_sisig.jpg", "desc" => "Crispy
pork bits mixed with onions and a zesty seasoning, served sizzling."], ["name"
  => "Crispy Pork Belly", "price" => "₱50.00", "img" =>
  "assets/crispy_pork_belly.jpg", "desc" => "Crunchy, fried pork belly served with
a flavorful dipping sauce."],],
  "Meryenda (Snacks)" => [
    ["name" => "Pancit
Bihon", "price" => "₱80.00", "img" => "assets/pancit_bihon.jpg", "desc" =>
    "Stir-fried rice noodles with mixed vegetables and a light soy flavor."],
    [
      "name" => "Pancit Mix",
      "price" => "₱80.00",
      "img" => "assets/pancit_mix.jpg",
      "desc" => "A blend of bihon and canton noodles for a satisfying mix."
    ],
    [
      "name"
      => "Pancit Canton",
      "price" => "₱80.00",
      "img" => "assets/pancit_canton.jpg",
      "desc" => "Savory stir-fried egg noodles with vegetables and protein."
    ],
    ["name"
    => "Lomi", "price" => "₱80.00", "img" => "assets/lomi.jpg", "desc" => "Thick egg
noodle soup with vegetables in a rich, flavorful broth."],
    ["name" =>
    "Sotanghon", "price" => "₱80.00", "img" => "assets/sotanghon.jpg", "desc" =>
    "Clear glass noodles stir-fried with vegetables and light seasoning."],
  ],
  "Add-ons" => [["name" => "Extra Rice", "price" => "₱15.00", "img" =>
  "assets/extra_rice.jpg", "desc" => "Plain steamed rice to complement any
dish."], ["name" => "Extra Fried Rice", "price" => "₱20.00", "img" =>
  "assets/extra_fried_rice.jpg", "desc" => "Seasoned fried rice for an added
flavor boost to your meal."],],
]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
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

    .page-title {
      font-size: 3rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 3rem;
    }

    .item-section {
      font-size: 1.8em;
      font-weight: bold;
      color: #ffcc00;
      margin-bottom: 10px;
      border-bottom: 2px solid #ffae42;
      padding-bottom: 5px;
    }

    #menu {
      margin-top: 3rem;
    }

    #menu h2 {
      color: #ffcc00;
    }

    .menu-section {
      padding: 2rem 0;
    }

    .menu-section h3 {
      color: #ffcc00;
      margin-bottom: 1.5rem;
    }

    .card {
      background-color: #2e2e2e;
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      transition: transform 0.3s, box-shadow 0.3s;
      margin-bottom: 2rem;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(255, 215, 0, 0.3);
    }

    .card-title {
      color: #ffcc00;
      font-weight: bold;
    }

    .card-text {
      color: #f0e68c;
    }

    .card-img-top {
      border-radius: 10px 10px 0 0;
      height: 200px;
      object-fit: cover;
    }

    footer {
      background-color: #3a3a3a;
      color: #ffcc00;
      padding: 1.5rem 0;
    }

    footer p {
      margin: 0;
    }

    @media (max-width: 768px) {

      #menu h2,
      .menu-section h3 {
        font-size: 1.5rem;
      }

      .card {
        margin-bottom: 1.5rem;
      }
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
        <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <section id="menu" class="container my-5">
    <div class="page-title">Our Menu</div>

    <?php foreach (
      $menu as $section =>
      $items
    ): ?>
      <div class="menu-section my-5">
        <div class="item-section"><?= $section ?></div>
        <div class="row">
          <?php foreach ($items as $item): ?>
            <div class="col-md-4">
              <div class="card">
                <img
                  src="<?= $item['img'] ?>"
                  class="card-img-top"
                  alt="<?= $item['name'] ?>" />
                <div class="card-body">
                  <h5 class="card-title">
                    <?= $item['name'] ?>
                    -
                    <?= $item['price'] ?>
                  </h5>
                  <p class="card-text"><?= $item['desc'] ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </section>

  <footer class="text-center">
    <p>&copy; 2024 Baliwag's Best Sizzling House. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>