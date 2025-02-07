<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Playlists</title>
</head>
<body class="bg-gray-100 text-gray-900">
    <?php include 'header.php'; ?>

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center">My Playlists</h1>

        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Exemple de Playlist -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-2v13M9 10l12-2" />
                    </svg>
                    <h2 class="text-xl font-semibold ml-2">Chill Vibes</h2>
                </div>
                <p class="text-gray-600 mt-2">10 Songs - Created by You</p>
                <div class="mt-4 flex justify-between">
                    <a href="playlistDetails.php?id=1" class="bg-blue-500 text-white px-4 py-2 rounded">View</a>
                    <button class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-2v13M9 10l12-2" />
                    </svg>
                    <h2 class="text-xl font-semibold ml-2">Workout Mix</h2>
                </div>
                <p class="text-gray-600 mt-2">15 Songs - Created by You</p>
                <div class="mt-4 flex justify-between">
                    <a href="playlistDetails.php?id=2" class="bg-blue-500 text-white px-4 py-2 rounded">View</a>
                    <button class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                </div>
            </div>
        </div>

        <!-- Ajouter une Playlist -->
        <div class="mt-6 text-center">
            <a href="createPlaylist.php" class="bg-green-500 text-white px-6 py-3 rounded-lg flex items-center justify-center mx-auto w-48">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                New Playlist
            </a>
        </div>
    </div>
</body>
</html>
