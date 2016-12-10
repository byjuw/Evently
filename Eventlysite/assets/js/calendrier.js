var index = 0;

function calendrier(index) // index = paramètre pour la navigation de mois en mois dans le calendrier.
{
    var xhttp = new XMLHttpRequest(); // Ajax
    xhttp.onreadystatechange = function() { // Ajax
        if (this.readyState == 4 && this.status == 200) {
            var event=this.responseText; // Récupération str Ajax

            var strEvent = event.split("|"); // Formatage, on sépare les différents events

            var tabNom = [];  // Tab contenant éléments des events
            var tabAn = []; // Tab contenant éléments des events
            var tabMois = []; // Tab contenant éléments des events
            var tabJour = []; // Tab contenant éléments des events
            var tabHeure = []; // Tab contenant éléments des events
            var tabDescription = []; // Tab contenant éléments des events

            if(event.length > 0) // Si event existe
                for (i in strEvent){ // Boucle on traite chaque event
                    var strSplit = strEvent[i].split(";"); // Formatage, on sépare les différents éléments de chaque event
                    for (c = 0; c <= strSplit.length; c++){ // Pour chaque élément d'event
                        switch(c){
                            case 0:
                                tabNom.push(strSplit[c]); // On push dans les tableaux 
                                break;
                            case 1:
                                var dateSplit = strSplit[c].split("-"); // On découpe la date pour récupérer An - mois - jour
                                tabAn.push(dateSplit[0]); // On push dans les tableaux 
                                tabMois.push(dateSplit[1]); // On push dans les tableaux 
                                tabJour.push(dateSplit[2]); // On push dans les tableaux 
                                break;
                            case 2:
                                tabHeure.push(strSplit[c]); // On push dans les tableaux 
                                break;
                            case 3:
                                tabDescription.push(strSplit[c]); // On push dans les tableaux 
                                break;
                        }
                    }
                }

            var date = new Date();
            var jour = date.getDate(); //Récupérer la date Jour
            var moi = date.getMonth(); //Récupérer la date Mois
            var annee = date.getFullYear(); //Récupérer la date Annee avec 4 chiffres
            var bodyCalendrier = "";

            if (index != 0) { // Permet la navigation de mois en mois dans le calendrier.
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
                if(i==2)
                {
                    bodyCalendrier += ('<div class="row semaine">');
                }
                bodyCalendrier += ('<div class="moisPrecedent"></div>');
                sem++;
            }
            for(i=1;i<=nbJourMois;i++)
            {
                if(sem==0)
                {
                    bodyCalendrier += ('<div class="row semaine">');
                }
                if(jour==i && index==0)
                {
                    bodyCalendrier += ('<div class="jour"><span id="aujour">'+ jours_semaine[(cpt_j-1)%7] + ' ' + i +'<a href="#" class="ajouterEvenement" data-toggle="modal" data-target="#myModal" value="' + i + '">+</a></span><div class="journee">');
                    
                    for(j = 0; j < tabNom.length; j++)
                        if(tabJour[j] == i && tabMois[j] == (moi+1) && tabAn[j] == annee) 
                        {
                            bodyCalendrier += ('<strong>&nbsp;&nbsp;'+ tabNom[j] + ': </strong>' + tabHeure[j]);
                        }

                    bodyCalendrier += ('</div></div>');
                }
                else
                {
                    bodyCalendrier += ('<div class="jour"><span>'+ jours_semaine[(cpt_j-1)%7] + ' ' + i +'<a href="#" class="ajouterEvenement" data-toggle="modal" data-target="#myModal">+</a></span><div class="journee">');
                    
                    for(j = 0; j < tabNom.length; j++)
                        if(tabJour[j] == i && tabMois[j] == (moi+1) && tabAn[j] == annee) 
                        {
                            bodyCalendrier += ('<strong>&nbsp;&nbsp;'+ tabNom[j] + ': </strong>' + tabHeure[j]);
                        }

                    bodyCalendrier += ('</div></div>');

                }
                sem++;  
                if(sem==7)
                {
                    bodyCalendrier += ('</div>');
                    sem=0;
                }
            cpt_j++;
            }
            for(i=1;sem!=0;i++)
            {
                sem++;
                if(sem==7)
                {
                    bodyCalendrier += ('</div>');
                    sem=0;
                }
            }
            var divTitre = document.getElementById('moisAn');
            divTitre.innerHTML = moisAn;

            var divBody = document.getElementById('bodyCalendrier');
            divBody.innerHTML = bodyCalendrier;

        }
    };
    xhttp.open("GET", "http://localhost/evently/eventlysite/home/ajax/", true); // Aajx
    xhttp.send(); // Aajx
    
    return true;
}