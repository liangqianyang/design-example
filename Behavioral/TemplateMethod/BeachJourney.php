<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 11:05
 */

namespace DesignPatterns\Behavioral\TemplateMethod;

class BeachJourney extends Journey
{

    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}