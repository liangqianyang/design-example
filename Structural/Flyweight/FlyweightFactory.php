<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 15:39
 */

namespace DesignPatterns\Structural\Flyweight;

/**
 * 工厂类会管理分享享元类，客户端不应该直接将他们实例化。
 * 但可以让工厂类负责返回现有的对象或创建新的对象。
 */
class FlyweightFactory implements \Countable
{

    /**
     * @var CharacterFlyweight[]
     * 定义享元特征数组
     * 用于存储不同的享元特征
     */
    private $pool = [];

    public function count(): int
    {
        // TODO: Implement count() method.
        return count($this->pool);
    }

    public function get(string $name): CharacterFlyweight
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFlyweight($name);
        }

        return $this->pool[$name];
    }
}