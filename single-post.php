<?php
/* Template Name: Blog details*/
get_header();

// Post Date
$date = get_field('date', $post->ID);
$formatted_post_date = strtoupper($date);

// Post Subtitle
$subtitle = get_field('subtitle', $post->ID);

// Post description
$blog_description = get_field('blog_description');

// Featured image
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . "/assets/images/__tests__/blog-image.jpeg";

// Tags
$post_tags = get_the_tags();

// Categories
$post_categories = get_the_category();

// Poste Récents
$poste_récent = get_post();

// Next and Prev posts
$next_post = get_next_post();
$prev_post = get_previous_post();
?>
<!-- * ----- Hero ----- * -->
<section class="self-stretch h-[396px] px-5 flex flex-col items-center justify-center gap-[4px] bg-cover bg-no-repeat bg-[top] text-left text-53xl-1 text-tertialy font-ubuntu" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/CHIENS-DE-LA-RUE.png');">
  <h1 class="m-0 relative text-center text-41xl sm:text-inherit tracking-[-1.44px] leading-[86.48px] font-medium font-inherit mix-blend-normal">
    CHIENS DE LA RUE
  </h1>
  <span class="relative text-2xl-5 tracking-[-0.43px] leading-[25.79px] font-dm-sans  mix-blend-normal">
    <?php if (function_exists('custom_breadcrumbs')) {
      custom_breadcrumbs();
    }
    ?></span>
