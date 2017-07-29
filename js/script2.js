$(document).ready(function(){
	$("#cep").blur(function (){
		cep($(this).val());

	});

	$("#uf").change(function (){
		buscarMunicipio($(this).val())
	});

	$("#botao-remover").click(function (){
		removerImagem();
	});

	$('.data-picker').datepicker({
        format: "dd/mm/yyyy",
        language: "pt-BR"
    });

    $('.clockpicker').clockpicker({
	    placement: 'bottom',
		align: 'right',
		autoclose: true,
		'default': '00:00'
    });
    
	adicionar();
	mascaras();
	remover();
	adicionar2();
	idade_data_picker();
    tipo_pessoa();
    adicionar3();
	AdicionarFiltro("tab", 3);
});

function mascaras(){
	$(".mask-cep").mask("00.000-000");
	$(".mask-money").maskMoney({symbol:'R$',showSymbol:false, thousands:'.', decimal:',', symbolStay: true});
	$(".mask-celular").mask("(99) 9 9999-9999");
	$(".mask-ano").mask("9999/9999")
	$(".mask-horas").mask("99:99");
	$(".mask-placa").mask("AAA-9999");
	$(".mask-cpf").mask("999.999.999-99");
	$(".mask-date").mask("99/99/9999");
	$(".mask-telefone").mask("(99) 9999-9999");
}

function adicionar(){
	$("#add").click(function() {
		var new_table = $("<tr>");
		var colunas = "";

		colunas += '<td style="border-right:solid 1px #bae5ff;border-bottom:solid 1px #bae5ff;">';
		colunas += '<select class="form-control" id="estado">';
		colunas += '<option>Selecione</option>';
		colunas += '<option>Tim</option>';
		colunas += '<option>Oi</option>';
		colunas += '<option>Vivo</option>';
		colunas += '<option>Claro</option>';
		colunas += '</select>';
		colunas += "</td>";
		

		colunas += '<td style="border-right:solid 1px #bae5ff;border-bottom:solid 1px #bae5ff;">';
		colunas += '<input type="text" class="form-control" name="telefone" placeholder="Telefone"></input>';
		colunas += "</td>";
		colunas += '<td style="border-right:solid 1px #bae5ff;border-bottom:solid 1px #bae5ff;">';
		colunas += '<input type="text" class="form-control" name="celular" placeholder="Celular"></input>';
		colunas += "</td>";

		colunas += '<td style="border-right:solid 1px #bae5ff;border-bottom:solid 1px #bae5ff;">';
		colunas += '<div class="checkbox animated-checkbox checkbox-table">';
		colunas += '<label class="semibold-text">';
		colunas += '<input type="checkbox"><span class="label-text"> Whatsapp <i class="fa fa-whatsapp" style="font-size: 16px"></i></span>';
		colunas += '</label>';
		colunas += '</div>';
		colunas += "</td>";

		colunas += '<td>';
		colunas += '<i class="fa fa-times-circle icon-table" id="excluir" style="color: #0080cd;font-size: 15px;margin-top: 5px;"></i>';
		colunas += '</td>';

		new_table.append(colunas);
		$("#tabela").append(new_table);
	});
}

function adicionar2(){
	$("#add2").click(function(){	
		var new_table = $("<tr>");
		var colunas = "";
		colunas += '<td style="border-right:solid 1px #bae5ff;border-bottom:solid 1px #bae5ff;">';
		colunas += '<select class="form-control form-group">';
		colunas += '<option>Selecione</option>';
		colunas += '<option>Encomenda</option>';
		colunas += '<option>Envelope</option>';
		colunas += '</select>';
		colunas += '</td>';

		colunas += '<td style="border-right:solid 1px #bae5ff;border-bottom:solid 1px #bae5ff;" class="form-group">';
		colunas += '<input type="text" class="form-control form-group" disabled style="font-weight: 400;line-height: 1.44;color: #555;background-color: #fff;background-image: none;border: 2px solid #ccc;">';
		colunas += '</td>'
		
		colunas += '<td style="border-right:solid 1px #bae5ff;border-bottom:solid 1px #bae5ff;">';
		colunas += '<input type="text" style="width: 87%" class="form-control form-group mask-money" placeholder="Valor">'
		colunas += '</td>'

		colunas += '<td>';
		colunas += '<i class="fa fa-times-circle icon-table" id="excluir" style="color: #0080cd;font-size: 15px;margin-top: 5px;"></i>';
		colunas += '</td>';
		
		new_table.append(colunas);
		$("#tabela").append(new_table);

		$(".mask-money").maskMoney({symbol:'R$',showSymbol:false, thousands:'.', decimal:',', symbolStay: true});
	});
}

