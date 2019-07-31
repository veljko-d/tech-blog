// CREATE NEW POST FORM VALIDATION
function validateNewForm() {
    var title = document.forms["create"]["title"].value;
    var content = document.forms["create"]["content"].value;
    var val_info = document.getElementById("val-info");

    if (title == "") {
        val_info.innerHTML = "Title cannot be empty.";
        return false;
    }
    if (content == "") {
        val_info.innerHTML = "Content cannot be empty.";
        return false;
    }
}

// EDIT POST FORM VALIDATION
function validateEditForm() {
    var title = document.forms["edit"]["title"].value;
    var content = document.forms["edit"]["content"].value;
    var val_info = document.getElementById("val-info");

    if (title == "") {
        val_info.innerHTML = "Title cannot be empty.";
        return false;
    }
    if (content == "") {
        val_info.innerHTML = "Content cannot be empty.";
        return false;
    }
}
