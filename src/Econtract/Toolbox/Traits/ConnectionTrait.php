<?php namespace Econtract\Toolbox\Traits;


use Econtract\Toolbox\Exceptions\ToolboxException;

trait ConnectionTrait {

    /**
     * @param array $data
     *
     * @return \stdClass
     * @throws ToolboxException
     */
    public function getConnections($data)
    {
        return $this->send( 'connections', $data );
    }

    /**
     * @param int $ean
     *
     * @return \stdClass
     * @throws ToolboxException
     */
    public function getConnection($ean)
    {
        return $this->send( 'connections/'. $ean );
    }

}