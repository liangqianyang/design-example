<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 9:56
 */

namespace DesignPatterns\Structural\Bridge;


abstract class Service
{

    /**
     * @var FormatterInterface
     * 定义实现属性
     */
    protected $implementation;

    /**
     * Service constructor.
     * @param FormatterInterface $printer
     * 传入 FormatterInterface 实现类对象。
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * @param FormatterInterface $printer
     * 和构造方法的作用相同。
     */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * 创建抽象方法
     * @return mixed
     */
    abstract public function get();
}