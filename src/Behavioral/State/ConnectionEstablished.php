<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 15.07.15
 * Time: 00:26
 */

namespace Rpodwika\Designpatterns\Behavioral\State;


class ConnectionEstablished implements ConnectionState
{
    public function open()
    {
        return 'Cannot open already opened connection';
    }

    public function close()
    {
        return 'Freeing resources';
    }

    public function reconnect()
    {
        return "Waiting for reconnection";
    }

}