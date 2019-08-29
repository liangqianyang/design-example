<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 11:07
 */

namespace DesignPatterns\Behavioral\Mediator;


interface MediatorInterface
{

    /**
     * 发出响应
     * @param string $content
     * @return mixed
     */
    public function sendResponse(string $content);

    /**
     * 做出请求
     */
    public function makeRequest();

    /**
     * 查询数据库
     */
    public function queryDb();
}