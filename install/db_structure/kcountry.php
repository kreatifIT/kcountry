<?php

use KTableManager\TableManager;

$tm = new TableManager('kcountry');
$tm->allowsInserts = true;
$tm->addRow(static function () use ($tm): void {
    $tm->addColumn(6, static function () use ($tm): void {
        $tm->addLangFields(static function ($langId) use ($tm): void {
            $tm->addNameField($langId);
        });
        $tm->addTextField('iso2', 'ISO2');
        $tm->addTextField('iso3', 'ISO3');
    });
    $tm->addColumn(6, static function () use ($tm): void {
        $tm->createStatusField();
        $tm->createPriorityField();
        $tm->createUserFields();
        $tm->createDateFields();
    });
});

$tm->synchronize();
