<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

// Check if the admin is already logged in, if yes then redirect him to home page
if (!$loggedin) {
    header("location: index.php");
    exit;
}

$stmt = $conn->prepare("SELECT * FROM uishot");
$stmt->execute();
$uishots = $stmt->fetchAll();

?>

<title>All UI shot</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center mb-0">
            <h1 class="display-3 font-weight-normal text-muted">All UI shot</h1>
        </div>

        <div class="bg-white p-4">

            <div class="row">

                <div class="col-lg-12 text-center mb-3">
                    <a class="btn btn-info" href="add_uishot.php">Add UI shot</a>
                </div>

            </div>

            <div class="row">
                <table class='table table-striped table-bordered'>

                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Title</th>
                            <th scope='col'>Image</th>
                            <th scope='col'>High</th>
                            <th scope='col' colspan="2">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($uishots as $uishot) :
                            echo "<tr>";
                            ?>

                            <td><?= $uishot['uishot_id'] ?></td>
                            <td><?= $uishot['uishot_title'] ?></td>
                            <td>
                              <a href="<?= $uishot['uishot_image'] ?>"> <img  style="width: 300px"  src="<?= $uishot['uishot_image'] ?>" alt=""> </a>
                            </td>
                            <td><?= $uishot['uishot_high'] ?></td>
                            <td>
                                <a class="btn btn-success" href="update_uishot.php?id=<?= $uishot['uishot_id'] ?> ">
                                    <i class="fa fa-pencil " aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="assest/delete.php?type=uishot&id=<?= $uishot['uishot_id'] ?> ">
                                    <i class="fa fa-trash " aria-hidden="true"></i>
                                </a>
                            </td>

                        <?php
                            echo "</tr>";
                        endforeach;
                        ?>
                    </tbody>

                </table>
            </div>



    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->


</body>

</html>