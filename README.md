# WhiteFrame

**White Frame is a WIP project and does have not correct versionning for the moment. Use it at your own risk.**

# Installation

With composer, you should use the dev branch instead releases. So you will need to lower your composer `minimum-stability`. Simply add at the end of your `composer.json` :

    {
      // Default project stuff
      
      "minimum-stability": "dev",
      "prefer-stable": true
    }

Next, check your laravel version and use the corresponding branch. Only `5.1 Laravel LTS` is supported for now.

    composer require white-frame/framework:5.1.x-dev

For laravel, add to your `config/app.php` :

    \WhiteFrame\Framework\FrameworkServiceProvider::class,

For lumen, edit your `bootstrap/app.php` :

    $app->register(\WhiteFrame\Framework\FrameworkServiceProvider::class);
