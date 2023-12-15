CREATE TABLE `Submitted`(
    `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `sender-name` VARCHAR(255),
    `sender-address` VARCHAR(255),
    `sender-phone` VARCHAR(255),
    `receiver-name` VARCHAR(255),
    `receiver-address` VARCHAR(255),
    `receiver-phone` VARCHAR(255),
    `item-name` VARCHAR(255),
    `item-weight` VARCHAR(255),
    `item-value` VARCHAR(255),
    `tracking-code` VARCHAR(255) DEFAULT 'empty',
    `held` VARCHAR(100) DEFAULT 'false',
    `status` VARCHAR(100) DEFAULT 'panding'
);