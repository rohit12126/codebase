(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-62cb4e26", "chunk-6d36a2bc"], {
        7884: function(e, t, n) {
            "use strict";
            n.d(t, "a", (function() {
                return s
            }));
            var i = n("12df"),
                a = n("2354");
            class s extends a["h"] {
                constructor(e, t) {
                    super(e, t), this._params = {
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
                updateBounds(e) {
                    const t = e.getSize(new THREE.Vector3),
                        n = Math.max(Math.max(t.x, t.y), t.z) + 1,
                        i = n / 2;
                    this._mainDirectionalLight.shadow.camera.top = i, this._mainDirectionalLight.shadow.camera.bottom = -i, this._mainDirectionalLight.shadow.camera.left = -i, this._mainDirectionalLight.shadow.camera.right = i, this._mainDirectionalLight.shadow.camera.near = .01, this._mainDirectionalLight.shadow.camera.far = 4 * n, this._mainDirectionalLight.shadow.camera.updateProjectionMatrix(), this._secondDirectionalLight.shadow.camera.top = i, this._secondDirectionalLight.shadow.camera.bottom = -i, this._secondDirectionalLight.shadow.camera.left = -i, this._secondDirectionalLight.shadow.camera.right = i, this._secondDirectionalLight.shadow.camera.near = .01, this._secondDirectionalLight.shadow.camera.far = 4 * n, this._secondDirectionalLight.shadow.camera.updateProjectionMatrix()
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
                    let e = Object(i["V"])();
                    if (e) {
                        if (this._ambientLight) {
                            let t = e.addFolder("Ambient Light");
                            t.add(this._ambientLight, "visible"), t.add(this._ambientLight, "intensity").min(0).max(5).step(.1), t.addColor(this._params.ambientLight, "color").onChange(e => this._ambientLight.color = new THREE.Color(e))
                        }
                        if (this._mainDirectionalLight) {
                            let t = e.addFolder("Main Directional Light");
                            t.add(this._mainDirectionalLight, "visible"), t.add(this._mainDirectionalLight, "intensity").min(0).max(10).step(.1), t.add(this._mainDirectionalLight, "castShadow"), t.addColor(this._params.mainDirLight, "color").onChange(e => this._mainDirectionalLight.color = new THREE.Color(e)), t.add(this._mainDirectionalLight.position, "x").min(-10).max(10).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0))), t.add(this._mainDirectionalLight.position, "y").min(-10).max(50).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0))), t.add(this._mainDirectionalLight.position, "z").min(-10).max(10).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0)))
                        }
                        if (this._secondDirectionalLight) {
                            let t = e.addFolder("Second Directional Light");
                            t.add(this._secondDirectionalLight, "visible"), t.add(this._secondDirectionalLight, "intensity").min(0).max(10).step(.1), t.add(this._secondDirectionalLight, "castShadow"), t.addColor(this._params.mainDirLight, "color").onChange(e => this._mainDirectionalLight.color = new THREE.Color(e)), t.add(this._secondDirectionalLight.position, "x").min(-10).max(10).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0))), t.add(this._secondDirectionalLight.position, "y").min(-10).max(50).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0))), t.add(this._secondDirectionalLight.position, "z").min(-10).max(10).step(.1).onChange(() => this._mainDirectionalLight.lookAt(new THREE.Vector3(0, 0, 0)))
                        }
                    }
                }
            }
        },
        "95ca": function(e, t, n) {
            "use strict";
            n.d(t, "a", (function() {
                return r
            })), n.d(t, "b", (function() {
                return h
            })), n.d(t, "c", (function() {
                return u
            })), n.d(t, "d", (function() {
                return _
            })), n.d(t, "e", (function() {
                return p
            })), n.d(t, "f", (function() {
                return m
            }));
            var i = n("12df"),
                a = n("2354"),
                s = n("7884"),
                r = "static/GLTFExporter-86edae059df3a219.js";
            const o = Object(i["jb"])(30);
            class h extends a["d"] {
                constructor(e, t, n, i) {
                    super(), this._offset = new THREE.Vector3(0, 0, 0), this._mode = void 0 === i ? 1 : i, this._scene = e, this._camera = t, this._raycaster = new THREE.Raycaster, this._raycaster.layers.enableAll(), this._inputManager = n, this._addInputListeners(n), this._planeBottom = new THREE.Plane(new THREE.Vector3(0, 1, 0)), this._planeFront = new THREE.Plane(new THREE.Vector3(0, 0, 1)), this._planeSide = new THREE.Plane(new THREE.Vector3(1, 0, 0))
                }
                _addInputListeners(e) {
                    e.addEventListener(3, e => {
                        this._findCandidate(e.positionRelative)
                    }, this), e.addEventListener(5, e => {
                        this._findSelection(e.positionRelative)
                    }, this), e.addEventListener(6, e => {
                        this._findHover(e.positionRelative, e.type)
                    }, this), e.addEventListener(0, e => {
                        this._onDragStart(e.positionRelative)
                    }, this), e.addEventListener(1, e => {
                        this._onDrag(e.positionRelative)
                    }, this), e.addEventListener(2, e => {
                        this._onDragEnd(e.positionRelative)
                    }, this), e.addEventListener(9, e => {
                        this._onRotate(e.positionRelative, e.rotation)
                    }, this), e.addEventListener(10, () => {
                        this._currentRotate = null
                    }, this)
                }
                _findCandidate(e) {
                    this._intersection(e) && this._inputManager.onElementHit()
                }
                _findSelection(e) {
                    let t = this._intersection(e);
                    t ? t && t.object.dispatchEvent({
                        type: "select"
                    }) : this.dispatchEvent(3)
                }
                _findHover(e, t) {
                    const n = this._intersection(e);
                    !n && this._currentHover ? (this._currentHover.dispatchEvent({
                        type: "hover_off",
                        attachment: {
                            type: t
                        }
                    }), this._currentHover = null) : n && (this._currentHover && this._currentHover.id !== n.object.id && (this._currentHover.dispatchEvent({
                        type: "hover_off",
                        attachment: {
                            type: t
                        }
                    }), this._currentHover = null), this._currentHover ? this._currentHover.dispatchEvent({
                        type: "hover_move",
                        attachment: {
                            intersection: n,
                            type: t
                        }
                    }) : (this._currentHover = n.object, this._currentHover.dispatchEvent({
                        type: "hover_on",
                        attachment: {
                            intersection: n,
                            type: t
                        }
                    })))
                }
                _intersection(e) {
                    const t = this._intersect(e);
                    if (t.length <= 0) return null;
                    let n = t[0];
                    return t.length > 1 && this._currentHover && this._currentDrag && this._currentDrag.id !== this._currentHover.id && t.forEach(e => {
                        e.object.id === this._currentHover.id && e.object.userData.priority === this._currentHover.userData.priority && n.object.userData.priority <= e.object.userData.priority && (n = e)
                    }), n
                }
                _intersect(e) {
                    this._raycaster.setFromCamera(e, this._camera);
                    const t = [];
                    return this._raycaster.intersectObjects(this._scene.children, !0).forEach(e => {
                        e.object.userData.hasListener && t.push(e)
                    }), t.length >= 0 ? t.sort((e, t) => e.object.userData.priority !== t.object.userData.priority ? t.object.userData.priority - e.object.userData.priority : e.distance - t.distance) : []
                }
                _onDragStart(e) {
                    let t = this._intersection(e);
                    if (!t && !this._currentDrag) return;
                    if (t && t.object.userData.roomleId === this._rootComponentId) return;
                    !this._currentDrag && t && (this._currentDrag = t.object, this._currentDrag.dispatchEvent({
                        type: "drag_start"
                    }));
                    let n = this._currentDrag.parent;
                    n && n.computeBoundingBox && (n.computeBoundingBox(), this._calculateOffset(n)), this._positionPlanes(n)
                }
                _onDrag(e) {
                    if (!this._currentDrag) return;
                    this._raycaster.setFromCamera(e, this._camera);
                    let t, n = new THREE.Vector3(0, 0, -5);
                    this._raycaster.ray.intersectPlane(this._planeBottom, n);
                    let i = this._getDistanceToCamera(n),
                        a = this._camera.userData.yaw;
                    if (0 === this._mode) this._currentDragOffset || (this._currentDragOffset = n.clone().sub(this._currentDrag.parent.position.clone())), t = n.clone().sub(this._currentDragOffset), t.y = this._currentDrag.parent.position.y;
                    else {
                        let e = new THREE.Vector3(0, 0, 0),
                            s = new THREE.Vector3(0, 0, 0);
                        this._raycaster.ray.intersectPlane(this._planeFront, e), this._raycaster.ray.intersectPlane(this._planeSide, s);
                        let r = this._getDistanceToCamera(s),
                            h = this._getDistanceToCamera(e);
                        a >= -o && a <= o ? t = i < h ? n.clone() : e.clone() : i < h && i < r ? t = n.clone() : h < i && h < r ? t = e.clone() : r < i && r < h && (t = s.clone()), t.sub(this._offset)
                    }
                    this._currentDrag.dispatchEvent({
                        type: "drag",
                        attachment: {
                            position: t
                        }
                    })
                }
                _getDistanceToCamera(e) {
                    let t = e.clone().sub(this._camera.position).length();
                    return Object(i["t"])(e) && (t = Number.POSITIVE_INFINITY), t
                }
                _onDragEnd(e) {
                    this._currentDrag && (this._currentDrag.dispatchEvent({
                        type: "drag_end",
                        attachment: {
                            position: e
                        }
                    }), this._currentDrag = null, this._currentDragOffset = null)
                }
                _onRotate(e, t) {
                    if (!this._currentRotate) {
                        let t = this._intersection(e);
                        if (!t) return;
                        this._currentRotate = t.object
                    }
                    this._currentRotate.dispatchEvent({
                        type: "rotate",
                        attachment: {
                            rotation: t
                        }
                    })
                }
                _positionPlanes(e) {
                    0 === this._mode ? (this._planeBottom.constant = 0, this._camera.userData && this._camera.userData.pitch && this._camera.userData.pitch < 0 && (this._planeBottom.constant = -3)) : e && e.boundingBox && this._rootComponentPosition && (this._planeBottom.constant = -e.boundingBox.getCenter(new THREE.Vector3).y - this._rootComponentPosition.y, this._planeSide.constant = 2 * -e.boundingBox.getSize(new THREE.Vector3).x + e.boundingBox.getCenter(new THREE.Vector3).x, this._camera.userData.yaw > 0 && (this._planeSide.constant *= -1), this._bounds && (this._planeFront.constant = this._bounds.z / 2 + e.boundingBox.getCenter(new THREE.Vector3).z))
                }
                _calculateOffset(e) {
                    e && e.boundingBox && (this._offset.copy(e.boundingBox.getCenter(new THREE.Vector3)), this._offset.applyQuaternion(e.getWorldQuaternion(new THREE.Quaternion)))
                }
                update(e, t, n) {
                    if (e && (this._bounds = e), t && (this._rootComponentPosition = t), n) {
                        this._backgroundScene = n;
                        let e = this._backgroundScene.children[0];
                        e instanceof THREE.Mesh && e.geometry.computeBoundingBox()
                    }
                }
                clear() {
                    this._currentDrag && Object(i["u"])(this._currentDrag), this._currentHover && Object(i["u"])(this._currentHover)
                }
                enableDragIn(e) {
                    this._currentDrag = e
                }
                setRootComponentId(e) {
                    this._rootComponentId = e
                }
                setCamera(e) {
                    this._camera = e
                }
                setScene(e) {
                    this._scene = e
                }
            }
            class l extends a["h"] {
                constructor(e, t) {
                    super(e, t), this._params = {
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
                    let e = Object(i["V"])();
                    if (e && this._ambientLight) {
                        let t = e.addFolder("Ambient Light");
                        t.add(this._ambientLight, "visible"), t.add(this._ambientLight, "intensity").min(0).max(5).step(.1), t.addColor(this._params.ambientLight, "color").onChange(e => this._ambientLight.color = new THREE.Color(e))
                    }
                }
            }
            let c = null;
            const d = () => (c || (c = new THREE.WebGLRenderer({
                    antialias: !0,
                    alpha: !0
                }), c.outputEncoding = THREE.sRGBEncoding, c.gammaFactor = 2.2), c),
                _ = (e, t = 0) => {
                    const n = e.getSize(new THREE.Vector3);
                    return n.addScalar(t), {
                        center: e.getCenter(new THREE.Vector3),
                        bounds: n,
                        diagonal: Math.sqrt(Math.pow(n.x, 2) + Math.pow(n.y, 2) + Math.pow(n.z, 2))
                    }
                },
                p = (e, t, n, i = {}) => new Promise(a => {
                    const {
                        size: r = 1024
                    } = i, o = d();
                    o.setSize(r, r);
                    const h = e.fog ? e.fog.clone() : null,
                        l = e.background ? e.background.clone() : null;
                    e.background = null, e.fog = null;
                    let c = new s["a"](e);
                    t.layers.disable(2), t.layers.disable(5), g(t, n, -20, -30), o.render(e, t);
                    const _ = o.domElement.toDataURL();
                    t.layers.enable(2), e.background = l, e.fog = h, c.removeFromScene(), a({
                        image: _,
                        width: r,
                        height: r,
                        blob: null
                    })
                }),
                m = (e, t, n, i, a, s) => new Promise(i => {
                    s || (s = 1024);
                    const a = d();
                    a.setSize(s, s);
                    const r = e.fog ? e.fog.clone() : null,
                        o = e.background ? e.background.clone() : null;
                    e.background = null, e.fog = null, t.layers.disable(2), t.layers.disable(5), n ? g(t, n, -20, -30) : (t.aspect = 1, t.updateProjectionMatrix()), a.render(e, t);
                    const h = a.domElement.toDataURL();
                    t.layers.enable(2), e.background = o, e.fog = r, i({
                        image: h,
                        width: s,
                        height: s,
                        blob: null
                    })
                }),
                g = (e, t, n, a) => {
                    e.far = 1e3, e.fov = 15, e.aspect = 1, e.position.copy(t.center), e.rotation.set(0, 0, 0), e.rotateY(Object(i["jb"])(a)), e.rotateX(Object(i["jb"])(n)), e.translateZ(3.8 * t.diagonal), e.updateProjectionMatrix()
                },
                u = (e, t, n, a = {}) => {
                    const {
                        showDimensions: r = !1
                    } = a;
                    return new Promise(a => {
                        const o = d();
                        o.autoClear = !1;
                        let h = new THREE.OrthographicCamera(-n.bounds.x / 2, n.bounds.x / 2, n.bounds.z / 2, -n.bounds.z / 2, .5);
                        h.position.copy(n.center), h.rotateX(Object(i["jb"])(-90)), h.translateZ(n.bounds.y + 1), h.far = h.position.y + .5, h.layers.mask = 65535;
                        let c = 200 * n.bounds.x,
                            _ = 200 * n.bounds.z;
                        if (c > 4096 || _ > 4096) {
                            let e = 0;
                            c > 4096 ? e = c / 4096 : _ > 4096 && (e = _ / 4096), c /= e, _ /= e
                        }
                        o.setSize(c, _);
                        let p = e.fog ? e.fog.clone() : null,
                            m = e.background ? e.background.clone() : null;
                        e.background = null, e.fog = null;
                        let g = r ? new l(e) : new s["a"](e);
                        h.layers.disable(2), h.layers.disable(5), r ? h.layers.enable(6) : h.layers.disable(6), o.render(e, h), t && (o.clearDepth(), o.render(t, h));
                        let u = o.domElement.toDataURL();
                        h.layers.enable(2), h.layers.enable(5), e.background = m, e.fog = p, g.removeFromScene(), a({
                            image: u,
                            width: c,
                            height: _,
                            blob: null
                        })
                    })
                }
        },
        d1a4: function(e, t, n) {
            "use strict";
            n.d(t, "a", (function() {
                return s
            })), n.d(t, "b", (function() {
                return h
            })), n.d(t, "c", (function() {
                return o
            }));
            var i = n("12df"),
                a = n("2354");
            class s extends a["q"] {
                constructor(e, t, n) {
                    super(e, t, n), this._scale = 1, this._state = 0, this._size = 20, this._center = new THREE.Vector3, this._raycaster = new THREE.Raycaster, this._lastPosition = new THREE.Vector2, this._zoomPosition = new THREE.Vector3, this._lastZoom = 0, this._zoomSpeed = Math.pow(.95, 2), this._cameraZoom = 1, this._initCamera(n || new THREE.Vector3(0, 10, 0));
                    let i = new THREE.PlaneGeometry(1e3, 1e3);
                    i.rotateX(-Math.PI / 2), this._plane = new THREE.Mesh(i, new THREE.MeshStandardMaterial)
                }
                _getCamera() {
                    return this._camera || this._initCamera(new THREE.Vector3(0, 10, 0)), this._camera
                }
                _initCamera(e) {
                    let {
                        x: t,
                        y: n
                    } = this._domHelper.getClientDimensions(), i = t / n * this._size, a = this._size;
                    this._camera = new THREE.OrthographicCamera(i / -2, i / 2, a / 2, a / -2, 1, 1e3), this._camera.position.copy(e), this._cameraPosition = e, this._camera.lookAt(new THREE.Vector3(0, 0, 0))
                }
                updateCamera() {
                    let {
                        x: e,
                        y: t
                    } = this._domHelper.getClientDimensions(), n = e / t * this._size, i = this._size;
                    this._camera.left = n / -2, this._camera.right = n / 2, this._camera.top = i / 2, this._camera.bottom = i / -2, this._camera.updateProjectionMatrix()
                }
                _initInputListener() {
                    this._inputListeners.push({
                        key: 3,
                        fun: e => {
                            this._locked || (this._state = 1, this._lastPosition.set(e.position.x, e.position.y), this.dispatchEvent(0))
                        }
                    }), this._inputListeners.push({
                        key: 6,
                        fun: e => {
                            1 !== this._state || this._locked || (this._move(new THREE.Vector2(e.position.x, e.position.y), e.type), this.dispatchEvent(1))
                        }
                    }), this._inputListeners.push({
                        key: 4,
                        fun: e => {
                            1 === this._state && this.dispatchEvent(2), this._state = 0
                        }
                    }), this._inputListeners.push({
                        key: 7,
                        fun: e => {
                            e.event && (e.event.stopPropagation(), e.event.preventDefault()), this._scale /= this._zoomSpeed, this._zoomTo(e.position, 1), this._update()
                        }
                    }), this._inputListeners.push({
                        key: 8,
                        fun: e => {
                            e.event && (e.event.stopPropagation(), e.event.preventDefault()), this._scale *= this._zoomSpeed, this._zoomTo(e.position, -1), this._update()
                        }
                    })
                }
                _zoomTo(e, t) {
                    if (Date.now() - this._lastZoom > 200) {
                        if (t > 0 || this._cameraZoom >= 1) {
                            const t = this.getInputPosition(e);
                            this._raycaster.setFromCamera(t, this._camera);
                            const n = this._raycaster.intersectObject(this._plane);
                            if (n.length <= 0) return;
                            const i = n.pop().point;
                            this._zoomPosition.copy(i)
                        } else this._zoomPosition.copy(this._center);
                        this._cameraPosition.x = this._zoomPosition.x, this._cameraPosition.z = this._zoomPosition.z
                    }
                    this._lastZoom = Date.now()
                }
                _move(e, t) {
                    let n = new THREE.Vector2;
                    n.subVectors(this._lastPosition, e), n.divideScalar(100), this._cameraPosition.x += n.x * (2 === t ? 1.1 : 1), this._cameraPosition.z += n.y * (2 === t ? 1.1 : 1), this._lastPosition.copy(e)
                }
                updateToBounds(e, t) {
                    let {
                        x: n,
                        y: i
                    } = this._domHelper.getClientDimensions(), a = n / i;
                    this._size = Math.max(e.x, e.z);
                    let s = this._size,
                        r = this._size;
                    a > 1 ? s = this._size * a : r = this._size * (i / n), this._center.copy(t), this._camera.left = s / -2, this._camera.right = s / 2, this._camera.top = r / 2, this._camera.bottom = r / -2, this._camera.zoom = 1, this._camera.position.set(this._center.x, 10, this._center.z), this._cameraPosition.copy(this._camera.position)
                }
                _update(e) {
                    this._scale = Math.min(this._scale, 5), this._scale = Math.max(this._scale, .8), this._cameraZoom = this._scale, this._camera.updateProjectionMatrix()
                }
                animateCamera(e) {
                    return !(!super.animateCamera(e) && Math.abs(this._cameraZoom - this._camera.zoom) <= .01 || (this._camera.zoom = THREE.MathUtils.lerp(this._camera.zoom, this._cameraZoom, 10 * e), 0))
                }
            }
            const r = Math.PI / 4;
            class o extends a["q"] {
                constructor(e, t, n, a) {
                    super(e, t, n), this._state = 0, this._rotationSpeed = 1, this._keyMap = new Map, this.minPolarAngle = Object(i["jb"])(-60), this.maxPolarAngle = Object(i["jb"])(60), this._camera = a || new THREE.PerspectiveCamera, this._camera.fov = 70, this._camera.aspect = this._width / this._height, this._camera.near = .1, this._camera.far = 100, this._camera.updateProjectionMatrix(), this._camera.layers.set(3), this._camera.layers.enable(1), this._camera.layers.enable(2), this._camera.layers.enable(5), this._camera.layers.enable(4), n ? this._camera.position.set(n.x, 1.5, n.z) : this._camera.position.set(0, 1.5, 0), this._cameraPosition = new THREE.Vector3, this._cameraPosition.copy(this._camera.position), this._cameraRotation = new THREE.Quaternion, this._pitch = 0, this._yaw = 0;
                    let s = new THREE.Euler(-this._pitch, this._yaw, 0, "ZYX");
                    this._cameraRotation.setFromEuler(s), window.addEventListener("gamepadconnected", this._gamepadConnected.bind(this)), window.addEventListener("gamepaddisconnected", this._gamepadDisconnected.bind(this))
                }
                _gamepadConnected(e) {
                    this.startButtonPressListener()
                }
                _gamepadDisconnected(e) {
                    window.cancelAnimationFrame(this._listenerLoopAnimationFrame)
                }
                startButtonPressListener() {
                    this._listenerLoopAnimationFrame = window.requestAnimationFrame(() => {
                        this.buttonPressListener()
                    })
                }
                buttonPressListener() {
                    let e = navigator.getGamepads()[0];
                    this._checkRightStick(e), this._checkLeftStick(e), this._checkButtons(e), this._processKeyMap(this._keyMap, .001), this.startButtonPressListener()
                }
                _checkRightStick(e) {
                    let t = e.axes[2],
                        n = e.axes[3];
                    Math.abs(t) > .2 && (this._rotateHorizontal(.01 * r * t), this._update(), this.dispatchEvent(1)), Math.abs(n) > .2 && (this._rotateVertical(.01 * r * n), this._update(), this.dispatchEvent(1))
                }
                _checkLeftStick(e) {
                    let t = e.axes[0],
                        n = e.axes[1];
                    Math.abs(n) > .2 ? n < 0 ? this._keyMap.set(87, !0) : this._keyMap.set(83, !0) : e.buttons && e.buttons[12] && e.buttons[12].pressed ? this._keyMap.set(87, !0) : e.buttons && e.buttons[13] && e.buttons[13].pressed ? this._keyMap.set(83, !0) : (this._keyMap.set(87, !1), this._keyMap.set(83, !1)), Math.abs(t) > .2 ? t < 0 ? this._keyMap.set(65, !0) : this._keyMap.set(68, !0) : (this._keyMap.set(65, !1), this._keyMap.set(68, !1))
                }
                _checkButtons(e) {
                    e.buttons && e.buttons[6] && e.buttons[6].pressed ? this._keyMap.set(16, !0) : this._keyMap.set(16, !1), e.buttons && e.buttons[14] && e.buttons[14].pressed ? (this._keyMap.set(37, !0), this.dispatchEvent(1)) : this._keyMap.set(37, !1), e.buttons && e.buttons[15] && e.buttons[15].pressed ? (this._keyMap.set(39, !0), this.dispatchEvent(1)) : this._keyMap.set(39, !1)
                }
                animateCamera(e) {
                    let t = this._cameraPosition,
                        n = this._cameraRotation,
                        a = this.getCamera(),
                        s = Object(i["hb"])(t, a.position),
                        r = Object(i["I"])(n, a.quaternion);
                    if (!t || s && r) return !1;
                    let o = this.getCamera().position.clone(),
                        h = Math.min(10 * e, 1);
                    o.lerp(t, h), this.getCamera().position.copy(o);
                    let l = this.getCamera().quaternion.clone(),
                        c = Math.min(5 * e, 1);
                    l.slerp(n, c), this.getCamera().setRotationFromQuaternion(l);
                    let d = !1;
                    return this._keyMap.forEach(e => {
                        e && (d = !0)
                    }), d && this._processKeyMap(this._keyMap, e), !0
                }
                _getCamera() {
                    return this._camera
                }
                _initInputListener() {
                    window.addEventListener("keyup", this._onKeyChanged.bind(this), !1), window.addEventListener("keydown", this._onKeyChanged.bind(this), !1), this._inputListeners.push({
                        key: 3,
                        fun: e => {
                            this._down(e)
                        }
                    }), this._inputListeners.push({
                        key: 6,
                        fun: e => {
                            this._move(e)
                        }
                    }), this._inputListeners.push({
                        key: 4,
                        fun: e => {
                            this._up(e)
                        }
                    })
                }
                _down(e) {
                    this._downPosition = e.position, this._position = e.position, this._state = 1, 2 === e.type && window.setTimeout(this._onLongDown.bind(this), 350), 2 === e.type ? this._rotationSpeed = .6 : this._rotationSpeed = 1
                }
                _move(e) {
                    this._position = e.position, 1 !== this._state || this._locked || this._orbit(new THREE.Vector2(e.position.x, e.position.y)), 2 !== this._state || this._locked || (this._orbit(new THREE.Vector2(e.position.x, e.position.y)), this._moveForward())
                }
                _up(e) {
                    1 === this._state && this.dispatchEvent(2), 2 === this._state && this._keyMap.set(87, !1), this._state = 0, this._orbitPosition = null
                }
                _onLongDown() {
                    Object(i["J"])(this._downPosition, this._position) < a["w"] && 1 === this._state && (this._state = 2, this._orbit(new THREE.Vector2(this._position.x, this._position.y)), this._moveForward())
                }
                _update(e) {
                    let t = new THREE.Euler(-this._pitch, this._yaw, 0, "ZYX");
                    this._cameraRotation.setFromEuler(t)
                }
                updateCamera() {
                    let {
                        x: e,
                        y: t
                    } = this._domHelper.getClientDimensions();
                    this._camera.aspect = e / t, this._camera.updateProjectionMatrix()
                }
                _onKeyChanged(e) {
                    this._keyMap.set(e.keyCode, "keydown" === e.type), this.dispatchEvent(6), this._processKeyMap(this._keyMap, .001) && e.preventDefault()
                }
                _processKeyMap(e, t) {
                    t = Math.min(t, .1);
                    let n = new THREE.Vector3(0, 0, 0),
                        i = !1;
                    return this._processUpDown(e, n, t), e.get(65) && (n.x = -1 * t), e.get(68) && (n.x = 1 * t), e.get(37) && (this._rotateHorizontal(-r * this._rotationSpeed * t), i = !0), e.get(39) && (this._rotateHorizontal(r * this._rotationSpeed * t), i = !0), e.get(16) && (n.x *= 3, n.z *= 3), !(0 === n.x && 0 === n.y && 0 === n.z && !i || (n.applyQuaternion(this.getCamera().quaternion), this._cameraPosition.add(new THREE.Vector3(n.x, 0, n.z)), this._update(), 0))
                }
                _processUpDown(e, t, n) {
                    (e.get(87) || e.get(38)) && (t.z = -1 * n), (e.get(83) || e.get(40)) && (t.z = 1 * n)
                }
                _orbit(e) {
                    this._orbitPosition || (this._orbitPosition = new THREE.Vector2(e.x, e.y), this.dispatchEvent(0));
                    let t = e.clone().sub(this._orbitPosition),
                        n = this._domHelper.element instanceof Document ? this._domHelper.element.body : this._domHelper.element;
                    t.multiplyScalar(-1), this._rotateHorizontal(2 * Math.PI * t.x / n.clientWidth * 1), this._rotateVertical(2 * Math.PI * t.y / n.clientHeight * 1), Object(i["ib"])(this._orbitPosition, e) || this.dispatchEvent(1), this._orbitPosition.copy(e), this._update()
                }
                _moveForward() {
                    this._keyMap.set(87, !0), this._processKeyMap(this._keyMap, .001)
                }
                _rotateVertical(e) {
                    let t = this._pitch + e;
                    t > this.maxPolarAngle || t < this.minPolarAngle || (this._pitch = t, this._pitch < -Math.PI ? this._pitch += 2 * Math.PI : this._pitch > Math.PI && (this._pitch -= 2 * Math.PI), this._saveYawAndPitch())
                }
            }
            let h = (() => {
                class e {
                    constructor(e, t, n, i, a) {
                        this._maxAnisotropy = 1, this._clock = new THREE.Clock, this._delta = 0, this._renderListener = null, this._stopRendering = !1, this._forceRender = !1, this._lastChange = Date.now(), this._running = !1, this._onAfterRender = () => {}, this._creator_ = e, this._canvasID = n, this.createCameraControl(i), this._addCameraControlListener(), this._setupScene(t, a), document.addEventListener("visibilitychange", this._tabVisible.bind(this)), this._renderListener = () => {
                            this._requestRender(!0)
                        }, this._getInputManager().addEventListener(7, this._renderListener, this), this._getInputManager().addEventListener(8, this._renderListener, this), this._lifeCycleManager.addEventListener(this)
                    }
                    onBeforeRender() {}
                    _changeCameraControl(e) {
                        this._cameraControl && this._cameraControl.cleanUp(), e instanceof o && (this._getInputManager().removeEventListener(7, this._renderListener), this._getInputManager().removeEventListener(8, this._renderListener)), this._cameraControl instanceof o && (this._getInputManager().addEventListener(7, this._renderListener, this), this._getInputManager().addEventListener(8, this._renderListener, this)), this._cameraControl = e, this.cameraControlChanged()
                    }
                    cameraControlChanged() {}
                    _addCameraControlListener() {
                        this._cameraControl.addEventListener(0, this._requestRender, this), this._cameraControl.addEventListener(1, this._requestRender, this), this._cameraControl.addEventListener(2, this._requestRender, this), this._cameraControl.addEventListener(6, this._requestRender, this)
                    }
                    _requestRender(e) {
                        if (!this._renderer) return;
                        this._pixotron && (this._pixotron.needsUpdate = !0, e && (this._forceRender = !0));
                        const t = () => {
                            this._delta = this._clock.getDelta(), this._animateCamera(), this._cameraControl.getCamera().layers.mask = 65535, this._renderLoopFunction && (this._renderLoopFunction(), this._renderLoopFunction = null), this.onBeforeRender(), this._statsHelper && this._statsHelper.updateRenderInfo(this._renderer.info), this._pixotron ? (this._forceRender && (this._pixotron.autoShadowsClear = !0, this._pixotron.autoSAOClear = !0), this._pixotron.render(this._renderer, this._scene, this._cameraControl.getCamera(), this._renderTarget), this._forceRender = !1, this._pixotron.blit()) : (this._renderer.clear(), this._renderer.render(this._scene, this._cameraControl.getCamera()), this._renderer.clearDepth()), this._onAfterRender(), window.TWEEN && TWEEN.update(), this._lastChange + 3e3 < Date.now() || this._stopRendering ? this._running = !1 : (this._running = !0, requestAnimationFrame(t))
                        };
                        this._lastChange = Date.now(), this._running || this._stopRendering || (this._running = !0, requestAnimationFrame(t))
                    }
                    _animateCamera() {
                        this._cameraControl && (this._cameraControl.animateCamera(this._delta) || !this._pixotron || this._forceRender ? (this._lightSetting instanceof a["c"] && this._cameraControl.getCamera() instanceof THREE.PerspectiveCamera && this._lightSetting.update(this._cameraControl.getCamera(), this._cameraControl.getTargetPosition()), this._pixotron && (this._pixotron.needsUpdate = !0)) : (this._pixotron.autoShadowsClear = !1, this._pixotron.autoSAOClear = !1)), this._environment && this._environment.needsCamera() && this._cameraControl instanceof a["b"] && this._environment.updateCamera(this._cameraControl.getCamera())
                    }
                    _setupScene(e, t) {
                        const {
                            x: n,
                            y: i
                        } = this._domHelper.getClientDimensions();
                        this._scene = new THREE.Scene, (t = t || !1) || (this._scene.background = new THREE.Color(this._initData.colors.DEFAULT_BACKGROUND)), THREE.Math = {
                            DEG2RAD: THREE.MathUtils.DEG2RAD
                        };
                        const a = {
                                format: THREE.RGBAFormat,
                                minFilter: THREE.NearestFilter,
                                magFilter: THREE.NearestFilter
                            },
                            s = THREE.sRGBEncoding,
                            r = Math.floor(n * window.devicePixelRatio),
                            o = Math.floor(i * window.devicePixelRatio);
                        this._renderTarget = new THREE.WebGLRenderTarget(r, o, a), this._renderTarget.texture.encoding = s, this._renderer = new THREE.WebGLRenderer({
                            antialias: !0,
                            alpha: !0
                        }), this._renderer.setPixelRatio(window.devicePixelRatio), this._renderer.setSize(n, i), this._renderer.outputEncoding = THREE.sRGBEncoding, this._renderer.gammaFactor = 2.2, this._renderer.autoClear = !1, this._renderer.shadowMap.enabled = !0, this._renderer.shadowMap.type = THREE.PCFSoftShadowMap, this._maxAnisotropy = this._renderer.capabilities.getMaxAnisotropy(), this._renderer.domElement.classList.add(this._canvasID), this._domHelper.element.appendChild(this._renderer.domElement), this._getInputManager().addEvents(this._renderer.domElement), this._environmentLoader.setRendererAndScene(this._renderer, this._scene), this._environmentLoader.registerEnvironmentChangedCallback(() => this._requestRender(!0)), this._requestRender(), window.addEventListener("resize", this, !1), window.addEventListener("keydown", this, !1), window.addEventListener("keyup", this, !1), this.sceneChanged()
                    }
                    _tabVisible(e) {
                        this.updateCamera(), this._requestRender(!0)
                    }
                    setupScene(e, t) {
                        this._setupScene(e, t)
                    }
                    updateCamera() {
                        const {
                            x: e,
                            y: t
                        } = this._domHelper.getClientDimensions();
                        this._renderer.setSize(e, t);
                        const n = this._renderer.getPixelRatio();
                        if (this._renderTarget) {
                            const i = Math.floor(e * n),
                                a = Math.floor(t * n);
                            this._renderTarget.setSize(i, a)
                        }
                        if (this._pixotron) {
                            this._pixotron.autoShadowsClear = !0, this._pixotron.autoSAOClear = !0, this._forceRender = !0;
                            try {
                                this._pixotron.setSize(e, t)
                            } catch (e) {
                                console.warn(e)
                            }
                        }
                        this._cameraControl.updateCamera(), this._requestRender(!0)
                    }
                    _onWindowResize() {
                        this.updateCamera(), this._requestRender(!0)
                    }
                    _isPartOfScene(e) {
                        return "Object3D" === e.type || "Mesh" === e.type || "GLB" === e.type || "GLTF" === e.type || "Group" === e.type
                    }
                    cleanUp() {
                        this._getInputManager().removeEventListener(7, this._renderListener), this._getInputManager().removeEventListener(8, this._renderListener), this._cameraControl && this._cameraControl.cleanUp()
                    }
                    clearScene() {
                        let e = [];
                        this._scene.children.forEach(t => {
                            this._isPartOfScene(t) && e.push(t)
                        }), e.forEach(e => {
                            Object(i["T"])(e), this._scene.remove(e)
                        }), this._renderer.renderLists.dispose()
                    }
                    enableHD() {
                        this._pixotron = new window.PIXOTRON.Pixotron(this.getPixotronParams()), this._pixotronUtil = new a["o"](this._pixotron), this._environment instanceof a["a"] && (this._environment.setPixotron(this._pixotron, this._renderer, this._cameraControl.getCamera(), this.getBakedShadowParams()), this._environment.setLoadedCallback(() => setTimeout(() => this._requestRender(!0), 500))), this._requestRender()
                    }
                    _loadGLTF(e, t, n, i, a, s, r) {
                        return new Promise((o, h) => {
                            this._staticItemLoader.loadGLTF(e, t, n, i, a, s, null, r).then(e => {
                                this._setCamera("GLTF", e), o(e)
                            }, h)
                        })
                    }
                    _loadGLB(e, t, n, i, a, s, r, o) {
                        return new Promise((h, l) => {
                            this._staticItemLoader.loadGLB(e, t, n, i, a, s, r, o).then(e => {
                                this._setCamera("GLB", e), h(e)
                            }, l)
                        })
                    }
                    _setCamera(e, t) {
                        if (!t) return void console.warn("could not set camera for gltf", t);
                        const n = new THREE.Box3;
                        if (n.setFromObject(t), "GLB" === e) this._cameraControl instanceof a["b"] && this._cameraControl.updateToBounds(n, window.innerWidth, window.innerHeight, !1);
                        else if ("GLTF" === e) {
                            if (this._cameraControl instanceof a["b"]) {
                                let {
                                    x: e,
                                    y: t
                                } = this._domHelper.getClientDimensions();
                                this._cameraControl.updateAndReset(n.getSize(new THREE.Vector3), e, t, n.getCenter(new THREE.Vector3), -15, 70, 5, !1)
                            }
                            this._cameraControl instanceof s && this._cameraControl.updateToBounds(n.getSize(new THREE.Vector3), n.getCenter(new THREE.Vector3))
                        }
                        this.updateCamera()
                    }
                    showGUI() {
                        if (this._initData.disableDebugGUI) return;
                        const e = document.createElement("style");
                        e.innerText = ".dg.main{position:absolute;z-index:100;top:0;left:0;}", document.head.appendChild(e), this._scriptLoader.fetch(a["t"], {
                            id: "dat-gui-js"
                        }).then(() => {
                            let e = Object(i["V"])(!1);
                            e && (this._domHelper.element.appendChild(e.domElement), this._guiLoaded())
                        }, e => console.error(e))
                    }
                    _guiLoaded() {
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
                                    this._guiParamChanged()
                                })
                            })
                        })
                    }
                    _guiParamChanged() {
                        this._requestRender()
                    }
                    showStats() {
                        n.e("chunk-2d0b16c2").then(n.bind(null, "207e")).then(e => this._statsHelper = new e.default)
                    }
                    _onKeyDown(e) {}
                    _onKeyUp(e) {}
                    pause() {
                        this._getInputManager().removeEvents(this._renderer.domElement), window.removeEventListener("resize", this, !1), window.removeEventListener("keydown", this, !1), window.removeEventListener("keyup", this, !1)
                    }
                    resume() {
                        this.updateCamera(), this._renderer.domElement.classList.add(this._canvasID), this._domHelper.element.appendChild(this._renderer.domElement), this._getInputManager().addEvents(this._renderer.domElement), window.addEventListener("resize", this, !1), window.addEventListener("keydown", this, !1), window.addEventListener("keyup", this, !1), this._requestRender(!0)
                    }
                    destroy() {
                        this.pause(), this.cleanUp()
                    }
                    handleEvent(e) {
                        switch (e.type) {
                            case "resize":
                                this._onWindowResize();
                                break;
                            case "keydown":
                                this._onKeyDown(e);
                                break;
                            case "keyup":
                                this._onKeyUp(e)
                        }
                    }
                    loadSceneSettings(e) {
                        let t, n;
                        return t = e.environment ? new Promise(t => {
                            (new a["p"]).load(this._scene, this._renderer.domElement, this._environment, e).then(e => {
                                this._setEnvironment(e), t()
                            })
                        }) : Promise.resolve(), e.lights ? (this._lightSetting = new a["c"](this._scene, this._lightSetting), n = this._lightSetting.loadFromObject(e)) : n = Promise.resolve(), new Promise((e, i) => {
                            Promise.all([t, n]).then(() => {
                                this._requestRender(!0), e()
                            }, i)
                        })
                    }
                    _setEnvironment(e) {
                        this._environment = e, this._pixotron && this._environment instanceof a["a"] && (this._environment.setPixotron(this._pixotron, this._renderer, this._cameraControl.getCamera(), this.getBakedShadowParams()), this._environment.setLoadedCallback(() => setTimeout(() => this._requestRender(!0), 500)))
                    }
                    loadQualitySetting(e) {
                        this._pixotron && (new i["K"]).set(this._pixotron, e)
                    }
                    async loadDynamicLightSetting(e) {
                        this._lightSetting = new a["c"](this._scene, this._lightSetting);
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
                    getScene() {
                        return this._scene
                    }
                    updateScene() {
                        this._updateBounds(this.getBounds()), this._requestRender(!0)
                    }
                    _updateBounds(e) {
                        if (e) {
                            if (this.updateEnvironment(e), this._lightSetting && this._lightSetting.needsBounds() && this._lightSetting.updateBounds(e), this._pixotronUtil) {
                                const t = new THREE.Sphere;
                                e.getBoundingSphere(t), this._pixotronUtil.updateBounds(t)
                            }
                            this._requestRender(!0)
                        }
                    }
                    setCameraOffset(e) {
                        const t = this._cameraControl.getCamera();
                        t.offset ? (t.offset = e, this._requestRender(!0)) : console.warn("Cannot set offset, current camera does not support it")
                    }
                    getCameraOffset() {
                        const e = this._cameraControl.getCamera();
                        return e.offset ? JSON.parse(JSON.stringify(e.offset)) : {
                            left: 0,
                            top: 0,
                            right: 1,
                            bottom: 1
                        }
                    }
                    getPerspectiveOffsetCamera() {
                        const e = this._domHelper.getClientDimensions(),
                            t = e.x,
                            n = e.y;
                        return Object(i["s"])().createCamera(30, t / n, .1, 20)
                    }
                    updateEnvironment(e, t = !1) {
                        e && this._environment && this._environment.needsBounds() && this._environment.updateBounds(e.getSize(new THREE.Vector3), t)
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_domHelper", void 0), Object(i["B"])([i["Y"]], e.prototype, "_scriptLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_lifeCycleManager", void 0), Object(i["B"])([i["Y"]], e.prototype, "_staticItemLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_environmentLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_initData", void 0), e
            })()
        },
        d7ce: function(e, t, n) {
            "use strict";
            n.r(t), n.d(t, "Planner", (function() {
                return R
            }));
            n("4719");
            var i = n("12df"),
                a = n("4a09"),
                s = n("95ca"),
                r = n("2354"),
                o = n("ea7d"),
                h = n("7884"),
                l = n("d1a4");
            class c extends r["h"] {
                constructor(e, t) {
                    super(e, t), this._center = new THREE.Vector3(0, 0, 0), this._params = {
                        ambientLight: {
                            color: "#ffffff"
                        },
                        hemiLight: {
                            color: "#ffffff"
                        },
                        mainDirLight: {
                            direction: {
                                x: .03,
                                y: 1,
                                z: .03
                            },
                            color: "#ffffff"
                        }
                    }, this._ambientLight = new THREE.AmbientLight(new THREE.Color(this._params.ambientLight.color), .3), this._ambientLight.layers.set(1), this._mainDirLight = new THREE.DirectionalLight(new THREE.Color(this._params.mainDirLight.color), .5), this._mainDirLight.castShadow = !0, this._mainDirLight.shadow.camera.near = .5, this._mainDirLight.shadow.camera.far = 100, this._mainDirLight.shadow.mapSize = new THREE.Vector2(1024, 1024), this._mainDirLight.visible = !0, this.addToScene()
                }
                updateSunPosition(e, t) {}
                addToScene() {
                    this._scene.add(this._mainDirLight), this._scene.add(this._ambientLight), this._scene.add(this._mainDirLight.target)
                }
                removeFromScene() {
                    this._scene.remove(this._mainDirLight), this._scene.remove(this._ambientLight), this._scene.remove(this._mainDirLight.target)
                }
                reload() {
                    this.removeFromScene(), this.addToScene()
                }
                needsBounds() {
                    return !0
                }
                updateBounds(e) {
                    this._center.copy(e.getCenter(new THREE.Vector3));
                    const t = new THREE.Sphere;
                    e.getBoundingSphere(t);
                    const n = t.radius,
                        i = new THREE.Vector3(this._params.mainDirLight.direction.x, this._params.mainDirLight.direction.y, this._params.mainDirLight.direction.z);
                    i.normalize(), i.multiplyScalar(n), this._mainDirLight.position.copy(this._center), this._mainDirLight.position.add(i), this._mainDirLight.target.position.copy(this._center), this._mainDirLight.target.updateMatrixWorld(!0), this._mainDirLight.shadow.camera.top = n, this._mainDirLight.shadow.camera.bottom = -n, this._mainDirLight.shadow.camera.left = -n, this._mainDirLight.shadow.camera.right = n, this._mainDirLight.shadow.camera.near = .01, this._mainDirLight.shadow.camera.far = 2 * n, this._mainDirLight.shadow.camera.updateProjectionMatrix()
                }
                showGUI() {
                    let e = Object(i["V"])();
                    if (e) {
                        if (this._ambientLight) {
                            let t = e.addFolder("Ambient Light");
                            t.add(this._ambientLight, "visible"), t.add(this._ambientLight, "intensity").min(0).max(5).step(.1), t.addColor(this._params.ambientLight, "color").onChange(e => this._ambientLight.color = new THREE.Color(e))
                        }
                        if (this._hemiLight) {
                            let t = e.addFolder("Hemi Light");
                            t.add(this._hemiLight, "visible"), t.add(this._hemiLight, "intensity").min(0).max(5).step(.1), t.addColor(this._params.hemiLight, "color").onChange(e => this._hemiLight.color = new THREE.Color(e))
                        }
                        if (this._mainDirLight) {
                            let t = e.addFolder("Main Directional Light");
                            t.add(this._mainDirLight, "visible"), t.add(this._mainDirLight, "intensity").min(0).max(10).step(.1), t.add(this._mainDirLight, "castShadow"), t.addColor(this._params.mainDirLight, "color").onChange(e => this._mainDirLight.color = new THREE.Color(e)), t.add(this._mainDirLight.position, "x").min(-10).max(10).step(.1).onChange(() => this._mainDirLight.lookAt(this._center)), t.add(this._mainDirLight.position, "y").min(-10).max(50).step(.1).onChange(() => this._mainDirLight.lookAt(this._center)), t.add(this._mainDirLight.position, "z").min(-10).max(10).step(.1).onChange(() => this._mainDirLight.lookAt(this._center))
                        }
                    }
                }
            }
            class d {
                constructor(e) {
                    const {
                        planElementViewModel: t,
                        resetCamera: n
                    } = e;
                    this.planElementViewModel = t, this.resetCamera = void 0 === n || n
                }
            }
            let _ = (() => {
                class e extends r["d"] {
                    constructor(e, t, n) {
                        super(), this._debug = !1, this._raycastHelper = new s["b"](e, t, n, 0), this._raycastHelper.addEventListener(3, () => {
                            this._plannerSelectionHandler.cancelSelection()
                        }, this), this._plannerSelectionHandler.addEventListener(0, ({
                            planElementViewModel: e
                        }) => {
                            this.dispatchEvent(0, new d({
                                planElementViewModel: e
                            }))
                        }, this), this._plannerSelectionHandler.addEventListener(1, ({
                            planElementViewModel: e
                        }) => {
                            this.dispatchEvent(1, new d({
                                planElementViewModel: e
                            }))
                        }, this)
                    }
                    getSelectionMode() {
                        return this._plannerSelectionHandler.getSelectionMode()
                    }
                    addPlanObjectHandlers(e) {
                        this._addPlanObjectHandlers(e, e.getBoundingBox(), {
                            hasListener: !0,
                            priority: 1,
                            roomleId: e.getId()
                        })
                    }
                    addWallHandlers(e) {
                        this._addPlanElementHandlers(e, e.getBoundingBox(), {
                            hasListener: !0,
                            priority: 1,
                            roomleId: e.getId()
                        })
                    }
                    _addPlanObjectHandlers(e, t, n) {
                        t.userData.hasListener || (t.userData = n, t.addEventListener("select", () => this._clickElement(e)), t.addEventListener("drag_start", () => this._dragStart(e)), t.addEventListener("drag", t => this._drag(e, t.attachment.position)), t.addEventListener("drag_end", t => this._dragEnd(e, t.attachment.position)), t.addEventListener("hover_on", () => this._hoverOn(e)), t.addEventListener("hover_off", () => this._hoverOff(e)), t.addEventListener("rotate", t => this._rotate(e, t.attachment.rotation)))
                    }
                    _addPlanElementHandlers(e, t, n) {
                        t.userData.hasListener || (t.userData = n, t.addEventListener("select", () => this._clickElement(e)), t.addEventListener("drag_start", () => this._dragStart(e)), t.addEventListener("drag", t => this._drag(e, t.attachment.position)), t.addEventListener("drag_end", t => this._dragEnd(e, t.attachment.position)), t.addEventListener("hover_on", () => this._hoverOn(e)), t.addEventListener("hover_off", () => this._hoverOff(e)))
                    }
                    _clickElement(e) {
                        this._debug && e.getId(), this._plannerSelectionHandler.check(e), this._setCursor()
                    }
                    _hoverOn(e) {
                        this._hoveredObject = e, this._setCursor()
                    }
                    _hoverOff(e) {
                        this._hoveredObject = null, this._setCursor()
                    }
                    _setCursor() {
                        this._draggedObject ? Object(a["p"])("grabbing") : this._hoveredObject && this._plannerSelectionHandler.isSelected(this._hoveredObject.getId()) ? Object(a["p"])("move") : this._hoveredObject ? Object(a["p"])("pointer") : this._draggedObject || this._hoveredObject || Object(a["p"])("default")
                    }
                    setCamera(e) {
                        this._raycastHelper.setCamera(e)
                    }
                    setScene(e) {
                        this._raycastHelper.setScene(e)
                    }
                    getSelectedIds() {
                        return this._plannerSelectionHandler.getSelectedIds()
                    }
                    setSelectionMode(e) {
                        this._plannerSelectionHandler.setSelectionMode(e)
                    }
                    setPlanViewModel(e) {
                        this._planViewModel = e
                    }
                    cancelSelection() {
                        this._plannerSelectionHandler.cancelSelection()
                    }
                    _dragStart(e) {
                        this._plannerSelectionHandler.isSelected(e.getId()) && (this._draggedObject = e, this.dispatchEvent(4, new d({
                            planElementViewModel: e
                        })), this._setCursor())
                    }
                    _drag(e, t) {
                        if (!this._draggedObject) return;
                        const n = this._plannerKernelAccess.planInteractionHandler;
                        if (this._plannerSelectionHandler.getSelectedIds().length > 1) {
                            const e = new this._plannerKernelAccess.kernelContainer.PlanObjectPtrList;
                            let a = t.sub(this._draggedObject.getPosition());
                            this._plannerSelectionHandler.getSelectedIds().forEach(t => e.push_back(this._planViewModel.getPlanObjectForId(t).getPlanObject())), n.moveObjectsBy(e, Object(i["v"])(a))
                        } else n.moveElementTo(e.getPlanElement(), Object(i["v"])(t))
                    }
                    _dragEnd(e, t) {
                        this._draggedObject && (this._draggedObject = null, this.dispatchEvent(6, new d({
                            planElementViewModel: e
                        })), this._setCursor())
                    }
                    _rotate(e, t) {
                        if (this._plannerSelectionHandler.isSelected(e.getId())) {
                            const n = this._plannerKernelAccess.planInteractionHandler,
                                i = e.getPlanObject();
                            n.setObjectRotation(e.getPlanElement(), i.rotation - t)
                        }
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_plannerSelectionHandler", void 0), Object(i["B"])([i["Y"]], e.prototype, "_plannerKernelAccess", void 0), e
            })();
            class p extends class {
                constructor(e) {
                    this._coreReference = e.clone()
                }
                clearReference() {
                    this._coreReference.delete(), this._coreReference = null
                }
                getKernelObject() {
                    return this._coreReference
                }
            } {
                constructor(e) {
                    super(e);
                    const t = Object(i["w"])(e.getCenter());
                    this._container = new THREE.Object3D, this._container.position.copy(t), this._boundingBox = this._generateBoundingBox(this.getSize(), e.customColor), Object(i["g"])(this._boundingBox), this._container.add(this._boundingBox), 2 !== this.getPlanElement().getType().value && (this._object = new THREE.Object3D, this._container.add(this._object))
                }
                getSize() {
                    return this._object ? (new THREE.Box3).setFromObject(this._object).getSize(new THREE.Vector3) : new THREE.Vector3
                }
                update() {
                    this._container.position.copy(Object(i["w"])(this.getPlanElement().getCenter()))
                }
                getPosition() {
                    return this._container.position
                }
                getRotation() {
                    return this._container.rotation.y
                }
                getBounds() {
                    let e = new THREE.Box3;
                    return e.setFromObject(this._container), e
                }
                getBoundingBox() {
                    return this._boundingBox
                }
                getPlanElement() {
                    return this._coreReference
                }
                getObject() {
                    return this._object
                }
                addMesh(e) {
                    this._object.add(e), this.hidePreviewBox()
                }
                getMesh(e) {
                    if (!this._object || 0 === this._object.children.length) return null;
                    const t = Object(i["x"])(e, this.getPlanElement().getType());
                    return this._object.children.find(e => e.userData.material === t)
                }
                getContainer() {
                    return this._container
                }
                getId() {
                    return this.getPlanElement().getId()
                }
                clear() {
                    Object(i["T"])(this._container), this._selectionMesh && Object(i["T"])(this._selectionMesh)
                }
                hidePreviewBox() {
                    this._container && this._boundingBox && (this._boundingBox.material = Object(i["y"])())
                }
                _generateBoundingBox(e, t) {
                    e.addScalar(.01);
                    let n = new THREE.BoxGeometry(e.x, e.y, e.z),
                        a = new THREE.Color(i["l"]);
                    t > 0 && (a = Object(i["z"])(t));
                    let s = new THREE.MeshStandardMaterial({
                            color: a,
                            opacity: i["o"],
                            transparent: !0
                        }),
                        r = new THREE.Mesh(n, s);
                    return r.name = "bounding box", r.position.y = e.y / 2, r.castShadow = !1, r.receiveShadow = !1, r
                }
                select() {
                    if (!this._selectionMesh) {
                        let e = new THREE.MeshStandardMaterial({
                            color: this._primaryColor,
                            opacity: i["o"],
                            transparent: !0
                        });
                        const t = Object(i["w"])(this.getPlanElement().getCenter());
                        this._selectionMesh = new THREE.Mesh(Object(i["A"])(t, this.getSize()), e)
                    }
                    this._container.add(this._selectionMesh)
                }
                deselect() {
                    this._selectionMesh && this._container.remove(this._selectionMesh)
                }
                setPrimaryColor(e) {
                    this._primaryColor = e
                }
            }
            class m extends p {
                constructor(e) {
                    super(e), this._container.rotation.y = e.rotation
                }
                getPlanObject() {
                    return this.getPlanElement()
                }
                getSize() {
                    return Object(i["a"])(this.getPlanObject().size)
                }
                update() {
                    super.update(), this._container.rotation.y = this.getPlanObject().rotation
                }
            }
            let g = (() => {
                class e extends m {
                    constructor(e) {
                        super(e), this._container.name = "Static " + this._container.name
                    }
                    setRapiItem(e) {
                        return this._addStaticItem(e)
                    }
                    _addStaticItem(e) {
                        this._rapiItem = e;
                        let t = this.getPlanObject();
                        this._glbUrl = Object(a["l"])(e);
                        let n = e.scaleable ? Object(i["a"])(t.size) : void 0,
                            s = new THREE.Vector3(1, 1, 1);
                        return t.flipX && (s.x *= -1), t.flipY && (s.z *= -1), new Promise(a => {
                            this._staticItemLoader.loadGLB(this._glbUrl, void 0, void 0, n, s, t.customColor, e.colorable).then(t => {
                                this._object = t, this._object.name = e.label, Object(i["D"])(t, this._glbUrl), Object(i["g"])(t), this._container.add(this._object), this.hidePreviewBox(), a()
                            })
                        })
                    }
                    getRapiItem() {
                        return this._rapiItem
                    }
                    needsRapiItem() {
                        return !this._glbUrl
                    }
                    getGLBUrl() {
                        return this._glbUrl
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_staticItemLoader", void 0), e
            })();
            class u extends m {
                constructor(e) {
                    super(e), this._container.name = "Configurable " + this._container.name
                }
                addRootComponent(e) {
                    this._object = e, this._container.add(this._object)
                }
                getConfigurationRuntimeId() {
                    return this.getPlanObject().getConfigurationRuntimeId()
                }
            }
            let b = (() => {
                class e extends l["b"] {
                    constructor(e, t, n, a) {
                        super(e, t, r["m"].HSP, a), this._staticItemGuard = new i["ob"], this._configurableItemGuard = new i["ob"], this._roomlePlannerCallback = n, this._plannerMeshGenerator.maxAnisotropy = this._renderer.capabilities.getMaxAnisotropy(), this._plannerMeshGenerator.maxTextures = this._renderer.capabilities.maxTextures, this._plannerSceneEventHandler = new _(this._scene, this._cameraControl.getCamera(), this._getInputManager()), this._plannerSceneEventHandler.addEventListener(0, ({
                            planElementViewModel: e
                        }) => {
                            e instanceof g && this._initData.debug && e.getGLBUrl(), this._highlight(e), this._onSelectionChange(e)
                        }, this), this._plannerSceneEventHandler.addEventListener(1, () => {
                            this._highlight(null), this._roomlePlannerUiCallback.onSelectionCancel()
                        }, this), this._plannerSceneEventHandler.addEventListener(4, () => {
                            this._cameraControl.lock(), this._environment instanceof r["a"] && this._environment.removeFromScene(), this._requestRender()
                        }, this), this._plannerSceneEventHandler.addEventListener(6, () => {
                            this._cameraControl.unlock(), this._environment instanceof r["a"] && this._environment.addToScene(), this._requestRender(!0), this.updateEnvironment(this.getBounds(), !0)
                        }, this), this._plannerKernelAccess.addPlannerListener(this), this._plannerMeshGenerator.setMaterialLoadedListener(() => {
                            this._planViewModel.tryToMergeComponents(), this._configurableItemGuard.resolve(), this._requestRender()
                        }), window.onbeforeunload = this.clearScene.bind(this)
                    }
                    _onSelectionChange(e) {
                        let t;
                        e instanceof g && (t = "static"), e instanceof u && (t = "configuration");
                        const n = {};
                        if (e instanceof g && (n.item = e.getRapiItem()), e instanceof u) {
                            const t = e.getConfigurationRuntimeId();
                            n.configurationRuntimeId = t
                        }
                        const i = (async () => {
                            const n = {};
                            if (e instanceof g && (n.item = e.getRapiItem()), e instanceof u) {
                                const i = e.getConfigurationRuntimeId(),
                                    a = e.getPlanObject().getCatalogItemId(),
                                    s = this._plannerKernelAccess.kernelInstance.getHashOfConfiguration(i);
                                let r;
                                if (a) {
                                    const e = await this._rapiAccess.getItem(a);
                                    n.item = e, r = e.rootComponentId ? e.rootComponentId : null
                                } else try {
                                    const e = await this._rapiAccess.getConfiguration(s);
                                    n.configuration = e, r = e.rootComponentId ? e.rootComponentId : null
                                } catch (e) {
                                    console.warn("Could not get RAPI configuration for kernel hash " + s + ", saving configuration...");
                                    const a = await this._plannerKernelAccess.getConfigurationData(i),
                                        o = await this._rapiAccess.saveConfiguration(a);
                                    n.configuration = o, r = o.rootComponentId ? o.rootComponentId : null
                                }
                                if (r) {
                                    const e = await this._rapiAccess.getComponent(r);
                                    n.component = e
                                }
                                n.configurationRuntimeId = i, t = "configuration"
                            }
                            return n
                        })();
                        this._roomlePlannerUiCallback.onSelectionChange(this._plannerSceneEventHandler.getSelectionMode(), t, n, i)
                    }
                    _setupScene(e, t) {
                        super._setupScene(e, t), this._initData.moc ? (this._lightSetting = new h["a"](this._scene), this._setEnvironment(new r["n"](this._scene, this._environment, new THREE.Color(this._initData.colors.DEFAULT_BACKGROUND)))) : (this._lightSetting = new c(this._scene), this._addSky(), this._setEnvironment(new r["a"](this._scene, this._environment)))
                    }
                    onBeforeRender() {
                        this._cameraControl instanceof r["b"] && this._plannerMeshGenerator.wallMeshes.forEach(e => Object(i["E"])(this._cameraControl.getCamera(), e.material))
                    }
                    _getInputManager() {
                        return this._plannerInputManager
                    }
                    createCameraControl(e) {
                        this.setMode(e)
                    }
                    resetCamera() {
                        this._cameraControl.hasSavedState() ? this.resetCameraToState() : this.resetCameraPositionToStart()
                    }
                    resetCameraToState() {
                        this._cameraControl.resetToState()
                    }
                    resetCameraPositionToStart() {
                        this._requestRender()
                    }
                    _getYRotationOfObject(e) {
                        let t = e.getWorldDirection(new THREE.Vector3).clone();
                        t.y = 0, t.lengthSq() < .01 && (t = new THREE.Vector3(0, 1, 0), t.applyQuaternion(e.quaternion), t.y = 0), t.normalize();
                        let n = Math.asin(t.x);
                        return t.z < 0 && (n = Math.PI - n), n < 0 && (n += 2 * Math.PI), n
                    }
                    loadStaticPlanObjects() {
                        let e = new Map;
                        this._planViewModel.getStaticPlanObjectViewModels().forEach(t => {
                            let n = t.getPlanObject();
                            e.has(n.getCatalogItemId()) ? e.get(n.getCatalogItemId()).push(t) : e.set(n.getCatalogItemId(), [t])
                        }), this._rapiAccess.getItems(Array.from(e.keys())).then(t => {
                            let n = [];
                            t.forEach(t => {
                                this._plannerKernelAccess.catalogItemLoaded(t), e.get(t.id).forEach(e => {
                                    n.push(new Promise((n, i) => {
                                        e.setRapiItem(t).then(() => {
                                            this._requestRender(), n()
                                        }, i)
                                    }))
                                })
                            }), Promise.all(n).then(() => this._staticItemsLoaded())
                        })
                    }
                    _staticItemsLoaded() {
                        this._requestRender(!0), this._staticItemGuard.resolve(), this._roomlePlannerUiCallback.onItemsLoaded()
                    }
                    preload(e) {
                        this._planId = e;
                        let t = this._localStorageHelper.getItem(this._planId, "rml_plans");
                        t && this._loadGLTF(t).then(e => {
                            this._preloadScene = e, this._preloadScene && this._scene.add(this._preloadScene), this._requestRender()
                        })
                    }
                    planXMLLoaded(e) {
                        this.endPlanConstruction(e);
                        const t = e.getBounds(),
                            n = Object(i["X"])(t);
                        this._updateBounds(n), this.loadStaticPlanObjects()
                    }
                    planCompletelyLoaded(e) {
                        const t = e.getBounds();
                        this._updateBounds(Object(i["X"])(t))
                    }
                    handlerSwitchedPlans(e) {
                        if (this._planViewModel = e, this._planViewModel.setPlannerSceneEventHandler(this._plannerSceneEventHandler), this._planViewModel.setGeometriesMergedListener(() => {
                                this._requestRender()
                            }), this._plannerSceneEventHandler.setPlanViewModel(this._planViewModel), this.clearScene(), !this._initData.moc) {
                            this._addSky();
                            let e = new THREE.PlaneGeometry(1e3, 1e3);
                            e.rotateX(-Math.PI / 2);
                            let t = new THREE.MeshStandardMaterial({
                                    color: "#f0f0f0",
                                    roughness: 1,
                                    metalness: 0
                                }),
                                n = new THREE.Mesh(e, t);
                            n.name = "Ground", n.position.y = -.01, n.receiveShadow = !0, this._scene.add(n)
                        }
                        this.resetCamera(), this._setCeiling(), this._staticItemGuard.reset(), this._configurableItemGuard.reset(), Promise.all([this._staticItemGuard.wait(), this._configurableItemGuard.wait()]).then(this._itemsLoaded.bind(this))
                    }
                    _itemsLoaded() {
                        const e = this._planViewModel.getCorePlan();
                        if (this._pixotron) {
                            const t = Object(i["X"])(e.getBounds());
                            this._pixotron.getShadowPass().setShadowRecieverBBox(t)
                        }
                        this._roomlePlannerUiCallback.onCompletelyLoaded(), this._environment.updateBounds(Object(i["X"])(e.getBounds()).getSize(new THREE.Vector3)), this._requestRender(), i["c"].end("loadingTime")
                    }
                    beginPlanConstruction(e) {}
                    addPlanMesh(e, t, n, i, a, s, r) {}
                    endPlanConstruction(e) {
                        this._renderLoopFunction = () => {
                            this._scene.add(this._planViewModel.getConstructionGroup()), this._scene.add(this._planViewModel.getCeilingGroup()), this._lightSetting.needsBounds() && this._lightSetting.updateBounds(this._planViewModel.getBoundingBox()), this._scene.remove(this._preloadScene)
                        }
                    }
                    addPlanObjectToScene(e) {
                        Object(i["g"])(e), this._scene.add(e)
                    }
                    removePlanObjectFromScene(e) {
                        this._scene.remove(e), this.updateEnvironment(this.getBounds()), this._requestRender(!0)
                    }
                    planElementChanged(e, t) {
                        this.updateEnvironment(this.getBounds(), !0), this._requestRender(!0), this._onPlanChanged()
                    }
                    exportGLB(e, t) {
                        this._scriptLoader.fetch(s["a"], {
                            id: "gltf-exporter"
                        }).then(() => {
                            let n = new THREE.GLTFExporter;
                            e || (e = [], this._scene.children.forEach(t => {
                                this._isPartOfScene(t) && e.push(t)
                            })), n.parse(e, e => {
                                let n = t || "test";
                                this._localStorageHelper.addItem(n, JSON.stringify(e), "rml_plans")
                            }, {
                                binary: !1,
                                embedImages: !0,
                                forceIndices: !0
                            })
                        })
                    }
                    importGLB(e) {
                        this._loadGLB(e).then(e => this._scene.add(e))
                    }
                    clearScene() {
                        this._plannerMeshGenerator.clear(), this._planViewModel.sceneCleared(), super.clearScene()
                    }
                    _addSky() {
                        this._sky = new THREE.Sky, this._sky.name = "Sky", this._sky.scale.setScalar(45e4), this._scene.add(this._sky), this._sky.material.uniforms.turbidity.value = 10, this._sky.material.uniforms.rayleigh.value = 2, this._sky.material.uniforms.luminance.value = 1, this._sky.material.uniforms.mieCoefficient.value = .005, this._sky.material.uniforms.mieDirectionalG.value = .8;
                        let e = new THREE.Mesh(new THREE.SphereBufferGeometry(2e4, 16, 8), new THREE.MeshBasicMaterial({
                            color: 16777215
                        }));
                        e.name = "Sunsphere", e.position.y = -7e5, e.visible = !1, this._scene.add(e);
                        let t = -.2 * Math.PI,
                            n = 2 * Math.PI * -.25;
                        e.position.x = 4e5 * Math.cos(n), e.position.y = 4e5 * Math.sin(n) * Math.sin(t), e.position.z = 4e5 * Math.sin(n) * Math.cos(t), e.visible = !0, this._sky.material.uniforms.sunPosition.value.copy(e.position), this._lightSetting instanceof c && this._lightSetting.updateSunPosition(.3, .25)
                    }
                    switchTo2D() {
                        this._cameraControl instanceof l["a"] || (this._requestRender(), this._changeCameraControl(new l["a"](this._creator_, this._getInputManager())), this._updateCamera(), this._addCameraControlListener(), this._setCeiling(), this._roomlePlannerUiCallback.onCameraChanged("2D"))
                    }
                    switchTo3D() {
                        this._cameraControl instanceof r["b"] || (this._changeCameraControl(new r["b"](this._creator_, this._getInputManager(), new THREE.Vector3(0, 10, 0), this.getPerspectiveOffsetCamera())), this._updateCamera(), this._addCameraControlListener(), this._setCeiling(), this._roomlePlannerUiCallback.onCameraChanged("3D"))
                    }
                    _setCeiling() {
                        this._planViewModel && (this._cameraControl instanceof l["c"] ? this._planViewModel.getCeilingGroup().visible = !0 : this._planViewModel.getCeilingGroup().visible = !1)
                    }
                    cameraControlChanged() {
                        super.cameraControlChanged(), this._plannerSceneEventHandler && this._plannerSceneEventHandler.setCamera(this._cameraControl.getCamera())
                    }
                    sceneChanged() {
                        this._plannerSceneEventHandler && this._plannerSceneEventHandler.setScene(this._scene)
                    }
                    closeHSC() {
                        this._requestRender(), this._cameraControl instanceof r["b"] && this._cameraControl.resetToState()
                    }
                    switchToFirstPerson() {
                        if (this._cameraControl instanceof l["c"]) return;
                        this._plannerMeshGenerator.wallMeshes.forEach(e => Object(i["F"])(e.material, !1, !1)), this._requestRender();
                        let e = new THREE.Vector3(0, 0, 0);
                        this._planViewModel && (e = this._planViewModel.getBoundingBox().getCenter(new THREE.Vector3)), this._cameraControl && this._cameraControl.cleanUp(), this._changeCameraControl(new l["c"](this._creator_, this._getInputManager(), e, this.getPerspectiveOffsetCamera())), this._addCameraControlListener(), this._setCeiling(), this._roomlePlannerUiCallback.onCameraChanged("FP")
                    }
                    _onKeyDown(e) {
                        super._onKeyDown(e), e.key && "1" === e.key && (this.switchTo2D(), e.preventDefault()), e.key && "2" === e.key && (this.switchTo3D(), e.preventDefault()), e.key && "3" === e.key && (this.switchToFirstPerson(), e.preventDefault()), !e.key || "Meta" !== e.key && "Control" !== e.key || (this._plannerSceneEventHandler.setSelectionMode("multiselect"), e.preventDefault())
                    }
                    _onKeyUp(e) {
                        super._onKeyDown(e), !e.key || "Meta" !== e.key && "Control" !== e.key || (this._plannerSceneEventHandler.setSelectionMode("standard"), e.preventDefault())
                    }
                    setMode(e) {
                        switch (e) {
                            case "2D":
                                this.switchTo2D();
                                break;
                            case "3D":
                                this.switchTo3D();
                                break;
                            case "FP":
                                this.switchToFirstPerson()
                        }
                    }
                    _highlight(e) {
                        let t = [];
                        e && e.getObject() && e.getObject().children && t.push(...e.getObject().children), this._plannerSceneEventHandler.getSelectedIds().forEach(e => {
                            const n = this._planViewModel.getPlanObjectForId(e);
                            n && n.getObject() && n.getObject().children && t.push(...n.getObject().children)
                        }), this._pixotron.highlightObjects(t)
                    }
                    destroy() {
                        super.destroy(), this._plannerMeshGenerator.removeMaterialLoadedListener(), this._planViewModel.removeGeometriesMergedListener()
                    }
                    getPixotronParams() {
                        return {
                            saoparams: {
                                intensity: .5,
                                occlusionWorldRadius: .6,
                                smoothTransition: !0,
                                samplesPerFrame: 4,
                                bias: .02,
                                numSamples: 100,
                                accumulative: !1,
                                falloff: 2
                            },
                            shadowparams: {
                                shadowMapResolution: 1024,
                                shadowRadius: 3,
                                shadowQuality: 1,
                                smoothTransition: !0,
                                enableAccumulation: !0,
                                shadowBiasMultiplier: .6,
                                nearPlane: .01,
                                farPlane: 50,
                                fov: 110,
                                side: THREE.FrontSide,
                                numSamples: 100
                            },
                            outlineparams: {
                                highlightColor: new THREE.Color(this._initData.colors.SELECTION),
                                edgeStrength: 1,
                                transparency: .9,
                                edgeThickness: 2
                            }
                        }
                    }
                    getBakedShadowParams() {
                        return {
                            enable: !0,
                            shadowMapResolution: 1024,
                            smoothTransition: !0,
                            numSamples: 500,
                            numSamplesPerFrame: 4,
                            bShadowMaterial: !0,
                            falloff: 1.8,
                            darkness: .3,
                            size: 1.2,
                            lightDirection: new THREE.Vector3(0, 1, 0),
                            lightSolidAngle: 40,
                            yPosition: .006
                        }
                    }
                    planObjectConfigurationLoaded(e, t, n) {
                        if (e && e.extRef && t && t.extRef) {
                            let e = t.extRef.jsObject.getPlanObject().getConfigurationRuntimeId();
                            e > 0 && this._planViewModel.constructComponents(e)
                        }
                    }
                    addMesh(e, t, n, i, a, s) {}
                    _updateBounds(e) {
                        e && (this._updateCamera(e), super._updateBounds(e))
                    }
                    _updateCamera(e) {
                        const {
                            x: t,
                            y: n
                        } = this._domHelper.getClientDimensions();
                        if (e || (e = this.getBounds()), e) {
                            if (this._cameraControl instanceof r["b"]) {
                                const i = e.getSize(new THREE.Vector3),
                                    a = Math.max(i.x, i.z),
                                    s = this._initData.moc ? .5 * a * -1 : 5,
                                    o = this._initData.moc ? r["v"] : 70;
                                this._cameraControl.updateAndReset(i, t, n, e.getCenter(new THREE.Vector3), -15, o, s, !1)
                            }
                            this._cameraControl instanceof l["a"] && this._cameraControl.updateToBounds(e.getSize(new THREE.Vector3), e.getCenter(new THREE.Vector3))
                        }
                    }
                    getBounds() {
                        return this._planViewModel ? this._planViewModel.getBoundingBox() : null
                    }
                    cancelSelection() {
                        this._plannerSceneEventHandler.cancelSelection(), this._requestRender(!0)
                    }
                    deleteSelection() {
                        const e = this._plannerSceneEventHandler.getSelectedIds();
                        this.cancelSelection(), e.forEach(e => {
                            const t = this._planViewModel.getPlanObjectForId(e);
                            t && t.getObject() && this._plannerKernelAccess.planInteractionHandler.removeElement(t.getKernelObject())
                        })
                    }
                    rotateSelection(e) {
                        const t = new this._plannerKernelAccess.kernelContainer.PlanObjectPtrList,
                            n = new THREE.Box3;
                        this._plannerSceneEventHandler.getSelectedIds().forEach(e => {
                            const i = this._planViewModel.getPlanObjectForId(e);
                            i && i.getObject() && (t.push_back(i.getPlanObject()), n.expandByObject(i.getContainer()))
                        });
                        const a = n.getCenter(new THREE.Vector3),
                            s = this._plannerKernelAccess.planInteractionHandler.groupObjects(t);
                        this._plannerKernelAccess.planInteractionHandler.rotateGroupBy(s, e, Object(i["v"])(a))
                    }
                    planBoundsChanged() {
                        this.updateEnvironment(this.getBounds()), this._requestRender(!0)
                    }
                    planElementRemoved(e) {
                        this._onPlanChanged()
                    }
                    _onPlanChanged() {
                        this._roomlePlannerUiCallback.onPlanChanged()
                    }
                    prepareTopImage(e = {}) {
                        return new Promise(t => {
                            this._planViewModel.materialQueue.finished(!0).then(async () => {
                                let n = this._calculateBoundingBoxOfAllMeshes(.1);
                                this._lightSetting.removeFromScene();
                                let i = await Object(s["c"])(this._scene, null, n, e);
                                this._lightSetting.addToScene(), this._requestRender(), t(i)
                            })
                        })
                    }
                    preparePerspectiveImage(e = {}) {
                        return new Promise((t, n) => {
                            this._planViewModel.materialQueue.finished(!0).then(async () => {
                                let n;
                                n = this._cameraControl instanceof r["b"] ? this._cameraControl.getCamera().clone() : this.getPerspectiveOffsetCamera();
                                let i = this._calculateBoundingBoxOfAllMeshes();
                                this._lightSetting.removeFromScene();
                                const a = await Object(s["e"])(this._scene, n, i, e);
                                this._lightSetting.addToScene(), this._requestRender(), t(a)
                            }, n)
                        })
                    }
                    _calculateBoundingBoxOfAllMeshes(e = 0) {
                        const t = this.getBounds();
                        return Object(s["d"])(t, e)
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_plannerKernelAccess", void 0), Object(i["B"])([i["Y"]], e.prototype, "_rapiAccess", void 0), Object(i["B"])([i["Y"]], e.prototype, "_plannerMeshGenerator", void 0), Object(i["B"])([i["Y"]], e.prototype, "_plannerInputManager", void 0), Object(i["B"])([i["Y"]], e.prototype, "_roomlePlannerUiCallback", void 0), Object(i["B"])([i["Y"]], e.prototype, "_localStorageHelper", void 0), e
            })();
            const E = {
                left: 0,
                top: 1,
                right: 1,
                bottom: 0
            };
            let w = (() => {
                class e {
                    constructor(e) {
                        this._hscInstance = null, this._glbInstance = null, this._creator_ = e, this._kernelAccessCallback.addListener(this), this._backstack.init([r["m"].HSP], this)
                    }
                    deleteSelection() {
                        this._sceneManager.deleteSelection()
                    }
                    rotateSelection(e) {
                        this._sceneManager.rotateSelection(e)
                    }
                    cancelSelection() {
                        this._sceneManager.cancelSelection()
                    }
                    init(e, t, n) {
                        return i["c"].start("loadingTime"), this._domHelper.setDomElement(e), this._sceneManager ? (this._lifeCycleManager.resume(), Promise.resolve()) : (this._preloadPlanId = t, this.setOverrides(n), new Promise(this._initPromiseCallback.bind(this)))
                    }
                    loadPlanXml(e, t) {
                        return this.setOverrides(t), new Promise(t => {
                            this._plan = this._planInteractionHandler.loadPlanXML(e), this._sceneManager.planXMLLoaded(this._plan), this._roomlePlannerUiCallback.onTotalFloorAreaChanged(this._planInteractionHandler.getPlan().getTotalFloorArea()), this._backstack.bringIntoForeground(r["m"].HSP), t()
                        })
                    }
                    loadPlan(e, t) {
                        return this.setOverrides(t), new Promise((t, n) => {
                            this._rapiAccess.getPlan(e).then(e => {
                                this._plan = this._planInteractionHandler.loadPlanXML(e.planObjects), this._sceneManager.planXMLLoaded(this._plan), this._roomlePlannerUiCallback.onTotalFloorAreaChanged(this._planInteractionHandler.getPlan().getTotalFloorArea()), this._backstack.bringIntoForeground(r["m"].HSP), t()
                            }, n)
                        })
                    }
                    setOverrides(e) {
                        e && (this._initData.setOverrides(e), this._globalInitData.setOverrides(e))
                    }
                    switch2D() {
                        this._sceneManager.switchTo2D()
                    }
                    switch3D() {
                        this._sceneManager.switchTo3D()
                    }
                    switchToFirstPerson() {
                        this._sceneManager.switchToFirstPerson()
                    }
                    exportGLB() {
                        this._sceneManager.exportGLB()
                    }
                    importGLB(e) {
                        this._sceneManager.importGLB(e)
                    }
                    _initPromiseCallback(e, t) {
                        this._threeLoader.fetch().then(() => {
                            let t = this._scriptLoader.fetch(i["h"], {
                                    id: "gltf-loader"
                                }),
                                n = this._scriptLoader.fetch(i["G"], {
                                    id: "draco-loader"
                                }),
                                a = this._scriptLoader.fetch(r["l"], {
                                    id: "tween-js"
                                }),
                                s = this._scriptLoader.fetch("static/Sky-6621935ea8a523af.js", {
                                    id: "sky-js"
                                });
                            Promise.all([t, n, a, s]).then(() => {
                                this._kernelReadyCallback = e;
                                const {
                                    mode: t,
                                    stats: n
                                } = this._initData;
                                this._sceneManager || (this._sceneManager = new b(this._creator_, E, this, t)), this._preloadPlanId && this._sceneManager.preload(this._preloadPlanId), n ? this.showStats() : this.enableHD(), this._planInteractionHandler && this._kernelReadyCallback()
                            })
                        })
                    }
                    enableHD() {
                        return new Promise((e, t) => {
                            const n = () => {
                                this._sceneManager.enableHD(), e()
                            };
                            this._threeLoader.fetch().then(() => Promise.all(r["s"].map(e => this._scriptLoader.fetch(e, {
                                id: e
                            })))).then(() => {
                                this._scriptLoader.fetch(r["u"], {
                                    id: "pi-js"
                                }).then(n, t)
                            }, t)
                        })
                    }
                    isReady() {
                        this._planInteractionHandler = this._plannerKernelAccess.planInteractionHandler, this._kernelReadyCallback && this._kernelReadyCallback()
                    }
                    showBenchmarks() {
                        i["c"].showBenchmarks()
                    }
                    async switchToConfigurator() {
                        const e = await this._singlePromiseFactory.create(3, "startHSC", e => {
                            if (this._hscInstance) return e(this._hscInstance);
                            n.e("chunk-66be89ce").then(n.bind(null, "77b3")).then((function(e) {
                                return e.c
                            })).then(({
                                Configurator: t
                            }) => {
                                const n = new t(this._creator_);
                                n.boot({
                                    kernelInstance: this._planInteractionHandler.getConfiguratorKernel(),
                                    kernelContainer: this._plannerKernelAccess.kernelContainer
                                }), n.getApi().setOverrides(this._initData), n.getApi().init(this._domHelper.element).then(() => {
                                    this._hscInstance = n, e(this._hscInstance)
                                })
                            })
                        });
                        return this._backstack.bringIntoForeground(r["m"].HSC), e
                    }
                    async switchToViewer() {
                        const e = await this._singlePromiseFactory.create(4, "startGLB", e => {
                            if (this._glbInstance) return e(this._glbInstance);
                            n.e("chunk-2d0b23c2").then(n.bind(null, "22f2")).then(t => {
                                const n = new t.GlbViewer(this._creator_);
                                n.boot(), n.getApi().setOverrides(this._initData), n.getApi().init(this._domHelper.element).then(() => {
                                    this._glbInstance = n, e(this._glbInstance)
                                })
                            })
                        });
                        return this._backstack.bringIntoForeground(r["m"].GLB), e
                    }
                    switchToPlanner(e) {
                        e && this.loadPlan(e), this._backstack.bringIntoForeground(r["m"].HSP)
                    }
                    updateSize() {
                        this._sceneManager.updateCamera()
                    }
                    getMain() {}
                    update() {
                        this.updateSize(), this._glbInstance && this._glbInstance.getApi().updateSize(), this._hscInstance && this._hscInstance.getApi().updateSize()
                    }
                    get callbacks() {
                        return this._roomlePlannerUiCallback
                    }
                    set callbacks(e) {
                        this._roomlePlannerUiCallback = e
                    }
                    showStats() {
                        this._sceneManager.showStats()
                    }
                    onBackStackChanged(e) {
                        this._roomlePlannerUiCallback.onBackStackChanged(e)
                    }
                    onCloseHSC() {
                        this._sceneManager.closeHSC(), this._hscInstance && this._hscInstance.getApi().pauseKernelCallbacks()
                    }
                    back() {
                        this._backstack.current() === r["m"].GLB && this._glbInstance && this._glbInstance.getApi().clearScene(), this._backstack.back()
                    }
                    backTo(e) {
                        this._backstack.backTo(e)
                    }
                    getConfigurator() {
                        return this._hscInstance
                    }
                    getCurrentSkin() {
                        return this._rapiAccess.getCurrentSkin()
                    }
                    getRuntimeComponentIdOfRootComponent(e) {
                        return e ? this._plannerKernelAccess.planInteractionHandler ? this._plannerKernelAccess.planInteractionHandler.getConfiguratorKernel().getRootPlanComponentIdFromObjectId(e) : (console.warn("Can not retrieve runtime id without planInteractionHandler"), 0) : (console.warn("Can not retrieve runtime id without planObjectId"), 0)
                    }
                    resumeTest(e) {
                        this._domHelper.setDomElement(e), this._lifeCycleManager.resume()
                    }
                    pauseTest() {
                        this._lifeCycleManager.pause()
                    }
                    syncCatalog(e) {
                        return this._dataSyncer.syncCatalog(e)
                    }
                    loadError(e) {}
                    getPlanInteractionHandler() {
                        return Promise.resolve(this._planInteractionHandler)
                    }
                    getPlanModelViewHelper() {
                        return Promise.resolve(this._plannerKernelAccess.planModelViewHelper)
                    }
                    async insertObject(e, t, n) {
                        if (!this._planInteractionHandler) throw new Error("no plan interaction handler");
                        if (!t) return this.insertItemList([e]);
                        const i = await this._createKernelItem(e);
                        return this._planInteractionHandler.addPlanObjectFromItem(i, t, n)
                    }
                    async insertItemList(e) {
                        if (!this._planInteractionHandler) throw new Error("no plan interaction handler");
                        if (!e || !e.length) return;
                        const t = e.map(e => this._createKernelItem(e)),
                            n = await Promise.all(t),
                            i = new this._plannerKernelAccess.kernelContainer.CatalogItemPtrList;
                        n.forEach(e => {
                            i.push_back(e)
                        }), this._planInteractionHandler.addPlanObjects(i)
                    }
                    async insertItems(e) {
                        await this._plannerKernelAccess.insertItems(e)
                    }
                    getScene() {
                        return this._sceneManager.getScene()
                    }
                    updateScene() {
                        this._sceneManager.updateScene()
                    }
                    getCameraOffset() {
                        return this._sceneManager.getCameraOffset()
                    }
                    setCameraOffset(e) {
                        this._sceneManager.setCameraOffset(e)
                    }
                    async _createKernelItem(e) {
                        const t = new this._plannerKernelAccess.kernelContainer.CatalogItem(e),
                            n = Object(i["fb"])(e) ? await this._rapiAccess.getItem(e) : await this._rapiAccess.getConfiguration(e),
                            a = t.size;
                        return a.x = n.width || 0, a.y = n.depth || 0, a.z = n.height || 0, t.size = a, t.type = n.type || "other", n.configuration && (t.configuration = n.configuration), n.layer && (t.layer = n.layer), n.flipable && (t.flipable = n.flipable), t
                    }
                    async getObjects() {
                        const e = (await this.getPlanModelViewHelper()).getPlanOverview(this._plan);
                        let t = [];
                        for (let n = 0; n < e.objects.size(); n++) t.push(Object(i["S"])(e.objects.get(n)));
                        return t
                    }
                    async getPlanOverview() {
                        const e = (await this.getPlanModelViewHelper()).getPlanOverview(this._plan);
                        return Object(i["S"])(e)
                    }
                    prepareTopImage(e = {}) {
                        return this._sceneManager.prepareTopImage(e)
                    }
                    preparePerspectiveImage(e = {}) {
                        return this._sceneManager.preparePerspectiveImage(e)
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_domHelper", void 0), Object(i["B"])([i["Y"]], e.prototype, "_scriptLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_kernelAccessCallback", void 0), Object(i["B"])([i["Y"]], e.prototype, "_plannerKernelAccess", void 0), Object(i["B"])([i["Y"]], e.prototype, "_rapiAccess", void 0), Object(i["B"])([i["Y"]], e.prototype, "_singlePromiseFactory", void 0), Object(i["B"])([i["Y"]], e.prototype, "_roomlePlannerUiCallback", void 0), Object(i["B"])([i["Y"]], e.prototype, "_lifeCycleManager", void 0), Object(i["B"])([i["Y"]], e.prototype, "_backstack", void 0), Object(i["B"])([i["Y"]], e.prototype, "_threeLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_dataSyncer", void 0), Object(i["B"])([i["Y"]], e.prototype, "_initData", void 0), Object(i["B"])([i["Y"]], e.prototype, "_globalInitData", void 0), e
            })();
            class f extends p {
                constructor(e) {
                    super(e), this._container.name = "Wall Plan Element"
                }
                addMesh(e) {
                    super.addMesh(e);
                    const t = (new THREE.Box3).setFromObject(this._object).getSize(new THREE.Vector3);
                    this._boundingBox.geometry = new THREE.BoxGeometry(t.x, t.y, t.z), this._boundingBox.position.y = t.y / 2
                }
            }
            class C extends p {
                constructor(e) {
                    super(e), this._container.name = "Floor Plan Element"
                }
                addMesh(e) {
                    super.addMesh(e), e.castShadow = !1;
                    const t = (new THREE.Box3).setFromObject(this._object).getSize(new THREE.Vector3);
                    this._boundingBox.geometry = new THREE.BoxGeometry(t.x, .01, t.z)
                }
            }
            class y extends p {
                constructor(e) {
                    super(e), this._container.name = "Ceiling Plan Element"
                }
                addMesh(e) {
                    super.addMesh(e), e.castShadow = !1;
                    const t = (new THREE.Box3).setFromObject(this._object).getSize(new THREE.Vector3);
                    this._boundingBox.geometry = new THREE.BoxGeometry(t.x, .01, t.z)
                }
            }
            let v = (() => {
                    class e extends i["H"] {
                        constructor(e) {
                            super(e), this._configurablePlanObjectViewModels = [], this._staticPlanObjectViewModels = [], this._constructionGroup = new THREE.Group, this._ceilingGroup = new THREE.Group, this._getKernelAccess().addPlannerListener(this)
                        }
                        planBoundsChanged() {}
                        _getKernelAccess() {
                            return i["gb"].lookup("planner-kernel-access", this._creator_)
                        }
                        setReference(e) {
                            this._coreReference = e.clone()
                        }
                        clearReference() {
                            this._coreReference.delete(), this._coreReference = null, super.clearReference()
                        }
                        getCorePlan() {
                            return this._coreReference
                        }
                        addPlanElementViewModel(e) {
                            e instanceof u ? this._configurablePlanObjectViewModels.push(e) : e instanceof g ? (this._staticPlanObjectViewModels.push(e), "door" !== e.getPlanObject().getObjectType() && "window" !== e.getPlanObject().getObjectType() && this._initData.edit && this._plannerSceneEventHandler.addPlanObjectHandlers(e)) : e instanceof f ? (this._initData.edit && this._plannerSceneEventHandler.addWallHandlers(e), this._constructionGroup.add(e.getContainer())) : (e instanceof C || e instanceof y) && this._constructionGroup.add(e.getContainer())
                        }
                        _addRootComponent(e) {
                            let t = this._getPlanObjectViewModelForRuntimeId(e.parentObjectId);
                            t && t instanceof u && (t.addRootComponent(e), this._initData.edit && this._plannerSceneEventHandler.addPlanObjectHandlers(t), t.hidePreviewBox())
                        }
                        _getPlanObjectViewModelForRuntimeId(e) {
                            let t = null;
                            return this._configurablePlanObjectViewModels.forEach(n => {
                                e === n.getConfigurationRuntimeId() && (t = n)
                            }), t
                        }
                        getPlanObjectForId(e) {
                            let t = null;
                            return this._configurablePlanObjectViewModels.forEach(n => {
                                e === n.getId() && (t = n)
                            }), this._staticPlanObjectViewModels.forEach(n => {
                                e === n.getId() && (t = n)
                            }), t
                        }
                        getConstructionGroup() {
                            return this._constructionGroup
                        }
                        getCeilingGroup() {
                            return this._ceilingGroup
                        }
                        getBoundingBox() {
                            const e = this.getCorePlan();
                            return e ? Object(i["X"])(e.getBounds()) : (new THREE.Box3).setFromObject(this._constructionGroup)
                        }
                        setPlannerSceneEventHandler(e) {
                            this._plannerSceneEventHandler = e
                        }
                        sceneCleared() {
                            this._configurablePlanObjectViewModels.forEach(e => {
                                e.clear()
                            }), this._staticPlanObjectViewModels.forEach(e => {
                                e.clear()
                            }), super.sceneCleared()
                        }
                        getStaticPlanObjectViewModels() {
                            return this._staticPlanObjectViewModels
                        }
                        getComponent(e) {
                            return this._components.get(e)
                        }
                        _generateMesh(e = 0, t = null, n, i, a, s, r, o, h) {
                            return this._plannerMeshGenerator.generateMesh(t, n, i, a, s, r, o, h)
                        }
                        _setMaterial(e, t, n) {
                            this._plannerMeshGenerator.setMaterial(e, t)
                        }
                        Editor3dComponentCreated(e, t, n, i, a) {
                            super.Editor3dComponentCreated(e, t, n, i, a), this._getKernelAccess() instanceof M && this.dockComponent(e, i, t, n)
                        }
                        addPlanObjectToScene(e) {}
                        handlerSwitchedPlans(e) {
                            this._constructionGroup = new THREE.Group, this._ceilingGroup = new THREE.Group
                        }
                        planCompletelyLoaded(e) {}
                        beginPlanConstruction(e) {}
                        addPlanMesh(e, t, n, i, a, s, r) {}
                        endPlanConstruction(e) {}
                        planElementChanged(e, t) {}
                        planObjectConfigurationLoaded(e, t, n) {}
                        addMesh(e, t, n, i, a, s) {
                            const r = e.extRef.jsObject;
                            let o = r.getMesh(t);
                            o ? o.geometry = this._plannerMeshGenerator.generateGeometry(null, n, i, a, s) : (o = this._generateMesh(0, null, t, n, i, a, s, e.getType()), r.addMesh(o))
                        }
                        removePlanObjectFromScene(e) {}
                        planElementRemoved(e) {
                            if (e.getType() === this._getKernelAccess().kernelContainer.PlanElementType.OBJECT) {
                                let t = e;
                                if (t.hasConfiguration()) {
                                    const e = t.extRef.jsObject,
                                        n = this._configurablePlanObjectViewModels.indexOf(e);
                                    n > -1 && this._configurablePlanObjectViewModels.splice(n, 1)
                                } else {
                                    const e = t.extRef.jsObject,
                                        n = this._staticPlanObjectViewModels.indexOf(e);
                                    n > -1 && this._staticPlanObjectViewModels.splice(n, 1)
                                }
                            }
                        }
                        getMeshGenerator() {
                            return this._plannerMeshGenerator
                        }
                    }
                    return Object(i["B"])([i["Y"]], e.prototype, "_plannerMeshGenerator", void 0), e
                })(),
                M = (() => {
                    class e extends i["d"] {
                        constructor(e) {
                            super(e, 0), this._plannerKernelCallbackListener = new Set, i["c"].addMeta("kernel_is_ready", {
                                isWasm: this._useWASM
                            }), this._scriptLoader.fetch(this._kernelPath, {
                                id: "kernel"
                            }).then(this._loadSuccess.bind(this), this._loadError.bind(this))
                        }
                        get kernelContainer() {
                            return this._kernelContainer
                        }
                        _loadSuccess() {
                            window.RoomleCore(this._kernelContainer)
                        }
                        _loadError() {
                            console.error("kernel load error")
                        }
                        _createPlanInteractionHandler() {
                            const e = this._kernelContainer;
                            this._planInteractionHandler = new e.PlanInteractionHandler, this._planInteractionHandler.init(this._planInteractionHandler, 1, 100, !0, !0, e.DrawingType.CLICK_PER_CLICK), this._roomlePlannerUiCallback.onPlanInteractionHandlerCreated(this._planInteractionHandler)
                        }
                        addPlannerListener(e) {
                            this._plannerKernelCallbackListener.add(e)
                        }
                        removePlannerListener(e) {
                            this._plannerKernelCallbackListener.delete(e)
                        }
                        isReady() {
                            super.isReady(), this.registerCallbacks(), this._roomlePlannerUiCallback.onPlannerKernelIsReady(this._kernelContainer), this._createPlanInteractionHandler();
                            const e = this._planInteractionHandler.getConfiguratorKernel();
                            this._kernelInstance = e, this._roomlePlannerUiCallback.onConfiguratorKernelIsReady(this._kernelContainer, e), i["f"].isProduction || (window.__RML__DEBUG__.ConfiguratorKernel = this._kernelInstance, window.__RML__DEBUG__.PlannerKernelContainer = this._kernelContainer), this._kernelAccessCallback.isReady()
                        }
                        get callbacks() {
                            return this._roomlePlannerUiCallback
                        }
                        get planInteractionHandler() {
                            return this._planInteractionHandler
                        }
                        get planModelViewHelper() {
                            return this._kernelContainer.PlanModelViewHelper
                        }
                        catalogItemLoaded(e) {
                            const t = this._rapiItemToKernelItem(e);
                            this._kernelContainer.catalogItemLoaded(t)
                        }
                        async insertItems(e) {
                            let t = new this._kernelContainer.CatalogItemPtrList;
                            e.forEach(e => {
                                let n = e.count || 1;
                                for (let i = 0; i < n; i++) e.count || (e.count = 0), t.push_back(this._rapiItemToKernelItem(e))
                            }), this._planInteractionHandler.addPlanObjects(t);
                            const n = this._planInteractionHandler.getPlan().extRef.jsObject;
                            await Promise.all(n.getStaticPlanObjectViewModels().map(async e => {
                                if (e.needsRapiItem()) {
                                    const t = await this._rapiAccess.getItem(e.getPlanObject().getCatalogItemId());
                                    e.setRapiItem(t)
                                }
                            }))
                        }
                        _rapiItemToKernelItem(e) {
                            let t = new this._kernelContainer.CatalogItem(e.id),
                                n = t.size;
                            return n.x = e.width || 0, n.y = e.depth || 0, n.z = e.height || 0, t.size = n, t.flipable = e.flipable, t.layer = e.layer, t.orderable = e.orderable, t.scaleable = e.scaleable, t.type = e.type || "", t.detailType = e.type || "", t.configuration = e.configuration || "", t
                        }
                        onLoadComponentError(e) {}
                        configurationLoaded(e, t, n, i, a) {}
                        componentDefinitionLoaded(e, t) {}
                        componentDefinitionLoadingError(e, t) {}
                        configurationLoadingError() {}
                        componentConfigurationUpdated(e) {}
                        componentParameters() {}
                        requestComponentDimensions() {}
                        planObjectCreated(e, t) {}
                        planObjectUpdated(e) {}
                        planObjectConfigurationUpdated(e, t, n) {}
                        planObjectDeleted() {}
                        requestPlanObjectDimensions() {}
                        cleanUpCallbacks() {
                            super.cleanUpCallbacks(), this._kernelContainer.unregisterPlannerCallback(this)
                        }
                        registerCallbacks() {
                            super.registerCallbacks(), this._kernelContainer.registerPlannerCallback(this)
                        }
                        requestExternalMesh(e, t) {
                            return new Promise((n, a) => {
                                this._rapiAccess.getMesh(e, i["n"], t).then(i => {
                                    fetch(new Request(this._dataSyncer.requestAsset(i.url, !0))).then(e => e.arrayBuffer()).then(i => {
                                        try {
                                            this._kernelInstance.addMeshCorto(e, t, new Uint8Array(i)), n()
                                        } catch (e) {
                                            console.error(e), n()
                                        }
                                    }).catch(e => {
                                        console.error(e), a(e)
                                    })
                                }, e => {
                                    console.error(e), a(e)
                                })
                            })
                        }
                        Editor3dRootComponentCreated(e, t, n, i) {
                            this._configuratorKernelCallbackListener.forEach(a => a.Editor3dComponentCreated(e, t, n, i, !0))
                        }
                        Editor3dPlanObjectConstructionDone(e) {}
                        Editor3dBeginGroup() {}
                        Editor3dEndGroup() {}
                        Editor3dSetMaterial() {}
                        Editor3dLoadMaterial() {}
                        Editor3dAddDockPreview(e, t) {}
                        Editor3dSetPreviewPointAssociations(e, t) {}
                        Editor3dSetPreviewLineAssociations(e, t) {}
                        Editor3dPreviewConstructionDone(e, t) {}
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
                        planElementRemoved(e) {
                            this._plannerKernelCallbackListener.forEach(t => t.planElementRemoved(e));
                            const t = e.extRef.jsObject.getContainer();
                            this._plannerKernelCallbackListener.forEach(e => e.removePlanObjectFromScene(t)), this._decoupleReferences(e)
                        }
                        handlerSwitchedPlans(e, t) {
                            if (this._decoupleReferences(e), t) {
                                let e = new v(this._creator_);
                                e.setReference(t), this._coupleReferences(e, t), this._plannerKernelCallbackListener.forEach(t => t.handlerSwitchedPlans(e))
                            }
                        }
                        planBoundsChanged() {
                            this._plannerKernelCallbackListener.forEach(e => e.planBoundsChanged())
                        }
                        planCleared() {}
                        planCompletelyLoaded(e) {
                            this._plannerKernelCallbackListener.forEach(t => t.planCompletelyLoaded(e))
                        }
                        planElement3dMeshChanged(e, t) {
                            if (t.extRef) {
                                const e = t.extRef.jsObject;
                                for (let t = e.getObject().children.length - 1; t >= 0; t--) e.getObject().remove(e.getObject().children[t])
                            }
                            this.planModelViewHelper.requestMesh3d(t)
                        }
                        planElementAdded(e, t) {
                            if (e && e.extRef)
                                if (t.getType() === this._kernelContainer.PlanElementType.OBJECT) {
                                    let n, i = t;
                                    i.hasConfiguration() ? (n = new u(i), this._coupleReferences(n, i), e.extRef.jsObject.addPlanElementViewModel(n)) : (n = new g(i), this._coupleReferences(n, i), e.extRef.jsObject.addPlanElementViewModel(n)), this._plannerKernelCallbackListener.forEach(e => e.addPlanObjectToScene(n.getContainer()))
                                } else {
                                    let n, i = t;
                                    if (t.getType() === this._kernelContainer.PlanElementType.WALL ? n = new f(i) : t.getType() === this._kernelContainer.PlanElementType.FLOOR ? n = new C(i) : t.getType() === this._kernelContainer.PlanElementType.CEILING && (n = new y(i)), !n) return;
                                    n.setPrimaryColor(this._initData.colors.PRIMARY), this._coupleReferences(n, i), e.extRef.jsObject.addPlanElementViewModel(n), this.planModelViewHelper.requestMesh3d(t)
                                }
                        }
                        planElementChanged(e, t) {
                            if (t.extRef) {
                                let n = t.extRef.jsObject;
                                n.update(), this._plannerKernelCallbackListener.forEach(t => t.planElementChanged(e, n))
                            }
                        }
                        planHistoryStateChanged() {}
                        planObjectConfigurationCreated(e, t) {}
                        planObjectConfigurationLoaded(e, t, n) {
                            e && e.extRef && t && t.extRef && t.extRef.jsObject.getPlanObject().getConfigurationRuntimeId() > 0 && this._plannerKernelCallbackListener.forEach(i => i.planObjectConfigurationLoaded(e, t, n))
                        }
                        requestCatalogItem(e) {}
                        startedDrawing() {}
                        stoppedDrawing() {}
                        updateMesh2d() {}
                        beginConstruction() {}
                        addMesh(e, t, n, i, a, s) {
                            this._plannerKernelCallbackListener.forEach(r => r.addMesh(e, t, n, i, a, s))
                        }
                        endConstruction() {}
                        beginPlanConstruction(e) {
                            this._plannerKernelCallbackListener.forEach(t => t.beginPlanConstruction(e))
                        }
                        addPlanMesh(e, t, n, i, a, s, r) {
                            this._plannerKernelCallbackListener.forEach(o => o.addPlanMesh(e, t, n, i, a, s, r))
                        }
                        endPlanConstruction(e) {
                            this._plannerKernelCallbackListener.forEach(t => t.endPlanConstruction(e))
                        }
                        _coupleReferences(e, t) {
                            let n = new this._kernelContainer.EMSReference;
                            n.jsObject = e, t.extRef = n
                        }
                        _decoupleReferences(e) {
                            e && e.extRef && (e.extRef.jsObject.clearReference(), e.extRef.jsObject = null, e.extRef.delete(), e.extRef = null)
                        }
                    }
                    return Object(i["B"])([i["Y"]], e.prototype, "_kernelAccessCallback", void 0), Object(i["B"])([i["Y"]], e.prototype, "_roomlePlannerUiCallback", void 0), Object(i["B"])([i["Y"]], e.prototype, "_initData", void 0), e
                })(),
                L = (() => {
                    class e {
                        constructor(e) {
                            this._initialStack = [], this._creator_ = e, this._lifeCycleManager.addEventListener(this)
                        }
                        _setInitialStack(e) {
                            this._initialStack = [...e]
                        }
                        _setCallbacks(e) {
                            this._callbacks = e
                        }
                        _resetCanvasStack() {
                            this._canvasStack = [...this._initialStack]
                        }
                        init(e, t) {
                            this._setInitialStack(e), this._resetCanvasStack(), this._setCallbacks(t)
                        }
                        bringIntoForeground(e) {
                            const t = this._domHelper.element.querySelectorAll("canvas");
                            let n = !1;
                            t.forEach(t => {
                                if (t.classList.contains(e)) {
                                    if (!t.classList.contains("foreground")) {
                                        const t = this.current();
                                        t && e !== t && (this._canvasStack.push(e), n = !0), t || (n = !0)
                                    }
                                    t.classList.remove("background"), t.classList.add("foreground")
                                } else t.classList.remove("foreground"), t.classList.add("background")
                            }), n && this._callbacks.onBackStackChanged(this._canvasStack)
                        }
                        current() {
                            return this._canvasStack[this._canvasStack.length - 1]
                        }
                        back() {
                            if (1 === this._canvasStack.length) return;
                            let e = this._canvasStack.pop();
                            this.bringIntoForeground(this.current()), e === r["m"].HSC && this._callbacks.onCloseHSC(), this._callbacks.onBackStackChanged(this._canvasStack)
                        }
                        backTo(e) {
                            if (1 !== this._canvasStack.length && this.current() !== e)
                                for (; this._canvasStack.length > 0;) {
                                    let t = this.current();
                                    if (t === e) {
                                        this.bringIntoForeground(t);
                                        break
                                    }
                                    t === r["m"].HSC && this._callbacks.onCloseHSC(), this._canvasStack.pop(), this._callbacks.onBackStackChanged(this._canvasStack)
                                }
                        }
                        pause() {
                            this._resetCanvasStack()
                        }
                        resume() {}
                        destroy() {}
                    }
                    return Object(i["B"])([i["Y"]], e.prototype, "_domHelper", void 0), Object(i["B"])([i["Y"]], e.prototype, "_lifeCycleManager", void 0), e
                })();
            class P {
                constructor(e) {
                    const {
                        planElementViewModel: t
                    } = e;
                    this.planElementViewModel = t
                }
            }
            const S = [new i["bb"]("script-loader", r["k"]), new i["bb"]("dom-helper", r["r"], 1), new i["bb"]("planner-input-manager", class extends r["g"] {
                _canDrag(e) {
                    return !0
                }
            }, 1), new i["bb"]("planner-kernel-access", M), new i["bb"]("logger", i["m"]), new i["bb"]("planner-mesh-generator", class extends o["a"] {
                constructor(e) {
                    super(e), this._wallMeshes = [], this._defaultMaterial = new THREE.MeshStandardMaterial({
                        color: "#ffffff",
                        roughness: 1,
                        metalness: 0,
                        opacity: 1,
                        envMap: null
                    }), this._environmentLoader.setEnvMap(this._defaultMaterial)
                }
                generateGeometry(e = null, t, n, i, a, s = !1) {
                    let r;
                    return r = s ? this._generateGeometry(e, t, n, i, a).clone() : this._generateGeometry(e, t, n, i, a), r
                }
                generateMesh(e = null, t, n, i, a, s, r, o = !1) {
                    const h = this.generateGeometry(e, n, i, a, s, o),
                        l = new THREE.Mesh(h, this._previewMaterial);
                    return l.receiveShadow = !0, l.castShadow = !0, l.layers.set(3), !t && r && 7 !== r.value ? (console.warn("material is undefined"), l) : (this.setMaterial(l, t, r), this._checkWallMaterial(l, r), l)
                }
                setMaterial(e, t, n) {
                    if (e.userData.material = Object(i["x"])(t, n), Object(a["m"])(t)) t ? this._assignMaterial(e, t).then(() => {
                        this._materialLoaded && this._materialLoaded()
                    }) : (console.warn("Used default material because material is empty"), this.changeMaterialOfMesh(e, this._defaultMaterial));
                    else {
                        if (!t) return void this.changeMaterialOfMesh(e, this._defaultMaterial);
                        2 === (t = t).getSourceType().value ? this._assignMaterial(e, t.materialId).then(() => {
                            this._materialLoaded && this._materialLoaded()
                        }) : 1 === t.getSourceType().value ? this._assignItem(e, t.catalogItemId) : 3 === t.getSourceType().value ? this._assignRGB(e, t.rgbValue) : 0 === t.getSourceType().value ? this.changeMaterialOfMesh(e, this._defaultMaterial) : (this.changeMaterialOfMesh(e, this._defaultMaterial), 1 !== n.value && 7 !== n.value && 3 !== n.value && console.warn("Used default material because material is not supported", t))
                    }
                }
                set maxAnisotropy(e) {
                    this._maxAnisotropy = e
                }
                _checkWallMaterial(e, t) {
                    t && 1 === t.value && (e.renderOrder = 5, this._wallMeshes.push(e))
                }
                clear() {
                    super.clear(), this.clearWallMeshes()
                }
                clearWallMeshes() {
                    this._wallMeshes.forEach(e => {
                        Object(i["u"])(e)
                    }), this._wallMeshes = []
                }
                get wallMeshes() {
                    return this._wallMeshes
                }
            }), new i["bb"]("rapi-access", i["cb"]), new i["bb"]("roomle-planner-ui-callback", class extends o["b"] {
                constructor(e) {
                    super(e), this.onItemsLoaded = () => {}, this.onBackStackChanged = e => {}, this.onCameraChanged = e => {}, this.onTotalFloorAreaChanged = e => {}, this.onPlanInteractionHandlerCreated = e => {}, this.onPlannerKernelIsReady = e => {}, this.onConfiguratorKernelIsReady = (e, t) => {}, this.onSelectionChange = (e, t, n, i) => {}, this.onSelectionCancel = () => {}, this.onPlanChanged = () => {}, this.onCompletelyLoaded = () => {}
                }
            }), new i["bb"]("backstack", L), new i["bb"]("planner-selection-handler", class extends r["d"] {
                constructor() {
                    super(...arguments), this._selectionMode = "standard", this._selectedPlanElementViewModels = new Map
                }
                check(e) {
                    "standard" === this._selectionMode && this._checkStandard(e), "multiselect" === this._selectionMode && this._checkMulti(e)
                }
                cancelSelection() {
                    0 !== this._selectedPlanElementViewModels.size && this._selectedPlanElementViewModels.forEach((e, t) => {
                        this._selectedPlanElementViewModels.delete(t), this.dispatchEvent(1, new P({
                            planElementViewModel: e
                        }))
                    })
                }
                _checkStandard(e) {
                    if (this._selectedPlanElementViewModels.has(e.getId())) return this._selectedPlanElementViewModels.delete(e.getId()), void this.dispatchEvent(1, new P({
                        planElementViewModel: e
                    }));
                    this._selectedPlanElementViewModels.size > 0 && this._selectedPlanElementViewModels.forEach((e, t) => {
                        this._selectedPlanElementViewModels.delete(t), this.dispatchEvent(1, new P({
                            planElementViewModel: e
                        }))
                    }), this._selectedPlanElementViewModels.set(e.getId(), e), this.dispatchEvent(0, new P({
                        planElementViewModel: e
                    }))
                }
                _checkMulti(e) {
                    if (this._selectedPlanElementViewModels.has(e.getId())) return this._selectedPlanElementViewModels.delete(e.getId()), void this.dispatchEvent(1, new P({
                        planElementViewModel: e
                    }));
                    this._selectedPlanElementViewModels.set(e.getId(), e), this.dispatchEvent(0, new P({
                        planElementViewModel: e
                    }))
                }
                setSelectionMode(e) {
                    this._selectionMode = e
                }
                getSelectionMode() {
                    return this._selectionMode
                }
                hasSelection() {
                    return this._selectedPlanElementViewModels.size > 0
                }
                getSelectedIds() {
                    let e = [];
                    return this._selectedPlanElementViewModels.forEach(t => e.push(t.getId())), e
                }
                isSelected(e) {
                    return !!this._selectedPlanElementViewModels.get(e)
                }
            })];
            class R extends r["i"] {
                setupGlobals() {}
                setupDependencies() {
                    i["gb"].setup(S), this.lookup("logger", this._context), this.lookup("planner-kernel-access", this._context)
                }
                cleanUpGlobals() {
                    throw new Error("Method not implemented.")
                }
                cleanUpDependencies() {
                    throw new Error("Method not implemented.")
                }
                bootFinished() {
                    this._planner = new w(this._context), this._planner.getMain = () => this, window.RoomlePlanner || (window.RoomlePlanner = this._planner)
                }
                getApi() {
                    return this._planner
                }
                getContextName() {
                    return "planner"
                }
            }
        },
        ea7d: function(e, t, n) {
            "use strict";
            n.d(t, "a", (function() {
                return r
            })), n.d(t, "b", (function() {
                return o
            }));
            var i = n("12df"),
                a = n("4a09");
            class s {
                constructor(e, t) {
                    this._waitingPromises = [], this._errorCallback = () => {}, Promise.allSettled = Promise.allSettled || (e => Promise.all(e.map(e => e.then(e => ({
                        status: "fulfilled",
                        value: e
                    })).catch(e => ({
                        status: "rejected",
                        reason: e
                    }))))), e && this.registerCallback(e), t && (this._errorCallback = t)
                }
                push(e) {
                    this._waitingPromises.push(e), Promise.all(this._waitingPromises).then(e => {
                        e.length === this._waitingPromises.length && this._callback && (this._callback(e), this._waitingPromises = [])
                    }, this._errorCallback)
                }
                finished(e = !1) {
                    return new Promise((t, n) => {
                        const i = e ? "allSettled" : "all";
                        Promise[i](this._waitingPromises).then(e => {
                            if ("allSettled" === i) {
                                const n = [];
                                e.forEach(({
                                    value: e,
                                    status: t
                                }) => {
                                    "fulfilled" === t && n.push(e)
                                }), t(n)
                            } else t(e)
                        }, e => {
                            n(e)
                        })
                    })
                }
                registerCallback(e) {
                    this._callback = e
                }
                unregisterCallback() {
                    this._callback = null
                }
                get length() {
                    return this._waitingPromises.length
                }
            }
            let r = (() => {
                class e {
                    constructor(e) {
                        this.materialQueue = new s, this._maxAnisotropy = 1, this._maxTextures = 16, this._textureLoader = new THREE.TextureLoader, this._creator_ = e, this._previewMaterial = new THREE.MeshStandardMaterial({
                            color: i["l"],
                            roughness: i["p"],
                            metalness: i["r"]
                        }), this._environmentLoader.setEnvMap(this._previewMaterial)
                    }
                    _generateGeometry(e, t, n, i, a) {
                        let s;
                        if (e && this._cacheHolder.geometryCache.has(e)) s = this._cacheHolder.geometryCache.get(e);
                        else {
                            s = new THREE.Geometry, s.faceVertexUvs = [], s.faceVertexUvs[0] = [];
                            for (let e = 0, n = t.length; e < n; e += 3) s.vertices.push(new THREE.Vector3(t[e] / 1e3, t[e + 2] / 1e3, t[e + 1] / -1e3));
                            let r = 0,
                                o = 0,
                                h = 0,
                                l = 0,
                                c = 0,
                                d = 0,
                                _ = 0,
                                p = 0,
                                m = 0,
                                g = 0,
                                u = [];
                            for (let e = 0, t = n.length; e < t; e += 3) o = e, h = e + 1, l = e + 2, c = 3 * n[o], d = 3 * n[h], _ = 3 * n[l], u = [new THREE.Vector3(a[c], a[c + 2], -1 * a[c + 1]), new THREE.Vector3(a[d], a[d + 2], -1 * a[d + 1]), new THREE.Vector3(a[_], a[_ + 2], -1 * a[_ + 1])], s.faces.push(new THREE.Face3(n[o], n[h], n[l], u)), p = 2 * n[o], m = 2 * n[h], g = 2 * n[l], s.faceVertexUvs[0][r] = [], s.faceVertexUvs[0][r][0] = new THREE.Vector2(i[p], i[p + 1]), s.faceVertexUvs[0][r][1] = new THREE.Vector2(i[m], i[m + 1]), s.faceVertexUvs[0][r][2] = new THREE.Vector2(i[g], i[g + 1]), r++;
                            e && this._cacheHolder.geometryCache.set(e, s)
                        }
                        return s
                    }
                    changeMaterialOfMesh(e, t) {
                        e && t ? (e.material = t, e.material.transparent || 0 === e.material.opacity || e.material.transmission > 0 ? (e.castShadow = !1, e.receiveShadow = !1) : (e.castShadow = !0, e.receiveShadow = !0), e.material.needsUpdate = !0) : console.warn("could not assign material to mesh", {
                            mesh: e
                        }, {
                            material: t
                        })
                    }
                    _createMaterial(e, t, n, s, r) {
                        if (this._cacheHolder.materialCache.has(e)) t();
                        else if (e.startsWith("benchmarkMaterial")) {
                            let o = Object(a["e"])(e),
                                h = Object(i["i"])(o, this._environmentLoader);
                            this._loadBenchmarkTextures(o, h, s, r).then(t, n)
                        } else this._rapiAccess.getMaterial(e).then(e => {
                            let a = Object(i["i"])(e, this._environmentLoader);
                            this._loadTextures(e, a, s, r).then(t, n)
                        }, n)
                    }
                    _loadBenchmarkTextures(e, t, n = 1, s = 1) {
                        return new Promise((r, o) => {
                            const h = Object(a["g"])(e.id);
                            Object(i["k"])(this._dataSyncer.requestAsset(h.image, !0), h, t, this._maxAnisotropy, n / (0 === h.mmWidth ? 1 : h.mmWidth), s / (0 === h.mmHeight ? 1 : h.mmHeight), this._maxTextures).then(() => {
                                this._cacheHolder.materialCache.set(e.id, t), r()
                            }, o)
                        })
                    }
                    _loadTextures(e, t, n = 1, a = 1) {
                        return new Promise((s, r) => {
                            if (!e.textures || e.textures && 0 === e.textures.length) return this._cacheHolder.materialCache.set(e.id, t), s();
                            this._rapiAccess.getTexturesOf(e).then(o => {
                                let h = [];
                                o.forEach(e => {
                                    h.push(Object(i["k"])(this._dataSyncer.requestAsset(e.image, !0), e, t, this._maxAnisotropy, n / (0 === e.mmWidth ? 1 : e.mmWidth), a / (0 === e.mmHeight ? 1 : e.mmHeight), this._maxTextures))
                                }), Promise.all(h).then(() => {
                                    this._cacheHolder.materialCache.set(e.id, t), s()
                                }, r)
                            })
                        })
                    }
                    _loadMaterial(e, t, n) {
                        return new Promise((i, a) => {
                            this._singlePromiseFactory.create(6, e, (i, a) => this._createMaterial(e, i, a, t, n)).then(() => {
                                setTimeout(() => i(this._cacheHolder.materialCache.get(e)), 0)
                            }, a)
                        })
                    }
                    _assignMaterial(e, t) {
                        return this._cacheHolder.materialCache.has(t) ? (this.changeMaterialOfMesh(e, this._cacheHolder.materialCache.get(t)), Promise.resolve()) : new Promise((n, i) => {
                            this._loadMaterial(t).then(t => {
                                this.changeMaterialOfMesh(e, t), n()
                            }, i)
                        })
                    }
                    get maxAnisotropy() {
                        return this._maxAnisotropy
                    }
                    set maxAnisotropy(e) {
                        this._maxAnisotropy = e
                    }
                    get maxTextures() {
                        return this._maxTextures
                    }
                    set maxTextures(e) {
                        this._maxTextures = e
                    }
                    clear() {
                        this._cacheHolder.clear()
                    }
                    _assignRGB(e, t) {
                        return new Promise(n => {
                            let i, a = "rbg" + JSON.stringify(t);
                            this._cacheHolder.materialCache.has(a) ? i = this._cacheHolder.materialCache.get(a) : (i = new THREE.MeshStandardMaterial({
                                color: t
                            }), this._environmentLoader.setEnvMap(i), this._cacheHolder.materialCache.set(a, i)), this.changeMaterialOfMesh(e, i), setTimeout(() => n(), 0)
                        })
                    }
                    _assignItem(e, t) {
                        return new Promise((n, i) => {
                            if (this._cacheHolder.materialCache.has(t)) return this.changeMaterialOfMesh(e, this._cacheHolder.materialCache.get(t)), void n();
                            this._rapiAccess.getItem(t).then(a => {
                                if (a.topImage) this._textureLoader.load(a.topImage, i => {
                                    i.anisotropy = this._maxAnisotropy, i.wrapS = THREE.RepeatWrapping, i.wrapT = THREE.RepeatWrapping;
                                    let s = new THREE.Vector2(1, 1);
                                    a.width > 0 && (s.x = 1 / a.width), a.depth > 0 && (s.y = 1 / a.depth), i.repeat.set(s.x, s.y);
                                    const r = new THREE.MeshPhysicalMaterial({
                                        map: i,
                                        roughness: .5,
                                        metalness: .1
                                    });
                                    this._environmentLoader.setEnvMap(r), this._cacheHolder.materialCache.set(t, r), this.changeMaterialOfMesh(e, r), setTimeout(() => n(), 0)
                                });
                                else {
                                    const e = "can not set material, catalog item top image is not set";
                                    console.warn(e), i(e)
                                }
                            }, i)
                        })
                    }
                    _generateMesh(e = 0, t = null, n, i, a, s, r, o = !1) {
                        return this._plannerMeshGenerator.generateMesh(t, n, i, a, s, r)
                    }
                    setMaterialLoadedListener(e) {
                        this._materialLoaded = e
                    }
                    removeMaterialLoadedListener() {
                        this._materialLoaded = void 0
                    }
                }
                return Object(i["B"])([i["Y"]], e.prototype, "_rapiAccess", void 0), Object(i["B"])([i["Y"]], e.prototype, "_environmentLoader", void 0), Object(i["B"])([i["Y"]], e.prototype, "_dataSyncer", void 0), Object(i["B"])([i["Y"]], e.prototype, "_singlePromiseFactory", void 0), Object(i["B"])([i["Y"]], e.prototype, "_cacheHolder", void 0), Object(i["B"])([i["Y"]], e.prototype, "_plannerMeshGenerator", void 0), e
            })();
            class o {
                constructor(e) {
                    return this._isMute = !1, this._creator_ = e, Object(a["h"])(this, "_isMute", {
                        enumerable: !1,
                        writable: !1
                    }), Object(a["h"])(o.prototype, "_setMute", {
                        enumerable: !1,
                        writable: !1
                    }), Object(a["h"])(o.prototype, "mute", {
                        enumerable: !1,
                        writable: !1
                    }), Object(a["h"])(o.prototype, "unmute", {
                        enumerable: !1,
                        writable: !1
                    }), new Proxy(this, this)
                }
                _setMute(e) {
                    Object(a["k"])(this, "_isMute", !0), this._isMute = e, Object(a["k"])(this, "_isMute", !1)
                }
                mute() {
                    this._setMute(!0)
                }
                unmute() {
                    this._setMute(!1)
                }
                get(e, t) {
                    return this._isMute && "function" == typeof this[t] && "on" === t.substr(0, 2) ? () => {} : this[t]
                }
            }
        }
    }
]);
//# sourceMappingURL=chunk-62cb4e26.a3126ec0.js.map