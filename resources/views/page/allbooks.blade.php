<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">

    <div class="container mx-auto p-4 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center mb-6">Available Books</h2>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-200">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Author</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Condition</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Owner</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Add Date</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Row -->
                    <tr class="bg-white hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">The Great Gatsby</td>
                        <td class="border border-gray-300 px-4 py-2">F. Scott Fitzgerald</td>
                        <td class="border border-gray-300 px-4 py-2">Good</td>
                        <td class="border border-gray-300 px-4 py-2">Rakib Hasan</td>
                        <td class="border border-gray-300 px-4 py-2">2024-12-08</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <button class="bg-yellow-700 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">
                                Swap Request
                            </button>
                        </td>
                    </tr>
                    <!-- More rows as needed -->
                    <tr class="bg-white hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">Badsah Namdar</td>
                        <td class="border border-gray-300 px-4 py-2">Humayun Ahmed</td>
                        <td class="border border-gray-300 px-4 py-2">New</td>
                        <td class="border border-gray-300 px-4 py-2">Motaleb</td>
                        <td class="border border-gray-300 px-4 py-2">2024-12-02</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <button class="bg-yellow-700 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">
                                Swap Request
                            </button>
                        </td>
                    </tr>
                    <!-- More rows as needed -->
                    <tr class="bg-white hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">Estition</td>
                        <td class="border border-gray-300 px-4 py-2">Zafar Iqbal</td>
                        <td class="border border-gray-300 px-4 py-2">Acceptable</td>
                        <td class="border border-gray-300 px-4 py-2">Lamia</td>
                        <td class="border border-gray-300 px-4 py-2">2024-10-04</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <button class="bg-yellow-700 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">
                                Swap Request
                            </button>
                        </td>
                    </tr>
                     
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
