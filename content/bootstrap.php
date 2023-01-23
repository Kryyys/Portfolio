    <div class="titre_centre">
        <img src="./images/boot.png" alt="bootstrap" width="500px">
        <h2>Veille Technologique Bootstrap</h2>
    </div>

    <main id="bootstrap_main">

        <article>

            <h3>Qu’est-ce que Bootstrap ?</h3>
            <br><br>
            <p>Bootstrap est une collection d’outils utiles à la création du design de sites et d’applications web, tant au niveau du graphisme/design qu’au niveau des interactions de la page dans le navigateur : c’est ce qu’on appelle un Framework axé sur la partie Front-End. C’est un ensemble qui contient une multitude de codes HTML, CSS (formulaires, boutons, etc…) ainsi que des extensions Javascript. Il sert principalement à créer des sites et applications au design plus épuré.</p>
            <br>
            <p>Bootstrap est l’un des projets les plus populaires sur GitHub : en 2021, il était le dixième projet le plus populaire sur la plateforme.</p>
            <br>
            <p>A noter que Bootstrap est compatible avec les dernières versions des navigateurs majeurs, mais peut fonctionner de manière dégradée sur des navigateurs plus anciens.</p>
            <br><br>
        </article>


        <article>
            <h3>Un peu d’histoire…</h3>
            <br><br>
            <p>Bootstrap a été créé en 2010, par deux développeurs très actifs sur Twitter : Mark Otto et Jacob Thornton. Le 19 août 2011, la première version est mise à disposition du public sous licence open source par Twitter.</p>
            <br>
            <p>Il y eut plusieurs versions de Bootstrap, chacune apportant tout un lot de nouvelles fonctionnalités :</p>
            <br>
            <ul>

                <li>• Bootstrap 2 : sortie le 31 janvier 2012, elle prend en charge la conception de sites web réactifs.</li>
                <li>• Bootstrap 3 : sortie le 19 août 2013, elle a redessiné les composant pour utiliser le flat-design (style de design d’interface graphique caractérisé par son minimalisme), et apporte également une approche mobile first (concevoir la version mobile d’un site avant sa version bureau.</li>
                <li>• Bootstrap 4 : finalisée le 18 janvier 2018, elle apporte une réécriture massive du code, inclut du Flexbox et remplace le préprocesseur LESS par SASS.</li>
                <li>• Bootstrap 5 :

                    <ul>
                        <li>o Version alpha : sortie le 16 juin 2020, elle abandonne la bibliothèque jQuery en faveur de JavaScript et améliore l’API (Application Programming Interface).</li>
                        <li>o Version bêta : sortie le 7 décembre 2020, elle améliore principalement le JavaScript ainsi que l’API, tout en corrigeant quelques bugs.</li>
                    </ul>
            </ul>
            <br><br>
        </div>


        <div>
            <h3>Utilisation</h3>
            <br>
            <p>Le Framework possède deux grands avantages notables :</p>
            <br>
            <ul>
                <li>• Un gain de temps de développement qui peut être conséquent</li>
                <li>• Une certaine robustesse dans l’architecture global du code</li>
            </ul>
            <br>
            <p>MAIS il possède également quelques inconvénients :</p>
            <br>
            <ul>
                <li>• C’est un Framework relativement lourd à charger</li>
                <li>• Il faut tout de même un certain niveau de développement pour pouvoir utiliser ce Framework.</li>
            </ul>
            <br>
            <p>Il faut donc bien réfléchir avant d’utiliser ce Framework, quitte à perdre du temps.</p>
            <br><br>
        </div>


        <article>
            <h4>• Créer une page HTML</h4>
            <br>
            <p>Avant toute chose, il faut créer une page HTML, avec un doctype, en n’oubliant pas d’inclure l’élément meta, étant donné que Bootstrap est conçu pour créer des sites responsifs.
            </p>
            <br>

            <img src="./images/boot_img1.png" class="titre_centre" alt="">
            <br>
            <br>
        </article>



        <article>
            <h4>• Créer des containers</h4>
            <br>
            <p>Bootstrap a besoin de containers pour enrober les éléments du site.</p>
            <br>
            <p>On peut choisir deux types de containers :</p>
            <br>
            <ul>
                <li>o La class .container pour un container avec une largeur fixe.</li>
                <li>o La class .container-fluid pour un container qui couvre toute la largeur de la fenêtre d’affichage.</li>
            </ul>
            <br>
            <img src="./images/boot_img2.png" class="titre_centre" alt="">
            <br><br>
        </article>


        <article>

            <h4>• Charger Bootstrap</h4>
            <br>
            <p>Il y a deux façons d’utiliser le Framework :</p>
            <br>
            <ul>
                <li>
                    <span class="gras">o Charger Bootstrap via un CDN (Content Delivery Network)</span>.
                    Bootstrap se compose principalement de feuilles de style et de scripts. En tant que tels, ils peuvent être chargés dans l'en-tête et le pied de page de notre page web comme d'autres actifs tels que les polices personnalisées. Le cadre offre un chemin d'accès CDN (réseau de diffusion de contenu) pour cela.
                    Pour intégrer Bootstrap dans la page, il suffit simplement de copier/coller le code ci-dessous dans la section head de la page HTML.
                </li>
                <br>
                <img src="./images/boot_img3.png" class="titre_centre" alt="">

                <br><br>
                <li>
                    <span class="gras">o Charger Bootstrap depuis un fichier sur l’ordinateur</span>.
                    Pour cela, rien de plus simple : il suffit de télécharger le(s) fichier(s) voulus sur l’ordinateur et d’écrire le lien de ces fichiers dans la section

                    head. Un exemple ici pour un fichier css :
                </li>
            </ul>
            <br>
            <img src="./images/boot_img4.png" class="titre_centre" alt="">
            <br><br>
            <br>
        </article>




        <article>
            <h3>Conclusion</h3>
            <br>
            <p>En conclusion, Bootstrap est intéressant à utiliser lorsque l’on le maîtrise bien et que l’on doit travailler vite, et également lorsque l’on a des exigences en termes de design relativement classiques. Il assure aussi une certaine robustesse à notre code. Néanmoins, il est assez lourd à charger et cela peut être handicapant dans certaines conditions.</p>
            <br>
            <p>Bootstrap est donc une solution de choix lorsqu’il s’agit de livrer des sites internet assez rapidement, à des clients qui ne disposent pas d’un gros budget, qui n’ont pas d’exigences extravagantes et qui n’ont pas d’équipe de développeurs dédiés pour assure la maintenance de leur site.</p>
            <br><br>
            <p class="italique">Sources : Wikipédia, Pierre-Giraud.com, W3School…</p>
        </article>

        <br>
        <br>

    </main>