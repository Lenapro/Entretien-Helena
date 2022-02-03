<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Post;

class CompagniesAeriennesController extends AbstractController
{
    #[Route('/compagnies-aeriennes', name: 'compagnies_aeriennes')]
  
   
    public function airfrance()
    {
        $airfrance = array(
            "Fil_Ariane"=>"Air France",
            "Bloc_prix"=>array( 
                array("Depart"=>"Bari", "Arriver"=>"Roissy", "Aller"=>"05/08/21", "Retour"=>"05/08/21","Prix"=>"30 €", "Date_de_reservation"=>"04/08/21"),
                array("Depart"=>"Roissy ", "Arriver"=>"Casablanca", "Aller"=>"10/08/21", "Retour"=>"09/09/21","Prix"=>"291 €", "Date_de_reservation"=>"03/08/21"),
                array("Depart"=>"Roissy ", "Arriver"=>"Corfou", "Aller"=>"12/08/21", "Retour"=>"20/08/21","Prix"=>"108 €", "Date_de_reservation"=>"03/08/21"),
                array("Depart"=>"Roissy", "Arriver"=>"Venise", "Aller"=>"10/08/21", "Retour"=>"24/08/21","Prix"=>"261 €", "Date_de_reservation"=>"03/08/21"),
                array("Depart"=>"Orly ", "Arriver"=>"Toulouse", "Aller"=>"17/10/21", "Retour"=>"24/10/21","Prix"=>"163 € ", "Date_de_reservation"=>"03/08/21"),
                array("Depart"=>"Toulouse", "Arriver"=>" Athenes", "Aller"=>"06/08/21", "Retour"=>"16/08/21","Prix"=>"364 €", "Date_de_reservation"=>"03/08/21"),
                array("Depart"=>"Nantes", "Arriver"=>"Dubrovnik", "Aller"=>"06/08/21", "Retour"=>"14/08/21","Prix"=>"205 €", "Date_de_reservation"=>"02/08/21"),
                array("Depart"=>"Roissy", "Arriver"=>"Casablanca", "Aller"=>"14/08/21", "Retour"=>"01/09/21","Prix"=>"562 €", "Date_de_reservation"=>"02/08/21"),
                array("Depart"=>"Santorin", "Arriver"=>"Roissy", "Aller"=>"29/09/21", "Retour"=>"29/09/21","Prix"=>"211 €", "Date_de_reservation"=>"02/08/21"),
            ),

            
            "Decouverte_Compagnie"=>array("first_paragraph"=>"Air France est l'une des plus grandes compagnies aériennes d'Europe. Avec KLM, elle forme le premier groupe mondial en termes de chiffre d'affaires. La compagnie assure des vols vers près de 200 destinations à travers le monde au départ des aéroports de Paris Roissy Charles de Gaulle. Air France est membre de l'alliance SkyTeam.",
            "second_paragraph"=>" La compagnie Air France a été fondée en 1933. A l'époque, elle dessert déjà un réseau de plus de 35 000 km. En 1946 c'est l'inauguration du premier vol transatlantique avec l'ouverture de la ligne Paris-New York.
                                Dans les années 1960, c'est l'apparition du moteur à réaction : Air France modernise sa flotte en conséquence avec l'acquisition d'une Caravelle et d'un Boeing 707. A cette époque, le réseau de la compagnie s'est étendu à 350 000 km : c'est le plus important réseau aérien du monde.
                                En 1974, Air France s'installe dans le nouvel aéroport de Roissy-Charles de Gaulle. En 1976, le Concorde effectue son premier vol sur la liaison Paris-Dakar-Rio de Janeiro. Dans les années 1990, Air France fusionne avec la compagnie française UTA puis avec Air Inter, et devient ainsi l'un des premiers groupes aériens du monde. Le rapprochement avec KLM en 2003 donne naissance au premier groupe européen de transport aérien et à l'un des premiers groupes mondiaux en termes de chiffre d'affaires.
                                Dix ans plus tard, en 2013, trois compagnies régionales du groupe Air France se sont unies pour donner naissance à la compagnie. En 2016 elle est classée troisième compagnie aérienne par Air Help.",
            
            "third_paragraph"=>"A bord, Air France propose différents niveaux de confort. En Première, vous bénéficiez du salon La Première, d'un passage au contrôle de sûreté simplifié, d'un personnel qui vous accompagne tout au long de votre voyage, y compris à votre arrivée ou lors d'une correspondance, d'un confort à bord tout particulier avec par exemple des sièges transformables en lit ou des repas à la carte. La classe Business vous permet de profiter du Skypriority, de l'accès aux salons Business ou encore d'une cabine haut de gamme. La classe Premium Economy vous permet de profiter du skypriority, de 2 bagages de 23 kg maximum chacun et à bord d'un siège confortable et ajustable, entre autres. Enfin, en classe Economy, vous bénéficiez d'un bagage en soute inclus, d'un programme de divertissement ou encore d'un fauteuil réglable.",
            
            "fourth_paragraph"=>"Pour récompenser ses plus fidèles voyageurs, la compagnie propose aux passagers le programme de fidélité « Flying blue », permettant de cumuler des miles. Quatre niveaux d'adhésion existent : Ivory, Silver, Blue Gold et Blue Platinum, chacun possédant ses propres avantages comme l'embarquement prioritaire ou l'accès aux salons. Enfin, pour les entreprises, les cartes Corporates permettent par exemple d'obtenir des points, des réductions sur les vols, ou de faciliter le paiement et la gestion des voyages.",
            ),
            "Vols"=>array("title"=>"Vols Lyon", "ville_depart"=>"Rennes (France)", "Depart"=>"11 fev 2022", "Retour"=>"20 fev 2022", "Prix"=>"120 €"),
            "fiche_identite" => array("Code_IATA"=>"AF", "Code_OACI"=>"AFR", "Compagnie"=>"Air France", "Denomination"=>"Air France", "Pays_Origine"=>"France", "Adresse"=>"45 rue Paris 95747 Roissy Ch. De Gaulle Cedex", "Tel"=>"01 41 56 78 00", "Fax"=>"01 41 56 70 29", "Site"=>"Air France", ),
            

        );
        
        $rep = new JsonResponse($airfrance);
       
       $request = $this->render('compagnies_aeriennes/index.html.twig', ['data' => $rep,
                                                                        'blog' => $airfrance]); 
       return new Response($request);
    }
    public function easyjet()
    {
        $easyjet = array(
            "Fil_Ariane"=>"EasyJet",
            "Bloc_prix"=>array(
                array("Depart"=>"Rennes", "Arriver"=>"Toulouse", "Aller"=>"07/08/21", "Retour"=>" 14/08/21","Prix"=>"178 €  €", "Date_de_reservation"=>"03/08/21" ),
                array("Depart"=>"Orly  ", "Arriver"=>"Milan", "Aller"=>" 08/08/21", "Retour"=>"08/08/21","Prix"=>"108 € €", "Date_de_reservation"=>" 30/07/21"),
                array("Depart"=>"Lyon ", "Arriver"=>"Venise", "Aller"=>"26/08/21", "Retour"=>"26/08/21","Prix"=>"128 €", "Date_de_reservation"=>"27/07/21"),
                array("Depart"=>"Roissy", "Arriver"=>"Marrakech", "Aller"=>"10/08/21", "Retour"=>"28/12/21","Prix"=>"153  €", "Date_de_reservation"=>"24/07/21"),
                array("Depart"=>"Nice ", "Arriver"=>"La Rochelle", "Aller"=>"01/08/21", "Retour"=>"13/08/21","Prix"=>"305 € ", "Date_de_reservation"=>"22/07/21"),
                array("Depart"=>"Nice", "Arriver"=>" La Rochelle", "Aller"=>"01/08/21", "Retour"=>"01/08/21","Prix"=>"232 €", "Date_de_reservation"=>"22/07/21"),
                array("Depart"=>"Nantes", "Arriver"=>"Heraklion", "Aller"=>"14/08/21", "Retour"=>"28/08/21","Prix"=>"387€", "Date_de_reservation"=>" 18/07/21"),
                array("Depart"=>"Rennes", "Arriver"=>"Lyon", "Aller"=>"25/07/21", "Retour"=>"30/07/21","Prix"=>"141 €", "Date_de_reservation"=>"15/07/21"),
                array("Depart"=>"Porto", "Arriver"=>"Roissy", "Aller"=>"29/07/21", "Retour"=>"29/07/21","Prix"=>"56 €", "Date_de_reservation"=>"14/07/21"),
            ),
            
            "Decouverte_Compagnie"=>array("first_paragraph"=>"EasyJet est une compagnie aérienne britannique spécialisée dans les vols low-cost. Basée à l'aéroport de Londres-Luton, elle dessert plus de 150 destinations dans 30 pays, principalement en Europe mais également au Maroc, en Égypte ou encore en Turquie.",
            "second_paragraph"=>" La compagnie britannique EasyJet a été fondée en mars 1995 par un jeune entrepreneur de 28 ans, Stelios Haji-Ioannou, avec l'ambition de proposer des vols low-cost à travers toute l'Europe. En 1996, c'est l'ouverture des premières liaisons internationales, et, un an plus tard, la compagnie crée son site Internet de vente en ligne.
            En 1998, EasyJet rachète 40 % des parts de la compagnie suisse TEA Basel, qui, rebaptisée EasyJet Switzerland, devient sa première filiale. Deux ans plus tard, EasyJet fait son entrée à la bourse de Londres. Au fil des années, le succès de la compagnie orange ne se dément pas : les destinations se multiplient et la flotte s'agrandit.
            En 2002, elle passe une commande colossale de plus de 200 Airbus : les premiers entreront en service en 2003. La même année, EasyJet rachète la compagnie low-cost Go, filiale de British Airways, devenant ainsi la plus importante compagnie à bas coût d'Europe. En 2005, le succès continue : EasyJet transporte son 100 millionième passager et remporte en 2014 le prix de la meilleure compagnie low-cost aux Business Traveller Awards. Aujourd'hui, la compagnie britannique est sans conteste un acteur majeur du marché aérien low-cost européen, avec plus de 150 destinations desservies.
            En 2018, EasyJet assure des liaisons de Biarritz, Montpellier et Nice vers Berlin-Tegel.
            
            >> En savoir plus sur la compagnie EasyJet",
            "third_paragraph"=>"Pour ne pas ajouter de frais au montant des billets, la compagnie ne dispose pas de services particuliers à bord. En revanche, les voyageurs qui désirent des rafraîchissants ou des en-cas durant le trajet, ont la possibilité de les acheter dans la boutique de la compagnie. Cette dernière propose une large sélection de boissons, mais aussi des sandwichs et des confiseries. La boutique dispose par ailleurs de parfums et de cosmétiques et cadeaux.",
            
            "fourth_paragraph"=>"EasyJet a lancé le programme Flight Club pour ses voyageurs les plus fidèles. Pour en bénéficier le client doit justifier d'un des critères suivants : avoir réservé et effectué 20 vols ou plus au cours des 12 derniers mois, avoir réservé et effectué 10 vols ou plus et dépensé 1 500 £ ou l'équivalent dans une autre devise au cours des 12 derniers mois, ou avoir réservé et effectué 10 vols ou plus en moyenne au cours des 10 dernières années, avec au moins un vol chaque année. Plusieurs avantages s'offrent aux bénéficiaires tels que la possibilité de modifier des vols sans frais ou encore d'avoir accès aux avant-premières et offres spéciales.",
            ),
            "Vols"=>array("title"=>"Vols Londres", "ville_depart"=>"Milan (Italie)", "Depart"=>"25 févr. 2022", "Retour"=>"28 févr. 2022", "Prix"=>"40 €"),
            "fiche_identite" => array("Code_IATA"=>"U2", "Code_OACI"=>"EZY", "Compagnie"=>"EasyJet", "Denomination"=>"EasyJet", "Pays_Origine"=>" Royaume-Uni", "Adresse"=>" Hangar 89, London Luton Airport, Luton, Bedfordshire LU2 9PF", "Tel"=>"(+44) 843 104 5000", "Fax"=>"easyjet@mailnj.custhelp.com", "Site"=>"EasyJet", ),
            

        );
        
        $response = new JsonResponse($easyjet);
       
        $req = $this->render('compagnies_aeriennes/index.html.twig', ['data' => $response,
                                                                        'blog' => $easyjet]); 
        return new Response($req);
    }
    
}