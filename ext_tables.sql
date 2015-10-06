CREATE TABLE pages (
	seo_canonical_url varchar(255) NOT NULL DEFAULT '',
	seo_noindex tinyint(4) unsigned DEFAULT '0' NOT NULL,
	seo_nofollow tinyint(4) unsigned DEFAULT '0' NOT NULL,
	seo_notranslate tinyint(4) unsigned DEFAULT '0' NOT NULL,
	seo_noimageindex tinyint(4) unsigned DEFAULT '0' NOT NULL,
	seo_og_title varchar(95) NOT NULL DEFAULT '',
	seo_og_type varchar(20) NOT NULL DEFAULT '',
	seo_og_url varchar(255) NOT NULL DEFAULT '',
	seo_og_image int(11) unsigned NOT NULL default '0',
	seo_og_description varchar(297) NOT NULL DEFAULT '',
	seo_og_fb_admins varchar(255) NOT NULL DEFAULT '',
	seo_og_fb_appid varchar(80) NOT NULL DEFAULT '',
	seo_latitude decimal(12,8) default NULL,
        seo_longitude decimal(12,8) default NULL,
);

CREATE TABLE pages_language_overlay (
	seo_og_title varchar(95) NOT NULL DEFAULT '',
	seo_canonical_url varchar(255) NOT NULL DEFAULT '',
	seo_og_url varchar(255) NOT NULL DEFAULT '',
	seo_og_description varchar(297) NOT NULL DEFAULT '',
	seo_og_image int(11) unsigned NOT NULL default '0',
);
