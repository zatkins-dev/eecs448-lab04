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
    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username.value))) {
        properEmail = false;
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
    let countsCorrect = true;
    for (let count of itemCounts) {
        if (count.value != Math.floor(count.value)) {
            countsCorrect = false;
            alert("Must have an integer count");
        }
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