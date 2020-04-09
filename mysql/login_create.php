<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php createRows(); ?>

<!-- this section will retrive the HTML head code -->
<?php include "includes/header.php"; ?>

    <div class="container">

        <div class="col-sm-6">

            <form action="login_create.php" method="post">
            <h1 class="text-center">Create</h1>
                <div class="form-group">
                    <lable for="username">username</lable>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="password">password</lable>
                    <input type="password" name="password" class="form-control">
                </div>

                <input type="submit" name="submit" value="Create" class="btn btn-primary">
            </form>

        </div>

<?php include "includes/footer.php"; ?>