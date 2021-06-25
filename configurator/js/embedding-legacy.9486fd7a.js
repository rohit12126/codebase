(function(t) {
    function e(e) {
        for (var n, s, a = e[0], c = e[1], l = e[2], u = 0, f = []; u < a.length; u++) s = a[u], Object.prototype.hasOwnProperty.call(o, s) && o[s] && f.push(o[s][0]), o[s] = 0;
        for (n in c) Object.prototype.hasOwnProperty.call(c, n) && (t[n] = c[n]);
        d && d(e);
        while (f.length) f.shift()();
        return r.push.apply(r, l || []), i()
    }

    function i() {
        for (var t, e = 0; e < r.length; e++) {
            for (var i = r[e], n = !0, s = 1; s < i.length; s++) {
                var c = i[s];
                0 !== o[c] && (n = !1)
            }
            n && (r.splice(e--, 1), t = a(a.s = i[0]))
        }
        return t
    }
    var n = {},
        o = {
            embedding: 0
        },
        r = [];

    function s(t) {
        return a.p + "js/" + ({} [t] || t) + "-legacy." + {
            "chunk-2d0c8827": "b358c7be"
        } [t] + ".js"
    }

    function a(e) {
        if (n[e]) return n[e].exports;
        var i = n[e] = {
            i: e,
            l: !1,
            exports: {}
        };
        return t[e].call(i.exports, i, i.exports, a), i.l = !0, i.exports
    }
    a.e = function(t) {
        var e = [],
            i = o[t];
        if (0 !== i)
            if (i) e.push(i[2]);
            else {
                var n = new Promise((function(e, n) {
                    i = o[t] = [e, n]
                }));
                e.push(i[2] = n);
                var r, c = document.createElement("script");
                c.charset = "utf-8", c.timeout = 120, a.nc && c.setAttribute("nonce", a.nc), c.src = s(t);
                var l = new Error;
                r = function(e) {
                    c.onerror = c.onload = null, clearTimeout(u);
                    var i = o[t];
                    if (0 !== i) {
                        if (i) {
                            var n = e && ("load" === e.type ? "missing" : e.type),
                                r = e && e.target && e.target.src;
                            l.message = "Loading chunk " + t + " failed.\n(" + n + ": " + r + ")", l.name = "ChunkLoadError", l.type = n, l.request = r, i[1](l)
                        }
                        o[t] = void 0
                    }
                };
                var u = setTimeout((function() {
                    r({
                        type: "timeout",
                        target: c
                    })
                }), 12e4);
                c.onerror = c.onload = r, document.head.appendChild(c)
            } return Promise.all(e)
    }, a.m = t, a.c = n, a.d = function(t, e, i) {
        a.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: i
        })
    }, a.r = function(t) {
        "undefined" !== typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, a.t = function(t, e) {
        if (1 & e && (t = a(t)), 8 & e) return t;
        if (4 & e && "object" === typeof t && t && t.__esModule) return t;
        var i = Object.create(null);
        if (a.r(i), Object.defineProperty(i, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t)
            for (var n in t) a.d(i, n, function(e) {
                return t[e]
            }.bind(null, n));
        return i
    }, a.n = function(t) {
        var e = t && t.__esModule ? function() {
            return t["default"]
        } : function() {
            return t
        };
        return a.d(e, "a", e), e
    }, a.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, a.p = "", a.oe = function(t) {
        throw console.error(t), t
    };
    var c = window["webpackJsonp"] = window["webpackJsonp"] || [],
        l = c.push.bind(c);
    c.push = e, c = c.slice();
    for (var u = 0; u < c.length; u++) e(c[u]);
    var d = l;
    r.push([1, "chunk-vendors", "chunk-common"]), i()
})({
    1: function(t, e, i) {
        t.exports = i("4659")
    },
    "2b52": function(t, e, i) {
        "use strict";
        i("5afe")
    },
    4659: function(t, e, i) {
        "use strict";
        i.r(e);
        var n = i("2b0e"),
            o = function() {
                var t = this,
                    e = t.$createElement,
                    i = t._self._c || e;
                return i("div", [i("div", {
                    staticClass: "nav"
                }, [t._v("I AM A REGULAR TOP NAV AS YOU FIND IT ON EVERY WEBSITE")]), i("h1", [t._v("VUE COMPONENT")]), i("div", {
                    staticClass: "configurators"
                }, [i("div", [i("div", {
                    staticClass: "button",
                    attrs: {
                        id: "start-configure"
                    }
                }, [t._v("Start configure ")]), i("div", {
                    staticClass: "button",
                    attrs: {
                        id: "trigger-request"
                    }
                }, [t._v("Trigger request ")]), i("div", {
                    staticClass: "button",
                    attrs: {
                        id: "load-configuration-string"
                    }
                }, [t._v("Load config.-str. ")]), i("div", {
                    ref: "rml1",
                    staticClass: "config"
                })]), i("div", [i("div", {
                    staticClass: "button"
                }, [t._v("Dummy")]), i("div", {
                    ref: "rml2",
                    staticClass: "config"
                })]), i("div", [i("div", {
                    staticClass: "button"
                }, [t._v("Dummy")]), i("div", {
                    ref: "rml3",
                    staticClass: "config"
                })]), i("div", {
                    staticClass: "full-screen"
                }, [i("div", {
                    staticClass: "button",
                    attrs: {
                        id: "conf4-button"
                    }
                }, [t._v("Start configuring here ")]), i("div", {
                    ref: "rml4",
                    staticClass: "config full-page-configurator"
                })])]), i("p"), i("div", {
                    staticClass: "button",
                    attrs: {
                        id: "conf5-button"
                    }
                }, [t._v("Open directly ")]), i("div", {
                    ref: "rml5",
                    staticClass: "config full-page-configurator"
                }), i("h2", [t._v("Please check that there are two catched exceptions")]), i("div", [t._v("This is here to produce 2 errors on the JS console")]), i("hr"), i("div", {
                    ref: "rml6"
                }), i("p"), i("div", [t._v("This is here to check domain error (see JS console, not working on localhost because localhost is white listed) ")]), i("div", {
                    ref: "rml7",
                    staticClass: "config"
                }), i("div", {
                    staticClass: "button",
                    attrs: {
                        id: "conf8-button"
                    }
                }, [t._v("Biohort TopImage ")]), i("div", {
                    ref: "rml8",
                    staticClass: "config"
                }), t.embeddingApi && t.showConfigurators.number09 ? i("GlbConfSwitch", {
                    attrs: {
                        embeddingApi: t.embeddingApi,
                        configuratorId: t.configuratorId,
                        defaultOptions: t.defaultOptions
                    }
                }) : t._e(), t.embeddingApi && t.showConfigurators.number10 ? i("GlbConfSwitchSecret", {
                    attrs: {
                        embeddingApi: t.embeddingApi,
                        configuratorId: t.configuratorId,
                        defaultOptions: t.defaultOptions
                    }
                }) : t._e(), i("p", [t._v("In the next example the left should load, the right should wait for embedding lib")]), t.showConfigurators.number11 ? i("div", {
                    staticClass: "config"
                }, [i("iframe", {
                    staticStyle: {
                        width: "50%",
                        height: "100%"
                    },
                    attrs: {
                        title: "demonstrate simple embed",
                        src: t.simpleLink
                    }
                }), i("iframe", {
                    staticStyle: {
                        width: "50%",
                        height: "100%"
                    },
                    attrs: {
                        title: "demonstrate failing embed",
                        src: t.regularLink
                    }
                })]) : t._e(), i("p", [t._v("This uses not the embedding API but uses RubensAPI on the window object (needed for UI fork). It should also show a price as soon as it is loaded.")]), t.showConfigurators.number12 ? i("div", {
                    staticClass: "config"
                }, [i("iframe", {
                    attrs: {
                        id: "fork-iframe",
                        src: "/index.html?id=usm:frame&configuratorId=demoConfigurator&api=false",
                        frameborder: "0",
                        width: "100%",
                        height: "500"
                    }
                })]) : t._e(), i("div", [t._v("This is here to check no active package error (not working on localhost because localhost is white listed) ")]), i("div", {
                    ref: "rml9",
                    staticClass: "config"
                }), i("div", {
                    staticClass: "button",
                    attrs: {
                        id: "trigger-request-plan"
                    }
                }, [t._v("Trigger request plan ")]), i("div", {
                    ref: "rml10",
                    staticClass: "config"
                })], 1)
            },
            r = [],
            s = function() {
                var t = this,
                    e = t.$createElement,
                    i = t._self._c || e;
                return i("div", [i("h2", [t._v("Warning")]), i("p", [t._v(' The following example only shows that it is possible to load static items and configurations/configurable-items in the same instance. But there are still some things to consider. How does the user of the embedding lib knows that a static item is loaded and therefore only a subset of methods is available? Also we need to make sure that we do not expose something on ".extended" which has a name clash between configurator and glbviewer. So if we need this functionality we need to do some architectural changes. ')]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("brands_3:44032500", !0)
                        }
                    }
                }, [t._v("static 1")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("brands_3:44031000", !0)
                        }
                    }
                }, [t._v("static 2")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("usm:frame", !1)
                        }
                    }
                }, [t._v("conf. item 1")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("jab:carpet001", !1)
                        }
                    }
                }, [t._v("conf. item 2")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("rolfbenz:freistil185_master:B4BFC725FDF4923B15F2F9D02890D99D11E12168CF5BB4DA07A9DE7E12AC729F", !1)
                        }
                    }
                }, [t._v("configuration 1")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("visplay:qubo_master:9B8E73799EBD29CE7ECC9197EDA1CC7447797D6A3FE84EC645F7186DFEC29148", !1)
                        }
                    }
                }, [t._v("configuration 2")]), i("div", {
                    ref: "rml",
                    staticClass: "config"
                })])
            },
            a = [],
            c = n["a"].extend({
                props: {
                    defaultOptions: Object,
                    configuratorId: String,
                    embeddingApi: Function
                },
                data() {
                    return {
                        api: null
                    }
                },
                methods: {
                    async loadObject(t, e) {
                        if (this.api) this.api.ui.loadObject(t);
                        else {
                            if (!this.embeddingApi) return void console.error("emedding api not ready yet");
                            const i = {
                                    id: t
                                },
                                n = {
                                    ...this.defaultOptions,
                                    ...i
                                };
                            delete n.isItem;
                            const o = await this.embeddingApi[e ? "createViewer" : "createConfigurator"](this.configuratorId, this.$refs.rml, n);
                            this.api = o
                        }
                    }
                }
            }),
            l = c,
            u = i("2877"),
            d = Object(u["a"])(l, s, a, !1, null, null, null),
            f = d.exports,
            g = function() {
                var t = this,
                    e = t.$createElement,
                    i = t._self._c || e;
                return i("div", [i("h2", [t._v("Static / Configuration Example")]), i("p", [t._v(" This shows how we suggest to implement a switch between static items and configurable ones ")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("brands_3:44032500", !0)
                        }
                    }
                }, [t._v("static 1")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("brands_3:44031000", !0)
                        }
                    }
                }, [t._v("static 2")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("usm:frame", !1)
                        }
                    }
                }, [t._v("conf. item 1")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("jab:carpet001", !1)
                        }
                    }
                }, [t._v("conf. item 2")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("rolfbenz:freistil185_master:B4BFC725FDF4923B15F2F9D02890D99D11E12168CF5BB4DA07A9DE7E12AC729F", !1)
                        }
                    }
                }, [t._v("configuration 1")]), i("div", {
                    staticClass: "button",
                    on: {
                        click: function(e) {
                            return t.loadObject("visplay:qubo_master:9B8E73799EBD29CE7ECC9197EDA1CC7447797D6A3FE84EC645F7186DFEC29148", !1)
                        }
                    }
                }, [t._v("configuration 2")]), i("div", {
                    staticClass: "container-3d config"
                }, [i("div", {
                    ref: "glb",
                    class: {
                        isHidden: t.isConfigurator
                    }
                }), i("div", {
                    ref: "configurator",
                    class: {
                        isHidden: t.isGlbViewer
                    }
                })])])
            },
            m = [],
            h = n["a"].extend({
                props: {
                    defaultOptions: Object,
                    configuratorId: String,
                    embeddingApi: Function
                },
                data() {
                    return {
                        configuratorApi: null,
                        viewerApi: null,
                        isConfigurator: !1,
                        isGlbViewer: !1
                    }
                },
                methods: {
                    async loadObject(t, e) {
                        const i = e ? this.viewerApi : this.configuratorApi;
                        if (i) await i.ui.loadObject(t);
                        else {
                            if (!this.embeddingApi) return void console.error("emedding api not ready yet");
                            const i = {
                                    id: t
                                },
                                n = {
                                    ...this.defaultOptions,
                                    ...i
                                };
                            if (delete n.isItem, e) {
                                const t = await this.embeddingApi.createViewer(this.configuratorId, this.$refs.glb, n);
                                this.viewerApi = t
                            } else {
                                const t = await this.embeddingApi.createConfigurator(this.configuratorId, this.$refs.configurator, n);
                                this.configuratorApi = t
                            }
                        }
                        this.isConfigurator = !e, this.isGlbViewer = e
                    }
                }
            }),
            b = h,
            p = (i("2b52"), Object(u["a"])(b, g, m, !1, null, null, null)),
            v = p.exports,
            C = i("b7f9"),
            w = n["a"].extend({
                components: {
                    GlbConfSwitch: v,
                    GlbConfSwitchSecret: f
                },
                data() {
                    const t = !0;
                    return {
                        showConfigurators: {
                            number01: t,
                            number02: t,
                            number03: t,
                            number04: t,
                            number05: t,
                            number06: t,
                            number07: t,
                            number08: t,
                            number09: t,
                            number10: t,
                            number11: t,
                            number12: t,
                            number13: t,
                            number14: t
                        },
                        embeddingApi: null,
                        configuratorId: "demoConfigurator",
                        defaultOptions: {
                            id: "usm:frame",
                            buttons: {
                                [C["a"].ADDONS]: !1
                            },
                            useLocalRoomle: !0
                        }
                    }
                },
                computed: {
                    simpleLink() {
                        const t = this.regularLink,
                            e = t.includes("?") ? "&" : "?";
                        return t + e + "api=false"
                    },
                    regularLink() {
                        const t = window.location.href,
                            e = t.includes("roomle.gitlab.io") ? "index.html" : "";
                        return t.replace("embedding.html", e)
                    }
                },
                async mounted() {
                    console.log('erfgty??')
                    const {
                        default: t
                    } = await i.e("chunk-2d0c8827").then(i.bind(null, "54d6"));
                    if (this.embeddingApi = t, !this.embeddingApi) return;
                    const e = this.configuratorId,
                        n = !0,
                        o = this.defaultOptions;
                    if (this.showConfigurators.number01) {
                        const t = {
                            ...o,
                            locale: "fr"
                        };
                        this.embeddingApi.createConfigurator(e, this.$refs.rml1, t).then(t => {
                            t.ui.setPrice("$", 3133.7), t.ui.callbacks.onRequestProduct = (t, e, i, n, o, r) => {
                                console.log(t, e, i, n, o, r)
                            }, t.analytics.callbacks.onGATracking = function() {
                                console.log("GA outside"), console.log(...arguments)
                            }, document.getElementById("start-configure").addEventListener("click", () => {
                                console.log("startConfiguring"), t.ui.startConfiguring()
                            }), document.getElementById("trigger-request").addEventListener("click", async () => {
                                console.log("trigger-request"), await t.ui.triggerRequestProduct(), console.log("trigger-request-done")
                            }), document.getElementById("load-configuration-string").addEventListener("click", async () => {
                                console.log("load-configuration-string"), await t.ui.loadConfigurationString('{"componentId": "usm:frame"}'), console.log("load-configuration-string-done")
                            }), console.log(t)
                        })
                    }
                    if (this.showConfigurators.number02) {
                        const t = {
                            id: "isdt:Geraeteschrank_Master:3EA8855EABD278A70446FCA0CF445F1B301A6ACC8D1D2D3481B4C8C25280141D",
                            useLocalRoomle: n
                        };
                        this.embeddingApi.create(e, this.$refs.rml2, t).then(t => {
                            t.ui.callbacks.onRequestProduct = t => console.log("clicked on request Product with ", t), t.ui.callbacks.onButtonClicked = t => {
                                console.log("Button clicked: " + t)
                            }, console.log(t)
                        })
                    }
                    if (this.showConfigurators.number03) {
                        const t = {
                            usePriceService: !0,
                            id: "usm_gewinnspiel:frame",
                            useLocalRoomle: n,
                            buttons: {
                                [C["a"].STARTCONFIGURE]: !1
                            }
                        };
                        this.embeddingApi.create("usmhaller", this.$refs.rml3, t).then(async t => {
                            t.extended.callbacks.onPartListUpdate = function() {
                                console.log(...arguments)
                            }, t.ui.callbacks.onPartListUpdate = function() {
                                console.log("UI", ...arguments)
                            }
                        })
                    }
                    if (this.showConfigurators.number04) {
                        const t = {
                            id: "visplay:qubo_imm_master:22ED95680CA820720987E117DF856CBB0566F2A6ADA8C9800D88FF15C5D174CE",
                            isItem: !1,
                            initialFloorMaterial: "koinor:EicheLondon",
                            buttons: {
                                [C["a"].ADDONS]: !1,
                                [C["a"].EXPORT_3D]: !0
                            },
                            useLocalRoomle: n,
                            skin: {
                                "primary-color": "#1d68bd"
                            }
                        };
                        this.embeddingApi.create(e, this.$refs.rml4, t).then(t => {
                            const e = document.getElementById("conf4-button");
                            e.addEventListener("click", () => t.ui.startConfiguring()), t.ui.callbacks.onResize = t => {
                                console.log("receive callback onResize", {
                                    isDesktop: t
                                }), e.style.display = t ? "none" : "block"
                            }, console.log(t)
                        })
                    }
                    if (this.showConfigurators.number05) {
                        const t = {
                                id: "usm:frame",
                                useLocalRoomle: n
                            },
                            i = document.getElementById("conf5-button");
                        let o = null;
                        i.addEventListener("click", () => {
                            o ? o.ui.startConfiguring() : this.embeddingApi && this.embeddingApi.create(e, this.$refs.rml5, t).then(t => {
                                o = t, o.ui.startConfiguring()
                            })
                        })
                    }
                    if (this.showConfigurators.number06) {
                        const e = {
                            ...o
                        };
                        try {
                            await t.create(this.$refs.rml1, e)
                        } catch (r) {
                            console.log("This error is on purpose, it should be a miss-match of data type (id !== string)"), console.log(r)
                        }
                        try {
                            await t.create(this.$refs.rml6, e), await t.create(this.$refs.rml6, e)
                        } catch (r) {
                            console.log("This error is on purpose, it should throw because DOM element already in use"), console.log(r)
                        }
                    }
                    if (this.showConfigurators.number07) {
                        const t = {
                            ...o,
                            variants: {
                                "furniture_eservice:regalsystem": "DB_Start_ohne_Element"
                            },
                            id: "musterring:lucia_element:75417430ECE01258E16B2972186CAA869FC11FB01E7C66370464AF3C56D2FFDB"
                        };
                        this.embeddingApi.create("roomleOnly", this.$refs.rml7, t).then(t => {
                            t.ui.startConfiguring()
                        })
                    }
                    if (this.showConfigurators.number08) {
                        const t = {
                            ...o,
                            id: "biohort:europa",
                            isItem: !0
                        };
                        this.embeddingApi.create(e, this.$refs.rml8, t).then(t => {
                            document.getElementById("conf8-button").addEventListener("click", async () => {
                                const e = "preferredDoorType",
                                    i = await t.extended.getParametersOfRootComponent(),
                                    n = i.find(t => t.key === e);
                                if (!n) return void console.warn('Did not find param "' + e + '", did content change?');
                                const o = n.value;
                                await t.extended.setParameterOfRootComponent(n, "2");
                                const r = await t.extended.prepareTopImage(!0);
                                console.log(r.image), await t.extended.setParameterOfRootComponent(n, o)
                            }), t.ui.startConfiguring()
                        })
                    } else {
                        const t = document.createElement("div");
                        t.innerText = "To use this demo set showConfigurators.number08 to true", this.$refs.rml8.appendChild(t)
                    }
                    if (this.showConfigurators.number12) {
                        const t = this.$el.querySelector("#fork-iframe"),
                            e = await this.getRubensApi(t),
                            i = {};
                        e.callbacks.onPartListUpdate = t => {
                            console.log('shivamin');
                            const n = t.reduce((t, e) => (i[e.articleNr] || (i[e.articleNr] = 10 * Math.random()), t + i[e.articleNr]), 0),
                                o = 30;
                            e.setPrice("$", 500) // remove this once done
                            /*e.setPrice("€", n + o)*/
                        }
                    }
                    if (this.showConfigurators.number13) {
                        const t = {
                            ...o,
                            id: "roomle_content_demo:kitchen001"
                        };
                        this.embeddingApi.create("noActivePackage", this.$refs.rml9, t)
                    }
                    if (this.showConfigurators.number14) {
                        const t = {
                            ...o,
                            moc: !0,
                            id: "cnc15wy0w8occbmol1ms927lbnrsr2ig",
                            catalogRootId: "moc_sample_catalog"
                        };
                        this.embeddingApi.createPlanner(e, this.$refs.rml10, t).then(t => {
                            t.ui.callbacks.onRequestPlan = (t, e, i) => {
                                console.log(t, e, i)
                            }, document.getElementById("trigger-request-plan").addEventListener("click", async () => {
                                console.log("trigger-request-plan"), await t.ui.triggerRequestPlan(), console.log("trigger-request-done")
                            })
                        })
                    }
                },
                methods: {
                    getRubensApi(t) {
                        const e = i => {
                            const n = t.contentWindow.RubensAPI;
                            n ? i(n) : setTimeout(e.bind(this, i), 0)
                        };
                        return new Promise(t => {
                            e(t)
                        })
                    }
                }
            }),
            A = w,
            _ = (i("beae"), Object(u["a"])(A, o, r, !1, null, null, null)),
            y = _.exports;
        new n["a"]({
            render: t => t(y)
        }).$mount("#app")
    },
    "5afe": function(t, e, i) {},
    a6fb: function(t, e, i) {},
    beae: function(t, e, i) {
        "use strict";
        i("a6fb")
    }
});
//# sourceMappingURL=embedding-legacy.9486fd7a.js.map