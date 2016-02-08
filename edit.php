<?php
/*
 * PHP Sample
 * Collection of Basic programming using PHP and MySQL
 * @author 	: Mohamad Zaki Mustafa
 * @contact 	: mohdzaki04@gmail.com
 * @fb	 	: https://www.facebook.com/zakimedia
 * @tw	 	: https://twitter.com/mzmfizaki
 */

/*
 * @name Edit page
 * @description this file will show form for update data
 */
?>
<?php
/*
 * the database connection
 */
include_once 'inc/inc.dbconfig.php';


/*
 * included at the beginning of all files
 */
include_once 'inc/inc.header.php';
?>

<div class="row appgen">
    <?php
    /* Get all value of POST */
    if (isset($_POST['btn-update'])) {
        $id = $_GET['edit_id'];
        $fname = $_POST['fname'];
        $femail = $_POST['femail'];
        $fphone = $_POST['fphone'];

        if ($crud->update($id, $fname, $femail, $fphone)) {
            echo '<div class="alert alert-info">The user has been updated. <a href="index.php"><strong>HOME</strong></a>!</div>';
        } else {
            echo '<div class="alert alert-warning">The bookmark could not be saved. Please, try again.</div>';
        }
    }

    /* Get edit_id value */
    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        extract($crud->get_data_user($id));
    }
    ?>
    <h3 class="text-center"><?php echo 'Update Record' ?></h3>
    <form method='post' class="form-horizontal">
        <div class="form-group form-group-lg">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="fname" value="<?php echo $name; ?>" required> 
            </div>
        </div>    
        <div class="form-group form-group-lg">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-8">
                <input type="text" class="form-control"  name="femail" value="<?php echo $email; ?>" required>
            </div>
        </div>
        <div class="form-group form-group-lg">
            <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-8">
                <input type="tel" class="form-control" name="fphone" value="<?php echo $phone; ?>" required>
            </div>
        </div>    
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success btn-lg"  name="btn-update">
                    <span class="glyphicon glyphicon-plus"></span> Update this Record
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
