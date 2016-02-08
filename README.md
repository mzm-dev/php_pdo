# Basic PHP

Dalam tutorial ini, kita akan lihat bagaimana mewujudkan operasi 
Pangkalan Data CRUD MySQL dengan menggunakan konsep Berorientasikan Objek (_OO - Object Oriented_) PHP dan PDO.
Dalam menghasilkan rekaan _front-end_, tutorial ini menggunakan _Bootstrap framework_.



# Database & Table 

Our database and table will be as follow 

```php
--
-- Database: `db_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;


-- 
-- Dumping data for table `bangsa`
-- 

INSERT INTO `users` VALUES (1, 'Nur Azyani bin Abdul Manaf','azyani@gmail.com','0113456789');
INSERT INTO `users` VALUES (2, 'Nurul Annisa Anuar','annisa@gmail.com','0123456789');
INSERT INTO `users` VALUES (3, 'Saifullah Poniman','saifullah@gmail.com','0133456789');
INSERT INTO `users` VALUES (4, 'Mohd Salleh Daim','salled.daim@gmail.com','0143456789');

```

# Directory

Our directory will be as follow 

```php

bootstrap/
   --css/
      --bootstrap.min.css
   --js/
       --bootstrap.min.js
   --fonts/
       --glyphicons-halflings-regular.eot
       --glyphicons-halflings-regular.svg
       --glyphicons-halflings-regular.ttf
       --glyphicons-halflings-regular.woff
js/
   --jquery.min.js
css/
   --style.css
inc/
   --inc.dbconfig.php
   --inc.class.user.php  
   --inc.footer.php
   --inc.header.php
   --inc.main.php  
index.php
add.php
edit.php
view.php


```