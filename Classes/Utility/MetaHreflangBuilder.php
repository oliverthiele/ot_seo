<?php
namespace OliverThiele\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Plugin\AbstractPlugin;

/**
 * Class MetaHreflangBuilder
 *
 * @package OliverThiele\Utility
 */
class MetaHreflangBuilder extends AbstractPlugin
{

    /**
     * @var array TypoScript Settings
     */
    protected $settings = array();

    public function getHreflang($content = '', $conf)
    {
        define('NL', chr(13));
        $this->settings = $conf['settings.'];

        /** @var \TYPO3\CMS\Core\Database\DatabaseConnection $db */
        $db = $GLOBALS['TYPO3_DB'];

        /**
         * HTML code for the output $htmlCode
         */
        $htmlCode = '<!-- ot_seo begin -->' . NL;

        $currentPageUid = $GLOBALS['TSFE']->page['uid'];

        // Default language
        $url = $this->getUrlForSysLanguageUid(0);
        $htmlCode .= $this->buildHreflangCodeForSysLanguageUid(0, $url);

        // Pages Language Overlay
        $res = $db->exec_SELECTquery('uid, pid, title, sys_language_uid', 'pages_language_overlay',
            'pid=' . $currentPageUid);

        while ($row = $db->sql_fetch_assoc($res)) {
            $url = $this->getUrlForSysLanguageUid($row['sys_language_uid']);
            $htmlCode .= $this->buildHreflangCodeForSysLanguageUid($row['sys_language_uid'], $url);
        }

        $db->sql_free_result($res);

        $htmlCode .= '<!-- ot_seo end-->' . NL;
        return $htmlCode;
    }

    /**
     * This function is needed for extbase extensions with a hidden default action / controller in the url.
     *
     * @param $string
     * @return mixed
     */
    protected function parseUrl($string)
    {
        $search = '/detail/News/';
        $replace = '/';
        return str_replace($search, $replace, $string);
    }

    /**
     * Build the HTML Code with url and language code ([languageCode]-[countryCode])
     *
     * @param integer $uid sys_language_uid
     * @param string $url URL
     * @return string $html HTML-Code with the <link>-Tag
     */
    protected function buildHreflangCodeForSysLanguageUid($uid, $url)
    {
        define('NL', chr(13));
        $html = '<link rel="alternate" href="' . $url . '" hreflang="' . $this->settings[$uid . '.']['languageCode'] . '" />' . NL;
        return $html;
    }

    /**
     * Get the absolute url the current page for a given language uid.
     * The parseUrl() function must be edited, if the default action/controller from an extbase extension is hidden
     *
     * @param integer $sys_language_uid sys_language_uid
     * @return string URL
     */
    private function getUrlForSysLanguageUid($sys_language_uid)
    {
        /** @var \TYPO3\CMS\Extbase\Object\ObjectManager $objectManager */
        $objectManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');

        /** @var \TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder $uriBuilder */
        $uriBuilder = $objectManager->get('TYPO3\\CMS\\Extbase\\Mvc\\Web\\Routing\\UriBuilder');

        $uriBuilder->reset();
        $uriBuilder->setTargetPageUid($GLOBALS['TSFE']->page['uid']);
        $uriBuilder->setAddQueryString('true');
        $uriBuilder->setArguments(
            array('L' => $sys_language_uid)
        );
        $uriBuilder->setCreateAbsoluteUri(true);

        $url = $this->parseUrl($uriBuilder->build());
//        DebuggerUtility::var_dump($url, 'Link ' . $sys_language_uid);

        return $url;
    }
}
