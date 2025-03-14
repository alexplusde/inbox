<?php

echo rex_view::title(rex_i18n::msg('inbox_title'));

$addon = rex_addon::get('inbox');

$form = rex_config_form::factory($addon->getName());

$email_field = $form->addTextField('email');
$email_field->setLabel($addon->i18n('inbox.config.email'));
$email_field->setNotice($addon->i18n('inbox.config.email_notice'));

$subject_field = $form->addTextField('subject');
$subject_field->setLabel($addon->i18n('inbox.config.subject'));
$subject_field->setNotice($addon->i18n('inbox.config.subject_notice'));

$subject_client_field = $form->addTextField('subject_client');
$subject_client_field->setLabel($addon->i18n('inbox.config.subject_client'));
$subject_client_field->setNotice($addon->i18n('inbox.config.subject_client_notice'));

$fragment = new rex_fragment();
$fragment->setVar('class', 'edit', false);
$fragment->setVar('title', $addon->i18n('inbox.config.title'), false);
$fragment->setVar('body', $form->get(), false);
echo $fragment->parse('core/page/section.php');
