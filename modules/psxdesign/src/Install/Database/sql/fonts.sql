CREATE TABLE IF NOT EXISTS `PREFIX_psxdesign_fonts`
    (
    `id` INT(10) UNSIGNED AUTO_INCREMENT  NOT NULL,
    `variable_name` VARCHAR(255) NOT NULL,
    `variable_type` VARCHAR(64) NOT NULL,
    `font` VARCHAR(64) NOT NULL,
    `style` VARCHAR(64) NOT NULL,
    `size` INT(10) NOT NULL,
    `theme_name` VARCHAR(64) NOT NULL,
    PRIMARY KEY(id)
    ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`
    ENGINE = ENGINE_TYPE;
