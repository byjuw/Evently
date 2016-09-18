function calendrier()
{
    var date = new Date();
    var jour = date.getDate(); //Récupérer la date Jour
    var moi = date.getMonth(); //Récupérer la date Mois
    var annee = date.getFullYear(); //Récupérer la date Annee avec 4 chiffres
    
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
    document.write('<div id="calendrier"><div id="titreCalendrier"><h1><span class="glyphicon glyphicon-arrow-left navMois" aria-hidden="true"></span>'+ moisAn +'<span class="glyphicon glyphicon-arrow-right navMois" aria-hidden="true"></span></h1></div>');
    // document.write('<div class="row jourSemaine semaine"><div>Lundi</div><div>Mardi</div><div>Mercredi</div><div>Jeudi</div><div>Vendredi</div><div>Samedi</div><div>Dimanche</div></div>');
    sem = 0;
    for(i=2;i<=cpt_j;i++)
    {
        document.write('<div class="moisPrecedent"> </div>');
        // + jours_semaine[(i-2)%7] + (jours_dans_moi[moi-1]-cpt_j+i)+
        sem++;
    }
    for(i=1;i<=nbJourMois;i++)
    {
        if(sem==0)
        {
            document.write('<div class="row semaine">');
        }
        if(jour==i)
        {
            document.write('<div class="jour"><span id="aujour">'+ jours_semaine[(cpt_j-1)%7] + ' ' + i +'</span><div class="journee"></div></div>');
        }
        else
        {
            document.write('<div class="jour"><span>'+ jours_semaine[(cpt_j-1)%7] + ' ' + i +'</span><div class="journee"></div></div>');
        }
        sem++;
        if(sem==7)
        {
            document.write('</div>');
            sem=0;
        }
    cpt_j++;
    }
    for(i=1;sem!=0;i++)
    {
        // document.write('<div class="moisSuivant">'+ jours_semaine[(i+4)%7] + i+'</div>');
        sem++;
        if(sem==7)
        {
            document.write('</div>');
            sem=0;
        }
    }
    return true;
}