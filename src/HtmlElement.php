<?php

namespace PhpUI;

class HtmlElement
{
    /**
     * The tag name.
     *
     * @var string
     */
    protected $tag;

    /**
     * key value pair of properties and corresponding values.
     *
     * @var array
     */
    protected $properties = [];

    /**
     * The contents in between the tag.
     *
     * @var string
     */
    protected $content = '';

    protected $isSelfClosingTag = false;

    /**
     * creates an instance of the the Element Class.
     *
     * @param string $tag
     * @param bool   $isSelfClosingTag
     */
    public function __construct(string $tag, $isSelfClosingTag = false)
    {
        $this->tag = $tag;

        $this->isSelfClosingTag = $isSelfClosingTag;
    }

    /**
     * sets the contents of the tag.
     *
     * @param mixed $contents The contents
     *
     * @return self
     */
    public function setContents($content)
    {
        if ($this->isSelfClosingTag) {
            return $this;
        }

        $this->content = $content;

        return $this;
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        $tag = $this->tag;

        $markUp = "<$tag ".$this->formattedProperties();

        if ($this->isSelfClosingTag) {
            return "$markUp/>";
        }

        return $markUp.'>'.$this->content."</$tag>";
    }

    /**
     * dynamically set a property on an elemnet.
     *
     * @param string $method
     * @param array  $args
     *
     * @return self
     */
    public function __call($method, $args)
    {
        //we will append the dynamic property to the properties array
        $this->properties[$method] = implode($args, ' ');

        return $this;
    }

    public function formattedProperties()
    {
        $props = '';

        foreach ($this->properties as $key => $property) {
            $props .= " $key='$property'";
        }

        return $props;
    }
}
