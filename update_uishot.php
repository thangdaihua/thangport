<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

$uishot_id = $_GET["id"];

// Get uishot Data to display
$stmt = $conn->prepare("SELECT * FROM uishot WHERE uishot_id = ?");
$stmt->execute([$uishot_id]);
$uishot = $stmt->fetch();

?>

<title>Update uishot</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>


    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center ">
            <h1 class="display-3 font-weight-normal text-muted">Update a uishot</h1>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/update.php?type=uishot&id=<?= $uishot_id ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="uiShotTitle">uishot Name</label>
                            <input type="text" class="form-control" name="uiShotTitle" id="uiShotTitle" value="<?= $uishot["uishot_title"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="uiShotImg">UI shot Image</label>
                            <input type="text" class="form-control" name="uiShotImg" id="uiShotImg" value="<?= $uishot["uishot_image"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="uiShotHigh">uishot High</label>
                            <input type="text" class="form-control" name="uiShotHigh" id="uiShotHigh" value="<?= $uishot["uishot_high"] ?>">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success btn-lg w-25">Update</button>
                        </div>
                    </form>
                </div>



            </div>

        </div>

    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->


</body>

</html>