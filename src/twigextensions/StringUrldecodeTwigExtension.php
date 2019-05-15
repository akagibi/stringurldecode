<?php
/**
 * String Urldecode plugin for Craft CMS 3.x
 *
 * Twig filters to urldecode a string.
 *
 * @link      https://www.akagibi.com
 * @copyright Copyright (c) 2019 Akagibi
 */

namespace akagibi\stringurldecode\twigextensions;

use akagibi\stringurldecode\StringUrldecode;

use Craft;

/**
 * @author    Akagibi
 * @package   StringUrldecode
 * @since     1
 */
class StringUrldecodeTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'StringUrldecode';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('urldecode', [$this, 'urldecode']),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('urldecode', [$this, 'urldecode']),
        ];
    }

    /**
     * @param null $text
     *
     * @return string
     */
    public function urldecode($str)
    {
        return urldecode($str);
    }
}
