!(function (t, e) {
    "object" == typeof exports && "undefined" != typeof module
        ? e(exports, require("popper.js"), require("jquery"))
        : "function" == typeof define && define.amd
        ? define(["exports", "popper.js", "jquery"], e)
        : e((t.bootstrap = {}), t.Popper, t.jQuery);
})(this, function (t, u, g) {
    "use strict";
    function i(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            (i.enumerable = i.enumerable || !1), (i.configurable = !0), "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i);
        }
    }
    function s(t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t;
    }
    function l(o) {
        for (var t = 1; t < arguments.length; t++) {
            var r = null != arguments[t] ? arguments[t] : {},
                e = Object.keys(r);
            "function" == typeof Object.getOwnPropertySymbols &&
                (e = e.concat(
                    Object.getOwnPropertySymbols(r).filter(function (t) {
                        return Object.getOwnPropertyDescriptor(r, t).enumerable;
                    })
                )),
                e.forEach(function (t) {
                    var e, n, i;
                    (e = o), (i = r[(n = t)]), n in e ? Object.defineProperty(e, n, { value: i, enumerable: !0, configurable: !0, writable: !0 }) : (e[n] = i);
                });
        }
        return o;
    }
    (u = u && u.hasOwnProperty("default") ? u.default : u), (g = g && g.hasOwnProperty("default") ? g.default : g);
    var e = "transitionend";
    function n(t) {
        var e = this,
            n = !1;
        return (
            g(this).one(_.TRANSITION_END, function () {
                n = !0;
            }),
            setTimeout(function () {
                n || _.triggerTransitionEnd(e);
            }, t),
            this
        );
    }
    var _ = {
        TRANSITION_END: "bsTransitionEnd",
        getUID: function (t) {
            for (; (t += ~~(1e6 * Math.random())), document.getElementById(t); );
            return t;
        },
        getSelectorFromElement: function (t) {
            var e = t.getAttribute("data-target");
            if (!e || "#" === e) {
                var n = t.getAttribute("href");
                e = n && "#" !== n ? n.trim() : "";
            }
            return e && document.querySelector(e) ? e : null;
        },
        getTransitionDurationFromElement: function (t) {
            if (!t) return 0;
            var e = g(t).css("transition-duration"),
                n = g(t).css("transition-delay"),
                i = parseFloat(e),
                o = parseFloat(n);
            return i || o ? ((e = e.split(",")[0]), (n = n.split(",")[0]), 1e3 * (parseFloat(e) + parseFloat(n))) : 0;
        },
        reflow: function (t) {
            return t.offsetHeight;
        },
        triggerTransitionEnd: function (t) {
            g(t).trigger(e);
        },
        supportsTransitionEnd: function () {
            return Boolean(e);
        },
        isElement: function (t) {
            return (t[0] || t).nodeType;
        },
        typeCheckConfig: function (t, e, n) {
            for (var i in n)
                if (Object.prototype.hasOwnProperty.call(n, i)) {
                    var o = n[i],
                        r = e[i],
                        s =
                            r && _.isElement(r)
                                ? "element"
                                : ((a = r),
                                  {}.toString
                                      .call(a)
                                      .match(/\s([a-z]+)/i)[1]
                                      .toLowerCase());
                    if (!new RegExp(o).test(s)) throw new Error(t.toUpperCase() + ': Option "' + i + '" provided type "' + s + '" but expected type "' + o + '".');
                }
            var a;
        },
        findShadowRoot: function (t) {
            if (!document.documentElement.attachShadow) return null;
            if ("function" != typeof t.getRootNode) return t instanceof ShadowRoot ? t : t.parentNode ? _.findShadowRoot(t.parentNode) : null;
            var e = t.getRootNode();
            return e instanceof ShadowRoot ? e : null;
        },
    };
    (g.fn.emulateTransitionEnd = n),
        (g.event.special[_.TRANSITION_END] = {
            bindType: e,
            delegateType: e,
            handle: function (t) {
                if (g(t.target).is(this)) return t.handleObj.handler.apply(this, arguments);
            },
        });
  
    var $t = "modal",
        te = "bs.modal",
        ee = "." + te,
        ne = g.fn[$t],
        ie = { backdrop: !0, keyboard: !0, focus: !0, show: !0 },
        oe = { backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean" },
        re = {
            HIDE: "hide" + ee,
            HIDDEN: "hidden" + ee,
            SHOW: "show" + ee,
            SHOWN: "shown" + ee,
            FOCUSIN: "focusin" + ee,
            RESIZE: "resize" + ee,
            CLICK_DISMISS: "click.dismiss" + ee,
            KEYDOWN_DISMISS: "keydown.dismiss" + ee,
            MOUSEUP_DISMISS: "mouseup.dismiss" + ee,
            MOUSEDOWN_DISMISS: "mousedown.dismiss" + ee,
            CLICK_DATA_API: "click" + ee + ".data-api",
        },
        se = "modal-scrollbar-measure",
        ae = "modal-backdrop",
        le = "modal-open",
        ce = "fade",
        he = "show",
        ue = ".modal-dialog",
        fe = '[data-toggle="modal"]',
        de = '[data-dismiss="modal"]',
        ge = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
        _e = ".sticky-top",
        me = (function () {
            function o(t, e) {
                (this._config = this._getConfig(e)),
                    (this._element = t),
                    (this._dialog = t.querySelector(ue)),
                    (this._backdrop = null),
                    (this._isShown = !1),
                    (this._isBodyOverflowing = !1),
                    (this._ignoreBackdropClick = !1),
                    (this._isTransitioning = !1),
                    (this._scrollbarWidth = 0);
            }
            var t = o.prototype;
            return (
                (t.toggle = function (t) {
                    return this._isShown ? this.hide() : this.show(t);
                }),
                (t.show = function (t) {
                    var e = this;
                    if (!this._isShown && !this._isTransitioning) {
                        g(this._element).hasClass(ce) && (this._isTransitioning = !0);
                        var n = g.Event(re.SHOW, { relatedTarget: t });
                        g(this._element).trigger(n),
                            this._isShown ||
                                n.isDefaultPrevented() ||
                                ((this._isShown = !0),
                                this._checkScrollbar(),
                                this._setScrollbar(),
                                this._adjustDialog(),
                                this._setEscapeEvent(),
                                this._setResizeEvent(),
                                g(this._element).on(re.CLICK_DISMISS, de, function (t) {
                                    return e.hide(t);
                                }),
                                g(this._dialog).on(re.MOUSEDOWN_DISMISS, function () {
                                    g(e._element).one(re.MOUSEUP_DISMISS, function (t) {
                                        g(t.target).is(e._element) && (e._ignoreBackdropClick = !0);
                                    });
                                }),
                                this._showBackdrop(function () {
                                    return e._showElement(t);
                                }));
                    }
                }),
                (t.hide = function (t) {
                    var e = this;
                    if ((t && t.preventDefault(), this._isShown && !this._isTransitioning)) {
                        var n = g.Event(re.HIDE);
                        if ((g(this._element).trigger(n), this._isShown && !n.isDefaultPrevented())) {
                            this._isShown = !1;
                            var i = g(this._element).hasClass(ce);
                            if (
                                (i && (this._isTransitioning = !0),
                                this._setEscapeEvent(),
                                this._setResizeEvent(),
                                g(document).off(re.FOCUSIN),
                                g(this._element).removeClass(he),
                                g(this._element).off(re.CLICK_DISMISS),
                                g(this._dialog).off(re.MOUSEDOWN_DISMISS),
                                i)
                            ) {
                                var o = _.getTransitionDurationFromElement(this._element);
                                g(this._element)
                                    .one(_.TRANSITION_END, function (t) {
                                        return e._hideModal(t);
                                    })
                                    .emulateTransitionEnd(o);
                            } else this._hideModal();
                        }
                    }
                }),
                (t.dispose = function () {
                    [window, this._element, this._dialog].forEach(function (t) {
                        return g(t).off(ee);
                    }),
                        g(document).off(re.FOCUSIN),
                        g.removeData(this._element, te),
                        (this._config = null),
                        (this._element = null),
                        (this._dialog = null),
                        (this._backdrop = null),
                        (this._isShown = null),
                        (this._isBodyOverflowing = null),
                        (this._ignoreBackdropClick = null),
                        (this._isTransitioning = null),
                        (this._scrollbarWidth = null);
                }),
                (t.handleUpdate = function () {
                    this._adjustDialog();
                }),
                (t._getConfig = function (t) {
                    return (t = l({}, ie, t)), _.typeCheckConfig($t, t, oe), t;
                }),
                (t._showElement = function (t) {
                    var e = this,
                        n = g(this._element).hasClass(ce);
                    (this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE) || document.body.appendChild(this._element),
                        (this._element.style.display = "block"),
                        this._element.removeAttribute("aria-hidden"),
                        this._element.setAttribute("aria-modal", !0),
                        (this._element.scrollTop = 0),
                        n && _.reflow(this._element),
                        g(this._element).addClass(he),
                        this._config.focus && this._enforceFocus();
                    var i = g.Event(re.SHOWN, { relatedTarget: t }),
                        o = function () {
                            e._config.focus && e._element.focus(), (e._isTransitioning = !1), g(e._element).trigger(i);
                        };
                    if (n) {
                        var r = _.getTransitionDurationFromElement(this._dialog);
                        g(this._dialog).one(_.TRANSITION_END, o).emulateTransitionEnd(r);
                    } else o();
                }),
                (t._enforceFocus = function () {
                    var e = this;
                    g(document)
                        .off(re.FOCUSIN)
                        .on(re.FOCUSIN, function (t) {
                            document !== t.target && e._element !== t.target && 0 === g(e._element).has(t.target).length && e._element.focus();
                        });
                }),
                (t._setEscapeEvent = function () {
                    var e = this;
                    this._isShown && this._config.keyboard
                        ? g(this._element).on(re.KEYDOWN_DISMISS, function (t) {
                              27 === t.which && (t.preventDefault(), e.hide());
                          })
                        : this._isShown || g(this._element).off(re.KEYDOWN_DISMISS);
                }),
                (t._setResizeEvent = function () {
                    var e = this;
                    this._isShown
                        ? g(window).on(re.RESIZE, function (t) {
                              return e.handleUpdate(t);
                          })
                        : g(window).off(re.RESIZE);
                }),
                (t._hideModal = function () {
                    var t = this;
                    (this._element.style.display = "none"),
                        this._element.setAttribute("aria-hidden", !0),
                        this._element.removeAttribute("aria-modal"),
                        (this._isTransitioning = !1),
                        this._showBackdrop(function () {
                            g(document.body).removeClass(le), t._resetAdjustments(), t._resetScrollbar(), g(t._element).trigger(re.HIDDEN);
                        });
                }),
                (t._removeBackdrop = function () {
                    this._backdrop && (g(this._backdrop).remove(), (this._backdrop = null));
                }),
                (t._showBackdrop = function (t) {
                    var e = this,
                        n = g(this._element).hasClass(ce) ? ce : "";
                    if (this._isShown && this._config.backdrop) {
                        if (
                            ((this._backdrop = document.createElement("div")),
                            (this._backdrop.className = ae),
                            n && this._backdrop.classList.add(n),
                            g(this._backdrop).appendTo(document.body),
                            g(this._element).on(re.CLICK_DISMISS, function (t) {
                                e._ignoreBackdropClick ? (e._ignoreBackdropClick = !1) : t.target === t.currentTarget && ("static" === e._config.backdrop ? e._element.focus() : e.hide());
                            }),
                            n && _.reflow(this._backdrop),
                            g(this._backdrop).addClass(he),
                            !t)
                        )
                            return;
                        if (!n) return void t();
                        var i = _.getTransitionDurationFromElement(this._backdrop);
                        g(this._backdrop).one(_.TRANSITION_END, t).emulateTransitionEnd(i);
                    } else if (!this._isShown && this._backdrop) {
                        g(this._backdrop).removeClass(he);
                        var o = function () {
                            e._removeBackdrop(), t && t();
                        };
                        if (g(this._element).hasClass(ce)) {
                            var r = _.getTransitionDurationFromElement(this._backdrop);
                            g(this._backdrop).one(_.TRANSITION_END, o).emulateTransitionEnd(r);
                        } else o();
                    } else t && t();
                }),
                (t._adjustDialog = function () {
                    var t = this._element.scrollHeight > document.documentElement.clientHeight;
                    !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px");
                }),
                (t._resetAdjustments = function () {
                    (this._element.style.paddingLeft = ""), (this._element.style.paddingRight = "");
                }),
                (t._checkScrollbar = function () {
                    var t = document.body.getBoundingClientRect();
                    (this._isBodyOverflowing = t.left + t.right < window.innerWidth), (this._scrollbarWidth = this._getScrollbarWidth());
                }),
                (t._setScrollbar = function () {
                    var o = this;
                    if (this._isBodyOverflowing) {
                        var t = [].slice.call(document.querySelectorAll(ge)),
                            e = [].slice.call(document.querySelectorAll(_e));
                        g(t).each(function (t, e) {
                            var n = e.style.paddingRight,
                                i = g(e).css("padding-right");
                            g(e)
                                .data("padding-right", n)
                                .css("padding-right", parseFloat(i) + o._scrollbarWidth + "px");
                        }),
                            g(e).each(function (t, e) {
                                var n = e.style.marginRight,
                                    i = g(e).css("margin-right");
                                g(e)
                                    .data("margin-right", n)
                                    .css("margin-right", parseFloat(i) - o._scrollbarWidth + "px");
                            });
                        var n = document.body.style.paddingRight,
                            i = g(document.body).css("padding-right");
                        g(document.body)
                            .data("padding-right", n)
                            .css("padding-right", parseFloat(i) + this._scrollbarWidth + "px");
                    }
                    g(document.body).addClass(le);
                }),
                (t._resetScrollbar = function () {
                    var t = [].slice.call(document.querySelectorAll(ge));
                    g(t).each(function (t, e) {
                        var n = g(e).data("padding-right");
                        g(e).removeData("padding-right"), (e.style.paddingRight = n || "");
                    });
                    var e = [].slice.call(document.querySelectorAll("" + _e));
                    g(e).each(function (t, e) {
                        var n = g(e).data("margin-right");
                        "undefined" != typeof n && g(e).css("margin-right", n).removeData("margin-right");
                    });
                    var n = g(document.body).data("padding-right");
                    g(document.body).removeData("padding-right"), (document.body.style.paddingRight = n || "");
                }),
                (t._getScrollbarWidth = function () {
                    var t = document.createElement("div");
                    (t.className = se), document.body.appendChild(t);
                    var e = t.getBoundingClientRect().width - t.clientWidth;
                    return document.body.removeChild(t), e;
                }),
                (o._jQueryInterface = function (n, i) {
                    return this.each(function () {
                        var t = g(this).data(te),
                            e = l({}, ie, g(this).data(), "object" == typeof n && n ? n : {});
                        if ((t || ((t = new o(this, e)), g(this).data(te, t)), "string" == typeof n)) {
                            if ("undefined" == typeof t[n]) throw new TypeError('No method named "' + n + '"');
                            t[n](i);
                        } else e.show && t.show(i);
                    });
                }),
                s(o, null, [
                    {
                        key: "VERSION",
                        get: function () {
                            return "4.2.1";
                        },
                    },
                    {
                        key: "Default",
                        get: function () {
                            return ie;
                        },
                    },
                ]),
                o
            );
        })();
    g(document).on(re.CLICK_DATA_API, fe, function (t) {
        var e,
            n = this,
            i = _.getSelectorFromElement(this);
        i && (e = document.querySelector(i));
        var o = g(e).data(te) ? "toggle" : l({}, g(e).data(), g(this).data());
        ("A" !== this.tagName && "AREA" !== this.tagName) || t.preventDefault();
        var r = g(e).one(re.SHOW, function (t) {
            t.isDefaultPrevented() ||
                r.one(re.HIDDEN, function () {
                    g(n).is(":visible") && n.focus();
                });
        });
        me._jQueryInterface.call(g(e), o, this);
    }),
        (g.fn[$t] = me._jQueryInterface),
        (g.fn[$t].Constructor = me),
        (g.fn[$t].noConflict = function () {
            return (g.fn[$t] = ne), me._jQueryInterface;
        });
   
    });

function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});

