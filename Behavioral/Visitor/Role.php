<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 14:10
 */

namespace DesignPatterns\Behavioral\Visitor;


interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}