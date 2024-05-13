<?php
/* Template Name: Contact*/
get_header();
?>
      <!-- * ----- Hero ----- * -->
      <section
        class="self-stretch h-[396px] px-5 flex flex-col items-center justify-center gap-[4px] bg-cover bg-no-repeat bg-[top] text-left text-53xl-1 text-tertialy font-ubuntu" style="background-image: url('https://petween-care.developpement.top/wp-content/themes/petween-care/assets/images/bgs/bg-news.png');"
      >
        <h1
          class="m-0 uppercase relative text-center text-41xl sm:text-inherit tracking-[-1.44px] leading-[86.48px] font-medium font-inherit mix-blend-normal"
        >
          Contact
        </h1>
        <span
          class="relative text-2xl-5 tracking-[-0.43px] leading-[25.79px] font-dm-sans whitespace-pre-wrap mix-blend-normal"
          >HOME - SERVICES</span
        >
      </section>
            <!-- * ---- Main ----- * -->
            <section
        class="w-full px-4 xl:px-0 py-32 flex flex-col items-center justify-center relative gap-[69px] text-center text-sm text-pet-primary font-myriad-pro"
      >
        <img
          class="max-w-[883px] !m-[0] absolute top-[67px] left-[1037px] h-[1443px] object-cover z-[0]"
          alt=""
          src="<?= get_template_directory_uri() ?>/assets/images/paw-large.png"
        />

        <div class="flex flex-col items-center justify-start gap-[16px] z-[1]">
          <div class="flex flex-row items-center justify-start gap-[10px]">
            <img
              class="w-3.5 relative h-[13.1px] mix-blend-normal"
              alt=""
              src="<?= get_template_directory_uri() ?>/assets/images/dog-icon-sm.svg"
            />

            <h6
              class="m-0 relative font-lato text-inherit tracking-[2.8px] leading-[30px] font-normal font-inherit mix-blend-normal"
            >
              ENTREZ EN CONTACT
            </h6>
          </div>
          <h2
            class="m-0 relative text-31xl tracking-[-1px] leading-[60px] font-medium font-ubuntu text-secondary text-left mix-blend-normal"
          >
            N'hésitez pas à nous contactez
          </h2>
        </div>
        <form
          class="flex w-full flex-col items-center justify-start gap-[24px] z-[2] text-left text-gray-200 font-dm-sans"
        >
          <div
            class="grid max-w-xl w-full grid-cols-1 sm:grid-cols-2 gap-[38px]"
          >
            <input
              class="outline-none rounded-3xs bg-seashell h-[58px] py-0 pr-0 pl-[26px] box-border"
              placeholder="Votre Nom"
            />

            <input
              class="outline-none rounded-3xs bg-seashell h-[58px] py-0 pr-0 pl-[26px] box-border"
              placeholder="Votre Prénom"
            />

            <input
              class="outline-none font-lato rounded-3xs bg-seashell h-[58px] py-0 pr-0 pl-[26px] box-border"
              placeholder="Votre E-mail"
            />

            <input
              class="outline-none rounded-3xs bg-seashell h-[58px] py-0 pr-0 pl-[26px] box-border"
              placeholder="Objet"
            />
            <textarea
              placeholder="Votre message"
              rows="4"
              cols="50"
              class="w-full outline-none sm:col-span-2 rounded-3xs bg-seashell h-[168px] py-5 px-[26px]"
            >
            </textarea>
          </div>
          <button
            class="cursor-pointer [border:none] p-0 bg-pet-primary w-[164px] text-base leading-[16px] font-medium font-dm-sans text-tertialy rounded-81xl h-[54px] flex flex-col items-center justify-center"
          >
            ENVOYEZ
          </button>
        </form>
  
            </section>

<?php
get_footer();
?>