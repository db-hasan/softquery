/*--------------------------------------------------------------
  # Side bar menu visibility
  --------------------------------------------------------------*/
$(document).ready(function () {
  $('#menuButton').click(function () {
      $('#menuContainer').css('display', 'block');
  });

  $('#closeMenu').click(function () {
      $('#menuContainer').css('display', 'none');
  });
});


$("#banner").on("slide.bs.carousel", function (e) {
    var $nextSlide = $(e.relatedTarget);
    $nextSlide.find(".banner-fade-element").css("opacity", 0);
    $nextSlide.find(".banner-fade-down").css("transform", "translateY(-20px)");
    $nextSlide.find(".banner-fade-up").css("transform", "translateY(20px)");
    $nextSlide.find(".banner-fade-left").css("transform", "translateX(-20px)");
    $nextSlide.find(".banner-fade-right").css("transform", "translateX(20px)");
});

$("#banner").on("slid.bs.carousel", function (e) {
    var $currentSlide = $(e.relatedTarget);
    $currentSlide.find(".banner-fade-element").css("opacity", 1);
    $currentSlide.find(".banner-fade-down").css("transform", "translateY(0)");
    $currentSlide.find(".banner-fade-up").css("transform", "translateY(0)");
    $currentSlide.find(".banner-fade-left").css("transform", "translateX(0)");
    $currentSlide.find(".banner-fade-right").css("transform", "translateX(0)");
});

$(document).ready(function () {
    $(".carousel-item.active .banner-fade-element").css("opacity", 1);
    $(".carousel-item.active .banner-fade-down").css(
        "transform",
        "translateY(0)"
    );
    $(".carousel-item.active .banner-fade-up").css("transform", "translateY(0)");
    $(".carousel-item.active .banner-fade-left").css(
        "transform",
        "translateX(0)"
    );
    $(".carousel-item.active .banner-fade-right").css(
        "transform",
        "translateX(0)"
    );
});



/*--------------------------------------------------------------
  # Fade visibility
  --------------------------------------------------------------*/
$(document).ready(function () {
  function isInViewport(element) {
      var elementTop = $(element).offset().top;
      var elementBottom = elementTop + $(element).outerHeight();
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
      return elementBottom > viewportTop && elementTop < viewportBottom;
  }

  function animateOnScroll() {
      $(".fade-element").each(function () {
          if (isInViewport(this)) {
              $(this).css("opacity", 1);
              $(this).css("top", 0);
              $(this).css("left", 0);
          }
      });
  }

  $(window).on("scroll", animateOnScroll);
  $(window).on("resize", animateOnScroll);

  // Trigger animation on page load
  animateOnScroll();
});



/*--------------------------------------------------------------
  # Letter animation  on page load
  --------------------------------------------------------------*/
$(document).ready(function () {
  function applyFadeEffect(elementId) {
      var text = $("#" + elementId)
          .html()
          .split(" ");
      $("#" + elementId).html("");

      for (var i = 0; i < text.length; i++) {
          $("#" + elementId).append(
              '<h2 class="word-fade-element">' + text[i] + "</h2> "
          );
      }

      let observer = new IntersectionObserver(
          (entries) => {
              entries.forEach((entry) => {
                  if (entry.isIntersecting) {
                      $("#" + elementId + " .word-fade-element").each(function (index) {
                          $(this)
                              .delay(120 * index)
                              .queue(function (next) {
                                  $(this).addClass("word-fade-top");
                                  next();
                              });
                      });
                      observer.unobserve(entry.target); 
                      // Stop observing once the animation has started
                  }
              });
          },
          { threshold: 0.5 }
      );

      observer.observe(document.getElementById(elementId));
  }
  applyFadeEffect("fade-text");
  applyFadeEffect("fade-text-2");
  applyFadeEffect("fade-text-3");
  applyFadeEffect("fade-text-4");
  applyFadeEffect("fade-text-5");
});



/*--------------------------------------------------------------
  # Portfolio tab Content
  --------------------------------------------------------------*/
$(document).ready(function () {
  // Initially show all cards
  $(".col-md-3").show();

  // When a filter button is clicked
  $("#filter-buttons li").click(function () {
      var filter = $(this).data("filter");
      if (filter === "all") {
          $(".col-md-3").show(); // Show all cards
      } else {
          $(".col-md-3").hide(); // Hide all cards
          $(".col-md-3[data-filter='" + filter + "']").show(); 
          // Show cards with matching filter
      }
      // Update active class
      $("#filter-buttons li").removeClass("active");
      $(this).addClass("active");
  });
});
