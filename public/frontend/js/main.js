$(document).ready(function () {
  // jQuery to toggle cart visibility
  $('#menuButton').click(function () {
      $('#menuContainer').css('display', 'block');
  });

  $('#closeMenu').click(function () {
      $('#menuContainer').css('display', 'none');
  });
});