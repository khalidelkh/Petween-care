<?php
get_header();

//Subtitle
$Subtitle = get_field('subtitle');

// Featured image
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . "/assets/images/__tests__/dog-annouce-details.png";

// Annonce Date
 $time = get_field('time'); 
 $date = get_field('date');

// Annonce categories
$categorie_1 = get_field('categorie_1'); 
$categorie_2  = get_field('categorie_2');

// Annonce categories description
$categories_description = get_field('categorie_description'); 

//Annonce title
$Annonce_title= get_field('annonce_title');

//Annonce description
$Annonce_description= get_field('annonce_description');

//service benefits 
$services = get_the_terms(get_the_ID(), 'service');

?>
      <!-- * ----- Hero ----- * -->
      <section
        class="self-stretch h-[396px] px-5 flex flex-col items-center justify-center gap-[4px] bg-cover bg-no-repeat bg-[top] text-left text-53xl-1 text-tertialy font-ubuntu" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-news.png');"
      >
        <h1
          class="m-0 uppercase relative text-center text-41xl sm:text-inherit tracking-[-1.44px] leading-[86.48px] font-medium font-inherit mix-blend-normal"
        >
           Annonces 
        </h1>
        <span
          class="relative text-2xl-5 tracking-[-0.43px] leading-[25.79px] font-dm-sans mix-blend-normal"
          ><?php if (function_exists('custom_breadcrumbs')) {
                custom_breadcrumbs();
              }
           ?></span
        >
      </section>
      
      <!-- * ----- Main ----- * -->
      <section
        class="flex w-full px-4 xl:px-0 flex-row items-center justify-center relative gap-[10px] text-left text-sm text-pet-primary font-myriad-pro"
      >
        <img
          class="w-[883px] !m-[0] absolute -bottom-[20%] right-0 object-cover z-[0]"
          alt=""
          src="<?= get_template_directory_uri() ?>/assets/images/paw-large.png"
        />
        <div
          class=" w-full max-w-6xl mx-auto py-32 flex flex-col items-center justify-start gap-20  z-[1]"
        >
          <div class="flex flex-col items-start justify-start gap-[50px]">
            <div
              class="flex flex-row flex-wrap gap-10 items-end justify-between w-full"
            >
              <div class="flex flex-col items-start justify-start gap-[6px]">
                <div
                  class="flex flex-row items-center justify-start gap-[11px]"
                >
                  <img
                    class="w-3.5 relative h-[13.1px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg"
                  />

                  <h6
                    class="m-0 relative text-inherit tracking-[2.8px] leading-[30px] font-normal font-inherit mix-blend-normal"
                  >
                    BLOG POSTS
                  </h6>
                </div>
                <h2
                  class="m-0 relative text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu text-secondary mix-blend-normal"
                >
                <?= the_title(); ?>
                </h2>
              </div>
              <div
                class="flex flex-col items-start justify-start text-16xl-2 font-dm-sans"
              >
                <time
                  class="relative tracking-[-0.7px] leading-[42.23px] font-medium mix-blend-normal"
                   ><?=   $time ?></time
                > 
                <time
                  class="relative tracking-[-0.7px] leading-[42.23px] text-secondary mix-blend-normal"
                  ><?=  $date ?></time
                >
              </div>
            </div>

            <div
              class="flex flex-col items-start justify-start gap-[16px] text-base font-dm-sans"
            >
              <h6
                class="m-0 relative text-inherit leading-[32px] font-normal font-inherit mix-blend-normal"
              >
              <?= $Subtitle ?>
              </h6>
              <div
                class="flex flex-col lg:flex-row items-start justify-start gap-[53px] text-[38px] text-secondary"
              >
                <div
                  class=" flex flex-col items-center lg:items-start gap-[32px]"
                >
                  <h3
                    class="m-0 relative text-[35px] xl:text-inherit leading-[47px] font-bold font-inherit mix-blend-normal"
                  >
                  <?= $Annonce_title ?>
                  </h3>
                  <div class="max-w-[498px] max-h-[585px]">
                    <img
                      class="w-[598px] h-[574px] object-cover"
                      alt=""
                      src="<?= $featured_img_url ?>"
                    />
                  </div>
                </div>

                <div
                  class="Annonce-description max-w-none lg:max-w-lg xl:max-w-[622px] flex flex-col items-start justify-start gap-[33px] text-justify text-lg text-gray-200"
                >
                  <p
                    class="m-0 self-stretch relative leading-[32px] mix-blend-normal"
                  >
                  <?= $Annonce_description ?>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="flex w-full flex-col lg:flex-row items-start justify-start gap-[30px] text-xl text-gray-500 font-quicksand"
          >
            <div class="flex flex-col items-start justify-start gap-[45px]">
              <div
                class="flex flex-col md:flex-row items-start justify-start gap-[33px]"
              >
                <div
                  class="flex flex-row items-start justify-start pt-0.5 px-0 pb-0 gap-[28px]"
                >
                  <img
                    class="w-[72.2px] h-[66px] object-cover"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/icons/pets-care.svg"
                  />

                  <h4
                    class="m-0 max-w-[267px] relative text-inherit leading-[32px] font-bold font-inherit"
                  >
                    <!-- Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum. -->
                    <?=$categorie_1 ?>
                  </h4>
                </div>
                <div class="flex flex-row items-start justify-start gap-[28px]">
                  <img
                    class="w-[72px] h-[72px] object-cover"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/icons/pets-food.svg"
                  />

                  <h4
                    class="m-0 max-w-[267px] relative text-inherit leading-[32px] font-bold font-inherit"
                  >
                    <!-- Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum. -->
                    <?=$categorie_2?>
                  </h4>
                </div>
              </div>

              <div
                class="flex flex-col items-center lg:items-start justify-start py-0 pr-0 sm:pl-2.5 gap-[52px] text-lg text-gray-200 font-dm-sans"
              >
                <p class="m-0 max-w-[770px] relative leading-[32px]">
                  <!-- <span
                    >When an unknown printer took a galley of type and scrambled
                    it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic
                    typesetting</span
                  >
                  <span
                    >. Lorem Ipsum has been the ndustry standard dummy text ever
                    since the 1500s.</span
                  > -->
                  <?= wp_strip_all_tags($categories_description) ?>
                </p>
                <div
                  class="flex flex-col sm:flex-row items-start justify-start gap-[29px] text-11xl text-secondary font-ubuntu"
                >
                  <div class="max-w-[370px] max-h-[291px]">
                    <img
                      class="w-[400px] h-[309px] object-cover rounded-3xs"
                      alt=""
                      src="<?= $featured_img_url ?>"
                    />
                  </div>

                  <div
                    class="flex flex-col items-start justify-start gap-[25px]"
                  >
                    <h3
                      class="m-0 relative text-inherit tracking-[-0.6px] leading-[34px] font-medium font-inherit mix-blend-normal"
                    >
                      Service benefits
                    </h3>
                    <div
                      class="flex flex-col items-start justify-start gap-[18px] text-xl text-gray-200 font-dm-sans"
                    >
                 
                      <p class="m-0 max-w-[371px] relative leading-[30px]">
                        Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum.
                      </p>
                      <?php if (!empty($services)) :
                      foreach ($services as $service) : ?>
                      <ul
                        class="m-0 flex flex-col items-start justify-start gap-[10px] text-lg text-gray-300"
                      >
                        <li
                          class="flex flex-row items-center justify-start gap-[20px]"
                        >
                          <img
                            class="w-3.5 relative h-3.5"
                            alt=""
                            src="<?= get_template_directory_uri() ?>/assets/images/icons/arrow-right-sm.svg"
                          />

                          <span
                            class="max-w-80 relative leading-[32px] font-medium inline-block" >
                          
                          <?= esc_html($service->name); ?>
                          </span>
                        </li>
                        <!-- <li
                          class="flex flex-row items-center justify-start gap-[20px]"
                        >
                          <img
                            class="w-3.5 relative h-3.5"
                            alt=""
                            src="<?= get_template_directory_uri() ?>/assets/images/icons/arrow-right-sm.svg"
                          />

                           <span
                            class="max-w-80 relative leading-[32px] font-medium inline-block"
                          >
                            In id diam nec nisi congue tincidunt
                          </span> 
                        </li>
                        <li
                          class="flex flex-row items-center justify-start gap-[20px]"
                        >
                          <img
                            class="w-3.5 relative h-3.5"
                            alt=""
                            src="<?= get_template_directory_uri() ?>/assets/images/icons/arrow-right-sm.svg"
                          />

                           <span
                            class="max-w-80 relative leading-[32px] font-medium inline-block"
                          >
                            In id diam nec nisi congue tincidunt
                          </span> 
                        </li>
                        <li
                          class="flex flex-row items-center justify-start gap-[20px]"
                        >
                          <img
                            class="w-3.5 relative h-3.5"
                            alt=""
                            src="<?= get_template_directory_uri() ?>/assets/images/icons/arrow-right-sm.svg"
                          />

                          <span
                            class="max-w-80 relative leading-[32px] font-medium inline-block"
                          >
                            In id diam nec nisi congue tincidunt
                          </span>  -->
                        <!-- </li> -->
                      </ul>
                      <?php endforeach; ?>  
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="max-w-[370px] mx-auto lg:m-0 w-full rounded-xl bg-pet-primary h-[432px] flex flex-col items-center justify-center gap-[10px] text-center text-[36px] text-tertialy font-ubuntu"
            >
              <img
                class="w-[125.4px] h-[125.4px] object-cover"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/icons/phone-contact-icon.svg"
              />

              <h2
                class="m-0 relative text-inherit tracking-[-0.72px] leading-[43px] font-bold font-inherit mix-blend-normal"
              >
                Plus D’infos
                <br />
                Contactez-nous
              </h2>
              <a href="/contact" class="cursor-pointer [border:none] p-0 bg-secondary w-[209.8px] rounded-81xl h-[57.9px] flex flex-col items-center justify-center text-base leading-[16px] font-medium font-dm-sans !text-white"
              >
                Contactez-nous
              </a>
            </div>
          </div>
        </div>
      </section>

<?php
get_footer();
?>