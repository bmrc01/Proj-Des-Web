var noOfItems = document.getElementsByClassName('test').length;

for (i = 0; i < noOfItems; i++) {
    let quantidade = document.getElementById('quantidade' + i);
    let preco = document.getElementById('preco' + i);
    let precoTotal = document.getElementById('precoFinal' + i);
    console.log("quantidade" + quantidade);
    console.log("preco" + preco);
    console.log("precofinal" + precoTotal);

    quantidade.addEventListener('change', function (e) {
        var target = e.target;

        precoTotal.textContent = 'R$' + (Number(target.value) * Number(preco.textContent.replace('R$', ''))).toFixed(2);
    });
}