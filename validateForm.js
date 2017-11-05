
/* Notice that we are setting the function to call when submit is selected */
window.onsubmit=validateForm;

/* This function must return true or false */
/* If true the data will be sent to the server */
/* If false the data will not be sent to the server */
function validateForm(arr) {
    /* Retrieving the values */


    /* these array indexes can change if we decide on a different array arrangement*/
    var studentID = arr[0].trim();
    var lastName = arr[1].trim();
    var firstName = arr[2].trim();
    var phoneNum = arr[6].trim();


    /* Validating values */
    var invalidMessages = "";

    /*check studentID*/
    if(studentID.length !== 9 || isDigit(studentID) === false) {
        invalidMessages += "Invalid Student ID\n";
    }

    /*check lastName*/
    if(isAllLetters(lastName) !== true) {
        invalidMessages += "Invalid Last Name\n";
    }

    /*check firstName*/
    if(isAllLetters(firstName) !== true) {
        invalidMessages += "Invalid First Name\n";
    }

    /*check phone number
        we will make the user put the dashes for their phone number themselves
        input "301-555-5555", if they put any other input, it will be invalid,
        XXX-XXX-XXXX */

    if(phoneNum.length !== 12 ||
        isDigit(phoneNum.substring(0,3)) === false ||
        phoneNum.substring(3,4) !== '-' ||
        isDigit(phoneNum.substring(4,7)) === false ||
        phoneNum.substring(7,8) !== '-' ||
            isDigit(phoneNum.substring(8,12)) === false) {
        invalidMessages += "Invalid Phone Number XXX-XXX-XXXX\n";
    }

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

/*not sure when to call this, call before inserting array into database*/
function insertQuotes(value) {
    return "\"" + value + "\"";
}