<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 15:49
 */

namespace DesignPatterns\Structural\Flyweight\Tests;

use DesignPatterns\Structural\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->characters as $char) {
            foreach ($this->fonts as $font) {
                $flyweight = $factory->get($char);
                $rendered = $flyweight->render($font);

                $this->assertEquals(sprintf('Character %s with font %s', $char, $font), $rendered);
            }
        }

        // 享元模式会保证实例被分享。
        // 相比拥有成百上千的私有对象，
        // 必须要有一个实例代表所有被重复使用来显示不同单词的字符。
        $this->assertCount(count($this->characters), $factory);
    }
}