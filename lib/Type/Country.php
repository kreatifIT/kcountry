<?php


namespace RexGraphQL\Type\Country;


use Kreatif\Model;
use rex_exception;
use TheCodingMachine\GraphQLite\Annotations\Field;
use TheCodingMachine\GraphQLite\Annotations\Type;
use TheCodingMachine\GraphQLite\Types\ID;

#[Type]
class Country extends Model
{
    const TABLE = 'rex_kcountry';

    /**
     * @throws rex_exception
     */
    #[Field]
    public function id(): ID
    {
        return new ID($this->getId());
    }

    #[Field]
    public function name(): string
    {
        return $this->getName();
    }

    #[Field]
    public function getIso2(): string
    {
        return $this->getValue('iso2');
    }

    #[Field]
    public function getIso3(): string
    {
        return $this->getValue('iso3');
    }
}
