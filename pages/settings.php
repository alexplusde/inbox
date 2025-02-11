<?php

echo rex_view::title(rex_i18n::msg('inbox_title'));

$addon = rex_addon::get('inbox');

$form = rex_config_form::factory($addon->getName());

$fragment = new rex_fragment();
$fragment->setVar('class', 'edit', false);
$fragment->setVar('title', $addon->i18n('inbox_config'), false);
$fragment->setVar('body', $form->get(), false);
echo $fragment->parse('core/page/section.php');
