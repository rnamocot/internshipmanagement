const btn_menu = document.querySelector(".btn-menu");
const side_bar = document.querySelector(".sidebarleft");

btn_menu.addEventListener("click", function () {
  side_bar.classList.toggle("expand");
  changebtn();
});

function changebtn() {
  if (side_bar.classList.contains("expand")) {
    btn_menu.classList.replace("bx-menu", "bx-menu-alt-right");
  } else {
    btn_menu.classList.replace("bx-menu-alt-right", "bx-menu");
  }
}

function showContent(content) {
  // Hide the default content
  var defaultContent = document.querySelector('#default-content');
  defaultContent.style.display = 'none';

  // Hide all sections
  var sections = document.querySelectorAll('section');
  sections.forEach(function(section) {
    section.style.display = 'none';
  });

  // Show the relevant section
  var section = document.querySelector('#' + content);
  section.style.display = 'block';

  // Update the active link
  var links = document.querySelectorAll('.sidebar li a');
  links.forEach(function(link) {
    link.classList.remove('active');
  });
// Add the active class to the selected link
var selectedLink = document.querySelector('.sidebar li a[href="#' + content + '"]');
selectedLink.classList.add('active');
}
 



