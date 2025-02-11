<?php

namespace Alexplusde\Inbox;

use rex;
use rex_addon;
use rex_file;
use rex_sql_column;
use rex_sql_table;
use rex_yform_manager_table;
use rex_yform_manager_table_api;

rex_sql_table::get(rex::getTable('inbox'))
    ->ensurePrimaryIdColumn()
    ->ensureColumn(new rex_sql_column('name', 'varchar(191)', false, ''))
    ->ensureColumn(new rex_sql_column('email', 'varchar(191)', false, ''))
    ->ensureColumn(new rex_sql_column('phone', 'varchar(191)', false, ''))
    ->ensureColumn(new rex_sql_column('message', 'text'))
    ->ensureColumn(new rex_sql_column('privacy_policy', 'datetime'))
    ->ensureColumn(new rex_sql_column('preffered_channel', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('datestamp', 'datetime'))
    ->ensureColumn(new rex_sql_column('deletedate', 'datetime'))
    ->ensureColumn(new rex_sql_column('ip', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('form_url', 'text'))
    ->ensure();

/* Tablesets aktualisieren */
$addon = rex_addon::get('inbox');

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::importTablesets(rex_file::get(__DIR__ . '/install/rex_inbox.tableset.json'));
    rex_yform_manager_table::deleteCache();
}
