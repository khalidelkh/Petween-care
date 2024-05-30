<?php get_header(); 
$tag = get_queried_object();
$tag_id = $tag->term_id;

// Configuration de la nouvelle requête pour définir le nombre de posts par page
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'paged' => $paged,
    'tag_id' => $tag_id
);
$custom_query = new WP_Query($args);
?>
<section class="self-stretch h-[396px] flex flex-col items-center justify-center gap-[4px]  bg-cover bg-no-repeat bg-[top] text-left text-53xl-1 text-tertialy font-ubuntu" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-news.png');">
  <h1 class="m-0 relative text-41xl sm:text-inherit tracking-[-1.44px] leading-[86.48px] font-medium font-inherit mix-blend-normal">
    ACTUALITÉS
  </h1>
  <span class="relative text-2xl-5 tracking-[-0.43px] leading-[25.79px] font-dm-sans mix-blend-normal">
    <?php if (function_exists('custom_breadcrumbs')) {
      custom_breadcrumbs();
    }
    ?></span>
</section>
<div class="container max-w-7xl relative z-10 px-4 xl:px-0 mx-auto flex flex-col items-start justify-start mb-[70px]">
    <h1><?php single_tag_title(); ?></h1>
    <?php if ($custom_query->have_posts()) : ?>
        <div class="post-list grid w-full grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-12 text-gray-200 font-lato 2xl:gap-[76px]">
            <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?> 
            <?php 
                // Récupérer la date pour chaque article
                $date = get_field('date');
                $formatted_post_date = strtoupper($date); 
                $subtitle = get_field('subtitle');
            ?>     
            <div class="w-full  max-w-[370px] shadow-[0px_10px_60px_rgba(0,_0,_0,_0.1)] rounded-t-xl rounded-b-xl bg-tertialy flex flex-col items-center justify-center">
              <div class="flex flex-col items-start justify-start gap-[36px]">
              <div class="overflow-hidden max-w-[670px] h-80 max-h-[250px] relative">

                <img class="w-[400px] h-full object-cover rounded-t-xl" alt="" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . "/assets/images/__tests__/blog-image.jpeg"; ?>" />

                <span style="clip-path: polygon(0 0, 100% 0, 80% 100%, 20% 100%)" class="text-sm px-10 py-2 -rotate-90 text-white bg-pet-primary absolute top-1/2 font-ubuntu -translate-y-1/2 left-4 -translate-x-1/2 p-2"><?= $formatted_post_date ?></span>
                </div>

                <div class="flex flex-col items-start justify-start gap-[4px] ml-8">
                  <div class="flex flex-row items-center justify-start gap-[8px]">
                    <img class="w-3.5 relative h-3.5" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-icon.svg" />

                    <h5 class="m-0 relative text-inherit tracking-[-0.52px] leading-[14px] font-normal font-inherit mix-blend-normal">
                      <?= esc_html($subtitle) ?>
                    </h5>
                  </div>
                  <div class="relative text-7xl tracking-[-0.52px] leading-[30px] font-medium font-ubuntu text-secondary mix-blend-normal">
                    <?= esc_html(get_the_title()) ?>
                  </div>
                </div>
                <div class="flex flex-col items-start justify-start gap-[10px] text-mini text-gray-100 font-dm-sans">
                  <p class="ml-8 max-w-[310px] relative leading-[27px]">
                    <?= esc_html(wp_strip_all_tags(get_the_content())) ?>
                  </p>
                  <a href="<?= esc_url(get_the_permalink()) ?>" class="cursor-pointer p-0 ml-8 mb-5 bg-pet-primary text-white w-[153px] rounded-81xl h-[43px] flex flex-col items-center justify-center">
                    <span class="relative text-sm leading-[24px] uppercase bg-pet-primary text-white font-medium font-dm-sans text-left mix-blend-normal">
                      Lire Plus
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
        </div>
        
        <?php
        // Pagination
        $total_pages = $custom_query->max_num_pages;

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
                <div class="Petween-care-pagination mt-10 flex flex-row items-center justify-center gap-[14px] ml-[500px] !m-0 w-full pt-[40px]">
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
        wp_reset_postdata(); ?>
    <?php else : ?>
        <p>Aucun article trouvé pour ce tag.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
