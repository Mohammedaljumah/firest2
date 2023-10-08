var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();


var x = setInterval(function() {
var counret = document.querySelector("#counretdown");
 
  var now = new Date().getTime();

  
  var distance = countDownDate - now;

  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  
  counret.innerHTML = days + "يوم " + hours + "ساعة"
  + minutes + "دقيقة " + seconds + "ثانية";

 
  if (distance < 0) {
    clearInterval(x);
    counret.innerHTML = "لقد وصلت موتأخرا";
  }
}, 1000);

