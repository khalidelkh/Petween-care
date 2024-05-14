    <?php
      $args = array(
        'numberposts' => 3,     // Limit the number of posts to 3
        'orderby'     => 'date', // Order by date
        'order'       => 'DESC', // Descending order, so the most recent posts first
        'post_status' => 'publish' // Only retrieve published posts
      );

      $posts = get_posts($args);

      // Recent post
      $recent_post = $posts[0];
      $rp_featured_img_url = get_the_post_thumbnail_url($recent_post->ID, 'full') ?: get_template_directory_uri() . "/assets/images/__tests__/blog-image.png";
      $date = get_field('date', $recent_post->ID);
      $subtitle = get_field('subtitle', $recent_post->ID);

      // Other two posts
      $two_other_posts = array($posts[1], $posts[2]);
      ?>       
          
 <section class="self-stretch px-5 pb-24 flex flex-col items-center justify-start pt-[110px] box-border relative gap-[48px] bg-cover bg-no-repeat bg-[top] font-myriad-pro" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-blog.png');">
   <div class="flex flex-col gap-y-4 sm:flex-row max-w-6xl mx-auto items-center justify-between w-full z-[0]">
     <div class="flex flex-col items-start justify-start gap-[6px]">
       <div class="flex flex-row items-center justify-start gap-[11px]">
         <img class="w-3.5 relative h-[13.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg" />

         <h6 class="m-0 relative font-ubuntu text-inherit tracking-[2.8px] leading-[30px] font-normal font-inherit mix-blend-normal">
           BLOG POSTS
         </h6>
       </div>
       <h2 class="m-0 relative text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu mix-blend-normal text-secondary">
         Nos
         <br class="hidden sm:block" />
         derniers articles
       </h2>
     </div>
     <a href="/annonce" class="w-[209px] cursor-pointer self-end sm:self-auto rounded-81xl bg-pet-primary h-[58px] flex flex-col items-center justify-center text-base !text-white font-dm-sans">
       <span class="relative leading-[16px] font-medium mix-blend-normal">
         Nos Articles
       </span>
 </a>
   </div>


   <div class="max-w-6xl mx-auto w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-start justify-start gap-[30px] z-[1] text-gray-200 font-lato">
     <div class="z-10 flex group max-w-[370px] flex-col items-start justify-start">
       <div class="overflow-hidden max-w-[370px] h-64 max-h-[250px] relative">
         <img class="w-full h-full object-cover rounded-t-xl" alt="" src="<?= $rp_featured_img_url ?>" />


         <span style="clip-path: polygon(0 0, 100% 0, 80% 100%, 20% 100%)" class="text-sm px-10 py-2 -rotate-90 text-white bg-pet-primary absolute top-1/2 -translate-y-1/2 left-4 -translate-x-1/2 p-2"><?= $date ?></span>
       </div>

       <div class="  w-full px-4 shadow-[0px_10px_60px_rgba(0,_0,_0,_0.1)] rounded-t-none rounded-b-xl bg-tertialy h-72 flex flex-col items-center justify-center">
         <div class="flex flex-col items-start justify-start gap-[36px]">
           <div class="flex flex-col items-start justify-start gap-[4px]">
             <div class="flex flex-row items-center justify-start gap-[8px]">
               <img class="w-3.5 relative h-3.5" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-icon.svg" />

               <span class="relative tracking-[-0.52px] leading-[14px] mix-blend-normal"><?= $recent_post->subtitle ?>
               </span>
             </div>
             <h3 class="m-0 relative text-7xl tracking-[-0.52px] leading-[30px] font-medium font-ubuntu text-secondary mix-blend-normal">
               <?= $recent_post->post_title ?>
             </h3>
           </div>
           <div class="flex flex-col items-start justify-start gap-[10px] text-mini text-gray-100 font-dm-sans">
             <p class="m-0 max-w-[310px] relative leading-[27px] mix-blend-normal">
               <?= wp_strip_all_tags($recent_post->post_content) ?>
             </p>
             <button class="cursor-pointer [border:none] p-0 group-odd:bg-seashell group-even:bg-pet-primary w-[153px] rounded-81xl h-[43px] flex flex-col items-center justify-center">
               <div class="relative text-sm leading-[24px] uppercase font-medium font-dm-sans group-odd:text-secondary group-even:text-white text-left mix-blend-normal">
                 Lire Plus
               </div>
             </button>
           </div>
         </div>
       </div>
     </div>
     <?php foreach ($two_other_posts as $post) :

        $rp_featured_img_url = get_the_post_thumbnail_url($post->ID, 'full') ?: get_template_directory_uri() . "/assets/images/__tests__/blog-image.jpeg";
        $date = get_field('date', $post->ID);
        $subtitle = get_field('subtitle', $post->ID);
      ?>
       <div class="group flex flex-col items-start justify-start">

         <div class="overflow-hidden max-w-[370px] h-64 max-h-[250px] relative">
           <img class="w-full h-full object-cover rounded-t-xl" alt="" src="<?= $rp_featured_img_url ?>" />


           <span style="clip-path: polygon(0 0, 100% 0, 80% 100%, 20% 100%)" class="text-sm px-10 py-2 -rotate-90 text-white bg-pet-primary absolute top-1/2 -translate-y-1/2 left-4 -translate-x-1/2 p-2"><?= $date ?></span>
         </div>

         <div class="w-full px-4 shadow-[0px_10px_60px_rgba(0,_0,_0,_0.1)] rounded-t-none rounded-b-xl bg-tertialy h-72 flex flex-col items-center justify-center">
           <div class="flex flex-col items-start justify-start gap-[36px]">
             <div class="flex flex-col items-start justify-start gap-[4px]">
               <div class="flex flex-row items-center justify-start gap-[8px]">
                 <img class="w-3.5 relative h-3.5" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-icon.svg" />

                 <h5 class="m-0 relative text-inherit tracking-[-0.52px] leading-[14px] font-normal font-inherit mix-blend-normal">
                   <?= $post->subtitle ?>
                 </h5>
               </div>
               <div class="relative text-7xl tracking-[-0.52px] leading-[30px] font-medium font-ubuntu text-secondary mix-blend-normal">
                 <?= $post->post_title ?>
               </div>
             </div>
             <div class="flex flex-col items-start justify-start gap-[10px] text-mini text-gray-100 font-dm-sans">
               <p class="m-0 max-w-[310px] relative leading-[27px]">
                 <?= wp_strip_all_tags($post->post_content) ?>
               </p>
               <button class="cursor-pointer p-0 group-odd:bg-seashell group-odd:text-secondary group-even:bg-pet-primary group-even:text-white w-[153px] rounded-81xl h-[43px] flex flex-col items-center justify-center">
                 <span class="relative text-sm leading-[24px] uppercase font-medium font-dm-sans text-left mix-blend-normal">
                   Lire Plus
                 </span>
               </button>
             </div>
           </div>
         </div>

       </div>
     <?php endforeach; ?>


     <img class="w-[281px] hidden xl:block !m-[0] absolute top-[681px] left-[1680px] h-[227px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-transparent.png" />

     <img class="w-52 hidden z-0 xl:block !m-[0] absolute top-[651px] left-[47px] h-[189px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/cat-transparent.png" />
 </section>