<?php

class appsViewHelper extends waAppViewHelper
{
    public static function generateHandlers()
    {
        $handlers = include_once(wa('apps')->getAppPath('lib/config/handlers.php'));
        return $handlers;
    }

    public function __call($name, $arguments)
    {
        if (class_exists('apps'.ucfirst($name).'PluginViewHelper')) {
            if (method_exists('apps'.$name.'PluginViewHelper', 'execute')) {
                $class = 'apps'.ucfirst($name).'PluginViewHelper';
                $class = new $class($this->wa());
                return call_user_func_array(array($class, 'execute'), $arguments);
            }
        }
        return false;
    }
}
