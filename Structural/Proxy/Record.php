<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 16:02
 */

namespace DesignPatterns\Structural\Proxy;


class Record
{

    /**
     * @var string[]
     */
    private $data;

    /**
     * Record constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function __set(string $name, string $value)
    {
        // TODO: Implement __set() method.
        $this->data[$name] = $value;
    }

    public function __get(string $name): string
    {
        // TODO: Implement __get() method.
        if (!isset($this->data[$name])) {
            throw new \OutOfRangeException('Invalid name given');
        }

        return $this->data[$name];
    }
}