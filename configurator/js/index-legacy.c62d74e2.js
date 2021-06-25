(function(t) {
    function e(e) {
        for (var a, i, o = e[0], c = e[1], l = e[2], _ = 0, E = []; _ < o.length; _++) i = o[_], Object.prototype.hasOwnProperty.call(s, i) && s[i] && E.push(s[i][0]), s[i] = 0;
        for (a in c) Object.prototype.hasOwnProperty.call(c, a) && (t[a] = c[a]);
        d && d(e);
        while (E.length) E.shift()();
        return r.push.apply(r, l || []), n()
    }

    function n() {
        for (var t, e = 0; e < r.length; e++) {
            for (var n = r[e], a = !0, i = 1; i < n.length; i++) {
                var o = n[i];
                0 !== s[o] && (a = !1)
            }
            a && (r.splice(e--, 1), t = c(c.s = n[0]))
        }
        return t
    }
    var a = {},
        i = {
            index: 0
        },
        s = {
            index: 0
        },
        r = [];

    function o(t) {
        return c.p + "js/" + ({} [t] || t) + "-legacy." + {
            "chunk-0c957810": "61da2e5b",
            "chunk-11305649": "fcaf1e5a",
            "chunk-21063757": "ef7e81b4",
            "chunk-03daa8f7": "62b67810",
            "chunk-1fd0cc7e": "7d59a653",
            "chunk-2a38272e": "4b86b140",
            "chunk-2d0c1cce": "c7e3c9e9",
            "chunk-2d22c2e4": "11c1a807",
            "chunk-3336d37a": "800a0c98",
            "chunk-4dbfc12e": "abe8d390",
            "chunk-5c4e2ae8": "3e06e899",
            "chunk-6a0c8e8c": "835f1abc",
            "chunk-6bdf8bd2": "b8050b23",
            "chunk-71180739": "01f16df9",
            "chunk-75046c5d": "360e03b4",
            "chunk-a474db44": "80579264",
            "chunk-2d0af61d": "08bd848e",
            "chunk-d1e8c618": "968ec51f",
            "chunk-3cdbd03f": "bfa0a09e",
            "chunk-5b403032": "ce96c162",
            "chunk-62cb4e26": "a3126ec0",
            "chunk-66be89ce": "163b9cb6",
            "chunk-6d36a2bc": "380b568f",
            "chunk-2d0cb76d": "bf883299",
            "chunk-6b2d5f05": "b6cb8148",
            "chunk-3b09de03": "5108a8b8",
            "chunk-61de2ad2": "da1cf5c1",
            "chunk-6fbbdaa2": "7496bd62",
            "chunk-75827ee6": "ebc163b7",
            "chunk-08ca9b08": "8c1d5c26",
            "chunk-2d216214": "3fd22800",
            "chunk-2d216257": "1eff1fbf",
            "chunk-84c712ee": "d164d873",
            "chunk-2d0b16c2": "d4cf3d8a",
            "chunk-2d0b23c2": "822e0f62",
            "chunk-2d0e55df": "fd189fa9",
            "chunk-2d0e9222": "90a0532c",
            "chunk-2d208aa7": "3ce30e51"
        } [t] + ".js"
    }

    function c(e) {
        if (a[e]) return a[e].exports;
        var n = a[e] = {
            i: e,
            l: !1,
            exports: {}
        };
        return t[e].call(n.exports, n, n.exports, c), n.l = !0, n.exports
    }
    c.e = function(t) {
        var e = [],
            n = {
                "chunk-0c957810": 1,
                "chunk-11305649": 1,
                "chunk-21063757": 1,
                "chunk-03daa8f7": 1,
                "chunk-1fd0cc7e": 1,
                "chunk-2a38272e": 1,
                "chunk-3336d37a": 1,
                "chunk-4dbfc12e": 1,
                "chunk-5c4e2ae8": 1,
                "chunk-6a0c8e8c": 1,
                "chunk-6bdf8bd2": 1,
                "chunk-71180739": 1,
                "chunk-75046c5d": 1,
                "chunk-6b2d5f05": 1,
                "chunk-3b09de03": 1,
                "chunk-61de2ad2": 1,
                "chunk-6fbbdaa2": 1,
                "chunk-75827ee6": 1
            };
        i[t] ? e.push(i[t]) : 0 !== i[t] && n[t] && e.push(i[t] = new Promise((function(e, n) {
            for (var a = "css/" + ({} [t] || t) + "." + {
                    "chunk-0c957810": "ab22c084",
                    "chunk-11305649": "a4578a91",
                    "chunk-21063757": "8d603e7c",
                    "chunk-03daa8f7": "32ebcb57",
                    "chunk-1fd0cc7e": "1422246b",
                    "chunk-2a38272e": "c87f331d",
                    "chunk-2d0c1cce": "31d6cfe0",
                    "chunk-2d22c2e4": "31d6cfe0",
                    "chunk-3336d37a": "eb67a703",
                    "chunk-4dbfc12e": "9b1852aa",
                    "chunk-5c4e2ae8": "a087707f",
                    "chunk-6a0c8e8c": "e640bc56",
                    "chunk-6bdf8bd2": "0275a644",
                    "chunk-71180739": "8e951474",
                    "chunk-75046c5d": "b2421eda",
                    "chunk-a474db44": "31d6cfe0",
                    "chunk-2d0af61d": "31d6cfe0",
                    "chunk-d1e8c618": "31d6cfe0",
                    "chunk-3cdbd03f": "31d6cfe0",
                    "chunk-5b403032": "31d6cfe0",
                    "chunk-62cb4e26": "31d6cfe0",
                    "chunk-66be89ce": "31d6cfe0",
                    "chunk-6d36a2bc": "31d6cfe0",
                    "chunk-2d0cb76d": "31d6cfe0",
                    "chunk-6b2d5f05": "62aa4bb8",
                    "chunk-3b09de03": "88dba543",
                    "chunk-61de2ad2": "b2421eda",
                    "chunk-6fbbdaa2": "ab9d4f22",
                    "chunk-75827ee6": "285d2e29",
                    "chunk-08ca9b08": "31d6cfe0",
                    "chunk-2d216214": "31d6cfe0",
                    "chunk-2d216257": "31d6cfe0",
                    "chunk-84c712ee": "31d6cfe0",
                    "chunk-2d0b16c2": "31d6cfe0",
                    "chunk-2d0b23c2": "31d6cfe0",
                    "chunk-2d0e55df": "31d6cfe0",
                    "chunk-2d0e9222": "31d6cfe0",
                    "chunk-2d208aa7": "31d6cfe0"
                } [t] + ".css", s = c.p + a, r = document.getElementsByTagName("link"), o = 0; o < r.length; o++) {
                var l = r[o],
                    _ = l.getAttribute("data-href") || l.getAttribute("href");
                if ("stylesheet" === l.rel && (_ === a || _ === s)) return e()
            }
            var E = document.getElementsByTagName("style");
            for (o = 0; o < E.length; o++) {
                l = E[o], _ = l.getAttribute("data-href");
                if (_ === a || _ === s) return e()
            }
            var d = document.createElement("link");
            d.rel = "stylesheet", d.type = "text/css", d.onload = e, d.onerror = function(e) {
                var a = e && e.target && e.target.src || s,
                    r = new Error("Loading CSS chunk " + t + " failed.\n(" + a + ")");
                r.code = "CSS_CHUNK_LOAD_FAILED", r.request = a, delete i[t], d.parentNode.removeChild(d), n(r)
            }, d.href = s;
            var u = document.getElementsByTagName("head")[0];
            u.appendChild(d)
        })).then((function() {
            i[t] = 0
        })));
        var a = s[t];
        if (0 !== a)
            if (a) e.push(a[2]);
            else {
                var r = new Promise((function(e, n) {
                    a = s[t] = [e, n]
                }));
                e.push(a[2] = r);
                var l, _ = document.createElement("script");
                _.charset = "utf-8", _.timeout = 120, c.nc && _.setAttribute("nonce", c.nc), _.src = o(t);
                var E = new Error;
                l = function(e) {
                    _.onerror = _.onload = null, clearTimeout(d);
                    var n = s[t];
                    if (0 !== n) {
                        if (n) {
                            var a = e && ("load" === e.type ? "missing" : e.type),
                                i = e && e.target && e.target.src;
                            E.message = "Loading chunk " + t + " failed.\n(" + a + ": " + i + ")", E.name = "ChunkLoadError", E.type = a, E.request = i, n[1](E)
                        }
                        s[t] = void 0
                    }
                };
                var d = setTimeout((function() {
                    l({
                        type: "timeout",
                        target: _
                    })
                }), 12e4);
                _.onerror = _.onload = l, document.head.appendChild(_)
            } return Promise.all(e)
    }, c.m = t, c.c = a, c.d = function(t, e, n) {
        c.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: n
        })
    }, c.r = function(t) {
        "undefined" !== typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, c.t = function(t, e) {
        if (1 & e && (t = c(t)), 8 & e) return t;
        if (4 & e && "object" === typeof t && t && t.__esModule) return t;
        var n = Object.create(null);
        if (c.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t)
            for (var a in t) c.d(n, a, function(e) {
                return t[e]
            }.bind(null, a));
        return n
    }, c.n = function(t) {
        var e = t && t.__esModule ? function() {
            return t["default"]
        } : function() {
            return t
        };
        return c.d(e, "a", e), e
    }, c.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, c.p = "", c.oe = function(t) {
        throw console.error(t), t
    };
    var l = window["webpackJsonp"] = window["webpackJsonp"] || [],
        _ = l.push.bind(l);
    l.push = e, l = l.slice();
    for (var E = 0; E < l.length; E++) e(l[E]);
    var d = _;
    r.push([0, "chunk-vendors", "chunk-common"]), n()
})({
    0: function(t, e, n) {
        t.exports = n("cd49")
    },
    "06d2": function(t, e, n) {
        "use strict";
        n.d(e, "c", (function() {
            return l
        })), n.d(e, "a", (function() {
            return _
        })), n.d(e, "b", (function() {
            return E
        })), n.d(e, "d", (function() {
            return S
        }));
        var a = n("2b0e"),
            i = n("2f62"),
            s = n("3c8b"),
            r = n("5f3f"),
            o = n("45c3");
        a["a"].use(i["a"]);
        const c = !1;
        var l, _, E;
        (function(t) {
            t["SET_SELECTION_PAYLOAD"] = "PLANNER_UI_STATE_setSelectionPayload", t["SET_SELECTION"] = "PLANNER_UI_STATE_setSelection", t["SET_IS_LANDSCAPE"] = "PLANNER_UI_STATE_setIsLandscape", t["SET_INTERACTIONS_EXPANDED"] = "PLANNER_UI_STATE_setInteractionsExpanded", t["SET_IS_FULLSCREEN"] = "PLANNER_UI_STATE_setIsFullscreen", t["SET_IS_DESKTOP"] = "PLANNER_UI_STATE_setIsDesktop", t["SET_LAST_REGULAR_VIEW_MODE"] = "PLANNER_UI_STATE_SET_LAST_REGULAR_VIEW_MODE", t["SET_SHOW_CATALOG"] = "PLANNER_UI_STATE_SET_SHOW_CATALOG", t["SET_CATALOG_ROOT_TAG"] = "PLANNER_UI_STATE_SET_CATALOG_ROOT_TAG"
        })(l || (l = {})),
        function(t) {
            t["SELECT_VIEW_MODE"] = "PLANNER_UI_STATE_SELECT_VIEW_MODE", t["SET_INTERACTIONS_EXPANDED"] = "PLANNER_UI_STATE_SET_INTERACTIONS_EXPANDED"
        }(_ || (_ = {})),
        function(t) {
            t["CATALOG_ROOT_TAG"] = "PLANNER_UI_STATE_CATALOG_ROOT_TAG"
        }(E || (E = {}));
        const d = {
                selection: null,
                selectionPayload: null,
                isFullscreen: !1,
                isLandscape: !1,
                interactionsExpanded: !0,
                isDesktop: !1,
                lastRegularViewMode: null,
                wasDesktopBefore: !1,
                showCatalog: !1,
                catalogTags: null,
                sidebar: Object(o["d"])()
            },
            u = {
                [E.CATALOG_ROOT_TAG](t) {
                    const e = t.catalogTags;
                    return e ? [...Object(r["f"])(e)] : []
                }
            },
            h = {
                [_.SELECT_VIEW_MODE]({
                    commit: t,
                    state: e,
                    getters: n,
                    rootState: a
                }, i) {
                    const r = null === e.isDesktop,
                        o = e.lastRegularViewMode !== i;
                    t(l.SET_IS_DESKTOP, i), r && a.commonUiState.isInIframe && !i && t(l.SET_IS_FULLSCREEN, !0);
                    const c = n[s["c"].USE_REGULAR_LAYOUT];
                    c && t(l.SET_LAST_REGULAR_VIEW_MODE, i), (r || o && c) && (!e.isDesktop && e.sidebar.showsDetails ? t(l.SET_INTERACTIONS_EXPANDED, !0) : t(l.SET_INTERACTIONS_EXPANDED, e.isDesktop))
                },
                [_.SET_INTERACTIONS_EXPANDED]({
                    commit: t,
                    state: e
                }, n) {
                    t(l.SET_INTERACTIONS_EXPANDED, n), e.interactionsExpanded || e.isDesktop || t(o["a"].ELEMENT_EXPANDED, {
                        state: e.sidebar,
                        value: !1
                    })
                }
            },
            T = {
                [l.SET_SELECTION_PAYLOAD](t, e) {
                    t.selectionPayload = e
                },
                [l.SET_SELECTION](t, e) {
                    t.selection = e
                },
                [l.SET_IS_LANDSCAPE](t, e) {
                    t.isLandscape = e
                },
                [l.SET_INTERACTIONS_EXPANDED](t, e) {
                    t.interactionsExpanded = e
                },
                [l.SET_IS_DESKTOP](t, e) {
                    t.wasDesktopBefore = null !== t.isDesktop && t.isDesktop, t.isDesktop = e
                },
                [l.SET_LAST_REGULAR_VIEW_MODE](t, e) {
                    t.lastRegularViewMode = e
                },
                [l.SET_SHOW_CATALOG](t, e) {
                    t.showCatalog = e
                },
                [l.SET_CATALOG_ROOT_TAG](t, e) {
                    t.catalogTags = e
                }
            },
            S = {
                namespaced: c,
                state: d,
                getters: u,
                actions: h,
                mutations: T
            }
    },
    "11aa": function(t, e, n) {
        "use strict";
        n.d(e, "c", (function() {
            return r
        })), n.d(e, "a", (function() {
            return o
        })), n.d(e, "b", (function() {
            return c
        })), n.d(e, "d", (function() {
            return u
        }));
        var a = n("2b0e"),
            i = n("2f62");
        a["a"].use(i["a"]);
        const s = !1;
        var r, o, c;
        (function(t) {
            t["SET_LABEL"] = "setLabel", t["SET_COMPONENT_HAS_CHILDREN"] = "setComponentHasChildren", t["SET_CATALOG_LABEL"] = "SET_CATALOG_LABEL", t["SET_INITIAL_HASH"] = "SET_INITIAL_HASH", t["SET_CURRENT_HASH"] = "SET_CURRENT_HASH"
        })(r || (r = {})),
        function(t) {
            t["SET_LABEL"] = "setLabel", t["SET_COMPONENT_HAS_CHILDREN"] = "setComponentHasChildren", t["UPDATE_HASH"] = "UPDATE_HASH"
        }(o || (o = {})),
        function(t) {
            t["HAS_CONFIGURATION_CHANGE"] = "HAS_CONFIGURATION_CHANGE"
        }(c || (c = {}));
        const l = {
                label: "",
                catalogLabel: null,
                componentHasChildren: !1,
                initialHash: null,
                currentHash: null
            },
            _ = {
                safeLabel(t) {
                    const e = t.label || "";
                    return e
                },
                [c.HAS_CONFIGURATION_CHANGE](t) {
                    return t.initialHash !== t.currentHash
                }
            },
            E = {
                [o.UPDATE_HASH]({
                    commit: t,
                    state: e
                }, n) {
                    e.initialHash || t(r.SET_INITIAL_HASH, n), t(r.SET_CURRENT_HASH, n)
                }
            },
            d = {
                [r.SET_LABEL](t, e) {
                    t.label = e
                },
                [r.SET_CATALOG_LABEL](t, e) {
                    t.catalogLabel = e
                },
                [r.SET_COMPONENT_HAS_CHILDREN](t, e) {
                    t.componentHasChildren = e
                },
                [r.SET_INITIAL_HASH](t, e) {
                    t.initialHash = e
                },
                [r.SET_CURRENT_HASH](t, e) {
                    t.currentHash = e
                }
            },
            u = {
                namespaced: s,
                state: l,
                getters: _,
                actions: E,
                mutations: d
            }
    },
    "36e4": function(t, e, n) {},
    "3c8b": function(t, e, n) {
        "use strict";
        n.d(e, "a", (function() {
            return d
        })), n.d(e, "d", (function() {
            return u
        })), n.d(e, "b", (function() {
            return T
        })), n.d(e, "c", (function() {
            return S
        })), n.d(e, "e", (function() {
            return f
        }));
        var a = n("2b0e"),
            i = n("2f62"),
            s = n("9304"),
            r = n("5f3f"),
            o = n("3cc4"),
            c = n("5256"),
            l = n("11aa"),
            _ = n("45c3");
        a["a"].use(i["a"]);
        const E = !1;
        var d, u, h, T, S;
        (function(t) {
            t[t["AR"] = 0] = "AR", t[t["PARTLIST"] = 1] = "PARTLIST", t[t["MULTISELECT"] = 2] = "MULTISELECT", t[t["DIMENSIONS"] = 3] = "DIMENSIONS", t[t["FULLSCREEN"] = 4] = "FULLSCREEN", t[t["RESET_CAMERA"] = 5] = "RESET_CAMERA", t[t["RENDER_IMAGE"] = 6] = "RENDER_IMAGE"
        })(d || (d = {})),
        function(t) {
            t["SET_SELECTED_GROUP"] = "setSelectedGroup", t["SET_IS_DESKTOP"] = "setIsDesktop", t["SET_ACTION_SELECTED"] = "setActionSelected", t["SET_ACTION_DESELECTED"] = "setActionDeselected", t["SET_INTERACTIONS_EXPANDED"] = "setInteractionsExpanded", t["SET_IS_LANDSCAPE"] = "setIsLandscape", t["SET_IS_PART_LIST_SHOWN"] = "SET_IS_PART_LIST_SHOWN", t["SET_LAST_REGULAR_VIEW_MODE"] = "SET_LAST_REGULAR_VIEW_MODE", t["SET_IS_FULLSCREEN"] = "setIsFullscreen", t["SHOW_ONLY_ADDONS"] = "SHOW_ONLY_ADDONS", t["SHOW_ALL_COLLECTION_VIEW_ELEMENTS"] = "SHOW_ALL_COLLECTION_VIEW_ELEMENTS", t["SET_ACTIVE_ADDON"] = "SET_ACTIVE_ADDON", t["SET_CURRENT_SELECTION"] = "SET_CURRENT_SELECTION", t["SET_OVERLAY_STATE"] = "SET_OVERLAY_STATE", t["CLOSE_ALL_OVERLAYS"] = "CLOSE_ALL_OVERLAYS", t["SET_INIT_DATA"] = "SET_INIT_DATA", t["SET_IS_EXPANDED_FOR_CONFIGURE"] = "SET_IS_EXPANDED_FOR_CONFIGURE", t["SET_IS_LOADING_IN_PROGRESS"] = "SET_IS_LOADING_IN_PROGRESS", t["SET_CURRENT_VARIANTS"] = "SET_CURRENT_VARIANTS", t["SET_SHOW_VARIANTS"] = "SET_SHOW_VARIANTS", t["SET_EMAIL"] = "SET_EMAIL"
        }(u || (u = {})),
        function(t) {
            t["SET_IS_VIEWER"] = "SET_IS_VIEWER", t["SET_IS_CONFIGURATOR"] = "SET_IS_CONFIGURATOR", t["SET_IS_PLANNER"] = "SET_IS_PLANNER"
        }(h || (h = {})),
        function(t) {
            t["SELECT_GROUP"] = "SELECT_GROUP", t["SELECT_VIEW_MODE"] = "SELECT_VIEW_MODE", t["SET_INTERACTIONS_EXPANDED"] = "SET_INTERACTIONS_EXPANDED", t["SELECTION_CHANGE"] = "SELECTION_CHANGE", t["RESET_COLLECTION_VIEW"] = "RESET_COLLECTION_VIEW", t["START_CONFIGURING"] = "START_CONFIGURING", t["PAUSE_CONFIGURING"] = "PAUSE_CONFIGURING", t["USE_VIEWER"] = "USE_VIEWER", t["USE_PLANNER"] = "USE_PLANNER", t["USE_CONFIGURATOR"] = "USE_CONFIGURATOR"
        }(T || (T = {})),
        function(t) {
            t["USE_REGULAR_LAYOUT"] = "USE_REGULAR_LAYOUT", t["COLLECTION_VIEW_ELEMENTS"] = "COLLECTION_VIEW_ELEMENTS", t["COLLECTION_VIEW_ADDON_ELEMENTS"] = "COLLECTION_VIEW_ADDON_ELEMENTS", t["COLLECTION_VIEW_VARIANTS"] = "COLLECTION_VIEW_VARIANTS", t["SHOW_BACK_TO_WEBSITE"] = "SHOW_BACK_TO_WEBSITE"
        }(S || (S = {}));
        const I = {
                selectedGroup: null,
                interactionsExpanded: !1,
                isDesktop: !1,
                wasDesktopBefore: !1,
                isLandscape: !1,
                overlays: o["b"],
                lastRegularViewMode: null,
                selectedActions: [],
                isFullscreen: !1,
                onlyShowAddons: !1,
                activeAddon: null,
                currentSelection: null,
                initData: {
                    configuratorId: "testConfigurator"
                },
                isExpandedForConfigure: !1,
                isLoadingInProgress: !0,
                currentVariants: null,
                showVariants: !1,
                isConfigurator: !1,
                isViewer: !1,
                isPlanner: !1,
                email: null,
                sidebar: Object(_["d"])()
            },
            A = {
                [S.USE_REGULAR_LAYOUT](t) {
                    var e;
                    return t.isDesktop || !t.isLandscape || !!(null === (e = t.initData) || void 0 === e ? void 0 : e.mobileLandscape)
                },
                [S.COLLECTION_VIEW_ELEMENTS](t, e, {
                    coreData: n
                }) {
                    var a;
                    const {
                        parameters: i,
                        addons: s
                    } = n;
                    if (!i.length && !s.length) return [];
                    const o = i.map(t => ({
                        label: t.label,
                        key: "parameter_" + t.key,
                        payload: t,
                        type: "parameter"
                    }));
                    return Object(r["a"])(s) ? [...o, ...Object(r["b"])(s, null === (a = t.selectedGroup) || void 0 === a ? void 0 : a.key)] : [...o]
                },
                [S.COLLECTION_VIEW_ADDON_ELEMENTS](t, e, {
                    coreData: n
                }) {
                    const {
                        addons: a
                    } = n;
                    return a.length ? [...Object(r["e"])(a)] : []
                },
                [S.SHOW_BACK_TO_WEBSITE](t, e, {
                    commonUiState: n
                }) {
                    const {
                        isFullscreen: a,
                        isExpandedForConfigure: i
                    } = t, {
                        isInIframe: s,
                        isViewOnly: r
                    } = n;
                    return s && !a && !r && i
                },
                [S.COLLECTION_VIEW_VARIANTS](t) {
                    const e = t.currentVariants;
                    return e ? [...Object(r["g"])(e)] : []
                }
            },
            p = {
                [T.SELECT_GROUP]({
                    commit: t,
                    dispatch: e
                }, n) {
                    t(u.SET_SELECTED_GROUP, n), n && t(s["c"].UPDATE_PARAMETERS, n.parameters), e(T.RESET_COLLECTION_VIEW)
                },
                [T.SELECT_VIEW_MODE]({
                    commit: t,
                    state: e,
                    rootState: n,
                    getters: a,
                    dispatch: i
                }, s) {
                    var r;
                    const o = null === e.isDesktop,
                        c = e.lastRegularViewMode !== s;
                    t(u.SET_IS_DESKTOP, s), o && n.commonUiState.isInIframe && !s && t(u.SET_IS_FULLSCREEN, !0);
                    const l = a[S.USE_REGULAR_LAYOUT];
                    l && t(u.SET_LAST_REGULAR_VIEW_MODE, s), (o || c && l) && (!e.isDesktop && e.sidebar.showsDetails ? t(u.SET_INTERACTIONS_EXPANDED, !0) : t(u.SET_INTERACTIONS_EXPANDED, e.isDesktop), !e.isDesktop && e.interactionsExpanded), c && n.commonUiState.isInIframe && (e.isDesktop || e.isExpandedForConfigure || (null === (r = e.initData) || void 0 === r ? void 0 : r.mobileLandscape) ? i(T.START_CONFIGURING) : i(T.PAUSE_CONFIGURING))
                },
                [T.SET_INTERACTIONS_EXPANDED]({
                    commit: t,
                    state: e
                }, n) {
                    t(u.SET_INTERACTIONS_EXPANDED, n), e.interactionsExpanded || e.isDesktop || t(_["a"].ELEMENT_EXPANDED, {
                        state: e.sidebar,
                        value: !1
                    })
                },
                [T.SELECTION_CHANGE]({
                    dispatch: t
                }) {
                    t(T.RESET_COLLECTION_VIEW)
                },
                [T.RESET_COLLECTION_VIEW]({
                    commit: t,
                    state: e
                }) {
                    t(_["a"].SET_SELECTED_ELEMENT, {
                        state: e.sidebar,
                        value: null
                    }), t(u.SHOW_ALL_COLLECTION_VIEW_ELEMENTS), t(_["a"].ELEMENT_EXPANDED, {
                        state: e.sidebar,
                        value: !1
                    }), t(u.SET_SHOW_VARIANTS, !1), e.isDesktop || t(u.SET_INTERACTIONS_EXPANDED, !1)
                },
                [T.START_CONFIGURING]({
                    commit: t,
                    rootState: e
                }) {
                    e.commonUiState.isViewOnly && (t(u.SET_IS_FULLSCREEN, !1), t(c["a"].SET_IS_VIEW_ONLY, !1))
                },
                [T.PAUSE_CONFIGURING]({
                    commit: t
                }) {
                    t(u.SET_IS_FULLSCREEN, !0), t(c["a"].SET_IS_VIEW_ONLY, !0), t(u.SET_IS_EXPANDED_FOR_CONFIGURE, !1)
                },
                [T.USE_CONFIGURATOR]({
                    commit: t
                }) {
                    t(h.SET_IS_CONFIGURATOR, !0), t(h.SET_IS_VIEWER, !1), t(h.SET_IS_PLANNER, !1)
                },
                [T.USE_VIEWER]({
                    commit: t
                }) {
                    t(h.SET_IS_CONFIGURATOR, !1), t(h.SET_IS_VIEWER, !0), t(h.SET_IS_PLANNER, !1)
                },
                [T.USE_PLANNER]({
                    commit: t
                }) {
                    t(h.SET_IS_CONFIGURATOR, !1), t(h.SET_IS_VIEWER, !1), t(h.SET_IS_PLANNER, !0), t(l["c"].SET_INITIAL_HASH, null)
                }
            },
            C = {
                [u.SET_SELECTED_GROUP](t, e) {
                    t.selectedGroup = e
                },
                [u.SET_IS_DESKTOP](t, e) {
                    t.wasDesktopBefore = null !== t.isDesktop && t.isDesktop, t.isDesktop = e
                },
                [u.SET_ACTION_SELECTED](t, e) {
                    t.selectedActions.includes(e) || t.selectedActions.push(e)
                },
                [u.SET_ACTION_DESELECTED](t, e) {
                    t.selectedActions.includes(e) && t.selectedActions.splice(t.selectedActions.indexOf(e), 1)
                },
                [u.SET_INTERACTIONS_EXPANDED](t, e) {
                    t.interactionsExpanded = e
                },
                [u.SET_IS_LANDSCAPE](t, e) {
                    t.isLandscape = e
                },
                [u.SET_OVERLAY_STATE](t, {
                    overlay: e,
                    open: n,
                    payload: a = null
                }) {
                    t.overlays = {
                        ...o["b"]
                    }, t.overlays[e] = {
                        open: n,
                        payload: a
                    }
                },
                [u.CLOSE_ALL_OVERLAYS](t) {
                    t.overlays = {
                        ...o["b"]
                    }
                },
                [u.SET_LAST_REGULAR_VIEW_MODE](t, e) {
                    t.lastRegularViewMode = e
                },
                [u.SET_IS_FULLSCREEN](t, e) {
                    t.isFullscreen = e
                },
                [u.SHOW_ONLY_ADDONS](t) {
                    t.onlyShowAddons = !0
                },
                [u.SHOW_ALL_COLLECTION_VIEW_ELEMENTS](t) {
                    t.onlyShowAddons = !1
                },
                [u.SET_ACTIVE_ADDON](t, e) {
                    t.activeAddon = e
                },
                [u.SET_CURRENT_SELECTION](t, e) {
                    t.currentSelection = e
                },
                [u.SET_INIT_DATA](t, e) {
                    t.initData = e
                },
                [u.SET_IS_EXPANDED_FOR_CONFIGURE](t, e) {
                    t.isExpandedForConfigure = e
                },
                [u.SET_IS_LOADING_IN_PROGRESS](t, e) {
                    t.isLoadingInProgress = e
                },
                [u.SET_CURRENT_VARIANTS](t, e) {
                    t.currentVariants = e
                },
                [u.SET_SHOW_VARIANTS](t, e) {
                    t.showVariants = e
                },
                [h.SET_IS_CONFIGURATOR](t, e) {
                    t.isConfigurator = e
                },
                [h.SET_IS_VIEWER](t, e) {
                    t.isViewer = e
                },
                [h.SET_IS_PLANNER](t, e) {
                    t.isPlanner = e
                },
                [u.SET_EMAIL](t, e) {
                    t.email = e
                }
            },
            f = {
                namespaced: E,
                state: I,
                getters: A,
                actions: p,
                mutations: C
            }
    },
    "3cc4": function(t, e, n) {
        "use strict";
        var a;
        n.d(e, "a", (function() {
                return a
            })), n.d(e, "b", (function() {
                return i
            })),
            function(t) {
                t[t["PART_LIST"] = 0] = "PART_LIST", t[t["NO_DOCKING"] = 1] = "NO_DOCKING", t[t["SAVE_DRAFT"] = 2] = "SAVE_DRAFT", t[t["VARIANT_WARNING"] = 3] = "VARIANT_WARNING", t[t["OPEN_AR"] = 4] = "OPEN_AR", t[t["EXPORT_3D"] = 5] = "EXPORT_3D", t[t["ELEMENT_DISABLED"] = 6] = "ELEMENT_DISABLED"
            }(a || (a = {}));
        const i = {
            [a.PART_LIST]: {
                open: !1
            },
            [a.NO_DOCKING]: {
                open: !1
            },
            [a.SAVE_DRAFT]: {
                open: !1
            },
            [a.VARIANT_WARNING]: {
                open: !1
            },
            [a.OPEN_AR]: {
                open: !1
            },
            [a.EXPORT_3D]: {
                open: !1
            },
            [a.ELEMENT_DISABLED]: {
                open: !1
            }
        }
    },
    "45c3": function(t, e, n) {
        "use strict";
        n.d(e, "d", (function() {
            return r
        })), n.d(e, "a", (function() {
            return o
        })), n.d(e, "b", (function() {
            return c
        })), n.d(e, "c", (function() {
            return d
        }));
        var a = n("2b0e"),
            i = n("2f62");
        a["a"].use(i["a"]);
        const s = !1,
            r = () => ({
                selected: null,
                showsDetails: !1,
                gridView: {
                    filter: null,
                    showAllAsList: !1,
                    search: null,
                    userInitiatedSearch: !1
                }
            });
        var o, c;
        (function(t) {
            t["ELEMENT_EXPANDED"] = "CV_ELEMENT_EXPANDED", t["SET_SELECTED_ELEMENT"] = "CV_SET_SELECTED_ELEMENT"
        })(o || (o = {})),
        function(t) {
            t["SET_SEARCH"] = "GV_SET_SEARCH", t["TOGGLE_LIST_DISPLAY_TYPE"] = "GV_TOGGLE_LIST_DISPLAY_TYPE", t["SET_FILTER"] = "GV_SET_FILTER", t["SET_USER_INITIATED_SEARCH"] = "GV_SET_USER_INITIATED_SEARCH"
        }(c || (c = {}));
        const l = {},
            _ = {},
            E = {
                [o.ELEMENT_EXPANDED](t, {
                    state: e,
                    value: n
                }) {
                    e.showsDetails = n
                },
                [o.SET_SELECTED_ELEMENT](t, {
                    state: e,
                    value: n
                }) {
                    e.selected = n
                },
                [c.SET_SEARCH](t, {
                    state: e,
                    value: n
                }) {
                    n = "" === n || "string" !== typeof n ? null : n.toLowerCase(), e.search = n
                },
                [c.TOGGLE_LIST_DISPLAY_TYPE](t, {
                    state: e
                }) {
                    e.showAllAsList = !e.showAllAsList
                },
                [c.SET_FILTER](t, {
                    state: e,
                    value: n
                }) {
                    e.filter = n
                },
                [c.SET_USER_INITIATED_SEARCH](t, {
                    state: e,
                    value: n
                }) {
                    e.userInitiatedSearch = n
                }
            },
            d = {
                namespaced: s,
                state: r(),
                getters: _,
                actions: l,
                mutations: E
            }
    },
    5256: function(t, e, n) {
        "use strict";
        n.d(e, "a", (function() {
            return o
        })), n.d(e, "b", (function() {
            return E
        }));
        var a = n("2b0e"),
            i = n("2f62");
        a["a"].use(i["a"]);
        const s = !1,
            r = {
                isInIframe: !1,
                isViewOnly: !1,
                lastRequestedId: null
            };
        var o;
        (function(t) {
            t["SET_IS_IN_IFRAME"] = "SET_IS_IN_IFRAME", t["SET_IS_VIEW_ONLY"] = "SET_IS_VIEW_ONLY", t["SET_LAST_REQUESTED_ID"] = "SET_LAST_REQUESTED_ID"
        })(o || (o = {}));
        const c = {},
            l = {},
            _ = {
                [o.SET_IS_IN_IFRAME](t, e) {
                    t.isInIframe = e
                },
                [o.SET_IS_VIEW_ONLY](t, e) {
                    t.isViewOnly = e
                },
                [o.SET_LAST_REQUESTED_ID](t, e) {
                    t.lastRequestedId = e
                }
            },
            E = {
                namespaced: s,
                state: r,
                getters: c,
                actions: l,
                mutations: _
            }
    },
    "5c0b": function(t, e, n) {
        "use strict";
        n("9c0c")
    },
    "5f3f": function(t, e, n) {
        "use strict";
        n.d(e, "c", (function() {
            return a
        })), n.d(e, "e", (function() {
            return i
        })), n.d(e, "g", (function() {
            return o
        })), n.d(e, "f", (function() {
            return c
        })), n.d(e, "b", (function() {
            return l
        })), n.d(e, "a", (function() {
            return _
        })), n.d(e, "d", (function() {
            return d
        })), n.d(e, "h", (function() {
            return u
        }));
        const a = (t = []) => t.reduce((t, e) => (t.push(...e.materials), t), []),
            i = t => t.map(t => ({
                label: t.label,
                key: "addon_" + t.id,
                payload: t,
                type: "addon"
            })),
            s = (t, e) => ({
                label: t.label || null,
                key: e + "_" + t.id,
                payload: t,
                type: e
            }),
            r = (t, e) => t.items && t.items.length ? [s(t, e)] : [],
            o = t => r(t, "variant"),
            c = t => t.reduce((t, e) => (t.push(s(e, "object")), t), []),
            l = (t, e) => {
                if (!e) return [];
                const n = t.map(t => {
                    const n = {
                        ...t
                    };
                    return n.possibleChildren = n.possibleChildren.filter(t => t.group === e), n
                }).filter(t => t.possibleChildren.length > 0);
                return i(n)
            },
            _ = t => {
                if (!t.length) return !1;
                for (const e of t)
                    for (const t of e.possibleChildren)
                        if (t.group) return !0;
                return !1
            },
            E = t => {
                if (!t || "string" !== typeof t) return;
                const e = ":";
                return t.split(e).slice(0, 2).join(e)
            },
            d = async (t, e, n = {}) => {
                const a = E(e);
                if (a)
                    for (const i in n)
                        if (i === a) {
                            const e = n[i],
                                a = await t.getTagById(e, {
                                    include: ["items"]
                                }),
                                s = await t.getAdditionalContentsOf(a.items),
                                r = new Map;
                            return s.forEach(t => {
                                6 === t.type && r.set(t.itemId, t)
                            }), a.items.forEach(t => t.sketch = r.has(t.id) ? r.get(t.id).content : t.perspectiveImage), a
                        }
            }, u = t => t.filter(t => !!t.label).sort((t, e) => (t.sort ? t.sort : 0) - (e.sort ? e.sort : 0))
    },
    9224: function(t) {
        t.exports = JSON.parse('{"a":"1.5.0"}')
    },
    9304: function(t, e, n) {
        "use strict";
        n.d(e, "c", (function() {
            return o
        })), n.d(e, "a", (function() {
            return c
        })), n.d(e, "b", (function() {
            return l
        })), n.d(e, "d", (function() {
            return h
        }));
        var a = n("2b0e"),
            i = n("2f62"),
            s = n("c135");
        a["a"].use(i["a"]);
        const r = !1;
        var o, c, l;
        (function(t) {
            t["UPDATE_GROUPS"] = "updateGroups", t["UPDATE_PARAMETERS"] = "updateParameters", t["UPDATE_ADDONS"] = "updateAddons", t["UPDATE_PART_LIST"] = "UPDATE_PART_LIST", t["UPDATE_BOUNDS"] = "UPDATE_BOUNDS", t["UPDATE_CURRENCY"] = "UPDATE_CURRENCY", t["UPDATE_PRICE_VALUE"] = "UPDATE_PRICE_VALUE"
        })(o || (o = {})),
        function(t) {
            t["UPDATE_PRICE"] = "UPDATE_PRICE"
        }(c || (c = {})),
        function(t) {
            t["HAS_NON_GROUP_ADDONS"] = "hasNonGroupAddons", t["CURRENT_PRICE"] = "currentPrice"
        }(l || (l = {}));
        const _ = {
                groups: [],
                parameters: [],
                addons: [],
                partList: {
                    fullList: [],
                    originPart: {},
                    perMainComponent: []
                },
                bounds: null,
                currencySymbol: "",
                price: null
            },
            E = {
                [l.CURRENT_PRICE](t) {
                    const {
                        currencySymbol: e,
                        price: n
                    } = t;
                    return Object(s["h"])(e, n)
                },
                [l.HAS_NON_GROUP_ADDONS](t, e, n) {
                    var a;
                    if (!t.addons || !t.addons.length) return !1;
                    for (const i of t.addons)
                        for (const t of i.possibleChildren)
                            if (!t.group) return (null === (a = n.uiState.initData) || void 0 === a ? void 0 : a.debug) && Object(s["v"])("possible child has no group", t), !0;
                    return !1
                }
            },
            d = {
                [o.UPDATE_GROUPS](t, e) {
                    t.groups = e
                },
                [o.UPDATE_PARAMETERS](t, e) {
                    t.parameters = e
                },
                [o.UPDATE_ADDONS](t, e) {
                    t.addons = e
                },
                [o.UPDATE_PART_LIST](t, e) {
                    t.partList = e
                },
                [o.UPDATE_BOUNDS](t, e) {
                    t.bounds = e
                },
                [o.UPDATE_CURRENCY](t, e) {
                    t.currencySymbol = e
                },
                [o.UPDATE_PRICE_VALUE](t, e) {
                    t.price = Object(s["t"])(e, 2)
                }
            },
            u = {
                [c.UPDATE_PRICE]({
                    commit: t
                }, {
                    currencySymbol: e,
                    price: n
                }) {
                    t(o.UPDATE_CURRENCY, e), t(o.UPDATE_PRICE_VALUE, n)
                }
            },
            h = {
                namespaced: r,
                state: _,
                getters: E,
                actions: u,
                mutations: d
            }
    },
    "9c0c": function(t, e, n) {
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
    ac49: function(t, e, n) {
        "use strict";
        n("36e4")
    },
    b36d: function(t, e, n) {
        "use strict";
        n("f8c9")
    },
    cd49: function(t, e, n) {
        "use strict";
        n.r(e);
        var a = n("2b0e"),
            i = function() {
                var t = this,
                    e = t.$createElement,
                    n = t._self._c || e;
                return n("div", {
                    staticClass: "h100 app-container"
                }, [t.showBack ? n("BackToWebsite") : t._e(), n("Overlays"), n("SceneContainer"), t.$store.state.uiState.isConfigurator ? n("ConfiguratorMain") : t._e(), t.$store.state.uiState.isPlanner ? n("PlannerMain") : t._e(), t.$store.state.uiState.isViewer ? n("ViewerMain", {
                    attrs: {
                        objectId: t.lastRequestedId
                    }
                }) : t._e(), t.showCookieBanner ? n("CookieBanner", {
                    attrs: {
                        onAccept: t.updateCookies
                    }
                }) : t._e()], 1)
            },
            s = [],
            r = n("3c8b"),
            o = n("c135"),
            c = n("bc4e"),
            l = n("5b7d"),
            _ = n("dfe6"),
            E = n("478b"),
            d = n("5a02"),
            u = function() {
                var t = this,
                    e = t.$createElement,
                    n = t._self._c || e;
                return n("div", {
                    staticClass: "overlays",
                    class: {
                        h100: t.hasOpenOverlay
                    }
                }, [t.$store.state.uiState.overlays[t.OVERLAYS.PART_LIST].open ? n("PartList", {
                    attrs: {
                        onClose: t.closeOverlays
                    }
                }) : t._e(), t.$store.state.uiState.overlays[t.OVERLAYS.NO_DOCKING].open ? n("NoDocking", {
                    attrs: {
                        onClose: t.closeOverlays
                    }
                }) : t._e(), t.$store.state.uiState.overlays[t.OVERLAYS.SAVE_DRAFT].open ? n("SaveDraft", {
                    attrs: {
                        onClose: t.closeOverlays
                    }
                }) : t._e(), t.$store.state.uiState.overlays[t.OVERLAYS.VARIANT_WARNING].open ? n("VariantWarning", {
                    attrs: {
                        payload: t.$store.state.uiState.overlays[t.OVERLAYS.VARIANT_WARNING].payload,
                        onClose: t.closeOverlays
                    }
                }) : t._e(), t.$store.state.uiState.overlays[t.OVERLAYS.OPEN_AR].open ? n("OpenAR", {
                    attrs: {
                        onClose: t.closeOverlays
                    }
                }) : t._e(), t.$store.state.uiState.overlays[t.OVERLAYS.EXPORT_3D].open ? n("Export3D", {
                    attrs: {
                        onClose: t.closeOverlays
                    }
                }) : t._e(), t.$store.state.uiState.overlays[t.OVERLAYS.ELEMENT_DISABLED].open ? n("ElementDisabled", {
                    attrs: {
                        onClose: t.closeOverlays
                    }
                }) : t._e()], 1)
            },
            h = [],
            T = n("3cc4"),
            S = a["a"].extend({
                components: {
                    OpenAR: () => n.e("chunk-5c4e2ae8").then(n.bind(null, "d3c9")),
                    Export3D: () => n.e("chunk-6a0c8e8c").then(n.bind(null, "20f3")),
                    PartList: () => n.e("chunk-2a38272e").then(n.bind(null, "4aa4")),
                    NoDocking: () => n.e("chunk-11305649").then(n.bind(null, "21a2")),
                    VariantWarning: () => n.e("chunk-6bdf8bd2").then(n.bind(null, "659f")),
                    SaveDraft: () => n.e("chunk-71180739").then(n.bind(null, "0645")),
                    ElementDisabled: () => n.e("chunk-0c957810").then(n.bind(null, "3f89"))
                },
                computed: {
                    OVERLAYS() {
                        return T["a"]
                    },
                    hasOpenOverlay() {
                        const {
                            overlays: t
                        } = this.$store.state.uiState;
                        for (const e in t)
                            if (t.hasOwnProperty(e) && t[e].open) return !0;
                        return !1
                    }
                },
                methods: {
                    closeOverlays() {
                        this.$store.commit(r["d"].CLOSE_ALL_OVERLAYS)
                    }
                }
            }),
            I = S,
            A = (n("ac49"), n("2877")),
            p = Object(A["a"])(I, u, h, !1, null, "5139ba2c", null),
            C = p.exports;
        const f = "initial-load",
            N = "regular-load",
            O = () => {
                performance.mark || (performance.mark = () => {}), performance.getEntriesByName || (performance.getEntriesByName = () => [{
                    startTime: 0
                }, {
                    startTime: Number.MAX_SAFE_INTEGER
                }]), performance.clearMarks || (performance.clearMarks = () => {})
            },
            g = () => {
                O(), performance.mark(N)
            },
            m = () => {
                O();
                const t = performance.getEntriesByName(f),
                    e = t.length > 0 ? f : N;
                performance.mark(e);
                const [n, a] = performance.getEntriesByName(e);
                n && a ? console.log("TIMING: ", a.startTime - n.startTime, e, "production") : console.warn("TIMING: ", "Can not calculate timing, please check why"), performance.clearMarks(f), performance.clearMarks(N)
            };
        var R = n("124d"),
            b = n("d7f7"),
            k = n("2f62"),
            L = n("11aa"),
            P = n("9304"),
            D = n("06d2"),
            v = n("5256"),
            w = n("45c3");
        a["a"].use(k["a"]);
        const y = {
                ...L["c"],
                ...P["c"],
                ...r["d"],
                ...D["c"],
                ...v["a"],
                ...w["a"]
            },
            U = (L["a"], P["a"], r["b"], {
                modules: {
                    coreState: L["d"],
                    coreData: P["d"],
                    uiState: r["e"],
                    plannerUiState: D["d"],
                    commonUiState: v["b"],
                    collectionViewUiStateHelper: w["c"]
                }
            });
        var G = new k["a"].Store(U);
        class V {
            constructor(t, e = null) {
                this._configurator = null, this._initWaiters = [], this._uiCallbacks = [], this._store = t, this._analytics = e
            }
            get api() {
                return this._configurator ? Promise.resolve(this._configurator) : new Promise(t => this._initWaiters.push(t))
            }
            async init(t, e, n) {
                const a = await t.getConfigurator(e, n),
                    i = a.getApi();
                return t.hasPlanner || await i.init(e), this.initConfigurator(i)
            }
            initConfigurator(t) {
                this._configurator || ($.clear(), this._configurator = t, this.addCallback("onConfigurationLabelChange", (t, e, n) => {
                    const a = n || e || t || "";
                    this._store.commit(y.SET_LABEL, a), t && a !== t && this._store.commit(L["c"].SET_CATALOG_LABEL, t)
                }), this.addCallback("onUpdateParameters", async t => {
                    await this._updateParameterGroups(t)
                }), this.addCallback("onUpdatePossibleChildren", async t => {
                    await this._updateAddons(t.map(t => (t.key = t.id, t)))
                }), this.addCallback("onPartListUpdate", (t, e) => {
                    console.log('YUO');
                    !this._store.state.coreState.componentHasChildren && this._store.state.uiState.selectedActions.includes(r["a"].PARTLIST) && this._store.commit(r["d"].SET_ACTION_SELECTED, r["a"].PARTLIST), this._store.commit(P["c"].UPDATE_PART_LIST, t), this._store.dispatch(L["a"].UPDATE_HASH, e)
                }), this.addCallback("onConfigurationReady", (t, e, n) => {
                    t && this._store.commit(P["c"].UPDATE_PART_LIST, t)
                }), this.addCallback("onBoundsUpdate", t => this._store.commit(P["c"].UPDATE_BOUNDS, t)), this.addCallback("onConfigurationHasChildren", t => this._store.commit(L["c"].SET_COMPONENT_HAS_CHILDREN, t)), this.addCallback("onClickOutside", () => {
                    this._configurator.disableMultiselect(), this._store.commit(r["d"].SET_ACTION_DESELECTED, r["a"].MULTISELECT)
                }), this.addCallback("onDimensionsVisibilityChange", t => {
                    t || this._store.commit(r["d"].SET_ACTION_DESELECTED, r["a"].DIMENSIONS)
                }), this.addCallback("onDockingsPreviewRemoved", () => this._store.commit(r["d"].SET_ACTIVE_ADDON, null)), this.addCallback("onNoDockingsAvailable", () => {
                    this._store.commit(r["d"].SET_ACTIVE_ADDON, null), this._store.commit(r["d"].SET_OVERLAY_STATE, {
                        overlay: T["a"].NO_DOCKING,
                        open: !0
                    })
                }), this.addCallback("onSelectionChange", (t, e, n, a) => {
                    this._store.dispatch(r["b"].SELECTION_CHANGE), this._store.state.uiState.isDesktop || this._store.dispatch(r["b"].SET_INTERACTIONS_EXPANDED, !1), this._store.commit(r["d"].SET_CURRENT_SELECTION, {
                        selectionMode: t,
                        isRoot: e,
                        hasChildren: n,
                        components: a
                    }), this._uiCallbacks.forEach(i => i.onSelectionChange(t, e, n, a))
                }), this.addCallback("onSelectionCancel", () => {
                    this._store.commit(r["d"].SET_CURRENT_SELECTION, null), this._store.state.uiState.onlyShowAddons || (this._store.dispatch(r["b"].SELECTION_CHANGE), this._store.state.uiState.isDesktop || this._store.dispatch(r["b"].SET_INTERACTIONS_EXPANDED, !1), this._uiCallbacks.forEach(t => t.onSelectionCancel()))
                }), this.addCallback("onUpdatePrice", (t, e) => {
                    this.setPrice("$", 500) // remove this once done
                    /* this.setPrice(t, e)*/
                }), this.addCallback("onUserInitiatedDockDone", (t, e, n) => {
                    var a, i;
                    null === (i = null === (a = this._analytics) || void 0 === a ? void 0 : a.ga) || void 0 === i || i.trackEvent("Dock", _["a"].INTERACTION, t + "#" + n)
                }), this.addCallback("onKernelIsReady", () => {
                    var t;
                    if (performance && performance.timing) {
                        const e = Math.round((new Date).getTime() - performance.timing.responseStart);
                        null === (t = this._analytics) || void 0 === t || t.ga.trackTiming(_["a"].TIMING, _["c"].KERNEL_IS_READY, e, {
                            [_["c"].KERNEL_IS_READY]: e
                        })
                    }
                }), this.addCallback("onContentProblem", ({
                    rapiPath: t,
                    ids: e
                }) => {
                    var n, a;
                    t && e ? null === (n = this._analytics) || void 0 === n || n.ga.trackContentError('Trying to fetch "' + t + '" but the following IDs "' + e + '" are not in the database, please check the script') : null === (a = this._analytics) || void 0 === a || a.ga.trackError('Reported content error but either ids ("' + e + '") or rapiPath ("' + t + '") missing')
                }), this._initWaiters.forEach(t => t(this._configurator)), this._initWaiters = [])
            }
            addCallback(t, e, n = !1) {
                if (!n && $.has(t)) throw new Error('Can not register callback "' + t + '" again!');
                if (!this._configurator) return console.warn('PLEASE IMPLEMENT ME, this is just a quick fix, for more details see the method "initGlbViewer"');
                const a = ["onKernelIsReady", "onComponentPositionsUpdated"];
                if ("function" === typeof this._configurator.callbacks[t] || a.includes(t) || console.warn('Can only assign to function properties on callbacks object, maybe "' + t + '" is not defined on the object'), n && this._configurator.callbacks[t]) {
                    const n = this._configurator.callbacks[t].bind(this._configurator.callbacks);
                    this._configurator.callbacks[t] = function() {
                        e(...arguments), n(...arguments)
                    }
                } else this._configurator.callbacks[t] = e;
                $.set(t, !0)
            }
            async setParameter(t, e, n = !1) {
                var a;
                const i = await this.api;
                if (this._analytics) {
                    const n = i.getCurrentSelection(),
                        s = t.type ? t.type : "(UnknownType)",
                        r = t.key ? t.key : "(UnknownKey)";
                    null === (a = this._analytics.ga) || void 0 === a || a.trackEvent("Parameter:ChangeEvent", _["a"].INTERACTION, n.join(",") + "#" + s + "#" + r + "#" + e)
                }
                return i.setParameter(t, e, n)
            }
            setPrice(t, e) {
                console.log('?setting');
                this._store.dispatch(P["a"].UPDATE_PRICE, {
                    currencySymbol: t,
                    price: e
                })
            }
            addUiCallback(t) {
                this._uiCallbacks.includes(t) || this._uiCallbacks.push(t)
            }
            removeUiCallback(t) {
                const e = this._uiCallbacks.indexOf(t); - 1 !== e && this._uiCallbacks.splice(e, 1)
            }
            _updateParameters(t) {
                this._store.commit(y.UPDATE_PARAMETERS, t)
            }
            async _updateParameterGroups(t) {
                const e = new Map;
                t.forEach(t => {
                    if (t.grouping) {
                        let n = null;
                        e.has(t.grouping.key) ? n = e.get(t.grouping.key) : (n = {
                            key: t.grouping.key,
                            collapsed: t.grouping.collapsed,
                            label: t.grouping.label,
                            sort: t.grouping.sort,
                            parameters: []
                        }, e.set(n.key, n)), n && n.parameters.push(t)
                    }
                });
                const n = await this.api;
                if (e.size > 0) {
                    const t = Array.from(e.values());
                    t.sort((t, e) => t.sort - e.sort), this._store.commit(y.UPDATE_GROUPS, t), this._checkParameterGroups(n);
                    const a = this._store.state.uiState.selectedGroup;
                    let i = null;
                    a && (i = t.find(t => a.key === t.key) || null), i || (i = t[0]), this._store.commit(r["d"].SET_SELECTED_GROUP, i), this.api.then(t => {
                        const e = this._store.state.coreData.groups.find(t => (null === i || void 0 === i ? void 0 : i.key) === t.key);
                        e && t.setActiveGroupInView(i ? i.key : "")
                    }), this._updateParameters(i.parameters)
                } else this._store.commit(y.UPDATE_GROUPS, []), this._updateParameters(t)
            }
            async _updateAddons(t) {
                const e = await this.api;
                this._store.commit(P["c"].UPDATE_ADDONS, t), this._checkParameterGroups(e)
            }
            _checkParameterGroups(t) {
                if (this._store.state.uiState.currentSelection) return !1;
                const e = new Set,
                    n = this._store.state.coreData.addons;
                n.forEach(t => t.possibleChildren.forEach(t => e.add(t.group)));
                let a = this._store.state.coreData.groups;
                const i = new Set;
                if (e.forEach(t => {
                        const e = a.find(e => e.key === t);
                        e || i.add(t)
                    }), i.size) {
                    a = this._store.state.coreData.groups;
                    const e = t.getParameterGroups();
                    return i.forEach(t => {
                        const n = e.find(e => e.key === t);
                        n && !a.find(e => e.key === t) && (n.parameters = [], a.push(n))
                    }), a.sort((t, e) => t.sort - e.sort), this._store.commit(y.UPDATE_GROUPS, a), !0
                }
                return !1
            }
        }
        class M {
            constructor(t, e = null) {
                this._viewer = null, this._initWaiters = [], this._store = t, this._analytics = e
            }
            get api() {
                return this._viewer ? Promise.resolve(this._viewer) : new Promise(t => this._initWaiters.push(t))
            }
            async init(t, e, n) {
                const a = await t.getGlbViewer(e, n),
                    i = a.getApi();
                return t.hasPlanner || await i.init(e), this.initViewer(i)
            }
            initViewer(t) {
                this._viewer || (this._viewer = t)
            }
        }
        const W = (t, e) => !!t && (t.configurationRuntimeId === e.configurationRuntimeId && ((!!t.item === !!e.item || e.configurationRuntimeId === t.configurationRuntimeId) && (!t.item || !e.item || t.item.id === e.item.id)));
        class j {
            constructor(t, e = null) {
                this._planner = null, this._initWaiters = [], this._sdkWrapper = null, this._currentPlan = null, this._lastPlanId = null, this._store = t, this._analytics = e
            }
            get api() {
                return this._planner ? Promise.resolve(this._planner) : new Promise(t => this._initWaiters.push(t))
            }
            async init(t, e, n) {
                this._sdkWrapper = t;
                const a = await this._sdkWrapper.getPlanner(e, n),
                    i = a.getApi();
                return await i.init(e), this.initPlanner(i)
            }
            initPlanner(t) {
                if (this._planner) return;
                this._planner = t;
                const e = this._planner;
                e.callbacks.onSelectionChange = (t, e, n, a) => {
                    this._store.commit(D["c"].SET_SELECTION_PAYLOAD, n), a.then(t => {
                        W(this._store.state.plannerUiState.selectionPayload, t) && this._store.commit(D["c"].SET_SELECTION_PAYLOAD, t)
                    }), this._store.commit(D["c"].SET_SELECTION, e), !this._store.state.plannerUiState.isDesktop && this._store.state.plannerUiState.interactionsExpanded && this._store.commit(D["c"].SET_INTERACTIONS_EXPANDED, !1)
                }, e.callbacks.onSelectionCancel = () => {
                    if (!this._store.state.uiState.isDesktop) {
                        this._store.commit(D["c"].SET_INTERACTIONS_EXPANDED, !1);
                        const t = this._store.state.plannerUiState.sidebar;
                        this._store.commit(w["a"].ELEMENT_EXPANDED, {
                            state: t,
                            value: !1
                        })
                    }
                    this._store.commit(D["c"].SET_SELECTION_PAYLOAD, null), this._store.commit(D["c"].SET_SELECTION, null)
                }, this._initWaiters.forEach(t => t(this._planner)), this._initWaiters = []
            }
            async loadPlan(t) {
                if (!this._sdkWrapper) throw new Error("can not load plan because sdkWrapper is not ready");
                const e = await this._sdkWrapper.getRapiAccess(),
                    n = await e.getPlan(t),
                    a = await this.api;
                await a.loadPlan(t), this._lastPlanId = n.id, this._currentPlan = n, delete this._currentPlan.id
            }
            async loadPlanBasedOnObjectId(t) {
                const {
                    EMPTY_PLAN: e
                } = await n.e("chunk-2d0c1cce").then(n.bind(null, "481e")), a = await this.api;
                if (await a.loadPlanXml(e, this._store.state.uiState.initData), await a.insertObject(t), !this._sdkWrapper) throw new Error("can not load plan because sdkWrapper is not ready");
                const i = await this._sdkWrapper.getRapiAccess(),
                    s = i.createNewPlan();
                s.planObjects = await this._getCurrentPlanXML(), this._lastPlanId = null, this._currentPlan = s, delete this._currentPlan.id
            }
            async saveCurrentPlan(t) {
                const e = await this._getCurrentPlanXML();
                if (!this._sdkWrapper) throw new Error("can not save plan because sdkWrapper is not ready");
                const n = await this._sdkWrapper.getRapiAccess(),
                    {
                        token: a,
                        userId: i
                    } = await n.signinUser(Object({
                        VUE_APP_RAPI_URL: "https://www.roomle.com/api/v2",
                        VUE_APP_BASE_URL: "https://roomle.com/",
                        VUE_APP_GA_ID: "UA-11302757-21",
                        VUE_APP_GA_USE_TRACKING: "true",
                        NODE_ENV: "production",
                        BASE_URL: ""
                    }).VUE_APP_DUMMY_USER, Object({
                        VUE_APP_RAPI_URL: "https://www.roomle.com/api/v2",
                        VUE_APP_BASE_URL: "https://roomle.com/",
                        VUE_APP_GA_ID: "UA-11302757-21",
                        VUE_APP_GA_USE_TRACKING: "true",
                        NODE_ENV: "production",
                        BASE_URL: ""
                    }).VUE_APP_DUMMY_PASSWORD);
                if (n.setCurrentToken(a), !this._currentPlan) throw new Error("no plan loaded, can not save");
                this._currentPlan.user = i, this._currentPlan.planObjects = e, this._lastPlanId && (this._currentPlan.parent = this._lastPlanId);
                const s = await this.api;
                if (!t) {
                    const e = await s.preparePerspectiveImage();
                    t = e
                }
                this._currentPlan.thumbnail = t.image;
                const r = await n.savePlan(this._currentPlan);
                return this._currentPlan = r, n.removeCurrentToken(), this._currentPlan
            }
            async _getCurrentPlanXML() {
                const t = await this.api,
                    e = await t.getPlanInteractionHandler(),
                    n = e.getPlan();
                return n.getPlanXML(!1, 2)
            }
        }
        var H, F = n("5f3f"),
            x = n("f7fb");
        class B {
            constructor() {
                this.onGATracking = (...t) => {}
            }
        }
        class Y {
            constructor(t, e, n, a, i, s) {
                var r, o;
                this._isWebsiteReady = !1, this._handleMessage = ({
                    message: t,
                    args: e
                }, n) => {
                    if (t === R["a"].WEBSITE_READY) return new Promise(t => {
                        this._websiteReady(), t()
                    });
                    const a = t.split(R["c"]),
                        i = a[0],
                        s = a[1],
                        r = i === R["b"].SDK ? this._sdk : this;
                    if (!r[s]) return Promise.reject({
                        error: 'The method "' + t + '" is unknown'
                    });
                    const o = r[s](...e);
                    return o instanceof Promise ? o : Promise.resolve(o)
                }, this._sdk = n, this._exposedCallbacks = a, this._sdkConnector = t, this._store = i, this._analytics = s, this._exposedAnalyticsCallbacks = new B;
                const c = Object(R["e"])(this._exposedCallbacks, R["b"].UI, !0),
                    l = Object(R["e"])(Object.getPrototypeOf(this), R["b"].UI),
                    _ = Object(R["e"])(Object.getPrototypeOf(this._sdk), R["b"].SDK),
                    E = Object(R["e"])(this._sdk.callbacks, R["b"].SDK, !0),
                    d = Object(R["e"])(this._exposedAnalyticsCallbacks, R["b"].ANALYTICS, !0);
                E.forEach(n => {
                    const a = n.split(R["c"]),
                        i = a.pop();
                    t.configuratorConnector.then(t => t.addCallback(i, (function() {
                        return null === e || void 0 === e ? void 0 : e.sendMessage(n, [...arguments])
                    }), !0))
                }), c.forEach(t => {
                    const n = t.split(R["c"]),
                        a = n.pop();
                    this._exposedCallbacks[a] = function() {
                        return null === e || void 0 === e ? void 0 : e.sendMessage(t, [...arguments])
                    }
                }), d.forEach(t => {
                    const n = t.split(R["c"]),
                        a = n.pop();
                    this._exposedAnalyticsCallbacks[a] = (...n) => {
                        if (this._isWebsiteReady) return null === e || void 0 === e ? void 0 : e.sendMessage(t, [...n])
                    }
                }), null === (o = null === (r = this._analytics) || void 0 === r ? void 0 : r.ga) || void 0 === o || o.addCallback((...t) => {
                    this._exposedAnalyticsCallbacks.onGATracking(...t)
                }), this._forwardSdkCallbacks(), null === e || void 0 === e || e.sendMessage(R["a"].SETUP, [{
                    methods: [..._, ...l],
                    callbacks: [...E, ...c, ...d]
                }]), null === e || void 0 === e || e.setMessageExecution(this._handleMessage.bind(this)), window.RubensAPI = this
            }
            get callbacks() {
                return this._exposedCallbacks
            }
            loadObject(t) {
                return t ? this._sdkConnector.loadObject(t) : Promise.reject("Please provide a ID for loadObject")
            }
            loadConfigurationString(t) {
                return t.startsWith("{") ? this._sdkConnector.loadConfigurationString(t) : Promise.reject('Please provide a configuration-string (starts with "{" and ends with "}"), for IDs please use loadObject')
            }
            setPrice(t, e) {
                console.log('?gf');
                this._sdkConnector.configuratorConnector.then(n => n.setPrice(t, e))
            }
            startConfiguring() {
                Object(x["a"])(this._store, this._exposedCallbacks)
            }
            pauseConfiguring() {
                this._store.state.uiState.isDesktop || (this._exposedCallbacks.onBackToWebsite(), this._store.dispatch(r["b"].PAUSE_CONFIGURING))
            }
            triggerRequestProduct() {
                return Object(x["c"])(this._exposedCallbacks, this._sdkConnector, this._store, this._analytics)
            }
            triggerRequestPlan() {
                return Object(x["b"])(this._exposedCallbacks, this._sdkConnector, this._store, this._analytics)
            }
            giveGaConsent() {
                this._analytics.ga.history.forEach(t => {
                    const e = [].slice.call(t);
                    this._exposedAnalyticsCallbacks.onGATracking(...e)
                }), this._sdkConnector.giveGaConsent()
            }
            _websiteReady() {
                var t;
                this._isWebsiteReady = !0, this._exposedCallbacks.onResize(this._store.state.uiState.isDesktop);
                const e = null === (t = this._store.state.uiState.initData) || void 0 === t ? void 0 : t.gaConsent;
                (e || "boolean" !== typeof e) && this.giveGaConsent()
            }
            _forwardSdkCallbacks() {
                var t;
                null === (t = this._sdkConnector) || void 0 === t || t.configuratorConnector.then(t => t.addCallback("onPartListUpdate", (t, e) => {
                    console.log('in');
                    var n, a;
                    (null === (a = null === (n = this._store.state.uiState.initData) || void 0 === n ? void 0 : n.featureFlags) || void 0 === a ? void 0 : a.realPartList) ? this.callbacks.onPartListUpdate(t, e): this.callbacks.onPartListUpdate(t.fullList, e)
                }, !0))
            }
        }(function(t) {
            t[t["VIEWER"] = 0] = "VIEWER", t[t["CONFIGURATOR"] = 1] = "CONFIGURATOR", t[t["PLANNER"] = 2] = "PLANNER"
        })(H || (H = {}));
        const $ = new Map;
        class X {
            constructor(t, e, n = null, a = null) {
                this.loadInProgress = !1, this.someLoadDone = !1, this._loadWaiters = [], this._messageHandler = null, this._initWaitersConfiguratorConnector = [], this._initWaitersViewerConnector = [], this._initWaitersPlannerConnector = [], this._waitForCanvasElementCallback = null, this._canvasElement = null, this._configuratorSettingsCache = new Map, this._connectorConfigurator = null, this._connectorViewer = null, this._connectorPlanner = null, this._analytics = n, this._sdkWrapper = t, this._store = e, this._embeddingCallbacks = a
            }
            get configuratorConnector() {
                return this._connectorConfigurator ? Promise.resolve(this._connectorConfigurator) : new Promise(t => this._initWaitersConfiguratorConnector.push(t))
            }
            get viewerConnector() {
                return this._connectorViewer ? Promise.resolve(this._connectorViewer) : new Promise(t => this._initWaitersViewerConnector.push(t))
            }
            get plannerConnector() {
                return this._connectorPlanner ? Promise.resolve(this._connectorPlanner) : new Promise(t => this._initWaitersPlannerConnector.push(t))
            }
            get configuratorApi() {
                return new Promise(t => {
                    this.configuratorConnector.then(e => {
                        e.api.then(e => t(e))
                    })
                })
            }
            get plannerApi() {
                return new Promise(t => {
                    this.plannerConnector.then(e => {
                        e.api.then(e => t(e))
                    })
                })
            }
            get viewerApi() {
                return new Promise(t => {
                    this.viewerConnector.then(e => {
                        e.api.then(e => t(e))
                    })
                })
            }
            setMessageHandler(t) {
                this._messageHandler = t
            }
            async createExposedApi(t) {
                if (!this._messageHandler && !Object(b["b"])()) return void console.error("Message handler not defined? Maybe you called createExposedApi too early?");
                let e;
                e = t === H.PLANNER ? await this.plannerApi : t === H.VIEWER ? await this.viewerApi : await this.configuratorApi, new Y(this, this._messageHandler, e, this._embeddingCallbacks, this._store, this._analytics)
            }
            async getRapiAccess() {
                return await this._sdkWrapper.getRapiAccess()
            }
            waitForLoad() {
                return !this.loadInProgress && this.someLoadDone ? Promise.resolve(null) : new Promise(t => this._loadWaiters.push(t))
            }
            async goBack() {
                Object(c["n"])(), Object(c["g"])(), this._store.state.uiState.isConfigurator && this._store.getters[L["b"].HAS_CONFIGURATION_CHANGE] && await (await this.configuratorApi).saveCurrentConfiguration(), (await this.plannerApi).back(), this._store.dispatch(r["b"].USE_PLANNER), Object(c["l"])()
            }
            addUiCallback(t) {
                this.configuratorConnector.then(e => e.addUiCallback(t))
            }
            removeUiCallback(t) {
                this.configuratorConnector.then(e => e.removeUiCallback(t))
            }
            async setParameter(t, e, n = !1) {
                return (await this.configuratorConnector).setParameter(t, e, n)
            }
            async hasActivePackage() {
                const t = await this.getTenant();
                return Object(o["c"])(t)
            }
            async isCorrectConfiguratorDomain(t) {
                const e = Object(o["j"])();
                if (e && o["a"].includes(e)) return !0;
                const n = await this.getRapiAccess(),
                    a = await n.getConfiguratorSettings(t),
                    i = a.allowedHosts.includes("*");
                return !!i || (e ? !!a.allowedHosts.includes(e) || (console.error('None of the following domains "' + a.allowedHosts.join(", ") + '" matched "' + e + '"'), !1) : (console.error("document.referrer not available, check security settings! Otherwise we can not check configurator settings"), !1))
            }
            async loadObject(t) {
                var e, n;
                this.loadInProgress && console.warn("Will not load " + t + ", please wait until the last object has finished loading!"), g();
                let a = null;
                if (Object(o["o"])(t)) await this.loadPlan(t);
                else if (Object(o["p"])(t)) {
                    if (null === (e = this._store.state.uiState.initData) || void 0 === e ? void 0 : e.moc) return await this.loadPlan(t, {
                        isObjectId: !0
                    }), null;
                    const n = await this.isIdAGlb(t);
                    a = n ? await this.loadStaticItem(t) : await this.loadConfigurableItem(t)
                } else {
                    if (null === (n = this._store.state.uiState.initData) || void 0 === n ? void 0 : n.moc) return await this.loadPlan(t, {
                        isObjectId: !0
                    }), null;
                    a = await this.loadConfiguration(t)
                }
                return m(), a
            }
            async loadStaticItem(t) {
                let e;
                return this._store.commit(v["a"].SET_LAST_REQUESTED_ID, t), this._startLoading(), await this.initCanvasElement(H.VIEWER), t && (e = await this.viewerApi, await e.loadStaticItem(t, c["m"])), Object(c["l"])(), null
            }
            async loadPlan(t, e = {}) {
                if (this._startLoading(), await this.initCanvasElement(H.PLANNER), t) {
                    const n = await this.plannerConnector;
                    e.isObjectId ? await n.loadPlanBasedOnObjectId(t) : await n.loadPlan(t)
                }
                return this._finishLoading(), null
            }
            async loadConfiguration(t, e) {
                return this._fetchVariants(t), await this._execLoadingConfiguratorProcess(t, async t => (await this.configuratorApi).loadConfigurationById(t, e))
            }
            async loadSelectedPlanObject() {
                if (!this._store.state.plannerUiState.selectionPayload) return;
                const t = this._store.state.plannerUiState.selection;
                if ("configuration" === t) {
                    const {
                        configurationRuntimeId: t,
                        component: e
                    } = this._store.state.plannerUiState.selectionPayload, n = e.id;
                    return this.loadPlanObjectId(n, t)
                } {
                    const {
                        item: t
                    } = this._store.state.plannerUiState.selectionPayload;
                    return this.loadStaticItem(t.id)
                }
            }
            async loadPlanObjectId(t, e) {
                return Object(c["n"])(), this._fetchVariants(t), await this._execLoadingConfiguratorProcess(t, async t => (await this.configuratorApi).syncPlanObjectToView(-1, e))
            }
            async loadConfigurationString(t, e) {
                var n;
                if (null === (n = this._store.state.uiState.initData) || void 0 === n ? void 0 : n.variants) try {
                    if (!t) return null;
                    const {
                        componentId: e
                    } = JSON.parse(t);
                    this._fetchVariants(e)
                } catch (a) {
                    console.error("Problems fetching variants for configuration string")
                }
                return this._execLoadingConfiguratorProcess(t, async t => (await this.configuratorApi).loadConfiguration(t, e))
            }
            async loadConfigurableItem(t, e) {
                const n = this._execLoadingConfiguratorProcess(t, async t => (await this.configuratorApi).loadConfigurableItemById(t, e));
                return this.waitForLoad().then(async () => {
                    const t = await this.configuratorApi;
                    this._fetchVariants(await t.getCurrentConfigurationHash())
                }), n
            }
            async isIdAGlb(t) {
                if (!Object(o["p"])(t)) return !1;
                const e = await this.getRapiAccess(),
                    n = await e.getItem(t);
                return !n.configuration
            }
            canvasElementReady(t) {
                this._canvasElement = t, this._waitForCanvasElementCallback && this._waitForCanvasElementCallback(t)
            }
            async initCanvasElement(t) {
                if (this._needsInit(t)) {
                    const {
                        USE_VIEWER: e,
                        USE_CONFIGURATOR: n,
                        USE_PLANNER: a
                    } = r["b"];
                    let i;
                    switch (t) {
                        case H.VIEWER:
                            i = e;
                            break;
                        case H.PLANNER:
                            i = a;
                            break;
                        default:
                            i = n;
                            break
                    }
                    const s = await this._waitForCanvasElement(i),
                        o = this._store.state.uiState.initData;
                    switch (i) {
                        case e:
                            this._connectorViewer = new M(this._store, this._analytics), await this._connectorViewer.init(this._sdkWrapper, s, o), this._initWaitersViewerConnector.forEach(t => t(this._connectorViewer));
                            break;
                        case a:
                            this._connectorPlanner = new j(this._store, this._analytics), await this._connectorPlanner.init(this._sdkWrapper, s, o), this._initWaitersPlannerConnector.forEach(t => t(this._connectorPlanner));
                            break;
                        default:
                            this._connectorConfigurator = new V(this._store, this._analytics), await this._connectorConfigurator.init(this._sdkWrapper, s, o), this._initWaitersConfiguratorConnector.forEach(t => t(this._connectorConfigurator));
                            break
                    }
                }
            }
            async getTenant() {
                const t = await this.getRapiAccess(),
                    e = this._store.state.uiState.initData,
                    n = e.configuratorId;
                let a;
                return this._configuratorSettingsCache.has(n) ? a = this._configuratorSettingsCache.get(n) : (a = await Object(R["d"])(n, e), this._configuratorSettingsCache.set(n, a)), t.getTenant(a.tenant)
            }
            async saveCurrentConfiguration() {
                const t = await this.configuratorApi;
                return t.saveCurrentConfiguration()
            }
            giveGaConsent() {
                this._analytics && (this._analytics.ga.cleanUpHistory(), this._analytics.ga.giveConsent())
            }
            get hasPlanner() {
                return this._sdkWrapper.hasPlanner
            }
            async saveCurrentObject() {
                var t;
                if (null === (t = this._store.state.uiState.initData) || void 0 === t ? void 0 : t.moc) {
                    const t = await this.plannerConnector;
                    return t.saveCurrentPlan()
                }
                return this.saveCurrentConfiguration()
            }
            async preparePerspectiveImage() {
                var t;
                if (null === (t = this._store.state.uiState.initData) || void 0 === t ? void 0 : t.moc) {
                    const t = await this.plannerApi;
                    return t.preparePerspectiveImage()
                }
                const e = await this.configuratorApi;
                return e.preparePerspectiveImage()
            }
            _waitForCanvasElement(t) {
                return new Promise(e => {
                    this._store.dispatch(t), this._canvasElement ? e(this._canvasElement) : this._waitForCanvasElementCallback = e
                })
            }
            _needsInit(t) {
                const e = this._store.state.uiState.isConfigurator,
                    n = this._store.state.uiState.isViewer,
                    a = this._store.state.uiState.isPlanner,
                    i = !e && !n && !a;
                return i || e && t !== H.CONFIGURATOR || n && t !== H.VIEWER || a && t !== H.PLANNER
            }
            async _fetchVariants(t) {
                var e;
                if (this._store.commit(v["a"].SET_LAST_REQUESTED_ID, t), !t) return;
                const n = null === (e = this._store.state.uiState.initData) || void 0 === e ? void 0 : e.variants;
                if (!n) return;
                const a = await this.configuratorApi,
                    i = await Object(F["d"])(a, t, n);
                i && this._store.commit(r["d"].SET_CURRENT_VARIANTS, i)
            }
            async _execLoadingConfiguratorProcess(t, e) {
                var n, a, i;
                this._startLoading();
                let s = null;
                await this.initCanvasElement(H.CONFIGURATOR);
                try {
                    s = await e(t)
                } catch (r) {
                    console.error(r), s = null
                }
                return this._finishLoading(s), (null === (a = null === (n = this._store.state.uiState.initData) || void 0 === n ? void 0 : n.featureFlags) || void 0 === a ? void 0 : a.realPartList) ? s : s ? null === (i = s.partList) || void 0 === i ? void 0 : i.fullList : s
            }
            _startLoading() {
                this.loadInProgress = !0, this._store.commit(r["d"].SET_IS_LOADING_IN_PROGRESS, this.loadInProgress), this._store.commit(r["d"].SET_CURRENT_VARIANTS, null), this._store.dispatch(r["b"].RESET_COLLECTION_VIEW, null)
            }
            _finishLoading(t) {
                var e;
                if (Object(c["l"])(), this._loadWaiters.forEach(e => e(t)), this._loadWaiters = [], this.loadInProgress = !1, this._store.commit(r["d"].SET_IS_LOADING_IN_PROGRESS, this.loadInProgress), this.someLoadDone = !0, performance && performance.timing) {
                    const t = Math.round((new Date).getTime() - performance.timing.responseStart);
                    null === (e = this._analytics) || void 0 === e || e.ga.trackTiming(_["a"].TIMING, _["c"].INIT_LOADING_SCREEN_CLOSE, t, {
                        [_["c"].INIT_LOADING_SCREEN_CLOSE]: t
                    })
                }
            }
        }
        var K = function() {
                var t = this,
                    e = t.$createElement,
                    n = t._self._c || e;
                return t.isSceneActive ? n("div", {
                    ref: "sceneContainer",
                    staticClass: "scene-container"
                }, [n("div", {
                    ref: "canvasContainer",
                    staticClass: "h100"
                })]) : n("div", {
                    staticClass: "domain-error"
                }, [t._v(" " + t._s(t.errorMsg) + " ")])
            },
            q = [];
        const z = async (t, e, n) => new Promise(a => {
            Object(o["u"])(async () => {
                const i = {
                        isCorrectDomain: !0,
                        hasActivePackage: !0
                    },
                    s = await e.isCorrectConfiguratorDomain(t);
                s || (null === n || void 0 === n || n.ga.trackWrongDomain(), i.isCorrectDomain = !1);
                const r = await e.hasActivePackage();
                r || (null === n || void 0 === n || n.ga.trackNoActivePackage(), i.hasActivePackage = !1), a(i)
            })
        });
        var Q = a["a"].extend({
                mounted() {
                    this.$sdkConnector.canvasElementReady(this.$refs.canvasContainer), this.initSceneContainer()
                },
                data() {
                    return {
                        isCorrectDomain: !0,
                        hasActivePackage: !0
                    }
                },
                computed: {
                    isSceneActive() {
                        return this.isCorrectDomain && this.hasActivePackage
                    },
                    errorMsg() {
                        return this.isSceneActive ? "" : this.isCorrectDomain ? this.t.t("no-active-package") : this.t.t("wrong-domain")
                    }
                },
                methods: {
                    async _checkAccessRights() {
                        const t = this.$store.state.uiState.initData,
                            {
                                isCorrectDomain: e,
                                hasActivePackage: n
                            } = await z(t.configuratorId, this.$sdkConnector, this.$analytics);
                        e || (this.isCorrectDomain = !1), n || (this.hasActivePackage = !1), e && n || Object(c["l"])()
                    },
                    initSceneContainer() {
                        if (this._checkAccessRights(), !this.$refs.sceneContainer) return this.isCorrectDomain || this.$analytics.ga.trackWrongDomain(), void(this.hasActivePackage || this.$analytics.ga.trackNoActivePackage())
                    }
                }
            }),
            J = Q,
            Z = (n("b36d"), Object(A["a"])(J, K, q, !1, null, "58815f9e", null)),
            tt = Z.exports,
            et = function() {
                var t = this,
                    e = t.$createElement,
                    n = t._self._c || e;
                return n("span", {
                    staticClass: "hidden"
                })
            },
            nt = [],
            at = a["a"].extend({
                mounted() {
                    Object(c["n"])()
                },
                destroyed() {
                    Object(c["l"])()
                }
            }),
            it = at,
            st = Object(A["a"])(it, et, nt, !1, null, "7ab25429", null),
            rt = st.exports,
            ot = a["a"].extend({
                components: {
                    ConfiguratorMain: () => ({
                        component: Promise.all([n.e("chunk-21063757"), n.e("chunk-1fd0cc7e")]).then(n.bind(null, "94ce")),
                        loading: rt,
                        delay: 150
                    }),
                    ViewerMain: () => ({
                        component: n.e("chunk-3336d37a").then(n.bind(null, "87a0")),
                        loading: rt,
                        delay: 150
                    }),
                    BackToWebsite: () => n.e("chunk-75046c5d").then(n.bind(null, "1a9d")),
                    PlannerMain: () => Promise.all([n.e("chunk-21063757"), n.e("chunk-03daa8f7")]).then(n.bind(null, "3ef6")),
                    CookieBanner: () => n.e("chunk-4dbfc12e").then(n.bind(null, "6c29")),
                    Overlays: C,
                    SceneContainer: tt
                },
                data() {
                    return {
                        acceptedCookies: !0
                    }
                },
                async mounted() {
                    var t;
                    const e = this.initData.id || null;
                    if (this.acceptedCookies = document.cookie.split(";").some(t => /cookieAccepted/gi.test(t)), e) this.$sdkConnector.loadObject(e);
                    else {
                        const e = null === (t = this.$store.state.uiState.initData) || void 0 === t ? void 0 : t.viewer,
                            n = e ? H.VIEWER : H.CONFIGURATOR;
                        this.$sdkConnector.initCanvasElement(n)
                    }
                },
                computed: {
                    initData() {
                        return this.$store.state.uiState.initData
                    },
                    showCookieBanner() {
                        const t = Object(o["j"])();
                        return !this.acceptedCookies && !(!t || !Object(o["n"])(t)) && !Object(b["a"])()
                    },
                    lastRequestedId() {
                        var t;
                        return this.$store.state.commonUiState.lastRequestedId || (null === (t = this.$store.state.uiState.initData) || void 0 === t ? void 0 : t.id)
                    },
                    showBack() {
                        const t = this.$store.state.commonUiState.isInIframe,
                            {
                                isPlanner: e,
                                isViewer: n,
                                isConfigurator: a
                            } = this.$store.state.uiState;
                        return !(!e || !t) || (!(!n || !this.$sdkConnector.hasPlanner) || !!a && (!!this.$sdkConnector.hasPlanner || this.$store.getters[r["c"].SHOW_BACK_TO_WEBSITE] && !!this.$store.state.uiState.isDesktop))
                    }
                },
                watch: {
                    initData() {
                        if (this.initData.skin) {
                            Object(E["a"])(this.initData, d["blackText"], d["whiteText"]);
                            for (const t in this.initData.skin) this.initData.skin.hasOwnProperty(t) && document.documentElement.style.setProperty("--" + t, this.initData.skin[t])
                        }
                    }
                },
                methods: {
                    setViewModes() {
                        if (this.$store.state.uiState.userInitiatedSearch) return;
                        const t = window.innerWidth > window.innerHeight;
                        this.$store.commit(r["d"].SET_IS_LANDSCAPE, t), this.$store.commit(D["c"].SET_IS_LANDSCAPE, t);
                        const e = Object(c["b"])();
                        this.$store.dispatch(r["b"].SELECT_VIEW_MODE, e), this.$store.dispatch(D["a"].SELECT_VIEW_MODE, e), this.$store.getters[r["c"].USE_REGULAR_LAYOUT] || Object(l["b"])() || Object(l["c"])() || this.$analytics.ga.trackEvent("Mobile Landscape but not Android or iOS", _["a"].TRACKING, navigator.userAgent), this.$embeddingCallbacks.onResize(e)
                    },
                    updateCookies() {
                        this.acceptedCookies = document.cookie.split(";").some(t => /cookieAccepted/gi.test(t))
                    }
                },
                beforeMount() {
                    this.setViewModes(), this.setViewModes = Object(o["x"])(this.setViewModes).bind(this), window.addEventListener("resize", this.setViewModes)
                },
                destroyed() {
                    window.removeEventListener("resize", this.setViewModes)
                }
            }),
            ct = ot,
            lt = (n("5c0b"), Object(A["a"])(ct, i, s, !1, null, null, null)),
            _t = lt.exports,
            Et = n("2b0d"),
            dt = n("09e1");
        const ut = {
            install(t, {
                analytics: e,
                store: n,
                sdkWrapper: a,
                embeddingCallbacks: i
            }) {
                if (!e) throw new Error("Sdk connector plugin needs analytics");
                t.prototype.$sdkConnector = new X(a, n, e, i)
            }
        };
        var ht = ut;
        const Tt = {
            install(t, {
                configuratorId: e,
                useTracking: n
            }) {
                t.prototype.$analytics = {
                    ga: new _["d"](e, n)
                }
            }
        };
        var St = Tt,
            It = n("0198"),
            At = n("8513");
        class pt {
            constructor() {
                this.onRequestProduct = (t, e, n, a, i, s) => {}, this.onPartListUpdate = (t, e) => {}, this.onResize = t => {}, this.onUseFullPage = () => {}, this.onBackToWebsite = () => {}, this.onButtonClicked = t => {}, this.onRequestPlan = (t, e, n) => {}
            }
        }
        const Ct = {
            install(t) {
                t.prototype.$embeddingCallbacks = new pt
            }
        };
        var ft = Ct,
            Nt = n("9224");
        class Ot {
            async getJsPdf() {
                const {
                    jsPDF: t
                } = await n.e("chunk-a474db44").then(n.bind(null, "8baf")), {
                    default: e
                } = await Promise.all([n.e("chunk-a474db44"), n.e("chunk-2d0af61d")]).then(n.t.bind(null, "0da4", 7));
                return {
                    jsPDF: t,
                    autoTable: e
                }
            }
        }
        const gt = {
            install(t) {
                t.prototype.$libs = new Ot
            }
        };
        var mt = gt;
        const Rt = (t, e, n, a) => {
                console.warn("DEPRECATION:", 'this deprecation will be breaking after: "' + t + '"'), console.warn("DEPRECATION:", n), console.warn("DEPRECATION:", "please check our changelog when you upgrade @roomle/embedding-lib"), console.warn("DEPRECATION:", "https://www.roomle.com/t/docs/web/ui/CHANGELOG.html"), a.ga.trackEvent(e, _["a"].DEPRECATION, 'Breaking after version: "' + t + '"')
            },
            bt = (t, e, n) => {
                var a;
                t && !(null === (a = e.featureFlags) || void 0 === a ? void 0 : a.realPartList) && Rt("3.12.0-alpha.1", "partlist", "after an upgrade the whole partlist object will be returned", n)
            },
            kt = !0;
        console.log("UI Version:", kt ? Nt["a"] : "development mode"), kt && (a["a"].config.productionTip = !1, a["a"].config.devtools = !1, a["a"].config.silent = !0), a["a"].use(ft), a["a"].use(mt);
        const Lt = async (t, e) => {
            const i = new It["a"];
            let s = null;
            if (e && Object(b["c"])()) {
                const {
                    MessageHandler: t
                } = await n.e("chunk-2d22c2e4").then(n.bind(null, "f1ad"));
                s = new t("iframe", window, window.parent, null)
            }
            const o = await Object(At["b"])(s, i, {
                ...t
            });
            e || (o.gaConsent = !0), G.commit(r["d"].SET_INIT_DATA, o), i.setGlobalInitData(G.state.uiState.initData), a["a"].use(St, {
                configuratorId: o.configuratorId,
                useTracking: o.gaConsent
            }), a["a"].use(dt["a"], {
                translationSource: new Et["a"](o.locale, o.translations)
            }), G.commit(v["a"].SET_IS_IN_IFRAME, e), G.commit(v["a"].SET_IS_VIEW_ONLY, e && !Object(c["b"])());
            const l = a["a"].prototype.$analytics,
                u = a["a"].prototype.$embeddingCallbacks;
            a["a"].use(ht, {
                analytics: l,
                sdkWrapper: i,
                store: G,
                embeddingCallbacks: u
            }), l.ga.setDimension(_["b"].INIT_ID, o.id), l.ga.setDimension(_["b"].CONFIGURATOR_ID, o.configuratorId), bt(e, o, l), Object(E["a"])(o, d["blackText"], d["whiteText"]);
            for (const n in o.skin) o.skin.hasOwnProperty(n) && document.documentElement.style.setProperty("--" + n, o.skin[n]);
            const h = new a["a"]({
                store: G,
                render: t => t(_t)
            }).$mount("#app");
            if (e) {
                let t;
                h.$sdkConnector.setMessageHandler(s), t = o.moc ? H.PLANNER : o.viewer || o.id && await h.$sdkConnector.isIdAGlb(o.id) ? H.VIEWER : H.CONFIGURATOR, await h.$sdkConnector.createExposedApi(t)
            }
            return h
        }, Pt = Object(b["a"])();
        Lt(Object(At["c"])(!Pt), Pt)
    },
    dfe6: function(t, e, n) {
        "use strict";
        n.d(e, "b", (function() {
            return _
        })), n.d(e, "c", (function() {
            return d
        })), n.d(e, "a", (function() {
            return f
        })), n.d(e, "d", (function() {
            return O
        }));
        var a = n("c135");
        const i = {},
            s = {},
            r = {},
            o = (t, e, n, a) => {
                if (i[t]) return n();
                if (e.id && s[e.id]) return a('There is already a script with ID "' + e.id + '"');
                if (r[e.id]) return void r[e.id].push({
                    resolve: n,
                    reject: a
                });
                const o = document.createElement("script");
                o.async = !1, o.src = t, o.id = e.id, o.onload = () => {
                    i[t] = !0, s[e.id] = !0, r[e.id].forEach(t => t.resolve())
                }, o.onerror = t => {
                    r[e.id].forEach(e => e.reject(t))
                }, r[e.id] = [], r[e.id].push({
                    resolve: n,
                    reject: a
                }), document.head.appendChild(o)
            };
        class c {
            static fetch(t, e) {
                return new Promise((n, a) => {
                    o(t, e, n, a)
                })
            }
        }
        var l = n("d7f7");
        const _ = {
                CLIENT_ID: "clientId",
                WINDOW_ID: "windowId",
                HIT_ID: "hitId",
                HIT_TIME: "hitTime",
                HIT_TYPE: "hitType",
                HIT_SOURCE: "hitSource",
                VISIBILITY_STATE: "visibilityState",
                INIT_ID: "initId",
                CONFIGURATOR_ID: "configuratorId"
            },
            E = [_.CLIENT_ID, _.WINDOW_ID, _.HIT_ID, _.HIT_TIME, _.HIT_TYPE, _.HIT_SOURCE, _.VISIBILITY_STATE, _.INIT_ID, _.CONFIGURATOR_ID],
            d = {
                RESPONSE_END_TIME: "responseEndTime",
                DOM_LOAD_TIME: "domLoadTime",
                WINDOW_LOAD_TIME: "windowLoadTime",
                TIME_TO_FIRST_BTYE: "timeToFirstByte",
                KERNEL_IS_READY: "kernelIsReady",
                INIT_LOADING_SCREEN_CLOSE: "initLoadingScreenClose"
            },
            u = [d.RESPONSE_END_TIME, d.DOM_LOAD_TIME, d.WINDOW_LOAD_TIME, d.TIME_TO_FIRST_BTYE, d.KERNEL_IS_READY, d.INIT_LOADING_SCREEN_CLOSE];
        var h, T, S, I;
        (function(t) {
            t["DIMENSION"] = "dimension", t["METRIC"] = "metric"
        })(h || (h = {})),
        function(t) {
            t["EVENT"] = "event"
        }(T || (T = {})),
        function(t) {
            t["EXCEPTION"] = "exception", t["TIMING"] = "timing_complete"
        }(S || (S = {})),
        function(t) {
            t["TRACK_TIMING"] = "track_timing"
        }(I || (I = {}));
        const A = "CONTENT_ERROR: ",
            p = !1,
            C = "(not set)";
        var f;
        (function(t) {
            t["ERROR"] = "Error", t["NAVIGATION_TIMING"] = "Navigation Timing", t["TIMING"] = "Timing", t["INTERACTION"] = "Interaction", t["TRACKING"] = "Tracking", t["DEPRECATION"] = "Deprecation"
        })(f || (f = {}));
        const N = 1500;
        class O {
            constructor(t, e = !0) {
                this.history = [], this._queue = [], this._trackingId = "UA-11302757-21", this._callbacks = [], this._gaReady = !1, this._useTracking = e;
                const n = {};
                this._setObjectProperties(_, n, h.DIMENSION, E), this._setObjectProperties(d, n, h.METRIC, u);
                const i = {
                    custom_map: n
                };
                navigator.sendBeacon && (i.transport_type = "beacon"), Object.keys(_).forEach(t => i[_[t]] = C), delete i[_.CLIENT_ID], i[_.WINDOW_ID] = Object(a["z"])(), i[_.CONFIGURATOR_ID] = t, i[_.VISIBILITY_STATE] = void 0 !== document.visibilityState ? document.visibilityState : C, i.anonymize_ip = !0, window.ga && window.ga(t => {
                    const e = "buildHitTask",
                        n = t.get(e),
                        s = i.custom_map;
                    t.set(e, t => {
                        const e = t.get("queueTime") || 0;
                        t.set(this._findDimension(_.HIT_TIME, s), String((new Date).getTime() - e), !0), t.set(this._findDimension(_.HIT_ID, s), Object(a["z"])(), !0), t.set(this._findDimension(_.HIT_TYPE, s), t.get("hitType"), !0), t.set(this._findDimension(_.VISIBILITY_STATE, s), document.visibilityState, !0), n(t)
                    })
                }), this._settings = i, this._setSettings(), this._trackErrors(), this._sendNavigationTimingMetrics(), this._execCommand("config", this._trackingId, {
                    page_title: "homepage",
                    page_path: window.location.pathname,
                    page_location: window.location.href,
                    anonymize_ip: !0
                }), this._useTracking && this.giveConsent()
            }
            get _gtag() {
                return this._useTracking ? window.gtag : (...t) => p ? console.log("GA-Tracking: ", ...t) : null
            }
            giveConsent() {
                this._useTracking = !0, window.requestIdleCallback(() => this._loadLibScript().then(() => {
                    this._gaReady = !0, this._flushQueue()
                }))
            }
            trackEvent(t, e, n, a = null, i = {}) {
                const s = {
                    event_category: e,
                    event_label: n
                };
                "number" === typeof a && (s.value = a), this._send(T.EVENT, t, Object.assign(s, i))
            }
            trackTiming(t, e, n, a = {}) {
                this.trackEvent(S.TIMING, t, e, n, {
                    name: e
                }), this.trackEvent(I.TRACK_TIMING, t, e, n, a)
            }
            setDimension(t, e) {
                this._settings[t] = e, this._execCommand("config", this._trackingId, this._settings)
            }
            setDimensions(t) {
                for (const e in t) t.hasOwnProperty(e) && this.setDimension(e, t[e])
            }
            trackError(t, e = null) {
                const n = new ErrorEvent("TrackError", {
                    error: new Error(t),
                    message: t,
                    lineno: -1,
                    filename: C
                });
                if (e) try {
                    Object.defineProperty(n.error, "name", {
                        value: e
                    })
                } catch (a) {
                    n.error = a
                }
                this._trackErrorEvent(n)
            }
            trackContentError(t) {
                this.trackError(A + t, "ContentError")
            }
            addCallback(t) {
                this._callbacks.includes(t) || this._callbacks.push(t)
            }
            removeUiCallback(t) {
                const e = this._callbacks.indexOf(t); - 1 !== e && this._callbacks.splice(e, 1)
            }
            cleanUpHistory() {
                this.history = []
            }
            trackWrongDomain() {
                this.trackError("Domain error", "DOMAIN_ERROR")
            }
            trackNoActivePackage() {
                this.trackError("No active package", "PACKAGE_ERROR")
            }
            _execCommand(...t) {
                this._callbacks.forEach(e => e(...t)), this._gtag(...t)
            }
            _loadLibScript() {
                return this._useTracking ? c.fetch("https://www.googletagmanager.com/gtag/js?id=" + this._trackingId, {
                    id: "tracking"
                }) : Promise.resolve()
            }
            _send(...t) {
                this._queue.push(arguments), Object(l["a"])() && this.history.push(arguments), this._queue.length > N && (this._queue = []), this.history.length > N && this.cleanUpHistory(), window.requestIdleCallback(() => this._flushQueue())
            }
            _flushQueue() {
                (this._gaReady || p) && (this._queue.forEach(t => this._execCommand(...t)), this._queue = [])
            }
            _setObjectProperties(t, e, n, a) {
                const i = {};
                a.forEach((t, e) => i[t] = e + 1), Object.keys(t).forEach(a => e[n + i[t[a]]] = t[a])
            }
            _trackException(t, e = !1) {
                this._send(T.EVENT, S.EXCEPTION, {
                    description: t,
                    fatal: e
                })
            }
            _trackErrors() {
                var t, e;
                const n = (null === (e = null === (t = window.__e) || void 0 === t ? void 0 : t.q) || void 0 === e ? void 0 : e.length) ? window.__e.q : [];
                for (const a of n) this._trackErrorEvent(a);
                window.removeEventListener("error", window.__e), window.addEventListener("error", this._trackErrorEvent.bind(this))
            }
            _trackErrorEvent(t) {
                const e = t.error || {
                        message: `${t.message} (${t.lineno}:${t.colno})`
                    },
                    n = e.name || "(no error name)",
                    a = `${e.message}\n${e.stack||"(no stack trace)"}`;
                this.trackEvent(n, f.ERROR, a, void 0, {
                    nonInteraction: !0
                }), this._trackException(e.message)
            }
            _setSettings() {
                this._execCommand("config", this._trackingId, this._settings)
            }
            _findDimension(t, e) {
                for (const n in e)
                    if (e.hasOwnProperty(n) && t === e[n]) return n;
                return null
            }
            _sendNavigationTimingMetrics() {
                if (!window.performance || !window.performance.timing) return;
                if ("complete" !== document.readyState) return void window.addEventListener("load", this._sendNavigationTimingMetrics.bind(this));
                const t = performance.timing,
                    e = t.navigationStart,
                    n = Math.round(t.responseEnd - e),
                    a = Math.round(t.domContentLoadedEventStart - e),
                    i = Math.round(t.loadEventStart - e),
                    s = Math.round(t.responseStart - t.fetchStart),
                    r = (...t) => t.every(t => t > 0 && t < 6e6);
                r(n, a, i) && (this.trackTiming(f.NAVIGATION_TIMING, C, Math.round((new Date).getTime() - e), {
                    nonInteraction: !0,
                    [d.RESPONSE_END_TIME]: n,
                    [d.DOM_LOAD_TIME]: a,
                    [d.WINDOW_LOAD_TIME]: i,
                    [d.TIME_TO_FIRST_BTYE]: s
                }), this.trackEvent(I.TRACK_TIMING, f.NAVIGATION_TIMING, "ResponseEnd", n), this.trackEvent(I.TRACK_TIMING, f.NAVIGATION_TIMING, "DomLoaded", a), this.trackEvent(I.TRACK_TIMING, f.NAVIGATION_TIMING, "WindowLoaded", i), this.trackEvent(I.TRACK_TIMING, f.NAVIGATION_TIMING, "TimeToFirstByte", s))
            }
        }
    },
    f7fb: function(t, e, n) {
        "use strict";
        n.d(e, "a", (function() {
            return c
        })), n.d(e, "c", (function() {
            return l
        })), n.d(e, "b", (function() {
            return _
        }));
        var a = n("3c8b"),
            i = n("bc4e"),
            s = n("b7f9"),
            r = n("dfe6"),
            o = n("8a65");
        const c = (t, e) => {
                t.commit(a["d"].SET_IS_EXPANDED_FOR_CONFIGURE, !t.state.uiState.isDesktop), t.state.uiState.isDesktop || (e.onUseFullPage(), t.dispatch(a["b"].START_CONFIGURING))
            },
            l = async (t, e, n, a) => {
                var c, l, _;
                Object(i["n"])(), t.onButtonClicked(s["a"].REQUESTPRODUCT);
                const E = await e.configuratorApi,
                    d = await E.preparePerspectiveImage(),
                    {
                        currencySymbol: u,
                        price: h
                    } = n.state.coreData,
                    {
                        catalogLabel: T,
                        label: S
                    } = n.state.coreState,
                    I = await E.saveCurrentConfiguration(),
                    A = {
                        currencySymbol: u,
                        price: h
                    },
                    p = {
                        catalogLabel: T,
                        label: S
                    },
                    C = n.state.coreData.partList,
                    f = null === (l = null === (c = n.state.uiState.initData) || void 0 === c ? void 0 : c.featureFlags) || void 0 === l ? void 0 : l.realPartList,
                    N = f ? C : C.fullList;
                t.onRequestProduct(I.id, d, N, A, p, I), a.ga.trackEvent("RequestProduct", r["a"].INTERACTION, I.id);
                const O = null === (_ = n.state.uiState.initData) || void 0 === _ ? void 0 : _.configuratorId;
                if (O) {
                    const t = await e.getRapiAccess();
                    await t.sendUserAction({
                        module: o["b"].CONFIGURATOR,
                        action: o["a"].CONVERSION,
                        actionId: I.id,
                        actionLabel: O
                    })
                }
                Object(i["l"])()
            }, _ = async (t, e, n, a) => {
                var c;
                Object(i["n"])(), t.onButtonClicked(s["a"].REQUESTPLAN);
                const l = await e.plannerApi,
                    _ = await e.plannerConnector,
                    E = await l.preparePerspectiveImage(),
                    d = await _.saveCurrentPlan(E),
                    u = d.id,
                    h = await l.getObjects();
                t.onRequestPlan(u, E, h), a.ga.trackEvent("RequestPlan", r["a"].INTERACTION, u);
                const T = null === (c = n.state.uiState.initData) || void 0 === c ? void 0 : c.configuratorId;
                if (T) {
                    const t = await e.getRapiAccess();
                    await t.sendUserAction({
                        module: o["b"].CONFIGURATOR,
                        action: o["a"].CONVERSION,
                        actionId: u,
                        actionLabel: T
                    })
                }
                Object(i["l"])()
            }
    },
    f8c9: function(t, e, n) {}
});
//# sourceMappingURL=index-legacy.c62d74e2.js.map