<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 15.07.15
 * Time: 00:31
 */

namespace Rpodwika\Designpatterns\Behavioral\State;


class ConnectionClosed implements ConnectionState
{
    public function open()
    {
        return 'Opening connection';
    }

    public function close()
    {
        return 'Connection already closed';
    }

    public function reconnect()
    {
        return 'Reconnecting';
    }

}