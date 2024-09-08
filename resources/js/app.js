import './bootstrap';
import './../css/app.css';
import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/vue3'
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {ZiggyVue} from 'ziggy-js';
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome';
import {library} from '@fortawesome/fontawesome-svg-core';
import {far} from '@fortawesome/free-regular-svg-icons';
import {fas} from '@fortawesome/free-solid-svg-icons';
import {i18nVue} from 'laravel-vue-i18n';
import CRMLayout from "@/layout/crm-layout/index.vue";
import {VueReCaptcha} from 'vue-recaptcha-v3'
library.add(far, fas);

function loadLocaleMessages () {
    const locales = require.context('./locales', true, /[A-Za-z0-9-_,\s]+\.json$/i)
    const messages = {}
    locales.keys().forEach(key => {
        const matched = key.match(/([A-Za-z0-9-_]+)\./i)
        if (matched && matched.length > 1) {
            const locale = matched[1]
            messages[locale] = locales(key)
        }
    })
    return messages
}


createInertiaApp({
    resolve: (name) => {
        console.log(name !== "Auth/Login", name.includes("Core/"));
        const page = resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob("./Pages/**/*.vue"));
        if (name !== "Auth/Login" && name.includes("Core/")) {
            page.then((module) => {
                module.default.layout = module.default.layout || CRMLayout;
            });
        }
        return page;
    },
    setup({el, App, props, plugin}) {
        const VueApp = createApp({
            render: () => {
                return h(App, props)
            }
        })
        VueApp.component('font-awesome-icon', FontAwesomeIcon)
        VueApp
            .use(VueReCaptcha, { siteKey: '6Lf-Os4pAAAAAOuGkOspaA5GSFNuXxuqHVaafrCV' })
            .use(i18nVue, {
                lang: 'en',
                resolve: async lang => {
                    const langs = import.meta.glob('../../lang/*.json')
                    return await langs[`../../lang/${lang}.json`]()
                }
            })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el)

        return VueApp
    },
})





