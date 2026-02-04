CREATE TABLE `ticket_answers` (
  `ID` int(7) NOT NULL auto_increment,
  `ticket` int(6) default '0',
  `message` text,
  `rep` int(5) NOT NULL default '0',
  `reference` int(7) default NULL,
  `timestamp` timestamp(14) NOT NULL,
  PRIMARY KEY  (`ID`)
);

CREATE TABLE `ticket_attachments` (
  `ID` int(7) NOT NULL auto_increment,
  `ticket` int(6) NOT NULL default '0',
  `ref` int(7) NOT NULL default '0',
  `filename` varchar(100) NOT NULL default '',
  `type` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`ID`)
);

CREATE TABLE `ticket_banlist` (
  `value_id` int(11) NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`value_id`)
);
INSERT INTO `ticket_banlist` (`value_id`, `value`) VALUES (1, 'mailer-daemon');
INSERT INTO `ticket_banlist` (`value_id`, `value`) VALUES (2, 'Mail Delivery Subsystem');
INSERT INTO `ticket_banlist` (`value_id`, `value`) VALUES (3, 'Mail Delivery System');

CREATE TABLE `ticket_categories` (
  `ID` int(5) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `pophost` varchar(200) NOT NULL default '',
  `popuser` varchar(200) NOT NULL default '',
  `poppass` varchar(200) NOT NULL default '',
  `email` varchar(200) NOT NULL default '',
  `signature` text NOT NULL,
  `hidden` int(1) NOT NULL default '0',
  PRIMARY KEY  (`ID`)
);
INSERT INTO `ticket_categories` VALUES (4, 'Support', '', '', '', 'user@domain.com', 'Support', 0);

CREATE TABLE `ticket_config` (
  `accept_attachments` int(1) NOT NULL default '0',
  `answer_method` enum('pop3','automatic') NOT NULL default 'automatic',
  `attachment_size` int(10) NOT NULL default '1048576',
  `attachment_dir` varchar(255) NOT NULL default 'attachments',
  `attachment_url` varchar(255) NOT NULL default 'attachments',
  `search_disp` int(1) NOT NULL default '1',
  `umq` int(3) default '3',
  `save_headers` int(1) NOT NULL default '0',
  `time_format` varchar(255) NOT NULL default 'l, F j Y g:ia',
  `min_interval` int(20) default '0',
  `ticket_max` int(3) NOT NULL default '20',
  `remove_original` int(1) NOT NULL default '1',
  `remove_tag` varchar(255) NOT NULL default '-- do not edit --',
  `ticket_response` int(1) NOT NULL default '1',
  `ticket_msg` text NOT NULL,
  `ticket_subj` varchar(255) NOT NULL default '',
  `limit_response` int(1) NOT NULL default '1',
  `limit_email` varchar(75) NOT NULL default '',
  `limit_subj` varchar(255) NOT NULL default '',
  `limit_msg` text NOT NULL,
  `alert_new` int(1) NOT NULL default '0',
  `alert_email` varchar(255) NOT NULL default '',
  `alert_user` varchar(255) NOT NULL default '',
  `alert_subj` varchar(255) NOT NULL default '',
  `alert_msg` text,
  `message_response` int(1) NOT NULL default '1',
  `message_subj` varchar(255) NOT NULL default '',
  `message_msg` text NOT NULL,
  `trans_response` int(1) NOT NULL default '1',
  `trans_subj` varchar(255) NOT NULL default '',
  `trans_msg` varchar(255) NOT NULL default '',
  `timezone` varchar(255) NOT NULL default '',
  `tickets_per_page` int(3) NOT NULL default '20',
  `root_url` varchar(255) NOT NULL default '',
  `filetypes` TEXT NOT NULL,
  FULLTEXT KEY `message_subj` (`message_subj`)
);
INSERT INTO `ticket_config` VALUES (0, 'automatic', 1048576, '', '', 1, 3, 0, 'l, F j Y g:ia', 60, 20, 1, '-- do not edit --', 1, 'A support ticket has been created (#%ticket) and a representative will get back to you shortly.\r\n\r\nYou can view this ticket progress online here: http://domain.com/osticket/view.php?e=%email&t=%ticket.\r\n\r\nNOTE: If you wish to send additional information regarding this ticket, please do not send another email. Instead, reply to this email.', 'Support Ticket Opened [#%ticket]', 1, 'automailer@domain.com', 'Support Ticket Denied', 'No support ticket has been created for the email sent to %local_email because there is a maximum of %ticket_max tickets.\r\n\r\nTo be able to open another ticket, you must close one of your previous ones here:\r\nhttps://secure.enhance.com/tickets/view.php', 0, 'alert@domain.com', 'you@domain.com', 'New Message Alert', 'http://domain.com/osticket/admin.php?a=view&id=%ticket', 1, '[#%ticket] Message Added', 'Your reply to support ticket #%ticket has been noted.\r\n\r\nYou can view this ticket progress online here: http://domain.com/osticket/view.php?e=%email&t=%ticket.', 1, '[#%ticket] Department Transfer', 'Your email was transferred to the %cat_name department for further review.\r\n\r\n%trans_msg', '-7', 20, '', '.txt;.jpg;.gif;.png;');

CREATE TABLE `ticket_groups` (
  `ID` int(10) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `pref` int(1) NOT NULL default '0',
  `mail` int(1) NOT NULL default '0',
  `cat` int(1) NOT NULL default '0',
  `rep` int(1) NOT NULL default '0',
  `user_group` int(1) NOT NULL default '0',
  `banlist` int(1) NOT NULL default '0',
  `cat_access` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`ID`)
);
INSERT INTO `ticket_groups` VALUES (1, 'Administrator', 1, 1, 1, 1, 1, 1, 'all');

CREATE TABLE `ticket_messages` (
  `ID` int(7) NOT NULL auto_increment,
  `ticket` int(6) NOT NULL default '0',
  `message` text,
  `headers` text NULL,
  `timestamp` timestamp(14) NOT NULL,
  PRIMARY KEY  (`ID`)
);

CREATE TABLE `ticket_privmsg` (
  `ID` int(10) NOT NULL auto_increment,
  `rep` int(10) NOT NULL default '0',
  `message` text NOT NULL,
  `timestamp` timestamp(14) NOT NULL,
  `ticket` int(6) NOT NULL default '0',
  `attachment` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`ID`)
);

CREATE TABLE `ticket_reps` (
  `ID` int(5) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `username` varchar(50) NOT NULL default '',
  `password` varchar(255) default NULL,
  `signature` text NOT NULL,
  `user_group` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`ID`)
);
INSERT INTO `ticket_reps` VALUES (5, 'admin', 'admin@domain.com', 'admin', 'a0f848942ce863cf53c0fa6cc684007d', '', '1');

CREATE TABLE `tickets` (
  `subject` varchar(50) NOT NULL default '[No Subject]',
  `name` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `phone` varchar(20) default NULL,
  `status` enum('open','closed') NOT NULL default 'open',
  `ID` int(6) NOT NULL default '0',
  `cat` int(5) NOT NULL default '0',
  `priority` tinyint(1) NOT NULL default '2',
  `ip` varchar(255) NOT NULL default '',
  `trans_msg` varchar(255) NOT NULL default '',
  `timestamp` timestamp(14) NOT NULL,
  PRIMARY KEY  (`ID`)
);
