//Color wall functions
//Give value to wall
var selectedWall = 1;
$(document).ready(function() {
    //Change value when clicked, the value decides which wall is selected by wall ID
    $("#wallToggle").click(function toggleWall(){
        if (selectedWall === 1) {
            selectedWall = 2;
        } else {
            selectedWall = 1;
        }
    });
    //the function for the color buttons
    $(".colorButton").click(function(){
        var color = $(this).data("color");
        changeColor(color);
    });
});
//the color changing function for the color buttons
function changeColor(color) {
    var wallID = "#wall" + selectedWall;
    $(wallID).css("background-color", color);
}