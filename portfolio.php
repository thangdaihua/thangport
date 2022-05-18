<?php include "assest/head.php"; ?>
<?php
if (!$loggedin) {
    header("location: login.php");
    exit;
}
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

$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=24 order by RAND() LIMIT 2");
$stmt->execute();
$casestudy = $stmt->fetchAll();

//Get hightlight UIshot
$stmt = $conn->prepare("SELECT * FROM `uishot` WHERE uishot_high=1");
$stmt->execute();
$hight_uishots = $stmt->fetchAll();
?>
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
                    <p class="fs-lg mb-2 mb-lg-3">Hế lô anh em, mình là Hai Thắng. Hiện tại mình đang là UI/UX designer.
                        Ngoài công việc làm thiết kế thì mình còn mê nhạc, mê đàn, mê vẽ và mê làm
                        “màu”.</p>
                    <div class="d-flex flex-column flex-sm-row">
                        <a href="#port" class="btn btn-primary shadow-primary btn-lg me-sm-3 me-xl-4 mb-3">Xem chi tiết
                            thông tin của mình</a>
                        <a href="#heading-5" class="btn btn-outline-primary btn-lg mb-3">
                            Xem những dự án mình đã làm
                        </a>
                    </div>
                    <div class="ppt-2 mt-xl-2">
                        <h6 class="pt-xl-3 pb-1 pb-lg-1">Theo dõi mình trên mạng xã hội</h6>
                        <div class="d-flex justify-content-center justify-content-lg-start mx-xl-n2">
                            <div class="sns">
                                <a target="_blank" href="https://www.facebook.com/thangdesignuiux"> <span
                                        class="icon-Facebook" style="color: #b4b7c9;"></span> </a>
                                <a target="_blank" href="https://www.behance.net/thngha1"> <span class="icon-behance"
                                        style="color: #b4b7c9;"></span> </a>
                                <a target="_blank" href="https://www.linkedin.com/in/thangdaihua/"> <span
                                        class="icon-linkedin" style="color: #b4b7c9;"></span></a>
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
        <div class="position-relative zindex-5 mx-auto" style="max-width: 1250px;">
            <div class="d-none d-lg-block" style="margin-top: -300px;"></div>
            <div class="d-none d-md-block d-lg-none" style="margin-top: -150px;"></div>

            <!-- Parallax (3D Tilt) gfx -->
            <div class="table-responsive-lg tilt-3d my-3" data-tilt="" data-tilt-full-page-listening=""
                data-tilt-max="12" data-tilt-perspective="1200"
                style="transform: perspective(1200px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                <img src="./assest/img/landing/saas-2/hero/layer01.png" alt="Dashboard">
                <div class="tilt-3d-inner position-absolute top-0 start-0 w-100 h-100">
                    <img src="./assest/img/landing/saas-2/hero/layer02.png" alt="Cards">
                </div>
                <div class="tilt-3d-inner position-absolute top-0 start-0 w-100 h-100">
                    <img src="./assest/img/landing/saas-2/hero/layer03.png" alt="Cards">
                </div>
            </div>
        </div>
