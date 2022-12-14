<!doctype html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TVD5K2Z5VB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TVD5K2Z5VB');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Income Calculator</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-blue-900">

    @livewire('calculator')

    @livewireScripts

    <footer class="container mx-auto text-white font-serif pb-5 px-5 xl:px-96 lg:px-32">
       <div class="flex flex-col justify-center items-center space-y-3">
           <p class="text-center">
               I would like to hear all your views and comments for updates and corrections. Please send your comments through email at appiatujason@gmail.com
           </p>
           <div class="flex flex-row space-x-3">
                <div>
                    <a href="https://www.linkedin.com/in/jason-appiatu/" target="_blank">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
               <div>
                   <a href="https://github.com/Jason-bolt" target="_blank">
                       <i class="bi bi-github"></i>
                   </a>
                </div>
           </div>
           <p class="text-center">
               Product of Appiatu Group of Companies Copyright &copy; {{ date('Y') }}
           </p>
       </div>
    </footer>
</body>
</html>
