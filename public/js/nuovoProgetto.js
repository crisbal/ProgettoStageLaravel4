$(document).ready(function () {
    (function ($) {

    	$('.filterable').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();
        });

        $('#filterStudenti').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');

            var trBuone = $('.searchable tr input:not(:checked)').parent().parent();

            trBuone.hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();
        });

    }(jQuery));
});
	
$(".scegliAzienda").click(function(){
	idAzienda = $(this).closest("tr").attr("azienda");

	$.get( "api/azienda/" + idAzienda, function( azienda ) {
		$("#nomeAzienda").html(azienda.denominazione);
		$("#sedeLegaleAzienda").html(azienda.sedeLegale + ", " + azienda.citta);
		$("#modaleAzienda").modal('show');

	});
});

$("#confermaAzienda").click(function(){
	$("#modaleAzienda").modal('hide');
	$("#step1").hide();
	$("#step2").show();
	$("#idAzienda").val(idAzienda);
});

$("#annullaAzienda").click(function(){
	$("#modaleAzienda").modal('hide');
});


$("#confermaStudenti").click(function(){
	$("#step2").hide();
	$("#step3").show();

	idStudenti = [];

	inputs = $("#tabellaStudenti tbody tr").find("input:checked");
	$("#idStudenti").val("");
	for(i=0;i<inputs.length;i++){
		riga = $(inputs[i]).parent().parent();
		idStudenti.push(riga.attr("studente"));
	}
});

$(".scegliTutor").click(function(){
	idTutor = $(this).closest("tr").attr("tutor");

	$.get( "api/tutor/" + idTutor, function( tutor ) {
		$("#nomeCognomeTutor").html(tutor.cognome + " " + tutor.nome);
		$("#modaleTutor").modal('show');
	});
});

$("#confermaTutor").click(function(){
	$("#modaleTutor").modal('hide');
	$("#step3").hide();
	$("#step4").show();
	$("#idTutor").val(idTutor);
});

$("#annullaTutor").click(function(){
	$("#modaleTutor").modal('hide');
});


$("#confermaPeriodi").click(function(){
	$("#step4").hide();
	$("#step5").show();

	inputs = $("#tabellaPeriodi tbody tr").find("input:checked");
	
	dateInizio = [];
	dateFine = [];

	for(i=0;i<inputs.length;i++){
		riga = $(inputs[i]).parent().parent();
		dateInizio.push($(riga).find("input.dataInizio").val());
		dateFine.push($(riga).find("input.dataFine").val());
	}
});

$("#aggiungiPeriodi").click(function(){
	var table = $('#tabellaPeriodi tbody');
	table.append("<tr> \
					<td><input class='dataInizio' placeholder='aaaa/mm/gg' /></td> \
					<td><input class='dataFine' placeholder='aaaa/mm/gg' /></td> \
					<td><input type='checkbox'></td> \
				</tr>")
});

$("#assegnaPeriodi").click(function(){
	$("#step5").hide();
	$("#stepConferma").show();

	var tableRef = document.getElementById('listaStudenti').getElementsByTagName('tbody')[0];
});


$("#btnCreaStage").click(function() {
	data = {};
	data.azienda = idAzienda;
	data.tutor = idTutor;
	data.studenti = [];
	console.log(data);
});


$("#vaiIndietro1").click(function(){
	$("#step2").hide();
	$("#step1").show();
});
$("#vaiIndietro2").click(function(){
	$("#step3").hide();
	$("#step2").show();
});