(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-71180739"], {
        "0645": function(t, e, i) {
            "use strict";
            i.r(e);
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("PopUp", {
                        attrs: {
                            onClose: t.onClose,
                            size: "medium",
                            isDesktop: t.$store.state.uiState.isDesktop
                        }
                    }, [i("template", {
                        slot: "content"
                    }, [i("div", {
                        staticClass: "save-draft-overlay"
                    }, [i("div", {
                        staticClass: "save-draft-image-container"
                    }, [t.perspectiveImage ? i("img", {
                        staticClass: "save-draft-perspective-img",
                        attrs: {
                            src: t.perspectiveImage,
                            alt: t.$store.state.coreState.label
                        }
                    }) : t._e()]), i("div", {
                        staticClass: "save-draft-text-container"
                    }, [i("h2", [t._v(" " + t._s(t.t.t("save-draft.title")) + " ")]), i("p", [t._v(" " + t._s(t.useEmail && !t.urlGenerated ? t.t.t("save-draft.description") : t.t.t("save-draft.description-link")) + " ")]), t.useEmail && !t.urlGenerated ? i("div", [i("GdprEmailInput", {
                        on: {
                            change: t.onEmailChange
                        }
                    })], 1) : i("h3", {
                        staticClass: "save-draft-shareurl",
                        on: {
                            click: t.copy
                        }
                    }, [i("span", [t._v(t._s(t.shareUrl ? t.shareUrl : t.t.t("save-draft.loading-url")))]), i("span", {
                        staticClass: "share-url-icons"
                    }, [t.shareUrl ? i("SvgIcon", {
                        attrs: {
                            icon: t.icons.SvgCopy
                        }
                    }) : i("Spinner")], 1)]), i("span", {
                        staticClass: "copy-indicator",
                        class: {
                            "is-copied": this.copied
                        }
                    }, [t._v(t._s(t.t.t("save-draft.copied")) + "!")]), i("PrimaryButton", {
                        attrs: {
                            onClick: t.save,
                            disabled: !t.saveButtonEnabled
                        },
                        scopedSlots: t._u([{
                            key: "default",
                            fn: function(e) {
                                return [e.isRunning ? t._e() : i("SvgIcon", {
                                    attrs: {
                                        icon: t.icons.SvgCheck
                                    }
                                }), i("span", [t._v(t._s(t.useEmail && !t.urlGenerated ? t.t.t("save-draft.save") : t.t.t("save-draft.copy")))])]
                            }
                        }])
                    })], 1)])])], 2)
                },
                a = [],
                n = i("2b0e"),
                r = i("4e4c"),
                c = i("bc4e"),
                o = i("4ca5"),
                l = {
                    id: "copy-usage",
                    viewBox: "0 0 32 32",
                    url: i.p + "svgs/icons.993d4e35.svg#copy",
                    toString: function() {
                        return this.url
                    }
                },
                u = i("bee6"),
                d = i("1b33"),
                h = i("f2c0"),
                p = i("96d7"),
                v = i("8513"),
                g = i("dfe6"),
                m = i("c135");
            const f = ["localhost", "alpha", "testServer"];
            var b = n["a"].extend({
                    components: {
                        PopUp: r["a"],
                        SvgIcon: u["a"],
                        GdprEmailInput: d["a"],
                        PrimaryButton: h["a"],
                        Spinner: p["a"]
                    },
                    data() {
                        return {
                            perspectiveImage: null,
                            objectId: null,
                            shareUrl: null,
                            email: "",
                            gdprValid: !1,
                            copied: !1,
                            intervalId: null,
                            urlGenerated: !1
                        }
                    },
                    beforeDestroy() {
                        this.intervalId && clearInterval(this.intervalId)
                    },
                    methods: {
                        copy() {
                            if (this.shareUrl) {
                                if (Object(c["c"])(this.shareUrl), this.copied = !0, this.intervalId) return;
                                this.intervalId = Object(m["s"])(() => {
                                    this.intervalId && (this.copied = !1, this.intervalId = null)
                                }, 1300)
                            }
                        },
                        save() {
                            if (this.useEmail && this.objectId && this.isValid && !this.urlGenerated) return this._generateUrl();
                            this.shareUrl && this.copy()
                        },
                        async _generateUrl() {
                            const t = await this.$sdkConnector.saveCurrentConfiguration(),
                                e = await this.$sdkConnector.getRapiAccess();
                            await e.shareConfiguration(t.id, this.email, 3), this.$analytics.ga.trackEvent("ConfigurationSharedByMail", g["a"].INTERACTION, t.id), await this.generateUrl(), this.urlGenerated = !0
                        },
                        onEmailChange(t, e, i) {
                            this.gdprValid = t, this.email = e
                        },
                        async generateUrl() {
                            const t = this.$store.state.uiState.initData.deeplink,
                                e = this.$store.state.uiState.initData.moc;
                            if (t) t.includes(v["a"]) || console.warn("the provided short url has no " + v["a"] + " placeholder"), this.shareUrl = t.replace(v["a"], this.objectId);
                            else if (!f.includes(Object({
                                    VUE_APP_RAPI_URL: "https://www.roomle.com/api/v2",
                                    VUE_APP_BASE_URL: "https://roomle.com/",
                                    VUE_APP_GA_ID: "UA-11302757-21",
                                    VUE_APP_GA_USE_TRACKING: "true",
                                    NODE_ENV: "production",
                                    BASE_URL: ""
                                }).VUE_APP_SHARE_URL_TYPE) && !e || Object(m["q"])()) {
                                const t = await this.$sdkConnector.configuratorApi;
                                this.shareUrl = await t.getShortUrlOfCurrentConfiguration()
                            } else {
                                const t = Object(m["d"])(location.href);
                                this.shareUrl = t.replace(v["a"], this.objectId)
                            }
                        }
                    },
                    computed: {
                        icons() {
                            return {
                                SvgCheck: o["a"],
                                SvgCopy: l
                            }
                        },
                        isValid() {
                            return this.gdprValid
                        },
                        saveButtonEnabled() {
                            return this.isValid || !this.useEmail && !!this.shareUrl
                        },
                        useEmail() {
                            const {
                                moc: t,
                                emails: e
                            } = this.$store.state.uiState.initData;
                            return e && t ? (console.warn("Sharing via e-mail currently not possible in MOC"), !1) : e
                        }
                    },
                    async mounted() {
                        await this.$sdkConnector.waitForLoad();
                        const {
                            id: t
                        } = await this.$sdkConnector.saveCurrentObject();
                        this.objectId = t;
                        const {
                            image: e
                        } = await this.$sdkConnector.preparePerspectiveImage();
                        this.perspectiveImage = e, await this.generateUrl()
                    },
                    destroyed() {
                        this.perspectiveImage = null
                    },
                    props: {
                        onClose: Function
                    }
                }),
                C = b,
                _ = (i("b0b5"), i("2877")),
                k = Object(_["a"])(C, s, a, !1, null, "2a0d17a6", null);
            e["default"] = k.exports
        },
        "0b81": function(t, e, i) {},
        "1b33": function(t, e, i) {
            "use strict";
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("div", {
                        staticClass: "gdpr-email-container"
                    }, [i("input", {
                        staticClass: "email-field",
                        attrs: {
                            type: "email",
                            placeholder: t.t.t("global.enter-mail")
                        },
                        domProps: {
                            value: t.email
                        },
                        on: {
                            change: t.onEmailChange,
                            blur: t.onEmailChange
                        }
                    }), i("CheckBox", {
                        attrs: {
                            name: "gdpr-checkbox",
                            onChange: t.onCheckBoxChange
                        }
                    }, [i("span", {
                        staticClass: "gdpr-text"
                    }, [t._v(" " + t._s(t.gdprText) + " "), t.privacyUrl ? i("a", {
                        attrs: {
                            href: t.privacyUrl,
                            target: "_blank",
                            rel: "noopener noreferrer"
                        }
                    }, [t._v(" " + t._s(t.t.t("global.see-more")) + " ")]) : t._e()])])], 1)
                },
                a = [],
                n = i("2b0e"),
                r = i("3c8b"),
                c = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("div", {
                        staticClass: "checkbox-container"
                    }, [i("label", {
                        attrs: {
                            for: t.name
                        }
                    }, [t._t("default")], 2), i("input", {
                        staticClass: "hidden-checkbox",
                        attrs: {
                            id: t.name,
                            type: "checkbox"
                        },
                        on: {
                            change: t.onChange
                        }
                    }), i("div", {
                        staticClass: "styled-checkbox"
                    })])
                },
                o = [],
                l = n["a"].extend({
                    props: {
                        name: String,
                        onChange: Function
                    }
                }),
                u = l,
                d = (i("943f"), i("2877")),
                h = Object(d["a"])(u, c, o, !1, null, "d87caac6", null),
                p = h.exports,
                v = n["a"].extend({
                    name: "GdprEmailInput.vue",
                    components: {
                        CheckBox: p
                    },
                    data() {
                        return {
                            email: "",
                            gdprChecked: !1,
                            tenant: null
                        }
                    },
                    computed: {
                        showMail() {
                            return !!this.tenant && !!this.tenant.label
                        },
                        tenantName() {
                            var t;
                            return (null === (t = this.tenant) || void 0 === t ? void 0 : t.label) || ""
                        },
                        gdprText() {
                            return this.localizations.t("global.gdpr-info").replace("<TENANT_NAME>", this.tenantName)
                        },
                        privacyUrl() {
                            var t;
                            return (null === (t = this.tenant) || void 0 === t ? void 0 : t.privacyUrl) || null
                        },
                        isValid() {
                            return /\S+@\S+\.\S+/.test(this.email) && this.gdprChecked
                        }
                    },
                    methods: {
                        onEmailChange(t) {
                            this.email = (null === t || void 0 === t ? void 0 : t.currentTarget).value, this.callback()
                        },
                        onCheckBoxChange(t) {
                            this.gdprChecked = (null === t || void 0 === t ? void 0 : t.currentTarget).checked, this.callback()
                        },
                        callback() {
                            this.isValid && this.$store.commit(r["d"].SET_EMAIL, this.email), this.$emit("change", this.isValid, this.email, this.gdprChecked)
                        }
                    },
                    async mounted() {
                        this.tenant = await this.$sdkConnector.getTenant(), this.email = this.$store.state.uiState.email
                    }
                }),
                g = v,
                m = (i("7664"), Object(d["a"])(g, s, a, !1, null, "19cef8b6", null));
            e["a"] = m.exports
        },
        "3cf7": function(t, e, i) {
            "use strict";
            i("a165")
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
        "4ca5": function(t, e, i) {
            "use strict";
            e["a"] = {
                id: "check-usage",
                viewBox: "0 0 32 32",
                url: i.p + "svgs/icons.993d4e35.svg#check",
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
                a = [],
                n = i("2b0e"),
                r = i("3f3f"),
                c = i("bee6"),
                o = n["a"].extend({
                    components: {
                        SvgIcon: c["a"]
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
                                SvgClose: r["a"]
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
                l = o,
                u = (i("dcff"), i("2877")),
                d = Object(u["a"])(l, s, a, !1, null, "1fa3d5c3", null);
            e["a"] = d.exports
        },
        7664: function(t, e, i) {
            "use strict";
            i("f76c")
        },
        "943f": function(t, e, i) {
            "use strict";
            i("a919")
        },
        "96d7": function(t, e, i) {
            "use strict";
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("div", {
                        staticClass: "loading-indicator"
                    })
                },
                a = [],
                n = i("2b0e"),
                r = n["a"].extend({}),
                c = r,
                o = (i("b565"), i("2877")),
                l = Object(o["a"])(c, s, a, !1, null, "0bf3e0de", null);
            e["a"] = l.exports
        },
        a165: function(t, e, i) {},
        a919: function(t, e, i) {},
        b0b5: function(t, e, i) {
            "use strict";
            i("c8c7")
        },
        b565: function(t, e, i) {
            "use strict";
            i("0b81")
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
                a = [],
                n = i("2b0e"),
                r = n["a"].extend({
                    props: {
                        icon: Object
                    }
                }),
                c = r,
                o = i("2877"),
                l = Object(o["a"])(c, s, a, !1, null, "651ddf6c", null);
            e["a"] = l.exports
        },
        c8c7: function(t, e, i) {},
        d1bf: function(t, e, i) {},
        dcff: function(t, e, i) {
            "use strict";
            i("d1bf")
        },
        f2c0: function(t, e, i) {
            "use strict";
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("button", {
                        staticClass: "primary-button",
                        attrs: {
                            disabled: t.isDisabled
                        },
                        on: {
                            click: t.clicked
                        }
                    }, [t.isRunning ? i("Spinner") : t._e(), t._t("default", null, {
                        isRunning: t.isRunning
                    })], 2)
                },
                a = [],
                n = i("2b0e"),
                r = i("96d7"),
                c = n["a"].extend({
                    name: "Primary.vue",
                    components: {
                        Spinner: r["a"]
                    },
                    props: {
                        disabled: Boolean,
                        onClick: Function
                    },
                    data() {
                        return {
                            isRunning: !1
                        }
                    },
                    computed: {
                        isDisabled() {
                            return this.disabled || this.isRunning
                        }
                    },
                    methods: {
                        async clicked() {
                            if (this.isDisabled) return;
                            const t = this.onClick();
                            t instanceof Promise && (this.isRunning = !0, await t, this.isRunning = !1)
                        }
                    }
                }),
                o = c,
                l = (i("3cf7"), i("2877")),
                u = Object(l["a"])(o, s, a, !1, null, "a35e4106", null);
            e["a"] = u.exports
        },
        f76c: function(t, e, i) {}
    }
]);
//# sourceMappingURL=chunk-71180739.01f16df9.js.map