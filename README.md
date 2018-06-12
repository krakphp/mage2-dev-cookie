# Krak DevCookie

This magento module adds a small plugin which fixes the issue of using `localhost` for a local dev setup. It just augments the Magneto Framework cookie code to also allow for localhost instead of preventing it.

## Installation

Install with composer at `krak/mage2-dev-cookie`.

Then run `bin/magento module:enable Krak_DevCookie` followed by `bin/magento setup:upgrade`.
