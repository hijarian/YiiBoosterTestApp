YiiBoosterTestApp
=================

Testing and showcase of [YiiBooster](http://yii-booster.clevertech.biz/) extension for [Yii framework](http://www.yiiframework.com/).

Here one can touch and feel (almost) all possible widgets included in the YiiBooster.
Also, one can debug the YiiBooster with such a showcase.

After the connection to the MySQL database is estabilished we can try the gridviews as if it was a real application.

## Installation

1. Clone this repo to local directory.
2. Publish at local webserver with root directory as webroot (i. e., not `protected`, but root, where `index.php` resides).
3. Copy&rename to `paths` file `paths-example` in the root directory
4. Write the real paths to Yii and YiiBooster directories in the `paths` config file. You should clone their repos separately
5. Copy&rename to `main-local.php` file `main-local-example.php` in directory `protected/config`.
6. Write the MySQL DB connection options to `protected/config/main-local.php`. You can write any other overrides here, format is identical to the format of normal Yii configuration.
7. Open your application in browser. You should see welcome message and topmenu with options.
