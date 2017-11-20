<?php

namespace PhpUi;

class JsFunction
{
    public $alert = '';

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
