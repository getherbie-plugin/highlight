<?php
/**
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <https://www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class HighlightExtension extends \Twig_Extension
{

    /**
     * @return string
     */
    public function getName()
    {
        return 'highlight';
    }

    /**
     * @return array
     */
    public function getTokenParsers()
    {
        return [
            new HighlightTokenParser()
        ];
    }
}
