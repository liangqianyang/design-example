<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 14:08
 */

namespace DesignPatterns\Behavioral\Visitor;

/**
 * 注意：访问者不能自行选择调用哪个方法，
 * 它是由 Visitee 决定的。
 */
interface RoleVisitorInterface
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}