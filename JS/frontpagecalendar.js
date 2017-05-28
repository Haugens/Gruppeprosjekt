/**
 * Created by Henrik on 28/05/2017.
 */
var events = [];

var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

fetch('../PHP/activity.php').then(function(response) {
        return response.json()
    }).then(function(json) {
    console.log('parsed json', json);
    for(var i = 0; i<4;i++){

        console.log(json[i].activity);

        var string = json[i].date;

        var datearray = string.split('-');

        var currentmonth = parseInt(datearray[1]) - 1;

        console.log(months[currentmonth]);


        var calendarEvent = $('<div />', { class: 'calendar_event_frontpage'});

        var calendarList = $('<ul />');

        calendarEvent.append(calendarList);



        calendarList.append("<li class='calendar_event_date_frontpage'><div class='calendar_event_date_div_frontpage'><span class='calendar_event_date_day_frontpage'>"+datearray[2]+"</span><span class='calendar_event_date_yearmonth_frontpage'><span class='calendar_event_date_month_frontpage'>"+months[currentmonth]+"</span><span class='calendar_event_date_year_frontpage'>"+datearray[0]+"</span></span></div></li>");



        var eventName = $('<li />', { class: "calendar_event_name_frontpage", text: capitalizeFirstLetter(json[i].activity)});

        calendarList.append(eventName);



        var eventLocation = $('<li />', { class: "calendar_event_location_frontpage", text: capitalizeFirstLetter(json[i].location)});



        calendarList.append(eventLocation);



        $('#upcoming_events').append(calendarEvent);


    }
}).catch(function(ex) {
    console.log('parsing failed', ex)
})



