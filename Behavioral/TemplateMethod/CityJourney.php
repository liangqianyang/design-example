<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 11:07
 */

namespace DesignPatterns\Behavioral\TemplateMethod;

class CityJourney extends Journey
{

    public function enjoyVacation(): string
    {
        return "Eat, drink, take photos and sleep";
    }

    protected function buyGift(): string
    {
        return "Buy a gift";
    }
}