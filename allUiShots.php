<!-- Include Head -->
<?php include "assest/ghead.php"; ?>
<?php


//Get hightlight UIshot
$stmt = $conn->prepare("SELECT * FROM `uishot`");
$stmt->execute();
$hight_uishots = $stmt->fetchAll();
?>
<title>2T Portfolio UI shots</title>
<?php include "assest/gheader.php" ?>
<!-- Hero -->


<!-- Light / Dark mode (Comparison slider) -->

<!-- Features -->


<div class="container py-5 container mt-5 mb-3">
    <div class="row justify-content-center text-center pb-3 mb-sm-2 mb-lg-3">
        <div class="col-xl-6 col-lg-7 col-md-9">
            <h2 class="h1 mb-lg-4">UI shots</h2>
            <p class="mb-lg-4">Đây là các screen shots một số dự án mình từng tham gia thực hiện. Vì đây là UI shots nên truyền tải được đến mọi 
                người rất ít ý tưởng và cách giải quyết vấn đề của dự án, UI shots là cách để mình cho mọi người xem cảm quan và phong cách thiết kế UI của mình. Để em kỹ hơn thì mọi người nên xem ở các <a href="./allArticles.php?catID=24" > UI/UX Case Study </a> </p>
            <!-- <p class="fs-lg text-muted mb-0">Make sure all your tasks are organized so you can set the priorities and
            focus on important.</p> -->
        </div>
    </div>
    <div class="row justify-content-center text-center">
        <div class="">
            <div class="row">
                <?php foreach ($hight_uishots as $hight_uishot) : ?>
                <div class="col-md-4 col-xs-6 thum">
                    <div class="card border-primary card-hover shot-card mb-5">
                        <div class="card-body">
                        <a class="thumbnail thumbnail mb-3" href="#" data-image-id="" data-toggle="modal"
                            data-title="<?= $hight_uishot['uishot_title']?>"
                            data-image="<?= $hight_uishot['uishot_image']?>" data-target="#image-gallery">
                            <img class="shot-img pb-3" src="<?= $hight_uishot['uishot_image']?>" alt="Another alt text">
                        </a>
                        <b><?= $hight_uishot['uishot_title']?></b>
                        </div>
                       
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
            </div>
        </div>

        <div class="text-center"><a href="./allUiShots.php"
                class="btn text-center btn-primary shadow-primary btn-lg">Coi nữa</a></div>

    </div>
</div>

</div>
</main>
<?php include "assest/footer.php" ?>