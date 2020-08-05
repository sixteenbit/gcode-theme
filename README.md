# GCODE

![GCODE](screenshot.png)

## Features

- Build workflow using [gulp.js](https://gulpjs.com/)
- [Foundation for Sites](https://get.foundation/sites/docs/)
- [Font Awesome](https://fontawesome.com/)
- Force Login option for closing off site during development

## Dependencies
- [Node.js](https://nodejs.org/en/)
- [Yarn](https://yarnpkg.com/)

## Getting started

```bash
# Clone the repository into wp-content/themes
git clone https://github.com/sixteenbit/gcode-theme.git
```

```bash
# From the root of wp-content/themes/gcode-theme run the following:
yarn
```

## Commands

```bash
# Removes the release dir and builds the project
gulp

# Builds the project
gulp build

# Runs the build task and watches for file changes
gulp watch

# Runs the styles task
gulp styles

# Runs the javascript task
gulp javascript

# Starts Browsersync
gulp server

# Copy theme to release folder for production
gulp release --production
```
