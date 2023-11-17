window.onload = function () {
    alert('Skrypt JavaScript jest podłączony do tej strony!');
};

function showHiddenColumns() {
    var hiddenColumns = document.getElementsByClassName('hidden');
    for (var i = 0; i < hiddenColumns.length; i++) {
        hiddenColumns[i].style.display = 'table-cell';  // Zmień 'table-cell' na odpowiedni display dla Twojej tabeli
    }
}

