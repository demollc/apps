<?php

class appsEvent
{
    /*
    * TODO $params array('app','hook', 'params(params,keys,visible))
    */
    public function call($params)
    {
        if (waSystemConfig::isDebug()) {
            $debug = waConfig::get('apps_hook_debug', array());
            $start = microtime(1);
            $event = wa('apps')->event($params['app'].'.'.$params['hook'], $params['params']);
            $end = microtime(1);
            $debug[] = array (
                'id' => $params['app'].'.'.$params['hook'],
                'hook' => $end-$start,
                'total' => waSystemConfig::getTime(),
            );
            waConfig::set('apps_hook_debug', $debug);
        } else {
            $event = wa('apps')->event($params['app'].'.'.$params['hook'], $params['params']);
        }
        array_filter($event);
        $result = array();
        foreach($event as $ev) {
            if ($ev && is_array($ev)) {
                foreach ((array)$ev as $key => $handler) {
                    if (array_key_exists($key, $result)) {
                        $result[$key] .= $handler;
                    } else {
                        $result[$key] = $handler;
                    }
                }
            } else {
                if (is_array($result) && empty($result)) {
                    $result = implode('', $result);
                }
                $result .= $ev;
            }
        }
        return ifempty($result, null);
    }
}
