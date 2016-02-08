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
 * @name Main file
 * Class Name : crud call as $crud
 * Function dataview()
 * @description put initial data from table
 */
?>
<div class="btn-group pull-right" role="group" aria-label="...">
    <a class="btn btn-info" href="add.php">Add Data</a>  
</div>
<table id="index_users" class="table table-striped table-bordered table-highlight table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        #Query Statement Select All from users
        $query = "SELECT * FROM users";

        $users = $crud->get_all_data($query);
        ?>
        <?php //print_r($results) ?>
        <?php foreach ($users as $user): ?>
            <tr id="user-<?php echo $user['id']; ?>">
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>                
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a class="btn btn-info btn-sm" href="edit.php?edit_id=<?php print($user['id']); ?>">Edit Form</a>
                    <a class="btn btn-primary btn-sm edit-ajax" id="edit-<?php print($user['id']); ?>">Edit Ajax</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>