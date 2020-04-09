<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php deleteRows(); ?>

<?php include "includes/header.php"; ?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
            <form action="login_delete.php" method="post">
                <div class="form-group">
                    <label for="id" class = "text-center">Choose a user to delete: </label>
                        <select name="id" id="">
                        <option value="none" selected>
                            Select an Option
                            </option> 
                        <?php showAllData(); ?>
                        </select>
                    </div>
                <input type="submit" name="submit" value="Delete" class="btn btn-primary">
            </form>
        </div>
    </div>
<?php include "includes/footer.php"; ?>
