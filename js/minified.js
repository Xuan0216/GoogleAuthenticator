function css_browser_selector(e) {
    var t = e.toLowerCase(),
    n = function(e) {
        return t.indexOf(e) > -1
    },
    r = "gecko",
    i = "webkit",
    s = "safari",
    o = "opera",
    u = "mobile",
    a = document.documentElement,
    f = [!/opera|webtv/i.test(t) && /msie\s(\d)/.test(t) ? "ie ie" + RegExp.$1: n("firefox/2") ? r + " ff2": n("firefox/3.5") ? r + " ff3 ff3_5": n("firefox/3.6") ? r + " ff3 ff3_6": n("firefox/3") ? r + " ff3": n("gecko/") ? r: n("opera") ? o + (/version\/(\d+)/.test(t) ? " " + o + RegExp.$1: /opera(\s|\/)(\d+)/.test(t) ? " " + o + RegExp.$2: "") : n("konqueror") ? "konqueror": n("blackberry") ? u + " blackberry": n("android") ? u + " android": n("chrome") ? i + " chrome": n("iron") ? i + " iron": n("applewebkit/") ? i + " " + s + (/version\/(\d+)/.test(t) ? " " + s + RegExp.$1: "") : n("mozilla/") ? r: "", n("j2me") ? u + " j2me": n("iphone") ? u + " iphone": n("ipod") ? u + " ipod": n("ipad") ? u + " ipad": n("mac") ? "mac": n("darwin") ? "mac": n("webtv") ? "webtv": n("win") ? "win" + (n("windows nt 6.0") ? " vista": "") : n("freebsd") ? "freebsd": n("x11") || n("linux") ? "linux": "", "js"];
    c = f.join(" ");
    a.className += " " + c;
    return c
}
if ("undefined" == typeof jQuery) throw new Error("Bootstrap requires jQuery"); +
function(e) {
    "use strict";
    function t() {
        var e = document.createElement("bootstrap"),
        t = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd otransitionend",
            transition: "transitionend"
        };
        for (var n in t) if (void 0 !== e.style[n]) return {
            end: t[n]
        }
    }
    e.fn.emulateTransitionEnd = function(t) {
        var n = !1,
        r = this;
        e(this).one(e.support.transition.end,
        function() {
            n = !0
        });
        var i = function() {
            n || e(r).trigger(e.support.transition.end)
        };
        return setTimeout(i, t),
        this
    },
    e(function() {
        e.support.transition = t()
    })
} (window.jQuery),
+
function(e) {
    "use strict";
    var t = '[data-dismiss="alert"]',
    n = function(n) {
        e(n).on("click", t, this.close)
    };
    n.prototype.close = function(t) {
        function n() {
            s.trigger("closed.bs.alert").remove()
        }
        var r = e(this),
        i = r.attr("data-target");
        i || (i = r.attr("href"), i = i && i.replace(/.*(?=#[^\s]*$)/, ""));
        var s = e(i);
        t && t.preventDefault(),
        s.length || (s = r.hasClass("alert") ? r: r.parent()),
        s.trigger(t = e.Event("close.bs.alert")),
        t.isDefaultPrevented() || (s.removeClass("in"), e.support.transition && s.hasClass("fade") ? s.one(e.support.transition.end, n).emulateTransitionEnd(150) : n())
    };
    var r = e.fn.alert;
    e.fn.alert = function(t) {
        return this.each(function() {
            var r = e(this),
            i = r.data("bs.alert");
            i || r.data("bs.alert", i = new n(this)),
            "string" == typeof t && i[t].call(r)
        })
    },
    e.fn.alert.Constructor = n,
    e.fn.alert.noConflict = function() {
        return e.fn.alert = r,
        this
    },
    e(document).on("click.bs.alert.data-api", t, n.prototype.close)
} (window.jQuery),
+
function(e) {
    "use strict";
    var t = function(n, r) {
        this.$element = e(n),
        this.options = e.extend({},
        t.DEFAULTS, r)
    };
    t.DEFAULTS = {
        loadingText: "loading..."
    },
    t.prototype.setState = function(e) {
        var t = "disabled",
        n = this.$element,
        r = n.is("input") ? "val": "html",
        i = n.data();
        e += "Text",
        i.resetText || n.data("resetText", n[r]()),
        n[r](i[e] || this.options[e]),
        setTimeout(function() {
            "loadingText" == e ? n.addClass(t).attr(t, t) : n.removeClass(t).removeAttr(t)
        },
        0)
    },
    t.prototype.toggle = function() {
        var e = this.$element.closest('[data-toggle="buttons"]');
        if (e.length) {
            var t = this.$element.find("input").prop("checked", !this.$element.hasClass("active")).trigger("change");
            "radio" === t.prop("type") && e.find(".active").removeClass("active")
        }
        this.$element.toggleClass("active")
    };
    var n = e.fn.button;
    e.fn.button = function(n) {
        return this.each(function() {
            var r = e(this),
            i = r.data("bs.button"),
            s = "object" == typeof n && n;
            i || r.data("bs.button", i = new t(this, s)),
            "toggle" == n ? i.toggle() : n && i.setState(n)
        })
    },
    e.fn.button.Constructor = t,
    e.fn.button.noConflict = function() {
        return e.fn.button = n,
        this
    },
    e(document).on("click.bs.button.data-api", "[data-toggle^=button]",
    function(t) {
        var n = e(t.target);
        n.hasClass("btn") || (n = n.closest(".btn")),
        n.button("toggle"),
        t.preventDefault()
    })
} (window.jQuery),
+
function(e) {
    "use strict";
    var t = function(t, n) {
        this.$element = e(t),
        this.$indicators = this.$element.find(".carousel-indicators"),
        this.options = n,
        this.paused = this.sliding = this.interval = this.$active = this.$items = null,
        "hover" == this.options.pause && this.$element.on("mouseenter", e.proxy(this.pause, this)).on("mouseleave", e.proxy(this.cycle, this))
    };
    t.DEFAULTS = {
        interval: 5e3,
        pause: "hover",
        wrap: !0
    },
    t.prototype.cycle = function(t) {
        return t || (this.paused = !1),
        this.interval && clearInterval(this.interval),
        this.options.interval && !this.paused && (this.interval = setInterval(e.proxy(this.next, this), this.options.interval)),
        this
    },
    t.prototype.getActiveIndex = function() {
        return this.$active = this.$element.find(".item.active"),
        this.$items = this.$active.parent().children(),
        this.$items.index(this.$active)
    },
    t.prototype.to = function(t) {
        var n = this,
        r = this.getActiveIndex();
        return t > this.$items.length - 1 || 0 > t ? void 0 : this.sliding ? this.$element.one("slid",
        function() {
            n.to(t)
        }) : r == t ? this.pause().cycle() : this.slide(t > r ? "next": "prev", e(this.$items[t]))
    },
    t.prototype.pause = function(t) {
        return t || (this.paused = !0),
        this.$element.find(".next, .prev").length && e.support.transition.end && (this.$element.trigger(e.support.transition.end), this.cycle(!0)),
        this.interval = clearInterval(this.interval),
        this
    },
    t.prototype.next = function() {
        return this.sliding ? void 0 : this.slide("next")
    },
    t.prototype.prev = function() {
        return this.sliding ? void 0 : this.slide("prev")
    },
    t.prototype.slide = function(t, n) {
        var r = this.$element.find(".item.active"),
        i = n || r[t](),
        s = this.interval,
        o = "next" == t ? "left": "right",
        u = "next" == t ? "first": "last",
        f = this;
        if (!i.length) {
            if (!this.options.wrap) return;
            i = this.$element.find(".item")[u]()
        }
        this.sliding = !0,
        s && this.pause();
        var l = e.Event("slide.bs.carousel", {
            relatedTarget: i[0],
            direction: o
        });
        if (!i.hasClass("active")) {
            if (this.$indicators.length && (this.$indicators.find(".active").removeClass("active"), this.$element.one("slid",
            function() {
                var t = e(f.$indicators.children()[f.getActiveIndex()]);
                t && t.addClass("active")
            })), e.support.transition && this.$element.hasClass("slide")) {
                if (this.$element.trigger(l), l.isDefaultPrevented()) return;
                i.addClass(t),
                i[0].offsetWidth,
                r.addClass(o),
                i.addClass(o),
                r.one(e.support.transition.end,
                function() {
                    i.removeClass([t, o].join(" ")).addClass("active"),
                    r.removeClass(["active", o].join(" ")),
                    f.sliding = !1,
                    setTimeout(function() {
                        f.$element.trigger("slid")
                    },
                    0)
                }).emulateTransitionEnd(600)
            } else {
                if (this.$element.trigger(l), l.isDefaultPrevented()) return;
                r.removeClass("active"),
                i.addClass("active"),
                this.sliding = !1,
                this.$element.trigger("slid")
            }
            return s && this.cycle(),
            this
        }
    };
    var n = e.fn.carousel;
    e.fn.carousel = function(n) {
        return this.each(function() {
            var r = e(this),
            i = r.data("bs.carousel"),
            s = e.extend({},
            t.DEFAULTS, r.data(), "object" == typeof n && n),
            o = "string" == typeof n ? n: s.slide;
            i || r.data("bs.carousel", i = new t(this, s)),
            "number" == typeof n ? i.to(n) : o ? i[o]() : s.interval && i.pause().cycle()
        })
    },
    e.fn.carousel.Constructor = t,
    e.fn.carousel.noConflict = function() {
        return e.fn.carousel = n,
        this
    },
    e(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]",
    function(t) {
        var n, r = e(this),
        i = e(r.attr("data-target") || (n = r.attr("href")) && n.replace(/.*(?=#[^\s]+$)/, "")),
        s = e.extend({},
        i.data(), r.data()),
        o = r.attr("data-slide-to");
        o && (s.interval = !1),
        i.carousel(s),
        (o = r.attr("data-slide-to")) && i.data("bs.carousel").to(o),
        t.preventDefault()
    }),
    e(window).on("load",
    function() {
        e('[data-ride="carousel"]').each(function() {
            var t = e(this);
            t.carousel(t.data())
        })
    })
} (window.jQuery),
+
function(e) {
    "use strict";
    var t = function(n, r) {
        this.$element = e(n),
        this.options = e.extend({},
        t.DEFAULTS, r),
        this.transitioning = null,
        this.options.parent && (this.$parent = e(this.options.parent)),
        this.options.toggle && this.toggle()
    };
    t.DEFAULTS = {
        toggle: !0
    },
    t.prototype.dimension = function() {
        var e = this.$element.hasClass("width");
        return e ? "width": "height"
    },
    t.prototype.show = function() {
        if (!this.transitioning && !this.$element.hasClass("in")) {
            var t = e.Event("show.bs.collapse");
            if (this.$element.trigger(t), !t.isDefaultPrevented()) {
                var n = this.$parent && this.$parent.find("> .panel > .in");
                if (n && n.length) {
                    var r = n.data("bs.collapse");
                    if (r && r.transitioning) return;
                    n.collapse("hide"),
                    r || n.data("bs.collapse", null)
                }
                var i = this.dimension();
                this.$element.removeClass("collapse").addClass("collapsing")[i](0),
                this.transitioning = 1;
                var s = function() {
                    this.$element.removeClass("collapsing").addClass("in")[i]("auto"),
                    this.transitioning = 0,
                    this.$element.trigger("shown.bs.collapse")
                };
                if (!e.support.transition) return s.call(this);
                var o = e.camelCase(["scroll", i].join("-"));
                this.$element.one(e.support.transition.end, e.proxy(s, this)).emulateTransitionEnd(350)[i](this.$element[0][o])
            }
        }
    },
    t.prototype.hide = function() {
        if (!this.transitioning && this.$element.hasClass("in")) {
            var t = e.Event("hide.bs.collapse");
            if (this.$element.trigger(t), !t.isDefaultPrevented()) {
                var n = this.dimension();
                this.$element[n](this.$element[n]())[0].offsetHeight,
                this.$element.addClass("collapsing").removeClass("collapse").removeClass("in"),
                this.transitioning = 1;
                var r = function() {
                    this.transitioning = 0,
                    this.$element.trigger("hidden.bs.collapse").removeClass("collapsing").addClass("collapse")
                };
                return e.support.transition ? (this.$element[n](0).one(e.support.transition.end, e.proxy(r, this)).emulateTransitionEnd(350), void 0) : r.call(this)
            }
        }
    },
    t.prototype.toggle = function() {
        this[this.$element.hasClass("in") ? "hide": "show"]()
    };
    var n = e.fn.collapse;
    e.fn.collapse = function(n) {
        return this.each(function() {
            var r = e(this),
            i = r.data("bs.collapse"),
            s = e.extend({},
            t.DEFAULTS, r.data(), "object" == typeof n && n);
            i || r.data("bs.collapse", i = new t(this, s)),
            "string" == typeof n && i[n]()
        })
    },
    e.fn.collapse.Constructor = t,
    e.fn.collapse.noConflict = function() {
        return e.fn.collapse = n,
        this
    },
    e(document).on("click.bs.collapse.data-api", "[data-toggle=collapse]",
    function(t) {
        var n, r = e(this),
        i = r.attr("data-target") || t.preventDefault() || (n = r.attr("href")) && n.replace(/.*(?=#[^\s]+$)/, ""),
        s = e(i),
        o = s.data("bs.collapse"),
        u = o ? "toggle": r.data(),
        f = r.attr("data-parent"),
        l = f && e(f);
        o && o.transitioning || (l && l.find('[data-toggle=collapse][data-parent="' + f + '"]').not(r).addClass("collapsed"), r[s.hasClass("in") ? "addClass": "removeClass"]("collapsed")),
        s.collapse(u)
    })
} (window.jQuery),
+
function(e) {
    "use strict";
    function t() {
        e(r).remove(),
        e(i).each(function(t) {
            var r = n(e(this));
            r.hasClass("open") && (r.trigger(t = e.Event("hide.bs.dropdown")), t.isDefaultPrevented() || r.removeClass("open").trigger("hidden.bs.dropdown"))
        })
    }
    function n(t) {
        var n = t.attr("data-target");
        n || (n = t.attr("href"), n = n && /#/.test(n) && n.replace(/.*(?=#[^\s]*$)/, ""));
        var r = n && e(n);
        return r && r.length ? r: t.parent()
    }
    var r = ".dropdown-backdrop",
    i = "[data-toggle=dropdown]",
    s = function(t) {
        e(t).on("click.bs.dropdown", this.toggle)
    };
    s.prototype.toggle = function(r) {
        var i = e(this);
        if (!i.is(".disabled, :disabled")) {
            var s = n(i),
            o = s.hasClass("open");
            if (t(), !o) {
                if ("ontouchstart" in document.documentElement && !s.closest(".navbar-nav").length && e('<div class="dropdown-backdrop"/>').insertAfter(e(this)).on("click", t), s.trigger(r = e.Event("show.bs.dropdown")), r.isDefaultPrevented()) return;
                s.toggleClass("open").trigger("shown.bs.dropdown"),
                i.focus()
            }
            return ! 1
        }
    },
    s.prototype.keydown = function(t) {
        if (/(38|40|27)/.test(t.keyCode)) {
            var r = e(this);
            if (t.preventDefault(), t.stopPropagation(), !r.is(".disabled, :disabled")) {
                var s = n(r),
                o = s.hasClass("open");
                if (!o || o && 27 == t.keyCode) return 27 == t.which && s.find(i).focus(),
                r.click();
                var u = e("[role=menu] li:not(.divider):visible a", s);
                if (u.length) {
                    var f = u.index(u.filter(":focus"));
                    38 == t.keyCode && f > 0 && f--,
                    40 == t.keyCode && f < u.length - 1 && f++,
                    ~f || (f = 0),
                    u.eq(f).focus()
                }
            }
        }
    };
    var o = e.fn.dropdown;
    e.fn.dropdown = function(t) {
        return this.each(function() {
            var n = e(this),
            r = n.data("dropdown");
            r || n.data("dropdown", r = new s(this)),
            "string" == typeof t && r[t].call(n)
        })
    },
    e.fn.dropdown.Constructor = s,
    e.fn.dropdown.noConflict = function() {
        return e.fn.dropdown = o,
        this
    },
    e(document).on("click.bs.dropdown.data-api", t).on("click.bs.dropdown.data-api", ".dropdown form",
    function(e) {
        e.stopPropagation()
    }).on("click.bs.dropdown.data-api", i, s.prototype.toggle).on("keydown.bs.dropdown.data-api", i + ", [role=menu]", s.prototype.keydown)
} (window.jQuery),
+
function(e) {
    "use strict";
    var t = function(t, n) {
        this.options = n,
        this.$element = e(t),
        this.$backdrop = this.isShown = null,
        this.options.remote && this.$element.load(this.options.remote)
    };
    t.DEFAULTS = {
        backdrop: !0,
        keyboard: !0,
        show: !0
    },
    t.prototype.toggle = function(e) {
        return this[this.isShown ? "hide": "show"](e)
    },
    t.prototype.show = function(t) {
        var n = this,
        r = e.Event("show.bs.modal", {
            relatedTarget: t
        });
        this.$element.trigger(r),
        this.isShown || r.isDefaultPrevented() || (this.isShown = !0, this.escape(), this.$element.on("click.dismiss.modal", '[data-dismiss="modal"]', e.proxy(this.hide, this)), this.backdrop(function() {
            var r = e.support.transition && n.$element.hasClass("fade");
            n.$element.parent().length || n.$element.appendTo(document.body),
            n.$element.show(),
            r && n.$element[0].offsetWidth,
            n.$element.addClass("in").attr("aria-hidden", !1),
            n.enforceFocus();
            var i = e.Event("shown.bs.modal", {
                relatedTarget: t
            });
            r ? n.$element.find(".modal-dialog").one(e.support.transition.end,
            function() {
                n.$element.focus().trigger(i)
            }).emulateTransitionEnd(300) : n.$element.focus().trigger(i)
        }))
    },
    t.prototype.hide = function(t) {
        t && t.preventDefault(),
        t = e.Event("hide.bs.modal"),
        this.$element.trigger(t),
        this.isShown && !t.isDefaultPrevented() && (this.isShown = !1, this.escape(), e(document).off("focusin.bs.modal"), this.$element.removeClass("in").attr("aria-hidden", !0).off("click.dismiss.modal"), e.support.transition && this.$element.hasClass("fade") ? this.$element.one(e.support.transition.end, e.proxy(this.hideModal, this)).emulateTransitionEnd(300) : this.hideModal())
    },
    t.prototype.enforceFocus = function() {
        e(document).off("focusin.bs.modal").on("focusin.bs.modal", e.proxy(function(e) {
            this.$element[0] === e.target || this.$element.has(e.target).length || this.$element.focus()
        },
        this))
    },
    t.prototype.escape = function() {
        this.isShown && this.options.keyboard ? this.$element.on("keyup.dismiss.bs.modal", e.proxy(function(e) {
            27 == e.which && this.hide()
        },
        this)) : this.isShown || this.$element.off("keyup.dismiss.bs.modal")
    },
    t.prototype.hideModal = function() {
        var e = this;
        this.$element.hide(),
        this.backdrop(function() {
            e.removeBackdrop(),
            e.$element.trigger("hidden.bs.modal")
        })
    },
    t.prototype.removeBackdrop = function() {
        this.$backdrop && this.$backdrop.remove(),
        this.$backdrop = null
    },
    t.prototype.backdrop = function(t) {
        var n = this.$element.hasClass("fade") ? "fade": "";
        if (this.isShown && this.options.backdrop) {
            var r = e.support.transition && n;
            if (this.$backdrop = e('<div class="modal-backdrop ' + n + '" />').appendTo(document.body), this.$element.on("click.dismiss.modal", e.proxy(function(e) {
                e.target === e.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus.call(this.$element[0]) : this.hide.call(this))
            },
            this)), r && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !t) return;
            r ? this.$backdrop.one(e.support.transition.end, t).emulateTransitionEnd(150) : t()
        } else ! this.isShown && this.$backdrop ? (this.$backdrop.removeClass("in"), e.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one(e.support.transition.end, t).emulateTransitionEnd(150) : t()) : t && t()
    };
    var n = e.fn.modal;
    e.fn.modal = function(n, r) {
        return this.each(function() {
            var i = e(this),
            s = i.data("bs.modal"),
            o = e.extend({},
            t.DEFAULTS, i.data(), "object" == typeof n && n);
            s || i.data("bs.modal", s = new t(this, o)),
            "string" == typeof n ? s[n](r) : o.show && s.show(r)
        })
    },
    e.fn.modal.Constructor = t,
    e.fn.modal.noConflict = function() {
        return e.fn.modal = n,
        this
    },
    e(document).on("click.bs.modal.data-api", '[data-toggle="modal"]',
    function(t) {
        var n = e(this),
        r = n.attr("href"),
        i = e(n.attr("data-target") || r && r.replace(/.*(?=#[^\s]+$)/, "")),
        s = i.data("modal") ? "toggle": e.extend({
            remote: !/#/.test(r) && r
        },
        i.data(), n.data());
        t.preventDefault(),
        i.modal(s, this).one("hide",
        function() {
            n.is(":visible") && n.focus()
        })
    }),
    e(document).on("show.bs.modal", ".modal",
    function() {
        e(document.body).addClass("modal-open")
    }).on("hidden.bs.modal", ".modal",
    function() {
        e(document.body).removeClass("modal-open")
    })
} (window.jQuery),
+
function(e) {
    "use strict";
    var t = function(e, t) {
        this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null,
        this.init("tooltip", e, t)
    };
    t.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        container: !1
    },
    t.prototype.init = function(t, n, r) {
        this.enabled = !0,
        this.type = t,
        this.$element = e(n),
        this.options = this.getOptions(r);
        for (var i = this.options.trigger.split(" "), s = i.length; s--;) {
            var o = i[s];
            if ("click" == o) this.$element.on("click." + this.type, this.options.selector, e.proxy(this.toggle, this));
            else if ("manual" != o) {
                var u = "hover" == o ? "mouseenter": "focus",
                f = "hover" == o ? "mouseleave": "blur";
                this.$element.on(u + "." + this.type, this.options.selector, e.proxy(this.enter, this)),
                this.$element.on(f + "." + this.type, this.options.selector, e.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = e.extend({},
        this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle()
    },
    t.prototype.getDefaults = function() {
        return t.DEFAULTS
    },
    t.prototype.getOptions = function(t) {
        return t = e.extend({},
        this.getDefaults(), this.$element.data(), t),
        t.delay && "number" == typeof t.delay && (t.delay = {
            show: t.delay,
            hide: t.delay
        }),
        t
    },
    t.prototype.getDelegateOptions = function() {
        var t = {},
        n = this.getDefaults();
        return this._options && e.each(this._options,
        function(e, r) {
            n[e] != r && (t[e] = r)
        }),
        t
    },
    t.prototype.enter = function(t) {
        var n = t instanceof this.constructor ? t: e(t.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type);
        return clearTimeout(n.timeout),
        n.hoverState = "in",
        n.options.delay && n.options.delay.show ? (n.timeout = setTimeout(function() {
            "in" == n.hoverState && n.show()
        },
        n.options.delay.show), void 0) : n.show()
    },
    t.prototype.leave = function(t) {
        var n = t instanceof this.constructor ? t: e(t.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type);
        return clearTimeout(n.timeout),
        n.hoverState = "out",
        n.options.delay && n.options.delay.hide ? (n.timeout = setTimeout(function() {
            "out" == n.hoverState && n.hide()
        },
        n.options.delay.hide), void 0) : n.hide()
    },
    t.prototype.show = function() {
        var t = e.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            if (this.$element.trigger(t), t.isDefaultPrevented()) return;
            var n = this.tip();
            this.setContent(),
            this.options.animation && n.addClass("fade");
            var r = "function" == typeof this.options.placement ? this.options.placement.call(this, n[0], this.$element[0]) : this.options.placement,
            i = /\s?auto?\s?/i,
            s = i.test(r);
            s && (r = r.replace(i, "") || "top"),
            n.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(r),
            this.options.container ? n.appendTo(this.options.container) : n.insertAfter(this.$element);
            var o = this.getPosition(),
            u = n[0].offsetWidth,
            f = n[0].offsetHeight;
            if (s) {
                var l = this.$element.parent(),
                c = r,
                h = document.documentElement.scrollTop || document.body.scrollTop,
                p = "body" == this.options.container ? window.innerWidth: l.outerWidth(),
                d = "body" == this.options.container ? window.innerHeight: l.outerHeight(),
                v = "body" == this.options.container ? 0 : l.offset().left;
                r = "bottom" == r && o.top + o.height + f - h > d ? "top": "top" == r && o.top - h - f < 0 ? "bottom": "right" == r && o.right + u > p ? "left": "left" == r && o.left - u < v ? "right": r,
                n.removeClass(c).addClass(r)
            }
            var m = this.getCalculatedOffset(r, o, u, f);
            this.applyPlacement(m, r),
            this.$element.trigger("shown.bs." + this.type)
        }
    },
    t.prototype.applyPlacement = function(e, t) {
        var n, r = this.tip(),
        i = r[0].offsetWidth,
        s = r[0].offsetHeight,
        o = parseInt(r.css("margin-top"), 10),
        u = parseInt(r.css("margin-left"), 10);
        isNaN(o) && (o = 0),
        isNaN(u) && (u = 0),
        e.top = e.top + o,
        e.left = e.left + u,
        r.offset(e).addClass("in");
        var a = r[0].offsetWidth,
        f = r[0].offsetHeight;
        if ("top" == t && f != s && (n = !0, e.top = e.top + s - f), /bottom|top/.test(t)) {
            var l = 0;
            e.left < 0 && (l = -2 * e.left, e.left = 0, r.offset(e), a = r[0].offsetWidth, f = r[0].offsetHeight),
            this.replaceArrow(l - i + a, a, "left")
        } else this.replaceArrow(f - s, f, "top");
        n && r.offset(e)
    },
    t.prototype.replaceArrow = function(e, t, n) {
        this.arrow().css(n, e ? 50 * (1 - e / t) + "%": "")
    },
    t.prototype.setContent = function() {
        var e = this.tip(),
        t = this.getTitle();
        e.find(".tooltip-inner")[this.options.html ? "html": "text"](t),
        e.removeClass("fade in top bottom left right")
    },
    t.prototype.hide = function() {
        function t() {
            "in" != n.hoverState && r.detach()
        }
        var n = this,
        r = this.tip(),
        i = e.Event("hide.bs." + this.type);
        return this.$element.trigger(i),
        i.isDefaultPrevented() ? void 0 : (r.removeClass("in"), e.support.transition && this.$tip.hasClass("fade") ? r.one(e.support.transition.end, t).emulateTransitionEnd(150) : t(), this.$element.trigger("hidden.bs." + this.type), this)
    },
    t.prototype.fixTitle = function() {
        var e = this.$element; (e.attr("title") || "string" != typeof e.attr("data-original-title")) && e.attr("data-original-title", e.attr("title") || "").attr("title", "")
    },
    t.prototype.hasContent = function() {
        return this.getTitle()
    },
    t.prototype.getPosition = function() {
        var t = this.$element[0];
        return e.extend({},
        "function" == typeof t.getBoundingClientRect ? t.getBoundingClientRect() : {
            width: t.offsetWidth,
            height: t.offsetHeight
        },
        this.$element.offset())
    },
    t.prototype.getCalculatedOffset = function(e, t, n, r) {
        return "bottom" == e ? {
            top: t.top + t.height,
            left: t.left + t.width / 2 - n / 2
        }: "top" == e ? {
            top: t.top - r,
            left: t.left + t.width / 2 - n / 2
        }: "left" == e ? {
            top: t.top + t.height / 2 - r / 2,
            left: t.left - n
        }: {
            top: t.top + t.height / 2 - r / 2,
            left: t.left + t.width
        }
    },
    t.prototype.getTitle = function() {
        var e, t = this.$element,
        n = this.options;
        return e = t.attr("data-original-title") || ("function" == typeof n.title ? n.title.call(t[0]) : n.title)
    },
    t.prototype.tip = function() {
        return this.$tip = this.$tip || e(this.options.template)
    },
    t.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    },
    t.prototype.validate = function() {
        this.$element[0].parentNode || (this.hide(), this.$element = null, this.options = null)
    },
    t.prototype.enable = function() {
        this.enabled = !0
    },
    t.prototype.disable = function() {
        this.enabled = !1
    },
    t.prototype.toggleEnabled = function() {
        this.enabled = !this.enabled
    },
    t.prototype.toggle = function(t) {
        var n = t ? e(t.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type) : this;
        n.tip().hasClass("in") ? n.leave(n) : n.enter(n)
    },
    t.prototype.destroy = function() {
        this.hide().$element.off("." + this.type).removeData("bs." + this.type)
    };
    var n = e.fn.tooltip;
    e.fn.tooltip = function(n) {
        return this.each(function() {
            var r = e(this),
            i = r.data("bs.tooltip"),
            s = "object" == typeof n && n;
            i || r.data("bs.tooltip", i = new t(this, s)),
            "string" == typeof n && i[n]()
        })
    },
    e.fn.tooltip.Constructor = t,
    e.fn.tooltip.noConflict = function() {
        return e.fn.tooltip = n,
        this
    }
} (window.jQuery),
+
function(e) {
    "use strict";
    var t = function(e, t) {
        this.init("popover", e, t)
    };
    if (!e.fn.tooltip) throw new Error("Popover requires tooltip.js");
    t.DEFAULTS = e.extend({},
    e.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    }),
    t.prototype = e.extend({},
    e.fn.tooltip.Constructor.prototype),
    t.prototype.constructor = t,
    t.prototype.getDefaults = function() {
        return t.DEFAULTS
    },
    t.prototype.setContent = function() {
        var e = this.tip(),
        t = this.getTitle(),
        n = this.getContent();
        e.find(".popover-title")[this.options.html ? "html": "text"](t),
        e.find(".popover-content")[this.options.html ? "html": "text"](n),
        e.removeClass("fade top bottom left right in"),
        e.find(".popover-title").html() || e.find(".popover-title").hide()
    },
    t.prototype.hasContent = function() {
        return this.getTitle() || this.getContent()
    },
    t.prototype.getContent = function() {
        var e = this.$element,
        t = this.options;
        return e.attr("data-content") || ("function" == typeof t.content ? t.content.call(e[0]) : t.content)
    },
    t.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    },
    t.prototype.tip = function() {
        return this.$tip || (this.$tip = e(this.options.template)),
        this.$tip
    };
    var n = e.fn.popover;
    e.fn.popover = function(n) {
        return this.each(function() {
            var r = e(this),
            i = r.data("bs.popover"),
            s = "object" == typeof n && n;
            i || r.data("bs.popover", i = new t(this, s)),
            "string" == typeof n && i[n]()
        })
    },
    e.fn.popover.Constructor = t,
    e.fn.popover.noConflict = function() {
        return e.fn.popover = n,
        this
    }
} (window.jQuery),
+
function(e) {
    "use strict";
    function t(n, r) {
        var i, s = e.proxy(this.process, this);
        this.$element = e(n).is("body") ? e(window) : e(n),
        this.$body = e("body"),
        this.$scrollElement = this.$element.on("scroll.bs.scroll-spy.data-api", s),
        this.options = e.extend({},
        t.DEFAULTS, r),
        this.selector = (this.options.target || (i = e(n).attr("href")) && i.replace(/.*(?=#[^\s]+$)/, "") || "") + " .nav li > a",
        this.offsets = e([]),
        this.targets = e([]),
        this.activeTarget = null,
        this.refresh(),
        this.process()
    }
    t.DEFAULTS = {
        offset: 10
    },
    t.prototype.refresh = function() {
        var t = this.$element[0] == window ? "offset": "position";
        this.offsets = e([]),
        this.targets = e([]);
        var n = this;
        this.$body.find(this.selector).map(function() {
            var r = e(this),
            i = r.data("target") || r.attr("href"),
            s = /^#\w/.test(i) && e(i);
            return s && s.length && [[s[t]().top + (!e.isWindow(n.$scrollElement.get(0)) && n.$scrollElement.scrollTop()), i]] || null
        }).sort(function(e, t) {
            return e[0] - t[0]
        }).each(function() {
            n.offsets.push(this[0]),
            n.targets.push(this[1])
        })
    },
    t.prototype.process = function() {
        var e, t = this.$scrollElement.scrollTop() + this.options.offset,
        n = this.$scrollElement[0].scrollHeight || this.$body[0].scrollHeight,
        r = n - this.$scrollElement.height(),
        i = this.offsets,
        s = this.targets,
        o = this.activeTarget;
        if (t >= r) return o != (e = s.last()[0]) && this.activate(e);
        for (e = i.length; e--;) o != s[e] && t >= i[e] && (!i[e + 1] || t <= i[e + 1]) && this.activate(s[e])
    },
    t.prototype.activate = function(t) {
        this.activeTarget = t,
        e(this.selector).parents(".active").removeClass("active");
        var n = this.selector + '[data-target="' + t + '"],' + this.selector + '[href="' + t + '"]',
        r = e(n).parents("li").addClass("active");
        r.parent(".dropdown-menu").length && (r = r.closest("li.dropdown").addClass("active")),
        r.trigger("activate")
    };
    var n = e.fn.scrollspy;
    e.fn.scrollspy = function(n) {
        return this.each(function() {
            var r = e(this),
            i = r.data("bs.scrollspy"),
            s = "object" == typeof n && n;
            i || r.data("bs.scrollspy", i = new t(this, s)),
            "string" == typeof n && i[n]()
        })
    },
    e.fn.scrollspy.Constructor = t,
    e.fn.scrollspy.noConflict = function() {
        return e.fn.scrollspy = n,
        this
    },
    e(window).on("load",
    function() {
        e('[data-spy="scroll"]').each(function() {
            var t = e(this);
            t.scrollspy(t.data())
        })
    })
} (window.jQuery),
+
function(e) {
    "use strict";
    var t = function(t) {
        this.element = e(t)
    };
    t.prototype.show = function() {
        var t = this.element,
        n = t.closest("ul:not(.dropdown-menu)"),
        r = t.data("target");
        if (r || (r = t.attr("href"), r = r && r.replace(/.*(?=#[^\s]*$)/, "")), !t.parent("li").hasClass("active")) {
            var i = n.find(".active:last a")[0],
            s = e.Event("show.bs.tab", {
                relatedTarget: i
            });
            if (t.trigger(s), !s.isDefaultPrevented()) {
                var o = e(r);
                this.activate(t.parent("li"), n),
                this.activate(o, o.parent(),
                function() {
                    t.trigger({
                        type: "shown.bs.tab",
                        relatedTarget: i
                    })
                })
            }
        }
    },
    t.prototype.activate = function(t, n, r) {
        function i() {
            s.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"),
            t.addClass("active"),
            o ? (t[0].offsetWidth, t.addClass("in")) : t.removeClass("fade"),
            t.parent(".dropdown-menu") && t.closest("li.dropdown").addClass("active"),
            r && r()
        }
        var s = n.find("> .active"),
        o = r && e.support.transition && s.hasClass("fade");
        o ? s.one(e.support.transition.end, i).emulateTransitionEnd(150) : i(),
        s.removeClass("in")
    };
    var n = e.fn.tab;
    e.fn.tab = function(n) {
        return this.each(function() {
            var r = e(this),
            i = r.data("bs.tab");
            i || r.data("bs.tab", i = new t(this)),
            "string" == typeof n && i[n]()
        })
    },
    e.fn.tab.Constructor = t,
    e.fn.tab.noConflict = function() {
        return e.fn.tab = n,
        this
    },
    e(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"]',
    function(t) {
        t.preventDefault(),
        e(this).tab("show")
    })
} (window.jQuery),
+
function(e) {
    "use strict";
    var t = function(n, r) {
        this.options = e.extend({},
        t.DEFAULTS, r),
        this.$window = e(window).on("scroll.bs.affix.data-api", e.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", e.proxy(this.checkPositionWithEventLoop, this)),
        this.$element = e(n),
        this.affixed = this.unpin = null,
        this.checkPosition()
    };
    t.RESET = "affix affix-top affix-bottom",
    t.DEFAULTS = {
        offset: 0
    },
    t.prototype.checkPositionWithEventLoop = function() {
        setTimeout(e.proxy(this.checkPosition, this), 1)
    },
    t.prototype.checkPosition = function() {
        if (this.$element.is(":visible")) {
            var n = e(document).height(),
            r = this.$window.scrollTop(),
            i = this.$element.offset(),
            s = this.options.offset,
            o = s.top,
            u = s.bottom;
            "object" != typeof s && (u = o = s),
            "function" == typeof o && (o = s.top()),
            "function" == typeof u && (u = s.bottom());
            var f = null != this.unpin && r + this.unpin <= i.top ? !1 : null != u && i.top + this.$element.height() >= n - u ? "bottom": null != o && o >= r ? "top": !1;
            this.affixed !== f && (this.unpin && this.$element.css("top", ""), this.affixed = f, this.unpin = "bottom" == f ? i.top - r: null, this.$element.removeClass(t.RESET).addClass("affix" + (f ? "-" + f: "")), "bottom" == f && this.$element.offset({
                top: document.body.offsetHeight - u - this.$element.height()
            }))
        }
    };
    var n = e.fn.affix;
    e.fn.affix = function(n) {
        return this.each(function() {
            var r = e(this),
            i = r.data("bs.affix"),
            s = "object" == typeof n && n;
            i || r.data("bs.affix", i = new t(this, s)),
            "string" == typeof n && i[n]()
        })
    },
    e.fn.affix.Constructor = t,
    e.fn.affix.noConflict = function() {
        return e.fn.affix = n,
        this
    },
    e(window).on("load",
    function() {
        e('[data-spy="affix"]').each(function() {
            var t = e(this),
            n = t.data();
            n.offset = n.offset || {},
            n.offsetBottom && (n.offset.bottom = n.offsetBottom),
            n.offsetTop && (n.offset.top = n.offsetTop),
            t.affix(n)
        })
    })
} (window.jQuery); (function(e) {
    function t(e) {
        var t = e.originalEvent.changedTouches,
        n = t[0],
        r = "",
        i;
        switch (e.type) {
        case "touchmove":
            r = "mousemove";
            break;
        case "touchend":
            r = "mouseup";
            break;
        default:
            return
        }
        i = document.createEvent("MouseEvent"),
        i.initMouseEvent(r, !0, !0, window, 1, n.screenX, n.screenY, n.clientX, n.clientY, !1, !1, !1, !1, 0, null),
        n.target.dispatchEvent(i),
        e.preventDefault()
    }
    e.rateit = {
        aria: {
            resetLabel: "reset rating",
            ratingLabel: "rating"
        }
    },
    e.fn.rateit = function(r, i) {
        var s = 1,
        o = {},
        u = "init",
        a = function(e) {
            return e.charAt(0).toUpperCase() + e.substr(1)
        },
        f;
        if (this.length == 0) return this;
        if (f = e.type(r), f == "object" || r === undefined || r == null) o = e.extend({},
        e.fn.rateit.defaults, r);
        else {
            if (f == "string" && i === undefined) return this.data("rateit" + a(r));
            f == "string" && (u = "setvalue")
        }
        return this.each(function() {
            var f = e(this),
            l = function(e, t) {
                if (t != null) {
                    var n = "aria-value" + (e == "value" ? "now": e),
                    r = f.find(".rateit-range");
                    r.attr(n) != undefined && r.attr(n, t)
                }
                return arguments[0] = "rateit" + a(e),
                f.data.apply(f, arguments)
            },
            c,
            h,
            p,
            d,
            v,
            m,
            g,
            y;
            if (f.hasClass("rateit") || f.addClass("rateit"), c = f.css("direction") != "rtl", u == "setvalue") {
                if (!l("init")) throw "Can't set value before init";
                r != "readonly" || i != !0 || l("readonly") || (f.find(".rateit-range").unbind(), l("wired", !1)),
                r == "value" && (i = i == null ? l("min") : Math.max(l("min"), Math.min(l("max"), i))),
                l("backingfld") && (h = e(l("backingfld")), r == "value" && h.val(i), r == "min" && h[0].min && (h[0].min = i), r == "max" && h[0].max && (h[0].max = i), r == "step" && h[0].step && (h[0].step = i)),
                l(r, i)
            }
            l("init") || (l("min", l("min") || o.min), l("max", l("max") || o.max), l("step", l("step") || o.step), l("readonly", l("readonly") !== undefined ? l("readonly") : o.readonly), l("resetable", l("resetable") !== undefined ? l("resetable") : o.resetable), l("backingfld", l("backingfld") || o.backingfld), l("starwidth", l("starwidth") || o.starwidth), l("starheight", l("starheight") || o.starheight), l("value", Math.max(l("min"), Math.min(l("max"), l("value") || o.value || o.min))), l("ispreset", l("ispreset") !== undefined ? l("ispreset") : o.ispreset), l("backingfld") && (h = e(l("backingfld")), l("value", h.hide().val()), (h.attr("disabled") || h.attr("readonly")) && l("readonly", !0), h[0].nodeName == "INPUT" && (h[0].type == "range" || h[0].type == "text") && (l("min", parseInt(h.attr("min")) || l("min")), l("max", parseInt(h.attr("max")) || l("max")), l("step", parseInt(h.attr("step")) || l("step"))), h[0].nodeName == "SELECT" && h[0].options.length > 1 && (l("min", Number(h[0].options[0].value)), l("max", Number(h[0].options[h[0].length - 1].value)), l("step", Number(h[0].options[1].value) - Number(h[0].options[0].value)))), p = f[0].nodeName == "DIV" ? "div": "span", s++, d = '<button id="rateit-reset-{{index}}" class="rateit-reset" aria-label="' + e.rateit.aria.resetLabel + '" aria-controls="rateit-range-{{index}}"></button><{{element}} id="rateit-range-{{index}}" class="rateit-range" tabindex="0" role="slider" aria-label="' + e.rateit.aria.ratingLabel + '" aria-owns="rateit-reset-{{index}}" aria-valuemin="' + l("min") + '" aria-valuemax="' + l("max") + '" aria-valuenow="' + l("value") + '"><{{element}} class="rateit-selected" style="height:' + l("starheight") + 'px"></{{element}}><{{element}} class="rateit-hover" style="height:' + l("starheight") + 'px"></{{element}}></{{element}}>', f.append(d.replace(/{{index}}/gi, s).replace(/{{element}}/gi, p)), c || (f.find(".rateit-reset").css("float", "right"), f.find(".rateit-selected").addClass("rateit-selected-rtl"), f.find(".rateit-hover").addClass("rateit-hover-rtl")), l("init", !0)),
            v = f.find(".rateit-range"),
            v.width(l("starwidth") * (l("max") - l("min"))).height(l("starheight")),
            m = "rateit-preset" + (c ? "": "-rtl"),
            l("ispreset") ? f.find(".rateit-selected").addClass(m) : f.find(".rateit-selected").removeClass(m),
            l("value") != null && (g = (l("value") - l("min")) * l("starwidth"), f.find(".rateit-selected").width(g)),
            y = f.find(".rateit-reset"),
            y.data("wired") !== !0 && y.bind("click",
            function(t) {
                t.preventDefault(),
                y.blur(),
                l("value", l("min")),
                v.find(".rateit-hover").hide().width(0),
                v.find(".rateit-selected").width(0).show(),
                l("backingfld") && e(l("backingfld")).val(l("min")),
                f.trigger("reset")
            }).data("wired", !0);
            var b = function(t, r) {
                var i = r.changedTouches ? r.changedTouches[0].pageX: r.pageX,
                s = i - e(t).offset().left;
                return c || (s = v.width() - s),
                s > v.width() && (s = v.width()),
                s < 0 && (s = 0),
                g = Math.ceil(s / l("starwidth") * (1 / l("step")))
            },
            w = function(e) {
                var t = e * l("starwidth") * l("step"),
                n = v.find(".rateit-hover"),
                r;
                n.data("width") != t && (v.find(".rateit-selected").hide(), n.width(t).show().data("width", t), r = [e * l("step") + l("min")], f.trigger("hover", r).trigger("over", r))
            },
            E = function(t) {
                l("value", t),
                l("backingfld") && e(l("backingfld")).val(t),
                l("ispreset") && (v.find(".rateit-selected").removeClass(m), l("ispreset", !1)),
                v.find(".rateit-hover").hide(),
                v.find(".rateit-selected").width(t * l("starwidth") - l("min") * l("starwidth")).show(),
                f.trigger("hover", [null]).trigger("over", [null]).trigger("rated", [t])
            };
            l("readonly") ? y.hide() : (l("resetable") || y.hide(), l("wired") || (v.bind("touchmove touchend", t), v.mousemove(function(e) {
                var t = b(this, e);
                w(t)
            }), v.mouseleave(function() {
                v.find(".rateit-hover").hide().width(0).data("width", ""),
                f.trigger("hover", [null]).trigger("over", [null]),
                v.find(".rateit-selected").show()
            }), v.mouseup(function(e) {
                var t = b(this, e),
                n = t * l("step") + l("min");
                E(n)
            }), v.keyup(function(e) { (e.which == 38 || e.which == (c ? 39 : 37)) && E(Math.min(l("value") + l("step"), l("max"))),
                (e.which == 40 || e.which == (c ? 37 : 39)) && E(Math.max(l("value") - l("step"), l("min")))
            }), l("wired", !0)), l("resetable") && y.show()),
            v.attr("aria-readonly", l("readonly"))
        })
    },
    e.fn.rateit.defaults = {
        min: 0,
        max: 5,
        step: .5,
        starwidth: 16,
        starheight: 16,
        readonly: !1,
        resetable: !0,
        ispreset: !1
    },
    e(function() {
        e("div.rateit, span.rateit").rateit()
    })
})(jQuery); (function() {
    var e = [].indexOf ||
    function(e) {
        for (var t = 0,
        n = this.length; t < n; t++) {
            if (t in this && this[t] === e) return t
        }
        return - 1
    },
    t = [].slice; (function(e, t) {
        if (typeof define === "function" && define.amd) {
            return define("waypoints", ["jquery"],
            function(n) {
                return t(n, e)
            })
        } else {
            return t(e.jQuery, e)
        }
    })(this,
    function(n, r) {
        var i, s, o, u, a, f, l, c, h, p, d, v, m, g, y, b;
        i = n(r);
        c = e.call(r, "ontouchstart") >= 0;
        u = {
            horizontal: {},
            vertical: {}
        };
        a = 1;
        l = {};
        f = "waypoints-context-id";
        d = "resize.waypoints";
        v = "scroll.waypoints";
        m = 1;
        g = "waypoints-waypoint-ids";
        y = "waypoint";
        b = "waypoints";
        s = function() {
            function e(e) {
                var t = this;
                this.$element = e;
                this.element = e[0];
                this.didResize = false;
                this.didScroll = false;
                this.id = "context" + a++;
                this.oldScroll = {
                    x: e.scrollLeft(),
                    y: e.scrollTop()
                };
                this.waypoints = {
                    horizontal: {},
                    vertical: {}
                };
                e.data(f, this.id);
                l[this.id] = this;
                e.bind(v,
                function() {
                    var e;
                    if (! (t.didScroll || c)) {
                        t.didScroll = true;
                        e = function() {
                            t.doScroll();
                            return t.didScroll = false
                        };
                        return r.setTimeout(e, n[b].settings.scrollThrottle)
                    }
                });
                e.bind(d,
                function() {
                    var e;
                    if (!t.didResize) {
                        t.didResize = true;
                        e = function() {
                            n[b]("refresh");
                            return t.didResize = false
                        };
                        return r.setTimeout(e, n[b].settings.resizeThrottle)
                    }
                })
            }
            e.prototype.doScroll = function() {
                var e, t = this;
                e = {
                    horizontal: {
                        newScroll: this.$element.scrollLeft(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left"
                    },
                    vertical: {
                        newScroll: this.$element.scrollTop(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up"
                    }
                };
                if (c && (!e.vertical.oldScroll || !e.vertical.newScroll)) {
                    n[b]("refresh")
                }
                n.each(e,
                function(e, r) {
                    var i, s, o;
                    o = [];
                    s = r.newScroll > r.oldScroll;
                    i = s ? r.forward: r.backward;
                    n.each(t.waypoints[e],
                    function(e, t) {
                        var n, i;
                        if (r.oldScroll < (n = t.offset) && n <= r.newScroll) {
                            return o.push(t)
                        } else if (r.newScroll < (i = t.offset) && i <= r.oldScroll) {
                            return o.push(t)
                        }
                    });
                    o.sort(function(e, t) {
                        return e.offset - t.offset
                    });
                    if (!s) {
                        o.reverse()
                    }
                    return n.each(o,
                    function(e, t) {
                        if (t.options.continuous || e === o.length - 1) {
                            return t.trigger([i])
                        }
                    })
                });
                return this.oldScroll = {
                    x: e.horizontal.newScroll,
                    y: e.vertical.newScroll
                }
            };
            e.prototype.refresh = function() {
                var e, t, r, i = this;
                r = n.isWindow(this.element);
                t = this.$element.offset();
                this.doScroll();
                e = {
                    horizontal: {
                        contextOffset: r ? 0 : t.left,
                        contextScroll: r ? 0 : this.oldScroll.x,
                        contextDimension: this.$element.width(),
                        oldScroll: this.oldScroll.x,
                        forward: "right",
                        backward: "left",
                        offsetProp: "left"
                    },
                    vertical: {
                        contextOffset: r ? 0 : t.top,
                        contextScroll: r ? 0 : this.oldScroll.y,
                        contextDimension: r ? n[b]("viewportHeight") : this.$element.height(),
                        oldScroll: this.oldScroll.y,
                        forward: "down",
                        backward: "up",
                        offsetProp: "top"
                    }
                };
                return n.each(e,
                function(e, t) {
                    return n.each(i.waypoints[e],
                    function(e, r) {
                        var i, s, o, u, a;
                        i = r.options.offset;
                        o = r.offset;
                        s = n.isWindow(r.element) ? 0 : r.$element.offset()[t.offsetProp];
                        if (n.isFunction(i)) {
                            i = i.apply(r.element)
                        } else if (typeof i === "string") {
                            i = parseFloat(i);
                            if (r.options.offset.indexOf("%") > -1) {
                                i = Math.ceil(t.contextDimension * i / 100)
                            }
                        }
                        r.offset = s - t.contextOffset + t.contextScroll - i;
                        if (r.options.onlyOnScroll && o != null || !r.enabled) {
                            return
                        }
                        if (o !== null && o < (u = t.oldScroll) && u <= r.offset) {
                            return r.trigger([t.backward])
                        } else if (o !== null && o > (a = t.oldScroll) && a >= r.offset) {
                            return r.trigger([t.forward])
                        } else if (o === null && t.oldScroll >= r.offset) {
                            return r.trigger([t.forward])
                        }
                    })
                })
            };
            e.prototype.checkEmpty = function() {
                if (n.isEmptyObject(this.waypoints.horizontal) && n.isEmptyObject(this.waypoints.vertical)) {
                    this.$element.unbind([d, v].join(" "));
                    return delete l[this.id]
                }
            };
            return e
        } ();
        o = function() {
            function e(e, t, r) {
                var i, s;
                r = n.extend({},
                n.fn[y].defaults, r);
                if (r.offset === "bottom-in-view") {
                    r.offset = function() {
                        var e;
                        e = n[b]("viewportHeight");
                        if (!n.isWindow(t.element)) {
                            e = t.$element.height()
                        }
                        return e - n(this).outerHeight()
                    }
                }
                this.$element = e;
                this.element = e[0];
                this.axis = r.horizontal ? "horizontal": "vertical";
                this.callback = r.handler;
                this.context = t;
                this.enabled = r.enabled;
                this.id = "waypoints" + m++;
                this.offset = null;
                this.options = r;
                t.waypoints[this.axis][this.id] = this;
                u[this.axis][this.id] = this;
                i = (s = e.data(g)) != null ? s: [];
                i.push(this.id);
                e.data(g, i)
            }
            e.prototype.trigger = function(e) {
                if (!this.enabled) {
                    return
                }
                if (this.callback != null) {
                    this.callback.apply(this.element, e)
                }
                if (this.options.triggerOnce) {
                    return this.destroy()
                }
            };
            e.prototype.disable = function() {
                return this.enabled = false
            };
            e.prototype.enable = function() {
                this.context.refresh();
                return this.enabled = true
            };
            e.prototype.destroy = function() {
                delete u[this.axis][this.id];
                delete this.context.waypoints[this.axis][this.id];
                return this.context.checkEmpty()
            };
            e.getWaypointsByElement = function(e) {
                var t, r;
                r = n(e).data(g);
                if (!r) {
                    return []
                }
                t = n.extend({},
                u.horizontal, u.vertical);
                return n.map(r,
                function(e) {
                    return t[e]
                })
            };
            return e
        } ();
        p = {
            init: function(e, t) {
                var r;
                if (t == null) {
                    t = {}
                }
                if ((r = t.handler) == null) {
                    t.handler = e
                }
                this.each(function() {
                    var e, r, i, u;
                    e = n(this);
                    i = (u = t.context) != null ? u: n.fn[y].defaults.context;
                    if (!n.isWindow(i)) {
                        i = e.closest(i)
                    }
                    i = n(i);
                    r = l[i.data(f)];
                    if (!r) {
                        r = new s(i)
                    }
                    return new o(e, r, t)
                });
                n[b]("refresh");
                return this
            },
            disable: function() {
                return p._invoke(this, "disable")
            },
            enable: function() {
                return p._invoke(this, "enable")
            },
            destroy: function() {
                return p._invoke(this, "destroy")
            },
            prev: function(e, t) {
                return p._traverse.call(this, e, t,
                function(e, t, n) {
                    if (t > 0) {
                        return e.push(n[t - 1])
                    }
                })
            },
            next: function(e, t) {
                return p._traverse.call(this, e, t,
                function(e, t, n) {
                    if (t < n.length - 1) {
                        return e.push(n[t + 1])
                    }
                })
            },
            _traverse: function(e, t, i) {
                var s, o;
                if (e == null) {
                    e = "vertical"
                }
                if (t == null) {
                    t = r
                }
                o = h.aggregate(t);
                s = [];
                this.each(function() {
                    var t;
                    t = n.inArray(this, o[e]);
                    return i(s, t, o[e])
                });
                return this.pushStack(s)
            },
            _invoke: function(e, t) {
                e.each(function() {
                    var e;
                    e = o.getWaypointsByElement(this);
                    return n.each(e,
                    function(e, n) {
                        n[t]();
                        return true
                    })
                });
                return this
            }
        };
        n.fn[y] = function() {
            var e, r;
            r = arguments[0],
            e = 2 <= arguments.length ? t.call(arguments, 1) : [];
            if (p[r]) {
                return p[r].apply(this, e)
            } else if (n.isFunction(r)) {
                return p.init.apply(this, arguments)
            } else if (n.isPlainObject(r)) {
                return p.init.apply(this, [null, r])
            } else if (!r) {
                return n.error("jQuery Waypoints needs a callback function or handler option.")
            } else {
                return n.error("The " + r + " method does not exist in jQuery Waypoints.")
            }
        };
        n.fn[y].defaults = {
            context: r,
            continuous: true,
            enabled: true,
            horizontal: false,
            offset: 0,
            triggerOnce: false
        };
        h = {
            refresh: function() {
                return n.each(l,
                function(e, t) {
                    return t.refresh()
                })
            },
            viewportHeight: function() {
                var e;
                return (e = r.innerHeight) != null ? e: i.height()
            },
            aggregate: function(e) {
                var t, r, i;
                t = u;
                if (e) {
                    t = (i = l[n(e).data(f)]) != null ? i.waypoints: void 0
                }
                if (!t) {
                    return []
                }
                r = {
                    horizontal: [],
                    vertical: []
                };
                n.each(r,
                function(e, i) {
                    n.each(t[e],
                    function(e, t) {
                        return i.push(t)
                    });
                    i.sort(function(e, t) {
                        return e.offset - t.offset
                    });
                    r[e] = n.map(i,
                    function(e) {
                        return e.element
                    });
                    return r[e] = n.unique(r[e])
                });
                return r
            },
            above: function(e) {
                if (e == null) {
                    e = r
                }
                return h._filter(e, "vertical",
                function(e, t) {
                    return t.offset <= e.oldScroll.y
                })
            },
            below: function(e) {
                if (e == null) {
                    e = r
                }
                return h._filter(e, "vertical",
                function(e, t) {
                    return t.offset > e.oldScroll.y
                })
            },
            left: function(e) {
                if (e == null) {
                    e = r
                }
                return h._filter(e, "horizontal",
                function(e, t) {
                    return t.offset <= e.oldScroll.x
                })
            },
            right: function(e) {
                if (e == null) {
                    e = r
                }
                return h._filter(e, "horizontal",
                function(e, t) {
                    return t.offset > e.oldScroll.x
                })
            },
            enable: function() {
                return h._invoke("enable")
            },
            disable: function() {
                return h._invoke("disable")
            },
            destroy: function() {
                return h._invoke("destroy")
            },
            extendFn: function(e, t) {
                return p[e] = t
            },
            _invoke: function(e) {
                var t;
                t = n.extend({},
                u.vertical, u.horizontal);
                return n.each(t,
                function(t, n) {
                    n[e]();
                    return true
                })
            },
            _filter: function(e, t, r) {
                var i, s;
                i = l[n(e).data(f)];
                if (!i) {
                    return []
                }
                s = [];
                n.each(i.waypoints[t],
                function(e, t) {
                    if (r(i, t)) {
                        return s.push(t)
                    }
                });
                s.sort(function(e, t) {
                    return e.offset - t.offset
                });
                return n.map(s,
                function(e) {
                    return e.element
                })
            }
        };
        n[b] = function() {
            var e, n;
            n = arguments[0],
            e = 2 <= arguments.length ? t.call(arguments, 1) : [];
            if (h[n]) {
                return h[n].apply(null, e)
            } else {
                return h.aggregate.call(null, n)
            }
        };
        n[b].settings = {
            resizeThrottle: 100,
            scrollThrottle: 30
        };
        return i.load(function() {
            return n[b]("refresh")
        })
    })
}).call(this); (function() {
    "use strict";
    function e() {}
    function t(e, t) {
        for (var n = e.length; n--;) if (e[n].listener === t) return n;
        return - 1
    }
    var n = e.prototype;
    n.getListeners = function(e) {
        var t, n, r = this._getEvents();
        if ("object" == typeof e) {
            t = {};
            for (n in r) r.hasOwnProperty(n) && e.test(n) && (t[n] = r[n])
        } else t = r[e] || (r[e] = []);
        return t
    },
    n.flattenListeners = function(e) {
        var t, n = [];
        for (t = 0; e.length > t; t += 1) n.push(e[t].listener);
        return n
    },
    n.getListenersAsObject = function(e) {
        var t, n = this.getListeners(e);
        return n instanceof Array && (t = {},
        t[e] = n),
        t || n
    },
    n.addListener = function(e, n) {
        var r, i = this.getListenersAsObject(e),
        s = "object" == typeof n;
        for (r in i) i.hasOwnProperty(r) && -1 === t(i[r], n) && i[r].push(s ? n: {
            listener: n,
            once: !1
        });
        return this
    },
    n.on = n.addListener,
    n.addOnceListener = function(e, t) {
        return this.addListener(e, {
            listener: t,
            once: !0
        })
    },
    n.once = n.addOnceListener,
    n.defineEvent = function(e) {
        return this.getListeners(e),
        this
    },
    n.defineEvents = function(e) {
        for (var t = 0; e.length > t; t += 1) this.defineEvent(e[t]);
        return this
    },
    n.removeListener = function(e, n) {
        var r, i, s = this.getListenersAsObject(e);
        for (i in s) s.hasOwnProperty(i) && (r = t(s[i], n), -1 !== r && s[i].splice(r, 1));
        return this
    },
    n.off = n.removeListener,
    n.addListeners = function(e, t) {
        return this.manipulateListeners(!1, e, t)
    },
    n.removeListeners = function(e, t) {
        return this.manipulateListeners(!0, e, t)
    },
    n.manipulateListeners = function(e, t, n) {
        var r, i, s = e ? this.removeListener: this.addListener,
        o = e ? this.removeListeners: this.addListeners;
        if ("object" != typeof t || t instanceof RegExp) for (r = n.length; r--;) s.call(this, t, n[r]);
        else for (r in t) t.hasOwnProperty(r) && (i = t[r]) && ("function" == typeof i ? s.call(this, r, i) : o.call(this, r, i));
        return this
    },
    n.removeEvent = function(e) {
        var t, n = typeof e,
        r = this._getEvents();
        if ("string" === n) delete r[e];
        else if ("object" === n) for (t in r) r.hasOwnProperty(t) && e.test(t) && delete r[t];
        else delete this._events;
        return this
    },
    n.emitEvent = function(e, t) {
        var n, r, i, s, o = this.getListenersAsObject(e);
        for (i in o) if (o.hasOwnProperty(i)) for (r = o[i].length; r--;) n = o[i][r],
        s = n.listener.apply(this, t || []),
        (s === this._getOnceReturnValue() || n.once === !0) && this.removeListener(e, o[i][r].listener);
        return this
    },
    n.trigger = n.emitEvent,
    n.emit = function(e) {
        var t = Array.prototype.slice.call(arguments, 1);
        return this.emitEvent(e, t)
    },
    n.setOnceReturnValue = function(e) {
        return this._onceReturnValue = e,
        this
    },
    n._getOnceReturnValue = function() {
        return this.hasOwnProperty("_onceReturnValue") ? this._onceReturnValue: !0
    },
    n._getEvents = function() {
        return this._events || (this._events = {})
    },
    "function" == typeof define && define.amd ? define(function() {
        return e
    }) : "undefined" != typeof module && module.exports ? module.exports = e: this.EventEmitter = e
}).call(this),
function(e) {
    "use strict";
    var t = document.documentElement,
    n = function() {};
    t.addEventListener ? n = function(e, t, n) {
        e.addEventListener(t, n, !1)
    }: t.attachEvent && (n = function(t, n, r) {
        t[n + r] = r.handleEvent ?
        function() {
            var t = e.event;
            t.target = t.target || t.srcElement,
            r.handleEvent.call(r, t)
        }: function() {
            var n = e.event;
            n.target = n.target || n.srcElement,
            r.call(t, n)
        },
        t.attachEvent("on" + n, t[n + r])
    });
    var r = function() {};
    t.removeEventListener ? r = function(e, t, n) {
        e.removeEventListener(t, n, !1)
    }: t.detachEvent && (r = function(e, t, n) {
        e.detachEvent("on" + t, e[t + n]);
        try {
            delete e[t + n]
        } catch(r) {
            e[t + n] = void 0
        }
    });
    var i = {
        bind: n,
        unbind: r
    };
    "function" == typeof define && define.amd ? define(i) : e.eventie = i
} (this),
function(e) {
    "use strict";
    function t(e, t) {
        for (var n in t) e[n] = t[n];
        return e
    }
    function n(e) {
        return "[object Array]" === a.call(e)
    }
    function r(e) {
        var t = [];
        if (n(e)) t = e;
        else if ("number" == typeof e.length) for (var r = 0,
        i = e.length; i > r; r++) t.push(e[r]);
        else t.push(e);
        return t
    }
    function i(e, n) {
        function i(e, n, o) {
            if (! (this instanceof i)) return new i(e, n);
            "string" == typeof e && (e = document.querySelectorAll(e)),
            this.elements = r(e),
            this.options = t({},
            this.options),
            "function" == typeof n ? o = n: t(this.options, n),
            o && this.on("always", o),
            this.getImages(),
            s && (this.jqDeferred = new s.Deferred);
            var u = this;
            setTimeout(function() {
                u.check()
            })
        }
        function a(e) {
            this.img = e
        }
        i.prototype = new e,
        i.prototype.options = {},
        i.prototype.getImages = function() {
            this.images = [];
            for (var e = 0,
            t = this.elements.length; t > e; e++) {
                var n = this.elements[e];
                "IMG" === n.nodeName && this.addImage(n);
                for (var r = n.querySelectorAll("img"), i = 0, s = r.length; s > i; i++) {
                    var o = r[i];
                    this.addImage(o)
                }
            }
        },
        i.prototype.addImage = function(e) {
            var t = new a(e);
            this.images.push(t)
        },
        i.prototype.check = function() {
            function e(e, i) {
                return t.options.debug && u && o.log("confirm", e, i),
                t.progress(e),
                n++,
                n === r && t.complete(),
                !0
            }
            var t = this,
            n = 0,
            r = this.images.length;
            if (this.hasAnyBroken = !1, !r) return this.complete(),
            void 0;
            for (var i = 0; r > i; i++) {
                var s = this.images[i];
                s.on("confirm", e),
                s.check()
            }
        },
        i.prototype.progress = function(e) {
            this.hasAnyBroken = this.hasAnyBroken || !e.isLoaded;
            var t = this;
            setTimeout(function() {
                t.emit("progress", t, e),
                t.jqDeferred && t.jqDeferred.notify(t, e)
            })
        },
        i.prototype.complete = function() {
            var e = this.hasAnyBroken ? "fail": "done";
            this.isComplete = !0;
            var t = this;
            setTimeout(function() {
                if (t.emit(e, t), t.emit("always", t), t.jqDeferred) {
                    var n = t.hasAnyBroken ? "reject": "resolve";
                    t.jqDeferred[n](t)
                }
            })
        },
        s && (s.fn.imagesLoaded = function(e, t) {
            var n = new i(this, e, t);
            return n.jqDeferred.promise(s(this))
        });
        var f = {};
        return a.prototype = new e,
        a.prototype.check = function() {
            var e = f[this.img.src];
            if (e) return this.useCached(e),
            void 0;
            if (f[this.img.src] = this, this.img.complete && void 0 !== this.img.naturalWidth) return this.confirm(0 !== this.img.naturalWidth, "naturalWidth"),
            void 0;
            var t = this.proxyImage = new Image;
            n.bind(t, "load", this),
            n.bind(t, "error", this),
            t.src = this.img.src
        },
        a.prototype.useCached = function(e) {
            if (e.isConfirmed) this.confirm(e.isLoaded, "cached was confirmed");
            else {
                var t = this;
                e.on("confirm",
                function(e) {
                    return t.confirm(e.isLoaded, "cache emitted confirmed"),
                    !0
                })
            }
        },
        a.prototype.confirm = function(e, t) {
            this.isConfirmed = !0,
            this.isLoaded = e,
            this.emit("confirm", this, t)
        },
        a.prototype.handleEvent = function(e) {
            var t = "on" + e.type;
            this[t] && this[t](e)
        },
        a.prototype.onload = function() {
            this.confirm(!0, "onload"),
            this.unbindProxyEvents()
        },
        a.prototype.onerror = function() {
            this.confirm(!1, "onerror"),
            this.unbindProxyEvents()
        },
        a.prototype.unbindProxyEvents = function() {
            n.unbind(this.proxyImage, "load", this),
            n.unbind(this.proxyImage, "error", this)
        },
        i
    }
    var s = e.jQuery,
    o = e.console,
    u = o !== void 0,
    a = Object.prototype.toString;
    "function" == typeof define && define.amd ? define(["eventEmitter/EventEmitter", "eventie/eventie"], i) : e.imagesLoaded = i(e.EventEmitter, e.eventie)
} (window); (function(e) {
    e.fn.hoverIntent = function(t, n, r) {
        var i = {
            interval: 100,
            sensitivity: 7,
            timeout: 0
        };
        if (typeof t === "object") {
            i = e.extend(i, t)
        } else if (e.isFunction(n)) {
            i = e.extend(i, {
                over: t,
                out: n,
                selector: r
            })
        } else {
            i = e.extend(i, {
                over: t,
                out: t,
                selector: n
            })
        }
        var s, o, u, a;
        var f = function(e) {
            s = e.pageX;
            o = e.pageY
        };
        var l = function(t, n) {
            n.hoverIntent_t = clearTimeout(n.hoverIntent_t);
            if (Math.abs(u - s) + Math.abs(a - o) < i.sensitivity) {
                e(n).off("mousemove.hoverIntent", f);
                n.hoverIntent_s = 1;
                return i.over.apply(n, [t])
            } else {
                u = s;
                a = o;
                n.hoverIntent_t = setTimeout(function() {
                    l(t, n)
                },
                i.interval)
            }
        };
        var c = function(e, t) {
            t.hoverIntent_t = clearTimeout(t.hoverIntent_t);
            t.hoverIntent_s = 0;
            return i.out.apply(t, [e])
        };
        var h = function(t) {
            var n = jQuery.extend({},
            t);
            var r = this;
            if (r.hoverIntent_t) {
                r.hoverIntent_t = clearTimeout(r.hoverIntent_t)
            }
            if (t.type == "mouseenter") {
                u = n.pageX;
                a = n.pageY;
                e(r).on("mousemove.hoverIntent", f);
                if (r.hoverIntent_s != 1) {
                    r.hoverIntent_t = setTimeout(function() {
                        l(n, r)
                    },
                    i.interval)
                }
            } else {
                e(r).off("mousemove.hoverIntent", f);
                if (r.hoverIntent_s == 1) {
                    r.hoverIntent_t = setTimeout(function() {
                        c(n, r)
                    },
                    i.timeout)
                }
            }
        };
        return this.on({
            "mouseenter.hoverIntent": h,
            "mouseleave.hoverIntent": h
        },
        i.selector)
    }
})(jQuery); (function(e, t, n) {
    "use strict";
    var r = t.Modernizr,
    i = e("body");
    e.DLMenu = function(t, n) {
        this.$el = e(n);
        this._init(t)
    };
    e.DLMenu.defaults = {
        animationClasses: {
            classin: "dl-animate-in-1",
            classout: "dl-animate-out-1"
        },
        onLevelClick: function(e, t) {
            return false
        },
        onLinkClick: function(e, t) {
            return false
        }
    };
    e.DLMenu.prototype = {
        _init: function(t) {
            this.options = e.extend(true, {},
            e.DLMenu.defaults, t);
            this._config();
            var n = {
                WebkitAnimation: "webkitAnimationEnd",
                OAnimation: "oAnimationEnd",
                msAnimation: "MSAnimationEnd",
                animation: "animationend"
            },
            i = {
                WebkitTransition: "webkitTransitionEnd",
                MozTransition: "transitionend",
                OTransition: "oTransitionEnd",
                msTransition: "MSTransitionEnd",
                transition: "transitionend"
            };
            this.animEndEventName = n[r.prefixed("animation")] + ".dlmenu";
            this.transEndEventName = i[r.prefixed("transition")] + ".dlmenu",
            this.supportAnimations = r.cssanimations,
            this.supportTransitions = r.csstransitions;
            this._initEvents()
        },
        _config: function() {
            this.open = false;
            this.$trigger = this.$el.children(".dl-trigger");
            this.$menu = this.$el.children("ul.dl-menu");
            this.$menuitems = this.$menu.find("li:not(.dl-back)");
            this.$el.find("ul.dl-submenu").prepend('<li class="dl-back"><a href="#">back</a></li>');
            this.$back = this.$menu.find("li.dl-back")
        },
        _initEvents: function() {
            var t = this;
            this.$trigger.on("click.dlmenu",
            function() {
                if (t.open) {
                    t._closeMenu()
                } else {
                    t._openMenu()
                }
                return false
            });
            this.$menuitems.on("click.dlmenu",
            function(n) {
                n.stopPropagation();
                var r = e(this),
                i = r.children("ul.dl-submenu");
                if (i.length > 0) {
                    var s = i.clone().css("opacity", 0).insertAfter(t.$menu),
                    o = function() {
                        t.$menu.off(t.animEndEventName).removeClass(t.options.animationClasses.classout).addClass("dl-subview");
                        r.addClass("dl-subviewopen").parents(".dl-subviewopen:first").removeClass("dl-subviewopen").addClass("dl-subview");
                        s.remove()
                    };
                    setTimeout(function() {
                        s.addClass(t.options.animationClasses.classin);
                        t.$menu.addClass(t.options.animationClasses.classout);
                        if (t.supportAnimations) {
                            t.$menu.on(t.animEndEventName, o)
                        } else {
                            o.call()
                        }
                        t.options.onLevelClick(r, r.children("a:first").text())
                    });
                    return false
                } else {
                    t.options.onLinkClick(r, n)
                }
            });
            this.$back.on("click.dlmenu",
            function(n) {
                var r = e(this),
                i = r.parents("ul.dl-submenu:first"),
                s = i.parent(),
                o = i.clone().insertAfter(t.$menu);
                var u = function() {
                    t.$menu.off(t.animEndEventName).removeClass(t.options.animationClasses.classin);
                    o.remove()
                };
                setTimeout(function() {
                    o.addClass(t.options.animationClasses.classout);
                    t.$menu.addClass(t.options.animationClasses.classin);
                    if (t.supportAnimations) {
                        t.$menu.on(t.animEndEventName, u)
                    } else {
                        u.call()
                    }
                    s.removeClass("dl-subviewopen");
                    var e = r.parents(".dl-subview:first");
                    if (e.is("li")) {
                        e.addClass("dl-subviewopen")
                    }
                    e.removeClass("dl-subview")
                });
                return false
            })
        },
        closeMenu: function() {
            if (this.open) {
                this._closeMenu()
            }
        },
        _closeMenu: function() {
            var e = this,
            t = function() {
                e.$menu.off(e.transEndEventName);
                e._resetMenu()
            };
            this.$menu.removeClass("dl-menuopen");
            this.$menu.addClass("dl-menu-toggle");
            this.$trigger.removeClass("dl-active");
            if (this.supportTransitions) {
                this.$menu.on(this.transEndEventName, t)
            } else {
                t.call()
            }
            this.open = false
        },
        openMenu: function() {
            if (!this.open) {
                this._openMenu()
            }
        },
        _openMenu: function() {
            var t = this;
            i.off("click").on("click.dlmenu",
            function() {
                t._closeMenu()
            });
            this.$menu.addClass("dl-menuopen dl-menu-toggle").on(this.transEndEventName,
            function() {
                e(this).removeClass("dl-menu-toggle")
            });
            this.$trigger.addClass("dl-active");
            this.open = true
        },
        _resetMenu: function() {
            this.$menu.removeClass("dl-subview");
            this.$menuitems.removeClass("dl-subview dl-subviewopen")
        }
    };
    var s = function(e) {
        if (t.console) {
            t.console.error(e)
        }
    };
    e.fn.dlmenu = function(t) {
        if (typeof t === "string") {
            var n = Array.prototype.slice.call(arguments, 1);
            this.each(function() {
                var r = e.data(this, "dlmenu");
                if (!r) {
                    s("cannot call methods on dlmenu prior to initialization; " + "attempted to call method '" + t + "'");
                    return
                }
                if (!e.isFunction(r[t]) || t.charAt(0) === "_") {
                    s("no such method '" + t + "' for dlmenu instance");
                    return
                }
                r[t].apply(r, n)
            })
        } else {
            this.each(function() {
                var n = e.data(this, "dlmenu");
                if (n) {
                    n._init()
                } else {
                    n = e.data(this, "dlmenu", new e.DLMenu(t, this))
                }
            })
        }
        return this
    }
})(jQuery, window); (function(e) {
    if (typeof define === "function" && define.amd) {
        define(["jquery"], e)
    } else if (typeof exports === "object") {
        module.exports = e
    } else {
        e(jQuery)
    }
})(function(e) {
    function o(t) {
        var n = t || window.event,
        s = [].slice.call(arguments, 1),
        o = 0,
        u = 0,
        a = 0,
        f = 0,
        l = 0,
        c;
        t = e.event.fix(n);
        t.type = "mousewheel";
        if (n.wheelDelta) {
            o = n.wheelDelta
        }
        if (n.detail) {
            o = n.detail * -1
        }
        if (n.deltaY) {
            a = n.deltaY * -1;
            o = a
        }
        if (n.deltaX) {
            u = n.deltaX;
            o = u * -1
        }
        if (n.wheelDeltaY !== undefined) {
            a = n.wheelDeltaY
        }
        if (n.wheelDeltaX !== undefined) {
            u = n.wheelDeltaX * -1
        }
        f = Math.abs(o);
        if (!r || f < r) {
            r = f
        }
        l = Math.max(Math.abs(a), Math.abs(u));
        if (!i || l < i) {
            i = l
        }
        c = o > 0 ? "floor": "ceil";
        o = Math[c](o / r);
        u = Math[c](u / i);
        a = Math[c](a / i);
        s.unshift(t, o, u, a);
        return (e.event.dispatch || e.event.handle).apply(this, s)
    }
    var t = ["wheel", "mousewheel", "DOMMouseScroll", "MozMousePixelScroll"];
    var n = "onwheel" in document || document.documentMode >= 9 ? ["wheel"] : ["mousewheel", "DomMouseScroll", "MozMousePixelScroll"];
    var r, i;
    if (e.event.fixHooks) {
        for (var s = t.length; s;) {
            e.event.fixHooks[t[--s]] = e.event.mouseHooks
        }
    }
    e.event.special.mousewheel = {
        setup: function() {
            if (this.addEventListener) {
                for (var e = n.length; e;) {
                    this.addEventListener(n[--e], o, false)
                }
            } else {
                this.onmousewheel = o
            }
        },
        teardown: function() {
            if (this.removeEventListener) {
                for (var e = n.length; e;) {
                    this.removeEventListener(n[--e], o, false)
                }
            } else {
                this.onmousewheel = null
            }
        }
    };
    e.fn.extend({
        mousewheel: function(e) {
            return e ? this.bind("mousewheel", e) : this.trigger("mousewheel")
        },
        unmousewheel: function(e) {
            return this.unbind("mousewheel", e)
        }
    })
});
jQuery.easing["jswing"] = jQuery.easing["swing"];
jQuery.extend(jQuery.easing, {
    def: "easeOutQuad",
    swing: function(e, t, n, r, i) {
        return jQuery.easing[jQuery.easing.def](e, t, n, r, i)
    },
    easeInQuad: function(e, t, n, r, i) {
        return r * (t /= i) * t + n
    },
    easeOutQuad: function(e, t, n, r, i) {
        return - r * (t /= i) * (t - 2) + n
    },
    easeInOutQuad: function(e, t, n, r, i) {
        if ((t /= i / 2) < 1) return r / 2 * t * t + n;
        return - r / 2 * (--t * (t - 2) - 1) + n
    },
    easeInCubic: function(e, t, n, r, i) {
        return r * (t /= i) * t * t + n
    },
    easeOutCubic: function(e, t, n, r, i) {
        return r * ((t = t / i - 1) * t * t + 1) + n
    },
    easeInOutCubic: function(e, t, n, r, i) {
        if ((t /= i / 2) < 1) return r / 2 * t * t * t + n;
        return r / 2 * ((t -= 2) * t * t + 2) + n
    },
    easeInQuart: function(e, t, n, r, i) {
        return r * (t /= i) * t * t * t + n
    },
    easeOutQuart: function(e, t, n, r, i) {
        return - r * ((t = t / i - 1) * t * t * t - 1) + n
    },
    easeInOutQuart: function(e, t, n, r, i) {
        if ((t /= i / 2) < 1) return r / 2 * t * t * t * t + n;
        return - r / 2 * ((t -= 2) * t * t * t - 2) + n
    },
    easeInQuint: function(e, t, n, r, i) {
        return r * (t /= i) * t * t * t * t + n
    },
    easeOutQuint: function(e, t, n, r, i) {
        return r * ((t = t / i - 1) * t * t * t * t + 1) + n
    },
    easeInOutQuint: function(e, t, n, r, i) {
        if ((t /= i / 2) < 1) return r / 2 * t * t * t * t * t + n;
        return r / 2 * ((t -= 2) * t * t * t * t + 2) + n
    },
    easeInSine: function(e, t, n, r, i) {
        return - r * Math.cos(t / i * (Math.PI / 2)) + r + n
    },
    easeOutSine: function(e, t, n, r, i) {
        return r * Math.sin(t / i * (Math.PI / 2)) + n
    },
    easeInOutSine: function(e, t, n, r, i) {
        return - r / 2 * (Math.cos(Math.PI * t / i) - 1) + n
    },
    easeInExpo: function(e, t, n, r, i) {
        return t == 0 ? n: r * Math.pow(2, 10 * (t / i - 1)) + n
    },
    easeOutExpo: function(e, t, n, r, i) {
        return t == i ? n + r: r * ( - Math.pow(2, -10 * t / i) + 1) + n
    },
    easeInOutExpo: function(e, t, n, r, i) {
        if (t == 0) return n;
        if (t == i) return n + r;
        if ((t /= i / 2) < 1) return r / 2 * Math.pow(2, 10 * (t - 1)) + n;
        return r / 2 * ( - Math.pow(2, -10 * --t) + 2) + n
    },
    easeInCirc: function(e, t, n, r, i) {
        return - r * (Math.sqrt(1 - (t /= i) * t) - 1) + n
    },
    easeOutCirc: function(e, t, n, r, i) {
        return r * Math.sqrt(1 - (t = t / i - 1) * t) + n
    },
    easeInOutCirc: function(e, t, n, r, i) {
        if ((t /= i / 2) < 1) return - r / 2 * (Math.sqrt(1 - t * t) - 1) + n;
        return r / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + n
    },
    easeInElastic: function(e, t, n, r, i) {
        var s = 1.70158;
        var o = 0;
        var u = r;
        if (t == 0) return n;
        if ((t /= i) == 1) return n + r;
        if (!o) o = i * .3;
        if (u < Math.abs(r)) {
            u = r;
            var s = o / 4
        } else var s = o / (2 * Math.PI) * Math.asin(r / u);
        return - (u * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * i - s) * 2 * Math.PI / o)) + n
    },
    easeOutElastic: function(e, t, n, r, i) {
        var s = 1.70158;
        var o = 0;
        var u = r;
        if (t == 0) return n;
        if ((t /= i) == 1) return n + r;
        if (!o) o = i * .3;
        if (u < Math.abs(r)) {
            u = r;
            var s = o / 4
        } else var s = o / (2 * Math.PI) * Math.asin(r / u);
        return u * Math.pow(2, -10 * t) * Math.sin((t * i - s) * 2 * Math.PI / o) + r + n
    },
    easeInOutElastic: function(e, t, n, r, i) {
        var s = 1.70158;
        var o = 0;
        var u = r;
        if (t == 0) return n;
        if ((t /= i / 2) == 2) return n + r;
        if (!o) o = i * .3 * 1.5;
        if (u < Math.abs(r)) {
            u = r;
            var s = o / 4
        } else var s = o / (2 * Math.PI) * Math.asin(r / u);
        if (t < 1) return - .5 * u * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * i - s) * 2 * Math.PI / o) + n;
        return u * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * i - s) * 2 * Math.PI / o) * .5 + r + n
    },
    easeInBack: function(e, t, n, r, i, s) {
        if (s == undefined) s = 1.70158;
        return r * (t /= i) * t * ((s + 1) * t - s) + n
    },
    easeOutBack: function(e, t, n, r, i, s) {
        if (s == undefined) s = 1.70158;
        return r * ((t = t / i - 1) * t * ((s + 1) * t + s) + 1) + n
    },
    easeInOutBack: function(e, t, n, r, i, s) {
        if (s == undefined) s = 1.70158;
        if ((t /= i / 2) < 1) return r / 2 * t * t * (((s *= 1.525) + 1) * t - s) + n;
        return r / 2 * ((t -= 2) * t * (((s *= 1.525) + 1) * t + s) + 2) + n
    },
    easeInBounce: function(e, t, n, r, i) {
        return r - jQuery.easing.easeOutBounce(e, i - t, 0, r, i) + n
    },
    easeOutBounce: function(e, t, n, r, i) {
        if ((t /= i) < 1 / 2.75) {
            return r * 7.5625 * t * t + n
        } else if (t < 2 / 2.75) {
            return r * (7.5625 * (t -= 1.5 / 2.75) * t + .75) + n
        } else if (t < 2.5 / 2.75) {
            return r * (7.5625 * (t -= 2.25 / 2.75) * t + .9375) + n
        } else {
            return r * (7.5625 * (t -= 2.625 / 2.75) * t + .984375) + n
        }
    },
    easeInOutBounce: function(e, t, n, r, i) {
        if (t < i / 2) return jQuery.easing.easeInBounce(e, t * 2, 0, r, i) * .5 + n;
        return jQuery.easing.easeOutBounce(e, t * 2 - i, 0, r, i) * .5 + r * .5 + n
    }
}); (function(e) {
    var t = e.event,
    n, r = {
        _: 0
    },
    i = 0,
    s,
    o;
    n = t.special.throttledresize = {
        setup: function() {
            e(this).on("resize", n.handler)
        },
        teardown: function() {
            e(this).off("resize", n.handler)
        },
        handler: function(u, a) {
            var f = this,
            l = arguments;
            s = true;
            if (!o) {
                setInterval(function() {
                    i++;
                    if (i > n.threshold && s || a) {
                        u.type = "throttledresize";
                        t.dispatch.apply(f, l);
                        s = false;
                        i = 0
                    }
                    if (i > 9) {
                        e(r).stop();
                        o = false;
                        i = 0
                    }
                },
                30);
                o = true
            }
        },
        threshold: 0
    }
})(jQuery); (function(e) {
    var t = e.event,
    n, r;
    n = t.special.debouncedresize = {
        setup: function() {
            e(this).on("resize", n.handler)
        },
        teardown: function() {
            e(this).off("resize", n.handler)
        },
        handler: function(e, i) {
            var s = this,
            o = arguments,
            u = function() {
                e.type = "debouncedresize";
                t.dispatch.apply(s, o)
            };
            if (r) {
                clearTimeout(r)
            }
            i ? u() : r = setTimeout(u, n.threshold)
        },
        threshold: 150
    }
})(jQuery); (function(e) {
    function t(t) {
        if (t && void 0 === t.allowPageScroll && (void 0 !== t.swipe || void 0 !== t.swipeStatus)) t.allowPageScroll = u;
        t || (t = {});
        t = e.extend({},
        e.fn.swipe.defaults, t);
        return this.each(function() {
            var r = e(this),
            i = r.data(g);
            i || (i = new n(this, t), r.data(g, i))
        })
    }
    function n(t, n) {
        function k(e) {
            var e = e.originalEvent,
            t, r = m ? e.touches[0] : e;
            Y = h;
            m ? Z = e.touches.length: e.preventDefault();
            $ = 0;
            J = null;
            K = 0; ! m || Z === n.fingers || n.fingers === c ? (E = y = r.pageX, S = b = r.pageY, et = (new Date).getTime(), n.swipeStatus && (t = D(e, Y))) : _(e);
            if (!1 === t) return Y = v,
            D(e, Y),
            t;
            Q.bind(W, L);
            Q.bind(X, O)
        }
        function L(e) {
            e = e.originalEvent;
            if (! (Y === d || Y === v)) {
                var t, h = m ? e.touches[0] : e;
                y = h.pageX;
                b = h.pageY;
                tt = (new Date).getTime();
                J = j();
                m && (Z = e.touches.length);
                Y = p;
                var h = e,
                g = J;
                if (n.allowPageScroll === u) h.preventDefault();
                else {
                    var w = n.allowPageScroll === a;
                    switch (g) {
                    case r:
                        (n.swipeLeft && w || !w && n.allowPageScroll != f) && h.preventDefault();
                        break;
                    case i:
                        (n.swipeRight && w || !w && n.allowPageScroll != f) && h.preventDefault();
                        break;
                    case s:
                        (n.swipeUp && w || !w && n.allowPageScroll != l) && h.preventDefault();
                        break;
                    case o:
                        (n.swipeDown && w || !w && n.allowPageScroll != l) && h.preventDefault()
                    }
                }
                Z === n.fingers || n.fingers === c || !m ? ($ = H(), K = tt - et, n.swipeStatus && (t = D(e, Y, J, $, K)), n.triggerOnTouchEnd || (h = !(n.maxTimeThreshold ? !(K >= n.maxTimeThreshold) : 1), !0 === P() ? (Y = d, t = D(e, Y)) : h && (Y = v, D(e, Y)))) : (Y = v, D(e, Y)); ! 1 === t && (Y = v, D(e, Y))
            }
        }
        function O(e) {
            e = e.originalEvent;
            e.preventDefault();
            tt = (new Date).getTime();
            $ = H();
            J = j();
            K = tt - et;
            if (n.triggerOnTouchEnd || !1 === n.triggerOnTouchEnd && Y === p) if (Y = d, (Z === n.fingers || n.fingers === c || !m) && 0 !== y) {
                var t = !(n.maxTimeThreshold ? !(K >= n.maxTimeThreshold) : 1);
                if ((!0 === P() || null === P()) && !t) D(e, Y);
                else if (t || !1 === P()) Y = v,
                D(e, Y)
            } else Y = v,
            D(e, Y);
            else Y === p && (Y = v, D(e, Y));
            Q.unbind(W, L, !1);
            Q.unbind(X, O, !1)
        }
        function _() {
            et = tt = b = y = S = E = Z = 0
        }
        function D(e, t) {
            var u = void 0;
            n.swipeStatus && (u = n.swipeStatus.call(Q, e, t, J || null, $ || 0, K || 0, Z));
            if (t === v && n.click && (1 === Z || !m) && (isNaN($) || 0 === $)) u = n.click.call(Q, e, e.target);
            if (t == d) switch (n.swipe && (u = n.swipe.call(Q, e, J, $, K, Z)), J) {
            case r:
                n.swipeLeft && (u = n.swipeLeft.call(Q, e, J, $, K, Z));
                break;
            case i:
                n.swipeRight && (u = n.swipeRight.call(Q, e, J, $, K, Z));
                break;
            case s:
                n.swipeUp && (u = n.swipeUp.call(Q, e, J, $, K, Z));
                break;
            case o:
                n.swipeDown && (u = n.swipeDown.call(Q, e, J, $, K, Z))
            } (t === v || t === d) && _(e);
            return u
        }
        function P() {
            return null !== n.threshold ? $ >= n.threshold: null
        }
        function H() {
            return Math.round(Math.sqrt(Math.pow(y - E, 2) + Math.pow(b - S, 2)))
        }
        function j() {
            var e;
            e = Math.atan2(b - S, E - y);
            e = Math.round(180 * e / Math.PI);
            0 > e && (e = 360 - Math.abs(e));
            return 45 >= e && 0 <= e ? r: 360 >= e && 315 <= e ? r: 135 <= e && 225 >= e ? i: 45 < e && 135 > e ? o: s
        }
        function F() {
            Q.unbind(U, k);
            Q.unbind(V, _);
            Q.unbind(W, L);
            Q.unbind(X, O)
        }
        var y, b, E, S;
        var I = m || !n.fallbackToMouseEvents,
        U = I ? "touchstart": "mousedown",
        W = I ? "touchmove": "mousemove",
        X = I ? "touchend": "mouseup",
        V = "touchcancel",
        $ = 0,
        J = null,
        K = 0,
        Q = e(t),
        Y = "start",
        Z = 0,
        et = b = y = S = E = 0,
        tt = 0;
        try {
            Q.bind(U, k),
            Q.bind(V, _)
        } catch(nt) {
            e.error("events not supported " + U + "," + V + " on jQuery.swipe")
        }
        this.enable = function() {
            Q.bind(U, k);
            Q.bind(V, _);
            return Q
        };
        this.disable = function() {
            F();
            return Q
        };
        this.destroy = function() {
            F();
            Q.data(g, null);
            return Q
        }
    }
    var r = "left",
    i = "right",
    s = "up",
    o = "down",
    u = "none",
    a = "auto",
    f = "horizontal",
    l = "vertical",
    c = "all",
    h = "start",
    p = "move",
    d = "end",
    v = "cancel",
    m = "ontouchstart" in window,
    g = "TouchSwipe";
    e.fn.swipe = function(n) {
        var r = e(this),
        i = r.data(g);
        if (i && "string" === typeof n) {
            if (i[n]) return i[n].apply(this, Array.prototype.slice.call(arguments, 1));
            e.error("Method " + n + " does not exist on jQuery.swipe")
        } else if (!i && ("object" === typeof n || !n)) return t.apply(this, arguments);
        return r
    };
    e.fn.swipe.defaults = {
        fingers: 1,
        threshold: 75,
        maxTimeThreshold: null,
        swipe: null,
        swipeLeft: null,
        swipeRight: null,
        swipeUp: null,
        swipeDown: null,
        swipeStatus: null,
        click: null,
        triggerOnTouchEnd: !0,
        allowPageScroll: "auto",
        fallbackToMouseEvents: !0
    };
    e.fn.swipe.phases = {
        PHASE_START: h,
        PHASE_MOVE: p,
        PHASE_END: d,
        PHASE_CANCEL: v
    };
    e.fn.swipe.directions = {
        LEFT: r,
        RIGHT: i,
        UP: s,
        DOWN: o
    };
    e.fn.swipe.pageScroll = {
        NONE: u,
        HORIZONTAL: f,
        VERTICAL: l,
        AUTO: a
    };
    e.fn.swipe.fingers = {
        ONE: 1,
        TWO: 2,
        THREE: 3,
        ALL: c
    }
})(jQuery); (function(e, t, n, r) {
    "use strict";
    var i = "prettyCheckable",
    s = "plugin_" + i,
    o = {
        label: "",
        labelPosition: "right",
        customClass: "",
        color: "blue"
    };
    var u = function(n) {
        if (t.ko) {
            e(n).on("change",
            function(t) {
                t.preventDefault();
                if (t.originalEvent === r) {
                    var n = e(this).closest(".clearfix"),
                    i = e(n).find("a"),
                    s = i.hasClass("checked");
                    if (s === true) {
                        i.addClass("checked")
                    } else {
                        i.removeClass("checked")
                    }
                }
            })
        }
        n.find("label").hoverIntent({
            over: function() {
                if (e(this).siblings("a").hasClass("disabled")) return;
                e(this).parent().addClass("hover")
            },
            out: function() {
                if (e(this).siblings("a").hasClass("disabled")) return;
                e(this).parent().removeClass("hover")
            },
            timeout: 10
        });
        n.find("a, label").on("touchstart click",
        function(n) {
            n.preventDefault();
            var r = e(this).closest(".clearfix"),
            i = r.find("input"),
            s = r.find("a");
            if (s.hasClass("disabled") === true) {
                return
            }
            if (i.prop("type") === "radio") {
                e('input[name="' + i.attr("name") + '"]').each(function(t, n) {
                    e(n).prop("checked", false).parent().find("a").removeClass("checked")
                })
            }
            if (t.ko) {
                ko.utils.triggerEvent(i[0], "click")
            } else {
                if (i.prop("checked")) {
                    i.prop("checked", false).change()
                } else {
                    i.prop("checked", true).change()
                }
            }
            s.toggleClass("checked");
            s.closest(".fakeInput").toggleClass("checked")
        });
        n.find("a").on("keyup",
        function(t) {
            if (t.keyCode === 32) {
                e(this).click()
            }
        })
    };
    var a = function(t) {
        this.element = t;
        this.options = e.extend({},
        o)
    };
    a.prototype = {
        init: function(t) {
            e.extend(this.options, t);
            var n = e(this.element);
            n.parent().addClass("has-pretty-child");
            n.css("display", "none");
            var i = n.data("type") !== r ? n.data("type") : n.attr("type");
            var s = n.data("label") !== r ? n.data("label") : this.options.label;
            var o = n.data("labelposition") !== r ? "label" + n.data("labelposition") : "label" + this.options.labelPosition;
            var a = n.data("customclass") !== r ? n.data("customclass") : this.options.customClass;
            var f = n.data("color") !== r ? n.data("color") : this.options.color;
            var l = n.prop("disabled") === true ? "disabled": "";
            var c = ["pretty" + i, o, a, f, "fakeInput"].join(" ");
            n.wrap('<div class="clearfix ' + c + '"></div>').parent().html();
            var h = [];
            var p = n.prop("checked") ? "checked": "";
            if (o === "labelright") {
                h.push('<a href="#" class="' + p + " " + l + '"></a>');
                h.push('<label for="' + n.attr("id") + '">' + s + "</label>")
            } else {
                h.push('<label for="' + n.attr("id") + '">' + s + "</label>");
                h.push('<a href="#" class="' + p + " " + l + '"></a>')
            }
            n.parent().append(h.join("\n"));
            u(n.parent())
        },
        check: function() {
            e(this.element).prop("checked", true).attr("checked", true).parent().find("a").addClass("checked")
        },
        uncheck: function() {
            e(this.element).prop("checked", false).attr("checked", false).parent().find("a").removeClass("checked")
        },
        enable: function() {
            e(this.element).removeAttr("disabled").parent().find("a").removeClass("disabled")
        },
        disable: function() {
            e(this.element).attr("disabled", "disabled").parent().find("a").addClass("disabled")
        },
        destroy: function() {
            var t = e(this.element),
            n = t.clone();
            n.removeAttr("style").insertBefore(t.parent());
            t.parent().remove()
        }
    };
    e.fn[i] = function(t) {
        var n, r;
        if (! (this.data(s) instanceof a)) {
            this.data(s, new a(this))
        }
        r = this.data(s);
        r.element = this;
        if (typeof t === "undefined" || typeof t === "object") {
            if (typeof r.init === "function") {
                r.init(t)
            }
        } else if (typeof t === "string" && typeof r[t] === "function") {
            n = Array.prototype.slice.call(arguments, 1);
            return r[t].apply(r, n)
        } else {
            e.error("Method " + t + " does not exist on jQuery." + i)
        }
    }
})(jQuery, window, document); (function() {
    function e(e) {
        this.path = e;
        var t = this.path.split("."),
        n = t.slice(0, t.length - 1).join("."),
        r = t[t.length - 1];
        this.at_2x_path = n + "@2x." + r
    }
    function t(t) {
        this.el = t,
        this.path = new e(this.el.getAttribute("src"));
        var n = this;
        this.path.check_2x_variant(function(e) {
            e && n.swap()
        })
    }
    var n = typeof exports == "undefined" ? window: exports;
    n.RetinaImagePath = e,
    e.confirmed_paths = [],
    e.prototype.is_external = function() {
        return !! this.path.match(/^https?\:/i) && !this.path.match("//" + document.domain)
    },
    e.prototype.check_2x_variant = function(t) {
        var n, r = this;
        if (this.is_external()) return t(!1);
        if (this.at_2x_path in e.confirmed_paths) return t(!0);
        n = new XMLHttpRequest,
        n.open("HEAD", this.at_2x_path),
        n.onreadystatechange = function() {
            return n.readyState != 4 ? t(!1) : n.status >= 200 && n.status <= 399 ? (e.confirmed_paths.push(r.at_2x_path), t(!0)) : t(!1)
        },
        n.send()
    },
    n.RetinaImage = t,
    t.prototype.swap = function(e) {
        function t() {
            n.el.complete ? (n.el.setAttribute("width", n.el.offsetWidth), n.el.setAttribute("height", n.el.offsetHeight), n.el.setAttribute("src", e)) : setTimeout(t, 5)
        }
        typeof e == "undefined" && (e = this.path.at_2x_path);
        var n = this;
        t()
    },
    n.devicePixelRatio > 1 && (window.onload = function() {
        var e = document.getElementsByTagName("img"),
        n = [],
        r,
        i;
        for (r = 0; r < e.length; r++) i = e[r],
        n.push(new t(i))
    })
})();
css_browser_selector(navigator.userAgent); (function(e) {
    e.fn.extend({
        simulate: function(t, n) {
            return this.each(function() {
                var r = e.extend({},
                e.simulate.defaults, n || {});
                new e.simulate(this, t, r)
            })
        }
    });
    e.simulate = function(e, t, n) {
        this.target = e;
        this.options = n;
        if (/^drag$/.test(t)) {
            this[t].apply(this, [this.target, n])
        } else {
            this.simulateEvent(e, t, n)
        }
    };
    e.extend(e.simulate.prototype, {
        simulateEvent: function(e, t, n) {
            var r = this.createEvent(t, n);
            this.dispatchEvent(e, t, r, n);
            return r
        },
        createEvent: function(e, t) {
            if (/^mouse(over|out|down|up|move)|(dbl)?click$/.test(e)) {
                return this.mouseEvent(e, t)
            } else if (/^key(up|down|press)$/.test(e)) {
                return this.keyboardEvent(e, t)
            }
        },
        mouseEvent: function(t, n) {
            var r;
            var i = e.extend({
                bubbles: true,
                cancelable: t != "mousemove",
                view: window,
                detail: 0,
                screenX: 0,
                screenY: 0,
                clientX: 0,
                clientY: 0,
                ctrlKey: false,
                altKey: false,
                shiftKey: false,
                metaKey: false,
                button: 0,
                relatedTarget: undefined
            },
            n);
            var s = e(i.relatedTarget)[0];
            if (e.isFunction(document.createEvent)) {
                r = document.createEvent("MouseEvents");
                r.initMouseEvent(t, i.bubbles, i.cancelable, i.view, i.detail, i.screenX, i.screenY, i.clientX, i.clientY, i.ctrlKey, i.altKey, i.shiftKey, i.metaKey, i.button, i.relatedTarget || document.body.parentNode)
            } else if (document.createEventObject) {
                r = document.createEventObject();
                e.extend(r, i);
                r.button = {
                    0 : 1,
                    1 : 4,
                    2 : 2
                } [r.button] || r.button
            }
            return r
        },
        keyboardEvent: function(t, n) {
            var r;
            var i = e.extend({
                bubbles: true,
                cancelable: true,
                view: window,
                ctrlKey: false,
                altKey: false,
                shiftKey: false,
                metaKey: false,
                keyCode: 0,
                charCode: 0
            },
            n);
            if (e.isFunction(document.createEvent)) {
                try {
                    r = document.createEvent("KeyEvents");
                    r.initKeyEvent(t, i.bubbles, i.cancelable, i.view, i.ctrlKey, i.altKey, i.shiftKey, i.metaKey, i.keyCode, i.charCode)
                } catch(s) {
                    r = document.createEvent("Events");
                    r.initEvent(t, i.bubbles, i.cancelable);
                    e.extend(r, {
                        view: i.view,
                        ctrlKey: i.ctrlKey,
                        altKey: i.altKey,
                        shiftKey: i.shiftKey,
                        metaKey: i.metaKey,
                        keyCode: i.keyCode,
                        charCode: i.charCode
                    })
                }
            } else if (document.createEventObject) {
                r = document.createEventObject();
                e.extend(r, i)
            }
            if (e.browser !== undefined && (e.browser.msie || e.browser.opera)) {
                r.keyCode = i.charCode > 0 ? i.charCode: i.keyCode;
                r.charCode = undefined
            }
            return r
        },
        dispatchEvent: function(e, t, n) {
            if (e.dispatchEvent) {
                e.dispatchEvent(n)
            } else if (e.fireEvent) {
                e.fireEvent("on" + t, n)
            }
            return n
        },
        drag: function(e) {
            var t = this,
            n = this.findCenter(this.target),
            r = this.options,
            i = Math.floor(n.x),
            s = Math.floor(n.y),
            o = r.dx || 0,
            u = r.dy || 0,
            a = this.target;
            var f = {
                clientX: i,
                clientY: s
            };
            this.simulateEvent(a, "mousedown", f);
            f = {
                clientX: i + 1,
                clientY: s + 1
            };
            this.simulateEvent(document, "mousemove", f);
            f = {
                clientX: i + o,
                clientY: s + u
            };
            this.simulateEvent(document, "mousemove", f);
            this.simulateEvent(document, "mousemove", f);
            this.simulateEvent(a, "mouseup", f)
        },
        findCenter: function(t) {
            var t = e(this.target),
            n = t.offset();
            return {
                x: n.left + t.outerWidth() / 2,
                y: n.top + t.outerHeight() / 2
            }
        }
    });
    e.extend(e.simulate, {
        defaults: {
            speed: "sync"
        },
        VK_TAB: 9,
        VK_ENTER: 13,
        VK_ESC: 27,
        VK_PGUP: 33,
        VK_PGDN: 34,
        VK_END: 35,
        VK_HOME: 36,
        VK_LEFT: 37,
        VK_UP: 38,
        VK_RIGHT: 39,
        VK_DOWN: 40
    })
})(jQuery); (function(e) {
    var t, n, r, i, s, o, u, a = "Close",
    f = "BeforeClose",
    l = "AfterClose",
    c = "BeforeAppend",
    h = "MarkupParse",
    p = "Open",
    d = "Change",
    v = "mfp",
    m = "." + v,
    g = "mfp-ready",
    y = "mfp-removing",
    b = "mfp-prevent-close",
    w = function() {},
    E = !!window.jQuery,
    S = e(window),
    x = function(e, n) {
        t.ev.on(v + e + m, n)
    },
    T = function(t, n, r, i) {
        var s = document.createElement("div");
        return s.className = "mfp-" + t,
        r && (s.innerHTML = r),
        i ? n && n.appendChild(s) : (s = e(s), n && s.appendTo(n)),
        s
    },
    N = function(n, r) {
        t.ev.triggerHandler(v + n, r),
        t.st.callbacks && (n = n.charAt(0).toLowerCase() + n.slice(1), t.st.callbacks[n] && t.st.callbacks[n].apply(t, e.isArray(r) ? r: [r]))
    },
    C = function() { (t.st.focus ? t.content.find(t.st.focus).eq(0) : t.wrap).focus()
    },
    k = function(n) {
        return n === u && t.currTemplate.closeBtn || (t.currTemplate.closeBtn = e(t.st.closeMarkup.replace("%title%", t.st.tClose)), u = n),
        t.currTemplate.closeBtn
    },
    L = function() {
        e.magnificPopup.instance || (t = new w, t.init(), e.magnificPopup.instance = t)
    },
    A = function() {
        var e = document.createElement("p").style,
        t = ["ms", "O", "Moz", "Webkit"];
        if (void 0 !== e.transition) return ! 0;
        for (; t.length;) if (t.pop() + "Transition" in e) return ! 0;
        return ! 1
    };
    w.prototype = {
        constructor: w,
        init: function() {
            var n = navigator.appVersion;
            t.isIE7 = -1 !== n.indexOf("MSIE 7."),
            t.isIE8 = -1 !== n.indexOf("MSIE 8."),
            t.isLowIE = t.isIE7 || t.isIE8,
            t.isAndroid = /android/gi.test(n),
            t.isIOS = /iphone|ipad|ipod/gi.test(n),
            t.supportsTransition = A(),
            t.probablyMobile = t.isAndroid || t.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),
            r = e(document.body),
            i = e(document),
            t.popupsCache = {}
        },
        open: function(n) {
            var r;
            if (n.isObj === !1) {
                t.items = n.items.toArray(),
                t.index = 0;
                var s, u = n.items;
                for (r = 0; u.length > r; r++) if (s = u[r], s.parsed && (s = s.el[0]), s === n.el[0]) {
                    t.index = r;
                    break
                }
            } else t.items = e.isArray(n.items) ? n.items: [n.items],
            t.index = n.index || 0;
            if (t.isOpen) return t.updateItemHTML(),
            void 0;
            t.types = [],
            o = "",
            t.ev = n.mainEl && n.mainEl.length ? n.mainEl.eq(0) : i,
            n.key ? (t.popupsCache[n.key] || (t.popupsCache[n.key] = {}), t.currTemplate = t.popupsCache[n.key]) : t.currTemplate = {},
            t.st = e.extend(!0, {},
            e.magnificPopup.defaults, n),
            t.fixedContentPos = "auto" === t.st.fixedContentPos ? !t.probablyMobile: t.st.fixedContentPos,
            t.st.modal && (t.st.closeOnContentClick = !1, t.st.closeOnBgClick = !1, t.st.showCloseBtn = !1, t.st.enableEscapeKey = !1),
            t.bgOverlay || (t.bgOverlay = T("bg").on("click" + m,
            function() {
                t.close()
            }), t.wrap = T("wrap").attr("tabindex", -1).on("click" + m,
            function(e) {
                t._checkIfClose(e.target) && t.close()
            }), t.container = T("container", t.wrap)),
            t.contentContainer = T("content"),
            t.st.preloader && (t.preloader = T("preloader", t.container, t.st.tLoading));
            var a = e.magnificPopup.modules;
            for (r = 0; a.length > r; r++) {
                var f = a[r];
                f = f.charAt(0).toUpperCase() + f.slice(1),
                t["init" + f].call(t)
            }
            N("BeforeOpen"),
            t.st.showCloseBtn && (t.st.closeBtnInside ? (x(h,
            function(e, t, n, r) {
                n.close_replaceWith = k(r.type)
            }), o += " mfp-close-btn-in") : t.wrap.append(k())),
            t.st.alignTop && (o += " mfp-align-top"),
            t.fixedContentPos ? t.wrap.css({
                overflow: t.st.overflowY,
                overflowX: "hidden",
                overflowY: t.st.overflowY
            }) : t.wrap.css({
                top: S.scrollTop(),
                position: "absolute"
            }),
            (t.st.fixedBgPos === !1 || "auto" === t.st.fixedBgPos && !t.fixedContentPos) && t.bgOverlay.css({
                height: i.height(),
                position: "absolute"
            }),
            t.st.enableEscapeKey && i.on("keyup" + m,
            function(e) {
                27 === e.keyCode && t.close()
            }),
            S.on("resize" + m,
            function() {
                t.updateSize()
            }),
            t.st.closeOnContentClick || (o += " mfp-auto-cursor"),
            o && t.wrap.addClass(o);
            var l = t.wH = S.height(),
            c = {};
            if (t.fixedContentPos && t._hasScrollBar(l)) {
                var d = t._getScrollbarSize();
                d && (c.marginRight = d)
            }
            t.fixedContentPos && (t.isIE7 ? e("body, html").css("overflow", "hidden") : c.overflow = "hidden");
            var v = t.st.mainClass;
            return t.isIE7 && (v += " mfp-ie7"),
            v && t._addClassToMFP(v),
            t.updateItemHTML(),
            N("BuildControls"),
            e("html").css(c),
            t.bgOverlay.add(t.wrap).prependTo(document.body),
            t._lastFocusedEl = document.activeElement,
            setTimeout(function() {
                t.content ? (t._addClassToMFP(g), C()) : t.bgOverlay.addClass(g),
                i.on("focusin" + m,
                function(n) {
                    return n.target === t.wrap[0] || e.contains(t.wrap[0], n.target) ? void 0 : (C(), !1)
                })
            },
            16),
            t.isOpen = !0,
            t.updateSize(l),
            N(p),
            n
        },
        close: function() {
            t.isOpen && (N(f), t.isOpen = !1, t.st.removalDelay && !t.isLowIE && t.supportsTransition ? (t._addClassToMFP(y), setTimeout(function() {
                t._close()
            },
            t.st.removalDelay)) : t._close())
        },
        _close: function() {
            N(a);
            var n = y + " " + g + " ";
            if (t.bgOverlay.detach(), t.wrap.detach(), t.container.empty(), t.st.mainClass && (n += t.st.mainClass + " "), t._removeClassFromMFP(n), t.fixedContentPos) {
                var r = {
                    marginRight: ""
                };
                t.isIE7 ? e("body, html").css("overflow", "") : r.overflow = "",
                e("html").css(r)
            }
            i.off("keyup" + m + " focusin" + m),
            t.ev.off(m),
            t.wrap.attr("class", "mfp-wrap").removeAttr("style"),
            t.bgOverlay.attr("class", "mfp-bg"),
            t.container.attr("class", "mfp-container"),
            !t.st.showCloseBtn || t.st.closeBtnInside && t.currTemplate[t.currItem.type] !== !0 || t.currTemplate.closeBtn && t.currTemplate.closeBtn.detach(),
            t._lastFocusedEl && e(t._lastFocusedEl).focus(),
            t.currItem = null,
            t.content = null,
            t.currTemplate = null,
            t.prevHeight = 0,
            N(l)
        },
        updateSize: function(e) {
            if (t.isIOS) {
                var n = document.documentElement.clientWidth / window.innerWidth,
                r = window.innerHeight * n;
                t.wrap.css("height", r),
                t.wH = r
            } else t.wH = e || S.height();
            t.fixedContentPos || t.wrap.css("height", t.wH),
            N("Resize")
        },
        updateItemHTML: function() {
            var n = t.items[t.index];
            t.contentContainer.detach(),
            t.content && t.content.detach(),
            n.parsed || (n = t.parseEl(t.index));
            var r = n.type;
            if (N("BeforeChange", [t.currItem ? t.currItem.type: "", r]), t.currItem = n, !t.currTemplate[r]) {
                var i = t.st[r] ? t.st[r].markup: !1;
                N("FirstMarkupParse", i),
                t.currTemplate[r] = i ? e(i) : !0
            }
            s && s !== n.type && t.container.removeClass("mfp-" + s + "-holder");
            var o = t["get" + r.charAt(0).toUpperCase() + r.slice(1)](n, t.currTemplate[r]);
            t.appendContent(o, r),
            n.preloaded = !0,
            N(d, n),
            s = n.type,
            t.container.prepend(t.contentContainer),
            N("AfterChange")
        },
        appendContent: function(e, n) {
            t.content = e,
            e ? t.st.showCloseBtn && t.st.closeBtnInside && t.currTemplate[n] === !0 ? t.content.find(".mfp-close").length || t.content.append(k()) : t.content = e: t.content = "",
            N(c),
            t.container.addClass("mfp-" + n + "-holder"),
            t.contentContainer.append(t.content)
        },
        parseEl: function(n) {
            var r = t.items[n],
            i = r.type;
            if (r = r.tagName ? {
                el: e(r)
            }: {
                data: r,
                src: r.src
            },
            r.el) {
                for (var s = t.types,
                o = 0; s.length > o; o++) if (r.el.hasClass("mfp-" + s[o])) {
                    i = s[o];
                    break
                }
                r.src = r.el.attr("data-mfp-src"),
                r.src || (r.src = r.el.attr("href"))
            }
            return r.type = i || t.st.type || "inline",
            r.index = n,
            r.parsed = !0,
            t.items[n] = r,
            N("ElementParse", r),
            t.items[n]
        },
        addGroup: function(e, n) {
            var r = function(r) {
                r.mfpEl = this,
                t._openClick(r, e, n)
            };
            n || (n = {});
            var i = "click.magnificPopup";
            n.mainEl = e,
            n.items ? (n.isObj = !0, e.off(i).on(i, r)) : (n.isObj = !1, n.delegate ? e.off(i).on(i, n.delegate, r) : (n.items = e, e.off(i).on(i, r)))
        },
        _openClick: function(n, r, i) {
            var s = void 0 !== i.midClick ? i.midClick: e.magnificPopup.defaults.midClick;
            if (s || 2 !== n.which && !n.ctrlKey && !n.metaKey) {
                var o = void 0 !== i.disableOn ? i.disableOn: e.magnificPopup.defaults.disableOn;
                if (o) if (e.isFunction(o)) {
                    if (!o.call(t)) return ! 0
                } else if (o > S.width()) return ! 0;
                n.type && (n.preventDefault(), t.isOpen && n.stopPropagation()),
                i.el = e(n.mfpEl),
                i.delegate && (i.items = r.find(i.delegate)),
                t.open(i)
            }
        },
        updateStatus: function(e, r) {
            if (t.preloader) {
                n !== e && t.container.removeClass("mfp-s-" + n),
                r || "loading" !== e || (r = t.st.tLoading);
                var i = {
                    status: e,
                    text: r
                };
                N("UpdateStatus", i),
                e = i.status,
                r = i.text,
                t.preloader.html(r),
                t.preloader.find("a").on("click",
                function(e) {
                    e.stopImmediatePropagation()
                }),
                t.container.addClass("mfp-s-" + e),
                n = e
            }
        },
        _checkIfClose: function(n) {
            if (!e(n).hasClass(b)) {
                var r = t.st.closeOnContentClick,
                i = t.st.closeOnBgClick;
                if (r && i) return ! 0;
                if (!t.content || e(n).hasClass("mfp-close") || t.preloader && n === t.preloader[0]) return ! 0;
                if (n === t.content[0] || e.contains(t.content[0], n)) {
                    if (r) return ! 0
                } else if (i && e.contains(document, n)) return ! 0;
                return ! 1
            }
        },
        _addClassToMFP: function(e) {
            t.bgOverlay.addClass(e),
            t.wrap.addClass(e)
        },
        _removeClassFromMFP: function(e) {
            this.bgOverlay.removeClass(e),
            t.wrap.removeClass(e)
        },
        _hasScrollBar: function(e) {
            return (t.isIE7 ? i.height() : document.body.scrollHeight) > (e || S.height())
        },
        _parseMarkup: function(t, n, r) {
            var i;
            r.data && (n = e.extend(r.data, n)),
            N(h, [t, n, r]),
            e.each(n,
            function(e, n) {
                if (void 0 === n || n === !1) return ! 0;
                if (i = e.split("_"), i.length > 1) {
                    var r = t.find(m + "-" + i[0]);
                    if (r.length > 0) {
                        var s = i[1];
                        "replaceWith" === s ? r[0] !== n[0] && r.replaceWith(n) : "img" === s ? r.is("img") ? r.attr("src", n) : r.replaceWith('<img src="' + n + '" class="' + r.attr("class") + '" />') : r.attr(i[1], n)
                    }
                } else t.find(m + "-" + e).html(n)
            })
        },
        _getScrollbarSize: function() {
            if (void 0 === t.scrollbarSize) {
                var e = document.createElement("div");
                e.id = "mfp-sbm",
                e.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",
                document.body.appendChild(e),
                t.scrollbarSize = e.offsetWidth - e.clientWidth,
                document.body.removeChild(e)
            }
            return t.scrollbarSize
        }
    },
    e.magnificPopup = {
        instance: null,
        proto: w.prototype,
        modules: [],
        open: function(t, n) {
            return L(),
            t = t ? e.extend(!0, {},
            t) : {},
            t.isObj = !0,
            t.index = n || 0,
            this.instance.open(t)
        },
        close: function() {
            return e.magnificPopup.instance && e.magnificPopup.instance.close()
        },
        registerModule: function(t, n) {
            n.options && (e.magnificPopup.defaults[t] = n.options),
            e.extend(this.proto, n.proto),
            this.modules.push(t)
        },
        defaults: {
            disableOn: 0,
            key: null,
            midClick: !1,
            mainClass: "",
            preloader: !0,
            focus: "",
            closeOnContentClick: !1,
            closeOnBgClick: !0,
            closeBtnInside: !0,
            showCloseBtn: !0,
            enableEscapeKey: !0,
            modal: !1,
            alignTop: !1,
            removalDelay: 0,
            fixedContentPos: "auto",
            fixedBgPos: "auto",
            overflowY: "auto",
            closeMarkup: '<button title="%title%" type="button" class="mfp-close">&times;</button>',
            tClose: "Close (Esc)",
            tLoading: "Loading..."
        }
    },
    e.fn.magnificPopup = function(n) {
        L();
        var r = e(this);
        if ("string" == typeof n) if ("open" === n) {
            var i, s = E ? r.data("magnificPopup") : r[0].magnificPopup,
            o = parseInt(arguments[1], 10) || 0;
            s.items ? i = s.items[o] : (i = r, s.delegate && (i = i.find(s.delegate)), i = i.eq(o)),
            t._openClick({
                mfpEl: i
            },
            r, s)
        } else t.isOpen && t[n].apply(t, Array.prototype.slice.call(arguments, 1));
        else n = e.extend(!0, {},
        n),
        E ? r.data("magnificPopup", n) : r[0].magnificPopup = n,
        t.addGroup(r, n);
        return r
    };
    var O, M, _, D = "inline",
    P = function() {
        _ && (M.after(_.addClass(O)).detach(), _ = null)
    };
    e.magnificPopup.registerModule(D, {
        options: {
            hiddenClass: "hide",
            markup: "",
            tNotFound: "Content not found"
        },
        proto: {
            initInline: function() {
                t.types.push(D),
                x(a + "." + D,
                function() {
                    P()
                })
            },
            getInline: function(n, r) {
                if (P(), n.src) {
                    var i = t.st.inline,
                    s = e(n.src);
                    if (s.length) {
                        var o = s[0].parentNode;
                        o && o.tagName && (M || (O = i.hiddenClass, M = T(O), O = "mfp-" + O), _ = s.after(M).detach().removeClass(O)),
                        t.updateStatus("ready")
                    } else t.updateStatus("error", i.tNotFound),
                    s = e("<div>");
                    return n.inlineElement = s,
                    s
                }
                return t.updateStatus("ready"),
                t._parseMarkup(r, {},
                n),
                r
            }
        }
    });
    var H, B = "ajax",
    j = function() {
        H && r.removeClass(H)
    },
    F = function() {
        j(),
        t.req && t.req.abort()
    };
    e.magnificPopup.registerModule(B, {
        options: {
            settings: null,
            cursor: "mfp-ajax-cur",
            tError: '<a href="%url%">The content</a> could not be loaded.'
        },
        proto: {
            initAjax: function() {
                t.types.push(B),
                H = t.st.ajax.cursor,
                x(a + "." + B, F),
                x("BeforeChange." + B, F)
            },
            getAjax: function(n) {
                H && r.addClass(H),
                t.updateStatus("loading");
                var i = e.extend({
                    url: n.src,
                    success: function(r, i, s) {
                        var o = {
                            data: r,
                            xhr: s
                        };
                        N("ParseAjax", o),
                        t.appendContent(e(o.data), B),
                        n.finished = !0,
                        j(),
                        C(),
                        setTimeout(function() {
                            t.wrap.addClass(g)
                        },
                        16),
                        t.updateStatus("ready"),
                        N("AjaxContentAdded")
                    },
                    error: function() {
                        j(),
                        n.finished = n.loadError = !0,
                        t.updateStatus("error", t.st.ajax.tError.replace("%url%", n.src))
                    }
                },
                t.st.ajax.settings);
                return t.req = e.ajax(i),
                ""
            }
        }
    });
    var I, q = function(n) {
        if (n.data && void 0 !== n.data.title) return n.data.title;
        var r = t.st.image.titleSrc;
        if (r) {
            if (e.isFunction(r)) return r.call(t, n);
            if (n.el) return n.el.attr(r) || ""
        }
        return ""
    };
    e.magnificPopup.registerModule("image", {
        options: {
            markup: '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',
            cursor: "mfp-zoom-out-cur",
            titleSrc: "title",
            verticalFit: !0,
            tError: '<a href="%url%">The image</a> could not be loaded.'
        },
        proto: {
            initImage: function() {
                var e = t.st.image,
                n = ".image";
                t.types.push("image"),
                x(p + n,
                function() {
                    "image" === t.currItem.type && e.cursor && r.addClass(e.cursor)
                }),
                x(a + n,
                function() {
                    e.cursor && r.removeClass(e.cursor),
                    S.off("resize" + m)
                }),
                x("Resize" + n, t.resizeImage),
                t.isLowIE && x("AfterChange", t.resizeImage)
            },
            resizeImage: function() {
                var e = t.currItem;
                if (e && e.img && t.st.image.verticalFit) {
                    var n = 0;
                    t.isLowIE && (n = parseInt(e.img.css("padding-top"), 10) + parseInt(e.img.css("padding-bottom"), 10)),
                    e.img.css("max-height", t.wH - n)
                }
            },
            _onImageHasSize: function(e) {
                e.img && (e.hasSize = !0, I && clearInterval(I), e.isCheckingImgSize = !1, N("ImageHasSize", e), e.imgHidden && (t.content && t.content.removeClass("mfp-loading"), e.imgHidden = !1))
            },
            findImageSize: function(e) {
                var n = 0,
                r = e.img[0],
                i = function(s) {
                    I && clearInterval(I),
                    I = setInterval(function() {
                        return r.naturalWidth > 0 ? (t._onImageHasSize(e), void 0) : (n > 200 && clearInterval(I), n++, 3 === n ? i(10) : 40 === n ? i(50) : 100 === n && i(500), void 0)
                    },
                    s)
                };
                i(1)
            },
            getImage: function(n, r) {
                var i = 0,
                s = function() {
                    n && (n.img[0].complete ? (n.img.off(".mfploader"), n === t.currItem && (t._onImageHasSize(n), t.updateStatus("ready")), n.hasSize = !0, n.loaded = !0, N("ImageLoadComplete")) : (i++, 200 > i ? setTimeout(s, 100) : o()))
                },
                o = function() {
                    n && (n.img.off(".mfploader"), n === t.currItem && (t._onImageHasSize(n), t.updateStatus("error", u.tError.replace("%url%", n.src))), n.hasSize = !0, n.loaded = !0, n.loadError = !0)
                },
                u = t.st.image,
                a = r.find(".mfp-img");
                if (a.length) {
                    var f = document.createElement("img");
                    f.className = "mfp-img",
                    n.img = e(f).on("load.mfploader", s).on("error.mfploader", o),
                    f.src = n.src,
                    a.is("img") && (n.img = n.img.clone()),
                    n.img[0].naturalWidth > 0 && (n.hasSize = !0)
                }
                return t._parseMarkup(r, {
                    title: q(n),
                    img_replaceWith: n.img
                },
                n),
                t.resizeImage(),
                n.hasSize ? (I && clearInterval(I), n.loadError ? (r.addClass("mfp-loading"), t.updateStatus("error", u.tError.replace("%url%", n.src))) : (r.removeClass("mfp-loading"), t.updateStatus("ready")), r) : (t.updateStatus("loading"), n.loading = !0, n.hasSize || (n.imgHidden = !0, r.addClass("mfp-loading"), t.findImageSize(n)), r)
            }
        }
    });
    var R, U = function() {
        return void 0 === R && (R = void 0 !== document.createElement("p").style.MozTransform),
        R
    };
    e.magnificPopup.registerModule("zoom", {
        options: {
            enabled: !1,
            easing: "ease-in-out",
            duration: 300,
            opener: function(e) {
                return e.is("img") ? e: e.find("img")
            }
        },
        proto: {
            initZoom: function() {
                var e, n = t.st.zoom,
                r = ".zoom";
                if (n.enabled && t.supportsTransition) {
                    var i, s, o = n.duration,
                    u = function(e) {
                        var t = e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                        r = "all " + n.duration / 1e3 + "s " + n.easing,
                        i = {
                            position: "fixed",
                            zIndex: 9999,
                            left: 0,
                            top: 0,
                            "-webkit-backface-visibility": "hidden"
                        },
                        s = "transition";
                        return i["-webkit-" + s] = i["-moz-" + s] = i["-o-" + s] = i[s] = r,
                        t.css(i),
                        t
                    },
                    l = function() {
                        t.content.css("visibility", "visible")
                    };
                    x("BuildControls" + r,
                    function() {
                        if (t._allowZoom()) {
                            if (clearTimeout(i), t.content.css("visibility", "hidden"), e = t._getItemToZoom(), !e) return l(),
                            void 0;
                            s = u(e),
                            s.css(t._getOffset()),
                            t.wrap.append(s),
                            i = setTimeout(function() {
                                s.css(t._getOffset(!0)),
                                i = setTimeout(function() {
                                    l(),
                                    setTimeout(function() {
                                        s.remove(),
                                        e = s = null,
                                        N("ZoomAnimationEnded")
                                    },
                                    16)
                                },
                                o)
                            },
                            16)
                        }
                    }),
                    x(f + r,
                    function() {
                        if (t._allowZoom()) {
                            if (clearTimeout(i), t.st.removalDelay = o, !e) {
                                if (e = t._getItemToZoom(), !e) return;
                                s = u(e)
                            }
                            s.css(t._getOffset(!0)),
                            t.wrap.append(s),
                            t.content.css("visibility", "hidden"),
                            setTimeout(function() {
                                s.css(t._getOffset())
                            },
                            16)
                        }
                    }),
                    x(a + r,
                    function() {
                        t._allowZoom() && (l(), s && s.remove(), e = null)
                    })
                }
            },
            _allowZoom: function() {
                return "image" === t.currItem.type
            },
            _getItemToZoom: function() {
                return t.currItem.hasSize ? t.currItem.img: !1
            },
            _getOffset: function(n) {
                var r;
                r = n ? t.currItem.img: t.st.zoom.opener(t.currItem.el || t.currItem);
                var i = r.offset(),
                s = parseInt(r.css("padding-top"), 10),
                o = parseInt(r.css("padding-bottom"), 10);
                i.top -= e(window).scrollTop() - s;
                var u = {
                    width: r.width(),
                    height: (E ? r.innerHeight() : r[0].offsetHeight) - o - s
                };
                return U() ? u["-moz-transform"] = u.transform = "translate(" + i.left + "px," + i.top + "px)": (u.left = i.left, u.top = i.top),
                u
            }
        }
    });
    var z = "iframe",
    W = "//about:blank",
    X = function(e) {
        if (t.currTemplate[z]) {
            var n = t.currTemplate[z].find("iframe");
            n.length && (e || (n[0].src = W), t.isIE8 && n.css("display", e ? "block": "none"))
        }
    };
    e.magnificPopup.registerModule(z, {
        options: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',
            srcAction: "iframe_src",
            patterns: {
                youtube: {
                    index: "youtube.com",
                    id: "v=",
                    src: "//www.youtube.com/embed/%id%?autoplay=1"
                },
                vimeo: {
                    index: "vimeo.com/",
                    id: "/",
                    src: "//player.vimeo.com/video/%id%?autoplay=1"
                },
                gmaps: {
                    index: "//maps.google.",
                    src: "%id%&output=embed"
                }
            }
        },
        proto: {
            initIframe: function() {
                t.types.push(z),
                x("BeforeChange",
                function(e, t, n) {
                    t !== n && (t === z ? X() : n === z && X(!0))
                }),
                x(a + "." + z,
                function() {
                    X()
                })
            },
            getIframe: function(n, r) {
                var i = n.src,
                s = t.st.iframe;
                e.each(s.patterns,
                function() {
                    return i.indexOf(this.index) > -1 ? (this.id && (i = "string" == typeof this.id ? i.substr(i.lastIndexOf(this.id) + this.id.length, i.length) : this.id.call(this, i)), i = this.src.replace("%id%", i), !1) : void 0
                });
                var o = {};
                return s.srcAction && (o[s.srcAction] = i),
                t._parseMarkup(r, o, n),
                t.updateStatus("ready"),
                r
            }
        }
    });
    var V = function(e) {
        var n = t.items.length;
        return e > n - 1 ? e - n: 0 > e ? n + e: e
    },
    $ = function(e, t, n) {
        return e.replace(/%curr%/gi, t + 1).replace(/%total%/gi, n)
    };
    e.magnificPopup.registerModule("gallery", {
        options: {
            enabled: !1,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            preload: [0, 2],
            navigateByImgClick: !0,
            arrows: !0,
            tPrev: "Previous (Left arrow key)",
            tNext: "Next (Right arrow key)",
            tCounter: "%curr% of %total%"
        },
        proto: {
            initGallery: function() {
                var n = t.st.gallery,
                r = ".mfp-gallery",
                s = Boolean(e.fn.mfpFastClick);
                return t.direction = !0,
                n && n.enabled ? (o += " mfp-gallery", x(p + r,
                function() {
                    n.navigateByImgClick && t.wrap.on("click" + r, ".mfp-img",
                    function() {
                        return t.items.length > 1 ? (t.next(), !1) : void 0
                    }),
                    i.on("keydown" + r,
                    function(e) {
                        37 === e.keyCode ? t.prev() : 39 === e.keyCode && t.next()
                    })
                }), x("UpdateStatus" + r,
                function(e, n) {
                    n.text && (n.text = $(n.text, t.currItem.index, t.items.length))
                }), x(h + r,
                function(e, r, i, s) {
                    var o = t.items.length;
                    i.counter = o > 1 ? $(n.tCounter, s.index, o) : ""
                }), x("BuildControls" + r,
                function() {
                    if (t.items.length > 1 && n.arrows && !t.arrowLeft) {
                        var r = n.arrowMarkup,
                        i = t.arrowLeft = e(r.replace(/%title%/gi, n.tPrev).replace(/%dir%/gi, "left")).addClass(b),
                        o = t.arrowRight = e(r.replace(/%title%/gi, n.tNext).replace(/%dir%/gi, "right")).addClass(b),
                        u = s ? "mfpFastClick": "click";
                        i[u](function() {
                            t.prev()
                        }),
                        o[u](function() {
                            t.next()
                        }),
                        t.isIE7 && (T("b", i[0], !1, !0), T("a", i[0], !1, !0), T("b", o[0], !1, !0), T("a", o[0], !1, !0)),
                        t.container.append(i.add(o))
                    }
                }), x(d + r,
                function() {
                    t._preloadTimeout && clearTimeout(t._preloadTimeout),
                    t._preloadTimeout = setTimeout(function() {
                        t.preloadNearbyImages(),
                        t._preloadTimeout = null
                    },
                    16)
                }), x(a + r,
                function() {
                    i.off(r),
                    t.wrap.off("click" + r),
                    t.arrowLeft && s && t.arrowLeft.add(t.arrowRight).destroyMfpFastClick(),
                    t.arrowRight = t.arrowLeft = null
                }), void 0) : !1
            },
            next: function() {
                t.direction = !0,
                t.index = V(t.index + 1),
                t.updateItemHTML()
            },
            prev: function() {
                t.direction = !1,
                t.index = V(t.index - 1),
                t.updateItemHTML()
            },
            goTo: function(e) {
                t.direction = e >= t.index,
                t.index = e,
                t.updateItemHTML()
            },
            preloadNearbyImages: function() {
                var e, n = t.st.gallery.preload,
                r = Math.min(n[0], t.items.length),
                i = Math.min(n[1], t.items.length);
                for (e = 1; (t.direction ? i: r) >= e; e++) t._preloadItem(t.index + e);
                for (e = 1; (t.direction ? r: i) >= e; e++) t._preloadItem(t.index - e)
            },
            _preloadItem: function(n) {
                if (n = V(n), !t.items[n].preloaded) {
                    var r = t.items[n];
                    r.parsed || (r = t.parseEl(n)),
                    N("LazyLoad", r),
                    "image" === r.type && (r.img = e('<img class="mfp-img" />').on("load.mfploader",
                    function() {
                        r.hasSize = !0
                    }).on("error.mfploader",
                    function() {
                        r.hasSize = !0,
                        r.loadError = !0,
                        N("LazyLoadError", r)
                    }).attr("src", r.src)),
                    r.preloaded = !0
                }
            }
        }
    });
    var J = "retina";
    e.magnificPopup.registerModule(J, {
        options: {
            replaceSrc: function(e) {
                return e.src.replace(/\.\w+$/,
                function(e) {
                    return "@2x" + e
                })
            },
            ratio: 1
        },
        proto: {
            initRetina: function() {
                if (window.devicePixelRatio > 1) {
                    var e = t.st.retina,
                    n = e.ratio;
                    n = isNaN(n) ? n() : n,
                    n > 1 && (x("ImageHasSize." + J,
                    function(e, t) {
                        t.img.css({
                            "max-width": t.img[0].naturalWidth / n,
                            width: "100%"
                        })
                    }), x("ElementParse." + J,
                    function(t, r) {
                        r.src = e.replaceSrc(r, n)
                    }))
                }
            }
        }
    }),
    function() {
        var t = 1e3,
        n = "ontouchstart" in window,
        r = function() {
            S.off("touchmove" + s + " touchend" + s)
        },
        i = "mfpFastClick",
        s = "." + i;
        e.fn.mfpFastClick = function(i) {
            return e(this).each(function() {
                var o, u = e(this);
                if (n) {
                    var a, f, l, c, h, p;
                    u.on("touchstart" + s,
                    function(e) {
                        c = !1,
                        p = 1,
                        h = e.originalEvent ? e.originalEvent.touches[0] : e.touches[0],
                        f = h.clientX,
                        l = h.clientY,
                        S.on("touchmove" + s,
                        function(e) {
                            h = e.originalEvent ? e.originalEvent.touches: e.touches,
                            p = h.length,
                            h = h[0],
                            (Math.abs(h.clientX - f) > 10 || Math.abs(h.clientY - l) > 10) && (c = !0, r())
                        }).on("touchend" + s,
                        function(e) {
                            r(),
                            c || p > 1 || (o = !0, e.preventDefault(), clearTimeout(a), a = setTimeout(function() {
                                o = !1
                            },
                            t), i())
                        })
                    })
                }
                u.on("click" + s,
                function() {
                    o || i()
                })
            })
        },
        e.fn.destroyMfpFastClick = function() {
            e(this).off("touchstart" + s + " click" + s),
            n && S.off("touchmove" + s + " touchend" + s)
        }
    } ()
})(window.jQuery || window.Zepto); (function(e) {
    if (typeof define === "function" && define.amd) {
        define(["jquery"], e)
    } else {
        e(jQuery)
    }
})(function(e) {
    function n(e) {
        return u.raw ? e: encodeURIComponent(e)
    }
    function r(e) {
        return u.raw ? e: decodeURIComponent(e)
    }
    function i(e) {
        return n(u.json ? JSON.stringify(e) : String(e))
    }
    function s(e) {
        if (e.indexOf('"') === 0) {
            e = e.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\")
        }
        try {
            e = decodeURIComponent(e.replace(t, " "));
            return u.json ? JSON.parse(e) : e
        } catch(n) {}
    }
    function o(t, n) {
        var r = u.raw ? t: s(t);
        return e.isFunction(n) ? n(r) : r
    }
    var t = /\+/g;
    var u = e.cookie = function(t, s, a) {
        if (s !== undefined && !e.isFunction(s)) {
            a = e.extend({},
            u.defaults, a);
            if (typeof a.expires === "number") {
                var f = a.expires,
                l = a.expires = new Date;
                l.setDate(l.getDate() + f)
            }
            return document.cookie = [n(t), "=", i(s), a.expires ? "; expires=" + a.expires.toUTCString() : "", a.path ? "; path=" + a.path: "", a.domain ? "; domain=" + a.domain: "", a.secure ? "; secure": ""].join("")
        }
        var c = t ? undefined: {};
        var h = document.cookie ? document.cookie.split("; ") : [];
        for (var p = 0,
        d = h.length; p < d; p++) {
            var v = h[p].split("=");
            var m = r(v.shift());
            var g = v.join("=");
            if (t && t === m) {
                c = o(g, s);
                break
            }
            if (!t && (g = o(g)) !== undefined) {
                c[m] = g
            }
        }
        return c
    };
    u.defaults = {};
    e.removeCookie = function(t, n) {
        if (e.cookie(t) === undefined) {
            return false
        }
        e.cookie(t, "", e.extend({},
        n, {
            expires: -1
        }));
        return ! e.cookie(t)
    }
});
jQuery(function(e) {
    function t() {
        return e.cookie("cart")
    }
    function n(t) {
        e.cookie("cart", JSON.stringify(t))
    }
    function r(t) {
        return e.parseJSON(t)
    }
    function i(e) {
        var i = t();
        if (typeof i == "undefined") {
            i = [];
            i.push(e)
        } else {
            i = r(i);
            for (var s in i) {
                if (i[s].id == e.id) {
                    i[s].qty++;
                    n(i);
                    return
                }
            }
            i.push(e)
        }
        n(i)
    }
    function s() {
        var n = t();
        var i = e("#sub-cart"),
        o = i.find(".cart-items"),
        u = i.find(".cart-header"),
        a = i.find(".cart-total .total");
        o.empty();
        u.find("small").hide();
        if (typeof n == "undefined") {
            u.find("span").text("Your cart is currently empty.");
            a.text("0");
            return
        } else {
            var f = 0,
            l = 0,
            c, h = 2;
            n = r(n);
            for (var p in n) {
                c = n[p].price;
                c = c.replace(/^\D+/g, "");
                c = parseInt(c);
                if (!isNaN(c)) {
                    f += n[p].qty * c
                }
                if (++l > h) continue;
                var d = e('<li> 								<div class="item clearfix" data-product-id="' + n[p].id + '"> 									<button type="button" class="close" aria-hidden="true">×</button> 									<a href="' + n[p].thumbnail + '" data-toggle="lightbox" class="entry-thumbnail"> 										<img src="' + n[p].thumbnail + '" alt="' + n[p].title + '" /> 									</a> 									<h5 class="entry-title"><a href="' + n[p].url + '">' + n[p].title + '</a></h5> 									<span class="entry-price">' + n[p].qty + " x " + n[p].price + "</span> 								</div> 							</li>");
                d.appendTo(o);
                d.find('[data-toggle="lightbox"]').magnificPopup({
                    type: "image"
                })
            }
            if (h >= l) {
                h = l
            } else {
                u.find("small").show()
            }
            if (l == 0) {
                e.removeCookie("cart");
                s();
                return
            }
            u.find("span").text("Displaying " + h.toString() + " of " + l.toString() + " items");
            a.text("$ " + f.toString())
        }
    }
    function o(t) {
        e.ajax({
            url: "cart.php",
            type: "post",
            data: "data=" + encodeURIComponent(JSON.stringify(t)),
            dataType: "json",
            beforeSend: function() {},
            sucess: function(e) {
                s(t)
            }
        })
    }
    e(document).on("click", ".add-to-cart",
    function(t) {
        t.preventDefault();
        var n = e(this),
        r,
        o = {};
        r = n.closest(".add-cart");
        $item = n.closest(r.data("product"));
        o = {
            id: $item.data("product-id"),
            thumbnail: $item.find(r.data("thumbnail")).attr("src"),
            title: e.trim($item.find(r.data("title")).text()),
            url: $item.find(r.data("url")).attr("href"),
            price: e.trim($item.find(r.data("price")).text()),
            qty: 1
        };
        var u = $item.find(r.data("thumbnail")),
        a = e('.header-top [data-target="#sub-cart"]'),
        f = u.clone().offset({
            top: u.offset().top,
            left: u.offset().left
        }).css({
            opacity: "0.5",
            position: "absolute",
            height: "150px",
            width: "150px",
            "z-index": "100000"
        }).appendTo(e("body")).animate({
            top: a.offset().top + 10,
            left: a.offset().left + 10,
            width: 75,
            height: 75
        },
        1e3, "easeInQuad",
        function() {
            e(this).animate({
                width: 0,
                height: 0
            },
            function() {
                e(this).detach()
            });
            var t = e(".cart-notification ul"),
            n = e('<li><strong>"' + o.title + '"</strong> Added to Your Cart Succesfully.</li>').hide();
            n.appendTo(t).slideDown(400,
            function() {
                setTimeout(function() {
                    n.slideUp(400,
                    function() {
                        e(this).remove()
                    })
                },
                2e3)
            })
        });
        i(o);
        s()
    });
    e(document).on("click", "#sub-cart .close",
    function() {
        var i = e(this),
        o = i.closest(".item"),
        u = o.data("product-id");
        cookie = t();
        cookie = r(cookie);
        for (var a in cookie) {
            if (cookie[a].id == u) {
                cookie.splice(a, 1)
            }
        }
        n(cookie);
        o.parent().fadeOut(400,
        function() {
            s()
        })
    });
    s()
});
var scrnW, scrnH;
jQuery(function(e) {
    function t() {
        scrnW = e(window).width(),
        scrnH = e(window).height()
    }
    e(window).on("resize",
    function() {
        t()
    });
    t();
    if (jQuery().gmap3) {
        e("#store-locator-gmap").gmap3({
            marker: {
                values: [{
                    latLng: [ - 37.817243, 144.955475]
                },
                {
                    latLng: [ - 37.812843, 144.924475]
                },
                {
                    latLng: [ - 37.822843, 144.974475]
                },
                {
                    latLng: [ - 37.802843, 144.964475]
                },
                {
                    latLng: [ - 37.822043, 144.978475]
                }],
                options: {
                    draggable: true
                },
                events: {
                    dragend: function(t) {
                        e(this).gmap3({
                            getaddress: {
                                latLng: t.getPosition(),
                                callback: function(n) {
                                    var r = e(this).gmap3("get"),
                                    i = e(this).gmap3({
                                        get: "infowindow"
                                    }),
                                    s = n && n[1] ? n && n[1].formatted_address: "no address";
                                    if (i) {
                                        i.open(r, t);
                                        i.setContent(s)
                                    } else {
                                        e(this).gmap3({
                                            infowindow: {
                                                anchor: t,
                                                options: {
                                                    content: s
                                                }
                                            }
                                        })
                                    }
                                }
                            }
                        })
                    }
                }
            },
            map: {
                options: {
                    zoom: 13
                }
            }
        });
        e("#gmap").gmap3({
            marker: {
                latLng: [ - 37.817243, 144.955475],
                options: {
                    draggable: true
                },
                events: {
                    dragend: function(t) {
                        e(this).gmap3({
                            getaddress: {
                                latLng: t.getPosition(),
                                callback: function(n) {
                                    var r = e(this).gmap3("get"),
                                    i = e(this).gmap3({
                                        get: "infowindow"
                                    }),
                                    s = n && n[1] ? n && n[1].formatted_address: "no address";
                                    if (i) {
                                        i.open(r, t);
                                        i.setContent(s)
                                    } else {
                                        e(this).gmap3({
                                            infowindow: {
                                                anchor: t,
                                                options: {
                                                    content: s
                                                }
                                            }
                                        })
                                    }
                                }
                            }
                        })
                    }
                }
            },
            map: {
                options: {
                    zoom: 13
                }
            }
        })
    }
    e(document).on("click", ".styled-dd",
    function(t) {
        t.stopPropagation();
        if (e(t.target).hasClass("styled-dd")) e(this).find("select").simulate("mousedown")
    });
    e(".carousel").bind("slide.bs.carousel",
    function(t) {
        var n = e(this);
        setTimeout(function() {
            if (!n.is(":visible")) return false;
            var r = e(t.relatedTarget).outerHeight();
            n.animate({
                height: r
            },
            590)
        },
        10)
    });
    e(".prettyCheckable").each(function() {
        e(this).prettyCheckable()
    });
    e(".vmenu .prettyCheckable").on("change",
    function() {
        var t = e(this);
        t.parent().siblings("ul").find(".prettyCheckable").each(function() {
            if (t.prop("checked")) {
                e(this).prettyCheckable("check");
                e(this).parent().addClass("checked")
            } else {
                e(this).prettyCheckable("uncheck");
                e(this).parent().removeClass("checked")
            }
        })
    });
    e('[data-toggle="lightbox"]').magnificPopup({
        type: "image",
        disableOn: function() {
            return e(window).width() < 500 ? false: true
        }
    });
    var n = e(".owl-carousel");
    n.each(function() {
        var t = e(this),
        n = {
            items: t.data("visible-items") === undefined ? 4 : t.data("visible-items"),
            speed: t.data("slideshow-speed") === undefined ? 800 : t.data("slideshow-speed"),
            lazyLoad: t.data("lazyload") == true ? true: false,
            navigation: t.data("navigation") == true ? true: false,
            pagination: t.data("pagination") == true ? true: false
        };
        t.owlCarousel({
            items: n.items,
            slideSpeed: n.speed,
            lazyLoad: n.lazyLoad,
            lazyEffect: false,
            navigation: false,
            pagination: n.pagination,
            navigationText: ['<i class="iconfont-angle-left"></i>', '<i class="iconfont-angle-right"></i>'],
            afterInit: function() {
                var e = t.siblings(".owl-controls");
                if (e.length) {
                    e.prependTo(t);
                    if (scrnW < 768) {
                        e.addClass("top").removeClass("outside")
                    }
                }
                e.find(".owl-prev").on("click",
                function() {
                    t.trigger("owl.prev")
                });
                e.find(".owl-next").on("click",
                function() {
                    t.trigger("owl.next")
                })
            }
        })
    });
    e("html:not(.lte8) .owl-buttons div").hoverIntent({
        over: function() {
            var t = e(this),
            n = t.clone(),
            r = n.hasClass("owl-prev") ? "left": "right";
            var i = t.offset().left;
            i = r == "right" ? i + 50 : i - 50;
            n.css({
                position: "absolute",
                left: t.offset().left,
                top: t.offset().top,
                cursor: "hand",
                "z-index": "2"
            }).addClass("round-icon").appendTo("body").animate({
                left: i,
                opacity: "0"
            },
            300, "easeOutQuad",
            function() {
                n.detach()
            })
        },
        out: function() {
            return
        },
        timeout: 150
    });
    e(".noIE .animated:not(.animation-done)").waypoint(function() {
        var t = e(this).data("animation");
        e(this).addClass("animation-done").addClass(t)
    },
    {
        triggerOnce: true,
        offset: "85%"
    });
    e('[data-toggle="tooltip"]').tooltip();
    e('input[type="text"], input[type="password"], input[type="email"], input[type="tell"], textarea').on("focus",
    function() {
        e(this).siblings(".placeholder").addClass("hide-label")
    });
    e(".placeholder").on("click",
    function() {
        e(this).siblings("input").focus()
    });
    e('input[type="text"], input[type="password"], input[type="email"], input[type="tell"], textarea').on("blur",
    function() {
        if (e(this).val() == "") {
            e(this).siblings(".placeholder").removeClass("hide-label")
        } else {
            e(this).siblings(".placeholder").addClass("hide-label")
        }
    });
    e('[data-toggle="sub-header"]').each(function() {
        var t = e(this),
        n = e(t.data("target"));
        t.hoverIntent({
            over: function() {
                if (t.offset().left < n.width()) {
                    n.css("right", n.width() / -2)
                } else {
                    n.css("right", 0)
                }
                n.animate({
                    height: "toggle"
                },
                300, "easeInExpo")
            },
            out: function() {
                n.animate({
                    height: "toggle"
                },
                300, "easeOutExpo")
            },
            timeout: 250
        })
    });
    e(".main-menu ul").each(function() {
        if (e(this).closest(".mega-menu").length == 0) {
            e(this).addClass("sub-menu")
        } else {
            e(this).addClass("mega-menu-parent")
        }
    });
    e(".main-menu li").each(function() {
        if (e(this).find("ul").length) e(this).addClass("has-child")
    });
    e(".main-menu li").hoverIntent({
        over: function() {
            var t = e(this),
            n = t.children(".mega-menu"),
            r = e("#site-menu");
            var i = r.closest(".main-header");
            var s = scrnW >= 1170 ? "col-lg": "col-md";
            cols = parseInt(n.data(s)),
            mmW = i.outerWidth(),
            mmLeft = i.offset().left - t.offset().left;
            if (isNaN(cols)) cols = 12;
            mmW = parseInt(mmW * (cols / 12));
            mmLeft += (i.outerWidth() - mmW) / 2;
            mmLeft = parseInt(mmLeft);
            n.css({
                left: mmLeft + "px",
                width: mmW + "px",
                visibility: "visible"
            });
            t.addClass("hover").children("ul, .mega-menu").animate({
                height: "toggle"
            },
            300,
            function() {
                e(this).css("overflow", "visible")
            })
        },
        out: function() {
            e(this).removeClass("hover").children("ul, .mega-menu").animate({
                height: "toggle"
            },
            300,
            function() {
                e(this).css("overflow", "visible")
            })
        },
        timeout: 200
    });
    e("#mobile-menu").dlmenu({
        animationClasses: {
            classin: "dl-animate-in-5",
            classout: "dl-animate-out-5"
        }
    })
})
/*
| ----------------------------------------------------------------------------------
| 首页滑动动画
| ----------------------------------------------------------------------------------
*/
jQuery(function($) {
    var $slider = $('#home-slider > .flexslider');
    $slider.find('.flex-caption').each(function() {
        var $this = $(this);
        var configs = {
            left: $this.data('x'),
            top: $this.data('y'),
            speed: $this.data('speed') + 'ms',
            delay: $this.data('start') + 'ms'
        };
        if (configs.left == 'center' && $this.width() !== 0) {
            configs.left = ($slider.width() - $this.width()) / 2;
        }
        if (configs.top == 'center' && $this.height() !== 0) {
            configs.top = ($slider.height() - $this.height()) / 2;
        }

        $this.data('positions', configs);

        $this.css({
            'left': configs.left + 'px',
            'top': configs.top + 'px',
            'animation-duration': configs.speed,
            'animation-delay': configs.delay
        });
    });

    $(window).on('resize',
    function() {
        var wW = $(window).width(),
        zoom = (wW >= 1170) ? 1 : wW / 1349;
        $('.flex-caption.gfc').css('zoom', zoom);
    });
    $(window).trigger('resize');

    $slider.imagesLoaded(function() {
        $slider.flexslider({
            animation: 'slide',
            easing: 'easeInQuad',
            slideshow: false,
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>',
            start: function() {
                flex_fix_pos(1);
            },
            before: function(slider) {
                // initial caption animation for next show
                $slider.find('.slides li .animation-done').each(function() {
                    $(this).removeClass('animation-done');
                    var animation = $(this).attr('data-animation');
                    $(this).removeClass(animation);
                });

                flex_fix_pos(slider.animatingTo + 1);
            },
            after: function() {
                // run caption animation
                $slider.find('.flex-active-slide .animated').each(function() {
                    var animation = $(this).attr('data-animation');
                    $(this).addClass('animation-done').addClass(animation);
                });
            }
        });
    });

    function flex_fix_pos(i) {
        $slider.find('.slides > li:eq(' + i + ') .gfc').each(function() {
            var $this = $(this),
            pos = $(this).data('positions');

            if (pos.left == 'center') {
                pos.left = ($slider.width() - $this.width()) / 2;
                $this.css('left', pos.left + 'px');
                $this.data('positions', pos);
            }
            if (pos.top == 'center') {
                pos.top = ($slider.height() - $this.height()) / 2;
                $this.css('left', pos.top + 'px');
                $this.data('positions', pos);
            }
        });
    }
});