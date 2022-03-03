<?php
require("config/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h2>User Information</h2>
            <a href="create.php" class="btn btn-success pt-2 px-3">Add new</a>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $qry = $conn->query("SELECT*FROM tb_user");
                    $index = 0;
                    while ($rs = mysqli_fetch_object($qry)) {
                        $index++;
                        $pwd = base64_encode($rs->password);
                        $type = $rs->type == 1 ? "Admin" : "User";
                    ?>
                        <tr>
                            <td><?php echo $index; ?></td>
                            <td><?php echo $rs->username; ?></td>
                            <td><?php echo $pwd; ?></td>
                            <td><?php echo $type; ?></td>
                            <td>
                                <a href="edit.php?Id=<?php echo $rs->id; ?>" class="btn btn-primary px-4">Edit</a>
                                <a href="deleteControl.php?Id=<?php echo $rs->id; ?>" class="btn btn-danger px-4">Del</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>