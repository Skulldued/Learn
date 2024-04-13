<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script>
      document.addEventListener("DOMContentLoaded", function () {
        const testimonials = document.querySelectorAll(".testimonial");
        let currentIndex = 0;

        function showTestimonial(index) {
         
          testimonials.forEach((testimonial) => {
            testimonial.classList.remove("active");
          });
         
          testimonials[index].classList.add("active");
        }

        document
          .getElementById("prevBtn")
          .addEventListener("click", function () {
            currentIndex =
              currentIndex === 0 ? testimonials.length - 1 : currentIndex - 1;
            showTestimonial(currentIndex);
          });

        document
          .getElementById("nextBtn")
          .addEventListener("click", function () {
            currentIndex =
              currentIndex === testimonials.length - 1 ? 0 : currentIndex + 1;
            showTestimonial(currentIndex);
          });

       
        showTestimonial(0);
      });
    </script> -->

<script>
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>