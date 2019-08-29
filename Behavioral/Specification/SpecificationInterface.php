<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 16:38
 */

namespace DesignPatterns\Behavioral\Specification;


interface SpecificationInterface
{

    public function isSatisfiedBy(Item $item): bool;
}