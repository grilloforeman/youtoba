
function fazer() {

let meuCampo = document.getElementById('inv');
let meuCampo2 = document.getElementById('juros');
let meuCampo3 = document.getElementById('tempo');
let valor = parseFloat(meuCampo.value);
let valor2 = parseFloat(meuCampo2.value);
let valor3 = meuCampo3.value;
let conta = valor * ( 1 + valor2 ) ** valor3;
var conta2 = conta.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });


let meuConta = document.getElementById('inv2');
let meuConta2 = document.getElementById('juros2');
let meuConta3 = document.getElementById('tempo2');
let valorconta = parseFloat(meuConta.value);
let valorconta2 = parseFloat(meuConta2.value);
let valorconta3 = meuConta3.value;
let contavalor = (valorconta * ( 1 + valorconta2 ) ** valorconta3) - valorconta;
var contavalor2 = contavalor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });

var contatotal = conta - contavalor;
var contatotalvalor = contatotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
alert(contatotalvalor);

}
