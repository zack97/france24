<?php
// app/models/Article.php

class Article
{
    public static function getAllArticles()
    {
        // You could fetch this data from a database or API, but for now, using static data.
        return [
            ['id' => 1, 'title' => 'Les cyberattaques engendrées par la guerre russo-ukrainienne ont coûté deux milliards d\'euros aux organisations françaises en 2022', 'author' => 'Normand Roland', 'date_published' => '2022-12-01', 'content' => 'Deux milliards d’euros. C’est le coût colossal des cyberattaques réussies sur les systèmes d’information des organisations françaises, selon une estimation réalisée par le cabinet d’études économiques Asterès pour le compte du CRiP, une ...', 'image_path' => 'media/cyberattaque-france.jpg'],
            ['id' => 2, 'title' => 'Climat : un rapport révèle des cas pour les écosystèmes marins', 'author' => 'Marine Leclerc', 'date_published' => '2022-11-20', 'content' => 'Selon une étude récente, les écosystèmes marins sont confrontés à des changements irréversibles en raison de la hausse des températures océaniques et de l\'acidification. Des experts recommandent une action immédiate pour limiter les émissions ...', 'image_path' => 'media/climat-ocean.jpg'],
            ['id' => 3, 'title' => 'Élections en France : la sécurité et le pouvoir d\'achat au cœur des débats', 'author' => 'Pierre Dupont', 'date_published' => '2023-02-15', 'content' => 'À l\'approche des élections, les candidats concentrent leurs efforts sur les questions de sécurité et de pouvoir d\'achat. De nombreux citoyens expriment des préoccupations sur l\'augmentation du coût de la vie et le manque de mesures concrètes pour ...', 'image_path' => 'media/elections-france.jpg'],
            ['id' => 4, 'title' => 'Découverte archéologique : un ancien temple égyptien dévoilé', 'author' => 'Lina Massri', 'date_published' => '2023-01-05', 'content' => 'Une équipe d\'archéologues a récemment découvert les ruines d\'un ancien temple égyptien, enfoui sous des sables du désert. Ce site, datant de plus de 3000 ans, révèle des fresques et des statues en parfait état de conservation.', 'image_path' => 'media/climat-ocean.jpg'],
            ['id' => 5, 'title' => 'La pénurie mondiale de semi-conducteurs ralentit l\'industrie automobile', 'author' => 'Alexandre Morel', 'date_published' => '2023-03-10', 'content' => 'Les constructeurs automobiles sont confrontés à des retards importants dans la production de véhicules, en raison de la pénurie mondiale de semi-conducteurs. Cette crise affecte également l\'électronique grand public, les smartphones, et d\'autres in...', 'image_path' => 'media/semi-conducteurs.jpg'],
            ['id' => 6, 'title' => 'Vaccination : une nouvelle campagne pour sensibiliser les jeunes', 'author' => 'Sophie Durant', 'date_published' => '2023-04-05', 'content' => 'Afin de lutter contre la désinformation sur les vaccins, le ministère de la Santé lance une campagne de sensibilisation à destination des jeunes. Cette initiative vise à informer sur les bienfaits de la vaccination et à dissiper les craintes.', 'image_path' => 'media/vaccination.jpg'],
            ['id' => 7, 'title' => 'L\'économie française se redresse progressivement après la pandémie', 'author' => 'Jean-Luc Petit', 'date_published' => '2023-05-15', 'content' => 'L\'INSEE rapporte une reprise de l\'économie française, bien que plusieurs secteurs restent fragiles après la crise liée à la COVID-19. Les services, en particulier le tourisme, retrouvent une partie de leur activité, mais l\'incertitude persiste.', 'image_path' => 'media/economie-france.jpg'],
            ['id' => 8, 'title' => 'Lutte contre le réchauffement climatique : de nouvelles mesures adoptées par l\'Union européenne', 'author' => 'Isabelle Martin', 'date_published' => '2023-06-30', 'content' => 'L\'Union européenne adopte de nouvelles réglementations pour limiter les émissions de carbone et encourager les énergies renouvelables. Ces mesures devraient aider à atteindre les objectifs de l\'Accord de Paris.', 'image_path' => 'media/climat-ue.jpg'],
            ['id' => 9, 'title' => 'Intelligence artificielle : une technologie qui transforme le secteur de la santé', 'author' => 'David Leroy', 'date_published' => '2023-08-10', 'content' => 'L\'IA joue un rôle croissant dans le domaine médical, notamment pour le diagnostic et le suivi des patients. Cependant, des questions éthiques se posent quant à son utilisation et ses impacts sur la vie privée.', 'image_path' => 'media/intelligence-artificielle.jpg']
        ];
    }
}

?>
