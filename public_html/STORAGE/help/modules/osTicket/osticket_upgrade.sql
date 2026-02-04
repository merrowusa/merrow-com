# osTicket MySQL Database Upgrade
# only use if upgrading from 1.2.x
# --------------------------------------------------------

ALTER TABLE `ticket_banlist` ADD `value_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST ; 
ALTER TABLE `ticket_groups` ADD `banlist` INT(1) NOT NULL DEFAULT '0' AFTER `user_group` ;