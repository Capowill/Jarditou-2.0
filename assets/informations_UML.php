<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>UML</title>
</head>
<body>
    <div class="container">
        <h1>Concevoir la solution à partir des digrammes UML.</h1>

        <h2>Les diagrammes de cas :</h2>
            <ul>
                <li>Permettent de visualiser l'interaction du système avec le monde extérieur</li>
                <li>Permettent de modéliser très tôt les processus métiers et l'organisation de l'entreprise.</li>
            </ul>

        <h2>A partir du cachier des charges il faut :</h2>
            <ul>
            <li>Identifier les acteurs de notre système et uniquement eux</li>
            <li>Identifier les évènements qui demandent une action de notre système</li>
            <li>Identifier les cas d’utilisations</li>
            </ul>

        <h2>Les composantes d'un diagramme de cas :</h2>

        <ul>

            <li>
                <h4>Les acteurs :</h4> 
                <p>représente une entité qui intéragit avec le système et est représenté par un "stick man"</p>
                <p>4 types d'acteurs : </p>
                <ul>
                    <li>Acteurs principaux : personnes qui utilisent les fonctions du système.</li>
                    <li>Acteurs secondaires : personnes qui effectuent des tâches administratives ou du maintenance.</li>
                    <li>Matériels extérieurs : par exemple un distributeur de billet.</li>
                    <li>Les autres systèmes : par exemple le réseau de cartes bancaires.</li>
                </ul>
                <label for="">Ensemble des questions à se poser pour trouver les acteurs :</label>
                <select name="" id="">
                    <option value="">Qui est intéressé par le besoin?</option>
                    <option value="">Dans l’entreprise, où le système se trouve-t-il utilisé?</option>
                    <option value="">Qui entre l’information, qui l’utilise, qui la détruit?</option>
                    <option value="">Qui fait le support et la maintenance du système étudié?</option>
                    <option value="">Le système utilise-t-il une ressource extérieure?</option>
                    <option value="">Quels acteurs ont besoin de la fonction?</option>
                    <option value="">Un acteur joue-t-il plusieurs rôles?</option>
                    <option value="">Le même rôle est-il joué par plusieurs acteurs?</option>
                    <option value="">Tout autre question qui paraît pertinente!</option>
                </select>
                <p>Un acteur peut jouer plusieurs rôles et dont être plusieurs acteurs, </p>
            </li>

            <li>
                <h4>Le cas d'utilisation (ou use case) :</h4>
                <p>Les use case sont des séquences d'actions menées par le système.</p>
                <p>Il peut être déclenché par un ou plusieurs éléments extérieurs.</p>
                <p>Le résultat doit être observable par l'utilisateur.</p>
                <p>une ellipse représent le cas d'utilisation </p>
                <label for="">Ensemble des questions à se poser pour trouver les use cases :</label>
                <select name="" id="">
                    <option value="">Quelles sont les tâches de l’acteur?</option>
                    <option value="">Quel acteur crée, sauvegarde, modifie, efface ou simplement consulte cette information?</option>
                    <option value="">Quel use case crée, efface, modifie ou consulte cette information?</option>
                    <option value="">L’acteur devra-t-il informer le système des changements venant de l’extérieur?</option>
                    <option value="">L’acteur doit-il être informé sur certains états du système?</option>
                    <option value="">Tout les besoins fonctionnels sont-ils pris en compte?</option>
                    <option value="">Tout autre question qui paraît pertinente!</option>
                </select>
            </li>

            <li>
                <h4>Les relations entre use case :</h4>
                <ul>
                    <li>La relation de communiaction : représenté par une flêche entre l'initiateur de l'interaction et celui qui reçoit. On peut indiquer la communication au dessus de la flêche.</li>
                    <li>La relation d'utilisation : représenté par une flêche entre deux actions ("utilise")</li>
                    <li>La relation d'extension : il y a une notion d'héritage où la relation s'étend sur une autre action ("Etend").</li>
                </ul>
            </li>

            <li>
                <h4>Documentation :</h4>
                <ul>
                    <li>Pour chaque acteur, faire une description rapide en quelques lignes.</li>
                    <li> Pour chaque cas d'utilisation, faire une description rapide ainsi que le détail des évènements (avec les informations) :                        
                        <ul>
                            <li>Comment et quand commence et se termine le cas d'utilisation?</li>
                            <li>Quand y a-til interaction entre cas d'utilisation et acteur ?</li>
                            <li>Quelles informations constituent un échange entre l'acteur et le cas d'utilisation ?</li>
                            <li>Le flux nominal (KESAKO?)</li>
                            <li>Les n flots alternatifs (KESAKO?)</li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
            <h4>Les scénarii :</h4>
                <p>Un scénario est une instance de cas d'utilisation qui correspond à un chemin que peut suivre le système.</p>
                <p> A noter qu'on a un scénario à chaque point de décision et chaque exception.</p>
            <h5>Exemple de rédaction :</h5>
                <textarea name="" id="" cols="100" rows="10">
                    1)Description :
                    Ce cas d’utilisation permet de saisir les informations concernant la commande d’un véhicule par un client.
                    
                    2) Flux d’évènements (Workflow):
                    
                    a. Conditions
                    Seul un commercial ou le concessionnaire peut opérer cette saisie.
                    Le client doit déjà être répertorié.
                    Ce cas d’utilisation n’est disponible que pendant la journée aux heures d’ouverture de l’établissement.
                    
                    b. Résultats
                    Une commande client est enregistrée.
                    Les informations concernant le client sont mises à jour.
                    Le règlement est enregistré et la facture éditée.
                    
                    3)Flot Nominal
                    Le commercial recherche les coordonnées du client.
                    Le système lui affiche les informations connues sur le client.
                    Le commercial saisit la référence du véhicule commandé.
                    Le système contrôle l’existence de la référence.
                    Puis il contrôle la quantité en stock.
                    
                    S’il y a au moins un véhicule en stock, le système : 
                    •affiche les informations complémentaires sur le véhicule
                    •demande les informations concernant le règlement.
                    •la confirmation de la commande
                    
                    Si la commande est confirmée :
                    •la commande est enregistrée
                    •le règlement est enregistré, la facture est enregistrée et éditée
                    •le véhicule est sorti du stock.
                    
                    Le cas d’utilisation prend fin

                    3)Flots alternatifs

                    a. Le client n’est pas répertorié
                    •Le commercial suspend sa saisie de commande pour aller enregistrer le client.
                    •Une fois chaque action menée, l’enregistrement de la commande peut reprendre.
                    
                    b. Les coordonnées du client sont erronées
                    Le système a détecté qu’une ou plusieurs informations saisies concernant le client sont absentes ou comportent des erreurs :
                    •Le système signale les informations en erreur.
                    •Le commercial corrige les erreurs.
                    •Ceci se répète jusqu’à ce que le système ne détecte plus d’erreur.
                    
                    c. La référence du véhicule saisie est incorrecte
                    •Le système affiche une liste de références existantes.
                    •Le commercial sélectionne la référence voulue.
                    •Le scénario normal reprend.
                    
                    d. Il n’y a pas la référence en stock
                    •Le système recherche le délai de livraison.
                    •Si le délai est accepté par le client, le scénario normal reprend.
                    •Sinon, il y a abandon de la procédure en cours

                    e. Le règlement ne peut pas être enregistré
                    •Le cas d’utilisation prend fin.
                    
                    f. La prise de commande n’est pas confirmée
                    •Le système annule le règlement s’il a été enregistré
                    •Le cas d’utilisation prend fin.
                    
                    g. Abandon a tout moment du processus
                    •Le cas d’utilisation prend fin.
                </textarea>
            </li>
            
            <li>
            <h4>Les intérêts :</h4>
                <ul>
                    <li>Permet de vérifier que le développeur à bien compris le besoin</li>
                    <li>permet de communiquer avec le client/utilisateur et l'expert du domaine, pour s'assurer de la compréhension</li>
                    <li>Permet de comprendre qui intervient sur le système, ce qu'il doit faire, qui intéragit dessus et quelles interfaces il doit posséder.</li>
                </ul>
            </li>
        </ul>
        


    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>