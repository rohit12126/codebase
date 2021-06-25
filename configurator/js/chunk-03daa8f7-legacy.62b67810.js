(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-03daa8f7"], {
        "08da": function(t, e, n) {},
        "1aff": function(t, e, n) {},
        "1c70": function(t, e, n) {},
        2241: function(t, e, n) {},
        "256c": function(t, e, n) {},
        "265c": function(t, e, n) {
            "use strict";
            n("256c")
        },
        "2ac9": function(t, e, n) {
            "use strict";
            n("2241")
        },
        3034: function(t, e, n) {
            "use strict";
            var a = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "aspect-ratio-box"
                    }, [t._t("default")], 2)
                },
                s = [],
                i = n("2b0e"),
                o = i["a"].extend({}),
                c = o,
                l = (n("e446"), n("2877")),
                r = Object(l["a"])(c, a, s, !1, null, "6de4c3ea", null);
            e["a"] = r.exports
        },
        "3ef6": function(t, e, n) {
            "use strict";
            n.r(e);
            var a = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "planner-app main-component"
                    }, [n("Layout", {
                        scopedSlots: t._u([{
                            key: "stage",
                            fn: function() {
                                return [n("SelectionButtons", {
                                    class: {
                                        hidden: !t.$store.state.plannerUiState.selection
                                    }
                                }, [n("StartConfiguringButton"), n("RotateButton", {
                                    attrs: {
                                        onClick: t.rotateSelection
                                    }
                                }), n("DeleteButton", {
                                    attrs: {
                                        onClick: t.deleteSelection
                                    }
                                })], 1), n("InteractionsContainer", {
                                    attrs: {
                                        environment: "planner"
                                    },
                                    scopedSlots: t._u([{
                                        key: "default",
                                        fn: function(e) {
                                            return [n("HeightContainer", {
                                                staticClass: "main-container",
                                                attrs: {
                                                    scrollThisContainer: !0
                                                },
                                                scopedSlots: t._u([{
                                                    key: "header",
                                                    fn: function() {},
                                                    proxy: !0
                                                }, {
                                                    key: "content",
                                                    fn: function() {
                                                        return [t.$store.state.plannerUiState.selection ? n("SelectionPreview") : n("div", [n("PlannerSidebar", {
                                                            attrs: {
                                                                isLoading: t.isLoadingCatalog,
                                                                onToggleExpand: e.toggle
                                                            }
                                                        })], 1)]
                                                    },
                                                    proxy: !0
                                                }], null, !0)
                                            })]
                                        }
                                    }])
                                })]
                            },
                            proxy: !0
                        }, {
                            key: "bottom",
                            fn: function() {
                                return [n("BottomBar")]
                            },
                            proxy: !0
                        }])
                    })], 1)
                },
                s = [],
                i = n("2b0e"),
                o = n("94cf"),
                c = n("a209"),
                l = n("43ea"),
                r = n("4352"),
                u = n("995f"),
                d = n("f67b"),
                p = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "selection-detail-container"
                    }, [t.$store.state.plannerUiState.isDesktop ? n("div", [n("div", {
                        staticClass: "selection-perspective-image"
                    }, [n("AspectRatioBox", [n("ImageWithFallback", {
                        attrs: {
                            src: t.perspectiveImage,
                            alt: t.selectionLabel
                        }
                    })], 1)], 1), n("h2", {
                        staticClass: "collection-view-hint"
                    }, [t._v(" Individualized configuration"), n("br"), t.selectionLabel ? n("span", [t._v(t._s(t.selectionLabel))]) : n("span")]), n("hr"), n("h2", {
                        staticClass: "collection-view-hint individualize-hint"
                    }, [t._v(' Click on "individualize" to adjust your configuration to your wishes ')])]) : n("div", {
                        staticClass: "selection-detail__short"
                    }, [t._v(" Individualized configuration"), n("br"), t.selectionLabel ? n("span", [t._v(t._s(t.selectionLabel))]) : t._e()]), n("NextAction", {
                        attrs: {
                            onClick: t.loadSelection,
                            showButton: !0,
                            text: "Individualize"
                        }
                    })], 1)
                },
                v = [],
                g = n("3034"),
                b = n("cd08"),
                h = n("798b"),
                f = n("c135"),
                m = i["a"].extend({
                    components: {
                        AspectRatioBox: g["a"],
                        ImageWithFallback: b["a"],
                        NextAction: h["a"]
                    },
                    methods: {
                        loadSelection() {
                            this.$sdkConnector.loadSelectedPlanObject()
                        }
                    },
                    computed: {
                        perspectiveImage() {
                            if (!this.$store.state.plannerUiState.selectionPayload) return null;
                            const {
                                configuration: t,
                                item: e
                            } = this.$store.state.plannerUiState.selectionPayload, n = e || t;
                            return n && n.perspectiveImage ? Object(f["k"])(n.perspectiveImage, 360) : null
                        },
                        selectionLabel() {
                            if (!this.$store.state.plannerUiState.selectionPayload) return null;
                            const {
                                component: t,
                                item: e
                            } = this.$store.state.plannerUiState.selectionPayload, n = e || t;
                            return n ? n.label : null
                        }
                    }
                }),
                S = m,
                C = (n("9c4a"), n("2877")),
                _ = Object(C["a"])(S, p, v, !1, null, "0b187142", null),
                k = _.exports,
                w = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return t.$store.state.plannerUiState.showCatalog ? n("CollectionView", {
                        attrs: {
                            state: t.$store.state.plannerUiState.sidebar,
                            elements: t.elements,
                            helpText: t.helpText,
                            isDesktop: t.$store.state.plannerUiState.isDesktop,
                            showBack: t.showBack,
                            interactionsExpanded: t.$store.state.plannerUiState.interactionsExpanded,
                            onCollapse: t.onCollapse,
                            onShowDisabledMessage: t.onShowDisabledMessage,
                            onGoBack: t.onGoBack,
                            onToggleExpand: t.onToggleExpand
                        }
                    }) : n("div", [t.isLoading ? n("div", {
                        staticClass: "catalog-loading-container"
                    }, [n("Spinner")], 1) : n("div", [n("Welcome")], 1)])
                },
                x = [],
                $ = n("8979"),
                E = n("06d2"),
                B = n("45c3"),
                T = n("96d7"),
                y = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "selection-detail-container"
                    }, [t.$store.state.plannerUiState.isDesktop ? n("div", [n("div", {
                        staticClass: "selection-perspective-image"
                    }, [n("AspectRatioBox")], 1), t._m(0), n("hr"), n("h2", {
                        staticClass: "collection-view-hint individualize-hint"
                    }, [t._v(" You can move around, rotate, delete or individualize the items in the 3D szene ")])]) : n("div", {
                        staticClass: "selection-detail__short"
                    }, [t._v(" Welcome!"), n("br"), n("span", [t._v("To change something please select an item by touching on it in 3D")])])])
                },
                A = [function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("h2", {
                        staticClass: "collection-view-hint"
                    }, [t._v(" Welcome!"), n("br"), n("span", [t._v("To change something please select an item by clicking on it in 3D ")])])
                }],
                L = i["a"].extend({
                    components: {
                        AspectRatioBox: g["a"],
                        ImageWithFallback: b["a"]
                    }
                }),
                D = L,
                O = (n("4f92"), Object(C["a"])(D, y, A, !1, null, "e0dd6590", null)),
                I = O.exports,
                R = i["a"].extend({
                    components: {
                        CollectionView: $["a"],
                        Spinner: T["a"],
                        Welcome: I
                    },
                    props: {
                        onToggleExpand: Function,
                        isLoading: Boolean
                    },
                    computed: {
                        elements() {
                            return this.$store.state.plannerUiState.showCatalog && this.$store.getters[E["b"].CATALOG_ROOT_TAG] || []
                        },
                        helpText() {
                            return this.$store.state.plannerUiState.isDesktop ? "Catalog" : null
                        },
                        showBack() {
                            return !!this.$store.state.plannerUiState.isDesktop && this.$store.state.plannerUiState.sidebar.showsDetails
                        }
                    },
                    methods: {
                        onCollapse() {
                            this.$store.dispatch(E["a"].SET_INTERACTIONS_EXPANDED, !1)
                        },
                        onShowDisabledMessage() {},
                        onGoBack(t) {
                            const e = this.$store.state.plannerUiState.sidebar;
                            this.$store.commit(B["a"].ELEMENT_EXPANDED, {
                                state: e,
                                value: !1
                            }), this.$store.commit(B["a"].SET_SELECTED_ELEMENT, {
                                state: e,
                                value: null
                            })
                        }
                    }
                }),
                P = R,
                U = (n("c4d7"), Object(C["a"])(P, w, x, !1, null, "1cad2650", null)),
                j = U.exports,
                N = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("SelectionButton", {
                        attrs: {
                            onClick: t.onClick
                        }
                    }, [n("SvgIcon", {
                        staticClass: "rotate-icon",
                        attrs: {
                            icon: t.icons.SvgRotate
                        }
                    })], 1)
                },
                F = [],
                z = n("bee6"),
                G = {
                    id: "rotate-usage",
                    viewBox: "0 0 24 24",
                    url: n.p + "svgs/icons.993d4e35.svg#rotate",
                    toString: function() {
                        return this.url
                    }
                },
                W = n("77ef"),
                M = i["a"].extend({
                    components: {
                        SvgIcon: z["a"],
                        SelectionButton: W["a"]
                    },
                    props: {
                        onClick: Function
                    },
                    computed: {
                        icons() {
                            return {
                                SvgRotate: G
                            }
                        }
                    }
                }),
                q = M,
                V = (n("265c"), Object(C["a"])(q, N, F, !1, null, "965fe738", null)),
                J = V.exports,
                H = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "bottombar"
                    }, [n("div", {
                        staticClass: "bottombar-container"
                    }, [n("div", {
                        staticClass: "bottombar-item item-vertical"
                    }, [n("p", {
                        staticClass: "sub-label"
                    }, [n("span", [t._v(" " + t._s(t.subLabel) + " ")])]), n("p", {
                        staticClass: "main-label"
                    }, [t._v(t._s(t.mainLabel))])]), n("div", {
                        staticClass: "bottombar-item"
                    }, [n("div", {
                        staticClass: "item-container button",
                        attrs: {
                            "data-test-id": "savedraft-button"
                        },
                        on: {
                            click: t.saveDraft
                        }
                    }, [n("SvgIcon", {
                        staticClass: "save-icon",
                        attrs: {
                            icon: t.icons.SvgSave
                        }
                    }), t.$store.state.uiState.isDesktop ? n("span", {
                        staticClass: "bottom-label"
                    }, [t._v(" " + t._s(t.t.t("params.save-draft")) + " ")]) : t._e()], 1), t.showRequestPlanButton ? n("div", {
                        staticClass: "item-container button cta-button",
                        attrs: {
                            "id": "requestproduct-button"
                        },
                        on: {
                            click: t.requestPlan
                        }
                    }, [n("SvgIcon", {
                        staticClass: "cart-icon",
                        attrs: {
                            icon: t.icons.SvgCart
                        }
                    }), t.$store.state.plannerUiState.isDesktop ? n("span", {
                        staticClass: "bottom-label"
                    }, [t._v(" Order ")]) : t._e()], 1) : t._e()])])])
                },
                X = [],
                Y = n("d7b0"),
                K = n("2cd5"),
                Q = n("f7fb"),
                Z = n("b7f9"),
                tt = n("3c8b"),
                et = n("3cc4"),
                nt = i["a"].extend({
                    components: {
                        SvgIcon: z["a"]
                    },
                    computed: {
                        icons() {
                            return {
                                SvgSave: Y["a"],
                                SvgCart: K["a"]
                            }
                        },
                        subLabel() {
                            return "Create your own set"
                        },
                        mainLabel() {
                            return "Multi Object Configurator"
                        },
                        showRequestPlanButton() {
                            return !0
                        }
                    },
                    methods: {
                        async requestPlan() {
                            await Object(Q["b"])(this.$embeddingCallbacks, this.$sdkConnector, this.$store, this.$analytics)
                        },
                        async saveDraft() {
                            this.$embeddingCallbacks.onButtonClicked(Z["a"].SAVEDRAFT), this.$store.commit(tt["d"].SET_OVERLAY_STATE, {
                                overlay: et["a"].SAVE_DRAFT,
                                open: !0
                            })
                        }
                    }
                }),
                at = nt,
                st = (n("9b35"), Object(C["a"])(at, H, X, !1, null, "5f4e56f4", null)),
                it = st.exports;
            const ot = Math.PI / 8;
            var ct = i["a"].extend({
                    components: {
                        BackButton: o["a"],
                        InteractionsContainer: r["a"],
                        HeightContainer: l["a"],
                        Layout: c["a"],
                        DeleteButton: u["a"],
                        SelectionButtons: d["a"],
                        SelectionPreview: k,
                        PlannerSidebar: j,
                        RotateButton: J,
                        StartConfiguringButton: () => n.e("chunk-6b2d5f05").then(n.bind(null, "c6ed")),
                        BottomBar: it
                    },
                    data() {
                        return {
                            isLoadingCatalog: !0
                        }
                    },
                    async mounted() {
                        var t;
                        const e = null === (t = this.$store.state.uiState.initData) || void 0 === t ? void 0 : t.catalogRootTag;
                        if (e) try {
                            this.isLoadingCatalog = !0;
                            const t = await this.$sdkConnector.getRapiAccess(),
                                n = await t.getTag(e),
                                a = n.tags,
                                s = await Promise.all(a.map(e => t.getTag(e))),
                                i = await Promise.all(s.map(e => new Promise(async n => {
                                    const a = await t.getItemsOf(e);
                                    e = JSON.parse(JSON.stringify(e)), e.items = a, n(e)
                                })));
                            this.$store.commit(E["c"].SET_CATALOG_ROOT_TAG, i), this.$store.commit(E["c"].SET_SHOW_CATALOG, !0), this.isLoadingCatalog = !1
                        } catch (n) {
                            this.isLoadingCatalog = !1
                        } else this.isLoadingCatalog = !1
                    },
                    methods: {
                        async deleteSelection() {
                            const t = await this.$sdkConnector.plannerApi;
                            t.deleteSelection()
                        },
                        async rotateSelection() {
                            const t = await this.$sdkConnector.plannerApi;
                            t.rotateSelection(ot)
                        }
                    }
                }),
                lt = ct,
                rt = (n("2ac9"), Object(C["a"])(lt, a, s, !1, null, "206b8f33", null));
            e["default"] = rt.exports
        },
        "40f6": function(t, e, n) {
            "use strict";
            n("94bc")
        },
        "4f92": function(t, e, n) {
            "use strict";
            n("1c70")
        },
        "798b": function(t, e, n) {
            "use strict";
            var a = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "next-action-container"
                    }, [t.showButton ? n("div", {
                        staticClass: "next-action-shadow"
                    }, [n("div", {
                        staticClass: "next-action",
                        on: {
                            click: t.onClick
                        }
                    }, [n("SvgIcon", {
                        attrs: {
                            icon: t.icons.SvgArrowRight
                        }
                    }), n("span", [t._v(t._s(t.text))])], 1)]) : t._e()])
                },
                s = [],
                i = n("2b0e"),
                o = n("bee6"),
                c = n("a378"),
                l = i["a"].extend({
                    components: {
                        SvgIcon: o["a"]
                    },
                    props: {
                        onClick: Function,
                        showButton: Boolean,
                        text: String
                    },
                    computed: {
                        icons() {
                            return {
                                SvgArrowRight: c["a"]
                            }
                        }
                    }
                }),
                r = l,
                u = (n("a348"), n("2877")),
                d = Object(u["a"])(r, a, s, !1, null, "4b8363b0", null);
            e["a"] = d.exports
        },
        "94bc": function(t, e, n) {},
        "94cf": function(t, e, n) {
            "use strict";
            var a = function() {
                    var t = this,
                        e = t.$createElement,
                        n = t._self._c || e;
                    return n("div", {
                        staticClass: "back-button",
                        on: {
                            click: t.onClick
                        }
                    }, [n("SvgIcon", {
                        staticClass: "arrow-icon",
                        attrs: {
                            icon: t.icons.SvgArrowLeft
                        }
                    }), n("span", {
                        staticClass: "item-name"
                    }, [t._v(t._s(t.t.t("global.back")))])], 1)
                },
                s = [],
                i = n("2b0e"),
                o = n("bee6"),
                c = n("d60e"),
                l = i["a"].extend({
                    components: {
                        SvgIcon: o["a"]
                    },
                    props: {
                        onClick: Function
                    },
                    computed: {
                        icons() {
                            return {
                                SvgArrowLeft: c["a"]
                            }
                        }
                    }
                }),
                r = l,
                u = (n("40f6"), n("2877")),
                d = Object(u["a"])(r, a, s, !1, null, "777ea3e0", null);
            e["a"] = d.exports
        },
        "9b35": function(t, e, n) {
            "use strict";
            n("cb97")
        },
        "9c4a": function(t, e, n) {
            "use strict";
            n("fce8")
        },
        a348: function(t, e, n) {
            "use strict";
            n("1aff")
        },
        a378: function(t, e, n) {
            "use strict";
            e["a"] = {
                id: "arrow-right-usage",
                viewBox: "0 0 17 12",
                url: n.p + "svgs/icons.993d4e35.svg#arrow-right",
                toString: function() {
                    return this.url
                }
            }
        },
        c2b7: function(t, e, n) {},
        c4d7: function(t, e, n) {
            "use strict";
            n("08da")
        },
        cb97: function(t, e, n) {},
        e446: function(t, e, n) {
            "use strict";
            n("c2b7")
        },
        fce8: function(t, e, n) {}
    }
]);
//# sourceMappingURL=chunk-03daa8f7-legacy.62b67810.js.map