function adicionar3(){
	$("#add3").click(function(){
		console.log('chegou')
		var new_table = $("<tr>");
		var colunas = "";

		colunas += '<td style="border-top: none; border-right:solid 1px #bae5ff">';
		colunas += '<input type="text" class="form-control" name="nome_dependente" placeholder="Nome do Dependente" id="">';
		colunas += '</td>';

		colunas += '<td style="border-top: none; border-right:solid 1px #dddddd;">';
		colunas += '<input type="text" class="form-control data-picker mask-data" name="data_nascimento" placeholder="Data de Nascimento" id="Data_Nascimento">';
		colunas += '</td>';

		colunas += '<td style="border-top: none; border-right:solid 1px #dddddd;">';
		colunas += '<input type="text" class="form-control" name="rg" placeholder="rg" id="rg">';
		colunas += '</td>';

		colunas += '<td style="border-top: none; border-right:solid 1px #dddddd;">';
		colunas += '<input type="text" class="form-control" name="cpf" placeholder="cpf" id="cpf">';
		colunas += '</td>';

		colunas += '<td style="border-top: none; border-right:solid 1px #dddddd;">';
		colunas += '<input type="text" class="form-control" name="certidao_nascimento" placeholder="Certidão Nascimento" id="certidao_nascimento">';
		colunas += '</td>';

		colunas += '<td style="border-top: none; border-right:solid 1px #dddddd;">';
		colunas += '<input type="text" class="form-control" name="celular" placeholder="Grau Parentesco " id="celular">';
		colunas += '</td>';

		colunas += '<td tyle="width: 30px;">';
		colunas += '<i class="fa fa-times-circle icon-table" id="excluir" style="color: #0080cd;font-size: 15px;margin-top: 5px;border-top: none;"></i>';
		colunas += '</td>';
		
		new_table.append(colunas);
		$("#tabela").append(new_table);		
	});
}

function remover(){
	$(document).on("click","#excluir", function(){
		var tr=$(this).closest('tr')
		swal({
		  title: "Você tem certeza?",
		  text: "Você não podera recuperar esse arquivo novamente!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#bae5ff",
		  confirmButtonText: "Sim, excluí-lo!",
		  cancelButtonText: "Nao, cancelar!",
		  closeOnConfirm: false,
		  closeOnCancel: true
		},
		function(isConfirm){
			if(isConfirm){
				tr.fadeOut(2000, function(){
					tr.remove();
				});
    			swal("Deletado!", "Seu arquivo foi deletado com sucesso", "success");
			}		
		});
		return false
	});
}

function cep(codigo2){
	$.ajax({
		type: 'GET',
		url: "cep.php",
		data: {cep: codigo2},
		dataType: "json",
		success: function (res2){
			$("#cep").html(res2);
			$("#uf option[sigla=" + res2.uf + "]").prop("selected",true);
			var cidade= removeAcento(res2.cidade);
			buscarMunicipio($("#uf option:selected").val(), cidade.toUpperCase());
			$("#endereco").val(res2.logradouro);
			$("#bairro").val(res2.bairro);
		}
	});
};

function buscarMunicipio (codigo,cidade){
	$.ajax({
		type: "POST",
		url: "buscarMunicipio.php",
		data: {uf: codigo},
		dataType: "html",
		beforeSend: function () {
    		$("#cidade").html("<option>Carregando...</option>");
    	},
		success: function(res){
			$("#cidade").html(res);
			$("#cidade option:contains("+cidade+")").prop("selected", true);
		}
	});
};

function removeAcento(strToReplace) {
	str_acento= "áàãâäéèêëíìîïóòõôöúùûüçÁÀÃÂÄÉÈÊËÍÌÎÏÓÒÕÖÔÚÙÛÜÇ";
	str_sem_acento = "aaaaaeeeeiiiiooooouuuucAAAAAEEEEIIIIOOOOOUUUUC";
	var nova="";
	for (var i = 0; i < strToReplace.length; i++) {
		if (str_acento.indexOf(strToReplace.charAt(i)) != -1) {
			nova+=str_sem_acento.substr(str_acento.search(strToReplace.substr(i,1)),1);
		} else {
			nova+=strToReplace.substr(i,1);
		}
	}
	return nova;
};

