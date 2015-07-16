<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 16.07.15
 * Time: 22:29
 */

namespace Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility;


class SuccessHandler extends Handler
{
    /**
     * @param HttpRequest $request
     * @return mixed
     */
    public function handleRequest(HttpRequest $request)
    {
        if ($request->getCode() < HttpRequest::HTTP_CLIENT_ERROR && $request->getCode() >= HttpRequest::HTTP_OK) {
            echo 'Handling successful request';
            return true;
        } else {
            parent::handleRequest($request);
        }
    }
}