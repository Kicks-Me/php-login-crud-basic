<?php
require("config/config.php");

$id = $_REQUEST["Id"];

$qry = $conn->query("SELECT * FROM tb_user WHERE Id=" . $id);

$rs = mysqli_fetch_object($qry);

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
        <div class="row justify-content-center">
            <div class="col-4">
                <h2>Add new user</h2>
                <form action="editControl.php?Id=<?php echo $_REQUEST["Id"]; ?>" method="post">
                    <div class="mb-3 mt-3">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo $rs->username; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo $rs->password; ?>">
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="type" value="0" <?php if ($rs->type == 0) { ?> checked <?php } ?>>
                        <label class="form-check-label" for="radio1">User</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="type" value="1" <?php if ($rs->type == 1) { ?> checked<?php } ?>>
                        <label class="form-check-label" for="radio2">Admin</label>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 mt-3">Edit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>