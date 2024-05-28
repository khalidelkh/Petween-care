<?php
$args = array(
  'post_type'      => 'faq', // spécifie le type de post (custom post type)
  'posts_per_page' => 4,
);

$faqs = get_posts($args);

?>

<!-- * FAQ * -->

<div class="flex flex-col items-start justify-start gap-[20px] text-lg text-secondary font-ubuntu max-sm:ml-3 max-sm:mr-3">
  <?php
  if ($faqs) :
    foreach ($faqs as $faq) :
      $faq_id = $faq->ID;
  ?>
      <div class="faq-button overflow-hidden max-w-[570px] !pb-0 py-4 sm:py-6 px-5 sm:px-10 rounded-3xs bg-tertialy box-border flex flex-col items-center justify-center border-[1px] border-solid border-linen">
        <div class="flex flex-row items-center justify-between w-full gap-[10px]">
          <h6 class="relative text-inherit tracking-[-0.36px] leading-[21.6px] font-medium mix-blend-normal">
            <?= wp_strip_all_tags($faq->post_title) ?>
          </h6>

          <div style="
                    background-color: #385170;
                    -webkit-mask: url(<?= get_template_directory_uri() ?>/assets/images/icons/plus-icon.svg) no-repeat
                      center;
                    mask: url(<?= get_template_directory_uri() ?>/assets/images/icons/plus-icon.svg) no-repeat center;
                  " class="faq-icon w-3 h-3"></div>
        </div>

        <p style="max-height: 0px; overflow: hidden" class="faq-answer max-w-[491px] transition-all duration-200 w-full relative text-mini leading-[27px] font-dm-sans text-gray-100 mix-blend-normal">
          <?= wp_strip_all_tags($faq->post_content) ?>
        </p>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>