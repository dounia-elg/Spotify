<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Artist Dashboard</title>
</head>
<body class="bg-gray-100 text-gray-900">
    <?php include 'header.php'; ?>

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center">Artist Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <!-- Upload Song -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m0 0l-3-3m3 3l3-3" />
                </svg>
                <h2 class="text-xl font-bold mt-4">Upload Song</h2>
                <p class="text-gray-600">Add a new song</p>
                <a href="uploadSong.php" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Go</a>
            </div>

            <!-- Manage Songs -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-2v13M9 10l12-2" />
                </svg>
                <h2 class="text-xl font-bold mt-4">Manage Songs</h2>
                <p class="text-gray-600">Edit or remove your songs</p>
                <a href="manageSongs.php" class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">Go</a>
            </div>

            <!-- View Playlists -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-2v13M9 10l12-2" />
                </svg>
                <h2 class="text-xl font-bold mt-4">View Playlists</h2>
                <p class="text-gray-600">See where your songs are added</p>
                <a href="viewPlaylists.php" class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded">Go</a>
            </div>
        </div>
    </div>
</body>
</html>
