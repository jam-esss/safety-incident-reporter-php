CREATE TABLE `safety-incident-reporter`.`incidents`
(
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'Incident ID (AI)',
    `reporter_id` INT NOT NULL COMMENT 'User ID (FK)',
    `site` TINYTEXT NOT NULL COMMENT 'Site Name (Will become ID)',
    `description` TEXT NOT NULL COMMENT 'Description',
    `severity` VARCHAR(10) NOT NULL COMMENT 'Severity',
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time Created',
    `removed_at` TIMESTAMP NULL DEFAULT NULL COMMENT 'Time Removed',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;