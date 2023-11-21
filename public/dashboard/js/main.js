$(function () {
    $(".nav-toggle-icon").on("click", function () {
        $(".wrapper").toggleClass("toggled");
    });

    $(".mobile-menu-button").on("click", function () {
        $(".wrapper").addClass("toggled");
    });

    $(function () {
        for (
            var e = window.location,
                o = $(".metismenu li a")
                    .filter(function () {
                        return this.href == e;
                    })
                    .addClass("")
                    .parent()
                    .addClass("mm-active");
            o.is("li");

        )
            o = o
                .parent("")
                .addClass("mm-show")
                .parent("")
                .addClass("mm-active");
    });

    $(".toggle-icon").click(function () {
        $(".wrapper").hasClass("toggled")
            ? ($(".wrapper").addClass("toggled"),
              $(".sidebar-wrapper").unbind("hover"))
            : $(".wrapper").removeClass("toggled");
    });
});
