<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 13:31
 */

namespace DesignPatterns\Structural\DataMapper;


class StorageAdapter
{

    /**
     * @var array
     */
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param int $id
     * @return mixed|null
     */
    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}