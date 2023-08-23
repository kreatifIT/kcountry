<?php

/** @var $this rex_addon */
if (!$this->hasConfig()) {
    $this->setConfig('installed', TRUE);

    // import tables
    $tablesets = glob($this->getPath('install/tablesets/*.json'));

    foreach ($tablesets as $tableset) {
        rex_yform_manager_table_api::importTablesets(file_get_contents($tableset));
    }

    rex_sql_util::importDump($this->getPath('data.sql'));
include __DIR__ . '/install/db_structure/kcountry.php';
}

