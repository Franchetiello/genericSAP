/**
 * @author Franco
 */
/* ----------------------------------------------------------------------------
		Titoli di Studio
---------------------------------------------------------------------------- */

/*
Inserisce il seguente blocco:

<div class="clearfix" >
	<!--<div class="blockTitle">-->
		<span id="spanValoreCorsoStudio[]" class="col-lg-11"><h4 class="bold">livello scolarizzazione</h4></span>
		<div class="col-lg-1">
			<button id="submit" name="submit" value="backward" class="btn red btn-xs pull-right"><i class="glyphicon glyphicon glyphicon-remove"></i></button>
			<button id="submit" name="submit" value="backward" class="btn green btn-xs pull-right"><i class="glyphicon glyphicon glyphicon-pencil"></i></button>
		</div>
	<!--</div>-->
	<div class="break"></div>
	<span id="spanEtichettaLivelloScolarizzazione[]" class="col-lg-2 col-lg-offset-1">livello</span>
	<span id="spanValoreLivelloScolarizzazione[]" class="col-lg-8 bold">livello scolarizzazione</span>
	<div class="break"></div>
	<span id="spanEtichettaDescrizioneCorsoStudio[]" class="col-lg-2 col-lg-offset-1">descrizione</span>
	<span id="spanValoreDescrizioneCorsoStudio[]" class="col-lg-8 bold">livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione</span>
	<div class="break"></div>
	<span id="spanEtichettaLuogoFrequenza[]" class="col-lg-2 col-lg-offset-1">frequantato a</span>
	<span id="spanValoreLuogoFrequenza[]" class="col-lg-3 bold">ROMA</span>
	<span id="spanEtichettaRiconosciutoInItalia[]" class="col-lg-1">&nbsp;</span>
	<span id="spanValoreRiconosciutoInItalia[]" class="col-lg-3 bold">riconosciuto in italia</span>
	<div class="break"></div>
	<span id="spanEtichettaAnnoConseguimento[]" class="col-lg-2 col-lg-offset-1">conseguito il</span>
	<span id="spanValoreAnnoConseguimento[]" class="col-lg-3 bold">2014</span>
	<span id="spanEtichettaVotoConseguito[]" class="col-lg-2">con voto</span>
	<span id="spanValoreVotoConseguito[]" class="col-lg-3 bold">110</span>
	<div class="break"></div>
	<span id="spanEtichettaUltimoAnnoFrequenza[]" class="col-lg-3 col-lg-offset-1">ultimo anno di frequenza</span>
	<span id="spanValoreUltimoAnnoFrequenza[]" class="col-lg-2 bold">2014</span>
	<span id="spanEtichettaAnnoInCorso[]" class="col-lg-3">anno di frequenza</span>
	<span id="spanValoreAnnoInCorso[]" class="col-lg-2 bold">2014</span>
	<div class="break"></div>
</div>
<div class="col-lg-12 separator">
	&nbsp;
</div>
*/
function AggiungiTitoloStudio(ParentID){
	var table = document.getElementById(ParentID);

  var rowCount = table.rows.length;
  var row = table.insertRow(rowCount);

  var cell1 = row.insertCell(0);
	
	// Elementi ripetuti
	var divBreak=document.createElement("div");
	divBreak.setAttribute("class","break");
	
	var divSeparator=document.createElement("div");
	divSeparator.setAttribute("class","col-lg-12 separator");
	
	var divContenitore=document.createElement("div");
	divContenitore.setAttribute("class", "clearfix");
	
	var spanValoreCorsoStudio=document.createElement("span");
	spanValoreCorsoStudio.setAttribute("id", "spanValoreCorsoStudio[]");
	spanValoreCorsoStudio.setAttribute("name", "spanValoreCorsoStudio[]");
	spanValoreCorsoStudio.setAttribute("class", "col-lg-11");
	
	var h4CorsoStudio=document.createElement("h4");
	h4CorsoStudio.setAttribute("class","bold");
	h4CorsoStudio.innerText= document.getElementById("slcCorsoStudio").options[document.getElementById("slcCorsoStudio").selectedIndex].text; 
	spanValoreCorsoStudio.appendChild(h4CorsoStudio);
	
	divContenitore.appendChild(spanValoreCorsoStudio);
	
	var divComandi=document.createElement("div");
	divComandi.setAttribute("class","col-lg-1");
	
	var btnRemove=document.createElement("button");
	btnRemove.setAttribute("id","submit");
	btnRemove.setAttribute("name","submit");
	btnRemove.setAttribute("class","btn red btn-xs pull-right");
	btnRemove.innerHTML="<i class=\"glyphicon glyphicon glyphicon-remove\"></i>";
	divComandi.appendChild(btnRemove);
	
	var btnEdit=document.createElement("button");
	btnEdit.setAttribute("id","submit");
	btnEdit.setAttribute("name","submit");
	btnEdit.setAttribute("class","btn green btn-xs pull-right");
	btnEdit.innerHTML="<i class=\"glyphicon glyphicon glyphicon-pencil\"></i>";
	divComandi.appendChild(btnEdit);
	
	divContenitore.appendChild(divComandi);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaLivelloScolarizzazione=document.createElement("span");
	spanEtichettaLivelloScolarizzazione.setAttribute("id", "spanEtichettaLivelloScolarizzazione[]");
	spanEtichettaLivelloScolarizzazione.setAttribute("name", "spanEtichettaLivelloScolarizzazione[]");
	spanEtichettaLivelloScolarizzazione.setAttribute("class", "col-lg-2 col-lg-offset-1");
	spanEtichettaLivelloScolarizzazione.innerText="livello";
	divContenitore.appendChild(spanEtichettaLivelloScolarizzazione);
	
	var spanValoreLivelloScolarizzazione=document.createElement("span");
	spanValoreLivelloScolarizzazione.setAttribute("id", "spanValoreLivelloScolarizzazione[]");
	spanValoreLivelloScolarizzazione.setAttribute("name", "spanValoreLivelloScolarizzazione[]");
	spanValoreLivelloScolarizzazione.setAttribute("class", "col-lg-8 bold");
	spanValoreLivelloScolarizzazione.innerText=document.getElementById("slcLivelloStudio").options[document.getElementById("slcLivelloStudio").selectedIndex].text;
	divContenitore.appendChild(spanValoreLivelloScolarizzazione);
	
	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaDescrizioneCorsoStudio=document.createElement("span");
	spanEtichettaDescrizioneCorsoStudio.setAttribute("id", "spanEtichettaDescrizioneCorsoStudio[]");
	spanEtichettaDescrizioneCorsoStudio.setAttribute("name", "spanEtichettaDescrizioneCorsoStudio[]");
	spanEtichettaDescrizioneCorsoStudio.setAttribute("class", "col-lg-2 col-lg-offset-1");
	spanEtichettaDescrizioneCorsoStudio.innerText="descrizione";
	divContenitore.appendChild(spanEtichettaDescrizioneCorsoStudio);
	
	var spanValoreDescrizioneCorsoStudio=document.createElement("span");
	spanValoreDescrizioneCorsoStudio.setAttribute("id", "spanValoreDescrizioneCorsoStudio[]");
	spanValoreDescrizioneCorsoStudio.setAttribute("name", "spanValoreDescrizioneCorsoStudio[]");
	spanValoreDescrizioneCorsoStudio.setAttribute("class", "col-lg-8 bold");
	spanValoreDescrizioneCorsoStudio.innerText=document.getElementById("txtDescrizioneCorso").value;
	divContenitore.appendChild(spanValoreDescrizioneCorsoStudio);
	
	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaLuogoFrequenza=document.createElement("span");
	spanEtichettaLuogoFrequenza.setAttribute("id", "spanEtichettaLuogoFrequenza[]");
	spanEtichettaLuogoFrequenza.setAttribute("name", "spanEtichettaLuogoFrequenza[]");
	spanEtichettaLuogoFrequenza.setAttribute("class", "col-lg-2 col-lg-offset-1");
	spanEtichettaLuogoFrequenza.innerText="frequantato a";
	divContenitore.appendChild(spanEtichettaLuogoFrequenza);
	
	var spanValoreLuogoFrequenza=document.createElement("span");
	spanValoreLuogoFrequenza.setAttribute("id", "spanValoreLuogoFrequenza[]");
	spanValoreLuogoFrequenza.setAttribute("name", "spanValoreLuogoFrequenza[]");
	spanValoreLuogoFrequenza.setAttribute("class", "col-lg-3 bold");
	spanValoreLuogoFrequenza.innerText=(document.getElementById("slcStatoStudio").options[document.getElementById("slcStatoStudio").selectedIndex].value == 118 ? document.getElementById("slcComuneStudio").options[document.getElementById("slcComuneStudio").selectedIndex].text : document.getElementById("slcStatoStudio").options[document.getElementById("slcStatoStudio").selectedIndex].text);
	divContenitore.appendChild(spanValoreLuogoFrequenza);
	
	var spanEtichettaRiconosciutoInItalia=document.createElement("span");
	spanEtichettaRiconosciutoInItalia.setAttribute("id", "spanEtichettaRiconosciutoInItalia[]");
	spanEtichettaRiconosciutoInItalia.setAttribute("name", "spanEtichettaRiconosciutoInItalia[]");
	spanEtichettaRiconosciutoInItalia.setAttribute("class", "col-lg-3");
	spanEtichettaRiconosciutoInItalia.innerHTML="riconosciuto in italia";
	divContenitore.appendChild(spanEtichettaRiconosciutoInItalia);
	
	var spanValoreRiconosciutoInItalia=document.createElement("span");
	spanValoreRiconosciutoInItalia.setAttribute("id", "spanValoreRiconosciutoInItalia[]");
	spanValoreRiconosciutoInItalia.setAttribute("name", "spanValoreRiconosciutoInItalia[]");
	spanValoreRiconosciutoInItalia.setAttribute("class", "col-lg-2 bold");
	
	
	spanValoreRiconosciutoInItalia.innerText=(document.getElementById("slcStatoStudio").options[document.getElementById("slcStatoStudio").selectedIndex].value == 118 ? "SI" : $('input[name="rdoRiconosciutoInItalia"]:checked').val());
	divContenitore.appendChild(spanValoreRiconosciutoInItalia);
	
	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaAnnoConseguimento=document.createElement("span");
	spanEtichettaAnnoConseguimento.setAttribute("id", "spanEtichettaAnnoConseguimento[]");
	spanEtichettaAnnoConseguimento.setAttribute("name", "spanEtichettaAnnoConseguimento[]");
	spanEtichettaAnnoConseguimento.setAttribute("class", "col-lg-2 col-lg-offset-1");
	spanEtichettaAnnoConseguimento.innerText="conseguito il";
	divContenitore.appendChild(spanEtichettaAnnoConseguimento);
	
	var spanValoreAnnoConseguimento=document.createElement("span");
	spanValoreAnnoConseguimento.setAttribute("id", "spanValoreAnnoConseguimento[]");
	spanValoreAnnoConseguimento.setAttribute("name", "spanValoreAnnoConseguimento[]");
	spanValoreAnnoConseguimento.setAttribute("class", "col-lg-3 bold");
	spanValoreAnnoConseguimento.innerText=document.getElementById("txtAnnoConseguimento").value;
	divContenitore.appendChild(spanValoreAnnoConseguimento);
	
	var spanEtichettaVotoConseguito=document.createElement("span");
	spanEtichettaVotoConseguito.setAttribute("id", "spanEtichettaVotoConseguito[]");
	spanEtichettaVotoConseguito.setAttribute("name", "spanEtichettaVotoConseguito[]");
	spanEtichettaVotoConseguito.setAttribute("class", "col-lg-2");
	spanEtichettaVotoConseguito.innerText="con voto";
	divContenitore.appendChild(spanEtichettaVotoConseguito);
	
	var spanValoreVotoConseguito=document.createElement("span");
	spanValoreVotoConseguito.setAttribute("id", "spanValoreVotoConseguito[]");
	spanValoreVotoConseguito.setAttribute("name", "spanValoreVotoConseguito[]");
	spanValoreVotoConseguito.setAttribute("class", "col-lg-3 bold");
	spanValoreVotoConseguito.innerText=document.getElementById("txtVotoConseguito").value;
	divContenitore.appendChild(spanValoreVotoConseguito);

	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaUltimoAnnoFrequenza=document.createElement("span");
	spanEtichettaUltimoAnnoFrequenza.setAttribute("id", "spanEtichettaUltimoAnnoFrequenza[]");
	spanEtichettaUltimoAnnoFrequenza.setAttribute("name", "spanEtichettaUltimoAnnoFrequenza[]");
	spanEtichettaUltimoAnnoFrequenza.setAttribute("class", "col-lg-3 col-lg-offset-1");
	spanEtichettaUltimoAnnoFrequenza.innerText="ultimo anno di frequenza";
	divContenitore.appendChild(spanEtichettaUltimoAnnoFrequenza);
	
	var spanValoreUltimoAnnoFrequenza=document.createElement("span");
	spanValoreUltimoAnnoFrequenza.setAttribute("id", "spanValoreUltimoAnnoFrequenza[]");
	spanValoreUltimoAnnoFrequenza.setAttribute("name", "spanValoreUltimoAnnoFrequenza[]");
	spanValoreUltimoAnnoFrequenza.setAttribute("class", "col-lg-2 bold");
	spanValoreUltimoAnnoFrequenza.innerText=document.getElementById("txtUltimoAnnoFrequentato").value;
	divContenitore.appendChild(spanValoreUltimoAnnoFrequenza);
	
	var spanEtichettaAnnoInCorso=document.createElement("span");
	spanEtichettaAnnoInCorso.setAttribute("id", "spanEtichettaAnnoInCorso[]");
	spanEtichettaAnnoInCorso.setAttribute("name", "spanEtichettaAnnoInCorso[]");
	spanEtichettaAnnoInCorso.setAttribute("class", "col-lg-3");
	spanEtichettaAnnoInCorso.innerText="anno di frequenza";
	divContenitore.appendChild(spanEtichettaAnnoInCorso);
	
	var spanValoreAnnoInCorso=document.createElement("span");
	spanValoreAnnoInCorso.setAttribute("id", "spanValoreAnnoInCorso[]");
	spanValoreAnnoInCorso.setAttribute("name", "spanValoreAnnoInCorso[]");
	spanValoreAnnoInCorso.setAttribute("class", "col-lg-2 bold");
	spanValoreAnnoInCorso.innerText=document.getElementById("txtAnnoFrequenzaInCorso").value;
	divContenitore.appendChild(spanValoreAnnoInCorso);

	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));
	
	cell1.appendChild(divContenitore);
	cell1.appendChild(divSeparator);
}

