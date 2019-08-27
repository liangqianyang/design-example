<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 9:21
 */

namespace DesignPatterns\Structural\Adapter;


interface BookInterface
{
    public function turnPage();
    
    public function open();

    public function getPage(): int;
}