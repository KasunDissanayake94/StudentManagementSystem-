var newEventHolder = document.getElementById("newEventHolder");
var eventForm = document.getElementById("newEventForm");
var eventDate = document.getElementById("eventDate");
var addEvent = document.getElementById("addEvent");
var cancel = document.getElementById("cancelAddEvent");
var upcomingEvents = document.getElementById("upcomingEvents");
var eventHolder = document.getElementById("eventHolder");
var removeEvent = document.getElementById("removeEvent");

// Show New Event form
$(newEventHolder).click(function() {
  $(eventForm).slideDown(400);
});

// Add Datepicker to Date input
$(eventDate).datepicker();

// Close New Event form
$(cancel).click(function() {
  $(eventForm).slideUp(400);
});

// Delete icon removed event from list
$(removeEvent).click(function() {
  $(eventHolder).addClass('hide').stop();
});