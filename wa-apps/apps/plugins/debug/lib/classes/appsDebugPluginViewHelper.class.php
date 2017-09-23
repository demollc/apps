<?php

class appsDebugPluginViewHelper extends appsViewHelper
{
    public function execute($params = null)
    {
        return $params ? $params :"DEADBEEF";
    }
}