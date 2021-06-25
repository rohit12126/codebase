(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-2a38272e"], {
        "0b81": function(t, e, i) {},
        "248b": function(t, e, i) {},
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
        "42a5": function(t, e, i) {
            "use strict";
            i("248b")
        },
        "4aa4": function(t, e, i) {
            "use strict";
            i.r(e);
            var n = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("PopUp", {
                        attrs: {
                            onClose: t.onClose,
                            isDesktop: t.$store.state.uiState.isDesktop
                        }
                    }, [i("template", {
                        slot: "content"
                    }, [i("div", {
                        staticClass: "part-list-header"
                    }, [i("div", {
                        staticClass: "part-list-perspective-image"
                    }, [t.perspectiveImage ? i("img", {
                        attrs: {
                            src: t.perspectiveImage,
                            alt: t.$store.state.coreState.label
                        }
                    }) : t._e()]), i("div", {
                        staticClass: "part-list-desc"
                    }, [i("div", {
                        staticClass: "part-list-label"
                    }, [t._v(" " + t._s(t.$store.state.coreState.label) + " ")]), t.$store.state.coreData.bounds ? i("div", {
                        staticClass: "part-list-bounds"
                    }, [t._v(" " + t._s(t.bounds) + " ")]) : t._e(), t.price ? i("div", {
                        staticClass: "part-list-price"
                    }, [t._v(" " + t._s(t.price) + " ")]) : t._e()])]), t._l(t.mainComponents, (function(t) {
                        return i("ul", {
                            key: t.subpartId,
                            staticClass: "main-components"
                        }, [i("li", [i("PartListEntry", {
                            attrs: {
                                mainComponent: t
                            }
                        })], 1)])
                    })), i("PartListPrint", {
                        attrs: {
                            price: t.price,
                            perspectiveImage: t.perspectiveImage,
                            label: t.$store.state.coreState.label,
                            partList: t.mainComponents,
                            bounds: t.bounds,
                            catalogLabel: t.$store.state.coreState.catalogLabel
                        }
                    })], 2)], 2)
                },
                s = [],
                a = i("2b0e"),
                r = i("4e4c"),
                o = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("div", {
                        staticClass: "part-list-footer"
                    }, [i("PrimaryButton", {
                        staticClass: "part-list-print",
                        attrs: {
                            onClick: t.print,
                            disabled: t.isGenerating
                        },
                        scopedSlots: t._u([{
                            key: "default",
                            fn: function(e) {
                                return [e.isRunning ? t._e() : i("SvgIcon", {
                                    attrs: {
                                        icon: t.icons.SvgPrint
                                    }
                                }), i("span", [t._v(t._s(t.t.t("print.button")))])]
                            }
                        }])
                    })], 1)
                },
                l = [],
                c = {
                    id: "print-usage",
                    viewBox: "0 0 32 32",
                    url: i.p + "svgs/icons.993d4e35.svg#print",
                    toString: function() {
                        return this.url
                    }
                },
                u = i("bee6"),
                p = i("c135"),
                d = i("5f3f"),
                h = i("f2c0"),
                g = a["a"].extend({
                    components: {
                        SvgIcon: u["a"],
                        PrimaryButton: h["a"]
                    },
                    props: {
                        partList: Array,
                        price: String,
                        perspectiveImage: String,
                        label: String,
                        bounds: String,
                        catalogLabel: String
                    },
                    destroyed() {
                        this.isGenerating = !1
                    },
                    data() {
                        return {
                            isGenerating: !1
                        }
                    },
                    computed: {
                        icons() {
                            return {
                                SvgPrint: c
                            }
                        }
                    },
                    methods: {
                        async print() {
                            if (this.isGenerating) return;
                            this.isGenerating = !0;
                            const {
                                jsPDF: t,
                                autoTable: e
                            } = await this.$libs.getJsPdf(), i = new t, n = t => t.map(({
                                articleNr: t = "",
                                label: e = "",
                                count: i = "",
                                price: n,
                                currencySymbol: s,
                                parameters: a
                            }) => {
                                var r;
                                return [t, e + Object(d["h"])(a).reduce((t, {
                                    label: e,
                                    valueLabel: i,
                                    key: n,
                                    value: s
                                }) => ("" === t && (t = "\n"), t += "       " + (e || n) + ": " + (i || s) + "\n", t), ""), i.toLocaleString(), (null === (r = Object(p["h"])(s, n)) || void 0 === r ? void 0 : r.replace(" ", "")) || ""]
                            }) || [], s = this.catalogLabel || this.t.t("print.custom"), a = this.t.t("print.page"), r = this.t.t("print.of"), o = 14, l = 22, c = 22, u = 18, h = 11, g = 9, m = 5;
                            i.addFont("./print/fonts/lato-regular.ttf", "Lato", "normal"), i.setFont("Lato"), i.setFontSize(c), i.text(this.label, o, l), i.setFontSize(h), i.text(s, o, l + m);
                            const b = 50;
                            i.addImage(this.perspectiveImage, "PNG", i.internal.pageSize.getWidth() - b - o, l - c, b, b), this.bounds && i.text(this.bounds, o, l + 4 * m), this.price && (i.setFontSize(u), i.text(this.price, o, l + 2.5 * m)), i.autoTableSetDefaults({
                                headStyles: {
                                    fillColor: [64, 64, 64]
                                }
                            });
                            const f = "{total_pages_count_string}";
                            this.partList.forEach(({
                                fullList: t,
                                originPart: s
                            }, o) => {
                                const c = n(t),
                                    u = [this.t.t("article-nr"), this.t.t("part-list.label"), this.t.t("count")],
                                    p = this.price;
                                p && u.push(this.t.t("part-list.price"));
                                const d = u.length,
                                    h = 0 === o ? l + 4 * m : i.lastAutoTable.finalY + m;
                                e(i, {
                                    head: [
                                        [{
                                            content: s.label,
                                            colSpan: d,
                                            styles: {
                                                cellPadding: {
                                                    top: 5,
                                                    right: 0,
                                                    bottom: 5,
                                                    left: 0
                                                },
                                                fontSize: 12,
                                                fontStyle: "bold",
                                                textColor: [0, 0, 0],
                                                fillColor: [255, 255, 255]
                                            }
                                        }], u
                                    ],
                                    body: c,
                                    theme: "grid",
                                    startY: h + m,
                                    styles: {
                                        font: "Lato"
                                    },
                                    rowPageBreak: "avoid",
                                    didDrawPage(t) {
                                        let e = a + " " + i.internal.getNumberOfPages();
                                        "function" === typeof i.putTotalPages && (e = e + " " + r + " " + f), i.setFontSize(g);
                                        const n = i.internal.pageSize,
                                            s = n.getHeight();
                                        i.text(e, t.settings.margin.left, s - g)
                                    }
                                })
                            }), "function" === typeof i.putTotalPages && i.putTotalPages(f), i.save(this.label + " " + s + ".pdf"), this.isGenerating = !1
                        }
                    }
                }),
                m = g,
                b = (i("42a5"), i("2877")),
                f = Object(b["a"])(m, o, l, !1, null, "efd3ca66", null),
                v = f.exports,
                _ = i("9304"),
                S = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("HeightToggle", {
                        attrs: {
                            disabled: t.heightToggleDisabled,
                            isOpen: !t.$store.state.uiState.initData.groupPartList
                        },
                        scopedSlots: t._u([{
                            key: "header",
                            fn: function() {
                                return [i("div", {
                                    staticClass: "main-component-separator"
                                }), i("div", {
                                    staticClass: "main-component-overview"
                                }, [i("div", {
                                    staticClass: "main-component-label"
                                }, [t._v(" " + t._s(t.mainComponent.originPart.label ? t.mainComponent.originPart.label : t.t.t("part-list.main-component")) + " ")]), i("div", {
                                    staticClass: "main-component-article-nr"
                                }, [t._v(" " + t._s(t.mainComponent.originPart.articleNr) + " ")]), i("div", {
                                    staticClass: "main-component-price"
                                }, [t._v(" " + t._s(t.price) + " ")])])]
                            },
                            proxy: !0
                        }, {
                            key: "content",
                            fn: function() {
                                return [i("ul", {
                                    staticClass: "part-list"
                                }, t._l(t.mainComponent.fullList, (function(t) {
                                    return i("PartListRow", {
                                        key: t.subpartId,
                                        attrs: {
                                            part: t
                                        }
                                    })
                                })), 1)]
                            },
                            proxy: !0
                        }])
                    })
                },
                C = [],
                y = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("li", {
                        staticClass: "part"
                    }, [i("HeightToggle", {
                        attrs: {
                            disabled: t.noParameters
                        },
                        scopedSlots: t._u([{
                            key: "header",
                            fn: function() {
                                return [i("div", {
                                    staticClass: "part-overview"
                                }, [i("div", {
                                    staticClass: "part-label"
                                }, [t._v(" " + t._s(t.part.label) + " ")]), i("div", [t.part.articleNr ? i("span", [t._v(" " + t._s(t.t.t("article-nr")) + ": " + t._s(t.part.articleNr) + " ")]) : t._e()]), i("div", [t._v(" " + t._s(t.t.t("count")) + ": " + t._s(t.count) + " ")]), t.price ? i("div", {
                                    staticClass: "part-price"
                                }, [t._v(" " + t._s(t.price) + " ")]) : t._e()])]
                            },
                            proxy: !0
                        }, {
                            key: "content",
                            fn: function() {
                                return [i("div", {
                                    staticClass: "part-details"
                                }, [i("div", {
                                    staticClass: "parameter-heading"
                                }, [t._v(t._s(t.t.t("parameters")))]), i("ul", {
                                    staticClass: "parameter-list"
                                }, t._l(t.parametersToShow, (function(e) {
                                    return i("li", {
                                        key: e.key,
                                        staticClass: "parameter-values"
                                    }, [i("div", [t._v(t._s(e.label || e.key) + ":")]), i("div", [t._v(t._s(e.valueLabel || e.value))])])
                                })), 0)])]
                            },
                            proxy: !0
                        }])
                    })], 1)
                },
                P = [],
                x = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("div", [i("div", {
                        staticClass: "height-toggle-container-header",
                        class: {
                            active: t.isOpening || t.opened, enabled: !t.disabled
                        },
                        on: {
                            click: t.onToggle
                        }
                    }, [t._t("header", null, {
                        onToggle: t.onToggle
                    }), t.disabled ? t._e() : i("SvgIcon", {
                        attrs: {
                            icon: t.icons.SvgArrow
                        }
                    })], 2), i("div", {
                        staticClass: "height-toggle-container"
                    }, [i("div", {
                        ref: "content",
                        staticClass: "height-toggle",
                        class: {
                            "calc-height": !t.heightCalculated, open: t.isOpening, opened: t.opened
                        }
                    }, [t._t("content")], 2)])])
                },
                L = [],
                I = i("d60e");
            const O = 300,
                w = 600,
                k = 300;
            var $ = a["a"].extend({
                    components: {
                        SvgIcon: u["a"]
                    },
                    props: {
                        disabled: Boolean,
                        isOpen: Boolean
                    },
                    data() {
                        return {
                            _animationInProgress: !1,
                            _runningIntervals: [],
                            open: !1,
                            opened: !1,
                            isOpening: !1,
                            maxHeight: null,
                            animationDuration: 300
                        }
                    },
                    mounted() {
                        this._runningIntervals = [], this.isOpen && (this.opened = !0), this.$nextTick(() => {
                            this.maxHeight = this.$refs.content.offsetHeight;
                            const t = Math.floor(this.maxHeight / k) * k * O,
                                e = Math.min(t, w),
                                i = Math.max(e, O);
                            this.animationDuration = i, this.$el.style.setProperty("--max-height", this.maxHeight + "px"), this.$el.style.setProperty("--anim-dur", i + "ms")
                        })
                    },
                    beforeDestroy() {
                        this._cleanUpIntervals()
                    },
                    computed: {
                        heightCalculated() {
                            return null !== this.maxHeight
                        },
                        icons() {
                            return {
                                SvgArrow: I["a"]
                            }
                        }
                    },
                    methods: {
                        _cleanUpIntervals() {
                            this._runningIntervals.forEach(t => clearInterval(t)), this._runningIntervals = []
                        },
                        async onToggle() {
                            if (this.disabled) return;
                            if (this._animationInProgress) return;
                            this._cleanUpIntervals(), this._animationInProgress = !0;
                            const t = Object(p["s"])(() => this._animationInProgress = !1, this.animationDuration);
                            if (this._runningIntervals.push(t), this.open = !this.open, this.open) {
                                this.isOpening = !0;
                                const t = Object(p["s"])(() => this.opened = !0, this.animationDuration);
                                this._runningIntervals.push(t)
                            } else {
                                this.opened = !1;
                                const t = Object(p["s"])(() => this.isOpening = !1, 32);
                                this._runningIntervals.push(t)
                            }
                        }
                    }
                }),
                D = $,
                T = (i("8798"), Object(b["a"])(D, x, L, !1, null, "d9a7dda4", null)),
                j = T.exports,
                E = a["a"].extend({
                    components: {
                        HeightToggle: j
                    },
                    props: {
                        part: Object
                    },
                    computed: {
                        parametersToShow() {
                            return Object(d["h"])(this.part.parameters)
                        },
                        price() {
                            return Object(p["h"])(this.part.currencySymbol, this.part.price)
                        },
                        count() {
                            return Object(p["r"])(this.part.count)
                        },
                        noParameters() {
                            return 0 === this.parametersToShow.length
                        }
                    }
                }),
                B = E,
                R = (i("4b2f"), Object(b["a"])(B, y, P, !1, null, "70889bbe", null)),
                z = R.exports,
                F = a["a"].extend({
                    components: {
                        PartListRow: z,
                        HeightToggle: j
                    },
                    data() {
                        return {
                            showParts: !1
                        }
                    },
                    props: {
                        mainComponent: Object
                    },
                    computed: {
                        heightToggleDisabled() {
                            return !this.$store.state.uiState.initData.groupPartList || this.noSubParts
                        },
                        noSubParts() {
                            return 0 === this.mainComponent.fullList.length
                        },
                        price() {
                            if (!this.$store.state.uiState.initData.groupPartList) return null;
                            const {
                                price: t,
                                currencySymbol: e
                            } = this.mainComponent.fullList.reduce((t, e) => {
                                const {
                                    price: i,
                                    currencySymbol: n,
                                    count: s
                                } = e;
                                return "number" === typeof i && (null === t.price && (t.price = 0), t.price += i * s), n && (t.currencySymbol = n), t
                            }, {
                                price: null,
                                currencySymbol: null
                            });
                            return Object(p["h"])(e, t)
                        }
                    }
                }),
                H = F,
                N = (i("b03a"), Object(b["a"])(H, S, C, !1, null, "469c7ecf", null)),
                M = N.exports,
                A = a["a"].extend({
                    components: {
                        PopUp: r["a"],
                        PartListPrint: v,
                        PartListEntry: M
                    },
                    data() {
                        return {
                            perspectiveImage: null
                        }
                    },
                    async mounted() {
                        await this.$sdkConnector.waitForLoad();
                        const t = await this.$sdkConnector.configuratorApi,
                            {
                                image: e
                            } = await t.preparePerspectiveImage();
                        this.perspectiveImage = e
                    },
                    destroyed() {
                        this.perspectiveImage = null
                    },
                    props: {
                        onClose: Function
                    },
                    computed: {
                        mainComponents() {
                            if (this.$store.state.uiState.initData.groupPartList) return this.$store.state.coreData.partList.perMainComponent;
                            const {
                                originPart: t,
                                fullList: e,
                                perMainComponent: i
                            } = this.$store.state.coreData.partList, n = JSON.parse(JSON.stringify(t));
                            return n.label = this.t.t("part-list.heading"), [{
                                originPart: n,
                                fullList: e,
                                perMainComponent: i
                            }]
                        },
                        price() {
                            return this.$store.getters[_["b"].CURRENT_PRICE]
                        },
                        bounds() {
                            return this.t.t("width-short") + " " + this.$store.state.coreData.bounds.width.toLocaleString() + " / " + this.t.t("height-short") + " " + this.$store.state.coreData.bounds.height.toLocaleString() + " / " + this.t.t("depth-short") + " " + this.$store.state.coreData.bounds.depth.toLocaleString()
                        }
                    }
                }),
                G = A,
                U = (i("7e39"), Object(b["a"])(G, n, s, !1, null, "20c388b0", null));
            e["default"] = U.exports
        },
        "4b2f": function(t, e, i) {
            "use strict";
            i("6bba")
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
                s = [],
                a = i("2b0e"),
                r = i("3f3f"),
                o = i("bee6"),
                l = a["a"].extend({
                    components: {
                        SvgIcon: o["a"]
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
                c = l,
                u = (i("dcff"), i("2877")),
                p = Object(u["a"])(c, n, s, !1, null, "1fa3d5c3", null);
            e["a"] = p.exports
        },
        "6bba": function(t, e, i) {},
        "7bca": function(t, e, i) {},
        "7e39": function(t, e, i) {
            "use strict";
            i("e314")
        },
        8798: function(t, e, i) {
            "use strict";
            i("7bca")
        },
        "96d7": function(t, e, i) {
            "use strict";
            var n = function() {
                    var t = this,
                        e = t.$createElement,
                        i = t._self._c || e;
                    return i("div", {
                        staticClass: "loading-indicator"
                    })
                },
                s = [],
                a = i("2b0e"),
                r = a["a"].extend({}),
                o = r,
                l = (i("b565"), i("2877")),
                c = Object(l["a"])(o, n, s, !1, null, "0bf3e0de", null);
            e["a"] = c.exports
        },
        a165: function(t, e, i) {},
        b03a: function(t, e, i) {
            "use strict";
            i("b8b1")
        },
        b565: function(t, e, i) {
            "use strict";
            i("0b81")
        },
        b8b1: function(t, e, i) {},
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
                s = [],
                a = i("2b0e"),
                r = a["a"].extend({
                    props: {
                        icon: Object
                    }
                }),
                o = r,
                l = i("2877"),
                c = Object(l["a"])(o, n, s, !1, null, "651ddf6c", null);
            e["a"] = c.exports
        },
        d1bf: function(t, e, i) {},
        d60e: function(t, e, i) {
            "use strict";
            e["a"] = {
                id: "arrow-usage",
                viewBox: "0 0 32 32",
                url: i.p + "svgs/icons.993d4e35.svg#arrow",
                toString: function() {
                    return this.url
                }
            }
        },
        dcff: function(t, e, i) {
            "use strict";
            i("d1bf")
        },
        e314: function(t, e, i) {},
        f2c0: function(t, e, i) {
            "use strict";
            var n = function() {
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
                s = [],
                a = i("2b0e"),
                r = i("96d7"),
                o = a["a"].extend({
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
                l = o,
                c = (i("3cf7"), i("2877")),
                u = Object(c["a"])(l, n, s, !1, null, "a35e4106", null);
            e["a"] = u.exports
        }
    }
]);
//# sourceMappingURL=chunk-2a38272e-legacy.4b86b140.js.map