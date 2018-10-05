function resetForm() {
    let options = document.getElementsByClassName("option-container");
    for (let c of options) {
        c.lastElementChild.value = 1;
        c.firstElementChild.checked = false;
        c.firstElementChild.onchange();
    }
    console.log("reset");
}