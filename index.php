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
 * @name Main page
 * @description this file will show the records from the mysql database. 
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

<div class="row mzm">
    <?php
    /*
     * replace include_once with other file
     */
    include_once 'inc/inc.main.php';
    ?>

</div>

<?php
/*
 * included at the end of all files 
 */
include_once 'inc/inc.footer.php';
