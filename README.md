<h1 align="center">MarkShust_ExtraBodyClasses</h1> 

<div align="center">
  <p>The Extra Body Classes module adds the website and store codes to the body class attribute.</p>
  <img src="https://img.shields.io/badge/magento-^2.3-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://packagist.org/packages/markshust/magento2-module-extrabodyclasses" target="_blank"><img src="https://img.shields.io/packagist/v/markshust/magento2-module-extrabodyclasses.svg?style=flat-square" alt="Latest Stable Version" /></a>
  <a href="https://packagist.org/packages/markshust/magento2-module-extrabodyclasses" target="_blank"><img src="https://poser.pugx.org/markshust/magento2-module-extrabodyclasses/downloads" alt="Composer Downloads" /></a>
  <a href="https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity" target="_blank"><img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg?style=flat-square" alt="Maintained - Yes" /></a>
  <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/license-MIT-blue.svg" /></a>
</div>

## Table of contents

- [Summary](#summary)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Summary

Sometimes you wish to create styling for a specific website or store, and have it not be dependent upon the current theme. This module adds the website and store codes of Magento to the body class attribute, allowing you to target your CSS to a specific website or store.

## Installation

```
composer require markshust/magento2-module-extrabodyclasses
bin/magento module:enable MarkShust_ExtraBodyClasses
bin/magento setup:upgrade
```

## Usage

This module has no configuration. Just install and flush the cache, and you should see the new classes added to the body HTML attribute.

## License

[MIT](https://opensource.org/licenses/MIT)
