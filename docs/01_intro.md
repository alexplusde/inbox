# Die Klasse `Inbox`

Kind-Klasse von `rex_yform_manager_dataset`, damit stehen alle Methoden von YOrm-Datasets zur Verfügung. Greift auf die Tabelle `rex_inbox` zu.

> Es werden nachfolgend zur die durch dieses Addon ergänzte Methoden beschrieben. Lerne mehr über YOrm und den Methoden für Querys, Datasets und Collections in der [YOrm Doku](https://github.com/yakamara/yform/blob/master/docs/04_yorm.md)

## Alle Einträge erhalten

```php
$entries = Inbox::query()->find(); // YOrm-Standard-Methode zum Finden von Einträgen, lässt sich mit where(), Limit(), etc. einschränken und Filtern.
```

## Methoden und Beispiele

### `getName()`

Gibt den Wert für das Feld `name` (Name) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
echo $dataset->getName();
```

### `setName(mixed $value)`

Setzt den Wert für das Feld `name` (Name).

```php
$dataset = Inbox::create();
$dataset->setName($value);
$dataset->save();
```

### `getEmail()`

Gibt den Wert für das Feld `email` (E-Mail) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
echo $dataset->getEmail();
```

### `setEmail(mixed $value)`

Setzt den Wert für das Feld `email` (E-Mail).

```php
$dataset = Inbox::create();
$dataset->setEmail($value);
$dataset->save();
```

### `getPhone()`

Gibt den Wert für das Feld `phone` (Telefon) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
echo $dataset->getPhone();
```

### `setPhone(mixed $value)`

Setzt den Wert für das Feld `phone` (Telefon).

```php
$dataset = Inbox::create();
$dataset->setPhone($value);
$dataset->save();
```

### `getMessage(bool $asPlaintext = false)`

Gibt den Wert für das Feld `message` (Nachricht) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
$text = $dataset->getMessage(true);
```

### `setMessage(mixed $value)`

Setzt den Wert für das Feld `message` (Nachricht).

```php
$dataset = Inbox::create();
$dataset->setMessage($value);
$dataset->save();
```

### `getPrivacyPolicy()`

Gibt den Wert für das Feld `privacy_policy` (Datenschutzerklärung) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
echo $dataset->getPrivacyPolicy();
```

### `setPrivacyPolicy(mixed $value)`

Setzt den Wert für das Feld `privacy_policy` (Datenschutzerklärung).

```php
$dataset = Inbox::create();
$dataset->setPrivacyPolicy($value);
$dataset->save();
```

### `getPrefferedChannel()`

Gibt den Wert für das Feld `preffered_channel` (Bevorzugte Kontaktmöglichkeit) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
echo $dataset->getPrefferedChannel();
```

### `setPrefferedChannel(mixed $value)`

Setzt den Wert für das Feld `preffered_channel` (Bevorzugte Kontaktmöglichkeit).

```php
$dataset = Inbox::create();
$dataset->setPrefferedChannel($value);
$dataset->save();
```

### `getDatestamp()`

Gibt den Wert für das Feld `datestamp` (Gesendet am...) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
$datestamp = $dataset->getDatestamp();
```

### `setDatestamp(string $value)`

Setzt den Wert für das Feld `datestamp` (Gesendet am...).

```php
$dataset = Inbox::create();
$dataset->setDatestamp($value);
$dataset->save();
```

### `getDeletedate()`

Gibt den Wert für das Feld `deletedate` (Wird gelöscht am...) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
echo $dataset->getDeletedate();
```

### `setDeletedate(mixed $value)`

Setzt den Wert für das Feld `deletedate` (Wird gelöscht am...).

```php
$dataset = Inbox::create();
$dataset->setDeletedate($value);
$dataset->save();
```

### `getSubmit()`

Gibt den Wert für das Feld `submit` (translate.Inbox.submit) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
echo $dataset->getSubmit();
```

### `setSubmit(mixed $value)`

Setzt den Wert für das Feld `submit` (translate.Inbox.submit).

```php
$dataset = Inbox::create();
$dataset->setSubmit($value);
$dataset->save();
```

### `getIp()`

Gibt den Wert für das Feld `ip` (IP-Adresse) zurück:

Beispiel:

```php
$dataset = Inbox::get($id);
echo $dataset->getIp();
```

### `setIp(mixed $value)`

Setzt den Wert für das Feld `ip` (IP-Adresse).

```php
$dataset = Inbox::create();
$dataset->setIp($value);
$dataset->save();
```
