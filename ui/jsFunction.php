<?php
/**
 * Created by PhpStorm.
 * User: CORE i3
 * Date: 10/24/2017
 * Time: 2:40 AM
 */

class jsFunction
{
public $alert='';

    /**
     * @return string
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * @param string $alert
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;
    }
}