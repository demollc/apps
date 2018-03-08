<?php

class appsRightConfig extends waRightConfig
{
    public function init()
    {   /**
     * @event rights.config
     * @param waRightConfig $this Rights setup object
     * @return void
     */
        $this->addItem('plugins', _w('Can manage plugins'));
        wa()->event('rights.config', $this);
    }
}
