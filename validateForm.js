
/* Notice that we are setting the function to call when submit is selected */
window.onsubmit=validateForm;

/* This function must return true or false */
/* If true the data will be sent to the server */
/* If false the data will not be sent to the server */
function validateForm() {
    /* Retrieving the values */
    //alert("Congrats");
    let phone = document.getElementById("phone").value;
    //let firstname = document.getElementById("firstname").value;
    //let lastname = document.getElementById("lastname").value;

    /* Validating values */
    let invalidMessages = "";
    //
    //
    // /*check lastName*/
    // if(isAllLetters(firstname) !== true) {
    //     alert("firstname all letters");
    //     invalidMessages += "Invalid Last Name\n";
    // }

    // /*check firstName*/
    // if(isAllLetters(lastname) !== true) {
    //     invalidMessages += "Invalid First Name\n";
    // }
    //
    // /*check phone number
    //     we will make the user put the dashes for their phone number themselves
    //     input "301-555-5555", if they put any other input, it will be invalid,
    //     XXX-XXX-XXXX */
    //
    // alert(phone.substring(0,3));
    // alert(phone.substring(3,4));
    // alert(phone.substring(4,7));
    // alert(phone.substring(7,8));
    // alert(phone.substring(8,12));
    if(phone.length !== 10 || isNaN(phone)) {
        invalidMessages += "Invalid Phone Number XXX-XXX-XXXX\n";
    }
       /* isDigit(phone.substring(0,3)) === false ||
        phone.substring(3,4) !== "-" ||
        isDigit(phone.substring(4,7)) === false ||
        phone.substring(7,8) !== "-" ||
        isDigit(phone.substring(8,12)) === false) {*/



    /*if any incorrect input*/
    if (invalidMessages !== "") {
        alert(invalidMessages);
        return false;

    /*prompt user for confirmation*/
    } else {
        var valuesProvided = "Do you want to submit the form data?\n";
        /* We could write the following as return window.confirm(valuesProvided) */
        return (window.confirm(valuesProvided));
    }
}

function isDigit(value) {
    return (String(parseInt(value)) !== value);
}

function isAllLetters(value) {
    var letters = /^[A-Za-z]+$/;

    if (value.value.match(letters)) {
        return true;
    } else {
        return false;
    }
}

