<?php

namespace Alexplusde\Inbox;

use rex;
use rex_addon;
use rex_file;
use rex_yform_manager_table;
use rex_yform_manager_table_api;

/* Tablesets aktualisieren */
$addon = rex_addon::get('inbox');

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::importTablesets(rex_file::get(__DIR__ . '/install/rex_inbox.tableset.json'));
    rex_yform_manager_table::deleteCache();
}
