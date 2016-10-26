<?php namespace Econtract\Toolbox\Traits;

use Econtract\Toolbox\Exceptions\ToolboxException;

trait VerificationTrait
{
    /**
     * @param string $type
     * @param array $data
     * @param array $context
     *
     * @return \stdClass
     * @throws ToolboxException
     */
    public function verify($type, $data, array $context = [])
    {
        return $this->send('verify/' . $type . ($data ? '/' . urlencode($data) : ''), $context);
    }

}