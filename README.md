# Drupal Libraries -- make easy Drupal libraries management with Composer

This is a custom Composer repository built with [satis](https://github.com/composer/satis) for 3rd party libraries used by Drupal contributed projects
(modules/themes/distributions)

### How to use?

Add the following lines to your project's root `composer.json` file
```
{
  "repositories": [{
    "type": "composer",
    "url": "https://drulibs.github.io/drulibs"
  }]
}
```

After adding the above lines, your root `composer.json` file may look like:

```
{
    ...
    "type": "project",
    "repositories": [
        {
            "type": "composer",
            "url": "https://packages.drupal.org/8"
        },
        {
            "type": "composer",
            "url": "https://drulibs.github.io/drulibs"
        }
    ],
    "require": {
    ...
```

That's all.

Next, just add the library/libraries by Composer as normal. For
example:

```bash
composer require d-enyo/dropzone
```

or

```bash
composer require d-enyo/dropzone:5.7.1
```

However, as you can see, `d-` needs to be prepended to the package/library
name. That's the naming convention.

### How to contribute?

Read the `How it works?` section of the blog post [Drulibs.com: an easier way managing Drupal 3rd-party FE libraries with Composer](https://jungleran.com/drulibs)