function carregarImagem(input) {
  if (input.files && input.files[0]) {

    var imagem = new FileReader();

    imagem.onload = function(e) {
      $('#container-logo').hide();
      //Aqui pega a src da imagem e colocar nela para visualizar.
      $('#imagem-upload').prop('src', e.target.result);
      $('#container-img').show();
    };
    //Aqui faz uma copia da variavel para exibir a imagem.
    imagem.readAsDataURL(input.files[0]);

  } else {
  }
};

function removerImagem() {
  $('#input-upload').replaceWith($('#input-upload').clone());
  $('.file-upload-content').hide();
  $('#container-logo').show();
};

function tipo_pessoa() {
	$("#tipo_pessoa").change(function () {
		$(".cnpj_cpf").unmask();

		if ($(this).val() == 1) {
			$('.cnpj_cpf').addClass('mask-cpf');
			$('#cnpj_cpf').attr('placeholder','CPF');
			$('#razao-nome').attr('placeholder','Nome Completo');
			$('#fantasia-conhecido').attr('placeholder','Conhecido por :')
			$('#inscriçao-rg').attr('placeholder','RG');
			$(".nome_pessoa_juridica").hide();
			$(".nome_pessoa_fisica").show(0)
			$(".barra").hide();
			$("#bt_captcha").hide();
			$("#remove_input_group").removeClass('input-group');
		}else if($(this).val() == 2) {
			$('.cnpj_cpf').removeClass('mask-cpf');
			$('.cnpj_cpf').unmask();
			$('#cnpj_cpf').attr('placeholder','CNPJ');
			$('#razao-nome').attr('placeholder','Razão Social');
			$('#fantasia-conhecido').attr('placeholder','Fantasia')
			$('#inscriçao-rg').attr('placeholder','Inscrição Estadual');
			$(".nome_pessoa_fisica").hide();
			$(".nome_pessoa_juridica").show(0);
			$(".barra").hide();
			$("#remove_input_group").addClass('input-group');			
			$("#bt_captcha").show(0);
		}else{
			$('.cnpj_cpf').removeClass('mask-cpf');
			$('.cnpj_cpf').unmask();
			$('#cnpj_cpf').attr('placeholder','CNPJ/CPF');
			$('#razao-nome').attr('placeholder','Razão Social/Nome Completo');
			$('#fantasia-conhecido').attr('placeholder','Fantasia/Conhecido por :')
			$('#inscriçao-rg').attr('placeholder','Inscrição Estadual/RG');
			$(".nome_pessoa_fisica").show(0);
			$(".nome_pessoa_juridica").show(0);
			$(".barra").show(0);			
			$("#remove_input_group").addClass('input-group');			
			$("#bt_captcha").show(0);
		}
	});
};

function idade_data_picker() {
	$("#data-nascimento").blur(function (){
		var esteAno = new Date().getFullYear();
		var dataInput = $('#data-nascimento').val();
		var anoInput = dataInput.substring(6,10);
		var totalAnos = esteAno-anoInput;

		if (totalAnos <= 1) {
			$("#resultado_idade").text('Idade Invalida');
		}else if (totalAnos > 2){
			$("#resultado_idade").text(totalAnos+' anos');
		}
	});
}

function AdicionarFiltro(tabela, coluna) {
	 
	    var colFiltrar = $("#tabela-pag_length").parent().parent();
	 
	    $(colFiltrar).append("<div class='col-sm-6'><label style='font-weight:normal;white-space:nowrap;position:absolute;left:285px;top:3px;'>Filtro :</label><select style='float:right;width:165px;margin-right:14px;' id='filtroColuna_" + coluna.toString() + "'  class='form-control'></select></div>");
	 
	    var valores = new Array();
	 
	    $("#" + tabela + " thead tr").each(function () {
	        var txt = $(this).children("th:nth-child(" + coluna + ")").text();
	        if (valores.indexOf(txt) < 0) {
	            valores.push(txt);
	        }
	    });
	    $("#filtroColuna_" + coluna.toString()).append("<option>Todos</option>")
	    for (elemento in valores) {
	        $("#filtroColuna_" + coluna.toString()).append("<option>" + valores[elemento] + "</option>");
	    }
	 
	    $("#filtroColuna_" + coluna.toString()).change(function () {
	        var filtro = $(this).val();
	        $("#" + tabela + " thead tr").show();
	        if (filtro != "Todos") {
	            $("#" + tabela + " tbody tr").each(function () {
	                var txt = $(this).children("td:nth-child(" + coluna + ")").text();
	                if (txt != filtro) {
	                    $(this).hide();
	                }
	            });
	        }
	    });
};
