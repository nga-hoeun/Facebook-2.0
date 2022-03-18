<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook 2.0</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Your style here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="min-w-full fixed top-0 z-20">
  <nav class="bg-white shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px]">
    <div class="flex items-stretch p-3">
        <div class="self-center flex items-center ml-5 space-x-4 w-1/3">
            <img src="../images/logo.png" alt="logo" width="50px">
            <label class="relative block">
                <span class="sr-only">Search</span>
                <span class="absolute inset-y-0 left-0 flex items-center">
                    <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"><img src="../images/icon/search.svg" alt=""></svg>
                </span>
                <input class="placeholder:text-slate-400 block bg-white w-full border border-slate-300 ml-3  py-2 pl-9 pr-7 shadow-sm focus:outline-none rounded-full focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search Facebook" type="text" name="search"/>
            </label>
        </div>
        <div class="self-center flex items-center justify-center space-x-20 w-1/3">
            <a href="#" class="text-center w-14 h-14 hover:bg-blue-400 bg-blue-500 text-blue-50 focus:text-blue-50 p-3 rounded-full"><i class="fa fa-home" style="font-size:30px"></i></a>
            <a href="#" class="text-center w-14 h-14 hover:bg-blue-400 focus:bg-blue-500 focus:text-blue-50 p-3 rounded-full"><i class="mt-1 fa fa-users" style="font-size:25px"></i></a>
        </div>
        <div class="self-center flex w-1/3 justify-end mr-5">
            <div x-data="{ dropdownOpen: false }" class="relative">
                <div @click="dropdownOpen = ! dropdownOpen" class="rounded-full pr-1 cursor-pointer flex items-center hover:bg-slate-200 duration-150 p-1 focus:bg-slate-200">
                    <button class="relative block h-10 w-10 rounded-full overflow-hidden shadow">
                        <img class="h-full w-full object-cover" src="../images/teacher.jpg" alt="Your avatar">
                    </button>
                    <p class="ml-2 text-base font-bold text-slate-700">Rady Y</p>
                </div>
            
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                    style="display: none;"></div>
            
                <div x-show="dropdownOpen"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                    style="display: none;">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-400">Profile</a>
                    <a href="/login"
                        class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-400">Logout</a>
                </div>
            </div>
            <!-- <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-400 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-10 w-10 rounded-full" src="../images/teacher.jpg" alt="user" width="50px">
            </button> -->
        </div>
    </div>
  </nav>
</div>



<body>
    
