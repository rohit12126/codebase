(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-1fd0cc7e"], {
        "03db": function(t, e, s) {
            "use strict";
            s("5b5d")
        },
        "0b60": function(t, e, s) {
            "use strict";
            s("1a83")
        },
        "1a83": function(t, e, s) {},
        "4b0c": function(t, e, s) {},
        "5a6c": function(t, e, s) {
            "use strict";
            s("4b0c")
        },
        "5b5d": function(t, e, s) {},
        "6a99": function(t, e, s) {},
        7815: function(t, e, s) {},
        "82c9": function(t, e, s) {
            "use strict";
            s("ab6e")
        },
        "8c7c": function(t, e, s) {
            "use strict";
            s("7815")
        },
        "8e6d": function(t, e, s) {
            "use strict";
            s("f872")
        },
        "91f0": function(t, e, s) {
            "use strict";
            s("6a99")
        },
        "94ce": function(t, e, s) {
            "use strict";
            s.r(e);
            var o = function() {
                    var t = this,
                        e = t.$createElement,
                        s = t._self._c || e;
                    return s("div", {
                        staticClass: "configurator-app main-component"
                    }, [s("Layout", {
                        scopedSlots: t._u([{
                            key: "stage",
                            fn: function() {
                                return [t.useRegularLayout ? s("TopBar") : t._e(), !t.useRegularLayout || t.$store.state.uiState.isFullscreen ? s("FullscreenContainer") : t._e(), s("ParameterGroups", {
                                    directives: [{
                                        name: "show",
                                        rawName: "v-show",
                                        value: t.useRegularLayout,
                                        expression: "useRegularLayout"
                                    }],
                                    attrs: {
                                        groups: t.$store.state.coreData.groups,
                                        isExpanded: t.expandedGroups,
                                        selectedGroup: t.$store.state.uiState.selectedGroup
                                    }
                                }), t.showAddonTrigger ? s("AddonsTrigger", {
                                    attrs: {
                                        onShowAddons: t.resetScroll
                                    }
                                }) : t._e(), s("SelectionButtons", [t.showStartConfiguring ? s("StartConfiguringButton") : t._e(), t.showDelete ? s("DeleteButton", {
                                    attrs: {
                                        onClick: t.deleteSelected
                                    }
                                }) : t._e()], 1), s("InteractionsContainer", {
                                    directives: [{
                                        name: "show",
                                        rawName: "v-show",
                                        value: t.useRegularLayout,
                                        expression: "useRegularLayout"
                                    }],
                                    scopedSlots: t._u([{
                                        key: "default",
                                        fn: function(e) {
                                            return [s("HeightContainer", {
                                                staticClass: "main-container",
                                                attrs: {
                                                    scrollThisContainer: !t.isOnOverview
                                                },
                                                scopedSlots: t._u([{
                                                    key: "header",
                                                    fn: function() {},
                                                    proxy: !0
                                                }, {
                                                    key: "content",
                                                    fn: function() {
                                                        return [s("ConfiguratorSidebar", {
                                                            attrs: {
                                                                onToggleExpand: e.toggle
                                                            }
                                                        })]
                                                    },
                                                    proxy: !0
                                                }], null, !0)
                                            })]
                                        }
                                    }])
                                })]
                            },
                            proxy: !0
                        }, t.isConfiguratorOnly ? {
                            key: "bottom",
                            fn: function() {
                                return [s("BottomBar")]
                            },
                            proxy: !0
                        } : null], null, !0)
                    })], 1)
                },
                i = [],
                n = s("2b0e"),
                a = function() {
                    var t = this,
                        e = t.$createElement,
                        s = t._self._c || e;
                    return t.$store.state.uiState.isDesktop ? s("div", {
                        staticClass: "topbar",
                        class: {
                            hidden: t.$store.state.uiState.isFullscreen
                        }
                    }, [t.showArButton ? s("div", {
                        staticClass: "svg-box m-bottom border-bottom tooltip",
                        attrs: {
                            "data-test-id": "ar-button",
                            "data-tooltip": t.t.t("tooltip.ar")
                        }
                    }, [s("ARButton")], 1) : t._e(), t.showPartlistButton ? s("div", {
                        staticClass: "svg-box tooltip",
                        attrs: {
                            "data-test-id": "partlist-button",
                            "data-tooltip": t.t.t("tooltip.partlist")
                        },
                        on: {
                            click: t.openPartList
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgPartList
                        }
                    })], 1) : t._e(), t.showMultiselectButton ? s("div", {
                        staticClass: "svg-box tooltip",
                        class: {
                            "dots-active": t.isActionActive(t.BUTTON_ACTIONS.MULTISELECT)
                        },
                        attrs: {
                            "data-test-id": "multiselect-button",
                            "data-tooltip": t.t.t("tooltip.multiselect")
                        },
                        on: {
                            click: t.toggleMultiselect
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgMultiSelect
                        }
                    })], 1) : t._e(), t.showDimensionsButton ? s("div", {
                        staticClass: "svg-box m-bottom border-bottom tooltip",
                        class: {
                            "dots-active": t.areDimensionsVisible
                        },
                        attrs: {
                            "data-test-id": "dimensions-button",
                            "data-tooltip": t.t.t("tooltip.measurements")
                        },
                        on: {
                            click: t.toggleDimensions
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgMeasurements
                        }
                    })], 1) : t._e(), t.showFullscreenButton ? s("div", {
                        staticClass: "svg-box fullscreen-button tooltip",
                        attrs: {
                            "data-test-id": "fullscreen-button",
                            "data-tooltip": t.t.t("tooltip.fullscreen")
                        },
                        on: {
                            click: t.openFullscreen
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgCamera
                        }
                    })], 1) : t._e(), t.showResetCameraButton ? s("div", {
                        staticClass: "svg-box m-bottom reset-camera border-bottom tooltip",
                        attrs: {
                            "data-test-id": "resetcamera-button",
                            "data-tooltip": t.t.t("tooltip.reset-camera")
                        },
                        on: {
                            click: t.resetCamera
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgZoom
                        }
                    })], 1) : t._e(), t.showRenderImageButton ? s("div", {
                        staticClass: "svg-box border-bottom tooltip",
                        attrs: {
                            "data-test-id": "renderimage-button",
                            "data-tooltip": t.t.t("tooltip.render")
                        },
                        on: {
                            click: t.renderImage
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgScreenshot
                        }
                    })], 1) : t._e(), t.showExport3dButton ? s("div", {
                        staticClass: "svg-box tooltip border-bottom",
                        attrs: {
                            "data-test-id": "export-3d-button",
                            "data-tooltip": t.t.t("tooltip.export")
                        },
                        on: {
                            click: t.openExport3D
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgExport3d
                        }
                    })], 1) : t._e()]) : s("div", {
                        staticClass: "topbar",
                        class: {
                            "is-expanded": !t.$store.state.uiState.interactionsExpanded, hidden: t.$store.state.uiState.isFullscreen
                        }
                    }, [s("div", {
                        staticClass: "topbar-container"
                    }, [s("div", {
                        staticClass: "topbar-item",
                        attrs: {
                            "data-test-id": "spacer"
                        }
                    }), s("div", {
                        staticClass: "topbar-item"
                    }, [t.showArButton ? s("div", {
                        staticClass: "ar-container",
                        attrs: {
                            "data-test-id": "ar-button"
                        }
                    }, [s("ARButton")], 1) : t._e(), t.showMenuButton ? s("div", {
                        staticClass: "dots-container"
                    }, [s("SvgIcon", {
                        staticClass: "dots-icon",
                        class: {
                            "dots-active": t.numberOfSelectedActions
                        },
                        attrs: {
                            icon: t.icons.SvgDots
                        }
                    }), s("input", {
                        staticClass: "checkbox-toggle",
                        attrs: {
                            type: "checkbox",
                            id: "checkbox-toggle"
                        }
                    }), s("label", {
                        attrs: {
                            for: "checkbox-toggle"
                        }
                    }), s("ul", {
                        staticClass: "links-list"
                    }, [t.showPartlistButton ? s("li", {
                        attrs: {
                            "data-test-id": "partlist-button"
                        },
                        on: {
                            click: t.openPartList
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgPartList
                        }
                    }), s("span", [t._v(t._s(t.t.t("drop-down.partlist")))])], 1) : t._e(), t.showMultiselectButton ? s("li", {
                        class: {
                            "dots-active": t.isActionActive(t.BUTTON_ACTIONS.MULTISELECT)
                        },
                        attrs: {
                            "data-test-id": "multiselect-button"
                        },
                        on: {
                            click: t.toggleMultiselect
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgMultiSelect
                        }
                    }), s("span", [t._v(t._s(t.t.t("drop-down.multiselect")))])], 1) : t._e(), t.showDimensionsButton ? s("li", {
                        class: {
                            "dots-active": t.areDimensionsVisible
                        },
                        attrs: {
                            "data-test-id": "dimensions-button"
                        },
                        on: {
                            click: t.toggleDimensions
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgMeasurements
                        }
                    }), s("span", [t._v(t._s(t.t.t("drop-down.measurements")))])], 1) : t._e(), t.showFullscreenButton ? s("li", {
                        staticClass: "fullscreen-button",
                        attrs: {
                            "data-test-id": "fullscreen-button"
                        },
                        on: {
                            click: t.openFullscreen
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgCamera
                        }
                    }), s("span", [t._v(t._s(t.t.t("drop-down.fullscreen ")))])], 1) : t._e(), t.showExport3dButton ? s("li", {
                        attrs: {
                            "data-test-id": "export-3d-button"
                        },
                        on: {
                            click: t.openExport3D
                        }
                    }, [s("SvgIcon", {
                        staticClass: "svg-icon",
                        attrs: {
                            icon: t.icons.SvgExport3d
                        }
                    }), s("span", [t._v(t._s(t.t.t("drop-down.export-3d")))])], 1) : t._e()])], 1) : t._e()])])])
                },
                r = [],
                c = s("c041"),
                l = {
                    id: "menu-points-usage",
                    viewBox: "0 0 26 6",
                    url: s.p + "svgs/icons.993d4e35.svg#menu-points",
                    toString: function() {
                        return this.url
                    }
                },
                u = {
                    id: "partlist-usage",
                    viewBox: "0 0 32 32",
                    url: s.p + "svgs/icons.993d4e35.svg#partlist",
                    toString: function() {
                        return this.url
                    }
                },
                d = {
                    id: "mulitselect-usage",
                    viewBox: "0 0 32 32",
                    url: s.p + "svgs/icons.993d4e35.svg#mulitselect",
                    toString: function() {
                        return this.url
                    }
                },
                h = {
                    id: "measurements-usage",
                    viewBox: "0 0 32 32",
                    url: s.p + "svgs/icons.993d4e35.svg#measurements",
                    toString: function() {
                        return this.url
                    }
                },
                S = {
                    id: "camera-usage",
                    viewBox: "0 0 32 32",
                    url: s.p + "svgs/icons.993d4e35.svg#camera",
                    toString: function() {
                        return this.url
                    }
                },
                g = {
                    id: "zoom-usage",
                    viewBox: "0 0 32 32",
                    url: s.p + "svgs/icons.993d4e35.svg#zoom",
                    toString: function() {
                        return this.url
                    }
                },
                v = {
                    id: "export-3d-usage",
                    viewBox: "0 0 32 32",
                    url: s.p + "svgs/icons.993d4e35.svg#export-3d",
                    toString: function() {
                        return this.url
                    }
                },
                p = {
                    id: "screenshot-usage",
                    viewBox: "0 0 21 17",
                    url: s.p + "svgs/icons.993d4e35.svg#screenshot",
                    toString: function() {
                        return this.url
                    }
                },
                b = s("bee6"),
                m = s("3c8b"),
                C = s("3cc4"),
                E = s("c135"),
                _ = s("b7f9"),
                $ = n["a"].extend({
                    components: {
                        SvgIcon: b["a"],
                        ARButton: c["a"],
                        BackToWebsite: () => s.e("chunk-61de2ad2").then(s.bind(null, "1a9d"))
                    },
                    computed: {
                        icons() {
                            return {
                                SvgDots: l,
                                SvgPartList: u,
                                SvgMultiSelect: d,
                                SvgMeasurements: h,
                                SvgCamera: S,
                                SvgZoom: g,
                                SvgScreenshot: p,
                                SvgExport3d: v
                            }
                        },
                        areDimensionsVisible() {
                            return this.$store.state.uiState.selectedActions.includes(m["a"].DIMENSIONS)
                        },
                        BUTTON_ACTIONS() {
                            return m["a"]
                        },
                        numberOfSelectedActions() {
                            return this.$store.state.uiState.selectedActions.length
                        },
                        isDesktop() {
                            return this.$store.state.uiState.isDesktop
                        },
                        expandedGroups() {
                            const t = this.$store.state.uiState.interactionsExpanded;
                            return this.$store.state.uiState.isDesktop ? !t : t
                        },
                        showArButton() {
                            var t;
                            return Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].AR])
                        },
                        showPartlistButton() {
                            var t;
                            return Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].PARTLIST])
                        },
                        showMultiselectButton() {
                            var t;
                            const e = Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].MULTISELECT]);
                            return this.$store.state.coreState.componentHasChildren && e
                        },
                        showDimensionsButton() {
                            var t;
                            return Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].DIMENSIONS])
                        },
                        showFullscreenButton() {
                            var t;
                            return Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].FULLSCREEN])
                        },
                        showExport3dButton() {
                            var t;
                            return Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].EXPORT_3D], !1)
                        },
                        showResetCameraButton() {
                            var t;
                            return Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].RESETCAMERA])
                        },
                        showRenderImageButton() {
                            var t;
                            return Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].RENDERIMAGE], !1)
                        },
                        showMenuButton() {
                            return this.showPartlistButton || this.showMultiselectButton || this.showDimensionsButton || this.showFullscreenButton || this.showResetCameraButton || this.showRenderImageButton
                        },
                        showBackToWebsite() {
                            return !!this.$sdkConnector.hasPlanner || this.$store.getters[m["c"].SHOW_BACK_TO_WEBSITE]
                        }
                    },
                    methods: {
                        _closeDropDown() {
                            this.$el.querySelector(".checkbox-toggle") && (this.$el.querySelector(".checkbox-toggle").checked = !1)
                        },
                        toggleMultiselect() {
                            this.isDesktop || this._closeDropDown(), this.toggleAction(m["a"].MULTISELECT) ? this.enableMultiSelect() : this.disableMultiSelect(), this.$embeddingCallbacks.onButtonClicked(_["a"].MULTISELECT)
                        },
                        openFullscreen() {
                            this.isDesktop || this._closeDropDown(), this.$store.commit(m["d"].SET_IS_FULLSCREEN, !0), this.$embeddingCallbacks.onButtonClicked(_["a"].FULLSCREEN)
                        },
                        openExport3D() {
                            this.$store.commit(m["d"].SET_OVERLAY_STATE, {
                                overlay: C["a"].EXPORT_3D,
                                open: !0
                            }), this.$embeddingCallbacks.onButtonClicked(_["a"].EXPORT_3D), this._closeDropDown()
                        },
                        async toggleDimensions() {
                            this.$embeddingCallbacks.onButtonClicked(_["a"].DIMENSIONS), this.isDesktop || this._closeDropDown();
                            const t = await this.$sdkConnector.configuratorApi;
                            this.toggleAction(m["a"].DIMENSIONS) ? t.showDimensions() : t.hideDimensions()
                        },
                        async enableMultiSelect() {
                            const t = await this.$sdkConnector.configuratorApi;
                            t.enableMultiselect()
                        },
                        async disableMultiSelect() {
                            const t = await this.$sdkConnector.configuratorApi;
                            t.disableMultiselect()
                        },
                        isActionActive(t) {
                            return this.$store.state.uiState.selectedActions.includes(t)
                        },
                        toggleAction(t) {
                            return this.isActionActive(t) ? (this.$store.commit(m["d"].SET_ACTION_DESELECTED, t), !1) : (this.$store.commit(m["d"].SET_ACTION_SELECTED, t), !0)
                        },
                        openPartList() {
                            this.$store.commit(m["d"].SET_OVERLAY_STATE, {
                                overlay: C["a"].PART_LIST,
                                open: !0
                            }), this.$embeddingCallbacks.onButtonClicked(_["a"].PARTLIST), this._closeDropDown()
                        },
                        async resetCamera() {
                            this.$embeddingCallbacks.onButtonClicked(_["a"].RESETCAMERA);
                            const t = await this.$sdkConnector.configuratorApi;
                            t.resetCameraPosition()
                        },
                        async renderImage() {
                            this.$embeddingCallbacks.onButtonClicked(_["a"].RENDERIMAGE)
                        }
                    }
                }),
                f = $,
                k = (s("c1ce"), s("8e6d"), s("2877")),
                w = Object(k["a"])(f, a, r, !1, null, "2d8add8e", null),
                D = w.exports,
                A = function() {
                    var t = this,
                        e = t.$createElement,
                        s = t._self._c || e;
                    return s("div", {
                        staticClass: "bottombar"
                    }, [s("div", {
                        staticClass: "bottombar-container"
                    }, [s("div", {
                        staticClass: "bottombar-item item-vertical"
                    }, [s("p", {
                        staticClass: "sub-label"
                    }, [s("span", [t._v(" " + t._s(t.subLabel) + " ")])]), s("p", {
                        staticClass: "main-label"
                    }, [t._v(t._s(t.mainLabel))])]), s("div", {
                        staticClass: "bottombar-item"
                    }, [t.showSaveDraftButton ? s("div", {
                        staticClass: "item-container button",
                        class: {
                            "cta-button": !t.showRequestProductButton
                        },
                        attrs: {
                            "data-test-id": "savedraft-button"
                        },
                        on: {
                            click: t.saveDraft
                        }
                    }, [s("SvgIcon", {
                        staticClass: "save-icon",
                        attrs: {
                            icon: t.icons.SvgSave
                        }
                    }), t.$store.state.uiState.isDesktop ? s("span", {
                        staticClass: "bottom-label"
                    }, [t._v(" " + t._s(t.t.t("params.save-draft")) + " ")]) : t._e()], 1) : t._e(), t.showRequestProductButton ? s("div", {
                        staticClass: "item-container button cta-button",
                        attrs: {
                            "id": "requestproduct-button"
                        },
                        on: {
                            click: t.requestProduct
                        }
                    }, [s("SvgIcon", {
                        staticClass: "cart-icon",
                        attrs: {
                            icon: t.icons.SvgCart
                        }
                    }), t.$store.state.uiState.isDesktop ? s("span", {
                        staticClass: "bottom-label"
                    }, [t._v(" " + t._s(t.t.t("params.request-product")) + " ")]) : t._e()], 1) : t._e()])])])
                },
                T = [],
                B = s("d7b0"),
                O = s("2cd5"),
                x = s("f7fb"),
                I = s("9304"),
                L = n["a"].extend({
                    components: {
                        SvgIcon: b["a"]
                    },
                    computed: {
                        icons() {
                            return {
                                SvgSave: B["a"],
                                SvgCart: O["a"]
                            }
                        },
                        subLabel() {
                            const {
                                price: t
                            } = this.$store.state.coreData;
                            return t ? this.$store.state.coreState.label : this.$store.state.coreState.catalogLabel
                        },
                        mainLabel() {
                            return this.$store.getters[I["b"].CURRENT_PRICE] || this.$store.state.coreState.label
                        },
                        showRequestProductButton() {
                            var t;
                            return Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].REQUESTPRODUCT], this.$store.state.uiState.isInIframe)
                        },
                        showSaveDraftButton() {
                            var t;
                            return false;
                        }
                    },
                    methods: {
                        async saveDraft() {
                            this.$embeddingCallbacks.onButtonClicked(_["a"].SAVEDRAFT), this.$store.commit(m["d"].SET_OVERLAY_STATE, {
                                overlay: C["a"].SAVE_DRAFT,
                                open: !0
                            })
                        },
                        async requestProduct() {
                            await Object(x["c"])(this.$embeddingCallbacks, this.$sdkConnector, this.$store, this.$analytics);
                        }
                    }
                }),
                R = L,
                y = (s("03db"), Object(k["a"])(R, A, T, !1, null, "12bf747a", null)),
                N = y.exports,
                M = function() {
                    var t = this,
                        e = t.$createElement,
                        s = t._self._c || e;
                    return s("div", {
                        staticClass: "addons-trigger",
                        class: {
                            "is-active": t.$store.state.uiState.onlyShowAddons
                        },
                        on: {
                            click: t.onClick
                        }
                    }, [t.$store.state.uiState.isDesktop ? [s("span", {
                        staticClass: "addons-trigger-plus"
                    }, [t._v("+")]), s("span", [t._v(t._s(t.t.t("addon-trigger")))])] : [t.$store.state.uiState.onlyShowAddons ? s("SvgIcon", {
                        attrs: {
                            icon: t.icons.SvgCheck
                        }
                    }) : s("span", {
                        staticClass: "addons-trigger-plus"
                    }, [t._v("+")])]], 2)
                },
                P = [],
                V = s("4ca5"),
                U = n["a"].extend({
                    components: {
                        SvgIcon: b["a"]
                    },
                    props: {
                        onShowAddons: Function
                    },
                    computed: {
                        icons() {
                            return {
                                SvgCheck: V["a"]
                            }
                        }
                    },
                    methods: {
                        onClick() {
                            this.$store.state.uiState.onlyShowAddons ? (this.$store.commit(m["d"].SHOW_ALL_COLLECTION_VIEW_ELEMENTS), this.$sdkConnector.configuratorApi.then(t => t.cancelDockings())) : (this.onShowAddons(), this.$store.dispatch(m["b"].RESET_COLLECTION_VIEW), this.$store.commit(m["d"].SHOW_ONLY_ADDONS)), this.$embeddingCallbacks.onButtonClicked(_["a"].ADDONS), this.$sdkConnector.configuratorApi.then(t => t.cancelSelection())
                        }
                    }
                }),
                F = U,
                j = (s("0b60"), Object(k["a"])(F, M, P, !1, null, "44b0bcd0", null)),
                G = j.exports,
                W = s("4352"),
                q = s("995f"),
                H = s("43ea"),
                Y = function() {
                    var t = this,
                        e = t.$createElement,
                        s = t._self._c || e;
                    return s("CollectionView", {
                        attrs: {
                            state: t.$store.state.uiState.sidebar,
                            elements: t.elements,
                            helpText: t.helpText,
                            isDesktop: t.$store.state.uiState.isDesktop,
                            showBack: t.showBack,
                            interactionsExpanded: t.$store.state.uiState.interactionsExpanded,
                            onCollapse: t.onCollapse,
                            onShowDisabledMessage: t.onShowDisabledMessage,
                            onGoBack: t.onGoBack,
                            onToggleExpand: t.onToggleExpand
                        },
                        scopedSlots: t._u([{
                            key: "nextAction",
                            fn: function() {
                                return [s("NextParameterGroupButton")]
                            },
                            proxy: !0
                        }])
                    })
                },
                z = [],
                X = s("8979"),
                J = n["a"].extend({
                    components: {
                        CollectionView: X["a"],
                        NextParameterGroupButton: () => s.e("chunk-3b09de03").then(s.bind(null, "e3b9"))
                    },
                    props: {
                        onToggleExpand: Function
                    },
                    computed: {
                        elements() {
                            let t;
                            return t = this.$store.state.uiState.onlyShowAddons ? this.$store.getters[m["c"].COLLECTION_VIEW_ADDON_ELEMENTS] : this.$store.state.uiState.showVariants ? this.$store.getters[m["c"].COLLECTION_VIEW_VARIANTS] : this.$store.getters[m["c"].COLLECTION_VIEW_ELEMENTS], t || []
                        },
                        helpText() {
                            if (!this.hasElementsToShow && !this.$store.state.uiState.isLoadingInProgress) return this.t.t("params.no-elements");
                            const {
                                onlyShowAddons: t,
                                showVariants: e,
                                isDesktop: s
                            } = this.$store.state.uiState;
                            return s && t ? this.t.t("addons.hint") : s && e ? this.t.t("variants.help") : null
                        },
                        hasElementsToShow() {
                            return this.elements.length > 0
                        },
                        showBack() {
                            if (!this.$store.state.uiState.isDesktop) return !1;
                            const {
                                onlyShowAddons: t,
                                showVariants: e
                            } = this.$store.state.uiState, s = this.$store.state.uiState.sidebar.showsDetails;
                            return s || t || e
                        }
                    },
                    methods: {
                        onGoBack(t) {
                            const {
                                onlyShowAddons: e,
                                showVariants: s
                            } = this.$store.state.uiState;
                            e && !t && this.$store.commit(m["d"].SHOW_ALL_COLLECTION_VIEW_ELEMENTS), s && this.$store.dispatch(m["b"].RESET_COLLECTION_VIEW), this.$sdkConnector.configuratorApi.then(t => t.cancelDockings())
                        },
                        onCollapse() {
                            this.$store.dispatch(m["b"].SET_INTERACTIONS_EXPANDED, !1)
                        },
                        onShowDisabledMessage() {
                            this.$store.commit(m["d"].SET_OVERLAY_STATE, {
                                overlay: C["a"].ELEMENT_DISABLED,
                                open: !0
                            })
                        }
                    }
                }),
                Z = J,
                K = (s("91f0"), Object(k["a"])(Z, Y, z, !1, null, "0aba1633", null)),
                Q = K.exports,
                tt = s("11f9"),
                et = s("a209"),
                st = s("f67b"),
                ot = n["a"].extend({
                    data() {
                        return {
                            _uiCallbacks: new tt["a"]
                        }
                    },
                    created() {
                        this.$sdkConnector.configuratorConnector.then(t => {
                            this.$data._uiCallbacks.onSelectionChange = this.resetScroll.bind(this), this.$data._uiCallbacks.onSelectionCancel = this.resetScroll.bind(this), t.addUiCallback(this.$data._uiCallbacks)
                        })
                    },
                    destroyed() {
                        this.$data._uiCallbacks && this.$sdkConnector.configuratorConnector.then(t => {
                            t.removeUiCallback(this.$data._uiCallbacks)
                        })
                    },
                    components: {
                        ParameterGroups: () => s.e("chunk-75827ee6").then(s.bind(null, "dccf")),
                        Layout: et["a"],
                        InteractionsContainer: W["a"],
                        TopBar: D,
                        StartConfiguringButton: () => s.e("chunk-6b2d5f05").then(s.bind(null, "c6ed")),
                        BottomBar: N,
                        AddonsTrigger: G,
                        FullscreenContainer: () => s.e("chunk-6fbbdaa2").then(s.bind(null, "bebd")),
                        HeightContainer: H["a"],
                        ConfiguratorSidebar: Q,
                        DeleteButton: q["a"],
                        SelectionButtons: st["a"]
                    },
                    methods: {
                        resetScroll() {
                            const t = this.$el.querySelector(".main-container .height-content");
                            t.scrollTop = 0
                        },
                        deleteSelected() {
                            const t = this.$store.state.uiState.currentSelection;
                            (null === t || void 0 === t ? void 0 : t.isRoot) || this.$sdkConnector.configuratorApi.then(t => t.requestDeleteComponent())
                        }
                    },
                    computed: {
                        showAddonTrigger() {
                            var t, e;
                            const s = this.$store.getters[I["b"].HAS_NON_GROUP_ADDONS];
                            if (!s) return !1;
                            const {
                                isDesktop: o,
                                onlyShowAddons: i,
                                interactionsExpanded: n,
                                isFullscreen: a
                            } = this.$store.state.uiState;
                            if (a || o && i) return !1;
                            const r = o ? !n : n;
                            return !r && (!!this.useRegularLayout && !!Object(E["y"])(null === (e = null === (t = this.$store.state.uiState.initData) || void 0 === t ? void 0 : t.buttons) || void 0 === e ? void 0 : e[_["a"].ADDONS]))
                        },
                        useRegularLayout() {
                            return this.$store.getters[m["c"].USE_REGULAR_LAYOUT]
                        },
                        expandedGroups() {
                            const t = this.$store.state.uiState.interactionsExpanded && !this.$store.state.uiState.isFullscreen;
                            return this.$store.state.uiState.isDesktop ? !t : t
                        },
                        isOnOverview() {
                            return this.$store.state.uiState.sidebar.showsDetails
                        },
                        showDelete() {
                            const t = this.$store.state.uiState.currentSelection && !this.$store.state.uiState.currentSelection.isRoot;
                            return this.$store.getters[m["c"].USE_REGULAR_LAYOUT] && t
                        },
                        showStartConfiguring() {
                            var t;
                            const e = Object(E["y"])(null === (t = this.$store.state.uiState.initData.buttons) || void 0 === t ? void 0 : t[_["a"].STARTCONFIGURE]);
                            if (!e) return !1;
                            const {
                                isLoadingInProgress: s
                            } = this.$store.state.uiState, {
                                isViewOnly: o
                            } = this.$store.state.commonUiState;
                            return !s && o
                        },
                        isConfiguratorOnly() {
                            return !this.$sdkConnector.hasPlanner
                        }
                    }
                }),
                it = ot,
                nt = (s("5a6c"), Object(k["a"])(it, o, i, !1, null, "da901958", null));
            e["default"] = nt.exports
        },
        ab6e: function(t, e, s) {},
        c041: function(t, e, s) {
            "use strict";
            var o = function() {
                    var t = this,
                        e = t.$createElement,
                        s = t._self._c || e;
                    return s("div", {
                        on: {
                            click: t.goToAr
                        }
                    }, ["small" === t.size ? s("span", [s("SvgIcon", {
                        staticClass: "ar-icon",
                        attrs: {
                            icon: t.icons.SvgAR
                        }
                    })], 1) : t._e(), "medium" === t.size ? s("div", {
                        staticClass: "ar-button-medium"
                    }, [s("SvgIcon", {
                        staticClass: "ar-icon",
                        attrs: {
                            icon: t.icons.SvgAR
                        }
                    }), s("span", [t._v(t._s(t.t.t("ar.heading")))])], 1) : t._e()])
                },
                i = [],
                n = s("2b0e"),
                a = {
                    id: "ar-usage",
                    viewBox: "0 0 42 42",
                    url: s.p + "svgs/icons.993d4e35.svg#ar",
                    toString: function() {
                        return this.url
                    }
                },
                r = s("bee6"),
                c = s("b7f9"),
                l = s("3c8b"),
                u = s("3cc4"),
                d = n["a"].extend({
                    components: {
                        SvgIcon: r["a"]
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
                                SvgAR: a
                            }
                        }
                    },
                    methods: {
                        async goToAr() {
                            this.$embeddingCallbacks.onButtonClicked(c["a"].AR), this.$store.commit(l["d"].SET_OVERLAY_STATE, {
                                overlay: u["a"].OPEN_AR,
                                open: !0
                            })
                        }
                    }
                }),
                h = d,
                S = (s("8c7c"), s("82c9"), s("2877")),
                g = Object(S["a"])(h, o, i, !1, null, "25489662", null);
            e["a"] = g.exports
        },
        c1ce: function(t, e, s) {
            "use strict";
            s("ee91")
        },
        ee91: function(t, e, s) {},
        f872: function(t, e, s) {}
    }
]);
//# sourceMappingURL=chunk-1fd0cc7e.7d59a653.js.map