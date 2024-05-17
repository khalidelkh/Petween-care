<?php
/* Template Name: Solutions*/
get_header();
?>
<!-- * ----- Hero ----- * -->
<section class="self-stretch min-h-[396px] flex flex-col items-center justify-center gap-[4px] bg-cover bg-no-repeat bg-[top] text-left text-[72.1px] text-tertialy font-ubuntu" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/pages/solutions/hero.png');">
  <h1 class="m-0 relative mb-1 text-[60px] sm:text-inherit tracking-[-1.44px] leading-[86.48px] font-medium font-inherit mix-blend-normal">
    SOLUTIONS
  </h1>
  <h6 class="m-0 relative text-[21.5px] tracking-[-0.43px] leading-[25.79px] font-normal font-dm-sans mix-blend-normal">
  <?php if (function_exists('custom_breadcrumbs')) {
        custom_breadcrumbs();
    }
  ?>
  </h6>
</section>


<section class="self-stretch px-4 py-20 xl:py-40 flex flex-col items-center justify-end relative text-center">
  <div class="flex max-w-6xl mx-auto flex-col items-start justify-start gap-28 xl:gap-36 2xl:gap-[213px] z-[9]">
    <!-- * ---- Sa santé, son poids ----- * -->
    <div class="relative w-full flex flex-col lg:flex-row items-center justify-start gap-[83px]">
      <div class="z-10 flex flex-col items-start justify-start gap-[80px]">
        <div class="flex flex-col items-start justify-start gap-[54px]">
          <div class="flex flex-col items-start justify-start gap-[8px]">
            <div class="flex flex-row items-center justify-start gap-[10px]">
              <img class="w-3.5 relative h-[13.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg" />

              <h6 class="m-0 relative text-inherit tracking-[2.8px] leading-[30px] font-medium font-inherit mix-blend-normal">
                CE QUE NOUS OFFRONS
              </h6>
            </div>
            <h2 class="m-0 relative text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu text-secondary text-left mix-blend-normal">
              Sa santé, son poids
            </h2>
          </div>
          <div class="flex flex-col items-start justify-start gap-[41px] text-left text-lg text-gray-100">
            <p class="m-0 max-w-[500px] relative leading-[32px]">
              <span class="font-medium">Suivez ses petits bobos et sa courbe de poids.</span>

              <span class="">Mauris vehicula sem sed mi semper, ut vestibulum elit.
                Cras varius elit maximus sodales bibendum. Mauris vehicula
                sem sed mi semper, ut vestibulum elit. Cras varius elit
                maximus sodales bibendum. Integer id arcu libero. Etiam
                sed dolor id justo rhoncus in nec purus. Integer id arcu
                libero. Etiam sed dolor id justo rhoncus in nec
                purus.</span>
            </p>
            <div class="flex flex-row items-start justify-start gap-[58px] text-darkslategray-100">
              <div class="flex flex-col gap-4 items-start justify-start">
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <span class="relative font-medium mix-blend-normal">
                    Nsectetur cing elit.
                  </span>
                </div>
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <span class="relative font-medium mix-blend-normal">
                    Suspe se suscipit leo.
                  </span>
                </div>
              </div>
              <div class="flex flex-col gap-4 items-start justify-start">
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <span class="relative font-medium mix-blend-normal">
                    You’re going passage.
                  </span>
                </div>
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <span class="relative font-medium mix-blend-normal">
                    Lorem ipsum non tend.
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="/contact" class="cursor-pointer [border:none] p-0 bg-pet-primary w-[209.8px] rounded-81xl h-[57.9px] flex flex-col items-center justify-center">
          <div class="w-[140px] relative text-base leading-[16px] font-medium font-dm-sans text-tertialy text-center inline-block h-4 shrink-0 mix-blend-normal">
            Contactez-nous
          </div>
        </a>
      </div>

      <div class="flex flex-col items-center justify-start text-left text-31xl text-gray-200 font-ubuntu">
        <img class="max-w-[590px] max-h-[623px] w-full h-full object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/pages/solutions/daily-care-pets.png" />

        <div class="max-w-[348px] px-4 w-full min-h-[135px] flex flex-row items-center justify-center gap-[58px] shadow-xl rounded-xl bg-cover bg-no-repeat bg-[top] mt-[-74px]" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-border-dashed.png');">
          <div class="relative tracking-[-1px] mix-blend-normal">
            <p class="m-0 font-bold ">180</p>
            <p class="m-0 text-xl font-dm-sans">Clients Satisfait</p>
          </div>
          <img class="w-16 h-16 object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/pet-care-icon-sm.svg" />
        </div>
      </div>

      <img class="absolute hidden xl:block h-52 z-0 -right-[30%]" src="<?= get_template_directory_uri() ?>/assets/images/dog-transparent.png" alt="" />
    </div>

    <!-- * ---- Alimentation & budget ----- * -->
    <div class="relative flex flex-col lg:flex-row items-center justify-start w-full gap-[67px] text-left text-31xl text-secondary font-ubuntu">
      <img class="absolute -right-[10%] top-0 h-32" src="<?= get_template_directory_uri() ?>/assets/images/icons/dog-bone.png" alt="" />
      <div class="flex flex-col items-center justify-start">
        <img class="w-full h-full max-w-[600px] max-h-[623px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/pages/solutions/pet-food-image.png" />

        <div class="max-w-[348px] w-full px-4 min-h-[135px] flex flex-row items-center justify-center gap-[58px] rounded-xl shadow-xl bg-cover bg-no-repeat bg-[top] mt-[-74px]" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-border-dashed.png');">
          <div class="relative tracking-[-1px] mix-blend-normal">
            <p class="font-bold mb-0">180</p>
            <p class="text-xl font-dm-sans text-gray-200">
              Clients Satisfait
            </p>
          </div>
          <img class="w-16 h-16 object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/pet-care-icon-sm.svg" />
        </div>
      </div>

      <div class="flex flex-col items-start justify-start gap-[80px] text-center text-sm text-pet-primary font-dm-sans">
        <div class="flex flex-col items-start justify-start gap-[41px]">
          <div class="flex flex-col items-start justify-start gap-[8px]">
            <div class="flex flex-row items-center justify-start gap-[10px]">
              <img class="w-3.5 relative h-[13.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg" />

              <h6 class="m-0 relative text-inherit tracking-[2.8px] leading-[30px] font-medium font-inherit mix-blend-normal">
                CE QUE NOUS OFFRONS
              </h6>
            </div>
            <h2 class="m-0 relative xl:whitespace-nowrap text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu text-secondary text-left mix-blend-normal">
              Alimentation & budget
            </h2>
          </div>
          <div class="flex flex-col items-start justify-start gap-[22px] text-left text-lg text-gray-100">
            <p class="m-0 max-w-[500px] relative leading-[32px] [display:-webkit-inline-box] overflow-hidden text-ellipsis [-webkit-line-clamp:7] [-webkit-box-orient:vertical] mix-blend-normal">
              Optimiser son budget commence par comprendre ses dépenses.
              <br />
              Mauris vehicula sem sed mi semper, ut vestibulum elit. Cras
              varius elit maximus sodales bibendum. Mauris vehicula sem
              sed mi semper, ut vestibulum elit. Cras varius elit maximus
              sodales bibendum. Integer id arcu libero. Etiam sed dolor id
              justo rhoncus in nec purus. Integer id arcu libero. Etiam
              sed dolor id justo rhoncus in nec purus.
            </p>
            <div class="flex flex-row items-start justify-start gap-[58px] text-darkslategray-100">
              <div class="flex flex-col items-start justify-start">
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <div class="relative leading-[34px] font-medium mix-blend-normal">
                    Nsectetur cing elit.
                  </div>
                </div>
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <div class="relative leading-[34px] font-medium mix-blend-normal">
                    Suspe se suscipit leo.
                  </div>
                </div>
              </div>
              <div class="flex flex-col items-start justify-start">
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <div class="relative leading-[34px] font-medium mix-blend-normal">
                    You’re going passage.
                  </div>
                </div>
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <div class="relative leading-[34px] font-medium mix-blend-normal">
                    Lorem ipsum non tend.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="/contact" class="cursor-pointer [border:none] p-0 bg-pet-primary w-[209.8px] rounded-81xl h-[57.9px] flex flex-col items-center justify-center">
          <span class="w-[140px] relative text-base leading-[16px] font-medium font-dm-sans text-tertialy text-center inline-block h-4 shrink-0 mix-blend-normal">
            Contactez-nous
          </span>
        </a>
      </div>
    </div>

    <!-- * ----- Traitements & bilans ------  * -->
    <div class="flex flex-col lg:flex-row items-center justify-start gap-[83px]">
      <div class="flex flex-col items-start justify-start gap-[80px]">
        <div class="flex flex-col items-start justify-start gap-[54px]">
          <div class="flex flex-col items-start justify-start gap-[8px]">
            <div class="flex flex-row items-center justify-start gap-[10px]">
              <img class="w-3.5 relative h-[13.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg" />

              <h6 class="m-0 relative text-inherit tracking-[2.8px] leading-[30px] font-medium font-inherit mix-blend-normal">
                CE QUE NOUS OFFRONS
              </h6>
            </div>
            <h2 class="m-0 relative text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu text-secondary text-left mix-blend-normal">
              Traitements & bilans
            </h2>
          </div>

          <div class="flex flex-col items-start justify-start gap-[41px] text-left text-lg text-gray-100">
            <p class="m-0 max-w-[500px] relative leading-[32px]">
              Suivez ses petits bobos et sa courbe de poids. Mauris
              vehicula sem sed mi semper, ut vestibulum elit. Cras varius
              elit maximus sodales bibendum. Mauris vehicula sem sed mi
              semper, ut vestibulum elit. Cras varius elit maximus sodales
              bibendum. Integer id arcu libero. Etiam sed dolor id justo
              rhoncus in nec purus. Integer id arcu libero. Etiam sed
              dolor id justo rhoncus in nec purus.
            </p>
            <div class="flex flex-row items-start justify-start gap-[58px] text-darkslategray-100">
              <div class="flex flex-col gap-3 items-start justify-start">
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <div class="relative font-medium mix-blend-normal">
                    Nsectetur cing elit.
                  </div>
                </div>
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <div class="relative font-medium mix-blend-normal">
                    Suspe se suscipit leo.
                  </div>
                </div>
              </div>
              <div class="flex flex-col gap-3 items-start justify-start">
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <div class="relative font-medium mix-blend-normal">
                    You’re going passage.
                  </div>
                </div>
                <div class="flex flex-row items-center justify-start gap-[9px]">
                  <span class="w-5 h-2 bg-pet-primary"></span>

                  <div class="relative font-medium mix-blend-normal">
                    Lorem ipsum non tend.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="/contact" class="cursor-pointer [border:none] p-0 bg-pet-primary w-[209.8px] rounded-81xl h-[57.9px] flex flex-col items-center justify-center">
          <div class="w-[140px] relative text-base leading-[16px] font-medium font-dm-sans text-tertialy text-center inline-block h-4 shrink-0 mix-blend-normal">
            Contactez-nous
          </div>
        </a>
      </div>

      <div class="flex flex-col items-center justify-start text-left text-31xl text-secondary font-ubuntu">
        <img class="max-w-[590px] max-h-[623px] w-full h-full object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/pages/solutions/pet-treatments.png" />
          
        
        <div class="max-w-[348px] w-full min-h-[135px] flex flex-row items-center justify-center gap-[58px] bg-cover bg-no-repeat bg-[top] mt-[-74px]" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-border-dashed.png');">
          <div class="relative tracking-[-1px] mix-blend-normal">
            <p class="m-0 font-bold">180</p>
            <p class="m-0 text-xl font-dm-sans text-gray-200">
              Clients Satisfait
            </p>
          </div>
          <img class="w-16 h-16 object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/pet-care-icon-sm.svg" />
        </div>
      </div>
    </div>

    <!-- * FAQs * -->

    <div class="flex flex-col lg:flex-row items-start justify-between gap-14 text-left">
      <div class="flex flex-col items-start justify-start gap-[41px]">
        <div class="flex flex-col items-start justify-start gap-[25px]">
          <div class="flex flex-col items-start justify-start gap-[6px]">
            <div class="flex flex-row items-center justify-start gap-[11px]">
              <img class="w-3.5 relative h-[13.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg" />

              <h6 class="m-0 relative font-dm-sans font-medium text-inherit tracking-[2.8px] leading-[30px] font-inherit mix-blend-normal">
                FREQUENTLY QUESTION
              </h6>
            </div>
            <h2 class="m-0 relative text-[40px] sm:text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu mix-blend-normal">
              Pourquoi <br />
              <span class="text-secondary">utiliser Petween Care </span>
              <span class="text-pet-primary">?</span>
            </h2>
          </div>
          <p class="m-0 max-w-[488px] relative text-mini leading-[27px] font-dm-sans text-gray-100">
            Mauris vehicula sem sed mi semper, ut vestibulum elit. Cras
            varius elit maximus sodales Mauris vehicula sem sed mi semper,
            ut vestibulum elit. Cras varius elit maximus sodales bibendum.
            Integer id arcu libero. Etiam sed dolor id justo rhoncus in
            nec purus. bibendum. Integer id arcu libero. Etiam sed dolor
            id justo rhoncus in nec purus.
          </p>
        </div>
        <button class="cursor-pointer [border:none] text-tertialy p-0 bg-pet-primary w-[165px] rounded-81xl h-[43px] flex flex-col items-center justify-center">
          COMMENÇER
        </button>
      </div>

      <!-- * FAQ * -->
      <?php get_template_part('templates-sections/section-faq'); ?>

    </div>
  </div>
  </div>
