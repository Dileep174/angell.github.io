     
     $('.slider').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            pauseOnFocus: false,
            pauseOnHover: false,
            pauseOnDotsHover: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });


    //uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function () {
  var d = document,
    accordionToggles = d.querySelectorAll(".js-accordionTrigger"),
    setAria,
    setAccordionAria,
    switchAccordion,
    touchSupported = "ontouchstart" in window,
    pointerSupported = "pointerdown" in window;

  skipClickDelay = function (e) {
    e.preventDefault();
    e.target.click();
  };

  setAriaAttr = function (el, ariaType, newProperty) {
    el.setAttribute(ariaType, newProperty);
  };
  setAccordionAria = function (el1, el2, expanded) {
    switch (expanded) {
      case "true":
        setAriaAttr(el1, "aria-expanded", "true");
        setAriaAttr(el2, "aria-hidden", "false");
        break;
      case "false":
        setAriaAttr(el1, "aria-expanded", "false");
        setAriaAttr(el2, "aria-hidden", "true");
        break;
      default:
        break;
    }
  };
  //function
  switchAccordion = function (e) {
    console.log("triggered");
    e.preventDefault();
    var thisAnswer = e.target.parentNode.nextElementSibling;
    var thisQuestion = e.target;
    if (thisAnswer.classList.contains("is-collapsed")) {
      setAccordionAria(thisQuestion, thisAnswer, "true");
    } else {
      setAccordionAria(thisQuestion, thisAnswer, "false");
    }
    thisQuestion.classList.toggle("is-collapsed");
    thisQuestion.classList.toggle("is-expanded");
    thisAnswer.classList.toggle("is-collapsed");
    thisAnswer.classList.toggle("is-expanded");

    thisAnswer.classList.toggle("animateIn");
  };
  for (var i = 0, len = accordionToggles.length; i < len; i++) {
    if (touchSupported) {
      accordionToggles[i].addEventListener("touchstart", skipClickDelay, false);
    }
    if (pointerSupported) {
      accordionToggles[i].addEventListener(
        "pointerdown",
        skipClickDelay,
        false
      );
    }
    accordionToggles[i].addEventListener("click", switchAccordion, false);
  }
})();
