/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunk"] = self["webpackChunk"] || []).push([["/scripts/app"],{

/***/ "./resources/scripts/app.js":
/*!**********************************!*\
  !*** ./resources/scripts/app.js ***!
  \**********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! alpinejs */ \"./node_modules/alpinejs/dist/alpine.js\");\n/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(alpinejs__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! aos */ \"./node_modules/aos/dist/aos.js\");\n/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(aos__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! isotope-layout */ \"./node_modules/isotope-layout/js/isotope.js\");\n/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(isotope_layout__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var tiny_slider_src_tiny_slider__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! tiny-slider/src/tiny-slider */ \"./node_modules/tiny-slider/src/tiny-slider.js\");\n/* harmony import */ var tippy_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! tippy.js */ \"./node_modules/tippy.js/dist/tippy.esm.js\");\n/* harmony import */ var tippy_js_dist_tippy_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! tippy.js/dist/tippy.css */ \"./node_modules/tippy.js/dist/tippy.css\");\n/* harmony import */ var _fellows__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./fellows */ \"./resources/scripts/fellows.js\");\n/* harmony import */ var _fortawesome_fontawesome_svg_core__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @fortawesome/fontawesome-svg-core */ \"./node_modules/@fortawesome/fontawesome-svg-core/index.es.js\");\n/* harmony import */ var _fortawesome_free_regular_svg_icons__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @fortawesome/free-regular-svg-icons */ \"./node_modules/@fortawesome/free-regular-svg-icons/index.es.js\");\n/* harmony import */ var _fortawesome_free_solid_svg_icons__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @fortawesome/free-solid-svg-icons */ \"./node_modules/@fortawesome/free-solid-svg-icons/index.es.js\");\n/* harmony import */ var _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @fortawesome/free-brands-svg-icons */ \"./node_modules/@fortawesome/free-brands-svg-icons/index.es.js\");\n/* provided dependency */ var $ = __webpack_require__(/*! jquery */ \"jquery\");\n/**\n * External Dependencies\n */\n\n\nvar feather = __webpack_require__(/*! feather-icons */ \"./node_modules/feather-icons/dist/feather.js\");\n\n\n\n\n\n // optional for styling\n\n\n\n\n\n\n$(document).ready(function () {\n  feather.replace();\n  (0,tippy_js__WEBPACK_IMPORTED_MODULE_7__.default)('[data-tippy-content]'); // Font Awesome Initiation\n\n  _fortawesome_fontawesome_svg_core__WEBPACK_IMPORTED_MODULE_6__.library.add(_fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_8__.faFacebook, _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_8__.faTwitter, _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_8__.faInstagram, _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_8__.faYoutube, _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_8__.faLinkedin, _fortawesome_free_regular_svg_icons__WEBPACK_IMPORTED_MODULE_9__.faNewspaper, _fortawesome_free_solid_svg_icons__WEBPACK_IMPORTED_MODULE_10__.faArrowAltCircleRight, _fortawesome_free_solid_svg_icons__WEBPACK_IMPORTED_MODULE_10__.faEnvelope, _fortawesome_free_solid_svg_icons__WEBPACK_IMPORTED_MODULE_10__.faChevronCircleRight);\n  _fortawesome_fontawesome_svg_core__WEBPACK_IMPORTED_MODULE_6__.dom.watch(); // Animate on Scroll\n\n  setTimeout(function () {\n    aos__WEBPACK_IMPORTED_MODULE_1___default().init({\n      duration: 1200,\n      offset: 120,\n      once: false\n    });\n  }, 200);\n\n  if (document.getElementById(\"carousel\")) {\n    var slider = (0,tiny_slider_src_tiny_slider__WEBPACK_IMPORTED_MODULE_3__.tns)({\n      container: '#carousel',\n      loop: true,\n      mode: 'gallery',\n      items: 1,\n      slideBy: 'page',\n      nav: false,\n      controls: true,\n      autoplay: false,\n      speed: 400,\n      autoplayButtonOutput: false,\n      mouseDrag: true,\n      lazyload: true,\n      controlsContainer: '#carousel-controls'\n    });\n  }\n});\n\nvar productCatsCarouselInit = function productCatsCarouselInit() {\n  var productCatsSlider = document.querySelectorAll('.immersive-carousel'); // container above slider\n\n  productCatsSlider.forEach(function (sliderWrapper) {\n    var slider = sliderWrapper.querySelector('.immersive-carousel__slider'); // container with slider\n    //const navContainer = sliderWrapper.querySelector('.immersive-carousel__thumbs');\n\n    var controlsContainer = sliderWrapper.querySelector('.immersive-carousel__controls');\n    var catSlider = (0,tiny_slider_src_tiny_slider__WEBPACK_IMPORTED_MODULE_3__.tns)({\n      container: slider,\n      loop: true,\n      mode: 'gallery',\n      items: 1,\n      slideBy: 'page',\n      nav: false,\n      controls: true,\n      autoplay: false,\n      speed: 400,\n      autoplayButtonOutput: false,\n      mouseDrag: true,\n      lazyload: true,\n      //navContainer: navContainer,\n      navAsThumbnails: true,\n      controlsContainer: controlsContainer\n    });\n  });\n};\n\nif (document.querySelectorAll('.immersive-carousel')) {\n  console.log('hello');\n  productCatsCarouselInit();\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2NyaXB0cy9hcHAuanM/Y2U0YyJdLCJuYW1lcyI6WyJmZWF0aGVyIiwicmVxdWlyZSIsIiQiLCJ0aXBweSIsImxpYnJhcnkiLCJkb20iLCJzZXRUaW1lb3V0IiwiQU9TIiwiZHVyYXRpb24iLCJvZmZzZXQiLCJvbmNlIiwiZG9jdW1lbnQiLCJzbGlkZXIiLCJ0bnMiLCJjb250YWluZXIiLCJsb29wIiwibW9kZSIsIml0ZW1zIiwic2xpZGVCeSIsIm5hdiIsImNvbnRyb2xzIiwiYXV0b3BsYXkiLCJzcGVlZCIsImF1dG9wbGF5QnV0dG9uT3V0cHV0IiwibW91c2VEcmFnIiwibGF6eWxvYWQiLCJjb250cm9sc0NvbnRhaW5lciIsInByb2R1Y3RDYXRzQ2Fyb3VzZWxJbml0IiwicHJvZHVjdENhdHNTbGlkZXIiLCJzbGlkZXJXcmFwcGVyIiwiY2F0U2xpZGVyIiwibmF2QXNUaHVtYm5haWxzIiwiY29uc29sZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFDQTtBQUNBOztBQUNBLElBQU1BLE9BQU8sR0FBR0MsbUJBQU8sQ0FBdkIsbUVBQXVCLENBQXZCOztBQUNBO0FBQ0E7QUFDQTtBQUNBO0NBQ2tDOztBQUNsQztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBRUFDLENBQUMsQ0FBREEsUUFBQyxDQUFEQSxPQUFrQixZQUFNO0FBQ3RCRixTQUFPLENBQVBBO0FBQ0FHLG1EQUFLLENBRmlCLHNCQUVqQixDQUFMQSxDQUZzQixDQUd0Qjs7QUFDQUM7QUFDQUMsNkVBTHNCLENBTXRCOztBQUNBQyxZQUFVLENBQUMsWUFBVTtBQUNuQkMsb0RBQVM7QUFDUEMsY0FBUSxFQUREO0FBRVBDLFlBQU0sRUFGQztBQUdQQyxVQUFJLEVBQVE7QUFITCxLQUFUSDtBQURRLEtBQVZELEdBQVUsQ0FBVkE7O0FBT0EsTUFBS0ssUUFBUSxDQUFSQSxlQUFMLFVBQUtBLENBQUwsRUFBMkM7QUFDekMsUUFBSUMsTUFBTSxHQUFHQyxnRUFBRyxDQUFDO0FBQ2ZDLGVBQVMsRUFETTtBQUVmQyxVQUFJLEVBRlc7QUFHZkMsVUFBSSxFQUhXO0FBSWZDLFdBQUssRUFKVTtBQUtmQyxhQUFPLEVBTFE7QUFNZkMsU0FBRyxFQU5ZO0FBT2ZDLGNBQVEsRUFQTztBQVFmQyxjQUFRLEVBUk87QUFTZkMsV0FBSyxFQVRVO0FBVWZDLDBCQUFvQixFQVZMO0FBV2ZDLGVBQVMsRUFYTTtBQVlmQyxjQUFRLEVBWk87QUFhZkMsdUJBQWlCLEVBQUU7QUFiSixLQUFELENBQWhCO0FBZUQ7QUE5Qkh4Qjs7QUFrQ0EsSUFBTXlCLHVCQUF1QixHQUFHLFNBQTFCQSx1QkFBMEIsR0FBTTtBQUNwQyxNQUFNQyxpQkFBaUIsR0FBR2pCLFFBQVEsQ0FBUkEsaUJBRFUscUJBQ1ZBLENBQTFCLENBRG9DLENBQ3dDOztBQUM1RWlCLG1CQUFpQixDQUFqQkEsUUFBMEIseUJBQWlCO0FBQ3pDLFFBQU1oQixNQUFNLEdBQUdpQixhQUFhLENBQWJBLGNBRDBCLDZCQUMxQkEsQ0FBZixDQUR5QyxDQUNrQztBQUMzRTs7QUFDQSxRQUFNSCxpQkFBaUIsR0FBR0csYUFBYSxDQUFiQSxjQUExQiwrQkFBMEJBLENBQTFCO0FBQ0EsUUFBTUMsU0FBUyxHQUFHakIsZ0VBQUcsQ0FBQztBQUNwQkMsZUFBUyxFQURXO0FBRXBCQyxVQUFJLEVBRmdCO0FBR3BCQyxVQUFJLEVBSGdCO0FBSXBCQyxXQUFLLEVBSmU7QUFLcEJDLGFBQU8sRUFMYTtBQU1wQkMsU0FBRyxFQU5pQjtBQU9wQkMsY0FBUSxFQVBZO0FBUXBCQyxjQUFRLEVBUlk7QUFTcEJDLFdBQUssRUFUZTtBQVVwQkMsMEJBQW9CLEVBVkE7QUFXcEJDLGVBQVMsRUFYVztBQVlwQkMsY0FBUSxFQVpZO0FBYXBCO0FBQ0FNLHFCQUFlLEVBZEs7QUFlcEJMLHVCQUFpQixFQUFFQTtBQWZDLEtBQUQsQ0FBckI7QUFKRkU7QUFGRjs7QUF5QkEsSUFBSWpCLFFBQVEsQ0FBUkEsaUJBQUoscUJBQUlBLENBQUosRUFBc0Q7QUFDcERxQixTQUFPLENBQVBBO0FBQ0FMLHlCQUF1QjtBQUN4QiIsImZpbGUiOiIuL3Jlc291cmNlcy9zY3JpcHRzL2FwcC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qKlxuICogRXh0ZXJuYWwgRGVwZW5kZW5jaWVzXG4gKi9cbmltcG9ydCAnYWxwaW5lanMnXG5jb25zdCBmZWF0aGVyID0gcmVxdWlyZSgnZmVhdGhlci1pY29ucycpXG5pbXBvcnQgQU9TIGZyb20gJ2Fvcyc7XG5pbXBvcnQgSXNvdG9wZSBmcm9tICdpc290b3BlLWxheW91dCc7XG5pbXBvcnQgeyB0bnMgfSBmcm9tICd0aW55LXNsaWRlci9zcmMvdGlueS1zbGlkZXInXG5pbXBvcnQgdGlwcHkgZnJvbSAndGlwcHkuanMnO1xuaW1wb3J0ICd0aXBweS5qcy9kaXN0L3RpcHB5LmNzcyc7IC8vIG9wdGlvbmFsIGZvciBzdHlsaW5nXG5pbXBvcnQgJy4vZmVsbG93cyc7XG5cbmltcG9ydCB7IGxpYnJhcnksIGRvbSB9IGZyb20gJ0Bmb3J0YXdlc29tZS9mb250YXdlc29tZS1zdmctY29yZSc7XG5pbXBvcnQgeyBmYU5ld3NwYXBlciB9IGZyb20gJ0Bmb3J0YXdlc29tZS9mcmVlLXJlZ3VsYXItc3ZnLWljb25zJztcbmltcG9ydCB7IGZhQXJyb3dBbHRDaXJjbGVSaWdodCwgZmFDaGV2cm9uQ2lyY2xlUmlnaHQsIGZhRW52ZWxvcGUgfSBmcm9tICdAZm9ydGF3ZXNvbWUvZnJlZS1zb2xpZC1zdmctaWNvbnMnO1xuaW1wb3J0IHsgZmFGYWNlYm9vaywgZmFUd2l0dGVyLCBmYUluc3RhZ3JhbSwgZmFZb3V0dWJlLCBmYUxpbmtlZGluIH0gZnJvbSAnQGZvcnRhd2Vzb21lL2ZyZWUtYnJhbmRzLXN2Zy1pY29ucyc7XG5cbiQoZG9jdW1lbnQpLnJlYWR5KCgpID0+IHtcbiAgZmVhdGhlci5yZXBsYWNlKClcbiAgdGlwcHkoJ1tkYXRhLXRpcHB5LWNvbnRlbnRdJyk7XG4gIC8vIEZvbnQgQXdlc29tZSBJbml0aWF0aW9uXG4gIGxpYnJhcnkuYWRkKGZhRmFjZWJvb2ssIGZhVHdpdHRlciwgZmFJbnN0YWdyYW0sIGZhWW91dHViZSwgZmFMaW5rZWRpbiwgZmFOZXdzcGFwZXIsIGZhQXJyb3dBbHRDaXJjbGVSaWdodCwgZmFFbnZlbG9wZSwgZmFDaGV2cm9uQ2lyY2xlUmlnaHQpO1xuICBkb20ud2F0Y2goKVxuICAvLyBBbmltYXRlIG9uIFNjcm9sbFxuICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XG4gICAgQU9TLmluaXQoe1xuICAgICAgZHVyYXRpb246ICAgMTIwMCxcbiAgICAgIG9mZnNldDogICAgIDEyMCxcbiAgICAgIG9uY2U6ICAgICAgIGZhbHNlLFxuICAgIH0pXG4gIH0sMjAwKTtcbiAgaWYgKCBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImNhcm91c2VsXCIpICkge1xuICAgIHZhciBzbGlkZXIgPSB0bnMoe1xuICAgICAgY29udGFpbmVyOiAnI2Nhcm91c2VsJyxcbiAgICAgIGxvb3A6IHRydWUsXG4gICAgICBtb2RlOiAnZ2FsbGVyeScsXG4gICAgICBpdGVtczogMSxcbiAgICAgIHNsaWRlQnk6ICdwYWdlJyxcbiAgICAgIG5hdjogZmFsc2UsICAgIFxuICAgICAgY29udHJvbHM6IHRydWUsXG4gICAgICBhdXRvcGxheTogZmFsc2UsXG4gICAgICBzcGVlZDogNDAwLFxuICAgICAgYXV0b3BsYXlCdXR0b25PdXRwdXQ6IGZhbHNlLFxuICAgICAgbW91c2VEcmFnOiB0cnVlLFxuICAgICAgbGF6eWxvYWQ6IHRydWUsXG4gICAgICBjb250cm9sc0NvbnRhaW5lcjogJyNjYXJvdXNlbC1jb250cm9scycsXG4gICAgfSk7XG4gIH1cblxufSk7XG5cbmNvbnN0IHByb2R1Y3RDYXRzQ2Fyb3VzZWxJbml0ID0gKCkgPT4ge1xuICBjb25zdCBwcm9kdWN0Q2F0c1NsaWRlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5pbW1lcnNpdmUtY2Fyb3VzZWwnKTsgLy8gY29udGFpbmVyIGFib3ZlIHNsaWRlclxuICBwcm9kdWN0Q2F0c1NsaWRlci5mb3JFYWNoKHNsaWRlcldyYXBwZXIgPT4ge1xuICAgIGNvbnN0IHNsaWRlciA9IHNsaWRlcldyYXBwZXIucXVlcnlTZWxlY3RvcignLmltbWVyc2l2ZS1jYXJvdXNlbF9fc2xpZGVyJyk7IC8vIGNvbnRhaW5lciB3aXRoIHNsaWRlclxuICAgIC8vY29uc3QgbmF2Q29udGFpbmVyID0gc2xpZGVyV3JhcHBlci5xdWVyeVNlbGVjdG9yKCcuaW1tZXJzaXZlLWNhcm91c2VsX190aHVtYnMnKTtcbiAgICBjb25zdCBjb250cm9sc0NvbnRhaW5lciA9IHNsaWRlcldyYXBwZXIucXVlcnlTZWxlY3RvcignLmltbWVyc2l2ZS1jYXJvdXNlbF9fY29udHJvbHMnKTtcbiAgICBjb25zdCBjYXRTbGlkZXIgPSB0bnMoe1xuICAgICAgY29udGFpbmVyOiBzbGlkZXIsXG4gICAgICBsb29wOiB0cnVlLFxuICAgICAgbW9kZTogJ2dhbGxlcnknLFxuICAgICAgaXRlbXM6IDEsXG4gICAgICBzbGlkZUJ5OiAncGFnZScsXG4gICAgICBuYXY6IGZhbHNlLCAgICBcbiAgICAgIGNvbnRyb2xzOiB0cnVlLFxuICAgICAgYXV0b3BsYXk6IGZhbHNlLFxuICAgICAgc3BlZWQ6IDQwMCxcbiAgICAgIGF1dG9wbGF5QnV0dG9uT3V0cHV0OiBmYWxzZSxcbiAgICAgIG1vdXNlRHJhZzogdHJ1ZSxcbiAgICAgIGxhenlsb2FkOiB0cnVlLFxuICAgICAgLy9uYXZDb250YWluZXI6IG5hdkNvbnRhaW5lcixcbiAgICAgIG5hdkFzVGh1bWJuYWlsczogdHJ1ZSxcbiAgICAgIGNvbnRyb2xzQ29udGFpbmVyOiBjb250cm9sc0NvbnRhaW5lclxuICAgIH0pO1xuICB9KTtcbn07XG5pZiAoZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmltbWVyc2l2ZS1jYXJvdXNlbCcpKSB7XG4gIGNvbnNvbGUubG9nKCdoZWxsbycpO1xuICBwcm9kdWN0Q2F0c0Nhcm91c2VsSW5pdCgpO1xufSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/scripts/app.js\n");

