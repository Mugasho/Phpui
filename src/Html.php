<?php

namespace PhpUI;

use Closure;

class Html
{
    /**
     * the documents body.
     *
     * @var string
     */
    protected $sections = [];

    /**
     * create an instance of the class.
     *
     * and prevent any one from newing it up directly.
     */
    public function __construct()
    {
        $this->sections['head'] = new HtmlSection('head');

        $this->sections['body'] = new HtmlSection('body');
    }

    public static function head(Closure $closure)
    {
        return (new static())->registerSection('head', $closure);
    }

    public static function body(Closure $closure)
    {
        return (new static())->registerSection('body', $closure);
    }

    protected function registerSection(string $section, Closure $closure)
    {
        $this->sections[$section]->registerCallBack($closure);

        return $this;
    }

    public function load()
    {
        echo $this;
    }

    public function __toString()
    {
        return  '<html>'.implode($this->sections).'</html>';
    }
}
