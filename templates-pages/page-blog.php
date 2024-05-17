<?php
/* Template Name: Blog*/
get_header();

// Get Blog
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'post_type'   => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 6,
  'paged' => $paged
);

$all_posts = new WP_Query($args);
?>
<!-- * ----- ACTUALITÉS ----- * -->
<section class="self-stretch h-[396px] flex flex-col items-center justify-center gap-[4px]  bg-cover bg-no-repeat bg-[top] text-left text-53xl-1 text-tertialy font-ubuntu" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-news.png');">
  <h1 class="m-0 relative text-41xl sm:text-inherit tracking-[-1.44px] leading-[86.48px] font-medium font-inherit mix-blend-normal">
     ACTUALITÉS 
  </h1>
  <span class="relative text-2xl-5 tracking-[-0.43px] leading-[25.79px] font-dm-sans whitespace-pre-wrap mix-blend-normal">
    <?php if (function_exists('custom_breadcrumbs')) {
          custom_breadcrumbs();
      }
    ?></span>
</section>
<!-- * ---- BLOG POSTS ----- * -->
<section class="self-stretch py-16 relative gap-[10px] text-left text-sm text-pet-primary font-myriad-pro">
  <div class="max-w-6xl relative z-10 px-4 xl:px-0 mx-auto flex flex-col items-start justify-start gap-[68px]">
    <div class="flex flex-col items-start justify-start gap-[6px]">
      <div class="flex flex-row items-center justify-start gap-[11px]">
        <img class="w-3.5 relative h-[13.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg" />

        <h6 class="m-0 font-lato relative text-inherit tracking-[2.8px] leading-[30px] font-normal font-inherit mix-blend-normal">
          BLOG POSTS
        </h6>
      </div>
      <h2 class="m-0 relative text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu text-secondary mix-blend-normal">
        Nos derniers articles
      </h2>
    </div>




    <?php if ($all_posts->have_posts()) : ?>
      <div class="grid w-full grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-12 text-gray-200 font-lato 2xl:gap-[76px]">

        <?php while ($all_posts->have_posts()) :
          $all_posts->the_post();
          // Featured Image
          $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . "/assets/images/__tests__/blog-image.jpeg";
          // Post Date
          $date = get_field('date', $post->ID);
          $formatted_post_date = strtoupper($date);
          // Post Subtitle
          $subtitle = get_field('subtitle', $post->ID);
        ?>
          <div class="group flex flex-col items-start justify-start">
            <div class="overflow-hidden max-w-[370px] h-64 max-h-[250px] relative">

              <img class="w-full h-full object-cover rounded-t-xl" alt="" src="<?= $featured_img_url ?>" />

              <span style="clip-path: polygon(0 0, 100% 0, 80% 100%, 20% 100%)" class="text-sm px-10 py-2 -rotate-90 text-white bg-pet-primary absolute top-1/2 -translate-y-1/2 left-4 -translate-x-1/2 p-2"><?= $formatted_post_date ?></span>
            </div>

            <div class="w-full p-7 max-w-[370px] shadow-[0px_10px_60px_rgba(0,_0,_0,_0.1)] rounded-t-none rounded-b-xl bg-tertialy flex flex-col items-center justify-center">
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
                  <a href="<?= get_the_permalink() ?>" class="cursor-pointer p-0 group-odd:bg-seashell group-odd:text-secondary group-even:bg-pet-primary group-even:text-white w-[153px] rounded-81xl h-[43px] flex flex-col items-center justify-center">
                    <span class="relative text-sm leading-[24px] uppercase font-medium font-dm-sans text-left mix-blend-normal">
                      Lire Plus
                    </span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        <?php endwhile; ?>
      </div>

      <?php // Pagination
      $total_pages = $all_posts->max_num_pages;

      if ($total_pages > 1) {

        $current_page = max(1, get_query_var('paged'));

        $pagination_links = paginate_links(array(
          'base'      => get_pagenum_link(1) . '%_%',
          'format'    => '/page/%#%',
          'current'   => $current_page,
          'total'     => $total_pages,
          'mid_size'  => 1,
          'prev_next' => false,
          'type'      => 'array'
        ));

        if (is_array($pagination_links)) : ?>
          <div class="Petween-care-pagination mt-10 flex flex-row items-start justify-center gap-[14px] ml-[500px] !m-0 w-full">
            <?php
            foreach ($pagination_links as $link) {
              // Add leading zeros to numbers
              echo preg_replace_callback('/>[\d]+</', function ($matches) {
                return '>' . str_pad(trim($matches[0], '><'), 2, '0', STR_PAD_LEFT) . '<';
              }, $link);
            }
            ?>
          </div>
        <?php endif; ?>
      <?php }
      wp_reset_postdata();
    else : ?>
      <p class="text-black">No blogs or media found.</p>
    <?php endif; ?>

  </div>
  <img class="w-[281px] !m-[0] hidden md:block absolute top-[50%] -translate-y-1/2 right-[1%] h-[227px] object-cover z-0" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-transparent.png" />

  <img class="w-[883px] !m-[0] absolute -bottom-[40%] right-0 h-[1443px] object-cover z-[0]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/paw-large.png" />
</section>


<?php
get_footer();
?>