<?php namespace Econtract\Toolbox;


use Econtract\Toolbox\Exceptions\ToolboxException;
use Econtract\Toolbox\Traits\AddressTrait;
use Econtract\Toolbox\Traits\CityTrait;
use Econtract\Toolbox\Traits\ConnectionTrait;
use Econtract\Toolbox\Traits\StreetTrait;
use Ixudra\Curl\CurlService;

use Exception;

class ToolboxService {

    use AddressTrait, CityTrait, ConnectionTrait, StreetTrait;


    protected $baseUrl = null;

    protected $curlService = null;


    public function __construct()
    {
        $this->baseUrl = $_SERVER[ 'TOOLBOX_URL' ];
    }


    /**
     * @param   string $url
     * @param   array $data
     * @return \stdClass
     * @throws ToolboxException
     */
    protected function send($url, $data = array())
    {
        $data[ 'toolbox_key' ] = $_SERVER[ 'TOOLBOX_KEY' ];

        try {
            $response = $this->getCurlService()
                ->to( $this->baseUrl .'/'. $url )
                ->withData( $data )
                ->asJson()
                ->get();
        } catch(Exception $e) {
            throw new ToolboxException( $e->getMessage() );
        }

        if( isset($response->status) && $response->status != 200 ) {
            throw new ToolboxException( $response->message );
        }

        return $response;
    }

    protected function getCurlService()
    {
        if( is_null($this->curlService) ) {
            $this->curlService = new CurlService();
        }

        return $this->curlService;
    }

}