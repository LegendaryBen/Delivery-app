CREATE TABLE `Tracking`(
    `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `shipping-id` VARCHAR(255),
    `held` VARCHAR(255) DEFAULT 'false',
    `current` VARCHAR(255) DEFAULT 'true',
    `shipping-title` VARCHAR(255) DEFAULT 'shipping',
    `location` VARCHAR(255),
    `message` TEXT DEFAULT 'empty',
    `date` VARCHAR(200),
    `time` VARCHAR(200)
);