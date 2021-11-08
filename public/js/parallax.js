(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/parallax"],{

/***/ "./resources/js/parallax.js":
/*!**********************************!*\
  !*** ./resources/js/parallax.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

var Parallax = __webpack_require__(/*! parallax-js */ "./node_modules/parallax-js/dist/parallax.js");

window.addEventListener("load", function (event) {
  var scene = document.getElementById('scene');
  var parallaxInstance = new Parallax(scene, {
    relativeInput: true,
    hoverOnly: true,
    selector: '.layer',
    invertX: true,
    invertY: true
  });
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["/js/vendor"], () => (__webpack_exec__("./resources/js/parallax.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);