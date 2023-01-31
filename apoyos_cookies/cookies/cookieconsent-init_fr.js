var LOREM_IPSUM = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

// obtain cookieconsent plugin
var cc = initCookieConsent();

// run plugin with config object
cc.run({
    current_lang: 'en',
    autoclear_cookies: true,                    // default: false
    cookie_name: 'cc_cookie_demo2',             // default: 'cc_cookie'
    cookie_expiration: 365,                     // default: 182
    page_scripts: true,                         // default: false
    force_consent: true,                        // default: false

    // auto_language: null,                     // default: null; could also be 'browser' or 'document'
    // autorun: true,                           // default: true
    // delay: 0,                                // default: 0
    // hide_from_bots: false,                   // default: false
    // remove_cookie_tables: false              // default: false
    // cookie_domain: location.hostname,        // default: current domain
    // cookie_path: '/',                        // default: root
    // cookie_same_site: 'Lax',
    // use_rfc_cookie: false,                   // default: false
    // revision: 0,                             // default: 0

    gui_options: {
        consent_modal: {
            layout: 'cloud',                    // box,cloud,bar
            position: 'bottom center',          // bottom,middle,top + left,right,center
            transition: 'slide'                 // zoom,slide
        },
        settings_modal: {
            layout: 'bar',                      // box,bar
            position: 'left',                   // right,left (available only if bar layout selected)
            transition: 'slide'                 // zoom,slide
        }
    },

    onFirstAction: function(){
        console.log('onFirstAction fired');
    },

    onAccept: function (cookie) {
        console.log('onAccept fired!')
    },

    onChange: function (cookie, changed_preferences) {
        console.log('onChange fired!');

        // If analytics category is disabled => disable google analytics
        if (!cc.allowedCategory('analytics')) {
            typeof gtag === 'function' && gtag('consent', 'update', {
                'analytics_storage': 'denied'
            });
        }
    },

    languages: {
        'en': {
            consent_modal: {
                title: 'Bonjour voyageur, c\'est l\'heure des cookies!',
                description: 'Notre site web utilise des cookies essentiels pour assurer son bon fonctionnement et des cookies de suivi pour comprendre comment vous interagissez avec lui. Ces derniers ne seront mis en place qu\'après consentement. <a href="#" id="politicaPrivacidad_fr" class="cc-link"> Règles de confidentialité.</a>',
                primary_btn: {
                    text: 'Accepter tous',
                    role: 'accept_all'      //'accept_selected' or 'accept_all'
                },
                secondary_btn: {
                    text: 'Préférences',
                    role: 'settings'       //'settings' or 'accept_necessary'
                },
                revision_message: '<br><br> Cher utilisateur, les termes et conditions ont changé depuis votre dernière visite !'
            },
            settings_modal: {
                title: 'Cookie settings',
                save_settings_btn: 'Save current selection',
                accept_all_btn: 'Accepter tous',
                reject_all_btn: 'Rejeter tous',
                close_btn_label: 'Fermer',
                cookie_table_headers: [
                    {col1: 'Name'},
                    {col2: 'Domain'},
                    {col3: 'Expiration'}
                ],
                blocks: [
                    {
                        title: 'Utilisation des cookies',
                        description: LOREM_IPSUM + ' <a href="#" id="politicaPrivacidad_fr" class="cc-link">Règles de confidentialité.</a>.'
                    }, {
                        title: 'Cookies strictement nécessaires',
                        description: LOREM_IPSUM + LOREM_IPSUM + "<br><br>" + LOREM_IPSUM + LOREM_IPSUM,
                        toggle: {
                            value: 'necessary',
                            enabled: true,
                            readonly: true  //cookie categories with readonly=true are all treated as "necessary cookies"
                        }
                    }, {
                        title: 'Cookies d\'analyse et de performances',
                        description: LOREM_IPSUM,
                        toggle: {
                            value: 'analytics',
                            enabled: false,
                            readonly: false
                        },
                        cookie_table: [
                            {
                                col1: '^_ga',
                                col2: 'granatensistraduccion.com',
                                col3: 'description ...',
                                is_regex: true
                            },
                            {
                                col1: '_gid',
                                col2: 'granatensistraduccion.com',
                                col3: 'description ...',
                            },
                            {
                                col1: '_my_cookie',
                                col2: 'granatensistraduccion.com',
                                col3: 'test cookie with custom path ...',
                                path: '/demo'       // needed for autoclear cookies
                            }
                        ]
                    }, {
                        title: 'Cookies de ciblage et publicitaires',
                        description: 'If this category is deselected, <b>the page will reload when preferences are saved</b>... <br><br>(demo example with reload option enabled, for scripts like microsoft clarity which will re-set cookies and send beacons even after the cookies have been cleared by the cookieconsent\'s autoclear function)',
                        toggle: {
                            value: 'targeting',
                            enabled: false,
                            readonly: false,
                            reload: 'on_disable'            // New option in v2.4, check readme.md
                        },
                        cookie_table: [
                            {
                                col1: '^_cl',               // New option in v2.4: regex (microsoft clarity cookies)
                                col2: 'granatensistraduccion.com',
                                col3: 'These cookies are set by microsoft clarity',
                                // path: '/',               // New option in v2.4
                                is_regex: true              // New option in v2.4
                            }
                        ]
                    }, {
                        title: 'More information',
                        description: LOREM_IPSUM + ' <a class="cc-link" href="https://orestbida.com/contact/">Contact me</a>.',
                    }
                ]
            }
        }
    }
});