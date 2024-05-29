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
    // * Get the current state of the clicked FAQ
    const answer = button.querySelector(".faq-answer");
    const isCurrentlyOpen = answer.style.overflow !== "hidden";

    // * Close all FAQs
    faqButtons.forEach((faqButton) => {
      const answer = faqButton.querySelector(".faq-answer");
      const icon = faqButton.querySelector(".faq-icon");

      icon.style.mask = "url(/wp-content/themes/petween-care-theme/assets/images/icons/plus-icon.svg) no-repeat center";
      icon.style.webkitMask = "url(/wp-content/themes/petween-care-theme/assets/images/icons/plus-icon.svg) no-repeat center";
      icon.style.backgroundColor = "#385170";

      faqButton.style.color = "#385170";
      answer.style.maxHeight = "0px";
      answer.style.overflow = "hidden";
      answer.style.marginTop = "0";
    });

    // * Toggle the clicked FAQ
    if (!isCurrentlyOpen) {
      button.style.color = "#f99d0b";
      const icon = button.querySelector(".faq-icon");
      icon.style.mask = "url(/wp-content/themes/petween-care-theme/assets/images/icons/minus-icon.svg) no-repeat center";
      icon.style.webkitMask = "url(/wp-content/themes/petween-care-theme/assets/images/icons/minus-icon.svg) no-repeat center";
      icon.style.backgroundColor = "#f99d0b";

      answer.style.opacity = "1";
      answer.style.maxHeight = answer.scrollHeight + "px";
      answer.style.overflow = "unset";
      answer.style.marginTop = "28px";
    }
  });
});


// document.addEventListener('DOMContentLoaded', function () {
//   var urlShare = encodeURIComponent(window.location.href);
//   var title = encodeURIComponent(document.title);
//   var descriptionMeta = document.querySelector('meta[name="description"]');
//   var description = descriptionMeta ? encodeURIComponent(descriptionMeta.getAttribute('content')) : '';

//   // URL de partage pour Facebook
//   var facebookShare = document.getElementById('facebook-share');
//   if (facebookShare) {
//     facebookShare.href = `https://www.facebook.com/sharer/sharer.php?u=${urlShare}&quote=${title}`;
//   }

//   // URL de partage pour Instagram (note : Instagram ne permet pas le partage via URL, mais on pourrait utiliser d'autres moyens)
//   var instagramShare = document.getElementById('instagram-share');
//   if (instagramShare) {
//     instagramShare.href = `https://www.instagram.com/?url=${urlShare}`;
//   }

//   // URL de partage pour TikTok (note : TikTok n'a pas de URL de partage standard, ce lien pourrait être modifié selon le comportement désiré)
//   var tiktokShare = document.getElementById('tiktok-share');
//   if (tiktokShare) {
//     tiktokShare.href = `https://www.tiktok.com/?url=${urlShare}`;
//   }

//   // URL de partage pour YouTube (note : YouTube n'a pas de URL de partage direct, ce lien pourrait être modifié selon le comportement désiré)
//   var youtubeShare = document.getElementById('youtube-share');
//   if (youtubeShare) {
//     youtubeShare.href = `https://www.youtube.com/results?search_query=${title}`;
//   }
// });
// $('#Demo').socialSharingPlugin({
//   urlShare: window.location.href,
//   description: $('meta[name=description]').attr('content'),
//   title: $('title').text()
// })
