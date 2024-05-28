<?php
/* Template Name: Annonces*/
get_header();

// Get Annonces
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'post_type'      => 'annonce',
  'post_status'    => 'publish',
  'posts_per_page' => 6,
  'paged' => $paged
);

$all_annonce_posts = new WP_Query($args);

?>
<!-- * ----- Hero ----- * -->
<section class="self-stretch h-[396px] px-5 flex flex-col items-center justify-center gap-[4px] bg-cover bg-no-repeat bg-[top] text-left text-53xl-1 text-tertialy font-ubuntu" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-news.png');">
  <h1 class="m-0 uppercase relative text-center text-41xl sm:text-inherit tracking-[-1.44px] leading-[86.48px] font-medium font-inherit mix-blend-normal">
    Annonces
  </h1>
  <span class="relative text-2xl-5 tracking-[-0.43px] leading-[25.79px] font-dm-sans mix-blend-normal">
    <?php if (function_exists('custom_breadcrumbs')) {
      custom_breadcrumbs();
    }
    ?></span>
</section>
<!-- * ----- Nos dernier announces ----- * -->
<section class="flex w-full px-4 xl:px-0 flex-row items-center justify-center relative gap-[10px] text-left text-sm text-pet-primary font-myriad-pro">
  <img class="w-[883px] !m-[0] absolute -bottom-[40%] right-0 object-cover z-[0]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/paw-large.png" />

  <div class="w-full max-w-6xl mx-auto py-20 md:py-32 flex flex-col items-start justify-start gap-12 md:gap-[91px] z-[1]">
    <div class="flex flex-col items-start justify-start gap-[6px]">
      <div class="flex flex-row items-center justify-start gap-[11px]">
        <img class="w-3.5 relative h-[13.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-primary-icon.svg" />

        <h6 class="m-0 relative font-lato text-inherit tracking-[2.8px] leading-[30px] font-normal font-inherit mix-blend-normal">
          BLOG POSTS
        </h6>
      </div>
      <h2 class="m-0 relative text-[40px] sm:text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu text-secondary mix-blend-normal">
        Nos
        <br class="hidden sm:block" />
        derniers Annonces
      </h2>
    </div>


    <div class="flex w-full z-20 flex-col items-center justify-start gap-14 xl:gap-20 2xl:gap-32 text-base-2 text-gray-100 font-dm-sans">
      <?php if ($all_annonce_posts->have_posts()) : ?>

        <div class="grid w-full grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-9">
          <?php while ($all_annonce_posts->have_posts()) :

            $all_annonce_posts->the_post();
            $annonce_id = $all_annonce_posts->ID;
            // Featured Image
            $image_url = get_the_post_thumbnail_url($annonce_id, 'full') ?: get_template_directory_uri() . "/assets/images/__tests__/cat-on-legs.png";
            $title = get_field('title', $annonce_id);
            $date_annonce = get_field('date_annonce', $annonce_id);
          ?>
            <div class="z-20 shadow-2xl px-4 py-4 border border-gray-100/10 border-solid rounded-xl max-w-[364.7px] flex flex-col items-center justify-start box-border gap-[28px]">
              <img class="h-[234.8px] w-full object-cover rounded-xl" alt="" src="<?= $image_url ?>" />

              <div class="flex flex-col items-start justify-start gap-[23px]">
                <div class="flex flex-col items-start justify-start gap-[9px]">
                  <div class="flex flex-col items-start justify-start gap-[4px] text-center text-pet-primary">
                    <time class="relative tracking-[-0.32px] leading-[19.48px] whitespace-pre-wrap mix-blend-normal"><?= $date_annonce ?></time>
                    <h3 class="m-0 relative text-7xl tracking-[-0.52px] leading-[31.17px] font-medium font-ubuntu text-secondary mix-blend-normal">
                      <?= the_title(); ?>
                    </h3>
                  </div>
                  <p class="m-0 max-w-80 relative line-clamp-2 leading-[28.14px]">
                    <?= wp_strip_all_tags(get_the_content()); ?>
                  </p>
                  <span class="w-[108.2px] rounded leading-[18.1px] bg-whitesmoke-100 h-[28.1px] flex flex-col items-center justify-center">
                    <?= $title ?>
                  </span>
                </div>
                <a href="<?= the_permalink(); ?>" class="cursor-pointer text-[15.2px] leading-[25.97px] font-medium font-dm-sans text-tertialy [border:none] bg-pet-primary w-full rounded-3xs py-3 flex flex-col items-center justify-center hover:text-tertialy visited:text-tertialy">
                  LIRE PLUS
                </a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>

        <?php // Pagination
        $total_pages = $all_annonce_posts->max_num_pages;

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
            <div class="Petween-care-annonce-pagination flex flex-row items-start justify-start gap-[14px] text-center text-2xl text-secondary">
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
        <p class="text-black">No annonces or media found.</p>
      <?php endif; ?>


</section>
<?php
get_footer();
?>