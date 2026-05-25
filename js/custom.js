

jQuery(document).ready(function ($) {
  $(".menu-item-has-children").prepend("<span class='plus'>+</span><span class='minus'>-</span>");
  $(".plus").click(function () {
    $(".menu-item-has-children").removeClass("open");
    $(this).parent().addClass("open");
  });
  $(".minus").click(function () {
    $(this).parent().removeClass("open");
  });
  $(".menu-button").click(function () {
    $(".menu-item-has-children").removeClass("open");
    $(this).parent().toggleClass("tadaa");
  });




  // Карусель woo категорий на главной slick slider


  $('.category-carousel-home').slick({
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 6,
    swipeToSlide: true,
    prevArrow: '<img src="/wp-content/uploads/2023/02/arrow-up.svg" class="arrow-up-home">',
    nextArrow: '<img src="/wp-content/uploads/2023/02/arrow-down.svg" class="arrow-down-home">',
    responsive: [{
      breakpoint: 576,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 4,
      }
    }]
  });


  // const parent = document.getElementsByClassName('.ps-show');
  // const child = document.getElementsByClassName('.lmp_load_more_button');
  // parent.appendChild(child);

});


// Галерея изображений начало


const imageGrid = document.querySelector(".image-grid");

if (imageGrid) {
  const links = imageGrid.querySelectorAll("a");
  const imgs = imageGrid.querySelectorAll("img");
  const lightboxModal = document.getElementById("lightbox-modal");
  const bsModal = new bootstrap.Modal(lightboxModal);
  const modalBody = document.querySelector(".modal-body .container-fluid");

  for (const link of links) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const currentImg = link.querySelector("img");
      const lightboxCarousel = document.getElementById("lightboxCarousel");
      if (lightboxCarousel) {
        const parentCol = link.parentElement.parentElement;
        const index = [...parentCol.parentElement.children].indexOf(parentCol);
        const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
        bsCarousel.to(index);
      } else {
        createCarousel(currentImg);
      }
      bsModal.show();
    });
  }

  function createCarousel(img) {
    const markup = `
    <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
      <div class="carousel-inner">
        ${createSlides(img)}
      </div> 
      <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    `;

    modalBody.innerHTML = markup;
  }

  function createSlides(img) {
    let markup = "";
    const currentImgSrc = img.getAttribute("src");

    for (const img of imgs) {
      const imgSrc = img.getAttribute("src");
      const imgAlt = img.getAttribute("alt");
      const imgCaption = img.getAttribute("data-caption");

      markup += `
    <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
      <img src=${imgSrc} alt=${imgAlt}>
      ${imgCaption ? createCaption(imgCaption) : ""}
    </div>
    `;
    }

    return markup;
  }

  function createCaption(caption) {
    return `<div class="carousel-caption">
     <p class="m-0">${caption}</p>
    </div>`;
  }

}

// Галерея изображений конец