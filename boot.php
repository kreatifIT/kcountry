<?php

use RexGraphQL\Type\Country\Country;

rex_yform_manager_dataset::setModelClass(Country::TABLE, Country::class);

rex_extension::register('KREATIF_TABLEMANAGER_PATHS', static function (rex_extension_point $ep) {
    $addon = rex_addon::get('kcountry');
    $paths = $ep->getSubject();
    $paths[] = $addon->getPath('install/db_structure');
    return $paths;
}, rex_extension::LATE);
