
var botaoAlert = document.getElementById('alert');
var dialog = document.getElementById('dialog');

var botaoDialog = document.getElementById('dialogShow');
var fechaDialog = document.getElementById('btnDialog');


botaoAlert.onclick = function () {
    alert('Hello World!');
}

botaoDialog.onclick = () => {
    dialog.show();
};

fechaDialog.onclick = () => {
    dialog.close();
};

/*
document.getElementById('show').onclick = function () {
    dialog.show();
};

document.getElementById('hide').onclick = function () {
    dialog.close();
};    
*/