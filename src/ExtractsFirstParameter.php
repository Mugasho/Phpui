<?php

namespace PhpUi;

trait ExtractsFirstParameter
{
    public function extractFirst($data = null)
    {
        if (isset($data[0])) {
            return $data[0];
        }

        return null;
    }
}
