<?php

namespace PhpUI;

use Closure;

class HtmlSection
{
    use ExtractsFirstParameter;

    protected $singleTags = ['br', 'hr', 'input'];

    protected $elements = [];

    /**
     * @var string
     */
    protected $tag;

    /**
     * creates an instance of the Section Class.
     *
     * @param string $tag The tag
     */
    public function __construct(string $tag = null)
    {
        $this->tag = $tag;
    }

    protected function isSingleTag($tag)
    {
        return in_array($tag, $this->singleTags);
    }

    public function registerCallBack(Closure $callback)
    {
        $callback($this);

        return $this;
    }

    protected function addElement($tag, $contents = null)
    {
        if ($contents instanceof Closure) {
            $nestedElement = new Self();
            $contents($nestedElement);
            $contents = (string) $nestedElement;
        }

        $element = (new HtmlElement($tag, $this->isSingleTag($tag)));

        $element->setContents($contents);

        $this->elements[] = $element;

        return $element;
    }

    public function __call($tag, $contents)
    {
        $contents = $this->extractFirst($contents);

        return $this->addElement($tag, $contents);
    }

    public function __get($tag)
    {
        return $this->addElement($tag);
    }

    public function __toString()
    {
        $tag = $this->tag;

        $elements = implode($this->elements);
        if (!$this->tag) {
            return $elements;
        }

        return $tag ? "<$tag>".$elements."</$tag>" : $elements;
    }
}
