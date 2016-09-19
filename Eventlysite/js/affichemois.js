function affichemois() 
{
	var date = new Date();
	var moi = date.getMonth(); //Récupérer la date Mois
	var annee = date.getFullYear(); //Récupérer la date Annee avec 4 chiffres
	mois = new Array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
	var moisAn = mois[moi] + '' + annee; 
	document.write(moisAn);
}