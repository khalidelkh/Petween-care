<?php
/* Template Name: Contact*/
get_header();
?>
      <!-- * ----- Hero ----- * -->
      <section
        class="self-stretch h-[396px] px-5 flex flex-col items-center justify-center gap-[4px] bg-cover bg-no-repeat bg-[top] text-left text-53xl-1 text-tertialy font-ubuntu" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-news.png');"
      >
        <h1
          class="m-0 uppercase relative text-center text-41xl sm:text-inherit tracking-[-1.44px] leading-[86.48px] font-medium font-inherit mix-blend-normal"
        >
          Contact
         
        </h1>
        <span
          class="relative text-2xl-5 tracking-[-0.43px] leading-[25.79px] font-dm-sans mix-blend-normal"
          ><?php if (function_exists('custom_breadcrumbs')) {
                 custom_breadcrumbs();
             }
          ?></span 
        >
      </section>
            <!-- * ---- Main ----- * -->
            <section
        class="w-full px-4 xl:px-0 py-32 flex flex-col items-center justify-center relative gap-[69px] text-center text-sm text-pet-primary font-myriad-pro"
      >
        <img
          class="max-w-[883px] !m-[0] absolute top-[67px] left-[1037px] h-[1443px] object-cover z-[0]"
          alt=""
          src="<?= get_template_directory_uri() ?>/assets/images/paw-large.png"
        />

        <div class="flex flex-col items-center justify-start gap-[16px] z-[1]">
          <div class="flex flex-row items-center justify-start gap-[10px]">
            <img
              class="w-3.5 relative h-[13.1px] mix-blend-normal"
              alt=""
              src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg"
            />

            <h6
              class="m-0 relative font-lato text-inherit tracking-[2.8px] leading-[30px] font-normal font-inherit mix-blend-normal"
            >
              ENTREZ EN CONTACT
            </h6>
          </div>
          <h2
            class="m-0 relative text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu text-secondary text-left mix-blend-normal"
          >
            N'hésitez pas à nous contactez
          </h2>
        </div>
        <?= do_shortcode('[contact-form-7 id="32d3d71" title="Contact form"]') ?>  
      </section>
    


<?php
get_footer();
?>