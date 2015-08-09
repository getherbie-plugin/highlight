<?php

/**
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace herbie\plugin\highlight;

use herbie\plugin\highlight\classes\HighlightExtension;

include_once (__DIR__ . '/vendor/geshi-1.0.8.15/geshi.php');

class HighlightPlugin extends \Herbie\Plugin
{

    public function onTwigInitialized(\Herbie\Event $event)
    {
        $event['twig']->addExtension(new HighlightExtension());
    }
}
