<header>

    <div id="bandeau">

        <div id="commentaire">

            <div id="phrase_accroche">
                <p>
                    <?php

                    if (!isset($page)) {
                        $page = "home";
                    };
                    switch ($page) {
                        case 'home':
                            echo "Il paraît qu'avoir une phrase d'accroche, c'est pas mal...";
                            break;
                        case 'cv':
                            echo "Curiculum Vitae";
                            break;
                        case 'realisations':
                            echo "Réalisations";
                            break;
                        case 'veilles':
                            echo "Veilles Technologiques";
                            break;
                        case 'bootstrap':
                            echo "Veille Bootstrap";
                            break;
                    };

                    ?>
                </p>
            </div>

        </div>

    </div>

</header>