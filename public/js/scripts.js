var count = 0;
function changeText() {
    count++;
    // count >= 2 ?
    //     document.getElementById("theButton").innerHTML = "Stop it.":    
    //     document.getElementById("theButton").innerHTML = "I changed!";

    switch(count) {
        case 1:
            document.getElementById("theButton").innerHTML = "I changed!";
            break;
        case 2:
            document.getElementById("theButton").innerHTML = "Stop it.";
            break;
        case 3:
            document.getElementById("theButton").innerHTML = "One more time and you're gone.";            
            break;
        default:
            document.getElementById("theAnchor").href = "/";
    }
}