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
    /**
     * @return array
     */
    public function getSubscribedEvents()
    {
        $events = [];
        if ((bool)$this->config('plugins.config.highlight.twig', false)) {
            $events[] = 'onTwigInitialized';
        }
        if ((bool)$this->config('plugins.config.highlight.shortcode', true)) {
            $events[] = 'onShortcodeInitialized';
        }
        return $events;
    }

    public function onTwigInitialized($twig)
    {
        $twig->addExtension(new HighlightExtension());
    }

    public function onShortcodeInitialized($shortcode)
    {
        $shortcode->add('code', [$this, 'codeShortcode']);
    }

    public function codeShortcode($options, $content)
    {
        $name = empty($options[0]) ? 'text' : $options[0];
        $geshi = new \GeSHi(trim($content), $name);
        #$geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS);
        return sprintf(
            '<div class="highlight highlight-%s">%s</div>',
            $name,
            $geshi->parse_code()
        );
    }

}
