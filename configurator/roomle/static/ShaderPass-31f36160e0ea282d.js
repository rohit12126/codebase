THREE.ShaderPass=function(e,t){THREE.Pass.call(this),this.textureID=void 0!==t?t:"tDiffuse",e instanceof THREE.ShaderMaterial?(this.uniforms=e.uniforms,this.material=e):e&&(this.uniforms=THREE.UniformsUtils.clone(e.uniforms),this.material=new THREE.ShaderMaterial({defines:Object.assign({},e.defines),uniforms:this.uniforms,vertexShader:e.vertexShader,fragmentShader:e.fragmentShader})),this.fsQuad=new THREE.Pass.FullScreenQuad(this.material)},THREE.ShaderPass.prototype=Object.assign(Object.create(THREE.Pass.prototype),{constructor:THREE.ShaderPass,render:function(e,t,r){this.uniforms[this.textureID]&&(this.uniforms[this.textureID].value=r.texture),this.fsQuad.material=this.material,this.renderToScreen?(e.setRenderTarget(null),this.fsQuad.render(e)):(e.setRenderTarget(t),this.clear&&e.clear(e.autoClearColor,e.autoClearDepth,e.autoClearStencil),this.fsQuad.render(e))}});