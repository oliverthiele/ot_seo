<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'SEO');

$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',seo_og_title,seo_canonical_url,seo_og_url,seo_og_description,seo_og_image,';
