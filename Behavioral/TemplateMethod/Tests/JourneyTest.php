<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/29
 * Time: 13:44
 */

namespace DesignPatterns\Behavioral\TemplateMethod\Tests;

use DesignPatterns\Behavioral\TemplateMethod;
use PHPUnit\Framework\TestCase;

class JourneyTest extends TestCase
{

    public function testCanGetOnVacationOnTheBeach()
    {
        $beachJourney = new TemplateMethod\BeachJourney();
        $beachJourney->takeATrip();
        $this->assertEquals(
            ['Buy a flight ticket', 'Taking the plane', 'Swimming and sun-bathing', 'Taking the plane'],
            $beachJourney->getThingsToDo()
        );
    }

    public function testCanGetOnAJourneyToACity()
    {
        $cityJourney = new TemplateMethod\CityJourney();
        $cityJourney->takeATrip();

        $this->assertEquals(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Eat, drink, take photos and sleep',
                'Buy a gift',
                'Taking the plane'
            ],
            $cityJourney->getThingsToDo()
        );
    }
}