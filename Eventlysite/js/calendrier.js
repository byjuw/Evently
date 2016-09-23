var index = 0;

function calendrier(index)
{

    var date = new Date();
    var jour = date.getDate(); //Récupérer la date Jour
    var moi = date.getMonth(); //Récupérer la date Mois
    var annee = date.getFullYear(); //Récupérer la date Annee avec 4 chiffres
    var bodyCalendrier = "";

    if (index != 0) {
        var changeMois = moi + index;
        var date = new Date(annee, changeMois);
        var moi = date.getMonth(); //Récupérer la date Mois
        var annee = date.getFullYear(); //Récupérer la date Annee avec 4 chiffres
    }
    
    mois = new Array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); //Tab contenant les mois
    jours_dans_moi = new Array(31,28,31,30,31,30,31,31,30,31,30,31); // Tab contenant le nombre de jour
    jours_semaine = new Array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'); //Tab contenant le nom des jours de la semaine
    if((annee%4 == 0 && annee%100 != 0) || (annee%400 == 0)) //Test si annee bissextile
    {
        jours_dans_moi[1]=29; // Si annee bissextile vrai, 2em mois a 29 jours
    }
    var nbJourMois = jours_dans_moi[moi]; // var contenant le nb de jour du mois en cours
    var moisAn = mois[moi]+' '+annee; //var contenant la date d'aujoud'hui entière
    cpt_j = date;
    cpt_j.setDate(1);
    cpt_j = cpt_j.getDay();
    if(cpt_j==0)
    {
        cpt_j=7; //(cpt_j-1)%7 donne -1 quand cpt_1==0 donc on lui rajoute 7 pour remplacer -1 par 6 pour afficher les dimanches
    }
    
    sem = 0;
    for(i=2;i<=cpt_j;i++)
    {
        bodyCalendrier = bodyCalendrier + ('<div class="moisPrecedent"> </div>');
        sem++;
    }
    for(i=1;i<=nbJourMois;i++)
    {
        if(sem==0)
        {
            bodyCalendrier = bodyCalendrier + ('<div class="row semaine">');
        }
        if(jour==i && index==0)
        {
            bodyCalendrier = bodyCalendrier + ('<div class="jour"><span id="aujour">'+ jours_semaine[(cpt_j-1)%7] + ' ' + i +'<a href="#" class="ajouterEvenement" data-toggle="modal" data-target="#myModal">+</a></span><div class="journee"></div></div>');
        }
        else
        {
            bodyCalendrier = bodyCalendrier + ('<div class="jour"><span>'+ jours_semaine[(cpt_j-1)%7] + ' ' + i +'<a href="#" class="ajouterEvenement" data-toggle="modal" data-target="#myModal">+</a></span><div class="journee"></div></div>');
        }
        sem++;  
        if(sem==7)
        {
            bodyCalendrier = bodyCalendrier + ('</div>');
            sem=0;
        }
    cpt_j++;
    }
    for(i=1;sem!=0;i++)
    {
        sem++;
        if(sem==7)
        {
            bodyCalendrier = bodyCalendrier + ('</div>');
            sem=0;
        }
    }
    var divTitre = document.getElementById('moisAn');
    divTitre.innerHTML = moisAn;

    var divBody = document.getElementById('bodyCalendrier');
    divBody.innerHTML = bodyCalendrier;
    return true;
}