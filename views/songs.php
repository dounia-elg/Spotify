<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Songs</title>
</head>
<body class="bg-gray-100 text-gray-900">
    <?php include 'header.php'; ?>

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center">All Songs</h1>

        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Exemple de chanson -->
            <div class="bg-white p-4 rounded-lg shadow-md flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-2v13M9 10l12-2" />
                    </svg>
                    <div class="ml-4">
                        <h2 class="text-xl font-semibold">Blinding Lights</h2>
                        <p class="text-gray-600">The Weeknd</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button class="text-green-500 hover:text-green-700 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-2.598-1.516A1 1 0 0011 10v4a1 1 0 001.154.987l2.598-1.516A1 1 0 0015 12v-1a1 1 0 00-.248-.832z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-2v13M9 10l12-2" />
                    </svg>
                    <div class="ml-4">
                        <h2 class="text-xl font-semibold">Shape of You</h2>
                        <p class="text-gray-600">Ed Sheeran</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button class="text-green-500 hover:text-green-700 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-2.598-1.516A1 1 0 0011 10v4a1 1 0 001.154.987l2.598-1.516A1 1 0 0015 12v-1a1 1 0 00-.248-.832z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Ajouter une chanson -->
        <div class="mt-6 text-center">
            <a href="addSong.php" class="bg-green-500 text-white px-6 py-3 rounded-lg flex items-center justify-center mx-auto w-48">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Song
            </a>
        </div>
    </div>
</body>
</html>
