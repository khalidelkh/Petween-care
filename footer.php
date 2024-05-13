<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Petween_care
 */

?>

	      <!-- * ---- Newsletter & footer ---- * -->
		  <section
        class="self-stretch z-10 px-5 flex flex-col items-center justify-start gap-[65px]  bg-cover bg-no-repeat bg-[top] text-[22px] text-tertialy" style="background-image: url('http://petween-care.test/wp-content/themes/petween-care/assets/images/bgs/bg-footer.png');"
      >
        <!-- * ----- Newsletter ----- * -->
        <div
          class="max-w-6xl w-full px-7 md:px-14 py-9 rounded-xl bg-pet-primary overflow-hidden flex flex-col lg:flex-row items-center justify-between gap-y-10 font-ubuntu"
        >
          <div class="flex flex-row items-center justify-start gap-[29px]">
            <img
              class="w-[51px] h-[50.6px]"
              alt=""
              src="<?= get_template_directory_uri() ?>/assets/images/icons/mail-icon-outlined.svg"
            />

            <h4
              class="m-0 relative text-xl sm:text-inherit tracking-[-0.44px] leading-[30px] font-medium font-inherit mix-blend-normal"
            >
              Entrez votre e-mail <br />
              et inscrivez-vous à la newsletter
            </h4>
          </div>
          <form
            class="border-b w-full max-w-sm border-solid border-white/50 pb-1 flex flex-1 flex-row items-center justify-start"
          >
            <input
              class="bg-transparent font-ubuntu outline-none flex-1 !border-none placeholder:text-white/70 text-white"
              type="text"
              placeholder="Votre adresse e-mail"
            />
            <button type="submit" class="bg-transparent">
              <img
                class="w-[26.4px] h-[26px]"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/icons/send-icon.svg"
              />
            </button>
          </form>
        </div>

        <!-- * ---- Footer ---- * -->
        <footer class="w-full max-w-6xl mx-auto pb-10">
          <div
            class="flex flex-col lg:flex-row lg:items-center justify-between gap-10 text-mini"
          >
            <div class="flex flex-col items-start justify-start gap-[24px]">
              <div class="flex flex-col items-start justify-start gap-[36px]">
                <img
                  class="w-[167px] h-[63px]"
                  alt=""
                  src="<?= get_template_directory_uri() ?>/assets/images/footer-logo.svg"
                />

                <p class="m-0 max-w-[427px] relative leading-[30px]">
                  Tincidunt elit magnis nulla facilisis sTincidunt elit magnis
                  nulla facilisis sagittis . Sapien nunced amet dolores. Sapien
                  nunced amet dolores.
                </p>
              </div>
              <div class="flex flex-row items-start justify-start gap-[19px]">
              <a href="#" <?= get_theme_mod('facebook_link', '') ?>">
              <img class="w-[40.1px] rounded-81xl h-[40.1px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/facebook.svg" />
              </a>

              <a href="#" <?= get_theme_mod('instagram_link', '') ?>">
              <img class="w-[40.1px] rounded-81xl h-[40.1px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/instagram.svg" />
              </a>

              <a href="#" <?= get_theme_mod('tiktok_link', '') ?>">
              <img class="w-[40.1px] rounded-81xl h-[40.1px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/ticktok.svg" />
              </a>

              <a href="#" <?= get_theme_mod('tiktok_link', '') ?>">
              <img class="w-[40.1px] rounded-81xl h-[40.1px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/youtube.svg" />
              </a>
              </div>
            </div>

            <div
              class="flex flex-col md:flex-row items-start justify-start gap-10 xl:gap-14 2xl:gap-[86px] text-xl text-pet-primary"
            >
              <div class="flex flex-col items-start justify-start gap-[22px]">
                <h5
                  class="m-0 relative text-inherit tracking-[-0.4px] leading-[24px] font-medium font-inherit mix-blend-normal"
                >
                  Liens utils
                </h5>
                <?php
              wp_nav_menu(array(
                'theme_location' => 'liens-utils',
                'menu_id' => 'liens-utils',
                'container' => 'ul',
                'menu_class' => ' liens-utils w-[110px] flex flex-col items-start mt-2 justify-start gap-[8px] text-base !text-white',
              ));
              ?>
                
              </div>
              <div class="flex flex-col items-start justify-start gap-[22px]">
                <h5
                  class="m-0 relative text-inherit tracking-[-0.4px] leading-[24px] font-medium font-inherit mix-blend-normal"
                >
                  Pages légales
                </h5>
                <?php
              wp_nav_menu(array(
                'theme_location' => 'pages-légales',
                'menu_id' => 'pages-légales',
                'container' => 'ul',
                'menu_class' => ' pages-légales w-[110px] flex flex-col mt-2 items-start justify-start gap-[7px] text-base !text-white',
              ));
              ?>
              </div>
               
              <div class="flex flex-col items-start justify-start gap-[22px]">
                <h5
                  class="m-0 relative text-inherit tracking-[-0.4px] leading-[24px] font-medium font-inherit mix-blend-normal"
                >
                  Infos de contact
                </h5>
                <div
                  class="w-[156px] flex flex-col items-start justify-start gap-[3px] text-base text-tertialy"
                >
                  <div
                    class="w-[68px] relative leading-[34px] inline-block h-[31px] shrink-0 mix-blend-normal"
                  >
                    <p class="m-0">Email:</p>
                    <p class="m-0">&nbsp;</p>
                  </div>
                  <div
                    class="w-[157px] relative leading-[34px] inline-block h-[31px] shrink-0 mix-blend-normal"
                  >
                  <a href="mailto:<?= get_theme_mod('contact_email', 'petween@gmail.com') ?>" class="m-0 !text-white hover:!text-white"><?= get_theme_mod('contact_email', 'petween@gmail.com') ?></a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="flex flex-col items-center justify-start gap-[36px] text-base text-darkgray"
          >
            <img
              class="w-[1170px] relative h-0.5 opacity-[0.1] mix-blend-normal"
              alt=""
              src="<?= get_template_directory_uri() ?>/assets/images/line2.svg"
            />

            <h6
              class="m-0 relative text-inherit leading-[19.2px] font-normal font-inherit mix-blend-normal"
            >
              © All Copyright 2024 Petween Care
            </h6>
          </div>
        </footer>
      </section>
    </div>

<?php wp_footer(); ?>

</body>
</html>
