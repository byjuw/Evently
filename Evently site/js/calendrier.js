function calendrier()
{
    var date = new Date();
    var jour = date.getDate();
    var moi = date.getMonth();
    var annee = date.getFullYear();
    
    mois = new Array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    jours_dans_moi = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
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
    document.write('<table id="calendrier"><tbody id="cal_body"><tr><th colspan="7">'+date_aujourdui+'</th></tr>');
    document.write('<tr class="jourSemaine"><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr><tr>');
    sem = 0;
    for(i=2;i<=dep_j;i++)
    {
        document.write('<td class="moisPrecedent">'+(jours_dans_moi[moi-1]-dep_j+i)+'</td>');
        sem++;
    }
    for(i=1;i<=total;i++)
    {
        if(sem==0)
        {
            document.write('<tr>');
        }
        if(jour==i)
        {
            document.write('<td id="aujour">'+i+'</td>');
        }
        else
        {
            document.write('<td>'+i+'</td>');
        }
        sem++;
        if(sem==7)
        {
            document.write('</tr>');
            sem=0;
        }
    }
    for(i=1;sem!=0;i++)
    {
        document.write('<td class="moisPrecedent">'+i+'</td>');
        sem++;
        if(sem==7)
        {
            document.write('</tr>');
            sem=0;
        }
    }
    document.write('</tbody></table>');
    return true;
}