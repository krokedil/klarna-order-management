# Changelog

All notable changes of krokedil/klarna-order-management are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Fixed

* Fixed an issue where orders with a Klarna fee would not automatically be set to status "refunded" after a full refund.

### Fixed

* Fixed an issue where the return fee text remained on the refund button after removing the return fee amount.

### Added

* Integrated the support package to enable optional logging, system report entries, and issue reporting.

------------------
## [1.1.0] - 2025-10-20

### Added

* Integrated the metabox package to enhance the order management metabox functionality.
* Added filter `kom_skip_scheduled_actions` to allow disabling the display of scheduled actions on the admin order page.

## [1.0.3] - 2025-10-01

### Fixed

* Resolved an issue where logging did not function as intended.

## [1.0.2] - 2025-09-25

### Fixed

* Fixed an issue where High-Performance Order Storage (HPOS) detection did not function correctly.

## [1.0.1] - 2025-09-23

### Changed

* Enhanced the admin notice to inform users that order management features are now integrated into Klarna for WooCommerce.

## [1.0.0] - 2025-09-15

### Added

* Initial release of the package.
