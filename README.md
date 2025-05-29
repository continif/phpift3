# PhpIFT³

PhpIFT³ is a PHP library designed to implement the "If This Then That" paradigm, allowing users to build a queue of macro operations. This library provides a simple and effective way to define chains of operations that can be executed based on specific conditions.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Classes](#classes)
  - [IFT](#ift)
  - [IFTCron](#iftcron)
- [Contributing](#contributing)
- [License](#license)

## Installation

To install PhpIFT³, you can use Composer. Run the following command in your terminal:

```
composer install
```

Make sure to include the autoload file in your project:

```php
require 'vendor/autoload.php';
```

## Usage

### Creating a Chain

To create a new chain of operations, you can use the `IFT` class:

```php
$ift = new IFT();
$ift->chain('exampleChain');
```

### Defining Conditions and Actions

You can define conditions and actions using the `ifThis` and `thanThat` methods:

```php
$ift->ifThis('exampleChain', 'someFunction', $parameters);
$ift->thanThat('exampleChain', 'anotherFunction', $parameters);
```

### Running the Chain

To execute the defined chain, use the `run` method:

```php
$ift->run('exampleChain');
```

### Scheduling with IFTCron

To run chains at specified times, use the `IFTCron` class:

```php
$cron = new IFTCron();
$cron->runChain('exampleChain', '*', '*', '*', '*', '*');
$cron->startIFTCron();
```

## Classes

### IFT

The `IFT` class is the core of the library, providing methods to define and run chains of operations.

### IFTCron

The `IFTCron` class manages the execution of IFT chains based on a specified schedule.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue for any suggestions or improvements.

## License

This project is licensed under the MIT License. See the LICENSE file for more details.