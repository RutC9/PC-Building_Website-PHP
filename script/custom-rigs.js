let cabinet_selector = document.getElementById('cabinet_select');
let cpu_selector = document.getElementById('cpu_select');
let gpu_selector = document.getElementById('gpu_select');
let ram_selector = document.getElementById('ram_select');
let mb_selector = document.getElementById('mb_select');
let ssd_selector = document.getElementById('ssd_select');
let hdd_selector = document.getElementById('hdd_select');
let psu_selector = document.getElementById('psu_select');
let cpu_cooler_selector = document.getElementById('cpu_cooler_select');

let dropdowns = document.querySelectorAll('select');

function input_entered(name) {
  if (name == 'cabinet') {
    document.getElementById('cpu_select').style.display = 'block';
  } else if (name == 'cpu') {
    document.getElementById('gpu_select').style.display = 'block';
  } else if (name == 'gpu') {
    document.getElementById('ram_select').style.display = 'block';
  } else if (name == 'ram') {
    document.getElementById('mb_select').style.display = 'block';
  } else if (name == 'mb') {
    document.getElementById('ssd_select').style.display = 'block';
  } else if (name == 'ssd') {
    document.getElementById('hdd_select').style.display = 'block';
  } else if (name == 'hdd') {
    document.getElementById('psu_select').style.display = 'block';
  } else if (name == 'power_supply') {
    document.getElementById('cpu_cooler_select').style.display = 'block';
  }
}

let total_cost;
function reset_selection() {
  document.getElementById(`cabinet_select`).selectedIndex = 0;
  let all_select_tag = document.querySelectorAll('select');
  let i;
  for (i = 1; i < all_select_tag.length; i++) {
    all_select_tag[i].selectedIndex = 0;
    all_select_tag[i].style.display = 'none';
  }
  total_cost = 0;
  document.getElementById('total_label').innerText = 'Total: ' + total_cost;
}

function calc_total(value) {
  total_cost = 0;
  // total_cost = total_cost + parseInt(value);
  // console.log(total_cost);
  let selected_list = document.querySelectorAll('select');
  for (let i = 0; i < selected_list.length; i++) {
    // console.log(selected_list[i].value);
    total_cost += parseInt(selected_list[i].value);
  }
  // console.log(total_cost);
  document.getElementById('total_label').innerText =
    'Total: ' + total_cost + '  Rs';
}

function display() {
  if (cabinet_selector.selectedIndex == 1) {
    document.getElementById('cabinet_image').src =
      'images/pc_cabinet/cabinet1.webp';
  } else if (cabinet_selector.selectedIndex == 2) {
    document.getElementById('cabinet_image').src =
      'images/pc_cabinet/cabinet2.webp';
  } else if (cabinet_selector.selectedIndex == 3) {
    document.getElementById('cabinet_image').src =
      'images/pc_cabinet/cabinet3.jpg';
  }
}

function submit_redirect() {
  for (let i = 0; i < dropdowns.length; i++) {
    // let selectedValue = dropdowns[i].options[dropdowns[i].selectedIndex].value;
    if (dropdowns[i].selectedIndex == 0) {
      alert('please ' + dropdowns[i].options[dropdowns[i].selectedIndex].text);
      break;
    }
  }
}
