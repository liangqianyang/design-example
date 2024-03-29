<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 16:44
 */

namespace DesignPatterns\Behavioral\Specification;


class OrSpecification implements SpecificationInterface
{
    /**
     * @var SpecificationInterface[]
     */
    private $specifications;

    /**
     * OrSpecification constructor.
     * @param SpecificationInterface ...$specifications
     */
    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * 如果有一条规则符合条件，返回 true，否则返回 false
     */
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($item)) {
                return true;
            }
        }
        return false;
    }

}