</section>
<section class="w-full relative px-4 2xl:px-0 py-28 xl:py-40 2xl:py-44">
  <img class="w-[281px] !m-[0] hidden xl:block absolute top-1/2 -translate-y-1/2 right-12 h-[227px] object-cover z-[0]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-transparent.png" />

  <img class="max-w-[883px] w-full h-full !m-[0] absolute top-1/2 left-[1036px] max-h-[1443px] object-cover z-[0]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/paw-large.png" />

  <img class="w-52 !m-[0] hidden xl:block absolute top-1/2 -translate-y-1/2 left-12 h-[189px] object-cover z-[0]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/cat-transparent.png" />

  <div class="flex flex-col items-start justify-start max-w-7xl flex-1 w-full mx-auto relative z-40">
    <div class="flex flex-col items-start justify-start gap-[3px] mb-10 2xl:mb-20">
      <div class="flex flex-row items-center justify-start gap-[11px]">
        <img class="w-3.5 relative h-[13.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg" />

        <h6 class="m-0 font-lato relative text-inherit tracking-[2.8px] leading-[30px] font-normal font-inherit mix-blend-normal">
          BLOG POSTS
        </h6>
      </div>
      <h2 class="relative text-31xl tracking-[-1px] leading-[65px] font-medium font-ubuntu text-secondary mix-blend-normal">
        <?= the_title() ?>
      </h2>
    </div>

    <div class="flex flex-col md:flex-row items-start justify-start gap-[29px] text-gray-200 font-lato">
      <!-- * Left side * -->
      <div class="flex-1 flex flex-col items-start justify-start !gap-[31px]">
        <div class="flex flex-col items-start justify-start gap-[32px]">
          <div class="flex flex-col items-start justify-start gap-[23px]">
            <div class="relative max-w-[770px] max-h-[421px]">
              <img class="w-[770px] h-[376px]  rounded-xl" alt="" src="<?= $featured_img_url ?>" />
              <span style="clip-path: polygon(0 0, 100% 0, 80% 100%, 20% 100%)" class="text-sm px-10 py-2 -rotate-90 text-white bg-pet-primary absolute !top-[50%] font-ubuntu  -translate-y-1/2 left-4 -translate-x-1/2 p-2 "><?= $formatted_post_date ?></span>
            </div>
            <div class="flex flex-col items-start justify-start gap-[2px]">
              <div class="flex flex-row items-center justify-start gap-[8px]">
                <img class="w-3.5 relative h-3.5" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-primary-icon.svg" />

                <span class="relative tracking-[-0.52px] leading-[14px] mix-blend-normal"><?= $subtitle ?>
                </span>
              </div>
              <h3 class="m-0 relative text-[30px] tracking-[-0.6px] leading-[30px] font-medium font-ubuntu text-secondary mix-blend-normal">
                <?= the_title() ?>
              </h3>
            </div>
          </div>
          <div class="flex max-w-3xl flex-col items-start justify-start gap-[13px] text-lg font-dm-sans">
            <p class="m-0 relative leading-[32px] text-justify">
              <?= $blog_description ?>
            </p>
          </div>
        </div>
        <div class="grid gap-[30px] w-full text-base text-gray-300 font-quicksand">
          <hr class="border-t border-pet-primary/10 w-full h-1" />

          <div class="flex flex-wrap gap-3 flex-row items-center justify-between w-full">
            <div class="flex flex-row items-center justify-start gap-[17px]">
              <b class="relative leading-[19.2px] font-ubuntu mix-blend-normal">Tags</b>
              <div class="flex flex-row items-start justify-start gap-[10px] text-xs text-tertialy font-dm-sans">
              <?php if (!empty($post_tags)) : ?>
                <?php foreach ($post_tags as $tag) : ?>
                    <div class="rounded-81xl px-5 bg-secondary h-[39px] flex flex-col items-center justify-center">
                        <a href="<?= esc_url(get_tag_link($tag->term_id)); ?>" class="!text-white">
                            <?= esc_html($tag->name) ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>


              </div>
            </div>
            <div class="flex flex-row items-start justify-start gap-[19px]"> 
             <a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank">
                <img class="w-[40.1px] rounded-81xl h-[40.1px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/svgviewer-output (9).svg" />
              </a>
              <a href="https://api.whatsapp.com/send?text=<?php echo get_permalink(); ?>" target="_blank">
              <img class="w-[40.1px] rounded-81xl h-[40.1px]"  src="<?= get_template_directory_uri() ?>/assets/images/icons/svgviewer-output (7).svg" />
              </a>

              <a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" target="_blank">
              <img class="w-[40.1px] rounded-81xl h-[40.1px]"  src="<?= get_template_directory_uri() ?>/assets/images/icons/svgviewer-output (8).svg" /> 
              </a>
              <a href="https://www.linkden.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank">
              <img class="w-[40.1px] rounded-81xl h-[40.1px]"  src="<?= get_template_directory_uri() ?>/assets/images/icons/svgviewer-output (6).svg" /> 
              </a> 
           </div> 

          </div>

          <div class="flex flex-col sm:flex-row md:flex-col lg:flex-row items-start justify-start gap-[30px] text-3xl text-secondary font-ubuntu">
            <div class="flex-1 md:max-w-[370px] rounded-mini bg-whitesmoke-200 rounded-lg p-5 xl:p-12 h-[177px] flex flex-col items-center justify-center">
              <?php if ($prev_post) : ?>
                <a href="<?= $prev_post->guid ?>" class="max-w-[262px] !text-[rgb(56,81,112)] relative leading-[36px] inline-block mix-blend-normal"><?= $prev_post->post_title ?></a>
              <?php endif; ?>
            </div>
            <div class="flex-1 md:max-w-[370px] rounded-mini bg-pet-primary rounded-lg p-5 xl:p-12 h-[177px] flex flex-col items-center justify-center">
              <?php if ($prev_post) : ?>
                <a href="<?= $next_post->guid ?>" class="max-w-[262px] !text-white relative leading-[36px] inline-block mix-blend-normal"><?= $next_post->post_title ?></a>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>

      <!-- * Right side * -->
      <div class="flex-1 md:max-w-[370px] grid gap-[30px] text-xl text-gray-300 font-quicksand">
        <div class="w-full gap-10 justify-between p-5 xl:p-12 rounded-mini bg-pet-primary rounded-xl h-[81px] flex flex-row items-center text-base text-tertialy font-dm-sans">
          <input type="text" class="border-b-2 !border-t-0 !border-r-0 !border-l-0 flex-1 border-white text-white placeholder:text-white/80 text-base bg-transparent outline-none" placeholder="Recherche" />
          <div class="w-6 h-6" style="
                    background-color: white;
                    -webkit-mask: url(<?= get_template_directory_uri() ?>/assets/images/icons/search-icon.svg) no-repeat
                      center;
                    mask: url('<?= get_template_directory_uri() ?>/assets/images/icons/search-icon.svg') no-repeat center;
                  "></div>
        </div>

        <div class="w-full rounded-xl bg-whitesmoke-200 py-11 px-8 font-ubuntu">
          <div class="grid gap-[23px]">
            <h3 class="leading-[24px] font-bold pl-5">Postes Récents</h3>

            <?php if ($prev_post) : ?>
              <a href="<?= $prev_post->guid ?>" class="grid gap-[22px] text-sm text-gray-200 font-lato">
                <div class="flex flex-row items-center justify-start py-0 pr-0 pl-5 gap-[18px]">
                  <img class="w-[70px] relative rounded-3xs h-[70px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/__tests__/dark-screen.png" />

                  <div class="flex flex-col items-start justify-start gap-[7px]">
                    <div class="flex flex-row items-center justify-start gap-[8px]">
                      <img class="w-3.5 relative h-3.5" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-primary-icon.svg" />

                      <span class="relative leading-[14px] mix-blend-normal !text-[#787878]">
                        <?= $prev_post->subtitle ?>
                      </span>
                    </div>
                    <h5 class="relative text-base leading-[30px] font-ubuntu text-gray-300 mix-blend-normal">
                      <?= $prev_post->post_title ?>
                    </h5>
                  </div>
                </div>
              </a>
            <?php endif; ?>

            <?php if ($poste_récent) : ?>
              <a href="<?= $poste_récent->guid ?>" class="grid gap-[22px] text-sm text-gray-200 font-lato">
                <div class="rounded-xl py-4 px-5 bg-tertialy flex flex-row items-center justify-start box-border gap-[18px]">
                  <img class="w-[70px] relative rounded-3xs h-[70px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/__tests__/dark-screen.png" />

                  <div class="flex flex-col items-start justify-start gap-[7px]">
                    <div class="flex flex-row items-center justify-start gap-[8px]">
                      <img class="w-3.5 relative h-3.5" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-primary-icon.svg" />

                      <span class="relative leading-[14px] mix-blend-normal !text-[#787878]">
                        <?= $poste_récent->subtitle ?>
                      </span>
                    </div>
                    <h5 class="relative text-base leading-[30px] font-ubuntu text-gray-300 mix-blend-normal">
                      <?= $poste_récent->post_title ?>
                    </h5>
                  </div>
                </div>
              </a>
            <?php endif; ?>

            <?php if ($next_post) : ?>
              <a href="<?= $next_post->guid ?>" class="grid gap-[22px] text-sm text-gray-200 font-lato">
                <div class="flex flex-row items-center justify-start py-0 pr-0 pl-5 gap-[18px]">
                  <img class="w-[70px] relative rounded-3xs h-[70px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/__tests__/dark-screen.png" />

                  <div class="flex flex-col items-start justify-start gap-[7px]">
                    <div class="flex flex-row items-center justify-start gap-[8px]">
                      <img class="w-3.5 relative h-3.5" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-primary-icon.svg" />

                      <span class="relative leading-[14px] mix-blend-normal !text-[#787878]">
                        <?= $next_post->subtitle ?>
                      </span>
                    </div>
                    <h5 class="relative text-base leading-[30px] font-ubuntu text-gray-300 mix-blend-normal">
                      <?= $next_post->post_title ?>
                    </h5>
                  </div>
                </div>
              </a>
            <?php endif; ?>
          </div>
        </div>


        <!-- <div class="rounded-xl py-4 px-5 bg-tertialy flex flex-row items-center justify-start box-border gap-[18px]">
                <img class="w-[70px] relative rounded-3xs h-[70px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/__tests__/dark-screen.png" />

                <div class="flex flex-col items-start justify-start gap-[7px]">
                  <div class="flex flex-row items-center justify-start gap-[8px]">
                    <img class="w-3.5 relative h-3.5" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-primary-icon.svg" />

                    <div class="relative leading-[14px] mix-blend-normal !text-[#787878]">
                      <?= $post->subtitle ?>
                    </div>
                  </div>
                  <b class="relative text-sm leading-[30px] font-ubuntu text-gray-300 mix-blend-normal">
                    <?= $post->post_title ?>
                  </b>
                </div>
              </div>

              <div class="flex flex-row items-center justify-start py-0 pr-0 pl-5 gap-[18px]">
                <img class="w-[70px] relative rounded-3xs h-[70px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/__tests__/dark-screen.png" />

                <div class="flex flex-col items-start justify-start gap-[7px]">
                  <div class="flex flex-row items-center justify-start gap-[8px]">
                    <img class="w-3.5 relative h-3.5" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-primary-icon.svg" />

                    <span class="relative leading-[14px] mix-blend-normal !text-[#787878]">
                      <?= $next_post->subtitle ?>
                    </span>
                  </div>
                  <h5 class="relative text-base leading-[30px] font-ubuntu text-gray-300 mix-blend-normal">
                    <?= $next_post->post_title ?>
                  </h5>
                </div>
              </div> -->
        <!-- </a>
            
          </div>
        </div> -->

        <div class="rounded-xl bg-whitesmoke-200 py-11 px-8">
          <div class="grid gap-[19px]">
            <h6 class="leading-[24px] mx-4 text-inherit font-bold">
              Categories
            </h6>
            <?php if (!empty($post_categories)) : ?>
              <?php foreach ($post_categories as $category) : ?>
                <ul class="w-full flex flex-col items-start justify-start gap-[16px] text-base !text-gray-200 font-dm-sans">
                  <li class="flex w-full flex-row hover:bg-tertialy hover:text-black rounded-lg py-2 items-start justify-start px-5">
                    <a href="<?= get_category_link($category->term_id); ?>" class="relative leading-[24px]  font-medium mix-blend-normal !text-gray-200">
                      <?= esc_html($category->name); ?>
                    </a>
                  </li>
                </ul>
              <?php endforeach; ?>
            <?php endif; ?>
            <!-- <?php
                  if (!empty($post_categories)) :
                    foreach ($post_categories as $category) : ?>
                <ul class="w-full flex flex-col items-start justify-start gap-[16px] text-base !text-gray-200 font-dm-sans">
                  <li class="flex w-full flex-row hover:bg-tertialy hover:text-black rounded-lg py-2 items-start justify-start px-5 ">
                    <a class="relative leading-[24px] font-medium mix-blend-normal !text-gray-200"><?= esc_html($category->name) ?></a>
                  </li>
                </ul>

            <?php endforeach;
                  endif;
            ?> -->
          </div>
        </div>

        <div class="rounded-xl bg-whitesmoke-200 flex flex-col items-start justify-center px-14 py-12 box-border gap-[25px]">
          <h6 class="relative leading-[24px]  text-inherit font-bold">
            Tags
          </h6>
          <div class="flex flex-row flex-wrap items-start justify-start gap-[10px] text-xs text-gray-200">
          <?php if (!empty($post_tags)) : ?>
                <?php foreach ($post_tags as $tag) : ?>
                    <div class="rounded-81xl bg-tertialy flex flex-col items-center justify-center px-6 py-2 box-border">
                        <a href="<?= esc_url(get_tag_link($tag->term_id)); ?>" class="relative text-sm font-bold leading-[24px] uppercase mix-blend-normal !text-gray-200 ">
                            <?= esc_html($tag->name) ?>
                        </a>
                    </div>
                <?php endforeach; ?>
          <?php endif; ?>

            <!-- <?php if (!empty($post_tags)) :
              foreach ($post_tags as $tag) : ?>
                <div class="rounded-81xl bg-tertialy flex flex-col items-center justify-center px-6 py-2 box-border">
                  <span class="relative text-sm font-bold leading-[24px] uppercase mix-blend-normal">
                    <?= esc_html($tag->name) ?></span>
                </div>
            <?php endforeach;
            endif; ?> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>