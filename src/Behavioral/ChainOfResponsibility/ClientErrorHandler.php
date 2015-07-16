<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 16.07.15
 * Time: 22:24
 */

namespace Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility;


class ClientErrorHandler extends Handler
{
    /**
     * @param HttpRequest $request
     * @return mixed
     */
    public function handleRequest(HttpRequest $request)
    {
        if ($request->getCode() >= HttpRequest::HTTP_CLIENT_ERROR && $request->getCode() < HttpRequest::HTTP_SERVER_ERROR) {
            echo 'Handling client error request';
        } else {
            parent::handleRequest($request);
        }
    }

}