</section>
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
<section class="container mt-4 mb-2 mb-md-4 mb-lg-5 pt-lg-2 pb-5">

    <!-- Page title + Layout switcher -->
    <div class="d-flex align-items-center justify-content-between mb-4 pb-1 pb-md-3">
        <h1 id="port" class="mb-0">Thông tin chi tiết về mình.</h1>
    </div>
    <!-- Blog list + Sidebar -->
    <div class="row">
        <article class="col-xl-9 col-lg-8">
            <h2 id="basic-info" class="graf scr-header graf--h4">Thông tin cơ bản</h2>
            <p class="graf graf--p">Tên đầy đủ của mình là Hứa Đại Quyết Thắng, mọi người thường hay gọi mình là Hai
                Thắng. Mình sinh năm 1998, quê ở Duy Xuyên, Quảng Nam.
                Mình rất có đam mê với những thứ liên quan đến nghệ thuật, nhưng khi học đại học mình lại chọn Công nghệ
                thông tin, chuyên ngành Hệ thông thông tin. Sau 2 năm học mình khá chán với việc code nên, sau khi
                tìm hiểu mình có biết đến UI/UX design và mình bắt đầu tìm hiểu và làm việc đến bây giờ. Ngoài ra kiến
                thức về lập trình front-end được học ở đại học cũng giúp cho mình rất nhiều vào công việc.
                Tính đến hiện tại, mình đã làm việc được gần 3 năm, đang trong những năm đầu của sự nghiệp nên mình vẫn
                đang cố gắng học hỏi tìm hiểu thêm để đạt được những mục tiêu trong công việc.
            </p>
            <h2 id="ex" class="graf scr-header graf--h4">Kinh nghiệm làm việc</h2>
            <div class="ex card card-hover card-hover-primary mb-4 mb-sm-0 me-sm-4 my-4 ">
                <div class="card-body">
                    <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Paracel Technology
                            Solutions &mdash; UI-UX Designer</strong></h4>
                    <p class="graf graf--p"><strong class="markup--strong markup--p-strong">1/</strong><em
                            class="markup--em markup--p-em">1/2019 — 1/2020 • Full-time • 120 Xô Viết Nghệ Tĩnh, Đà
                            Nẵn</em></p>
                    <p class="graf graf--p">Paracel là một công ty IT. Domain chính là gia công phần mềm cho thị trường
                        Nhật và Việt Nam. Ngoài các dự án làm cho khách hàng thì công ty cũng có những product của mình.
                        Công việc của mình ở đây là UI/UX designer. Tiếp nhận thông tin yêu cầu của khách hàng, tìm hiểu
                        và phân tích yêu cầu nghiệp vụ của dự án và thiết kế giao diện của website, ứng dụng. Ngoài ra
                        khi cần mình cũng tham gia code giao diện và tích hợp các API, bằng framework Vue, Angular.</p>
                </div>

            </div>

            <div class="ex card card-hover card-hover-primary mb-4 mb-sm-0 me-sm-4 my-4">
                <div class="card-body">
                    <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Jobchat — Product
                            Designer</strong></h4>
                    <p class="graf graf--p"><em class="markup--em markup--p-em">1/2020 — 9/2021 • Full-time • 75 Thái
                            Phiên, Đà Nẵng.</em></p>
                    <p class="graf graf--p">JobChat là một công ty product, có công ty mẹ là một công ty gia công mỹ
                        phẩm xuất khẩu. Product của công ty là một phần mềm quản lí công việc toàn diện tên JobChat.
                        Ngoài ra công ty còn phát triển thêm các ứng dụng khác nữa. Công việc của mình ở đây là vẽ giao
                        diện cho những chức năng mới, khảo sát người dùng, nhận feedback để chỉnh sửa sản phẩm tốt hơn.
                        Ngoài ra mình cũng nghiên cứu và vẽ giao diện cho các ứng dụng mới khác của công ty.</p>
                </div>
            </div>
            <div class="ex card card-hover card-hover-primary mb-4 mb-sm-0 me-sm-4 my-4">
                <div class="card-body">
                    <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Nal
                            Solutions — Product-UI/UX Designer</strong></h4>
                    <p class="graf graf--p"><em class="markup--em markup--p-em">10/2021 — Now • Full-time • 16 Lý Thường
                            Kiệt, Đà Nẵng.</em></p>
                    <p class="graf graf--p">Nal Solutions là một công ty chuyên thiết kế, xây dựng phần mềm, ứng dụng,
                        website, cung cấp giải pháp công nghệ cho
                        thị trường Nhật. Các chi nhánh của NALS đều có ở các thành phố lớn ở Việt Nam và cả ở Nhật. Công
                        việc của
                        mình ở đây tham gia phân tích nghiệp vụ của các dự án và thiết kế giao diện. Ngoài ra mình còn
                        tham gia phát triển team design của công ty, để tạo ra các bộ teamplate UI cho các domain của dự
                        án công ty thường get được.</p>
                </div>
            </div>
            <p class="graf graf--p mx-3 my-5 ">Những năm đầu sự nghiệp mình chuyển hơi nhiều chỗ làm, nhưng cũng nhờ vì
                vậy mà mình được tiếp xúc được với nhiều mô hình, quy mô công ty khác nhau. Tiếp xúc được với nhiều hình
                thức phát triển phần mềm, quản lí đội nhóm và rút ra được nhiều kinh nghiệm từ các dự án đã được tham
                gia.

            </p>
            <h2 id="study" class="graf scr-header graf--h4">Học tập</h2>
            <div class="ex card card-hover card-hover-primary mb-4 mb-sm-0 me-sm-4 my-4 ">
                <div class="card-body">
                    <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Đại học Bách Khoa — Đại học
                            Đà Nẵng</strong></h4>
                    <p class="graf graf--p"><em class="markup--em markup--p-em">/2016–12/2020</em></p>
                    <p class="graf graf--p">Mình học Công nghệ thông tin, chuyên ngành Hệ thống thông tin ở Bách khoa.
                        Học Hệ thống thông tin giúp mình có thêm nhiều kỹ năng nền tảng để phân tích nghiệp vụ của dự
                        án. Đồ án tốt nghiệp của mình được 9,3 cao nhất khoá chương trình mình học.</p>
                </div>
            </div>
            <div class="ex card card-hover card-hover-primary mb-4 mb-sm-0 me-sm-4 my-4 ">
                <div class="card-body">
                    <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Microsoft IT Academy Da
                            Nang</strong></h4>
                    <p class="graf graf--p"><em class="markup--em markup--p-em">1/2019–5/2019</em></p>
                    <p class="graf graf--p">Mình học lập trình Front end với Angular. Sau khoá học mình được biết đến
                        code giao diện, và tích hợp API với Angular. Cũng là khoá học để mình nhận ra là code chán để đi
                        tìm hiểu về UI/UX.</p>
                </div>
            </div>
            <div class="ex card card-hover card-hover-primary mb-4 mb-sm-0 me-sm-4 my-4 mb-5">
                <div class="card-body">
                    <h4 class="graf graf--p"><strong class="markup--strong markup--p-strong">Eggacademy</strong></h4>
                    <p class="graf graf--p"><em class="markup--em markup--p-em">7/2021 — 9/2021</em></p>
                    <p class="graf graf--p">Mình học khoá Egg Visual UI Advanced tại Eggacademy. Ở đây mình được dạy
                        chuyên sâu về UI/UX, cách nghiên cứu khảo sát người dùng tối ưu nhất. Từ đó phát triển được 1
                        UI/UX case style đúng nghĩa.</p>
                </div>
            </div>
            <h2 id="tools" class="graf scr-header graf--h4 mt-5 ">Công cụ làm việc</h2>
            <div class=" row mb-4 ">
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
            <h2 id="step" class="graf scr-header graf--h4 mt-5">Quy trình thiết kế UI/UX cho ứng dụng, website</h2>
            <section class="position-relative py-2">
                <div class="container position-relative zindex-5">

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
            </section>
            <h2 id='shot' class="graf scr-header graf--h4 mt-5">UI shots</h2>
            <p class="graf graf--p">Đây là các screen shots một số dự án mình từng tham gia
                thực hiện. Mọi
                người tham khảo phong cách thiết kế UI của mình nhé!</p>

            <div class="row">
                <?php foreach ($hight_uishots as $hight_uishot) : ?>
                <div class="col-md-4 col-xs-6 thum">
                    <div class="card shot-card card-hover p-3 mb-4">
                        <a class="thumbnail mb-3" href="#" data-image-id="" data-toggle="modal"
                            data-title="<?= $hight_uishot['uishot_title']?>"
                            data-image="<?= $hight_uishot['uishot_image']?>" data-target="#image-gallery">
                            <img class="shot-img" src="<?= $hight_uishot['uishot_image']?>" alt="Another alt text">
                        </a>
                        <b><?= $hight_uishot['uishot_title']?></b>
                    </div>
                </div>
                <?php endforeach;  ?>
            </div>
            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
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
                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i
                                    class="fa fa-arrow-left"></i>
                            </button>

                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                                    class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                </div>

                <div class="text-center"><a href="./allUiShots.php"
                        class="btn text-center btn-primary shadow-primary btn-lg">Coi tiếp</a>
                </div>
            </div>
            <h2 class="graf scr-header graf--h4 mt-5">UI/UX case study</h2>
            <p class="graf graf--p">Đây là đầy đủ các bước của một dự án mình làm UI/UX, gồm từ các bước đầu tiên
                phân tích nghiệp vụ dự án đến cho ra được một UI hoàn chỉnh</p>
                <?php foreach ($casestudy as $article) : ?>
            <div class="card mb-4 border-primary card-hover">
                <div class="card-body">
                    <div class="tab-pane fade active show" id="preview2" role="tabpanel">
                        <div class="row g-0">
                            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                                style="background-image: url(<?= $article['article_image'] ?>); min-height: 15rem;">
                                <a href="#" class="position-absolute top-0 start-0 w-100 h-100"
                                    aria-label="Read more"></a>

                            </div>
                            <div class="col-sm-8">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <a href="#"
                                            class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $article['category_name'] ?></a>
                                        <span class="fs-sm text-muted border-start ps-3 ms-3">
                                            <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?></span>
                                    </div>
                                    <h3 class="h4">
                                        <a
                                            href="single_article.php?id=<?= $article['article_id'] ?>"><?= $article['article_title'] ?></a>
                                    </h3>
                                    <p><?= $article['article_short'] ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;  ?>
            <h2 id="blog" class="graf scr-header graf--h4 mt-5">Bài viết</h2>
            <p class="graf graf--p">Đây là một số bài viết mình đã viết. Ngoài các bài viết về
                design và
                product thì mình có viết về những thứ khác liên quan đến cuộc sống của mình nữa!</p>
            <section>
                <div>
                    <div class="position-relative ">



                        <div >
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
        </article>
        <!-- Sidebar (Offcanvas below lg breakpoint) -->
        <aside class="col-xl-3 col-lg-4">

        </aside>

    </div>
