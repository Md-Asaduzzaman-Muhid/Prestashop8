CREATE TABLE IF NOT EXISTS `PREFIX_psxdesign_logo`
(
    `id` INT(10) UNSIGNED AUTO_INCREMENT  NOT NULL,
    `logo_destination` enum('header', 'email', 'invoice') NOT NULL,
    `logo_type` enum('text', 'image') NOT NULL,
    `text` VARCHAR(64),
    `font` VARCHAR(64),
    `use_header_logo` tinyint(1),
    `font_size` INT(10),
    `color` VARCHAR(64),
    `style` VARCHAR(64),
    `active` tinyint(1),
    PRIMARY KEY(id)
    ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`
    ENGINE = ENGINE_TYPE;
