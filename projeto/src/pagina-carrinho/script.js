/*

alert("penis");


var noOfItems = document.getElementsByClassName('test').length;

for (i = 1; i <= noOfItems; i++) {
    var item = document.getElementById('quantidade' + i);
    console.log(item);
    item.addEventListener('change', function () {
        var precoAMudar = document.getElementById('preco' + i);
        precoAMudar.textContent = Number(item.textContent) * Number(precoAMudar.textContent);

    });
}

*/



/*
var noOfItems = document.getElementsByClassName('test').length;

var quantidade = document.getElementById('quantidade');
var preco = document.getElementById('preco');


quantidade.addEventListener('change', function () {
    let result = Number(quantidade.value) * Number(preco.value.toString().replace("R$", ""));
    console.log(result);
    precoAMudar.textContent = (Number(quantidade.value) * Number(preco.textContent.split('$')[1]));
});
*/

var quantidade = document.getElementById('quantidade');
quantidade.addEventListener('change', calc_total);

var precoAMudar = document.getElementById('precoFinal');

function calc_total() {
    var qtd = Number(window.document.getElementById('quantidade').value);
    var tot = qtd * 123;
    precoAMudar.value = tot;
}

