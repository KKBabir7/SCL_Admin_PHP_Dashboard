//add toggle menu classes
$(document).ready(function () {
  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
});
//sidebar menu items animated
$(document).ready(function () {
  $("[id^='sidebar-swipe']").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled-2");
    $("#sidebar-wrapper").toggleClass("sidebar-toggled");
    $("[id^='sidebar-swipe']").toggleClass("swipe-icon-animate");
    $("[id^='main-menu-list']").toggleClass(
      "main-menu-list main-menu-list-hidden"
    );
    $("#header-menu").toggleClass("header-menu-swipe");
    if ($("#sidebar-wrapper").hasClass("sidebar-toggled")) {
      $(".nav-side-menu .nav-parent")
        .not($(this))
        .find(".sub-menu.in")
        .collapse("hide");
    }
  });
});
//responsive sidebar sub-menu show hide

$(document).ready(function () {
  if ($(window).width() < 767) {
    $(".nav-side-menu .nav-parent").click(function () {
      if ($("#sidebar-wrapper").hasClass("sidebar-toggled")) {
        $(".nav-side-menu .nav-parent")
          .not($(this))
          .find(".sub-menu.in")
          .collapse("show");
      } else {
        $(".nav-side-menu .nav-parent")
          .not($(this))
          .find(".sub-menu.in")
          .collapse("hide");
      }
    });
  } else {
    $(".nav-side-menu .nav-parent").click(function () {
      if ($("#sidebar-wrapper").hasClass("sidebar-toggled")) {
        $(".nav-side-menu .nav-parent")
          .not($(this))
          .find(".sub-menu.in")
          .collapse("hide");
      } else {
        $(".nav-side-menu .nav-parent")
          .not($(this))
          .find(".sub-menu.in")
          .collapse("show");
      }
    });
  }
});


// Function to set active link class for main menu items and submenu items
function setActiveLinks() {

  $(
    ".nav-side-menu .nav-parent a.side-menu-items, .nav-side-menu .nav-parent .sub-menu li a"
  ).removeClass("active-link");
  var activeLinkId = localStorage.getItem("activeLinkId");
  if (activeLinkId) {
    $("#" + activeLinkId).addClass("active-link");
    $("#" + activeLinkId)
      .closest(".nav-parent")
      .find("a.side-menu-items")
      .addClass("active-link");
  }
}

$(document).ready(function () {
  
  setActiveLinks();
 
  $(".nav-side-menu .nav-parent a.side-menu-items").click(function () {
  
    var mainActiveLinkId = $(this).attr("id");
    if (mainActiveLinkId !== localStorage.getItem("activeLinkId")) {
      localStorage.setItem("activeLinkId", mainActiveLinkId);
      setActiveLinks();
    }
  });

  $(".nav-side-menu .nav-parent .sub-menu li a").click(function (e) {
    var subActiveLinkId = $(this).attr("id");
    localStorage.setItem("activeLinkId", subActiveLinkId);
    setActiveLinks();
    e.stopPropagation();
  });
});


//link active claqss add when click link
$(document).ready(function () {
  var collapseStates = JSON.parse(localStorage.getItem("collapseStates")) || {};

  $(".nav-parent").each(function () {
    var targetId = $(this).data("target");
  
    if (collapseStates[targetId]) {
      $(this).toggleClass("collapsed", !collapseStates[targetId]);
      $(targetId).toggleClass("in", collapseStates[targetId]);
      $(".nav-side-menu .nav-parent a.side-menu-items").removeClass("active-link-as");
    }
  });

  $(".nav-parent").on("click", function (e) {
    var targetId = $(this).data("target");
    var isCollapsed = $(this).hasClass("collapsed");

    $(this).toggleClass("collapsed", !isCollapsed);
    $(targetId).toggleClass("in", !isCollapsed);

    collapseStates[targetId] = isCollapsed;
    localStorage.setItem("collapseStates", JSON.stringify(collapseStates));
    $(".nav-side-menu .nav-parent a.side-menu-items").removeClass("active-link-as");
    var linkUrl = $(this).find(".side-menu-items").attr("href");
    if (linkUrl && !isCollapsed) {
      window.location.href = linkUrl;
    }

    e.preventDefault();
  });
});

//remove a singel class

// $(document).ready(function() {
//   $(".nav-side-menu .nav-parent a.side-menu-items").on("click", function() {
//     $(".nav-side-menu .nav-parent a.side-menu-items").removeClass("active-link-as");
//   });
// });

// carousel swiping
$(".carousel").swipe({
  swipe: function (
    event,
    direction,
    distance,
    duration,
    fingerCount,
    fingerData
  ) {
    if (direction == "left") $(this).carousel("next");
    if (direction == "right") $(this).carousel("prev");
  },
  allowPageScroll: "vertical",
});
