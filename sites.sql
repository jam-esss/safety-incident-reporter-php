CREATE TABLE `safety-incident-reporter`.`sites`
(
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'Site ID (AI)',
    `name` VARCHAR(128) NOT NULL COMMENT 'Site Name',
    `address` VARCHAR(256) NOT NULL COMMENT 'Site Address',
    `postcode` VARCHAR(16) NOT NULL COMMENT 'Site Postcode',
    `lat` DECIMAL(9, 6) NOT NULL COMMENT 'Latitude',
    `lng` DECIMAL(9, 6) NOT NULL COMMENT 'Longitude',
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time Created',
    `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time Updated',
    `removed_at` TIMESTAMP NULL DEFAULT NULL COMMENT 'Time Deleted',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;