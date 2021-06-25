(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-6d36a2bc"], {
        7884: function(t, e, i) {
            "use strict";
            i.d(e, "a", (function() {
                return r
            }));
            var a = i("12df"),
                n = i("2354");
            class r extends n["h"] {
                constructor(t, e) {
                    super(t, e), this._params = {
                        ambientLight: {
                            color: "#ffffff"
                        },
                        mainDirLight: {
                            position: {
                                x: -3,
                                y: 4,
                                z: 4
                            },
                            color: "#ffffff"
                        },
                        secondDirLight: {
                            position: {
                                x: 3,
                                y: 4,
                                z: 3
                            },
                            color: "#ffffff"
                        }
                    }, this._mainDirectionalLight = new THREE.DirectionalLight(new THREE.Color(this._params.mainDirLight.color), .8), this._mainDirectionalLight.position.set(this._params.mainDirLight.position.x, this._params.mainDirLight.position.y, this._params.mainDirLight.position.z), this._mainDirectionalLight.layers.set(1), this._mainDirectionalLight.castShadow = !0, this._mainDirectionalLight.shadow.camera.near = .1, this._mainDirectionalLight.shadow.camera.far = 100, this._mainDirectionalLight.shadow.mapSize = new THREE.Vector2(1024, 1024), this._mainDirectionalLight.visible = !0, this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0)), this._secondDirectionalLight = new THREE.DirectionalLight(new THREE.Color(this._params.secondDirLight.color), .2), this._secondDirectionalLight.position.set(this._params.secondDirLight.position.x, this._params.secondDirLight.position.y, this._params.secondDirLight.position.z), this._secondDirectionalLight.layers.set(1), this._secondDirectionalLight.castShadow = !1, this._secondDirectionalLight.shadow.camera.near = .1, this._secondDirectionalLight.shadow.camera.far = 100, this._secondDirectionalLight.shadow.mapSize = new THREE.Vector2(1024, 1024), this._secondDirectionalLight.visible = !0, this._secondDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0)), this._ambientLight = new THREE.AmbientLight(new THREE.Color(this._params.ambientLight.color), .5), this._ambientLight.layers.set(1), this.addToScene()
                }
                needsBounds() {
                    return !0
                }
                updateBounds(t) {
                    const e = t.getSize(new THREE.Vector3),
                        i = Math.max(Math.max(e.x, e.y), e.z) + 1,
                        a = i / 2;
                    this._mainDirectionalLight.shadow.camera.top = a, this._mainDirectionalLight.shadow.camera.bottom = -a, this._mainDirectionalLight.shadow.camera.left = -a, this._mainDirectionalLight.shadow.camera.right = a, this._mainDirectionalLight.shadow.camera.near = .01, this._mainDirectionalLight.shadow.camera.far = 4 * i, this._mainDirectionalLight.shadow.camera.updateProjectionMatrix(), this._secondDirectionalLight.shadow.camera.top = a, this._secondDirectionalLight.shadow.camera.bottom = -a, this._secondDirectionalLight.shadow.camera.left = -a, this._secondDirectionalLight.shadow.camera.right = a, this._secondDirectionalLight.shadow.camera.near = .01, this._secondDirectionalLight.shadow.camera.far = 4 * i, this._secondDirectionalLight.shadow.camera.updateProjectionMatrix()
                }
                addToScene() {
                    this._scene.add(this._mainDirectionalLight), this._scene.add(this._secondDirectionalLight), this._scene.add(this._ambientLight)
                }
                removeFromScene() {
                    this._scene.remove(this._mainDirectionalLight), this._scene.remove(this._secondDirectionalLight), this._scene.remove(this._ambientLight)
                }
                reload() {
                    this.removeFromScene(), this.addToScene()
                }
                showGUI() {
                    let t = Object(a["V"])();
                    if (t) {
                        if (this._ambientLight) {
                            let e = t.addFolder("Ambient Light");
                            e.add(this._ambientLight, "visible"), e.add(this._ambientLight, "intensity").min(0).max(5).step(.1), e.addColor(this._params.ambientLight, "color").onChange(t => this._ambientLight.color = new THREE.Color(t))
                        }
                        if (this._mainDirectionalLight) {
                            let e = t.addFolder("Main Directional Light");
                            e.add(this._mainDirectionalLight, "visible"), e.add(this._mainDirectionalLight, "intensity").min(0).max(10).step(.1), e.add(this._mainDirectionalLight, "castShadow"), e.addColor(this._params.mainDirLight, "color").onChange(t => this._mainDirectionalLight.color = new THREE.Color(t)), e.add(this._mainDirectionalLight.position, "x").min(-10).max(10).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0))), e.add(this._mainDirectionalLight.position, "y").min(-10).max(50).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0))), e.add(this._mainDirectionalLight.position, "z").min(-10).max(10).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0)))
                        }
                        if (this._secondDirectionalLight) {
                            let e = t.addFolder("Second Directional Light");
                            e.add(this._secondDirectionalLight, "visible"), e.add(this._secondDirectionalLight, "intensity").min(0).max(10).step(.1), e.add(this._secondDirectionalLight, "castShadow"), e.addColor(this._params.mainDirLight, "color").onChange(t => this._mainDirectionalLight.color = new THREE.Color(t)), e.add(this._secondDirectionalLight.position, "x").min(-10).max(10).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0))), e.add(this._secondDirectionalLight.position, "y").min(-10).max(50).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0))), e.add(this._secondDirectionalLight.position, "z").min(-10).max(10).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0)))
                        }
                    }
                }
            }
        },
        "95ca": function(t, e, i) {
            "use strict";
            i.d(e, "a", (function() {
                return s
            })), i.d(e, "b", (function() {
                return h
            })), i.d(e, "c", (function() {
                return p
            })), i.d(e, "d", (function() {
                return m
            })), i.d(e, "e", (function() {
                return _
            })), i.d(e, "f", (function() {
                return u
            }));
            var a = i("12df"),
                n = i("2354"),
                r = i("7884"),
                s = "static/GLTFExporter-86edae059df3a219.js";
            const o = Object(a["jb"])(30);
            class h extends n["d"] {
                constructor(t, e, i, a) {
                    super(), this._offset = new THREE.Vector3(0, 0, 0), this._mode = void 0 === a ? 1 : a, this._scene = t, this._camera = e, this._raycaster = new THREE.Raycaster, this._raycaster.layers.enableAll(), this._inputManager = i, this._addInputListeners(i), this._planeBottom = new THREE.Plane(new THREE.Vector3(0, 1, 0)), this._planeFront = new THREE.Plane(new THREE.Vector3(0, 0, 1)), this._planeSide = new THREE.Plane(new THREE.Vector3(1, 0, 0))
                }
                _addInputListeners(t) {
                    t.addEventListener(3, t => {
                        this._findCandidate(t.positionRelative)
                    }, this), t.addEventListener(5, t => {
                        this._findSelection(t.positionRelative)
                    }, this), t.addEventListener(6, t => {
                        this._findHover(t.positionRelative, t.type)
                    }, this), t.addEventListener(0, t => {
                        this._onDragStart(t.positionRelative)
                    }, this), t.addEventListener(1, t => {
                        this._onDrag(t.positionRelative)
                    }, this), t.addEventListener(2, t => {
                        this._onDragEnd(t.positionRelative)
                    }, this), t.addEventListener(9, t => {
                        this._onRotate(t.positionRelative, t.rotation)
                    }, this), t.addEventListener(10, () => {
                        this._currentRotate = null
                    }, this)
                }
                _findCandidate(t) {
                    this._intersection(t) && this._inputManager.onElementHit()
                }
                _findSelection(t) {
                    let e = this._intersection(t);
                    e ? e && e.object.dispatchEvent({
                        type: "select"
                    }) : this.dispatchEvent(3)
                }
                _findHover(t, e) {
                    const i = this._intersection(t);
                    !i && this._currentHover ? (this._currentHover.dispatchEvent({
                        type: "hover_off",
                        attachment: {
                            type: e
                        }
                    }), this._currentHover = null) : i && (this._currentHover && this._currentHover.id !== i.object.id && (this._currentHover.dispatchEvent({
                        type: "hover_off",
                        attachment: {
                            type: e
                        }
                    }), this._currentHover = null), this._currentHover ? this._currentHover.dispatchEvent({
                        type: "hover_move",
                        attachment: {
                            intersection: i,
                            type: e
                        }
                    }) : (this._currentHover = i.object, this._currentHover.dispatchEvent({
                        type: "hover_on",
                        attachment: {
                            intersection: i,
                            type: e
                        }
                    })))
                }
                _intersection(t) {
                    const e = this._intersect(t);
                    if (e.length <= 0) return null;
                    let i = e[0];
                    return e.length > 1 && this._currentHover && this._currentDrag && this._currentDrag.id !== this._currentHover.id && e.forEach(t => {
                        t.object.id === this._currentHover.id && t.object.userData.priority === this._currentHover.userData.priority && i.object.userData.priority <= t.object.userData.priority && (i = t)
                    }), i
                }
                _intersect(t) {
                    this._raycaster.setFromCamera(t, this._camera);
                    const e = [];
                    return this._raycaster.intersectObjects(this._scene.children, !0).forEach(t => {
                        t.object.userData.hasListener && e.push(t)
                    }), e.length >= 0 ? e.sort((t, e) => t.object.userData.priority !== e.object.userData.priority ? e.object.userData.priority - t.object.userData.priority : t.distance - e.distance) : []
                }
                _onDragStart(t) {
                    let e = this._intersection(t);
                    if (!e && !this._currentDrag) return;
                    if (e && e.object.userData.roomleId === this._rootComponentId) return;
                    !this._currentDrag && e && (this._currentDrag = e.object, this._currentDrag.dispatchEvent({
                        type: "drag_start"
                    }));
                    let i = this._currentDrag.parent;
                    i && i.computeBoundingBox && (i.computeBoundingBox(), this._calculateOffset(i)), this._positionPlanes(i)
                }
                _onDrag(t) {
                    if (!this._currentDrag) return;
                    this._raycaster.setFromCamera(t, this._camera);
                    let e, i = new THREE.Vector3(0, 0, -5);
                    this._raycaster.ray.intersectPlane(this._planeBottom, i);
                    let a = this._getDistanceToCamera(i),
                        n = this._camera.userData.yaw;
                    if (0 === this._mode) this._currentDragOffset || (this._currentDragOffset = i.clone().sub(this._currentDrag.parent.position.clone())), e = i.clone().sub(this._currentDragOffset), e.y = this._currentDrag.parent.position.y;
                    else {
                        let t = new THREE.Vector3(0, 0, 0),
                            r = new THREE.Vector3(0, 0, 0);
                        this._raycaster.ray.intersectPlane(this._planeFront, t), this._raycaster.ray.intersectPlane(this._planeSide, r);
                        let s = this._getDistanceToCamera(r),
                            h = this._getDistanceToCamera(t);
                        n >= -o && n <= o ? e = a < h ? i.clone() : t.clone() : a < h && a < s ? e = i.clone() : h < a && h < s ? e = t.clone() : s < a && s < h && (e = r.clone()), e.sub(this._offset)
                    }
                    this._currentDrag.dispatchEvent({
                        type: "drag",
                        attachment: {
                            position: e
                        }
                    })
                }
                _getDistanceToCamera(t) {
                    let e = t.clone().sub(this._camera.position).length();
                    return Object(a["t"])(t) && (e = Number.POSITIVE_INFINITY), e
                }
                _onDragEnd(t) {
                    this._currentDrag && (this._currentDrag.dispatchEvent({
                        type: "drag_end",
                        attachment: {
                            position: t
                        }
                    }), this._currentDrag = null, this._currentDragOffset = null)
                }
                _onRotate(t, e) {
                    if (!this._currentRotate) {
                        let e = this._intersection(t);
                        if (!e) return;
                        this._currentRotate = e.object
                    }
                    this._currentRotate.dispatchEvent({
                        type: "rotate",
                        attachment: {
                            rotation: e
                        }
                    })
                }
                _positionPlanes(t) {
                    0 === this._mode ? (this._planeBottom.constant = 0, this._camera.userData && this._camera.userData.pitch && this._camera.userData.pitch < 0 && (this._planeBottom.constant = -3)) : t && t.boundingBox && this._rootComponentPosition && (this._planeBottom.constant = -t.boundingBox.getCenter(new THREE.Vector3).y - this._rootComponentPosition.y, this._planeSide.constant = 2 * -t.boundingBox.getSize(new THREE.Vector3).x + t.boundingBox.getCenter(new THREE.Vector3).x, this._camera.userData.yaw > 0 && (this._planeSide.constant *= -1), this._bounds && (this._planeFront.constant = this._bounds.z / 2 + t.boundingBox.getCenter(new THREE.Vector3).z))
                }
                _calculateOffset(t) {
                    t && t.boundingBox && (this._offset.copy(t.boundingBox.getCenter(new THREE.Vector3)), this._offset.applyQuaternion(t.getWorldQuaternion(new THREE.Quaternion)))
                }
                update(t, e, i) {
                    if (t && (this._bounds = t), e && (this._rootComponentPosition = e), i) {
                        this._backgroundScene = i;
                        let t = this._backgroundScene.children[0];
                        t instanceof THREE.Mesh && t.geometry.computeBoundingBox()
                    }
                }
                clear() {
                    this._currentDrag && Object(a["u"])(this._currentDrag), this._currentHover && Object(a["u"])(this._currentHover)
                }
                enableDragIn(t) {
                    this._currentDrag = t
                }
                setRootComponentId(t) {
                    this._rootComponentId = t
                }
                setCamera(t) {
                    this._camera = t
                }
                setScene(t) {
                    this._scene = t
                }
            }
            class c extends n["h"] {
                constructor(t, e) {
                    super(t, e), this._params = {
                        ambientLight: {
                            color: "#ffffff"
                        }
                    }, this._ambientLight = new THREE.AmbientLight(new THREE.Color(this._params.ambientLight.color), 1.2), this._ambientLight.layers.set(1), this.addToScene()
                }
                needsBounds() {
                    return !1
                }
                addToScene() {
                    this._scene.add(this._ambientLight)
                }
                removeFromScene() {
                    this._scene.remove(this._ambientLight)
                }
                reload() {
                    this.removeFromScene(), this.addToScene()
                }
                showGUI() {
                    let t = Object(a["V"])();
                    if (t && this._ambientLight) {
                        let e = t.addFolder("Ambient Light");
                        e.add(this._ambientLight, "visible"), e.add(this._ambientLight, "intensity").min(0).max(5).step(.1), e.addColor(this._params.ambientLight, "color").onChange(t => this._ambientLight.color = new THREE.Color(t))
                    }
                }
            }
            let l = null;
            const d = () => (l || (l = new THREE.WebGLRenderer({
                    antialias: !0,
                    alpha: !0
                }), l.outputEncoding = THREE.sRGBEncoding, l.gammaFactor = 2.2), l),
                m = (t, e = 0) => {
                    const i = t.getSize(new THREE.Vector3);
                    return i.addScalar(e), {
                        center: t.getCenter(new THREE.Vector3),
                        bounds: i,
                        diagonal: Math.sqrt(Math.pow(i.x, 2) + Math.pow(i.y, 2) + Math.pow(i.z, 2))
                    }
                },
                _ = (t, e, i, a = {}) => new Promise(n => {
                    const {
                        size: s = 1024
                    } = a, o = d();
                    o.setSize(s, s);
                    const h = t.fog ? t.fog.clone() : null,
                        c = t.background ? t.background.clone() : null;
                    t.background = null, t.fog = null;
                    let l = new r["a"](t);
                    e.layers.disable(2), e.layers.disable(5), g(e, i, -20, -30), o.render(t, e);
                    const m = o.domElement.toDataURL();
                    e.layers.enable(2), t.background = c, t.fog = h, l.removeFromScene(), n({
                        image: m,
                        width: s,
                        height: s,
                        blob: null
                    })
                }),
                u = (t, e, i, a, n, r) => new Promise(a => {
                    r || (r = 1024);
                    const n = d();
                    n.setSize(r, r);
                    const s = t.fog ? t.fog.clone() : null,
                        o = t.background ? t.background.clone() : null;
                    t.background = null, t.fog = null, e.layers.disable(2), e.layers.disable(5), i ? g(e, i, -20, -30) : (e.aspect = 1, e.updateProjectionMatrix()), n.render(t, e);
                    const h = n.domElement.toDataURL();
                    e.layers.enable(2), t.background = o, t.fog = s, a({
                        image: h,
                        width: r,
                        height: r,
                        blob: null
                    })
                }),
                g = (t, e, i, n) => {
                    t.far = 1e3, t.fov = 15, t.aspect = 1, t.position.copy(e.center), t.rotation.set(0, 0, 0), t.rotateY(Object(a["jb"])(n)), t.rotateX(Object(a["jb"])(i)), t.translateZ(3.8 * e.diagonal), t.updateProjectionMatrix()
                },
                p = (t, e, i, n = {}) => {
                    const {
                        showDimensions: s = !1
                    } = n;
                    return new Promise(n => {
                        const o = d();
                        o.autoClear = !1;
                        let h = new THREE.OrthographicCamera(-i.bounds.x / 2, i.bounds.x / 2, i.bounds.z / 2, -i.bounds.z / 2, .5);
                        h.position.copy(i.center), h.rotateX(Object(a["jb"])(-90)), h.translateZ(i.bounds.y + 1), h.far = h.position.y + .5, h.layers.mask = 65535;
                        let l = 200 * i.bounds.x,
                            m = 200 * i.bounds.z;
                        if (l > 4096 || m > 4096) {
                            let t = 0;
                            l > 4096 ? t = l / 4096 : m > 4096 && (t = m / 4096), l /= t, m /= t
                        }
                        o.setSize(l, m);
                        let _ = t.fog ? t.fog.clone() : null,
                            u = t.background ? t.background.clone() : null;
                        t.background = null, t.fog = null;
                        let g = s ? new c(t) : new r["a"](t);
                        h.layers.disable(2), h.layers.disable(5), s ? h.layers.enable(6) : h.layers.disable(6), o.render(t, h), e && (o.clearDepth(), o.render(e, h));
                        let p = o.domElement.toDataURL();
                        h.layers.enable(2), h.layers.enable(5), t.background = u, t.fog = _, g.removeFromScene(), n({
                            image: p,
                            width: l,
                            height: m,
                            blob: null
                        })
                    })
                }
        },
        ea7d: function(t, e, i) {
            "use strict";
            i.d(e, "a", (function() {
                return s
            })), i.d(e, "b", (function() {
                return o
            }));
            var a = i("12df"),
                n = i("4a09");
            class r {
                constructor(t, e) {
                    this._waitingPromises = [], this._errorCallback = () => {}, Promise.allSettled = Promise.allSettled || (t => Promise.all(t.map(t => t.then(t => ({
                        status: "fulfilled",
                        value: t
                    })).catch(t => ({
                        status: "rejected",
                        reason: t
                    }))))), t && this.registerCallback(t), e && (this._errorCallback = e)
                }
                push(t) {
                    this._waitingPromises.push(t), Promise.all(this._waitingPromises).then(t => {
                        t.length === this._waitingPromises.length && this._callback && (this._callback(t), this._waitingPromises = [])
                    }, this._errorCallback)
                }
                finished(t = !1) {
                    return new Promise((e, i) => {
                        const a = t ? "allSettled" : "all";
                        Promise[a](this._waitingPromises).then(t => {
                            if ("allSettled" === a) {
                                const i = [];
                                t.forEach(({
                                    value: t,
                                    status: e
                                }) => {
                                    "fulfilled" === e && i.push(t)
                                }), e(i)
                            } else e(t)
                        }, t => {
                            i(t)
                        })
                    })
                }
                registerCallback(t) {
                    this._callback = t
                }
                unregisterCallback() {
                    this._callback = null
                }
                get length() {
                    return this._waitingPromises.length
                }
            }
            let s = (() => {
                class t {
                    constructor(t) {
                        this.materialQueue = new r, this._maxAnisotropy = 1, this._maxTextures = 16, this._textureLoader = new THREE.TextureLoader, this._creator_ = t, this._previewMaterial = new THREE.MeshStandardMaterial({
                            color: a["l"],
                            roughness: a["p"],
                            metalness: a["r"]
                        }), this._environmentLoader.setEnvMap(this._previewMaterial)
                    }
                    _generateGeometry(t, e, i, a, n) {
                        let r;
                        if (t && this._cacheHolder.geometryCache.has(t)) r = this._cacheHolder.geometryCache.get(t);
                        else {
                            r = new THREE.Geometry, r.faceVertexUvs = [], r.faceVertexUvs[0] = [];
                            for (let t = 0, i = e.length; t < i; t += 3) r.vertices.push(new THREE.Vector3(e[t] / 1e3, e[t + 2] / 1e3, e[t + 1] / -1e3));
                            let s = 0,
                                o = 0,
                                h = 0,
                                c = 0,
                                l = 0,
                                d = 0,
                                m = 0,
                                _ = 0,
                                u = 0,
                                g = 0,
                                p = [];
                            for (let t = 0, e = i.length; t < e; t += 3) o = t, h = t + 1, c = t + 2, l = 3 * i[o], d = 3 * i[h], m = 3 * i[c], p = [new THREE.Vector3(n[l], n[l + 2], -1 * n[l + 1]), new THREE.Vector3(n[d], n[d + 2], -1 * n[d + 1]), new THREE.Vector3(n[m], n[m + 2], -1 * n[m + 1])], r.faces.push(new THREE.Face3(i[o], i[h], i[c], p)), _ = 2 * i[o], u = 2 * i[h], g = 2 * i[c], r.faceVertexUvs[0][s] = [], r.faceVertexUvs[0][s][0] = new THREE.Vector2(a[_], a[_ + 1]), r.faceVertexUvs[0][s][1] = new THREE.Vector2(a[u], a[u + 1]), r.faceVertexUvs[0][s][2] = new THREE.Vector2(a[g], a[g + 1]), s++;
                            t && this._cacheHolder.geometryCache.set(t, r)
                        }
                        return r
                    }
                    changeMaterialOfMesh(t, e) {
                        t && e ? (t.material = e, t.material.transparent || 0 === t.material.opacity || t.material.transmission > 0 ? (t.castShadow = !1, t.receiveShadow = !1) : (t.castShadow = !0, t.receiveShadow = !0), t.material.needsUpdate = !0) : console.warn("could not assign material to mesh", {
                            mesh: t
                        }, {
                            material: e
                        })
                    }
                    _createMaterial(t, e, i, r, s) {
                        if (this._cacheHolder.materialCache.has(t)) e();
                        else if (t.startsWith("benchmarkMaterial")) {
                            let o = Object(n["e"])(t),
                                h = Object(a["i"])(o, this._environmentLoader);
                            this._loadBenchmarkTextures(o, h, r, s).then(e, i)
                        } else this._rapiAccess.getMaterial(t).then(t => {
                            let n = Object(a["i"])(t, this._environmentLoader);
                            this._loadTextures(t, n, r, s).then(e, i)
                        }, i)
                    }
                    _loadBenchmarkTextures(t, e, i = 1, r = 1) {
                        return new Promise((s, o) => {
                            const h = Object(n["g"])(t.id);
                            Object(a["k"])(this._dataSyncer.requestAsset(h.image, !0), h, e, this._maxAnisotropy, i / (0 === h.mmWidth ? 1 : h.mmWidth), r / (0 === h.mmHeight ? 1 : h.mmHeight), this._maxTextures).then(() => {
                                this._cacheHolder.materialCache.set(t.id, e), s()
                            }, o)
                        })
                    }
                    _loadTextures(t, e, i = 1, n = 1) {
                        return new Promise((r, s) => {
                            if (!t.textures || t.textures && 0 === t.textures.length) return this._cacheHolder.materialCache.set(t.id, e), r();
                            this._rapiAccess.getTexturesOf(t).then(o => {
                                let h = [];
                                o.forEach(t => {
                                    h.push(Object(a["k"])(this._dataSyncer.requestAsset(t.image, !0), t, e, this._maxAnisotropy, i / (0 === t.mmWidth ? 1 : t.mmWidth), n / (0 === t.mmHeight ? 1 : t.mmHeight), this._maxTextures))
                                }), Promise.all(h).then(() => {
                                    this._cacheHolder.materialCache.set(t.id, e), r()
                                }, s)
                            })
                        })
                    }
                    _loadMaterial(t, e, i) {
                        return new Promise((a, n) => {
                            this._singlePromiseFactory.create(6, t, (a, n) => this._createMaterial(t, a, n, e, i)).then(() => {
                                setTimeout(() => a(this._cacheHolder.materialCache.get(t)), 0)
                            }, n)
                        })
                    }
                    _assignMaterial(t, e) {
                        return this._cacheHolder.materialCache.has(e) ? (this.changeMaterialOfMesh(t, this._cacheHolder.materialCache.get(e)), Promise.resolve()) : new Promise((i, a) => {
                            this._loadMaterial(e).then(e => {
                                this.changeMaterialOfMesh(t, e), i()
                            }, a)
                        })
                    }
                    get maxAnisotropy() {
                        return this._maxAnisotropy
                    }
                    set maxAnisotropy(t) {
                        this._maxAnisotropy = t
                    }
                    get maxTextures() {
                        return this._maxTextures
                    }
                    set maxTextures(t) {
                        this._maxTextures = t
                    }
                    clear() {
                        this._cacheHolder.clear()
                    }
                    _assignRGB(t, e) {
                        return new Promise(i => {
                            let a, n = "rbg" + JSON.stringify(e);
                            this._cacheHolder.materialCache.has(n) ? a = this._cacheHolder.materialCache.get(n) : (a = new THREE.MeshStandardMaterial({
                                color: e
                            }), this._environmentLoader.setEnvMap(a), this._cacheHolder.materialCache.set(n, a)), this.changeMaterialOfMesh(t, a), setTimeout(() => i(), 0)
                        })
                    }
                    _assignItem(t, e) {
                        return new Promise((i, a) => {
                            if (this._cacheHolder.materialCache.has(e)) return this.changeMaterialOfMesh(t, this._cacheHolder.materialCache.get(e)), void i();
                            this._rapiAccess.getItem(e).then(n => {
                                if (n.topImage) this._textureLoader.load(n.topImage, a => {
                                    a.anisotropy = this._maxAnisotropy, a.wrapS = THREE.RepeatWrapping, a.wrapT = THREE.RepeatWrapping;
                                    let r = new THREE.Vector2(1, 1);
                                    n.width > 0 && (r.x = 1 / n.width), n.depth > 0 && (r.y = 1 / n.depth), a.repeat.set(r.x, r.y);
                                    const s = new THREE.MeshPhysicalMaterial({
                                        map: a,
                                        roughness: .5,
                                        metalness: .1
                                    });
                                    this._environmentLoader.setEnvMap(s), this._cacheHolder.materialCache.set(e, s), this.changeMaterialOfMesh(t, s), setTimeout(() => i(), 0)
                                });
                                else {
                                    const t = "can not set material, catalog item top image is not set";
                                    console.warn(t), a(t)
                                }
                            }, a)
                        })
                    }
                    _generateMesh(t = 0, e = null, i, a, n, r, s, o = !1) {
                        return this._plannerMeshGenerator.generateMesh(e, i, a, n, r, s)
                    }
                    setMaterialLoadedListener(t) {
                        this._materialLoaded = t
                    }
                    removeMaterialLoadedListener() {
                        this._materialLoaded = void 0
                    }
                }
                return Object(a["B"])([a["Y"]], t.prototype, "_rapiAccess", void 0), Object(a["B"])([a["Y"]], t.prototype, "_environmentLoader", void 0), Object(a["B"])([a["Y"]], t.prototype, "_dataSyncer", void 0), Object(a["B"])([a["Y"]], t.prototype, "_singlePromiseFactory", void 0), Object(a["B"])([a["Y"]], t.prototype, "_cacheHolder", void 0), Object(a["B"])([a["Y"]], t.prototype, "_plannerMeshGenerator", void 0), t
            })();
            class o {
                constructor(t) {
                    return this._isMute = !1, this._creator_ = t, Object(n["h"])(this, "_isMute", {
                        enumerable: !1,
                        writable: !1
                    }), Object(n["h"])(o.prototype, "_setMute", {
                        enumerable: !1,
                        writable: !1
                    }), Object(n["h"])(o.prototype, "mute", {
                        enumerable: !1,
                        writable: !1
                    }), Object(n["h"])(o.prototype, "unmute", {
                        enumerable: !1,
                        writable: !1
                    }), new Proxy(this, this)
                }
                _setMute(t) {
                    Object(n["k"])(this, "_isMute", !0), this._isMute = t, Object(n["k"])(this, "_isMute", !1)
                }
                mute() {
                    this._setMute(!0)
                }
                unmute() {
                    this._setMute(!1)
                }
                get(t, e) {
                    return this._isMute && "function" == typeof this[e] && "on" === e.substr(0, 2) ? () => {} : this[e]
                }
            }
        }
    }
]);
//# sourceMappingURL=chunk-6d36a2bc-legacy.380b568f.js.map