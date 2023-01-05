<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />    
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <?php wp_head() ?>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
  <nav class="w-full py-4 shadow menu">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:underline px-4 to-menu" href="https://pukara.es">About</a></li>
                    <li><a class="hover:underline px-4 to-menu" href="https://culture.pukara.dev/">Culture</a></li>
                </ul>
            </nav>
            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="pl-6 to-menu" href="https://github.com/pukara-dev">
                    <i class="fab fa-github"></i>
                </a>
                <a class="pl-6 to-menu" href="https://twitter.com/pukaradev">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6 to-menu" href="https://www.linkedin.com/company/pukaraes/">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>  
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center pt-12">
            <a href="<?= site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pukara-logo.png" class="logo"  alt="Pukara LTD logo">
            </a>
            <p class="text-lg text-gray-600 py-2">
                The crew memories and reflections
            </p>
        </div>
    </header>    
