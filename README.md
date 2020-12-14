# Drupal Libraries -- make easy Drupal libraries management with Composer

This is a custom Composer repository for 3rd party libraries used by Drupal contributed projects
(modules/themes/distributions)

### How to use?

Add the following lines to your project's root `composer.json` file
```
{
  "repositories": [{
    "type": "composer",
    "url": "https://drulibs.com"
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
            "url": "https://drulibs.com"
        }
    ],
    "require": {
    ...
```

That's all.

Next, just add the library/libraries by Composer as normal. For
example:

```bash
composer require drulibs-enyo/dropzone
```

or

```bash
composer require drulibs-enyo/dropzone:5.7.1
```
