<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 16:07
 */

namespace DesignPatterns\Creational\Pool;


class WorkerPool
{

    /**
     * 被占用的
     * @var StringReverseWorker[]
     */
    private $occupiedWorkers = [];

    /**
     * 空闲的
     * @var StringReverseWorker[]
     */
    private $freeWorkers = [];


    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
        return $worker;

    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}