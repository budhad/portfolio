// Custom cursor
function init_copy_text() {
  let elems = document.querySelectorAll('.ui-icon-click');
  elems.forEach(function (ui_icon, index) {
    ui_icon.addEventListener('click', copy_text(ui_icon));
  })
}
function copy_text(ui_icon) {
  return function (e) {
    navigator.clipboard.writeText(ui_icon.dataset.copy);
  }

}

document.addEventListener('DOMContentLoaded', function () {
  new VenoBox({
    selector: '.venobox'
  });

  let percentage = document.querySelectorAll('.percentage');
  percentage.forEach(function (item) {
    var width = item.textContent;
    let widthDigit = width.replace(/[\D]+/g, '');

    item.setAttribute("style","width:" + Math.min(widthDigit, 99) + '%');
    let step = Math.min((widthDigit / 20), 5);
    let r = 0;
    let g = 0;
    let b = 0;
    let percente = Math.round((step % 1) * 100);
    switch (Math.floor(step)) {
      case 0:
        g = Math.min(Math.round(percente * 2.55), 255);
        r = 255;
        break;
      case 1:
        g = 255;
        r = Math.min(Math.round(percente * 2.55), 255);
        break;
      case 2:
        g = 255;
        b = Math.min(Math.round(percente * 2.55), 255);
        break;
      case 3:
        b = 255;
        g = Math.min(Math.round(percente * 2.55), 255);
        break;
      case 4:
        b = 255;
        r = Math.min(Math.round(percente * 2.55), 255);
        break;
      case 5:
        r = 255;
        b = Math.min(Math.round(percente * 2.55), 255);
        break;
    }

    let style = "color: rgb(" + r + ", "+ g + ", " + b + ");";

    item.querySelector('span').setAttribute("style",  style);
  });

  init_copy_text();
  // var scene = document.querySelector('.parallax');
  // scene.classList.add('visible');
  // var parallax = new Parallax(scene, {
  //   relativeInput: true,
  // });


  var old_pos_circle = {
    top: 0,
    left: 0
  };
  var coordinateX = 0;
  var coordinateY = 0;
  var bottomCursor = document.querySelector('.circle-cursor-bottom');
  var topCursor = document.querySelector('.circle-cursor-top');


  function displayCursor(e) {
    document.addEventListener('mousemove', e => {
      coordinateX = e.clientX - 12;
      coordinateY = e.clientY
    });


    function animCursor() {
      let posCircle = bottomCursor.getBoundingClientRect();
      if (Math.abs(old_pos_circle.top - posCircle.top) < 7 && Math.abs(old_pos_circle.left - posCircle.left) < 7) {
        bottomCursor.classList.remove('circle-cursor-visible');
        topCursor.classList.remove('circle-cursor-visible');
      } else {
        bottomCursor.classList.add('circle-cursor-visible');
        topCursor.classList.add('circle-cursor-visible');
      }
      old_pos_circle.top = posCircle.top;
      old_pos_circle.left = posCircle.left;

      topCursor.style.transform = `translate(${coordinateX}px, ${coordinateY}px)`;
      bottomCursor.style.transform = `translate(${coordinateX}px, ${coordinateY}px)`;
      requestAnimationFrame(animCursor)
    };
    requestAnimationFrame(animCursor)
  };
  displayCursor();
})