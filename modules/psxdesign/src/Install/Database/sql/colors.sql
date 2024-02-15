CREATE TABLE IF NOT EXISTS `PREFIX_psxdesign_color`
(
    `id` INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,
    `variable_name` VARCHAR(255) NOT NULL,
    `variable_type` enum('css_selector', 'scss_variable', 'css_variable') NOT NULL,
    `value` VARCHAR(7) NOT NULL,
    `id_palette` INT(10) UNSIGNED NOT NULL,
    PRIMARY KEY(`id`),
    FOREIGN KEY (`id_palette`) REFERENCES `PREFIX_psxdesign_colors_palette` (`id`)
    ) DEFAULT CHARACTER SET `utf8mb4` COLLATE `utf8mb4_unicode_ci`
    ENGINE = ENGINE_TYPE;
