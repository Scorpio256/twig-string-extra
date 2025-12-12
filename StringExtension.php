<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Scorpio256\Extra\String;

use Symfony\Component\String\AbstractUnicodeString;
use Symfony\Component\String\Inflector\EnglishInflector;
use Symfony\Component\String\Inflector\FrenchInflector;
use Symfony\Component\String\Inflector\InflectorInterface;
use Symfony\Component\String\Inflector\SpanishInflector;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\UnicodeString;
use Twig\Error\RuntimeError;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

final class StringExtension extends AbstractExtension
{

    public function getFilters(): array
    {
        return [
            new TwigFilter('unescape', [$this, 'unescape']),
        ];
    }

    public function unescape(?string $text,...$arguments): string
    {
        return html_entity_decode($text ?? '',...$arguments);
    }
}
