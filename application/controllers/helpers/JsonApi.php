<?php
/**
 * Omeka
 * 
 * @copyright Copyright 2007-2012 Roy Rosenzweig Center for History and New Media
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */

/**
 * Output API JSON.
 * 
 * @package Omeka\Controller\ActionHelper
 */
class Omeka_Controller_Action_Helper_JsonApi extends Zend_Controller_Action_Helper_Abstract
{
    /**
     * Prepare the JSON, send it, and exit the application.
     * 
     * @param mixed $data
     */
    public function direct($data)
    {
        $response = $this->getResponse();
        $request = $this->getRequest();
        
        $json = Zend_Json::encode($data);
        
        // Pretty print the JSON if requested.
        $bool = new Omeka_Filter_Boolean;
        $prettyPrint = $bool->filter($request->getParam('pretty_print'));
        if ($prettyPrint) {
            $json = Zend_Json::prettyPrint($json);
        }
        
        // Wrap the JSON with a callback function if requested.
        $callback = $request->getParam('callback');
        if ($callback) {
            $response->setHeader('Content-Type', 'application/javascript', true);
            $json = "$callback($json)";
        } else {
            $response->setHeader('Content-Type', 'application/json', true);
        }
        
        $response->setBody($json);
        $response->sendResponse();
        exit;
    }
}
