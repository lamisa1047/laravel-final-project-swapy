<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapy</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&family=Homemade+Apple&family=Marhey:wght@300..700&family=Pacifico&family=Tiro+Bangla:ital@0;1&family=Yesteryear&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .homemade-apple-regular {
            font-family: "Homemade Apple", cursive;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="bg-yellow-800 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Swapy</h1>
            <nav>
                <a href="#" class="text-white px-4">Home</a>
                <a href="#list-books" class="text-white px-4">List Books</a>
                <a href="/page/list" class="text-white px-4">Browse Books</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="text-center py-20 bg-cover bg-center bg-no-repeat"
        style="height: 400px; background-image: url('/img/pic1.png');">
        <div class="bg-white bg-opacity-80 p-9 rounded-lg inline-block">
            <h2 class="text-4xl font-semibold homemade-apple-regular">Swap, Share, Discover more!</h2>
            <p class="text-lg mt-4">Swap your books with others and discover new reads.</p>
        </div>
    </section>

    <!-- Category Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-semibold mb-6">Explore by Category</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-gray-100 p-6 rounded shadow hover:shadow-lg">
                    <h4 class="text-xl font-bold text-yellow-800">Islamic</h4>
                </div>
                <div class="bg-gray-100 p-6 rounded shadow hover:shadow-lg">
                    <h4 class="text-xl font-bold text-yellow-800">Horror</h4>
                </div>
                <div class="bg-gray-100 p-6 rounded shadow hover:shadow-lg">
                    <h4 class="text-xl font-bold text-yellow-800">Sci-Fi</h4>
                </div>
                <div class="bg-gray-100 p-6 rounded shadow hover:shadow-lg">
                    <h4 class="text-xl font-bold text-yellow-800">Fictional</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Swap Section -->
<section id="why-swap" class="py-16 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-8">Why Swap?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Save Money -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                <i class="fas fa-dollar-sign text-4xl text-yellow-800 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Save Money</h3>
                <p>Reduce your spending by exchanging books instead of buying new ones.</p>
            </div>
            <!-- Eco-Friendly -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                <i class="fas fa-leaf text-4xl text-yellow-800 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Eco-Friendly</h3>
                <p>Help the environment by reducing waste and reusing books.</p>
            </div>
            <!-- Discover More -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                <i class="fas fa-book-open text-4xl text-yellow-800 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Discover More</h3>
                <p>Explore a wider variety of books and genres without spending extra.</p>
            </div>
        </div>
    </div>
</section>


    <!-- List a Book Form -->
    <section id="list-books">
        <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
            <h3 class="text-2xl font-semibold mb-6">List a Book for Swap</h3>
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="mb-4">
                    <label for="book-title" class="block text-lg">Book Title</label>
                    <input type="text" id="book-title" name="title" class="w-full p-3 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="book-author" class="block text-lg">Author</label>
                    <input type="text" id="book-author" name="author" class="w-full p-3 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="book-condition" class="block text-lg">Condition</label>
                    <select id="book-condition" name="condition" class="w-full p-3 border rounded-lg">
                        <option value="new">New</option>
                        <option value="good">Good</option>
                        <option value="acceptable">Acceptable</option>
                    </select>
                </div>
                <button type="submit" class="bg-yellow-800 text-white py-3 px-6 rounded-lg">List Book</button>
            </form>
        </div>
    </section>

    <!-- Browse Available Books -->
    <section id="browse-books" class="py-10 bg-gray-50">
        <div class="container mx-auto p-6">
            <h3 class="text-2xl font-semibold mb-6">Browse Available Books</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h4 class="font-semibold text-xl">{{ $post->title }}</h4>
                    <p class="text-gray-700">Author: {{ $post->author }}</p>
                    <p class="text-gray-500">Condition: {{ $post->condition }}</p>
                    <button class="mt-4 bg-yellow-800 text-white py-2 px-4 rounded-lg">Swap</button>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-yellow-800 p-6 text-white text-center">
        <p>&copy; 2024 Book Swap. All rights reserved by Lamisha.</p>
    </footer>

</body>

</html>
