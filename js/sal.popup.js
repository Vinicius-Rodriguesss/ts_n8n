(getCookie = function (p) {
    for (var o = p + "=", e = document.cookie.split(";"), t = 0; t < e.length; t++) {
        for (var i = e[t]; " " == i.charAt(0); ) i = i.substring(1);
        if (0 == i.indexOf(o)) return i.substring(o.length, i.length);
    }
    return "";
}),
    (setCookie = function (p, o, e) {
        var t = new Date();
        t.setTime(t.getTime() + 24 * e * 60 * 60 * 1e3);
        var i = "expires=" + t.toUTCString();
        document.cookie = p + "=" + o + "; " + i;
    }),
    (msg = function (p) {
        void 0 != console && console.log("Pop-up: " + p);
    }),
    (apifn = "//sal.madnezz.com.br/api/site/json/popup.asp"),
    (apidatastore = "//sal.madnezz.com.br/api/site/upload/popup/"),
    (popupIdElement = "sal_popup_js_master"),
    (popupItemElement = "sal_popup_js_element"),
    (popupItemBackground = popupIdElement + "_background_alpha"),
    (popupItemForeground = popupIdElement + "_foreground_container"),
    (popup = 0),
    (viewed = 0);
var ak = getCookie("viewed");
1 == ak && (viewed = 1),
    (startPopup = function (p) {
        void 0 != $
            ? 0 == viewed || "/" == window.location.pathname
                ? $.post(
                      apifn + "?token=" + p.token + "&jsoncallback=?",
                      {},
                      function (p) {
                          0 != p.length
                              ? (0 != $("body").length
                                    ? ($("body").append('<div id="' + popupIdElement + '"></div>'),
                                      $("#" + popupIdElement).append('<div id="' + popupItemBackground + '" style="display:none;"></div>'),
                                      $("#" + popupIdElement).append('<div id="' + popupItemForeground + '" style="display:none;"></div>'))
                                    : msg("body não foi encontrado."),
                                $.each(p, function (p, o) {
                                    msg(p + ":" + o),
                                        $("#" + popupItemForeground).append(
                                            '<div style="position:relative" class="' +
                                                popupItemElement +
                                                '" data-timer="' +
                                                o.popup_tempo +
                                                '"><a href="' +
                                                o.popup_link +
                                                '" target="_blank"><img src="' +
                                                apidatastore +
                                                o.popup_imagem +
                                                '" alt="" title="' +
                                                o.popup_nome +
                                                '" /></a></div>'
                                        );
                                }),
                                showMPopup())
                              : msg("Não encontrou itens no objeto de popup.");
                      },
                      "json"
                  )
                : msg("Pop-up já foi vista pelo usuário hoje.")
            : msg("jQuery é pre-requisito para Pop-up.");
    }),
    (showMPopup = function () {
        var p = $("#" + popupItemBackground),
            o = $("#" + popupItemForeground);

        p.css({ position: "fixed", top: "0", left: "0", width: "100%", height: "100%", backgroundColor: "#000", opacity: 0.5, "-webkit-opacity": 0.5, "-moz-opacity": 0.5, zIndex: "9999" }),
            o.css({ position: "fixed", top: "0", left: "0", width: "100%", height: "100%", textAlign: "center", zIndex: "10000", display: "flex", alignItems: "center", justifyContent: "center" }),
            o.find("a").css({ opacity: "1" }),
            o.find("." + popupItemElement).css({ display: "none" }),
            o.find("." + popupItemElement + ":eq(" + popup + ")").css({ display: "block" }),
            o
                .find("." + popupItemElement + " img")
                .css({
                    "-webkit-box-shadow": "0px 0px 30px 5px rgba(0, 0, 0, 0.78)",
                    "-moz-box-shadow": "0px 0px 30px 5px rgba(0, 0, 0, 0.78)",
                    "box-shadow": "0px 0px 30px 5px rgba(0, 0, 0, 0.78)",
                    "background-color": "#000000",
                    "margin-top": "30px",
                    top: "20%",
                    "max-height": window.innerHeight - window.innerHeight / 10 - 25,
                    "max-width": "90%",
                }),
            $('.sal_popup_js_element').prepend('<div class="close">x</div>'),
            o
                .find(".close")
                .css({
                    "-webkit-box-shadow": "6px 6px 20px 0px rgba(50, 50, 50, 0.75)",
                    "-moz-box-shadow": "6px 6px 20px 0px rgba(50, 50, 50, 0.75)",
                    "box-shadow": "6px 6px 20px 0px rgba(50, 50, 50, 0.75)",
                    "background-color": "#000000",
                    fontFamily: "Arial, sans-serif",
                    fontSize: "19px",
                    fontWeight: 900,
                    backgroundColor: "#000",
                    color: "#fff",
                    border: "2px solid #fff",
                    "border-radius": "15px",
                    position: "absolute",
                    top: "16px",
                    right: "16px",
                    width: "24px",
                    height: "24px",
                    cursor: "pointer",
                    "vertical-align": "middle",
                    display: "table-cell",
                    "line-height": "20px",
                    "z-index":"9"
                }),
            o
                .find(".close:hover")
                .animate({
                    top: "20px",
                    right: "10px",
                    "-webkit-box-shadow": "6px 6px 10px 0px rgba(50, 50, 50, 0.75)",
                    "-moz-box-shadow": "6px 6px 10px 0px rgba(50, 50, 50, 0.75)",
                    "box-shadow": "6px 6px 10px 0px rgba(50, 50, 50, 0.75)",
                }),
            o.find(".close").click(function (p) {
                showNextPopup();
            }),
            o.find("a").click(function () {
                setCookie("viewed", 1, 0.01);
            }),
            p.fadeIn(250),
            o.fadeIn(250);
    }),
    (showNextPopup = function () {
        var p = ($("#" + popupItemBackground), $("#" + popupItemForeground));
        p.find("." + popupItemElement).length == popup + 1
            ? (closePopup(), setCookie("viewed", 1, 0.01))
            : (p.find("." + popupItemElement + ":eq(" + popup + ")").hide(), popup++, p.find("." + popupItemElement + ":eq(" + popup + ")").fadeIn(600));
    }),
    (closePopup = function () {
        var p = $("#" + popupItemBackground),
            o = $("#" + popupItemForeground);
        o.slideUp(400), p.delay(280).fadeOut(500);
    });
