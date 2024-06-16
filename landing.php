<?php // Template name: Landing TMPL 
?>


<link rel="stylesheet" href="https://galantis.us/wp-content/themes/blackdsn/assets/style.min.css">

<?php get_header('landing'); ?>

<?php $header_logo = get_field('header_logo', 'options'); ?>
<?php $header_phone = get_field('header_phone', 'options'); ?>
<div role="header" class="bg-grayDark">
   <div class="mx-auto flex h-[90px] max-w-[1770px] flex-wrap items-center justify-between gap-x-4 px-4 md:h-[120px]">
      <?php if ($header_logo && is_array($header_logo)) : ?>
         <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" class="max-sm:w-[160px]" />
      <?php endif; ?>

      <?php if ($header_phone) : ?>
         <a href="tel:<?php echo str_replace(' ', '', $header_phone); ?>" class="text-gold font-contax text-lg sm:text-xl"><?php echo $header_phone; ?></a>
      <?php endif; ?>
   </div>
</div>
<main class="grow">
   <!-- hero -->
   <?php $hero_slides = get_field('hero_slides'); ?>
   <?php $hero_title = get_field('hero_title'); ?>
   <?php $hero_text = get_field('hero_text'); ?>
   <?php $hero_slider_arrow = get_field('hero_slider_arrow'); ?>
   <?php $titles_str = ''; ?>
   <section class="relative px-0 pb-10">
      <div class="mx-auto max-w-[1734px]">
         <div class="absolute left-0 top-0 hidden h-1/2 w-full bg-grayDark md:block"></div>
         <?php foreach ($hero_slides as $hero_slide) : ?>
            <?php $titles_str += $hero_slide['title']; ?>
         <?php endforeach; ?>
         <?php echo $titles_str; ?>
         <div data-titles="CUSTOM CLOSEST,GARAGES,OFFICES,ENTERTAINMENT CENTERS,CEILING" class="hero-slider w-full overflow-hidden max-sm:h-[200px]">
            <div class="hero-slider-wrapper flex h-full w-full">
               <?php foreach ($hero_slides as $hero_slide) : ?>
                  <?php $titles_str += $hero_slide['title']; ?>
                  <div class="hero-slide shrink-0"><img src="<?php echo $hero_slide['image']['url']; ?>" alt="<?php echo $hero_slide['image']['alt']; ?>" class="size-full object-cover" /></div>
               <?php endforeach; ?>
            </div>
         </div>
         <div class="mt-4 flex flex-col gap-y-5 max-md:flex-col-reverse sm:mt-10">
            <div class="mx-auto w-full max-w-[1200px] px-5 text-center">
               <?php if ($hero_title) : ?>
                  <h1 data-aos="fade-up" data-aos-offset="0" class="text-gold mb-3 font-contax text-3xl !leading-none sm:text-4xl lg:text-6xl">
                     <?php echo $hero_title; ?>
                  </h1>
               <?php endif; ?>

               <?php if ($hero_text) : ?>
                  <p data-aos="fade-up" data-aos-delay="100" data-aos-offset="0" class="text-lg sm:text-2xl lg:text-3xl"><?php echo $hero_text; ?></p>
               <?php endif; ?>
            </div>
            <div class="relative z-20 flex justify-between gap-x-[30px] px-4">
               <button class="hs-prev group flex items-center gap-x-2.5" type="button" aria-label="Prev slide">
                  <img src="<?php echo $hero_slider_arrow['url']; ?>" alt="<?php echo $hero_slider_arrow['alt']; ?>" class="size-[50px]" />
                  <span class="prev-title group-hover:text-gold font-contax text-2xl uppercase !leading-none max-md:hidden lg:text-3xl">WALL UNIT</span>
               </button>
               <button class="hs-next group flex items-center gap-x-2.5" type="button" aria-label="Next slide">
                  <span class="next-title group-hover:text-gold font-contax text-2xl uppercase !leading-none max-md:hidden lg:text-3xl">GARAGES</span>
                  <img src="<?php echo $hero_slider_arrow['url']; ?>" alt="<?php echo $hero_slider_arrow['alt']; ?>" class="size-[50px] rotate-180" />
               </button>
            </div>
         </div>
      </div>
   </section>

   <?php $r_top_title = get_field('r_top_title'); ?>
   <?php $r_bottom_tilte = get_field('r_bottom_tilte'); ?>
   <?php $r_link = get_field('r_link'); ?>
   <?php $r_image = get_field('r_image'); ?>

   <!-- ready to -->
   <section class="bg-grayDark py-16 lg:py-[120px]">
      <div class="container">
         <div class="relative flex flex-col items-center gap-y-5 xl:flex-row">
            <?php if ($r_top_title && $r_bottom_tilte) : ?>
               <h2 data-aos="fade-up" class="text-center font-contax xl:mr-[100px]">
                  <span class="font-contax text-3xl !leading-none sm:text-4xl lg:text-5xl"><?php echo $r_top_title; ?></span> <br />
                  <span class="text-gold text-4xl font-bold uppercase !leading-none sm:text-5xl lg:text-7xl"><?php echo $r_bottom_tilte; ?></span>
               </h2>
            <?php endif; ?>

            <?php if ($r_link && is_array($r_link)) : ?>
               <a data-aos="fade-right" data-aos-delay="200" href="<?php echo $r_link['url']; ?>" class="bg-gold group relative z-10 flex items-center justify-center gap-x-5 px-5 py-2 duration-300 hover:shadow-lg hover:shadow-yellow-400/30 sm:py-4">
                  <svg class="hidden size-4 text-black duration-300 group-hover:translate-x-3 sm:block">
                     <use href="./sprites/sprite.svg#icon-arrow"></use>
                  </svg>
                  <span class="text-center text-lg uppercase !leading-tight tracking-[2px] text-black sm:text-left sm:text-xl"><?php echo $r_link['title']; ?></span>
               </a>
            <?php endif; ?>

            <?php if ($r_image && is_array($r_image)) : ?>
               <img src="<?php echo $r_image['url']; ?>" alt="<?php echo $r_image['alt']; ?>" class="absolute right-0 top-1/2 hidden -translate-y-1/2 xl:block" />
            <?php endif; ?>
         </div>
      </div>
   </section>

   <!-- key features -->
   <?php $wel_title_group = get_field('wel_title_group'); ?>
   <?php $wel_text = get_field('wel_text'); ?>
   <?php $wel_subtitle = get_field('wel_subtitle'); ?>
   <?php $wel_list = get_field('wel_list'); ?>
   <?php $wel_link = get_field('wel_link'); ?>
   <?php $wel_image = get_field('wel_image'); ?>
   <section class="py-[70px]">
      <div class="container">
         <div class="mx-auto max-w-[1000px] bg-grayDark px-8 py-7 sm:px-10 lg:px-[100px] lg:py-[60px]">
            <?php if ($wel_title_group && is_array($wel_title_group)) : ?>
               <h2 data-aos="fade-up" class="mb-6 text-3xl !leading-tight md:text-4xl"><?php echo $wel_title_group['first_part']; ?> <span class="text-gold font-contax"><?php echo $wel_title_group['second_part']; ?></span></h2>
            <?php endif; ?>
            <?php if ($wel_text) : ?>
               <p data-aos="fade-up" class="text-left text-lg !leading-tight sm:pl-[15%] sm:text-right md:text-xl">
                  <?php echo $wel_text; ?>
               </p>
            <?php endif; ?>
         </div>
         <div class="flex flex-col lg:flex-row">
            <div class="border-y border-l border-grayLight px-8 py-10 max-lg:border-r sm:py-[60px] sm:pl-[63px] sm:pr-[48px] lg:w-1/2">
               <?php if ($wel_subtitle) : ?>
                  <h2 data-aos="fade-up" class="text-gold mb-10 font-contax text-2xl uppercase !leading-tight sm:text-3xl"><?php echo $wel_subtitle; ?></h2>
               <?php endif; ?>
               <?php if ($wel_list) : ?>
                  <ul class="mb-10 space-y-6 divide-y divide-grayLight [&>*:not(:first-child)]:pt-6">
                     <?php foreach ($wel_list as $wel_item) : ?>
                        <li data-aos="fade-up" data-aos-delay="100" class="flex items-start gap-x-4 text-base before:mt-2.5 before:size-[11px] before:shrink-0 before:rounded-full before:bg-white sm:text-xl">
                           <?php echo $wel_item['text']; ?>
                        </li>
                     <?php endforeach; ?>
                  </ul>
               <?php endif; ?>
               <?php if ($wel_link && is_array($wel_link)) : ?>
                  <a data-aos="fade-up" data-aos-delay="100" href="<?php echo $wel_link['url']; ?>" class="bg-gold group relative z-10 inline-flex items-center justify-center gap-x-5 px-5 py-2 duration-300 hover:shadow-lg hover:shadow-yellow-400/30 sm:py-4">
                     <svg class="hidden size-4 text-black duration-300 group-hover:translate-x-3 sm:block">
                        <use href="./sprites/sprite.svg#icon-arrow"></use>
                     </svg>
                     <span class="text-center text-lg uppercase !leading-tight tracking-[2px] text-black sm:text-left sm:text-xl"><?php echo $wel_link['title']; ?></span>
                  </a>
               <?php endif; ?>
            </div>
            <div class="overflow-hidden">
               <?php if ($wel_image && is_array($wel_image)) : ?>
                  <img src="<?php echo $wel_image['url']; ?>" alt="<?php echo $wel_image['alt']; ?>" class="g-zoom-out size-full object-cover" />
               <?php endif; ?>
            </div>
         </div>
      </div>
   </section>

   <?php $lo_title = get_field('lo_title'); ?>
   <?php $lo_text = get_field('lo_text'); ?>
   <!-- Limited offer -->
   <section class="mb-20">
      <div class="bg-gold container py-[73px]">
         <?php if ($lo_title) : ?>
            <h2 data-aos="fade-up" class="mb-1 text-center font-contax text-4xl uppercase !leading-tight text-black md:text-5xl"><?php echo $lo_title; ?></h2>
         <?php endif; ?>
         <?php if ($lo_text) : ?>
            <div data-aos="fade-up" data-aos-delay="50" class="mx-auto max-w-[830px] text-center text-xl !leading-tight text-black md:text-2xl">
               <?php echo $lo_text; ?>
            </div>
         <?php endif; ?>
      </div>
   </section>



   <?php $why_title = get_field('why_title'); ?>
   <?php $why_list = get_field('why_list'); ?>
   <!-- grid -->
   <section>
      <div class="container">
         <?php if ($why_title) : ?>
            <h2 data-aos="fade-up" class="text-gold mb-[50px] font-contax text-3xl uppercase !leading-tight">
               <?php echo $why_title; ?>
            </h2>
         <?php endif; ?>

         <?php if ($why_list) : ?>
            <div class="grid grid-cols-1 gap-x-10 sm:grid-cols-2 lg:grid-cols-3">
               <?php foreach ($why_list as $why_item) : ?>
                  <div class="grid-item">
                     <div class="g-stagger flex flex-col items-start border border-grayLight px-[35px] pb-10 pt-[53px]">
                        <img src=" <?php echo $why_item['image']['url']; ?>" alt=" <?php echo $why_item['image']['alt']; ?>" class="mb-5" />
                        <div class="space-y-4 divide-y divide-grayLight">
                           <h3 class="font-contax text-xl uppercase !leading-tight"><?php echo $why_item['title']; ?></h3>
                           <p class="pt-4">
                              <?php echo $why_item['text']; ?>
                           </p>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>
         <?php endif; ?>
      </div>
   </section>

   <?php $co_title_group = get_field('co_title_group'); ?>
   <?php $co_list = get_field('co_list'); ?>
   <?php $slides = get_field('slides'); ?>
   <!-- slider -->
   <section class="mt-44 pl-[5%] lg:mt-56">
      <div class="flex flex-col gap-x-[80px] gap-y-8 lg:flex-row">
         <div class="shrink-0">
            <?php if ($co_title_group && is_array($co_title_group)) : ?>
               <h2 data-aos="fade-up" class="mb-10 font-contax text-2xl uppercase !leading-tight sm:text-3xl md:text-4xl">
                  <span class="text-gold text-3xl sm:text-4xl md:text-5xl"><?php echo $co_title_group['first_part']; ?></span>
                  <br />
                  <?php echo $co_title_group['second_part']; ?>
               </h2>
            <?php endif; ?>

            <?php if ($co_list) : ?>
               <ul class="space-y-3 divide-y divide-grayLight [&>*:not(:first-child)]:pt-3">
                  <?php foreach ($co_list as $co_item) : ?>
                     <li data-aos="fade-up" data-aos-delay="100" class="text-lg uppercase md:text-2xl"><?php echo $co_item['text']; ?></li>
                  <?php endforeach; ?>
               </ul>
            <?php endif; ?>
         </div>

         <?php if ($slides) : ?>
            <div class="slider relative w-full overflow-hidden">
               <div class="pointer-events-none absolute left-0 top-1/2 z-10 flex w-full -translate-y-1/2 justify-between px-4 sm:px-10">
                  <button class="prev-slide group pointer-events-auto size-14 sm:size-20 xl:size-24" type="button" aria-label="Prev slide">
                     <svg xmlns="http://www.w3.org/2000/svg" class="text-[#C1C1C1] duration-300 group-hover:text-yellow-500" viewBox="0 0 99 100" fill="none">
                        <circle cx="49.5" cy="49.9224" r="47" transform="rotate(-180 49.5 49.9224)" stroke="currentColor" stroke-width="5" />
                        <path d="M26.9393 48.3617C26.3536 48.9475 26.3536 49.8972 26.9393 50.483L36.4853 60.029C37.0711 60.6147 38.0208 60.6147 38.6066 60.029C39.1924 59.4432 39.1924 58.4934 38.6066 57.9076L30.1213 49.4224L38.6066 40.9371C39.1924 40.3513 39.1924 39.4015 38.6066 38.8158C38.0208 38.23 37.0711 38.23 36.4853 38.8158L26.9393 48.3617ZM71 47.9224L28 47.9224L28 50.9224L71 50.9224L71 47.9224Z" fill="currentColor" />
                     </svg>
                  </button>
                  <button class="next-slide group pointer-events-auto size-14 sm:size-20 xl:size-24" type="button" aria-label="Next slide">
                     <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180 duration-300 group-hover:text-yellow-500" viewBox="0 0 99 100" fill="none">
                        <circle cx="49.5" cy="49.9224" r="47" transform="rotate(-180 49.5 49.9224)" stroke="currentColor" stroke-width="5" />
                        <path d="M26.9393 48.3617C26.3536 48.9475 26.3536 49.8972 26.9393 50.483L36.4853 60.029C37.0711 60.6147 38.0208 60.6147 38.6066 60.029C39.1924 59.4432 39.1924 58.4934 38.6066 57.9076L30.1213 49.4224L38.6066 40.9371C39.1924 40.3513 39.1924 39.4015 38.6066 38.8158C38.0208 38.23 37.0711 38.23 36.4853 38.8158L26.9393 48.3617ZM71 47.9224L28 47.9224L28 50.9224L71 50.9224L71 47.9224Z" fill="currentColor" />
                     </svg>
                  </button>
               </div>
               <div class="slider-wrapper flex h-full w-full">
                  <?php foreach ($slides as $slide) : ?>
                     <div class="slider-slide h-full shrink-0">
                        <img src="<?php echo $slide['url'] ?>" alt="<?php echo $slide['alt'] ?>" class="size-full object-cover" />
                     </div>
                  <?php endforeach; ?>
               </div>
            </div>
         <?php endif; ?>
      </div>
   </section>

   <?php $more_title = get_field('more_title'); ?>
   <?php $more_text = get_field('more_text'); ?>
   <?php $more_link = get_field('more_link'); ?>
   <?php $more_subtitle = get_field('more_subtitle'); ?>
   <?php $more_p_title = get_field('more_p_title'); ?>
   <?php $more_p_text = get_field('more_p_text'); ?>
   <?php $more_list = get_field('more_list'); ?>
   <?php $more_bottom_link = get_field('more_bottom_link'); ?>
   <!-- more than -->
   <section class="bg-grayDark pt-14 sm:pb-8 md:pt-28">
      <div class="container">
         <div class="flex flex-col items-center">
            <?php if ($more_title) : ?>
               <h2 data-aos="fade-up" class="text-gold mb-1 text-center font-contax text-4xl uppercase !leading-tight sm:text-5xl"><?php echo $more_title; ?></h2>
            <?php endif; ?>
            <?php if ($more_text) : ?>
               <p data-aos="fade-up" class="mb-5 text-center text-lg sm:text-3xl"><?php echo $more_text; ?></p>
            <?php endif; ?>
            <?php if ($more_link && is_array($more_link)) : ?>
               <a data-aos="fade-up" href="<?php echo $more_link['url']; ?>" class="bg-gold group relative z-10 flex items-center justify-center gap-x-5 px-5 py-2 duration-300 hover:shadow-lg hover:shadow-yellow-400/30 sm:py-4">
                  <svg class="hidden size-4 text-black duration-300 group-hover:translate-x-3 sm:block">
                     <use href="./sprites/sprite.svg#icon-arrow"></use>
                  </svg>
                  <span class="text-center text-lg uppercase !leading-tight tracking-[2px] text-black sm:text-left sm:text-xl"><?php echo $more_link['title']; ?></span>
               </a>
            <?php endif; ?>
         </div>
      </div>
   </section>

   <section class="bg-grayDark py-[70px]">
      <div class="container">
         <div class="flex flex-col-reverse lg:flex-row">
            <?php if ($more_image && is_array($more_image)) : ?>
               <div class="overflow-hidden">
                  <img src="<?php echo $more_image['url']; ?>" alt="<?php echo $more_image['alt']; ?>" class="g-zoom-out size-full object-cover" />
               </div>
            <?php endif; ?>

            <div class="border-y border-r border-grayLight px-8 py-10 max-lg:border-l sm:py-[60px] sm:pl-[63px] sm:pr-[48px] lg:w-1/2">
               <?php if ($more_subtitle) : ?>
                  <h2 data-aos="fade-up" class="text-gold mb-10 font-contax text-2xl uppercase !leading-tight sm:text-3xl">
                     <?php echo $more_subtitle; ?>
                  </h2>
               <?php endif; ?>

               <div data-aos="fade-up" class="mb-8">
                  <?php if ($more_p_title) : ?>
                     <h3 class="mb-2.5 font-contax text-xl uppercase !leading-tight"><?php echo $more_p_title; ?></h3>
                  <?php endif; ?>
                  <?php if ($more_p_text) : ?>
                     <p><?php echo $more_p_text; ?></p>
                  <?php endif; ?>
               </div>
               <?php if ($more_list) : ?>
                  <ul class="mb-10 space-y-3">
                     <?php foreach ($more_list as $more_item) : ?>
                        <li data-aos="fade-up" data-aos-delay="100">
                           <h3 class="text-gold mb-2.5 font-contax text-xl uppercase"><?php echo $more_item['title']; ?></h3>
                           <p class="text-base">
                              <?php echo $more_item['text']; ?>
                           </p>
                        </li>
                     <?php endforeach; ?>
                  </ul>
               <?php endif; ?>

               <?php if ($more_bottom_link && is_array($more_bottom_link)) : ?>
                  <a data-aos="fade-up" data-aos-delay="100" href="<?php echo $more_bottom_link['url']; ?>" class="bg-gold group relative z-10 inline-flex items-center justify-center gap-x-5 px-5 py-2 duration-300 hover:shadow-lg hover:shadow-yellow-400/30 sm:py-4">
                     <svg class="hidden size-4 text-black duration-300 group-hover:translate-x-3 sm:block">
                        <use href="./sprites/sprite.svg#icon-arrow"></use>
                     </svg>
                     <span class="text-center text-lg uppercase !leading-tight tracking-[2px] text-black sm:text-left sm:text-xl"><?php echo $more_bottom_link['title']; ?></span>
                  </a>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </section>
