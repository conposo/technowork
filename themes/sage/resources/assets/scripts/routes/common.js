export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('.next-slide').on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== '') {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;
        }

        $('html,body').animate(
            {
                scrollTop: $(hash).offset().top-66,
            },
            {
                duration: 750, easing: 'easeOutCubic',
            }
        );
    });
  },
};
