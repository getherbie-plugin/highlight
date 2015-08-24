<?php

use Herbie\DI;
use Herbie\Hook;

class HighlightPlugin
{
    /**
     * @return array
     */
    public static function install()
    {
        $config = DI::get('Config');
        if ((bool)$config->get('plugins.config.highlight.twig', false)) {
            Hook::attach('twigInitialized', ['HighlightPlugin', 'addTwigExtension']);
        }
        if ((bool)$config->get('plugins.config.highlight.shortcode', true)) {
            Hook::attach('shortcodeInitialized', ['HighlightPlugin', 'addShortcode']);
        }
    }

    public static function addTwigExtension($twig)
    {
        include_once (__DIR__ . '/classes/HighlightExtension.php');
        include_once (__DIR__ . '/classes/HighlightNode.php');
        include_once (__DIR__ . '/classes/HighlightTokenParser.php');
        include_once (__DIR__ . '/vendor/geshi-1.0.8.15/geshi.php');
        $twig->addExtension(new HighlightExtension());
    }

    public static function addShortcode($shortcode)
    {
        $shortcode->add('code', ['HighlightPlugin', 'codeShortcode']);
    }

    public static function codeShortcode($options, $content)
    {
        include_once (__DIR__ . '/vendor/geshi-1.0.8.15/geshi.php');

        $name = empty($options[0]) ? 'text' : $options[0];
        $geshi = new GeSHi(trim($content), $name);
        #$geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS);
        return sprintf(
            '<div class="highlight highlight-%s">%s</div>',
            $name,
            $geshi->parse_code()
        );
    }

}

HighlightPlugin::install();
