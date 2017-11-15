# <a name="csmanager"></a>Pimcore 5 CS (Classification Store) Manager


[![Software License](https://img.shields.io/badge/license-GPLv3-brightgreen.svg?style=flat)](LICENSE.md)
[![Join the chat at https://gitter.im/pimcore5-clipboard/Lobby](https://img.shields.io/badge/gitter-join%20chat-brightgreen.svg?style=flat)](https://gitter.im/pimcore5-clipboard/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Build Status](https://travis-ci.org/DivanteLtd/pimcore5-clipboard.svg?branch=master)](https://travis-ci.org/DivanteLtd/pimcore5-clipboard)

## :warning: Pimcore 5 CS Manager bundle is for now in a in-progress phase - it can be incompleted for now and we cannot guarantee correct work. 

Pimcore 5 CS Manager Bundle provides service for nice and easy work with Pimcore [Classification Store](https://pimcore.com/docs/5.0.x/Development_Documentation/Objects/Object_Classes/Data_Types/Classification_Store.html) feature.

**Table of Contents**

- [Pimcore 5 CS Manager](#csmanager)
    - [Description](#description)
    - [Compatibility](#compability)
    - [Requirements](#requirements)
    - [Installing/Getting started](#installing)
    - [Usage](#usage)
    - [Contributing](#contributing)
	- [Licensing](#licensing)
	- [Standards & Code Quality](#standards)
	- [About Authors](#authors)
										
## <a name="description"></a>Description	
Bundle was created for developers who need to work a lot with great Pimcore feature - [Classification Store](https://pimcore.com/docs/5.0.x/Development_Documentation/Objects/Object_Classes/Data_Types/Classification_Store.html).
Goal is to provide as much simple methods as possible for easier use of CS in a Service possible to use in the whole application. 
Example methods are:
- `array getKeyValues(int $keyId)` - provide all object values for attribute
- `array getKeyGroups(int $keyId)` - provide all groups in which attribute exists

																							    	
## <a name="compability"></a>Compatibility
This module is compatible with [Pimcore](https://github.com/pimcore/pimcore) ^5.0.
## <a name="requirements"></a>Requirements
This plugin requires php >= 7.0.
## <a name="installing"></a>Installing/Getting started
### First step - minimum stability
Because bundle is for now in the alpha phase you need to be sure that your composer.json minimum stability is alpha:
```
"minimum-stability": "alpha"
``` 
### Second step - fetch bundle
```
composer require divante-ltd/pimcore5-cs-manager
```
### Third step - enable bundle
```
php bin/console pimcore:bundle:enable DivanteCsManagerBundle
```
## <a name="usage"></a>Usage

### In code
```
    #1. get service
    $csManager = $this->get('divante.csmanager');
    #2. use its methods
    $values = $csManager->getKeyValues(111);               
    $groups = $csManager->getKeyGroups(111);
```

### By command line
```
    php bin/console divante:csmanager getKeyValues 111
    php bin/console divante:csmanager getKeyGroups 111
```

## <a name="contributing"></a>Contributing
If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.
## Licensing
The code in this project is licensed under GPLv3 license.
## <a name="standards"></a>Standards & Code Quality
This module respects our own PHPCS and PHPMD rulesets which are based on PSR-1 and PSR-2.
## <a name="authors"></a>About Authors

![Divante-logo](http://divante.co///logo_1.png "Divante")
We are a Software House from Europe, headquartered in Poland and employing about 150 people. Our core competencies are built around Magento, Pimcore and bespoke software projects (we love Symfony3, Node.js, Angular, React, Vue.js). We specialize in sophisticated integration projects trying to connect hardcore IT with good product design and UX.
Visit our website [Divante.co](https://divante.co/ "Divante.co") for more information.