function ModificaTitoloStudio(ParentID, Index){
	// TODO: Implementare il metodo
}

function EliminaTitoloStudio(ParentID, Index){
	// TODO: Implementare il metodo
}

function CaricaTitoloStudio(ParentID, Index, Args){
	// TODO: Implementare il metodo
}


/* ----------------------------------------------------------------------------
		Titoli di Studio
---------------------------------------------------------------------------- */

/*
Inserisce il seguente blocco:

<div class="clearfix" >
	<!--<div class="blockTitle">-->
		<span id="spanValoreCorsoStudio[]" class="col-lg-11"><h4 class="bold">livello scolarizzazione</h4></span>
		<div class="col-lg-1">
			<button id="submit" name="submit" value="backward" class="btn red btn-xs pull-right"><i class="glyphicon glyphicon glyphicon-remove"></i></button>
			<button id="submit" name="submit" value="backward" class="btn green btn-xs pull-right"><i class="glyphicon glyphicon glyphicon-pencil"></i></button>
		</div>
	<!--</div>-->
	<div class="break"></div>
	<span id="spanEtichettaLivelloScolarizzazione[]" class="col-lg-2 col-lg-offset-1">livello</span>
	<span id="spanValoreLivelloScolarizzazione[]" class="col-lg-8 bold">livello scolarizzazione</span>
	<div class="break"></div>
	<span id="spanEtichettaDescrizioneCorsoStudio[]" class="col-lg-2 col-lg-offset-1">descrizione</span>
	<span id="spanValoreDescrizioneCorsoStudio[]" class="col-lg-8 bold">livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione livello scolarizzazione</span>
	<div class="break"></div>
	<span id="spanEtichettaLuogoFrequenza[]" class="col-lg-2 col-lg-offset-1">frequantato a</span>
	<span id="spanValoreLuogoFrequenza[]" class="col-lg-3 bold">ROMA</span>
	<span id="spanEtichettaRiconosciutoInItalia[]" class="col-lg-1">&nbsp;</span>
	<span id="spanValoreRiconosciutoInItalia[]" class="col-lg-3 bold">riconosciuto in italia</span>
	<div class="break"></div>
	<span id="spanEtichettaAnnoConseguimento[]" class="col-lg-2 col-lg-offset-1">conseguito il</span>
	<span id="spanValoreAnnoConseguimento[]" class="col-lg-3 bold">2014</span>
	<span id="spanEtichettaVotoConseguito[]" class="col-lg-2">con voto</span>
	<span id="spanValoreVotoConseguito[]" class="col-lg-3 bold">110</span>
	<div class="break"></div>
	<span id="spanEtichettaUltimoAnnoFrequenza[]" class="col-lg-3 col-lg-offset-1">ultimo anno di frequenza</span>
	<span id="spanValoreUltimoAnnoFrequenza[]" class="col-lg-2 bold">2014</span>
	<span id="spanEtichettaAnnoInCorso[]" class="col-lg-3">anno di frequenza</span>
	<span id="spanValoreAnnoInCorso[]" class="col-lg-2 bold">2014</span>
	<div class="break"></div>
</div>
<div class="col-lg-12 separator">
	&nbsp;
</div>
*/
function AggiungiFormazioneProfessionale(ParentID){
	var table = document.getElementById(ParentID);

  var rowCount = table.rows.length;
  var row = table.insertRow(rowCount);

  var cell1 = row.insertCell(0);
	
	// Elementi ripetuti
	var divBreak=document.createElement("div");
	divBreak.setAttribute("class","break");
	
	var divSeparator=document.createElement("div");
	divSeparator.setAttribute("class","col-lg-12 separator");
	
	var divContenitore=document.createElement("div");
	divContenitore.setAttribute("class", "clearfix");
	
	var spanValoreFormazioneProfessionale=document.createElement("span");
	spanValoreFormazioneProfessionale.setAttribute("id", "spanValoreFormazioneProfessionale[]");
	spanValoreFormazioneProfessionale.setAttribute("name", "spanValoreFormazioneProfessionale[]");
	spanValoreFormazioneProfessionale.setAttribute("class", "col-lg-11");
	
	var h4FormazioneProfessionale=document.createElement("h4");
	h4FormazioneProfessionale.setAttribute("class","bold");
	h4FormazioneProfessionale.innerText= document.getElementById("txtTitoloFormazione").value; 
	spanValoreFormazioneProfessionale.appendChild(h4FormazioneProfessionale);
	
	divContenitore.appendChild(spanValoreFormazioneProfessionale);
	
	var divComandi=document.createElement("div");
	divComandi.setAttribute("class","col-lg-1");
	
	var btnRemove=document.createElement("button");
	btnRemove.setAttribute("id","submit");
	btnRemove.setAttribute("name","submit");
	btnRemove.setAttribute("class","btn red btn-xs pull-right");
	btnRemove.innerHTML="<i class=\"glyphicon glyphicon glyphicon-remove\"></i>";
	divComandi.appendChild(btnRemove);
	
	var btnEdit=document.createElement("button");
	btnEdit.setAttribute("id","submit");
	btnEdit.setAttribute("name","submit");
	btnEdit.setAttribute("class","btn green btn-xs pull-right");
	btnEdit.innerHTML="<i class=\"glyphicon glyphicon glyphicon-pencil\"></i>";
	divComandi.appendChild(btnEdit);
	
	divContenitore.appendChild(divComandi);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaEnteErogatore=document.createElement("span");
	spanEtichettaEnteErogatore.setAttribute("id", "spanEtichettaEnteErogatore[]");
	spanEtichettaEnteErogatore.setAttribute("name", "spanEtichettaEnteErogatore[]");
	spanEtichettaEnteErogatore.setAttribute("class", "col-lg-2 col-lg-offset-1");
	spanEtichettaEnteErogatore.innerText="ente erogatore";
	divContenitore.appendChild(spanEtichettaEnteErogatore);
	
	var spanValoreEnteErogatore=document.createElement("span");
	spanValoreEnteErogatore.setAttribute("id", "spanValoreEnteErogatore[]");
	spanValoreEnteErogatore.setAttribute("name", "spanValoreEnteErogatore[]");
	spanValoreEnteErogatore.setAttribute("class", "col-lg-8 bold");
	spanValoreEnteErogatore.innerText=document.getElementById("txtEnteErogatore").value;
	divContenitore.appendChild(spanValoreEnteErogatore);
	
	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaSedeFormazione=document.createElement("span");
	spanEtichettaSedeFormazione.setAttribute("id", "spanEtichettaSedeFormazione[]");
	spanEtichettaSedeFormazione.setAttribute("name", "spanEtichettaSedeFormazione[]");
	spanEtichettaSedeFormazione.setAttribute("class", "col-lg-2 col-lg-offset-1");
	spanEtichettaSedeFormazione.innerText="sede";
	divContenitore.appendChild(spanEtichettaSedeFormazione);
	
	var spanValoreSedeFormazione=document.createElement("span");
	spanValoreSedeFormazione.setAttribute("id", "spanValoreSedeFormazione[]");
	spanValoreSedeFormazione.setAttribute("name", "spanValoreSedeFormazione[]");
	spanValoreSedeFormazione.setAttribute("class", "col-lg-8 bold");
	spanValoreSedeFormazione.innerText=document.getElementById("slcRegioneFormazione").options[document.getElementById("slcRegioneFormazione").selectedIndex].text;
	divContenitore.appendChild(spanValoreSedeFormazione);
	
	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaDurataFormazione=document.createElement("span");
	spanEtichettaDurataFormazione.setAttribute("id", "spanEtichettaDurataFormazione[]");
	spanEtichettaDurataFormazione.setAttribute("name", "spanEtichettaDurataFormazione[]");
	spanEtichettaDurataFormazione.setAttribute("class", "col-lg-2 col-lg-offset-1");
	spanEtichettaDurataFormazione.innerText="durata";
	divContenitore.appendChild(spanEtichettaDurataFormazione);
	
	var spanValoreDurataFormazione=document.createElement("span");
	spanValoreDurataFormazione.setAttribute("id", "spanValoreDurataFormazione[]");
	spanValoreDurataFormazione.setAttribute("name", "spanValoreDurataFormazione[]");
	spanValoreDurataFormazione.setAttribute("class", "col-lg-3 bold");
	spanValoreDurataFormazione.innerText=document.getElementById("txtDurataFormazione").value;
	divContenitore.appendChild(spanValoreDurataFormazione);
	
	var spanEtichettaMisuraDurata=document.createElement("span");
	spanEtichettaMisuraDurata.setAttribute("id", "spanEtichettaMisuraDurata[]");
	spanEtichettaMisuraDurata.setAttribute("name", "spanEtichettaMisuraDurata[]");
	spanEtichettaMisuraDurata.setAttribute("class", "col-lg-2");
	spanEtichettaMisuraDurata.innerHTML="espressa in";
	divContenitore.appendChild(spanEtichettaMisuraDurata);
	
	var spanValoreMisuraDurata=document.createElement("span");
	spanValoreMisuraDurata.setAttribute("id", "spanValoreMisuraDurata[]");
	spanValoreMisuraDurata.setAttribute("name", "spanValoreMisuraDurata[]");
	spanValoreMisuraDurata.setAttribute("class", "col-lg-3 bold");
	spanValoreMisuraDurata.innerText=document.getElementById("slcMisuraDurataFormazione").options[document.getElementById("slcMisuraDurataFormazione").selectedIndex].text;
	divContenitore.appendChild(spanValoreMisuraDurata);
	
	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaAttestatiFormazione=document.createElement("span");
	spanEtichettaAttestatiFormazione.setAttribute("id", "spanEtichettaAttestatiFormazione[]");
	spanEtichettaAttestatiFormazione.setAttribute("name", "spanEtichettaAttestatiFormazione[]");
	spanEtichettaAttestatiFormazione.setAttribute("class", "col-lg-2 col-lg-offset-1");
	spanEtichettaAttestatiFormazione.innerText="certificazioni e attestazioni";
	divContenitore.appendChild(spanEtichettaAttestatiFormazione);
	
	var spanValoreAttestatiFormazione=document.createElement("span");
	spanValoreAttestatiFormazione.setAttribute("id", "spanValoreAttestatiFormazione[]");
	spanValoreAttestatiFormazione.setAttribute("name", "spanValoreAttestatiFormazione[]");
	spanValoreAttestatiFormazione.setAttribute("class", "col-lg-8 bold");
	spanValoreAttestatiFormazione.innerText=document.getElementById("slcAttestazioni").options[document.getElementById("slcAttestazioni").selectedIndex].text;
	divContenitore.appendChild(spanValoreAttestatiFormazione);
	
	divContenitore.appendChild(divBreak.cloneNode(false));
	
	var spanEtichettaStageFormazione=document.createElement("span");
	spanEtichettaStageFormazione.setAttribute("id", "spanEtichettaStageFormazione[]");
	spanEtichettaStageFormazione.setAttribute("name", "spanEtichettaStageFormazione[]");
	spanEtichettaStageFormazione.setAttribute("class", "col-lg-2 col-lg-offset-1");
	spanEtichettaStageFormazione.innerText="stage";
	divContenitore.appendChild(spanEtichettaStageFormazione);
	
	var spanValoreStageFormazione=document.createElement("span");
	spanValoreStageFormazione.setAttribute("id", "spanValoreStageFormazione[]");
	spanValoreStageFormazione.setAttribute("name", "spanValoreStageFormazione[]");
	spanValoreStageFormazione.setAttribute("class", "col-lg-2 bold");
	spanValoreStageFormazione.innerText=(document.getElementById("cbxStage").checked ? "SI" : "NO");
	divContenitore.appendChild(spanValoreStageFormazione);

	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));

	var spanEtichettaAziendaStage=document.createElement("span");
	spanEtichettaAziendaStage.setAttribute("id", "spanEtichettaAziendaStage[]");
	spanEtichettaAziendaStage.setAttribute("name", "spanEtichettaAziendaStage[]");
	spanEtichettaAziendaStage.setAttribute("class", "col-lg-3 col-lg-offset-1");
	spanEtichettaAziendaStage.innerText="azienda dello stage";
	divContenitore.appendChild(spanEtichettaAziendaStage);
	
	var spanValoreAziendaStage=document.createElement("span");
	spanValoreAziendaStage.setAttribute("id", "spanValoreAziendaStage[]");
	spanValoreAziendaStage.setAttribute("name", "spanValoreAziendaStage[]");
	spanValoreAziendaStage.setAttribute("class", "col-lg-8 bold");
	spanValoreAziendaStage.innerText=document.getElementById("txtAziendaStage").value;
	divContenitore.appendChild(spanValoreAziendaStage);
	
	//divContenitore.appendChild(divBreak);
	divContenitore.appendChild(divBreak.cloneNode(false));
	
	cell1.appendChild(divContenitore);
	cell1.appendChild(divSeparator);
}

function ModificaFormazioneProfessionale(ParentID, Index){
	// TODO: Implementare il metodo
}

function EliminaFormazioneProfessionale(ParentID, Index){
	// TODO: Implementare il metodo
}

function CaricaFormazione(ParentID, Index, Args){
	// TODO: Implementare il metodo
}
