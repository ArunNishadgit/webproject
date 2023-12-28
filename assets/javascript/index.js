//    clock javascript code
$(function () {
  function time() {
    // Create new date var and init other vars
    var date = new Date(),
      hours = date.getHours(),
      minutes = date.getMinutes().toString(),
      ante,
      greeting,
      dd = date.getDate().toString();

    if (hours < 12) {
      ante = "AM";
      greeting = "Morning";
    } else if (hours === 12 && hours >= 3) {
      ante = "PM";
      greeting = "Afternoon";
    } else {
      ante = "PM";
      greeting = "Evening";
    }

    if (hours === 0) {
      hours = 12;
    } else if (hours !== 12) {
      hours = hours % 12;
    }

    if (minutes.length < 2) {
      minutes = "0" + minutes;
    }

    if (dd.length < 2) {
      dd = "0" + dd;
    }

    // Months
    Date.prototype.monthNames = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];

    // Days
    Date.prototype.weekNames = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ];

    Date.prototype.getMonthName = function () {
      return this.monthNames[this.getMonth()];
    };

    Date.prototype.getWeekName = function () {
      return this.weekNames[this.getDay()];
    };

    $("#time").html(hours + ":" + minutes + " " + ante);
    $("#day").html(date.getWeekName() + ", " + date.getMonthName() + " " + dd);
    $("#greeting").html("Good " + greeting + ",");
    setInterval(time, 1000);
  }
  time();
});

// text hero animation
