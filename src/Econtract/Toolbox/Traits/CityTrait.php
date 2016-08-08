<?php namespace Econtract\Toolbox\Traits;


use Econtract\Toolbox\Exceptions\ToolboxException;

trait CityTrait {

    /**
     * @param array $data
     *
     * @return \stdClass
     * @throws ToolboxException
     */
    public function getCities($data)
    {
        return $this->send( 'cities', $data );
    }

    /**
     * @param int $id
     *
     * @return \stdClass
     * @throws ToolboxException
     */
    public function getCity($id)
    {
        return $this->send( 'cities/'. $id );
    }

}