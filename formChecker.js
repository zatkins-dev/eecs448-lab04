function checkForm() {
    let username = document.getElementById("user");
    let password = document.getElementById("pass");

    let items = [document.getElementById("shoeCheck"), document.getElementById("penCheck"), document.getElementById("rockCheck")];
    let itemCounts = [document.getElementById("numShoes"), document.getElementById("numPens"), document.getElementById("numRocks")];

    let shipping = [document.getElementById("sevenday"), document.getElementById("threeday"), document.getElementById("overnight")];

    let loginFilled = true;
    if (!(username.value && password.value)) {
        loginFilled = false;
        alert("Login info blank");
    }
    let properEmail = true;
    // email check
    let emailStr = username.value;
    let atLocation = emailStr.indexOf("@");
    if (atLocation <= 1) {
        properEmail = false;
    } else {
        let firstHalf = emailStr.substring(0,atLocation);
        let lastHalf = emailStr.substring(atLocation+1, emailStr.length);
        let periodLocation = lastHalf.indexOf(".");
        if (firstHalf.length === 0 || lastHalf.length === 0) {
            properEmail = false;
        }
        else if (periodLocation === -1 || periodLocation === 0 || periodLocation === lastHalf.length-1){
            properEmail = false;
        }
        else if (!/^\w+([\.-]?\w+)*/.test(firstHalf)) {
            properEmail = false;
        }
        else if (!/\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(lastHalf)) {
            properEmail = false;
        }
    }
    if (properEmail === false) {
        alert("Username not in the form of an email address");
    }
    let shippingSelection = false;
    for (let r of shipping) {
        if (r.checked) {
            shippingSelection = true;
        }
    }
    if (!shippingSelection) alert("Select a shipping option");
    let anItemSelected = false;
    for (let item of items) {
        if (item.checked) {
            anItemSelected = true;
        }
    }
    if (!anItemSelected) alert("Must select at least one item");
    let countsCorrect = true;
    for (let count of itemCounts) {
        if (count.value < 0) {
            countsCorrect = false;
            alert("Must have positive count");
        }
    }
    if (loginFilled && properEmail && shippingSelection && anItemSelected && countsCorrect) {
        return true;
    }
    event.preventDefault();
    return false;
}