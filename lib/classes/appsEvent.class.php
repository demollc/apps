<?php

class appsEvent
{
    /*
    * TODO $params array('app','hook', 'params(params,keys,visible))
    */
    public static function call($params)
    {
        if (waSystemConfig::isDebug()) {
            $debug = waRequest::param('apps_hook_debug', array());
            $start = microtime(1);
            $result = wa('apps')->event($params['app'].'.'.$params['hook'], $params['params']);
            $end = microtime(1);
            $debug[] = array (
                'id' => $params['app'].'.'.$params['hook'],
                'hook' => $end-$start,
                'total' => waSystemConfig::getTime(),
            );
            waRequest::setParam('apps_hook_debug', $debug);
        } else {
            $result = wa('apps')->event();
        }
    }
}
