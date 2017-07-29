var PIN = PIN || {};

PIN.AdicionarProgramas = (function () {

    function AdicionarProgramas() {
        this.selectPropaganda = $('.js-select-programa');
        this.inputPreco = $('.js-input-preco');
        this.buttonAdicionar = $('#btn-add');
        this.buttonLimpar = $('#btn-limpar');
        this.corpoTabelaPrograma = $('.js-corpo-tabela');
    };

    AdicionarProgramas.prototype.enable = function () {
        this.buttonAdicionar.on('click', onAddicionarProduto.bind(this));
        this.buttonLimpar.on('click', onEliminarConteudo.bind(this))

    };

    function onEliminarConteudo() {
        this.selectPropaganda.val('');
        this.inputPreco.val('');
    }

    function onAddicionarProduto() {
        if (this.selectPropaganda.val() && this.inputPreco.val() && !verificarProdutoExistente.call(this, this.selectPropaganda.val())) {
            var tr = $('<tr class="js-linha">').append('<td class="js-valor-programa">' + this.selectPropaganda.val() + '</td>').append('<td style="width:200px">' + this.inputPreco.val() + '</td>').append('<td style="width:60px"><a href="#" class="js-button-excluir" style="border: 1px solid #dadada;border-radius:50%;padding: 0 6px;color: #ffffff; background-color:#dadada;text-decoration:none;font-size:14px;font-weight: 900;">×</a></td>')
            this.corpoTabelaPrograma.append(tr);

            $('.js-button-excluir').on('click', onRemoverLinha.bind(this))

        }
        verificarProdutoExistente.call(this)
    }

    function verificarProdutoExistente(valor) {
        var linhas = this.corpoTabelaPrograma.find('tr')
        var tamanho = linhas.length
        for (i = 0; i < tamanho; i++) {
            if($(linhas[i]).find('.js-valor-programa').text()===valor){
                return true;
            }
        }
        return false;
    }

    function onRemoverLinha(event) {
        event.preventDefault
        var botaoExcluir = $(event.currentTarget);
        botaoExcluir.parents('.js-linha').remove();
        //console.log(botaoExcluir);
        //this.corpoTabelaPrograma.remove(botaoExcluir.parents('.js-linha'))
    }

    return AdicionarProgramas;
}());

$(function () {
    var adicionarProgramas = new PIN.AdicionarProgramas();
    adicionarProgramas.enable();
})