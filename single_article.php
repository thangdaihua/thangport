<?php include "assest/ghead.php"; ?>

<?php
$article_id = $_GET['id'];

// Get Article Info
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN `author` ON `article`.id_author = `author`.author_id  WHERE `article_id` = ?");
$stmt->execute([$article_id]);
$article = $stmt->fetch();

// Get Category of article
$stmt = $conn->prepare("SELECT * FROM `category` WHERE `category_id` = ?");
$stmt->execute([$article["id_categorie"]]);
$category = $stmt->fetch();

// Get Author's articles
$stmt = $conn->prepare("SELECT article_title, article_id FROM `article` WHERE id_author = ? LIMIT 4");
$stmt->execute([$article["id_author"]]);
$articles = $stmt->fetchAll();

// Get Comments
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN `comment` WHERE `article`.`article_id`= `comment`.`id_article` AND `article`.`article_id` = ? ORDER BY comment_id DESC");
$stmt->execute([$article_id]);
$comments = $stmt->fetchAll();
?>
<title><?= $article["article_title"] ?></title>
<?php include "assest/gheader.php" ?>
<!-- /Header -->

<!-- Main -->
<main role="main" class="bg-l py-4">
    <div class="container">
        <div class="row">
            <!-- Article -->
            <div class="content ">
                <!-- Post Content -->
                <div class="post__content col-lg-8 mx-auto">
                    <h1 class="pb-3" style="max-width: 970px;"> <?= $article["article_title"] ?></h1>
                    <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3">
                        <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
                            <a class="post-category cat-1" href="allArticles.php?catID=<?= $article['category_id'] ?>"
                                style="color: white; text-decoration: none; padding: 5px 10px; border-radius: 10px; background-color:<?= $category['category_color'] ?>"><?= $category['category_name'] ?></a>
                            <div class="fs-sm mx-3 ">
                                <?= date_format(date_create($article["article_created_time"]), "F d, Y ") ?></div>
                        </div>
                    </div>
                    <div class="row">
                    <article class="post-body col-xl-9 col-lg-8 text-break">
                        <?= $article["article_content"] ?>
                    </article>
                    <aside class="col-xl-3 col-lg-4">

</aside>
                    </div>
                 
                    <!-- author Info -->
                </div>
            </div><!-- /Article -->
            <!-- Aside -->
        </div>
        <!-- Comments -->
    </div>
</main><!-- /Main -->

<!-- Footer -->
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
<!-- /Footer -->

</body>

</html>