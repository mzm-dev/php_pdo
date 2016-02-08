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
 * @name View page
 * @description this file will show form for update data
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
    /* Get view_id value */
    if (isset($_GET['view_id']) && is_numeric($_GET['view_id'])) {
        $id = $_GET['view_id'];
        extract($crud->read($id));
    }
    ?>
    <h3 class="text-center"><?php echo 'Details Record' ?></h3>
    <div class="col-lg-offset-3 col-md-6">
        <table class='table table-bordered'>
            <tr>
                <th>Name</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <th>Action</th>
                <td>
                    <a class="btn btn-info btn-sm" href="edit.php?edit_id=<?php print($user['id']); ?>">Edit</a>                               
                    <a class="btn btn-danger btn-sm" href="delete.php?delete_id=<?php print($user['id']); ?>" onClick="return confirm('are you sure you want to delete?');">Delete</a>                        
                </td>
            </tr>
        </table>
    </div>
</div>

<?php
/*
 * included at the end of all files 
 */
include_once 'inc/inc.footer.php';
