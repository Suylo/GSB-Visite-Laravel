<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rapport;

class RapportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rapport::create( [
            'id'=>1,
            'date'=>'2017-01-02',
            'motif'=>'positif',
            'bilan'=>'visiteannuelle',
            'id_visiteur'=>'b16',
            'id_medecin'=>963
        ] );

        Rapport::create( [
            'id'=>2,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a93',
            'id_medecin'=>4
        ] );

        Rapport::create( [
            'id'=>3,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a93',
            'id_medecin'=>86
        ] );

        Rapport::create( [
            'id'=>4,
            'date'=>'2016-07-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>725
        ] );

        Rapport::create( [
            'id'=>5,
            'date'=>'2016-07-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e49',
            'id_medecin'=>570
        ] );

        Rapport::create( [
            'id'=>6,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b13',
            'id_medecin'=>82
        ] );

        Rapport::create( [
            'id'=>7,
            'date'=>'2016-07-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b25',
            'id_medecin'=>521
        ] );

        Rapport::create( [
            'id'=>8,
            'date'=>'2016-07-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d13',
            'id_medecin'=>639
        ] );

        Rapport::create( [
            'id'=>9,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b16',
            'id_medecin'=>863
        ] );

        Rapport::create( [
            'id'=>10,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e39',
            'id_medecin'=>475
        ] );

        Rapport::create( [
            'id'=>11,
            'date'=>'2016-07-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e39',
            'id_medecin'=>575
        ] );

        Rapport::create( [
            'id'=>12,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b19',
            'id_medecin'=>268
        ] );

        Rapport::create( [
            'id'=>13,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c14',
            'id_medecin'=>754
        ] );

        Rapport::create( [
            'id'=>14,
            'date'=>'2016-07-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b50',
            'id_medecin'=>421
        ] );

        Rapport::create( [
            'id'=>15,
            'date'=>'2016-07-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e5',
            'id_medecin'=>11
        ] );

        Rapport::create( [
            'id'=>16,
            'date'=>'2016-07-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b59',
            'id_medecin'=>791
        ] );

        Rapport::create( [
            'id'=>17,
            'date'=>'2016-07-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e5',
            'id_medecin'=>28
        ] );

        Rapport::create( [
            'id'=>18,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'c14',
            'id_medecin'=>662
        ] );

        Rapport::create( [
            'id'=>19,
            'date'=>'2016-07-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e24',
            'id_medecin'=>365
        ] );

        Rapport::create( [
            'id'=>20,
            'date'=>'2016-07-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b28',
            'id_medecin'=>882
        ] );

        Rapport::create( [
            'id'=>21,
            'date'=>'2016-07-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e39',
            'id_medecin'=>727
        ] );

        Rapport::create( [
            'id'=>22,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e39',
            'id_medecin'=>882
        ] );

        Rapport::create( [
            'id'=>23,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b34',
            'id_medecin'=>69
        ] );

        Rapport::create( [
            'id'=>24,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b4',
            'id_medecin'=>200
        ] );

        Rapport::create( [
            'id'=>25,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'c3',
            'id_medecin'=>265
        ] );

        Rapport::create( [
            'id'=>26,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'d13',
            'id_medecin'=>589
        ] );

        Rapport::create( [
            'id'=>27,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b25',
            'id_medecin'=>471
        ] );

        Rapport::create( [
            'id'=>28,
            'date'=>'2016-07-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a131',
            'id_medecin'=>935
        ] );

        Rapport::create( [
            'id'=>29,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'f21',
            'id_medecin'=>41
        ] );

        Rapport::create( [
            'id'=>30,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e39',
            'id_medecin'=>148
        ] );

        Rapport::create( [
            'id'=>31,
            'date'=>'2016-07-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'d13',
            'id_medecin'=>820
        ] );

        Rapport::create( [
            'id'=>32,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b28',
            'id_medecin'=>691
        ] );

        Rapport::create( [
            'id'=>33,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c14',
            'id_medecin'=>381
        ] );

        Rapport::create( [
            'id'=>34,
            'date'=>'2016-07-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c14',
            'id_medecin'=>818
        ] );

        Rapport::create( [
            'id'=>35,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b59',
            'id_medecin'=>153
        ] );

        Rapport::create( [
            'id'=>36,
            'date'=>'2016-07-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b25',
            'id_medecin'=>321
        ] );

        Rapport::create( [
            'id'=>37,
            'date'=>'2016-07-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b19',
            'id_medecin'=>352
        ] );

        Rapport::create( [
            'id'=>38,
            'date'=>'2016-07-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b34',
            'id_medecin'=>86
        ] );

        Rapport::create( [
            'id'=>39,
            'date'=>'2016-07-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c54',
            'id_medecin'=>404
        ] );

        Rapport::create( [
            'id'=>40,
            'date'=>'2016-07-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e39',
            'id_medecin'=>803
        ] );

        Rapport::create( [
            'id'=>41,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c14',
            'id_medecin'=>34
        ] );

        Rapport::create( [
            'id'=>42,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>738
        ] );

        Rapport::create( [
            'id'=>43,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'d51',
            'id_medecin'=>628
        ] );

        Rapport::create( [
            'id'=>44,
            'date'=>'2016-07-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>356
        ] );

        Rapport::create( [
            'id'=>45,
            'date'=>'2016-07-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a17',
            'id_medecin'=>388
        ] );

        Rapport::create( [
            'id'=>46,
            'date'=>'2016-07-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e5',
            'id_medecin'=>590
        ] );

        Rapport::create( [
            'id'=>47,
            'date'=>'2016-07-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b13',
            'id_medecin'=>603
        ] );

        Rapport::create( [
            'id'=>48,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b16',
            'id_medecin'=>551
        ] );

        Rapport::create( [
            'id'=>49,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d13',
            'id_medecin'=>995
        ] );

        Rapport::create( [
            'id'=>50,
            'date'=>'2016-07-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e24',
            'id_medecin'=>115
        ] );

        Rapport::create( [
            'id'=>51,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e5',
            'id_medecin'=>680
        ] );

        Rapport::create( [
            'id'=>52,
            'date'=>'2016-07-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e39',
            'id_medecin'=>564
        ] );

        Rapport::create( [
            'id'=>53,
            'date'=>'2016-07-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e22',
            'id_medecin'=>281
        ] );

        Rapport::create( [
            'id'=>54,
            'date'=>'2016-07-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c54',
            'id_medecin'=>542
        ] );

        Rapport::create( [
            'id'=>55,
            'date'=>'2016-07-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e5',
            'id_medecin'=>137
        ] );

        Rapport::create( [
            'id'=>56,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b19',
            'id_medecin'=>362
        ] );

        Rapport::create( [
            'id'=>57,
            'date'=>'2016-07-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b16',
            'id_medecin'=>633
        ] );

        Rapport::create( [
            'id'=>58,
            'date'=>'2016-07-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c14',
            'id_medecin'=>424
        ] );

        Rapport::create( [
            'id'=>59,
            'date'=>'2016-07-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e52',
            'id_medecin'=>663
        ] );

        Rapport::create( [
            'id'=>60,
            'date'=>'2016-07-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e5',
            'id_medecin'=>437
        ] );

        Rapport::create( [
            'id'=>61,
            'date'=>'2016-07-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e24',
            'id_medecin'=>264
        ] );

        Rapport::create( [
            'id'=>62,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e39',
            'id_medecin'=>7
        ] );

        Rapport::create( [
            'id'=>63,
            'date'=>'2016-07-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b25',
            'id_medecin'=>895
        ] );

        Rapport::create( [
            'id'=>64,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'d13',
            'id_medecin'=>182
        ] );

        Rapport::create( [
            'id'=>65,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e24',
            'id_medecin'=>594
        ] );

        Rapport::create( [
            'id'=>66,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'c3',
            'id_medecin'=>285
        ] );

        Rapport::create( [
            'id'=>67,
            'date'=>'2016-07-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e22',
            'id_medecin'=>834
        ] );

        Rapport::create( [
            'id'=>68,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b50',
            'id_medecin'=>531
        ] );

        Rapport::create( [
            'id'=>69,
            'date'=>'2016-07-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b59',
            'id_medecin'=>873
        ] );

        Rapport::create( [
            'id'=>70,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'f39',
            'id_medecin'=>976
        ] );

        Rapport::create( [
            'id'=>71,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c54',
            'id_medecin'=>913
        ] );

        Rapport::create( [
            'id'=>72,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a131',
            'id_medecin'=>931
        ] );

        Rapport::create( [
            'id'=>73,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b4',
            'id_medecin'=>571
        ] );

        Rapport::create( [
            'id'=>74,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e52',
            'id_medecin'=>487
        ] );

        Rapport::create( [
            'id'=>75,
            'date'=>'2016-07-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'c54',
            'id_medecin'=>78
        ] );

        Rapport::create( [
            'id'=>76,
            'date'=>'2016-07-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b59',
            'id_medecin'=>103
        ] );

        Rapport::create( [
            'id'=>77,
            'date'=>'2016-07-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e5',
            'id_medecin'=>991
        ] );

        Rapport::create( [
            'id'=>78,
            'date'=>'2016-07-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d13',
            'id_medecin'=>290
        ] );

        Rapport::create( [
            'id'=>79,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b19',
            'id_medecin'=>314
        ] );

        Rapport::create( [
            'id'=>80,
            'date'=>'2016-07-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'f39',
            'id_medecin'=>43
        ] );

        Rapport::create( [
            'id'=>81,
            'date'=>'2016-07-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c14',
            'id_medecin'=>797
        ] );

        Rapport::create( [
            'id'=>82,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>747
        ] );

        Rapport::create( [
            'id'=>83,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'e49',
            'id_medecin'=>97
        ] );

        Rapport::create( [
            'id'=>84,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>389
        ] );

        Rapport::create( [
            'id'=>85,
            'date'=>'2016-07-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b25',
            'id_medecin'=>550
        ] );

        Rapport::create( [
            'id'=>86,
            'date'=>'2016-07-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e39',
            'id_medecin'=>546
        ] );

        Rapport::create( [
            'id'=>87,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a131',
            'id_medecin'=>643
        ] );

        Rapport::create( [
            'id'=>88,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e52',
            'id_medecin'=>410
        ] );

        Rapport::create( [
            'id'=>89,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e39',
            'id_medecin'=>422
        ] );

        Rapport::create( [
            'id'=>90,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c3',
            'id_medecin'=>765
        ] );

        Rapport::create( [
            'id'=>91,
            'date'=>'2016-07-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b59',
            'id_medecin'=>117
        ] );

        Rapport::create( [
            'id'=>92,
            'date'=>'2016-07-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e5',
            'id_medecin'=>638
        ] );

        Rapport::create( [
            'id'=>93,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c54',
            'id_medecin'=>96
        ] );

        Rapport::create( [
            'id'=>94,
            'date'=>'2016-07-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b19',
            'id_medecin'=>257
        ] );

        Rapport::create( [
            'id'=>95,
            'date'=>'2016-07-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e22',
            'id_medecin'=>465
        ] );

        Rapport::create( [
            'id'=>96,
            'date'=>'2016-07-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e22',
            'id_medecin'=>907
        ] );

        Rapport::create( [
            'id'=>97,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'d13',
            'id_medecin'=>871
        ] );

        Rapport::create( [
            'id'=>98,
            'date'=>'2016-07-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'f39',
            'id_medecin'=>15
        ] );

        Rapport::create( [
            'id'=>99,
            'date'=>'2016-07-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e52',
            'id_medecin'=>676
        ] );

        Rapport::create( [
            'id'=>100,
            'date'=>'2016-07-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c54',
            'id_medecin'=>569
        ] );

        Rapport::create( [
            'id'=>101,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'d13',
            'id_medecin'=>158
        ] );

        Rapport::create( [
            'id'=>102,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>32
        ] );

        Rapport::create( [
            'id'=>103,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b50',
            'id_medecin'=>434
        ] );

        Rapport::create( [
            'id'=>104,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e52',
            'id_medecin'=>181
        ] );

        Rapport::create( [
            'id'=>105,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a131',
            'id_medecin'=>525
        ] );

        Rapport::create( [
            'id'=>106,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'c14',
            'id_medecin'=>687
        ] );

        Rapport::create( [
            'id'=>107,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b13',
            'id_medecin'=>867
        ] );

        Rapport::create( [
            'id'=>108,
            'date'=>'2016-07-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e22',
            'id_medecin'=>302
        ] );

        Rapport::create( [
            'id'=>109,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b19',
            'id_medecin'=>455
        ] );

        Rapport::create( [
            'id'=>110,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e52',
            'id_medecin'=>278
        ] );

        Rapport::create( [
            'id'=>111,
            'date'=>'2016-07-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c54',
            'id_medecin'=>572
        ] );

        Rapport::create( [
            'id'=>112,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a131',
            'id_medecin'=>863
        ] );

        Rapport::create( [
            'id'=>113,
            'date'=>'2016-07-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b25',
            'id_medecin'=>959
        ] );

        Rapport::create( [
            'id'=>114,
            'date'=>'2016-07-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'d51',
            'id_medecin'=>205
        ] );

        Rapport::create( [
            'id'=>115,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b19',
            'id_medecin'=>413
        ] );

        Rapport::create( [
            'id'=>116,
            'date'=>'2016-07-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b59',
            'id_medecin'=>698
        ] );

        Rapport::create( [
            'id'=>117,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'a17',
            'id_medecin'=>857
        ] );

        Rapport::create( [
            'id'=>118,
            'date'=>'2016-07-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b28',
            'id_medecin'=>833
        ] );

        Rapport::create( [
            'id'=>119,
            'date'=>'2016-07-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a93',
            'id_medecin'=>308
        ] );

        Rapport::create( [
            'id'=>120,
            'date'=>'2016-07-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e39',
            'id_medecin'=>362
        ] );

        Rapport::create( [
            'id'=>121,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b25',
            'id_medecin'=>803
        ] );

        Rapport::create( [
            'id'=>122,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d13',
            'id_medecin'=>291
        ] );

        Rapport::create( [
            'id'=>123,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'c54',
            'id_medecin'=>910
        ] );

        Rapport::create( [
            'id'=>124,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d13',
            'id_medecin'=>205
        ] );

        Rapport::create( [
            'id'=>125,
            'date'=>'2016-07-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>775
        ] );

        Rapport::create( [
            'id'=>126,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'a17',
            'id_medecin'=>126
        ] );

        Rapport::create( [
            'id'=>127,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b25',
            'id_medecin'=>926
        ] );

        Rapport::create( [
            'id'=>128,
            'date'=>'2016-07-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e39',
            'id_medecin'=>906
        ] );

        Rapport::create( [
            'id'=>129,
            'date'=>'2016-07-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e5',
            'id_medecin'=>365
        ] );

        Rapport::create( [
            'id'=>130,
            'date'=>'2016-07-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b4',
            'id_medecin'=>62
        ] );

        Rapport::create( [
            'id'=>131,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b4',
            'id_medecin'=>779
        ] );

        Rapport::create( [
            'id'=>132,
            'date'=>'2016-07-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c14',
            'id_medecin'=>172
        ] );

        Rapport::create( [
            'id'=>133,
            'date'=>'2016-07-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b16',
            'id_medecin'=>522
        ] );

        Rapport::create( [
            'id'=>134,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'e5',
            'id_medecin'=>403
        ] );

        Rapport::create( [
            'id'=>135,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b4',
            'id_medecin'=>845
        ] );

        Rapport::create( [
            'id'=>136,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b34',
            'id_medecin'=>104
        ] );

        Rapport::create( [
            'id'=>137,
            'date'=>'2016-07-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>404
        ] );

        Rapport::create( [
            'id'=>138,
            'date'=>'2016-07-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b28',
            'id_medecin'=>397
        ] );

        Rapport::create( [
            'id'=>139,
            'date'=>'2016-07-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b25',
            'id_medecin'=>707
        ] );

        Rapport::create( [
            'id'=>140,
            'date'=>'2016-07-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b19',
            'id_medecin'=>959
        ] );

        Rapport::create( [
            'id'=>141,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e39',
            'id_medecin'=>986
        ] );

        Rapport::create( [
            'id'=>142,
            'date'=>'2016-07-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e22',
            'id_medecin'=>143
        ] );

        Rapport::create( [
            'id'=>143,
            'date'=>'2016-07-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a55',
            'id_medecin'=>735
        ] );

        Rapport::create( [
            'id'=>144,
            'date'=>'2016-07-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c54',
            'id_medecin'=>788
        ] );

        Rapport::create( [
            'id'=>145,
            'date'=>'2016-07-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c14',
            'id_medecin'=>186
        ] );

        Rapport::create( [
            'id'=>146,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'c14',
            'id_medecin'=>871
        ] );

        Rapport::create( [
            'id'=>147,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>511
        ] );

        Rapport::create( [
            'id'=>148,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'d13',
            'id_medecin'=>996
        ] );

        Rapport::create( [
            'id'=>149,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'f21',
            'id_medecin'=>351
        ] );

        Rapport::create( [
            'id'=>150,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'f21',
            'id_medecin'=>992
        ] );

        Rapport::create( [
            'id'=>151,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b4',
            'id_medecin'=>205
        ] );

        Rapport::create( [
            'id'=>152,
            'date'=>'2016-07-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a93',
            'id_medecin'=>936
        ] );

        Rapport::create( [
            'id'=>153,
            'date'=>'2016-07-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b25',
            'id_medecin'=>484
        ] );

        Rapport::create( [
            'id'=>154,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b25',
            'id_medecin'=>790
        ] );

        Rapport::create( [
            'id'=>155,
            'date'=>'2016-07-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b34',
            'id_medecin'=>328
        ] );

        Rapport::create( [
            'id'=>156,
            'date'=>'2016-07-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b4',
            'id_medecin'=>834
        ] );

        Rapport::create( [
            'id'=>157,
            'date'=>'2016-07-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e49',
            'id_medecin'=>826
        ] );

        Rapport::create( [
            'id'=>158,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e5',
            'id_medecin'=>41
        ] );

        Rapport::create( [
            'id'=>159,
            'date'=>'2016-07-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b16',
            'id_medecin'=>52
        ] );

        Rapport::create( [
            'id'=>160,
            'date'=>'2016-07-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e22',
            'id_medecin'=>52
        ] );

        Rapport::create( [
            'id'=>161,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b4',
            'id_medecin'=>237
        ] );

        Rapport::create( [
            'id'=>162,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b19',
            'id_medecin'=>829
        ] );

        Rapport::create( [
            'id'=>163,
            'date'=>'2016-07-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e24',
            'id_medecin'=>973
        ] );

        Rapport::create( [
            'id'=>164,
            'date'=>'2016-07-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>789
        ] );

        Rapport::create( [
            'id'=>165,
            'date'=>'2016-07-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b4',
            'id_medecin'=>31
        ] );

        Rapport::create( [
            'id'=>166,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b25',
            'id_medecin'=>858
        ] );

        Rapport::create( [
            'id'=>167,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a93',
            'id_medecin'=>210
        ] );

        Rapport::create( [
            'id'=>168,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a17',
            'id_medecin'=>278
        ] );

        Rapport::create( [
            'id'=>169,
            'date'=>'2016-07-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'d13',
            'id_medecin'=>144
        ] );

        Rapport::create( [
            'id'=>170,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'f21',
            'id_medecin'=>665
        ] );

        Rapport::create( [
            'id'=>171,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'d51',
            'id_medecin'=>495
        ] );

        Rapport::create( [
            'id'=>172,
            'date'=>'2016-07-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a131',
            'id_medecin'=>701
        ] );

        Rapport::create( [
            'id'=>173,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e5',
            'id_medecin'=>180
        ] );

        Rapport::create( [
            'id'=>174,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b25',
            'id_medecin'=>414
        ] );

        Rapport::create( [
            'id'=>175,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d13',
            'id_medecin'=>628
        ] );

        Rapport::create( [
            'id'=>176,
            'date'=>'2016-07-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'f39',
            'id_medecin'=>925
        ] );

        Rapport::create( [
            'id'=>177,
            'date'=>'2016-07-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e39',
            'id_medecin'=>711
        ] );

        Rapport::create( [
            'id'=>178,
            'date'=>'2016-07-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a131',
            'id_medecin'=>22
        ] );

        Rapport::create( [
            'id'=>179,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b13',
            'id_medecin'=>738
        ] );

        Rapport::create( [
            'id'=>180,
            'date'=>'2016-07-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b34',
            'id_medecin'=>696
        ] );

        Rapport::create( [
            'id'=>181,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b50',
            'id_medecin'=>452
        ] );

        Rapport::create( [
            'id'=>182,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b34',
            'id_medecin'=>506
        ] );

        Rapport::create( [
            'id'=>183,
            'date'=>'2016-07-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b34',
            'id_medecin'=>228
        ] );

        Rapport::create( [
            'id'=>184,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'d51',
            'id_medecin'=>806
        ] );

        Rapport::create( [
            'id'=>185,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b4',
            'id_medecin'=>9
        ] );

        Rapport::create( [
            'id'=>186,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e22',
            'id_medecin'=>159
        ] );

        Rapport::create( [
            'id'=>187,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c3',
            'id_medecin'=>202
        ] );

        Rapport::create( [
            'id'=>188,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e39',
            'id_medecin'=>974
        ] );

        Rapport::create( [
            'id'=>189,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b4',
            'id_medecin'=>543
        ] );

        Rapport::create( [
            'id'=>190,
            'date'=>'2016-07-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c14',
            'id_medecin'=>208
        ] );

        Rapport::create( [
            'id'=>191,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e22',
            'id_medecin'=>793
        ] );

        Rapport::create( [
            'id'=>192,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b59',
            'id_medecin'=>281
        ] );

        Rapport::create( [
            'id'=>193,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e22',
            'id_medecin'=>892
        ] );

        Rapport::create( [
            'id'=>194,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'c3',
            'id_medecin'=>917
        ] );

        Rapport::create( [
            'id'=>195,
            'date'=>'2016-07-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a17',
            'id_medecin'=>561
        ] );

        Rapport::create( [
            'id'=>196,
            'date'=>'2016-07-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'f39',
            'id_medecin'=>428
        ] );

        Rapport::create( [
            'id'=>197,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a17',
            'id_medecin'=>618
        ] );

        Rapport::create( [
            'id'=>198,
            'date'=>'2016-07-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b16',
            'id_medecin'=>531
        ] );

        Rapport::create( [
            'id'=>199,
            'date'=>'2016-07-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e5',
            'id_medecin'=>874
        ] );

        Rapport::create( [
            'id'=>200,
            'date'=>'2016-07-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>625
        ] );

        Rapport::create( [
            'id'=>201,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a93',
            'id_medecin'=>153
        ] );

        Rapport::create( [
            'id'=>202,
            'date'=>'2016-07-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>816
        ] );

        Rapport::create( [
            'id'=>203,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e39',
            'id_medecin'=>330
        ] );

        Rapport::create( [
            'id'=>204,
            'date'=>'2016-07-12',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e52',
            'id_medecin'=>978
        ] );

        Rapport::create( [
            'id'=>205,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b34',
            'id_medecin'=>871
        ] );

        Rapport::create( [
            'id'=>206,
            'date'=>'2016-07-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b34',
            'id_medecin'=>928
        ] );

        Rapport::create( [
            'id'=>207,
            'date'=>'2016-07-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e22',
            'id_medecin'=>192
        ] );

        Rapport::create( [
            'id'=>208,
            'date'=>'2016-07-12',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b28',
            'id_medecin'=>851
        ] );

        Rapport::create( [
            'id'=>209,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b16',
            'id_medecin'=>4
        ] );

        Rapport::create( [
            'id'=>210,
            'date'=>'2016-07-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c3',
            'id_medecin'=>532
        ] );

        Rapport::create( [
            'id'=>211,
            'date'=>'2016-07-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b19',
            'id_medecin'=>445
        ] );

        Rapport::create( [
            'id'=>212,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a17',
            'id_medecin'=>223
        ] );

        Rapport::create( [
            'id'=>213,
            'date'=>'2016-07-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>312
        ] );

        Rapport::create( [
            'id'=>214,
            'date'=>'2016-07-12',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'e52',
            'id_medecin'=>503
        ] );

        Rapport::create( [
            'id'=>215,
            'date'=>'2016-07-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f39',
            'id_medecin'=>709
        ] );

        Rapport::create( [
            'id'=>216,
            'date'=>'2016-07-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b28',
            'id_medecin'=>693
        ] );

        Rapport::create( [
            'id'=>217,
            'date'=>'2016-07-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'f21',
            'id_medecin'=>47
        ] );

        Rapport::create( [
            'id'=>218,
            'date'=>'2016-07-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'f39',
            'id_medecin'=>451
        ] );

        Rapport::create( [
            'id'=>219,
            'date'=>'2016-07-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a17',
            'id_medecin'=>502
        ] );

        Rapport::create( [
            'id'=>220,
            'date'=>'2016-07-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>305
        ] );

        Rapport::create( [
            'id'=>221,
            'date'=>'2016-07-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e52',
            'id_medecin'=>581
        ] );

        Rapport::create( [
            'id'=>222,
            'date'=>'2016-07-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b28',
            'id_medecin'=>346
        ] );

        Rapport::create( [
            'id'=>223,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a17',
            'id_medecin'=>786
        ] );

        Rapport::create( [
            'id'=>224,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b28',
            'id_medecin'=>422
        ] );

        Rapport::create( [
            'id'=>225,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b25',
            'id_medecin'=>402
        ] );

        Rapport::create( [
            'id'=>226,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'b50',
            'id_medecin'=>391
        ] );

        Rapport::create( [
            'id'=>227,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'c54',
            'id_medecin'=>699
        ] );

        Rapport::create( [
            'id'=>228,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e52',
            'id_medecin'=>31
        ] );

        Rapport::create( [
            'id'=>229,
            'date'=>'2016-07-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>728
        ] );

        Rapport::create( [
            'id'=>230,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c54',
            'id_medecin'=>155
        ] );

        Rapport::create( [
            'id'=>231,
            'date'=>'2016-07-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c14',
            'id_medecin'=>71
        ] );

        Rapport::create( [
            'id'=>232,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c54',
            'id_medecin'=>887
        ] );

        Rapport::create( [
            'id'=>233,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>63
        ] );

        Rapport::create( [
            'id'=>234,
            'date'=>'2016-07-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b4',
            'id_medecin'=>83
        ] );

        Rapport::create( [
            'id'=>235,
            'date'=>'2016-07-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d13',
            'id_medecin'=>946
        ] );

        Rapport::create( [
            'id'=>236,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b34',
            'id_medecin'=>139
        ] );

        Rapport::create( [
            'id'=>237,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'b13',
            'id_medecin'=>174
        ] );

        Rapport::create( [
            'id'=>238,
            'date'=>'2016-07-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'f21',
            'id_medecin'=>148
        ] );

        Rapport::create( [
            'id'=>239,
            'date'=>'2016-07-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e39',
            'id_medecin'=>308
        ] );

        Rapport::create( [
            'id'=>240,
            'date'=>'2016-07-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c3',
            'id_medecin'=>740
        ] );

        Rapport::create( [
            'id'=>241,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b16',
            'id_medecin'=>323
        ] );

        Rapport::create( [
            'id'=>242,
            'date'=>'2016-07-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b4',
            'id_medecin'=>440
        ] );

        Rapport::create( [
            'id'=>243,
            'date'=>'2016-07-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e22',
            'id_medecin'=>986
        ] );

        Rapport::create( [
            'id'=>244,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e22',
            'id_medecin'=>6
        ] );

        Rapport::create( [
            'id'=>245,
            'date'=>'2016-07-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b19',
            'id_medecin'=>809
        ] );

        Rapport::create( [
            'id'=>246,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'d13',
            'id_medecin'=>896
        ] );

        Rapport::create( [
            'id'=>247,
            'date'=>'2016-07-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a93',
            'id_medecin'=>499
        ] );

        Rapport::create( [
            'id'=>248,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c54',
            'id_medecin'=>639
        ] );

        Rapport::create( [
            'id'=>249,
            'date'=>'2016-07-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b4',
            'id_medecin'=>737
        ] );

        Rapport::create( [
            'id'=>250,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'b34',
            'id_medecin'=>979
        ] );

        Rapport::create( [
            'id'=>251,
            'date'=>'2016-07-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e52',
            'id_medecin'=>709
        ] );

        Rapport::create( [
            'id'=>252,
            'date'=>'2016-07-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a17',
            'id_medecin'=>290
        ] );

        Rapport::create( [
            'id'=>253,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a55',
            'id_medecin'=>121
        ] );

        Rapport::create( [
            'id'=>254,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e22',
            'id_medecin'=>116
        ] );

        Rapport::create( [
            'id'=>255,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c54',
            'id_medecin'=>331
        ] );

        Rapport::create( [
            'id'=>256,
            'date'=>'2016-07-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a131',
            'id_medecin'=>204
        ] );

        Rapport::create( [
            'id'=>257,
            'date'=>'2016-07-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a131',
            'id_medecin'=>187
        ] );

        Rapport::create( [
            'id'=>258,
            'date'=>'2016-07-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c54',
            'id_medecin'=>172
        ] );

        Rapport::create( [
            'id'=>259,
            'date'=>'2016-07-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b13',
            'id_medecin'=>311
        ] );

        Rapport::create( [
            'id'=>260,
            'date'=>'2016-07-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'f39',
            'id_medecin'=>766
        ] );

        Rapport::create( [
            'id'=>261,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a55',
            'id_medecin'=>634
        ] );

        Rapport::create( [
            'id'=>262,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'c14',
            'id_medecin'=>216
        ] );

        Rapport::create( [
            'id'=>263,
            'date'=>'2016-07-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e22',
            'id_medecin'=>119
        ] );

        Rapport::create( [
            'id'=>264,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'b19',
            'id_medecin'=>725
        ] );

        Rapport::create( [
            'id'=>265,
            'date'=>'2016-07-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>827
        ] );

        Rapport::create( [
            'id'=>266,
            'date'=>'2016-07-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>412
        ] );

        Rapport::create( [
            'id'=>267,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>837
        ] );

        Rapport::create( [
            'id'=>268,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c3',
            'id_medecin'=>97
        ] );

        Rapport::create( [
            'id'=>269,
            'date'=>'2016-07-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'f21',
            'id_medecin'=>885
        ] );

        Rapport::create( [
            'id'=>270,
            'date'=>'2016-07-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b16',
            'id_medecin'=>484
        ] );

        Rapport::create( [
            'id'=>271,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'f39',
            'id_medecin'=>962
        ] );

        Rapport::create( [
            'id'=>272,
            'date'=>'2016-07-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e22',
            'id_medecin'=>9
        ] );

        Rapport::create( [
            'id'=>273,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d13',
            'id_medecin'=>855
        ] );

        Rapport::create( [
            'id'=>274,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e5',
            'id_medecin'=>545
        ] );

        Rapport::create( [
            'id'=>275,
            'date'=>'2016-07-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b50',
            'id_medecin'=>94
        ] );

        Rapport::create( [
            'id'=>276,
            'date'=>'2016-07-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d51',
            'id_medecin'=>802
        ] );

        Rapport::create( [
            'id'=>277,
            'date'=>'2016-07-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e49',
            'id_medecin'=>598
        ] );

        Rapport::create( [
            'id'=>278,
            'date'=>'2016-07-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e52',
            'id_medecin'=>291
        ] );

        Rapport::create( [
            'id'=>279,
            'date'=>'2016-07-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b25',
            'id_medecin'=>97
        ] );

        Rapport::create( [
            'id'=>280,
            'date'=>'2016-07-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a93',
            'id_medecin'=>718
        ] );

        Rapport::create( [
            'id'=>281,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e49',
            'id_medecin'=>103
        ] );

        Rapport::create( [
            'id'=>282,
            'date'=>'2016-07-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e52',
            'id_medecin'=>128
        ] );

        Rapport::create( [
            'id'=>283,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a55',
            'id_medecin'=>123
        ] );

        Rapport::create( [
            'id'=>284,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a55',
            'id_medecin'=>866
        ] );

        Rapport::create( [
            'id'=>285,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b19',
            'id_medecin'=>691
        ] );

        Rapport::create( [
            'id'=>286,
            'date'=>'2016-07-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e52',
            'id_medecin'=>632
        ] );

        Rapport::create( [
            'id'=>287,
            'date'=>'2016-07-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b34',
            'id_medecin'=>896
        ] );

        Rapport::create( [
            'id'=>288,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d51',
            'id_medecin'=>714
        ] );

        Rapport::create( [
            'id'=>289,
            'date'=>'2016-07-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e52',
            'id_medecin'=>284
        ] );

        Rapport::create( [
            'id'=>290,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a131',
            'id_medecin'=>993
        ] );

        Rapport::create( [
            'id'=>291,
            'date'=>'2016-07-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c54',
            'id_medecin'=>717
        ] );

        Rapport::create( [
            'id'=>292,
            'date'=>'2016-07-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b28',
            'id_medecin'=>375
        ] );

        Rapport::create( [
            'id'=>293,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'f21',
            'id_medecin'=>697
        ] );

        Rapport::create( [
            'id'=>294,
            'date'=>'2016-07-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a17',
            'id_medecin'=>53
        ] );

        Rapport::create( [
            'id'=>295,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c3',
            'id_medecin'=>446
        ] );

        Rapport::create( [
            'id'=>296,
            'date'=>'2016-07-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b19',
            'id_medecin'=>236
        ] );

        Rapport::create( [
            'id'=>297,
            'date'=>'2016-07-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c3',
            'id_medecin'=>222
        ] );

        Rapport::create( [
            'id'=>298,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>604
        ] );

        Rapport::create( [
            'id'=>299,
            'date'=>'2016-07-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a131',
            'id_medecin'=>959
        ] );

        Rapport::create( [
            'id'=>300,
            'date'=>'2016-07-16',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b28',
            'id_medecin'=>743
        ] );

        Rapport::create( [
            'id'=>301,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e22',
            'id_medecin'=>483
        ] );

        Rapport::create( [
            'id'=>302,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e52',
            'id_medecin'=>135
        ] );

        Rapport::create( [
            'id'=>303,
            'date'=>'2016-07-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a55',
            'id_medecin'=>670
        ] );

        Rapport::create( [
            'id'=>304,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'d13',
            'id_medecin'=>659
        ] );

        Rapport::create( [
            'id'=>305,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a131',
            'id_medecin'=>905
        ] );

        Rapport::create( [
            'id'=>306,
            'date'=>'2016-07-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b13',
            'id_medecin'=>334
        ] );

        Rapport::create( [
            'id'=>307,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'c3',
            'id_medecin'=>570
        ] );

        Rapport::create( [
            'id'=>308,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c14',
            'id_medecin'=>978
        ] );

        Rapport::create( [
            'id'=>309,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b50',
            'id_medecin'=>349
        ] );

        Rapport::create( [
            'id'=>310,
            'date'=>'2016-07-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b4',
            'id_medecin'=>742
        ] );

        Rapport::create( [
            'id'=>311,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c3',
            'id_medecin'=>334
        ] );

        Rapport::create( [
            'id'=>312,
            'date'=>'2016-07-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'c54',
            'id_medecin'=>577
        ] );

        Rapport::create( [
            'id'=>313,
            'date'=>'2016-07-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'c14',
            'id_medecin'=>154
        ] );

        Rapport::create( [
            'id'=>314,
            'date'=>'2016-07-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'c14',
            'id_medecin'=>871
        ] );

        Rapport::create( [
            'id'=>315,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a55',
            'id_medecin'=>486
        ] );

        Rapport::create( [
            'id'=>316,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e22',
            'id_medecin'=>551
        ] );

        Rapport::create( [
            'id'=>317,
            'date'=>'2016-07-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e49',
            'id_medecin'=>169
        ] );

        Rapport::create( [
            'id'=>318,
            'date'=>'2016-07-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b34',
            'id_medecin'=>707
        ] );

        Rapport::create( [
            'id'=>319,
            'date'=>'2016-07-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b4',
            'id_medecin'=>814
        ] );

        Rapport::create( [
            'id'=>320,
            'date'=>'2016-07-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c54',
            'id_medecin'=>69
        ] );

        Rapport::create( [
            'id'=>321,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'f21',
            'id_medecin'=>71
        ] );

        Rapport::create( [
            'id'=>322,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e39',
            'id_medecin'=>404
        ] );

        Rapport::create( [
            'id'=>323,
            'date'=>'2016-07-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c14',
            'id_medecin'=>895
        ] );

        Rapport::create( [
            'id'=>324,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b28',
            'id_medecin'=>175
        ] );

        Rapport::create( [
            'id'=>325,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'a131',
            'id_medecin'=>588
        ] );

        Rapport::create( [
            'id'=>326,
            'date'=>'2016-07-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b50',
            'id_medecin'=>314
        ] );

        Rapport::create( [
            'id'=>327,
            'date'=>'2016-07-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b16',
            'id_medecin'=>926
        ] );

        Rapport::create( [
            'id'=>328,
            'date'=>'2016-07-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b28',
            'id_medecin'=>970
        ] );

        Rapport::create( [
            'id'=>329,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e24',
            'id_medecin'=>466
        ] );

        Rapport::create( [
            'id'=>330,
            'date'=>'2016-07-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'f21',
            'id_medecin'=>955
        ] );

        Rapport::create( [
            'id'=>331,
            'date'=>'2016-07-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e5',
            'id_medecin'=>541
        ] );

        Rapport::create( [
            'id'=>332,
            'date'=>'2016-07-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a131',
            'id_medecin'=>21
        ] );

        Rapport::create( [
            'id'=>333,
            'date'=>'2016-07-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a55',
            'id_medecin'=>548
        ] );

        Rapport::create( [
            'id'=>334,
            'date'=>'2016-07-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'c3',
            'id_medecin'=>273
        ] );

        Rapport::create( [
            'id'=>335,
            'date'=>'2016-07-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>812
        ] );

        Rapport::create( [
            'id'=>336,
            'date'=>'2016-07-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b34',
            'id_medecin'=>625
        ] );

        Rapport::create( [
            'id'=>337,
            'date'=>'2016-07-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a55',
            'id_medecin'=>662
        ] );

        Rapport::create( [
            'id'=>338,
            'date'=>'2016-07-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e49',
            'id_medecin'=>65
        ] );

        Rapport::create( [
            'id'=>339,
            'date'=>'2016-07-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b19',
            'id_medecin'=>91
        ] );

        Rapport::create( [
            'id'=>340,
            'date'=>'2016-07-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>511
        ] );

        Rapport::create( [
            'id'=>341,
            'date'=>'2016-07-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'f39',
            'id_medecin'=>789
        ] );

        Rapport::create( [
            'id'=>342,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a93',
            'id_medecin'=>756
        ] );

        Rapport::create( [
            'id'=>343,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'f21',
            'id_medecin'=>711
        ] );

        Rapport::create( [
            'id'=>344,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e39',
            'id_medecin'=>481
        ] );

        Rapport::create( [
            'id'=>345,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b25',
            'id_medecin'=>203
        ] );

        Rapport::create( [
            'id'=>346,
            'date'=>'2016-07-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e5',
            'id_medecin'=>103
        ] );

        Rapport::create( [
            'id'=>347,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'b59',
            'id_medecin'=>796
        ] );

        Rapport::create( [
            'id'=>348,
            'date'=>'2016-07-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d51',
            'id_medecin'=>599
        ] );

        Rapport::create( [
            'id'=>349,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a17',
            'id_medecin'=>994
        ] );

        Rapport::create( [
            'id'=>350,
            'date'=>'2016-07-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a17',
            'id_medecin'=>506
        ] );

        Rapport::create( [
            'id'=>351,
            'date'=>'2016-07-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b16',
            'id_medecin'=>669
        ] );

        Rapport::create( [
            'id'=>352,
            'date'=>'2016-07-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c14',
            'id_medecin'=>935
        ] );

        Rapport::create( [
            'id'=>353,
            'date'=>'2016-07-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a17',
            'id_medecin'=>367
        ] );

        Rapport::create( [
            'id'=>354,
            'date'=>'2016-07-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a93',
            'id_medecin'=>385
        ] );

        Rapport::create( [
            'id'=>355,
            'date'=>'2016-07-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b34',
            'id_medecin'=>544
        ] );

        Rapport::create( [
            'id'=>356,
            'date'=>'2016-07-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'f39',
            'id_medecin'=>985
        ] );

        Rapport::create( [
            'id'=>357,
            'date'=>'2016-07-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'c54',
            'id_medecin'=>980
        ] );

        Rapport::create( [
            'id'=>358,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c54',
            'id_medecin'=>456
        ] );

        Rapport::create( [
            'id'=>359,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e24',
            'id_medecin'=>4
        ] );

        Rapport::create( [
            'id'=>360,
            'date'=>'2016-07-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b16',
            'id_medecin'=>318
        ] );

        Rapport::create( [
            'id'=>361,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c14',
            'id_medecin'=>19
        ] );

        Rapport::create( [
            'id'=>362,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'f21',
            'id_medecin'=>751
        ] );

        Rapport::create( [
            'id'=>363,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d51',
            'id_medecin'=>13
        ] );

        Rapport::create( [
            'id'=>364,
            'date'=>'2016-07-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b16',
            'id_medecin'=>104
        ] );

        Rapport::create( [
            'id'=>365,
            'date'=>'2016-07-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e5',
            'id_medecin'=>535
        ] );

        Rapport::create( [
            'id'=>366,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e5',
            'id_medecin'=>479
        ] );

        Rapport::create( [
            'id'=>367,
            'date'=>'2016-07-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b13',
            'id_medecin'=>876
        ] );

        Rapport::create( [
            'id'=>368,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b16',
            'id_medecin'=>137
        ] );

        Rapport::create( [
            'id'=>369,
            'date'=>'2016-07-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'a131',
            'id_medecin'=>736
        ] );

        Rapport::create( [
            'id'=>370,
            'date'=>'2016-07-20',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c3',
            'id_medecin'=>504
        ] );

        Rapport::create( [
            'id'=>371,
            'date'=>'2016-07-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c3',
            'id_medecin'=>407
        ] );

        Rapport::create( [
            'id'=>372,
            'date'=>'2016-07-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b19',
            'id_medecin'=>691
        ] );

        Rapport::create( [
            'id'=>373,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d13',
            'id_medecin'=>938
        ] );

        Rapport::create( [
            'id'=>374,
            'date'=>'2016-07-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e49',
            'id_medecin'=>4
        ] );

        Rapport::create( [
            'id'=>375,
            'date'=>'2016-07-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e5',
            'id_medecin'=>830
        ] );

        Rapport::create( [
            'id'=>376,
            'date'=>'2016-07-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b13',
            'id_medecin'=>276
        ] );

        Rapport::create( [
            'id'=>377,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b34',
            'id_medecin'=>173
        ] );

        Rapport::create( [
            'id'=>378,
            'date'=>'2016-07-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b25',
            'id_medecin'=>424
        ] );

        Rapport::create( [
            'id'=>379,
            'date'=>'2016-07-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a93',
            'id_medecin'=>628
        ] );

        Rapport::create( [
            'id'=>380,
            'date'=>'2016-07-20',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b34',
            'id_medecin'=>587
        ] );

        Rapport::create( [
            'id'=>381,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b28',
            'id_medecin'=>913
        ] );

        Rapport::create( [
            'id'=>382,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e39',
            'id_medecin'=>985
        ] );

        Rapport::create( [
            'id'=>383,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'a17',
            'id_medecin'=>750
        ] );

        Rapport::create( [
            'id'=>384,
            'date'=>'2016-07-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b34',
            'id_medecin'=>317
        ] );

        Rapport::create( [
            'id'=>385,
            'date'=>'2016-07-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'f21',
            'id_medecin'=>584
        ] );

        Rapport::create( [
            'id'=>386,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b16',
            'id_medecin'=>55
        ] );

        Rapport::create( [
            'id'=>387,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b25',
            'id_medecin'=>982
        ] );

        Rapport::create( [
            'id'=>388,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a131',
            'id_medecin'=>238
        ] );

        Rapport::create( [
            'id'=>389,
            'date'=>'2016-07-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b59',
            'id_medecin'=>644
        ] );

        Rapport::create( [
            'id'=>390,
            'date'=>'2016-07-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e24',
            'id_medecin'=>168
        ] );

        Rapport::create( [
            'id'=>391,
            'date'=>'2016-07-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'f21',
            'id_medecin'=>476
        ] );

        Rapport::create( [
            'id'=>392,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b28',
            'id_medecin'=>926
        ] );

        Rapport::create( [
            'id'=>393,
            'date'=>'2016-07-21',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'f21',
            'id_medecin'=>694
        ] );

        Rapport::create( [
            'id'=>394,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b34',
            'id_medecin'=>294
        ] );

        Rapport::create( [
            'id'=>395,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c3',
            'id_medecin'=>329
        ] );

        Rapport::create( [
            'id'=>396,
            'date'=>'2016-07-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b50',
            'id_medecin'=>22
        ] );

        Rapport::create( [
            'id'=>397,
            'date'=>'2016-07-21',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a17',
            'id_medecin'=>843
        ] );

        Rapport::create( [
            'id'=>398,
            'date'=>'2016-07-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c3',
            'id_medecin'=>428
        ] );

        Rapport::create( [
            'id'=>399,
            'date'=>'2016-07-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e5',
            'id_medecin'=>867
        ] );

        Rapport::create( [
            'id'=>400,
            'date'=>'2016-07-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'d13',
            'id_medecin'=>810
        ] );

        Rapport::create( [
            'id'=>401,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a131',
            'id_medecin'=>720
        ] );

        Rapport::create( [
            'id'=>402,
            'date'=>'2016-07-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e24',
            'id_medecin'=>910
        ] );

        Rapport::create( [
            'id'=>403,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b34',
            'id_medecin'=>467
        ] );

        Rapport::create( [
            'id'=>404,
            'date'=>'2016-07-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b13',
            'id_medecin'=>908
        ] );

        Rapport::create( [
            'id'=>405,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b59',
            'id_medecin'=>629
        ] );

        Rapport::create( [
            'id'=>406,
            'date'=>'2016-07-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d51',
            'id_medecin'=>253
        ] );

        Rapport::create( [
            'id'=>407,
            'date'=>'2016-07-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b13',
            'id_medecin'=>702
        ] );

        Rapport::create( [
            'id'=>408,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b13',
            'id_medecin'=>549
        ] );

        Rapport::create( [
            'id'=>409,
            'date'=>'2016-07-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b50',
            'id_medecin'=>651
        ] );

        Rapport::create( [
            'id'=>410,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e24',
            'id_medecin'=>640
        ] );

        Rapport::create( [
            'id'=>411,
            'date'=>'2016-07-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'f21',
            'id_medecin'=>80
        ] );

        Rapport::create( [
            'id'=>412,
            'date'=>'2016-07-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e22',
            'id_medecin'=>108
        ] );

        Rapport::create( [
            'id'=>413,
            'date'=>'2016-07-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'f21',
            'id_medecin'=>179
        ] );

        Rapport::create( [
            'id'=>414,
            'date'=>'2016-07-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b28',
            'id_medecin'=>406
        ] );

        Rapport::create( [
            'id'=>415,
            'date'=>'2016-07-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b59',
            'id_medecin'=>749
        ] );

        Rapport::create( [
            'id'=>416,
            'date'=>'2016-07-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'f39',
            'id_medecin'=>420
        ] );

        Rapport::create( [
            'id'=>417,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e39',
            'id_medecin'=>968
        ] );

        Rapport::create( [
            'id'=>418,
            'date'=>'2016-07-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a55',
            'id_medecin'=>192
        ] );

        Rapport::create( [
            'id'=>419,
            'date'=>'2016-07-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c3',
            'id_medecin'=>340
        ] );

        Rapport::create( [
            'id'=>420,
            'date'=>'2016-07-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e52',
            'id_medecin'=>146
        ] );

        Rapport::create( [
            'id'=>421,
            'date'=>'2016-07-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'a17',
            'id_medecin'=>978
        ] );

        Rapport::create( [
            'id'=>422,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'b28',
            'id_medecin'=>678
        ] );

        Rapport::create( [
            'id'=>423,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'f39',
            'id_medecin'=>68
        ] );

        Rapport::create( [
            'id'=>424,
            'date'=>'2016-07-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b59',
            'id_medecin'=>23
        ] );

        Rapport::create( [
            'id'=>425,
            'date'=>'2016-07-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a55',
            'id_medecin'=>549
        ] );

        Rapport::create( [
            'id'=>426,
            'date'=>'2016-07-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a93',
            'id_medecin'=>115
        ] );

        Rapport::create( [
            'id'=>427,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a131',
            'id_medecin'=>375
        ] );

        Rapport::create( [
            'id'=>428,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e5',
            'id_medecin'=>100
        ] );

        Rapport::create( [
            'id'=>429,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'f21',
            'id_medecin'=>116
        ] );

        Rapport::create( [
            'id'=>430,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'e5',
            'id_medecin'=>989
        ] );

        Rapport::create( [
            'id'=>431,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c3',
            'id_medecin'=>931
        ] );

        Rapport::create( [
            'id'=>432,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'f21',
            'id_medecin'=>159
        ] );

        Rapport::create( [
            'id'=>433,
            'date'=>'2016-07-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b13',
            'id_medecin'=>23
        ] );

        Rapport::create( [
            'id'=>434,
            'date'=>'2016-07-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e49',
            'id_medecin'=>43
        ] );

        Rapport::create( [
            'id'=>435,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a93',
            'id_medecin'=>783
        ] );

        Rapport::create( [
            'id'=>436,
            'date'=>'2016-07-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b19',
            'id_medecin'=>443
        ] );

        Rapport::create( [
            'id'=>437,
            'date'=>'2016-07-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b16',
            'id_medecin'=>930
        ] );

        Rapport::create( [
            'id'=>438,
            'date'=>'2016-07-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a17',
            'id_medecin'=>157
        ] );

        Rapport::create( [
            'id'=>439,
            'date'=>'2016-07-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a17',
            'id_medecin'=>177
        ] );

        Rapport::create( [
            'id'=>440,
            'date'=>'2016-07-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c3',
            'id_medecin'=>831
        ] );

        Rapport::create( [
            'id'=>441,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'f39',
            'id_medecin'=>881
        ] );

        Rapport::create( [
            'id'=>442,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c54',
            'id_medecin'=>519
        ] );

        Rapport::create( [
            'id'=>443,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b16',
            'id_medecin'=>6
        ] );

        Rapport::create( [
            'id'=>444,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'f39',
            'id_medecin'=>556
        ] );

        Rapport::create( [
            'id'=>445,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e24',
            'id_medecin'=>681
        ] );

        Rapport::create( [
            'id'=>446,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'a55',
            'id_medecin'=>39
        ] );

        Rapport::create( [
            'id'=>447,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'b4',
            'id_medecin'=>408
        ] );

        Rapport::create( [
            'id'=>448,
            'date'=>'2016-07-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e49',
            'id_medecin'=>719
        ] );

        Rapport::create( [
            'id'=>449,
            'date'=>'2016-07-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'f39',
            'id_medecin'=>148
        ] );

        Rapport::create( [
            'id'=>450,
            'date'=>'2016-07-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'d13',
            'id_medecin'=>330
        ] );

        Rapport::create( [
            'id'=>451,
            'date'=>'2016-07-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b50',
            'id_medecin'=>139
        ] );

        Rapport::create( [
            'id'=>452,
            'date'=>'2016-07-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b25',
            'id_medecin'=>538
        ] );

        Rapport::create( [
            'id'=>453,
            'date'=>'2016-07-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b25',
            'id_medecin'=>99
        ] );

        Rapport::create( [
            'id'=>454,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a131',
            'id_medecin'=>815
        ] );

        Rapport::create( [
            'id'=>455,
            'date'=>'2016-07-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b4',
            'id_medecin'=>784
        ] );

        Rapport::create( [
            'id'=>456,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b16',
            'id_medecin'=>813
        ] );

        Rapport::create( [
            'id'=>457,
            'date'=>'2016-07-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'c54',
            'id_medecin'=>590
        ] );

        Rapport::create( [
            'id'=>458,
            'date'=>'2016-07-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c54',
            'id_medecin'=>495
        ] );

        Rapport::create( [
            'id'=>459,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b4',
            'id_medecin'=>129
        ] );

        Rapport::create( [
            'id'=>460,
            'date'=>'2016-07-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e5',
            'id_medecin'=>434
        ] );

        Rapport::create( [
            'id'=>461,
            'date'=>'2016-07-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b25',
            'id_medecin'=>794
        ] );

        Rapport::create( [
            'id'=>462,
            'date'=>'2016-07-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b25',
            'id_medecin'=>507
        ] );

        Rapport::create( [
            'id'=>463,
            'date'=>'2016-07-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b4',
            'id_medecin'=>12
        ] );

        Rapport::create( [
            'id'=>464,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e5',
            'id_medecin'=>80
        ] );

        Rapport::create( [
            'id'=>465,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a17',
            'id_medecin'=>685
        ] );

        Rapport::create( [
            'id'=>466,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b4',
            'id_medecin'=>260
        ] );

        Rapport::create( [
            'id'=>467,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d13',
            'id_medecin'=>18
        ] );

        Rapport::create( [
            'id'=>468,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b19',
            'id_medecin'=>780
        ] );

        Rapport::create( [
            'id'=>469,
            'date'=>'2016-07-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a131',
            'id_medecin'=>608
        ] );

        Rapport::create( [
            'id'=>470,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b50',
            'id_medecin'=>335
        ] );

        Rapport::create( [
            'id'=>471,
            'date'=>'2016-07-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b28',
            'id_medecin'=>988
        ] );

        Rapport::create( [
            'id'=>472,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c14',
            'id_medecin'=>610
        ] );

        Rapport::create( [
            'id'=>473,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'d51',
            'id_medecin'=>919
        ] );

        Rapport::create( [
            'id'=>474,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f39',
            'id_medecin'=>63
        ] );

        Rapport::create( [
            'id'=>475,
            'date'=>'2016-07-25',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'e52',
            'id_medecin'=>548
        ] );

        Rapport::create( [
            'id'=>476,
            'date'=>'2016-07-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a131',
            'id_medecin'=>393
        ] );

        Rapport::create( [
            'id'=>477,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'f21',
            'id_medecin'=>16
        ] );

        Rapport::create( [
            'id'=>478,
            'date'=>'2016-07-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b16',
            'id_medecin'=>23
        ] );

        Rapport::create( [
            'id'=>479,
            'date'=>'2016-07-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b59',
            'id_medecin'=>333
        ] );

        Rapport::create( [
            'id'=>480,
            'date'=>'2016-07-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e49',
            'id_medecin'=>309
        ] );

        Rapport::create( [
            'id'=>481,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b50',
            'id_medecin'=>143
        ] );

        Rapport::create( [
            'id'=>482,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e5',
            'id_medecin'=>872
        ] );

        Rapport::create( [
            'id'=>483,
            'date'=>'2016-07-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b13',
            'id_medecin'=>841
        ] );

        Rapport::create( [
            'id'=>484,
            'date'=>'2016-07-26',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b16',
            'id_medecin'=>943
        ] );

        Rapport::create( [
            'id'=>485,
            'date'=>'2016-07-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>818
        ] );

        Rapport::create( [
            'id'=>486,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e39',
            'id_medecin'=>293
        ] );

        Rapport::create( [
            'id'=>487,
            'date'=>'2016-07-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>176
        ] );

        Rapport::create( [
            'id'=>488,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d51',
            'id_medecin'=>31
        ] );

        Rapport::create( [
            'id'=>489,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b19',
            'id_medecin'=>85
        ] );

        Rapport::create( [
            'id'=>490,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b13',
            'id_medecin'=>546
        ] );

        Rapport::create( [
            'id'=>491,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a17',
            'id_medecin'=>841
        ] );

        Rapport::create( [
            'id'=>492,
            'date'=>'2016-07-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b59',
            'id_medecin'=>278
        ] );

        Rapport::create( [
            'id'=>493,
            'date'=>'2016-07-26',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b19',
            'id_medecin'=>453
        ] );

        Rapport::create( [
            'id'=>494,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'d51',
            'id_medecin'=>792
        ] );

        Rapport::create( [
            'id'=>495,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'a131',
            'id_medecin'=>566
        ] );

        Rapport::create( [
            'id'=>496,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b13',
            'id_medecin'=>305
        ] );

        Rapport::create( [
            'id'=>497,
            'date'=>'2016-07-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'d13',
            'id_medecin'=>948
        ] );

        Rapport::create( [
            'id'=>498,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'a93',
            'id_medecin'=>184
        ] );

        Rapport::create( [
            'id'=>499,
            'date'=>'2016-07-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a17',
            'id_medecin'=>571
        ] );

        Rapport::create( [
            'id'=>500,
            'date'=>'2016-07-26',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b13',
            'id_medecin'=>784
        ] );

        Rapport::create( [
            'id'=>501,
            'date'=>'2016-07-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d51',
            'id_medecin'=>168
        ] );

        Rapport::create( [
            'id'=>502,
            'date'=>'2016-07-27',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e22',
            'id_medecin'=>224
        ] );

        Rapport::create( [
            'id'=>503,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e5',
            'id_medecin'=>627
        ] );

        Rapport::create( [
            'id'=>504,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'f21',
            'id_medecin'=>45
        ] );

        Rapport::create( [
            'id'=>505,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c3',
            'id_medecin'=>967
        ] );

        Rapport::create( [
            'id'=>506,
            'date'=>'2016-07-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d13',
            'id_medecin'=>358
        ] );

        Rapport::create( [
            'id'=>507,
            'date'=>'2016-07-27',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e22',
            'id_medecin'=>758
        ] );

        Rapport::create( [
            'id'=>508,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b28',
            'id_medecin'=>278
        ] );

        Rapport::create( [
            'id'=>509,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b4',
            'id_medecin'=>147
        ] );

        Rapport::create( [
            'id'=>510,
            'date'=>'2016-07-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e52',
            'id_medecin'=>47
        ] );

        Rapport::create( [
            'id'=>511,
            'date'=>'2016-07-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a131',
            'id_medecin'=>192
        ] );

        Rapport::create( [
            'id'=>512,
            'date'=>'2016-07-27',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b25',
            'id_medecin'=>129
        ] );

        Rapport::create( [
            'id'=>513,
            'date'=>'2016-07-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'d51',
            'id_medecin'=>711
        ] );

        Rapport::create( [
            'id'=>514,
            'date'=>'2016-07-27',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a17',
            'id_medecin'=>628
        ] );

        Rapport::create( [
            'id'=>515,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e39',
            'id_medecin'=>327
        ] );

        Rapport::create( [
            'id'=>516,
            'date'=>'2016-07-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b25',
            'id_medecin'=>831
        ] );

        Rapport::create( [
            'id'=>517,
            'date'=>'2016-07-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'d13',
            'id_medecin'=>664
        ] );

        Rapport::create( [
            'id'=>518,
            'date'=>'2016-07-27',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a131',
            'id_medecin'=>914
        ] );

        Rapport::create( [
            'id'=>519,
            'date'=>'2016-07-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c3',
            'id_medecin'=>344
        ] );

        Rapport::create( [
            'id'=>520,
            'date'=>'2016-07-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a17',
            'id_medecin'=>873
        ] );

        Rapport::create( [
            'id'=>521,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a93',
            'id_medecin'=>900
        ] );

        Rapport::create( [
            'id'=>522,
            'date'=>'2016-07-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e5',
            'id_medecin'=>752
        ] );

        Rapport::create( [
            'id'=>523,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b28',
            'id_medecin'=>708
        ] );

        Rapport::create( [
            'id'=>524,
            'date'=>'2016-07-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c14',
            'id_medecin'=>459
        ] );

        Rapport::create( [
            'id'=>525,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a17',
            'id_medecin'=>709
        ] );

        Rapport::create( [
            'id'=>526,
            'date'=>'2016-07-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>821
        ] );

        Rapport::create( [
            'id'=>527,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e5',
            'id_medecin'=>886
        ] );

        Rapport::create( [
            'id'=>528,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a55',
            'id_medecin'=>400
        ] );

        Rapport::create( [
            'id'=>529,
            'date'=>'2016-07-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>943
        ] );

        Rapport::create( [
            'id'=>530,
            'date'=>'2016-07-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b4',
            'id_medecin'=>495
        ] );

        Rapport::create( [
            'id'=>531,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b59',
            'id_medecin'=>437
        ] );

        Rapport::create( [
            'id'=>532,
            'date'=>'2016-07-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e22',
            'id_medecin'=>265
        ] );

        Rapport::create( [
            'id'=>533,
            'date'=>'2016-07-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b19',
            'id_medecin'=>321
        ] );

        Rapport::create( [
            'id'=>534,
            'date'=>'2016-07-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a131',
            'id_medecin'=>142
        ] );

        Rapport::create( [
            'id'=>535,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e52',
            'id_medecin'=>684
        ] );

        Rapport::create( [
            'id'=>536,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a55',
            'id_medecin'=>471
        ] );

        Rapport::create( [
            'id'=>537,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b50',
            'id_medecin'=>322
        ] );

        Rapport::create( [
            'id'=>538,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'d13',
            'id_medecin'=>703
        ] );

        Rapport::create( [
            'id'=>539,
            'date'=>'2016-07-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a131',
            'id_medecin'=>971
        ] );

        Rapport::create( [
            'id'=>540,
            'date'=>'2016-07-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b28',
            'id_medecin'=>700
        ] );

        Rapport::create( [
            'id'=>541,
            'date'=>'2016-07-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e52',
            'id_medecin'=>580
        ] );

        Rapport::create( [
            'id'=>542,
            'date'=>'2016-07-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a131',
            'id_medecin'=>885
        ] );

        Rapport::create( [
            'id'=>543,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b25',
            'id_medecin'=>493
        ] );

        Rapport::create( [
            'id'=>544,
            'date'=>'2016-07-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e24',
            'id_medecin'=>699
        ] );

        Rapport::create( [
            'id'=>545,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'e39',
            'id_medecin'=>566
        ] );

        Rapport::create( [
            'id'=>546,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b19',
            'id_medecin'=>411
        ] );

        Rapport::create( [
            'id'=>547,
            'date'=>'2016-07-29',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c14',
            'id_medecin'=>790
        ] );

        Rapport::create( [
            'id'=>548,
            'date'=>'2016-07-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'f39',
            'id_medecin'=>184
        ] );

        Rapport::create( [
            'id'=>549,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'d13',
            'id_medecin'=>152
        ] );

        Rapport::create( [
            'id'=>550,
            'date'=>'2016-07-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a131',
            'id_medecin'=>865
        ] );

        Rapport::create( [
            'id'=>551,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b50',
            'id_medecin'=>619
        ] );

        Rapport::create( [
            'id'=>552,
            'date'=>'2016-07-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b16',
            'id_medecin'=>78
        ] );

        Rapport::create( [
            'id'=>553,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a93',
            'id_medecin'=>127
        ] );

        Rapport::create( [
            'id'=>554,
            'date'=>'2016-07-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e5',
            'id_medecin'=>682
        ] );

        Rapport::create( [
            'id'=>555,
            'date'=>'2016-07-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a93',
            'id_medecin'=>917
        ] );

        Rapport::create( [
            'id'=>556,
            'date'=>'2016-07-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c3',
            'id_medecin'=>864
        ] );

        Rapport::create( [
            'id'=>557,
            'date'=>'2016-07-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c14',
            'id_medecin'=>316
        ] );

        Rapport::create( [
            'id'=>558,
            'date'=>'2016-07-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c54',
            'id_medecin'=>320
        ] );

        Rapport::create( [
            'id'=>559,
            'date'=>'2016-07-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'d51',
            'id_medecin'=>274
        ] );

        Rapport::create( [
            'id'=>560,
            'date'=>'2016-07-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a55',
            'id_medecin'=>298
        ] );

        Rapport::create( [
            'id'=>561,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'f21',
            'id_medecin'=>33
        ] );

        Rapport::create( [
            'id'=>562,
            'date'=>'2016-07-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b59',
            'id_medecin'=>205
        ] );

        Rapport::create( [
            'id'=>563,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e39',
            'id_medecin'=>611
        ] );

        Rapport::create( [
            'id'=>564,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c54',
            'id_medecin'=>635
        ] );

        Rapport::create( [
            'id'=>565,
            'date'=>'2016-07-30',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b16',
            'id_medecin'=>205
        ] );

        Rapport::create( [
            'id'=>566,
            'date'=>'2016-07-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'f39',
            'id_medecin'=>251
        ] );

        Rapport::create( [
            'id'=>567,
            'date'=>'2016-07-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a93',
            'id_medecin'=>788
        ] );

        Rapport::create( [
            'id'=>568,
            'date'=>'2016-07-30',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e24',
            'id_medecin'=>748
        ] );

        Rapport::create( [
            'id'=>569,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c3',
            'id_medecin'=>813
        ] );

        Rapport::create( [
            'id'=>570,
            'date'=>'2016-07-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'f39',
            'id_medecin'=>542
        ] );

        Rapport::create( [
            'id'=>574,
            'date'=>'2016-11-24',
            'motif'=>'installation récente',
            'bilan'=>'très positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>172
        ] );

        Rapport::create( [
            'id'=>575,
            'date'=>'2016-11-22',
            'motif'=>'installation récente',
            'bilan'=>'très positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>443
        ] );

        Rapport::create( [
            'id'=>576,
            'date'=>'2016-11-22',
            'motif'=>'installation récente',
            'bilan'=>'très positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>521
        ] );

        Rapport::create( [
            'id'=>577,
            'date'=>'2016-11-17',
            'motif'=>'nouveau',
            'bilan'=>'positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>41
        ] );

        Rapport::create( [
            'id'=>578,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>821
        ] );

        Rapport::create( [
            'id'=>579,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>821
        ] );

        Rapport::create( [
            'id'=>580,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>821
        ] );

        Rapport::create( [
            'id'=>581,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>821
        ] );

        Rapport::create( [
            'id'=>582,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>821
        ] );

        Rapport::create( [
            'id'=>583,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>821
        ] );

        Rapport::create( [
            'id'=>584,
            'date'=>'2016-11-09',
            'motif'=>'installation',
            'bilan'=>'positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>821
        ] );

        Rapport::create( [
            'id'=>585,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b16',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>586,
            'date'=>'2014-08-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a93',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>588,
            'date'=>'2015-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>589,
            'date'=>'2013-09-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e49',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>590,
            'date'=>'2017-02-05',
            'motif'=>'Conseil d\'un collègue',
            'bilan'=>'Très positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>28
        ] );

        Rapport::create( [
            'id'=>591,
            'date'=>'2016-07-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b16',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>593,
            'date'=>'2015-07-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a93',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>594,
            'date'=>'2015-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>596,
            'date'=>'2016-11-05',
            'motif'=>'Nouveau médecin, prise de contact',
            'bilan'=>'Très positif, très intéressé, à revoir au plus vite',
            'id_visiteur'=>'a131',
            'id_medecin'=>614
        ] );

        Rapport::create( [
            'id'=>597,
            'date'=>'2016-11-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très pressé, peu ouvert mais très courtois, écoute avec intérêt. En attente de résultats',
            'id_visiteur'=>'a131',
            'id_medecin'=>87
        ] );

        Rapport::create( [
            'id'=>598,
            'date'=>'2017-02-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Intéressée, je dois la revoir le mois prochain ou dans deux mois, prévoir un rendez-vous',
            'id_visiteur'=>'a131',
            'id_medecin'=>577
        ] );

        Rapport::create( [
            'id'=>602,
            'date'=>'2017-02-05',
            'motif'=>'Visite demandée',
            'bilan'=>'A revoir',
            'id_visiteur'=>'a131',
            'id_medecin'=>299
        ] );

        Rapport::create( [
            'id'=>603,
            'date'=>'2017-03-02',
            'motif'=>'zaza',
            'bilan'=>'zaaza',
            'id_visiteur'=>'a131',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>604,
            'date'=>'2017-03-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Positif, à revoir dans 3 mois',
            'id_visiteur'=>'a131',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>605,
            'date'=>'2016-10-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>28
        ] );

        Rapport::create( [
            'id'=>607,
            'date'=>'2017-03-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Positif',
            'id_visiteur'=>'a131',
            'id_medecin'=>454
        ] );

        Rapport::create( [
            'id'=>611,
            'date'=>'2017-03-01',
            'motif'=>'aaa',
            'bilan'=>'aaaa',
            'id_visiteur'=>'a131',
            'id_medecin'=>577
        ] );

        Rapport::create( [
            'id'=>620,
            'date'=>'2016-12-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c14',
            'id_medecin'=>1
        ] );

        Rapport::create( [
            'id'=>621,
            'date'=>'2017-02-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b13',
            'id_medecin'=>2
        ] );

        Rapport::create( [
            'id'=>622,
            'date'=>'2017-03-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'d51',
            'id_medecin'=>3
        ] );

        Rapport::create( [
            'id'=>623,
            'date'=>'2017-02-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a93',
            'id_medecin'=>4
        ] );

        Rapport::create( [
            'id'=>624,
            'date'=>'2016-10-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b4',
            'id_medecin'=>5
        ] );

        Rapport::create( [
            'id'=>625,
            'date'=>'2017-03-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a131',
            'id_medecin'=>6
        ] );

        Rapport::create( [
            'id'=>626,
            'date'=>'2016-11-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a131',
            'id_medecin'=>7
        ] );

        Rapport::create( [
            'id'=>627,
            'date'=>'2016-12-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b25',
            'id_medecin'=>8
        ] );

        Rapport::create( [
            'id'=>628,
            'date'=>'2017-03-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b13',
            'id_medecin'=>9
        ] );

        Rapport::create( [
            'id'=>629,
            'date'=>'2016-10-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b25',
            'id_medecin'=>10
        ] );

        Rapport::create( [
            'id'=>630,
            'date'=>'2017-02-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e39',
            'id_medecin'=>11
        ] );

        Rapport::create( [
            'id'=>631,
            'date'=>'2016-10-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>12
        ] );

        Rapport::create( [
            'id'=>632,
            'date'=>'2017-03-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c3',
            'id_medecin'=>13
        ] );

        Rapport::create( [
            'id'=>633,
            'date'=>'2017-03-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e22',
            'id_medecin'=>14
        ] );

        Rapport::create( [
            'id'=>634,
            'date'=>'2016-11-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b13',
            'id_medecin'=>15
        ] );

        Rapport::create( [
            'id'=>635,
            'date'=>'2017-02-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a55',
            'id_medecin'=>16
        ] );

        Rapport::create( [
            'id'=>636,
            'date'=>'2017-02-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c3',
            'id_medecin'=>17
        ] );

        Rapport::create( [
            'id'=>637,
            'date'=>'2017-02-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'f39',
            'id_medecin'=>18
        ] );

        Rapport::create( [
            'id'=>638,
            'date'=>'2017-02-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b50',
            'id_medecin'=>19
        ] );

        Rapport::create( [
            'id'=>639,
            'date'=>'2017-03-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b25',
            'id_medecin'=>20
        ] );

        Rapport::create( [
            'id'=>640,
            'date'=>'2017-03-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b13',
            'id_medecin'=>21
        ] );

        Rapport::create( [
            'id'=>641,
            'date'=>'2016-11-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'c3',
            'id_medecin'=>22
        ] );

        Rapport::create( [
            'id'=>642,
            'date'=>'2016-11-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b59',
            'id_medecin'=>23
        ] );

        Rapport::create( [
            'id'=>643,
            'date'=>'2017-03-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d13',
            'id_medecin'=>24
        ] );

        Rapport::create( [
            'id'=>644,
            'date'=>'2017-02-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b25',
            'id_medecin'=>25
        ] );

        Rapport::create( [
            'id'=>645,
            'date'=>'2016-10-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e5',
            'id_medecin'=>26
        ] );

        Rapport::create( [
            'id'=>646,
            'date'=>'2016-11-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b34',
            'id_medecin'=>27
        ] );

        Rapport::create( [
            'id'=>647,
            'date'=>'2017-02-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b28',
            'id_medecin'=>28
        ] );

        Rapport::create( [
            'id'=>648,
            'date'=>'2017-02-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e49',
            'id_medecin'=>29
        ] );

        Rapport::create( [
            'id'=>649,
            'date'=>'2017-03-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c54',
            'id_medecin'=>30
        ] );

        Rapport::create( [
            'id'=>650,
            'date'=>'2016-12-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'d13',
            'id_medecin'=>31
        ] );

        Rapport::create( [
            'id'=>651,
            'date'=>'2016-10-01',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a131',
            'id_medecin'=>32
        ] );

        Rapport::create( [
            'id'=>652,
            'date'=>'2017-02-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a93',
            'id_medecin'=>33
        ] );

        Rapport::create( [
            'id'=>653,
            'date'=>'2017-03-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'d51',
            'id_medecin'=>34
        ] );

        Rapport::create( [
            'id'=>654,
            'date'=>'2017-04-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e22',
            'id_medecin'=>35
        ] );

        Rapport::create( [
            'id'=>655,
            'date'=>'2016-11-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'d51',
            'id_medecin'=>36
        ] );

        Rapport::create( [
            'id'=>656,
            'date'=>'2016-11-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e24',
            'id_medecin'=>37
        ] );

        Rapport::create( [
            'id'=>657,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a131',
            'id_medecin'=>38
        ] );

        Rapport::create( [
            'id'=>658,
            'date'=>'2017-04-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e52',
            'id_medecin'=>39
        ] );

        Rapport::create( [
            'id'=>659,
            'date'=>'2017-03-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e22',
            'id_medecin'=>40
        ] );

        Rapport::create( [
            'id'=>660,
            'date'=>'2016-12-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d51',
            'id_medecin'=>41
        ] );

        Rapport::create( [
            'id'=>661,
            'date'=>'2017-02-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a55',
            'id_medecin'=>42
        ] );

        Rapport::create( [
            'id'=>662,
            'date'=>'2017-03-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c14',
            'id_medecin'=>43
        ] );

        Rapport::create( [
            'id'=>663,
            'date'=>'2017-02-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b13',
            'id_medecin'=>44
        ] );

        Rapport::create( [
            'id'=>664,
            'date'=>'2016-12-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b4',
            'id_medecin'=>45
        ] );

        Rapport::create( [
            'id'=>665,
            'date'=>'2017-03-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'f21',
            'id_medecin'=>46
        ] );

        Rapport::create( [
            'id'=>666,
            'date'=>'2016-11-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b19',
            'id_medecin'=>47
        ] );

        Rapport::create( [
            'id'=>667,
            'date'=>'2017-02-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'d51',
            'id_medecin'=>48
        ] );

        Rapport::create( [
            'id'=>668,
            'date'=>'2017-01-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b25',
            'id_medecin'=>49
        ] );

        Rapport::create( [
            'id'=>669,
            'date'=>'2017-01-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b59',
            'id_medecin'=>50
        ] );

        Rapport::create( [
            'id'=>670,
            'date'=>'2016-10-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c3',
            'id_medecin'=>51
        ] );

        Rapport::create( [
            'id'=>671,
            'date'=>'2017-03-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e49',
            'id_medecin'=>52
        ] );

        Rapport::create( [
            'id'=>672,
            'date'=>'2016-11-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a55',
            'id_medecin'=>53
        ] );

        Rapport::create( [
            'id'=>673,
            'date'=>'2017-03-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e5',
            'id_medecin'=>54
        ] );

        Rapport::create( [
            'id'=>674,
            'date'=>'2016-10-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'f39',
            'id_medecin'=>55
        ] );

        Rapport::create( [
            'id'=>675,
            'date'=>'2017-01-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'d13',
            'id_medecin'=>56
        ] );

        Rapport::create( [
            'id'=>676,
            'date'=>'2017-03-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b59',
            'id_medecin'=>57
        ] );

        Rapport::create( [
            'id'=>677,
            'date'=>'2017-02-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a55',
            'id_medecin'=>58
        ] );

        Rapport::create( [
            'id'=>678,
            'date'=>'2017-02-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b13',
            'id_medecin'=>59
        ] );

        Rapport::create( [
            'id'=>679,
            'date'=>'2017-02-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'a17',
            'id_medecin'=>60
        ] );

        Rapport::create( [
            'id'=>680,
            'date'=>'2016-12-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'f21',
            'id_medecin'=>61
        ] );

        Rapport::create( [
            'id'=>681,
            'date'=>'2017-02-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a17',
            'id_medecin'=>62
        ] );

        Rapport::create( [
            'id'=>682,
            'date'=>'2016-11-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e39',
            'id_medecin'=>63
        ] );

        Rapport::create( [
            'id'=>683,
            'date'=>'2017-03-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e39',
            'id_medecin'=>64
        ] );

        Rapport::create( [
            'id'=>684,
            'date'=>'2016-11-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d13',
            'id_medecin'=>65
        ] );

        Rapport::create( [
            'id'=>685,
            'date'=>'2016-11-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a55',
            'id_medecin'=>66
        ] );

        Rapport::create( [
            'id'=>686,
            'date'=>'2016-10-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e39',
            'id_medecin'=>67
        ] );

        Rapport::create( [
            'id'=>687,
            'date'=>'2016-10-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'f39',
            'id_medecin'=>68
        ] );

        Rapport::create( [
            'id'=>688,
            'date'=>'2017-02-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a55',
            'id_medecin'=>69
        ] );

        Rapport::create( [
            'id'=>689,
            'date'=>'2016-11-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a131',
            'id_medecin'=>70
        ] );

        Rapport::create( [
            'id'=>690,
            'date'=>'2016-12-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b16',
            'id_medecin'=>71
        ] );

        Rapport::create( [
            'id'=>691,
            'date'=>'2017-04-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e39',
            'id_medecin'=>72
        ] );

        Rapport::create( [
            'id'=>692,
            'date'=>'2016-10-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b4',
            'id_medecin'=>73
        ] );

        Rapport::create( [
            'id'=>693,
            'date'=>'2016-12-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c14',
            'id_medecin'=>74
        ] );

        Rapport::create( [
            'id'=>694,
            'date'=>'2016-12-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b16',
            'id_medecin'=>75
        ] );

        Rapport::create( [
            'id'=>695,
            'date'=>'2016-12-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c14',
            'id_medecin'=>76
        ] );

        Rapport::create( [
            'id'=>696,
            'date'=>'2016-11-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b59',
            'id_medecin'=>77
        ] );

        Rapport::create( [
            'id'=>697,
            'date'=>'2016-12-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e49',
            'id_medecin'=>78
        ] );

        Rapport::create( [
            'id'=>698,
            'date'=>'2016-11-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b19',
            'id_medecin'=>79
        ] );

        Rapport::create( [
            'id'=>699,
            'date'=>'2017-02-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b13',
            'id_medecin'=>80
        ] );

        Rapport::create( [
            'id'=>700,
            'date'=>'2016-11-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d13',
            'id_medecin'=>81
        ] );

        Rapport::create( [
            'id'=>701,
            'date'=>'2017-03-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b25',
            'id_medecin'=>82
        ] );

        Rapport::create( [
            'id'=>702,
            'date'=>'2017-01-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b13',
            'id_medecin'=>83
        ] );

        Rapport::create( [
            'id'=>703,
            'date'=>'2017-01-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b13',
            'id_medecin'=>84
        ] );

        Rapport::create( [
            'id'=>704,
            'date'=>'2016-10-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e24',
            'id_medecin'=>85
        ] );

        Rapport::create( [
            'id'=>705,
            'date'=>'2017-03-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a93',
            'id_medecin'=>86
        ] );

        Rapport::create( [
            'id'=>706,
            'date'=>'2017-03-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'d51',
            'id_medecin'=>87
        ] );

        Rapport::create( [
            'id'=>707,
            'date'=>'2016-10-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b50',
            'id_medecin'=>88
        ] );

        Rapport::create( [
            'id'=>708,
            'date'=>'2017-03-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e5',
            'id_medecin'=>89
        ] );

        Rapport::create( [
            'id'=>709,
            'date'=>'2016-12-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b4',
            'id_medecin'=>90
        ] );

        Rapport::create( [
            'id'=>710,
            'date'=>'2017-01-31',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b4',
            'id_medecin'=>91
        ] );

        Rapport::create( [
            'id'=>711,
            'date'=>'2016-10-18',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b59',
            'id_medecin'=>92
        ] );

        Rapport::create( [
            'id'=>712,
            'date'=>'2016-11-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'f39',
            'id_medecin'=>93
        ] );

        Rapport::create( [
            'id'=>713,
            'date'=>'2017-03-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b34',
            'id_medecin'=>94
        ] );

        Rapport::create( [
            'id'=>714,
            'date'=>'2016-11-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e49',
            'id_medecin'=>95
        ] );

        Rapport::create( [
            'id'=>715,
            'date'=>'2017-02-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e52',
            'id_medecin'=>96
        ] );

        Rapport::create( [
            'id'=>716,
            'date'=>'2016-11-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e52',
            'id_medecin'=>97
        ] );

        Rapport::create( [
            'id'=>717,
            'date'=>'2017-03-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e49',
            'id_medecin'=>98
        ] );

        Rapport::create( [
            'id'=>718,
            'date'=>'2016-10-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'f21',
            'id_medecin'=>99
        ] );

        Rapport::create( [
            'id'=>719,
            'date'=>'2017-03-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'b59',
            'id_medecin'=>100
        ] );

        Rapport::create( [
            'id'=>720,
            'date'=>'2017-03-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e52',
            'id_medecin'=>101
        ] );

        Rapport::create( [
            'id'=>721,
            'date'=>'2017-01-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b59',
            'id_medecin'=>102
        ] );

        Rapport::create( [
            'id'=>722,
            'date'=>'2016-11-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>103
        ] );

        Rapport::create( [
            'id'=>723,
            'date'=>'2017-01-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e22',
            'id_medecin'=>104
        ] );

        Rapport::create( [
            'id'=>724,
            'date'=>'2017-02-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e24',
            'id_medecin'=>105
        ] );

        Rapport::create( [
            'id'=>725,
            'date'=>'2016-10-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b59',
            'id_medecin'=>106
        ] );

        Rapport::create( [
            'id'=>726,
            'date'=>'2016-12-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b25',
            'id_medecin'=>107
        ] );

        Rapport::create( [
            'id'=>727,
            'date'=>'2016-11-18',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b19',
            'id_medecin'=>108
        ] );

        Rapport::create( [
            'id'=>728,
            'date'=>'2017-01-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'a131',
            'id_medecin'=>109
        ] );

        Rapport::create( [
            'id'=>729,
            'date'=>'2016-12-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b25',
            'id_medecin'=>110
        ] );

        Rapport::create( [
            'id'=>730,
            'date'=>'2017-03-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>111
        ] );

        Rapport::create( [
            'id'=>731,
            'date'=>'2016-10-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b25',
            'id_medecin'=>112
        ] );

        Rapport::create( [
            'id'=>732,
            'date'=>'2017-03-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e24',
            'id_medecin'=>113
        ] );

        Rapport::create( [
            'id'=>733,
            'date'=>'2017-02-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b59',
            'id_medecin'=>114
        ] );

        Rapport::create( [
            'id'=>734,
            'date'=>'2017-04-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a93',
            'id_medecin'=>115
        ] );

        Rapport::create( [
            'id'=>735,
            'date'=>'2017-04-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e39',
            'id_medecin'=>116
        ] );

        Rapport::create( [
            'id'=>736,
            'date'=>'2016-10-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b25',
            'id_medecin'=>117
        ] );

        Rapport::create( [
            'id'=>737,
            'date'=>'2017-03-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b28',
            'id_medecin'=>118
        ] );

        Rapport::create( [
            'id'=>738,
            'date'=>'2017-02-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b19',
            'id_medecin'=>119
        ] );

        Rapport::create( [
            'id'=>739,
            'date'=>'2017-02-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b25',
            'id_medecin'=>120
        ] );

        Rapport::create( [
            'id'=>740,
            'date'=>'2016-10-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e39',
            'id_medecin'=>121
        ] );

        Rapport::create( [
            'id'=>741,
            'date'=>'2016-11-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b25',
            'id_medecin'=>122
        ] );

        Rapport::create( [
            'id'=>742,
            'date'=>'2017-03-21',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'b34',
            'id_medecin'=>123
        ] );

        Rapport::create( [
            'id'=>743,
            'date'=>'2017-02-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b59',
            'id_medecin'=>124
        ] );

        Rapport::create( [
            'id'=>744,
            'date'=>'2017-02-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'c54',
            'id_medecin'=>125
        ] );

        Rapport::create( [
            'id'=>745,
            'date'=>'2017-03-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b13',
            'id_medecin'=>126
        ] );

        Rapport::create( [
            'id'=>746,
            'date'=>'2016-10-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e24',
            'id_medecin'=>127
        ] );

        Rapport::create( [
            'id'=>747,
            'date'=>'2016-12-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b4',
            'id_medecin'=>128
        ] );

        Rapport::create( [
            'id'=>748,
            'date'=>'2017-01-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b34',
            'id_medecin'=>129
        ] );

        Rapport::create( [
            'id'=>749,
            'date'=>'2017-03-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b28',
            'id_medecin'=>130
        ] );

        Rapport::create( [
            'id'=>750,
            'date'=>'2017-03-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b16',
            'id_medecin'=>131
        ] );

        Rapport::create( [
            'id'=>751,
            'date'=>'2017-02-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b34',
            'id_medecin'=>132
        ] );

        Rapport::create( [
            'id'=>752,
            'date'=>'2017-02-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e5',
            'id_medecin'=>133
        ] );

        Rapport::create( [
            'id'=>753,
            'date'=>'2017-01-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a131',
            'id_medecin'=>134
        ] );

        Rapport::create( [
            'id'=>754,
            'date'=>'2016-10-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b16',
            'id_medecin'=>135
        ] );

        Rapport::create( [
            'id'=>755,
            'date'=>'2017-02-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e22',
            'id_medecin'=>136
        ] );

        Rapport::create( [
            'id'=>756,
            'date'=>'2017-03-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b59',
            'id_medecin'=>137
        ] );

        Rapport::create( [
            'id'=>757,
            'date'=>'2016-11-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b16',
            'id_medecin'=>138
        ] );

        Rapport::create( [
            'id'=>758,
            'date'=>'2016-11-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a131',
            'id_medecin'=>139
        ] );

        Rapport::create( [
            'id'=>759,
            'date'=>'2017-01-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b13',
            'id_medecin'=>140
        ] );

        Rapport::create( [
            'id'=>760,
            'date'=>'2016-12-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e49',
            'id_medecin'=>141
        ] );

        Rapport::create( [
            'id'=>761,
            'date'=>'2017-01-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d51',
            'id_medecin'=>142
        ] );

        Rapport::create( [
            'id'=>762,
            'date'=>'2017-03-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c54',
            'id_medecin'=>143
        ] );

        Rapport::create( [
            'id'=>763,
            'date'=>'2017-02-26',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a17',
            'id_medecin'=>144
        ] );

        Rapport::create( [
            'id'=>764,
            'date'=>'2017-03-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a17',
            'id_medecin'=>145
        ] );

        Rapport::create( [
            'id'=>765,
            'date'=>'2016-10-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'d51',
            'id_medecin'=>146
        ] );

        Rapport::create( [
            'id'=>766,
            'date'=>'2017-03-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>147
        ] );

        Rapport::create( [
            'id'=>767,
            'date'=>'2016-11-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e22',
            'id_medecin'=>148
        ] );

        Rapport::create( [
            'id'=>768,
            'date'=>'2017-03-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>149
        ] );

        Rapport::create( [
            'id'=>769,
            'date'=>'2017-02-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e49',
            'id_medecin'=>150
        ] );

        Rapport::create( [
            'id'=>770,
            'date'=>'2017-03-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a17',
            'id_medecin'=>151
        ] );

        Rapport::create( [
            'id'=>771,
            'date'=>'2017-02-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e24',
            'id_medecin'=>152
        ] );

        Rapport::create( [
            'id'=>772,
            'date'=>'2016-10-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e5',
            'id_medecin'=>153
        ] );

        Rapport::create( [
            'id'=>773,
            'date'=>'2017-03-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b16',
            'id_medecin'=>154
        ] );

        Rapport::create( [
            'id'=>774,
            'date'=>'2017-01-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a93',
            'id_medecin'=>155
        ] );

        Rapport::create( [
            'id'=>775,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b50',
            'id_medecin'=>156
        ] );

        Rapport::create( [
            'id'=>776,
            'date'=>'2017-02-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b19',
            'id_medecin'=>157
        ] );

        Rapport::create( [
            'id'=>777,
            'date'=>'2017-01-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e24',
            'id_medecin'=>158
        ] );

        Rapport::create( [
            'id'=>778,
            'date'=>'2017-01-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f39',
            'id_medecin'=>159
        ] );

        Rapport::create( [
            'id'=>779,
            'date'=>'2017-01-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e49',
            'id_medecin'=>160
        ] );

        Rapport::create( [
            'id'=>780,
            'date'=>'2017-04-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c14',
            'id_medecin'=>161
        ] );

        Rapport::create( [
            'id'=>781,
            'date'=>'2016-11-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b34',
            'id_medecin'=>162
        ] );

        Rapport::create( [
            'id'=>782,
            'date'=>'2016-12-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b25',
            'id_medecin'=>163
        ] );

        Rapport::create( [
            'id'=>783,
            'date'=>'2016-11-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'f21',
            'id_medecin'=>164
        ] );

        Rapport::create( [
            'id'=>784,
            'date'=>'2017-02-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a55',
            'id_medecin'=>165
        ] );

        Rapport::create( [
            'id'=>785,
            'date'=>'2016-11-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'c3',
            'id_medecin'=>166
        ] );

        Rapport::create( [
            'id'=>786,
            'date'=>'2016-11-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b19',
            'id_medecin'=>167
        ] );

        Rapport::create( [
            'id'=>787,
            'date'=>'2016-11-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b28',
            'id_medecin'=>168
        ] );

        Rapport::create( [
            'id'=>788,
            'date'=>'2017-01-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b34',
            'id_medecin'=>169
        ] );

        Rapport::create( [
            'id'=>789,
            'date'=>'2016-10-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'a93',
            'id_medecin'=>170
        ] );

        Rapport::create( [
            'id'=>790,
            'date'=>'2017-02-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'f39',
            'id_medecin'=>171
        ] );

        Rapport::create( [
            'id'=>791,
            'date'=>'2017-04-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c3',
            'id_medecin'=>172
        ] );

        Rapport::create( [
            'id'=>792,
            'date'=>'2016-10-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b28',
            'id_medecin'=>173
        ] );

        Rapport::create( [
            'id'=>793,
            'date'=>'2017-03-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e22',
            'id_medecin'=>174
        ] );

        Rapport::create( [
            'id'=>794,
            'date'=>'2017-02-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e52',
            'id_medecin'=>175
        ] );

        Rapport::create( [
            'id'=>795,
            'date'=>'2016-11-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b28',
            'id_medecin'=>176
        ] );

        Rapport::create( [
            'id'=>796,
            'date'=>'2017-04-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a131',
            'id_medecin'=>177
        ] );

        Rapport::create( [
            'id'=>797,
            'date'=>'2017-03-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'d51',
            'id_medecin'=>178
        ] );

        Rapport::create( [
            'id'=>798,
            'date'=>'2016-10-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e24',
            'id_medecin'=>179
        ] );

        Rapport::create( [
            'id'=>799,
            'date'=>'2016-12-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b19',
            'id_medecin'=>180
        ] );

        Rapport::create( [
            'id'=>800,
            'date'=>'2017-03-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e5',
            'id_medecin'=>181
        ] );

        Rapport::create( [
            'id'=>801,
            'date'=>'2017-02-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c54',
            'id_medecin'=>182
        ] );

        Rapport::create( [
            'id'=>802,
            'date'=>'2017-01-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e49',
            'id_medecin'=>183
        ] );

        Rapport::create( [
            'id'=>803,
            'date'=>'2017-02-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a55',
            'id_medecin'=>184
        ] );

        Rapport::create( [
            'id'=>804,
            'date'=>'2016-11-25',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'e24',
            'id_medecin'=>185
        ] );

        Rapport::create( [
            'id'=>805,
            'date'=>'2016-11-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e52',
            'id_medecin'=>186
        ] );

        Rapport::create( [
            'id'=>806,
            'date'=>'2017-01-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c3',
            'id_medecin'=>187
        ] );

        Rapport::create( [
            'id'=>807,
            'date'=>'2016-12-31',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'c14',
            'id_medecin'=>188
        ] );

        Rapport::create( [
            'id'=>808,
            'date'=>'2017-02-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c14',
            'id_medecin'=>189
        ] );

        Rapport::create( [
            'id'=>809,
            'date'=>'2017-01-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c14',
            'id_medecin'=>190
        ] );

        Rapport::create( [
            'id'=>810,
            'date'=>'2017-02-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b28',
            'id_medecin'=>191
        ] );

        Rapport::create( [
            'id'=>811,
            'date'=>'2017-01-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e49',
            'id_medecin'=>192
        ] );

        Rapport::create( [
            'id'=>812,
            'date'=>'2016-12-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e5',
            'id_medecin'=>193
        ] );

        Rapport::create( [
            'id'=>813,
            'date'=>'2016-10-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b16',
            'id_medecin'=>194
        ] );

        Rapport::create( [
            'id'=>814,
            'date'=>'2016-10-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a17',
            'id_medecin'=>195
        ] );

        Rapport::create( [
            'id'=>815,
            'date'=>'2016-10-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'d51',
            'id_medecin'=>196
        ] );

        Rapport::create( [
            'id'=>816,
            'date'=>'2016-10-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e22',
            'id_medecin'=>197
        ] );

        Rapport::create( [
            'id'=>817,
            'date'=>'2016-10-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'f39',
            'id_medecin'=>198
        ] );

        Rapport::create( [
            'id'=>818,
            'date'=>'2017-04-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a17',
            'id_medecin'=>199
        ] );

        Rapport::create( [
            'id'=>819,
            'date'=>'2016-10-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b59',
            'id_medecin'=>200
        ] );

        Rapport::create( [
            'id'=>820,
            'date'=>'2017-02-26',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a93',
            'id_medecin'=>201
        ] );

        Rapport::create( [
            'id'=>821,
            'date'=>'2016-12-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e5',
            'id_medecin'=>202
        ] );

        Rapport::create( [
            'id'=>822,
            'date'=>'2016-10-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b16',
            'id_medecin'=>203
        ] );

        Rapport::create( [
            'id'=>823,
            'date'=>'2017-03-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e49',
            'id_medecin'=>204
        ] );

        Rapport::create( [
            'id'=>824,
            'date'=>'2016-10-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b50',
            'id_medecin'=>205
        ] );

        Rapport::create( [
            'id'=>825,
            'date'=>'2017-03-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a17',
            'id_medecin'=>206
        ] );

        Rapport::create( [
            'id'=>826,
            'date'=>'2017-02-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c54',
            'id_medecin'=>207
        ] );

        Rapport::create( [
            'id'=>827,
            'date'=>'2017-03-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'d13',
            'id_medecin'=>208
        ] );

        Rapport::create( [
            'id'=>828,
            'date'=>'2017-04-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'d51',
            'id_medecin'=>209
        ] );

        Rapport::create( [
            'id'=>829,
            'date'=>'2017-02-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e22',
            'id_medecin'=>210
        ] );

        Rapport::create( [
            'id'=>830,
            'date'=>'2017-02-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b16',
            'id_medecin'=>211
        ] );

        Rapport::create( [
            'id'=>831,
            'date'=>'2017-03-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b50',
            'id_medecin'=>212
        ] );

        Rapport::create( [
            'id'=>832,
            'date'=>'2016-11-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b28',
            'id_medecin'=>213
        ] );

        Rapport::create( [
            'id'=>833,
            'date'=>'2016-11-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c14',
            'id_medecin'=>214
        ] );

        Rapport::create( [
            'id'=>834,
            'date'=>'2017-02-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e52',
            'id_medecin'=>215
        ] );

        Rapport::create( [
            'id'=>835,
            'date'=>'2017-01-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'a93',
            'id_medecin'=>216
        ] );

        Rapport::create( [
            'id'=>836,
            'date'=>'2017-03-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'f21',
            'id_medecin'=>217
        ] );

        Rapport::create( [
            'id'=>837,
            'date'=>'2016-11-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a131',
            'id_medecin'=>218
        ] );

        Rapport::create( [
            'id'=>838,
            'date'=>'2017-01-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c54',
            'id_medecin'=>219
        ] );

        Rapport::create( [
            'id'=>839,
            'date'=>'2017-01-11',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b19',
            'id_medecin'=>220
        ] );

        Rapport::create( [
            'id'=>840,
            'date'=>'2016-12-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'d51',
            'id_medecin'=>221
        ] );

        Rapport::create( [
            'id'=>841,
            'date'=>'2017-03-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a131',
            'id_medecin'=>222
        ] );

        Rapport::create( [
            'id'=>842,
            'date'=>'2016-12-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>223
        ] );

        Rapport::create( [
            'id'=>843,
            'date'=>'2017-01-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e52',
            'id_medecin'=>224
        ] );

        Rapport::create( [
            'id'=>844,
            'date'=>'2016-11-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a131',
            'id_medecin'=>225
        ] );

        Rapport::create( [
            'id'=>845,
            'date'=>'2016-10-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b59',
            'id_medecin'=>226
        ] );

        Rapport::create( [
            'id'=>846,
            'date'=>'2016-10-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e22',
            'id_medecin'=>227
        ] );

        Rapport::create( [
            'id'=>847,
            'date'=>'2016-11-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b19',
            'id_medecin'=>228
        ] );

        Rapport::create( [
            'id'=>848,
            'date'=>'2017-04-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a131',
            'id_medecin'=>229
        ] );

        Rapport::create( [
            'id'=>849,
            'date'=>'2016-12-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a17',
            'id_medecin'=>230
        ] );

        Rapport::create( [
            'id'=>850,
            'date'=>'2016-12-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b34',
            'id_medecin'=>231
        ] );

        Rapport::create( [
            'id'=>851,
            'date'=>'2017-03-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a55',
            'id_medecin'=>232
        ] );

        Rapport::create( [
            'id'=>852,
            'date'=>'2016-12-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'f21',
            'id_medecin'=>233
        ] );

        Rapport::create( [
            'id'=>853,
            'date'=>'2016-10-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b25',
            'id_medecin'=>234
        ] );

        Rapport::create( [
            'id'=>854,
            'date'=>'2016-11-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e52',
            'id_medecin'=>235
        ] );

        Rapport::create( [
            'id'=>855,
            'date'=>'2017-03-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b25',
            'id_medecin'=>236
        ] );

        Rapport::create( [
            'id'=>856,
            'date'=>'2017-03-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b34',
            'id_medecin'=>237
        ] );

        Rapport::create( [
            'id'=>857,
            'date'=>'2017-03-30',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e39',
            'id_medecin'=>238
        ] );

        Rapport::create( [
            'id'=>858,
            'date'=>'2016-11-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e52',
            'id_medecin'=>239
        ] );

        Rapport::create( [
            'id'=>859,
            'date'=>'2017-01-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'d13',
            'id_medecin'=>240
        ] );

        Rapport::create( [
            'id'=>860,
            'date'=>'2017-01-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b28',
            'id_medecin'=>241
        ] );

        Rapport::create( [
            'id'=>861,
            'date'=>'2017-02-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e24',
            'id_medecin'=>242
        ] );

        Rapport::create( [
            'id'=>862,
            'date'=>'2016-10-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b50',
            'id_medecin'=>243
        ] );

        Rapport::create( [
            'id'=>863,
            'date'=>'2017-03-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'d51',
            'id_medecin'=>244
        ] );

        Rapport::create( [
            'id'=>864,
            'date'=>'2016-12-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a55',
            'id_medecin'=>245
        ] );

        Rapport::create( [
            'id'=>865,
            'date'=>'2017-03-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'a93',
            'id_medecin'=>246
        ] );

        Rapport::create( [
            'id'=>866,
            'date'=>'2016-12-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>247
        ] );

        Rapport::create( [
            'id'=>867,
            'date'=>'2017-01-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b34',
            'id_medecin'=>248
        ] );

        Rapport::create( [
            'id'=>868,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a93',
            'id_medecin'=>249
        ] );

        Rapport::create( [
            'id'=>869,
            'date'=>'2016-12-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e22',
            'id_medecin'=>250
        ] );

        Rapport::create( [
            'id'=>870,
            'date'=>'2017-01-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e22',
            'id_medecin'=>251
        ] );

        Rapport::create( [
            'id'=>871,
            'date'=>'2016-12-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'f21',
            'id_medecin'=>252
        ] );

        Rapport::create( [
            'id'=>872,
            'date'=>'2016-11-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a93',
            'id_medecin'=>253
        ] );

        Rapport::create( [
            'id'=>873,
            'date'=>'2016-11-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b4',
            'id_medecin'=>254
        ] );

        Rapport::create( [
            'id'=>874,
            'date'=>'2017-01-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a131',
            'id_medecin'=>255
        ] );

        Rapport::create( [
            'id'=>875,
            'date'=>'2016-12-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e5',
            'id_medecin'=>256
        ] );

        Rapport::create( [
            'id'=>876,
            'date'=>'2016-12-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e52',
            'id_medecin'=>257
        ] );

        Rapport::create( [
            'id'=>877,
            'date'=>'2017-04-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e5',
            'id_medecin'=>258
        ] );

        Rapport::create( [
            'id'=>878,
            'date'=>'2017-02-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e5',
            'id_medecin'=>259
        ] );

        Rapport::create( [
            'id'=>879,
            'date'=>'2017-03-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b19',
            'id_medecin'=>260
        ] );

        Rapport::create( [
            'id'=>880,
            'date'=>'2017-02-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d13',
            'id_medecin'=>261
        ] );

        Rapport::create( [
            'id'=>881,
            'date'=>'2017-02-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'d51',
            'id_medecin'=>262
        ] );

        Rapport::create( [
            'id'=>882,
            'date'=>'2016-10-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a17',
            'id_medecin'=>263
        ] );

        Rapport::create( [
            'id'=>883,
            'date'=>'2017-01-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a55',
            'id_medecin'=>264
        ] );

        Rapport::create( [
            'id'=>884,
            'date'=>'2017-03-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'f39',
            'id_medecin'=>265
        ] );

        Rapport::create( [
            'id'=>885,
            'date'=>'2017-04-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b16',
            'id_medecin'=>266
        ] );

        Rapport::create( [
            'id'=>886,
            'date'=>'2017-02-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b34',
            'id_medecin'=>267
        ] );

        Rapport::create( [
            'id'=>887,
            'date'=>'2016-10-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a55',
            'id_medecin'=>268
        ] );

        Rapport::create( [
            'id'=>888,
            'date'=>'2017-01-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e22',
            'id_medecin'=>269
        ] );

        Rapport::create( [
            'id'=>889,
            'date'=>'2017-03-31',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e22',
            'id_medecin'=>270
        ] );

        Rapport::create( [
            'id'=>890,
            'date'=>'2016-12-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a131',
            'id_medecin'=>271
        ] );

        Rapport::create( [
            'id'=>891,
            'date'=>'2017-01-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'f39',
            'id_medecin'=>272
        ] );

        Rapport::create( [
            'id'=>892,
            'date'=>'2017-02-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b50',
            'id_medecin'=>273
        ] );

        Rapport::create( [
            'id'=>893,
            'date'=>'2016-10-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c54',
            'id_medecin'=>274
        ] );

        Rapport::create( [
            'id'=>894,
            'date'=>'2017-03-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a17',
            'id_medecin'=>275
        ] );

        Rapport::create( [
            'id'=>895,
            'date'=>'2016-11-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b13',
            'id_medecin'=>276
        ] );

        Rapport::create( [
            'id'=>896,
            'date'=>'2016-12-16',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e39',
            'id_medecin'=>277
        ] );

        Rapport::create( [
            'id'=>897,
            'date'=>'2016-11-27',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b19',
            'id_medecin'=>278
        ] );

        Rapport::create( [
            'id'=>898,
            'date'=>'2016-11-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b50',
            'id_medecin'=>279
        ] );

        Rapport::create( [
            'id'=>899,
            'date'=>'2016-11-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b34',
            'id_medecin'=>280
        ] );

        Rapport::create( [
            'id'=>900,
            'date'=>'2016-12-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c54',
            'id_medecin'=>281
        ] );

        Rapport::create( [
            'id'=>901,
            'date'=>'2017-03-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e39',
            'id_medecin'=>282
        ] );

        Rapport::create( [
            'id'=>902,
            'date'=>'2016-12-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>283
        ] );

        Rapport::create( [
            'id'=>903,
            'date'=>'2017-01-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d13',
            'id_medecin'=>284
        ] );

        Rapport::create( [
            'id'=>904,
            'date'=>'2017-03-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a131',
            'id_medecin'=>285
        ] );

        Rapport::create( [
            'id'=>905,
            'date'=>'2017-02-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a17',
            'id_medecin'=>286
        ] );

        Rapport::create( [
            'id'=>906,
            'date'=>'2016-11-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c14',
            'id_medecin'=>287
        ] );

        Rapport::create( [
            'id'=>907,
            'date'=>'2016-10-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e5',
            'id_medecin'=>288
        ] );

        Rapport::create( [
            'id'=>908,
            'date'=>'2017-01-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d51',
            'id_medecin'=>289
        ] );

        Rapport::create( [
            'id'=>909,
            'date'=>'2017-04-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b16',
            'id_medecin'=>290
        ] );

        Rapport::create( [
            'id'=>910,
            'date'=>'2017-01-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b59',
            'id_medecin'=>291
        ] );

        Rapport::create( [
            'id'=>911,
            'date'=>'2017-02-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a93',
            'id_medecin'=>292
        ] );

        Rapport::create( [
            'id'=>912,
            'date'=>'2016-10-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d51',
            'id_medecin'=>293
        ] );

        Rapport::create( [
            'id'=>913,
            'date'=>'2016-11-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e49',
            'id_medecin'=>294
        ] );

        Rapport::create( [
            'id'=>914,
            'date'=>'2017-03-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a131',
            'id_medecin'=>295
        ] );

        Rapport::create( [
            'id'=>915,
            'date'=>'2017-04-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>296
        ] );

        Rapport::create( [
            'id'=>916,
            'date'=>'2017-01-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e52',
            'id_medecin'=>297
        ] );

        Rapport::create( [
            'id'=>917,
            'date'=>'2016-12-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e5',
            'id_medecin'=>298
        ] );

        Rapport::create( [
            'id'=>918,
            'date'=>'2016-11-26',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'f21',
            'id_medecin'=>299
        ] );

        Rapport::create( [
            'id'=>919,
            'date'=>'2016-10-31',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'d13',
            'id_medecin'=>300
        ] );

        Rapport::create( [
            'id'=>920,
            'date'=>'2016-10-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a93',
            'id_medecin'=>301
        ] );

        Rapport::create( [
            'id'=>921,
            'date'=>'2016-12-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e52',
            'id_medecin'=>302
        ] );

        Rapport::create( [
            'id'=>922,
            'date'=>'2017-04-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b25',
            'id_medecin'=>303
        ] );

        Rapport::create( [
            'id'=>923,
            'date'=>'2017-02-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a17',
            'id_medecin'=>304
        ] );

        Rapport::create( [
            'id'=>924,
            'date'=>'2016-10-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c3',
            'id_medecin'=>305
        ] );

        Rapport::create( [
            'id'=>925,
            'date'=>'2017-02-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b13',
            'id_medecin'=>306
        ] );

        Rapport::create( [
            'id'=>926,
            'date'=>'2016-12-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e5',
            'id_medecin'=>307
        ] );

        Rapport::create( [
            'id'=>927,
            'date'=>'2016-10-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d13',
            'id_medecin'=>308
        ] );

        Rapport::create( [
            'id'=>928,
            'date'=>'2016-11-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e5',
            'id_medecin'=>309
        ] );

        Rapport::create( [
            'id'=>929,
            'date'=>'2017-04-09',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e52',
            'id_medecin'=>310
        ] );

        Rapport::create( [
            'id'=>930,
            'date'=>'2017-01-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b4',
            'id_medecin'=>311
        ] );

        Rapport::create( [
            'id'=>931,
            'date'=>'2016-10-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'f39',
            'id_medecin'=>312
        ] );

        Rapport::create( [
            'id'=>932,
            'date'=>'2016-10-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b34',
            'id_medecin'=>313
        ] );

        Rapport::create( [
            'id'=>933,
            'date'=>'2016-11-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'b28',
            'id_medecin'=>314
        ] );

        Rapport::create( [
            'id'=>934,
            'date'=>'2016-12-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'d51',
            'id_medecin'=>315
        ] );

        Rapport::create( [
            'id'=>935,
            'date'=>'2016-11-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b25',
            'id_medecin'=>316
        ] );

        Rapport::create( [
            'id'=>936,
            'date'=>'2016-11-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'a131',
            'id_medecin'=>317
        ] );

        Rapport::create( [
            'id'=>937,
            'date'=>'2016-12-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c54',
            'id_medecin'=>318
        ] );

        Rapport::create( [
            'id'=>938,
            'date'=>'2017-01-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'c3',
            'id_medecin'=>319
        ] );

        Rapport::create( [
            'id'=>939,
            'date'=>'2017-03-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e52',
            'id_medecin'=>320
        ] );

        Rapport::create( [
            'id'=>940,
            'date'=>'2017-01-06',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'d13',
            'id_medecin'=>321
        ] );

        Rapport::create( [
            'id'=>941,
            'date'=>'2017-03-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b4',
            'id_medecin'=>322
        ] );

        Rapport::create( [
            'id'=>942,
            'date'=>'2017-02-11',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d51',
            'id_medecin'=>323
        ] );

        Rapport::create( [
            'id'=>943,
            'date'=>'2017-02-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e49',
            'id_medecin'=>324
        ] );

        Rapport::create( [
            'id'=>944,
            'date'=>'2016-11-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e49',
            'id_medecin'=>325
        ] );

        Rapport::create( [
            'id'=>945,
            'date'=>'2016-12-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e24',
            'id_medecin'=>326
        ] );

        Rapport::create( [
            'id'=>946,
            'date'=>'2016-12-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a93',
            'id_medecin'=>327
        ] );

        Rapport::create( [
            'id'=>947,
            'date'=>'2017-03-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'f21',
            'id_medecin'=>328
        ] );

        Rapport::create( [
            'id'=>948,
            'date'=>'2016-11-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e39',
            'id_medecin'=>329
        ] );

        Rapport::create( [
            'id'=>949,
            'date'=>'2016-10-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'f39',
            'id_medecin'=>330
        ] );

        Rapport::create( [
            'id'=>950,
            'date'=>'2017-03-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e5',
            'id_medecin'=>331
        ] );

        Rapport::create( [
            'id'=>951,
            'date'=>'2017-03-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>332
        ] );

        Rapport::create( [
            'id'=>952,
            'date'=>'2016-12-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b19',
            'id_medecin'=>333
        ] );

        Rapport::create( [
            'id'=>953,
            'date'=>'2016-11-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b28',
            'id_medecin'=>334
        ] );

        Rapport::create( [
            'id'=>954,
            'date'=>'2017-03-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c54',
            'id_medecin'=>335
        ] );

        Rapport::create( [
            'id'=>955,
            'date'=>'2017-01-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b16',
            'id_medecin'=>336
        ] );

        Rapport::create( [
            'id'=>956,
            'date'=>'2016-10-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e39',
            'id_medecin'=>337
        ] );

        Rapport::create( [
            'id'=>957,
            'date'=>'2016-12-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a55',
            'id_medecin'=>338
        ] );

        Rapport::create( [
            'id'=>958,
            'date'=>'2016-11-07',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e24',
            'id_medecin'=>339
        ] );

        Rapport::create( [
            'id'=>959,
            'date'=>'2017-03-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'f21',
            'id_medecin'=>340
        ] );

        Rapport::create( [
            'id'=>960,
            'date'=>'2016-12-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'d13',
            'id_medecin'=>341
        ] );

        Rapport::create( [
            'id'=>961,
            'date'=>'2016-10-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e5',
            'id_medecin'=>342
        ] );

        Rapport::create( [
            'id'=>962,
            'date'=>'2016-12-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a17',
            'id_medecin'=>343
        ] );

        Rapport::create( [
            'id'=>963,
            'date'=>'2017-04-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c3',
            'id_medecin'=>344
        ] );

        Rapport::create( [
            'id'=>964,
            'date'=>'2016-10-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b16',
            'id_medecin'=>345
        ] );

        Rapport::create( [
            'id'=>965,
            'date'=>'2017-04-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'c14',
            'id_medecin'=>346
        ] );

        Rapport::create( [
            'id'=>966,
            'date'=>'2016-12-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a55',
            'id_medecin'=>347
        ] );

        Rapport::create( [
            'id'=>967,
            'date'=>'2016-11-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b13',
            'id_medecin'=>348
        ] );

        Rapport::create( [
            'id'=>968,
            'date'=>'2016-10-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e49',
            'id_medecin'=>349
        ] );

        Rapport::create( [
            'id'=>969,
            'date'=>'2017-01-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e52',
            'id_medecin'=>350
        ] );

        Rapport::create( [
            'id'=>970,
            'date'=>'2017-04-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c14',
            'id_medecin'=>351
        ] );

        Rapport::create( [
            'id'=>971,
            'date'=>'2017-04-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b28',
            'id_medecin'=>352
        ] );

        Rapport::create( [
            'id'=>972,
            'date'=>'2017-02-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e22',
            'id_medecin'=>353
        ] );

        Rapport::create( [
            'id'=>973,
            'date'=>'2017-04-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b25',
            'id_medecin'=>354
        ] );

        Rapport::create( [
            'id'=>974,
            'date'=>'2016-10-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f21',
            'id_medecin'=>355
        ] );

        Rapport::create( [
            'id'=>975,
            'date'=>'2016-10-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c54',
            'id_medecin'=>356
        ] );

        Rapport::create( [
            'id'=>976,
            'date'=>'2016-12-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c54',
            'id_medecin'=>357
        ] );

        Rapport::create( [
            'id'=>977,
            'date'=>'2017-02-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b13',
            'id_medecin'=>358
        ] );

        Rapport::create( [
            'id'=>978,
            'date'=>'2016-10-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b25',
            'id_medecin'=>359
        ] );

        Rapport::create( [
            'id'=>979,
            'date'=>'2017-02-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d13',
            'id_medecin'=>360
        ] );

        Rapport::create( [
            'id'=>980,
            'date'=>'2016-10-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e49',
            'id_medecin'=>361
        ] );

        Rapport::create( [
            'id'=>981,
            'date'=>'2016-10-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b34',
            'id_medecin'=>362
        ] );

        Rapport::create( [
            'id'=>982,
            'date'=>'2016-11-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b28',
            'id_medecin'=>363
        ] );

        Rapport::create( [
            'id'=>983,
            'date'=>'2017-02-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b25',
            'id_medecin'=>364
        ] );

        Rapport::create( [
            'id'=>984,
            'date'=>'2016-10-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b16',
            'id_medecin'=>365
        ] );

        Rapport::create( [
            'id'=>985,
            'date'=>'2017-03-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a93',
            'id_medecin'=>366
        ] );

        Rapport::create( [
            'id'=>986,
            'date'=>'2016-12-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>367
        ] );

        Rapport::create( [
            'id'=>987,
            'date'=>'2016-12-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>368
        ] );

        Rapport::create( [
            'id'=>988,
            'date'=>'2017-02-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b4',
            'id_medecin'=>369
        ] );

        Rapport::create( [
            'id'=>989,
            'date'=>'2016-11-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d13',
            'id_medecin'=>370
        ] );

        Rapport::create( [
            'id'=>990,
            'date'=>'2017-01-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e22',
            'id_medecin'=>371
        ] );

        Rapport::create( [
            'id'=>991,
            'date'=>'2017-03-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e52',
            'id_medecin'=>372
        ] );

        Rapport::create( [
            'id'=>992,
            'date'=>'2016-10-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e49',
            'id_medecin'=>373
        ] );

        Rapport::create( [
            'id'=>993,
            'date'=>'2016-10-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b50',
            'id_medecin'=>374
        ] );

        Rapport::create( [
            'id'=>994,
            'date'=>'2017-04-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'d51',
            'id_medecin'=>375
        ] );

        Rapport::create( [
            'id'=>995,
            'date'=>'2016-10-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c54',
            'id_medecin'=>376
        ] );

        Rapport::create( [
            'id'=>996,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a93',
            'id_medecin'=>377
        ] );

        Rapport::create( [
            'id'=>997,
            'date'=>'2016-11-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b19',
            'id_medecin'=>378
        ] );

        Rapport::create( [
            'id'=>998,
            'date'=>'2016-12-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a93',
            'id_medecin'=>379
        ] );

        Rapport::create( [
            'id'=>999,
            'date'=>'2016-11-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e24',
            'id_medecin'=>380
        ] );

        Rapport::create( [
            'id'=>1000,
            'date'=>'2017-04-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b34',
            'id_medecin'=>381
        ] );

        Rapport::create( [
            'id'=>1001,
            'date'=>'2016-12-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b28',
            'id_medecin'=>382
        ] );

        Rapport::create( [
            'id'=>1002,
            'date'=>'2017-02-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a131',
            'id_medecin'=>383
        ] );

        Rapport::create( [
            'id'=>1003,
            'date'=>'2016-12-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b34',
            'id_medecin'=>384
        ] );

        Rapport::create( [
            'id'=>1004,
            'date'=>'2017-02-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a131',
            'id_medecin'=>385
        ] );

        Rapport::create( [
            'id'=>1005,
            'date'=>'2016-10-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e24',
            'id_medecin'=>386
        ] );

        Rapport::create( [
            'id'=>1006,
            'date'=>'2017-04-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c3',
            'id_medecin'=>387
        ] );

        Rapport::create( [
            'id'=>1007,
            'date'=>'2017-02-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'f39',
            'id_medecin'=>388
        ] );

        Rapport::create( [
            'id'=>1008,
            'date'=>'2017-04-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b28',
            'id_medecin'=>389
        ] );

        Rapport::create( [
            'id'=>1009,
            'date'=>'2016-11-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b50',
            'id_medecin'=>390
        ] );

        Rapport::create( [
            'id'=>1010,
            'date'=>'2017-04-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d13',
            'id_medecin'=>391
        ] );

        Rapport::create( [
            'id'=>1011,
            'date'=>'2017-04-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'d13',
            'id_medecin'=>392
        ] );

        Rapport::create( [
            'id'=>1012,
            'date'=>'2017-04-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'c3',
            'id_medecin'=>393
        ] );

        Rapport::create( [
            'id'=>1013,
            'date'=>'2017-01-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'d51',
            'id_medecin'=>394
        ] );

        Rapport::create( [
            'id'=>1014,
            'date'=>'2016-10-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b4',
            'id_medecin'=>395
        ] );

        Rapport::create( [
            'id'=>1015,
            'date'=>'2016-12-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'f21',
            'id_medecin'=>396
        ] );

        Rapport::create( [
            'id'=>1016,
            'date'=>'2016-12-14',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'e39',
            'id_medecin'=>397
        ] );

        Rapport::create( [
            'id'=>1017,
            'date'=>'2016-10-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a131',
            'id_medecin'=>398
        ] );

        Rapport::create( [
            'id'=>1018,
            'date'=>'2017-01-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'d51',
            'id_medecin'=>399
        ] );

        Rapport::create( [
            'id'=>1019,
            'date'=>'2017-03-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'f21',
            'id_medecin'=>400
        ] );

        Rapport::create( [
            'id'=>1020,
            'date'=>'2016-11-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b25',
            'id_medecin'=>401
        ] );

        Rapport::create( [
            'id'=>1021,
            'date'=>'2016-11-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e24',
            'id_medecin'=>402
        ] );

        Rapport::create( [
            'id'=>1022,
            'date'=>'2017-04-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e52',
            'id_medecin'=>403
        ] );

        Rapport::create( [
            'id'=>1023,
            'date'=>'2016-11-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'c54',
            'id_medecin'=>404
        ] );

        Rapport::create( [
            'id'=>1024,
            'date'=>'2017-02-12',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b59',
            'id_medecin'=>405
        ] );

        Rapport::create( [
            'id'=>1025,
            'date'=>'2016-10-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'d51',
            'id_medecin'=>406
        ] );

        Rapport::create( [
            'id'=>1026,
            'date'=>'2016-11-01',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'c54',
            'id_medecin'=>407
        ] );

        Rapport::create( [
            'id'=>1027,
            'date'=>'2016-10-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e52',
            'id_medecin'=>408
        ] );

        Rapport::create( [
            'id'=>1028,
            'date'=>'2016-12-28',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c54',
            'id_medecin'=>409
        ] );

        Rapport::create( [
            'id'=>1029,
            'date'=>'2017-02-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e39',
            'id_medecin'=>410
        ] );

        Rapport::create( [
            'id'=>1030,
            'date'=>'2016-10-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>411
        ] );

        Rapport::create( [
            'id'=>1031,
            'date'=>'2017-04-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e24',
            'id_medecin'=>412
        ] );

        Rapport::create( [
            'id'=>1032,
            'date'=>'2017-04-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b34',
            'id_medecin'=>413
        ] );

        Rapport::create( [
            'id'=>1033,
            'date'=>'2017-03-18',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a93',
            'id_medecin'=>414
        ] );

        Rapport::create( [
            'id'=>1034,
            'date'=>'2016-11-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e39',
            'id_medecin'=>415
        ] );

        Rapport::create( [
            'id'=>1035,
            'date'=>'2017-01-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e5',
            'id_medecin'=>416
        ] );

        Rapport::create( [
            'id'=>1036,
            'date'=>'2016-11-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e39',
            'id_medecin'=>417
        ] );

        Rapport::create( [
            'id'=>1037,
            'date'=>'2017-01-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b25',
            'id_medecin'=>418
        ] );

        Rapport::create( [
            'id'=>1038,
            'date'=>'2017-03-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e24',
            'id_medecin'=>419
        ] );

        Rapport::create( [
            'id'=>1039,
            'date'=>'2016-11-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e5',
            'id_medecin'=>420
        ] );

        Rapport::create( [
            'id'=>1040,
            'date'=>'2017-02-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d51',
            'id_medecin'=>421
        ] );

        Rapport::create( [
            'id'=>1041,
            'date'=>'2016-10-09',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'a93',
            'id_medecin'=>422
        ] );

        Rapport::create( [
            'id'=>1042,
            'date'=>'2017-01-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e39',
            'id_medecin'=>423
        ] );

        Rapport::create( [
            'id'=>1043,
            'date'=>'2016-11-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b19',
            'id_medecin'=>424
        ] );

        Rapport::create( [
            'id'=>1044,
            'date'=>'2017-02-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c14',
            'id_medecin'=>425
        ] );

        Rapport::create( [
            'id'=>1045,
            'date'=>'2017-03-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c14',
            'id_medecin'=>426
        ] );

        Rapport::create( [
            'id'=>1046,
            'date'=>'2017-01-31',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b34',
            'id_medecin'=>427
        ] );

        Rapport::create( [
            'id'=>1047,
            'date'=>'2017-03-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'d13',
            'id_medecin'=>428
        ] );

        Rapport::create( [
            'id'=>1048,
            'date'=>'2016-11-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b19',
            'id_medecin'=>429
        ] );

        Rapport::create( [
            'id'=>1049,
            'date'=>'2016-11-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e49',
            'id_medecin'=>430
        ] );

        Rapport::create( [
            'id'=>1050,
            'date'=>'2016-12-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b4',
            'id_medecin'=>431
        ] );

        Rapport::create( [
            'id'=>1051,
            'date'=>'2016-10-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e52',
            'id_medecin'=>432
        ] );

        Rapport::create( [
            'id'=>1052,
            'date'=>'2016-11-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b19',
            'id_medecin'=>433
        ] );

        Rapport::create( [
            'id'=>1053,
            'date'=>'2017-03-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'d51',
            'id_medecin'=>434
        ] );

        Rapport::create( [
            'id'=>1054,
            'date'=>'2016-10-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b28',
            'id_medecin'=>435
        ] );

        Rapport::create( [
            'id'=>1055,
            'date'=>'2017-03-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b34',
            'id_medecin'=>436
        ] );

        Rapport::create( [
            'id'=>1056,
            'date'=>'2016-11-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'f39',
            'id_medecin'=>437
        ] );

        Rapport::create( [
            'id'=>1057,
            'date'=>'2017-03-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e24',
            'id_medecin'=>438
        ] );

        Rapport::create( [
            'id'=>1058,
            'date'=>'2016-10-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b50',
            'id_medecin'=>439
        ] );

        Rapport::create( [
            'id'=>1059,
            'date'=>'2017-03-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c3',
            'id_medecin'=>440
        ] );

        Rapport::create( [
            'id'=>1060,
            'date'=>'2017-02-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e22',
            'id_medecin'=>441
        ] );

        Rapport::create( [
            'id'=>1061,
            'date'=>'2016-10-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'f39',
            'id_medecin'=>442
        ] );

        Rapport::create( [
            'id'=>1062,
            'date'=>'2016-11-06',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a17',
            'id_medecin'=>443
        ] );

        Rapport::create( [
            'id'=>1063,
            'date'=>'2017-03-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'d51',
            'id_medecin'=>444
        ] );

        Rapport::create( [
            'id'=>1064,
            'date'=>'2016-10-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b19',
            'id_medecin'=>445
        ] );

        Rapport::create( [
            'id'=>1065,
            'date'=>'2016-12-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b25',
            'id_medecin'=>446
        ] );

        Rapport::create( [
            'id'=>1066,
            'date'=>'2016-10-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e52',
            'id_medecin'=>447
        ] );

        Rapport::create( [
            'id'=>1067,
            'date'=>'2016-10-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b16',
            'id_medecin'=>448
        ] );

        Rapport::create( [
            'id'=>1068,
            'date'=>'2017-01-26',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b19',
            'id_medecin'=>449
        ] );

        Rapport::create( [
            'id'=>1069,
            'date'=>'2017-01-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c14',
            'id_medecin'=>450
        ] );

        Rapport::create( [
            'id'=>1070,
            'date'=>'2017-04-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b34',
            'id_medecin'=>451
        ] );

        Rapport::create( [
            'id'=>1071,
            'date'=>'2017-02-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'d13',
            'id_medecin'=>452
        ] );

        Rapport::create( [
            'id'=>1072,
            'date'=>'2017-04-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e52',
            'id_medecin'=>453
        ] );

        Rapport::create( [
            'id'=>1073,
            'date'=>'2017-02-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c54',
            'id_medecin'=>454
        ] );

        Rapport::create( [
            'id'=>1074,
            'date'=>'2017-01-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e24',
            'id_medecin'=>455
        ] );

        Rapport::create( [
            'id'=>1075,
            'date'=>'2017-01-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>456
        ] );

        Rapport::create( [
            'id'=>1076,
            'date'=>'2017-01-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b34',
            'id_medecin'=>457
        ] );

        Rapport::create( [
            'id'=>1077,
            'date'=>'2017-03-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c54',
            'id_medecin'=>458
        ] );

        Rapport::create( [
            'id'=>1078,
            'date'=>'2017-01-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e39',
            'id_medecin'=>459
        ] );

        Rapport::create( [
            'id'=>1079,
            'date'=>'2016-11-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a55',
            'id_medecin'=>460
        ] );

        Rapport::create( [
            'id'=>1080,
            'date'=>'2016-12-31',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>461
        ] );

        Rapport::create( [
            'id'=>1081,
            'date'=>'2016-11-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b28',
            'id_medecin'=>462
        ] );

        Rapport::create( [
            'id'=>1082,
            'date'=>'2016-12-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e24',
            'id_medecin'=>463
        ] );

        Rapport::create( [
            'id'=>1083,
            'date'=>'2017-04-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a131',
            'id_medecin'=>464
        ] );

        Rapport::create( [
            'id'=>1084,
            'date'=>'2017-02-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e22',
            'id_medecin'=>465
        ] );

        Rapport::create( [
            'id'=>1085,
            'date'=>'2017-01-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b25',
            'id_medecin'=>466
        ] );

        Rapport::create( [
            'id'=>1086,
            'date'=>'2016-12-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'f39',
            'id_medecin'=>467
        ] );

        Rapport::create( [
            'id'=>1087,
            'date'=>'2017-04-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e24',
            'id_medecin'=>468
        ] );

        Rapport::create( [
            'id'=>1088,
            'date'=>'2016-12-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a93',
            'id_medecin'=>469
        ] );

        Rapport::create( [
            'id'=>1089,
            'date'=>'2017-04-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c3',
            'id_medecin'=>470
        ] );

        Rapport::create( [
            'id'=>1090,
            'date'=>'2016-12-30',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e39',
            'id_medecin'=>471
        ] );

        Rapport::create( [
            'id'=>1091,
            'date'=>'2017-04-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a131',
            'id_medecin'=>472
        ] );

        Rapport::create( [
            'id'=>1092,
            'date'=>'2017-02-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a131',
            'id_medecin'=>473
        ] );

        Rapport::create( [
            'id'=>1093,
            'date'=>'2017-03-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'f21',
            'id_medecin'=>474
        ] );

        Rapport::create( [
            'id'=>1094,
            'date'=>'2017-02-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'c54',
            'id_medecin'=>475
        ] );

        Rapport::create( [
            'id'=>1095,
            'date'=>'2017-02-04',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a55',
            'id_medecin'=>476
        ] );

        Rapport::create( [
            'id'=>1096,
            'date'=>'2017-02-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b4',
            'id_medecin'=>477
        ] );

        Rapport::create( [
            'id'=>1097,
            'date'=>'2016-11-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'b34',
            'id_medecin'=>478
        ] );

        Rapport::create( [
            'id'=>1098,
            'date'=>'2017-04-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b34',
            'id_medecin'=>479
        ] );

        Rapport::create( [
            'id'=>1099,
            'date'=>'2017-01-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a131',
            'id_medecin'=>480
        ] );

        Rapport::create( [
            'id'=>1100,
            'date'=>'2016-10-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'d51',
            'id_medecin'=>481
        ] );

        Rapport::create( [
            'id'=>1101,
            'date'=>'2016-11-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b59',
            'id_medecin'=>482
        ] );

        Rapport::create( [
            'id'=>1102,
            'date'=>'2017-03-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b28',
            'id_medecin'=>483
        ] );

        Rapport::create( [
            'id'=>1103,
            'date'=>'2016-11-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e5',
            'id_medecin'=>484
        ] );

        Rapport::create( [
            'id'=>1104,
            'date'=>'2017-03-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e52',
            'id_medecin'=>485
        ] );

        Rapport::create( [
            'id'=>1105,
            'date'=>'2017-04-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e52',
            'id_medecin'=>486
        ] );

        Rapport::create( [
            'id'=>1106,
            'date'=>'2016-11-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'c54',
            'id_medecin'=>487
        ] );

        Rapport::create( [
            'id'=>1107,
            'date'=>'2017-01-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'d13',
            'id_medecin'=>488
        ] );

        Rapport::create( [
            'id'=>1108,
            'date'=>'2016-12-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b25',
            'id_medecin'=>489
        ] );

        Rapport::create( [
            'id'=>1109,
            'date'=>'2016-12-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b34',
            'id_medecin'=>490
        ] );

        Rapport::create( [
            'id'=>1110,
            'date'=>'2016-10-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e52',
            'id_medecin'=>491
        ] );

        Rapport::create( [
            'id'=>1111,
            'date'=>'2016-12-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b25',
            'id_medecin'=>492
        ] );

        Rapport::create( [
            'id'=>1112,
            'date'=>'2016-12-17',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e22',
            'id_medecin'=>493
        ] );

        Rapport::create( [
            'id'=>1113,
            'date'=>'2017-04-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e22',
            'id_medecin'=>494
        ] );

        Rapport::create( [
            'id'=>1114,
            'date'=>'2017-01-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b59',
            'id_medecin'=>495
        ] );

        Rapport::create( [
            'id'=>1115,
            'date'=>'2016-11-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'d13',
            'id_medecin'=>496
        ] );

        Rapport::create( [
            'id'=>1116,
            'date'=>'2017-04-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'a17',
            'id_medecin'=>497
        ] );

        Rapport::create( [
            'id'=>1117,
            'date'=>'2016-10-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a55',
            'id_medecin'=>498
        ] );

        Rapport::create( [
            'id'=>1118,
            'date'=>'2017-04-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'f39',
            'id_medecin'=>499
        ] );

        Rapport::create( [
            'id'=>1119,
            'date'=>'2017-03-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'c3',
            'id_medecin'=>500
        ] );

        Rapport::create( [
            'id'=>1120,
            'date'=>'2017-01-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a93',
            'id_medecin'=>501
        ] );

        Rapport::create( [
            'id'=>1121,
            'date'=>'2017-02-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e5',
            'id_medecin'=>502
        ] );

        Rapport::create( [
            'id'=>1122,
            'date'=>'2016-10-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'f39',
            'id_medecin'=>503
        ] );

        Rapport::create( [
            'id'=>1123,
            'date'=>'2016-11-26',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'e52',
            'id_medecin'=>504
        ] );

        Rapport::create( [
            'id'=>1124,
            'date'=>'2017-04-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b59',
            'id_medecin'=>505
        ] );

        Rapport::create( [
            'id'=>1125,
            'date'=>'2017-02-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e24',
            'id_medecin'=>506
        ] );

        Rapport::create( [
            'id'=>1126,
            'date'=>'2017-04-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b13',
            'id_medecin'=>507
        ] );

        Rapport::create( [
            'id'=>1127,
            'date'=>'2017-02-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'d51',
            'id_medecin'=>508
        ] );

        Rapport::create( [
            'id'=>1128,
            'date'=>'2017-03-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c14',
            'id_medecin'=>509
        ] );

        Rapport::create( [
            'id'=>1129,
            'date'=>'2016-10-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b34',
            'id_medecin'=>510
        ] );

        Rapport::create( [
            'id'=>1130,
            'date'=>'2016-11-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b19',
            'id_medecin'=>511
        ] );

        Rapport::create( [
            'id'=>1131,
            'date'=>'2017-03-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c3',
            'id_medecin'=>512
        ] );

        Rapport::create( [
            'id'=>1132,
            'date'=>'2017-02-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e5',
            'id_medecin'=>513
        ] );

        Rapport::create( [
            'id'=>1133,
            'date'=>'2017-04-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b59',
            'id_medecin'=>514
        ] );

        Rapport::create( [
            'id'=>1134,
            'date'=>'2017-01-27',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b16',
            'id_medecin'=>515
        ] );

        Rapport::create( [
            'id'=>1135,
            'date'=>'2017-03-28',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e52',
            'id_medecin'=>516
        ] );

        Rapport::create( [
            'id'=>1136,
            'date'=>'2017-03-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b4',
            'id_medecin'=>517
        ] );

        Rapport::create( [
            'id'=>1137,
            'date'=>'2017-01-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b13',
            'id_medecin'=>518
        ] );

        Rapport::create( [
            'id'=>1138,
            'date'=>'2017-04-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'c14',
            'id_medecin'=>519
        ] );

        Rapport::create( [
            'id'=>1139,
            'date'=>'2016-10-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b4',
            'id_medecin'=>520
        ] );

        Rapport::create( [
            'id'=>1140,
            'date'=>'2017-02-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e39',
            'id_medecin'=>521
        ] );

        Rapport::create( [
            'id'=>1141,
            'date'=>'2016-10-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>522
        ] );

        Rapport::create( [
            'id'=>1142,
            'date'=>'2016-10-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c54',
            'id_medecin'=>523
        ] );

        Rapport::create( [
            'id'=>1143,
            'date'=>'2017-01-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d13',
            'id_medecin'=>524
        ] );

        Rapport::create( [
            'id'=>1144,
            'date'=>'2017-04-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e49',
            'id_medecin'=>525
        ] );

        Rapport::create( [
            'id'=>1145,
            'date'=>'2016-12-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b13',
            'id_medecin'=>526
        ] );

        Rapport::create( [
            'id'=>1146,
            'date'=>'2016-10-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b59',
            'id_medecin'=>527
        ] );

        Rapport::create( [
            'id'=>1147,
            'date'=>'2017-03-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'d51',
            'id_medecin'=>528
        ] );

        Rapport::create( [
            'id'=>1148,
            'date'=>'2017-01-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d51',
            'id_medecin'=>529
        ] );

        Rapport::create( [
            'id'=>1149,
            'date'=>'2016-10-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e39',
            'id_medecin'=>530
        ] );

        Rapport::create( [
            'id'=>1150,
            'date'=>'2016-12-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a55',
            'id_medecin'=>531
        ] );

        Rapport::create( [
            'id'=>1151,
            'date'=>'2017-01-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b16',
            'id_medecin'=>532
        ] );

        Rapport::create( [
            'id'=>1152,
            'date'=>'2016-10-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'f21',
            'id_medecin'=>533
        ] );

        Rapport::create( [
            'id'=>1153,
            'date'=>'2017-01-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b25',
            'id_medecin'=>534
        ] );

        Rapport::create( [
            'id'=>1154,
            'date'=>'2016-11-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b28',
            'id_medecin'=>535
        ] );

        Rapport::create( [
            'id'=>1155,
            'date'=>'2016-11-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'d13',
            'id_medecin'=>536
        ] );

        Rapport::create( [
            'id'=>1156,
            'date'=>'2016-10-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'e39',
            'id_medecin'=>537
        ] );

        Rapport::create( [
            'id'=>1157,
            'date'=>'2016-11-10',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b59',
            'id_medecin'=>538
        ] );

        Rapport::create( [
            'id'=>1158,
            'date'=>'2016-12-05',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e52',
            'id_medecin'=>539
        ] );

        Rapport::create( [
            'id'=>1159,
            'date'=>'2017-04-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e24',
            'id_medecin'=>540
        ] );

        Rapport::create( [
            'id'=>1160,
            'date'=>'2016-11-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a55',
            'id_medecin'=>541
        ] );

        Rapport::create( [
            'id'=>1161,
            'date'=>'2017-03-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'c14',
            'id_medecin'=>542
        ] );

        Rapport::create( [
            'id'=>1162,
            'date'=>'2017-02-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e24',
            'id_medecin'=>543
        ] );

        Rapport::create( [
            'id'=>1163,
            'date'=>'2017-02-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a93',
            'id_medecin'=>544
        ] );

        Rapport::create( [
            'id'=>1164,
            'date'=>'2016-12-31',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b28',
            'id_medecin'=>545
        ] );

        Rapport::create( [
            'id'=>1165,
            'date'=>'2016-11-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'b25',
            'id_medecin'=>546
        ] );

        Rapport::create( [
            'id'=>1166,
            'date'=>'2016-10-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'f39',
            'id_medecin'=>547
        ] );

        Rapport::create( [
            'id'=>1167,
            'date'=>'2017-01-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b19',
            'id_medecin'=>548
        ] );

        Rapport::create( [
            'id'=>1168,
            'date'=>'2017-02-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b50',
            'id_medecin'=>549
        ] );

        Rapport::create( [
            'id'=>1169,
            'date'=>'2017-03-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>550
        ] );

        Rapport::create( [
            'id'=>1170,
            'date'=>'2016-10-26',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'f21',
            'id_medecin'=>551
        ] );

        Rapport::create( [
            'id'=>1171,
            'date'=>'2016-11-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e49',
            'id_medecin'=>552
        ] );

        Rapport::create( [
            'id'=>1172,
            'date'=>'2017-04-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b16',
            'id_medecin'=>553
        ] );

        Rapport::create( [
            'id'=>1173,
            'date'=>'2017-03-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b4',
            'id_medecin'=>554
        ] );

        Rapport::create( [
            'id'=>1174,
            'date'=>'2017-02-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'d51',
            'id_medecin'=>555
        ] );

        Rapport::create( [
            'id'=>1175,
            'date'=>'2017-03-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c3',
            'id_medecin'=>556
        ] );

        Rapport::create( [
            'id'=>1176,
            'date'=>'2017-04-09',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'e22',
            'id_medecin'=>557
        ] );

        Rapport::create( [
            'id'=>1177,
            'date'=>'2016-12-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'c3',
            'id_medecin'=>558
        ] );

        Rapport::create( [
            'id'=>1178,
            'date'=>'2017-03-23',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e24',
            'id_medecin'=>559
        ] );

        Rapport::create( [
            'id'=>1179,
            'date'=>'2017-03-07',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b16',
            'id_medecin'=>560
        ] );

        Rapport::create( [
            'id'=>1180,
            'date'=>'2016-12-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b19',
            'id_medecin'=>561
        ] );

        Rapport::create( [
            'id'=>1181,
            'date'=>'2017-02-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b4',
            'id_medecin'=>562
        ] );

        Rapport::create( [
            'id'=>1182,
            'date'=>'2016-12-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e22',
            'id_medecin'=>563
        ] );

        Rapport::create( [
            'id'=>1183,
            'date'=>'2017-03-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'f39',
            'id_medecin'=>564
        ] );

        Rapport::create( [
            'id'=>1184,
            'date'=>'2017-01-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a131',
            'id_medecin'=>565
        ] );

        Rapport::create( [
            'id'=>1185,
            'date'=>'2017-03-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e24',
            'id_medecin'=>566
        ] );

        Rapport::create( [
            'id'=>1186,
            'date'=>'2016-10-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b19',
            'id_medecin'=>567
        ] );

        Rapport::create( [
            'id'=>1187,
            'date'=>'2016-10-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'d13',
            'id_medecin'=>568
        ] );

        Rapport::create( [
            'id'=>1188,
            'date'=>'2016-10-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a17',
            'id_medecin'=>569
        ] );

        Rapport::create( [
            'id'=>1189,
            'date'=>'2016-10-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e52',
            'id_medecin'=>570
        ] );

        Rapport::create( [
            'id'=>1190,
            'date'=>'2017-03-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'d51',
            'id_medecin'=>571
        ] );

        Rapport::create( [
            'id'=>1191,
            'date'=>'2016-12-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'d13',
            'id_medecin'=>572
        ] );

        Rapport::create( [
            'id'=>1192,
            'date'=>'2017-03-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b28',
            'id_medecin'=>573
        ] );

        Rapport::create( [
            'id'=>1193,
            'date'=>'2016-10-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b19',
            'id_medecin'=>574
        ] );

        Rapport::create( [
            'id'=>1194,
            'date'=>'2016-12-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e49',
            'id_medecin'=>575
        ] );

        Rapport::create( [
            'id'=>1195,
            'date'=>'2017-02-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'d51',
            'id_medecin'=>576
        ] );

        Rapport::create( [
            'id'=>1196,
            'date'=>'2016-10-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>577
        ] );

        Rapport::create( [
            'id'=>1197,
            'date'=>'2017-03-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e39',
            'id_medecin'=>578
        ] );

        Rapport::create( [
            'id'=>1198,
            'date'=>'2017-01-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b16',
            'id_medecin'=>579
        ] );

        Rapport::create( [
            'id'=>1199,
            'date'=>'2017-03-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b4',
            'id_medecin'=>580
        ] );

        Rapport::create( [
            'id'=>1200,
            'date'=>'2016-11-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e52',
            'id_medecin'=>581
        ] );

        Rapport::create( [
            'id'=>1201,
            'date'=>'2017-01-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a17',
            'id_medecin'=>582
        ] );

        Rapport::create( [
            'id'=>1202,
            'date'=>'2016-12-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e39',
            'id_medecin'=>583
        ] );

        Rapport::create( [
            'id'=>1203,
            'date'=>'2017-01-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'d13',
            'id_medecin'=>584
        ] );

        Rapport::create( [
            'id'=>1204,
            'date'=>'2016-12-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b25',
            'id_medecin'=>585
        ] );

        Rapport::create( [
            'id'=>1205,
            'date'=>'2017-04-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b13',
            'id_medecin'=>586
        ] );

        Rapport::create( [
            'id'=>1206,
            'date'=>'2016-11-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'f21',
            'id_medecin'=>587
        ] );

        Rapport::create( [
            'id'=>1207,
            'date'=>'2017-03-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'c3',
            'id_medecin'=>588
        ] );

        Rapport::create( [
            'id'=>1208,
            'date'=>'2017-04-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'f39',
            'id_medecin'=>589
        ] );

        Rapport::create( [
            'id'=>1209,
            'date'=>'2017-03-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e49',
            'id_medecin'=>590
        ] );

        Rapport::create( [
            'id'=>1210,
            'date'=>'2017-01-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e39',
            'id_medecin'=>591
        ] );

        Rapport::create( [
            'id'=>1211,
            'date'=>'2017-04-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c54',
            'id_medecin'=>592
        ] );

        Rapport::create( [
            'id'=>1212,
            'date'=>'2017-04-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b16',
            'id_medecin'=>593
        ] );

        Rapport::create( [
            'id'=>1213,
            'date'=>'2016-11-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d51',
            'id_medecin'=>594
        ] );

        Rapport::create( [
            'id'=>1214,
            'date'=>'2016-10-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a17',
            'id_medecin'=>595
        ] );

        Rapport::create( [
            'id'=>1215,
            'date'=>'2017-01-21',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b25',
            'id_medecin'=>596
        ] );

        Rapport::create( [
            'id'=>1216,
            'date'=>'2017-02-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'d51',
            'id_medecin'=>597
        ] );

        Rapport::create( [
            'id'=>1217,
            'date'=>'2016-12-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'f21',
            'id_medecin'=>598
        ] );

        Rapport::create( [
            'id'=>1218,
            'date'=>'2016-12-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b34',
            'id_medecin'=>599
        ] );

        Rapport::create( [
            'id'=>1219,
            'date'=>'2017-04-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b16',
            'id_medecin'=>600
        ] );

        Rapport::create( [
            'id'=>1220,
            'date'=>'2016-11-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b25',
            'id_medecin'=>601
        ] );

        Rapport::create( [
            'id'=>1221,
            'date'=>'2016-12-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e5',
            'id_medecin'=>602
        ] );

        Rapport::create( [
            'id'=>1222,
            'date'=>'2016-12-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c54',
            'id_medecin'=>603
        ] );

        Rapport::create( [
            'id'=>1223,
            'date'=>'2017-03-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f21',
            'id_medecin'=>604
        ] );

        Rapport::create( [
            'id'=>1224,
            'date'=>'2016-12-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e49',
            'id_medecin'=>605
        ] );

        Rapport::create( [
            'id'=>1225,
            'date'=>'2016-11-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e22',
            'id_medecin'=>606
        ] );

        Rapport::create( [
            'id'=>1226,
            'date'=>'2017-02-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b4',
            'id_medecin'=>607
        ] );

        Rapport::create( [
            'id'=>1227,
            'date'=>'2016-12-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a17',
            'id_medecin'=>608
        ] );

        Rapport::create( [
            'id'=>1228,
            'date'=>'2017-04-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b4',
            'id_medecin'=>609
        ] );

        Rapport::create( [
            'id'=>1229,
            'date'=>'2017-01-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b4',
            'id_medecin'=>610
        ] );

        Rapport::create( [
            'id'=>1230,
            'date'=>'2017-02-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b59',
            'id_medecin'=>611
        ] );

        Rapport::create( [
            'id'=>1231,
            'date'=>'2016-11-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b34',
            'id_medecin'=>612
        ] );

        Rapport::create( [
            'id'=>1232,
            'date'=>'2017-01-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c3',
            'id_medecin'=>613
        ] );

        Rapport::create( [
            'id'=>1233,
            'date'=>'2017-03-04',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c54',
            'id_medecin'=>614
        ] );

        Rapport::create( [
            'id'=>1234,
            'date'=>'2017-04-14',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b4',
            'id_medecin'=>615
        ] );

        Rapport::create( [
            'id'=>1235,
            'date'=>'2017-01-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b25',
            'id_medecin'=>616
        ] );

        Rapport::create( [
            'id'=>1236,
            'date'=>'2016-11-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b4',
            'id_medecin'=>617
        ] );

        Rapport::create( [
            'id'=>1237,
            'date'=>'2016-11-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b50',
            'id_medecin'=>618
        ] );

        Rapport::create( [
            'id'=>1238,
            'date'=>'2016-12-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b16',
            'id_medecin'=>619
        ] );

        Rapport::create( [
            'id'=>1239,
            'date'=>'2016-12-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b59',
            'id_medecin'=>620
        ] );

        Rapport::create( [
            'id'=>1240,
            'date'=>'2017-03-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c14',
            'id_medecin'=>621
        ] );

        Rapport::create( [
            'id'=>1241,
            'date'=>'2016-10-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c54',
            'id_medecin'=>622
        ] );

        Rapport::create( [
            'id'=>1242,
            'date'=>'2016-12-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b19',
            'id_medecin'=>623
        ] );

        Rapport::create( [
            'id'=>1243,
            'date'=>'2016-12-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>624
        ] );

        Rapport::create( [
            'id'=>1244,
            'date'=>'2017-01-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b34',
            'id_medecin'=>625
        ] );

        Rapport::create( [
            'id'=>1245,
            'date'=>'2017-02-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e22',
            'id_medecin'=>626
        ] );

        Rapport::create( [
            'id'=>1246,
            'date'=>'2016-12-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'a131',
            'id_medecin'=>627
        ] );

        Rapport::create( [
            'id'=>1247,
            'date'=>'2016-12-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b25',
            'id_medecin'=>628
        ] );

        Rapport::create( [
            'id'=>1248,
            'date'=>'2017-04-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a93',
            'id_medecin'=>629
        ] );

        Rapport::create( [
            'id'=>1249,
            'date'=>'2016-10-30',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'a17',
            'id_medecin'=>630
        ] );

        Rapport::create( [
            'id'=>1250,
            'date'=>'2017-01-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'f39',
            'id_medecin'=>631
        ] );

        Rapport::create( [
            'id'=>1251,
            'date'=>'2016-12-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e5',
            'id_medecin'=>632
        ] );

        Rapport::create( [
            'id'=>1252,
            'date'=>'2017-03-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b28',
            'id_medecin'=>633
        ] );

        Rapport::create( [
            'id'=>1253,
            'date'=>'2016-12-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>634
        ] );

        Rapport::create( [
            'id'=>1254,
            'date'=>'2016-11-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c54',
            'id_medecin'=>635
        ] );

        Rapport::create( [
            'id'=>1255,
            'date'=>'2016-10-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e22',
            'id_medecin'=>636
        ] );

        Rapport::create( [
            'id'=>1256,
            'date'=>'2017-04-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b28',
            'id_medecin'=>637
        ] );

        Rapport::create( [
            'id'=>1257,
            'date'=>'2017-04-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b59',
            'id_medecin'=>638
        ] );

        Rapport::create( [
            'id'=>1258,
            'date'=>'2017-03-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d51',
            'id_medecin'=>639
        ] );

        Rapport::create( [
            'id'=>1259,
            'date'=>'2017-03-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b28',
            'id_medecin'=>640
        ] );

        Rapport::create( [
            'id'=>1260,
            'date'=>'2017-01-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a131',
            'id_medecin'=>641
        ] );

        Rapport::create( [
            'id'=>1261,
            'date'=>'2016-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e5',
            'id_medecin'=>642
        ] );

        Rapport::create( [
            'id'=>1262,
            'date'=>'2016-11-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'f39',
            'id_medecin'=>643
        ] );

        Rapport::create( [
            'id'=>1263,
            'date'=>'2017-03-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b25',
            'id_medecin'=>644
        ] );

        Rapport::create( [
            'id'=>1264,
            'date'=>'2017-02-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b19',
            'id_medecin'=>645
        ] );

        Rapport::create( [
            'id'=>1265,
            'date'=>'2017-03-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a93',
            'id_medecin'=>646
        ] );

        Rapport::create( [
            'id'=>1266,
            'date'=>'2017-02-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b19',
            'id_medecin'=>647
        ] );

        Rapport::create( [
            'id'=>1267,
            'date'=>'2016-11-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a55',
            'id_medecin'=>648
        ] );

        Rapport::create( [
            'id'=>1268,
            'date'=>'2017-03-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e22',
            'id_medecin'=>649
        ] );

        Rapport::create( [
            'id'=>1269,
            'date'=>'2016-11-03',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'f21',
            'id_medecin'=>650
        ] );

        Rapport::create( [
            'id'=>1270,
            'date'=>'2016-11-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b34',
            'id_medecin'=>651
        ] );

        Rapport::create( [
            'id'=>1271,
            'date'=>'2017-03-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b16',
            'id_medecin'=>652
        ] );

        Rapport::create( [
            'id'=>1272,
            'date'=>'2016-10-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>653
        ] );

        Rapport::create( [
            'id'=>1273,
            'date'=>'2016-10-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e39',
            'id_medecin'=>654
        ] );

        Rapport::create( [
            'id'=>1274,
            'date'=>'2016-12-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e39',
            'id_medecin'=>655
        ] );

        Rapport::create( [
            'id'=>1275,
            'date'=>'2017-01-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a17',
            'id_medecin'=>656
        ] );

        Rapport::create( [
            'id'=>1276,
            'date'=>'2016-12-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'a93',
            'id_medecin'=>657
        ] );

        Rapport::create( [
            'id'=>1277,
            'date'=>'2017-01-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'c3',
            'id_medecin'=>658
        ] );

        Rapport::create( [
            'id'=>1278,
            'date'=>'2017-01-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b28',
            'id_medecin'=>659
        ] );

        Rapport::create( [
            'id'=>1279,
            'date'=>'2017-02-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a55',
            'id_medecin'=>660
        ] );

        Rapport::create( [
            'id'=>1280,
            'date'=>'2017-02-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e39',
            'id_medecin'=>661
        ] );

        Rapport::create( [
            'id'=>1281,
            'date'=>'2016-11-20',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e24',
            'id_medecin'=>662
        ] );

        Rapport::create( [
            'id'=>1282,
            'date'=>'2016-11-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b13',
            'id_medecin'=>663
        ] );

        Rapport::create( [
            'id'=>1283,
            'date'=>'2017-03-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e22',
            'id_medecin'=>664
        ] );

        Rapport::create( [
            'id'=>1284,
            'date'=>'2017-03-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'a17',
            'id_medecin'=>665
        ] );

        Rapport::create( [
            'id'=>1285,
            'date'=>'2016-12-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'e24',
            'id_medecin'=>666
        ] );

        Rapport::create( [
            'id'=>1286,
            'date'=>'2016-12-12',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'f21',
            'id_medecin'=>667
        ] );

        Rapport::create( [
            'id'=>1287,
            'date'=>'2016-11-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e39',
            'id_medecin'=>668
        ] );

        Rapport::create( [
            'id'=>1288,
            'date'=>'2017-02-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b19',
            'id_medecin'=>669
        ] );

        Rapport::create( [
            'id'=>1289,
            'date'=>'2016-12-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e22',
            'id_medecin'=>670
        ] );

        Rapport::create( [
            'id'=>1290,
            'date'=>'2017-03-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b16',
            'id_medecin'=>671
        ] );

        Rapport::create( [
            'id'=>1291,
            'date'=>'2017-04-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>672
        ] );

        Rapport::create( [
            'id'=>1292,
            'date'=>'2017-02-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'c54',
            'id_medecin'=>673
        ] );

        Rapport::create( [
            'id'=>1293,
            'date'=>'2017-01-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b13',
            'id_medecin'=>674
        ] );

        Rapport::create( [
            'id'=>1294,
            'date'=>'2017-01-17',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e5',
            'id_medecin'=>675
        ] );

        Rapport::create( [
            'id'=>1295,
            'date'=>'2017-01-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a55',
            'id_medecin'=>676
        ] );

        Rapport::create( [
            'id'=>1296,
            'date'=>'2016-10-28',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d13',
            'id_medecin'=>677
        ] );

        Rapport::create( [
            'id'=>1297,
            'date'=>'2017-03-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a55',
            'id_medecin'=>678
        ] );

        Rapport::create( [
            'id'=>1298,
            'date'=>'2016-11-08',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f39',
            'id_medecin'=>679
        ] );

        Rapport::create( [
            'id'=>1299,
            'date'=>'2017-01-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b4',
            'id_medecin'=>680
        ] );

        Rapport::create( [
            'id'=>1300,
            'date'=>'2017-02-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'f21',
            'id_medecin'=>681
        ] );

        Rapport::create( [
            'id'=>1301,
            'date'=>'2017-02-19',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b50',
            'id_medecin'=>682
        ] );

        Rapport::create( [
            'id'=>1302,
            'date'=>'2017-01-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a131',
            'id_medecin'=>683
        ] );

        Rapport::create( [
            'id'=>1303,
            'date'=>'2016-12-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e24',
            'id_medecin'=>684
        ] );

        Rapport::create( [
            'id'=>1304,
            'date'=>'2017-03-23',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b50',
            'id_medecin'=>685
        ] );

        Rapport::create( [
            'id'=>1305,
            'date'=>'2016-12-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c14',
            'id_medecin'=>686
        ] );

        Rapport::create( [
            'id'=>1306,
            'date'=>'2017-04-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b25',
            'id_medecin'=>687
        ] );

        Rapport::create( [
            'id'=>1307,
            'date'=>'2016-10-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a131',
            'id_medecin'=>688
        ] );

        Rapport::create( [
            'id'=>1308,
            'date'=>'2017-02-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b13',
            'id_medecin'=>689
        ] );

        Rapport::create( [
            'id'=>1309,
            'date'=>'2017-03-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c3',
            'id_medecin'=>690
        ] );

        Rapport::create( [
            'id'=>1310,
            'date'=>'2016-12-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e39',
            'id_medecin'=>691
        ] );

        Rapport::create( [
            'id'=>1311,
            'date'=>'2017-01-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b19',
            'id_medecin'=>692
        ] );

        Rapport::create( [
            'id'=>1312,
            'date'=>'2016-11-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e5',
            'id_medecin'=>693
        ] );

        Rapport::create( [
            'id'=>1313,
            'date'=>'2016-12-31',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'d51',
            'id_medecin'=>694
        ] );

        Rapport::create( [
            'id'=>1314,
            'date'=>'2017-01-29',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b28',
            'id_medecin'=>695
        ] );

        Rapport::create( [
            'id'=>1315,
            'date'=>'2016-11-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'f21',
            'id_medecin'=>696
        ] );

        Rapport::create( [
            'id'=>1316,
            'date'=>'2016-12-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b34',
            'id_medecin'=>697
        ] );

        Rapport::create( [
            'id'=>1317,
            'date'=>'2017-03-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b19',
            'id_medecin'=>698
        ] );

        Rapport::create( [
            'id'=>1318,
            'date'=>'2016-12-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b4',
            'id_medecin'=>699
        ] );

        Rapport::create( [
            'id'=>1319,
            'date'=>'2016-10-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'d51',
            'id_medecin'=>700
        ] );

        Rapport::create( [
            'id'=>1320,
            'date'=>'2017-02-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c14',
            'id_medecin'=>701
        ] );

        Rapport::create( [
            'id'=>1321,
            'date'=>'2017-01-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b25',
            'id_medecin'=>702
        ] );

        Rapport::create( [
            'id'=>1322,
            'date'=>'2016-10-10',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a17',
            'id_medecin'=>703
        ] );

        Rapport::create( [
            'id'=>1323,
            'date'=>'2017-02-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b34',
            'id_medecin'=>704
        ] );

        Rapport::create( [
            'id'=>1324,
            'date'=>'2017-01-31',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e39',
            'id_medecin'=>705
        ] );

        Rapport::create( [
            'id'=>1325,
            'date'=>'2017-03-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b16',
            'id_medecin'=>706
        ] );

        Rapport::create( [
            'id'=>1326,
            'date'=>'2017-01-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'f21',
            'id_medecin'=>707
        ] );

        Rapport::create( [
            'id'=>1327,
            'date'=>'2016-11-19',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>708
        ] );

        Rapport::create( [
            'id'=>1328,
            'date'=>'2017-02-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a131',
            'id_medecin'=>709
        ] );

        Rapport::create( [
            'id'=>1329,
            'date'=>'2017-03-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e22',
            'id_medecin'=>710
        ] );

        Rapport::create( [
            'id'=>1330,
            'date'=>'2016-10-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b19',
            'id_medecin'=>711
        ] );

        Rapport::create( [
            'id'=>1331,
            'date'=>'2016-12-19',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b25',
            'id_medecin'=>712
        ] );

        Rapport::create( [
            'id'=>1332,
            'date'=>'2016-10-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e52',
            'id_medecin'=>713
        ] );

        Rapport::create( [
            'id'=>1333,
            'date'=>'2017-02-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b28',
            'id_medecin'=>714
        ] );

        Rapport::create( [
            'id'=>1334,
            'date'=>'2017-02-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'d13',
            'id_medecin'=>715
        ] );

        Rapport::create( [
            'id'=>1335,
            'date'=>'2016-11-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b59',
            'id_medecin'=>716
        ] );

        Rapport::create( [
            'id'=>1336,
            'date'=>'2017-03-21',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b19',
            'id_medecin'=>717
        ] );

        Rapport::create( [
            'id'=>1337,
            'date'=>'2016-12-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e22',
            'id_medecin'=>718
        ] );

        Rapport::create( [
            'id'=>1338,
            'date'=>'2017-02-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e39',
            'id_medecin'=>719
        ] );

        Rapport::create( [
            'id'=>1339,
            'date'=>'2016-10-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'d13',
            'id_medecin'=>720
        ] );

        Rapport::create( [
            'id'=>1340,
            'date'=>'2016-11-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b59',
            'id_medecin'=>721
        ] );

        Rapport::create( [
            'id'=>1341,
            'date'=>'2017-03-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b59',
            'id_medecin'=>722
        ] );

        Rapport::create( [
            'id'=>1342,
            'date'=>'2017-01-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'f39',
            'id_medecin'=>723
        ] );

        Rapport::create( [
            'id'=>1343,
            'date'=>'2017-04-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'c14',
            'id_medecin'=>724
        ] );

        Rapport::create( [
            'id'=>1344,
            'date'=>'2016-10-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b4',
            'id_medecin'=>725
        ] );

        Rapport::create( [
            'id'=>1345,
            'date'=>'2017-01-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'d51',
            'id_medecin'=>726
        ] );

        Rapport::create( [
            'id'=>1346,
            'date'=>'2016-11-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f21',
            'id_medecin'=>727
        ] );

        Rapport::create( [
            'id'=>1347,
            'date'=>'2017-01-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b50',
            'id_medecin'=>728
        ] );

        Rapport::create( [
            'id'=>1348,
            'date'=>'2016-10-16',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a131',
            'id_medecin'=>729
        ] );

        Rapport::create( [
            'id'=>1349,
            'date'=>'2017-02-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a93',
            'id_medecin'=>730
        ] );

        Rapport::create( [
            'id'=>1350,
            'date'=>'2016-10-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'f39',
            'id_medecin'=>731
        ] );

        Rapport::create( [
            'id'=>1351,
            'date'=>'2016-10-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e52',
            'id_medecin'=>732
        ] );

        Rapport::create( [
            'id'=>1352,
            'date'=>'2016-11-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b13',
            'id_medecin'=>733
        ] );

        Rapport::create( [
            'id'=>1353,
            'date'=>'2017-03-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'e52',
            'id_medecin'=>734
        ] );

        Rapport::create( [
            'id'=>1354,
            'date'=>'2016-11-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'d51',
            'id_medecin'=>735
        ] );

        Rapport::create( [
            'id'=>1355,
            'date'=>'2017-01-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>736
        ] );

        Rapport::create( [
            'id'=>1356,
            'date'=>'2016-10-17',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>737
        ] );

        Rapport::create( [
            'id'=>1357,
            'date'=>'2016-12-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c14',
            'id_medecin'=>738
        ] );

        Rapport::create( [
            'id'=>1358,
            'date'=>'2016-10-19',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e22',
            'id_medecin'=>739
        ] );

        Rapport::create( [
            'id'=>1359,
            'date'=>'2017-02-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e24',
            'id_medecin'=>740
        ] );

        Rapport::create( [
            'id'=>1360,
            'date'=>'2016-12-06',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b4',
            'id_medecin'=>741
        ] );

        Rapport::create( [
            'id'=>1361,
            'date'=>'2016-12-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'d51',
            'id_medecin'=>742
        ] );

        Rapport::create( [
            'id'=>1362,
            'date'=>'2016-11-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'c3',
            'id_medecin'=>743
        ] );

        Rapport::create( [
            'id'=>1363,
            'date'=>'2016-12-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a17',
            'id_medecin'=>744
        ] );

        Rapport::create( [
            'id'=>1364,
            'date'=>'2017-04-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b16',
            'id_medecin'=>745
        ] );

        Rapport::create( [
            'id'=>1365,
            'date'=>'2017-02-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e24',
            'id_medecin'=>746
        ] );

        Rapport::create( [
            'id'=>1366,
            'date'=>'2016-12-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'c3',
            'id_medecin'=>747
        ] );

        Rapport::create( [
            'id'=>1367,
            'date'=>'2016-10-07',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b28',
            'id_medecin'=>748
        ] );

        Rapport::create( [
            'id'=>1368,
            'date'=>'2017-01-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a93',
            'id_medecin'=>749
        ] );

        Rapport::create( [
            'id'=>1369,
            'date'=>'2016-11-13',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f39',
            'id_medecin'=>750
        ] );

        Rapport::create( [
            'id'=>1370,
            'date'=>'2016-11-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'f39',
            'id_medecin'=>751
        ] );

        Rapport::create( [
            'id'=>1371,
            'date'=>'2017-02-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a131',
            'id_medecin'=>752
        ] );

        Rapport::create( [
            'id'=>1372,
            'date'=>'2017-02-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c14',
            'id_medecin'=>753
        ] );

        Rapport::create( [
            'id'=>1373,
            'date'=>'2016-10-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a93',
            'id_medecin'=>754
        ] );

        Rapport::create( [
            'id'=>1374,
            'date'=>'2017-03-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'a93',
            'id_medecin'=>755
        ] );

        Rapport::create( [
            'id'=>1375,
            'date'=>'2016-10-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'f21',
            'id_medecin'=>756
        ] );

        Rapport::create( [
            'id'=>1376,
            'date'=>'2016-11-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e49',
            'id_medecin'=>757
        ] );

        Rapport::create( [
            'id'=>1377,
            'date'=>'2017-02-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b59',
            'id_medecin'=>758
        ] );

        Rapport::create( [
            'id'=>1378,
            'date'=>'2017-03-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b50',
            'id_medecin'=>759
        ] );

        Rapport::create( [
            'id'=>1379,
            'date'=>'2017-03-30',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'a93',
            'id_medecin'=>760
        ] );

        Rapport::create( [
            'id'=>1380,
            'date'=>'2017-04-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>761
        ] );

        Rapport::create( [
            'id'=>1381,
            'date'=>'2017-01-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b13',
            'id_medecin'=>762
        ] );

        Rapport::create( [
            'id'=>1382,
            'date'=>'2016-12-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b16',
            'id_medecin'=>763
        ] );

        Rapport::create( [
            'id'=>1383,
            'date'=>'2017-01-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b16',
            'id_medecin'=>764
        ] );

        Rapport::create( [
            'id'=>1384,
            'date'=>'2017-01-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b16',
            'id_medecin'=>765
        ] );

        Rapport::create( [
            'id'=>1385,
            'date'=>'2016-11-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a93',
            'id_medecin'=>766
        ] );

        Rapport::create( [
            'id'=>1386,
            'date'=>'2016-12-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a55',
            'id_medecin'=>767
        ] );

        Rapport::create( [
            'id'=>1387,
            'date'=>'2017-01-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b4',
            'id_medecin'=>768
        ] );

        Rapport::create( [
            'id'=>1388,
            'date'=>'2017-04-12',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f21',
            'id_medecin'=>769
        ] );

        Rapport::create( [
            'id'=>1389,
            'date'=>'2016-10-23',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b50',
            'id_medecin'=>770
        ] );

        Rapport::create( [
            'id'=>1390,
            'date'=>'2016-11-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c3',
            'id_medecin'=>771
        ] );

        Rapport::create( [
            'id'=>1391,
            'date'=>'2016-11-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'e39',
            'id_medecin'=>772
        ] );

        Rapport::create( [
            'id'=>1392,
            'date'=>'2017-04-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c54',
            'id_medecin'=>773
        ] );

        Rapport::create( [
            'id'=>1393,
            'date'=>'2017-02-13',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c3',
            'id_medecin'=>774
        ] );

        Rapport::create( [
            'id'=>1394,
            'date'=>'2017-03-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b28',
            'id_medecin'=>775
        ] );

        Rapport::create( [
            'id'=>1395,
            'date'=>'2016-10-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e22',
            'id_medecin'=>776
        ] );

        Rapport::create( [
            'id'=>1396,
            'date'=>'2017-04-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c3',
            'id_medecin'=>777
        ] );

        Rapport::create( [
            'id'=>1397,
            'date'=>'2017-03-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'d13',
            'id_medecin'=>778
        ] );

        Rapport::create( [
            'id'=>1398,
            'date'=>'2017-04-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b50',
            'id_medecin'=>779
        ] );

        Rapport::create( [
            'id'=>1399,
            'date'=>'2017-04-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e39',
            'id_medecin'=>780
        ] );

        Rapport::create( [
            'id'=>1400,
            'date'=>'2016-11-24',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'e39',
            'id_medecin'=>781
        ] );

        Rapport::create( [
            'id'=>1401,
            'date'=>'2017-03-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a93',
            'id_medecin'=>782
        ] );

        Rapport::create( [
            'id'=>1402,
            'date'=>'2016-10-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b28',
            'id_medecin'=>783
        ] );

        Rapport::create( [
            'id'=>1403,
            'date'=>'2017-02-03',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a131',
            'id_medecin'=>784
        ] );

        Rapport::create( [
            'id'=>1404,
            'date'=>'2016-11-02',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b50',
            'id_medecin'=>785
        ] );

        Rapport::create( [
            'id'=>1405,
            'date'=>'2016-12-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>786
        ] );

        Rapport::create( [
            'id'=>1406,
            'date'=>'2017-01-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b28',
            'id_medecin'=>787
        ] );

        Rapport::create( [
            'id'=>1407,
            'date'=>'2017-03-10',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a55',
            'id_medecin'=>788
        ] );

        Rapport::create( [
            'id'=>1408,
            'date'=>'2017-04-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b25',
            'id_medecin'=>789
        ] );

        Rapport::create( [
            'id'=>1409,
            'date'=>'2016-10-11',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b19',
            'id_medecin'=>790
        ] );

        Rapport::create( [
            'id'=>1410,
            'date'=>'2016-10-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b19',
            'id_medecin'=>791
        ] );

        Rapport::create( [
            'id'=>1411,
            'date'=>'2017-04-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'f39',
            'id_medecin'=>792
        ] );

        Rapport::create( [
            'id'=>1412,
            'date'=>'2016-10-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b19',
            'id_medecin'=>793
        ] );

        Rapport::create( [
            'id'=>1413,
            'date'=>'2016-10-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e49',
            'id_medecin'=>794
        ] );

        Rapport::create( [
            'id'=>1414,
            'date'=>'2017-04-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c3',
            'id_medecin'=>795
        ] );

        Rapport::create( [
            'id'=>1415,
            'date'=>'2016-10-14',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'d13',
            'id_medecin'=>796
        ] );

        Rapport::create( [
            'id'=>1416,
            'date'=>'2016-10-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a93',
            'id_medecin'=>797
        ] );

        Rapport::create( [
            'id'=>1417,
            'date'=>'2017-04-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b28',
            'id_medecin'=>798
        ] );

        Rapport::create( [
            'id'=>1418,
            'date'=>'2017-03-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b28',
            'id_medecin'=>799
        ] );

        Rapport::create( [
            'id'=>1419,
            'date'=>'2017-04-11',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'e39',
            'id_medecin'=>800
        ] );

        Rapport::create( [
            'id'=>1420,
            'date'=>'2016-11-14',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e39',
            'id_medecin'=>801
        ] );

        Rapport::create( [
            'id'=>1421,
            'date'=>'2016-10-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b59',
            'id_medecin'=>802
        ] );

        Rapport::create( [
            'id'=>1422,
            'date'=>'2016-10-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e5',
            'id_medecin'=>803
        ] );

        Rapport::create( [
            'id'=>1423,
            'date'=>'2017-02-02',
            'motif'=>'Demande du médecin',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'d51',
            'id_medecin'=>804
        ] );

        Rapport::create( [
            'id'=>1424,
            'date'=>'2017-03-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'f21',
            'id_medecin'=>805
        ] );

        Rapport::create( [
            'id'=>1425,
            'date'=>'2016-12-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'f39',
            'id_medecin'=>806
        ] );

        Rapport::create( [
            'id'=>1426,
            'date'=>'2016-10-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'d51',
            'id_medecin'=>807
        ] );

        Rapport::create( [
            'id'=>1427,
            'date'=>'2016-10-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b19',
            'id_medecin'=>808
        ] );

        Rapport::create( [
            'id'=>1428,
            'date'=>'2016-11-13',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b50',
            'id_medecin'=>809
        ] );

        Rapport::create( [
            'id'=>1429,
            'date'=>'2016-10-20',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e39',
            'id_medecin'=>810
        ] );

        Rapport::create( [
            'id'=>1430,
            'date'=>'2017-04-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'e22',
            'id_medecin'=>811
        ] );

        Rapport::create( [
            'id'=>1431,
            'date'=>'2017-02-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b59',
            'id_medecin'=>812
        ] );

        Rapport::create( [
            'id'=>1432,
            'date'=>'2016-11-09',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'a93',
            'id_medecin'=>813
        ] );

        Rapport::create( [
            'id'=>1433,
            'date'=>'2017-01-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b28',
            'id_medecin'=>814
        ] );

        Rapport::create( [
            'id'=>1434,
            'date'=>'2017-01-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a93',
            'id_medecin'=>815
        ] );

        Rapport::create( [
            'id'=>1435,
            'date'=>'2017-03-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a55',
            'id_medecin'=>816
        ] );

        Rapport::create( [
            'id'=>1436,
            'date'=>'2016-12-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b13',
            'id_medecin'=>817
        ] );

        Rapport::create( [
            'id'=>1437,
            'date'=>'2017-04-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b16',
            'id_medecin'=>818
        ] );

        Rapport::create( [
            'id'=>1438,
            'date'=>'2016-11-29',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b59',
            'id_medecin'=>819
        ] );

        Rapport::create( [
            'id'=>1439,
            'date'=>'2017-03-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'f39',
            'id_medecin'=>820
        ] );

        Rapport::create( [
            'id'=>1440,
            'date'=>'2016-11-29',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b34',
            'id_medecin'=>821
        ] );

        Rapport::create( [
            'id'=>1441,
            'date'=>'2017-01-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b13',
            'id_medecin'=>822
        ] );

        Rapport::create( [
            'id'=>1442,
            'date'=>'2016-10-12',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e24',
            'id_medecin'=>823
        ] );

        Rapport::create( [
            'id'=>1443,
            'date'=>'2017-03-20',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c14',
            'id_medecin'=>824
        ] );

        Rapport::create( [
            'id'=>1444,
            'date'=>'2017-01-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'c54',
            'id_medecin'=>825
        ] );

        Rapport::create( [
            'id'=>1445,
            'date'=>'2017-01-03',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b50',
            'id_medecin'=>826
        ] );

        Rapport::create( [
            'id'=>1446,
            'date'=>'2016-10-24',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b13',
            'id_medecin'=>827
        ] );

        Rapport::create( [
            'id'=>1447,
            'date'=>'2016-10-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b25',
            'id_medecin'=>828
        ] );

        Rapport::create( [
            'id'=>1448,
            'date'=>'2016-10-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e52',
            'id_medecin'=>829
        ] );

        Rapport::create( [
            'id'=>1449,
            'date'=>'2017-04-08',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'d51',
            'id_medecin'=>830
        ] );

        Rapport::create( [
            'id'=>1450,
            'date'=>'2016-12-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'f21',
            'id_medecin'=>831
        ] );

        Rapport::create( [
            'id'=>1451,
            'date'=>'2017-04-01',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e5',
            'id_medecin'=>832
        ] );

        Rapport::create( [
            'id'=>1452,
            'date'=>'2016-12-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'f39',
            'id_medecin'=>833
        ] );

        Rapport::create( [
            'id'=>1453,
            'date'=>'2016-10-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e39',
            'id_medecin'=>834
        ] );

        Rapport::create( [
            'id'=>1454,
            'date'=>'2016-12-23',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'a55',
            'id_medecin'=>835
        ] );

        Rapport::create( [
            'id'=>1455,
            'date'=>'2017-03-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a93',
            'id_medecin'=>836
        ] );

        Rapport::create( [
            'id'=>1456,
            'date'=>'2017-01-22',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a93',
            'id_medecin'=>837
        ] );

        Rapport::create( [
            'id'=>1457,
            'date'=>'2017-01-27',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b50',
            'id_medecin'=>838
        ] );

        Rapport::create( [
            'id'=>1458,
            'date'=>'2016-11-30',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'f39',
            'id_medecin'=>839
        ] );

        Rapport::create( [
            'id'=>1459,
            'date'=>'2016-12-18',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b25',
            'id_medecin'=>840
        ] );

        Rapport::create( [
            'id'=>1460,
            'date'=>'2016-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c54',
            'id_medecin'=>841
        ] );

        Rapport::create( [
            'id'=>1461,
            'date'=>'2017-04-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b28',
            'id_medecin'=>842
        ] );

        Rapport::create( [
            'id'=>1462,
            'date'=>'2016-11-15',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'f21',
            'id_medecin'=>843
        ] );

        Rapport::create( [
            'id'=>1463,
            'date'=>'2017-03-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'e39',
            'id_medecin'=>844
        ] );

        Rapport::create( [
            'id'=>1464,
            'date'=>'2016-12-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b34',
            'id_medecin'=>845
        ] );

        Rapport::create( [
            'id'=>1465,
            'date'=>'2016-10-21',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b28',
            'id_medecin'=>846
        ] );

        Rapport::create( [
            'id'=>1466,
            'date'=>'2017-03-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b34',
            'id_medecin'=>847
        ] );

        Rapport::create( [
            'id'=>1467,
            'date'=>'2017-01-08',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'e49',
            'id_medecin'=>848
        ] );

        Rapport::create( [
            'id'=>1468,
            'date'=>'2017-01-04',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'f21',
            'id_medecin'=>849
        ] );

        Rapport::create( [
            'id'=>1469,
            'date'=>'2017-02-26',
            'motif'=>'Prise de contact',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a55',
            'id_medecin'=>850
        ] );

        Rapport::create( [
            'id'=>1470,
            'date'=>'2016-11-30',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>851
        ] );

        Rapport::create( [
            'id'=>1471,
            'date'=>'2017-01-22',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e39',
            'id_medecin'=>852
        ] );

        Rapport::create( [
            'id'=>1472,
            'date'=>'2017-03-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b50',
            'id_medecin'=>853
        ] );

        Rapport::create( [
            'id'=>1473,
            'date'=>'2016-11-11',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e39',
            'id_medecin'=>854
        ] );

        Rapport::create( [
            'id'=>1474,
            'date'=>'2017-02-10',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b34',
            'id_medecin'=>855
        ] );

        Rapport::create( [
            'id'=>1475,
            'date'=>'2017-03-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e22',
            'id_medecin'=>856
        ] );

        Rapport::create( [
            'id'=>1476,
            'date'=>'2017-02-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e49',
            'id_medecin'=>857
        ] );

        Rapport::create( [
            'id'=>1477,
            'date'=>'2016-12-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'e52',
            'id_medecin'=>858
        ] );

        Rapport::create( [
            'id'=>1478,
            'date'=>'2017-02-26',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'e22',
            'id_medecin'=>859
        ] );

        Rapport::create( [
            'id'=>1479,
            'date'=>'2016-12-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'b19',
            'id_medecin'=>860
        ] );

        Rapport::create( [
            'id'=>1480,
            'date'=>'2017-03-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a55',
            'id_medecin'=>861
        ] );

        Rapport::create( [
            'id'=>1481,
            'date'=>'2017-03-26',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b25',
            'id_medecin'=>862
        ] );

        Rapport::create( [
            'id'=>1482,
            'date'=>'2017-03-01',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b19',
            'id_medecin'=>863
        ] );

        Rapport::create( [
            'id'=>1483,
            'date'=>'2017-03-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b50',
            'id_medecin'=>864
        ] );

        Rapport::create( [
            'id'=>1484,
            'date'=>'2017-01-24',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>865
        ] );

        Rapport::create( [
            'id'=>1485,
            'date'=>'2016-11-07',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'a17',
            'id_medecin'=>866
        ] );

        Rapport::create( [
            'id'=>1486,
            'date'=>'2016-12-12',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>867
        ] );

        Rapport::create( [
            'id'=>1487,
            'date'=>'2016-10-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'f21',
            'id_medecin'=>868
        ] );

        Rapport::create( [
            'id'=>1488,
            'date'=>'2017-02-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'f21',
            'id_medecin'=>869
        ] );

        Rapport::create( [
            'id'=>1489,
            'date'=>'2016-12-13',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'d51',
            'id_medecin'=>870
        ] );

        Rapport::create( [
            'id'=>1490,
            'date'=>'2016-10-05',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'a17',
            'id_medecin'=>871
        ] );

        Rapport::create( [
            'id'=>1491,
            'date'=>'2017-01-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e52',
            'id_medecin'=>872
        ] );

        Rapport::create( [
            'id'=>1492,
            'date'=>'2016-10-08',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b13',
            'id_medecin'=>873
        ] );

        Rapport::create( [
            'id'=>1493,
            'date'=>'2017-03-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'a17',
            'id_medecin'=>874
        ] );

        Rapport::create( [
            'id'=>1494,
            'date'=>'2016-12-29',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'a93',
            'id_medecin'=>875
        ] );

        Rapport::create( [
            'id'=>1495,
            'date'=>'2016-11-25',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b19',
            'id_medecin'=>876
        ] );

        Rapport::create( [
            'id'=>1496,
            'date'=>'2017-03-22',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b28',
            'id_medecin'=>877
        ] );

        Rapport::create( [
            'id'=>1497,
            'date'=>'2016-12-11',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'e49',
            'id_medecin'=>878
        ] );

        Rapport::create( [
            'id'=>1498,
            'date'=>'2016-12-05',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'a131',
            'id_medecin'=>879
        ] );

        Rapport::create( [
            'id'=>1499,
            'date'=>'2017-02-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'c3',
            'id_medecin'=>880
        ] );

        Rapport::create( [
            'id'=>1500,
            'date'=>'2017-02-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'c14',
            'id_medecin'=>881
        ] );

        Rapport::create( [
            'id'=>1501,
            'date'=>'2016-12-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e52',
            'id_medecin'=>882
        ] );

        Rapport::create( [
            'id'=>1502,
            'date'=>'2016-12-22',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'f21',
            'id_medecin'=>883
        ] );

        Rapport::create( [
            'id'=>1503,
            'date'=>'2016-10-06',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b25',
            'id_medecin'=>884
        ] );

        Rapport::create( [
            'id'=>1504,
            'date'=>'2017-04-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a93',
            'id_medecin'=>885
        ] );

        Rapport::create( [
            'id'=>1505,
            'date'=>'2016-11-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e24',
            'id_medecin'=>886
        ] );

        Rapport::create( [
            'id'=>1506,
            'date'=>'2017-01-20',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'d13',
            'id_medecin'=>887
        ] );

        Rapport::create( [
            'id'=>1507,
            'date'=>'2017-04-07',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a55',
            'id_medecin'=>888
        ] );

        Rapport::create( [
            'id'=>1508,
            'date'=>'2017-03-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b59',
            'id_medecin'=>889
        ] );

        Rapport::create( [
            'id'=>1509,
            'date'=>'2017-03-19',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c3',
            'id_medecin'=>890
        ] );

        Rapport::create( [
            'id'=>1510,
            'date'=>'2016-11-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'f21',
            'id_medecin'=>891
        ] );

        Rapport::create( [
            'id'=>1511,
            'date'=>'2017-03-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d13',
            'id_medecin'=>892
        ] );

        Rapport::create( [
            'id'=>1512,
            'date'=>'2017-03-11',
            'motif'=>'Prise de contact',
            'bilan'=>'RAS',
            'id_visiteur'=>'f21',
            'id_medecin'=>893
        ] );

        Rapport::create( [
            'id'=>1513,
            'date'=>'2016-10-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e5',
            'id_medecin'=>894
        ] );

        Rapport::create( [
            'id'=>1514,
            'date'=>'2016-11-22',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a55',
            'id_medecin'=>895
        ] );

        Rapport::create( [
            'id'=>1515,
            'date'=>'2017-01-02',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b4',
            'id_medecin'=>896
        ] );

        Rapport::create( [
            'id'=>1516,
            'date'=>'2016-10-16',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e5',
            'id_medecin'=>897
        ] );

        Rapport::create( [
            'id'=>1517,
            'date'=>'2016-11-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b34',
            'id_medecin'=>898
        ] );

        Rapport::create( [
            'id'=>1518,
            'date'=>'2017-04-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'d51',
            'id_medecin'=>899
        ] );

        Rapport::create( [
            'id'=>1519,
            'date'=>'2017-03-24',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b50',
            'id_medecin'=>900
        ] );

        Rapport::create( [
            'id'=>1520,
            'date'=>'2017-01-04',
            'motif'=>'Visite annuelle',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b34',
            'id_medecin'=>901
        ] );

        Rapport::create( [
            'id'=>1521,
            'date'=>'2016-10-01',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b50',
            'id_medecin'=>902
        ] );

        Rapport::create( [
            'id'=>1522,
            'date'=>'2017-03-26',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e22',
            'id_medecin'=>903
        ] );

        Rapport::create( [
            'id'=>1523,
            'date'=>'2017-02-15',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'e49',
            'id_medecin'=>904
        ] );

        Rapport::create( [
            'id'=>1524,
            'date'=>'2017-02-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b34',
            'id_medecin'=>905
        ] );

        Rapport::create( [
            'id'=>1525,
            'date'=>'2016-10-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'e52',
            'id_medecin'=>906
        ] );

        Rapport::create( [
            'id'=>1526,
            'date'=>'2016-10-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b59',
            'id_medecin'=>907
        ] );

        Rapport::create( [
            'id'=>1527,
            'date'=>'2017-01-24',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'d51',
            'id_medecin'=>908
        ] );

        Rapport::create( [
            'id'=>1528,
            'date'=>'2016-11-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b25',
            'id_medecin'=>909
        ] );

        Rapport::create( [
            'id'=>1529,
            'date'=>'2017-02-03',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'d51',
            'id_medecin'=>910
        ] );

        Rapport::create( [
            'id'=>1530,
            'date'=>'2016-12-27',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b59',
            'id_medecin'=>911
        ] );

        Rapport::create( [
            'id'=>1531,
            'date'=>'2017-02-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>912
        ] );

        Rapport::create( [
            'id'=>1532,
            'date'=>'2017-01-17',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b34',
            'id_medecin'=>913
        ] );

        Rapport::create( [
            'id'=>1533,
            'date'=>'2017-02-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'c3',
            'id_medecin'=>914
        ] );

        Rapport::create( [
            'id'=>1534,
            'date'=>'2017-02-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b28',
            'id_medecin'=>915
        ] );

        Rapport::create( [
            'id'=>1535,
            'date'=>'2016-12-18',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b19',
            'id_medecin'=>916
        ] );

        Rapport::create( [
            'id'=>1536,
            'date'=>'2017-02-18',
            'motif'=>'Prise de contact',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b13',
            'id_medecin'=>917
        ] );

        Rapport::create( [
            'id'=>1537,
            'date'=>'2016-11-14',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'a17',
            'id_medecin'=>918
        ] );

        Rapport::create( [
            'id'=>1538,
            'date'=>'2016-10-28',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b4',
            'id_medecin'=>919
        ] );

        Rapport::create( [
            'id'=>1539,
            'date'=>'2017-04-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'b4',
            'id_medecin'=>920
        ] );

        Rapport::create( [
            'id'=>1540,
            'date'=>'2016-10-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c3',
            'id_medecin'=>921
        ] );

        Rapport::create( [
            'id'=>1541,
            'date'=>'2017-02-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'c54',
            'id_medecin'=>922
        ] );

        Rapport::create( [
            'id'=>1542,
            'date'=>'2016-10-28',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d51',
            'id_medecin'=>923
        ] );

        Rapport::create( [
            'id'=>1543,
            'date'=>'2016-12-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'f21',
            'id_medecin'=>924
        ] );

        Rapport::create( [
            'id'=>1544,
            'date'=>'2017-03-05',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a93',
            'id_medecin'=>925
        ] );

        Rapport::create( [
            'id'=>1545,
            'date'=>'2016-11-15',
            'motif'=>'Prise de contact',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'e22',
            'id_medecin'=>926
        ] );

        Rapport::create( [
            'id'=>1546,
            'date'=>'2017-03-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'c14',
            'id_medecin'=>927
        ] );

        Rapport::create( [
            'id'=>1547,
            'date'=>'2017-02-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'e24',
            'id_medecin'=>928
        ] );

        Rapport::create( [
            'id'=>1548,
            'date'=>'2017-02-28',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b59',
            'id_medecin'=>929
        ] );

        Rapport::create( [
            'id'=>1549,
            'date'=>'2017-01-15',
            'motif'=>'Demande du médecin',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>930
        ] );

        Rapport::create( [
            'id'=>1550,
            'date'=>'2017-01-27',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'b13',
            'id_medecin'=>931
        ] );

        Rapport::create( [
            'id'=>1551,
            'date'=>'2016-11-23',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a55',
            'id_medecin'=>932
        ] );

        Rapport::create( [
            'id'=>1552,
            'date'=>'2017-04-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'b16',
            'id_medecin'=>933
        ] );

        Rapport::create( [
            'id'=>1553,
            'date'=>'2016-11-09',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b59',
            'id_medecin'=>934
        ] );

        Rapport::create( [
            'id'=>1554,
            'date'=>'2016-10-13',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'d51',
            'id_medecin'=>935
        ] );

        Rapport::create( [
            'id'=>1555,
            'date'=>'2016-12-21',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'b13',
            'id_medecin'=>936
        ] );

        Rapport::create( [
            'id'=>1556,
            'date'=>'2017-01-02',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'c54',
            'id_medecin'=>937
        ] );

        Rapport::create( [
            'id'=>1557,
            'date'=>'2017-02-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b59',
            'id_medecin'=>938
        ] );

        Rapport::create( [
            'id'=>1558,
            'date'=>'2016-10-15',
            'motif'=>'Installation nouvelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'b28',
            'id_medecin'=>939
        ] );

        Rapport::create( [
            'id'=>1559,
            'date'=>'2017-01-07',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b25',
            'id_medecin'=>940
        ] );

        Rapport::create( [
            'id'=>1560,
            'date'=>'2016-11-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'d51',
            'id_medecin'=>941
        ] );

        Rapport::create( [
            'id'=>1561,
            'date'=>'2016-12-10',
            'motif'=>'Demande du médecin',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'e22',
            'id_medecin'=>942
        ] );

        Rapport::create( [
            'id'=>1562,
            'date'=>'2017-02-09',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b25',
            'id_medecin'=>943
        ] );

        Rapport::create( [
            'id'=>1563,
            'date'=>'2017-01-16',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'a93',
            'id_medecin'=>944
        ] );

        Rapport::create( [
            'id'=>1564,
            'date'=>'2017-04-05',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b50',
            'id_medecin'=>945
        ] );

        Rapport::create( [
            'id'=>1565,
            'date'=>'2017-01-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a93',
            'id_medecin'=>946
        ] );

        Rapport::create( [
            'id'=>1566,
            'date'=>'2017-01-18',
            'motif'=>'Visite annuelle',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b59',
            'id_medecin'=>947
        ] );

        Rapport::create( [
            'id'=>1567,
            'date'=>'2017-01-06',
            'motif'=>'recommandation de confrère',
            'bilan'=>'RAS',
            'id_visiteur'=>'b34',
            'id_medecin'=>948
        ] );

        Rapport::create( [
            'id'=>1568,
            'date'=>'2017-03-03',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b25',
            'id_medecin'=>949
        ] );

        Rapport::create( [
            'id'=>1569,
            'date'=>'2017-03-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Demande à me revoir dans un mois',
            'id_visiteur'=>'a55',
            'id_medecin'=>950
        ] );

        Rapport::create( [
            'id'=>1570,
            'date'=>'2016-11-25',
            'motif'=>'Demande du médecin',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>951
        ] );

        Rapport::create( [
            'id'=>1571,
            'date'=>'2016-12-19',
            'motif'=>'Visite annuelle',
            'bilan'=>'Peu bavard',
            'id_visiteur'=>'a55',
            'id_medecin'=>952
        ] );

        Rapport::create( [
            'id'=>1572,
            'date'=>'2016-10-07',
            'motif'=>'Prise de contact',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'d13',
            'id_medecin'=>953
        ] );

        Rapport::create( [
            'id'=>1573,
            'date'=>'2016-10-02',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b16',
            'id_medecin'=>954
        ] );

        Rapport::create( [
            'id'=>1574,
            'date'=>'2017-03-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b16',
            'id_medecin'=>955
        ] );

        Rapport::create( [
            'id'=>1575,
            'date'=>'2016-11-14',
            'motif'=>'Visite annuelle',
            'bilan'=>'A revoir assez rapidement',
            'id_visiteur'=>'e49',
            'id_medecin'=>956
        ] );

        Rapport::create( [
            'id'=>1576,
            'date'=>'2017-03-13',
            'motif'=>'Visite annuelle',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'a17',
            'id_medecin'=>957
        ] );

        Rapport::create( [
            'id'=>1577,
            'date'=>'2017-01-23',
            'motif'=>'Demande du médecin',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'d13',
            'id_medecin'=>958
        ] );

        Rapport::create( [
            'id'=>1578,
            'date'=>'2016-10-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Sur sa réserve',
            'id_visiteur'=>'b34',
            'id_medecin'=>959
        ] );

        Rapport::create( [
            'id'=>1579,
            'date'=>'2016-10-30',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b50',
            'id_medecin'=>960
        ] );

        Rapport::create( [
            'id'=>1580,
            'date'=>'2016-11-10',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a17',
            'id_medecin'=>961
        ] );

        Rapport::create( [
            'id'=>1581,
            'date'=>'2016-12-31',
            'motif'=>'Demande du médecin',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'e24',
            'id_medecin'=>962
        ] );

        Rapport::create( [
            'id'=>1582,
            'date'=>'2017-03-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'b50',
            'id_medecin'=>963
        ] );

        Rapport::create( [
            'id'=>1583,
            'date'=>'2016-11-09',
            'motif'=>'Prise de contact',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b19',
            'id_medecin'=>964
        ] );

        Rapport::create( [
            'id'=>1584,
            'date'=>'2016-10-01',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très intéressé par les produits présentés',
            'id_visiteur'=>'b34',
            'id_medecin'=>965
        ] );

        Rapport::create( [
            'id'=>1585,
            'date'=>'2017-01-25',
            'motif'=>'recommandation de confrère',
            'bilan'=>'A beaucoup appécié notre rencontre',
            'id_visiteur'=>'d13',
            'id_medecin'=>966
        ] );

        Rapport::create( [
            'id'=>1586,
            'date'=>'2016-10-31',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas très aimable',
            'id_visiteur'=>'b4',
            'id_medecin'=>967
        ] );

        Rapport::create( [
            'id'=>1587,
            'date'=>'2017-03-17',
            'motif'=>'Demande du médecin',
            'bilan'=>'RAS',
            'id_visiteur'=>'b34',
            'id_medecin'=>968
        ] );

        Rapport::create( [
            'id'=>1588,
            'date'=>'2017-02-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b13',
            'id_medecin'=>969
        ] );

        Rapport::create( [
            'id'=>1589,
            'date'=>'2017-01-25',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'b50',
            'id_medecin'=>970
        ] );

        Rapport::create( [
            'id'=>1590,
            'date'=>'2017-02-16',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'b34',
            'id_medecin'=>971
        ] );

        Rapport::create( [
            'id'=>1591,
            'date'=>'2017-04-03',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Jeune médecin découvrant les visiteurs',
            'id_visiteur'=>'b50',
            'id_medecin'=>972
        ] );

        Rapport::create( [
            'id'=>1592,
            'date'=>'2017-02-22',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'a131',
            'id_medecin'=>973
        ] );

        Rapport::create( [
            'id'=>1593,
            'date'=>'2016-12-04',
            'motif'=>'Demande du médecin',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'b28',
            'id_medecin'=>974
        ] );

        Rapport::create( [
            'id'=>1594,
            'date'=>'2017-01-10',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'e22',
            'id_medecin'=>975
        ] );

        Rapport::create( [
            'id'=>1595,
            'date'=>'2017-03-08',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Peu intéressé',
            'id_visiteur'=>'b50',
            'id_medecin'=>976
        ] );

        Rapport::create( [
            'id'=>1596,
            'date'=>'2016-10-26',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'c14',
            'id_medecin'=>977
        ] );

        Rapport::create( [
            'id'=>1597,
            'date'=>'2017-01-28',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e5',
            'id_medecin'=>978
        ] );

        Rapport::create( [
            'id'=>1598,
            'date'=>'2017-03-01',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e39',
            'id_medecin'=>979
        ] );

        Rapport::create( [
            'id'=>1599,
            'date'=>'2017-01-29',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b28',
            'id_medecin'=>980
        ] );

        Rapport::create( [
            'id'=>1600,
            'date'=>'2016-12-06',
            'motif'=>'Visite annuelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>981
        ] );

        Rapport::create( [
            'id'=>1601,
            'date'=>'2017-04-16',
            'motif'=>'Visite annuelle',
            'bilan'=>'RAS',
            'id_visiteur'=>'b28',
            'id_medecin'=>982
        ] );

        Rapport::create( [
            'id'=>1602,
            'date'=>'2017-03-18',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>983
        ] );

        Rapport::create( [
            'id'=>1603,
            'date'=>'2016-11-17',
            'motif'=>'Installation nouvelle',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e24',
            'id_medecin'=>984
        ] );

        Rapport::create( [
            'id'=>1604,
            'date'=>'2017-03-20',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'e49',
            'id_medecin'=>985
        ] );

        Rapport::create( [
            'id'=>1605,
            'date'=>'2016-10-18',
            'motif'=>'recommandation de confrère',
            'bilan'=>'Visite positive',
            'id_visiteur'=>'a131',
            'id_medecin'=>986
        ] );

        Rapport::create( [
            'id'=>1606,
            'date'=>'2016-11-27',
            'motif'=>'Prise de contact',
            'bilan'=>'Pas intéressé du tout',
            'id_visiteur'=>'d51',
            'id_medecin'=>987
        ] );

        Rapport::create( [
            'id'=>1607,
            'date'=>'2017-02-20',
            'motif'=>'Visite annuelle',
            'bilan'=>'Pas en confiance',
            'id_visiteur'=>'b34',
            'id_medecin'=>988
        ] );

        Rapport::create( [
            'id'=>1608,
            'date'=>'2016-10-25',
            'motif'=>'Prise de contact',
            'bilan'=>'Très aimable maintenir un contact régulier',
            'id_visiteur'=>'d51',
            'id_medecin'=>989
        ] );

        Rapport::create( [
            'id'=>1609,
            'date'=>'2016-11-21',
            'motif'=>'Visite annuelle',
            'bilan'=>'Très fixé sur les produits utilisés',
            'id_visiteur'=>'a55',
            'id_medecin'=>990
        ] );

        Rapport::create( [
            'id'=>1610,
            'date'=>'2016-10-11',
            'motif'=>'Prise de contact',
            'bilan'=>'Trop pressé',
            'id_visiteur'=>'e52',
            'id_medecin'=>991
        ] );
    }
}
