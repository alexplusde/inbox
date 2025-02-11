<?php

namespace Alexplusde\Inbox;

use rex_config;
use rex_yform;

/** @var rex_yform $yform */
$yform = Inbox::getYForm(null, null, null, null, null, null);

// E-Mail-Templates-Aktionen und Spamschutz-Aktionen
$yform->setActionField('tpl2email', ['inbox' => rex_config::get('inbox', 'email')]);
$yform->setActionField('tpl2email', ['inbox_copy', 'email']);

echo $yform->getForm();
