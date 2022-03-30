createOffsets();
window.addEventListener("resize", createOffsets);

function createOffsets() {
  const sectionWithLeftOffset =  jQuery(".section-with-left-offset ")

  console.log(sectionWithLeftOffset);
  const sectionWithLeftOffsetCarouselWrapper = jQuery(
    ".carousel-wrapper"
  );
  const sectionWithRightOffset = jQuery(
    ".section-with-right-offset"
  );
  const sectionWithRightOffsetCarouselWrapper = jQuery(
    ".section-with-right-offset .carousel-wrapper"
  );
  const offset = (window.innerWidth - 1100) / 2;
  const mqLarge = window.matchMedia("(min-width: 1200px)");

  if (sectionWithLeftOffset && mqLarge.matches) {
    sectionWithLeftOffsetCarouselWrapper.css('margin-left',offset + "px");
  } else {
    sectionWithLeftOffsetCarouselWrapper.css('margin-left',0);
  }

  if (sectionWithRightOffset && mqLarge.matches) {
    sectionWithRightOffsetCarouselWrapper.css('margin-right',offset + "px");
  } else {
    sectionWithRightOffsetCarouselWrapper.css('margin-right',0);
  }
}
