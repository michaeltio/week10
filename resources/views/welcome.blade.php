<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Input Page</title>
    <!-- Include the Tailwind CSS CDN or link to your local CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-md mx-auto bg-white rounded p-4 shadow-md">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Student Information</h1>
        <form action="/students" method="POST">
            @csrf <!-- Add the CSRF token for Laravel -->
            <div class="mb-4">
                <label for="nama" class="block text-gray-600 text-sm font-medium mb-2">Name</label>
                <input type="text" name="nama" id="nama" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="prodi" class="block text-gray-600 text-sm font-medium mb-2">Program</label>
                <input type="text" name="prodi" id="prodi" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="nim" class="block text-gray-600 text-sm font-medium mb-2">NIM</label>
                <input type="text" name="nim" id="nim" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
