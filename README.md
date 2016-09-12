# Base32 [![Travis Status for Ejz/Base32](https://travis-ci.org/Ejz/Base32.svg?branch=master)](https://travis-ci.org/Ejz/Base32)

PHP library for Base32 encode/decode operations.

### Quick start

```bash
$ mkdir myproject && cd myproject
$ curl -sS 'https://getcomposer.org/installer' | php
$ nano -w composer.json
```

Insert following code:

```javascript
{
    "require": {
        "ejz/base32": "~1.0"
    }
}
```

Now install dependencies:

```bash
$ php composer.phar install
```

If everything is OK, let's encode something:

```php
<?php

define('ROOT', __DIR__);
require(ROOT . '/vendor/autoload.php');

use Ejz\Base32;

$string = 'github';
$base32 = Base32::encode($string);
echo $base32, chr(10);
echo Base32::decode($base32), chr(10);
```

```php
m5uxi2dvmi======
github
```

If you want, you can omit padding sequence at the end of encoded string (more URL-friendly way).

### CI: Codeship

[![Codeship Status for Ejz/Base32](https://codeship.com/projects/e5097e70-78f1-0132-01f8-66d538912ad4/status)](https://codeship.com/projects/55804)

### CI: Travis

[![Travis Status for Ejz/Base32](https://travis-ci.org/Ejz/Base32.svg?branch=master)](https://travis-ci.org/Ejz/Base32)
