<?php

namespace Statamic\Facades;

use Illuminate\Support\Facades\Facade;
use Statamic\Markdown\Manager;

/**
 * @method static \Statamic\Markdown\Parser makeParser(array $config = [])
 * @method static mixed|\Statamic\Markdown\Parser parser(string $name)
 * @method static bool hasParser(string $name)
 * @method static void extend(string $name, \Closure $closure)
 * @method static string parse(string $markdown)
 * @method static \League\CommonMark\CommonMarkConverter converter()
 * @method static void environment()
 * @method static \Statamic\Markdown\Parser addExtension(\Closure $closure)
 * @method static \Statamic\Markdown\Parser addExtensions(\Closure $closure)
 * @method static array extensions()
 * @method static void withStatamicDefaults()
 * @method static \Statamic\Markdown\Parser withAutoLinks()
 * @method static \Statamic\Markdown\Parser withAutoLineBreaks()
 * @method static \Statamic\Markdown\Parser withMarkupEscaping()
 * @method static \Statamic\Markdown\Parser withSmartPunctuation()
 * @method static \Statamic\Markdown\Parser withTableOfContents()
 * @method static \Statamic\Markdown\Parser withHeadingPermalinks()
 * @method static void config(void $key = null)
 * @method static void newInstance(array $config = [])
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 *
 * @see \Statamic\Markdown\Manager
 */
class Markdown extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Manager::class;
    }
}
