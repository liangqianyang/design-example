<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 9:22
 */

namespace DesignPatterns\Structural\Adapter;


class Book implements BookInterface
{

    /**
     * @var int
     */
    private $page;

    public function open()
    {
        // TODO: Implement open() method.
        $this->page = 1;
    }

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->page++;
    }

    public function getPage(): int
    {
        // TODO: Implement getPage() method.
        return $this->page;
    }
}