!(function (r, l, s) {
    function p(e, t, o) {
        var i = new Date();
        return i.setTime(i.getTime() + 24 * o * 60 * 60 * 1e3), (s.cookie = e + "=" + t + ";expires=" + i.toUTCString() + ";path=/"), g(e);
    }
    var d,
        t,
        u = !1,
        g = function (e) {
            var t = decodeURIComponent(s.cookie).split(";");
            e += "=";
            for (var o = 0; o < t.length; o++) {
                for (var i = t[o]; " " == i.charAt(0); ) i = i.substring(1);
                if (0 === i.indexOf(e)) return i.substring(e.length, i.length);
            }
        };
    (r.gdprcookie = function (e) {
        (d = r.extend(
            {
                cookieTypes: [
                    { type: "Essential", value: "essential", description: "These are cookies that are essential for the website to work correctly." },
                    { type: "Site Preferences", value: "preferences", description: "These are cookies that are related to your site preferences, e.g. remembering your username, site colours, etc." },
                    { type: "Analytics", value: "analytics", description: "Cookies related to site visits, browser types, etc." },
                    { type: "Marketing", value: "marketing", description: "Cookies related to marketing, e.g. newsletters, social media, etc" },
                ],
                title: "Cookies & privacy",
                subtitle: "Select cookies to accept",
                message:
                    "Cookies enable you to use shopping carts and to personalize your experience on our sites, tell us which parts of our websites people have visited, help us measure the effectiveness of ads and web searches, and give us insights into user behaviour so we can improve our communications and products.",
                delay: 2e3,
                expires: 30,
                acceptBtnLabel: "Accept cookies",
                advancedBtnLabel: "Customize cookies",
                customShowMessage: void 0,
                customHideMessage: void 0,
                customShowChecks: void 0,
            },
            l.GdprCookieSettings,
            e
        )),
            r(function () {
                t();
            });
    }),
        (t = function (e) {
            var t, o, i, a, s, n, c;
            u ||
                ((t = r("body")),
                (o = g("cookieControl")),
                (i = g("cookieControlPrefs")),
                (cookieExists = o),
                (a = { container: void 0, types: void 0, typesContainer: void 0, buttons: { accept: void 0, advanced: void 0 }, allChecks: [], nonessentialChecks: [] }),
                (s = function (e, t) {
                    p("cookieControl", e, t),
                        a.container &&
                            (r.isFunction(d.customHideMessage)
                                ? (d.customHideMessage.call(a.container, a.container), (u = !1))
                                : a.container.fadeOut("fast", function () {
                                      r(this).remove(), (u = !1);
                                  }));
                }),
                !e && o && i
                    ? s(void 0 === o ? !1 : !0, d.expires)
                    : ((a.types = r("<ul/>").append(
                          r.map(d.cookieTypes, function (e, t) {
                              if (e.type && e.value) {
                                  var o = "essential" === e.value,
                                      i = "analytics" === e.value || "marketing" === e.value || "functional" === e.value,
                                      s = r("<input/>", { type: "checkbox", id: "gdpr-cookietype-" + t, name: "gdpr[]", value: e.value, checked: o || i, disabled: o });
                                  a.allChecks.push(s.get(0)), o || i || a.nonessentialChecks.push(s.get(0));
                                  var n = r("<label/>", { for: "gdpr-cookietype-" + t, text: e.type, title: e.description });
                                  return r("<li/>")
                                      .append([s.get(0), n.get(0)])
                                      .get(0);
                              }
                          })
                      )),
                      (a.allChecks = r(a.allChecks)),
                      (a.nonessentialChecks = r(a.nonessentialChecks)),
                      (n = (a.container = r("<div class=gdprcookie id='myDIV'>")).append([
                              r("<button/>", {
                                      type: "button",
                                      class: "close",
                                      text: "x",
                                      click: function () {
                                          s(!0, d.expires);
                                          var e = r.map(
                                              a.allChecks.filter(function () {
                                                  return this.checked || this.disabled;
                                              }),
                                              function (e) {
                                                  return e.value;
                                              }
                                          );
                                          p("cookieControlPrefs", JSON.stringify(e), 365), t.trigger("gdpr:accept");
                                      },
                                  }).get(0),
						  r("<h1/>", { html: d.title }).get(0),
                          r("<p/>", { html: d.message }).get(0),
                          (a.typesContainer = r("<div class=gdprcookie-types>"))
                              .hide()
                              .append([r("<h2/>", { text: d.subtitle }).get(0), a.types.get(0)])
                              .get(0),
                          r("<div class=gdprcookie-buttons>")
                              .append([
                                  (a.buttons.accept = r("<button/>", {
                                      type: "button",
                                      class: "",
                                      text: d.acceptBtnLabel,
                                      click: function () {
                                          s(!0, d.expires);
                                          var e = r.map(
                                              a.allChecks.filter(function () {
                                                  return this.checked || this.disabled;
                                              }),
                                              function (e) {
                                                  return e.value;
                                              }
                                          );
                                          p("cookieControlPrefs", JSON.stringify(e), 365), t.trigger("gdpr:accept");
                                      },
                                  })).get(0),
                                  (a.buttons.advanced = r("<button/>", {
                                      type: "button",
                                      text: d.advancedBtnLabel,
                                      click: function () {
                                          a.nonessentialChecks.prop("checked", !1),
                                              a.buttons.advanced.prop("disabled", !0),
                                              r.isFunction(d.customShowChecks) ? d.customShowChecks.call(a.typesContainer, a.typesContainer) : a.typesContainer.slideDown("fast"),
                                              t.trigger("gdpr:advanced");
                                      },
                                  })).get(0),
                              ])
                              .get(0),
                      ])),
                      (c = function () {
                          t.append(n), (u = !0), r.isFunction(d.customShowMessage) ? d.customShowMessage.call(a.container, a.container) : a.container.hide().fadeIn("slow"), t.trigger("gdpr:show");
                      }),
                      !d.delay || e ? c() : l.setTimeout(c, d.delay)));
        }),
        (r.gdprcookie.display = function () {
            t(!0);
        }),
        (r.gdprcookie.preference = function (e) {
            var t = g("cookieControl"),
                o = g("cookieControlPrefs");
            try {
                o = JSON.parse(o);
            } catch (e) {
                o = void 0;
            }
            if (void 0 !== t && void 0 !== o && r.isArray(o)) return o;
        });
})(this.jQuery, this, this.document);
