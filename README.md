# GrapesJsCustomPluginBundle

## About
This is a Mautic-Plugin to demonstrate the usage of dynamically added GrapesJS plugins to Mautic's editor
(see implementation at https://github.com/Moongazer/mautic/tree/feat/grapesjs-custom-plugins).

## Usage
In case the proposed implementation will be merged into Mautic's core, any plugin bundle will be able to add
custom GrapesJS plugins to the editor using the following registration object:
```javascript
// create a global window-object which holds the information about GrapesJS plugins
if (!window.MauticGrapesJsPlugins) window.MauticGrapesJsPlugins = [];

// add the plugin-function with a name to the window-object
window.MauticGrapesJsPlugins.push({
    name: 'GrapesJsCustomPlugin', // required
    plugin: GrapesJsCustomPlugin, // required
    context: ['page', 'email-mjml'], // optional. default is none/empty, so the plugin is always added; options: [page|email-mjml|email-html]
    pluginOptions: { options: { test: true, hello: 'world'} } // optional
})
```