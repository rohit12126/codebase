(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-66be89ce"], {
        "77b3": function(e, t, n) {
            "use strict";
            n.r(t), n.d(t, "A", (function() {
                return y
            })), n.d(t, "C", (function() {
                return j
            })), n.d(t, "R", (function() {
                return E
            })), n.d(t, "S", (function() {
                return O
            })), n.d(t, "c", (function() {
                return B
            }));
            var i = n("12df"),
                o = n("4a09"),
                s = n("95ca"),
                r = n("2354"),
                a = n("ea7d"),
                l = n("a942"),
                c = n("7884");
            const h = function(e) {
                    return e.validRange && "string" == typeof e.validRange.type
                },
                d = function(e) {
                    return e.validValues && e.validValues.length > 0
                },
                _ = function(e) {
                    return "length" === e.unitType || "area" === e.unitType
                },
                u = function(e) {
                    return "Material" === e.type
                };
            let p = {
                    InchFeet: null,
                    MM: null,
                    CM: null
                },
                m = {
                    NoUnitString: null,
                    LongUnitString: null,
                    ShortUnitString: null
                },
                g = (() => {
                    class e {
                        constructor(e) {
                            this._formatter = null, this._precision = 0, this._creator_ = e
                        }
                        init(e) {
                            const t = new e.UnitMeasureFormatter;
                            p = e.Unit, m = e.UnitStringType, this._initActualUnit(), this._initActualUnitStringType();
                            const {
                                precisionCm: n,
                                precisionInch: i
                            } = this._initData;
                            this._actualUnit === p.InchFeet ? this._precision = void 0 !== i ? parseInt(i, 10) : 2 : this._actualUnit === p.CM && (this._precision = void 0 !== n ? parseInt(n, 10) : 1), t.init("mm", "cm", "'", "ft", '"', "inch", "m²", "sqft", !0, this._precision), this._formatter = t
                        }
                        _initActualUnit() {
                            const {
                                unit: e
                            } = this._initData;
                            switch (e) {
                                case "cm":
                                    this._actualUnit = p.CM;
                                    break;
                                case "mm":
                                    this._actualUnit = p.MM;
                                    break;
                                case "inchfeet":
                                    this._actualUnit = p.InchFeet;
                                    break;
                                default:
                                    this._actualUnit = p.CM
                            }
                        }
                        _initActualUnitStringType() {
                            const {
                                unitStringType: e
                            } = this._initData;
                            switch (e) {
                                case "none":
                                    this._actualUnitStringType = m.NoUnitString;
                                    break;
                                case "long":
                                    this._actualUnitStringType = m.LongUnitString;
                                    break;
                                case "short":
                                    this._actualUnitStringType = m.ShortUnitString;
                                    break;
                                default:
                                    this._actualUnitStringType = m.ShortUnitString
                            }
                        }
                        _isFormatterReady() {
                            return !!this._formatter || (console.warn("Formatter is not ready..."), !1)
                        }
                        formatAngleValueToUnitString(e, t) {
                            const n = "Integer" === t.type ? 0 : 2;
                            return e.toFixed(n) + "°"
                        }
                        parseAngleValueFromUnitString(e) {
                            return e.replace("°", "").replace(/\s/g, "")
                        }
                        parseValue(e, t) {
                            return null === t.unitType || "unknown" === t.unitType || "count" === t.unitType ? e : "length" === t.unitType ? this.parseMMValueFromUnitString(e, t.unitType) : "angle" === t.unitType || "area" === t.unitType ? this.parseAngleValueFromUnitString(e) : e
                        }
                        formatValueToUnitString(e, t) {
                            return null === t.unitType || "unknown" === t.unitType || "count" === t.unitType ? "Integer" === t.type ? e.toString() : parseFloat(e.toString()).toFixed(2) : "length" === t.unitType ? this.formatMMValueToUnitString(e, t.unitType) : "angle" === t.unitType ? this.formatAngleValueToUnitString(e, t) : "area" === t.unitType ? this.formatSquareMMValueToUnitString(e) : e
                        }
                        isParseableNumber(e) {
                            return this._isFormatterReady() ? this._formatter.isParseableNumber(e) : null
                        }
                        isParseableUnitString(e, t) {
                            return this._isFormatterReady() ? "angle" === t.unitType ? this._formatter.isParseableUnitString(this.parseAngleValueFromUnitString(e), this._actualUnit) : this._formatter.isParseableUnitString(e, this._actualUnit) : null
                        }
                        parseMMValueFromUnitString(e, t) {
                            return this._isFormatterReady() ? "count" === t ? parseFloat(e) : this._formatter.parseMMValueFromUnitString(e, this._actualUnit) : null
                        }
                        parseNumber(e) {
                            return this._isFormatterReady() ? this._formatter.parseNumber(e) : null
                        }
                        formatNumber(e, t = 0) {
                            return this._isFormatterReady() ? this._formatter.formatNumber(e, t) : null
                        }
                        formatSquareMMValueToUnitString(e) {
                            return this._isFormatterReady() ? this._formatter.formatSquareMMValueToUnitString(e, this._actualUnit) : null
                        }
                        formatMMValueToUnitString(e, t) {
                            return this._isFormatterReady() ? "count" === t ? e.toString() : this._formatter.formatMMValueToUnitString(e, this._actualUnit, this._actualUnitStringType) : null
                        }
                        formatMMValueWithReqMaxLength(e, t) {
                            return this._isFormatterReady() ? this._formatter.formatMMValueWithReqMaxLength(e, this._actualUnit, t) : null
                        }
                        _formatParameterValue(e, t) {
                            return "length" === t ? this.formatMMValueToUnitString(parseFloat(e)) : "area" === t ? this.formatSquareMMValueToUnitString(parseFloat(e)) : e
                        }
                        formatPartListParameter(e) {
                            _(e) && (e.valueLabel = this._formatParameterValue(e.value, e.unitType))
                        }
                        formatParameter(e) {
                            if (_(e) && Array.isArray(e.validValues) && e.validValues.forEach(({
                                    value: t
                                }, n) => {
                                    e.validValues[n].label = this._formatParameterValue(t, e.unitType)
                                }), e.valueLabel = e.value, u(e)) e.uiType = "Material";
                            else if (function(e) {
                                    return "Boolean" === e.type
                                }(e)) e.uiType = "Boolean";
                            else if (h(e)) {
                                e.uiType = "Range", e.valueLabel = this._formatParameterValue(e.value, e.unitType);
                                const t = null !== e.validRange.valueFrom ? e.validRange.valueFrom : Number.MIN_SAFE_INTEGER,
                                    n = null !== e.validRange.valueTo ? e.validRange.valueTo : Number.MAX_SAFE_INTEGER;
                                e.validRangeLabels = {
                                    valueFrom: this._formatParameterValue(t.toString(), e.unitType),
                                    valueTo: this._formatParameterValue(n.toString(), e.unitType),
                                    type: e.validRange.type
                                }
                            } else d(e) ? (e.uiType = "Options", function(e) {
                                return !!d(e) && Array.isArray(e.validValues) && e.validValues.length > 0 && "string" == typeof e.validValues[0].thumbnail
                            }(e) && (e.uiType = "Thumbnails")) : (console.error("Could not detect uiType of param"), e.uiType = null)
                        }
                        isInch() {
                            return this._actualUnit === p.InchFeet
                        }
                        getPrecision() {
                            return this._precision
                        }
                        getAllowedDelta() {
                            const e = 1 / Math.pow(10, this._precision);
                            return this.isInch() ? 25.4 * e : e
                        }
                    }
                    return Object(i["B"])([i["Y"]], e.prototype, "_initData", void 0), e
                })();
            const C = ["material"];
            let f = (() => {
                class e extends i["d"] {
                    constructor(e) {
                        super(e, 1), this.muteKernelCallbacks = !1, this.listOfVariants = (e, t) => {}, this.listOfVariantsError = () => {}, i["c"].addMeta("kernel_is_ready", {
                            isWasm: this._useWASM
                        }), i["b"].kernelInstance ? (this._kernelContainer = i["b"].kernelContainer, setTimeout(() => this._loadSuccess(), 0)) : this._scriptLoader.fetch(this._kernelPath, {
                            id: "kernel"
                        }).then(this._loadSuccess.bind(this), this._loadError.bind(this))
                    }
                    _loadSuccess() {
                        i["c"].start("kernel_is_ready"), i["b"].kernelInstance ? setTimeout(() => this.isReady(), 0) : (window.ConfiguratorKernel(this._kernelContainer), window.ConfiguratorKernel = null)
                    }
                    _loadError() {
                        this._configuratorKernelAccessCallback.loadError()
                    }
                    selectedComponent(e) {
                        this._updateComponentDependencies(e)
                    }
                    uiRequestConfiguration(e) {
                        
                        const t = this._kernelInstance.getSerializedConfiguration(e);
                        i["C"].finishOperation(1, t)
                    }
                    _updateComponentParameters(e) {
                        let t = this._kernelInstance.getComponentParameters(e);
                        const n = this._kernelInstance.getComponent(e);
                        this._configuratorKernelAccessCallback.updateParameters(t, n.parameterGroups, e, 1)
                    }
                    selectionChange(e, t) {
                        let n = !1,
                            i = [];
                        if (e) {
                            let t = this._kernelInstance.getComponent(e);
                            t.componentId = this._kernelInstance.getComponentId(e), t && t.childIds && t.childIds.length > 0 && (n = !0), i.push(t)
                        }
                        this._configuratorUiCallbacks.onSelectionChange("standard", t, n, i)
                    }
                    multiSelectionChange(e, t) {
                        this._updateCommonComponentDependencies(e);
                        let n = !1,
                            i = !1,
                            o = [];
                        e && e.forEach(e => {
                            let s = this._kernelInstance.getComponent(e);
                            s.componentId = this._kernelInstance.getComponentId(e), s && s.childIds && s.childIds.length > 0 && (n = !0), s.id === t && (i = !0), o.push(s)
                        }), this._configuratorUiCallbacks.onSelectionChange("multiselect", i, n, o)
                    }
                    _updateCommonComponentDependencies(e) {
                        const {
                            parameters: t,
                            parameterGroups: n
                        } = this._kernelInstance.getCommonPlanComponentParameters(this._utilityToLongArray(e));
                        this._configuratorKernelAccessCallback.updateParameters(t, n, e, 2)
                    }
                    _updateComponentChildren(e) {
                        const t = this._kernelInstance.getPlanComponentPossibleChildren(e);
                        this._configuratorKernelAccessCallback.updatePossibleChildren(e, t, 1)
                    }
                    _updateComponentDependencies(e) {
                        this._updateComponentParameters(e), this._updateComponentChildren(e)
                    }
                    _updatePlanObjectParameters(e) {
                        let t, n = this._kernelInstance.getPlanObjectParameters(e);
                        if (0 === n.length) {
                            let i = this._kernelInstance.getRootPlanComponentIdFromObjectId(e);
                            n = this._kernelInstance.getComponentParameters(i), this._enableRootComponentParametersAsGlobal(), t = this._kernelInstance.getComponent(i)
                        } else this._configuratorContext.rootComponentParametersAsGlobal = !1, t = this._kernelInstance.getPlanObject(e);
                        this._configuratorKernelAccessCallback.updateParameters(n, t.parameterGroups, e, 0)
                    }
                    _enableRootComponentParametersAsGlobal() {
                        this._configuratorContext.selectedRuntimeComponentId || (this._configuratorContext.rootComponentParametersAsGlobal = !0)
                    }
                    _updatePlanObjectChildren(e) {
                        const t = this._kernelInstance.getPlanObjectPossibleChildren(e);
                        this._configuratorKernelAccessCallback.updatePossibleChildren(e, t, 0)
                    }
                    updatePlanObjectDependencies(e) {
                        this._updatePlanObjectParameters(e), this._updatePlanObjectChildren(e)
                    }
                    _updateConfigurationHasChildren(e, t = null) {
                        t || (t = this._kernelInstance.getComponent(this._kernelInstance.getRootPlanComponentIdFromObjectId(e)));
                        const n = t.childIds.size ? t.childIds.size() : t.childIds.length;
                        this._configuratorUiCallbacks.onConfigurationHasChildren(n > 0)
                    }
                    dockComponent(e, t, n, i) {
                        const o = this._kernelInstance.getComponentId(n),
                            s = this._kernelInstance.getComponentId(e);
                        this._kernelInstance.dockComponent(n, i, e, t), this._configuratorUiCallbacks.onUserInitiatedDockDone(o, i, s, t, null)
                    }
                    changeUseOfHDGeometry(e, t) {
                        this._rapiAccess.changeUseOfHDGeometry();
                        const n = e.planObjectId,
                            o = e.lastLoadedRapiId ? e.lastLoadedRapiId : this._kernelInstance.getComponentId(n),
                            s = this._kernelInstance.getSerializedConfiguration(n);
                        this._kernelInstance.clearAll(), this._kernelInstance.useHDGeometry(t), i["C"].finishOperation(3, [s, o])
                    }
                    webGlPreviewDockings(e, t) {
                        i["C"].waitFor(4).then(n => {
                            t && this.requestPlanComponentConstruction(n), this._kernelInstance.requestPreviewGeometry(n, e.planObjectId)
                        }), e.lastPossibleChild && e.lastPossibleChild.isComponent && this._kernelInstance.loadPlainComponent(i["e"], e.lastPossibleChild.id, e.lastPossibleChild.configuration), e.lastPossibleChild && e.lastPossibleChild.isItem && this._kernelInstance.loadFreeFlyingConfiguration(i["e"], e.lastPossibleChild.configuration)
                    }
                    previewDockingsWithDrag(e, t) {
                        this._kernelInstance.requestPreviewGeometry(e, t)
                    }
                    loadConfiguration(e) {
                        this._initData.id ? this._memoryManager.loadingConfiguration(this._initData.id) : this._memoryManager.loadingConfigurationString(), this._memoryManager.shouldHardReset() ? this._kernelInstance.clearAll() : this._kernelInstance.clearScene(), this._kernelInstance.loadConfiguration(i["R"], e, {
                            x: 0,
                            y: 0,
                            z: 0
                        })
                    }
                    changeCommonComponentParameter(e, t, n, i, o, s) {
                        "string" == typeof i ? this._kernelInstance.setPlanComponentParameters(this._utilityToLongArray(e), t, i) : console.warn("tried to set a parameter to a none string value!", i, t, n), this._finishParameterChange(n, o, s), this._updateCommonComponentDependencies(e)
                    }
                    changeComponentParameter(e, t, n, i, o, s) {
                        "string" == typeof i ? this._kernelInstance.setComponentParameter(e, t, i) : console.warn("tried to set a parameter to a none string value!", i, t, n), this._finishParameterChange(n, o, s), this._updateComponentDependencies(e)
                    }
                    changePlanObjectParameter(e, t, n, i, o, s) {
                        "string" == typeof i ? this._kernelInstance.setPlanObjectParameter(e, t, i) : console.warn("tried to set a parameter to a none string value!", i, t, n), this._finishParameterChange(n, o, s)
                    }
                    _finishParameterChange(e, t, n) {
                        -1 === C.indexOf(e) ? setTimeout(() => t(), 0) : this._configuratorKernelCallbackListener.forEach(e => e.finishParameterChange(t, n))
                    }
                    requestDeleteComponents(e) {
                        e && this._kernelInstance.deletePlanComponents(this._utilityToLongArray(e))
                    }
                    _calcPrice() {
                        const e = new Map;
                        if (this._initData.useRoomlePrice) {
                            let e = this._kernelInstance.getFullPartList();
                            if (e && e.fullList && e.fullList.length) {
                                const t = e.fullList[0].currencySymbol,
                                    n = e.fullList.reduce((e, t) => e + (t.count ? t.count : 0) * (t.price ? t.price : 0), 0);
                                this._configuratorUiCallbacks.onUpdatePrice(t, n)
                            }
                        } else if (this._initData.usePriceService) {
                            let t = this._kernelInstance.getFullPartList();
                            if (t && t.fullList && t.fullList.length) {
                                const n = t.fullList.reduce((t, n) => {
                                    const o = Object(i["ab"])(n);
                                    return o && (e.set(o, n), t.push(o)), t
                                }, []);
                                return new Promise((s, r) => {
                                    this._rapiAccess.getPrices(n).then(n => {
                                        if (!n.length) return r(new Error("prices are empty"));
                                        const a = Object(o["n"])(n, "priceId");
                                        let l = 0;
                                        return t.fullList.forEach(e => {
                                            const t = Object(i["ab"])(e);
                                            if (!a.has(t)) return void console.warn("PriceId: " + t + " has no corresponding kernel-part");
                                            const {
                                                price: n,
                                                currencySymbol: o
                                            } = a.get(t);
                                            e.price = n, e.currencySymbol = o, l += n * e.count
                                        }), this._configuratorUiCallbacks.onUpdatePrice(n[0].currencySymbol, l), s({
                                            totalSum: l,
                                            partMap: e
                                        })
                                    }, e => {
                                        console.error(e), r(e)
                                    })
                                })
                            }
                        }
                        return Promise.resolve({
                            totalSum: 0,
                            partMap: e
                        })
                    }
                    loadComponentIntoKernel(e) {
                        this._kernelInstance.loadComponentDefinition(10, e)
                    }
                    async addUiDataAndPriceToPartList(e, t) {
                        const {
                            fullList: n,
                            originPart: o
                        } = e, s = e.perMainComponent;
                        let r;
                        this.addUiDataToPartList(n, t);
                        try {
                            const e = await this._calcPrice();
                            r = e.partMap
                        } catch (e) {
                            console.error(e), r = new Map
                        }
                        const a = this._initData.usePriceService || this._initData.useRoomlePrice,
                            l = e => {
                                a || (e.price = null, e.currencySymbol = null);
                                const t = Object(i["ab"])(e);
                                if (!t) return;
                                if (!r.has(t)) return;
                                const {
                                    price: n,
                                    currencySymbol: o
                                } = r.get(t);
                                "number" == typeof n && (e.price = n, e.currencySymbol = o)
                            };
                        return n.forEach(l), s.forEach(({
                            fullList: e,
                            perMainComponent: n
                        }) => {
                            n.length > 0 && console.error("Not implemented! perMainComponent is deeper than one level"), this.addUiDataToPartList(e, t), e.forEach(l)
                        }), {
                            fullList: n,
                            perMainComponent: s,
                            originPart: o
                        }
                    }
                    async requestPartListAndUpdatePricesOfParts(e, t) {
                        let n = this._kernelInstance.getFullPartList();
                        e || (e = this._kernelInstance.getHashOfConfiguration(this._configuratorContext.planObjectId));
                        const i = await this.addUiDataAndPriceToPartList(n, e);
                        this._configuratorUiCallbacks.onPartListUpdate(i, btoa(e));
                        console.log('??')
                        console.log(i);
                    }
                    addUiDataToPartList(e, t) {
                        const n = [];
                        return e.forEach(e => {
                            const t = this._rapiAccess.peekComponent(e.componentId);
                            !t || e.labelIsCalculated && e.label || (e.label = t.label), e.parameters.forEach(e => {
                                if (this._unitFormatter.formatPartListParameter(e), u(e)) {
                                    const t = this._rapiAccess.peekMaterial(e.value);
                                    t ? e.valueLabel = t.label || t.name || e.value : -1 === n.indexOf(e.value) && n.push(e.value)
                                }
                            })
                        }), n.length && this._rapiAccess.getMaterials(n).then(e => {
                            const n = this._lastPartListHash !== t;
                            Array.isArray(e) && e.length && n && (this._lastPartListHash = t, this.requestPartListAndUpdatePricesOfParts())
                        }), e
                    }
                    requestSync(e, t) {
                        this.planObjectCreated(e, t), this._kernelInstance.syncPlanObjectToView(e, t)
                    }
                    getGlobalParameters(e, t) {
                        return new Promise(n => {
                            let i = this._kernelInstance.getPlanObjectParameters,
                                o = e;
                            t && (i = this._kernelInstance.getComponentParameters, o = this._kernelInstance.getRootPlanComponentIdFromObjectId(e)), n(i.apply(this._kernelInstance, [o]))
                        })
                    }
                    getPartList() {
                        return new Promise(e => {
                            e(this._kernelInstance.getFullPartList())
                        })
                    }
                    getConfigurationHash(e) {
                        return new Promise(t => t(this._kernelInstance.getHashOfConfiguration(e.planObjectId)))
                    }
                    requestPlanObjectConstruction(e) {
                        this._kernelInstance.requestPlanObjectConstruction(e)
                    }
                    isReady() {
                        super.isReady(), i["c"].end("kernel_is_ready"), i["c"].start("kernel_create_instance"), i["b"].kernelInstance ? this._kernelInstance = i["b"].kernelInstance : this._kernelInstance = new this._kernelContainer.Kernel, this._kernelContainer.registerConfiguratorCallback(this), i["c"].end("kernel_create_instance");
                        const {
                            overrideCountry: e,
                            locale: t
                        } = this._globalInitData;
                        e && (this._kernelInstance.resetPriceListIds(), this._kernelInstance.addPriceList(e)), i["f"].isProduction || (window.__RML__DEBUG__.Kernel = this._kernelInstance, window.__RML__DEBUG__.KernelContainer = this._kernelContainer, window.__RML__DEBUG__.Helper = {
                            convertCObject: i["S"]
                        }), this._kernelInstance.setEnvironmentVariable("language", t), this._unitFormatter.init(this._kernelContainer), this._configuratorKernelAccessCallback.isReady(), this._configuratorUiCallbacks.onConfiguratorKernelIsReady(this._kernelContainer, this._kernelInstance), i["b"].planObjectId && this.planObjectCreated(-1, i["b"].planObjectId)
                    }
                    onLoadComponentError(e) {
                        this._configuratorUiCallbacks.onComponentLoadError(e)
                    }
                    configurationLoaded(e, t, n, o, s) {
                        i["C"].finishOperation(4, n), this._configuratorKernelCallbackListener.forEach(i => i.configurationLoaded(e, t, n, o, s))
                    }
                    componentDefinitionLoaded(e, t) {
                        i["C"].finishOperation(0, t)
                    }
                    componentDefinitionLoadingError(e, t) {
                        i["C"].failOperation(0, new Error(t))
                    }
                    configurationLoadingError() {
                        const e = "Configuration loading error";
                        i["C"].failOperation(4, new Error(e)), i["C"].failOperation(2, new Error(e))
                    }
                    componentConfigurationUpdated(e, t) {
                        this._configuratorKernelCallbackListener.forEach(n => n.componentConfigurationUpdated(e, t)), this._kernelInstance.requestDeltaPlanComponentConstruction(e)
                    }
                    setActiveGroupInView(e) {
                        this._kernelInstance.setActiveGroupInView(e)
                    }
                    componentParameters() {}
                    requestComponentDimensions() {}
                    planObjectCreated(e, t) {
                        this._configuratorKernelCallbackListener.forEach(n => n.planObjectCreated(e, t))
                    }
                    planObjectUpdated(e) {
                        const t = this._kernelInstance.getPlanObject(e);
                        this._onBoundsUpdate(t), this._configuratorKernelCallbackListener.forEach(e => e.planObjectUpdated(t))
                    }
                    planObjectConfigurationUpdated(e, t, n) {
                        this.updatePlanObjectDependencies(e);
                        let i = this._kernelInstance.getComponent(this._kernelInstance.getRootPlanComponentIdFromObjectId(e));
                        this._configuratorKernelCallbackListener.forEach(i => i.planObjectConfigurationUpdated(e, t, n));
                        const o = this._kernelInstance.getPlanObject(e);
                        return this._onBoundsUpdate(o), this._updateConfigurationHasChildren(e, i), this.requestPartListAndUpdatePricesOfParts(n)
                    }
                    _onBoundsUpdate(e) {
                        if (!e.boxForMeasurement) return;
                        let t = {
                            width: this._unitFormatter.formatMMValueToUnitString(e.boxForMeasurement.size.x),
                            height: this._unitFormatter.formatMMValueToUnitString(e.boxForMeasurement.size.z),
                            depth: this._unitFormatter.formatMMValueToUnitString(e.boxForMeasurement.size.y)
                        };
                        this._configuratorUiCallbacks.onBoundsUpdate(t)
                    }
                    planObjectDeleted() {}
                    requestPlanObjectDimensions() {}
                    requestExternalMesh(e, t) {
                        return new Promise((n, o) => {
                            this._rapiAccess.getMesh(e, i["n"], t).then(i => {
                                fetch(new Request(this._dataSyncer.requestAsset(i.url, !0))).then(e => e.arrayBuffer()).then(i => {
                                    try {
                                        this._kernelInstance.addMeshCorto(e, t, new Uint8Array(i)), n()
                                    } catch (e) {
                                        console.error(e), this._configuratorUiCallbacks.onMemoryCorruption(), n()
                                    }
                                }).catch(e => {
                                    console.error(e), o(e)
                                })
                            }, e => {
                                console.error(e), o(e)
                            })
                        })
                    }
                    Editor3dComponentCreated(e, t, n, i) {
                        this._configuratorKernelCallbackListener.forEach(o => o.Editor3dComponentCreated(e, t, n, i, !1)), i && i > 0 && this._configuratorKernelCallbackListener.forEach(o => o.Editor3dComponentDocked(e, i, t, n))
                    }
                    Editor3dRootComponentCreated(e, t, n, i) {
                        this._configuratorKernelCallbackListener.forEach(o => o.Editor3dComponentCreated(e, t, n, i, !0))
                    }
                    Editor3dGeometryReady(e) {
                        this._configuratorKernelCallbackListener.forEach(t => t.Editor3dGeometryReady(e)), this.requestPlanComponentConstruction(e)
                    }
                    Editor3dGeometryNotReady(e) {
                        this._configuratorKernelCallbackListener.forEach(t => t.Editor3dGeometryNotReady(e))
                    }
                    Editor3dPlanObjectConstructionDone(e) {
                        return this._configuratorKernelCallbackListener.forEach(t => t.Editor3dPlanObjectConstructionDone(e)), this.updatePlanObjectDependencies(e), this._updateConfigurationHasChildren(e), i["c"].end("ui_load_configuration"), this._calcPrice()
                    }
                    Editor3dBeginGroup() {}
                    Editor3dEndGroup() {}
                    Editor3dSetMaterial() {}
                    Editor3dLoadMaterial() {}
                    Editor3dAddDockPreview(e, t) {
                        this._configuratorKernelCallbackListener.forEach(n => n.Editor3dAddDockPreview(e, t))
                    }
                    Editor3dSetPreviewPointAssociations(e, t) {
                        this._configuratorKernelCallbackListener.forEach(n => n.Editor3dSetPreviewPointAssociations(e, t))
                    }
                    Editor3dSetPreviewLineAssociations(e, t) {
                        this._configuratorKernelCallbackListener.forEach(n => n.Editor3dSetPreviewLineAssociations(e, t))
                    }
                    Editor3dPreviewConstructionDone(e, t) {
                        this._configuratorKernelCallbackListener.forEach(n => n.Editor3dPreviewConstructionDone(e, t))
                    }
                    Editor3dTranslateBy() {}
                    Editor3dRotateBy() {}
                    Editor3dRotateAround() {}
                    Editor3dAddCube() {}
                    Editor3dAddCubeUVMod() {}
                    Editor3dAddSphere() {}
                    Editor3dAddSphereUVMod() {}
                    Editor3dAddRectangle() {}
                    Editor3dAddRectangleUVMod() {}
                    Editor3dAddMesh() {}
                    Editor3dAddMeshUVMod() {}
                    Editor3dAddMeshUVCoord() {}
                    Editor3dAddCylinder() {}
                    Editor3dAddCylinderUVMod() {}
                    Editor3dAddPrism() {}
                    Editor3dAddPrismUVMod() {}
                    Editor3dAddFittingPoint() {}
                    Editor3dAddFittingLine() {}
                    Editor3dSelectObject() {}
                    Editor3dCopy() {}
                    Editor3dUpdatePlanObjectPosition() {}
                    Editor3dUpdatePlanObjectRotation() {}
                    Editor3dUpdatePlanObjectTransform() {}
                    Editor3dUpdatePlanComponentPosition() {}
                    Editor3dUpdatePlanComponentRotation() {}
                    Editor3dUpdatePlanComponentTransform() {}
                    getRuntimeComponentIdOfRootComponent(e) {
                        return this._kernelInstance ? this._kernelInstance.getRootPlanComponentIdFromObjectId(e) : (console.warn("this._kernelInstance not ready now"), 0)
                    }
                    getRuntimeComponentId(e) {
                        return this._kernelInstance.getComponentId(e)
                    }
                    getParameterGroups() {
                        if (!this._configuratorContext.planObjectId) return [];
                        const e = this._kernelInstance.getRootPlanComponentIdFromObjectId(this._configuratorContext.planObjectId);
                        return this._kernelInstance.getComponent(e).parameterGroups
                    }
                    resume() {
                        this.muteKernelCallbacks || super.resume()
                    }
                    getSerializedConfiguration(e) {
                        return this._kernelInstance.getSerializedConfiguration(e)
                    }
                    getCurrentConfigurationHash(e) {
                        return this._kernelInstance.getHashOfConfiguration(e)
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_unitFormatter", void 0), Object(i["B"])([i["Y"]], e.prototype, "_memoryManager", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorKernelAccessCallback", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorContext", void 0), Object(i["B"])([i["Y"]], e.prototype, "_initData", void 0), Object(i["B"])([i["Y"]], e.prototype, "_globalInitData", void 0), e
            })();
            class b {
                constructor(e) {
                    const {
                        component: t,
                        resetCamera: n
                    } = e;
                    this.component = t, this.resetCamera = void 0 === n || n
                }
            }
            const v = new Map,
                w = new Map;
            class y {
                static loadFont(e) {
                    if (w.has(e)) return new Promise(t => {
                        t(w.get(e))
                    });
                    if (v.has(e)) return new Promise((t, n) => {
                        v.get(e).push({
                            resolve: t,
                            reject: n
                        })
                    });
                    let t = new THREE.FontLoader;
                    return new Promise((n, i) => {
                        v.set(e, [{
                            resolve: n,
                            reject: i
                        }]), t.load(Object(o["i"])() + e, t => {
                            w.set(e, t), y._resolveAll(e, t)
                        })
                    })
                }
                static _resolveAll(e, t) {
                    v.has(e) && v.get(e).forEach(e => e.resolve(t)), v.delete(e)
                }
            }
            var E = "static/rubik_regular_sub-eb3f3b61078695cc.json";
            let S = (() => {
                class e {
                    constructor(e, t) {
                        this._addOnSpotIcons = new Map, this.previewGhostEnabled = !1, this.addOnSpotsEnabled = !1, this._state = 3, this._camera = e, this._textMaterial = new THREE.MeshStandardMaterial({
                            color: 8947848
                        });
                        let n = new THREE.Geometry;
                        this._plusText = new THREE.Mesh(n, this._textMaterial), this._plusText.layers.set(4), y.loadFont("static/rubik_regular_sub-eb3f3b61078695cc.json").then(e => {
                            this._font = e;
                            let t = {
                                font: this._font,
                                size: .05,
                                height: .001,
                                curveSegments: 2,
                                bevelEnabled: !0,
                                bevelThickness: .001,
                                bevelSize: .001
                            };
                            this._plusTextGeometry = new THREE.TextGeometry("+", t), this._plusTextGeometry.computeBoundingBox(), this._plusText.geometry = this._plusTextGeometry
                        }), this._plusButtonPromise = new Promise((e, n) => {
                            t.fetch(i["h"], {
                                id: "gltf-loader-js"
                            }).then(() => {
                                (new THREE.GLTFLoader).load(Object(o["i"])() + "static/AddButtonRound-8004fa7dffdf7501.glb", t => {
                                    t && t.scene && t.scene.children && t.scene.children.length > 0 ? (this._onPlusButtonLoaded(t.scene.children[0]), e()) : n("loaded scene has no childrens")
                                }, e => {}, e => {
                                    console.error(e), n(e)
                                })
                            })
                        })
                    }
                    _onPlusButtonLoaded(e) {
                        e && (this._plusButton = e, this._plusButton.material = this._textMaterial, this._plusButton.layers.set(4), this._plusButton.scale.copy(new THREE.Vector3(.08, .08, .08)))
                    }
                    _performUpdate(e) {
                        if (this.addOnSpotsEnabled)
                            for (let t of this._addOnSpotIcons.values()) t.forEach(e => {
                                e.geometry.center();
                                let t = new THREE.Vector3(0, 1, 0);
                                t.applyQuaternion(this._camera.quaternion), e.up.copy(t), e.lookAt(this._camera.position)
                            })
                    }
                    addAddOnSpots(e, t) {
                        Promise.all([this._plusButtonPromise]).then(() => {
                            this.addOnSpotsEnabled && this._plusButton && (this.deleteAddonPointsForComponent(e.roomleId), t.forEach(t => {
                                const n = this._plusButton.clone();
                                n.name = "addOnSpot " + e.roomleId, n.layers.set(7), n.position.copy(this.getPositionForAddOnPosition(new THREE.Vector3(t.position.x, t.position.y, t.position.z))), this._addOnSpotIcons.has(e.roomleId) ? this._addOnSpotIcons.get(e.roomleId).push(n) : this._addOnSpotIcons.set(e.roomleId, [n]), n.geometry.computeBoundingBox();
                                const i = n.geometry.boundingBox,
                                    s = i.getSize(new THREE.Vector3),
                                    r = new THREE.BoxGeometry(s.x, s.y, s.z),
                                    a = new THREE.Mesh(r, new THREE.MeshStandardMaterial({
                                        color: "#FFFFFF",
                                        transparent: !0,
                                        opacity: 0,
                                        polygonOffset: !0,
                                        polygonOffsetFactor: -1
                                    }));
                                a.layers.set(4), a.translateOnAxis(i.getCenter(new THREE.Vector3), 1), a.renderOrder = 3, a.visible = !0, n.add(a), a.userData = {
                                    hasListener: !0,
                                    priority: 3,
                                    roomleId: e.roomleId
                                }, a.addEventListener("select", () => {
                                    this._onAddonClick && this._onAddonClick()
                                }), a.addEventListener("hover_on", () => {
                                    Object(o["p"])("pointer"), this._configuratorUiCallbacks.onAddonPlusHover()
                                }), a.addEventListener("hover_off", () => {
                                    Object(o["p"])("default"), this._configuratorUiCallbacks.onAddonPlusHoverOff()
                                }), e.add(n)
                            }))
                        })
                    }
                    deleteAddonPointsForComponent(e) {
                        this.addOnSpotsEnabled && this._addOnSpotIcons.has(e) && (this._addOnSpotIcons.get(e).forEach(e => {
                            e.parent.remove(e)
                        }), this._addOnSpotIcons.delete(e))
                    }
                    getPositionForAddOnPosition(e) {
                        let t = new THREE.Vector3;
                        return t.set(e.x / 1e3, e.z / 1e3, e.y / -1e3), t
                    }
                    update(e = !1) {
                        this._performUpdate(e)
                    }
                    changePreviewGhostVisibility(e, t) {
                        this.previewGhostEnabled && (t ? (e.add(this._plusText), this._plusText.position.copy((new THREE.Vector3).add(e.boundingBox.getCenter(new THREE.Vector3))), this._plusText.geometry.center()) : e.remove(this._plusText))
                    }
                    _changeAddOnSpotVisibility(e) {
                        this.addOnSpotsEnabled && this._addOnSpotsVisible !== e && (this._addOnSpotsVisible = e)
                    }
                    isAddOnSpotVisible() {
                        return this._addOnSpotsVisible && this.addOnSpotsEnabled
                    }
                    onAddonClick(e) {
                        this._onAddonClick = e
                    }
                    setState(e) {
                        1 === this._state && 2 !== e || 1 === e && 5 === this._state || 3 !== e && 5 === this._state || (4 !== e && 1 !== e && 5 !== e || this._changeAddOnSpotVisibility(!1), 3 !== e && 2 !== e && 0 !== e || this._changeAddOnSpotVisibility(!0), this._state = e)
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_configuratorUiCallbacks", void 0), e
            })();
            class P {
                constructor(e) {
                    const {
                        component: t,
                        preview: n,
                        resetCamera: i,
                        type: o,
                        forceRender: s
                    } = e;
                    this.component = t, this.preview = n, this.resetCamera = void 0 === i || i, this.type = o || 0, this.forceRender = void 0 !== s && s
                }
            }
            let I = (() => {
                class e extends r["d"] {
                    constructor(e, t, n, i, o) {
                        super(), this._debug = !1, this._cameraMoving = !1, this._dragIn = !1, this._creator_ = e, this._raycastHelper = new s["b"](t, n, i), this._addonHelper = o, this._raycastHelper.addEventListener(3, () => {
                            this._clickOutside()
                        }, this), this._selectionHandler.addEventListener(0, ({
                            component: e
                        }) => {
                            this.dispatchEvent(8, new P({
                                component: e
                            })), this._inputManager.setDragEnabled(!0)
                        }, this), this._selectionHandler.addEventListener(1, ({
                            component: e,
                            resetCamera: t
                        }) => {
                            this._selectionHandler.hasSelection() || this._inputManager.setDragEnabled(!1), this.dispatchEvent(9, new P({
                                component: e,
                                resetCamera: t
                            }))
                        }, this), this._inputManager = i, this._addInputListeners(i)
                    }
                    _addInputListeners(e) {
                        e.addEventListener(7, e => this._interaction(), this), e.addEventListener(8, e => this._interaction(), this)
                    }
                    addComponentHandlers(e) {
                        this._addComponentHandlers(e, e.boundingBoxMesh, {
                            hasListener: !0,
                            priority: 1,
                            roomleId: e.roomleId
                        }), e.meshes.forEach(t => {
                            this._addComponentHandlers(e, t, {
                                hasListener: !0,
                                priority: 2,
                                roomleId: e.roomleId
                            })
                        })
                    }
                    addComponentDragInHandler(e) {
                        this._dragIn && (this._addComponentHandlers(e, e.boundingBoxMesh, {
                            hasListener: !0,
                            priority: 1,
                            roomleId: e.roomleId
                        }), this._raycastHelper.enableDragIn(e.boundingBoxMesh))
                    }
                    _addComponentHandlers(e, t, n) {
                        t.userData.hasListener || (Object.assign(t.userData, n), t.addEventListener("select", () => this._clickComponent(e)), t.addEventListener("hover_on", t => this._hoverOn(e, t.attachment.type)), t.addEventListener("hover_off", t => this._hoverOff(e, t.attachment.type)), t.addEventListener("drag_start", () => this._dragStart(e)), t.addEventListener("drag", t => this._drag(e, t.attachment.position)), t.addEventListener("drag_end", t => this._dragEnd(e, t.attachment.position)))
                    }
                    addPreviewHandlers(e) {
                        let t = e.boundingBoxMesh;
                        t.userData.hasListener || (t.userData = {
                            hasListener: !0,
                            priority: 3,
                            roomleId: e.roomleId
                        }, t.addEventListener("select", () => this._clickPreview(e)), t.addEventListener("hover_on", () => this._hoverOnPreview(e)), t.addEventListener("hover_off", () => this._hoverOffPreview(e)))
                    }
                    addPreviewLineHandlers(e) {
                        let t = e.boundingLineMesh;
                        t.userData.hasListener || (t.userData = {
                            hasListener: !0,
                            priority: 4,
                            roomleId: e.roomleId
                        }, t.addEventListener("select", () => this._clickPreviewLine(e)), t.addEventListener("hover_on", t => this._hoverOnPreviewLine(e, t.attachment.intersection)), t.addEventListener("hover_move", t => this._hoverMovePreviewLine(e, t.attachment.intersection)), t.addEventListener("hover_off", () => this._hoverOffPreviewLine(e)))
                    }
                    _clickPreview(e) {
                        this._dragStartPosition && (e.position.copy(this._dragStartPosition), this._dragStartPosition = null), this.dispatchEvent(7, new P({
                            preview: e
                        }))
                    }
                    _clickPreviewLine(e) {
                        this._dragStartPosition && (e.position.copy(this._dragStartPosition), this._dragStartPosition = null), this.dispatchEvent(7, new P({
                            preview: e
                        }))
                    }
                    _clickComponent(e) {
                        this._debug && e.roomleId, this._selectionHandler.check(e)
                    }
                    _clickOutside() {
                        this._selectionHandler.cancelSelection(), this.dispatchEvent(3), this._interaction()
                    }
                    _hoverOn(e, t) {
                        this._cameraMoving || (this._debug && e.roomleId, e.hoverOn(), this._interaction(), this.dispatchEvent(1, new P({
                            component: e,
                            type: t
                        })), this._hoveredComponent = e)
                    }
                    _hoverOff(e, t) {
                        this._cameraMoving || (this._debug && e.roomleId, e.hoverOff(), this._interaction(), this.dispatchEvent(2, new P({
                            component: e,
                            type: t
                        })), this._hoveredComponent = null)
                    }
                    _hoverOnPreview(e) {
                        e.hoverOn(), this._interaction(!0), this._hoveredPreview = e, this._addonHelper && this._addonHelper.changePreviewGhostVisibility(e, !0)
                    }
                    _hoverOffPreview(e) {
                        e.hoverOff(), this._interaction(!0), this._hoveredPreview = null, this._addonHelper && this._addonHelper.changePreviewGhostVisibility(e, !1)
                    }
                    _hoverOnPreviewLine(e, t) {
                        this._updatePositionForPreviewLine(e, t), this._draggedComponent || e.hoverOn(), this._interaction(), this._hoveredPreview = e
                    }
                    _hoverMovePreviewLine(e, t) {
                        this._updatePositionForPreviewLine(e, t), this._hoveredPreview = e, this._interaction(!0)
                    }
                    _updatePositionForPreviewLine(e, t) {
                        let n = t.object.parent.parent.worldToLocal(t.point);
                        this._previewLineIntersection = n, e && (this._draggedComponent ? this._draggedComponent.visible = !0 : e.updatePreviewPosition(n))
                    }
                    _hoverOffPreviewLine(e) {
                        this._draggedComponent || e.hoverOff(), this._interaction(), this._hoveredPreview = null, this._previewLineIntersection = null
                    }
                    _setDragComponentShadow(e) {
                        this._draggedComponent.traverse(t => {
                            if (t instanceof THREE.Mesh) {
                                const n = t;
                                e && void 0 !== n.castShadowOld ? (n.receiveShadow = n.receiveShadowOld, n.castShadow = n.castShadowOld) : (n.receiveShadowOld = t.receiveShadow, n.castShadowOld = t.castShadow, n.receiveShadow = !1, n.castShadow = !1)
                            }
                        })
                    }
                    _dragStart(e) {
                        e && (this._selectionHandler.isSelected(e) || this.isDragIn()) && (this._dragStartPosition = e.position.clone(), this._dragStartRotation = e.rotation.clone(), this._draggedComponent = e, this._setDragComponentShadow(!1), this.dispatchEvent(4, new P({
                            component: e
                        })), this._interaction())
                    }
                    _drag(e, t) {
                        if (e && (this._selectionHandler.isSelected(e) || this.isDragIn())) {
                            if (e && !this._draggedComponent && (this._draggedComponent = e), this._previewLineIntersection) {
                                let e = this._hoveredPreview,
                                    t = e.getPositionForIntersectionPoint(this._previewLineIntersection),
                                    n = e.parent.localToWorld(t);
                                this._draggedComponent.position.copy(this._draggedComponent.parent.worldToLocal(n)), this._draggedComponent.rotation.copy(e.docklineRotation), e.hideSelectionLine()
                            } else e.parent ? e.position.copy(e.parent.worldToLocal(t)) : e.position.copy(t);
                            this._hoveredPreview ? e.visible = !1 : e.visible = !0, this.dispatchEvent(5, new P({
                                component: e
                            })), this._interaction()
                        }
                    }
                    _dragEnd(e, t) {
                        if (e && (this._selectionHandler.isSelected(e) || this.isDragIn())) {
                            if (this._hoveredPreview)
                                if (this._previewLineIntersection) {
                                    let t = this._hoveredPreview,
                                        n = t.getPositionForIntersectionPoint(this._previewLineIntersection),
                                        i = t.parent.localToWorld(n);
                                    e.position.copy(e.parent.worldToLocal(i)), e.rotation.copy(t.docklineRotation)
                                } else e.position.copy(t);
                            else this._dragStartPosition && this._dragStartRotation && (e.position.copy(this._dragStartPosition), e.rotation.copy(this._dragStartRotation), this._dragStartPosition = null, this._dragStartRotation = null, this.addComponentHandlers(e));
                            e.visible = !0, this._setDragComponentShadow(!0), this._draggedComponent = null, this._previewLineIntersection = null, this.dispatchEvent(6, new P({
                                component: e,
                                preview: this._hoveredPreview
                            })), this._interaction()
                        }
                    }
                    _interaction(e) {
                        this.dispatchEvent(0, new P({
                            forceRender: e
                        }))
                    }
                    hasSelection() {
                        return this._selectionHandler.hasSelection()
                    }
                    update(e, t, n) {
                        this._raycastHelper.update(e, t, n)
                    }
                    setDragIn(e, t) {
                        this._dragIn = e, e ? this._inputManager.enableDragIn(t) : this._raycastHelper.clear(), this._interaction()
                    }
                    isDragIn() {
                        return this._dragIn
                    }
                    isDragging() {
                        return null != this._draggedComponent
                    }
                    setRootComponentId(e) {
                        this._raycastHelper.setRootComponentId(e)
                    }
                    cancelSelection() {
                        this._selectionHandler.setSelectionMode("standard"), this._selectionHandler.cancelSelection()
                    }
                    setSelectionMode(e) {
                        this._selectionHandler.setSelectionMode(e)
                    }
                    getSelectionMode() {
                        return this._selectionHandler.getSelectionMode()
                    }
                    getSelectedRuntimeComponentIds() {
                        return this._selectionHandler.getSelectedRuntimeComponentIds()
                    }
                    setCameraMoving(e) {
                        e && this._hoveredComponent && this._hoverOff(this._hoveredComponent, 0), this._cameraMoving = e
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_selectionHandler", void 0), e
            })();
            class k extends r["d"] {
                constructor(e) {
                    super(), this._uiIntersectionMask = 0, this.floorEnvironment = !1, this._camera = e
                }
                updateToBounds(e, t, n) {
                    let i = new THREE.Vector3(-e.x / 2, 0, -e.z / 2),
                        o = new THREE.Vector3(e.x / 2, e.y, e.z / 2);
                    this._boundingBox = new THREE.Box3(i, o), this._clientWidth = t, this._clientHeight = n;
                    let s = this._boundingBox.getSize(new THREE.Vector3);
                    this._boxVertices = [], this._boxVertices.push(this._boundingBox.min), this._boxVertices.push(this._boundingBox.min.clone().add(new THREE.Vector3(s.x, 0, 0))), this._boxVertices.push(this._boundingBox.max), this._boxVertices.push(this._boundingBox.max.clone().sub(new THREE.Vector3(s.x, 0, 0)))
                }
                set canvasOffset(e) {
                    this._offset = e, this.calculateUIIntersection()
                }
                calculateUIIntersection() {
                    let e = [];
                    if (null == this._boundingBox || null == this._offset) return;
                    let t = this._checkPaddings();
                    t.bottom = this._clientHeight - t.bottom, t.right = this._clientWidth - t.right;
                    let n = 0;
                    this.floorEnvironment ? (e = ["left", "right", "bottom"], n = 11) : (this._offset.left > 0 && t.left < this._offset.left * this._clientWidth && (e.push("left"), n |= 8), this._offset.right < 1 && t.right < (1 - this._offset.right) * this._clientWidth && (e.push("right"), n |= 2), this._offset.bottom > 0 && t.bottom < this._offset.bottom * this._clientHeight && (e.push("bottom"), n |= 1)), this._offset.top < 1 && t.top < (1 - this._offset.top) * this._clientHeight && (e.push("top"), n |= 4), n !== this._uiIntersectionMask && (this.dispatchEvent(0, e), this._uiIntersectionMask = n)
                }
                _checkPaddings() {
                    let e = {
                        left: this._clientWidth / 2,
                        top: this._clientHeight / 2,
                        right: this._clientWidth / 2,
                        bottom: this._clientHeight / 2
                    };
                    return this._boxVertices.forEach(t => {
                        let n = Object(i["W"])(t, this._camera, this._clientWidth, this._clientHeight);
                        n.x < e.left && (e.left = n.x), n.x > e.right && (e.right = n.x), n.y < e.top && (e.top = n.y), n.y > e.bottom && (e.bottom = n.y)
                    }), e
                }
            }
            let H = (() => {
                    class e {
                        constructor(e, t) {
                            this._forceRender = !1, this._maxAnisotropy = 1, this._clock = new THREE.Clock, this._delta = 0, this._depthWriteMaterial = new THREE.MeshBasicMaterial({
                                colorWrite: !1
                            }), this._lastChange = Date.now(), this._running = !1, this._onAfterRender = () => {}, this._creator_ = e, this._setupScene(t), this._configuratorViewModel.setListener(this), this._lifeCycleManager.addEventListener(this);
                            const {
                                plusInPreview: n,
                                addOnSpots: o
                            } = this._initData;
                            (n || o) && (this._addonHelper = new S(this._camera, this._scriptLoader), o && (this._addonHelper.onAddonClick(() => {
                                this._configuratorUiCallbacks.onOpenAddOns()
                            }), this._addonHelper.addOnSpotsEnabled = o), this._addonHelper.previewGhostEnabled = n), this._cameraControl = new r["b"](this._creator_, this._configuratorInputManager, null, this._camera), this._sceneEventHandler = new I(this._creator_, this._scene, this._camera, this._configuratorInputManager, this._addonHelper), this._sceneEventHandler.addEventListener(0, ({
                                forceRender: e
                            }) => {
                                this._uiIntersectionHelper.calculateUIIntersection(), this._addonHelper && this._addonHelper.setState(0), this._requestRender(e)
                            }, this), this._sceneEventHandler.addEventListener(1, ({
                                component: e,
                                type: t
                            }) => this._onHoverOn(e, t), this), this._sceneEventHandler.addEventListener(2, ({
                                component: e,
                                type: t
                            }) => this._onHoverOff(e, t), this), this._sceneEventHandler.addEventListener(3, () => {
                                this._configuratorUiCallbacks.onClickOutside(), this._cameraControl.unlock(), this._cancelDockings(!1, null, this._configuratorViewModel.hasPreviews(), !0), this.cancelSelection(!0), this._componentRaycastHelper && this._componentRaycastHelper.checkComponentVisibility(this._sceneEventHandler, this._configuratorViewModel), this._requestRender()
                            }, this), this._sceneEventHandler.addEventListener(8, ({
                                component: e
                            }) => {
                                this._configuratorViewModel.hasPreviews() && this._cancelDockings(!1, null, this._configuratorViewModel.hasPreviews(), !0), this._selectComponent(e), this._configuratorContext.selectedRuntimeComponentIds = this._sceneEventHandler.getSelectedRuntimeComponentIds(), "standard" === this._sceneEventHandler.getSelectionMode() ? this._onSelectedRuntimeComponentChange(e) : this._onSelectedRuntimeComponentsChange(this._sceneEventHandler.getSelectedRuntimeComponentIds()), this._requestRender()
                            }, this), this._sceneEventHandler.addEventListener(9, ({
                                component: e,
                                resetCamera: t
                            }) => {
                                this._deselectComponent(e, t), this._requestRender()
                            }, this), this._sceneEventHandler.addEventListener(4, ({
                                component: e
                            }) => {
                                "multiselect" === this._sceneEventHandler.getSelectionMode() && this.cancelSelection(), this._requestDockingsPreviewWithDrag(e.roomleId), this._cameraControl.lock(), this._requestRender()
                            }, this), this._sceneEventHandler.addEventListener(5, () => {
                                this._requestRender(!0)
                            }, this), this._sceneEventHandler.addEventListener(6, ({
                                component: e,
                                preview: t
                            }) => {
                                if (t) {
                                    let n = t;
                                    this._configuratorViewModel.isPreviewLine(n) ? this._configuratorViewModel.dockComponentWithPosition(n, e) : this._configuratorViewModel.isPreview(n) && this._dockComponent(n), this._cancelDockings(!t, e, !0, !0)
                                } else {
                                    let t = this._sceneEventHandler.isDragIn() ? e : null;
                                    this._cancelDockings(this._sceneEventHandler.isDragIn(), t, !1, !0);
                                    const n = this._configuratorViewModel.getBoundingBox();
                                    this._environment && this._environment.needsBounds() && this._environment.updateBounds(n.getSize(new THREE.Vector3))
                                }
                                this._cameraControl.unlock(), this._requestRender(!0)
                            }, this), this._sceneEventHandler.addEventListener(7, ({
                                preview: e
                            }) => {
                                this._configuratorViewModel.isPreview(e) && (this._configuratorViewModel.isPreviewLine(e) ? this._configuratorViewModel.dockComponentWithPosition(e) : this._dockComponent(e), this._cancelDockings(!1, null, !this._configuratorViewModel.hasPreviews(), !1), this.requestDockingsPreview(!1), this._requestRender())
                            }, this), this._cameraControl.addEventListener(0, () => {
                                this._configuratorUiCallbacks.onCameraPositionChanges(), this._sceneEventHandler.setCameraMoving(!0), this._addonHelper && this._addonHelper.setState(1), this._pixotronUtil.movingCameraStarts(), this._requestRender()
                            }, this), this._cameraControl.addEventListener(1, () => {
                                this._componentRaycastHelper && this._componentRaycastHelper.checkComponentVisibility(this._sceneEventHandler, this._configuratorViewModel), this._requestRender()
                            }, this), this._cameraControl.addEventListener(2, () => {
                                this._sceneEventHandler.setCameraMoving(!1), this._addonHelper && this._addonHelper.setState(2), this._pixotronUtil.movingCameraStops(), this._updateComponentPosition(), this._requestRender()
                            }, this), this._cameraControl.addEventListener(5, ({
                                minZoom: e,
                                maxZoom: t
                            }) => {
                                this._configuratorUiCallbacks.onZoomChange(e, t)
                            }, this), this._cameraControl.addEventListener(3, () => {
                                this._configuratorUiCallbacks.onCameraPositionChanges(), this._updateComponentPosition()
                            }, this), this._cameraControl.addEventListener(4, () => {
                                this._configuratorUiCallbacks.onCameraPositionChanges(), this._updateComponentPosition()
                            }, this), this._cameraControl.addEventListener(7, () => {
                                this._pluginSystem.moveCameraStart(this._camera.position)
                            }, this), this._cameraControl.addEventListener(8, () => {
                                this._pluginSystem.moveCameraEnd(this._camera.position)
                            }, this), i["f"].isProduction || (window.__RML__DEBUG__.SceneHelper = this), this._initOptionalModules()
                        }
                        async _initOptionalModules() {
                            const {
                                transparentHighlighting: e
                            } = this._initData;
                            e && (await Promise.resolve().then((function() {
                                return T
                            })).then(({
                                default: e
                            }) => this._componentRaycastHelper = new e), this._componentRaycastHelper.init(this._scene, this._camera))
                        }
                        _showDockings() {}
                        cancelDockings() {
                            this._cancelDockings(!0, null, !0, !0), this._requestRender(!0)
                        }
                        _cancelDockings(e, t, n, i) {
                            e && (this._sceneEventHandler.setDragIn(!1), this._configuratorViewModel.removeDockingComponent(), t && this._scene.remove(t)), this._configuratorViewModel.removePreviews(), n && this._updateCameraToBounds(), i && n && this._configuratorUiCallbacks.onDockingsPreviewRemoved(), this._addonHelper && this._addonHelper.setState(3), this._componentRaycastHelper && this._componentRaycastHelper.changeMaterialsOnSelect(this._scene, null)
                        }
                        stopRenderLoop() {
                            this._running = !1
                        }
                        _onHoverOn(e, t) {
                            2 !== t && this._highlight(e), this._componentDimensioningHelper && this._componentDimensioningHelper.add(e) && this._requestRender(!0)
                        }
                        _onHoverOff(e, t) {
                            2 !== t && this._highlight(), this._componentDimensioningHelper && this._componentDimensioningHelper.hasComponentDimensions() && (this._componentDimensioningHelper.remove(e), this._requestRender(!0)), this._requestRender()
                        }
                        _highlight(e = null) {
                            if (1 === this._configuratorViewModel.getComponents().length) return;
                            let t = this._initData.meshSelection,
                                n = [];
                            e && (t ? n.push(...e.meshes) : e.boundingBoxMesh && n.push(e.boundingBoxMesh)), this._configuratorViewModel.getComponentsForIds(this._sceneEventHandler.getSelectedRuntimeComponentIds()).forEach(e => {
                                e && (t ? n.push(...e.meshes) : e.boundingBoxMesh && n.push(e.boundingBoxMesh))
                            }), this._pixotron ? this._pixotron.highlightObjects(n) : this._outlinePass.selectedObjects = n
                        }
                        _shouldRenderUi() {
                            return this._pluginSystem && this._pluginSystem.needsUiScene()
                        }
                        _renderUi() {
                            let e = this._scene.background ? this._scene.background.clone() : null;
                            this._scene.overrideMaterial = this._depthWriteMaterial, this._scene.background = null, this._renderer.render(this._scene, this._camera), this._scene.overrideMaterial = null;
                            let t = this._renderer.autoClear;
                            this._renderer.autoClear = !1, this._renderer.clearDepth(), this._renderer.render(this._uiScene, this._camera), this._renderer.autoClear = t, this._scene.background = e
                        }
                        _requestRender(e) {
                            this._pixotron && e && (this._pixotron.needsUpdate = !0, e && (this._forceRender = !0));
                            const t = () => {
                                this._delta = this._clock.getDelta(), this._animateCamera(), this._camera.layers.mask = 65535, this._statsHelper && this._statsHelper.updateRenderInfo(this._renderer.info), this._pixotron ? (this._forceRender && (this._pixotron.autoShadowsClear = !0, this._pixotron.autoSAOClear = !0), this._checkLayers(), this._pixotron.render(this._renderer, this._scene, this._camera, this._renderTarget), this._forceRender = !1, this._pixotron.blit(), this._shouldRenderUi() && this._renderUi()) : (this._renderer.clear(), this._checkLayers(), this._composer.render(), this._renderer.clearDepth(), this._renderer.render(this._uiScene, this._camera), this._renderer.clearDepth()), this._onAfterRender(), this._addonHelper && this._addonHelper.update(), window.TWEEN && TWEEN.update(), this._addonHelper && this._lastChange + 1500 < Date.now() && this._addonHelper.isAddOnSpotVisible() && this._addonHelper.setState(4), this._lastChange + 3e3 < Date.now() ? this._running = !1 : (this._running = !0, requestAnimationFrame(t))
                            };
                            if (this._lastChange = Date.now(), !this._running) {
                                if (this._running = !0, this._addonHelper && !this._addonHelper.isAddOnSpotVisible()) {
                                    let e = this._configuratorViewModel.hasPreviews() ? 5 : 3;
                                    this._addonHelper.setState(e)
                                }
                                requestAnimationFrame(t)
                            }
                        }
                        _checkLayers() {
                            this._addonHelper && this._addonHelper.isAddOnSpotVisible() ? (this._camera.layers.enable(7), this._configuratorUiCallbacks.onAddonPlusShown()) : (this._camera.layers.disable(7), this._configuratorUiCallbacks.onAddonPlusHidden())
                        }
                        _animateCamera() {
                            this._cameraControl && (this._cameraControl.animateCamera(this._delta) ? (this._lightSetting instanceof r["c"] && this._lightSetting.update(this._camera, this._cameraControl.getTargetPosition()), this._pixotron && (this._pixotron.needsUpdate = !0)) : !this._pixotron || this._sceneEventHandler.isDragging() || this._forceRender || (this._pixotron.autoShadowsClear = !1, this._pixotron.autoSAOClear = !1)), this._environment.needsCamera() && this._environment.updateCamera(this._camera)
                        }
                        resume() {
                            let e = this._domHelper.getClientDimensions(),
                                t = e.x,
                                n = e.y;
                            if (this._renderTarget) {
                                const e = Math.floor(t * window.devicePixelRatio),
                                    i = Math.floor(n * window.devicePixelRatio);
                                this._renderTarget.setSize(e, i)
                            }
                            this._renderer.domElement.classList.add(r["m"].HSC), this._domHelper.element.appendChild(this._renderer.domElement), this._configuratorInputManager.addEvents(this._renderer.domElement), window.addEventListener("resize", this, !1), window.addEventListener("keydown", this, !1), document.addEventListener("visibilitychange", this), this._requestRender(!0), this._configuratorViewModel.materialQueue.registerCallback(() => this._materialLoaded()), this._configuratorMeshGenerator.setMaterialLoadedListener(() => {
                                this._requestRender(!0)
                            })
                        }
                        _materialLoaded() {
                            this._requestRender(!0), this._environment instanceof r["a"] && this._environment.update()
                        }
                        pause() {
                            this._configuratorInputManager.removeEvents(this._renderer.domElement), window.removeEventListener("resize", this, !1), window.removeEventListener("keydown", this, !1), document.removeEventListener("visibilitychange", this), this._configuratorViewModel.materialQueue.unregisterCallback(), this._configuratorMeshGenerator.removeMaterialLoadedListener()
                        }
                        destroy() {
                            this.pause(), this.cleanUp()
                        }
                        _setupScene(e) {
                            const t = this._domHelper.getClientDimensions(),
                                n = t.x,
                                o = t.y;
                            this._scene = new THREE.Scene, this._scene.background = new THREE.Color(this._initData.colors.DEFAULT_BACKGROUND), this._uiScene = new THREE.Scene, this._componentFactory = Object(i["s"])(), this._camera = this._componentFactory.createCamera(30, n / o, .1, 20, e), this._camera.position.copy(new THREE.Vector3(0, .5, 5)), this._uiIntersectionHelper = new k(this._camera), this._uiIntersectionHelper.canvasOffset = e, this._uiIntersectionHelper.addEventListener(0, e => {
                                this._configuratorUiCallbacks.onUiIntersectionChange(e)
                            }, this), this._camera.layers.set(3), this._camera.layers.enable(1), this._camera.layers.enable(2), this._camera.layers.enable(5), this._camera.layers.enable(4);
                            const s = {
                                    format: THREE.RGBAFormat,
                                    minFilter: THREE.NearestFilter,
                                    magFilter: THREE.NearestFilter
                                },
                                a = THREE.sRGBEncoding,
                                l = Math.floor(n * window.devicePixelRatio),
                                h = Math.floor(o * window.devicePixelRatio);
                            this._renderTarget = new THREE.WebGLRenderTarget(l, h, s), this._renderTarget.texture.encoding = a, this._renderer = new THREE.WebGLRenderer({
                                antialias: !1,
                                alpha: !0
                            }), this._renderer.setPixelRatio(window.devicePixelRatio), this._renderer.setSize(n, o), this._renderer.outputEncoding = a, this._renderer.gammaFactor = 2.2, this._renderer.autoClear = !1, this._renderer.shadowMap.enabled = !0, this._renderer.shadowMap.type = THREE.PCFSoftShadowMap, this._environmentLoader.setRendererAndScene(this._renderer, this._scene), this._environmentLoader.registerEnvironmentChangedCallback(() => this._requestRender(!0)), this._maxAnisotropy = this._renderer.capabilities.getMaxAnisotropy(), this._configuratorMeshGenerator.maxAnisotropy = this._maxAnisotropy, this._configuratorMeshGenerator.maxTextures = this._renderer.capabilities.maxTextures, this._configuratorMeshGenerator.setMaterialLoadedListener(() => {
                                this._requestRender(!0)
                            }), this._renderer.domElement.classList.add(r["m"].HSC), this._domHelper.element.appendChild(this._renderer.domElement), this._configuratorInputManager.addEvents(this._renderer.domElement), this._lightSetting = new c["a"](this._scene), this._composer = new THREE.EffectComposer(this._renderer);
                            let d = new THREE.RenderPass(this._scene, this._camera, null, new THREE.Color(this._initData.colors.DEFAULT_BACKGROUND), 0);
                            this._composer.addPass(d), this._outlinePass = new THREE.OutlinePass(new THREE.Vector2(n, o), this._scene, this._camera), this._outlinePass.renderToScreen = !0, this._outlinePass.visibleEdgeColor = new THREE.Color(this._initData.colors.SELECTION), this._outlinePass.hiddenEdgeColor = new THREE.Color(this._initData.colors.SELECTION), this._outlinePass.edgeStrength = 3, this._outlinePass.edgeThickness = 1, this._outlinePass.edgeGlow = 0, this._composer.addPass(this._outlinePass), this._composer.setSize(n, o), this._requestRender(), window.addEventListener("resize", this, !1), window.addEventListener("keydown", this, !1), document.addEventListener("visibilitychange", this), this._setEnvironment(new r["n"](this._scene, this._environment, new THREE.Color(this._initData.colors.DEFAULT_BACKGROUND))), this._pluginSystem.init(this._scene, this._uiScene, this._camera.position), this._configuratorViewModel.materialQueue.registerCallback(() => this._materialLoaded())
                        }
                        _tabVisible() {
                            this.updateSize()
                        }
                        sceneCleared() {
                            this._internalClearScene()
                        }
                        display(e) {
                            this._scene.add(e), this._sceneEventHandler.setRootComponentId(e.roomleId), this._requestRender()
                        }
                        debugSceneGraph(e) {
                            this._configuratorViewModel.debugSceneGraph(e), this._printObjectGraph(this._scene, "")
                        }
                        debugScene() {
                            return this._scene
                        }
                        _printObjectGraph(e, t) {
                            e.material && e.material.opacity, e.type, e.id, e.roomleId, e.children.length > 0 && e.children.forEach(e => {
                                let n = t + "    ";
                                this._printObjectGraph(e, n)
                            })
                        }
                        clearScene() {
                            this._cameraControl.clear(), this._internalClearScene(), this._pixotronUtil && this._pixotronUtil.lockAdapter(), this._pluginSystem.clearScene(this._scene, this._uiScene)
                        }
                        planObjectConstructionDone(e) {
                            this._componentDimensioningHelper.reset(), this._componentDimensioningHelper.setCamera(this._camera)
                        }
                        _internalClearScene() {
                            this._scene.children.forEach(e => {
                                "Object3D" !== e.type && "Mesh" !== e.type && "Line" !== e.type || this._scene.remove(e)
                            }), this._uiScene.children.forEach(e => {
                                this._uiScene.remove(e)
                            }), this._configuratorViewModel.sceneCleared(), this._memoryManager.shouldHardReset() && (this._configuratorMeshGenerator.clear(), this._renderer.renderLists.dispose(), this._memoryManager.executedHardReset()), this._requestRender(!0)
                        }
                        preparePerspectiveImage(e = {}) {
                            return new Promise((t, n) => {
                                this._configuratorViewModel.materialQueue.finished(!0).then(async () => {
                                    this._cancelDockings(!0, null, !0, !0), this._clearSelectionAndHovers();
                                    let n = this._camera.clone(),
                                        i = this._calculateBoundingBoxOfAllMeshes();
                                    this._lightSetting.removeFromScene();
                                    const o = !!this._dimensionHelper && this._dimensionHelper.areDimensionsEnabled();
                                    o && this._dimensionHelper.disableDimensions(), this._componentDimensioningHelper && this._componentDimensioningHelper.hasComponentDimensions() && await this._componentDimensioningHelper.reset();
                                    const r = await Object(s["e"])(this._scene, n, i, e);
                                    o && this._dimensionHelper.enableDimensions(), this._lightSetting.addToScene(), this._requestRender(), t(r)
                                }, n)
                            })
                        }
                        renderImage(e) {
                            return new Promise((t, n) => {
                                this._configuratorViewModel.materialQueue.finished().then(async () => {
                                    this._configuratorViewModel.getPreviews() && this._cancelDockings(!0, null, !0, !0), this._clearSelectionAndHovers();
                                    let n = this._camera,
                                        i = null;
                                    e.useCurrentPerspective || (n = this._camera.clone(), i = this._calculateBoundingBoxOfAllMeshes());
                                    const o = !!this._dimensionHelper && this._dimensionHelper.areDimensionsEnabled();
                                    o && this._dimensionHelper.disableDimensions(), this._componentDimensioningHelper && this._componentDimensioningHelper.hasComponentDimensions() && await this._componentDimensioningHelper.reset();
                                    const r = await Object(s["f"])(this._scene, n, i, this._pixotron, this._renderer);
                                    o && this._dimensionHelper.enableDimensions(), this._requestRender(), t(r)
                                }, n)
                            })
                        }
                        async preparePartImage(e, t) {
                            return new Promise((n, o) => {
                                this._configuratorViewModel.requestSubPartConstruction(e).then(async e => {
                                    t.size || (t.size = 256);
                                    let o = this._camera.clone(),
                                        r = Object(s["d"])((new THREE.Box3).setFromObject(e));
                                    const a = new THREE.Scene;
                                    a.add(e);
                                    const l = await Object(s["e"])(a, o, r, t);
                                    Object(i["T"])(a), n(l)
                                }, o)
                            })
                        }
                        _calculateBoundingBoxOfAllMeshes(e = 0, t) {
                            let n = null;
                            return n = t && this._dimensionHelper ? this._dimensionHelper.getBoundingBox() : this._configuratorViewModel.getBoundingBox(), Object(s["d"])(n, e)
                        }
                        prepareTopImage(e = {}) {
                            return new Promise(t => {
                                this._configuratorViewModel.materialQueue.finished(!0).then(async () => {
                                    const {
                                        showDimensions: n = !1
                                    } = e;
                                    this._cancelDockings(!0, null, !0, !0), this._clearSelectionAndHovers(), n && (await this._initDimensions(), await this._dimensionHelper.isInitialized(), this._dimensionHelper.enableTopDimensions()), this._componentDimensioningHelper && this._componentDimensioningHelper.hasComponentDimensions() && await this._componentDimensioningHelper.reset();
                                    let i = this._calculateBoundingBoxOfAllMeshes(.1, n);
                                    this._lightSetting.removeFromScene();
                                    let o = await Object(s["c"])(this._scene, this._uiScene, i, e);
                                    n && this._dimensionHelper.disableTopDimensions(), this._lightSetting.addToScene(), this._requestRender(), t(o)
                                })
                            })
                        }
                        enableDragIn(e) {
                            this._sceneEventHandler.setDragIn(!0, e), this._requestRender()
                        }
                        _getYRotationOfObject(e) {
                            let t = e.getWorldDirection(new THREE.Vector3).clone();
                            t.y = 0, t.lengthSq() < .01 && (t = new THREE.Vector3(0, 1, 0), t.applyQuaternion(e.quaternion), t.y = 0), t.normalize();
                            let n = Math.asin(t.x);
                            return t.z < 0 && (n = Math.PI - n), n < 0 && (n += 2 * Math.PI), n
                        }
                        zoomToComponent(e) {
                            this._cameraControl.saveState(!1);
                            let t = e.boundingBox.getSize(new THREE.Vector3),
                                n = this._getYRotationOfObject(e),
                                o = new THREE.Euler(0, n, 0),
                                s = e.getWorldPosition(new THREE.Vector3).clone().add(e.boundingBox.getCenter(new THREE.Vector3).applyEuler(o));
                            const r = new THREE.Vector2;
                            this._renderer.getSize(r), this._cameraControl.zoomTo(t, r.width, r.height, o.y, Object(i["jb"])(15), s)
                        }
                        resetCamera() {
                            this._cameraControl.hasSavedState() ? this.resetCameraToState() : this.resetCameraPositionToStart()
                        }
                        resetCameraToState() {
                            this._cameraControl.resetToState()
                        }
                        resetCameraPositionToStart() {
                            this._requestRender();
                            const e = this._configuratorViewModel.getBoundingBox(),
                                t = new THREE.Vector2;
                            this._renderer.getSize(t), this._cameraControl.reset(e.getSize(new THREE.Vector3), t.width, t.height)
                        }
                        _clearSelectionAndHovers() {
                            this.cancelSelection(), this._configuratorViewModel.clearRootComponent()
                        }
                        resetPreviews() {
                            this._configuratorViewModel.removePreviews(), this._addonHelper && this._addonHelper.setState(5), this._requestRender()
                        }
                        changeOffset(e) {
                            this._camera.offset = e, this._uiIntersectionHelper && (this._uiIntersectionHelper.canvasOffset = e)
                        }
                        _onWindowResize() {
                            this.updateSize()
                        }
                        updateSize() {
                            const {
                                x: e,
                                y: t
                            } = this._domHelper.getClientDimensions();
                            this._renderer.setSize(e, t), this._camera.aspect = e / t, this._camera.updateProjectionMatrix(), this._updateCameraToBounds();
                            const n = this._renderer.getPixelRatio();
                            if (this._renderTarget) {
                                const i = Math.floor(e * n),
                                    o = Math.floor(t * n);
                                this._renderTarget.setSize(i, o)
                            }
                            if (this._pixotron) {
                                this._pixotron.autoShadowsClear = !0, this._pixotron.autoSAOClear = !0, this._forceRender = !0;
                                try {
                                    this._pixotron.setSize(e, t)
                                } catch (e) {
                                    console.warn(e)
                                }
                            }
                            this._requestRender(!0)
                        }
                        setCameraOffset(e) {
                            this._camera.offset && (this._camera.offset = e, this._requestRender(!0))
                        }
                        getCameraOffset() {
                            return JSON.parse(JSON.stringify(this._camera.offset))
                        }
                        _onKeyDown(e) {
                            !e.key || "Escape" !== e.key && "Esc" !== e.key || (this.cancelSelection(), e.preventDefault()), this._sceneEventHandler && this._sceneEventHandler.hasSelection() && e.key && ("Backspace" === e.key || "Delete" === e.key) && (this.requestDeleteSelectedComponent(), e.preventDefault())
                        }
                        cancelPreviousDockings() {
                            this._cancelDockings(!0, null, !1, !1)
                        }
                        cancelSelection(e) {
                            (this._sceneEventHandler.hasSelection() || "standard" !== this._sceneEventHandler.getSelectionMode()) && this._cancelSelection(e)
                        }
                        _cancelSelection(e) {
                            this._sceneEventHandler.cancelSelection(), this._configuratorContext.selectionMode = "standard", this._configuratorContext.selectedRuntimeComponentIds = [], this._configuratorViewModel.removePreviews(), e && this.resetCamera(), this._kernelAccess.updatePlanObjectDependencies(this._configuratorContext.planObjectId), this._configuratorUiCallbacks.onSelectionCancel()
                        }
                        _selectComponent(e) {
                            this._highlight(e)
                        }
                        _deselectComponent(e, t) {
                            "standard" === this._sceneEventHandler.getSelectionMode() && (this._cancelSelection(t), this._highlight()), "multiselect" === this._sceneEventHandler.getSelectionMode() && (this._sceneEventHandler.hasSelection() ? this._configuratorContext.selectedRuntimeComponentIds = this._sceneEventHandler.getSelectedRuntimeComponentIds() : (this._cancelSelection(t), this._highlight())), this._componentRaycastHelper && this._componentRaycastHelper.changeMaterialsOnSelect(this._scene, null)
                        }
                        getScreenXY(e) {
                            return Object(i["W"])(e, this._camera, this._domHelper.element.clientWidth, this._domHelper.element.clientHeight)
                        }
                        cleanUp() {
                            this.stopRenderLoop()
                        }
                        setSelectionMode(e) {
                            this._sceneEventHandler.setSelectionMode(e)
                        }
                        changeFloorMaterial(e) {
                            return this._environment && this._environment instanceof r["e"] || (this._environment = new r["e"](this._scene, this._environment, !0), this._uiIntersectionHelper.floorEnvironment = !0), this._pixotron && this._environment.setPixotron(this._pixotron, this._renderer, this._cameraControl.getCamera()), new Promise((t, n) => {
                                this._environment.changeFloorMaterial(e, this._maxAnisotropy).then(() => {
                                    this._requestRender(), t()
                                }, n)
                            })
                        }
                        enableHD(e) {
                            this._renderer.capabilities.maxTextures > 8 && (e ? e && this.loadDynamicLightSetting(e) : this.loadDynamicLightSetting(i["U"].createDynamicLightSettingSource(null, i["q"].CAMERA))), this._environment instanceof r["f"] && (this._environment.removeFromScene(), this._environment.loadBackground(Object(o["i"])() + r["j"], new THREE.MeshStandardMaterial)), this.reEnableHD()
                        }
                        reEnableHD() {
                            let e = {
                                saoparams: {
                                    intensity: .5,
                                    occlusionWorldRadius: .6,
                                    smoothTransition: !0,
                                    samplesPerFrame: 4,
                                    bias: .02,
                                    numSamples: 100,
                                    accumulative: !1,
                                    falloff: 1.5
                                },
                                shadowparams: {
                                    shadowMapResolution: 1024,
                                    shadowRadius: 1,
                                    shadowQuality: 1,
                                    smoothTransition: !0,
                                    enableAccumulation: !0,
                                    shadowBiasMultiplier: .05,
                                    nearPlane: .01,
                                    farPlane: 50,
                                    fov: 40,
                                    numSamples: 50,
                                    side: THREE.FrontSide
                                },
                                outlineparams: {
                                    highlightColor: new THREE.Color(this._initData.colors.SELECTION),
                                    edgeStrength: 1,
                                    transparency: .9,
                                    edgeThickness: 2
                                }
                            };
                            this._pixotron = new window.PIXOTRON.Pixotron(e), this._pixotron.enableAA = !1, this._pixotronUtil = new r["o"](this._pixotron), this._enableAutoQuality(), this._environment instanceof r["a"] && this._environment.setPixotron(this._pixotron, this._renderer, this._cameraControl.getCamera()), this._requestRender()
                        }
                        _enableAutoQuality() {
                            this._pixotronUtil.enablePixotronAutoQuality();
                            const e = this._pixotronUtil.getAutoAdapter();
                            let t = this._renderer.getPixelRatio();
                            if (t > 1) {
                                let n = this._pixotronUtil.getHighPixelRatioQualitySetting();
                                e.addQuality(n), n.onExit(() => {
                                    if (t = this._renderer.getPixelRatio(), 1 !== t && e.getAverageFps() < 20 && t > 1) {
                                        this._renderer.setPixelRatio(1);
                                        const {
                                            x: n,
                                            y: i
                                        } = this._domHelper.getClientDimensions();
                                        try {
                                            this._pixotron.setSize(n, i)
                                        } catch (e) {
                                            console.warn(e)
                                        }
                                        this._renderTarget && this._renderTarget.setSize(n, i), t = 1
                                    }
                                })
                            }
                            this._pixotronUtil.onAutoQualityChange((t, n) => {
                                this._statsHelper && this._statsHelper.updateQualityInfo(t);
                                const i = this._pixotronUtil.getLowestQualitySetting();
                                n && t.getQuality() < n.getQuality() && e.getAverageFps() < 5 && e.setQualitySetting(i)
                            }), this._pixotronUtil.onManualQualityChange((e, t) => {
                                this._statsHelper && this._statsHelper.updateQualityInfo(e)
                            }), this._configuratorViewModel.materialQueue.finished(!0).then(() => this._pixotronUtil.unLockAdapter())
                        }
                        disableHD() {
                            this._pixotron = null, this._lightSetting = new c["a"](this._scene, this._lightSetting)
                        }
                        async loadDynamicLightSetting(e) {
                            this._lightSetting = new r["c"](this._scene, this._lightSetting);
                            let t = !1;
                            if (e.url) await this._lightSetting.loadFromURL(e.url), t = !0;
                            else if (e.json) await this._lightSetting.loadFromJSON(e.json), t = !0;
                            else if (e.object) await this._lightSetting.loadFromObject(e.object), t = !0;
                            else if (e.ls) {
                                const n = i["U"].createDynamicLightSettingSource(null, e.ls);
                                await this._lightSetting.loadFromURL(n.url), t = !0
                            }
                            if (!t) throw new Error("No dynamic light setting source set");
                            this._requestRender(!0)
                        }
                        exportGLB() {
                            this._scriptLoader.fetch(s["a"], {
                                id: "gltf-exporter"
                            }).then(() => {
                                let e = new THREE.GLTFExporter,
                                    t = [];
                                this._scene.children.forEach(e => {
                                    "Object3D" !== e.type && "Mesh" !== e.type || t.push(e)
                                }), e.parse(t, e => {
                                    let t = document.createElement("a");
                                    const n = new Blob([e], {
                                        type: "model/gltf-binary"
                                    });
                                    t.href = URL.createObjectURL(n), t.download = "scene.glb", t.style.display = "none", document.body.appendChild(t), t.click()
                                }, {
                                    binary: !0,
                                    embedImages: !0,
                                    forceIndices: !0
                                })
                            })
                        }
                        showGUI() {
                            let e = Object(i["V"])();
                            e && (this._lightSetting && this._lightSetting.showGUI(), this._pixotron && this._pixotronUtil.showGUI(), this._environment && this._environment.showGUI(), this._addGUIListener(e))
                        }
                        _addGUIListener(e) {
                            let t = e.__folders;
                            Object.keys(t).forEach(e => {
                                let n = t[e];
                                n.__folders && Object.keys(n.__folders).forEach(e => {
                                    let n = t[e];
                                    this._addGUIListener(n)
                                }), n.__controllers && n.__controllers.forEach(e => {
                                    e.onFinishChange(() => {
                                        this._requestRender()
                                    })
                                })
                            })
                        }
                        zoomIn(e) {
                            this._cameraControl.zoomIn(e), this._requestRender(!0)
                        }
                        zoomOut(e) {
                            this._cameraControl.zoomOut(e), this._requestRender(!0)
                        }
                        showStats() {
                            n.e("chunk-2d0b16c2").then(n.bind(null, "207e")).then(({
                                default: e
                            }) => this._statsHelper = new e)
                        }
                        async showDimensions() {
                            await this._initDimensions(), this._dimensionHelper.enableDimensions(), this._dimensionHelper.onDimensionsVisibilityChanged(e => {
                                e && this._requestRender(!0), this._configuratorUiCallbacks.onDimensionsVisibilityChange(e)
                            }), this._requestRender(!0)
                        }
                        async _initDimensions() {
                            this._dimensionHelper || await n.e("chunk-2d208aa7").then(n.bind(null, "a684")).then(({
                                default: e
                            }) => {
                                this._dimensionHelper = new e(this._creator_), this._pluginSystem.addPlugin(this._dimensionHelper)
                            })
                        }
                        hideDimensions() {
                            this._dimensionHelper.disableDimensions(), this._componentDimensioningHelper && this._componentDimensioningHelper.hasComponentDimensions() && this._componentDimensioningHelper.reset(), this._requestRender(!0)
                        }
                        loadSceneSettings(e) {
                            let t = new Promise(t => {
                                (new r["p"]).load(this._scene, this._renderer.domElement, this._environment, e).then(e => {
                                    e && this._setEnvironment(e), t()
                                })
                            });
                            this._lightSetting = new r["c"](this._scene, this._lightSetting);
                            let n = this._lightSetting.loadFromObject(e);
                            return new Promise((e, i) => {
                                Promise.all([t, n]).then(() => {
                                    this._requestRender(!0), this._uiIntersectionHelper.floorEnvironment = this._environment instanceof r["e"], e()
                                }, i)
                            })
                        }
                        setBackgroundColor(e) {
                            this._setEnvironment(new r["n"](this._scene, this._environment, new THREE.Color(e)))
                        }
                        setBackgroundImage(e) {
                            this._setEnvironment(new r["n"](this._scene, this._environment, null, this._renderer.domElement, e))
                        }
                        setBakedShadow(e, t) {
                            this._setEnvironment(new r["n"](this._scene, this._environment, new THREE.Color(e), this._renderer.domElement, t))
                        }
                        _setEnvironment(e) {
                            this._environment = e, this._environment instanceof r["a"] && (this._pixotron && this._environment.setPixotron(this._pixotron, this._renderer, this._cameraControl.getCamera()), this._environment.setLoadedCallback(() => setTimeout(() => this._requestRender(!0), 500))), this._requestRender(!0)
                        }
                        handleEvent(e) {
                            switch (e.type) {
                                case "resize":
                                    this._onWindowResize();
                                    break;
                                case "keydown":
                                    if (e.target && (e.target instanceof HTMLInputElement || e.target instanceof HTMLTextAreaElement)) break;
                                    this._onKeyDown(e);
                                    break;
                                case "visibilitychange":
                                    this._tabVisible()
                            }
                        }
                        _updateCameraToBounds(e) {
                            if (e || (e = this._configuratorViewModel.getBoundingBox()), !e) return;
                            let {
                                x: t,
                                y: n
                            } = this._domHelper.getClientDimensions();
                            this._cameraControl.updateToBounds(e, t, n, !1, !0), this._configuratorUiCallbacks.onCameraPositionChanges(), this._updateComponentPosition()
                        }
                        requestDockingsPreview(e, t, n, i) {
                            i || (i = !1), e && this.cancelPreviousDockings(), this.cancelSelection(), i && this.enableDragIn(n), t && (this._configuratorContext.lastPossibleChild = t), this._configuratorContext.requestPreviewsIsUserInitiated = e, this.resetPreviews(), this._kernelAccess.webGlPreviewDockings(this._configuratorContext, i), this._showDockings()
                        }
                        _requestDockingsPreviewWithDrag(e) {
                            this.cancelPreviousDockings(), this._configuratorContext.rootComponentId !== e && (this.resetPreviews(), this._kernelAccess.previewDockingsWithDrag(e, this._configuratorContext.planObjectId), this._showDockings())
                        }
                        _dockComponent(e) {
                            const t = i["c"].start("dock_component_" + e.childId);
                            this._kernelAccess.dockComponent(e.parentId, e.parentDockId, e.childId, e.childDockId), this._configuratorContext.dockingRootComponentId = null, i["c"].end(t)
                        }
                        _onSelectedRuntimeComponentsChange(e) {
                            this._kernelAccess.multiSelectionChange(e, this._configuratorContext.rootComponentId)
                        }
                        _onSelectedRuntimeComponentChange(e) {
                            let t = !1,
                                n = null;
                            e && (t = e.roomleId === this._configuratorContext.rootComponentId, n = e.roomleId), this._kernelAccess.selectionChange(n, t), e && (this._kernelAccess.selectedComponent(e.roomleId), this.zoomToComponent(e))
                        }
                        requestDeleteSelectedComponent() {
                            const e = this._configuratorContext.selectedRuntimeComponentIds,
                                t = this._configuratorContext.rootComponentId;
                            if (Array.isArray(e) && 0 !== e.length && t && -1 === e.indexOf(t)) {
                                switch (this._configuratorContext.selectionMode) {
                                    case "standard":
                                        this.resetCamera(), this._kernelAccess.requestDeleteComponent(this._configuratorContext.selectedRuntimeComponentId);
                                        break;
                                    case "multiselect":
                                        this.resetCamera(), this._kernelAccess.requestDeleteComponents(this._configuratorContext.selectedRuntimeComponentIds)
                                }
                                this._configuratorContext.selectedRuntimeComponentIds = []
                            }
                        }
                        componentUpdated(e, t) {
                            if (e.roomleId === this._configuratorContext.rootComponentId) {
                                let t = new THREE.Vector3(e.position.x / 1e3, e.position.z / 1e3, e.position.y / -1e3);
                                this._sceneEventHandler.update(null, t, null)
                            }
                            this._addonHelper && e && t.addOnSpots && this._addonHelper.addAddOnSpots(e, t.addOnSpots), this._requestRender(!0)
                        }
                        planObjectUpdated(e, t) {
                            if (e.bounds) {
                                if (this._configuratorContext.planObjectId === e.id) {
                                    const n = Object(i["X"])(e.boxForMeasurement);
                                    this._updateBounds(n, t)
                                }
                                this._highlight(), this._requestRender()
                            }
                        }
                        componentDeleted(e) {
                            this._addonHelper && this._addonHelper.deleteAddonPointsForComponent(e.roomleId), -1 === this._sceneEventHandler.getSelectedRuntimeComponentIds().indexOf(e.roomleId) && "multiselect" !== this._sceneEventHandler.getSelectionMode() || this.cancelSelection()
                        }
                        previewConstructionDone(e, t) {
                            t || (this._cancelDockings(!0, null, !1, !1), this._configuratorContext.requestPreviewsIsUserInitiated && this._configuratorUiCallbacks.onNoDockingsAvailable());
                            const n = this._configuratorViewModel.getBoundingBoxWithPreviews();
                            this._updateCameraToBounds(n), this._lightSetting && this._lightSetting.needsBounds() && this._lightSetting.updateBounds(n), this._environment && this._environment.needsBounds() && this._environment.updateBounds(n.getSize(new THREE.Vector3)), this._componentRaycastHelper && this._componentRaycastHelper.checkPreviewVisibility(this._configuratorViewModel)
                        }
                        configurationLoaded(e, t) {
                            e && t && this._sceneEventHandler.isDragIn() && (e.position.copy(new THREE.Vector3(0, 100, 0)), this._scene.add(e), this._sceneEventHandler.addComponentDragInHandler(e), this._requestRender()), this._pixotronUtil && this._pixotronUtil.unLockAdapter(), this._environment && this._environment.reload()
                        }
                        addComponentHandlers(e) {
                            this._sceneEventHandler.addComponentHandlers(e)
                        }
                        addPreviewHandlers(e) {
                            this._sceneEventHandler.addPreviewHandlers(e)
                        }
                        addPreviewLineHandlers(e) {
                            this._sceneEventHandler.addPreviewLineHandlers(e)
                        }
                        _updateComponentPosition() {
                            if (!this._configuratorUiCallbacks.onComponentPositionsUpdated) return;
                            const e = [];
                            this._configuratorViewModel.getComponents().forEach(t => {
                                if (!t.boundingBoxMesh) return;
                                const n = (new THREE.Box3).setFromObject(t.boundingBoxMesh);
                                let i = this._kernelAccess.kernelInstance.getComponent(t.roomleId);
                                const o = i.parameters || i.possibleChildren ? ["edit"] : [];
                                e.push({
                                    id: t.roomleId,
                                    position: this.getScreenXY(n.getCenter(new THREE.Vector3)),
                                    type: "component",
                                    actions: o
                                })
                            }), this._configuratorViewModel.getPreviews().forEach(t => {
                                const n = (new THREE.Box3).setFromObject(t);
                                e.push({
                                    id: t.roomleId,
                                    position: this.getScreenXY(n.getCenter(new THREE.Vector3)),
                                    type: "preview",
                                    actions: ["add"]
                                })
                            }), this._configuratorUiCallbacks.onComponentPositionsUpdated(e)
                        }
                        getScene() {
                            return this._scene
                        }
                        _updateBounds(e, t = !1) {
                            let n = e.getSize(new THREE.Vector3);
                            if (this._configuratorViewModel.hasPreviews() || this._sceneEventHandler.hasSelection() || this._updateCameraToBounds(), this._sceneEventHandler.update(n, null, null), this._uiIntersectionHelper.updateToBounds(n, this._domHelper.element.clientWidth, this._domHelper.element.clientHeight), this._environment.needsBounds() && this._environment.updateBounds(n, t), this._lightSetting && this._lightSetting.needsBounds() && this._lightSetting.updateBounds(e), this._componentDimensioningHelper && this._componentDimensioningHelper.hasComponentDimensions() && this._componentDimensioningHelper.reset(), this._pixotron && this._pixotron.getShadowPass().setShadowRecieverBBox(e), this._pixotronUtil) {
                                const t = new THREE.Sphere;
                                e.getBoundingSphere(t), this._pixotronUtil.updateBounds(t)
                            }
                            this._camera.updateProjectionMatrix(), this._pluginSystem.updateBounds(e)
                        }
                        updateScene() {
                            const e = this._configuratorViewModel.getBoundingBox();
                            this._updateBounds(e), this._requestRender(!0)
                        }
                        async moveCamera(e) {
                            return this._cameraControl.moveCamera(e)
                        }
                    }
                    return Object(i["B"])([i["Y"]], e.prototype, "_domHelper", void 0), Object(i["B"])([i["Y"]], e.prototype, "_scriptLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorInputManager", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorUiCallbacks", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorMeshGenerator", void 0), Object(i["B"])([i["Y"]], e.prototype, "_memoryManager", void 0), Object(i["B"])([i["Y"]], e.prototype, "_lifeCycleManager", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorContext", void 0), Object(i["B"])([i["Y"]], e.prototype, "_kernelAccess", void 0), Object(i["B"])([i["Y"]], e.prototype, "_componentDimensioningHelper", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorViewModel", void 0), Object(i["B"])([i["Y"]], e.prototype, "_environmentLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_pluginSystem", void 0), Object(i["B"])([i["Y"]], e.prototype, "_initData", void 0), e
                })(),
                R = (() => {
                    class e {
                        constructor(e) {
                            this._activeComponents = [], this._creator_ = e
                        }
                        setCamera(e) {
                            this._camera = e
                        }
                        add(e) {
                            const t = this._kernelAccess.kernelInstance.getComponent(e.roomleId);
                            if (!t) return !1;
                            const o = t.dimensionings;
                            if (!o || 0 === o.length || this._camera.position.z < 0) return !1;
                            const s = Object(i["X"])(t.boxForMeasurement),
                                r = {
                                    x: this._camera.position.x,
                                    y: this._camera.position.z
                                };
                            return n.e("chunk-2d0e9222").then(n.bind(null, "8bdf")).then(t => {
                                y.loadFont("static/rubik_regular-75bd7bb699e9e39d.json").then(n => {
                                    o.forEach(o => {
                                        e.add(new t.default(Object(i["Z"])(o), s, n, r))
                                    })
                                })
                            }), this._activeComponents.push(e), !0
                        }
                        remove(e, t = !0) {
                            return new Promise(s => {
                                n.e("chunk-2d0e9222").then(n.bind(null, "8bdf")).then(n => {
                                    let r = [];
                                    e.children.forEach(e => {
                                        e instanceof n.default && r.push(e)
                                    }), r.forEach(t => {
                                        e.remove(t), Object(i["T"])(t)
                                    }), t && Object(o["o"])(this._activeComponents, e), s()
                                })
                            })
                        }
                        hasComponentDimensions() {
                            return this._activeComponents.length > 0
                        }
                        async reset() {
                            for (const e of this._activeComponents) await this.remove(e);
                            this._activeComponents = []
                        }
                        clear() {}
                    }
                    return Object(i["B"])([i["Y"]], e.prototype, "_kernelAccess", void 0), e
                })();
            class O {
                constructor(e) {
                    this._creator_ = e
                }
                setScene(e) {}
                setUiScene(e) {}
                updateBounds(e) {}
                clearScene(e, t) {}
                moveCameraEnd(e) {}
                moveCameraStart(e) {}
                needsUiScene() {
                    return !1
                }
            }
            let M = (() => {
                class e {
                    constructor(e) {
                        this._plugins = [], this._creator_ = e
                    }
                    async init(e, t, i) {
                        this._scene = e, this._uiScene = t, this._cameraPosition = i;
                        const {
                            bananaForScale: o
                        } = this._initData;
                        o && await n.e("chunk-2d0e55df").then(n.bind(null, "93d3")).then(({
                            default: e
                        }) => this._plugins.push(new e(this._creator_))), this._plugins.forEach(e => e.setScene(this._scene)), this._plugins.forEach(e => e.setUiScene(this._uiScene)), this._plugins.forEach(e => e.updateBounds(this._bounds)), this._plugins.forEach(e => e.moveCameraEnd(this._cameraPosition))
                    }
                    addPlugin(e) {
                        this._plugins.push(e), e.setScene(this._scene), e.setUiScene(this._uiScene), e.updateBounds(this._bounds), e.moveCameraEnd(this._cameraPosition)
                    }
                    updateBounds(e) {
                        this._bounds = e, this._plugins.forEach(t => t.updateBounds(e))
                    }
                    clearScene(e, t) {
                        this._plugins.forEach(n => n.clearScene(e, t))
                    }
                    getActivePlugins() {
                        return this._plugins
                    }
                    getPlugin(e) {
                        for (let t of this._plugins)
                            if (t instanceof e) return t;
                        return null
                    }
                    moveCameraEnd(e) {
                        this._cameraPosition = e, this._plugins.forEach(t => t.moveCameraEnd(e))
                    }
                    moveCameraStart(e) {
                        this._cameraPosition = e, this._plugins.forEach(t => t.moveCameraStart(e))
                    }
                    needsUiScene() {
                        return this._plugins.map(e => e.needsUiScene()).reduce((e, t) => e || t, !1)
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_initData", void 0), e
            })();
            class D {
                constructor() {
                    this._nonTransparentComponent = null, this._raycaster = new THREE.Raycaster, this._raycaster.near = .1, this._raycaster.layers.enable(3)
                }
                init(e, t) {
                    this._scene = e, this._camera = t, this.checkComponentVisibility = Object(o["q"])(this.checkComponentVisibility, 100).bind(this), this.checkPreviewVisibility = Object(o["q"])(this.checkPreviewVisibility, 100).bind(this)
                }
                changeMaterialsOnSelect(e, t, n = !1) {
                    t !== this._nonTransparentComponent && (this._nonTransparentComponent = t, this._changeMaterialsOnSelect(e, t, n))
                }
                _changeMaterialsOnSelect(e, t, n = !1) {
                    e.children.length > 0 && e.children.forEach(i => {
                        const o = t && e.id === t.id || n,
                            s = !(i instanceof THREE.Mesh);
                        this._changeMaterialsOnSelect(i, t, (!o || !s) && o)
                    }), t ? e instanceof THREE.Mesh && e.material instanceof THREE.MeshStandardMaterial && (e.userData.oldMaterial = e.material, e.material = e.material.clone(), n || (e.material.opacity = .1, e.material.transparent = !0, e.material.needsUpdate = !0)) : e.userData.oldMaterial && e instanceof THREE.Mesh && e.material instanceof THREE.MeshStandardMaterial && (e.material = e.userData.oldMaterial, e.material.needsUpdate = !0, e.userData.oldMaterial = void 0)
                }
                isComponentVisible(e) {
                    const t = [];
                    e.traverse(e => t.push(e.uuid));
                    const n = (new THREE.Box3).setFromObject(e).getCenter(new THREE.Vector3),
                        i = (new THREE.Vector3).subVectors(n, this._camera.position).normalize();
                    this._raycaster.set(this._camera.position, i), this._raycaster.far = this._camera.position.distanceTo(n);
                    const o = [];
                    return this._raycaster.intersectObjects(this._scene.children, !0).forEach(e => {
                        e.object.material.visible && (t.includes(e.object.uuid) || e.object.userData.ignoreComponentRaycast || o.push(e))
                    }), 0 === o.length
                }
                checkComponentVisibility(e, t) {
                    if (!e.hasSelection()) return;
                    const n = t.getComponentsForIds(e.getSelectedRuntimeComponentIds());
                    if (n.length > 1) return;
                    const i = n[0];
                    this.isComponentVisible(i) ? this.changeMaterialsOnSelect(this._scene, null) : this.changeMaterialsOnSelect(this._scene, i)
                }
                checkPreviewVisibility(e) {
                    if (!e.hasPreviews()) return;
                    const t = e.getPreviews();
                    0 !== t.length && (t.map(e => this.isComponentVisible(e)).reduce((e, t) => e && t) ? this.changeMaterialsOnSelect(this._scene, null) : this.changeMaterialsOnSelect(this._scene, {
                        id: -1
                    }))
                }
            }
            var T = Object.freeze({
                __proto__: null,
                default: D
            });
            const L = [new i["bb"]("kernel-access", f), new i["bb"]("logger", i["m"]), new i["bb"]("rapi-access", i["cb"]), new i["bb"]("script-loader", r["k"]), new i["bb"]("unit-formatter", g), new i["bb"]("camera-control-3d", r["b"]), new i["bb"]("camera-control", r["q"]), new i["bb"]("configurator-input-manager", class extends r["g"] {}, 1), new i["bb"]("dom-helper", r["r"], 1), new i["bb"]("data-syncer", i["db"]), new i["bb"]("selection-handler", class extends r["d"] {
                    constructor() {
                        super(...arguments), this._selectionMode = "standard", this._selectedComponents = new Map
                    }
                    check(e) {
                        "standard" === this._selectionMode && this._checkStandard(e), "multiselect" === this._selectionMode && this._checkMulti(e)
                    }
                    cancelSelection() {
                        0 !== this._selectedComponents.size && this._selectedComponents.forEach((e, t) => {
                            e.deselect(), this._selectedComponents.delete(t), this.dispatchEvent(1, new b({
                                component: e
                            }))
                        })
                    }
                    _checkStandard(e) {
                        if (this._selectedComponents.has(e.roomleId)) return this._selectedComponents.delete(e.roomleId), void this.dispatchEvent(1, new b({
                            component: e
                        }));
                        this._selectedComponents.size > 0 && this._selectedComponents.forEach((e, t) => {
                            this._selectedComponents.delete(t), this.dispatchEvent(1, new b({
                                component: e,
                                resetCamera: !1
                            }))
                        }), this._selectedComponents.set(e.roomleId, e), this.dispatchEvent(0, new b({
                            component: e
                        }))
                    }
                    _checkMulti(e) {
                        if (this._selectedComponents.has(e.roomleId)) return this._selectedComponents.delete(e.roomleId), void this.dispatchEvent(1, new b({
                            component: e,
                            resetCamera: 0 === this._selectedComponents.size
                        }));
                        this._selectedComponents.set(e.roomleId, e), this.dispatchEvent(0, new b({
                            component: e
                        }))
                    }
                    setSelectionMode(e) {
                        this._selectionMode = e
                    }
                    getSelectionMode() {
                        return this._selectionMode
                    }
                    hasSelection() {
                        return this._selectedComponents.size > 0
                    }
                    getSelectedRuntimeComponentIds() {
                        let e = [];
                        return this._selectedComponents.forEach(t => e.push(t.roomleId)), e
                    }
                    isSelected(e) {
                        return this._selectedComponents.has(e.roomleId)
                    }
                }, 1), new i["bb"]("configurator-mesh-generator", l["a"]), new i["bb"]("configurator-ui-callbacks", class extends a["b"] {
                    constructor(e) {
                        super(e), this.onKernelIsReady = null, this.onComponentPositionsUpdated = null, this.onUpdateParameters = e => {}, this.onUpdatePossibleChildren = (e, t) => {}, this.onUpdatePrice = (e, t) => {}, this.onSelectionChange = (e, t, n, i) => {}, this.onSelectionCancel = () => {}, this.onPartListUpdate = (e, t) => {}, this.onBoundsUpdate = e => {}, this.onLoadConfiguration = () => {}, this.onConfigurationReady = (e, t, n) => {}, this.onOpenTag = e => {}, this.onOpenAddOns = () => {}, this.onClickOutside = () => {}, this.onNoDockingsAvailable = () => {}, this.onUiIntersectionChange = e => {}, this.onZoomChange = (e, t) => {}, this.onDimensionsVisibilityChange = e => {}, this.onErrorDueToOffline = e => {}, this.onError = e => {}, this.onDockingsPreviewRemoved = () => {}, this.onConfigurationHasChildren = e => {}, this.onTrackTiming = (e, t, n, i) => {}, this.onUserInitiatedDockDone = (e, t, n, i, o) => {}, this.onAddonPlusHover = () => {}, this.onAddonPlusHoverOff = () => {}, this.onAddonPlusShown = () => {}, this.onAddonPlusHidden = () => {}, this.onContentProblem = e => {}, this.onSyncStarted = () => {}, this.onSyncDone = () => {}, this.onOpenFloorMaterials = () => {}, this.onOpenPartList = () => {}, this.onComponentLoadError = e => {}, this.onConfigurationLoadError = () => {}, this.onChangeTypeChangeTag = e => {}, this.onRemoveTypeChangeTag = e => {}, this.onConfigurationLabelChange = (e, t, n) => {}, this.onMemoryCorruption = () => {}, this.onConfiguratorKernelIsReady = (e, t) => {}, this.onConfigurationSaved = e => {}, this.onCameraPositionChanges = () => {}
                    }
                }, 1), new i["bb"]("scene-helper", H, 1), new i["bb"]("component-dimensioning-helper", R, 1), new i["bb"]("plugin-system", M, 1), new i["bb"]("component-raycast-helper", D, 0)],
                x = (e, t) => e.sort || t.sort ? e.sort ? t.sort ? e.sort - t.sort : -1 : 1 : 0,
                A = (e, t) => e && !t ? 1 : !e && t ? -1 : e && t ? e.localeCompare(t) : 0;
            let U = (() => {
                class e {
                    constructor(e) {
                        this._onInitDoneCollection = [], this._isKernelReady = !1, this._isWebGlReady = !1, this._isPreloadReady = !0, this._isLoadError = !1, this._isReloading = !1, this._needsSync = !1, this._creator_ = e, this._configuratorKernelAccessCallback.addListener(this);
                        const t = this._errorHandler;
                        t.subscribe(0, e => this._configuratorUiCallbacks.onErrorDueToOffline(e)), t.subscribe(1, e => this._configuratorUiCallbacks.onError(e)), t.subscribe(2, (e, t) => this._configuratorUiCallbacks.onContentProblem({
                            rapiPath: e,
                            ids: t
                        }))
                    }
                    _isInitDone() {
                        return this._isKernelReady && this._isWebGlReady && this._isPreloadReady
                    }
                    _checkInitDone() {
                        this._isInitDone() && (this._onInitDoneCollection.forEach(e => e()), this._onInitDoneCollection = [])
                    }
                    _onInitDone(e) {
                        this._isInitDone() ? e() : this._onInitDoneCollection.push(e)
                    }
                    getScene() {
                        return this._sceneHelper.getScene()
                    }
                    updateScene() {
                        this._sceneHelper.updateScene()
                    }
                    _loadWebGlLib(e, t) {
                        this._threeLoader.fetch().then(() => Promise.all(r["s"].map(e => this._scriptLoader.fetch(e, {
                            id: e
                        }))).then(this._loadingWebGlSuccess(e, t).bind(this), this.loadError.bind(this)), this.loadError.bind(this))
                    }
                    _loadingWebGlSuccess(e, t) {
                        return () => {
                            t && this._sceneHelper.changeOffset(t);
                            const {
                                initialFloorMaterial: e,
                                enableHD: n,
                                dls: o,
                                ls: s,
                                stats: a
                            } = this._initData;
                            let l = i["U"].createDynamicLightSettingSource(o, s);
                            n ? this.enableHD(l) : this._initData.retina = !0, a && this.showStats(), this._needsSync && (this._needsSync = !1, this._kernelAccess.requestSync(i["R"], this._configuratorContext.planObjectId));
                            const c = [this._scriptLoader.fetch(r["l"], {
                                id: "tween-js"
                            })];
                            e && c.push(this._rapiAccess.getMaterial(e).then(e => this._sceneHelper.changeFloorMaterial(e))), Promise.all(c).then(this._webGlIsReady.bind(this), this.loadError.bind(this))
                        }
                    }
                    _webGlIsReady() {
                        this._isWebGlReady = !0, this._checkInitDone()
                    }
                    _initPromiseCallback(e, t) {
                        this._isInitDone() ? e() : this._isLoadError ? t("_initPromiseCallback failed") : (this._onInitDone(() => e()), this._rejectOnLoadError = t)
                    }
                    _notifyOnConfigurationReady(e) {
                        return async t => {
                            const n = await this._kernelAccess.addUiDataAndPriceToPartList(t.partList, t.hash);
                            e(n), this._configuratorUiCallbacks.onConfigurationReady(n, t.hash, t.rootComponentLabel)
                        }
                    }
                    _notifyOnConfigurationLoadingError(e) {
                        return () => {
                            this._configuratorUiCallbacks.onConfigurationLoadError()
                        }
                    }
                    _loadItemOrConfigById(e, t) {
                        this._configuratorContext.lastLoadedRapiId = e, this._onLoadConfiguration(), this._preloadPackage(e), this._clearScene();
                        const {
                            offlineSync: n
                        } = this._initData;
                        if (n) {
                            const t = Object(i["eb"])(e);
                            t && this._dataSyncer.start(t)
                        }
                        return new Promise((n, i) => {
                            (t ? this._rapiAccess.getConfiguration(e) : this._rapiAccess.getItem(e)).then(t => {
                                t && t.configuration ? this._loadConfiguration(t.configuration).then(e => {
                                    const i = this._notifyOnConfigurationReady(n);
                                    t.label ? this._notifyUiAboutNewItem(t, e.rootComponentLabel) : this._notifyUiAboutNewConfiguration(t), i(e)
                                }, this._notifyOnConfigurationLoadingError(i).bind(this)) : i(new Error("Could not load item or config with id " + e))
                            }, i)
                        })
                    }
                    _shouldBroadcastToUi(e) {
                        return !(0 === e && this._configuratorContext.selectedRuntimeComponentId || 1 === e && !this._configuratorContext.selectedRuntimeComponentId || 2 === e && !this._configuratorContext.selectedRuntimeComponentIds.length)
                    }
                    _isCorrectResponse(e, t) {
                        if (0 === e) return t === this._configuratorContext.planObjectId;
                        if (1 === e) return t === this._configuratorContext.selectedRuntimeComponentId;
                        const n = t.length;
                        if (n !== this._configuratorContext.selectedRuntimeComponentIds.length) return !1;
                        for (let i = 0; i < n; i++)
                            if (t[i] !== this._configuratorContext.selectedRuntimeComponentIds[i]) return !1;
                        return !0
                    }
                    _onLoadConfiguration() {
                        this._clearScene(), this._configuratorUiCallbacks.onLoadConfiguration()
                    }
                    _clearScene() {
                        this._sceneHelper && this._sceneHelper.clearScene()
                    }
                    _notifyUiAboutNewItem(e, t) {
                        this._rapiAccess.getCatalog(e.catalog).then(n => this._configuratorUiCallbacks.onConfigurationLabelChange(n.name, e.label, t))
                    }
                    _notifyUiAboutNewConfiguration(e) {
                        Promise.all([this._rapiAccess.getCatalog(e.catalog), this._rapiAccess.getComponent(e.rootComponentId)]).then(([e, t]) => this._configuratorUiCallbacks.onConfigurationLabelChange(e.name, null, t.label))
                    }
                    _getMaterialGroups(e) {
                        const t = (e, t) => {
                                let n = x(e, t);
                                return 0 !== n ? n : (n = A(e.label, t.label), 0 !== n ? n : A(e.id, t.id))
                            },
                            n = e => (e.sort(t), e.forEach(e => e.materials.sort(t)), e);
                        if (e.validGroups.length > 0) return new Promise((t, i) => this._rapiAccess.getMaterialsByGroup(e.validGroups).then(e => t(n(e)), i));
                        const i = [];
                        return e.validValues.forEach(e => i.push(e.value)), new Promise((e, t) => {
                            this._rapiAccess.getMaterials(i).then(t => {
                                this._rapiAccess.combineMaterialsToGroups(t).then(t => {
                                    e(n(t))
                                })
                            }, t)
                        })
                    }
                    _loadConfiguration(e) {
                        return new Promise((t, n) => {
                            const o = () => {
                                const {
                                    x: o,
                                    y: s
                                } = this._domHelper.getClientDimensions();
                                if (o <= 0 && s <= 0) {
                                    let e = "Size of canvas is 0/0! When using embedding set correct size or remove id to load in idle mode!";
                                    return console.error(e), n(e)
                                }
                                this.updateSize(), this.resumeKernelCallbacks(), i["c"].start("ui_load_configuration");
                                const r = [];
                                if (this._initData.applyCurrentGlobalParameters) {
                                    const e = this._configuratorContext.planObjectId,
                                        t = this._configuratorContext.rootComponentParametersAsGlobal;
                                    r.push(this._kernelAccess.getGlobalParameters(e, t))
                                }
                                Promise.all(r).then(([o]) => {
                                    i["C"].waitFor(2).then(([e, n, i, s]) => {
                                        const r = [];
                                        o && this._initData.applyCurrentGlobalParameters && o.forEach(e => r.push(this.setParameter(e, e.value, !0)));
                                        const a = this._rapiAccess.peekComponent(s);
                                        Promise.all(r).then(() => {
                                            const e = [];
                                            r.length && (e.push(this._kernelAccess.getPartList()), e.push(this._kernelAccess.getConfigurationHash(this._configuratorContext))), Promise.all(e).then(async e => {
                                                const o = e && e[0] ? e[0] : n,
                                                    s = e && e[1] ? e[1] : i,
                                                    r = await this._kernelAccess.addUiDataAndPriceToPartList(o, s);
                                                t({
                                                    partList: r,
                                                    hash: s,
                                                    rootComponentLabel: a ? a.label : ""
                                                })
                                            })
                                        })
                                    }, n), this._kernelAccess.loadConfiguration(e)
                                }, n)
                            };
                            this._onInitDone(() => o())
                        })
                    }
                    _preLoadItemOrConfig(e, t) {
                        return new Promise((n, i) => {
                            (t ? this._rapiAccess.getConfiguration(e) : this._rapiAccess.getItem(e)).then(n, i)
                        })
                    }
                    _preloadPackage(e) {
                        this._isPreloadReady = !1;
                        let t = null;
                        t = Object(i["fb"])(e) ? this._rapiAccess.getPreloadForItem.bind(this._rapiAccess) : this._rapiAccess.getPreloadForConfiguration.bind(this._rapiAccess), i["c"].start("rapi_preloads");
                        const n = () => {
                            i["c"].end("rapi_preloads");
                            const t = i["c"].getMeasure("rapi_preloads");
                            if (Array.isArray(t) && 1 === t.length) {
                                const n = t[0];
                                this._configuratorUiCallbacks.onTrackTiming("Timing", "RapiPreloads", Math.round(n.duration), {
                                    id: e
                                })
                            }
                        };
                        t(e).then(() => {
                            this._isPreloadReady = !0, this._checkInitDone(), n()
                        }, e => {
                            this._isPreloadReady = !0, this._checkInitDone(), console.error(e), n()
                        })
                    }
                    _reloadConfiguration(e, t, n, i) {
                        return this._performLoadConfiguration(e).then(() => {
                            this._isReloading = !1, n()
                        }, e => {
                            this._isReloading = !1, i(e)
                        })
                    }
                    _performLoadConfiguration(e) {
                        return this._onLoadConfiguration(), new Promise((t, n) => {
                            this._initData.preloadHint ? this._preloadPackage(this._initData.preloadHint) : console.warn("When loading a configuration string you have to supply a preloadHint to use fast loading!"), setTimeout(() => {
                                this._loadConfiguration(e).then(this._notifyOnConfigurationReady(t).bind(this), this._notifyOnConfigurationLoadingError(n).bind(this))
                            }, 0)
                        })
                    }
                    _changeHDGeometry(e) {
                        return new Promise((t, n) => e === i["b"].useHDGeometry ? t() : this._isReloading ? n("Change of HD Geometry in progress") : (this._isReloading = !0, i["C"].waitFor(3).then(([e, i]) => {
                            this._reloadConfiguration(e, i, t, n)
                        }, n), i["b"].useHDGeometry = e, void this._kernelAccess.changeUseOfHDGeometry(this._configuratorContext, i["b"].useHDGeometry)))
                    }
                    setOverrides(e) {
                        e && (this._initData.setOverrides(e), this._globalInitData.setOverrides(e))
                    }
                    init(e, t) {
                        this.setOverrides(t);
                        const {
                            preloadHint: n,
                            offset: i,
                            startTag: o
                        } = this._initData;
                        return this._domHelper.setDomElement(e), n ? this._preloadPackage(n) : console.warn("No preload hint! Therefore no preload during init!!"), o && this.getTagById(o, {
                            include: ["items"]
                        }).then(e => this._configuratorUiCallbacks.onOpenTag(e), e => console.error(e)), this._loadWebGlLib(e, i), new Promise(this._initPromiseCallback.bind(this))
                    }
                    cancelSelection() {
                        this._sceneHelper.cancelSelection()
                    }
                    enableHDGeometry() {
                        return this._changeHDGeometry(!0)
                    }
                    disableHDGeometry() {
                        return this._changeHDGeometry(!1)
                    }
                    changeOffset(e) {
                        this._sceneHelper.changeOffset(e)
                    }
                    previewDockings(e, t, n) {
                        this._sceneHelper.requestDockingsPreview(!0, e, t, n)
                    }
                    cancelDockings() {
                        this._sceneHelper.cancelDockings()
                    }
                    requestDeleteComponent() {
                        this._sceneHelper.requestDeleteSelectedComponent()
                    }
                    renderImage(e) {
                        return this._sceneHelper.renderImage(e)
                    }
                    preparePerspectiveImage(e = {}) {
                        return this._sceneHelper.preparePerspectiveImage(e)
                    }
                    preparePartImage(e, t) {
                        let n = {};
                        return "number" == typeof t ? n.size = t : (t || (t = {}), "number" != typeof t.size && (t.size = 256), n = t), this._sceneHelper.preparePartImage(e, n)
                    }
                    saveCurrentConfiguration() {
                        return new Promise((e, t) => {
                            this._kernelAccess.getConfigurationData(this._configuratorContext.planObjectId).then(n => {
                                this._rapiAccess.saveConfiguration(n).then(n => {
                                    this._configuratorUiCallbacks.onConfigurationSaved(n.configurationHash), this._rapiAccess.getComponent(n.rootComponentId).then(i => {
                                        let o = !0,
                                            s = !0,
                                            r = n.perspectiveImage,
                                            a = n.topImage;
                                        n.perspectiveImage || (o = !1, this._sceneHelper.preparePerspectiveImage().then(l => {
                                            this._rapiAccess.savePerspectiveImage(n, l).then(t => {
                                                o = !0, r = t.perspectiveImage, s && (t.label = i.label, t.topImage = a, e(t))
                                            }, t)
                                        })), n.topImage || (s = !1, this._sceneHelper.prepareTopImage().then(l => {
                                            this._rapiAccess.saveTopImage(n, l).then(t => {
                                                s = !0, a = t.topImage, o && (t.label = i.label, t.perspectiveImage = r, e(t))
                                            }, t)
                                        })), o && s && (n.label = i.label, e(n))
                                    }, e => {
                                        throw new Error(e)
                                    })
                                }, t)
                            }).catch(t)
                        })
                    }
                    generateImagesOfCurrentConfiguration() {
                        return new Promise((e, t) => this.saveCurrentConfiguration().then(t => e({
                            topImage: t.topImage,
                            perspectiveImage: t.perspectiveImage,
                            isLocally: t.isLocally
                        }), t))
                    }
                    prepareTopImage(e) {
                        let t = {};
                        return "boolean" == typeof e ? t.showDimensions = e : (e || (e = {}), "boolean" != typeof e.showDimensions && (e.showDimensions = !1), t = e), this._sceneHelper.prepareTopImage(t)
                    }
                    resetCameraPosition() {
                        this._sceneHelper.resetCameraPositionToStart()
                    }
                    showBenchmarks(e) {
                        i["c"].showBenchmarks(e)
                    }
                    debugSceneGraph(e) {
                        this._sceneHelper.debugSceneGraph(e)
                    }
                    async loadConfiguration(e, t) {
                        this.setOverrides(t), this._configuratorContext.lastLoadedRapiId = null, this._sceneHelper && this._sceneHelper.clearScene();
                        const n = await this._performLoadConfiguration(e);
                        return this._rapiAccess.trackView("configuration string"), {
                            partList: n
                        }
                    }
                    async loadConfigurationById(e, t) {
                        this.setOverrides(t);
                        const n = await this._loadItemOrConfigById(e, !0);
                        return this._rapiAccess.trackView(e), {
                            partList: n
                        }
                    }
                    syncPlanObjectToView(e, t) {
                        this.resumeKernelCallbacks(), this._kernelAccess.requestSync(e, t), this._kernelAccess.requestPlanObjectConstruction(t);
                        const n = this._kernelAccess.getSerializedConfiguration(t),
                            i = this._kernelAccess.getCurrentConfigurationHash(t);
                        this._kernelAccess.planObjectConfigurationUpdated(t, n, i)
                    }
                    async loadConfigurableItemById(e, t) {
                        this.setOverrides(t);
                        const n = await this._loadItemOrConfigById(e, !1);
                        return this._rapiAccess.trackView(e), {
                            partList: n
                        }
                    }
                    preLoadConfigurationById(e) {
                        return this._preLoadItemOrConfig(e, !0)
                    }
                    preLoadConfigurableItemById(e) {
                        return this._preLoadItemOrConfig(e, !1)
                    }
                    _getTag(e) {
                        return this._rapiAccess.getTag(e)
                    }
                    _dispatchSetParameter(e, t, n, o, s) {
                        const r = this._configuratorContext.selectedRuntimeComponentId ? "local" : "global",
                            a = i["c"].start("kernel_change_param_" + r + "_" + e);
                        switch (this._configuratorContext.selectionMode) {
                            case "standard":
                                if (this._configuratorContext.selectedRuntimeComponentId || this._configuratorContext.rootComponentParametersAsGlobal) {
                                    let i = this._configuratorContext.selectedRuntimeComponentId ? this._configuratorContext.selectedRuntimeComponentId : this._configuratorContext.rootComponentId;
                                    this._kernelAccess.changeComponentParameter(i, e, t, n, o, s)
                                } else this._kernelAccess.changePlanObjectParameter(this._configuratorContext.planObjectId, e, t, n, o, s);
                                break;
                            case "multiselect":
                                this._kernelAccess.changeCommonComponentParameter(this._configuratorContext.selectedRuntimeComponentIds, e, t, n, o, s)
                        }
                        i["c"].end(a)
                    }
                    setParameter(e, t, n = !1) {
                        return new Promise((i, o) => {
                            const {
                                key: s,
                                type: r
                            } = e;
                            if (h(e)) {
                                if (!n && !this._unitFormatter.isParseableUnitString(t, e)) return o(new SyntaxError('Value "' + t + '" is not parseable'));
                                const i = n ? t : this._unitFormatter.parseValue(t, e),
                                    {
                                        valueFrom: s,
                                        valueTo: a
                                    } = e.validRange,
                                    l = this._unitFormatter.getAllowedDelta();
                                if (!Number.isNaN(s) && i < s - l) return o(new RangeError('Value "' + t + '" is too small, min-val "' + s + '"'));
                                if (!Number.isNaN(a) && i > a + l) return o(new RangeError('Value "' + t + '" is too big, max-val "' + a + '"'));
                                t = "Integer" === r && "number" == typeof i ? i.toFixed() : i.toString()
                            }
                            this._dispatchSetParameter(s, r, t, i, o)
                        })
                    }
                    setParameterOfPlanObject(e, t) {
                        return new Promise((n, i) => {
                            const {
                                planObjectId: o,
                                rootComponentId: s,
                                rootComponentParametersAsGlobal: r
                            } = this._configuratorContext, {
                                type: a,
                                key: l
                            } = e;
                            r ? this._kernelAccess.changeComponentParameter(s, l, a, t, n, i) : this._kernelAccess.changePlanObjectParameter(o, l, a, t, n, i)
                        })
                    }
                    getParametersOfPlanObject() {
                        const {
                            planObjectId: e,
                            rootComponentParametersAsGlobal: t
                        } = this._configuratorContext;
                        return this._kernelAccess.getGlobalParameters(e, t)
                    }
                    setParameterOfRootComponent(e, t) {
                        return new Promise((n, i) => {
                            const {
                                rootComponentId: o
                            } = this._configuratorContext, {
                                type: s,
                                key: r
                            } = e;
                            this._kernelAccess.changeComponentParameter(o, r, s, t, n, i)
                        })
                    }
                    getParametersOfRootComponent() {
                        const {
                            planObjectId: e
                        } = this._configuratorContext;
                        return this._kernelAccess.getGlobalParameters(e, !0)
                    }
                    enableMultiselect() {
                        this._sceneHelper.setSelectionMode("multiselect"), this._configuratorContext.selectionMode = "multiselect"
                    }
                    disableMultiselect() {
                        this._sceneHelper.setSelectionMode("standard"), this._configuratorContext.selectionMode = "standard"
                    }
                    getCurrentConfiguration() {
                        return i["C"].waitFor(1, () => this._kernelAccess.uiRequestConfiguration(this._configuratorContext.planObjectId))
                    }
                    loadComponentIntoKernel(e) {
                        return i["C"].waitFor(0, () => this._kernelAccess.loadComponentIntoKernel(e))
                    }
                    getShortUrlOfCurrentConfiguration() {
                        return new Promise((e, t) => {
                            this.saveCurrentConfiguration().then(n => navigator.onLine ? this._rapiAccess.getShortUrl(n.id, 3).then(t => {
                                const n = t.shortId,
                                    o = i["f"].APP.SHORTENER_URL + n;
                                e(o)
                            }, t) : t("Can not generate short url when offline"), t)
                        })
                    }
                    formatValueToUnitString(e, t) {
                        return this._unitFormatter.formatValueToUnitString(e, t)
                    }
                    getTagById(e, t) {
                        return new Promise((n, i) => {
                            this._getTag(e).then(e => {
                                let o = Promise.resolve([]),
                                    s = Promise.resolve([]);
                                t && t.include && t.include.forEach(t => {
                                    "materials" === t && (o = this._rapiAccess.getMaterialsOf(e)), "items" === t && (s = this._rapiAccess.getItems(e.items))
                                }), Promise.all([o, s]).then(([t, i]) => (i.sort(x), t.sort(x), n({
                                    ...e,
                                    items: i,
                                    materials: t
                                })), i)
                            }, i)
                        })
                    }
                    requestAsset(e) {
                        return this._dataSyncer.requestAsset(e)
                    }
                    changeFloorMaterial(e) {
                        return this._sceneHelper.changeFloorMaterial(e)
                    }
                    async changeFloorMaterialById(e) {
                        const t = await this._rapiAccess.getMaterial(e);
                        return this._sceneHelper.changeFloorMaterial(t)
                    }
                    openFloorMaterials() {
                        this._configuratorUiCallbacks.onOpenFloorMaterials()
                    }
                    openPartList() {
                        this._configuratorUiCallbacks.onOpenPartList()
                    }
                    getAdditionalContentsOf(e) {
                        return this._rapiAccess.getAdditionalContentsOfItems(e)
                    }
                    changeTypeChangeTag(e) {
                        navigator.onLine && this._initData.offlineSync && this._dataSyncer.syncTypeChangeTag(e), this._configuratorUiCallbacks.onChangeTypeChangeTag(e)
                    }
                    removeTypeChangeTag(e) {
                        this._configuratorUiCallbacks.onRemoveTypeChangeTag(e)
                    }
                    showGUI() {
                        const e = document.createElement("style");
                        e.innerText = ".dg.ac {right:auto!important}", document.head.appendChild(e), this._scriptLoader.fetch(r["t"], {
                            id: "dat-gui-js"
                        }).then(() => this._sceneHelper.showGUI(), e => console.error(e))
                    }
                    showStats() {
                        this._sceneHelper.showStats()
                    }
                    showDimensions() {
                        this._sceneHelper.showDimensions()
                    }
                    hideDimensions() {
                        this._sceneHelper.hideDimensions()
                    }
                    syncCatalog(e) {
                        return this._dataSyncer.syncCatalog(e)
                    }
                    syncFloorTag(e) {
                        return this._dataSyncer.syncFloorTag(e)
                    }
                    syncTypeChangeTag(e) {
                        return this._dataSyncer.syncTypeChangeTag(e)
                    }
                    loadDynamicLightSetting(e) {
                        return this._sceneHelper.loadDynamicLightSetting(e)
                    }
                    setBackgroundColor(e) {
                        this._sceneHelper.setBackgroundColor(e)
                    }
                    setBackgroundImage(e) {
                        this._sceneHelper.setBackgroundImage(e)
                    }
                    setBakedShadow(e, t) {
                        this._sceneHelper.setBakedShadow(e, t)
                    }
                    loadSceneSetting(e) {
                        return this._sceneHelper.loadSceneSettings(e)
                    }
                    enableMeshSelection(e) {
                        this._initData.meshSelection = e
                    }
                    updateSize() {
                        this._sceneHelper.updateSize()
                    }
                    setCameraOffset(e) {
                        this._sceneHelper.setCameraOffset(e)
                    }
                    getCameraOffset() {
                        return this._sceneHelper.getCameraOffset()
                    }
                    getMain() {}
                    cleanup() {
                        this._configuratorContext.selectedRuntimeComponentIds = [], this._sceneHelper.sceneCleared(), this._kernelAccess.cleanUpCallbacks()
                    }
                    resumeTest(e) {
                        e && this._domHelper.setDomElement(e), this._lifeCycleManager.resume()
                    }
                    pauseTest() {
                        this._lifeCycleManager.pause()
                    }
                    zoomIn(e) {
                        this._sceneHelper.zoomIn(e)
                    }
                    zoomOut(e) {
                        this._sceneHelper.zoomOut(e)
                    }
                    get callbacks() {
                        return this._configuratorUiCallbacks
                    }
                    getRuntimeComponentIdOfRootComponent() {
                        const e = this._configuratorContext.planObjectId;
                        return e ? this._kernelAccess.getRuntimeComponentIdOfRootComponent(e) : (console.warn("planObjectId not set"), 0)
                    }
                    getCurrentConfigurationHash() {
                        return this._kernelAccess.getConfigurationHash(this._configuratorContext)
                    }
                    getCurrentSelection() {
                        let e = this._configuratorContext.selectedRuntimeComponentIds;
                        return e && e.length || (e = [this._configuratorContext.rootComponentId]), e.map(e => this._kernelAccess.getRuntimeComponentId(e))
                    }
                    enableHD(e) {
                        return new Promise((t, n) => {
                            this._scriptLoader.fetch(r["u"], {
                                id: "pi-js"
                            }).then(() => {
                                this._sceneHelper.enableHD(e), t()
                            }, n)
                        })
                    }
                    disableHD() {
                        return new Promise(e => {
                            this._sceneHelper.disableHD(), e()
                        })
                    }
                    isReady() {
                        const e = i["c"].getMeasure("kernel_is_ready");
                        if (Array.isArray(e) && 1 === e.length) {
                            const t = e[0],
                                n = i["c"].getMeta("kernel_is_ready");
                            this._configuratorUiCallbacks.onTrackTiming("Timing", "KernelIsReady", Math.round(t.duration), Object.assign(n, {
                                startTime: t.startTime
                            }))
                        }
                        this._isKernelReady = !0, this._checkInitDone(), "function" == typeof this._configuratorUiCallbacks.onKernelIsReady && this._configuratorUiCallbacks.onKernelIsReady()
                    }
                    updatePossibleChildren(e, t, n) {
                        const i = [],
                            o = [];
                        let s;
                        const r = new Map,
                            a = new Map;
                        for (let l = 0, c = t.length; l < c; l++) {
                            const e = t[l];
                            if (!e.possible) continue;
                            let n = e.itemId;
                            e.itemId ? (o.push(e.itemId), a.set(e.itemId, e)) : (i.push(e.componentId), r.set(e.componentId, e), n = e.componentId), e.isDefault && !s && (s = n)
                        }
                        Promise.all([this._rapiAccess.getComponents(i), this._rapiAccess.getItems(o)]).then(e => {
                            const t = [],
                                n = e[0],
                                i = e[1];
                            let o;
                            for (let a = 0, l = n.length; a < l; a++) {
                                const e = n[a];
                                e.isItem = !1, e.isComponent = !0;
                                const i = r.get(e.id);
                                i && (e.group = i.group), e.id === s && (e.isDefault = !0, o = e), t.push(e)
                            }
                            for (let r = 0, l = i.length; r < l; r++) {
                                const e = i[r];
                                e.isItem = !0, e.isComponent = !1;
                                const n = a.get(e.id);
                                n && (e.group = n.group), e.id === s && (e.isDefault = !0, o = e), t.push(e)
                            }
                            return t.sort(x), {
                                possibleChildren: t,
                                defaultChild: o || null
                            }
                        }).then(({
                            possibleChildren: e,
                            defaultChild: t
                        }) => {
                            const n = [],
                                i = new Map,
                                o = [];
                            for (let s = 0, r = e.length; s < r; s++) {
                                const t = e[s],
                                    r = t.tags;
                                if (t.tags && Array.isArray(t.tags) && t.tags.length)
                                    for (let e = 0, o = t.tags.length; e < o; e++) {
                                        const o = r[e]; - 1 === n.indexOf(o) && n.push(o);
                                        let s = i.get(o);
                                        if (!s) {
                                            const e = [];
                                            i.set(o, e), s = i.get(o)
                                        }
                                        s.push(t)
                                    } else o.push(t)
                            }
                            return {
                                tagIds: n,
                                associations: i,
                                defaultChild: t,
                                noTagChilds: o
                            }
                        }).then(({
                            tagIds: t,
                            associations: i,
                            defaultChild: o,
                            noTagChilds: s
                        }) => {
                            this._rapiAccess.getTags(t).then(t => {
                                if (this._isCorrectResponse(n, e) && this._shouldBroadcastToUi(n)) {
                                    for (let e = 0, n = t.length; e < n; e++) {
                                        const n = t[e];
                                        n.possibleChildren = i.get(n.id)
                                    }
                                    t.sort(x), s.length && t.unshift({
                                        id: "",
                                        externalIdentifier: "",
                                        global: !1,
                                        created: (new Date).toISOString(),
                                        updated: (new Date).toISOString(),
                                        language: this._globalInitData.locale,
                                        catalog: null,
                                        tags: [],
                                        parents: [],
                                        materials: [],
                                        items: [],
                                        possibleChildren: s
                                    }), this._configuratorUiCallbacks.onUpdatePossibleChildren(t, o)
                                }
                            }, e => {
                                console.error("Couldnt load tags of possible children"), console.error(e)
                            })
                        }, e => console.error(e))
                    }
                    updateParameters(e, t, n, i) {
                        const o = {};
                        t || (t = [], console.warn("Kernel returned no parameter groups! Check why!")), t.forEach(e => {
                            o[e.key] = e
                        }), e.sort(x), e.forEach(e => {
                            e.group ? e.grouping = o[e.group] : e.grouping = null, this._unitFormatter.formatParameter(e), u(e) && Object.defineProperty(e, "groups", {
                                get: () => new Promise((t, o) => {
                                    this._getMaterialGroups(e).then(e => {
                                        this._isCorrectResponse(i, n) && this._shouldBroadcastToUi(i) ? t(e) : o("Response does not match to ids")
                                    }, o)
                                })
                            })
                        }), this._shouldBroadcastToUi(i) && this._configuratorUiCallbacks.onUpdateParameters(e)
                    }
                    loadError(e) {
                        this._isLoadError = !0, this._rejectOnLoadError && this._rejectOnLoadError(e)
                    }
                    resumeKernelCallbacks() {
                        this._kernelAccess.muteKernelCallbacks = !1, this._kernelAccess.resume()
                    }
                    pauseKernelCallbacks() {
                        this._kernelAccess.muteKernelCallbacks = !0, this._kernelAccess.pause()
                    }
                    setActiveGroupInView(e) {
                        this._kernelAccess.setActiveGroupInView(e)
                    }
                    getParameterGroups() {
                        return this._kernelAccess.getParameterGroups()
                    }
                    async getConfiguratorSettings(e) {
                        return this._rapiAccess.getConfiguratorSettings(e)
                    }
                    async moveCamera(e) {
                        return this._sceneHelper.moveCamera(e)
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_rapiAccess", void 0), Object(i["B"])([i["Y"]], e.prototype, "_dataSyncer", void 0), Object(i["B"])([i["Y"]], e.prototype, "_errorHandler", void 0), Object(i["B"])([i["Y"]], e.prototype, "_unitFormatter", void 0), Object(i["B"])([i["Y"]], e.prototype, "_domHelper", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorUiCallbacks", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorKernelAccessCallback", void 0), Object(i["B"])([i["Y"]], e.prototype, "_lifeCycleManager", void 0), Object(i["B"])([i["Y"]], e.prototype, "_kernelAccess", void 0), Object(i["B"])([i["Y"]], e.prototype, "_threeLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_scriptLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_configuratorContext", void 0), Object(i["B"])([i["Y"]], e.prototype, "_sceneHelper", void 0), Object(i["B"])([i["Y"]], e.prototype, "_initData", void 0), Object(i["B"])([i["Y"]], e.prototype, "_globalInitData", void 0), e
            })();
            class j extends r["i"] {
                setupDependencies() {
                    i["gb"].setup(L), this.lookup("kernel-access", this._context), this.lookup("rapi-access", this._context), this.lookup("script-loader", this._context), this.lookup("logger", this._context)
                }
                cleanUpGlobals() {
                    delete window.RoomleConfigurator
                }
                cleanUpDependencies() {
                    const e = this.lookup("script-loader"),
                        t = this.lookup("rapi-access"),
                        n = (this.lookup("dom-helper"), this.lookup("scene-helper"));
                    e && e.cleanUp(), t && t.cleanUp(), n && n.cleanUp()
                }
                setupGlobals(e) {
                    const {
                        kernelInstance: t,
                        kernelContainer: n,
                        planObjectId: o
                    } = e || {};
                    i["b"].init({
                        kernelInstance: t,
                        kernelContainer: n,
                        planObjectId: o
                    })
                }
                getApi() {
                    return this._configurator
                }
                bootFinished() {
                    this._configurator = new U(this._context), this._configurator.getMain = () => this, window.RoomleConfigurator || (window.RoomleConfigurator = this._configurator)
                }
                getContextName() {
                    return "configurator"
                }
            }
            var B = Object.freeze({
                __proto__: null,
                Configurator: j
            })
        },
        a942: function(e, t, n) {
            "use strict";
            n.d(t, "a", (function() {
                return s
            }));
            var i = n("12df"),
                o = n("ea7d");
            class s extends o["a"] {
                constructor(e) {
                    super(e), this._geometryComponentMaterialCache = new Map, this._configuratorPreviewMaterial = new THREE.MeshStandardMaterial({
                        color: i["l"],
                        transparent: !0,
                        opacity: i["o"],
                        roughness: i["p"],
                        envMap: null
                    }), this._environmentLoader.setEnvMap(this._configuratorPreviewMaterial)
                }
                generateMesh(e = 0, t = null, n, i, o, s, r, a = !1) {
                    let l;
                    l = a ? this._generateGeometry(t, i, o, s, r).clone() : this._generateGeometry(t, i, o, s, r);
                    const c = this._createMesh(e, t, l);
                    return c.layers.set(3), n && this.materialQueue.push(this._assignMaterial(c, n).then(() => {
                        e && t && this._geometryComponentMaterialCache.set(this._getComponentMeshId(e, t), n), this._materialLoaded && this._materialLoaded()
                    })), c
                }
                _createMesh(e, t, n) {
                    if (e && t) {
                        const i = this._getComponentMeshId(e, t);
                        if (this._geometryComponentMaterialCache.has(i)) {
                            const e = this._geometryComponentMaterialCache.get(i);
                            if (this._cacheHolder.materialCache.has(e)) {
                                const t = this._cacheHolder.materialCache.get(e);
                                return new THREE.Mesh(n, t)
                            }
                        }
                    }
                    return new THREE.Mesh(n, this._configuratorPreviewMaterial.clone())
                }
                _getComponentMeshId(e, t) {
                    return e + "_" + t
                }
                setMaterial(e, t, n) {
                    this._assignMaterial(e, t).then(() => {
                        this._materialLoaded && this._materialLoaded()
                    })
                }
                loadMaterial(e, t, n) {
                    return super._loadMaterial(e, t, n)
                }
                loadTextures(e, t, n, i) {
                    return super._loadTextures(e, t, n, i)
                }
            }
        }
    }
]);
//# sourceMappingURL=chunk-66be89ce-legacy.163b9cb6.js.map