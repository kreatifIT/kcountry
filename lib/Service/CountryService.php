<?php

namespace Kreatif\Country\Service;

use rex_yform_manager_collection;
use RexGraphQL\Type\Country\Country;

class CountryService
{
    /**
     * @return rex_yform_manager_collection<Country[]>
     */
    public function getCountries(): rex_yform_manager_collection
    {
        return Country::getQuery()->find();
    }
}
