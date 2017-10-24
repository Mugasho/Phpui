<?php
/**
 * Created by PhpStorm.
 * User: ScriptFloor
 * Date: 10/21/2017
 * Time: 4:00 PM
 */


class phpUI
{
    public $text = '';
    public $value = '';
    public $color = '';
    public $visibility = '';
    public $id = '';
    public $typeOf = '';
    public $onClick = '';
    public $onMouseOver='';
    public $classes = array();

    /**
     * phpUI constructor.
     * @param string $typeOf
     */
    public function __construct($typeOf)
    {
        $this->typeOf = $typeOf;
    }


    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param string $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTypeOf()
    {
        return $this->typeOf;
    }

    /**
     * @param string $typeOf
     */
    public function setTypeOf($typeOf)
    {
        $this->typeOf = $typeOf;
    }


    /**
     * @return array
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param array $classes
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;
    }

    /**
     * @param $class
     * add class to classes array
     */
    public function addClass($class)
    {
        $this->classes[] = $class;
    }
    /**
     * @return string
     */
    public function getOnClick()
    {
        return $this->onClick;
    }

    /**
     * @param string $onClick
     */
    public function setOnClick($onClick)
    {
        $this->onClick = $onClick;
    }

    /**
     * @return string
     */
    public function getOnMouseOver()
    {
        return $this->onMouseOver;
    }

    /**
     * @param string $onMouseOver
     */
    public function setOnMouseOver($onMouseOver)
    {
        $this->onMouseOver = $onMouseOver;
    }

    /**
     *Generates a ui element using the given Parameters
     */
    public function Start()
    {
        echo Tags::$newline;
        echo Tags::$openAngle . $this::getTypeOf();
        if (!empty($this::getId())) echo ' id="' . $this::getId() . '"';
        if (!empty($this::getValue())) echo ' value="' . $this::getValue() . '"';
        if (!empty($this::getVisibility())) echo ' ' . $this::getVisibility();
        if (!empty($this::getColor())) echo ' color="' . $this::getColor() . '"';
        if (!empty($this::getClasses())) {
            echo ' class="';
            foreach ($this::getClasses() as $class) {
                echo $class . ' ';
            }
            echo '"';
        }
        echo Tags::$closeAngle;
        if (!empty($this::getText())) echo $this::getText();
    }

    /**
     *Close ui element tag
     */
    public function End()
    {
        echo Tags::$openSlash . $this::getTypeOf() . Tags::$closeAngle;
    }
}