<?php include "assest/ghead.php"; ?>
<title>Hai Thang Portfolio</title>
<?php include "assest/gheader.php" ?>
<section class="position-relative overflow-hidden py-4 mb-3">
    <div class="container pt-lg-3">
        <div class="row flex-lg-nowrap">
            <div class="col-lg-6 col-xl-5 text-center position-relative text-lg-start pt-5 mt-xl-4">
                <img src="./assest/img/landing/hero-bg.png" class="position-absolute top-50 translate-middle-y ms-lg-n4"
                    width="866" alt="Background shapes">
                <h1 class="display-4 pt-5 pb-2 pb-lg-3 mt-2 mt-lg-5">Hai Thang Portfolio</h1>
                <div class="position-relative zindex-5">
                    <h3 class="mb-2 mb-lg-3">UI/UX - Product design</h3>
                    <p class="fs-lg mb-2 mb-lg-3">Hế lô anh em, mình là Hai Thắng. Hiện tại mình đang là UI/UX designer. Ngoài công việc làm thiết kế thì mình còn mê nhạc, mê đàn, mê vẽ và mê làm
                        “màu”.</p>
                    <div class="d-flex flex-column flex-sm-row">
                        <a href="portfolio.php" class="btn btn-primary shadow-primary btn-lg me-sm-3 me-xl-4 mb-3">Coi đầy đủ thông tin của mình</a>
                        <a href="allUiShots.php" class="btn btn-outline-primary btn-lg mb-3">
                            Coi mấy cái mình làm
                        </a>
                    </div>
                    <div class="ppt-2 mt-xl-2">
                        <h6 class="pt-xl-3 pb-1 pb-lg-1">Xem mình làm trò trên mạng xã hội</h6>
                        <div class="d-flex justify-content-center justify-content-lg-start mx-xl-n2">
                            <div class="sns">
                                <a target="_blank" href="https://www.facebook.com/thangdesignuiux"> <span
                                        class="icon-Facebook" style="color: #b4b7c9;" ></span>  </a>
                                <a target="_blank" href="https://www.behance.net/thngha1"> <span
                                        class="icon-behance"style="color: #b4b7c9;"></span> </a>
                                <a target="_blank" href="https://www.linkedin.com/in/thangdaihua/"> <span
                                        class="icon-linkedin"style="color: #b4b7c9;"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Layer parallax -->
            <div class="parallax mt-4 ms-4 me-lg-0 ms-lg-n5 ms-xl-n3 mt-lg-n4">
                <div class="parallax-layer" data-depth="0.1">
                    <img src="assest/img/landing/saas-1/hero/layer01.png" width="1416" alt="Layer">
                </div>
                <div class="parallax-layer zindex-2" data-depth="0.15">
                    <img src="assest/img/landing/saas-1/hero/layer02.png" alt="Layer">
                </div>
                <div class="parallax-layer zindex-2" data-depth="0.35">
                    <img src="assest/img/landing/saas-1/hero/layer05.png" alt="Layer">
                </div>
                <div class="parallax-layer zindex-2" data-depth="0.25">
                    <img src="assest/img/landing/saas-1/hero/layer04.png" alt="Layer">
                </div>
                <div class="parallax-layer zindex-2" data-depth="0.4">
                    <img src="assest/img/landing/saas-1/hero/layer03.png" alt="Layer">
                </div>
            </div>
        </div>
    </div>
</section>
<script src="assest/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assest/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./assest/vendor/vanilla-tilt/dist/vanilla-tilt.min.js"></script>
    <script src="assest/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="assest/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="assest/vendor/rellax/rellax.min.js"></script>
    <script src="assest/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="./assest/vendor/img-comparison-slider/dist/index.js"></script>

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
</body>

</html>