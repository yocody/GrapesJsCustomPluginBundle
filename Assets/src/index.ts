import grapesjs from 'grapesjs';

// declare type for window so TS will not complain during compiling
declare global {
    interface Window {
        MauticGrapesJsPlugins: object[];
    }
}

export type PluginOptions = {
};

export type RequiredPluginOptions = Required<PluginOptions>;

const GrapesJsCustomPlugin: grapesjs.Plugin<PluginOptions> = (editor, opts: Partial<PluginOptions> = {}) => {
    const options: RequiredPluginOptions = {
        ...opts
    };
    console.log('Run GrapesJsCustomPlugin...')
    console.log('Options passed to GrapesJsCustomPlugin:', options)
    editor.on('load', () => {
        console.log('GrapesJsCustomPlugin: editor.onLoad()')
    });
}

// export the plugin in case someone wants to use it as source module
export default GrapesJsCustomPlugin;

// register the plugin globally so Mautic-GrapesJS can find it during initialization
if (!window.MauticGrapesJsPlugins) window.MauticGrapesJsPlugins = [];
window.MauticGrapesJsPlugins.push({
    name: 'GrapesJsCustomPlugin',
    plugin: GrapesJsCustomPlugin,
    context: ['page', 'email-mjml'], // options: [page|email-mjml|email-html]
    pluginOptions: { options: { test: true, hello: 'world'} }
})
