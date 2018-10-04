function selectOption(checkbox_id, num_id, container_id) {
    document.getElementById(checkbox_id).checked = !document.getElementById(checkbox_id).checked;
    if (document.getElementById(checkbox_id).checked) {
        document.getElementById(num_id).hidden = false;
        document.getElementById(container_id).style.backgroundColor = "lavender";
    } else {
        document.getElementById(num_id).hidden = true;
        document.getElementById(container_id).style.backgroundColor = "white";
    }
}