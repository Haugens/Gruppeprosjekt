var events = [];
$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
fetch('testdatabase.php')
  .then(function(response) {
    return response.json()
  }).then(function(json) {
    console.log('parsed json', json);
    for(var i = 0; i<json.length;i++){
        console.log(json[i].activity);
        $string = json[i].date;
      $datearray = $string.split('-');
      $currentmonth = parseInt($datearray[1]) - 1;
      console.log($months[$currentmonth]);
      $('#calendar_container').append("<div class='calendar_event'>" +
          "<ul><li class='calendar_event_date'><div class='calendar_event_date_div'><span class='calendar_event_date_day'>"+$datearray[2]+"</span><span class='calendar_event_date_yearmonth'><span class='calendar_event_date_month'>"+$months[$currentmonth]+"</span><span class='calendar_event_date_year'>"+$datearray[0]+"</span></span></div></li>" +
          "<li class='calendar_event_name'>"+json[i].activity.toLowerCase()+"</li>" +
          "<li class='calendar_event_location'>"+json[i].location.toLowerCase()+"</li></ul></div>");
    }
  }).catch(function(ex) {
    console.log('parsing failed', ex)
  })

