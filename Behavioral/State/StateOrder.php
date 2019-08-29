<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 9:28
 */

namespace DesignPatterns\Behavioral\State;


abstract class StateOrder
{
    /**
     * @var array
     */
    private $details;

    /**
     * @var StateOrder
     */
    protected static $state;

    /**
     * @return mixed
     */
    abstract protected function done();

    protected function setStatus(string $status)
    {
        $this->details['status'] = $status;
        $this->details['updateTime'] = time();
    }

    public function getStatus(): string
    {
        return $this->details['status'];
    }
}