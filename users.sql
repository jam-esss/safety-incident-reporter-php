CREATE TABLE `safety-incident-reporter`.`users`
(
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'User ID (AI)',
    `tkn` VARCHAR(12) NOT NULL COMMENT 'Token',
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time Created',
    `removed_at` TIMESTAMP NULL DEFAULT NULL COMMENT 'Time Removed',
    `email` VARCHAR(60) NOT NULL COMMENT 'Email',
    `password` TINYTEXT NOT NULL COMMENT 'Password (Hash)',
    `fn` VARCHAR(60) NOT NULL COMMENT 'First Name',
    `sn` VARCHAR(60) NOT NULL COMMENT 'Surname',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB COMMENT = 'Users Table';