/***/ }),

/***/ "./resources/scripts/fellows.js":
/*!**************************************!*\
  !*** ./resources/scripts/fellows.js ***!
  \**************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! isotope-layout */ \"./node_modules/isotope-layout/js/isotope.js\");\n/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(isotope_layout__WEBPACK_IMPORTED_MODULE_0__);\n // Isotope\n\nif (document.body.classList.contains('fellows')) {\n  var currentGrid = document.querySelector('.iso-current-fellows .isotope');\n  var pastGrid = document.querySelector('.iso-past-fellows .isotope');\n  var itemSelector = document.querySelector(itemSelector);\n  console.log(currentGrid);\n  console.log(pastGrid);\n  var currentIso = new (isotope_layout__WEBPACK_IMPORTED_MODULE_0___default())(currentGrid, {\n    itemSelector: itemSelector,\n    masonry: {\n      columnWidth: itemSelector\n    },\n    transitionDuration: '0'\n  });\n  var pastIso = new (isotope_layout__WEBPACK_IMPORTED_MODULE_0___default())(pastGrid, {\n    itemSelector: itemSelector,\n    masonry: {\n      columnWidth: itemSelector\n    },\n    transitionDuration: '0'\n  }); // Filters\n\n  var currentFilters = document.querySelectorAll('.iso-current-fellows .filters button');\n  var pastFilters = document.querySelectorAll('.iso-past-fellows .filters button');\n\n  for (var i = 0; i < currentFilters.length; i++) {\n    currentFilters[i].addEventListener('click', function () {\n      console.log(' ' + this.parentElement.getAttribute('class') + ' ' + this.dataset.filter); // document.querySelectorAll('.iso-current-fellows .filters button').classList.add('text-brand');\n      // document.querySelectorAll('.iso-current-fellows .filters button').classList.add('text-current');\n      // this.classList.remove('text-current');\n      // this.classList.add('text-brand');\n\n      var filterValue = this.dataset.filter;\n      currentIso.arrange({\n        filter: filterValue\n      });\n    });\n  }\n\n  for (var _i = 0; _i < pastFilters.length; _i++) {\n    pastFilters[_i].addEventListener('click', function () {\n      console.log(' ' + this.parentElement.getAttribute('class') + ' ' + this.dataset.filter); // this.classList.remove('text-current');\n      // this.classList.add('text-brand');\n\n      var filterValue = this.dataset.filter;\n      pastIso.arrange({\n        filter: filterValue\n      });\n    });\n  }\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2NyaXB0cy9mZWxsb3dzLmpzP2I3N2MiXSwibmFtZXMiOlsiZG9jdW1lbnQiLCJjdXJyZW50R3JpZCIsInBhc3RHcmlkIiwiaXRlbVNlbGVjdG9yIiwiY29uc29sZSIsImN1cnJlbnRJc28iLCJtYXNvbnJ5IiwiY29sdW1uV2lkdGgiLCJ0cmFuc2l0aW9uRHVyYXRpb24iLCJwYXN0SXNvIiwiY3VycmVudEZpbHRlcnMiLCJwYXN0RmlsdGVycyIsImkiLCJmaWx0ZXJWYWx1ZSIsImZpbHRlciJdLCJtYXBwaW5ncyI6Ijs7O0NBRUE7O0FBRUEsSUFBSUEsUUFBUSxDQUFSQSx3QkFBSixTQUFJQSxDQUFKLEVBQWlEO0FBRS9DLE1BQUlDLFdBQVcsR0FBR0QsUUFBUSxDQUFSQSxjQUFsQiwrQkFBa0JBLENBQWxCO0FBQ0EsTUFBSUUsUUFBUSxHQUFNRixRQUFRLENBQVJBLGNBQWxCLDRCQUFrQkEsQ0FBbEI7QUFDQSxNQUFJRyxZQUFZLEdBQUdILFFBQVEsQ0FBUkEsY0FBbkIsWUFBbUJBLENBQW5CO0FBRUFJLFNBQU8sQ0FBUEE7QUFDQUEsU0FBTyxDQUFQQTtBQUVBLE1BQUlDLFVBQVUsR0FBRyx5RUFBeUI7QUFDeENGLGdCQUFZLEVBRDRCO0FBRXhDRyxXQUFPLEVBQUU7QUFDUEMsaUJBQVcsRUFBRUo7QUFETixLQUYrQjtBQUt4Q0ssc0JBQWtCLEVBQUU7QUFMb0IsR0FBekIsQ0FBakI7QUFRQSxNQUFJQyxPQUFPLEdBQUcsc0VBQXNCO0FBQ2xDTixnQkFBWSxFQURzQjtBQUVsQ0csV0FBTyxFQUFFO0FBQ1BDLGlCQUFXLEVBQUVKO0FBRE4sS0FGeUI7QUFLbENLLHNCQUFrQixFQUFFO0FBTGMsR0FBdEIsQ0FBZCxDQWpCK0MsQ0F5Qi9DOztBQUVBLE1BQUlFLGNBQWMsR0FBR1YsUUFBUSxDQUFSQSxpQkFBckIsc0NBQXFCQSxDQUFyQjtBQUNBLE1BQUlXLFdBQVcsR0FBR1gsUUFBUSxDQUFSQSxpQkFBbEIsbUNBQWtCQSxDQUFsQjs7QUFFQSxPQUFJLElBQUlZLENBQUMsR0FBVCxHQUFlQSxDQUFDLEdBQUdGLGNBQWMsQ0FBakMsUUFBeUNFLENBQXpDLElBQThDO0FBQzVDRixrQkFBYyxDQUFkQSxDQUFjLENBQWRBLDJCQUE0QyxZQUFVO0FBQ3BETixhQUFPLENBQVBBLElBQVksTUFBSSxnQ0FBSixPQUFJLENBQUosU0FBaUQsYUFEVCxNQUNwREEsRUFEb0QsQ0FHcEQ7QUFDQTtBQUNBO0FBQ0E7O0FBRUEsVUFBSVMsV0FBVyxHQUFHLGFBQWxCO0FBQ0FSLGdCQUFVLENBQVZBLFFBQW1CO0FBQUVTLGNBQU0sRUFBRUQ7QUFBVixPQUFuQlI7QUFURks7QUFXRDs7QUFFRCxPQUFJLElBQUlFLEVBQUMsR0FBVCxHQUFlQSxFQUFDLEdBQUdELFdBQVcsQ0FBOUIsUUFBc0NDLEVBQXRDLElBQTJDO0FBQ3pDRCxlQUFXLENBQVhBLEVBQVcsQ0FBWEEsMkJBQXlDLFlBQVU7QUFDakRQLGFBQU8sQ0FBUEEsSUFBWSxNQUFJLGdDQUFKLE9BQUksQ0FBSixTQUFpRCxhQURaLE1BQ2pEQSxFQURpRCxDQUVqRDtBQUNBOztBQUNBLFVBQUlTLFdBQVcsR0FBRyxhQUFsQjtBQUNBSixhQUFPLENBQVBBLFFBQWdCO0FBQUVLLGNBQU0sRUFBRUQ7QUFBVixPQUFoQko7QUFMRkU7QUFPRDtBQUVGIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3NjcmlwdHMvZmVsbG93cy5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBJc290b3BlIGZyb20gJ2lzb3RvcGUtbGF5b3V0JztcblxuLy8gSXNvdG9wZVxuXG5pZiAoZG9jdW1lbnQuYm9keS5jbGFzc0xpc3QuY29udGFpbnMoJ2ZlbGxvd3MnKSkge1xuXG4gIHZhciBjdXJyZW50R3JpZCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5pc28tY3VycmVudC1mZWxsb3dzIC5pc290b3BlJyk7XG4gIHZhciBwYXN0R3JpZCAgICA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5pc28tcGFzdC1mZWxsb3dzIC5pc290b3BlJyk7XG4gIHZhciBpdGVtU2VsZWN0b3IgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGl0ZW1TZWxlY3Rvcik7XG5cbiAgY29uc29sZS5sb2coY3VycmVudEdyaWQpO1xuICBjb25zb2xlLmxvZyhwYXN0R3JpZCk7XG5cbiAgdmFyIGN1cnJlbnRJc28gPSBuZXcgSXNvdG9wZShjdXJyZW50R3JpZCwge1xuICAgIGl0ZW1TZWxlY3RvcjogaXRlbVNlbGVjdG9yLFxuICAgIG1hc29ucnk6IHtcbiAgICAgIGNvbHVtbldpZHRoOiBpdGVtU2VsZWN0b3IsXG4gICAgfSxcbiAgICB0cmFuc2l0aW9uRHVyYXRpb246ICcwJyxcbiAgfSk7XG5cbiAgdmFyIHBhc3RJc28gPSBuZXcgSXNvdG9wZShwYXN0R3JpZCwge1xuICAgIGl0ZW1TZWxlY3RvcjogaXRlbVNlbGVjdG9yLFxuICAgIG1hc29ucnk6IHtcbiAgICAgIGNvbHVtbldpZHRoOiBpdGVtU2VsZWN0b3IsXG4gICAgfSxcbiAgICB0cmFuc2l0aW9uRHVyYXRpb246ICcwJyxcbiAgfSk7XG5cbiAgLy8gRmlsdGVyc1xuXG4gIHZhciBjdXJyZW50RmlsdGVycyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5pc28tY3VycmVudC1mZWxsb3dzIC5maWx0ZXJzIGJ1dHRvbicpO1xuICB2YXIgcGFzdEZpbHRlcnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuaXNvLXBhc3QtZmVsbG93cyAuZmlsdGVycyBidXR0b24nKTtcblxuICBmb3IobGV0IGkgPSAwOyBpIDwgY3VycmVudEZpbHRlcnMubGVuZ3RoO2krKykge1xuICAgIGN1cnJlbnRGaWx0ZXJzW2ldLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKXtcbiAgICAgIGNvbnNvbGUubG9nKCcgJyt0aGlzLnBhcmVudEVsZW1lbnQuZ2V0QXR0cmlidXRlKCdjbGFzcycpKycgJyt0aGlzLmRhdGFzZXQuZmlsdGVyKTtcbiAgICAgIFxuICAgICAgLy8gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmlzby1jdXJyZW50LWZlbGxvd3MgLmZpbHRlcnMgYnV0dG9uJykuY2xhc3NMaXN0LmFkZCgndGV4dC1icmFuZCcpO1xuICAgICAgLy8gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmlzby1jdXJyZW50LWZlbGxvd3MgLmZpbHRlcnMgYnV0dG9uJykuY2xhc3NMaXN0LmFkZCgndGV4dC1jdXJyZW50Jyk7XG4gICAgICAvLyB0aGlzLmNsYXNzTGlzdC5yZW1vdmUoJ3RleHQtY3VycmVudCcpO1xuICAgICAgLy8gdGhpcy5jbGFzc0xpc3QuYWRkKCd0ZXh0LWJyYW5kJyk7XG4gICAgICBcbiAgICAgIHZhciBmaWx0ZXJWYWx1ZSA9IHRoaXMuZGF0YXNldC5maWx0ZXI7XG4gICAgICBjdXJyZW50SXNvLmFycmFuZ2UoeyBmaWx0ZXI6IGZpbHRlclZhbHVlIH0pO1xuICAgIH0pO1xuICB9XG5cbiAgZm9yKGxldCBpID0gMDsgaSA8IHBhc3RGaWx0ZXJzLmxlbmd0aDtpKyspIHtcbiAgICBwYXN0RmlsdGVyc1tpXS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCl7XG4gICAgICBjb25zb2xlLmxvZygnICcrdGhpcy5wYXJlbnRFbGVtZW50LmdldEF0dHJpYnV0ZSgnY2xhc3MnKSsnICcrdGhpcy5kYXRhc2V0LmZpbHRlcik7XG4gICAgICAvLyB0aGlzLmNsYXNzTGlzdC5yZW1vdmUoJ3RleHQtY3VycmVudCcpO1xuICAgICAgLy8gdGhpcy5jbGFzc0xpc3QuYWRkKCd0ZXh0LWJyYW5kJyk7XG4gICAgICB2YXIgZmlsdGVyVmFsdWUgPSB0aGlzLmRhdGFzZXQuZmlsdGVyO1xuICAgICAgcGFzdElzby5hcnJhbmdlKHsgZmlsdGVyOiBmaWx0ZXJWYWx1ZSB9KTtcbiAgICB9KTtcbiAgfVxuXG59Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/scripts/fellows.js\n");

/***/ }),

/***/ "./resources/styles/app.scss":
/*!***********************************!*\
  !*** ./resources/styles/app.scss ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc3R5bGVzL2FwcC5zY3NzP2EwZDIiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IjtBQUFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3N0eWxlcy9hcHAuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/styles/app.scss\n");

/***/ }),

/***/ "./resources/styles/editor.scss":
/*!**************************************!*\
  !*** ./resources/styles/editor.scss ***!
  \**************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc3R5bGVzL2VkaXRvci5zY3NzPzYxN2IiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IjtBQUFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3N0eWxlcy9lZGl0b3Iuc2Nzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/styles/editor.scss\n");

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/***/ (function(module) {

"use strict";
module.exports = window["jQuery"];

/***/ })

},
0,[["./resources/scripts/app.js","/scripts/manifest","/scripts/vendor"],["./resources/styles/app.scss","/scripts/manifest","/scripts/vendor"],["./resources/styles/editor.scss","/scripts/manifest","/scripts/vendor"]]]);