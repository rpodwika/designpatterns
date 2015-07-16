<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 16.07.15
 * Time: 22:18
 */

namespace Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility;


abstract class Handler
{
    protected $successor;

    /**
     * @return mixed
     */
    public function getSuccessor()
    {
        return $this->successor;
    }

    /**
     * @param mixed $successor
     * @return $this
     */
    public function setSuccessor(Handler $successor)
    {
        $this->successor = $successor;

        return $this;
    }

    /**
     * @param HttpRequest $request
     * @return mixed
     */
    public function handleRequest(HttpRequest $request)
    {
        if ($this->getSuccessor() != null) {
            $this->successor->handleRequest($request);
        } else {
            return false;
        }
    }
}