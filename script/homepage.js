// scrollable content
let counter = 1;

function increment() {
  document.getElementById('r' + counter).checked = true;
  counter++;
  if (counter > 5) {
    counter = 1;
  }
}

let time_interval = setInterval(increment, 3000);

function change_counter(value) {
  counter = value;
}