</main>

<?php $footer_logo = get_field('footer_logo', 'options'); ?>
<?php $footer_socials = get_field('footer_socials', 'options'); ?>
<?php $footer_phone = get_field('footer_phone', 'options'); ?>
<?php $footer_text = get_field('footer_text', 'options'); ?>
<div role="footer" class="bg-grayDark py-8 md:py-14">
   <div class="container">
      <div class="mb-14 flex flex-col items-center justify-between gap-x-4 gap-y-8 sm:flex-row">
         <?php if ($footer_logo && is_array($footer_logo)) : ?>
            <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />
         <?php endif; ?>

         <?php if ($footer_socials) : ?>
            <ul class="flex gap-x-1.5">
               <?php foreach ($footer_socials as $item) : ?>
                  <li class="shrink-0">
                     <a href="<?php echo $item['link']['url']; ?>" target="_blank" title="<?php echo $item['link']['title']; ?>" class="bg-gold flex size-[50px] items-center justify-center rounded-full text-black duration-300 hover:shadow-lg hover:shadow-amber-300/30">
                        <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" />
                     </a>
                  </li>
               <?php endforeach; ?>
            </ul>
         <?php endif; ?>
         <?php if ($footer_phone) : ?>
            <a href="tel:<?php echo str_replace(' ', '', $footer_phone); ?>" class="text-gold font-contax text-lg sm:text-xl"><?php echo $footer_phone; ?></a>
         <?php endif; ?>
      </div>
      <?php if ($footer_text) : ?>
         <div class="text-center text-base"><?php echo $footer_text; ?></div>
      <?php endif; ?>
   </div>
</div>

<script src="https://galantis.us/wp-content/themes/blackdsn/assets/app.min.js"></script>