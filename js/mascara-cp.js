var CP = CP || {};

CP.MascaraCPF = (function () {

	function MascaraCPF() {
		this.cpf = $('.js-cpf');
	};

	MascaraCPF.prototype.enable = function () {
		this.cpf.mask('000.000.000-00');
	};

	return MascaraCPF;

}());

CP.MascaraCNPJ = (function () {

	function MascaraCNPJ() {
		this.cnpj = $('.js-cnpj');
	};

	MascaraCNPJ.prototype.enable = function () {
		this.cnpj.mask('000.000.000/0000-00');
	};

	return MascaraCNPJ;

}());

CP.MascaraData = (function () {

	function MascaraData() {
		this.data = $('.js-data');
	};

	MascaraData.prototype.enable = function () {
		this.data.mask('00/00/0000');
	};

	return MascaraData;

}());

CP.MascaraTelefone = (function () {

	function MascaraTelefone() {
		this.telefone = $('.js-telefone');
	};

	MascaraTelefone.prototype.enable = function () {
		var maskComportamento = function (val) {
			return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		};
		var options = {
			onKeyPress: function (val, e, field, options) {
				field.mask(maskComportamento.apply({}, arguments), options);
			}
		};
		this.telefone.mask(maskComportamento, options);
	};

	return MascaraTelefone;

}());

CP.MascaraValor = (function () {

	function MascaraValor() {
		this.valor = $('.js-valor');
	};

	MascaraValor.prototype.enable = function () {
		this.valor.mask("#.##0,00", {
			reverse: true
		});
	};

	return MascaraValor;

}());

CP.MascaraCEP = (function () {

	function MascaraCEP() {
		this.cep = $('.js-mascaracep');
	};

	MascaraCEP.prototype.enable = function () {
		this.cep.mask('00.000-000');
	};

	return MascaraCEP;

}());


$(function () {
	var mascaraCPF = new CP.MascaraCPF();
	mascaraCPF.enable();

	var mascaraCNPJ = new CP.MascaraCNPJ();
	mascaraCNPJ.enable();

	var mascaraData = new CP.MascaraData();
	mascaraData.enable();

	var mascaraTelefone = new CP.MascaraTelefone();
	mascaraTelefone.enable();

	var mascaraValor = new CP.MascaraValor();
	mascaraValor.enable();

	var mascaraCep = new CP.MascaraCEP();
	mascaraCep.enable();
});
