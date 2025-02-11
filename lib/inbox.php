<?php

namespace Alexplusde\Inbox;

use rex_yform_manager_dataset;

class inbox extends rex_yform_manager_dataset
{
    
    /* Name */
    /** @api */
    public function getName() : ?string
    {
        return $this->getValue("name");
    }
    /** @api */
    public function setName(mixed $value) : self
    {
        $this->setValue("name", $value);
        return $this;
    }

    /* E-Mail */
    /** @api */
    public function getEmail() : ?string
    {
        return $this->getValue("email");
    }
    /** @api */
    public function setEmail(mixed $value) : self
    {
        $this->setValue("email", $value);
        return $this;
    }

    /* Telefon */
    /** @api */
    public function getPhone() : ?string
    {
        return $this->getValue("phone");
    }
    /** @api */
    public function setPhone(mixed $value) : self
    {
        $this->setValue("phone", $value);
        return $this;
    }

    /* Nachricht */
    /** @api */
    public function getMessage(bool $asPlaintext = false) : ?string
    {
        if ($asPlaintext) {
            return strip_tags($this->getValue("message"));
        }
        return $this->getValue("message");
    }
    /** @api */
    public function setMessage(mixed $value) : self
    {
        $this->setValue("message", $value);
        return $this;
    }
            
    /* Datenschutzerklärung */
    /** @api */
    public function getPrivacyPolicy() : ?\DateTime
    {
        return $this->getValue("privacy_policy");
    }
    /** @api */
    public function setPrivacyPolicy(mixed $value) : self
    {
        $this->setValue("privacy_policy", $value);
        return $this;
    }

    /* Bevorzugte Kontaktmöglichkeit */
    /** @api */
    public function getPrefferedChannel() : ?string
    {
        return $this->getValue("preffered_channel");
    }
    /** @api */
    public function setPrefferedChannel(mixed $value) : self
    {
        $this->setValue("preffered_channel", $value);
        return $this;
    }

    /* Gesendet am... */
    /** @api */
    public function getDatestamp() : ?string
    {
        return $this->getValue("datestamp");
    }
    /** @api */
    public function setDatestamp(string $value) : self
    {
        $this->setValue("datestamp", $value);
        return $this;
    }

    /* Wird gelöscht am... */
    /** @api */
    public function getDeletedate() : ?\DateTime
    {
        return $this->getValue("deletedate");
    }
    /** @api */
    public function setDeletedate(mixed $value) : self
    {
        $this->setValue("deletedate", $value);
        return $this;
    }

    /* translate.inbox.submit */
    /** @api */
    public function getSubmit() : mixed
    {
        return $this->getValue("submit");
    }
    /** @api */
    public function setSubmit(mixed $value) : self
    {
        $this->setValue("submit", $value);
        return $this;
    }

    /* IP-Adresse */
    /** @api */
    public function getIp() : ?string
    {
        return $this->getValue("ip");
    }
    /** @api */
    public function setIp(mixed $value) : self
    {
        $this->setValue("ip", $value);
        return $this;
    }

}
