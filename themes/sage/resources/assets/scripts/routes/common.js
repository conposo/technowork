export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    String.prototype.capitalize = function() {
      return this.charAt(0).toUpperCase() + this.slice(1)
    }

    $('.next-slide').on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== '') {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
        }
        $('html,body').animate(
            { scrollTop: $(hash).offset().top-66 },
            { duration: 750, easing: 'easeOutCubic' }
        );
    });
  
    setTimeout(function(){
      $('body .loading').addClass('d-none');
    }, Math.floor(Math.random() * 550) + 1100);

    if( ! $('body').hasClass('home') ) {
      var h1_text = $('h1').text();
      var modified_heading_text = h1_text.split(' ');
      if(modified_heading_text) {
        var new_modified_heading_text = `<span>${modified_heading_text[0]}</span> ${modified_heading_text[modified_heading_text.length-1].capitalize()}`;
        $('h1').html(new_modified_heading_text);
      }
    }
    
    $(window).scroll(function() {
        var eTop = $('.tabs').offset().top;
        if( (eTop - $(window).scrollTop()) < 10 ) {
          $('.tabs').addClass('sticky-collapse');
          this.console.log('< 0', eTop - $(window).scrollTop());
        }
        if( (eTop - $(window).scrollTop()) > 10 ) {
          $('.tabs').removeClass('sticky-collapse');
          this.console.log('> 0', eTop - $(window).scrollTop());
        }
    });
    
  },
};