</section>
</main>
<?php include "assest/footer.php" ?>
<script>
    function toggleHeading(el) {
        $(el).toggleClass("open")
    }


    //based on https://codepen.io/chriscoyier/pen/EnLwb

    var toc =
    "<div class='sticty-menu offcanvas offcanvas-end offcanvas-expand-lg' id='blog-sidebar'>" +
    "<div class='offcanvas-body'>" +
    "<div class='card card-body border-0 position-relative mb-4 bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted'>" +
    "<span class='position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary opacity-10 rounded-3'></span>" +
    "<div class='position-relative zindex-2'>" +
    "<h3 class='h5'>Nội dung</h3>" +
    "<ul class='nav flex-column fs-sm'>";
    var tocLi, el, hTitle, hlink;
    $("article h2").each(function (index) {
        el = $(this)
        el.attr('id', 'heading-' + index);
        el.attr('onclick', 'toggleHeading(this)');
        el.nextUntil('h2').wrapAll('<div class="text-body"></div>');

        hTitle = el.text();
        hLink = "#" + el.attr('id');

        tocLi =
        "<li class='nav-item mb-1'>" +
        "<a class='nav-link py-1 px-0' href='" + hLink + "'>" +
        hTitle +
        "</a>" +
        "</li>";

        toc += tocLi;
    });

    toc +=
    "</ul>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>";

    $("aside").append(toc);
    $('#heading-0').addClass = "open"

</script>