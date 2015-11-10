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

When installed you can add the White Frame service provider to your `config/app.php` :

    \WhiteFrame\WhiteFrame\WhiteFrameServiceProvider::class,

#### Requiring bower requirements

First of all you should (install bower)[http://bower.io/#install-bower]

Next, create a bower configuration file `.bowerrc` with the content :

```json
{
	"directory": "public/bower_components"
}
```

Install required packages :

    bower install bootstrap components-font-awesome jquery jquery-ui dynatable restfulizer popconfirm --save

Add packages to your template using your prefered method. In our example we include directly assets.

Styles :
```html
<!-- basic requirements for white frame : bootstrap, font awesome, dynatable -->
<link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('bower_components/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('bower_components/dynatable/jquery.dynatable.css') }}" rel="stylesheet">
```

Scripts :
```html
<!-- basic requirements for white frame : jquery, jquery ui, and js from bootstrap -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- white frame components : dynatable, popconfirm, restfulizer -->
<script src="{{ asset('bower_components/dynatable/jquery.dynatable.js') }}"></script>
<script src="{{ asset('bower_components/popconfirm/jquery.popconfirm.js') }}"></script>
<script src="{{ asset('bower_components/restfulizer/jquery.restfulizer.js') }}"></script>
```

## Boilerplate

We built a simple boilerplate with bootstrap and the opensource AdminLTE template. Take a look at : https://github.com/white-frame/white-frame-boilerplate 
