<?php
/**
 * String Urldecode plugin for Craft CMS 3.x
 *
 * Twig filters to urldecode a string.
 *
 * @link      https://www.akagibi.com
 * @copyright Copyright (c) 2019 Akagibi
 */

namespace akagibi\stringurldecode;

use akagibi\stringurldecode\twigextensions\StringUrldecodeTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class StringUrldecode
 *
 * @author    Akagibi
 * @package   StringUrldecode
 * @since     1
 *
 */
class StringUrldecode extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var StringUrldecode
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new StringUrldecodeTwigExtension());

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'string-urldecode',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
