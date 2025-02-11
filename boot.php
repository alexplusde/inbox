<?php

namespace Alexplusde\Inbox;

use rex;
use rex_addon;
use rex_yform_manager_dataset;

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_dataset::setModelClass(
        'rex_inbox',
        Inbox::class
    );
}
