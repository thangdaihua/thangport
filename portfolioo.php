<!-- Include Head -->
<?php include "assest/ghead.php"; ?>
<?php
// Get Latest articles
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC  LIMIT 9");
$stmt->execute();
$articles = $stmt->fetchAll();

// Get Categories
$stmt = $conn->prepare("SELECT *,COUNT(*) as article_count FROM `article` INNER JOIN category ON id_categorie=category_id GROUP BY id_categorie");
$stmt->execute();
$categories = $stmt->fetchAll();

// Get Most Read Articles
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id order by RAND() LIMIT 6");
$stmt->execute();
$most_read_articles = $stmt->fetchAll();

//Get hightlight UIshot
$stmt = $conn->prepare("SELECT * FROM `uishot` WHERE uishot_high=1");
$stmt->execute();
$hight_uishots = $stmt->fetchAll();
?>
<title>Hai Thang Portfolio</title>
<?php include "assest/gheader.php" ?>
<!-- Hero -->
<section class="position-relative">
    <div class="position-relative zindex-4 pt-lg-3 pt-xl-5 pb-3">


        <div class="container zindex-5">
            <div class="row flex-lg-nowrap" style="height: 759px;">
                <div class="col-lg-6 col-xl-5 text-center position-relative text-lg-start pt-5 mt-xl-4">
                    <!-- <img src="./assest/img/landing/hero-bg.png"
                        class="position-absolute top-50 translate-middle-y ms-lg-n4" width="866"
                        alt="Background shapes"> -->
                    <h1 class="display-4 pt-5 pb-2 pb-lg-3 mt-2 mt-lg-5">Hai Thang Portfolio</h1>
                    <div class="position-relative zindex-5">
                        <h3 class="mb-2 mb-lg-3">UI/UX - Product design</h3>
                        <p class="fs-lg mb-2 mb-lg-3">Hế lô anh em, mình là Hai Thắng. Hiện tại mình đang là UI/UX
                            designer. Ngoài công việc làm thiết kế thì mình còn mê nhạc, mê đàn, mê vẽ và mê làm
                            “màu”.</p>
                        <div class="d-flex flex-column flex-sm-row">
                            <a href="#port"
                                class="btn btn-primary shadow-primary btn-lg me-sm-3 me-xl-4 mb-3">Coi đầy đủ thông tin
                                của mình</a>
                            <a href="#case" class="btn btn-outline-primary btn-lg mb-3">
                                Coi mấy cái mình làm
                            </a>
                        </div>
                        <div class="ppt-2 mt-xl-2">
                            <h6 class="pt-xl-3 pb-1 pb-lg-1">Xem mình làm trò trên mạng xã hội</h6>
                            <div class="d-flex justify-content-center justify-content-lg-start mx-xl-n2">
                                <div class="sns">
                                    <a target="_blank" href="https://www.facebook.com/thangdesignuiux"> <span
                                            class="icon-Facebook" style="color: #b4b7c9;"></span> </a>
                                    <a target="_blank" href="https://www.behance.net/thngha1"> <span
                                            class="icon-behance" style="color: #b4b7c9;"></span> </a>
                                    <a target="_blank" href="https://www.linkedin.com/in/thangdaihua/"> <span
                                            class="icon-linkedin" style="color: #b4b7c9;"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Layer parallax -->
                <div class="parallax mt-4 ms-4 me-lg-0 ms-lg-n5 ms-xl-n3 mt-lg-n4"
                    style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <div class="parallax-layer" data-depth="0.1"
                        style="transform: translate3d(-13.1px, 4.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                        <img src="assest/img/landing/saas-1/hero/layer01.png" width="1416" alt="Layer">
                    </div>
                    <div class="parallax-layer zindex-2" data-depth="0.15"
                        style="transform: translate3d(-19.6px, 6.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                        <img src="assest/img/landing/saas-1/hero/layer02.png" alt="Layer">
                    </div>
                    <div class="parallax-layer zindex-2" data-depth="0.35"
                        style="transform: translate3d(-45.8px, 15.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                        <img src="assest/img/landing/saas-1/hero/layer05.png" alt="Layer">
                    </div>
                    <div class="parallax-layer zindex-2" data-depth="0.25"
                        style="transform: translate3d(-32.7px, 11.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                        <img src="assest/img/landing/saas-1/hero/layer04.png" alt="Layer">
                    </div>
                    <div class="parallax-layer zindex-2" data-depth="0.4"
                        style="transform: translate3d(-52.3px, 17.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                        <img src="assest/img/landing/saas-1/hero/layer03.png" alt="Layer">
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom shape -->

        <div class="d-none d-lg-block" style="height: 300px;"></div>
        <div class="d-none d-md-block d-lg-none" style="height: 150px;"></div>
    </div>
    <div class="position-relative zindex-5 mx-auto" style="max-width: 1250px;">
        <div class="d-none d-lg-block" style="margin-top: -300px;"></div>
        <div class="d-none d-md-block d-lg-none" style="margin-top: -150px;"></div>

        <!-- Parallax (3D Tilt) gfx -->
        <div class="table-responsive-lg tilt-3d my-3" data-tilt="" data-tilt-full-page-listening="" data-tilt-max="12"
            data-tilt-perspective="1200"
            style="transform: perspective(1200px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
            <img src="./assest/img/landing/saas-2/hero/layer01.png" alt="Dashboard">
            <div class="tilt-3d-inner position-absolute top-0 start-0 w-100 h-100">
                <img src="./assest/img/landing/saas-2/hero/layer02.png" alt="Cards">
            </div>
            <div class="tilt-3d-inner position-absolute top-0 start-0 w-100 h-100">
                <img src="./assest/img/landing/saas-2/hero/layer03.png" alt="Cards">
            </div>
        </div>
        <div class="text-center my-5 "><a target="_blank"
                href="https://www.figma.com/proto/WFZ4WZ8io0KW72ccK6uhIO/Hai-Thang-Resume?page-id=0%3A1&amp;node-id=0%3A4&amp;viewport=462%2C48%2C1.09&amp;scaling=contain"
                class="btn text-center btn-primary shadow-primary btn-lg">Xem đầy đủ
                Resume</a></div>

    </div>

    <div class="position-absolute top-0 start-0 w-100 h-100"></div>
