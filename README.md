# Getting dependencies
You need polymer cli (not polymer but the CLI library) in order to interface with web components in grav. Get polymer cli installed prior to usage of this (and (yarn)[https://yarnpkg.com/lang/en/docs/install/#mac-stable] / an npm client of some kind)
```bash
$ yarn global add polymer-cli
# or...
$ npm install -g polymer-cli
```
Perform this on your computer locally, this doesn't have to be installed on your server.

## Usage

Find the `CopyThisStuff` directory in `/sites/all/modues/webcomponents` and copy the files in there over to `/sites/all/libraries/webcomponents`.

Then run the following (from the directory you copied it over to) in order to get dependencies:
```bash
$ yarn install
# or...
$ npm install
```
Now run `polymer build` and you'll have files in `build/` which contain everything you'll need to get wired up to web components in your grav site. Modifying build.js or package.json can be used in order to get new elements and have them be implemented.

### Shouldn't I put web components in my theme?
We don't think so. While it may seem counter intuitive, the theme layer should be effectively implementing what Grav is saying is available. If you think of standard HTML tags are being part of this (p, div, a, etc) then it makes a bit more sense. You don't want functional HTML components to ONLY be supplied if your theme is there, you want your theme to implement and leverage the components.

## New to web components?
We built our own tooling to take the guess work out of creating, publishing and testing web components for HAX and other projects. We highly recommend you use this tooling though it's not required:
- https://github.com/elmsln/wcfactory - Build your own web component library
- https://github.com/elmsln/lrnwebcomponents - Our invoking of this tooling to see what a filled out repo looks like