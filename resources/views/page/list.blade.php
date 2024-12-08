<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Book List</title>
</head>

<body>
    <section id="browse-books" class="py-10 bg-gray-50">
        <div class="container mx-auto p-6">
            <h3 class="text-2xl font-semibold mb-6">Browse Available Books</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h4 class="font-semibold text-xl">{{ $post->title }}</h4>
                    <p class="text-gray-700">Author: {{ $post->author }}</p>
                    <p class="text-gray-500">Condition: {{ $post->condition }}</p>
                    <div class="flex gap-2">
                    <button class="mt-4 bg-yellow-800 text-white py-2 px-4 rounded-lg hover:bg-yellow-600">
                       <a href="/page/allbooks">Swap</a>
                    </button>
                    <form action="{{ route('post.delete', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="mt-4 bg-yellow-800 text-white py-2 px-4 rounded-lg hover:bg-yellow-600">Delete</button>
                    </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>