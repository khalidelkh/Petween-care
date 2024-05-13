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
$date = get_field('date', $post->ID);
$subtitle = get_field('subtitle', $post->ID);

// Other two posts
$two_other_posts = array($posts[1], $posts[2]);
?>       
           <section
        class="self-stretch py-16 relative gap-[10px] text-left text-sm text-pet-primary font-myriad-pro"
      >
        <div
          class="max-w-6xl relative z-10 px-4 xl:px-0 mx-auto flex flex-col items-start justify-start gap-[68px]"
        >
          <div class="flex flex-col items-start justify-start gap-[6px]">
            <div class="flex flex-row items-center justify-start gap-[11px]">
              <img
                class="w-3.5 relative h-[13.1px] mix-blend-normal"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg"
              />

              <h6
                class="m-0 font-lato relative text-inherit tracking-[2.8px] leading-[30px] font-normal font-inherit mix-blend-normal"
              >
                BLOG POSTS
              </h6>
            </div>
            <h2
              class="m-0 relative text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu text-secondary mix-blend-normal"
            >
              Nos derniers articles
            </h2>
          </div>

          <div class="w-full">
            <div
              class="grid w-full grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center gap-12 text-gray-200 font-lato 2xl:gap-[76px]"
            >
              <div class="group flex flex-col items-start justify-start">
                <div
                  class="overflow-hidden max-w-[370px] h-64 max-h-[250px] relative"
                >
                  <img
                    class="w-full h-full object-cover rounded-t-xl"
                    alt=""
                    src="<?= $rp_featured_img_url ?>"
                  />

                  <span
                    style="clip-path: polygon(0 0, 100% 0, 80% 100%, 20% 100%)"
                    class="text-sm px-10 py-2 -rotate-90 text-white bg-pet-primary absolute top-1/2 -translate-y-1/2 left-4 -translate-x-1/2 p-2"
                    ><?= $date ?></span
                  >
                </div>

                <div
                  class="w-full p-7 max-w-[370px] shadow-[0px_10px_60px_rgba(0,_0,_0,_0.1)] rounded-t-none rounded-b-xl bg-tertialy flex flex-col items-center justify-center"
                >
                  <div
                    class="flex flex-col items-start justify-start gap-[36px]"
                  >
                    <div
                      class="flex flex-col items-start justify-start gap-[4px]"
                    >
                      <div
                        class="flex flex-row items-center justify-start gap-[8px]"
                      >
                        <img
                          class="w-3.5 relative h-3.5"
                          alt=""
                          src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-icon.svg"
                        />

                        <h5
                          class="m-0 relative text-inherit tracking-[-0.52px] leading-[14px] font-normal font-inherit mix-blend-normal"
                        >
                        <?= $recent_post->subtitle ?>
                        </h5>
                      </div>
                      <div
                        class="relative text-7xl tracking-[-0.52px] leading-[30px] font-medium font-ubuntu text-secondary mix-blend-normal"
                      >
                      <?=  $recent_post->post_title ?>
                      </div>
                    </div>
                    <div
                      class="flex flex-col items-start justify-start gap-[10px] text-mini text-gray-100 font-dm-sans"
                    >
                      <p class="m-0 max-w-[310px] relative leading-[27px]">
                      <?= wp_strip_all_tags($post->post_content) ?>
                      </p>
                      <button
                        class="cursor-pointer p-0 group-odd:bg-seashell group-odd:text-secondary group-even:bg-pet-primary group-even:text-white w-[153px] rounded-81xl h-[43px] flex flex-col items-center justify-center"
                      >
                        <span
                          class="relative text-sm leading-[24px] uppercase font-medium font-dm-sans text-left mix-blend-normal"
                        >
                          Lire Plus
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
                
              <?php foreach ($two_other_posts as $post) :

                $rp_featured_img_url = get_the_post_thumbnail_url($post->ID, 'full') ?: get_template_directory_uri() . "/assets/images/__tests__/blog-image.png";
                $date = get_field('date', $post->ID);
                $subtitle = get_field('subtitle', $post->ID);
              ?>
              <div class="group flex flex-col items-start justify-start">
              
                <div
                  class="overflow-hidden max-w-[370px] h-64 max-h-[250px] relative"
                >
                  <img
                    class="w-full h-full object-cover rounded-t-xl"
                    alt=""
                    src="<?= $rp_featured_img_url ?>"
                  />

                  <span
                    style="clip-path: polygon(0 0, 100% 0, 80% 100%, 20% 100%)"
                    class="text-sm px-10 py-2 -rotate-90 text-white bg-pet-primary absolute top-1/2 -translate-y-1/2 left-4 -translate-x-1/2 p-2"
                    ><?= $date ?></span
                  >
                </div>

                <div
                  class="w-full p-7 max-w-[370px] shadow-[0px_10px_60px_rgba(0,_0,_0,_0.1)] rounded-t-none rounded-b-xl bg-tertialy flex flex-col items-center justify-center"
                >
                  <div
                    class="flex flex-col items-start justify-start gap-[36px]"
                  >
                    <div
                      class="flex flex-col items-start justify-start gap-[4px]"
                    >
                      <div
                        class="flex flex-row items-center justify-start gap-[8px]"
                      >
                        <img
                          class="w-3.5 relative h-3.5"
                          alt=""
                          src="<?= get_template_directory_uri() ?>/assets/images/icons/discount-icon.svg"
                        />

                        <h5
                          class="m-0 relative text-inherit tracking-[-0.52px] leading-[14px] font-normal font-inherit mix-blend-normal"
                        >
                        <?= $post->subtitle ?>
                        </h5>
                      </div>
                      <div
                        class="relative text-7xl tracking-[-0.52px] leading-[30px] font-medium font-ubuntu text-secondary mix-blend-normal"
                      >
                      <?=  $post->post_title ?>
                      </div>
                    </div>
                    <div
                      class="flex flex-col items-start justify-start gap-[10px] text-mini text-gray-100 font-dm-sans"
                    >
                      <p class="m-0 max-w-[310px] relative leading-[27px]">
                      <?= wp_strip_all_tags($post->post_content) ?>
                      </p>
                      <button
                        class="cursor-pointer p-0 group-odd:bg-seashell group-odd:text-secondary group-even:bg-pet-primary group-even:text-white w-[153px] rounded-81xl h-[43px] flex flex-col items-center justify-center"
                      >
                        <span
                          class="relative text-sm leading-[24px] uppercase font-medium font-dm-sans text-left mix-blend-normal"
                        >
                          Lire Plus
                        </span>
                      </button>
                    </div>
                  </div>
                </div>
             
              </div>
              <?php endforeach; ?>
        </section>
          
         
          