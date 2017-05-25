//console.log(document.getElementsByName("activity-number"));

var myDiv = document.getElementById("date-id-0");
var today = new Date();
var date = today.getDate()+'-'+(today.getMonth()+1);
document.getElementById("date-0").textContent= date;


for(i = 0; i < 50; i++){
    
    var divClone = myDiv.cloneNode(true);
    
    divClone.setAttribute("id", "date-id-"+(i+1));
    
    document.getElementById("date-"+i).setAttribute("id", "date-"+(i+1));
    
    document.getElementById("calendar-container").appendChild(divClone);
    
    document.getElementById("date-"+i).textContent = (today.getDate()+i+1) + " - " + (today.getMonth()+1);
    
}