<?php

namespace jizuscreed\TimeApproximator\Tests;

use jizuscreed\TimeApproximator\Languages\Russian;
use jizuscreed\TimeApproximator\TimeApproximator;
use PHPUnit\Framework\TestCase;

class TimeApproximatorTest extends TestCase
{
    /**
     * @var TimeApproximator
     */
    protected $timeApproximator;
    
    public function setUp() : void
    {
        parent::setUp();
        $this->timeApproximator = new TimeApproximator(new Russian());
    }
    
    public function testRussianLanguagePack()
    {
        $this->assertEquals($this->timeApproximator->getDescriptionFor(20), 'полминуты');
        $this->assertEquals($this->timeApproximator->getDescriptionFor(40), 'меньше чем 1 минута');
        $this->assertEquals($this->timeApproximator->getDescriptionFor(16*60), '16 минут');
        $this->assertEquals($this->timeApproximator->getDescriptionFor(11*60), '11 минут');
        $this->assertEquals($this->timeApproximator->getDescriptionFor(46*60), 'примерно 1 час');
        $this->assertEquals($this->timeApproximator->getDescriptionFor(43*60), '43 минуты');
        $this->assertEquals($this->timeApproximator->getDescriptionFor(68*60), 'примерно 1 час');
        $this->assertEquals($this->timeApproximator->getDescriptionFor(24*60*60*15+23*60*60+15*60), '16 дней');
    }
}
