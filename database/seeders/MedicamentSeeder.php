<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicament;


class MedicamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicament::create( [
            'id'=>'3MYC7',
            'nom_commercial'=>'TRIMYCINE',
            'id_famille'=>'CRT',
            'composition'=>'Triamcinolone acétonide + Néomycine + Nystatine',
            'effets'=>'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un ant',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  d infections de la peau'
        ] );

        Medicament::create( [
            'id'=>'ADIMOL9',
            'nom_commercial'=>'ADIMOL',
            'id_famille'=>'ABP',
            'composition'=>'Amoxicilline + Acide clavulanique',
            'effets'=>'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections b',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux pénicillines ou aux céphalosporines.'
        ] );

        Medicament::create( [
            'id'=>'AMOPIL7',
            'nom_commercial'=>'AMOPIL',
            'id_famille'=>'ABP',
            'composition'=>'Amoxicilline',
            'effets'=>'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections b',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux pénicillines. Il doit être administré avec pr'
        ] );

        Medicament::create( [
            'id'=>'AMOX45',
            'nom_commercial'=>'AMOXAR',
            'id_famille'=>'ABP',
            'composition'=>'Amoxicilline',
            'effets'=>'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections b',
            'contre_indications'=>'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.'
        ] );

        Medicament::create( [
            'id'=>'AMOXIG12',
            'nom_commercial'=>'AMOXI Gé',
            'id_famille'=>'ABP',
            'composition'=>'Amoxicilline',
            'effets'=>'Ce médicament  plus puissant que les pénicillines simples  est utilisé pour traiter des infections b',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux pénicillines. Il doit être administré avec pr'
        ] );

        Medicament::create( [
            'id'=>'APATOUX22',
            'nom_commercial'=>'APATOUX Vitamine C',
            'id_famille'=>'ALO',
            'composition'=>'Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)',
            'effets'=>'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  en cas de phénylcétonur'
        ] );

        Medicament::create( [
            'id'=>'BACTIG10',
            'nom_commercial'=>'BACTIGEL',
            'id_famille'=>'ABC',
            'composition'=>'Erythromycine',
            'effets'=>'Ce médicament est utilisé en application locale pour traiter l acné et les infections cutanées bacté',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux antibiotiques de la famille des macrolides ou'
        ] );

        Medicament::create( [
            'id'=>'BACTIV13',
            'nom_commercial'=>'BACTIVIL',
            'id_famille'=>'AFM',
            'composition'=>'Erythromycine',
            'effets'=>'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux macrolides (dont le chef de file est l érythr'
        ] );

        Medicament::create( [
            'id'=>'BITALV',
            'nom_commercial'=>'BIVALIC',
            'id_famille'=>'AAA',
            'composition'=>'Dextropropoxyphène + Paracétamol',
            'effets'=>'Ce médicament est utilisé pour traiter les douleurs d intensité modérée ou intense.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux médicaments de cette famille  d insuffisance '
        ] );

        Medicament::create( [
            'id'=>'CARTION6',
            'nom_commercial'=>'CARTION',
            'id_famille'=>'AAA',
            'composition'=>'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol',
            'effets'=>'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies)  d'
        ] );

        Medicament::create( [
            'id'=>'CLAZER6',
            'nom_commercial'=>'CLAZER',
            'id_famille'=>'AFM',
            'composition'=>'Clarithromycine',
            'effets'=>'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également uti',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux macrolides (dont le chef de file est l érythr'
        ] );

        Medicament::create( [
            'id'=>'DEPRIL9',
            'nom_commercial'=>'DEPRAMIL',
            'id_famille'=>'AIM',
            'composition'=>'Clomipramine',
            'effets'=>'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères  certaines douleurs rebelles ',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas de glaucome ou d adénome de la prostate  d infarctus récent '
        ] );

        Medicament::create( [
            'id'=>'DIMIRTAM6',
            'nom_commercial'=>'DIMIRTAM',
            'id_famille'=>'AAC',
            'composition'=>'Mirtazapine',
            'effets'=>'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.',
            'contre_indications'=>'La prise de ce produit est contre-indiquée en cas de d allergie à  l un des constituants.'
        ] );

        Medicament::create( [
            'id'=>'DOLRIL7',
            'nom_commercial'=>'DOLORIL',
            'id_famille'=>'AAA',
            'composition'=>'Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol',
            'effets'=>'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie au paracétamol ou aux salicylates.'
        ] );

        Medicament::create( [
            'id'=>'DORNOM8',
            'nom_commercial'=>'NORMADOR',
            'id_famille'=>'HYP',
            'composition'=>'Doxylamine',
            'effets'=>'Ce médicament est utilisé pour traiter l insomnie chez l adulte.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas de glaucome  de certains troubles urinaires (rétention urina'
        ] );

        Medicament::create( [
            'id'=>'EQUILARX6',
            'nom_commercial'=>'EQUILAR',
            'id_famille'=>'AAH',
            'composition'=>'Méclozine',
            'effets'=>'Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.',
            'contre_indications'=>'Ce médicament ne doit pas être utilisé en cas d allergie au produit  en cas de glaucome ou de rétent'
        ] );

        Medicament::create( [
            'id'=>'EVILR7',
            'nom_commercial'=>'EVEILLOR',
            'id_famille'=>'PSA',
            'composition'=>'Adrafinil',
            'effets'=>'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiq',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants.'
        ] );

        Medicament::create( [
            'id'=>'INSXT5',
            'nom_commercial'=>'INSECTIL',
            'id_famille'=>'AH',
            'composition'=>'Diphénydramine',
            'effets'=>'Ce médicament est utilisé en application locale sur les piqûres d insecte et l urticaire.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux antihistaminiques.'
        ] );

        Medicament::create( [
            'id'=>'JOVAI8',
            'nom_commercial'=>'JOVENIL',
            'id_famille'=>'AFM',
            'composition'=>'Josamycine',
            'effets'=>'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux macrolides (dont le chef de file est l érythr'
        ] );

        Medicament::create( [
            'id'=>'LIDOXY23',
            'nom_commercial'=>'LIDOXYTRACINE',
            'id_famille'=>'AFC',
            'composition'=>'Oxytétracycline +Lidocaïne',
            'effets'=>'Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants. Il ne doit pas être ass'
        ] );

        Medicament::create( [
            'id'=>'LITHOR12',
            'nom_commercial'=>'LITHORINE',
            'id_famille'=>'AP',
            'composition'=>'Lithium',
            'effets'=>'Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les é',
            'contre_indications'=>'Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce trait'
        ] );

        Medicament::create( [
            'id'=>'PARMOL16',
            'nom_commercial'=>'PARMOCODEINE',
            'id_famille'=>'AA',
            'composition'=>'Codéine + Paracétamol',
            'effets'=>'Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pa',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  chez l enfant de moins '
        ] );

        Medicament::create( [
            'id'=>'PHYSOI8',
            'nom_commercial'=>'PHYSICOR',
            'id_famille'=>'PSA',
            'composition'=>'Sulbutiamine',
            'effets'=>'Ce médicament est utilisé pour traiter les baisses d activité physique ou psychique  souvent dans un',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants.'
        ] );

        Medicament::create( [
            'id'=>'PIRIZ8',
            'nom_commercial'=>'PIRIZAN',
            'id_famille'=>'ABA',
            'composition'=>'Pyrazinamide',
            'effets'=>'Ce médicament est utilisé  en association à  d autres antibiotiques  pour traiter la tuberculose.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants  d insuffisance rénale o'
        ] );

        Medicament::create( [
            'id'=>'POMDI20',
            'nom_commercial'=>'POMADINE',
            'id_famille'=>'AO',
            'composition'=>'Bacitracine',
            'effets'=>'Ce médicament est utilisé pour traiter les infections oculaires de la surface de l oeil.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie aux antibiotiques appliqués localement.'
        ] );

        Medicament::create( [
            'id'=>'TROXT21',
            'nom_commercial'=>'TROXADET',
            'id_famille'=>'AIN',
            'composition'=>'Paroxétine',
            'effets'=>'Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il pe',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie au produit.'
        ] );

        Medicament::create( [
            'id'=>'TXISOL22',
            'nom_commercial'=>'TOUXISOL',
            'id_famille'=>'ALO',
            'composition'=>'Tyrothricine + Acide ascorbique (Vitamine C)',
            'effets'=>'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.',
            'contre_indications'=>'Ce médicament est contre-indiqué en cas d allergie à  l un des constituants et chez l enfant de moin'
        ] );

        Medicament::create( [
            'id'=>'URIEG6',
            'nom_commercial'=>'URIREGUL',
            'id_famille'=>'AUM',
            'composition'=>'Fosfomycine trométamol',
            'effets'=>'Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65',
            'contre_indications'=>'La prise de ce médicament est contre-indiquée en cas d allergie à l un des constituants et d insuffi'
        ] );
    }
}
