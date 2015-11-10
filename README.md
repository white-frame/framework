# WhiteFrame

**White Frame is a work in progress and does have not versionning for the moment**

Complete package containing several components for developing resource based applications (like admin theme, dashboards based on datas ...).

WhiteFrame allows you to upgrade your application classes like `Controllers`, `Models` and add components like `Presenters` and `Repositories`. It bring to your application powerfull functions based the `Models` configuration such as widgets for generating _ajax table_ with show/edit/delete buttons, classes for extracting statistics for a _dynamic chart_, etc ...

With the highly configurable `Model`, you can specify the `Presenter`, the `Repository`, the url endpoint and the view folder. This allow you to build automatic `Controller`, serving correct views on the correct url for the object.

# Installation

As it brings some front end logic, WhiteFrame require some bower packages in addition to the basic composer requirement.

## Laravel 5.x

#### Installing laravel package

First, require the main project package for installing dependancies.

    composer require white-frame/white-frame:dev-master

**Development version warning** : As the package is a work in progress the `minimum-stability` of your project should be `dev`, otherwise the command before will throw an error. If you dont want to put all your deps to a dev version, you can setup `prefer-stable` option to `true`. Put theses lines into your composer.json :

    "prefer-stable": true,
    "minimum-stability": "dev"

#### Requiring bower requirements

... work

## Boilerplate

We built a simple boilerplate with bootstrap and the opensource AdminLTE template. Take a look at : https://github.com/white-frame/white-frame-boilerplate 
