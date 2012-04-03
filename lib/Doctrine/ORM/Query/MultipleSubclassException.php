<?php
namespace Doctrine\ORM\Query;

use Doctrine\ORM\Query\AST\PathExpression;


class MultipleSubclassException extends \Doctrine\ORM\ORMException
{
    private $properties;
    
    public function __construct(array $properties)
    {
        $this->properties = $properties;
    }
    
    public function getProperties()
    {
        return $this->properties;
    }
}