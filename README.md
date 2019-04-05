# Blave SVG for Statamic ![Statamic 2.11](https://img.shields.io/badge/statamic-2.11-blue.svg?style=flat-square)

Use [Blade SVG](https://github.com/adamwathan/blade-svg) with Statamic in Blade templates.

## Installation

Simply copy the `BladeSvg` folder into `site/addons/`. That's it!

## Configuration

You can set all of the settings under the addon's settings page. You can get to it from the Addons page and click those 3 dots -> Settings.

The default path for SVGs is `/assets/svg` and the default SVG sprite path is `/assets/svg/spritesheet.svg`.

## Usage

Just use it like you would normally use [Blade SVG](https://github.com/adamwathan/blade-svg) with Laravel Blade templates:

```html
<a href="/settings">
    @svg('cog', 'icon-lg', ['id' => 'settings-icon']) Settings
</a>
```

## Acknowledgements

- Thanks to [Adam Wathan](https://github.com/adamwathan) for his [Blade SVG](https://github.com/adamwathan/blade-svg) package
