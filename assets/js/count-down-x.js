const second = 1000,
   minute = second * 60,
   hour = minute * 60,
   day = hour * 24;

let eventDate = "March 26, 2021 00:00:00",
   countDown = new Date(eventDate).getTime(),
   x = setInterval(function () {
      let now = new Date().getTime(),
         distance = countDown - now;

      (document.getElementById("day").innerText = Math.floor(distance / day)),
         (document.getElementById("hour").innerText = Math.floor(
            (distance % day) / hour
         )),
         (document.getElementById("minute").innerText = Math.floor(
            (distance % hour) / minute
         )),
         (document.getElementById("second").innerText = Math.floor(
            (distance % minute) / second
         ));
   }, 0);
