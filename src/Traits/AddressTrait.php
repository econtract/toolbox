<?php namespace Econtract\Toolbox\Traits;


use Econtract\Toolbox\Exceptions\ToolboxException;

trait AddressTrait {

    /**
     * @param array $data
     *
     * @return \stdClass
     * @throws ToolboxException
     */
    public function getAddresses($data)
    {
        return $this->send( 'addresses', $data );
    }

    /**
     * @param int $id
     *
     * @return \stdClass
     * @throws ToolboxException
     */
    public function getAddress($id)
    {
        return $this->send( 'addresses/'. $id );
    }

}