</section>

<!-- Light / Dark mode (Comparison slider) -->
<section class="d-flex w-100 position-relative overflow-hidden" id="swich">
    <div class="position-relative flex-xl-shrink-0 zindex-5 start-50 translate-middle-x" style="max-width: 1920px;">
        <div class="mx-md-n5 mx-xl-0">
            <div class="mx-n4 mx-sm-n5 mx-xl-0">
                <div class="mx-n5 mx-xl-0">
                    <img-comparison-slider class="mx-n5 mx-xl-0">
                        <img slot="first" src="./assest/img/landing/saas-2/dark-mode.jpg" alt="Dak Mode">
                        <img slot="second" src="./assest/img/landing/saas-2/light-mode.jpg" alt="Light Mode">
                        <div slot="handle">
                            <svg class="text-primary shadow-primary rounded-circle" width="36" height="36"
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 36 36">
                                <g>
                                    <circle fill="currentColor" cx="18" cy="18" r="18" />
                                </g>
                                <path fill="#fff"
                                    d="M22.2,17.2h-8.3v-3.3L9.7,18l4.2,4.2v-3.3h8.3v3.3l4.2-4.2l-4.2-4.2V17.2z" />
                            </svg>
                        </div>
                    </img-comparison-slider>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute top-0 start-0 w-50 h-100 bg-dark"></div>
    <div class="position-absolute top-0 end-0 w-50 h-100" style="background-color: #f3f6ff;"></div>
</section>
<article>
        <h2 class="open">Description</h2>
        <p>Integer interdum, lorem eu laoreet sagittis, risus nulla vestibulum tortor, ut vestibulum dolor magna quis
            felis. Etiam nec odio eget velit tincidunt ultrices eu vestibulum urna. Mauris eget libero neque. Nullam
            consequat enim ac pulvinar consequat. Nam in molestie nulla. Praesent eget vestibulum enim. Nulla tincidunt
            sapien tellus, id lacinia purus finibus ut. </p>
        <h2>Taxonomy</h2>
        <p>Nam fermentum eros pulvinar arcu pretium molestie. Quisque rhoncus id neque vitae aliquet. Fusce dictum vitae
            nisi ac venenatis. Maecenas lobortis, libero sed placerat viverra, ipsum lorem suscipit est, at tristique
            lectus augue eget enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget velit mi. Nunc
            id tellus tellus. Proin iaculis eros sit amet ligula maximus vulputate.</p>
        <h2>Habitat</h2>
        <p>Integer interdum, lorem eu laoreet sagittis, risus nulla vestibulum tortor, ut vestibulum dolor magna quis
            felis. Etiam nec odio eget velit tincidunt ultrices eu vestibulum urna. Mauris eget libero neque. Nullam
            consequat enim ac pulvinar consequat. Nam in molestie nulla. Praesent eget vestibulum enim. Nulla tincidunt
            sapien tellus, id lacinia purus finibus ut. </p>
        <h2>Distribution</h2>
        <p>Nam fermentum eros pulvinar arcu pretium molestie. Quisque rhoncus id neque vitae aliquet. Fusce dictum vitae
            nisi ac venenatis. Maecenas lobortis, libero sed placerat viverra, ipsum lorem suscipit est, at tristique
            lectus augue eget enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget velit mi. Nunc
            id tellus tellus. Proin iaculis eros sit amet ligula maximus vulputate. </p>
        <h2>Breeding</h2>
        <p>Integer interdum, lorem eu laoreet sagittis, risus nulla vestibulum tortor, ut vestibulum dolor magna quis
            felis. Etiam nec odio eget velit tincidunt ultrices eu vestibulum urna. Mauris eget libero neque. Nullam
            consequat enim ac pulvinar consequat. Nam in molestie nulla. Praesent eget vestibulum enim. Nulla tincidunt
            sapien tellus, id lacinia purus finibus ut. </p>
        <h2>Behaviour</h2>
        <p>Morbi finibus consequat interdum. Pellentesque sed dui magna. Nam fermentum eros pulvinar arcu pretium
            molestie. Quisque rhoncus id neque vitae aliquet. Fusce dictum vitae nisi ac venenatis. Maecenas lobortis,
            libero sed placerat viverra, ipsum lorem suscipit est, at tristique lectus augue eget enim. Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Etiam eget velit mi. Nunc id tellus tellus. Proin iaculis eros
            sit amet ligula maximus vulputate. </p>
        <h2>Calls</h2>
        <p>Integer interdum, lorem eu laoreet sagittis, risus nulla vestibulum tortor, ut vestibulum dolor magna quis
            felis. Etiam nec odio eget velit tincidunt ultrices eu vestibulum urna. Mauris eget libero neque. Nullam
            consequat enim ac pulvinar consequat. Nam in molestie nulla. Praesent eget vestibulum enim. Nulla tincidunt
            sapien tellus, id lacinia purus finibus ut. </p>
        <h2>Song</h2>
        <p>Nam fermentum eros pulvinar arcu pretium molestie. Quisque rhoncus id neque vitae aliquet. Fusce dictum vitae
            nisi ac venenatis. Maecenas lobortis, libero sed placerat viverra, ipsum lorem suscipit est, at tristique
            lectus augue eget enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget velit mi. Nunc
            id tellus tellus. Proin iaculis eros sit amet ligula maximus vulputate. </p>

    </article>
    <aside>
        <h2>Contents</h2>
    </aside>
