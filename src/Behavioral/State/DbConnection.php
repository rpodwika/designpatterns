<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 15.07.15
 * Time: 00:33
 */

namespace Rpodwika\Designpatterns\Behavioral\State;


class DbConnection
{
    /**
     * @var ConnectionState $state
     */
    private $state;
    private $port;
    private $uri;

    public function __construct($port, $uri)
    {
        $this->port = $port;
        $this->uri = $uri;
    }


    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return $this
     */
    public function setState(ConnectionState $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     * @return $this
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * @return string
     */
    public function connect()
    {
        $this->state = new ConnectionEstablished();
        $this->state->open();

        return sprintf('Opening connection %s:%d', $this->getUri(), $this->getPort());
    }

    /**
     * @return string
     */
    public function close()
    {
        $this->state = new ConnectionClosed();
        $this->state->close();

        return 'Closing connection';
    }

    /**
     * @return string
     */
    public function reconnect()
    {
        $this->close();
        $this->connect();

        return 'Reconnecting';
    }


}