 <?php
  $args = array(
    'post_type'      => 'annonce', // spécifie le type de post (custom post type)
    'posts_per_page' => 3,
  );

  $annonces = get_posts($args);

  ?>

 <section class="self-stretch px-5 pb-24 flex flex-col items-center justify-start pt-[74px] box-border gap-[125px]  bg-cover bg-no-repeat bg-[top] text-center font-myriad-pro" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/annonce@3x.png');">

   <div class="flex flex-col items-center justify-start gap-[86px]">
     <div class="flex flex-col items-center justify-start gap-[40px]">
       <div class="flex flex-col items-center justify-start gap-[5px]">
         <div class="flex flex-row items-center justify-start gap-[6px]">
           <img class="w-3.5 relative h-[13.1px] mix-blend-normal" id="dog-icon-sm" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg" />

           <h6 class="m-0 relative font-ubuntu text-inherit tracking-[2.8px] leading-[30px] font-normal font-inherit mix-blend-normal">
             ANNONCE LES PLUS RÉCENT
           </h6>
         </div>
         <h2 class="m-0 relative text-31xl tracking-[-1px] leading-[62px] font-medium font-ubuntu mix-blend-normal text-tertialy">
           Un espace dédié
           <br />aux petites annonces
         </h2>
       </div>
       <a href="/annonces" class="cursor-pointer [border:none] p-0 bg-pet-primary w-[209.8px] rounded-81xl h-[57.9px] flex flex-col items-center justify-center">
         <div class="w-[104px] relative text-base leading-[16px] font-medium font-dm-sans text-tertialy text-center inline-block h-4 shrink-0 mix-blend-normal">
           En savoir plus
         </div>
       </a>
     </div>
     <div class="min-h-[534.6px] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[38px] text-left text-base-2 text-gray-100 font-dm-sans">
       <?php
        if ($annonces) :
          foreach ($annonces as $annonce) :
            $annonce_id = $annonce->ID;
            $image_url = get_the_post_thumbnail_url($annonce_id, 'full') ?: get_template_directory_uri() . "/assets/images/__tests__/cat-on-legs.png";
            $title = get_field('title', $annonce_id);
            $date_annonce = get_field('date_annonce', $annonce_id);
        ?>
           <div class="max-w-[364.7px] h-[524.6px] flex flex-col items-center justify-start pt-3.5 px-3 shadow-md rounded-xl pb-0 box-border gap-[28px] bg-cover bg-no-repeat bg-[top]" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-paw-lg.png');">
             <img class="max-w-[346.2px] h-[234.8px] w-full rounded-xl object-cover" alt="" src="<?= $image_url ?>" />

             <div class="flex flex-col items-start justify-start gap-[23px]">
               <div class="flex flex-col items-start justify-start gap-[9px]">
                 <div class="flex flex-col items-start justify-start gap-[4px] text-center text-pet-primary">
                   <span class="relative tracking-[-0.32px] leading-[19.48px] whitespace-pre-wrap mix-blend-normal"><?= $date_annonce ?> </span>
                   <h3 class="m-0 relative text-7xl tracking-[-0.52px] leading-[31.17px] font-medium font-ubuntu text-secondary mix-blend-normal">
                     <?= $annonce->post_title ?>
                   </h3>
                 </div>
                 <p class="m-0 relative leading-[28.14px] mix-blend-normal">
                   <?= wp_strip_all_tags($annonce->post_content) ?>
                 </p>
                 <span class="w-[108.2px] rounded bg-whitesmoke-100 h-[28.1px] flex flex-col items-center justify-center">
                   <?= $title ?>
                 </span>
               </div>

               <a href="<?= $annonce->guid ?>" class="cursor-pointer [border:none] p-0 bg-pet-primary max-w-[325.7px] w-full rounded-3xs h-[53px] flex flex-col items-center justify-center">
                 <span class="relative text-[15.2px] leading-[25.97px] font-medium font-dm-sans  text-left mix-blend-normal text-tertialy hover:text-tertialy">
                   LIRE PLUS
                 </span>
               </a>
             </div>
           </div>
         <?php endforeach; ?>
       <?php endif; ?>
     </div>
   </div>

 </section>