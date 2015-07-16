<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 16.07.15
 * Time: 22:38
 */

namespace Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility;


class ServerErrorHandler extends Handler
{
    /**
     * @param HttpRequest $request
     * @return mixed
     */
    public function handleRequest(HttpRequest $request)
    {
        if ($request->getCode() >= HttpRequest::HTTP_SERVER_ERROR) {
            echo 'Handling server error request';
        } else {
            parent::handleRequest($request);
        }
    }
}