<!-- Include Head -->
<?php include "assest/head.php"; ?>

<title>Add uishot</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">Submit a uishot</h1>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/insert.php?type=uishot" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="uiShotTitle">uishot Name</label>
                            <input type="text" class="form-control" name="uiShotTitle" id="uiShotTitle" value="">
                        </div>
                        <div class="form-group">
                            <label for="uiShotImg">UI shot Image</label>
                            <input type="text" class="form-control" name="uiShotImg" id="uiShotImg" value="">
                        </div>
                        <div class="form-group">
                            <label for="uiShotHigh">uishot High</label>
                            <input type="text" class="form-control" name="uiShotHigh" id="uiShotHigh" value="">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Submit</button>
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