</section>
<!-- * ---- Connectez-vous à votre espace privé ---- * -->
<section class="self-stretch min-h-[617px] py-10 px-5 flex flex-col items-start justify-center box-border relative bg-cover bg-no-repeat bg-[top] text-[60px] text-tertialy font-ubuntu" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care-theme/assets/images/bgs/bg-paw-xl.png');">
  <div class="max-w-6xl flex gap-y-10 flex-col lg:flex-row items-center mx-auto w-full">
    <div class="">
      <div class="flex flex-col items-start justify-start gap-[43px] z-[0] mb-5">
        <h2 class="m-0 relative text-[40px] sm:text-inherit tracking-[-1.2px] sm:leading-[72px] font-medium font-inherit mix-blend-normal">
          <p class="m-0 xl:whitespace-nowrap">Connectez-vous</p>
          <p class="m-0 xl:whitespace-nowrap">à votre espace privé :</p>
        </h2>
        <p class="m-0 max-w-[563.8px] relative text-base leading-[27px] font-dm-sans mix-blend-normal">
          Pour cela vous devez créer un compte. Après validation de votre
          adresse e-mail, vous pourrez accéder à votre tableau de bord. Il
          ne vous reste plus qu’à remplir au besoin les informations de
          vos animaux. Progressivement vous verrez votre tableau de bord
          s’enrichir et afficher des synthèses. N’oubliez pas, les tutos
          et la communauté sont là aussi pour vous aider.
        </p>
      </div>
      <div class="flex flex-row flex-wrap items-start justify-start gap-[23px] z-[1]">
        <button class="cursor-pointer [border:none] p-0 bg-secondary w-[165px] rounded-81xl h-[43px] flex flex-col items-center justify-center">
          <div class="relative text-sm leading-[24px] uppercase font-medium font-dm-sans text-tertialy text-left mix-blend-normal">
            Connexion
          </div>
        </button>
        <button class="cursor-pointer p-0 bg-tertialy w-[207px] rounded-81xl box-border h-[45px] flex flex-col items-center justify-center border-[2px] border-solid border-secondary">
          <div class="relative text-sm leading-[24px] font-medium font-dm-sans text-secondary text-left mix-blend-normal">
            FORUM PRIVÉ
          </div>
        </button>
      </div>
    </div>

    <img class="w-full h-full lg:-mt-14 -ml-18 max-w-[811px] max-h-[531px] 2xl:max-w-[911px] 2xl:max-h-[631px] object-contain lg:object-cover z-[2]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/pages/home/tablette.png" />
  </div>
</section>
<!-- * ---- Nos derniers articles ---- * -->
<?php get_template_part('templates-sections/section-articles'); ?>



<?php
get_footer();
?>