<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <link href="./src/output.css" rel="stylesheet">

        <?php
        // if ($_SERVER['SERVER_NAME'] == 'localhost') {
        //    echo '<link href="www/public_html/ibra/views/src/output.css" rel="stylesheet">';
        //  }
        ?>
    </head>
    <body>

    </body>
    <header>
        <nav class="w-full">

            <div class="container mx-auto px-6 flex items-center justify-between">
                <div class="flex items-center">

                    <p class="ml-2 lg:ml-4 text-base lg:text-2xl font-bold text-gray-800">La Càmara</p>

                </div>

                <div>
                    <div onclick="toggleMenu(true)" class="sm:block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                        <svg aria-haspopup="true" aria-label="Main Menu" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="4" y1="8" x2="20" y2="8" />
                        <line x1="4" y1="16" x2="20" y2="16" />
                        </svg>
                    </div>
                    <div id="menu" class="md:block lg:block hidden">

                        <div onclick="toggleMenu(false)" class="block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 fixed focus:outline-none z-30 top-0 pt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </div>

                        <ul class="flex text-3xl md:text-base items-center py-8 md:flex flex-col md:flex-row justify-center fixed md:relative top-0 bottom-0 left-0 right-0 bg-white z-20">
                            <li class="text-gray-600 hover:text-gray-800 cursor-pointer md:ml-10 pt-10 md:pt-0"><a href="index.php">Index</a></li>
                            <li class="text-gray-600 hover:text-gray-800 cursor-pointer md:ml-10 pt-10 md:pt-0"><a href="javascript: void(0)">Services</a></li>
                            <li class="text-gray-600 hover:text-gray-800 cursor-pointer md:ml-10 pt-10 md:pt-0"><a href="javascript: void(0)">Projets</a></li>
                            <li class="text-gray-600 hover:text-gray-800 cursor-pointer md:ml-10 pt-10 md:pt-0"><a href="javascript: void(0)">Cámara</a></li>                                
                            <li class="text-gray-600 hover:text-gray-800 cursor-pointer md:ml-10 pt-10 md:pt-0"><a href="javascript: void(0)">Agenda</a></li>                                
                            <li class="text-gray-600 hover:text-gray-800 cursor-pointer md:ml-10 pt-10 md:pt-0"><a href="index.php?c=public_html&a=blog">Blog</a></li>                                
                            <li class="text-gray-600 hover:text-gray-800 cursor-pointer md:ml-10 pt-10 md:pt-0"><a href="javascript: void(0)">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>