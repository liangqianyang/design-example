<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 15:34
 */

namespace DesignPatterns\Structural\Flyweight;


class CharacterFlyweight implements FlyweightInterface
{

    /**
     * 任何具体的享元对象存储的状态必须独立于其运行环境
     * 享元对象呈现的特点，往往就是对应的编码的特点
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * 实现 FlyweightInterface 中的传递方法 render() 。
     */
    public function render(string $font): string
    {
        // TODO: Implement render() method.
        // 享元对象需要客户端提供环境依赖信息来自我定制。
        // 外在状态经常包含享元对象呈现的特点，例如字符。
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}