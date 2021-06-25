(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-5c4e2ae8"], {
        3034: function(t, e, i) {
            "use strict";
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("div", {
                        staticClass: "aspect-ratio-box"
                    }, [t._t("default")], 2)
                },
                r = [],
                n = i("2b0e"),
                o = n["a"].extend({}),
                a = o,
                l = (i("e446"), i("2877")),
                c = Object(l["a"])(a, s, r, !1, null, "6de4c3ea", null);
            e["a"] = c.exports
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
            var s = function() {
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
                n = i("2b0e"),
                o = i("3f3f"),
                a = i("bee6"),
                l = n["a"].extend({
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
                                SvgClose: o["a"]
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
                c = l,
                d = (i("dcff"), i("2877")),
                u = Object(d["a"])(c, s, r, !1, null, "1fa3d5c3", null);
            e["a"] = u.exports
        },
        "713d": function(t, e, i) {
            "use strict";
            var s = function() {
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
                n = i("2b0e"),
                o = i("4e4c"),
                a = i("3034"),
                l = i("8a65"),
                c = i("5b7d");
            class d {
                constructor(t) {
                    this._configuratorId = "", this._configuratorId = t
                }
                getArUrl(t) {
                    return this.getArUrlWithUrls(this._getGlbUrl(t), this._getUsdzUrl(t))
                }
                getArUrlWithUrls(t = null, e = null) {
                    return Object(c["c"])() && e ? e : Object(c["b"])() && t ? this._getAndroidSceneViewerUrl(t) : null
                }
                getMobileArUrl(t) {
                    const e = new URLSearchParams(window.location.search);
                    e.set("id", t), this._configuratorId && e.set("configuratorId", this._configuratorId);
                    let i = window.location.pathname ? window.location.pathname : "/";
                    const s = i.split("/"),
                        r = s.length,
                        n = r && s[r - 1].includes(".") ? s[r - 1] : null;
                    n && (i = i.replace(n, ""));
                    const o = window.location.origin + i,
                        a = o.endsWith("/") ? "" : "/";
                    return o + a + "ar.html?" + e
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
            var u = i("bc4e"),
                g = i("da52"),
                p = n["a"].extend({
                    components: {
                        PopUp: o["a"],
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
                            return g["overlayBackgroundGray"]
                        },
                        mobileArUrl() {
                            var t;
                            return this.configurationId && (null === (t = this.arService) || void 0 === t ? void 0 : t.getMobileArUrl(this.configurationId)) || null
                        },
                        quickViewAvailable() {
                            const t = Object(c["a"])();
                            return "boolean" !== typeof t || t
                        },
                        inAppBrowser() {
                            const t = Object(c["d"])();
                            return "boolean" === typeof t && t
                        },
                        arUrl() {
                            var t, e;
                            return this.gltfUrl && this.usdzUrl ? (null === (t = this.arService) || void 0 === t ? void 0 : t.getArUrlWithUrls(this.gltfUrl, this.usdzUrl)) || null : (null === (e = this.arService) || void 0 === e ? void 0 : e.getArUrl(this.configurationId)) || null
                        }
                    },
                    methods: {
                        copyToClipboard() {
                            this.mobileArUrl && (Object(u["c"])(this.mobileArUrl), this.$props.onClose && this.$props.onClose())
                        },
                        close() {
                            this.$props.onClose && this.$props.onClose()
                        },
                        async trackAr() {
                            const t = await this.$sdkConnector.getRapiAccess();
                            await t.sendUserAction({
                                module: l["b"].CONFIGURATOR,
                                action: l["a"].SHARE_AR,
                                actionId: this.configurationId,
                                actionLabel: this.configuratorId
                            })
                        },
                        trackArIOS() {
                            this.trackAr(), this.close()
                        }
                    },
                    mounted() {
                        this.arService = new d(this.configuratorId), this.$nextTick(() => {
                            Object(c["b"])() && this.arUrl && this.userInteraction && (window.open(this.arUrl), this.trackAr(), this.close())
                        })
                    }
                }),
                h = p,
                f = (i("d6e0"), i("2877")),
                b = Object(f["a"])(h, s, r, !1, null, "044be421", null);
            e["a"] = b.exports
        },
        bee6: function(t, e, i) {
            "use strict";
            var s = function() {
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
                n = i("2b0e"),
                o = n["a"].extend({
                    props: {
                        icon: Object
                    }
                }),
                a = o,
                l = i("2877"),
                c = Object(l["a"])(a, s, r, !1, null, "651ddf6c", null);
            e["a"] = c.exports
        },
        c2b7: function(t, e, i) {},
        d1bf: function(t, e, i) {},
        d3c9: function(t, e, i) {
            "use strict";
            i.r(e);
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("PopUp", {
                        attrs: {
                            size: "medium",
                            onClose: t.onClose
                        }
                    }, [i("template", {
                        slot: "content"
                    }, [t.configurationId ? i("OpenARView", {
                        attrs: {
                            onClose: t.onClose,
                            configurationId: t.configurationId,
                            configuratorId: t.configuratorId,
                            imageUrl: t.imageUrl,
                            gltfUrl: t.gltfUrl,
                            usdzUrl: t.usdzUrl,
                            isDesktop: t.isDesktop
                        }
                    }) : t._e()], 1)], 2)
                },
                r = [],
                n = i("2b0e"),
                o = i("4e4c"),
                a = i("713d"),
                l = i("dfe6"),
                c = i("bc4e"),
                d = i("5b7d"),
                u = i("c135"),
                g = n["a"].extend({
                    components: {
                        PopUp: o["a"],
                        OpenARView: a["a"]
                    },
                    props: {
                        onClose: Function
                    },
                    data() {
                        return {
                            configurationId: null,
                            imageUrl: null,
                            gltfUrl: null,
                            usdzUrl: null
                        }
                    },
                    computed: {
                        configuratorId() {
                            return this.$store.state.uiState.initData.configuratorId
                        },
                        isDesktop() {
                            return !Object(d["b"])() && !Object(d["c"])()
                        }
                    },
                    async mounted() {
                        var t;
                        Object(c["n"])();
                        const e = this.$store.state.commonUiState.lastRequestedId || (null === (t = this.$store.state.uiState.initData) || void 0 === t ? void 0 : t.id),
                            i = await this.$sdkConnector.isIdAGlb(e);
                        if (i) {
                            const t = await this.$sdkConnector.getRapiAccess(),
                                i = await t.getItem(e);
                            this.gltfUrl = Object(u["i"])(i), this.usdzUrl = Object(u["l"])(i), this.imageUrl = i.perspectiveImage || i.perspectiveImageHD, this.configurationId = e
                        } else {
                            const t = await this.$sdkConnector.saveCurrentConfiguration();
                            this.imageUrl = t.perspectiveImage || null, this.gltfUrl = Object(u["i"])(t), this.usdzUrl = Object(u["l"])(t), this.configurationId = t.id
                        }
                        this.$analytics.ga.trackEvent("ARButtonClicked", l["a"].INTERACTION, this.configurationId), Object(c["l"])()
                    }
                }),
                p = g,
                h = i("2877"),
                f = Object(h["a"])(p, s, r, !1, null, "1d02ca31", null);
            e["default"] = f.exports
        },
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
    }
]);
//# sourceMappingURL=chunk-5c4e2ae8.3e06e899.js.map