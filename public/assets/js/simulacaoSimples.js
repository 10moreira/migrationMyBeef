
function updateDonut(percent, element){
  //var percent = 45;
  if (percent < 50){

    offset = (360 / 100) * percent;
    element.parentNode.querySelector("#section3").style.webkitTransform = "rotate(" + offset + "deg)";
    element.parentNode.querySelector("#section3 .item").style.webkitTransform = "rotate(" + (180 - offset) + "deg)";
    element.parentNode.querySelector("#section3").style.msTransform = "rotate(" + offset + "deg)";
    element.parentNode.querySelector("#section3 .item").style.msTransform = "rotate(" + (180 - offset) + "deg)";
    element.parentNode.querySelector("#section3").style.MozTransform = "rotate(" + offset + "deg)";
    element.parentNode.querySelector("#section3 .item").style.MozTransform = "rotate(" + (180 - offset) + "deg)";
    element.parentNode.querySelector("#section3 .item").style.backgroundColor = "#41A8AB";

  } else {

    offset = ((360 / 100) * percent) - 180;
    element.parentNode.querySelector("#section3").style.webkitTransform = "rotate(180deg)";
    element.parentNode.querySelector("#section3 .item").style.webkitTransform = "rotate(" +  offset + "deg)";
    element.parentNode.querySelector("#section3").style.msTransform = "rotate(180deg)";
    element.parentNode.querySelector("#section3 .item").style.msTransform = "rotate(" +  offset + "deg)";
    element.parentNode.querySelector("#section3").style.MozTransform = "rotate(180deg)";
    element.parentNode.querySelector("#section3 .item").style.MozTransform = "rotate(" +  offset + "deg)";
    element.parentNode.querySelector("#section3 .item").style.backgroundColor = "#E64C65";

  }
    element.parentNode.querySelector("span").innerHTML = percent + "%";
}

function updateSlider(element) {
  if (element) {
    var parent = element.parentElement;
    var thumb = parent.querySelector('.range-slider__thumb'),
        bar = parent.querySelector('.range-slider__bar'),
        pct = element.value * ((parent.clientHeight - thumb.clientHeight) / parent.clientHeight);
    thumb.style.bottom = pct + '%';
    bar.style.height = 'calc(' + pct + '% + ' + thumb.clientHeight / 2 + 'px)';
    thumb.textContent = element.value + '%';
  }
  updateDonut(element.value, element.parentNode);
}
(function initAndSetupTheSliders() {
    [].forEach.call(document.getElementsByClassName("container"), function(el) {
      var inputs = [].slice.call(el.querySelectorAll('.range-slider input'));
      inputs.forEach(function (input) {
          input.setAttribute('value', '50');
          updateSlider(input);
          input.addEventListener('input', function (element) {
              updateSlider(input);
          });
          input.addEventListener('change', function (element) {
              updateSlider(input);
          });
      });
    });
}());

/* Valida os inputs dos campos dos gráficos.
$('body').on('keyup', 'input[data-numbers]',  function() {
  var value = $(this).val().replace(/[^.\d]+/g,'').replace( /^([^\.]*\.)|\./g, '$1');
  $(this).val(value);
  });
*/

/*Javascript Button */
$( document ).ready(function() {
	var audio = $("#clickSound")[0];
	var audio2 = $("#clickSound2")[0];
	$("#button").mousedown(function() {
	  audio2.play();
	});
	$("#button").mouseup(function() {
	  audio.play();
	});
});
