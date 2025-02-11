<?php

namespace Alexplusde\Inbox;

use rex;
use rex_addon;
use rex_yform;
use rex_yform_manager_dataset;

class Inbox extends rex_yform_manager_dataset
{

    /* Name */
    /** @api */
    public function getName(): ?string
    {
        return $this->getValue("name");
    }
    /** @api */
    public function setName(mixed $value): self
    {
        $this->setValue("name", $value);
        return $this;
    }

    /* E-Mail */
    /** @api */
    public function getEmail(): ?string
    {
        return $this->getValue("email");
    }
    /** @api */
    public function setEmail(mixed $value): self
    {
        $this->setValue("email", $value);
        return $this;
    }

    /* Telefon */
    /** @api */
    public function getPhone(): ?string
    {
        return $this->getValue("phone");
    }
    /** @api */
    public function setPhone(mixed $value): self
    {
        $this->setValue("phone", $value);
        return $this;
    }

    /* Nachricht */
    /** @api */
    public function getMessage(bool $asPlaintext = false): ?string
    {
        if ($asPlaintext) {
            return strip_tags($this->getValue("message"));
        }
        return $this->getValue("message");
    }
    /** @api */
    public function setMessage(mixed $value): self
    {
        $this->setValue("message", $value);
        return $this;
    }

    /* Datenschutzerklärung */
    /** @api */
    public function getPrivacyPolicy(): ?\DateTime
    {
        return $this->getValue("privacy_policy");
    }
    /** @api */
    public function setPrivacyPolicy(mixed $value): self
    {
        $this->setValue("privacy_policy", $value);
        return $this;
    }

    /* Bevorzugte Kontaktmöglichkeit */
    /** @api */
    public function getPrefferedChannel(): ?string
    {
        return $this->getValue("preffered_channel");
    }
    /** @api */
    public function setPrefferedChannel(mixed $value): self
    {
        $this->setValue("preffered_channel", $value);
        return $this;
    }

    /* Gesendet am... */
    /** @api */
    public function getDatestamp(): ?string
    {
        return $this->getValue("datestamp");
    }
    /** @api */
    public function setDatestamp(string $value): self
    {
        $this->setValue("datestamp", $value);
        return $this;
    }

    /* Wird gelöscht am... */
    /** @api */
    public function getDeletedate(): ?\DateTime
    {
        return $this->getValue("deletedate");
    }
    /** @api */
    public function setDeletedate(mixed $value): self
    {
        $this->setValue("deletedate", $value);
        return $this;
    }

    /* translate.inbox.submit */
    /** @api */
    public function getSubmit(): mixed
    {
        return $this->getValue("submit");
    }
    /** @api */
    public function setSubmit(mixed $value): self
    {
        $this->setValue("submit", $value);
        return $this;
    }

    /* IP-Adresse */
    /** @api */
    public function getIp(): ?string
    {
        return $this->getValue("ip");
    }
    /** @api */
    public function setIp(mixed $value): self
    {
        $this->setValue("ip", $value);
        return $this;
    }

    public static function getYForm(?rex_yform $yform = null, ?array $order = [], ?bool $objparam = true, ?bool $honeypot = true, ?bool $database = true, ?int $mailer_profile = 0): rex_yform
    {

        if ($yform === null) {
            $yform = new rex_yform();
        }

        if ($objparam) {
            $yform->setObjectparams('main_table', rex::getTable('rex_inbox'));
            $yform->setObjectparams('form_showformafterupdate', 0);
            $yform->setObjectparams('form_action', rex_getUrl('REX_ARTICLE_ID'));
            $yform->setObjectparams('form_ytemplate', 'bootstrap5,bootstrap');
            $yform->setObjectparams('form_showformafterupdate', 0);
            $yform->setObjectparams('real_field_names', true);
        }

        if (empty($order)) {
            $order = ['name', 'email', 'phone', 'message', 'privacy_policy', 'preffered_channel', 'datestamp', 'deletedate', 'submit', 'ip'];
        }

        foreach ($order as $field) {
            switch ($order) {
                case 'name':
                    $yform->setValueField('text', ['name', 'translate:inbox.name', '', '0']);
                    $yform->setValidateField('empty', ['name', 'translate:inbox.name.validate.empty']);
                    break;
                case 'email':
                    $yform->setValueField('text', ['email', 'translate:inbox.email', '', '0', '{"type":"email","required":"required"}']);
                    $yform->setValidateField('empty', ['email', 'translate:inbox.email.validate.empty']);
                    break;
                case 'phone':
                    $yform->setValueField('text', ['phone', 'translate:inbox.phone', '', '0', '{"type":"phone","required":"required"}']);
                    break;
                case 'message':
                    $yform->setValueField('textarea', ['message', 'translate:inbox.message', '', '0', '{"required":"required"}']);
                    $yform->setValidateField('empty', ['message', 'translate:inbox.message.validate.empty']);
                    break;
                case 'privacy_policy':
                    $yform->setValueField('privacy_policy', ['privacy_policy', 'translate:inbox.privacy_policy', '0', '{"required":"required"}', '', ',✅']);
                    $yform->setValidateField('empty', ['privacy_policy', 'translate:inbox.privacy_policy.validate.empty']);
                    break;
                case 'preffered_channel':
                    $yform->setValueField('choice', ['preffered_channel', 'translate:inbox.preffered_channel', 'email=E-Mail,phone=Anruf,whatsapp=WhatsApp,telegram=Telegram', '1', '1', 'email', '', '', '', '', '', '', '', '0']);
                    break;
            }
        }


        $yform->setValueField('datestamp', ['datestamp', 'translate:inbox.datestamp', 'Y-m-d H:i:s', '0', '1']);
        $yform->setValueField('datestamp_auto_delete', ['deletedate', 'translate:inbox.deletedate', 'Y-m-d H:i:s', '0', '1', '+6 months']);
        $yform->setValueField('submit_once', ['submit', 'translate.inbox.submit', 'translate:inbox.submit.wait']);
        $yform->setValueField('ip', ['ip', 'translate:inbox.ip', '1']);

        if ($honeypot) {
            $yform->setValueField('spam_protection', ['honeypot', 'translate:inbox.spam_protection', 'translate:inbox.spam_protection.error', '0']);
        }

        if ($database) {
            $yform->setActionField('db', ['rex_inbox']);
        }

        if ($mailer_profile > 0 && rex_addon::get('mailer_profile')->isAvailable()) {
            $yform->setActionField('mailer_profile', [$mailer_profile]);
        }

        return $yform;
    }

    public static function getSubject(string $name = "") :string
    {
        return \rex_config::get('inbox', 'subject', '') ." ". $name;
    }

    public static function getSubjectClient(string $name = "") :string
    {
        return \rex_config::get('inbox', 'subject_client', '') ." ". $name;
    }
}
