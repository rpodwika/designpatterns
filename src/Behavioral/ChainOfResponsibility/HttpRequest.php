<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 16.07.15
 * Time: 22:15
 */

namespace Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility;


class HttpRequest
{
    const HTTP_OK = 200;
    const HTTP_CLIENT_ERROR = 400;
    const HTTP_SERVER_ERROR = 500;

    private $value;
    private $code;

    public function __construct($value, $code)
    {
        $this->setValue($value);
        $this->setCode($code);
    }


    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}