(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-3336d37a"], {
        "087b": function(t, e, n) {
            "use strict";
            n("77ea")
        },
        "2cb1": function(t, e, n) {
            "use strict";
            n("6832")
        },
        "4a5b": function(t, e, n) {
            "use strict";
            n("e452")
        },
        6832: function(t, e, n) {},
        "77ea": function(t, e, n) {},
        7815: function(t, e, n) {},
        "82c9": function(t, e, n) {
            "use strict";
            n("ab6e")
        },
        "87a0": function(t, e, n) {
            "use strict";
            n.r(e);
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "viewer-app main-component"
                    }, [n("Layout", {
                        scopedSlots: t._u([{
                            key: "stage",
                            fn: function() {
                                return [t.showArButton ? n("div", {
                                    staticClass: "button-container"
                                }, [n("ARButton", {
                                    attrs: {
                                        size: "medium"
                                    }
                                })], 1) : t._e(), n("PoweredBy")]
                            },
                            proxy: !0
                        }])
                    })], 1)
                },
                o = [],
                a = n("2b0e"),
                c = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "powered-by"
                    }, [t._v(" powered by "), n("a", {
                        attrs: {
                            href: "https://www.roomle.com/",
                            target: "_blank",
                            rel: "noopener noreferrer"
                        }
                    }, [n("SvgIcon", {
                        attrs: {
                            icon: t.icons.SvgRoomle
                        }
                    })], 1)])
                },
                i = [],
                r = n("bee6"),
                u = {
                    id: "roomle-usage",
                    viewBox: "0 0 338 100",
                    url: n.p + "svgs/icons.993d4e35.svg#roomle",
                    toString: function() {
                        return this.url
                    }
                },
                l = a["a"].extend({
                    components: {
                        SvgIcon: r["a"]
                    },
                    computed: {
                        icons() {
                            return {
                                SvgRoomle: u
                            }
                        }
                    }
                }),
                d = l,
                b = (n("087b"), n("2877")),
                v = Object(b["a"])(d, c, i, !1, null, "5fcf9e1b", null),
                f = v.exports,
                m = n("c041"),
                p = n("c135"),
                g = n("b7f9"),
                h = n("a209"),
                _ = a["a"].extend({
                    components: {
                        PoweredBy: f,
                        ARButton: m["a"],
                        Layout: h["a"]
                    },
                    props: {
                        objectId: String
                    },
                    data() {
                        return {
                            hasAssets: !1
                        }
                    },
                    watch: {
                        objectId: {
                            immediate: !0,
                            async handler() {
                                const t = this.objectId;
                                if (t) {
                                    const e = await this.$sdkConnector.getRapiAccess(),
                                        n = await e.getItem(t);
                                    this.hasAssets = Object(p["m"])(n)
                                }
                            }
                        }
                    },
                    computed: {
                        showArButton() {
                            var t;
                            return this.hasAssets && Object(p["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[g["a"].AR])
                        }
                    }
                }),
                w = _,
                A = (n("4a5b"), Object(b["a"])(w, s, o, !1, null, "374223ea", null));
            e["default"] = A.exports
        },
        "8c7c": function(t, e, n) {
            "use strict";
            n("7815")
        },
        a209: function(t, e, n) {
            "use strict";
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "layout"
                    }, [n("div", {
                        staticClass: "stage"
                    }, [t._t("stage")], 2), n("div", {
                        staticClass: "bottom"
                    }, [t._t("bottom")], 2)])
                },
                o = [],
                a = n("2b0e"),
                c = a["a"].extend({}),
                i = c,
                r = (n("2cb1"), n("2877")),
                u = Object(r["a"])(i, s, o, !1, null, "4095a987", null);
            e["a"] = u.exports
        },
        ab6e: function(t, e, n) {},
        bee6: function(t, e, n) {
            "use strict";
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("svg", [n("use", {
                        attrs: {
                            "xlink:href": t.icon.url
                        }
                    })])
                },
                o = [],
                a = n("2b0e"),
                c = a["a"].extend({
                    props: {
                        icon: Object
                    }
                }),
                i = c,
                r = n("2877"),
                u = Object(r["a"])(i, s, o, !1, null, "651ddf6c", null);
            e["a"] = u.exports
        },
        c041: function(t, e, n) {
            "use strict";
            var s = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        on: {
                            click: t.goToAr
                        }
                    }, ["small" === t.size ? n("span", [n("SvgIcon", {
                        staticClass: "ar-icon",
                        attrs: {
                            icon: t.icons.SvgAR
                        }
                    })], 1) : t._e(), "medium" === t.size ? n("div", {
                        staticClass: "ar-button-medium"
                    }, [n("SvgIcon", {
                        staticClass: "ar-icon",
                        attrs: {
                            icon: t.icons.SvgAR
                        }
                    }), n("span", [t._v(t._s(t.t.t("ar.heading")))])], 1) : t._e()])
                },
                o = [],
                a = n("2b0e"),
                c = {
                    id: "ar-usage",
                    viewBox: "0 0 42 42",
                    url: n.p + "svgs/icons.993d4e35.svg#ar",
                    toString: function() {
                        return this.url
                    }
                },
                i = n("bee6"),
                r = n("b7f9"),
                u = n("3c8b"),
                l = n("3cc4"),
                d = a["a"].extend({
                    components: {
                        SvgIcon: i["a"]
                    },
                    props: {
                        size: {
                            type: String,
                            default: "small",
                            validator(t) {
                                const e = ["medium", "small"];
                                return -1 !== e.indexOf(t)
                            }
                        }
                    },
                    computed: {
                        icons() {
                            return {
                                SvgAR: c
                            }
                        }
                    },
                    methods: {
                        async goToAr() {
                            this.$embeddingCallbacks.onButtonClicked(r["a"].AR), this.$store.commit(u["d"].SET_OVERLAY_STATE, {
                                overlay: l["a"].OPEN_AR,
                                open: !0
                            })
                        }
                    }
                }),
                b = d,
                v = (n("8c7c"), n("82c9"), n("2877")),
                f = Object(v["a"])(b, s, o, !1, null, "25489662", null);
            e["a"] = f.exports
        },
        e452: function(t, e, n) {}
    }
]);
//# sourceMappingURL=chunk-3336d37a-legacy.800a0c98.js.map