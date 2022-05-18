<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

$catID = "";

// Get All Categories
$stmt = $conn->prepare("SELECT *,COUNT(*) as article_count FROM `article` INNER JOIN category ON id_categorie=category_id GROUP BY id_categorie");
$stmt->execute();
$categories = $stmt->fetchAll();

if (isset($_GET["catID"])) {
    $catID = $_GET["catID"];
    if ($catID==24){
      if (!$loggedin) {
        header("location: login.php");
        exit;
    }
  }
    // Get Category Info
    $stmt = $conn->prepare("SELECT * FROM `category` WHERE category_id = ?");
    $stmt->execute([$catID]);
    $category = $stmt->fetch();

    // Get Latest articles
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE id_categorie = ?  ORDER BY `article_created_time` DESC ");
    $stmt->execute([$catID]);
    $articles = $stmt->fetchAll();
} else {

    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC ");
    $stmt->execute();
    $articles = $stmt->fetchAll();
}
?>
<title>2T Portfolio - 
<?php if ($catID==""): ?>
  Tất cả bài viết
<?php else: ?>
  <?= $category['category_name'] ?>
<?php endif ?>
</title>
<?php include "assest/gheader.php" ?>

<section class="container mt-4 mb-2 mb-md-4 mb-lg-5 pt-lg-2 pb-5">

    <!-- Page title + Layout switcher -->
    <div class="d-flex align-items-center justify-content-between mb-4 pb-1 pb-md-3">
        <h1 class="mb-0"><?php if ($catID==""): ?>
  Tất cả bài viết
<?php else: ?>
  <?= $category['category_name'] ?>
<?php endif ?></h1>

    </div>

    <!-- Blog list + Sidebar -->
    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <?php foreach ($articles as $article) : ?>
            <article class="card border-0 shadow-sm overflow-hidden border-primary card-hover my-2">
                <div class="row g-0">
                    <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                        style="background-image: url(<?= $article['article_image'] ?>); min-height: 15rem;">
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <a href="allArticles.php?catID=<?= $article['category_id'] ?>"
                                    style="color: white !important; background-color:<?= $article['category_color'] ?> !important "
                                    class="badge fs-sm text-nav bg-secondary text-decoration-none "><?= $article['category_name'] ?></a>
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
            </article>
            <div class="pb-2 pb-lg-3"></div>
            <?php endforeach;  ?>
        </div>


        <!-- Sidebar (Offcanvas below lg breakpoint) -->
        <aside class="col-xl-3 col-lg-4">
            <div class="offcanvas offcanvas-end offcanvas-expand-lg" id="blog-sidebar" tabindex="-1">

                <!-- Header -->
                <div class="offcanvas-header border-bottom">
                    <h3 class="offcanvas-title fs-lg">Sidebar</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>

                <!-- Body -->
                <div class="offcanvas-body">


                    <!-- Categories -->
                    <div class="card card-body mb-4">
                        <h3 class="h5">Categories</h3>
                        <ul class="nav flex-column fs-sm">
                            <li class="nav-item mb-2">
                                <a href="allArticles.php" class="nav-link py-1 px-0">Tất cả</a>
                            </li>
                            <?php foreach ($categories as $category) : ?>
                            <?php if ($category['category_id']==24): ?> <li class="nav-item mb-1">
                                <a href="allArticles.php?catID=<?= $category['category_id'] ?>"
                                    class="btn btn-success shadow-success highlight "><?= $category["category_name"] ?>
                                    <span class="badge bg-light ms-2"><?= $category["article_count"] ?></span></a>
                            </li>
                            <?php else: ?>

                            <li class="nav-item mb-1">
                                <a href="allArticles.php?catID=<?= $category['category_id'] ?>"
                                    class="nav-link py-1 px-0"><?= $category["category_name"] ?> <span
                                        class="fw-normal opacity-60 ms-1">(<?= $category["article_count"] ?>)</span></a>
                            </li>

                            <?php endif ?>

                            <?php endforeach; ?>
                        </ul>
                    </div>

                   
                </div>
            </div>
        </aside>
    </div>
</section>

</main>
<?php include "assest/footer.php" ?>