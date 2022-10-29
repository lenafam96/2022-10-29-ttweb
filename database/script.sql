DROP DATABASE IF EXISTS `thuchanhbuoi3`;

CREATE DATABASE `thuchanhbuoi3`;

DROP TABLE IF EXISTS `thuchanhbuoi3`.`brands`;

CREATE TABLE `thuchanhbuoi3`.`brands` (
  `brand_id` INT(5) NOT NULL AUTO_INCREMENT,
  `brand_name` VARCHAR(50) NULL COLLATE 'utf8mb4_unicode_ci',
  PRIMARY KEY (`brand_id`))
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

INSERT INTO `thuchanhbuoi3`.`brands` (`brand_name`)
VALUES 
    ('Vinamilk'),
    ('Nutifood'),
    ('Abbott'),
    ('Daisy'),
    ('Dutch Lady'),
    ('Dumex');

DROP TABLE IF EXISTS `thuchanhbuoi3`.`categories`;

CREATE TABLE `thuchanhbuoi3`.`categories` (
  `category_id` INT(5) NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(50) NULL COLLATE 'utf8mb4_unicode_ci',
  PRIMARY KEY (`category_id`))
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

INSERT INTO `thuchanhbuoi3`.`categories` (`category_name`)
VALUES 
    ('Sữa đặc'),
    ('Sữa tươi'),
    ('Sữa chua'),
    ('Sữa bột');


DROP TABLE IF EXISTS `thuchanhbuoi3`.`products`;

CREATE TABLE `thuchanhbuoi3`.`products` (
  `product_id` INT(5) NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(50) NULL COLLATE 'utf8mb4_unicode_ci',
  `image` VARCHAR(200) NULL,
  `category_id` INT(5) NOT NULL,
  `brand_id` INT(5) NOT NULL,
  `weight` INT(11),
  `price` INT(11) NULL,
  `element` VARCHAR(500) NULL COLLATE 'utf8mb4_unicode_ci',
  `benefit` VARCHAR(500) NULL COLLATE 'utf8mb4_unicode_ci',
  PRIMARY KEY (`product_id`),
  FOREIGN KEY (`category_id`) REFERENCES `categories`(`category_id`),
  FOREIGN KEY (`brand_id`) REFERENCES `brands`(`brand_id`))
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

INSERT INTO `thuchanhbuoi3`.`products` (`product_name`,`image`,`category_id`,`brand_id`,`weight`,`price`,`element`,`benefit`)
VALUES 
    ('Daisy Vani','',4,4,450,41000,'',''),
    ('Daisy Không Đường','',4,4 ,900,79000,'','');

DROP TABLE IF EXISTS `thuchanhbuoi3`.`customers`;

CREATE TABLE `thuchanhbuoi3`.`customers` (
  `customer_id` INT(5) NOT NULL AUTO_INCREMENT,
  `customer_name` VARCHAR(50) NULL COLLATE 'utf8mb4_unicode_ci',
  `gender` INT(1) NOT NULL DEFAULT 0,
  `address` VARCHAR(200) NULL COLLATE 'utf8mb4_unicode_ci',
  `phone` VARCHAR(15) NULL,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`customer_id`))
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

INSERT INTO `thuchanhbuoi3`.`customers` (`customer_name`,`gender`,`address`,`phone`,`email`)
VALUES 
    ('Mai Hà Trang',1,'192 Kim Giang, Hoàng Mai, Hà Nội','0356254458','mhtrang@gmail.com'),
    ('Nguyễn Hoàng Nam',0,'104 Nguyễn An Ninh, Hoàng Mai, Hà Nội','0987654321','nhnam@gmail.com');

DROP TABLE IF EXISTS `thuchanhbuoi3`.`user`;

CREATE TABLE `thuchanhbuoi3`.`user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB;

INSERT INTO `user` (`email`, `password`) VALUES
('admin@gmail.com', '202cb962ac59075b964b07152d234b70');

DROP PROCEDURE IF EXISTS `USP_Login`;

DELIMITER //

CREATE PROCEDURE `USP_Login` (
  IN `email_in` varchar(50),
  IN `password_in` varchar(100)
)
BEGIN
  select * from user where user.email = email_in and user.password = password_in;
END //

DELIMITER ;