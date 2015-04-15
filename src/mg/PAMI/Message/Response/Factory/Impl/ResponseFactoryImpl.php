<?php
/**
 * This factory knows which response to return according to a given raw message
 * from ami.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Response
 * @subpackage Factory.Impl
 * @author     Diederik de Groot <ddegroot@users.sf.net>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2015 Diederik de Groot <ddegroot@users.sf.net>, Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace PAMI\Message\Response\Factory\Impl;

use PAMI\Exception\PAMIException;
use PAMI\Message\OutgoingMessage;
use PAMI\Message\Response\Factory\IResponseFactory;
use PAMI\Message\Response\ResponseMessage;

/**
 * This factory knows which reponse handler to return according to a given raw message from ami,
 * the outgoingMessageClass and responseHandler requested by the Action
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Response
 * @subpackage Factory.Impl
 * @author     Diederik de Groot <ddegroot@users.sf.net>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class ResponseFactoryImpl implements IResponseFactory
{

    private $_logger;

    private $responseClassMapping = array();

    /**
     * Registers the response class that should be used for the given action class.
     *
     * @param string $actionClass
     * @param string $responseClass
     */
    public function registerResponseClass($actionClass, $responseClass)
    {
        if (!class_exists($responseClass)) {
            throw new \InvalidArgumentException('Response class '.$responseClass.' does not exist.');
        }

        if (!is_a($responseClass, '\PAMI\Message\Response\ResponseMessage', true)) {
            throw new \InvalidArgumentException(
                'Response class '.$responseClass.' must inherit \PAMI\Message\Response\ResponseMessage.'
            );
        }

        $this->responseClassMapping[$actionClass] = $responseClass;
    }


    /**
     * This is our factory method.
     *
     * @param string          $message Literal message as received from ami.
     * @param OutgoingMessage $requestingAction
     *
     * @return ResponseMessage
     * @throws PAMIException
     */
    public function createFromRaw($message, $requestingAction = null)
    {
        $generic_response_class = '\\PAMI\\Message\\Response\\GenericResponse';

        if ($requestingAction != null) {
            $request_class = get_class($requestingAction);

            // First, match on the per-object handler.
            $responseHandler = $requestingAction->getResponseHandler();
            if (null !== $responseHandler) {
                return $this->createResponseHandler($responseHandler, $message);
            }

            // Otherwise try the per-action handler.
            if (isset($this->responseClassMapping[$request_class])) {
                $responseHandler = $this->responseClassMapping[$request_class];

                return $this->createResponseHandler($responseHandler, $message);
            }
        }

        return $this->createResponseHandler($generic_response_class, $message);
    }

    /**
     * Constructor. Nothing to see here, move along.
     */
    public function __construct($logger)
    {
        $this->_logger = $logger ? $logger : \Logger::getLogger(__CLASS__);
        if ($this->_logger->isDebugEnabled()) {
            $this->_logger->debug('------ Response Factory Created: ------ '."\n");
        }
    }

    public function createResponseHandler($class, $message)
    {
        if ($this->_logger->isDebugEnabled()) {
            $this->_logger->debug('Created response class '.$class."\n");
        }

        return new $class($message);
    }
}