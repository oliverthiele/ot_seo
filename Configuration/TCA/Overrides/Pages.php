<?php
$tempColumns = Array(
    'seo_canonical_url' => Array(
        'exclude' => 1,
        'label' => 'Canonical URL',
        'config' => array(
            'type' => 'input',
            'size' => '50',
            'max' => '255',
            'checkbox' => '',
            'eval' => 'trim',
            'placeholder' => 'http://www.example.com/directory/page.html',
            'wizards' => Array(
                '_PADDING' => 2,
                'link' => Array(
                    'type' => 'popup',
                    'title' => 'Link',
                    'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                    'module' => array(
                        'name' => 'wizard_element_browser',
                        'urlParameters' => array(
                            'mode' => 'wizard',
                            'act' => 'url'
                        )
                    ),
                    'params' => array(
                        'blindLinkOptions' => 'mail',
                    ),
                    'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                ),
            ),
        ),
    ),
    'seo_noindex' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.noindex',
        'config' => array(
            'type' => 'check',
            'default' => 0
        )
    ),
    'seo_nofollow' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.nofollow',
        'config' => array(
            'type' => 'check',
            'default' => 0
        )
    ),
    'seo_notranslate' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.notranslate',
        'config' => array(
            'type' => 'check',
            'default' => 0
        )
    ),
    'seo_noimageindex' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.noimageindex',
        'config' => array(
            'type' => 'check',
            'default' => 0
        )
    ),
    'seo_og_title' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtitle',
        'config' => array(
            'type' => 'input',
            'size' => '50',
            'max' => '95',
            'eval' => 'trim'
        )
    ),
    'seo_og_image' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogimage',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'seoOgImage',
            array(
                'maxitems' => 1,
                'appearance' => array(
                    'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                ),
                'foreign_types' => array(
                    '0' => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    )
                )
            ),
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
    ),
    'seo_og_type' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtype',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('', ''),
                array('LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtype.website', 'website'),
                array('LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtype.blog', 'blog'),
                array('LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtype.article', 'article'),
                array('LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtype.product', 'product'),
                array('LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtype.profile', 'profile'),
                array('LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtype.place', 'place'),
            )
        )
    ),
    'seo_og_url' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogurl',
        'config' => array(
            'type' => 'input',
            'size' => '50',
            'max' => '255',
            'checkbox' => '',
            'eval' => 'trim',
            'placeholder' => 'http://www.example.com/directory/page.html',
            'wizards' => Array(
                '_PADDING' => 2,
                'link' => Array(
                    'type' => 'popup',
                    'title' => 'Link',
                    'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                    'module' => array(
                        'name' => 'wizard_element_browser',
                        'urlParameters' => array(
                            'mode' => 'wizard',
                            'act' => 'url'
                        )
                    ),
                    'params' => array(
                        'blindLinkOptions' => 'mail',
                    ),
                    'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                ),
            ),
        ),
    ),
    'seo_og_description' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogdescription',
        'config' => array(
            'type' => 'text',
            'rows' => 5,
            'max' => 297
        ),
    ),
    'seo_og_fb_admins' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.fb_admins',
        'config' => array(
            'type' => 'input',
            'size' => '50',
            'max' => '255',
            'eval' => 'trim',
            'placeholder' => '12345,67890,123123'
        )
    ),
    'seo_og_fb_appid' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.fb_appid',
        'config' => array(
            'type' => 'input',
            'size' => '80',
            'max' => '255',
            'eval' => 'trim',
            'placeholder' => '1234567890'
        )
    ),
    'seo_latitude' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.latitude',
        'config' => array(
            'type' => 'input',
            'size' => '12',
            'max' => '12',
            'eval' => 'trim',
            'is_in' => '0123456789.-',
            'placeholder' => '90.12345678'
        )
    ),
    'seo_longitude' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.longitude',
        'config' => array(
            'type' => 'input',
            'size' => '12',
            'max' => '12',
            'eval' => 'trim',
            'is_in' => '0123456789.-',
            'placeholder' => '180.12345678'
        )
    ),
);

$tempColumnsLanguageOverlay = Array(
    'seo_og_title' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtitle',
        'config' => array(
            'type' => 'input',
            'size' => '50',
            'max' => '95',
            'eval' => 'trim'
        )
    ),
    'seo_canonical_url' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.canonicalurl',
        'config' => array(
            'type' => 'input',
            'size' => '50',
            'max' => '255',
            'checkbox' => '',
            'eval' => 'trim',
            'placeholder' => 'http://www.example.com/directory/page.html',
            'wizards' => Array(
                '_PADDING' => 2,
                'link' => Array(
                    'type' => 'popup',
                    'title' => 'Link',
                    'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                    'module' => array(
                        'name' => 'wizard_element_browser',
                        'urlParameters' => array(
                            'mode' => 'wizard',
                            'act' => 'url'
                        )
                    ),
                    'params' => array(
                        'blindLinkOptions' => 'mail',
                    ),
                    'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                ),
            ),
        ),
    ),
    'seo_og_url' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogurl',
        'config' => array(
            'type' => 'input',
            'size' => '50',
            'max' => '255',
            'checkbox' => '',
            'eval' => 'trim',
            'placeholder' => 'http://www.example.com/directory/page.html',
            'wizards' => Array(
                '_PADDING' => 2,
                'link' => Array(
                    'type' => 'popup',
                    'title' => 'Link',
                    'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                    'module' => array(
                        'name' => 'wizard_element_browser',
                        'urlParameters' => array(
                            'mode' => 'wizard',
                            'act' => 'url'
                        )
                    ),
                    'params' => array(
                        'blindLinkOptions' => 'mail',
                    ),
                    'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                ),
            ),
        ),
    ),
    'seo_og_description' => Array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogdescription',
        'config' => array(
            'type' => 'text',
            'rows' => 5,
            'max' => 297
        ),
    ),
    'seo_og_image' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogimage',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'seoOgImage',
            array(
                'maxitems' => 1,
                'appearance' => array(
                    'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                ),
                'foreign_types' => array(
                    '0' => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
                        'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                    )
                )
            ),
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', $tempColumnsLanguageOverlay,
    1);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--div--;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.metadata2,
     seo_canonical_url;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.canonicalurl,
     --palette--;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.seo_robots;seo,
     --palette--;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.seo_opengraph;og,
     seo_latitude;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.latitude,
     seo_longitude;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.longitude,
     seo_og_title;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtitle,
     seo_og_url;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogurl,
     seo_og_description;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogdescription,
     seo_og_image;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogimage,
     --palette--;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.seo_facebook;fb,
     seo_og_fb_appid;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.fb_appid
    ',
    '',
    'after:lastUpdated'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages_language_overlay',
    '--div--;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.metadata2,
     seo_canonical_url;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.canonicalurl,
     seo_og_title;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtitle,
     seo_og_url;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogurl,
     seo_og_description;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogdescription,
     seo_og_image;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogimage',
    '',
    'after:lastUpdated'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'seo',
    'seo_noindex;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.noindex,
     seo_nofollow;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.nofollow,
     seo_notranslate;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.notranslate,
     seo_noimageindex;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.noimageindex
    ',
    'after:seo_canonical_url'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'og',
    'seo_og_type;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.ogtype',
    'after:seo'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'fb',
    'seo_og_fb_admins;LLL:EXT:ot_seo/Resources/Private/Language/locallang_tca.xlf:pages.fb_admins',
    'after:og'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages_language_overlay',
    'seo',
    '',
    'after:seo_canonical_url'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages_language_overlay',
    'og',
    '',
    'after:seo'
);
