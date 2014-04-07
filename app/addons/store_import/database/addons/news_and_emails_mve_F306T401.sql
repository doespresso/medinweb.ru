ALTER TABLE `?:news_descriptions` CHANGE `lang_code` `lang_code` char(2) NOT NULL DEFAULT '';
UPDATE `?:news_descriptions` SET `lang_code` = LOWER(`lang_code`);
UPDATE `?:news_descriptions` SET `lang_code` = 'sl' WHERE `lang_code` = 'si';
ALTER TABLE `?:newsletter_descriptions` DROP COLUMN `body_txt`;
ALTER TABLE `?:newsletter_descriptions` CHANGE `lang_code` `lang_code` char(2) NOT NULL DEFAULT '';
UPDATE `?:newsletter_descriptions` SET `lang_code` = LOWER(`lang_code`);
UPDATE `?:newsletter_descriptions` SET `lang_code` = 'sl' WHERE `lang_code` = 'si';
ALTER TABLE `?:newsletter_descriptions` DROP COLUMN `format`;
ALTER TABLE `?:user_mailing_lists` CHANGE `lang_code` `lang_code` char(2) NOT NULL DEFAULT '';
UPDATE `?:user_mailing_lists` SET `lang_code` = LOWER(`lang_code`);
UPDATE `?:user_mailing_lists` SET `lang_code` = 'sl' WHERE `lang_code` = 'si';
