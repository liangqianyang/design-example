<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 9:33
 */

namespace DesignPatterns\Structural\Adapter;


class Kindle implements EBookInterface
{

    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 100;

    public function pressNext()
    {
        // TODO: Implement pressNext() method.
        $this->page++;
    }

    public function unlock()
    {
        // TODO: Implement unlock() method.
    }

    /**
     * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
     *
     * @return int[]
     */
    public function getPage(): array
    {
        // TODO: Implement getPage() method.
        return [$this->page, $this->totalPages];
    }

}