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
 * @name Delete page
 * @description this file will delete data based on selected id
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

<div class="row mzm">

    <?php
    /* Get delete_id value */
    if (isset($_GET['delete_id']) && is_numeric($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        $crud->delete($id);
        if ($crud->delete($id)) {
            header("Location: delete.php?deleted");
        } else {
            header("Location: delete.php?failure");
        }
    }
    if (isset($_GET['deleted']) && $_GET['deleted'] = "deleted") {
        echo '<div class="alert alert-info">The user has been deleted. <a href="index.php"><strong>HOME</strong></a>!</div>';
    } else if (isset($_GET['failure']) && $_GET['failure'] = "failure") {
        echo '<div class="alert alert-warning">The user could not be delete. Please, try again. <a href="index.php"><strong>HOME</strong></a>!</div>';
    } else {
        echo '<div class="alert alert-danger">Invalid Input. <a href="index.php"><strong>HOME</strong></a>!</div>';
    }
    ?>

</div>
<?php
/*
 * included at the end of all files 
 */
include_once 'inc/inc.footer.php';
