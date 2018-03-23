<?php

namespace Library\Sabre\Dav;


/**
 * SabreDAV DAV client
 *
 * This client wraps around Curl to provide a convenient API to a WebDAV
 * server.
 *
 * NOTE: This class is experimental, it's api will likely change in the future.
 *
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/ Modified BSD License
 */
class Client extends \Sabre\DAV\Client{
    function __construct(array $settings) {
        parent::__construct($settings);
        $this->addCurlSetting(CURLOPT_SSL_VERIFYPEER, false);
    }
}