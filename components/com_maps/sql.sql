CREATE TABLE `cs_profiles` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `first_name` varchar(255) NOT NULL default '',
  `last_name` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `password` varchar(40) NOT NULL default '',
  `salt` varchar(10) NOT NULL default '',
  `status` enum('active','passive') NOT NULL default 'active',
  `role` tinyint(4) unsigned NOT NULL default '1',
  `about` varchar(255) NOT NULL,
  `date_reg` datetime NOT NULL default '0000-00-00 00:00:00',
  `date_nav` datetime NOT NULL default '0000-00-00 00:00:00',
  `color` varchar(6) NOT NULL,
  `rate` float NOT NULL,
  `rate_count` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `latlng268` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `profile` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL default '',
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  PRIMARY KEY (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
