# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.1.0] - 2017-11-30
### Added
- Added 'sofort' to the Products constant
- Added support for timestamp and datetime for terms and privacy
- Added Changelog

### Changed
- Empty strings will no longer be submitted
- Improved coverage
- Added Order as Submodel to Transaction

### Fixed
- Fixed [issue #1](https://github.com/concardis/PHP_SDK/pull/1) Use correct paths for PSR-4 autoloader
- Fixed [issue #3](https://github.com/concardis/PHP_SDK/issues/3) Issue with DateTime type for AbstractOrder::$terms and AbstractOrder::$privacy 
- Fixed [issue #4](https://github.com/concardis/PHP_SDK/issues/4) Concardis\Payengine\Lib\Models\Response\Orders\Transaction::getOrder() can also return an array
- Fixed getResponseHeader in PayengineResourceException

## [1.0.0] - 2017-09-13
