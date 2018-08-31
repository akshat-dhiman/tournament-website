function clickon(){
  alert("You have been successfully registered! Proceed with Pay button.");
}
window.setInterval(function(){ // Set interval for checking
    var date = new Date(); // Create a Date object to find out what time it is
    if(date.getHours() === 8 && date.getMinutes() === 0){ // Check the time
        $( "#players" ).replaceWith( "" );
        c=0;
        document.getElementById('counter').innerHTML = 0;
    }
}, 3600000);
