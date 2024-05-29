<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Petween_care
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div
     
      class="w-full relative bg-tertialy overflow-hidden flex flex-col items-center justify-start mix-blend-normal text-left text-sm text-pet-primary font-dm-sans"
    >
      <!-- * ----- Header ----- * -->
      <header
        class="relative self-stretch flex flex-col items-start justify-start text-left text-sm text-tertialy font-dm-sans"
      >
        <!-- * Lines * -->
        <!-- <div
          class="flex flex-row w-full overflow-hidden items-start justify-start"
        >
          <img
            class="max-w-[480px] w-full relative h-[5px] mix-blend-normal"
            alt=""
            src="<?= get_template_directory_uri() ?>/assets/images/icons/gray-line.svg"
          />

          <img
            class="max-w-[480px] w-full relative h-[5px] mix-blend-normal"
            alt=""
            src="<?= get_template_directory_uri() ?>/assets/images/icons/orange-line.svg"
          />

          <img
            class="max-w-[480px] w-full relative h-[5px] mix-blend-normal"
            alt=""
            src="<?= get_template_directory_uri() ?>/assets/images/icons/gray-line.svg"
          />

          <img
            class="max-w-[480px] w-full relative h-[5px] mix-blend-normal"
            alt=""
            src="<?= get_template_directory_uri() ?>/assets/images/icons/orange-line.svg"
          />
        </div> -->

        <div class="w-full px-5 bg-gray-400">
          <div
            class="max-w-6xl mx-auto w-full h-10 flex flex-row items-center justify-between"
          >
            <div class="flex flex-row items-center justify-start gap-[9px]">
              <img src="<?= get_template_directory_uri() ?>/assets/images/icons/mail-closed-icon.svg" alt="" />
                <a href="mailto:<?= get_theme_mod('contact_email', 'petween@gmail.com') ?>" class="relative leading-[16.8px] mix-blend-norma !text-white hover:!text-white visited:!text-white"><?= get_theme_mod('contact_email', 'petween@gmail.com') ?></a>
            </div>
            <div class="flex flex-row items-center justify-start gap-[27px]">

            <a href="<?= get_theme_mod('facebook_link', '') ?>">
              <img class="w-[12.3px] relative h-[12.3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/facebook-sm.svg" />
            </a>

            <a href="<?= get_theme_mod('youtub_link', '') ?>">
              <img class="w-[15px] relative h-[10.5px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/youtube-sm.svg" />
            </a>

            <a href="<?= get_theme_mod('youtub_link', '') ?>">
              <img class="w-[11.4px] relative h-[13px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/ticktok-sm.svg" />
            </a>
            <a href="<?= get_theme_mod('instagram_link', '') ?>">
              <img class="w-[12.3px] relative h-[12.3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/instagram-sm.svg" />
            </a>
            </div>
          </div>
        </div>

        <div
          class="w-full px-5 bg-tertialy h-[122px] flex flex-row items-center justify-evenly text-base text-secondary"
        >
          <div
            class="w-full flex flex-row max-w-6xl justify-between items-center"
          >
            <div class="flex flex-col items-start justify-start">
              <img
                class="w-[167px] relative h-[63px]"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/logo.svg"
              />
            </div>

            <!-- * --- Desktop Menu ---- * -->
            <div
              class="hidden lg:flex w-full 2xl:w-auto flex-row items-center justify-center gap-[28px]"
            >
            <?php
              wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_id' => 'header-menu',
                'container' => 'ul',
                'menu_class' => 'flex list-none flex-row items-start justify-start gap-5 font-medium uppercase mix-blend-normal xl:gap-16 2xl:gap-[54px]',
              ));
              ?>
              <!-- <hr class="mt-3 w-px h-10 border-r border-gray-200/20" /> -->

              <div class="flex flex-row items-center justify-start gap-[33px]">
                <div
                  class="w-6 h-6 flex flex-col items-start justify-start relative"
                >
                  <!-- <img src="<?= get_template_directory_uri() ?>/assets/images/icons/search-icon.svg" alt="" /> -->
                </div>
                <a href="<?= get_theme_mod('conection_link', '') ?>"
                  class="cursor-pointer [border:none] py-0 pr-0 pl-1 bg-pet-primary w-[185px] rounded-81xl h-[43px] flex flex-row items-center justify-start box-border gap-[24px]"
                >
                  <div
                    class="w-[35px] rounded-81xl bg-tertialy h-[35px] flex flex-row items-center justify-center"
                  >
                    <img
                      class="w-[10.5px] relative h-3 mix-blend-normal"
                      alt=""
                      src="<?= get_template_directory_uri() ?>/assets/images/1.svg"
                    />
                  </div>
                  <b
                    class="relative text-sm leading-[24px] uppercase font-quicksand text-tertialy text-left mix-blend-normal"
                    >Connexion</b
                  >
              </a>
              </div>
            </div>

            <!-- * --- Mobile Menu ---- * -->
            <div
              class="flex-row items-center justify-between gap-[28px] lg:hidden"
            >
              <button
                class="menu-button cursor-pointer [border:none] p-0 bg-transparent w-[24px] h-[24px] flex flex-col items-center justify-center"
              >
                <img
                  class="w-[24px] relative h-[24px] mix-blend-normal"
                  alt=""
                  src="<?= get_template_directory_uri() ?>/assets/images/icons/menu-icon.svg"
                />
              </button>

              <div
                style="opacity: 0; pointer-events: none"
                class="mt-[-5px] mobile-menu bg-secondary transition-all duration-200 ease-out flex flex-col justify-evenly items-center py-10 w-full h-[calc(100vh-167px)] left-0 z-50 right-0 absolute top-[167px] text-orange uppercase"
              >
                <div class="relative mt-3 w-full max-w-xs mx-auto">
                  <div
                    class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
                  >
                    <!-- <img src="<?= get_template_directory_uri() ?>/assets/images/icons/search-icon.svg" alt="" /> -->
                  </div>
                </div>

                <?php
              wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_id' => 'header-menu',
                'container' => 'ul',
                'menu_class' => 'header-menu-mobile list-none m-0 p-0 font-medium uppercase mix-blend-normal flex flex-col items-center flex-wrap justify-center gap-[36px] text-center text-base !text-white font-barlow',
              ));
              ?>
                <a href="<?= get_theme_mod('conection_link', '') ?>"
                 class="cursor-pointer [border:none] py-0 pr-0 pl-1 bg-pet-primary w-[185px] rounded-81xl h-[43px] flex flex-row items-center justify-start box-border gap-[24px]"
                >
                  <div
                    class="w-[35px] rounded-81xl bg-tertialy h-[35px] flex flex-row items-center justify-center"
                  >
                    <img
                      class="w-[10.5px] relative h-3 mix-blend-normal"
                      alt=""
                      src="<?= get_template_directory_uri() ?>/assets/images/1.svg"
                    />
                  </div>
                  <b
                    class="relative text-sm leading-[24px] uppercase font-quicksand text-tertialy text-left mix-blend-normal"
                    >Connexion</b
                  >
               </a>
              </div>
            </div>
          </div>
        </div>
      </header>
  