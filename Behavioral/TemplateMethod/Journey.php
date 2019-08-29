<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 10:43
 */

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Journey
{

    /**
     * @var string[]
     */
    private $thingsToDo = [];

    /**
     * 这是当前类及其子类提供的公共服务
     * 注意，它「冻结」了全局的算法行为
     * 如果你想重写这个契约，只需要实现一个包含 takeATrip() 方法的接口
     */
    final public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
        $buyGift = $this->buyGift();

        if ($buyGift !== null) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }


    /**
     * 这个方法必须要实现，它是这个模式的关键点
     */
    abstract protected function enjoyVacation(): string;

    protected function buyGift()
    {
        return null;
    }

    private function buyAFlight(): string
    {
        return 'Buy a flight ticket';
    }

    private function takePlane(): string
    {
        return 'Taking the plane';
    }

    /**
     * @return string[]
     */
    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }
}