<?php

namespace PhpUi;

class Color
{
    public static $Red = 'red';
    public static $Blue = 'blue';
    public static $Green = 'green';

    /**
     * color constructor.
     *
     * @param string $Red
     * @param string $Blue
     * @param string $Green
     */
    public function __construct($Red, $Blue, $Green)
    {
        $this->Red = $Red;
        $this->Blue = $Blue;
        $this->Green = $Green;
    }

    /**
     * @return string
     */
    public function getRed()
    {
        return $this->Red;
    }

    /**
     * @param string $Red
     */
    public function setRed($Red)
    {
        $this->Red = $Red;
    }

    /**
     * @return string
     */
    public function getBlue()
    {
        return $this->Blue;
    }

    /**
     * @param string $Blue
     */
    public function setBlue($Blue)
    {
        $this->Blue = $Blue;
    }

    /**
     * @return string
     */
    public function getGreen()
    {
        return $this->Green;
    }

    /**
     * @param string $Green
     */
    public function setGreen($Green)
    {
        $this->Green = $Green;
    }
}
