## How to install?
Install via the Control Panel or via composer

```bash
composer require sortarad/peculiarpointer
```

## How to use?
Once you install peculiar pointer you'll need to add an asset field to your [blueprint](https://statamic.dev/blueprints). 

Make sure that the asset handle is **"cursor"**. 

You'll also need to add the peculiar pointer [modifier](https://statamic.dev/modifiers/) **{{ cursor | peculiar }}** to your container element. That's where the magic happens.

## Where do I find cool cursors?
peculiar pointer allows the use of any image file but we recommend using an SVG (no larger than 100px) to get the crispest quality. We'll be providing you all sorts of fun cursors in the coming weeks.
