<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Dashboard</title>
</head>
<body class="bg-gray-100 text-gray-900">
    <?php include 'header.php'; ?>

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center">Admin Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <!-- Manage Users -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A8 8 0 1112 4a8 8 0 01-6.879 13.804z" />
                </svg>
                <h2 class="text-xl font-bold mt-4">Manage Users</h2>
                <p class="text-gray-600">Ban or unban users</p>
                <a href="manageUsers.php" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Go</a>
            </div>

            <!-- Manage Playlists -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-2v13M9 10l12-2" />
                </svg>
                <h2 class="text-xl font-bold mt-4">Manage Playlists</h2>
                <p class="text-gray-600">View or remove playlists</p>
                <a href="managePlaylists.php" class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">Go</a>
            </div>

            <!-- Manage Songs -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-2v13M9 10l12-2" />
                </svg>
                <h2 class="text-xl font-bold mt-4">Manage Songs</h2>
                <p class="text-gray-600">Add or remove songs</p>
                <a href="manageSongs.php" class="mt-4 inline-block bg-red-500 text-white px-4 py-2 rounded">Go</a>
            </div>
        </div>
    </div>
</body>
</html>
