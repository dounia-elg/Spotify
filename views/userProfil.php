<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>User Profile</title>
</head>
<body class="bg-gray-100 text-gray-900">
    <?php include 'header.php'; ?>

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center">User Profile</h1>

        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
            <div class="text-center">
                <img src="https://via.placeholder.com/100" alt="User Avatar" class="w-24 h-24 rounded-full mx-auto">
                <h2 class="text-2xl font-semibold mt-4">John Doe</h2>
                <p class="text-gray-600">johndoe@example.com</p>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold">Account Details</h3>
                <ul class="mt-2 text-gray-700">
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A12.042 12.042 0 0112 15c2.7 0 5.194.846 7.121 2.304M12 15v3m0 0l-3-3m3 3l3-3" />
                        </svg>
                        Joined: January 2024
                    </li>
                    <li class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        Playlists Created: 5
                    </li>
                    <li class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Favorite Songs: 12
                    </li>
                </ul>
            </div>

            <div class="mt-6 text-center">
                <a href="editProfile.php" class="bg-blue-500 text-white px-4 py-2 rounded inline-block">Edit Profile</a>
                <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded inline-block ml-2">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
