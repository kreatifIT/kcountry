<?php

namespace RexGraphQL\Controller\Country;

use Kreatif\Country\Service\CountryService;
use RexGraphQL\Type\Country\Country;
use TheCodingMachine\GraphQLite\Annotations\Query;

class CountryController
{
    private CountryService $countryService;

    public function __construct()
    {
        $this->countryService = new CountryService();
    }

    /**
     * All countries that are available
     * @return Country[]
     */
    #[Query]
    public function getCountries(): array
    {
        $countries = $this->countryService->getCountries();
        return $countries->toArray();
    }
}
