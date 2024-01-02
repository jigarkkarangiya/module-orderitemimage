# Order Item Image - Magento 2 Extension by Jigar Karangiya

<h3>Magento 2 Module Which adds Order Item Images in the sales order view grid in the admin panel.</h3>

![Order Item Image](https://img001.prntscr.com/file/img001/9uOYfDwzSX-LSOePg_JPtA.jpg)


    ``jigar/module-orderitemimage``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)


## Main Functionalities
This extension simply adds product images to the sales order view page in the Magento 2 admin panel.

## Installation

### Type 1: Zip file

 - Unzip the zip file in `app/code/Jigar`
 - Enable the module by running `php bin/magento module:enable Jigar_OrderItemImage`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - public repository `packagist.org`
    - public GitHub repository as vcs
 - Install the module composer by running `composer require jigar/module-orderitemimage`
 - enable the module by running `php bin/magento module:enable Jigar_OrderItemImage`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration
- No configurations are required in this release (1.0.*)


## Specifications
- Show product images in sales order view item grid
- No configurations required, Plug & Play !!



