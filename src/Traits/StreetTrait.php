<?php namespace Econtract\Toolbox\Traits;


use Econtract\Toolbox\Exceptions\ToolboxException;

trait StreetTrait {

    /**
     * @param array $data
     *
     * @return \stdClass
     * @throws ToolboxException
     */
    public function getStreets($data)
    {
        return $this->send( 'streets', $data );
    }

    /**
     * @param int $id
     *
     * @return \stdClass
     * @throws ToolboxException
     */
    public function getStreet($id)
    {
        return $this->send( 'streets/'. $id );
    }

}