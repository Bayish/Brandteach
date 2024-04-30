import './bootstrap';
import './../css/app.css';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from 'ziggy-js';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import {far} from '@fortawesome/free-regular-svg-icons';
import {fas} from '@fortawesome/free-solid-svg-icons';
import { i18nVue } from 'laravel-vue-i18n';
import CRMLayout from "@/layout/crm-layout/index.vue";

library.add(far, fas);


createInertiaApp({
  resolve: (name) => {
      console.log(name !== "Auth/Login", name.includes("Core/"));
    const page = resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob("./Pages/**/*.vue"));
    if(name !== "Auth/Login" && name.includes("Core/")){
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
    VueApp.use(plugin)
      .use(i18nVue, {
        resolve: lang => {
          return import(`./../../lang/${lang}.json`);
        },
      })
      .use(ZiggyVue)
      .mount(el)

    return VueApp
  },
})