<section class="container mt-4 mb-2 mb-md-4 mb-lg-5 pt-lg-2 pb-5">

    <!-- Page title + Layout switcher -->
    <div class="d-flex align-items-center justify-content-between mb-4 pb-1 pb-md-3">
        <h1 id="port" class="mb-0">Thông tin chi tiết về mình.</h1>
    </div>
    <!-- Blog list + Sidebar -->
    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <p class="graf graf--p graf--empty">&nbsp;</p>
            <h2 id="basic-info" class="graf graf--h4">Th&ocirc;ng tin cơ&nbsp;bản</h2>
            <p class="graf graf--p">T&ecirc;n đầy đủ của m&igrave;nh l&agrave; Hứa Đại Quyết Thắng, mọi người thường hay
                gọi m&igrave;nh l&agrave; Hai Thắng. M&igrave;nh sinh năm 1998, qu&ecirc; ở Duy Xuy&ecirc;n, Quảng
                Nam.<br />M&igrave;nh rất c&oacute; đam m&ecirc; với những thứ li&ecirc;n quan đến nghệ thuật, nhưng khi
                học đại học m&igrave;nh lại chọn C&ocirc;ng nghệ th&ocirc;ng tin, chuy&ecirc;n ng&agrave;nh Hệ
                th&ocirc;ng th&ocirc;ng tin, m&agrave; sau 2 năm học m&igrave;nh kh&aacute; ch&aacute;n với việc code
                n&ecirc;n, sau khi t&igrave;m hiểu m&igrave;nh c&oacute; biết đến UI/UX design v&agrave; m&igrave;nh bắt
                đầu t&igrave;m hiểu v&agrave; l&agrave;m việc đến b&acirc;y giờ. Ngo&agrave;i ra kiến thức về lập
                tr&igrave;nh front-end được học ở đại học cũng gi&uacute;p cho m&igrave;nh rất nhiều v&agrave;o
                c&ocirc;ng việc.&nbsp;<br />T&iacute;nh đến hiện tại, m&igrave;nh đ&atilde; l&agrave;m việc được gần 3
                năm, đang trong những năm đầu của sự nghiệp n&ecirc;n m&igrave;nh vẫn đang cố gắng học hỏi t&igrave;m
                hiểu th&ecirc;m để đạt được những mục ti&ecirc;u trong c&ocirc;ng việc.</p>
            <h2 id="ex" class="graf graf--h4">Kinh nghiệm l&agrave;m&nbsp;việc</h2>
            <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Paracel Technology
                    Solutions &mdash; UI-UX Designer</strong></h4>
            <p class="graf graf--p"><strong class="markup--strong markup--p-strong">1/</strong><em
                    class="markup--em markup--p-em">2019 &mdash; 1/2020 &bull; Full-time &bull; 120 X&ocirc; Viết Nghệ
                    Tĩnh, Đ&agrave; Nẵng</em></p>
            <p class="graf graf--p">Paracel l&agrave; một c&ocirc;ng ty IT. Domain ch&iacute;nh l&agrave; gia c&ocirc;ng
                phần mềm cho thị trường Nhật v&agrave; Việt Nam. Ngo&agrave;i c&aacute;c dự &aacute;n l&agrave;m cho
                kh&aacute;ch h&agrave;ng th&igrave; c&ocirc;ng ty cũng c&oacute; những product của m&igrave;nh.
                C&ocirc;ng việc của m&igrave;nh ở đ&acirc;y l&agrave; UI/UX designer. Tiếp nhận th&ocirc;ng tin
                y&ecirc;u cầu của kh&aacute;ch h&agrave;ng, t&igrave;m hiểu v&agrave; ph&acirc;n t&iacute;ch y&ecirc;u
                cầu nghiệp vụ của dự &aacute;n v&agrave; thiết kế giao diện của website, ứng dụng. Ngo&agrave;i ra khi
                cần m&igrave;nh cũng tham gia code giao diện v&agrave; t&iacute;ch hợp c&aacute;c API, bằng framework
                Vue, Angular.</p>
            <hr />
            <p class="graf graf--p">&nbsp;</p>
            <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Jobchat &mdash; Product
                    Designer</strong></h4>
            <p class="graf graf--p"><em class="markup--em markup--p-em">1/2020 &mdash; 9/2021 &bull; Full-time &bull; 75
                    Th&aacute;i Phi&ecirc;n, Đ&agrave; Nẵng.</em></p>
            <p class="graf graf--p">JobChat l&agrave; một c&ocirc;ng ty product, c&oacute; c&ocirc;ng ty mẹ l&agrave;
                một c&ocirc;ng ty gia c&ocirc;ng mỹ phẩm xuất khẩu. Product của c&ocirc;ng ty l&agrave; một phần mềm
                quản l&iacute; c&ocirc;ng việc to&agrave;n diện t&ecirc;n JobChat. Ngo&agrave;i ra c&ocirc;ng ty
                c&ograve;n ph&aacute;t triển th&ecirc;m c&aacute;c ứng dụng kh&aacute;c nữa. C&ocirc;ng việc của
                m&igrave;nh ở đ&acirc;y l&agrave; vẽ giao diện cho những chức năng mới, khảo s&aacute;t người
                d&ugrave;ng, nhận feedback để chỉnh sửa sản phẩm tốt hơn. Ngo&agrave;i ra m&igrave;nh cũng nghi&ecirc;n
                cứu v&agrave; vẽ giao diện cho c&aacute;c ứng dụng mới kh&aacute;c của c&ocirc;ng ty.</p>
            <hr />
            <p class="graf graf--p">&nbsp;</p>
            <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Nal Solutions &mdash; Product-UI/UX
                    Designer</strong></h4>
            <p class="graf graf--p"><em class="markup--em markup--p-em">10/2021 &mdash; Now &bull; Full-time &bull; 16
                    L&yacute; Thường Kiệt, Đ&agrave; Nẵng.</em></p>
            <p class="graf graf--p">Nal Solutions l&agrave; một c&ocirc;ng ty chuy&ecirc;n gia c&ocirc;ng phần mềm, ứng
                dụng, website cho thị trường Nhật. C&aacute;c chi nh&aacute;nh của NALS đều c&oacute; ở c&aacute;c
                th&agrave;nh phố lớn v&agrave; cả ở Nhật. C&ocirc;ng việc của m&igrave;nh ở đ&acirc;y tham gia
                ph&acirc;n t&iacute;ch nghiệp vụ của c&aacute;c dự &aacute;n v&agrave; thiết kế giao diện. Ngo&agrave;i
                ra m&igrave;nh c&ograve;n tham gia ph&aacute;t triển team design của c&ocirc;ng ty, để tạo ra c&aacute;c
                bộ teamplate UI cho c&aacute;c domain của dự &aacute;n c&ocirc;ng ty thường get được.</p>
            <p class="graf graf--p">Những năm đầu sự nghiệp m&igrave;nh chuyển hơi nhiều chỗ l&agrave;m, nhưng cũng nhờ
                v&igrave; vậy m&agrave; m&igrave;nh được tiếp x&uacute;c được với nhiều m&ocirc; h&igrave;nh, quy
                m&ocirc; c&ocirc;ng ty kh&aacute;c nhau. Tiếp x&uacute;c được với nhiều h&igrave;nh thức ph&aacute;t
                triển phần mềm, quản l&iacute; đội nh&oacute;m v&agrave; r&uacute;t ra được nhiều kinh nghiệm từ
                c&aacute;c dự &aacute;n đ&atilde; được tham gia.</p>
            <h2 id="study" class="graf graf--h4">Học tập</h2>
            <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Đại học B&aacute;ch
                    Khoa &mdash; Đại học Đ&agrave; Nẵng</strong></h4>
            <p class="graf graf--p"><em class="markup--em markup--p-em">8/2016&ndash;12/2020</em></p>
            <p class="graf graf--p">M&igrave;nh học C&ocirc;ng nghệ th&ocirc;ng tin, chuy&ecirc;n ng&agrave;nh Hệ thống
                th&ocirc;ng tin ở B&aacute;ch khoa. Học Hệ thống th&ocirc;ng tin gi&uacute;p m&igrave;nh c&oacute;
                th&ecirc;m nhiều kỹ năng nền tảng để ph&acirc;n t&iacute;ch nghiệp vụ của dự &aacute;n. Đồ &aacute;n tốt
                nghiệp của m&igrave;nh được 9,3 cao nhất kho&aacute; chương tr&igrave;nh m&igrave;nh học.</p>
            <hr />
            <p class="graf graf--p">&nbsp;</p>
            <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Microsoft IT Academy Da
                    Nang</strong></h4>
            <p class="graf graf--p"><em class="markup--em markup--p-em">1/2019&ndash;5/2019</em></p>
            <p class="graf graf--p">M&igrave;nh học lập tr&igrave;nh Front end với Angular. Sau kho&aacute; học
                m&igrave;nh được biết đến code giao diện, v&agrave; t&iacute;ch hợp API với Angular. Cũng l&agrave;
                kho&aacute; học để m&igrave;nh nhận ra l&agrave; code ch&aacute;n để đi t&igrave;m hiểu về UI/UX.</p>
            <hr />
            <p class="graf graf--p">&nbsp;</p>
            <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Eggacademy</strong></h4>
            <p class="graf graf--p"><em class="markup--em markup--p-em">7/2021 &mdash; 9/2021</em></p>
            <p class="graf graf--p">M&igrave;nh học kho&aacute; Egg Visual UI Advanced tại Eggacademy. Ở đ&acirc;y
                m&igrave;nh được dạy chuy&ecirc;n s&acirc;u về UI/UX, c&aacute;ch nghi&ecirc;n cứu khảo s&aacute;t người
                d&ugrave;ng tối ưu nhất. Từ đ&oacute; ph&aacute;t triển được 1 UI/UX case style đ&uacute;ng nghĩa.</p>
            <p class="graf graf--p graf--empty">&nbsp;</p>
            <h2 id="tools" class="graf graf--h4">Công cụ làm việc</h2>
            <div class="row pb-md-3 pb-lg-5">

                <!-- Item -->
                <div class="col-sm-6 my-2 ">
                    <div class="card card-body bg-secondary card-hover border-0">
                        <img src="assest/img/brands/figma.svg" class="d-block mb-4" width="56" alt="Figma">
                        <img src="assest/img/brands/5star.svg" class="d-block mb-4" width="150" alt="Figma">
                        <p class="mb-0">Mình dùng Figma là công cụ thiết kế chính. Mình rất thành thạo vàsử dụng tốt
                            Auto layout và Constraint để phục vụ cho responsive design</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 my-2 ">
                    <div class="card card-body bg-secondary card-hover border-0">
                        <img src="assest/img/brands/adobe_xd.svg" class="d-block mb-4" width="56" alt="adobe_xd">
                        <img src="assest/img/brands/5star.svg" class="d-block mb-4" width="150" alt="adobe_xd">
                        <p class="mb-0">XD từng là công cụ thiết kế chính của mình trước khi chuyển qua Figma. Nên mình
                            có thể design tốt ở cả XD nếu như có khách hàng yêu cầu.</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 my-2 ">
                    <div class="card card-body bg-secondary card-hover border-0">
                        <img src="assest/img/brands/adobe_photoshop.svg" class="d-block mb-4" width="56"
                            alt="adobe_photoshop">
                        <img src="assest/img/brands/3star.svg" class="d-block mb-4" width="150" alt="adobe_photoshop">
                        <p class="mb-0">Ngoài UI/UX mình cũng có thể design graphic, nên mình sử dụng Photoshhop để phục
                            vụ cho việc design các hình ảnh, banner sử dụng trong UI</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 my-2 ">
                    <div class="card card-body bg-secondary card-hover border-0">
                        <img src="assest/img/brands/adobe_illustrator.svg" class="d-block mb-4" width="56"
                            alt="adobe_illustrator">
                        <img src="assest/img/brands/2star.svg" class="d-block mb-4" width="150" alt="adobe_illustrator">
                        <p class="mb-0">Mình dùng Illustrator để design các hình minh hoạ dạng vector như kiểu flat
                            illustration, hoặc vẽ các bộ icon cho dự án</p>
                    </div>
                </div>

            </div>
            <section class="position-relative py-5">
                <div class="container position-relative zindex-5 pb-md-4 pt-md-2 pt-lg-3 pb-lg-5">
                    <h2 id="step" class="graf graf--h4">Quy trình thiết kế UI/UX cho ứng dụng, website</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-0 pb-xl-3">
                        <!-- Item -->
                        <div class="col position-relative">
                            <div class="card border-0 bg-transparent rounded-0 p-md-1 p-xl-3">
                                <div class="d-table bg-secondary rounded-3 p-3 mx-auto mt-3 mt-md-4">
                                    <span class="icon-discovery progress-icon "></span>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="h5 pb-1 mb-2">1. Discovery</h3>
                                    <p class="mb-0">Giai đoạn tìm hiểu, thu thập thông tin về dự án. Bước này giúp hiểu
                                        thêm về
                                        doanh
                                        nghiệp, nghiệp vụ, thị trường mục tiêu và khách hàng.</p>
                                </div>
                            </div>
                            <hr class="position-absolute top-0 end-0 w-1 h-100 d-none d-sm-block">
                            <hr class="position-absolute top-100 start-0 w-100 d-none d-sm-block">
                        </div>

                        <!-- Item -->
                        <div class="col position-relative">
                            <div class="card border-0 bg-transparent rounded-0 p-md-1 p-xl-3">
                                <div class="d-table bg-secondary rounded-3 p-3 mx-auto mt-3 mt-md-4">
                                    <span class="icon-wireframe progress-icon "></span>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="h5 pb-1 mb-2">2. Wireframing</h3>
                                    <p class="mb-0">Xây dựng sitemap (website) hoặc userflow (app). Phác thảo về cấu
                                        trúc và các
                                        phần
                                        tử của màn hình, giúp có cái hình tổng quan trước khi tiến hành thiết kế chi
                                        tiết.</p>
                                </div>
                            </div>
                            <hr class="position-absolute top-0 end-0 w-1 h-100 d-none d-md-block">
                            <hr class="position-absolute top-100 start-0 w-100 d-none d-sm-block">
                        </div>

                        <!-- Item -->
                        <div class="col position-relative">
                            <div class="card border-0 bg-transparent rounded-0 p-md-1 p-xl-3">
                                <div class="d-table bg-secondary rounded-3 p-3 mx-auto mt-3 mt-md-4">
                                    <span class="icon-design progress-icon "></span>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="h5 pb-1 mb-2">3. Design</h3>
                                    <p class="mb-0">Đưa ra 2,3 options để khách hàng lựa chọn phong cách, màu sắc phù
                                        hợp với nghiệp
                                        vụ. Từ đó tạo UI style guide, và thiết kế chi tiết các màn hình từ wireframe.
                                    </p>
                                </div>
                            </div>
                            <hr class="position-absolute top-0 end-0 w-1 h-100 d-none d-sm-block d-md-none">
                            <hr class="position-absolute top-100 start-0 w-100 d-none d-sm-block">
                        </div>

                        <!-- Item -->
                        <div class="col position-relative">
                            <div class="card border-0 bg-transparent rounded-0 p-md-1 p-xl-3">
                                <div class="d-table bg-secondary rounded-3 p-3 mx-auto mt-3 mt-md-4">
                                    <span class="icon-prototype progress-icon "></span>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="h5 pb-1 mb-2">4. Prototype</h3>
                                    <p class="mb-0">Chuyển màn hình tĩnh thành màn hình động có thể tương tác gần giống
                                        với sản phẩm
                                        thực tế nhất, dễ dàng cho việc coding và showcase với khách hàng.</p>
                                </div>
                            </div>
                            <hr class="position-absolute top-0 end-0 w-1 h-100 d-none d-md-block">
                            <hr class="position-absolute top-100 start-0 w-100 d-none d-sm-block d-md-none">
                        </div>

                        <!-- Item -->
                        <div class="col position-relative">
                            <div class="card border-0 bg-transparent rounded-0 p-md-1 p-xl-3">
                                <div class="d-table bg-secondary rounded-3 p-3 mx-auto mt-3 mt-md-4">
                                    <span class="icon-testing progress-icon "></span>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="h5 pb-1 mb-2">5. Test and refine</h3>
                                    <p class="mb-0">Giao mẫu trải nghiệm các màn hình design và prototype. Bản thiết kế
                                        đang có hạn
                                        chế nào không. Phân tích các phản hồi, chỉnh sửa lại cho phù hợp.</p>
                                </div>
                            </div>
                            <hr class="position-absolute top-0 end-0 w-1 h-100 d-none d-sm-block">
                        </div>

                        <!-- Item -->
                        <div class="col position-relative">
                            <div class="card border-0 bg-transparent rounded-0 p-md-1 p-xl-3">
                                <div class="d-table bg-secondary rounded-3 p-3 mx-auto mt-3 mt-md-4">
                                    <span class="icon-support progress-icon "></span>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="h5 pb-1 mb-2">6. Support</h3>
                                    <p class="mb-0">Sẵn sàng hỗ trợ, cải thiện và mở rộng sản phẩm. Dựa trên dự liệu
                                        phân tích, định
                                        hướng và giải quyết các vấn đề nhiệm vụ bổ sung. Hỗ trợ đội coding.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-absolute top-0 start-0 w-100 h-100"
                    style="background-color: rgba(255,255,255,.05);"></div>
            </section>

            <section class=" py-5">
                <div class="container">
                    <h2 id='shot' class="graf graf--h4">UI shots</h2>
                    <p class="graf graf--p">Đây là các screen shots một số dự án mình từng tham gia
                        thực hiện. Mọi
                        người tham khảo phong cách thiết kế UI của mình nhé!</p>

                    <div class="row justify-content-center text-center">
                        <div class="row">
                            <div class="row">
                                <?php foreach ($hight_uishots as $hight_uishot) : ?>
                                <div class="col-md-4 col-xs-6 thum">
                                    <div class="card shot-card card-hover p-3 mb-4">
                                        <a class="thumbnail mb-3" href="#" data-image-id="" data-toggle="modal"
                                            data-title="<?= $hight_uishot['uishot_title']?>"
                                            data-image="<?= $hight_uishot['uishot_image']?>"
                                            data-target="#image-gallery">
                                            <img class="shot-img" src="<?= $hight_uishot['uishot_image']?>"
                                                alt="Another alt text">
                                        </a>
                                        <b><?= $hight_uishot['uishot_title']?></b>
                                    </div>
                                </div>
                                <?php endforeach;  ?>

                            </div>


                            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="image-gallery-title"></h4>
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">×</span><span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary float-left"
                                                id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                            </button>

                                            <button type="button" id="show-next-image"
                                                class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center"><a href="./allUiShots.php"
                                class="btn text-center btn-primary shadow-primary btn-lg">Coi tiếp</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container pb-2 pb-lg-3">
            <h2 id="case-study" class="graf graf--h4" id="case" >UI/UX case study</h2>
                    <p class="graf graf--p">Đây là đầy đủ các bước của một dự án mình làm UI/UX, gồm từ các bước đầu tiên phân tích nghiệp vụ dự án đến cho ra được một UI hoàn chỉnh</p>

                <!-- Item -->
                <div class="row pb-5 mb-md-4 mb-lg-5">
                    <div class="rellax col-md-6 pb-1 mb-3 pb-md-0 mb-md-0" data-rellax-percentage="0.5"
                        data-rellax-speed="0.8" data-disable-parallax-down="md"
                        style="transform: translate3d(-9px, -8px, 0px);">
                        <a href="portfolio-single-project.html">
                            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/039e57139775385.62359a0dd49e8.jpg" class="rounded-3" width="600" alt="Image">
                        </a>
                    </div>
                    <div class="rellax col-md-6" data-rellax-percentage="0.5" data-rellax-speed="-0.6"
                        data-disable-parallax-down="md" style="transform: translate3d(-6px, 6px, 0px);">
                        <div class="ps-md-4 ms-md-2">
                            <div class="fs-sm text-muted mb-1">Nov 18, 2021</div>
                            <h2 class="h3">SaaS Project Management Tool</h2>
                           
                            <p class="d-md-none d-lg-block pb-3 mb-2 mb-md-3">Malesuada eu cursus natoque purus ipsum
                                nunc, velit cras tellus. Maecenas viverra pellentesque at ultrices purus vitae quis erat
                                volutpat. Turpis auctor neque bibendum id pellentesque ut egestas. Donec ut faucibus
                                nisl nec at purus. Cursus vel gravida gravida purus varius feugiat.Semper mauris id
                                adipiscing est. Nam leo rutrum gravida curabitur at vel risus.</p>
                            <a href="portfolio-single-project.html" class="btn btn-outline-primary">View more</a>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="row pb-5 mb-md-4 mb-lg-5">
                    <div class="rellax col-md-6 order-md-2 pb-1 mb-3 pb-md-0 mb-md-0" data-rellax-percentage="0.5"
                        data-rellax-speed="0.8" data-disable-parallax-down="md"
                        style="transform: translate3d(8px, 16px, 0px);">
                        <a href="portfolio-single-project.html" class="float-md-end">
                            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/2800_opt_1/039e57139775385.62359a0dd49e8.jpg" class="rounded-3" width="600" alt="Image">
                        </a>
                    </div>
                    <div class="rellax col-md-6 order-md-1 pt-md-4" data-rellax-percentage="0.5"
                        data-rellax-speed="-0.6" data-disable-parallax-down="md"
                        style="transform: translate3d(6px, -12px, 0px);">
                        <div class="pe-md-4 me-md-2">
                            <div class="fs-sm text-muted mb-1">Nov 9, 2021</div>
                            <h2 class="h3">Mobile Banking App</h2>
                        
                            <p class="d-md-none d-lg-block pb-3 mb-2 mb-md-3">Malesuada eu cursus natoque purus ipsum
                                nunc, velit cras tellus. Maecenas viverra pellentesque at ultrices purus vitae quis erat
                                volutpat. Turpis auctor neque bibendum id pellentesque ut egestas. Donec ut faucibus
                                nisl nec at purus. Cursus vel gravida gravida purus varius feugiat.Semper mauris id
                                adipiscing est. Nam leo rutrum gravida curabitur at vel risus.</p>
                            <a href="portfolio-single-project.html" class="btn btn-outline-primary">View more</a>
                        </div>
                    </div>
                </div>
              
            </section>
            <section class="py-5">
                <div class="container py-2 py-md-4 py-lg-5">
                <h2 id="blog" class="graf graf--h4">Bài viết</h2>
                    <p class="graf graf--p">Đây là một số bài viết mình đã viết. Ngoài các bài viết về
                                design và
                                product thì mình có viết về những thứ khác liên quan đến cuộc sống của mình nữa!</p>
                    <div class="position-relative px-xl-5">


                        <button type="button" id="prev-news"
                            class="btn btn-prev btn-icon btn-sm position-absolute top-50 start-0 translate-middle-y d-none d-xl-inline-flex"
                            tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-974958d6531a25bb">
                            <i class="fa fa-arrow-left" style="font-size: 14px;"></i>
                        </button>
                        <button type="button" id="next-news"
                            class="btn btn-next btn-icon btn-sm position-absolute top-50 end-0 translate-middle-y d-none d-xl-inline-flex"
                            tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-974958d6531a25bb">
                            <i class="fa fa-arrow-right" style="font-size: 14px;"></i>
                        </button>


                        <div class="px-xl-2">
                            <div class="swiper mx-n2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                                data-swiper-options="{
                &quot;slidesPerView&quot;: 1,
                &quot;loop&quot;: true,
                &quot;pagination&quot;: {
                  &quot;el&quot;: &quot;.swiper-pagination&quot;,
                  &quot;clickable&quot;: true
                },
                &quot;navigation&quot;: {
                  &quot;prevEl&quot;: &quot;#prev-news&quot;,
                  &quot;nextEl&quot;: &quot;#next-news&quot;
                },
                &quot;breakpoints&quot;: {
                  &quot;500&quot;: {
                    &quot;slidesPerView&quot;: 2
                  },
                  &quot;1000&quot;: {
                    &quot;slidesPerView&quot;: 2
                  }
                }
              }">
                                <div class="swiper-wrapper" id="swiper-wrapper-974958d6531a25bb" aria-live="polite"
                                    style="transition-duration: 0ms; transform: translate3d(-800px, 0px, 0px);">

                                    <?php foreach ($most_read_articles as $article) : ?>
                                    <div class="swiper-slide h-auto pb-3 swiper-slide-duplicate-prev"
                                        data-swiper-slide-index="2" role="group" aria-label="3 / 4"
                                        style="width: 400px;">
                                        <article class="card h-100 border-0 shadow-sm mx-2">
                                            <div class="position-relative">

                                                <img src="<?= $article['article_image'] ?>" class="card-img-top"
                                                    alt="Image">
                                            </div>
                                            <div class="card-body pb-4">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <a class="post-category cat-1"
                                                        href="allArticles.php?catID=<?= $article['category_id'] ?>"
                                                        style="color: white; text-decoration: none; padding: 5px 10px; border-radius: 10px; background-color:<?= $article['category_color'] ?>"><?= $article['category_name'] ?></a>
                                                    <span class="fs-sm text-muted">
                                                        <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?></span>
                                                </div>
                                                <h3 class="h5 mb-0">
                                                    <a
                                                        href="single_article.php?id=<?= $article['article_id'] ?>"><?= $article['article_title'] ?></a>
                                                </h3>
                                            </div>
                                        </article>
                                    </div>
                                    <?php endforeach;  ?>
                                </div>

                                <div
                                    class="swiper-pagination position-relative bottom-0 mt-4 mb-lg-2 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                        aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                        tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                                        class="swiper-pagination-bullet" tabindex="0" role="button"
                                        aria-label="Go to slide 3"></span><span
                                        class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                        role="button" aria-label="Go to slide 4" aria-current="true"></span>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                <br>
                                <div class="text-center"><a href="./allArticles.php"
                                        class="btn text-center btn-primary shadow-primary btn-lg">Coi tiếp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Sidebar (Offcanvas below lg breakpoint) -->
        <aside class="col-xl-3 col-lg-4">
            <div class="offcanvas offcanvas-end offcanvas-expand-lg" id="blog-sidebar">

                <!-- Body -->
                <div class="offcanvas-body" id="sidebar">
                    <div class="card card-body border-0 position-relative mb-4">
                        <span
                            class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary opacity-10 rounded-3"></span>
                        <div class="position-relative zindex-2">
                            <h3 class="h5">Categories</h3>
                            <ul class="nav flex-column fs-sm">
                               
                                <li class="nav-item mb-1">
                                    <a href="#basic-info" class="nav-link py-1 px-0">Thông tin cơ bản <span
                                            class="fw-normal opacity-60 ms-1"></span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#ex" class="nav-link py-1 px-0">Kinh nghiệm làm việc <span
                                            class="fw-normal opacity-60 ms-1"></span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#study" class="nav-link py-1 px-0">Học vấn <span
                                            class="fw-normal opacity-60 ms-1"></span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#tools" class="nav-link py-1 px-0">Công cụ làm việc <span
                                            class="fw-normal opacity-60 ms-1"></span></a>
                                </li>
                                <li class="nav-item mb-1">
                                    <a href="#step" class="nav-link py-1 px-0">Quy trình thiết kế<span
                                            class="fw-normal opacity-60 ms-1"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#shot" class="nav-link py-1 px-0">UI shots<span
                                            class="fw-normal opacity-60 ms-1"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#case-study" class="nav-link py-1 px-0">UI/UX case study<span
                                            class="fw-normal opacity-60 ms-1"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#blog" class="nav-link py-1 px-0">Bài viết<span
                                            class="fw-normal opacity-60 ms-1"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</section>
<!-- Features -->


</main>
<?php include "assest/footer.php" ?>