# Tr Identity Number Validation

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-validation" rel="nofollow">
    <img src="https://img.shields.io/packagist/v/netkod-bilisim/tr-identity-number-validation" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-validation" rel="nofollow">
    <img src="https://img.shields.io/packagist/dt/netkod-bilisim/tr-identity-number-validation" alt="Total Downloads">
</a>
<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-validation" rel="nofollow">
    <img src="https://poser.pugx.org/netkod-bilisim/tr-identity-number-validation/dependents.svg" alt="Dependents">
</a>
<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-validation" rel="nofollow">
    <img src="https://img.shields.io/packagist/l/netkod-bilisim/tr-identity-number-validation" alt="License">
</a>
</div>

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-validation" rel="nofollow">
    <img src="http://poser.pugx.org/netkod-bilisim/tr-identity-number-validation/require/php" alt="License">
</a>
<a href="https://scrutinizer-ci.com/g/netkod-bilisim/tr-identity-number-validation/badges/quality-score.png?b=master" rel="nofollow">
    <img src="https://scrutinizer-ci.com/g/netkod-bilisim/tr-identity-number-validation/badges/quality-score.png?b=master" alt="License">
</a>
<a href="https://github.styleci.io/repos/671523555?branch=master">
    <img src="https://github.styleci.io/repos/671523555/shield?branch=master" alt="StyleCI">
</a>
</div>

## <img src="public/assets/images/presentation.png" width="25" height="25"> Introduction

It checks that the TR Identity Number is in the correct format.

## <img src="public/assets/images/requirement.png" width="25" height="25"> Requirements

PHP >= 7.4

## <img src="public/assets/images/inbox.png" width="25" height="25"> Install

```bash
composer require netkod-bilisim/tr-identity-number-validation
```

## <img src="public/assets/images/web-coding.png" width="25" height="25"> Usage

```php
use NetkodBilisim\TrCitizenNumberValidation;

$result = TrCitizenNumberValidation::validate(12345678901);
var_dump($result);

# Result: bool(false)
```

## <img src="public/assets/images/licensing.png" width="25" height="25"> License

This package is open source software licensed under
the [MIT License](https://opensource.org/license/mit).
