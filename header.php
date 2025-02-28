<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="h-screen bg-[url('')] bg-cover bg-center">
   
    <!-- Navbar here -->
    <nav id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="home.php" class="flex items-center text-lg font-semibold text-gray-700">
            <img src="logo/logo2.png" alt="logo" class="h-20">
            </a>
        </div>

        <div class="hidden md:flex items-center space-x-4 flex-grow justify-center">
            <!-- Home  -->
            <a href="home.php" class="text-gray-700 hover:text-gray-900">Home</a>

            <!-- Services -->
            <div class="relative dropdown">
            <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
                Services
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
            <!--  Services dropdown  -->
            <!-- <div class="dropdown-menu absolute bg-white bg-opacity-50 shadow-lg rounded-md mt-2 py-2 w-48">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Electrician</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Plumber</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Carpenter</a>
            </div> -->
            </div>

            <!-- About Us -->
            <a href="#" class="text-gray-700 hover:text-gray-900">About Us</a>
        </div>

        <!-- Contact Us Button (Right Side) -->
        <div class="hidden md:flex items-center">
        <div>
                    <input type="email" placeholder="name@email.com" class="w-full px-4 py-3 border rounded-[20px] focus:outline-none focus:ring-2 focus:ring-gray-900">
                </div>
        </div>
        </div>
    </div>
    </nav>