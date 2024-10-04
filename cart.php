<?php
$cartItems = [
  "Agahan (Breakfast)" => [
    ["name" => "Longgadog", "price" => 75, "img" => "assets/longgadog.jpg"],
    ["name" => "Porkalog", "price" => 80, "img" => "assets/porkalog.jpg"],
    ["name" => "Hotkalog", "price" => 80, "img" => "assets/hotkalog.jpg"],
    ["name" => "Chixkalog", "price" => 80, "img" => "assets/chixkalog.jpg"],
    ["name" => "Tokalog", "price" => 70, "img" => "assets/tokalog.jpg"],
    ["name" => "Longgkalog", "price" => 60, "img" => "assets/longgkalog.jpg"]
  ],
  "Tanghalian (Lunch)" => [
    ["name" => "Chao Fan", "price" => 80, "img" => "assets/chao_fan.jpg"],
    ["name" => "Chicken BBQ", "price" => 80, "img" => "assets/chicken_bbq.jpg"],
    ["name" => "Pork Chop", "price" => 80, "img" => "assets/pork_chop.jpg"],
    ["name" => "Pork Liempo", "price" => 80, "img" => "assets/pork_liempo.jpg"],
    ["name" => "Pork Tapa", "price" => 80, "img" => "assets/pork_tapa.jpg"]
  ],
  "Hapunan (Dinner)" => [
    ["name" => "Sizzling Pusit", "price" => 80, "img" => "assets/sizzling_pusit.jpg"],
    ["name" => "Pork Sisig", "price" => 80, "img" => "assets/pork_sisig.jpg"],
    ["name" => "Crispy Pork Belly", "price" => 50, "img" => "assets/crispy_pork_belly.jpg"]
  ],
  "Meryenda (Snacks)" => [
    ["name" => "Pancit Bihon", "price" => 80, "img" => "assets/pancit_bihon.jpg"],
    ["name" => "Pancit Mix", "price" => 80, "img" => "assets/pancit_mix.jpg"],
    ["name" => "Pancit Canton", "price" => 80, "img" => "assets/pancit_canton.jpg"],
    ["name" => "Lomi", "price" => 80, "img" => "assets/lomi.jpg"],
    ["name" => "Sotanghon", "price" => 80, "img" => "assets/sotanghon.jpg"]
  ],
  "Add-ons" => [
    ["name" => "Extra Rice", "price" => 15, "img" => "assets/extra_rice.jpg"],
    ["name" => "Extra Fried Rice", "price" => 30, "img" => "assets/extra_fried_rice.jpg"]
  ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart</title>
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

    main {
      padding: 2rem;
      background-color: #2e2e2e;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      margin: 3rem 20%;
    }

    .item-list {
      margin-bottom: 1.5rem;
    }

    .cart-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.75rem;
      background-color: #3a3a3a;
      border-radius: 5px;
      margin-bottom: 1rem;
      color: #f0e68c;
    }

    .cart-item img {
      width: 50px;
      height: 50px;
      margin-right: 1rem;
      border-radius: 5px;
    }

    .item-section {
      margin-top: 2rem;
      font-size: 1.8em;
      font-weight: bold;
      color: #ffcc00;
      margin-bottom: 10px;
      border-bottom: 2px solid #ffae42;
      padding-bottom: 5px;
    }

    .item-details {
      flex-grow: 1;
      display: flex;
      justify-content: space-between;
      margin-left: 1rem;
    }

    .item-name {
      flex-grow: 1;
      text-align: left;
    }

    .item-price {
      text-align: center;
      width: 100px;
    }

    .quantity-control {
      display: flex;
      align-items: center;
    }

    .quantity-btn {
      background-color: #ffcc00;
      border: none;
      color: #1a1a1a;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      cursor: pointer;
      margin: 0 0.5rem;
    }

    .quantity-btn:hover {
      background-color: #ffae42;
    }

    .total-section {
      text-align: center;
      margin-top: 2rem;
      color: #ffcc00;
    }

    .done-btn,
    .clear-btn {
      margin-top: 1.5rem;
      background-color: #ffcc00;
      border: none;
      color: #1a1a1a;
      padding: 0.5rem 1.5rem;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 1rem;
    }

    .done-btn:hover,
    .clear-btn:hover {
      background-color: #ffae42;
    }

    .receipt {
      display: none;
      margin-top: 2rem;
      background-color: #3a3a3a;
      padding: 1rem;
      border-radius: 5px;
      text-align: center;
    }

    footer {
      background-color: #3a3a3a;
      color: #ffcc00;
      padding: 1.5rem 0;
      text-align: center;
    }

    footer p {
      margin: 0;
    }

    .dine-in-take-out {
      color: #ffcc00;
      display: flex;
      justify-content: center;
      margin: 10px 0;
    }

    .dine-option {
      display: flex;
      align-items: center;
      cursor: pointer;
      padding: 5px;
      border: 2px solid transparent;
      border-radius: 5px;
      transition: border-color 0.3s;
    }

    .dine-option:hover {
      border-color: #ffcc00;
    }

    .dine-option input[type="radio"] {
      display: none;
    }

    .dine-option span {
      background-color: #1a1a1a;
      padding: 10px 15px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .dine-option input[type="radio"]:checked+span {
      background-color: #ffcc00;
      color: #1a1a1a;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php">Baliwag's Best Sizzling House</a>
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
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
        <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </nav>

  <main class="container my-5">
    <div class="page-title text-center">Your Cart</div>

    <div class="item-list">
      <!-- Cart Items -->
      <?php foreach ($cartItems as $section => $items): ?>
        <div class="item-section my-4"><?= $section ?></div>
        <?php foreach ($items as $item): ?>
          <div class="cart-item d-flex align-items-center my-3">
            <img src="<?= $item['img'] ?>" alt="<?= $item['name'] ?>" class="img-thumbnail" style="width: 100px; height: 100px;">
            <div class="item-details ms-3">
              <span class="item-name d-block fw-bold"><?= $item['name'] ?></span>
              <span class="item-price">₱<?= $item['price'] ?>.00</span>
            </div>
            <div class="quantity-control ms-auto d-flex align-items-center">
              <button onclick="decrementQuantity(this)" class="quantity-btn btn btn-outline-secondary mx-1">-</button>
              <span class="quantity mx-2" data-price="<?= $item['price'] ?>">0</span>
              <button onclick="incrementQuantity(this)" class="quantity-btn btn btn-outline-secondary mx-1">+</button>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>

    <div class="total-section text-center my-5">
      <h3>Total: ₱<span id="total-price">0</span></h3>
    </div>

    <div class="dine-in-take-out text-center my-4">
      <label class="dine-option me-3">
        <input type="radio" name="dineOption" value="Dine In" checked>
        <span>Dine In</span>
      </label>
      <label class="dine-option">
        <input type="radio" name="dineOption" value="Take Out">
        <span>Take Out</span>
      </label>
    </div>

    <div class="text-center my-4">
      <button class="clear-btn btn btn-outline-danger me-3" onclick="clearCart()">Clear Cart</button>
      <button class="done-btn btn btn-success" onclick="generateReceipt()">Generate Receipt</button>
    </div>

    <div class="receipt text-center my-5" id="receipt" style="display:none;">
      <h4>Receipt</h4>
      <p>Order Type: <span id="order-type-receipt"></span></p>
      <div id="receipt-items"></div>
      <h5>Total Amount: ₱<span id="receipt-total">0</span></h5>
      <p>Please show this receipt to the server.</p>
    </div>
  </main>

  <script>
    function incrementQuantity(button) {
      const quantityElement = button.previousElementSibling;
      let currentQuantity = parseInt(quantityElement.textContent);
      quantityElement.textContent = currentQuantity + 1;
      calculateTotal();
    }

    function decrementQuantity(button) {
      const quantityElement = button.nextElementSibling;
      let currentQuantity = parseInt(quantityElement.textContent);
      if (currentQuantity > 0) {
        quantityElement.textContent = currentQuantity - 1;
        calculateTotal();
      }
    }

    function calculateTotal() {
      const quantities = document.querySelectorAll(".quantity");
      const totalPriceElement = document.getElementById("total-price");
      let totalPrice = 0;

      quantities.forEach((quantity) => {
        const itemPrice = parseInt(quantity.dataset.price);
        const itemQuantity = parseInt(quantity.textContent);
        totalPrice += itemPrice * itemQuantity;
      });

      totalPriceElement.textContent = totalPrice;
    }

    function clearCart() {
      const quantities = document.querySelectorAll(".quantity");
      quantities.forEach((quantity) => {
        quantity.textContent = 0;
      });
      calculateTotal();
      document.getElementById("receipt").style.display = "none";
    }

    function generateReceipt() {
      const quantities = document.querySelectorAll(".quantity");
      const receiptItems = document.getElementById("receipt-items");
      const receiptTotalElement = document.getElementById("receipt-total");
      const orderTypeElement = document.getElementById("order-type-receipt");
      let receiptTotal = 0;
      receiptItems.innerHTML = "";

      const orderType = document.querySelector(
        'input[name="dineOption"]:checked'
      ).value;
      orderTypeElement.textContent = orderType;

      quantities.forEach((quantity, index) => {
        const itemPrice = parseInt(quantity.dataset.price);
        const itemQuantity = parseInt(quantity.textContent);
        if (itemQuantity > 0) {
          const itemName =
            document.querySelectorAll(".item-name")[index].textContent;
          const itemTotal = itemPrice * itemQuantity;
          receiptItems.innerHTML += `<p>${itemName} ${itemQuantity} x ₱${itemPrice.toFixed(
              2
            )} = ₱${itemTotal.toFixed(2)}</p>`;
          receiptTotal += itemTotal;
        }
      });

      receiptTotalElement.textContent = receiptTotal.toFixed(2);
      document.getElementById("receipt").style.display = "block";
    }
    ddEventListener("DOMContentLoaded", calculateTotal);
  </script>

  <footer>
    <p>&copy; 2024 Baliwag's Best Sizzling House</p>
  </footer>
</body>

</html>