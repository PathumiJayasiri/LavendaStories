$(document).ready(function () {
  $("#mobile").click(function () {
    $(".sideBar").addClass("showMenu");
    $(".sideBar").removeClass("widthChange");
    $(".backdrop").addClass("showBackdrop");
  });
  $(".cross-icon").click(function () {
    $(".sideBar").removeClass("showMenu");
    $(".sub-menu").removeClass("showMenu");

    $(".backdrop").removeClass("showBackdrop");
  });
  $(".backdrop").click(function () {
    $(".sideBar").removeClass("showMenu");
    $(".backdrop").removeClass("showBackdrop");
  });
  $("#desktop").click(function () {
    $("li label").toggleClass("hideMenuList");
    $(".sideBar").toggleClass("widthChange");
  });

  $(".list-items").click(function () {
    $(".list-items").removeClass();
    $(this).addClass("selected");
    $(".sideBar").removeClass("showMenu");
  });
  //submenu
  // Toggle the sub-menu when clicking the arrow button
  $(".sub-btn").click(function () {
    $(".sideBar").addClass("showMenu");
    $(this).next(".sub-menu").slideToggle();
    $(this).find(".dropdown").toggleClass("rotate");
  });
});
