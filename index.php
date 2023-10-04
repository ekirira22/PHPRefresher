<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Refresher</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body style="font-family: Open Sans, sans-serif">
<section class="py-10 px-8">
    <nav class="flex justify-between items-center">
        <div>
            <a href="/">
                <img src="./img/logo-dark.svg" alt="Orphan Reach Logo" width="165" height="25">
            </a>
        </div>
        <div>
            <a href="#" class="text-xs font-bold">HOMEPAGE</a>
            <a href="#" class="bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white py-3 px-5" >SIGN UP</a>
            <a href="#" class="bg-red-600 ml-2 rounded-full text-xs font-semibold text-white py-3 px-5">LOG IN</a>
        </div>
    </nav>
    <header class="max-w-4xl mx-auto mt-20 text-center">
        <div class="max-w-xl mx-auto">
            <h1 class="text-4xl">
                Latest <span class="text-blue-500">Laravel From Scratch</span> News
            </h1>
            <h2 class="inline-flex mt-2">
                By Larry Laracore <img src="./img/lary-head.svg" alt="Head of Larry" width="30">
            </h2>
            <p class="text-small mt-14">
                I can count just three hobbies in my life that are deep enough to continuously reignite my love and enjoyment. As I was thinking about this a few weeks ago, it occurred to me that each one, like hiding medicine in dog food, managed to provide unique, valuable lessons that have overflowed into how I organize and construct my life, in general.
            </p>

            <div class="tw-flex tw-justify-center mt-8 space-x-6    ">
                <!--                    Category-->
                <span class="relative bg-gray-200 inline-block rounded-xl inline-flex items-center">
                        <select name="" id=" " class="appearance-none bg-transparent font-semibold py-2 pl-3 pr-9 text-sm">
                            <option value="category" disabled selected>Category</option>
                            <option value="personal">Personal</option>
                            <option value="business">Business</option>
                        </select>
                        <svg class="transform -rotate-90 absolute pointer-events-none w-5 h-5" style="right: 12px;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </span>
                <!--                    Other Filters-->
                <span class="relative bg-gray-200 inline-block rounded-xl inline-flex items-center">
                        <select name="" id="" class="appearance-none bg-transparent font-semibold py-2 pl-3 pr-9 text-sm">
                            <option value="other" disabled selected>Other Filters</option>
                            <option value="personal">Foo</option>
                            <option value="business">Bar</option>
                        </select>
                        <svg class="transform -rotate-90 absolute pointer-events-none w-5 h-5" style="right: 12px;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </span>
                <span class="relative inline-flex bg-gray-200 inline-block rounded-xl items-center">
                        <form action="#" method="GET" class="py-1 pl-3 pr-9">
                            <input class="bg-transparent placeholder-black font-semibold" type="text" name="search" placeholder="Search anything...">
                        </form>
                        <svg style="right:12px;" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="absolute w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                        </svg>
                    </span>
            </div>
        </div>
    </header>
    <main class="max-w-4xl mx-auto text-center mt-10">
        <div class="max-w-xl mx-auto mb-5">
            <h1 class="text-2xl font-semibold text-red-300">Laravel Students</h1>
        </div>

        <div class="space-x-8">
            <a href="adduser.php" class="bg-green-600 py-2 px-4 rounded-full text-white uppercase text-sm font-semibold">Add</a>
            <a href="" class="bg-blue-600 py-2 px-4 rounded-full text-white uppercase text-sm font-semibold">Edit</a>
            <a href="" class="bg-red-600 py-2 px-4 rounded-full text-white uppercase text-sm font-semibold">Delete</a>
            <a href="" class="bg-yellow-400 py-2 px-4 rounded-full text-white uppercase text-sm font-semibold">Refresh</a>

        </div>
    </main>
    <footer>

    </footer>
</section>

</body>
</html>