$(document).ready(function(){
	$("#form-change-password").on('submit', function(){
		if($("#antiga-senha").val() != "" && ($("#nova-senha").val() != "" && $("#confirma-nova-senha").val() != "" && $("#nova-senha").val() == $("#confirma-nova-senha").val())){
			// console.log('passou');
			$.ajax({
				type: 'POST',
				url: URL_PORTAL+"changePassword.php",
				data: $("#form-change-password").serialize(),
				dataType: "json",
				beforeSend: function(){
					// $("#municipio").html("<option>Carregando...</option>");
				},
				success: function(status) {
					// console.log(status);
					// return false;
					$("#antiga-senha").val(""); $("#nova-senha").val(""); $("#confirma-nova-senha").val("");
					abrirMessageBox(status.status, status.mensagem, status.result);
					$("#alterar-senha-modal-sm").modal('hide');
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					console.log("Erro de ajax, favor contate o administrador.");
					abrirMessageBox("Erro", "Erro de AJAX, favor contate o administrador.", "error");
				}
			});
		}else{
			$("#antiga-senha").val(""); $("#nova-senha").val(""); $("#confirma-nova-senha").val("");
			abrirMessageBox("Erro", "Senhas não conferem, favor digite novamente", "error");
		}
		return false;
	});

	$('.button-flyout').on('click', function(){
		$("#lista").addClass('nav-flyout-open');
	});
	$('#voltar').on('click',function(){
		$("#lista").removeClass('nav-flyout-open')
	});

});

function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      //$('.image-title').html(input.files[0].name);
	  
	  $('.image-title').html();
	  
	  var imagem_original = input.files[0].name;	  	
		imagem_atual = imagem_original.replace(".", "");
		var extensao = ".jpeg";
		imagem_atual = imagem_atual.concat(extensao);
		//console.log(imagem_atual);
	  
	  $('#imagem_atual').val(imagem_atual);	  
    };

    reader.readAsDataURL(input.files[0]);

  } else {
  }
}

function removeUpload() {
  // $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  // $('.file-upload-content').hide();
  // $('.image-upload-wrap').show();
  
  $('.file-upload-input').replaceWith($('.file-upload-input').attr('src',""));
  $('.file-upload-image').attr('src', "");
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
  
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});
