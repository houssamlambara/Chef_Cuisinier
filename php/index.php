<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Le Chef - Alain Passard</title>
</head>
<body class="bg-gray-50 text-gray-800">
<nav class="bg-white dark:bg-black">
  <div class="flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../logo_cuisine-removebg-preview (1).png" class="h-16" alt="Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
  <a href="./sign up.php" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-3 text-center dark:bg-orange-500 dark:hover:bg-orange-600">
    Log In
</a>
  <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
  </button>
</div>

  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
  <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
  <li >
        <a href="./menu.php" class="text-white hover:text-orange-500 transition duration-300">Nos Menus</a>
      </li>
      <li>
        <a href="./reserver.php" class="text-white hover:text-orange-500 transition duration-300">Réserver</a>
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

<!-- Hero Section -->
<section class="relative h-screen overflow-hidden bg-cover bg-center" style="background-image: url('../fabrizio-magoni-boaDpmC-_Xo-unsplash.jpg');">
  <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <h1 class="text-white text-4xl md:text-6xl font-bold text-center">Bienvenue chez Chef Cuisinier</h1>
  </div>
</section>

<!-- Menu Section -->
<section class="container mx-auto py-16 text-center" id="menu">
  <h2 class="text-3xl font-bold mb-12">Notre Menu</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition">
      <img alt="Pâtes à la sauce tomate" class="w-full h-56 object-cover" src="https://storage.googleapis.com/a1aa/image/syYfCztU9E1GOitBMRIdlvnjWoVfMO3kTuGc5LDLPqohFg7TA.jpg" />
      <div class="p-6">
        <h3 class="text-xl font-semibold text-gray-800">Pâtes à la Sauce Tomate</h3>
        <p class="text-gray-600 mt-2">Délicieuses pâtes servies avec une sauce tomate maison et du basilic frais.</p>
        <p class="text-blue-600 font-bold mt-4">15€</p>
      </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition">
      <img alt="Steak grillé" class="w-full h-56 object-cover" src="https://storage.googleapis.com/a1aa/image/Af5z1Ckt5DTya6M5aEnIuVsbjCF2n4XPcWcP7ZLvePEfKA3nA.jpg" />
      <div class="p-6">
        <h3 class="text-xl font-semibold text-gray-800">Steak Grillé</h3>
        <p class="text-gray-600 mt-2">Un steak juteux grillé à la perfection, servi avec des légumes de saison.</p>
        <p class="text-blue-600 font-bold mt-4">25€</p>
      </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition">
      <img alt="Dessert au chocolat" class="w-full h-56 object-cover" src="https://storage.googleapis.com/a1aa/image/BYuKH27Ce7TeeI0otPEbGwuvHixfIiHFsFTqlebIuDnXsAcfE.jpg" />
      <div class="p-6">
        <h3 class="text-xl font-semibold text-gray-800">Dessert au Chocolat</h3>
        <p class="text-gray-600 mt-2">Un dessert décadent au chocolat, garni de fraises fraîches.</p>
        <p class="text-blue-600 font-bold mt-4">8€</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 justify-items-center">
        <div>
                    <h3 class="text-xl font-semibold mb-4">Navigation</h3>
                    <ul class="space-y-2">
                        <li><a href="./menu.php" class="text-white hover:text-orange-500 transition duration-300">Nos Menus</a></li>
                        <li><a href="./reserver.php" class="text-white hover:text-orange-500 transition duration-300">Réserver</a></li>
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
