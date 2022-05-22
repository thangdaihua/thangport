<footer class="footer bg-dark dark-mode pt-3 pb-4 pb-lg-5">
    <div class="container text-center pt-lg-3">
        <div class="navbar-brand justify-content-center text-dark mb-2 mb-lg-4">
            <img src="./assest/img/logo.svg" class="me-2" width="60" alt="Silicon">
            <span class="fs-4">2T portfolio</span>
        </div>
        <div>
            <div class="footer-subscribe-card">
                <div class="mg-bottom-16px ft">
                    <div class="text-300 bold color-neutral-100 mb-2 mb-lg-4">Theo dõi mình trên mạng xã hội</div>
                    <div class="sns">
                        <a target="_blank" href="https://www.facebook.com/thangdesignuiux"> <span
                                class="icon-Facebook"></span></a>
                        <a target="_blank" href="https://www.behance.net/thngha1"> <span
                                class="icon-behance"></span></a>
                        <a target="_blank" href="https://www.linkedin.com/in/thangdaihua/"> <span
                                class="icon-linkedin"></span></a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</footer>


<script src="assest/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assest/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="./assest/vendor/vanilla-tilt/dist/vanilla-tilt.min.js"></script>
<script src="assest/vendor/parallax-js/dist/parallax.min.js"></script>
<script src="assest/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assest/vendor/rellax/rellax.min.js"></script>
<script src="assest/vendor/swiper/swiper-bundle.min.js"></script>
<script src="./assest/vendor/img-comparison-slider/dist/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"> </script>


<!-- Main Theme Script -->
<script src="./assest/js/theme.min.js"></script>
<script>
let modalId = $('#image-gallery');

$(document)
    .ready(function() {

        loadGallery(true, 'a.thumbnail');

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
                .show();
            if (counter_max === counter_current) {
                $('#show-next-image')
                    .hide();
            } else if (counter_current === 1) {
                $('#show-previous-image')
                    .hide();
            }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */

        function loadGallery(setIDs, setClickAttr) {
            let current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image')
                .click(function() {
                    if ($(this)
                        .attr('id') === 'show-previous-image') {
                        current_image--;
                    } else {
                        current_image++;
                    }

                    selector = $('[data-image-id="' + current_image + '"]');
                    updateGallery(selector);
                });

            function updateGallery(selector) {
                let $sel = selector;
                current_image = $sel.data('image-id');
                $('#image-gallery-title')
                    .text($sel.data('title'));
                $('#image-gallery-image')
                    .attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]')
                    .each(function() {
                        counter++;
                        $(this)
                            .attr('data-image-id', counter);
                    });
            }
            $(setClickAttr)
                .on('click', function() {
                    updateGallery($(this));
                });
        }
    });

// build key actions
$(document)
    .keydown(function(e) {
        switch (e.which) {
            case 37: // left
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                    $('#show-previous-image')
                        .click();
                }
                break;

            case 39: // right
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                    $('#show-next-image')
                        .click();
                }
                break;

            default:
                return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
    });
</script>
<script>
window.onscroll = function() {
    myFunction()
};

var header = document.getElementById("sidebar");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
</script>
</body>

</html>