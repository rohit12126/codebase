(function(t) {
    function e(e) {
        for (var n, s, a = e[0], c = e[1], l = e[2], u = 0, p = []; u < a.length; u++) s = a[u], Object.prototype.hasOwnProperty.call(r, s) && r[s] && p.push(r[s][0]), r[s] = 0;
        for (n in c) Object.prototype.hasOwnProperty.call(c, n) && (t[n] = c[n]);
        d && d(e);
        while (p.length) p.shift()();
        return o.push.apply(o, l || []), i()
    }

    function i() {
        for (var t, e = 0; e < o.length; e++) {
            for (var i = o[e], n = !0, s = 1; s < i.length; s++) {
                var c = i[s];
                0 !== r[c] && (n = !1)
            }
            n && (o.splice(e--, 1), t = a(a.s = i[0]))
        }
        return t
    }
    var n = {},
        r = {
            ar: 0
        },
        o = [];

    function s(t) {
        return a.p + "js/" + ({} [t] || t) + "-legacy." + {
            "chunk-08ca9b08": "8c1d5c26",
            "chunk-d1e8c618": "968ec51f",
            "chunk-3cdbd03f": "bfa0a09e",
            "chunk-5b403032": "ce96c162",
            "chunk-62cb4e26": "a3126ec0",
            "chunk-66be89ce": "163b9cb6",
            "chunk-6d36a2bc": "380b568f",
            "chunk-2d0b16c2": "d4cf3d8a",
            "chunk-2d0b23c2": "822e0f62",
            "chunk-2d0e55df": "fd189fa9",
            "chunk-2d0e9222": "90a0532c",
            "chunk-2d208aa7": "3ce30e51"
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
            i = r[t];
        if (0 !== i)
            if (i) e.push(i[2]);
            else {
                var n = new Promise((function(e, n) {
                    i = r[t] = [e, n]
                }));
                e.push(i[2] = n);
                var o, c = document.createElement("script");
                c.charset = "utf-8", c.timeout = 120, a.nc && c.setAttribute("nonce", a.nc), c.src = s(t);
                var l = new Error;
                o = function(e) {
                    c.onerror = c.onload = null, clearTimeout(u);
                    var i = r[t];
                    if (0 !== i) {
                        if (i) {
                            var n = e && ("load" === e.type ? "missing" : e.type),
                                o = e && e.target && e.target.src;
                            l.message = "Loading chunk " + t + " failed.\n(" + n + ": " + o + ")", l.name = "ChunkLoadError", l.type = n, l.request = o, i[1](l)
                        }
                        r[t] = void 0
                    }
                };
                var u = setTimeout((function() {
                    o({
                        type: "timeout",
                        target: c
                    })
                }), 12e4);
                c.onerror = c.onload = o, document.head.appendChild(c)
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
    o.push([2, "chunk-vendors", "chunk-common"]), i()
})({
    "03ae": function(t, e, i) {
        "use strict";
        i("5009")
    },
    2: function(t, e, i) {
        t.exports = i("76ee")
    },
    3034: function(t, e, i) {
        "use strict";
        var n = function() {
                var t = this,
                    e = t.$createElement,
                    i = t._self._c || e;
                return i("div", {
                    staticClass: "aspect-ratio-box"
                }, [t._t("default")], 2)
            },
            r = [],
            o = i("2b0e"),
            s = o["a"].extend({}),
            a = s,
            c = (i("e446"), i("2877")),
            l = Object(c["a"])(a, n, r, !1, null, "6de4c3ea", null);
        e["a"] = l.exports
    },
    "3f3f": function(t, e, i) {
        "use strict";
        e["a"] = {
            id: "close-usage",
            viewBox: "0 0 32 32",
            url: i.p + "svgs/icons.993d4e35.svg#close",
            toString: function() {
                return this.url
            }
        }
    },
    "4e4c": function(t, e, i) {
        "use strict";
        var n = function() {
                var t = this,
                    e = t.$createElement,
                    i = t._self._c || e;
                return i("div", {
                    staticClass: "h100",
                    class: {
                        light: t.isLightTheme, big: t.isBig, medium: t.isMedium, small: t.isSmall, "align-to-scene": t.isAlignToScene
                    }
                }, [i("div", {
                    staticClass: "shadow",
                    on: {
                        click: t.close
                    }
                }), i("div", {
                    staticClass: "popup"
                }, [i("div", {
                    staticClass: "popup-container",
                    class: {
                        "no-scrollbar": !t.isDesktop
                    }
                }, [t.onClose ? i("div", {
                    staticClass: "popup-close",
                    on: {
                        click: t.close
                    }
                }, [i("SvgIcon", {
                    attrs: {
                        icon: t.icons.SvgClose
                    }
                })], 1) : t._e(), t._t("content")], 2)])])
            },
            r = [],
            o = i("2b0e"),
            s = i("3f3f"),
            a = i("bee6"),
            c = o["a"].extend({
                components: {
                    SvgIcon: a["a"]
                },
                props: {
                    onClose: Function,
                    isDesktop: {
                        type: Boolean,
                        default: !1
                    },
                    isLightTheme: {
                        type: Boolean,
                        default: !1
                    },
                    size: {
                        type: String,
                        validator(t) {
                            const e = ["big", "medium", "small"];
                            return -1 !== e.indexOf(t)
                        }
                    },
                    alignTo: {
                        type: String,
                        validator(t) {
                            const e = ["scene"];
                            return -1 !== e.indexOf(t)
                        }
                    }
                },
                computed: {
                    icons() {
                        return {
                            SvgClose: s["a"]
                        }
                    },
                    isBig() {
                        return !this.size || "big" === this.size
                    },
                    isMedium() {
                        return "medium" === this.size
                    },
                    isSmall() {
                        return "small" === this.size
                    },
                    isAlignToScene() {
                        return "scene" === this.alignTo
                    }
                },
                methods: {
                    close() {
                        this.onClose()
                    }
                }
            }),
            l = c,
            u = (i("dcff"), i("2877")),
            d = Object(u["a"])(l, n, r, !1, null, "1fa3d5c3", null);
        e["a"] = d.exports
    },
    5009: function(t, e, i) {
        t.exports = {
            interactionContainerHeight: "60%",
            interactionTiming: "450ms",
            interactionCollapsedHeight: "10rem",
            interactionDesktopWidth: "30rem",
            cssMX1: ".42",
            cssMY1: "0",
            cssMX2: ".58",
            cssMY2: "1",
            breakPointDesktop: "1024px",
            blackText: "#121212",
            whiteText: "#fff"
        }
    },
    "713d": function(t, e, i) {
        "use strict";
        var n = function() {
                var t = this,
                    e = t.$createElement,
                    i = t._self._c || e;
                return t.isDesktop && t.mobileArUrl ? i("div", {
                    staticClass: "ar-view-desktop"
                }, [i("div", {
                    staticClass: "ar-view-desktop-qr-container"
                }, [t.mobileArUrl ? i("VueQRCodeComponent", {
                    staticClass: "ar-view-desktop-qr-img",
                    attrs: {
                        text: t.mobileArUrl,
                        size: 200,
                        "error-level": "M",
                        "bg-color": t.overlayBackgroundGray
                    }
                }) : t._e()], 1), i("div", {
                    staticClass: "ar-view-desktop-text-container"
                }, [i("h2", [t._v(" " + t._s(t.t.t("ar.title")) + " ")]), i("p", [t._v(" " + t._s(t.t.t("ar.description")) + " ")]), i("h3", {
                    staticClass: "ar-view-desktop-arurl",
                    on: {
                        click: t.copyToClipboard
                    }
                }, [t._v(" " + t._s(t.mobileArUrl ? t.mobileArUrl : t.t.t("save-draft.loading-url")) + " ")]), t.mobileArUrl ? i("span", {
                    staticClass: "ar-button",
                    on: {
                        click: t.copyToClipboard
                    }
                }, [t._v(t._s(t.t.t("ar.send")))]) : t._e(), t.onClose ? i("span", {
                    staticClass: "ar-view-desktop-text-button",
                    on: {
                        click: t.onClose
                    }
                }, [t._v(t._s(t.t.t("global.cancel")))]) : t._e()])]) : i("div", {
                    staticClass: "ar-view"
                }, [i("div", {
                    staticClass: "ar-view-img-container"
                }, [i("AspectRatioBox", [t.imageUrl ? i("img", {
                    attrs: {
                        src: t.imageUrl,
                        alt: t.configurationId
                    }
                }) : t._e()])], 1), i("div", {
                    staticClass: "ar-view-text-container"
                }, [i("h2", [t._v(" " + t._s(t.t.t("ar.landing-page.title")) + " ")]), i("p", [t._v(" " + t._s(t.t.t("ar.landing-page.description")) + " ")]), t.quickViewAvailable ? t._e() : i("p", [t._v(" " + t._s(t.t.t("ar.not-available")) + " ")]), t.inAppBrowser ? i("p", [t._v(" " + t._s(t.t.t("ar.in-app")) + " ")]) : t._e(), t.configurationId && t.quickViewAvailable ? i("a", {
                    staticClass: "ar-button",
                    attrs: {
                        href: t.arUrl,
                        rel: "ar"
                    },
                    on: {
                        click: t.trackArIOS
                    }
                }, [i("img", {
                    attrs: {
                        src: "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    }
                }), i("span", {
                    staticClass: "bottom-label"
                }, [t._v(" " + t._s(t.t.t("ar.landing-page.button-ar")) + " ")])]) : t._e()])])
            },
            r = [],
            o = i("2b0e"),
            s = i("4e4c"),
            a = i("3034"),
            c = i("8a65"),
            l = i("5b7d");
        class u {
            constructor(t) {
                this._configuratorId = "", this._configuratorId = t
            }
            getArUrl(t) {
                return this.getArUrlWithUrls(this._getGlbUrl(t), this._getUsdzUrl(t))
            }
            getArUrlWithUrls(t = null, e = null) {
                return Object(l["c"])() && e ? e : Object(l["b"])() && t ? this._getAndroidSceneViewerUrl(t) : null
            }
            getMobileArUrl(t) {
                const e = new URLSearchParams(window.location.search);
                e.set("id", t), this._configuratorId && e.set("configuratorId", this._configuratorId);
                let i = window.location.pathname ? window.location.pathname : "/";
                const n = i.split("/"),
                    r = n.length,
                    o = r && n[r - 1].includes(".") ? n[r - 1] : null;
                o && (i = i.replace(o, ""));
                const s = window.location.origin + i,
                    a = s.endsWith("/") ? "" : "/";
                return s + a + "ar.html?" + e
            }
            _getAndroidSceneViewerUrl(t) {
                return "intent://arvr.google.com/scene-viewer/1.0?file=" + t + "&mode=ar_only&resizable=false#Intent;scheme=https;package=com.google.android.googlequicksearchbox;action=android.intent.action.VIEW;end;"
            }
            _getBaseUrl() {
                return "https://roomle.com/"
            }
            _getAndroidLink(t, e) {
                return this._getBaseUrl() + e + "/android/get-the-app?deeplink=" + this._encodeUrl(t)
            }
            _getIosLink(t, e) {
                return this._getBaseUrl() + e + "/ios/get-the-app?deeplink=" + this._encodeUrl(t)
            }
            _encodeUrl(t) {
                return encodeURIComponent(t)
            }
            _getGlbUrl(t) {
                return "https://www.roomle.com/api/v2/configurations/" + t + "/3dAssets/glTF/conf.glb"
            }
            _getUsdzUrl(t) {
                return "https://www.roomle.com/api/v2/configurations/" + t + "/3dAssets/usdz/conf.usdz"
            }
        }
        var d = i("bc4e"),
            p = i("da52"),
            f = o["a"].extend({
                components: {
                    PopUp: s["a"],
                    AspectRatioBox: a["a"],
                    VueQRCodeComponent: () => i.e("chunk-08ca9b08").then(i.bind(null, "dfcf"))
                },
                props: {
                    configurationId: String,
                    imageUrl: String,
                    configuratorId: String,
                    gltfUrl: String,
                    usdzUrl: String,
                    isDesktop: Boolean,
                    userInteraction: {
                        type: Boolean,
                        default: !0
                    },
                    onClose: Function
                },
                data() {
                    return {
                        arService: null
                    }
                },
                computed: {
                    overlayBackgroundGray() {
                        return p["overlayBackgroundGray"]
                    },
                    mobileArUrl() {
                        var t;
                        return this.configurationId && (null === (t = this.arService) || void 0 === t ? void 0 : t.getMobileArUrl(this.configurationId)) || null
                    },
                    quickViewAvailable() {
                        const t = Object(l["a"])();
                        return "boolean" !== typeof t || t
                    },
                    inAppBrowser() {
                        const t = Object(l["d"])();
                        return "boolean" === typeof t && t
                    },
                    arUrl() {
                        var t, e;
                        return this.gltfUrl && this.usdzUrl ? (null === (t = this.arService) || void 0 === t ? void 0 : t.getArUrlWithUrls(this.gltfUrl, this.usdzUrl)) || null : (null === (e = this.arService) || void 0 === e ? void 0 : e.getArUrl(this.configurationId)) || null
                    }
                },
                methods: {
                    copyToClipboard() {
                        this.mobileArUrl && (Object(d["c"])(this.mobileArUrl), this.$props.onClose && this.$props.onClose())
                    },
                    close() {
                        this.$props.onClose && this.$props.onClose()
                    },
                    async trackAr() {
                        const t = await this.$sdkConnector.getRapiAccess();
                        await t.sendUserAction({
                            module: c["b"].CONFIGURATOR,
                            action: c["a"].SHARE_AR,
                            actionId: this.configurationId,
                            actionLabel: this.configuratorId
                        })
                    },
                    trackArIOS() {
                        this.trackAr(), this.close()
                    }
                },
                mounted() {
                    this.arService = new u(this.configuratorId), this.$nextTick(() => {
                        Object(l["b"])() && this.arUrl && this.userInteraction && (window.open(this.arUrl), this.trackAr(), this.close())
                    })
                }
            }),
            h = f,
            g = (i("d6e0"), i("2877")),
            b = Object(g["a"])(h, n, r, !1, null, "044be421", null);
        e["a"] = b.exports
    },
    "76ee": function(t, e, i) {
        "use strict";
        i.r(e);
        var n = i("2b0e"),
            r = function() {
                var t = this,
                    e = t.$createElement,
                    i = t._self._c || e;
                return i("div", {
                    attrs: {
                        id: "app"
                    }
                }, [i("div", {
                    staticClass: "centered-view"
                }, [t.configurationId && t.imageUrl ? i("OpenARView", {
                    attrs: {
                        configurationId: t.configurationId,
                        configuratorId: t.configuratorId,
                        imageUrl: t.imageUrl,
                        isDesktop: t.isDesktop,
                        gltfUrl: t.gltfUrl,
                        usdzUrl: t.usdzUrl,
                        userInteraction: !1
                    }
                }) : t._e()], 1)])
            },
            o = [],
            s = i("c135"),
            a = i("bc4e"),
            c = i("713d"),
            l = i("5b7d"),
            u = i("478b"),
            d = i("5a02"),
            p = n["a"].extend({
                components: {
                    OpenARView: c["a"]
                },
                props: {
                    initData: Object
                },
                data() {
                    return {
                        imageUrl: null,
                        gltfUrl: null,
                        usdzUrl: null
                    }
                },
                async mounted() {
                    if (this.initData.skin) {
                        Object(u["a"])(this.initData, d["blackText"], d["whiteText"]);
                        for (const t in this.initData.skin) this.initData.skin.hasOwnProperty(t) && document.documentElement.style.setProperty("--" + t, this.initData.skin[t])
                    }
                    if (this.initData.id)
                        if (Object(s["p"])(this.initData.id)) {
                            const t = await fetch("https://www.roomle.com/api/v2/items/" + this.initData.id),
                                e = await t.json();
                            this.setAssets(e.item), this.imageUrl = e.item.perspectiveImage || e.item.perspectiveImageHD
                        } else {
                            const t = await fetch("https://www.roomle.com/api/v2/configurations/" + this.initData.id),
                                e = await t.json();
                            this.setAssets(e.configuration), this.imageUrl = e.configuration.perspectiveImage || e.configuration.perspectiveImageHD
                        } Object(a["l"])()
                },
                methods: {
                    setAssets(t) {
                        this.gltfUrl = Object(s["i"])(t), this.usdzUrl = Object(s["l"])(t)
                    }
                },
                computed: {
                    configurationId() {
                        var t;
                        return null === (t = this.initData) || void 0 === t ? void 0 : t.id
                    },
                    configuratorId() {
                        var t;
                        return null === (t = this.initData) || void 0 === t ? void 0 : t.configuratorId
                    },
                    isDesktop() {
                        return !Object(l["b"])() && !Object(l["c"])()
                    }
                }
            }),
            f = p,
            h = (i("03ae"), i("2877")),
            g = Object(h["a"])(f, r, o, !1, null, null, null),
            b = g.exports,
            m = i("09e1"),
            v = i("2b0d"),
            w = i("8513"),
            A = i("0198");
        n["a"].config.productionTip = !1;
        const k = async () => {
            const t = new A["a"],
                e = await Object(w["b"])(null, t, {
                    ...Object(w["c"])(!1)
                });
            t.setGlobalInitData(e), n["a"].use(m["a"], {
                translationSource: new v["a"](e.locale, e.translations)
            }), new n["a"]({
                render: t => t(b, {
                    props: {
                        initData: e
                    }
                })
            }).$mount("#app")
        };
        k()
    },
    bee6: function(t, e, i) {
        "use strict";
        var n = function() {
                var t = this,
                    e = t.$createElement,
                    i = t._self._c || e;
                return i("svg", [i("use", {
                    attrs: {
                        "xlink:href": t.icon.url
                    }
                })])
            },
            r = [],
            o = i("2b0e"),
            s = o["a"].extend({
                props: {
                    icon: Object
                }
            }),
            a = s,
            c = i("2877"),
            l = Object(c["a"])(a, n, r, !1, null, "651ddf6c", null);
        e["a"] = l.exports
    },
    c2b7: function(t, e, i) {},
    d1bf: function(t, e, i) {},
    d6e0: function(t, e, i) {
        "use strict";
        i("efa8")
    },
    da52: function(t, e, i) {
        t.exports = {
            interactionContainerHeight: "60%",
            interactionTiming: "450ms",
            interactionCollapsedHeight: "10rem",
            interactionDesktopWidth: "30rem",
            cssMX1: ".42",
            cssMY1: "0",
            cssMX2: ".58",
            cssMY2: "1",
            breakPointDesktop: "1024px",
            blackText: "#121212",
            whiteText: "#fff",
            overlayBackgroundGray: "#f8f8f8",
            fadeIn: "OpenARView-module_fadeIn_f0D3H"
        }
    },
    dcff: function(t, e, i) {
        "use strict";
        i("d1bf")
    },
    e446: function(t, e, i) {
        "use strict";
        i("c2b7")
    },
    efa8: function(t, e, i) {}
});
//# sourceMappingURL=ar-legacy.8e4d439f.js.map