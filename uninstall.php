<?php


rex_sql_table::get(rex::getTable('kcountry'))->drop();
if (class_exists('rex_yform_manager_table')) {
    rex_yform_manager_table_api::removeTable('rex_kcountry');
}
