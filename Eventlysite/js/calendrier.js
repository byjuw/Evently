function calendrier()
{
    var date = new Date();
    var jour = date.getDate();
    var moi = date.getMonth();
    var annee = date.getFullYear();
    
    mois = new Array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    jours_dans_moi = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
    jours_semaine = new Array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    if(annee%4 == 0 && annee!=1900)
    {
        jours_dans_moi[1]=29;
    }
    total = jours_dans_moi[moi];
    var date_aujourdui = jour+' '+mois[moi]+' '+annee;
    dep_j = date;
    dep_j.setDate(1);
    if(dep_j.getDate()==2)
    {
        dep_j=setDate(0);
    }
    dep_j = dep_j.getDay();
    document.write('<div id="calendrier"><div><div class="row">'+date_aujourdui+'</div></div><div id="firstSemaine" class="row semaine">');
    // document.write('<div class="row jourSemaine semaine"><div>Lundi</div><div>Mardi</div><div>Mercredi</div><div>Jeudi</div><div>Vendredi</div><div>Samedi</div><div>Dimanche</div></div>');
    sem = 0;
    for(i=2;i<=dep_j;i++)
    {
        document.write('<div class="moisPrecedent"></div>');
        // + jours_semaine[(i-2)%7] + (jours_dans_moi[moi-1]-dep_j+i)+
        sem++;
    }
    for(i=1;i<=total;i++)
    {
        if(sem==0)
        {
            document.write('<div class="row semaine">');
        }
        if(jour==i)
        {
            document.write('<div class="jour"><span id="aujour">'+ jours_semaine[(i+2)%7] + ' ' + i +'</span><div class="journee"></div></div>');
        }
        else
        {
            document.write('<div class="jour"><span>'+ jours_semaine[(i+2)%7] + ' ' + i +'</span><div class="journee"></div></div>');
        }
        sem++;
        if(sem==7)
        {
            document.write('</div>');
            sem=0;
        }
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