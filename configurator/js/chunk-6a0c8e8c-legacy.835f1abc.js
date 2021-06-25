(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-6a0c8e8c"], {
        "0b81": function(t, e, n) {},
        "1b33": function(t, e, n) {
            "use strict";
            var i = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "gdpr-email-container"
                    }, [n("input", {
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
                    }), n("CheckBox", {
                        attrs: {
                            name: "gdpr-checkbox",
                            onChange: t.onCheckBoxChange
                        }
                    }, [n("span", {
                        staticClass: "gdpr-text"
                    }, [t._v(" " + t._s(t.gdprText) + " "), t.privacyUrl ? n("a", {
                        attrs: {
                            href: t.privacyUrl,
                            target: "_blank",
                            rel: "noopener noreferrer"
                        }
                    }, [t._v(" " + t._s(t.t.t("global.see-more")) + " ")]) : t._e()])])], 1)
                },
                a = [],
                s = n("2b0e"),
                o = n("3c8b"),
                r = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "checkbox-container"
                    }, [n("label", {
                        attrs: {
                            for: t.name
                        }
                    }, [t._t("default")], 2), n("input", {
                        staticClass: "hidden-checkbox",
                        attrs: {
                            id: t.name,
                            type: "checkbox"
                        },
                        on: {
                            change: t.onChange
                        }
                    }), n("div", {
                        staticClass: "styled-checkbox"
                    })])
                },
                c = [],
                l = s["a"].extend({
                    props: {
                        name: String,
                        onChange: Function
                    }
                }),
                u = l,
                d = (n("943f"), n("2877")),
                h = Object(d["a"])(u, r, c, !1, null, "d87caac6", null),
                p = h.exports,
                m = s["a"].extend({
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
                            this.isValid && this.$store.commit(o["d"].SET_EMAIL, this.email), this.$emit("change", this.isValid, this.email, this.gdprChecked)
                        }
                    },
                    async mounted() {
                        this.tenant = await this.$sdkConnector.getTenant(), this.email = this.$store.state.uiState.email
                    }
                }),
                g = m,
                f = (n("7664"), Object(d["a"])(g, i, a, !1, null, "19cef8b6", null));
            e["a"] = f.exports
        },
        2039: function(t, e, n) {},
        "20f3": function(t, e, n) {
            "use strict";
            n.r(e);
            var i = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("PopUp", {
                        attrs: {
                            onClose: t.onClose,
                            size: "medium",
                            isDesktop: t.$store.state.uiState.isDesktop
                        }
                    }, [n("template", {
                        slot: "content"
                    }, [n("div", {
                        staticClass: "export-3d-overlay"
                    }, [n("div", {
                        staticClass: "export-3d-image-container"
                    }, [t.perspectiveImage ? n("img", {
                        staticClass: "export-3d-perspective-img",
                        attrs: {
                            src: t.perspectiveImage,
                            alt: t.$store.state.coreState.label
                        }
                    }) : t._e()]), n("div", {
                        staticClass: "export-3d-text-container"
                    }, [n("h2", [t._v(" " + t._s(t.t.t("export-3d.title")) + " ")]), n("p", [t._v(" " + t._s(t.t.t("export-3d.description")) + " ")]), n("div", {
                        staticClass: "radio-buttons"
                    }, [n("RadioButton", {
                        attrs: {
                            text: "OBJ",
                            checked: !1,
                            name: "fileFormat",
                            value: "obj",
                            onClick: t.onFileFormatChange
                        }
                    }), n("RadioButton", {
                        attrs: {
                            text: "FBX",
                            checked: !1,
                            name: "fileFormat",
                            value: "fbx",
                            onClick: t.onFileFormatChange
                        }
                    }), n("RadioButton", {
                        attrs: {
                            text: "DXF",
                            checked: !1,
                            name: "fileFormat",
                            value: "dxf",
                            onClick: t.onFileFormatChange
                        }
                    }), n("RadioButton", {
                        attrs: {
                            text: "GLB",
                            checked: !1,
                            name: "fileFormat",
                            value: "glTF",
                            onClick: t.onFileFormatChange
                        }
                    })], 1), n("div", {
                        staticClass: "separator"
                    }), n("GdprEmailInput", {
                        on: {
                            change: t.onEmailChange
                        }
                    }), t.hasError ? n("div", {
                        staticClass: "export-3d-error"
                    }, [t._v(t._s(t.t.t("export-3d.error")))]) : t._e(), n("PrimaryButton", {
                        attrs: {
                            onClick: t.send,
                            disabled: !t.buttonEnabled
                        },
                        scopedSlots: t._u([{
                            key: "default",
                            fn: function(e) {
                                return [e.isRunning ? t._e() : n("SvgIcon", {
                                    attrs: {
                                        icon: t.icons.SvgCheck
                                    }
                                }), n("span", [t._v(t._s(t.t.t("export-3d.cta")))])]
                            }
                        }])
                    }), t.onClose ? n("span", {
                        staticClass: "export-3d-text-button",
                        on: {
                            click: t.onClose
                        }
                    }, [t._v(t._s(t.t.t("global.cancel")))]) : t._e()], 1)])])], 2)
                },
                a = [],
                s = n("2b0e"),
                o = n("4e4c"),
                r = n("4ca5"),
                c = n("bee6"),
                l = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("label", {
                        staticClass: "container"
                    }, [t._v(t._s(t.text) + " "), n("input", {
                        attrs: {
                            type: "radio",
                            name: t.name
                        },
                        domProps: {
                            checked: t.checked,
                            value: t.value
                        },
                        on: {
                            click: t.onClick
                        }
                    }), n("span", {
                        staticClass: "checkmark"
                    })])
                },
                u = [],
                d = s["a"].extend({
                    name: "RadioButton.vue",
                    props: {
                        text: String,
                        checked: Boolean,
                        value: String,
                        onClick: Function,
                        name: {
                            type: String,
                            default: "radio"
                        }
                    },
                    computed: {},
                    methods: {}
                }),
                h = d,
                p = (n("9520"), n("2877")),
                m = Object(p["a"])(h, l, u, !1, null, "00ad7c14", null),
                g = m.exports,
                f = n("1b33"),
                v = n("f2c0"),
                C = s["a"].extend({
                    components: {
                        PopUp: o["a"],
                        SvgIcon: c["a"],
                        RadioButton: g,
                        GdprEmailInput: f["a"],
                        PrimaryButton: v["a"]
                    },
                    data() {
                        return {
                            perspectiveImage: null,
                            configurationId: null,
                            email: "",
                            gdprValid: !1,
                            fileFormat: null,
                            hasError: !1
                        }
                    },
                    methods: {
                        async send() {
                            this.hasError = !1;
                            try {
                                const t = await this.$sdkConnector.saveCurrentConfiguration(),
                                    e = await this.$sdkConnector.getRapiAccess(),
                                    n = "glTF" === this.fileFormat ? {
                                        binary: !0
                                    } : {};
                                await e.export3D(t.id, this.email, this.fileFormat, n), this.$props.onClose()
                            } catch (t) {
                                console.error(t), this.hasError = !0
                            }
                        },
                        onEmailChange(t, e, n) {
                            this.hasError = !1, this.gdprValid = t, this.email = e
                        },
                        onFileFormatChange() {
                            var t;
                            this.hasError = !1, this.fileFormat = (null === (t = this.$el.querySelector('input[name="fileFormat"]:checked')) || void 0 === t ? void 0 : t.value) || null
                        }
                    },
                    computed: {
                        icons() {
                            return {
                                SvgCheck: r["a"]
                            }
                        },
                        buttonEnabled() {
                            return this.gdprValid && !!this.fileFormat
                        }
                    },
                    async mounted() {
                        await this.$sdkConnector.waitForLoad();
                        const t = await this.$sdkConnector.configuratorApi;
                        this.configurationId = await t.getCurrentConfigurationHash();
                        const {
                            image: e
                        } = await t.preparePerspectiveImage();
                        this.perspectiveImage = e, this.hasError = !1
                    },
                    destroyed() {
                        this.perspectiveImage = null, this.hasError = !1
                    },
                    props: {
                        onClose: Function
                    }
                }),
                b = C,
                k = (n("d53a"), Object(p["a"])(b, i, a, !1, null, "23bf247c", null));
            e["default"] = k.exports
        },
        "398c": function(t, e, n) {},
        "3cf7": function(t, e, n) {
            "use strict";
            n("a165")
        },
        "3f3f": function(t, e, n) {
            "use strict";
            e["a"] = {
                id: "close-usage",
                viewBox: "0 0 32 32",
                url: n.p + "svgs/icons.993d4e35.svg#close",
                toString: function() {
                    return this.url
                }
            }
        },
        "4ca5": function(t, e, n) {
            "use strict";
            e["a"] = {
                id: "check-usage",
                viewBox: "0 0 32 32",
                url: n.p + "svgs/icons.993d4e35.svg#check",
                toString: function() {
                    return this.url
                }
            }
        },
        "4e4c": function(t, e, n) {
            "use strict";
            var i = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "h100",
                        class: {
                            light: t.isLightTheme, big: t.isBig, medium: t.isMedium, small: t.isSmall, "align-to-scene": t.isAlignToScene
                        }
                    }, [n("div", {
                        staticClass: "shadow",
                        on: {
                            click: t.close
                        }
                    }), n("div", {
                        staticClass: "popup"
                    }, [n("div", {
                        staticClass: "popup-container",
                        class: {
                            "no-scrollbar": !t.isDesktop
                        }
                    }, [t.onClose ? n("div", {
                        staticClass: "popup-close",
                        on: {
                            click: t.close
                        }
                    }, [n("SvgIcon", {
                        attrs: {
                            icon: t.icons.SvgClose
                        }
                    })], 1) : t._e(), t._t("content")], 2)])])
                },
                a = [],
                s = n("2b0e"),
                o = n("3f3f"),
                r = n("bee6"),
                c = s["a"].extend({
                    components: {
                        SvgIcon: r["a"]
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
                l = c,
                u = (n("dcff"), n("2877")),
                d = Object(u["a"])(l, i, a, !1, null, "1fa3d5c3", null);
            e["a"] = d.exports
        },
        7664: function(t, e, n) {
            "use strict";
            n("f76c")
        },
        "943f": function(t, e, n) {
            "use strict";
            n("a919")
        },
        9520: function(t, e, n) {
            "use strict";
            n("398c")
        },
        "96d7": function(t, e, n) {
            "use strict";
            var i = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "loading-indicator"
                    })
                },
                a = [],
                s = n("2b0e"),
                o = s["a"].extend({}),
                r = o,
                c = (n("b565"), n("2877")),
                l = Object(c["a"])(r, i, a, !1, null, "0bf3e0de", null);
            e["a"] = l.exports
        },
        a165: function(t, e, n) {},
        a919: function(t, e, n) {},
        b565: function(t, e, n) {
            "use strict";
            n("0b81")
        },
        bee6: function(t, e, n) {
            "use strict";
            var i = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("svg", [n("use", {
                        attrs: {
                            "xlink:href": t.icon.url
                        }
                    })])
                },
                a = [],
                s = n("2b0e"),
                o = s["a"].extend({
                    props: {
                        icon: Object
                    }
                }),
                r = o,
                c = n("2877"),
                l = Object(c["a"])(r, i, a, !1, null, "651ddf6c", null);
            e["a"] = l.exports
        },
        d1bf: function(t, e, n) {},
        d53a: function(t, e, n) {
            "use strict";
            n("2039")
        },
        dcff: function(t, e, n) {
            "use strict";
            n("d1bf")
        },
        f2c0: function(t, e, n) {
            "use strict";
            var i = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("button", {
                        staticClass: "primary-button",
                        attrs: {
                            disabled: t.isDisabled
                        },
                        on: {
                            click: t.clicked
                        }
                    }, [t.isRunning ? n("Spinner") : t._e(), t._t("default", null, {
                        isRunning: t.isRunning
                    })], 2)
                },
                a = [],
                s = n("2b0e"),
                o = n("96d7"),
                r = s["a"].extend({
                    name: "Primary.vue",
                    components: {
                        Spinner: o["a"]
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
                c = r,
                l = (n("3cf7"), n("2877")),
                u = Object(l["a"])(c, i, a, !1, null, "a35e4106", null);
            e["a"] = u.exports
        },
        f76c: function(t, e, n) {}
    }
]);
//# sourceMappingURL=chunk-6a0c8e8c-legacy.835f1abc.js.map