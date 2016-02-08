<?php
/*
 * PHP PDO CRUD Tutorial 
 * In this tutorial we will see that how to create database 
 * CRUD operations using Object Oriented concept in PDO
 * @author 	: Mohamad Zaki Mustafa
 * @contact 	: mohdzaki04@gmail.com
 * @fb	 	: https://www.facebook.com/zakimedia
 * @tw	 	: https://twitter.com/mzmfizaki
 */

/*
 * @name Add page
 * @description this file will show form for insert new data
 */
?>
<?php
/*
 * the database connection
 */
include_once 'inc/inc.config.php';


/*
 * included at the beginning of all files
 */
include_once 'inc/inc.header.php';
?>

<div class="row appgen">
    <?php
    /* Get all value of POST */
    if (isset($_POST['btn-save']) && $_POST['btn-save'] == "btn-save") {
        $fname = $_POST['fname'];
        $femail = $_POST['femail'];
        $fphone = $_POST['fphone'];

        if ($crud->create($fname, $femail, $fphone)) {
            header("Location: add.php?inserted");
        } else {
            header("Location: add.php?failure");
        }
    }

    if (isset($_GET['inserted']) && $_GET['inserted'] == "inserted") {
        echo '<div class="alert alert-info">The user has been saved. <a href="index.php"><strong>HOME</strong></a>!</div>';
    } else if (isset($_GET['failure']) && $_GET['failure'] == "failure") {
        echo '<div class="alert alert-warning">The user could not be saved. Please, try again.  <a href="index.php"><strong>HOME</strong></a>!</div>';
    } else {
        echo '<div class="alert alert-danger">Invalid Input. Please, try again.  <a href="index.php"><strong>HOME</strong></a>!</div>';
    }
    ?>
    <h3 class="text-center"><?php echo 'New Record' ?></h3>
    <form method='post' class="form-horizontal">
        <div class="form-group form-group-lg">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="fname" placeholder="Full Name" required> 
            </div>
        </div>    
        <div class="form-group form-group-lg">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-8">
                <input type="text" class="form-control"  name="femail" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group form-group-lg">
            <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-8">
                <input type="tel" class="form-control" name="fphone" placeholder="Phone Number" required>
            </div>
        </div>    
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success btn-lg" name="btn-save">
                    <span class="glyphicon glyphicon-plus"></span> Create New Record
                </button>
            </div>
        </div>
    </form>

</div>

<?php
/*
 * included at the end of all files 
 */
include_once 'inc/inc.footer.php';
