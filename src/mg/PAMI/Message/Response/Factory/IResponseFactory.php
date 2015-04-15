<?php
namespace PAMI\Message\Response\Factory;

use PAMI\Exception\PAMIException;
use PAMI\Message\Response\ResponseMessage;

interface IResponseFactory
{
    /**
     * This is our factory method.
     *
     * @param string $responseMessage Literal message as received from ami.
     * @param string $requestMessage
     *
     * @return ResponseMessage
     * @throws PAMIException
     */
    public function createFromRaw($responseMessage, $requestMessage = null);

    /**
     * Registers the response class that should be used for the given action class.
     *
     * @param string $actionClass
     * @param string $responseClass
     */
    public function registerResponseClass($actionClass, $responseClass);
}