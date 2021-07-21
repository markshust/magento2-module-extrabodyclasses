# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [1.0.2] - 2021-07-21

### Added
- Added `Magento_Store` as hard dependency [#1](https://github.com/markshust/magento2-module-extrabodyclasses/pull/1).

## [1.0.1] - 2019-11-14

### Updated
- Changed the listened event from `controller_action_predispatch` to `layout_load_before`. This fixes some issues which
  may arise from conflicts with third-party modules. 

## [1.0.0] - 2019-11-13

### Added
- Initial release.
