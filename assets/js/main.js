const menuButton = document.querySelector(".menu-button");
const menu = document.querySelector(".mobile-menu");

menuButton.addEventListener("click", () => {
  if (menu.style.opacity === "1") {
    menu.style.opacity = "0";
    menu.style.pointerEvents = "none";
  } else {
    menu.style.opacity = "1";
    menu.style.pointerEvents = "all";
  }
});

// * FAQs
const faqButtons = document.querySelectorAll(".faq-button");

faqButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // * Close all other faqs
    faqButtons.forEach((faqButton) => {
      const answer = faqButton.querySelector(".faq-answer");
      const icon = faqButton.querySelector(".faq-icon");

      icon.style.mask = "url(<?= get_template_directory_uri() ?>/assets/images/icons/plus-icon.svg) no-repeat center";
      icon.style.mask["-webkit-mask"] ="url(<?= get_template_directory_uri() ?>/assets/images/icons/plus-icon.svg) no-repeat center";
      icon.style.backgroundColor = "#385170";

      faqButton.style.color = "#385170";
      answer.style.maxHeight = "0px";
      answer.style.overflow = "hidden";
      answer.style.marginTop = "0";
    });

    const answer = button.querySelector(".faq-answer");

    button.style.color = "#f99d0b";
    const icon = button.querySelector(".faq-icon");
    icon.style.mask = "url(<?= get_template_directory_uri() ?>/assets/images/icons/minus-icon.svg) no-repeat center";
    icon.style.mask["-webkit-mask"] ="url(<?= get_template_directory_uri() ?>/assets/images/icons/minus-icon.svg) no-repeat center";
    icon.style.backgroundColor = "#f99d0b";

    answer.style.opacity = "1";
    answer.style.maxHeight = answer.scrollHeight + "px";
    answer.style.overflow = "unset";
    answer.style.marginTop = "28px";
  });
});
