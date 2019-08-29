<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 14:15
 */

namespace DesignPatterns\Behavioral\Memento;


class Memento
{

    /**
     * @var State
     */
    private $state;

    /**
     * Memento constructor.
     * @param State $stateToSave
     */
    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    /**
     * @return State
     */
    public function getState(){
        return $this->state;
    }
}