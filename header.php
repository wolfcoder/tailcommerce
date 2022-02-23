<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">

    <?php do_action('tailpress_header'); ?>

    <header class="bg-primary">
        <div class="mx-auto container mt-4 ">
            <div class="flex justify-between">
                <div class="flex space-x-4 lg:space-x-0 items-center">
                    <a href="#" class="lg:hidden" aria-label="Toggle navigation" id="primary-menu-toggle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 18H20M4 6H20H4ZM4 12H12H4Z" stroke="white" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <div class="h-8 w-8 md:h-10 md:w-10 ">
                        <?php if (has_custom_logo()) { ?>
                            <?php the_custom_logo(); ?>
                        <?php } else { ?>
                            <div class="text-lg uppercase">
                                <a href="<?php echo get_bloginfo('url'); ?>"
                                   class="font-extrabold text-lg uppercase">
                                    <?php echo get_bloginfo('name'); ?>
                                </a>
                            </div>

                            <p class="text-sm font-light text-gray-600">
                                <?php echo get_bloginfo('description'); ?>
                            </p>

                        <?php } ?>
                    </div>
                    <h1 class="hidden md:block font-bold text-white pl-4 text-2xl"> <?php echo get_bloginfo('name'); ?></h1>
                </div>
                <div class="flex space-x-4 items-center pr-2">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.8284 9.82843C15.5786 9.07828 16 8.06087 16 7C16 5.93913 15.5786 4.92172 14.8284 4.17157C14.0783 3.42143 13.0609 3 12 3C10.9391 3 9.92172 3.42143 9.17157 4.17157C8.42143 4.92172 8 5.93913 8 7C8 8.06087 8.42143 9.07828 9.17157 9.82843C9.92172 10.5786 10.9391 11 12 11C13.0609 11 14.0783 10.5786 14.8284 9.82843Z"
                                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.05025 16.0503C8.36301 14.7375 10.1435 14 12 14C13.8565 14 15.637 14.7375 16.9497 16.0503C18.2625 17.363 19 19.1435 19 21H5C5 19.1435 5.7375 17.363 7.05025 16.0503Z"
                                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <div class=" ">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 11V7C16 5.93913 15.5786 4.92172 14.8284 4.17157C14.0783 3.42143 13.0609 3 12 3C10.9391 3 9.92172 3.42143 9.17157 4.17157C8.42143 4.92172 8 5.93913 8 7V11M5 9H19L20 21H4L5 9Z"
                                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
            <!--  search-->
            <?php dynamic_sidebar('search-top-sidebar'); ?>
            <section id="search-top-sidebar">
                <?php get_search_form(); ?>
            </section>

            <!--              search-->
            <!--            <label class="relative block mt-4">-->
            <!--                <span class="sr-only">Search</span>-->
            <!--                <span class="absolute inset-y-0 right-0 flex items-center pr-2">-->
            <!--                    <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="none"-->
            <!--                         xmlns="http://www.w3.org/2000/svg">-->
            <!--<path d="M21 21L15 15M17 10C17 10.9193 16.8189 11.8295 16.4672 12.6788C16.1154 13.5281 15.5998 14.2997 14.9497 14.9497C14.2997 15.5998 13.5281 16.1154 12.6788 16.4672C11.8295 16.8189 10.9193 17 10 17C9.08075 17 8.1705 16.8189 7.32122 16.4672C6.47194 16.1154 5.70026 15.5998 5.05025 14.9497C4.40024 14.2997 3.88463 13.5281 3.53284 12.6788C3.18106 11.8295 3 10.9193 3 10C3 8.14348 3.7375 6.36301 5.05025 5.05025C6.36301 3.7375 8.14348 3 10 3C11.8565 3 13.637 3.7375 14.9497 5.05025C16.2625 6.36301 17 8.14348 17 10Z"-->
            <!--      stroke="#3F3F46" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
            <!--</svg>-->
            <!---->
            <!--  </span>-->
            <!--                <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full  rounded-md py-2 pl-3 pr-9 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"-->
            <!--                       placeholder="Search..." type="text" name="search"/>-->
            <!--            </label>-->
        </div>
        <!--        Menu slide top-->
        <?php dynamic_sidebar('menu-top-sidebar'); ?>
        <!--        -->
        <?php
        wp_nav_menu(
            array(
                'container_id' => 'primary-menu',
                'container_class' => 'lg:hidden hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                'menu_class' => 'lg:flex lg:-mx-4',
                'theme_location' => 'primary',
                'li_class' => 'lg:mx-4',
                'fallback_cb' => false,
            )
        );
        ?>

    </header>

    <div id="content" class="site-content flex-grow">

        <!-- Start introduction -->
        <!--		--><?php //if ( is_front_page() ) : ?>
        <!--			<div class="container mx-auto my-12 border-b pb-12">-->
        <!--				<h1 class="font-bold text-lg text-secondary uppercase">TailPress</h1>-->
        <!--				<h2 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4">Rapidly build your WordPress theme-->
        <!--					with <a href="https://tailwindcss.com" class="text-primary">Tailwind CSS</a>.</h2>-->
        <!--				<p class="max-w-screen-lg text-gray-700 text-lg font-medium mb-10">TailPress is your go-to starting-->
        <!--					point for developing WordPress themes with TailwindCSS and comes with basic block-editor support out-->
        <!--					of the box.</p>-->
        <!--				<a href="https://github.com/jeffreyvr/tailpress"-->
        <!--				   class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View-->
        <!--					on Github</a>-->
        <!--			</div>-->
        <!--		--><?php //endif; ?>
        <!-- End introduction -->

        <?php do_action('tailpress_content_start'); ?>

        <main>
