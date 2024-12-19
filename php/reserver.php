<?php
function isLoggedIn() {
  return isset($_SESSION);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=10">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Le Chef - Alain Passard</title>
</head>
<body class="bg-gray-50 text-gray-800">
<nav class="bg-white dark:bg-black">
  <div class="flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="./index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../logo_cuisine.png" class="h-16" alt="Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
  <a href="#" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-3 text-center dark:bg-orange-500 dark:hover:bg-orange-600">
  <!-- Sign In -->
</a>
<div class="nav-buttons">
            <?php if(!isLoggedIn()): ?>
                <!-- Show login button if not logged in -->
                <a href="login.php" class="btn-login">Login</a>
            <?php else: ?>
                <!-- Show user info and logout if logged in -->
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?></span>
                <?php if($_SESSION['id_role'] == 1): ?>
                    <span>(Admin)</span>
                <?php endif; ?>
                <a href="logout.php" class="btn-logout">Logout</a>
            <?php endif; ?>
        </div>

  <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
  </button>
</div>

  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
  <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
  <li >
        <a href="./menu.php" class="text-white hover:text-orange-500 transition duration-300">Menus</a>
      </li>
      <li>
        <a href="#" class="text-orange-500 hover:text-orange-500 transition duration-300">Réserver</a>
      </li>
      <li>
        <a href="./about.php" class="text-white hover:text-orange-500 transition duration-300">Le chef</a>
      </li>
      <li>
        <a href="./contact.php" class="text-white hover:text-orange-500 transition duration-300">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<!-- Reservation Section -->

<?php
include("db.php");
session_start();
if (!isset($_SESSION['id_user']) || empty($_SESSION['id_user'])) {
  header("Location: signup.php");
            exit();
 }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $date_reservation = $conn->real_escape_string($_POST['date_reservation']);
    echo ($date_reservation);

    $heure_reservation = $conn->real_escape_string($_POST['heure_reservation']);
    echo ($heure_reservation);

    $nombre_personnes = (int)$_POST['nombre_personnes']; 
    echo ($nombre_personnes);

    $date_heure_reservation = $date_reservation . ' ' . $heure_reservation;

    $sql = "INSERT INTO reservation (date_reservation, heure_reservation, nombre_personnes )
            VALUES ('$date_heure_reservation', '$heure_reservation', '$nombre_personnes' )";

    $res = $conn->query($sql);
    if ($res) {
        header('Location: reserver.php');
    } else {
        echo "Erreur : " . $conn->error;
    }
}
?>

<section class="py-16" id="reservation">
  <div class="mx-auto text-center">
    <h2 class="text-4xl font-extrabold text-orange-500 mb-8">Réservez votre Table</h2>
    <p class="text-lg font-semibold text-black mb-12">Venez savourer une expérience culinaire inoubliable. Réservez une table dès maintenant.</p>
    <form class="max-w-3xl mx-auto bg-gray-200 p-10 rounded-xl shadow-xl" method="POST" action="">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="mb-6">
      <label class="block text-black font-semibold mb-2" for="name">Nom</label>
      <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="name" name="nom" type="text" placeholder="Votre nom" required />
    </div>
    <div class="mb-6">
      <label class="block text-black font-semibold mb-2" for="date">Date</label>
      <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="date" name="date_reservation" type="date" required />
    </div>
    <div class="mb-6">
      <label class="block text-black font-semibold mb-2" for="time">Heure</label>
      <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="time" name="heure_reservation" type="time" required />
    </div>
    <div class="mb-6">
      <label class="block text-black font-semibold mb-2" for="guests">Nombre de personnes</label>
      <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="guests" name="nombre_personnes" type="number" placeholder="Nombre de personnes" required />
    </div>
  </div>
  <!-- Sélecteur de menu -->
  <div class="mb-6">
  <label class="block text-black font-semibold mb-2" for="menu">Choisir un menu</label>
  <select class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="menu" name="menu" required>
    <option value="" disabled selected>Choisir un menu</option>
    <option value="menu1">Menu 1: Entrée, Plat, Dessert</option>
    <option value="menu2">Menu 2: Entrée, Plat végétarien, Dessert</option>
    <option value="menu3">Menu 3: Entrée, Plat de poisson, Dessert</option>
    <option value="menu4">Menu 4: Entrée, Plat de viande, Dessert</option>
  </select>
</div>
<button class="w-full bg-orange-500 text-white py-4 rounded-lg font-semibold hover:bg-gradient-to-l hover:bg-orange-600 transition duration-300">Réserver Maintenant</button>
</form>
  </div>
</section>

<!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 justify-items-center">
        <div>
                    <h3 class="text-xl font-semibold mb-4">Navigation</h3>
                    <ul class="space-y-2">
                        <li><a href="./menu.php" class="text-white hover:text-orange-500 transition duration-300">Nos Menus</a></li>
                        <li><a href="#" class="text-white hover:text-orange-500 transition duration-300">Réserver</a></li>
                        <li><a href="./about.php" class="text-white hover:text-orange-500 transition duration-300">Le Chef</a></li>
                        <li><a href="./contact.php" class="text-white hover:text-orange-500 transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-orange-500 transition duration-300"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.148-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162S8.597 18.163 12 18.163s6.162-2.759 6.162-6.162S15.403 5.838 12 5.838zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                        <a href="#" class="text-white hover:text-orange-500 transition duration-300"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                        <a href="#" class="text-white hover:text-orange-500 transition duration-300"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg></a>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Contact</h3>
                    <p class="text-gray-400">
                        123 Rue de la Cuisine<br>
                        Paris, France 75001<br>
                        Tél: +33 1 23 45 67 89
                    </p>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-700 text-center">
                <p class="text-gray-400">&copy; 2024 Restaurant Alain Passard. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>