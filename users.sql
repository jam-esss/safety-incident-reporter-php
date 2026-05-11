CREATE TABLE `safety-incident-reporter`.`users`
(
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'User ID (AI)',
    `fn` VARCHAR(60) NOT NULL COMMENT 'First Name',
    `sn` VARCHAR(60) NOT NULL COMMENT 'Surname',
    `email` VARCHAR(60) NOT NULL COMMENT 'Email',
    `password` TINYTEXT NOT NULL COMMENT 'Password (Hash)',
    `avatar` TEXT NULL DEFAULT NULL COMMENT 'Profile Picture',
    `permissions` INT NULL DEFAULT NULL COMMENT 'Permission Level\r\n0 = Super Admin\r\n1 = Admin\r\n2 = User',
    `tkn` VARCHAR(12) NOT NULL COMMENT 'Token',
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time Created',
    `removed_at` TIMESTAMP NULL DEFAULT NULL COMMENT 'Time Removed',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB COMMENT = 'Users Table';