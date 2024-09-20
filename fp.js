// document.write('Hello World');

document.write("This is a test to see if JS is running");

$.ajax({
    type: "POST",
    url: "main.py",
    data: { param: 1, "Jake", "State"}, 
    dataType: "text"
    }).done(function( o ) {
        alert("OK");
});