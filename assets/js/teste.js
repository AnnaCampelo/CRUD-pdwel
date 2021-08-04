/*$(document).ready(function(){
	var dataSet = [["teste","nameee"], ["oi", "hi"]];
	console.log(JSON.stringify(dataSet));
	$('#solicitacoes').DataTable({
		data: dataSet
	});

    $("#salvar-endereco").click(function(){
            //alert("ola");
            var cep = $('#cep').val();
            var estado = $('#estado').val();
            var cidade = $('#cidade').val();
            var bairro = $('#bairro').val();
            var logradouro = $('#logradouro').val();
            $.ajax({
                    type:'POST',
                    url:"../Localizacao/salvar_localizacao",
                    data: {
                    	"cep": cep,
                    	"estado": estado,
                    	"cidade": cidade,
                    	"bairro": bairro,
                    	"logradouro": logradouro
                    },
                    success: function(msg){
                    	alert(msg);
                    	$('#solicitacoes').DataTable().ajax.reload();
                    }
                });
            
        });
});  */