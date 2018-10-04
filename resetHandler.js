function reset() {
    let options = document.getElementsByClassName("option-container");
    for (let c in options) {
        c.style.backgroundColor = white;
        c.getLastChildElement().value = 0;
        c.getFirstChildElement().checked = false;
    }
}