menu = document.getElementsByClassName('hamburger-menu');
let menu_state = false;

function menu_open() {
  let nav_links = document.getElementById(`navigation_links`);
  let main_content = document.getElementById('main_section');
  if (menu_state == false) {
    nav_links.classList.add('background');

    menu_state = true;
  } else {
    nav_links.classList.remove('background');
    menu_state = false;
  }
}
