function allLetter(inputtxt) {
    var letters = /^[a-z]*$/i;
    if (!inputtxt.value.match(letters)) {
        alert('Only alphabet characters are accepted!');
    }
}