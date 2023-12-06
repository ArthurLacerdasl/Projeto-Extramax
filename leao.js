var valorTotal = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var valorProduto = [3.60, 7.60, 2.40, 2.40, 2.40, 2.40, 2.40, 2.40, 6.34, 6.34, 6.34, 6.34, 6.34, 6.34, 7.90, 7.90, 6.34, 6.34, 8.00, 8.00, 6.34, 6.34, 6.34, 6.34];
var qtd = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

function adicionarItem(item) {

    var quantidade = document.getElementById('quantidade' + item);
    var total = document.getElementById('total' + item);
    qtd[item] += 1;
    valorTotal[item] = Number.parseFloat(valorProduto[item]) * qtd[item];
    quantidade.innerHTML = qtd[item];
    total.innerHTML = valorTotal[item].toFixed(2);
    valorCompra();

}

function removerItem(item) {

    if (qtd[item] > 0) {
        qtd[item] -= 1;
        var quantidade = document.getElementById('quantidade' + item);
        var total = document.getElementById('total' + item);
        quantidade.innerHTML = qtd[item];
        valorTotal[item] = Number.parseFloat(valorProduto[item]) * qtd[item];
        total.innerHTML = valorTotal[item].toFixed(2);
        valorCompra();

    }
}

function valorCompra() {
    var valorTotalCompra = document.getElementById('valorTotalCompra');
    var valor = 0;

    for (var i = 0; i < valorTotal.length; i++) {
        valor += valorTotal[i];

    }

    valorTotalCompra.innerHTML = valor.toFixed(2);

}