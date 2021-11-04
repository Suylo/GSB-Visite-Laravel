<?php

namespace Database\Seeders;

use App\Models\Medecin;
use Illuminate\Database\Seeder;

class MedecinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Medecin::Truncate();

        Medecin::create( [
            'id'=>1,
            'nom'=>'MARTIN',
            'prenom'=>'Prosper',
            'adresse'=>'25 rue Anatole France BRIANCON 05100',
            'tel'=>'0485244174',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>2,
            'nom'=>'BLANC',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'39 rue des gatinnes BILLIAT 01200',
            'tel'=>'0356895400',
            'specialite_complementaire'=>'Pédiatre',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>3,
            'nom'=>'GARCIA',
            'prenom'=>'Camille',
            'adresse'=>'58 rue du stade MESSINCOURT 08110',
            'tel'=>'0365489929',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>4,
            'nom'=>'MARTINEZ',
            'prenom'=>'Alice',
            'adresse'=>'12 rue des Pigeons JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0319692016',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>5,
            'nom'=>'MICHEL',
            'prenom'=>'Vénus',
            'adresse'=>'55 rue du 14 juillet ORCIERES 05170',
            'tel'=>'0421670911',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>6,
            'nom'=>'ROUX',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'49 rue des Ormes ATTILLY 02490',
            'tel'=>'0313817061',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>7,
            'nom'=>'FABRE',
            'prenom'=>'Marie',
            'adresse'=>'78 rue de Poligny YONCQ 08210',
            'tel'=>'0388716930',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>8,
            'nom'=>'ARNAUD',
            'prenom'=>'Andrew',
            'adresse'=>'29 rue des Pigeons SAVINES-LE-LAC 05160',
            'tel'=>'0477740994',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>9,
            'nom'=>'FERNANDEZ',
            'prenom'=>'Julien',
            'adresse'=>'45 rue de du général Scott THIN-LE-MOUTIER 08460',
            'tel'=>'0321760709',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>10,
            'nom'=>'LOPEZ',
            'prenom'=>'Aurèle',
            'adresse'=>'16 rue Alphonse Daudet ORCIERES 05170',
            'tel'=>'0485568083',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>11,
            'nom'=>'BERNARD',
            'prenom'=>'Johnny',
            'adresse'=>'74 rue de Paris SAVINES-LE-LAC 05160',
            'tel'=>'0417789322',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>12,
            'nom'=>'GIRAUD',
            'prenom'=>'Andrée',
            'adresse'=>'ville',
            'tel'=>'1234567891',
            'specialite_complementaire'=>'psy',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>13,
            'nom'=>'BOYER',
            'prenom'=>'Gilles',
            'adresse'=>'33 rue Commandant Hériot MONTIGNY-SUR-MEUSE 08170',
            'tel'=>'0334037052',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>14,
            'nom'=>'SANCHEZ',
            'prenom'=>'Vénus',
            'adresse'=>'14 rue de la poste BANCIGNY 02145',
            'tel'=>'0313832194',
            'specialite_complementaire'=>'Pédiatrie',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>15,
            'nom'=>'BRUN',
            'prenom'=>'Cristophe',
            'adresse'=>'81 rue Bonaparte AUBENTON 02500',
            'tel'=>'0366612144',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>16,
            'nom'=>'PEREZ',
            'prenom'=>'Jules',
            'adresse'=>'85 rue Hector Berlioz BRIANCON 05100',
            'tel'=>'0459073011',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>17,
            'nom'=>'SANTIAGO',
            'prenom'=>'Julienne',
            'adresse'=>'17 rue Lampion AUGIREIN 09800',
            'tel'=>'0524077425',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>18,
            'nom'=>'DURAND',
            'prenom'=>'John',
            'adresse'=>'92 rue du général de Gaulle SORBIERS 05150',
            'tel'=>'0484328394',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>19,
            'nom'=>'RODRIGUEZ',
            'prenom'=>'Cristophe',
            'adresse'=>'1 rue des Accacias BELLOC 09600',
            'tel'=>'0564847694',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>20,
            'nom'=>'REYNAUD',
            'prenom'=>'Catherine',
            'adresse'=>'8 rue des Accacias MONCEAU-SUR-OISE 02120',
            'tel'=>'0352679072',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>21,
            'nom'=>'AUBERT',
            'prenom'=>'Julien',
            'adresse'=>'51 rue Bonaparte CAMON 09500',
            'tel'=>'0552863581',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>22,
            'nom'=>'ROSSI',
            'prenom'=>'Nohan',
            'adresse'=>'69 rue Mallarmé AX-LES-THERMES 09110',
            'tel'=>'0596648531',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>23,
            'nom'=>'BERTRAND',
            'prenom'=>'Julienne',
            'adresse'=>'72 rue Pasteur SAVOURNON 05700',
            'tel'=>'0490527954',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>24,
            'nom'=>'GAUTIER',
            'prenom'=>'Irénée',
            'adresse'=>'28 rue Anatole France BELLEY 01300',
            'tel'=>'0486481045',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>25,
            'nom'=>'BONNET',
            'prenom'=>'François',
            'adresse'=>'78 rue des Epines AZY-SUR-MARNE 02400',
            'tel'=>'0318212781',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>26,
            'nom'=>'REY',
            'prenom'=>'Charles-Edouard',
            'adresse'=>'86 rue Louis Aragon BILLIAT 01200',
            'tel'=>'0446961025',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>27,
            'nom'=>'GOMEZ',
            'prenom'=>'Jérémy',
            'adresse'=>'89 rue de la pointe SAINT-FIRMIN 05800',
            'tel'=>'0438318333',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>28,
            'nom'=>'GIRARD',
            'prenom'=>'Johnny',
            'adresse'=>'19 rue de la Tour JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0341883832',
            'specialite_complementaire'=>'pédiatrie',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>29,
            'nom'=>'JOURDAN',
            'prenom'=>'Hector',
            'adresse'=>'29 rue de la pointe BOURG-EN-BRESSE 01000',
            'tel'=>'0431450970',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>30,
            'nom'=>'ROCHE',
            'prenom'=>'Mohammed',
            'adresse'=>'30 rue Pasteur BEZAC 09100',
            'tel'=>'0591677334',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>31,
            'nom'=>'FAURE',
            'prenom'=>'Annie',
            'adresse'=>'82 rue Mallarmé SIGOYER 05130',
            'tel'=>'0487018886',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>32,
            'nom'=>'ESPOSITO',
            'prenom'=>'Caline',
            'adresse'=>'27 rue de Marigny BRIANCON 05100',
            'tel'=>'0444253472',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>33,
            'nom'=>'IMBERT',
            'prenom'=>'Jordan',
            'adresse'=>'53 rue Alphonse Daudet SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0463813731',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>34,
            'nom'=>'VIDAL',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'94 rue de la pointe BOULIGNEUX 01330',
            'tel'=>'0462262613',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>35,
            'nom'=>'OLIVE',
            'prenom'=>'Reissa',
            'adresse'=>'63 rue Alphonse Daudet AX-LES-THERMES 09110',
            'tel'=>'0563092583',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>36,
            'nom'=>'ROBERT',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'26 rue des Armées AVANCON 05230',
            'tel'=>'0442237548',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>37,
            'nom'=>'BARTHELEMY',
            'prenom'=>'Fatima',
            'adresse'=>'24 rue Albert Camus PELVOUX 05340',
            'tel'=>'0411439067',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>38,
            'nom'=>'LAURENT',
            'prenom'=>'Alice',
            'adresse'=>'33 rue de la Tour BOURG-EN-BRESSE 01000',
            'tel'=>'0479660588',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>39,
            'nom'=>'ANDRE',
            'prenom'=>'Béatrice',
            'adresse'=>'25 rue des Lilas LAUNOIS-SUR-VENCE 08430',
            'tel'=>'0389426738',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>40,
            'nom'=>'PONS',
            'prenom'=>'Armelle',
            'adresse'=>'48 rue de Paris REOTIER 05600',
            'tel'=>'0467247607',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>41,
            'nom'=>'PASCAL',
            'prenom'=>'Anselme',
            'adresse'=>'19 rue des pyramides ARANDAS 01230',
            'tel'=>'0434638475',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>42,
            'nom'=>'JULIEN',
            'prenom'=>'John',
            'adresse'=>'23 rue Alphonse Daudet SORBIERS 05150',
            'tel'=>'0473380415',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>43,
            'nom'=>'NICOLAS',
            'prenom'=>'Firmin',
            'adresse'=>'59 rue de la Pergolat FLEVILLE 08250',
            'tel'=>'0337420570',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>44,
            'nom'=>'MAURIN',
            'prenom'=>'Anne',
            'adresse'=>'59 rue de du général Scott MONTCY-NOTRE-DAME 08090',
            'tel'=>'0310431717',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>45,
            'nom'=>'CORTES',
            'prenom'=>'Gilles',
            'adresse'=>'65 rue des oiseaux ARROUT 09800',
            'tel'=>'0578097401',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>46,
            'nom'=>'MATHIEU',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'29 rue Petit BEDEILLE 09230',
            'tel'=>'0523206238',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>47,
            'nom'=>'FERAUD',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'14 rue Petit BEZAC 09100',
            'tel'=>'0512011679',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>48,
            'nom'=>'ROUBAUD',
            'prenom'=>'Carole',
            'adresse'=>'86 rue du capitaine Fraquasse BETTANT 01500',
            'tel'=>'0490382365',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>49,
            'nom'=>'LONG',
            'prenom'=>'Amiel',
            'adresse'=>'22 rue Lampion BELLEY 01300',
            'tel'=>'0463584743',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>50,
            'nom'=>'GIORDANO',
            'prenom'=>'Martial',
            'adresse'=>'75 rue du capitaine Crochet ATTILLY 02490',
            'tel'=>'0361985743',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>51,
            'nom'=>'COSTE',
            'prenom'=>'Anne-Laure',
            'adresse'=>'60 rue Pernod BETTANT 01500',
            'tel'=>'0437621473',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>52,
            'nom'=>'GARCIN',
            'prenom'=>'Prosper',
            'adresse'=>'46 rue de la Tour REOTIER 05600',
            'tel'=>'0450401007',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>53,
            'nom'=>'LAUGIER',
            'prenom'=>'Fatima',
            'adresse'=>'95 rue de Poligny BOURG-EN-BRESSE 01000',
            'tel'=>'0481057435',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>54,
            'nom'=>'RICHARD',
            'prenom'=>'Jérome',
            'adresse'=>'39 rue Commandant Hériot BANCIGNY 02140',
            'tel'=>'0315759754',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>55,
            'nom'=>'JEAN',
            'prenom'=>'Ines',
            'adresse'=>'90 rue Pernod ROCHEBRUNE 05190',
            'tel'=>'0444572962',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>56,
            'nom'=>'MAUREL',
            'prenom'=>'Jérémie',
            'adresse'=>'45 rue des Chantereines FLOING 08200',
            'tel'=>'0333621591',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>57,
            'nom'=>'RUIZ',
            'prenom'=>'Anne-Marie',
            'adresse'=>'48 rue du 14 juillet BRIANCON 05100',
            'tel'=>'0478777229',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>58,
            'nom'=>'NAVARRO',
            'prenom'=>'Armelle',
            'adresse'=>'88 rue des Argonautes DOMMARTIN 01380',
            'tel'=>'0482500579',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>59,
            'nom'=>'RICARD',
            'prenom'=>'Anselme',
            'adresse'=>'18 rue de du général Scott BOURG-EN-BRESSE 01000',
            'tel'=>'0428387190',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>60,
            'nom'=>'HERNANDEZ',
            'prenom'=>'Aude',
            'adresse'=>'98 rue Hector Berlioz BOULIGNEUX 01330',
            'tel'=>'0460116931',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>61,
            'nom'=>'ROMAN',
            'prenom'=>'Camille',
            'adresse'=>'43 rue de la poste ASTON 09310',
            'tel'=>'0554877193',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>62,
            'nom'=>'VINCENT',
            'prenom'=>'Bernard',
            'adresse'=>'69 rue Debussy AX-LES-THERMES 09110',
            'tel'=>'0592618819',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>63,
            'nom'=>'FOUQUE',
            'prenom'=>'Johnny',
            'adresse'=>'27 rue Victor Hugo MONTCEAUX 01090',
            'tel'=>'0410938634',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>64,
            'nom'=>'LAMBERT',
            'prenom'=>'Aude',
            'adresse'=>'40 rue Mallarmé SAINT-FIRMIN 05800',
            'tel'=>'0434328795',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>65,
            'nom'=>'DAVID',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'80 rue Victor Hugo LAVAL-MORENCY 08150',
            'tel'=>'0354570788',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>66,
            'nom'=>'FOURNIER',
            'prenom'=>'Alice',
            'adresse'=>'48 rue des perles blanches QUATRE-CHAMPS 08400',
            'tel'=>'0351022549',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>67,
            'nom'=>'GONZALEZ',
            'prenom'=>'Bénédicte',
            'adresse'=>'44 rue des Pigeons SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0453817641',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>68,
            'nom'=>'COHEN',
            'prenom'=>'Précilia',
            'adresse'=>'65 rue St Denis ASTON 09310',
            'tel'=>'0574385413',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>69,
            'nom'=>'CAILLOL',
            'prenom'=>'Andrée',
            'adresse'=>'86 rue des Pigeons AX-LES-THERMES 09110',
            'tel'=>'0512919575',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>70,
            'nom'=>'GROS',
            'prenom'=>'Bertrand',
            'adresse'=>'87 rue du 14 juillet BARZY-SUR-MARNE 02850',
            'tel'=>'0389988201',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>71,
            'nom'=>'AUDIBERT',
            'prenom'=>'Jérome',
            'adresse'=>'40 rue Bonaparte MAYOT 02800',
            'tel'=>'0380247692',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>72,
            'nom'=>'CLEMENT',
            'prenom'=>'Victor',
            'adresse'=>'91 rue Malraux MEZIERES-SUR-OISE 02240',
            'tel'=>'0396223586',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>73,
            'nom'=>'JULLIEN',
            'prenom'=>'Victor',
            'adresse'=>'86 rue du capitaine Fraquasse SAVINES-LE-LAC 05160',
            'tel'=>'0424098074',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>74,
            'nom'=>'GARNIER',
            'prenom'=>'Bertrand',
            'adresse'=>'44 rue du capitaine Fraquasse MONTIGNY-SUR-MEUSE 08170',
            'tel'=>'0365814281',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>75,
            'nom'=>'PAUL',
            'prenom'=>'Adrien',
            'adresse'=>'47 rue Commandant Hériot AUDRESSEIN 09800',
            'tel'=>'0561293920',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>76,
            'nom'=>'LOMBARD',
            'prenom'=>'Irénée',
            'adresse'=>'42 rue des Epines SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0432573377',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>77,
            'nom'=>'DUMAS',
            'prenom'=>'Amélie',
            'adresse'=>'95 rue Anatole France HERBEUVAL 08370',
            'tel'=>'0395342234',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>78,
            'nom'=>'MORENO',
            'prenom'=>'Jordan',
            'adresse'=>'18 rue Blainville AVANCON 05230',
            'tel'=>'0410805260',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>79,
            'nom'=>'BERENGER',
            'prenom'=>'Anne-Laure',
            'adresse'=>'49 rue des Princes OYONNAX 01100',
            'tel'=>'0495914341',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>80,
            'nom'=>'PETIT',
            'prenom'=>'Ingrid',
            'adresse'=>'90 rue des Lilas BELLOC 09600',
            'tel'=>'0550136460',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>81,
            'nom'=>'SIMON',
            'prenom'=>'Yoan',
            'adresse'=>'2 rue Beaudelaire FALAISE 08400',
            'tel'=>'0349609708',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>82,
            'nom'=>'MARTINI',
            'prenom'=>'Jules',
            'adresse'=>'61 rue Petit SORBIERS 05150',
            'tel'=>'0453597713',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>83,
            'nom'=>'JOUVE',
            'prenom'=>'Jérome',
            'adresse'=>'12 rue Agniel ABBECOURT 02300',
            'tel'=>'0336592352',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>84,
            'nom'=>'BOURRELLY',
            'prenom'=>'Bernard',
            'adresse'=>'46 rue des Néfliers ARROUT 09800',
            'tel'=>'0593876907',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>85,
            'nom'=>'NEGREL',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'94 rue de la Tour AUBENTON 02500',
            'tel'=>'0315358087',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>86,
            'nom'=>'CHAIX',
            'prenom'=>'John',
            'adresse'=>'13 rue de la recette MONT-LAURENT 08130',
            'tel'=>'0324815927',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>87,
            'nom'=>'PERRIN',
            'prenom'=>'Aurélien',
            'adresse'=>'34 rue Alphonse Daudet MONTCY-NOTRE-DAME 08090',
            'tel'=>'0388838695',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>88,
            'nom'=>'DAUMAS',
            'prenom'=>'Anne-Marie',
            'adresse'=>'50 rue Commandant Mouchotte BARENTON-SUR-SERRE 02270',
            'tel'=>'0380767789',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>89,
            'nom'=>'MATTEI',
            'prenom'=>'Marie',
            'adresse'=>'36 rue de la rose BOULIGNEUX 01330',
            'tel'=>'0459841705',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>90,
            'nom'=>'MARIN',
            'prenom'=>'Bertrand',
            'adresse'=>'80 rue Beaudelaire FLOING 08200',
            'tel'=>'0370254981',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>91,
            'nom'=>'GIMENEZ',
            'prenom'=>'Austine',
            'adresse'=>'37 rue Agniel BILLIAT 01200',
            'tel'=>'0498702952',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>92,
            'nom'=>'CAMOIN',
            'prenom'=>'Aline',
            'adresse'=>'85 rue des Cavaux AUBENTON 02500',
            'tel'=>'0320874526',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>93,
            'nom'=>'GAY',
            'prenom'=>'Béatrice',
            'adresse'=>'98 rue Perdue AUDRESSEIN 09800',
            'tel'=>'0550107365',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>94,
            'nom'=>'PELLEGRIN',
            'prenom'=>'Fernand',
            'adresse'=>'21 rue Blainville ABBECOURT 02300',
            'tel'=>'0379546875',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>95,
            'nom'=>'CHAUVET',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'47 rue des Anses bleues BARENTON-SUR-SERRE 02270',
            'tel'=>'0357798474',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>96,
            'nom'=>'BREMOND',
            'prenom'=>'Julienne',
            'adresse'=>'89 rue du stade VAUX-CHAMPAGNE 08130',
            'tel'=>'0321409034',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>97,
            'nom'=>'TORRES',
            'prenom'=>'Alain',
            'adresse'=>'21 rue des pyramides MONTCY-NOTRE-DAME 08090',
            'tel'=>'0355126171',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>98,
            'nom'=>'ISNARD',
            'prenom'=>'André',
            'adresse'=>'70 rue de la rose THIN-LE-MOUTIER 08460',
            'tel'=>'0383574338',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>99,
            'nom'=>'OLLIVIER',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'28 rue du Mont AX-LES-THERMES 09110',
            'tel'=>'0525425981',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>100,
            'nom'=>'BRUNET',
            'prenom'=>'Jérémie',
            'adresse'=>'83 rue de la pointe MONTCY-NOTRE-DAME 08090',
            'tel'=>'0344175754',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>101,
            'nom'=>'OLIVIER',
            'prenom'=>'Alizée',
            'adresse'=>'23 rue des Néfliers BARZY-SUR-MARNE 02850',
            'tel'=>'0318063658',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>102,
            'nom'=>'GUERIN',
            'prenom'=>'Béatrice',
            'adresse'=>'75 rue de la poste SIGOYER 05130',
            'tel'=>'0499728475',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>103,
            'nom'=>'RUSSO',
            'prenom'=>'Jimmy',
            'adresse'=>'57 rue du 14 juillet BEDEILLE 09230',
            'tel'=>'0579403405',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>104,
            'nom'=>'PAOLI',
            'prenom'=>'Martin',
            'adresse'=>'77 rue Edouard Hériot PELVOUX 05340',
            'tel'=>'0465821962',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>105,
            'nom'=>'FERRERO',
            'prenom'=>'Astine',
            'adresse'=>'77 rue des Chantereines SIGOYER 05130',
            'tel'=>'0443207794',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>106,
            'nom'=>'COSTA',
            'prenom'=>'Julien',
            'adresse'=>'75 rue des Epines EVIGNY 08090',
            'tel'=>'0353124513',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>107,
            'nom'=>'LACROIX',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'64 rue des Pigeons BEAUMONT-EN-BEINE 02300',
            'tel'=>'0357357391',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>108,
            'nom'=>'VIAL',
            'prenom'=>'Fernand',
            'adresse'=>'21 rue Commandant Hériot ARROUT 09800',
            'tel'=>'0533982064',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>109,
            'nom'=>'BRUNO',
            'prenom'=>'Aurélien',
            'adresse'=>'13 rue Debussy AUGIREIN 09800',
            'tel'=>'0550671849',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>110,
            'nom'=>'GILLES',
            'prenom'=>'Hector',
            'adresse'=>'54 rue des Chantereines BEAUMONT-EN-BEINE 02300',
            'tel'=>'0397960460',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>111,
            'nom'=>'THOMAS',
            'prenom'=>'Bénédicte',
            'adresse'=>'7 rue de Paris BOURG-EN-BRESSE 01000',
            'tel'=>'0483574560',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>112,
            'nom'=>'BENOIT',
            'prenom'=>'Aristote',
            'adresse'=>'35 rue des Argonautes FEPIN 08170',
            'tel'=>'0321622783',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>113,
            'nom'=>'CASANOVA',
            'prenom'=>'Anémone',
            'adresse'=>'66 rue Blainville ARROUT 09800',
            'tel'=>'0561274309',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>114,
            'nom'=>'RICHAUD',
            'prenom'=>'Hamed',
            'adresse'=>'96 rue de la Tour SAINT-CREPIN 05600',
            'tel'=>'0466381035',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>115,
            'nom'=>'BIANCHI',
            'prenom'=>'Précilia',
            'adresse'=>'45 rue des Chantereines MONTIGNY-SUR-MEUSE 08170',
            'tel'=>'0319515228',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>116,
            'nom'=>'GRANIER',
            'prenom'=>'Ines',
            'adresse'=>'54 rue de la Tour AUGIREIN 09800',
            'tel'=>'0522353355',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>117,
            'nom'=>'CHABERT',
            'prenom'=>'Alizée',
            'adresse'=>'32 rue des gatinnes SAINT-SAUVEUR 05200',
            'tel'=>'0479723538',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>118,
            'nom'=>'ROLLAND',
            'prenom'=>'Reissa',
            'adresse'=>'36 rue Malraux FLEVILLE 08250',
            'tel'=>'0389034128',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>119,
            'nom'=>'RIGAUD',
            'prenom'=>'Anne-Sophie',
            'adresse'=>'27 rue Anatole France LAUNOIS-SUR-VENCE 08430',
            'tel'=>'0319617909',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>120,
            'nom'=>'DUBOIS',
            'prenom'=>'Hamed',
            'adresse'=>'44 rue de la Pergolat AGUILCOURT 02190',
            'tel'=>'0391017673',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>121,
            'nom'=>'HUGUES',
            'prenom'=>'Alain',
            'adresse'=>'97 rue des Anges SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0420673509',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>122,
            'nom'=>'BARBIER',
            'prenom'=>'Rodolphe',
            'adresse'=>'5 rue de la pointe AUGIREIN 09800',
            'tel'=>'0568080361',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>123,
            'nom'=>'MILLE',
            'prenom'=>'Andrée',
            'adresse'=>'26 rue des Argonautes BELLEY 01300',
            'tel'=>'0417979762',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>124,
            'nom'=>'MAGNAN',
            'prenom'=>'Hamed',
            'adresse'=>'52 rue des Argonautes BILLIAT 01200',
            'tel'=>'0434883323',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>125,
            'nom'=>'ARNOUX',
            'prenom'=>'Mohammed',
            'adresse'=>'33 rue Bonaparte VAUX-CHAMPAGNE 08130',
            'tel'=>'0388412366',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>126,
            'nom'=>'LEVY',
            'prenom'=>'Patricia',
            'adresse'=>'86 rue de la poste ASTON 09310',
            'tel'=>'0544573807',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>127,
            'nom'=>'GAUTHIER',
            'prenom'=>'Aurélien',
            'adresse'=>'51 rue Debussy SAINT-FIRMIN 05800',
            'tel'=>'0429493464',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>128,
            'nom'=>'CHABAUD',
            'prenom'=>'Firmin',
            'adresse'=>'69 rue de Paris MEZIERES-SUR-OISE 02240',
            'tel'=>'0327148898',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>129,
            'nom'=>'REBOUL',
            'prenom'=>'Robert',
            'adresse'=>'18 rue des Pigeons MAYOT 02800',
            'tel'=>'0350756815',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>130,
            'nom'=>'TEISSIER',
            'prenom'=>'Patrick',
            'adresse'=>'35 rue des Cyprés MEZIERES-SUR-OISE 02240',
            'tel'=>'0375111486',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>131,
            'nom'=>'FERRARI',
            'prenom'=>'Catherine',
            'adresse'=>'67 rue des Pigeons NEUVILLE-LES-DAMES 01400',
            'tel'=>'0445004508',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>132,
            'nom'=>'SICARD',
            'prenom'=>'Aude',
            'adresse'=>'68 rue des Epines BAGERT 09230',
            'tel'=>'0511378600',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>133,
            'nom'=>'COULOMB',
            'prenom'=>'François',
            'adresse'=>'38 rue Agniel PELVOUX 05340',
            'tel'=>'0466704922',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>134,
            'nom'=>'ARMAND',
            'prenom'=>'Habib',
            'adresse'=>'96 rue de Marigny SAINTE-MARIE 05150',
            'tel'=>'0472203933',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>135,
            'nom'=>'MARCHETTI',
            'prenom'=>'Annie',
            'adresse'=>'98 rue des Argonautes FRESSANCOURT 02800',
            'tel'=>'0324461914',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>136,
            'nom'=>'GRAS',
            'prenom'=>'Julienne',
            'adresse'=>'59 rue des gatinnes BARZY-SUR-MARNE 02850',
            'tel'=>'0311581103',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>137,
            'nom'=>'REYNIER',
            'prenom'=>'Alain',
            'adresse'=>'48 rue des Epines VAUX-CHAMPAGNE 08130',
            'tel'=>'0353929274',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>138,
            'nom'=>'DIAZ',
            'prenom'=>'Aristote',
            'adresse'=>'42 rue Edouard Hériot BAGERT 09230',
            'tel'=>'0597457423',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>139,
            'nom'=>'SERRE',
            'prenom'=>'Catherine',
            'adresse'=>'53 rue des hirondelles SAINT-FIRMIN 05800',
            'tel'=>'0473864972',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>140,
            'nom'=>'MARIANI',
            'prenom'=>'Fatima',
            'adresse'=>'7 rue Alphonse Daudet ASTON 09310',
            'tel'=>'0573029393',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>141,
            'nom'=>'JAUFFRET',
            'prenom'=>'Fernand',
            'adresse'=>'64 rue des Artistes AX-LES-THERMES 09110',
            'tel'=>'0580503787',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>142,
            'nom'=>'SERRA',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'17 rue Pernod DOMMARTIN 01380',
            'tel'=>'0454076144',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>143,
            'nom'=>'BONIFAY',
            'prenom'=>'Anne-Ange',
            'adresse'=>'39 rue des Anges SAVINES-LE-LAC 05160',
            'tel'=>'0460795137',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>144,
            'nom'=>'BERARD',
            'prenom'=>'Alice',
            'adresse'=>'32 rue des pyramides BEAUMONT-EN-BEINE 02300',
            'tel'=>'0315894255',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>145,
            'nom'=>'HENRY',
            'prenom'=>'Armelle',
            'adresse'=>'44 rue Perdue ABBECOURT 02300',
            'tel'=>'0346616676',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>146,
            'nom'=>'CANO',
            'prenom'=>'Anne-Ange',
            'adresse'=>'67 rue de la pointe SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0479957609',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>147,
            'nom'=>'AILLAUD',
            'prenom'=>'André',
            'adresse'=>'9 rue Mallarmé AUBENTON 02500',
            'tel'=>'0342830645',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>148,
            'nom'=>'GRIMAUD',
            'prenom'=>'Aurèle',
            'adresse'=>'54 rue du stade NEUVILLE-LES-DAMES 01400',
            'tel'=>'0470983399',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>149,
            'nom'=>'SABATIER',
            'prenom'=>'Jimmy',
            'adresse'=>'8 rue Albert Camus MONTCY-NOTRE-DAME 08090',
            'tel'=>'0339328684',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>150,
            'nom'=>'LIEUTAUD',
            'prenom'=>'Anaelle',
            'adresse'=>'53 rue St Denis BELLOC 09600',
            'tel'=>'0575252091',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>151,
            'nom'=>'GUICHARD',
            'prenom'=>'Armelle',
            'adresse'=>'79 rue Beaudelaire BAGERT 09230',
            'tel'=>'0574702561',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>152,
            'nom'=>'ETIENNE',
            'prenom'=>'Catherine',
            'adresse'=>'81 rue des Cyprés SIGOYER 05130',
            'tel'=>'0431018220',
            'specialite_complementaire'=>'Pédiatrie',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>153,
            'nom'=>'GINOUX',
            'prenom'=>'Julien',
            'adresse'=>'33 rue des Cyprés BAGERT 09230',
            'tel'=>'0590592425',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>154,
            'nom'=>'FRANCESCHI',
            'prenom'=>'Adelphe',
            'adresse'=>'7 rue de la poste OYONNAX 01100',
            'tel'=>'0463473029',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>155,
            'nom'=>'BOUCHET',
            'prenom'=>'Hypolite',
            'adresse'=>'62 rue Malraux BOURG-EN-BRESSE 01000',
            'tel'=>'0459994942',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>156,
            'nom'=>'GALLO',
            'prenom'=>'Martin',
            'adresse'=>'4 rue des perles blanches FLOING 08200',
            'tel'=>'0377624408',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>157,
            'nom'=>'ROSSO',
            'prenom'=>'Aristote',
            'adresse'=>'13 rue des Argonautes ABBECOURT 02300',
            'tel'=>'0334073561',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>158,
            'nom'=>'MOREL',
            'prenom'=>'Roby',
            'adresse'=>'16 rue Hector Berlioz MACHAULT 08310',
            'tel'=>'0327990795',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>159,
            'nom'=>'BOREL',
            'prenom'=>'Austine',
            'adresse'=>'86 rue Pernod SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0475430562',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>160,
            'nom'=>'RIPERT',
            'prenom'=>'François',
            'adresse'=>'75 rue Anatole France AX-LES-THERMES 09110',
            'tel'=>'0527300069',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>161,
            'nom'=>'PAYAN',
            'prenom'=>'Aurèle',
            'adresse'=>'77 rue des perles blanches BANCIGNY 02140',
            'tel'=>'0336207616',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>162,
            'nom'=>'LUCIANI',
            'prenom'=>'Carole',
            'adresse'=>'62 rue de la pointe BRIANCON 05100',
            'tel'=>'0494704120',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>163,
            'nom'=>'BARRA',
            'prenom'=>'Charles-Edouard',
            'adresse'=>'96 rue des Pigeons MONTCY-NOTRE-DAME 08090',
            'tel'=>'0351941479',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>164,
            'nom'=>'GAILLARD',
            'prenom'=>'Hamed',
            'adresse'=>'88 rue des Armées BELLEY 01300',
            'tel'=>'0425303459',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>165,
            'nom'=>'AGOSTINI',
            'prenom'=>'Amélie',
            'adresse'=>'8 rue de la gare AX-LES-THERMES 09110',
            'tel'=>'0543024681',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>166,
            'nom'=>'GREGOIRE',
            'prenom'=>'Yoan',
            'adresse'=>'67 rue des Anges SAINT-SAUVEUR 05200',
            'tel'=>'0444643838',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>167,
            'nom'=>'ROUSSET',
            'prenom'=>'Victor',
            'adresse'=>'31 rue des Anges BUZAN 09800',
            'tel'=>'0531789114',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>168,
            'nom'=>'RAYNAUD',
            'prenom'=>'Julien',
            'adresse'=>'30 rue des Argonautes ATTILLY 02490',
            'tel'=>'0381097843',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>169,
            'nom'=>'CAYOL',
            'prenom'=>'Astine',
            'adresse'=>'63 rue du stade AX-LES-THERMES 09110',
            'tel'=>'0589774185',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>170,
            'nom'=>'MARTEL',
            'prenom'=>'Johnny',
            'adresse'=>'63 rue du 14 juillet AX-LES-THERMES 09110',
            'tel'=>'0559787089',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>171,
            'nom'=>'PELISSIER',
            'prenom'=>'Anaelle',
            'adresse'=>'72 rue de Paris CHALLES 01450',
            'tel'=>'0436897781',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>172,
            'nom'=>'ALLEMAND',
            'prenom'=>'Habib',
            'adresse'=>'42 rue des Ormes BILLIAT 01200',
            'tel'=>'0461405456',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>173,
            'nom'=>'FERRIER',
            'prenom'=>'Johnny',
            'adresse'=>'62 rue du général de Gaulle BOURG-EN-BRESSE 01000',
            'tel'=>'0479899509',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>174,
            'nom'=>'RAYMOND',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'9 rue Pasteur SAINT-FIRMIN 05800',
            'tel'=>'0412854347',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>175,
            'nom'=>'MISTRAL',
            'prenom'=>'Françoise',
            'adresse'=>'36 rue des Ormes SAINT-CREPIN 05600',
            'tel'=>'0470969763',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>176,
            'nom'=>'SOLER',
            'prenom'=>'Annie',
            'adresse'=>'6 rue des Armées ASTON 09310',
            'tel'=>'0561398750',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>177,
            'nom'=>'DURBEC',
            'prenom'=>'Alizée',
            'adresse'=>'60 rue Edouard Hériot ASTON 09310',
            'tel'=>'0529196402',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>178,
            'nom'=>'DOSSETTO',
            'prenom'=>'Victor',
            'adresse'=>'68 rue de la Pergolat BEDEILLE 09230',
            'tel'=>'0510798563',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>179,
            'nom'=>'FERRER',
            'prenom'=>'Amiel',
            'adresse'=>'48 rue Alphonse Daudet FLOING 08200',
            'tel'=>'0367188526',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>180,
            'nom'=>'FILIPPI',
            'prenom'=>'Serge',
            'adresse'=>'13 rue des Epines BETTANT 01500',
            'tel'=>'0415842763',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>181,
            'nom'=>'BASSO',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'91 rue Lampion HOUDILCOURT 08190',
            'tel'=>'0360919149',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>182,
            'nom'=>'GIL',
            'prenom'=>'Firmin',
            'adresse'=>'79 rue Commandant Mouchotte SAVINES-LE-LAC 05160',
            'tel'=>'0454186158',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>183,
            'nom'=>'POLI',
            'prenom'=>'Jules',
            'adresse'=>'41 rue Louis Aragon SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0470580820',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>184,
            'nom'=>'CHAUVIN',
            'prenom'=>'Irénée',
            'adresse'=>'25 rue Lampion BLYES 01150',
            'tel'=>'0462212615',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>185,
            'nom'=>'MARTINO',
            'prenom'=>'Anne-Marie',
            'adresse'=>'21 rue de la Pergolat AX-LES-THERMES 09110',
            'tel'=>'0552002239',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>186,
            'nom'=>'ESTIENNE',
            'prenom'=>'Ines',
            'adresse'=>'81 rue du 14 juillet BELLOC 09600',
            'tel'=>'0579065527',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>187,
            'nom'=>'GOUIRAN',
            'prenom'=>'Aurèle',
            'adresse'=>'82 rue des Anges MEZIERES-SUR-OISE 02240',
            'tel'=>'0372146119',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>188,
            'nom'=>'VERNET',
            'prenom'=>'Ingrid',
            'adresse'=>'2 rue de la rose BARZY-SUR-MARNE 02850',
            'tel'=>'0374513763',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>189,
            'nom'=>'ROMANO',
            'prenom'=>'Prosper',
            'adresse'=>'34 rue Louis Aragon ARROUT 09800',
            'tel'=>'0570233041',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>190,
            'nom'=>'ROUSSEL',
            'prenom'=>'Hamed',
            'adresse'=>'54 rue Louis Aragon MACHAULT 08310',
            'tel'=>'0361841793',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>191,
            'nom'=>'BIANCO',
            'prenom'=>'Yoan',
            'adresse'=>'69 rue des Accacias BEAUMONT-EN-BEINE 02300',
            'tel'=>'0364444471',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>192,
            'nom'=>'LOMBARDO',
            'prenom'=>'Serge',
            'adresse'=>'57 rue du capitaine Crochet MONTCY-NOTRE-DAME 08090',
            'tel'=>'0348000197',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>193,
            'nom'=>'CHEVALIER',
            'prenom'=>'Patrice',
            'adresse'=>'64 rue Albert Camus SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0427960246',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>194,
            'nom'=>'JAUBERT',
            'prenom'=>'Aristote',
            'adresse'=>'5 rue des Cyprés AZY-SUR-MARNE 02400',
            'tel'=>'0352734097',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>195,
            'nom'=>'FERRATO',
            'prenom'=>'Astine',
            'adresse'=>'40 rue Louis Aragon MONTCY-NOTRE-DAME 08090',
            'tel'=>'0335541135',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>196,
            'nom'=>'MOUREN',
            'prenom'=>'Anémone',
            'adresse'=>'85 rue Hector Berlioz BEZAC 09100',
            'tel'=>'0538796488',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>197,
            'nom'=>'PINATEL',
            'prenom'=>'Anselme',
            'adresse'=>'79 rue des Cavaux CHABESTAN 05400',
            'tel'=>'0478991381',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>198,
            'nom'=>'ALBERTINI',
            'prenom'=>'Gilles',
            'adresse'=>'88 rue Alphonse Daudet BELLOC 09600',
            'tel'=>'0591522693',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>199,
            'nom'=>'GERARD',
            'prenom'=>'Austine',
            'adresse'=>'72 rue des Ormes MESSINCOURT 08110',
            'tel'=>'0368355399',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>200,
            'nom'=>'OLIVIERI',
            'prenom'=>'Aurèle',
            'adresse'=>'53 rue Hector Berlioz FALAISE 08400',
            'tel'=>'0325150351',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>201,
            'nom'=>'BARTOLI',
            'prenom'=>'Nohan',
            'adresse'=>'58 rue du 14 juillet AUBENTON 02500',
            'tel'=>'0380869429',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>202,
            'nom'=>'MOURET',
            'prenom'=>'Jimmy',
            'adresse'=>'41 rue du Mont FRESSANCOURT 02800',
            'tel'=>'0333010728',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>203,
            'nom'=>'LOMBARDI',
            'prenom'=>'Gilles',
            'adresse'=>'26 rue du capitaine Fraquasse YONCQ 08210',
            'tel'=>'0355888480',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>204,
            'nom'=>'ORSINI',
            'prenom'=>'Jules',
            'adresse'=>'95 rue des gatinnes EVIGNY 08090',
            'tel'=>'0321047751',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>205,
            'nom'=>'MERCIER',
            'prenom'=>'Adrien',
            'adresse'=>'37 rue de la rose BARENTON-SUR-SERRE 02270',
            'tel'=>'0333061059',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>206,
            'nom'=>'ASTIER',
            'prenom'=>'Astine',
            'adresse'=>'29 rue Louis Aragon FLEVILLE 08250',
            'tel'=>'0337878739',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>207,
            'nom'=>'LECA',
            'prenom'=>'Ingrid',
            'adresse'=>'95 rue Mallarmé AX-LES-THERMES 09110',
            'tel'=>'0538253531',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>208,
            'nom'=>'BESSON',
            'prenom'=>'Julie',
            'adresse'=>'70 rue du Mont BILLIAT 01200',
            'tel'=>'0434858369',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>209,
            'nom'=>'FONTAINE',
            'prenom'=>'Jules',
            'adresse'=>'87 rue des hirondelles FLOING 08200',
            'tel'=>'0366452640',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>210,
            'nom'=>'MALLET',
            'prenom'=>'sabine',
            'adresse'=>'70 rue des Ormes LAVAL-MORENCY 08150',
            'tel'=>'0313786191',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>211,
            'nom'=>'DALMASSO',
            'prenom'=>'Anne-Sophie',
            'adresse'=>'72 rue de Paris AMBRIEF 02200',
            'tel'=>'0396888350',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>212,
            'nom'=>'COLOMBANI',
            'prenom'=>'Julienne',
            'adresse'=>'95 rue de du général Scott SAINT-FIRMIN 05800',
            'tel'=>'0499781511',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>213,
            'nom'=>'SANNA',
            'prenom'=>'Prosper',
            'adresse'=>'40 rue du stade CHEZY-SUR-MARNE 02570',
            'tel'=>'0370552277',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>214,
            'nom'=>'GERMAIN',
            'prenom'=>'François',
            'adresse'=>'21 rue des oiseaux AUBENTON 02500',
            'tel'=>'0347608567',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>215,
            'nom'=>'BERGER',
            'prenom'=>'Béatrice',
            'adresse'=>'91 rue de Paris BARENTON-SUR-SERRE 02270',
            'tel'=>'0332630528',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>216,
            'nom'=>'MULLER',
            'prenom'=>'Alice',
            'adresse'=>'14 rue de la Tour PELVOUX 05340',
            'tel'=>'0497349269',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>217,
            'nom'=>'DANIEL',
            'prenom'=>'Hypolite',
            'adresse'=>'4 rue Petit AX-LES-THERMES 09110',
            'tel'=>'0592259965',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>218,
            'nom'=>'ACHARD',
            'prenom'=>'Dominique',
            'adresse'=>'17 rue Victor Hugo NEUVILLE-LES-DAMES 01400',
            'tel'=>'0436894892',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>219,
            'nom'=>'BENEDETTI',
            'prenom'=>'Précilia',
            'adresse'=>'46 rue Perdue MONT-LAURENT 08130',
            'tel'=>'0357123782',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>220,
            'nom'=>'RAVEL',
            'prenom'=>'Patrice',
            'adresse'=>'37 rue des perles blanches AUGIREIN 09800',
            'tel'=>'0514467307',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>221,
            'nom'=>'BERNARDI',
            'prenom'=>'Catherine',
            'adresse'=>'18 rue de la Pergolat CHABESTAN 05400',
            'tel'=>'0433787136',
            'specialite_complementaire'=>'Pédiatrie',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>222,
            'nom'=>'LATIL',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'61 rue Malraux SAVINES-LE-LAC 05160',
            'tel'=>'0425403948',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>223,
            'nom'=>'MAUNIER',
            'prenom'=>'Martial',
            'adresse'=>'39 rue des Pigeons FRESSANCOURT 02800',
            'tel'=>'0376405689',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>224,
            'nom'=>'DUPUY',
            'prenom'=>'Ines',
            'adresse'=>'36 rue du général de Gaulle AX-LES-THERMES 09110',
            'tel'=>'0571237673',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>225,
            'nom'=>'MOULIN',
            'prenom'=>'Fatima',
            'adresse'=>'27 rue des Ormes BARENTON-SUR-SERRE 02270',
            'tel'=>'0369886219',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>226,
            'nom'=>'DUPONT',
            'prenom'=>'Cristophe',
            'adresse'=>'35 rue Commandant Mouchotte CHEZY-SUR-MARNE 02570',
            'tel'=>'0399128847',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>227,
            'nom'=>'MARINO',
            'prenom'=>'Charles-Edouard',
            'adresse'=>'69 rue de Paris BRIANCON 05100',
            'tel'=>'0486522042',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>228,
            'nom'=>'FAVIER',
            'prenom'=>'Alice',
            'adresse'=>'64 rue de Paris SORBIERS 05150',
            'tel'=>'0498218342',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>229,
            'nom'=>'PELLEGRINO',
            'prenom'=>'Johnny',
            'adresse'=>'4 rue des Lilas BELLOC 09600',
            'tel'=>'0583708661',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>230,
            'nom'=>'PERROT',
            'prenom'=>'Marie',
            'adresse'=>'27 rue du stade NEUVILLE-LES-DAMES 01400',
            'tel'=>'0440602180',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>231,
            'nom'=>'LUCCHESI',
            'prenom'=>'Patrice',
            'adresse'=>'25 rue des Néfliers AGUILCOURT 02190',
            'tel'=>'0313705112',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>232,
            'nom'=>'RICCI',
            'prenom'=>'Roby',
            'adresse'=>'74 rue de Marigny JUNIVILLE 08310',
            'tel'=>'0370618394',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>233,
            'nom'=>'AUGIER',
            'prenom'=>'François',
            'adresse'=>'40 rue Commandant Mouchotte BOURG-EN-BRESSE 01000',
            'tel'=>'0466232870',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>234,
            'nom'=>'MANCINI',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'28 rue de la poste MONCEAU-SUR-OISE 02120',
            'tel'=>'0337880516',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>235,
            'nom'=>'BRUNEL',
            'prenom'=>'Marie',
            'adresse'=>'65 rue des Accacias MEZIERES-SUR-OISE 02240',
            'tel'=>'0347429128',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>236,
            'nom'=>'MUNOZ',
            'prenom'=>'Irénée',
            'adresse'=>'66 rue Victor Hugo ASTON 09310',
            'tel'=>'0545396012',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>237,
            'nom'=>'MUSSO',
            'prenom'=>'Aurèle',
            'adresse'=>'78 rue du 14 juillet NEUVILLE-LES-DAMES 01400',
            'tel'=>'0436441368',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>238,
            'nom'=>'CONTE',
            'prenom'=>'Jimmy',
            'adresse'=>'31 rue des Cavaux BOURG-EN-BRESSE 01000',
            'tel'=>'0489010528',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>239,
            'nom'=>'MORETTI',
            'prenom'=>'Jordan',
            'adresse'=>'56 rue du Mont BRIANCON 05100',
            'tel'=>'0497686569',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>240,
            'nom'=>'COMBE',
            'prenom'=>'Andrew',
            'adresse'=>'5 rue des Pigeons ATTILLY 02490',
            'tel'=>'0317928011',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>241,
            'nom'=>'PASTOR',
            'prenom'=>'Andrée',
            'adresse'=>'9 rue de Paris CAMON 09500',
            'tel'=>'0575615612',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>242,
            'nom'=>'PHILIP',
            'prenom'=>'Aurélien',
            'adresse'=>'34 rue des perles blanches HERBEUVAL 08370',
            'tel'=>'0354324365',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>243,
            'nom'=>'NOEL',
            'prenom'=>'Caline',
            'adresse'=>'90 rue des Pigeons BETTANT 01500',
            'tel'=>'0441422871',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>244,
            'nom'=>'PAULEAU',
            'prenom'=>'Bertrand',
            'adresse'=>'88 rue Mallarmé CAMON 09500',
            'tel'=>'0519717031',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>245,
            'nom'=>'MOREAU',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'31 rue St Denis AVANCON 05230',
            'tel'=>'0476620839',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>246,
            'nom'=>'DIDIER',
            'prenom'=>'Anne-Marie',
            'adresse'=>'32 rue Petit BOULIGNEUX 01330',
            'tel'=>'0429892782',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>247,
            'nom'=>'MASSON',
            'prenom'=>'Anne',
            'adresse'=>'96 rue des pyramides SAINT-FIRMIN 05800',
            'tel'=>'0430056957',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>248,
            'nom'=>'GRIMALDI',
            'prenom'=>'Jordan',
            'adresse'=>'71 rue Lampion ROCHEBRUNE 05190',
            'tel'=>'0422193913',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>249,
            'nom'=>'MAS',
            'prenom'=>'Hector',
            'adresse'=>'39 rue des Chantereines SAINT-CREPIN 05600',
            'tel'=>'0427945468',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>250,
            'nom'=>'ALLEGRE',
            'prenom'=>'Patrice',
            'adresse'=>'35 rue de la gare DOMMARTIN 01380',
            'tel'=>'0412349269',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>251,
            'nom'=>'MARCHAND',
            'prenom'=>'Austine',
            'adresse'=>'1 rue Perdue BANCIGNY 02140',
            'tel'=>'0362784487',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>252,
            'nom'=>'DAVIN',
            'prenom'=>'Nohan',
            'adresse'=>'87 rue de la poste ORCIERES 05170',
            'tel'=>'0492790588',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>253,
            'nom'=>'CANOVAS',
            'prenom'=>'Adrien',
            'adresse'=>'6 rue St Denis NEUVILLE-LES-DAMES 01400',
            'tel'=>'0463805846',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>254,
            'nom'=>'RIVIERE',
            'prenom'=>'Aurélien',
            'adresse'=>'24 rue Anatole France FALAISE 08400',
            'tel'=>'0394184441',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>255,
            'nom'=>'MEYER',
            'prenom'=>'Anne-Sophie',
            'adresse'=>'78 rue Mallarmé BELLOC 09600',
            'tel'=>'0565131061',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>256,
            'nom'=>'BOUSQUET',
            'prenom'=>'Précilia',
            'adresse'=>'17 rue de Paris BARZY-SUR-MARNE 02850',
            'tel'=>'0373800189',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>257,
            'nom'=>'RAMPAL',
            'prenom'=>'Béatrice',
            'adresse'=>'65 rue des Cyprés ASTON 09310',
            'tel'=>'0556222808',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>258,
            'nom'=>'FRANCOIS',
            'prenom'=>'Alain',
            'adresse'=>'12 rue des oiseaux BEAUMONT-EN-BEINE 02300',
            'tel'=>'0336437836',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>259,
            'nom'=>'BELLON',
            'prenom'=>'Jérémy',
            'adresse'=>'13 rue Louis Aragon ARROUT 09800',
            'tel'=>'0579019785',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>260,
            'nom'=>'PINNA',
            'prenom'=>'Alice',
            'adresse'=>'42 rue des hirondelles SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0418404333',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>261,
            'nom'=>'MASSE',
            'prenom'=>'Serge',
            'adresse'=>'54 rue Debussy AUDRESSEIN 09800',
            'tel'=>'0589986579',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>262,
            'nom'=>'PELLEGRINI',
            'prenom'=>'Bertrand',
            'adresse'=>'16 rue de la Tour MONTIGNY-SUR-MEUSE 08170',
            'tel'=>'0362958231',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>263,
            'nom'=>'JACQUET',
            'prenom'=>'Alizée',
            'adresse'=>'85 rue Alphonse Daudet SAINT-SAUVEUR 05200',
            'tel'=>'0469350553',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>264,
            'nom'=>'SEGURA',
            'prenom'=>'Irénée',
            'adresse'=>'54 rue de Marigny PELVOUX 05340',
            'tel'=>'0413512651',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>265,
            'nom'=>'ALLARD',
            'prenom'=>'Bertrand',
            'adresse'=>'66 rue du capitaine Crochet BILLIAT 01200',
            'tel'=>'0430273395',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>266,
            'nom'=>'PEYRE',
            'prenom'=>'Reissa',
            'adresse'=>'92 rue des Epines BOURG-EN-BRESSE 01000',
            'tel'=>'0462567494',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>267,
            'nom'=>'BARRAL',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'58 rue des Anges FRESSANCOURT 02800',
            'tel'=>'0397948858',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>268,
            'nom'=>'GABRIEL',
            'prenom'=>'Alain',
            'adresse'=>'13 rue Albert Camus BAGERT 09230',
            'tel'=>'0561056383',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>269,
            'nom'=>'ORTEGA',
            'prenom'=>'Rodolphe',
            'adresse'=>'4 rue Bonaparte NEUVILLE-LES-DAMES 01400',
            'tel'=>'0499930510',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>270,
            'nom'=>'DELEUIL',
            'prenom'=>'Dominique',
            'adresse'=>'31 rue Pernod MESSINCOURT 08110',
            'tel'=>'0354437353',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>271,
            'nom'=>'CHAVE',
            'prenom'=>'Amélie',
            'adresse'=>'73 rue des Epines AGUILCOURT 02190',
            'tel'=>'0393504917',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>272,
            'nom'=>'BARBAROUX',
            'prenom'=>'Aude',
            'adresse'=>'43 rue des Pigeons FALAISE 08400',
            'tel'=>'0395808887',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>273,
            'nom'=>'NICOLAI',
            'prenom'=>'Julie',
            'adresse'=>'76 rue des Armées CAMON 09500',
            'tel'=>'0558376134',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>274,
            'nom'=>'FERRAND',
            'prenom'=>'Jérémie',
            'adresse'=>'71 rue de Poligny SAVINES-LE-LAC 05160',
            'tel'=>'0490614401',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>275,
            'nom'=>'ICARD',
            'prenom'=>'Annie',
            'adresse'=>'95 rue des hirondelles AGUILCOURT 02190',
            'tel'=>'0334620315',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>276,
            'nom'=>'CHARLES',
            'prenom'=>'Hypolite',
            'adresse'=>'96 rue Commandant Mouchotte BOULIGNEUX 01330',
            'tel'=>'0445325841',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>277,
            'nom'=>'BLANCHARD',
            'prenom'=>'Aline',
            'adresse'=>'9 rue des Epines OYONNAX 01100',
            'tel'=>'0463729220',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>278,
            'nom'=>'GRAZIANI',
            'prenom'=>'Martin',
            'adresse'=>'93 rue de la Tour BELLEY 01300',
            'tel'=>'0459132484',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>279,
            'nom'=>'LEROY',
            'prenom'=>'Hamed',
            'adresse'=>'8 rue Louis Aragon FRESSANCOURT 02800',
            'tel'=>'0311170881',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>280,
            'nom'=>'VIALE',
            'prenom'=>'François',
            'adresse'=>'90 rue de la poste AX-LES-THERMES 09110',
            'tel'=>'0553374090',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>281,
            'nom'=>'REYMOND',
            'prenom'=>'Aurèle',
            'adresse'=>'92 rue St Denis SORBIERS 05150',
            'tel'=>'0481537923',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>282,
            'nom'=>'ISOARD',
            'prenom'=>'Bernard',
            'adresse'=>'71 rue Mallarmé MESSINCOURT 08110',
            'tel'=>'0366706848',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>283,
            'nom'=>'CAUVIN',
            'prenom'=>'Julien',
            'adresse'=>'58 rue de Paris CEYZERIAT 01250',
            'tel'=>'0411229599',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>284,
            'nom'=>'CONSTANT',
            'prenom'=>'Gilles',
            'adresse'=>'66 rue de du général Scott ARROUT 09800',
            'tel'=>'0590561289',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>285,
            'nom'=>'GASTALDI',
            'prenom'=>'Astine',
            'adresse'=>'18 rue des gatinnes SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0426146482',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>286,
            'nom'=>'LAGIER',
            'prenom'=>'Patrice',
            'adresse'=>'12 rue Victor Hugo EVIGNY 08090',
            'tel'=>'0311209603',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>287,
            'nom'=>'PAGES',
            'prenom'=>'Ingrid',
            'adresse'=>'74 rue des hirondelles AX-LES-THERMES 09110',
            'tel'=>'0542828199',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>288,
            'nom'=>'OLIVA',
            'prenom'=>'Aurélien',
            'adresse'=>'38 rue Debussy BILLIAT 01200',
            'tel'=>'0439490126',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>289,
            'nom'=>'RE',
            'prenom'=>'Yoan',
            'adresse'=>'40 rue de la recette MONCEAU-SUR-OISE 02120',
            'tel'=>'0333274282',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>290,
            'nom'=>'PARIS',
            'prenom'=>'Adelphe',
            'adresse'=>'93 rue Alphonse Daudet OYONNAX 01100',
            'tel'=>'0457686776',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>291,
            'nom'=>'PORTE',
            'prenom'=>'Adrien',
            'adresse'=>'82 rue Agniel JUNIVILLE 08310',
            'tel'=>'0352053332',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>292,
            'nom'=>'FRANCHI',
            'prenom'=>'Caline',
            'adresse'=>'82 rue St Denis ASTON 09310',
            'tel'=>'0593546818',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>293,
            'nom'=>'MORELLI',
            'prenom'=>'Rodolphe',
            'adresse'=>'68 rue des Argonautes MONCEAU-SUR-OISE 02120',
            'tel'=>'0381648585',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>294,
            'nom'=>'BONNEFOY',
            'prenom'=>'Patricia',
            'adresse'=>'6 rue de la gare BILLIAT 01200',
            'tel'=>'0474405770',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>295,
            'nom'=>'TASSY',
            'prenom'=>'Robert',
            'adresse'=>'40 rue des pyramides SAINT-FIRMIN 05800',
            'tel'=>'0482621556',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>296,
            'nom'=>'ROCCHIA',
            'prenom'=>'Fatima',
            'adresse'=>'7 rue du renard BUZAN 09800',
            'tel'=>'0560148975',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>297,
            'nom'=>'NGUYEN',
            'prenom'=>'Carole',
            'adresse'=>'77 rue Anatole France MESSINCOURT 08110',
            'tel'=>'0361849887',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>298,
            'nom'=>'PADOVANI',
            'prenom'=>'Jordan',
            'adresse'=>'20 rue de la recette SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0432143599',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>299,
            'nom'=>'GUILLAUME',
            'prenom'=>'Patrice',
            'adresse'=>'10 rue du capitaine Crochet CHALLES 01450',
            'tel'=>'0479473742',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>300,
            'nom'=>'MOUTON',
            'prenom'=>'Astine',
            'adresse'=>'98 rue du renard BLYES 01150',
            'tel'=>'0447475896',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>301,
            'nom'=>'ADAM',
            'prenom'=>'Anselme',
            'adresse'=>'78 rue de la poste OYONNAX 01100',
            'tel'=>'0465535519',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>302,
            'nom'=>'POGGI',
            'prenom'=>'Aurèle',
            'adresse'=>'63 rue de la gare CHABESTAN 05400',
            'tel'=>'0434955199',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>303,
            'nom'=>'CHAMBON',
            'prenom'=>'Jérome',
            'adresse'=>'27 rue des Chantereines BARZY-SUR-MARNE 02850',
            'tel'=>'0328609452',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>304,
            'nom'=>'FLORES',
            'prenom'=>'Victor',
            'adresse'=>'70 rue de la Pergolat ABBECOURT 02300',
            'tel'=>'0397808656',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>305,
            'nom'=>'MERLIN',
            'prenom'=>'Anne-Laure',
            'adresse'=>'58 rue du général de Gaulle FALAISE 08400',
            'tel'=>'0381506423',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>306,
            'nom'=>'MAURY',
            'prenom'=>'Hector',
            'adresse'=>'41 rue Malraux SIGOYER 05130',
            'tel'=>'0447077417',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>307,
            'nom'=>'MOHAMED',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'12 rue Louis Aragon THIN-LE-MOUTIER 08460',
            'tel'=>'0351239489',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>308,
            'nom'=>'MERLE',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'16 rue Blainville SAVINES-LE-LAC 05160',
            'tel'=>'0474386707',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>309,
            'nom'=>'MARTY',
            'prenom'=>'Jérémy',
            'adresse'=>'53 rue de la pointe AUGIREIN 09800',
            'tel'=>'0517209857',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>310,
            'nom'=>'SANTINI',
            'prenom'=>'Anne',
            'adresse'=>'70 rue de la rose ABBECOURT 02300',
            'tel'=>'0315174364',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>311,
            'nom'=>'ALBERT',
            'prenom'=>'Armelle',
            'adresse'=>'27 rue Blainville SIGOYER 05130',
            'tel'=>'0487157453',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>312,
            'nom'=>'BRUNA',
            'prenom'=>'Camille',
            'adresse'=>'90 rue Mallarmé PELVOUX 05340',
            'tel'=>'0462682764',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>313,
            'nom'=>'MORIN',
            'prenom'=>'Anaelle',
            'adresse'=>'73 rue des Cavaux FEPIN 08170',
            'tel'=>'0347605928',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>314,
            'nom'=>'MARIE',
            'prenom'=>'Carole',
            'adresse'=>'82 rue Blainville BILLIAT 01200',
            'tel'=>'0489580183',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>315,
            'nom'=>'DUFOUR',
            'prenom'=>'Rosalie',
            'adresse'=>'66 rue des Princes SORBIERS 05150',
            'tel'=>'0447973887',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>316,
            'nom'=>'PIERRE',
            'prenom'=>'Fatima',
            'adresse'=>'38 rue Hector Berlioz SORBIERS 05150',
            'tel'=>'0489828043',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>317,
            'nom'=>'LAFONT',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'60 rue Victor Hugo NEUVILLE-LES-DAMES 01400',
            'tel'=>'0466135862',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>318,
            'nom'=>'PIGNOL',
            'prenom'=>'Hypolite',
            'adresse'=>'26 rue Alphonse Daudet BETTANT 01500',
            'tel'=>'0496740768',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>319,
            'nom'=>'ESTEVE',
            'prenom'=>'Sophie',
            'adresse'=>'37 rue Alphonse Daudet AX-LES-THERMES 09110',
            'tel'=>'0550507761',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>320,
            'nom'=>'PICCA',
            'prenom'=>'Anne-Laure',
            'adresse'=>'96 rue du capitaine Fraquasse AUBENTON 02500',
            'tel'=>'0332042330',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>321,
            'nom'=>'JOLY',
            'prenom'=>'Caline',
            'adresse'=>'84 rue des Néfliers SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0441770926',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>322,
            'nom'=>'ROBIN',
            'prenom'=>'Amiel',
            'adresse'=>'11 rue Commandant Hériot ARROUT 09800',
            'tel'=>'0530054025',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>323,
            'nom'=>'MONTI',
            'prenom'=>'Adelphe',
            'adresse'=>'1 rue des Princes SIGOYER 05130',
            'tel'=>'0446366196',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>324,
            'nom'=>'NEGRE',
            'prenom'=>'Alain',
            'adresse'=>'76 rue Commandant Mouchotte AX-LES-THERMES 09110',
            'tel'=>'0510808813',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>325,
            'nom'=>'GIORGI',
            'prenom'=>'Gilles',
            'adresse'=>'64 rue Commandant Hériot ARANDAS 01230',
            'tel'=>'0466707367',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>326,
            'nom'=>'ESCOFFIER',
            'prenom'=>'Fernand',
            'adresse'=>'66 rue du 14 juillet OYONNAX 01100',
            'tel'=>'0446432036',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>327,
            'nom'=>'VALENTIN',
            'prenom'=>'Andrée',
            'adresse'=>'76 rue des Cavaux SORBIERS 05150',
            'tel'=>'0433833354',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>328,
            'nom'=>'MOLINA',
            'prenom'=>'Robert',
            'adresse'=>'67 rue du capitaine Crochet FRESSANCOURT 02800',
            'tel'=>'0396745829',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>329,
            'nom'=>'TRON',
            'prenom'=>'Charles',
            'adresse'=>'81 rue Mallarmé BEAUMONT-EN-BEINE 02300',
            'tel'=>'0318112146',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>330,
            'nom'=>'JULLIAN',
            'prenom'=>'Jérémie',
            'adresse'=>'49 rue de la Pergolat REOTIER 05600',
            'tel'=>'0452299934',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>331,
            'nom'=>'VIGNE',
            'prenom'=>'sabine',
            'adresse'=>'73 rue Agniel FEPIN 08170',
            'tel'=>'0340871558',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>332,
            'nom'=>'JOUBERT',
            'prenom'=>'Patrice',
            'adresse'=>'26 rue du renard OYONNAX 01100',
            'tel'=>'0499920026',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>333,
            'nom'=>'BAYLE',
            'prenom'=>'Jules',
            'adresse'=>'21 rue Pasteur SORBIERS 05150',
            'tel'=>'0497153129',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>334,
            'nom'=>'BOEUF',
            'prenom'=>'Alizée',
            'adresse'=>'69 rue de la Pergolat BELLEY 01300',
            'tel'=>'0485963418',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>335,
            'nom'=>'CAIRE',
            'prenom'=>'Armelle',
            'adresse'=>'16 rue des Anses bleues VAUX-CHAMPAGNE 08130',
            'tel'=>'0334124353',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>336,
            'nom'=>'GOUIRAND',
            'prenom'=>'Hector',
            'adresse'=>'73 rue du général de Gaulle AUDRESSEIN 09800',
            'tel'=>'0593896893',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>337,
            'nom'=>'ROUSTAN',
            'prenom'=>'Aristote',
            'adresse'=>'78 rue des Argonautes AUGIREIN 09800',
            'tel'=>'0560183642',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>338,
            'nom'=>'ROURE',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'20 rue Commandant Hériot BEAUMONT-EN-BEINE 02300',
            'tel'=>'0335062492',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>339,
            'nom'=>'PEYRON',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'38 rue Louis Aragon SAINTE-MARIE 05150',
            'tel'=>'0413931222',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>340,
            'nom'=>'LAGET',
            'prenom'=>'Jordan',
            'adresse'=>'96 rue Bonaparte SAINTE-MARIE 05150',
            'tel'=>'0419574602',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>341,
            'nom'=>'CARMONA',
            'prenom'=>'Cristophe',
            'adresse'=>'65 rue de la recette HERBEUVAL 08370',
            'tel'=>'0353219537',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>342,
            'nom'=>'ROUSSEAU',
            'prenom'=>'Bénédicte',
            'adresse'=>'2 rue des Armées FALAISE 08400',
            'tel'=>'0392106994',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>343,
            'nom'=>'ROMERO',
            'prenom'=>'sabine',
            'adresse'=>'66 rue des Epines HOUDILCOURT 08190',
            'tel'=>'0396081849',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>344,
            'nom'=>'BON',
            'prenom'=>'Serge',
            'adresse'=>'6 rue du stade NEUVILLE-LES-DAMES 01400',
            'tel'=>'0441736702',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>345,
            'nom'=>'GAUDIN',
            'prenom'=>'Adelphe',
            'adresse'=>'26 rue des Pigeons FEPIN 08170',
            'tel'=>'0383040737',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>346,
            'nom'=>'DELMAS',
            'prenom'=>'Julienne',
            'adresse'=>'89 rue Pasteur ASTON 09310',
            'tel'=>'0558895500',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>347,
            'nom'=>'PUJOL',
            'prenom'=>'Austine',
            'adresse'=>'96 rue St Denis BRIANCON 05100',
            'tel'=>'0442356662',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>348,
            'nom'=>'BOUVIER',
            'prenom'=>'Anne-Marie',
            'adresse'=>'88 rue du capitaine Fraquasse FLOING 08200',
            'tel'=>'0337248343',
            'specialite_complementaire'=>'Pédiatre',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>349,
            'nom'=>'AMIEL',
            'prenom'=>'Austine',
            'adresse'=>'86 rue des Lilas BAGERT 09230',
            'tel'=>'0564227642',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>350,
            'nom'=>'CONTRERAS',
            'prenom'=>'Aristote',
            'adresse'=>'13 rue des Néfliers ARROUT 09800',
            'tel'=>'0578693214',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>351,
            'nom'=>'FIORI',
            'prenom'=>'Reissa',
            'adresse'=>'56 rue du Mont THIN-LE-MOUTIER 08460',
            'tel'=>'0379320791',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>352,
            'nom'=>'TARDIEU',
            'prenom'=>'sabine',
            'adresse'=>'96 rue du général de Gaulle BELLOC 09600',
            'tel'=>'0517690862',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>353,
            'nom'=>'LOUIS',
            'prenom'=>'Marie',
            'adresse'=>'62 rue Hector Berlioz SAVOURNON 05700',
            'tel'=>'0443661423',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>354,
            'nom'=>'CASTELLI',
            'prenom'=>'Irénée',
            'adresse'=>'68 rue de la pointe BARENTON-SUR-SERRE 02270',
            'tel'=>'0313123217',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>355,
            'nom'=>'ESPANET',
            'prenom'=>'Adrien',
            'adresse'=>'2 rue des hirondelles HAUTEVILLE 02120',
            'tel'=>'0385350100',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>356,
            'nom'=>'GONZALES',
            'prenom'=>'Caline',
            'adresse'=>'13 rue du Mont SAINT-FIRMIN 05800',
            'tel'=>'0439120333',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>357,
            'nom'=>'ANTOINE',
            'prenom'=>'Camille',
            'adresse'=>'38 rue des Chantereines MAYOT 02800',
            'tel'=>'0390403626',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>358,
            'nom'=>'PIETRI',
            'prenom'=>'Ingrid',
            'adresse'=>'73 rue des gatinnes SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0455695337',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>359,
            'nom'=>'VELLA',
            'prenom'=>'Jordan',
            'adresse'=>'47 rue de Paris ROCHEBRUNE 05190',
            'tel'=>'0488575731',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>360,
            'nom'=>'SAMAT',
            'prenom'=>'Andrew',
            'adresse'=>'40 rue Anatole France LAUNOIS-SUR-VENCE 08430',
            'tel'=>'0395797173',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>361,
            'nom'=>'BAUDIN',
            'prenom'=>'Aline',
            'adresse'=>'27 rue des Anges SAINT-FIRMIN 05800',
            'tel'=>'0454426212',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>362,
            'nom'=>'GILLY',
            'prenom'=>'Aurèle',
            'adresse'=>'87 rue de Poligny SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0437604768',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>363,
            'nom'=>'SILVESTRE',
            'prenom'=>'Carole',
            'adresse'=>'17 rue Debussy AVANCON 05230',
            'tel'=>'0435416748',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>364,
            'nom'=>'LAN',
            'prenom'=>'Adelphe',
            'adresse'=>'74 rue des Néfliers AUBENTON 02500',
            'tel'=>'0369486130',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>365,
            'nom'=>'GONTIER',
            'prenom'=>'Irénée',
            'adresse'=>'85 rue du capitaine Crochet JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0397935550',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>366,
            'nom'=>'MATHERON',
            'prenom'=>'Aurélien',
            'adresse'=>'92 rue des oiseaux SAVOURNON 05700',
            'tel'=>'0452076802',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>367,
            'nom'=>'CARVIN',
            'prenom'=>'John',
            'adresse'=>'74 rue des oiseaux BILLIAT 01200',
            'tel'=>'0463193696',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>368,
            'nom'=>'DAHAN',
            'prenom'=>'Jules',
            'adresse'=>'84 rue du stade OYONNAX 01100',
            'tel'=>'0430814652',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>369,
            'nom'=>'VERAN',
            'prenom'=>'Robert',
            'adresse'=>'46 rue des Accacias OYONNAX 01100',
            'tel'=>'0456783280',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>370,
            'nom'=>'GOUIN',
            'prenom'=>'Carole',
            'adresse'=>'18 rue de la Tour NEUVILLE-LES-DAMES 01400',
            'tel'=>'0411713298',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>371,
            'nom'=>'GIUDICELLI',
            'prenom'=>'Firmin',
            'adresse'=>'73 rue du Mont ARROUT 09800',
            'tel'=>'0532011995',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>372,
            'nom'=>'PIERI',
            'prenom'=>'Amélie',
            'adresse'=>'79 rue Lampion SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0499820900',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>373,
            'nom'=>'LERDA',
            'prenom'=>'Patrice',
            'adresse'=>'14 rue des Lilas CHEZY-SUR-MARNE 02570',
            'tel'=>'0310790961',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>374,
            'nom'=>'BERNARDINI',
            'prenom'=>'Martial',
            'adresse'=>'32 rue de la poste JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0351863890',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>375,
            'nom'=>'FONTANA',
            'prenom'=>'John',
            'adresse'=>'81 rue Edouard Hériot MAYOT 02800',
            'tel'=>'0361434057',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>376,
            'nom'=>'VENTRE',
            'prenom'=>'Prosper',
            'adresse'=>'99 rue des Pigeons SIGOYER 05130',
            'tel'=>'0420048322',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>377,
            'nom'=>'REVEST',
            'prenom'=>'Camille',
            'adresse'=>'88 rue des oiseaux JUNIVILLE 08310',
            'tel'=>'0370063871',
            'specialite_complementaire'=>'null',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>378,
            'nom'=>'MONIER',
            'prenom'=>'Adrien',
            'adresse'=>'21 rue de la rose AX-LES-THERMES 09110',
            'tel'=>'0513336137',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>379,
            'nom'=>'FARINA',
            'prenom'=>'Victor',
            'adresse'=>'86 rue des Armées DOMMARTIN 01380',
            'tel'=>'0447458241',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>380,
            'nom'=>'PERETTI',
            'prenom'=>'Bertrand',
            'adresse'=>'91 rue de la rose FEPIN 08170',
            'tel'=>'0398107919',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>381,
            'nom'=>'PELLISSIER',
            'prenom'=>'Serge',
            'adresse'=>'58 rue Pernod MONCEAU-SUR-OISE 02120',
            'tel'=>'0322992429',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>382,
            'nom'=>'SORRENTINO',
            'prenom'=>'Julienne',
            'adresse'=>'93 rue des Néfliers MONCEAU-SUR-OISE 02120',
            'tel'=>'0348940958',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>383,
            'nom'=>'MARINI',
            'prenom'=>'Caline',
            'adresse'=>'8 rue des Anges FEPIN 08170',
            'tel'=>'0364882312',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>384,
            'nom'=>'BONNAUD',
            'prenom'=>'Françoise',
            'adresse'=>'76 rue de Marigny CAMON 09500',
            'tel'=>'0522112610',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>385,
            'nom'=>'BERAUD',
            'prenom'=>'Françoise',
            'adresse'=>'3 rue des Anges AUBENTON 02500',
            'tel'=>'0397776971',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>386,
            'nom'=>'CADENEL',
            'prenom'=>'Serge',
            'adresse'=>'92 rue de Paris THIN-LE-MOUTIER 08460',
            'tel'=>'0365834913',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>387,
            'nom'=>'SUZANNE',
            'prenom'=>'Prosper',
            'adresse'=>'24 rue de du général Scott BRIANCON 05100',
            'tel'=>'0493163850',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>388,
            'nom'=>'GIBERT',
            'prenom'=>'Dominique',
            'adresse'=>'4 rue Hector Berlioz AX-LES-THERMES 09110',
            'tel'=>'0585018637',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>389,
            'nom'=>'CAMPANA',
            'prenom'=>'Adrien',
            'adresse'=>'30 rue Agniel SAINT-FIRMIN 05800',
            'tel'=>'0483927775',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>390,
            'nom'=>'PIRAS',
            'prenom'=>'Adelphe',
            'adresse'=>'4 rue des Pigeons BARZY-SUR-MARNE 02850',
            'tel'=>'0391947902',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>391,
            'nom'=>'GORLIER',
            'prenom'=>'sabine',
            'adresse'=>'9 rue du Mont BRIANCON 05100',
            'tel'=>'0423613710',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>392,
            'nom'=>'FERRETTI',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'81 rue des Lilas ABBECOURT 02300',
            'tel'=>'0357752522',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>393,
            'nom'=>'ROUGIER',
            'prenom'=>'Aurèle',
            'adresse'=>'78 rue du renard SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0499152521',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>394,
            'nom'=>'BONETTO',
            'prenom'=>'Julienne',
            'adresse'=>'16 rue de la gare BELLOC 09600',
            'tel'=>'0567014080',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>395,
            'nom'=>'MARIOTTI',
            'prenom'=>'Aurélien',
            'adresse'=>'41 rue des Anses bleues ASTON 09310',
            'tel'=>'0528108863',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>396,
            'nom'=>'LORENZI',
            'prenom'=>'François',
            'adresse'=>'52 rue des Epines ATTILLY 02490',
            'tel'=>'0395338199',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>397,
            'nom'=>'BARET',
            'prenom'=>'Bénédicte',
            'adresse'=>'88 rue du renard ORCIERES 05170',
            'tel'=>'0452809250',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>398,
            'nom'=>'SARDOU',
            'prenom'=>'Vénus',
            'adresse'=>'84 rue des Armées MONTIGNY-SUR-MEUSE 08170',
            'tel'=>'0332562475',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>399,
            'nom'=>'SERRANO',
            'prenom'=>'Camille',
            'adresse'=>'20 rue Anatole France MACHAULT 08310',
            'tel'=>'0394066862',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>400,
            'nom'=>'BORGHINO',
            'prenom'=>'Carole',
            'adresse'=>'90 rue Bonaparte OYONNAX 01100',
            'tel'=>'0446953066',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>401,
            'nom'=>'PONTIER',
            'prenom'=>'Cristophe',
            'adresse'=>'22 rue Perdue AX-LES-THERMES 09110',
            'tel'=>'0533152140',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>402,
            'nom'=>'TOCHE',
            'prenom'=>'Anne-Laure',
            'adresse'=>'73 rue Agniel BOURG-EN-BRESSE 01000',
            'tel'=>'0434367086',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>403,
            'nom'=>'VALETTE',
            'prenom'=>'Martial',
            'adresse'=>'61 rue des Cavaux SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0460367150',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>404,
            'nom'=>'DONADIO',
            'prenom'=>'Aurélien',
            'adresse'=>'44 rue des Epines OYONNAX 01100',
            'tel'=>'0439758191',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>405,
            'nom'=>'BAILLE',
            'prenom'=>'Aude',
            'adresse'=>'98 rue des Accacias SIGOYER 05130',
            'tel'=>'0497650512',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>406,
            'nom'=>'SIGNORET',
            'prenom'=>'sabine',
            'adresse'=>'61 rue de la Pergolat AUDRESSEIN 09800',
            'tel'=>'0566668732',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>407,
            'nom'=>'CONTI',
            'prenom'=>'Jules',
            'adresse'=>'45 rue du capitaine Crochet EVIGNY 08090',
            'tel'=>'0351073860',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>408,
            'nom'=>'VILLARD',
            'prenom'=>'Rodolphe',
            'adresse'=>'89 rue des oiseaux BOURG-EN-BRESSE 01000',
            'tel'=>'0436599230',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>409,
            'nom'=>'GUILLOT',
            'prenom'=>'Habib',
            'adresse'=>'97 rue Pernod AZY-SUR-MARNE 02400',
            'tel'=>'0380003737',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>410,
            'nom'=>'TEISSEIRE',
            'prenom'=>'Bernard',
            'adresse'=>'81 rue des Epines SAINT-CREPIN 05600',
            'tel'=>'0477707175',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>411,
            'nom'=>'GIUSTI',
            'prenom'=>'Habib',
            'adresse'=>'83 rue Malraux ABBECOURT 02300',
            'tel'=>'0310290366',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>412,
            'nom'=>'ROUVIERE',
            'prenom'=>'Mohammed',
            'adresse'=>'70 rue du 14 juillet MONT-LAURENT 08130',
            'tel'=>'0398765209',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>413,
            'nom'=>'CLAVEL',
            'prenom'=>'François',
            'adresse'=>'71 rue du 14 juillet SAINT-SAUVEUR 05200',
            'tel'=>'0418376454',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>414,
            'nom'=>'TRICON',
            'prenom'=>'Rodolphe',
            'adresse'=>'99 rue Alphonse Daudet YONCQ 08210',
            'tel'=>'0367093394',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>415,
            'nom'=>'PIGNATEL',
            'prenom'=>'Catherine',
            'adresse'=>'4 rue des Armées AUBENTON 02500',
            'tel'=>'0368054817',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>416,
            'nom'=>'CECCALDI',
            'prenom'=>'Bernard',
            'adresse'=>'64 rue Commandant Hériot TRAVECY 02800',
            'tel'=>'0315061114',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>417,
            'nom'=>'RAOUX',
            'prenom'=>'Armelle',
            'adresse'=>'79 rue des Epines EVIGNY 08090',
            'tel'=>'0334511766',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>418,
            'nom'=>'FORTE',
            'prenom'=>'Julie',
            'adresse'=>'13 rue de la pointe ASTON 09310',
            'tel'=>'0518564010',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>419,
            'nom'=>'CHARRIER',
            'prenom'=>'Dominique',
            'adresse'=>'62 rue Malraux AUGIREIN 09800',
            'tel'=>'0585303807',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>420,
            'nom'=>'PERRIER',
            'prenom'=>'Charles',
            'adresse'=>'71 rue Anatole France CAMON 09500',
            'tel'=>'0569559189',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>421,
            'nom'=>'MOUSTIER',
            'prenom'=>'Cristophe',
            'adresse'=>'85 rue des Argonautes AZY-SUR-MARNE 02400',
            'tel'=>'0316188975',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>422,
            'nom'=>'BELTRANDO',
            'prenom'=>'Dominique',
            'adresse'=>'21 rue des Artistes BELLEY 01300',
            'tel'=>'0428818011',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>423,
            'nom'=>'BORG',
            'prenom'=>'Précilia',
            'adresse'=>'82 rue Victor Hugo LAVAL-MORENCY 08150',
            'tel'=>'0391802125',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>424,
            'nom'=>'DANGELO',
            'prenom'=>'André',
            'adresse'=>'87 rue Anatole France YONCQ 08210',
            'tel'=>'0311956610',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>425,
            'nom'=>'RICHIER',
            'prenom'=>'Fernand',
            'adresse'=>'37 rue du général de Gaulle AUGIREIN 09800',
            'tel'=>'0517286774',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>426,
            'nom'=>'AMAR',
            'prenom'=>'Hamed',
            'adresse'=>'72 rue des hirondelles AGUILCOURT 02190',
            'tel'=>'0334618532',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>427,
            'nom'=>'PERRET',
            'prenom'=>'Hector',
            'adresse'=>'20 rue du capitaine Fraquasse BELLEY 01300',
            'tel'=>'0447089672',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>428,
            'nom'=>'ARRIGHI',
            'prenom'=>'Patricia',
            'adresse'=>'9 rue des gatinnes CHALLES 01450',
            'tel'=>'0489226737',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>429,
            'nom'=>'GUIEU',
            'prenom'=>'Aline',
            'adresse'=>'12 rue des Anges BRIANCON 05100',
            'tel'=>'0498699637',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>430,
            'nom'=>'ARTAUD',
            'prenom'=>'Austine',
            'adresse'=>'37 rue des Armées SIGOYER 05130',
            'tel'=>'0485539010',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>431,
            'nom'=>'GUIDI',
            'prenom'=>'Hypolite',
            'adresse'=>'33 rue de Paris TRAVECY 02800',
            'tel'=>'0319460470',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>432,
            'nom'=>'GARABEDIAN',
            'prenom'=>'Fernand',
            'adresse'=>'80 rue du Mont BAGERT 09230',
            'tel'=>'0570483785',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>433,
            'nom'=>'SEGUIN',
            'prenom'=>'Anne-Sophie',
            'adresse'=>'18 rue de la recette FLOING 08200',
            'tel'=>'0335293346',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>434,
            'nom'=>'ANDREANI',
            'prenom'=>'Bénédicte',
            'adresse'=>'71 rue des pyramides MONT-LAURENT 08130',
            'tel'=>'0364431472',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>435,
            'nom'=>'COLONNA',
            'prenom'=>'John',
            'adresse'=>'35 rue Mallarmé ATTILLY 02490',
            'tel'=>'0384830087',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>436,
            'nom'=>'FUENTES',
            'prenom'=>'Patrick',
            'adresse'=>'97 rue du général de Gaulle AUBENTON 02500',
            'tel'=>'0378805449',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>437,
            'nom'=>'RIZZO',
            'prenom'=>'Alice',
            'adresse'=>'3 rue des Lilas ABBECOURT 02300',
            'tel'=>'0338216554',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>438,
            'nom'=>'DONATI',
            'prenom'=>'Jérome',
            'adresse'=>'67 rue Perdue BEDEILLE 09230',
            'tel'=>'0527487962',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>439,
            'nom'=>'DAUPHIN',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'91 rue Albert Camus SAINT-CREPIN 05600',
            'tel'=>'0464885309',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>440,
            'nom'=>'SOULIER',
            'prenom'=>'Robert',
            'adresse'=>'73 rue Pasteur BOURG-EN-BRESSE 01000',
            'tel'=>'0451252312',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>441,
            'nom'=>'VALERO',
            'prenom'=>'Marie',
            'adresse'=>'51 rue Victor Hugo JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0328058400',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>442,
            'nom'=>'ROSA',
            'prenom'=>'Bénédicte',
            'adresse'=>'37 rue Mallarmé SAINT-CREPIN 05600',
            'tel'=>'0472480246',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>443,
            'nom'=>'MILLET',
            'prenom'=>'Hypolite',
            'adresse'=>'97 rue Malraux SAINTE-MARIE 05150',
            'tel'=>'0471019122',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>444,
            'nom'=>'MARCELLIN',
            'prenom'=>'Anne-Marie',
            'adresse'=>'21 rue Blainville MESSINCOURT 08110',
            'tel'=>'0315472355',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>445,
            'nom'=>'MARCHI',
            'prenom'=>'Fatima',
            'adresse'=>'32 rue des Armées MEZIERES-SUR-OISE 02240',
            'tel'=>'0335733742',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>446,
            'nom'=>'PRAT',
            'prenom'=>'sabine',
            'adresse'=>'52 rue des Pigeons PELVOUX 05340',
            'tel'=>'0424219942',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>447,
            'nom'=>'RINAUDO',
            'prenom'=>'Vénus',
            'adresse'=>'96 rue des Chantereines FRESSANCOURT 02800',
            'tel'=>'0359036944',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>448,
            'nom'=>'MOUTTE',
            'prenom'=>'Victor',
            'adresse'=>'96 rue de Paris BETTANT 01500',
            'tel'=>'0478464491',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>449,
            'nom'=>'CASTEL',
            'prenom'=>'Aurèle',
            'adresse'=>'34 rue des oiseaux NEUVILLE-LES-DAMES 01400',
            'tel'=>'0437142230',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>450,
            'nom'=>'GRAND',
            'prenom'=>'Reissa',
            'adresse'=>'89 rue des Pigeons PELVOUX 05340',
            'tel'=>'0414138297',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>451,
            'nom'=>'CROUZET',
            'prenom'=>'Camille',
            'adresse'=>'5 rue des Anges BUZAN 09800',
            'tel'=>'0550828415',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>452,
            'nom'=>'FILOSA',
            'prenom'=>'Marie',
            'adresse'=>'58 rue Victor Hugo BOULIGNEUX 01330',
            'tel'=>'0432323455',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>453,
            'nom'=>'BIANCOTTO',
            'prenom'=>'Camille',
            'adresse'=>'89 rue Beaudelaire AUBENTON 02500',
            'tel'=>'0341803965',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>454,
            'nom'=>'SUSINI',
            'prenom'=>'Fatima',
            'adresse'=>'59 rue Bonaparte EVIGNY 08090',
            'tel'=>'0326409640',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>455,
            'nom'=>'LAURENS',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'10 rue du capitaine Fraquasse MESSINCOURT 08110',
            'tel'=>'0315685825',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>456,
            'nom'=>'ALVAREZ',
            'prenom'=>'Alice',
            'adresse'=>'94 rue des Cyprés SAINT-FIRMIN 05800',
            'tel'=>'0492845898',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>457,
            'nom'=>'BALLESTER',
            'prenom'=>'Aline',
            'adresse'=>'83 rue des Cavaux CHALLES 01450',
            'tel'=>'0477868457',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>458,
            'nom'=>'DOMINICI',
            'prenom'=>'Françoise',
            'adresse'=>'3 rue des gatinnes FRESSANCOURT 02800',
            'tel'=>'0310422807',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>459,
            'nom'=>'COLOMBO',
            'prenom'=>'Béatrice',
            'adresse'=>'86 rue des Accacias MONTIGNY-SUR-MEUSE 08170',
            'tel'=>'0351114264',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>460,
            'nom'=>'SAHRAOUI',
            'prenom'=>'Anne-Ange',
            'adresse'=>'17 rue des Accacias JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0354449959',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>461,
            'nom'=>'IVALDI',
            'prenom'=>'Alain',
            'adresse'=>'61 rue de du général Scott QUATRE-CHAMPS 08400',
            'tel'=>'0395171820',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>462,
            'nom'=>'GAUBERT',
            'prenom'=>'Alain',
            'adresse'=>'10 rue Alphonse Daudet AGUILCOURT 02190',
            'tel'=>'0378125914',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>463,
            'nom'=>'RENAUD',
            'prenom'=>'Aude',
            'adresse'=>'73 rue Mallarmé SORBIERS 05150',
            'tel'=>'0415973212',
            'specialite_complementaire'=>'Pédiatrie',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>464,
            'nom'=>'GUIGUE',
            'prenom'=>'Aurélien',
            'adresse'=>'5 rue des pyramides SAVINES-LE-LAC 05160',
            'tel'=>'0417672103',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>465,
            'nom'=>'FELIX',
            'prenom'=>'Amiel',
            'adresse'=>'44 rue Victor Hugo SIGOYER 05130',
            'tel'=>'0470456938',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>466,
            'nom'=>'SCOTTO',
            'prenom'=>'Aude',
            'adresse'=>'45 rue des Lilas FLOING 08200',
            'tel'=>'0347310971',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>467,
            'nom'=>'ORTIZ',
            'prenom'=>'Catherine',
            'adresse'=>'88 rue Alphonse Daudet ARROUT 09800',
            'tel'=>'0578689528',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>468,
            'nom'=>'LEBRE',
            'prenom'=>'Alain',
            'adresse'=>'57 rue Petit SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0448765649',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>469,
            'nom'=>'CARTIER',
            'prenom'=>'Fatima',
            'adresse'=>'47 rue Lampion OYONNAX 01100',
            'tel'=>'0460692244',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>470,
            'nom'=>'MANZON',
            'prenom'=>'Anaelle',
            'adresse'=>'12 rue Albert Camus AX-LES-THERMES 09110',
            'tel'=>'0569661155',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>471,
            'nom'=>'CASTELLANI',
            'prenom'=>'Julie',
            'adresse'=>'3 rue de la pointe SAINT-CREPIN 05600',
            'tel'=>'0435145304',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>472,
            'nom'=>'FALCO',
            'prenom'=>'Alizée',
            'adresse'=>'91 rue Blainville OYONNAX 01100',
            'tel'=>'0424443942',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>473,
            'nom'=>'CLERC',
            'prenom'=>'Anselme',
            'adresse'=>'58 rue Victor Hugo LAVAL-MORENCY 08150',
            'tel'=>'0387649400',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>474,
            'nom'=>'REYRE',
            'prenom'=>'Rodolphe',
            'adresse'=>'57 rue des Epines AZY-SUR-MARNE 02400',
            'tel'=>'0397983251',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>475,
            'nom'=>'BOSSY',
            'prenom'=>'Aristote',
            'adresse'=>'2 rue de Poligny FALAISE 08400',
            'tel'=>'0379304135',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>476,
            'nom'=>'JIMENEZ',
            'prenom'=>'Anne-Marie',
            'adresse'=>'73 rue du capitaine Crochet CHALLES 01450',
            'tel'=>'0459580046',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>477,
            'nom'=>'LEFEVRE',
            'prenom'=>'Rosalie',
            'adresse'=>'88 rue Hector Berlioz SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0460756612',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>478,
            'nom'=>'PICARD',
            'prenom'=>'Julienne',
            'adresse'=>'54 rue du 14 juillet BEAUMONT-EN-BEINE 02300',
            'tel'=>'0357974621',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>479,
            'nom'=>'LEFEBVRE',
            'prenom'=>'Bernard',
            'adresse'=>'28 rue des perles blanches MONT-LAURENT 08130',
            'tel'=>'0350608229',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>480,
            'nom'=>'DOL',
            'prenom'=>'Ingrid',
            'adresse'=>'14 rue de Paris MONTCEAUX 01090',
            'tel'=>'0490462674',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>481,
            'nom'=>'ALFONSI',
            'prenom'=>'Alice',
            'adresse'=>'84 rue Albert Camus BLYES 01150',
            'tel'=>'0486949300',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>482,
            'nom'=>'ROUVIER',
            'prenom'=>'Reissa',
            'adresse'=>'71 rue des Cavaux FLOING 08200',
            'tel'=>'0371858489',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>483,
            'nom'=>'GRASSI',
            'prenom'=>'Anselme',
            'adresse'=>'67 rue Bonaparte MESSINCOURT 08110',
            'tel'=>'0353311714',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>484,
            'nom'=>'PAULET',
            'prenom'=>'Aristote',
            'adresse'=>'67 rue du renard BUZAN 09800',
            'tel'=>'0550911167',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>485,
            'nom'=>'FRANCO',
            'prenom'=>'Jules',
            'adresse'=>'50 rue des Cyprés BARENTON-SUR-SERRE 02270',
            'tel'=>'0377237270',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>486,
            'nom'=>'BARONE',
            'prenom'=>'François',
            'adresse'=>'98 rue du stade MACHAULT 08310',
            'tel'=>'0371879519',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>487,
            'nom'=>'ALLIO',
            'prenom'=>'Patricia',
            'adresse'=>'8 rue des Pigeons CHEZY-SUR-MARNE 02570',
            'tel'=>'0360797082',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>488,
            'nom'=>'GONNET',
            'prenom'=>'Reissa',
            'adresse'=>'33 rue Beaudelaire BAGERT 09230',
            'tel'=>'0551753977',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>489,
            'nom'=>'SANTUCCI',
            'prenom'=>'Rosalie',
            'adresse'=>'3 rue des Cavaux AMBRIEF 02200',
            'tel'=>'0325834365',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>490,
            'nom'=>'BLANCHET',
            'prenom'=>'Irénée',
            'adresse'=>'16 rue Bonaparte AVANCON 05230',
            'tel'=>'0429279003',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>491,
            'nom'=>'MATTIO',
            'prenom'=>'Armelle',
            'adresse'=>'24 rue des Néfliers QUATRE-CHAMPS 08400',
            'tel'=>'0371872007',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>492,
            'nom'=>'ROCCA',
            'prenom'=>'Serge',
            'adresse'=>'30 rue Albert Camus ARROUT 09800',
            'tel'=>'0563717429',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>493,
            'nom'=>'RAMBAUD',
            'prenom'=>'Bénédicte',
            'adresse'=>'29 rue Victor Hugo AUDRESSEIN 09800',
            'tel'=>'0525469712',
            'specialite_complementaire'=>'null',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>494,
            'nom'=>'DEMARIA',
            'prenom'=>'Marie',
            'adresse'=>'15 rue de Paris AUBENTON 02500',
            'tel'=>'0396696281',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>495,
            'nom'=>'DALMAS',
            'prenom'=>'Charles-Edouard',
            'adresse'=>'12 rue St Denis MONTCEAUX 01090',
            'tel'=>'0492465629',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>496,
            'nom'=>'BERTIN',
            'prenom'=>'Victor',
            'adresse'=>'12 rue des Anses bleues SAVINES-LE-LAC 05160',
            'tel'=>'0417736200',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>497,
            'nom'=>'GILLET',
            'prenom'=>'Johnny',
            'adresse'=>'35 rue du stade ASTON 09310',
            'tel'=>'0575380150',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>498,
            'nom'=>'TOMASI',
            'prenom'=>'Cristophe',
            'adresse'=>'86 rue Mallarmé ORCIERES 05170',
            'tel'=>'0488800978',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>499,
            'nom'=>'GUIBERT',
            'prenom'=>'Julien',
            'adresse'=>'38 rue Anatole France AUBENTON 02500',
            'tel'=>'0318610565',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>500,
            'nom'=>'ALBERTO',
            'prenom'=>'François',
            'adresse'=>'32 rue du Mont REOTIER 05600',
            'tel'=>'0425989993',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>501,
            'nom'=>'PONCET',
            'prenom'=>'Anaelle',
            'adresse'=>'74 rue de la gare FLEVILLE 08250',
            'tel'=>'0325218232',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>502,
            'nom'=>'DECANIS',
            'prenom'=>'Anselme',
            'adresse'=>'86 rue Victor Hugo MESSINCOURT 08110',
            'tel'=>'0381133645',
            'specialite_complementaire'=>'null',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>503,
            'nom'=>'VERA',
            'prenom'=>'Cristophe',
            'adresse'=>'86 rue Pasteur NEUVILLE-LES-DAMES 01400',
            'tel'=>'0432667697',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>504,
            'nom'=>'PECOUT',
            'prenom'=>'sabine',
            'adresse'=>'75 rue des Pigeons BEAUMONT-EN-BEINE 02300',
            'tel'=>'0376547227',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>505,
            'nom'=>'MORALES',
            'prenom'=>'Précilia',
            'adresse'=>'66 rue Malraux BUZAN 09800',
            'tel'=>'0513300693',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>506,
            'nom'=>'CHABOT',
            'prenom'=>'Catherine',
            'adresse'=>'27 rue de la Pergolat MONTCEAUX 01090',
            'tel'=>'0421383743',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>507,
            'nom'=>'ANGELINI',
            'prenom'=>'Alice',
            'adresse'=>'37 rue de Paris CHEZY-SUR-MARNE 02570',
            'tel'=>'0356410090',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>508,
            'nom'=>'GUTIERREZ',
            'prenom'=>'Habib',
            'adresse'=>'71 rue Bonaparte AGUILCOURT 02190',
            'tel'=>'0350823331',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>509,
            'nom'=>'JACQUES',
            'prenom'=>'Alain',
            'adresse'=>'77 rue des Accacias BRIANCON 05100',
            'tel'=>'0498867503',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>510,
            'nom'=>'BRONDINO',
            'prenom'=>'Patricia',
            'adresse'=>'3 rue de la Tour BILLIAT 01200',
            'tel'=>'0428025797',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>511,
            'nom'=>'TOMASINI',
            'prenom'=>'Austine',
            'adresse'=>'44 rue des Néfliers CHEZY-SUR-MARNE 02570',
            'tel'=>'0363569859',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>512,
            'nom'=>'FARRUGIA',
            'prenom'=>'André',
            'adresse'=>'30 rue Hector Berlioz SAINT-FIRMIN 05800',
            'tel'=>'0444332279',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>513,
            'nom'=>'DUMONT',
            'prenom'=>'Johnny',
            'adresse'=>'36 rue Blainville AUBENTON 02500',
            'tel'=>'0395155855',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>514,
            'nom'=>'AVON',
            'prenom'=>'Aurèle',
            'adresse'=>'10 rue du général de Gaulle ARROUT 09800',
            'tel'=>'0554301843',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>515,
            'nom'=>'FERRARA',
            'prenom'=>'Alizée',
            'adresse'=>'35 rue des Pigeons MONT-LAURENT 08130',
            'tel'=>'0340963504',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>516,
            'nom'=>'COQUILLAT',
            'prenom'=>'Fatima',
            'adresse'=>'16 rue Commandant Hériot BANCIGNY 02140',
            'tel'=>'0334753913',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>517,
            'nom'=>'SARKISSIAN',
            'prenom'=>'Adrien',
            'adresse'=>'2 rue Commandant Hériot MONCEAU-SUR-OISE 02120',
            'tel'=>'0352372278',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>518,
            'nom'=>'ALARCON',
            'prenom'=>'Andrew',
            'adresse'=>'26 rue des pyramides BOULIGNEUX 01330',
            'tel'=>'0469707196',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>519,
            'nom'=>'GRECO',
            'prenom'=>'Anémone',
            'adresse'=>'9 rue des Epines BLYES 01150',
            'tel'=>'0440301616',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>520,
            'nom'=>'PALMIERI',
            'prenom'=>'Cristophe',
            'adresse'=>'69 rue de la recette DOMMARTIN 01380',
            'tel'=>'0495802726',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>521,
            'nom'=>'GOMIS',
            'prenom'=>'Jules',
            'adresse'=>'24 rue Perdue THIN-LE-MOUTIER 08460',
            'tel'=>'0328900829',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>522,
            'nom'=>'BASTIDE',
            'prenom'=>'Aurélien',
            'adresse'=>'66 rue des Anges BOULIGNEUX 01330',
            'tel'=>'0417563891',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>523,
            'nom'=>'TOURREL',
            'prenom'=>'François',
            'adresse'=>'1 rue Blainville HAUTEVILLE 02120',
            'tel'=>'0317885243',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>524,
            'nom'=>'REBUFFAT',
            'prenom'=>'Irénée',
            'adresse'=>'64 rue des perles blanches QUATRE-CHAMPS 08400',
            'tel'=>'0316251329',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>525,
            'nom'=>'MONNIER',
            'prenom'=>'Camille',
            'adresse'=>'20 rue du stade AZY-SUR-MARNE 02400',
            'tel'=>'0339478573',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>526,
            'nom'=>'MEUNIER',
            'prenom'=>'Adelphe',
            'adresse'=>'51 rue des gatinnes BRIANCON 05100',
            'tel'=>'0412521015',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>527,
            'nom'=>'ALCARAZ',
            'prenom'=>'Andrew',
            'adresse'=>'14 rue Hector Berlioz BRIANCON 05100',
            'tel'=>'0448191946',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>528,
            'nom'=>'SANTONI',
            'prenom'=>'Mohammed',
            'adresse'=>'47 rue Pernod YONCQ 08210',
            'tel'=>'0371193497',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>529,
            'nom'=>'CROS',
            'prenom'=>'Aurèle',
            'adresse'=>'68 rue des Chantereines BUZAN 09800',
            'tel'=>'0563311027',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>530,
            'nom'=>'CORNILLE',
            'prenom'=>'Patricia',
            'adresse'=>'72 rue des pyramides ARROUT 09800',
            'tel'=>'0551116863',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>531,
            'nom'=>'COMTE',
            'prenom'=>'Aude',
            'adresse'=>'35 rue de Poligny CHABESTAN 05400',
            'tel'=>'0454617092',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>532,
            'nom'=>'EMERIC',
            'prenom'=>'Jérémy',
            'adresse'=>'10 rue Malraux FALAISE 08400',
            'tel'=>'0355875878',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>533,
            'nom'=>'FOSSATI',
            'prenom'=>'Jérémy',
            'adresse'=>'12 rue des Anges SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0476010116',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>534,
            'nom'=>'BAGNIS',
            'prenom'=>'Alain',
            'adresse'=>'86 rue de Marigny AUDRESSEIN 09800',
            'tel'=>'0584761714',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>535,
            'nom'=>'DELUY',
            'prenom'=>'Sophie',
            'adresse'=>'54 rue des Epines SAINTE-MARIE 05150',
            'tel'=>'0447268257',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );



        Medecin::create( [
            'id'=>536,
            'nom'=>'BAUDINO',
            'prenom'=>'Anne-Ange',
            'adresse'=>'44 rue Malraux DOMMARTIN 01380',
            'tel'=>'0420664795',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>537,
            'nom'=>'DERDERIAN',
            'prenom'=>'Anaelle',
            'adresse'=>'65 rue des Accacias BILLIAT 01200',
            'tel'=>'0463159777',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>538,
            'nom'=>'RAMOS',
            'prenom'=>'Julien',
            'adresse'=>'26 rue Pernod AUDRESSEIN 09800',
            'tel'=>'0564023565',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>539,
            'nom'=>'PAPAZIAN',
            'prenom'=>'Jules',
            'adresse'=>'5 rue Albert Camus BAGERT 09230',
            'tel'=>'0553330696',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );



        Medecin::create( [
            'id'=>540,
            'nom'=>'ATTARD',
            'prenom'=>'Aristote',
            'adresse'=>'71 rue Petit OYONNAX 01100',
            'tel'=>'0459707313',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>541,
            'nom'=>'MASSA',
            'prenom'=>'Fernand',
            'adresse'=>'59 rue des Cavaux YONCQ 08210',
            'tel'=>'0370679861',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>542,
            'nom'=>'CARBONE',
            'prenom'=>'Anselme',
            'adresse'=>'89 rue de la rose THIN-LE-MOUTIER 08460',
            'tel'=>'0329785730',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );



        Medecin::create( [
            'id'=>543,
            'nom'=>'BONO',
            'prenom'=>'Firmin',
            'adresse'=>'36 rue Blainville MAYOT 02800',
            'tel'=>'0335413346',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );



        Medecin::create( [
            'id'=>544,
            'nom'=>'ALLIONE',
            'prenom'=>'Hypolite',
            'adresse'=>'77 rue de Paris OYONNAX 01100',
            'tel'=>'0445547469',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );



        Medecin::create( [
            'id'=>545,
            'nom'=>'POURCHIER',
            'prenom'=>'Cristophe',
            'adresse'=>'24 rue de la Pergolat THIN-LE-MOUTIER 08460',
            'tel'=>'0394637980',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>546,
            'nom'=>'PAGANO',
            'prenom'=>'Habib',
            'adresse'=>'28 rue des Chantereines FEPIN 08170',
            'tel'=>'0370382521',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>547,
            'nom'=>'ROGER',
            'prenom'=>'Amiel',
            'adresse'=>'14 rue Petit AUBENTON 02500',
            'tel'=>'0324206273',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>548,
            'nom'=>'SAVELLI',
            'prenom'=>'Béatrice',
            'adresse'=>'34 rue de la rose AVANCON 05230',
            'tel'=>'0441382007',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>549,
            'nom'=>'ANGELI',
            'prenom'=>'Béatrice',
            'adresse'=>'98 rue du capitaine Crochet AX-LES-THERMES 09110',
            'tel'=>'0583031525',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>550,
            'nom'=>'AGNEL',
            'prenom'=>'Béatrice',
            'adresse'=>'7 rue Hector Berlioz FRESSANCOURT 02800',
            'tel'=>'0368437171',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>551,
            'nom'=>'GUIRAUD',
            'prenom'=>'Fernand',
            'adresse'=>'91 rue Pernod DOMMARTIN 01380',
            'tel'=>'0417334765',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>552,
            'nom'=>'CARLOTTI',
            'prenom'=>'Anselme',
            'adresse'=>'82 rue St Denis BOURG-EN-BRESSE 01000',
            'tel'=>'0467462959',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>553,
            'nom'=>'MAILLET',
            'prenom'=>'Jérémie',
            'adresse'=>'80 rue Beaudelaire HOUDILCOURT 08190',
            'tel'=>'0391017675',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>554,
            'nom'=>'COMBES',
            'prenom'=>'Fatima',
            'adresse'=>'88 rue du général de Gaulle DOMMARTIN 01380',
            'tel'=>'0436582548',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>555,
            'nom'=>'BOTTERO',
            'prenom'=>'Marie',
            'adresse'=>'65 rue Edouard Hériot ABBECOURT 02300',
            'tel'=>'0316457802',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>556,
            'nom'=>'GIRAUDO',
            'prenom'=>'Amiel',
            'adresse'=>'75 rue des Accacias MAYOT 02800',
            'tel'=>'0348266841',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>557,
            'nom'=>'DALLEST',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'89 rue de la Pergolat SIGOYER 05130',
            'tel'=>'0423854231',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>558,
            'nom'=>'EYMARD',
            'prenom'=>'Patrice',
            'adresse'=>'38 rue Pasteur AVANCON 05230',
            'tel'=>'0433495288',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>559,
            'nom'=>'GRANGIER',
            'prenom'=>'Victor',
            'adresse'=>'3 rue des Chantereines AMBRIEF 02200',
            'tel'=>'0313285058',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>560,
            'nom'=>'ISNARDON',
            'prenom'=>'John',
            'adresse'=>'99 rue du capitaine Fraquasse MAYOT 02800',
            'tel'=>'0325788039',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>561,
            'nom'=>'HONNORAT',
            'prenom'=>'Anne',
            'adresse'=>'59 rue des Pigeons CEYZERIAT 01250',
            'tel'=>'0414968284',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>562,
            'nom'=>'GARZINO',
            'prenom'=>'Aurèle',
            'adresse'=>'48 rue Anatole France SIGOYER 05130',
            'tel'=>'0498986897',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>563,
            'nom'=>'QUENIN',
            'prenom'=>'Firmin',
            'adresse'=>'2 rue de la Tour AZY-SUR-MARNE 02400',
            'tel'=>'0334984702',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>564,
            'nom'=>'GERVAIS',
            'prenom'=>'Ingrid',
            'adresse'=>'74 rue des Pigeons BELLOC 09600',
            'tel'=>'0575501098',
            'specialite_complementaire'=>'Pédiatrie',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>565,
            'nom'=>'CARLE',
            'prenom'=>'Prosper',
            'adresse'=>'53 rue de Paris BARENTON-SUR-SERRE 02270',
            'tel'=>'0390633950',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>566,
            'nom'=>'BERTON',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'19 rue du renard FRESSANCOURT 02800',
            'tel'=>'0380522884',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>567,
            'nom'=>'TORRE',
            'prenom'=>'Aline',
            'adresse'=>'76 rue Louis Aragon BOULIGNEUX 01330',
            'tel'=>'0458483440',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>568,
            'nom'=>'VITIELLO',
            'prenom'=>'Serge',
            'adresse'=>'79 rue Petit BUZAN 09800',
            'tel'=>'0597720760',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>569,
            'nom'=>'GALLI',
            'prenom'=>'Carole',
            'adresse'=>'87 rue de Paris YONCQ 08210',
            'tel'=>'0386136458',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>570,
            'nom'=>'SCHMITT',
            'prenom'=>'Aristote',
            'adresse'=>'89 rue du stade BOURG-EN-BRESSE 01000',
            'tel'=>'0495804047',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>571,
            'nom'=>'PAGNI',
            'prenom'=>'Annie',
            'adresse'=>'81 rue de Poligny ORCIERES 05170',
            'tel'=>'0484719957',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>572,
            'nom'=>'BESSONE',
            'prenom'=>'Anne-Ange',
            'adresse'=>'89 rue Debussy VAUX-CHAMPAGNE 08130',
            'tel'=>'0398454558',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>573,
            'nom'=>'SAIDI',
            'prenom'=>'Vénus',
            'adresse'=>'19 rue Bonaparte AUDRESSEIN 09800',
            'tel'=>'0576161788',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>574,
            'nom'=>'MANCA',
            'prenom'=>'Irénée',
            'adresse'=>'16 rue de Paris OYONNAX 01100',
            'tel'=>'0438645340',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>575,
            'nom'=>'AYME',
            'prenom'=>'Jérémie',
            'adresse'=>'61 rue Hector Berlioz CHABESTAN 05400',
            'tel'=>'0488168776',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>576,
            'nom'=>'DELAYE',
            'prenom'=>'Aurèle',
            'adresse'=>'64 rue des Epines NEUVILLE-LES-DAMES 01400',
            'tel'=>'0498004744',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>577,
            'nom'=>'LION',
            'prenom'=>'Fatima',
            'adresse'=>'21 rue des Chantereines LAVAL-MORENCY 08150',
            'tel'=>'0397521640',
            'specialite_complementaire'=>'Pédiatre',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>578,
            'nom'=>'DUVAL',
            'prenom'=>'André',
            'adresse'=>'35 rue Lampion BOURG-EN-BRESSE 01000',
            'tel'=>'0473219689',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>579,
            'nom'=>'COLIN',
            'prenom'=>'Marie',
            'adresse'=>'17 rue des Accacias LAUNOIS-SUR-VENCE 08430',
            'tel'=>'0369193051',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>580,
            'nom'=>'MENDY',
            'prenom'=>'Astine',
            'adresse'=>'94 rue Malraux HAUTEVILLE 02120',
            'tel'=>'0335672541',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>581,
            'nom'=>'RIMBAUD',
            'prenom'=>'Patricia',
            'adresse'=>'75 rue du général de Gaulle FALAISE 08400',
            'tel'=>'0359521971',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>582,
            'nom'=>'BELMONTE',
            'prenom'=>'Charles',
            'adresse'=>'40 rue de la poste JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0395476454',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>583,
            'nom'=>'COLL',
            'prenom'=>'Anne-Laure',
            'adresse'=>'75 rue Victor Hugo MONTCY-NOTRE-DAME 08090',
            'tel'=>'0333999479',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>584,
            'nom'=>'OLLIVE',
            'prenom'=>'Alizée',
            'adresse'=>'51 rue Agniel YONCQ 08210',
            'tel'=>'0352293505',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>585,
            'nom'=>'RAHOU',
            'prenom'=>'Françoise',
            'adresse'=>'9 rue Malraux SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0433874591',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>586,
            'nom'=>'NERI',
            'prenom'=>'Anne-Marie',
            'adresse'=>'90 rue Mallarmé MAYOT 02800',
            'tel'=>'0363076320',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>587,
            'nom'=>'ANTONINI',
            'prenom'=>'Jimmy',
            'adresse'=>'10 rue Hector Berlioz CHABESTAN 05400',
            'tel'=>'0479570050',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>588,
            'nom'=>'BARRET',
            'prenom'=>'Aurélien',
            'adresse'=>'67 rue des Princes AMBRIEF 02200',
            'tel'=>'0326868610',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>589,
            'nom'=>'FIGUIERE',
            'prenom'=>'Anaelle',
            'adresse'=>'86 rue du Mont MONTCEAUX 01090',
            'tel'=>'0432538873',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>590,
            'nom'=>'ANDRIEU',
            'prenom'=>'François',
            'adresse'=>'23 rue de Paris BARZY-SUR-MARNE 02850',
            'tel'=>'0338114774',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>591,
            'nom'=>'GENRE',
            'prenom'=>'François',
            'adresse'=>'33 rue Victor Hugo BELLOC 09600',
            'tel'=>'0587084727',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>592,
            'nom'=>'TURC',
            'prenom'=>'Catherine',
            'adresse'=>'70 rue Malraux BRIANCON 05100',
            'tel'=>'0446591175',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>593,
            'nom'=>'LEONETTI',
            'prenom'=>'Amélie',
            'adresse'=>'26 rue des Accacias MONT-LAURENT 08130',
            'tel'=>'0347054500',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>594,
            'nom'=>'VIGUIER',
            'prenom'=>'Charles',
            'adresse'=>'77 rue des perles blanches BETTANT 01500',
            'tel'=>'0413532750',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>595,
            'nom'=>'PARODI',
            'prenom'=>'Adelphe',
            'adresse'=>'96 rue des Argonautes REOTIER 05600',
            'tel'=>'0488831908',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>596,
            'nom'=>'LANFRANCHI',
            'prenom'=>'Carole',
            'adresse'=>'83 rue du renard AX-LES-THERMES 09110',
            'tel'=>'0540901782',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>597,
            'nom'=>'BERTHON',
            'prenom'=>'Rodolphe',
            'adresse'=>'33 rue Commandant Mouchotte THIN-LE-MOUTIER 08460',
            'tel'=>'0324607170',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>598,
            'nom'=>'GASTAUD',
            'prenom'=>'Yoan',
            'adresse'=>'42 rue Anatole France BEZAC 09100',
            'tel'=>'0597093071',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>599,
            'nom'=>'PESCE',
            'prenom'=>'Firmin',
            'adresse'=>'66 rue Commandant Hériot AX-LES-THERMES 09110',
            'tel'=>'0560293085',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>600,
            'nom'=>'LEONE',
            'prenom'=>'Caline',
            'adresse'=>'54 rue de la pointe SAINT-SAUVEUR 05200',
            'tel'=>'0476324085',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>601,
            'nom'=>'ROLANDO',
            'prenom'=>'Amélie',
            'adresse'=>'12 rue du capitaine Fraquasse BARZY-SUR-MARNE 02850',
            'tel'=>'0347886278',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>602,
            'nom'=>'BOSC',
            'prenom'=>'Nohan',
            'adresse'=>'87 rue du 14 juillet HERBEUVAL 08370',
            'tel'=>'0350146870',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>603,
            'nom'=>'ROS',
            'prenom'=>'Yoan',
            'adresse'=>'8 rue de Paris MONCEAU-SUR-OISE 02120',
            'tel'=>'0358800447',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>604,
            'nom'=>'LIAUTAUD',
            'prenom'=>'Victor',
            'adresse'=>'26 rue Hector Berlioz ARANDAS 01230',
            'tel'=>'0426016480',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>605,
            'nom'=>'INNOCENTI',
            'prenom'=>'Bertrand',
            'adresse'=>'94 rue des gatinnes MONTCEAUX 01090',
            'tel'=>'0480493919',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>606,
            'nom'=>'DESCHAMPS',
            'prenom'=>'Précilia',
            'adresse'=>'56 rue du capitaine Crochet AUDRESSEIN 09800',
            'tel'=>'0537599041',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>607,
            'nom'=>'DEGIOANNI',
            'prenom'=>'Astine',
            'adresse'=>'58 rue des perles blanches YONCQ 08210',
            'tel'=>'0380622197',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>608,
            'nom'=>'DI MEO',
            'prenom'=>'Anne-Sophie',
            'adresse'=>'52 rue des Artistes FALAISE 08400',
            'tel'=>'0352041231',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>609,
            'nom'=>'SPINELLI',
            'prenom'=>'Anselme',
            'adresse'=>'85 rue des Pigeons AGUILCOURT 02190',
            'tel'=>'0387135673',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>610,
            'nom'=>'MARTELLI',
            'prenom'=>'Julie',
            'adresse'=>'97 rue des Lilas OYONNAX 01100',
            'tel'=>'0493949488',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>611,
            'nom'=>'IBANEZ',
            'prenom'=>'Andrée',
            'adresse'=>'76 rue Alphonse Daudet LAUNOIS-SUR-VENCE 08430',
            'tel'=>'0355911277',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>612,
            'nom'=>'FERRY',
            'prenom'=>'Rosalie',
            'adresse'=>'28 rue des Argonautes SAINTE-MARIE 05150',
            'tel'=>'0470907768',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>613,
            'nom'=>'VINCENTI',
            'prenom'=>'Alizée',
            'adresse'=>'78 rue de Marigny HERBEUVAL 08370',
            'tel'=>'0347904226',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>614,
            'nom'=>'GUEDJ',
            'prenom'=>'Adelphe',
            'adresse'=>'72 rue Albert Camus SAINT-FIRMIN 05800',
            'tel'=>'0474088419',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>615,
            'nom'=>'MARTINELLI',
            'prenom'=>'Rodolphe',
            'adresse'=>'59 rue Pasteur ORCIERES 05170',
            'tel'=>'0464480776',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>616,
            'nom'=>'BONNARD',
            'prenom'=>'Martin',
            'adresse'=>'14 rue Perdue AUBENTON 02500',
            'tel'=>'0377909038',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>617,
            'nom'=>'BARON',
            'prenom'=>'Anne-Ange',
            'adresse'=>'89 rue Pasteur SIGOYER 05130',
            'tel'=>'0461827483',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>618,
            'nom'=>'ARNAUDO',
            'prenom'=>'Marie',
            'adresse'=>'51 rue des Epines ABBECOURT 02300',
            'tel'=>'0326934571',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>619,
            'nom'=>'VANNI',
            'prenom'=>'Julienne',
            'adresse'=>'3 rue des Artistes BLYES 01150',
            'tel'=>'0413911989',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>620,
            'nom'=>'CARBONNEL',
            'prenom'=>'Amélie',
            'adresse'=>'45 rue des Cavaux ABBECOURT 02300',
            'tel'=>'0372174885',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>621,
            'nom'=>'BOYADJIAN',
            'prenom'=>'Jules',
            'adresse'=>'18 rue Agniel AUBENTON 02500',
            'tel'=>'0368418443',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>622,
            'nom'=>'SANTI',
            'prenom'=>'Aurèle',
            'adresse'=>'64 rue de Poligny BRIANCON 05100',
            'tel'=>'0484091392',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>623,
            'nom'=>'RENUCCI',
            'prenom'=>'Bertrand',
            'adresse'=>'68 rue de la gare BOURG-EN-BRESSE 01000',
            'tel'=>'0416521067',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>624,
            'nom'=>'GEORGES',
            'prenom'=>'Jimmy',
            'adresse'=>'66 rue de Paris OYONNAX 01100',
            'tel'=>'0419790693',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>625,
            'nom'=>'CALVO',
            'prenom'=>'Nohan',
            'adresse'=>'55 rue Victor Hugo BANCIGNY 02140',
            'tel'=>'0350319392',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>626,
            'nom'=>'FINA',
            'prenom'=>'Caline',
            'adresse'=>'96 rue Perdue CAMON 09500',
            'tel'=>'0540178028',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>627,
            'nom'=>'AMPHOUX',
            'prenom'=>'André',
            'adresse'=>'34 rue des Princes ROCHEBRUNE 05190',
            'tel'=>'0444668151',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>628,
            'nom'=>'CESARI',
            'prenom'=>'Hector',
            'adresse'=>'75 rue des Anses bleues SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0478936977',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>629,
            'nom'=>'MORI',
            'prenom'=>'Précilia',
            'adresse'=>'39 rue Petit SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0456796681',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>630,
            'nom'=>'BARRIELLE',
            'prenom'=>'Gilles',
            'adresse'=>'11 rue des Pigeons NEUVILLE-LES-DAMES 01400',
            'tel'=>'0418340885',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>631,
            'nom'=>'BOUISSON',
            'prenom'=>'Jordan',
            'adresse'=>'53 rue des Anses bleues PELVOUX 05340',
            'tel'=>'0474792387',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>632,
            'nom'=>'TESTA',
            'prenom'=>'Julien',
            'adresse'=>'76 rue Pasteur PELVOUX 05340',
            'tel'=>'0439307843',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>633,
            'nom'=>'RUBIO',
            'prenom'=>'François',
            'adresse'=>'83 rue Petit BRIANCON 05100',
            'tel'=>'0481669712',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>634,
            'nom'=>'VALERY',
            'prenom'=>'Firmin',
            'adresse'=>'69 rue de la Tour AUGIREIN 09800',
            'tel'=>'0561526750',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>635,
            'nom'=>'DE LUCA',
            'prenom'=>'Bernard',
            'adresse'=>'50 rue Malraux MONCEAU-SUR-OISE 02120',
            'tel'=>'0330404637',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>636,
            'nom'=>'OLIVERO',
            'prenom'=>'Aline',
            'adresse'=>'63 rue du général de Gaulle MONTCY-NOTRE-DAME 08090',
            'tel'=>'0330296222',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>637,
            'nom'=>'BONELLI',
            'prenom'=>'Anne-Sophie',
            'adresse'=>'28 rue du général de Gaulle BRIANCON 05100',
            'tel'=>'0466993498',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>638,
            'nom'=>'DOMERGUE',
            'prenom'=>'Bernard',
            'adresse'=>'47 rue du général de Gaulle CAMON 09500',
            'tel'=>'0534440216',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>639,
            'nom'=>'MONTOYA',
            'prenom'=>'Anne-Marie',
            'adresse'=>'15 rue des Princes ASTON 09310',
            'tel'=>'0584747640',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>640,
            'nom'=>'MARCEL',
            'prenom'=>'Aristote',
            'adresse'=>'27 rue des Cavaux FEPIN 08170',
            'tel'=>'0333376588',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>641,
            'nom'=>'BUISSON',
            'prenom'=>'John',
            'adresse'=>'41 rue Commandant Mouchotte HAUTEVILLE 02120',
            'tel'=>'0328740889',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>642,
            'nom'=>'TEMPIER',
            'prenom'=>'Irénée',
            'adresse'=>'42 rue Agniel OYONNAX 01100',
            'tel'=>'0447938676',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>643,
            'nom'=>'HONORAT',
            'prenom'=>'Martin',
            'adresse'=>'67 rue Agniel NEUVILLE-LES-DAMES 01400',
            'tel'=>'0412803539',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>644,
            'nom'=>'OLLIER',
            'prenom'=>'Rosalie',
            'adresse'=>'15 rue Edouard Hériot ARROUT 09800',
            'tel'=>'0553692792',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>645,
            'nom'=>'MARTINET',
            'prenom'=>'Gilles',
            'adresse'=>'64 rue du Mont HAUTEVILLE 02120',
            'tel'=>'0310558221',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>646,
            'nom'=>'MARQUES',
            'prenom'=>'Aude',
            'adresse'=>'25 rue des hirondelles BLYES 01150',
            'tel'=>'0415240773',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>647,
            'nom'=>'GUIEN',
            'prenom'=>'Reissa',
            'adresse'=>'65 rue du général de Gaulle AZY-SUR-MARNE 02400',
            'tel'=>'0374955418',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>648,
            'nom'=>'SILVY',
            'prenom'=>'Andrée',
            'adresse'=>'30 rue du 14 juillet AVANCON 05230',
            'tel'=>'0463468177',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>649,
            'nom'=>'CASTINEL',
            'prenom'=>'Julien',
            'adresse'=>'47 rue Agniel JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0334063627',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>650,
            'nom'=>'RAMIREZ',
            'prenom'=>'Reissa',
            'adresse'=>'62 rue de la Tour ROCHEBRUNE 05190',
            'tel'=>'0480473643',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>651,
            'nom'=>'LAPEYRE',
            'prenom'=>'Sophie',
            'adresse'=>'91 rue Petit AUBENTON 02500',
            'tel'=>'0348745022',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>652,
            'nom'=>'LAMBERTI',
            'prenom'=>'Patricia',
            'adresse'=>'95 rue Pasteur HERBEUVAL 08370',
            'tel'=>'0354297793',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>653,
            'nom'=>'CARRIERE',
            'prenom'=>'Reissa',
            'adresse'=>'25 rue Perdue AX-LES-THERMES 09110',
            'tel'=>'0540152929',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>654,
            'nom'=>'PICHON',
            'prenom'=>'Armelle',
            'adresse'=>'57 rue des Pigeons SAINT-FIRMIN 05800',
            'tel'=>'0479849596',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>655,
            'nom'=>'BERT',
            'prenom'=>'Irénée',
            'adresse'=>'83 rue des pyramides FLEVILLE 08250',
            'tel'=>'0312351408',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>656,
            'nom'=>'ANTON',
            'prenom'=>'Anne-Laure',
            'adresse'=>'58 rue des Argonautes ATTILLY 02490',
            'tel'=>'0344455589',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>657,
            'nom'=>'CAPARROS',
            'prenom'=>'Patrick',
            'adresse'=>'28 rue des Cyprés OYONNAX 01100',
            'tel'=>'0456081235',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>658,
            'nom'=>'CHAINE',
            'prenom'=>'Ines',
            'adresse'=>'65 rue Mallarmé TRAVECY 02800',
            'tel'=>'0344024000',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>659,
            'nom'=>'MACCARIO',
            'prenom'=>'Julie',
            'adresse'=>'30 rue de du général Scott SAINT-FIRMIN 05800',
            'tel'=>'0440937400',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>660,
            'nom'=>'DENIS',
            'prenom'=>'Aurélien',
            'adresse'=>'92 rue des Cyprés BEZAC 09100',
            'tel'=>'0521006225',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>661,
            'nom'=>'CAMPO',
            'prenom'=>'Martial',
            'adresse'=>'41 rue du général de Gaulle AUGIREIN 09800',
            'tel'=>'0569674646',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>662,
            'nom'=>'PIAZZA',
            'prenom'=>'Amiel',
            'adresse'=>'6 rue Malraux HAUTEVILLE 02120',
            'tel'=>'0336447283',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>663,
            'nom'=>'BATTINI',
            'prenom'=>'Jérémy',
            'adresse'=>'62 rue Lampion BEZAC 09100',
            'tel'=>'0526185264',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>664,
            'nom'=>'BARRIOL',
            'prenom'=>'Cristophe',
            'adresse'=>'88 rue du général de Gaulle BOULIGNEUX 01330',
            'tel'=>'0435544779',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>665,
            'nom'=>'COURT',
            'prenom'=>'Ingrid',
            'adresse'=>'6 rue du 14 juillet DOMMARTIN 01380',
            'tel'=>'0442048091',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>666,
            'nom'=>'GIOVANNETTI',
            'prenom'=>'Jimmy',
            'adresse'=>'50 rue Anatole France MACHAULT 08310',
            'tel'=>'0332316186',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>667,
            'nom'=>'SIMIAN',
            'prenom'=>'Aline',
            'adresse'=>'68 rue des Artistes NEUVILLE-LES-DAMES 01400',
            'tel'=>'0431882334',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>668,
            'nom'=>'PUGET',
            'prenom'=>'Irénée',
            'adresse'=>'34 rue des Chantereines BEAUMONT-EN-BEINE 02300',
            'tel'=>'0337016124',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>669,
            'nom'=>'BLACHE',
            'prenom'=>'Gilles',
            'adresse'=>'28 rue du Mont JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0356982229',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>670,
            'nom'=>'ORSONI',
            'prenom'=>'Irénée',
            'adresse'=>'33 rue des perles blanches HOUDILCOURT 08190',
            'tel'=>'0399670344',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>671,
            'nom'=>'VIAN',
            'prenom'=>'Habib',
            'adresse'=>'9 rue des gatinnes BEZAC 09100',
            'tel'=>'0521113468',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>672,
            'nom'=>'GUERRINI',
            'prenom'=>'Cristophe',
            'adresse'=>'18 rue Edouard Hériot CHALLES 01450',
            'tel'=>'0428126087',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>673,
            'nom'=>'BARBE',
            'prenom'=>'Aline',
            'adresse'=>'87 rue de la Tour ORCIERES 05170',
            'tel'=>'0474417618',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>674,
            'nom'=>'PARRA',
            'prenom'=>'Julien',
            'adresse'=>'20 rue des Chantereines SAINT-SAUVEUR 05200',
            'tel'=>'0430434976',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>675,
            'nom'=>'MOUNIER',
            'prenom'=>'Anselme',
            'adresse'=>'14 rue des Anges REOTIER 05600',
            'tel'=>'0441999912',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>676,
            'nom'=>'MARION',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'47 rue Bonaparte AUGIREIN 09800',
            'tel'=>'0533497900',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>677,
            'nom'=>'LUCCHINI',
            'prenom'=>'Alizée',
            'adresse'=>'96 rue Albert Camus BAGERT 09230',
            'tel'=>'0519203974',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>678,
            'nom'=>'LEYDET',
            'prenom'=>'Béatrice',
            'adresse'=>'97 rue Lampion TRAVECY 02800',
            'tel'=>'0350641861',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>679,
            'nom'=>'ROYERE',
            'prenom'=>'Serge',
            'adresse'=>'61 rue Mallarmé SAVINES-LE-LAC 05160',
            'tel'=>'0489512105',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>680,
            'nom'=>'GIACALONE',
            'prenom'=>'Rodolphe',
            'adresse'=>'43 rue des Princes ASTON 09310',
            'tel'=>'0513212527',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>681,
            'nom'=>'MESSINA',
            'prenom'=>'Adelphe',
            'adresse'=>'80 rue des Princes AVANCON 05230',
            'tel'=>'0446646697',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>682,
            'nom'=>'MENDEZ',
            'prenom'=>'Austine',
            'adresse'=>'47 rue Pasteur BEZAC 09100',
            'tel'=>'0530872724',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>683,
            'nom'=>'LAUTIER',
            'prenom'=>'Yoan',
            'adresse'=>'55 rue des Cavaux AGUILCOURT 02190',
            'tel'=>'0324607617',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>684,
            'nom'=>'COULET',
            'prenom'=>'Gilles',
            'adresse'=>'46 rue du stade MONT-LAURENT 08130',
            'tel'=>'0387328329',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>685,
            'nom'=>'BELTRAN',
            'prenom'=>'Aude',
            'adresse'=>'98 rue des Cyprés SAINT-CREPIN 05600',
            'tel'=>'0458369404',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>686,
            'nom'=>'HUBERT',
            'prenom'=>'Cristophe',
            'adresse'=>'82 rue Hector Berlioz ARANDAS 01230',
            'tel'=>'0425003261',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>687,
            'nom'=>'POUSSEL',
            'prenom'=>'Jérémy',
            'adresse'=>'21 rue des Princes MONT-LAURENT 08130',
            'tel'=>'0322135363',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>688,
            'nom'=>'CHEYLAN',
            'prenom'=>'Mohammed',
            'adresse'=>'53 rue Pasteur THIN-LE-MOUTIER 08460',
            'tel'=>'0389514499',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>689,
            'nom'=>'COPPOLA',
            'prenom'=>'Précilia',
            'adresse'=>'38 rue Louis Aragon SAVINES-LE-LAC 05160',
            'tel'=>'0441180757',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>690,
            'nom'=>'CAVALIER',
            'prenom'=>'Françoise',
            'adresse'=>'63 rue des Anges AX-LES-THERMES 09110',
            'tel'=>'0553742065',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>691,
            'nom'=>'DUTTO',
            'prenom'=>'sabine',
            'adresse'=>'18 rue Lampion MONTCEAUX 01090',
            'tel'=>'0474843880',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>692,
            'nom'=>'MOUTET',
            'prenom'=>'Julien',
            'adresse'=>'50 rue des Chantereines REOTIER 05600',
            'tel'=>'0433213809',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>693,
            'nom'=>'EYRAUD',
            'prenom'=>'Julie',
            'adresse'=>'29 rue de du général Scott SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0450980762',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>694,
            'nom'=>'BARRE',
            'prenom'=>'Roby',
            'adresse'=>'14 rue Mallarmé LAVAL-MORENCY 08150',
            'tel'=>'0350310027',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>695,
            'nom'=>'ALONSO',
            'prenom'=>'Jérémy',
            'adresse'=>'42 rue du capitaine Fraquasse JUNIVILLE 08310',
            'tel'=>'0361117640',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>696,
            'nom'=>'BOUQUET',
            'prenom'=>'Anne-Laure',
            'adresse'=>'63 rue Commandant Mouchotte BOURG-EN-BRESSE 01000',
            'tel'=>'0442277236',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>697,
            'nom'=>'PHILIPPE',
            'prenom'=>'Anaelle',
            'adresse'=>'21 rue des Cavaux CHEZY-SUR-MARNE 02570',
            'tel'=>'0388675304',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>698,
            'nom'=>'LUCAS',
            'prenom'=>'Hamed',
            'adresse'=>'74 rue Victor Hugo ARROUT 09800',
            'tel'=>'0541004550',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>699,
            'nom'=>'LEONARDI',
            'prenom'=>'Béatrice',
            'adresse'=>'54 rue Victor Hugo FRESSANCOURT 02800',
            'tel'=>'0312941986',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>700,
            'nom'=>'MARTI',
            'prenom'=>'Françoise',
            'adresse'=>'98 rue de la Tour MESSINCOURT 08110',
            'tel'=>'0317883763',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>701,
            'nom'=>'PELLET',
            'prenom'=>'Aristote',
            'adresse'=>'73 rue des Anges BARENTON-SUR-SERRE 02270',
            'tel'=>'0369353331',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>702,
            'nom'=>'LANDI',
            'prenom'=>'Johnny',
            'adresse'=>'41 rue Victor Hugo FALAISE 08400',
            'tel'=>'0393642374',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>703,
            'nom'=>'RUGGIERI',
            'prenom'=>'André',
            'adresse'=>'59 rue de la Pergolat BAGERT 09230',
            'tel'=>'0570809688',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>704,
            'nom'=>'PIANA',
            'prenom'=>'Carole',
            'adresse'=>'49 rue de du général Scott HOUDILCOURT 08190',
            'tel'=>'0318196859',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>705,
            'nom'=>'VILLEVIEILLE',
            'prenom'=>'Armelle',
            'adresse'=>'70 rue Mallarmé LAVAL-MORENCY 08150',
            'tel'=>'0330805895',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>706,
            'nom'=>'GERIN',
            'prenom'=>'François',
            'adresse'=>'51 rue des Lilas SAINT-FIRMIN 05800',
            'tel'=>'0410879788',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>707,
            'nom'=>'FAVRE',
            'prenom'=>'Anémone',
            'adresse'=>'66 rue Commandant Mouchotte BRIANCON 05100',
            'tel'=>'0421542405',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>708,
            'nom'=>'QUILICHINI',
            'prenom'=>'Reissa',
            'adresse'=>'73 rue de la Pergolat BRIANCON 05100',
            'tel'=>'0444698187',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>709,
            'nom'=>'GUIS',
            'prenom'=>'John',
            'adresse'=>'2 rue des Princes SAVINES-LE-LAC 05160',
            'tel'=>'0431249814',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>710,
            'nom'=>'FERRARO',
            'prenom'=>'Catherine',
            'adresse'=>'53 rue de Poligny BARZY-SUR-MARNE 02850',
            'tel'=>'0373513553',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>711,
            'nom'=>'JAUME',
            'prenom'=>'Jules',
            'adresse'=>'30 rue Malraux EVIGNY 08090',
            'tel'=>'0317625916',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>712,
            'nom'=>'PARISI',
            'prenom'=>'Martin',
            'adresse'=>'35 rue des perles blanches OYONNAX 01100',
            'tel'=>'0484949416',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>713,
            'nom'=>'BENHAMOU',
            'prenom'=>'Rodolphe',
            'adresse'=>'22 rue du stade AX-LES-THERMES 09110',
            'tel'=>'0597525447',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>714,
            'nom'=>'HERMITTE',
            'prenom'=>'Patrick',
            'adresse'=>'18 rue Perdue NEUVILLE-LES-DAMES 01400',
            'tel'=>'0454304156',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>715,
            'nom'=>'SORIANO',
            'prenom'=>'Bertrand',
            'adresse'=>'65 rue des Anses bleues BELLOC 09600',
            'tel'=>'0522232477',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>716,
            'nom'=>'ALI',
            'prenom'=>'Bernard',
            'adresse'=>'70 rue des pyramides AX-LES-THERMES 09110',
            'tel'=>'0548800884',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>717,
            'nom'=>'ALBANO',
            'prenom'=>'Rosalie',
            'adresse'=>'9 rue Mallarmé SAINT-CREPIN 05600',
            'tel'=>'0470298666',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>718,
            'nom'=>'BARALE',
            'prenom'=>'Jordan',
            'adresse'=>'36 rue Mallarmé MONCEAU-SUR-OISE 02120',
            'tel'=>'0337902134',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>719,
            'nom'=>'RICAUD',
            'prenom'=>'Jérémie',
            'adresse'=>'27 rue de Paris TRAVECY 02800',
            'tel'=>'0321240986',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>720,
            'nom'=>'PUECH',
            'prenom'=>'Catherine',
            'adresse'=>'25 rue du stade THIN-LE-MOUTIER 08460',
            'tel'=>'0373019942',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>721,
            'nom'=>'DARMON',
            'prenom'=>'Précilia',
            'adresse'=>'58 rue des Chantereines SORBIERS 05150',
            'tel'=>'0456138900',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>722,
            'nom'=>'PASQUALINI',
            'prenom'=>'Roby',
            'adresse'=>'14 rue des Princes REOTIER 05600',
            'tel'=>'0418201233',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>723,
            'nom'=>'FLEURY',
            'prenom'=>'Roby',
            'adresse'=>'7 rue du 14 juillet SAINT-FIRMIN 05800',
            'tel'=>'0435737841',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>724,
            'nom'=>'LAMY',
            'prenom'=>'Alice',
            'adresse'=>'21 rue du 14 juillet AUDRESSEIN 09800',
            'tel'=>'0549577626',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>725,
            'nom'=>'GATTO',
            'prenom'=>'Sophie',
            'adresse'=>'12 rue Blainville BOULIGNEUX 01330',
            'tel'=>'0485824681',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>726,
            'nom'=>'MARKARIAN',
            'prenom'=>'Armelle',
            'adresse'=>'87 rue des pyramides BANCIGNY 02140',
            'tel'=>'0380163229',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>727,
            'nom'=>'VITALI',
            'prenom'=>'Cristophe',
            'adresse'=>'44 rue St Denis ROCHEBRUNE 05190',
            'tel'=>'0421833954',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>728,
            'nom'=>'PONCE',
            'prenom'=>'Reissa',
            'adresse'=>'27 rue de la gare AUDRESSEIN 09800',
            'tel'=>'0525862994',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>729,
            'nom'=>'GROSSO',
            'prenom'=>'Amélie',
            'adresse'=>'41 rue des pyramides VAUX-CHAMPAGNE 08130',
            'tel'=>'0343900888',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>730,
            'nom'=>'GROSSI',
            'prenom'=>'Andrew',
            'adresse'=>'31 rue de la poste FLOING 08200',
            'tel'=>'0311338451',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>731,
            'nom'=>'ABEILLE',
            'prenom'=>'Marie',
            'adresse'=>'35 rue des gatinnes PELVOUX 05340',
            'tel'=>'0427092084',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>732,
            'nom'=>'MIRETTI',
            'prenom'=>'Alice',
            'adresse'=>'35 rue du renard AX-LES-THERMES 09110',
            'tel'=>'0579017565',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>733,
            'nom'=>'BOURGUE',
            'prenom'=>'Jules',
            'adresse'=>'90 rue de Paris VAUX-CHAMPAGNE 08130',
            'tel'=>'0386647121',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>734,
            'nom'=>'FERRIGNO',
            'prenom'=>'Rosalie',
            'adresse'=>'3 rue de Marigny AX-LES-THERMES 09110',
            'tel'=>'0552021678',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>735,
            'nom'=>'MOURGUES',
            'prenom'=>'Astine',
            'adresse'=>'7 rue de la Pergolat BAGERT 09230',
            'tel'=>'0521392547',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>736,
            'nom'=>'GUIGOU',
            'prenom'=>'Prosper',
            'adresse'=>'90 rue Bonaparte YONCQ 08210',
            'tel'=>'0392674994',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>737,
            'nom'=>'GALLIANO',
            'prenom'=>'Fernand',
            'adresse'=>'42 rue Edouard Hériot ARROUT 09800',
            'tel'=>'0515601750',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>738,
            'nom'=>'VENTURA',
            'prenom'=>'Anne-Laure',
            'adresse'=>'70 rue du Mont AZY-SUR-MARNE 02400',
            'tel'=>'0347195732',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>739,
            'nom'=>'NEGRO',
            'prenom'=>'Julien',
            'adresse'=>'13 rue des Lilas BANCIGNY 02140',
            'tel'=>'0339249742',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>740,
            'nom'=>'BONHOMME',
            'prenom'=>'Hypolite',
            'adresse'=>'45 rue des Néfliers ORCIERES 05170',
            'tel'=>'0435503130',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>741,
            'nom'=>'ZUNINO',
            'prenom'=>'Irénée',
            'adresse'=>'57 rue Hector Berlioz FEPIN 08170',
            'tel'=>'0399685398',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>742,
            'nom'=>'CERUTTI',
            'prenom'=>'Reissa',
            'adresse'=>'24 rue Hector Berlioz ARROUT 09800',
            'tel'=>'0564256388',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>743,
            'nom'=>'SAUNIER',
            'prenom'=>'Jimmy',
            'adresse'=>'25 rue Albert Camus SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0442319187',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>744,
            'nom'=>'PARDIGON',
            'prenom'=>'Jérémie',
            'adresse'=>'96 rue Anatole France MONT-LAURENT 08130',
            'tel'=>'0379511159',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>745,
            'nom'=>'GOIRAND',
            'prenom'=>'Victor',
            'adresse'=>'37 rue de Marigny SAINTE-MARIE 05150',
            'tel'=>'0497549880',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>746,
            'nom'=>'LEGIER',
            'prenom'=>'Bertrand',
            'adresse'=>'20 rue Pasteur BEDEILLE 09230',
            'tel'=>'0522586224',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>747,
            'nom'=>'SAVINO',
            'prenom'=>'Julien',
            'adresse'=>'44 rue Bonaparte BANCIGNY 02140',
            'tel'=>'0390688254',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>748,
            'nom'=>'MENARD',
            'prenom'=>'Habib',
            'adresse'=>'5 rue du stade AMBRIEF 02200',
            'tel'=>'0327960352',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>749,
            'nom'=>'SARRAZIN',
            'prenom'=>'André',
            'adresse'=>'69 rue Debussy MONCEAU-SUR-OISE 02120',
            'tel'=>'0363762717',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>750,
            'nom'=>'ROYER',
            'prenom'=>'Hypolite',
            'adresse'=>'20 rue Victor Hugo THIN-LE-MOUTIER 08460',
            'tel'=>'0387692474',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>751,
            'nom'=>'PORTAL',
            'prenom'=>'André',
            'adresse'=>'27 rue des Accacias LAUNOIS-SUR-VENCE 08430',
            'tel'=>'0314089620',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>752,
            'nom'=>'MANFREDI',
            'prenom'=>'Mohammed',
            'adresse'=>'48 rue du 14 juillet AX-LES-THERMES 09110',
            'tel'=>'0557230819',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>753,
            'nom'=>'COLLET',
            'prenom'=>'Patrick',
            'adresse'=>'38 rue du renard BILLIAT 01200',
            'tel'=>'0438986289',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>754,
            'nom'=>'MINASSIAN',
            'prenom'=>'Précilia',
            'adresse'=>'3 rue des Epines AUGIREIN 09800',
            'tel'=>'0555523105',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>755,
            'nom'=>'GLEIZE',
            'prenom'=>'Hamed',
            'adresse'=>'43 rue des Epines HERBEUVAL 08370',
            'tel'=>'0332471585',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>756,
            'nom'=>'SAUVAIRE',
            'prenom'=>'Anne-Marie',
            'adresse'=>'26 rue de Paris SORBIERS 05150',
            'tel'=>'0480449197',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>757,
            'nom'=>'PARDO',
            'prenom'=>'Amélie',
            'adresse'=>'33 rue de Marigny BRIANCON 05100',
            'tel'=>'0429531221',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>758,
            'nom'=>'CHAFFARD',
            'prenom'=>'Précilia',
            'adresse'=>'17 rue des pyramides MESSINCOURT 08110',
            'tel'=>'0383254238',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>759,
            'nom'=>'LEGRAND',
            'prenom'=>'Précilia',
            'adresse'=>'24 rue Debussy BOURG-EN-BRESSE 01000',
            'tel'=>'0431348186',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>760,
            'nom'=>'CASTRO',
            'prenom'=>'Béatrice',
            'adresse'=>'21 rue des perles blanches MONTCY-NOTRE-DAME 08090',
            'tel'=>'0314453519',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>761,
            'nom'=>'COSSU',
            'prenom'=>'Caline',
            'adresse'=>'46 rue Mallarmé MONTCEAUX 01090',
            'tel'=>'0420799374',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>762,
            'nom'=>'MUSCAT',
            'prenom'=>'Bénédicte',
            'adresse'=>'90 rue Agniel YONCQ 08210',
            'tel'=>'0373069363',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>763,
            'nom'=>'LAI',
            'prenom'=>'Alain',
            'adresse'=>'17 rue St Denis AGUILCOURT 02190',
            'tel'=>'0333695801',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>764,
            'nom'=>'ROMERA',
            'prenom'=>'Précilia',
            'adresse'=>'34 rue Anatole France BETTANT 01500',
            'tel'=>'0412141785',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>765,
            'nom'=>'MAURO',
            'prenom'=>'Anne-Laure',
            'adresse'=>'24 rue Commandant Mouchotte REOTIER 05600',
            'tel'=>'0420893209',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>766,
            'nom'=>'AZZOPARDI',
            'prenom'=>'Françoise',
            'adresse'=>'80 rue Albert Camus AMBRIEF 02200',
            'tel'=>'0373756074',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>767,
            'nom'=>'MOSSE',
            'prenom'=>'Caline',
            'adresse'=>'30 rue des perles blanches SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0439831324',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>768,
            'nom'=>'HADDAD',
            'prenom'=>'Victor',
            'adresse'=>'14 rue des Lilas CHEZY-SUR-MARNE 02570',
            'tel'=>'0313300681',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>769,
            'nom'=>'GASQUET',
            'prenom'=>'Aristote',
            'adresse'=>'79 rue des Anses bleues ARANDAS 01230',
            'tel'=>'0420332660',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>770,
            'nom'=>'FERRANDO',
            'prenom'=>'Johnny',
            'adresse'=>'34 rue du renard FALAISE 08400',
            'tel'=>'0370553291',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>771,
            'nom'=>'TAGUELMINT',
            'prenom'=>'Jérome',
            'adresse'=>'28 rue Hector Berlioz ORCIERES 05170',
            'tel'=>'0443297062',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>772,
            'nom'=>'RIPOLL',
            'prenom'=>'Françoise',
            'adresse'=>'88 rue du Mont FRESSANCOURT 02800',
            'tel'=>'0313654986',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>773,
            'nom'=>'POUJOL',
            'prenom'=>'Anaelle',
            'adresse'=>'48 rue des Argonautes ARROUT 09800',
            'tel'=>'0518603040',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>774,
            'nom'=>'BARBERIS',
            'prenom'=>'Jérémie',
            'adresse'=>'67 rue des gatinnes ARANDAS 01230',
            'tel'=>'0410422676',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>775,
            'nom'=>'DUPUIS',
            'prenom'=>'Julie',
            'adresse'=>'4 rue Anatole France DOMMARTIN 01380',
            'tel'=>'0496807830',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>776,
            'nom'=>'LUBRANO',
            'prenom'=>'Jules',
            'adresse'=>'62 rue de la Pergolat BOURG-EN-BRESSE 01000',
            'tel'=>'0487728945',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>777,
            'nom'=>'CARTA',
            'prenom'=>'Amélie',
            'adresse'=>'59 rue Louis Aragon CAMON 09500',
            'tel'=>'0591653123',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>778,
            'nom'=>'GARIBALDI',
            'prenom'=>'Johnny',
            'adresse'=>'80 rue de du général Scott JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0386814494',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>779,
            'nom'=>'RENARD',
            'prenom'=>'Dominique',
            'adresse'=>'35 rue des Epines MONTCEAUX 01090',
            'tel'=>'0463823233',
            'specialite_complementaire'=>'null',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>780,
            'nom'=>'BERTORELLO',
            'prenom'=>'Amélie',
            'adresse'=>'60 rue des gatinnes BILLIAT 01200',
            'tel'=>'0487102339',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>781,
            'nom'=>'AZOULAY',
            'prenom'=>'Andrée',
            'adresse'=>'20 rue de la Pergolat MONTCEAUX 01090',
            'tel'=>'0487833849',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>782,
            'nom'=>'MIRALLES',
            'prenom'=>'Aristote',
            'adresse'=>'74 rue des Néfliers SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0417675151',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>783,
            'nom'=>'STEFANI',
            'prenom'=>'Anémone',
            'adresse'=>'78 rue Victor Hugo BRIANCON 05100',
            'tel'=>'0430859878',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>784,
            'nom'=>'PACE',
            'prenom'=>'Amiel',
            'adresse'=>'2 rue Perdue AUBENTON 02500',
            'tel'=>'0334550712',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>785,
            'nom'=>'JUAN',
            'prenom'=>'Aline',
            'adresse'=>'88 rue de Poligny FRESSANCOURT 02800',
            'tel'=>'0399301475',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>786,
            'nom'=>'BRESSON',
            'prenom'=>'Prosper',
            'adresse'=>'18 rue des hirondelles BOURG-EN-BRESSE 01000',
            'tel'=>'0463936581',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>787,
            'nom'=>'BARD',
            'prenom'=>'Marie',
            'adresse'=>'47 rue Perdue BRIANCON 05100',
            'tel'=>'0464689414',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>788,
            'nom'=>'ALBRAND',
            'prenom'=>'Hector',
            'adresse'=>'91 rue des hirondelles AX-LES-THERMES 09110',
            'tel'=>'0583375798',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>789,
            'nom'=>'FIORE',
            'prenom'=>'Jérémie',
            'adresse'=>'19 rue Commandant Hériot CEYZERIAT 01250',
            'tel'=>'0426848534',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>790,
            'nom'=>'MICHELI',
            'prenom'=>'Aristote',
            'adresse'=>'96 rue du Mont ROCHEBRUNE 05190',
            'tel'=>'0486526998',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>791,
            'nom'=>'BLACHERE',
            'prenom'=>'Hypolite',
            'adresse'=>'92 rue Beaudelaire JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0364925968',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>792,
            'nom'=>'BRES',
            'prenom'=>'Jules',
            'adresse'=>'56 rue du Mont BILLIAT 01200',
            'tel'=>'0459159687',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>793,
            'nom'=>'BALESTRA',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'94 rue Agniel BILLIAT 01200',
            'tel'=>'0497364094',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>794,
            'nom'=>'OLIVER',
            'prenom'=>'Reissa',
            'adresse'=>'37 rue de la pointe HAUTEVILLE 02120',
            'tel'=>'0398806683',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>795,
            'nom'=>'GUIDICELLI',
            'prenom'=>'Patricia',
            'adresse'=>'5 rue St Denis ABBECOURT 02300',
            'tel'=>'0355040100',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>796,
            'nom'=>'BARONI',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'90 rue Lampion YONCQ 08210',
            'tel'=>'0399778947',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>797,
            'nom'=>'MAZET',
            'prenom'=>'Jérémy',
            'adresse'=>'75 rue des Cavaux SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0466069822',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>798,
            'nom'=>'MARCO',
            'prenom'=>'Nohan',
            'adresse'=>'9 rue des Epines SAVOURNON 05700',
            'tel'=>'0411774310',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>799,
            'nom'=>'COULON',
            'prenom'=>'Hector',
            'adresse'=>'87 rue Malraux LAUNOIS-SUR-VENCE 08430',
            'tel'=>'0359717547',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>800,
            'nom'=>'CONSTANTIN',
            'prenom'=>'Aline',
            'adresse'=>'14 rue de la rose BARZY-SUR-MARNE 02850',
            'tel'=>'0356584101',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>801,
            'nom'=>'BAUDE',
            'prenom'=>'Sophie',
            'adresse'=>'66 rue du 14 juillet AVANCON 05230',
            'tel'=>'0413861599',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>802,
            'nom'=>'BURLE',
            'prenom'=>'Dominique',
            'adresse'=>'72 rue des Argonautes BRIANCON 05100',
            'tel'=>'0465512769',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>803,
            'nom'=>'AMBROSINO',
            'prenom'=>'Anne',
            'adresse'=>'78 rue des hirondelles PELVOUX 05340',
            'tel'=>'0495946694',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>804,
            'nom'=>'MASSONI',
            'prenom'=>'Ines',
            'adresse'=>'15 rue des Anses bleues MESSINCOURT 08110',
            'tel'=>'0312418493',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>805,
            'nom'=>'CROCE',
            'prenom'=>'Anémone',
            'adresse'=>'21 rue Commandant Hériot BELLEY 01300',
            'tel'=>'0465513099',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>806,
            'nom'=>'CHABAS',
            'prenom'=>'Sophie',
            'adresse'=>'54 rue du 14 juillet AX-LES-THERMES 09110',
            'tel'=>'0548859466',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>807,
            'nom'=>'BARBERO',
            'prenom'=>'Irénée',
            'adresse'=>'48 rue des perles blanches BRIANCON 05100',
            'tel'=>'0424065321',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>808,
            'nom'=>'BRETON',
            'prenom'=>'John',
            'adresse'=>'34 rue du Mont BETTANT 01500',
            'tel'=>'0441330897',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>809,
            'nom'=>'MASSOT',
            'prenom'=>'Aurélien',
            'adresse'=>'61 rue Pasteur MAYOT 02800',
            'tel'=>'0356229245',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>810,
            'nom'=>'MOLINARI',
            'prenom'=>'sabine',
            'adresse'=>'14 rue des Anges OYONNAX 01100',
            'tel'=>'0456485843',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>811,
            'nom'=>'GUY',
            'prenom'=>'Camille',
            'adresse'=>'67 rue Alphonse Daudet BUZAN 09800',
            'tel'=>'0531797312',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>812,
            'nom'=>'DUPRE',
            'prenom'=>'Mohammed',
            'adresse'=>'6 rue des Pigeons BARENTON-SUR-SERRE 02270',
            'tel'=>'0370234499',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>813,
            'nom'=>'COLLOMB',
            'prenom'=>'Amiel',
            'adresse'=>'23 rue Hector Berlioz BETTANT 01500',
            'tel'=>'0487520515',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>814,
            'nom'=>'CANU',
            'prenom'=>'Vénus',
            'adresse'=>'90 rue des Lilas HAUTEVILLE 02120',
            'tel'=>'0394086731',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>815,
            'nom'=>'ANTONELLI',
            'prenom'=>'Hypolite',
            'adresse'=>'80 rue de la gare ARANDAS 01230',
            'tel'=>'0440645072',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>816,
            'nom'=>'DURET',
            'prenom'=>'Anémone',
            'adresse'=>'22 rue des Cyprés BLYES 01150',
            'tel'=>'0470785500',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>817,
            'nom'=>'FLORENS',
            'prenom'=>'Rodolphe',
            'adresse'=>'24 rue des Anges BELLEY 01300',
            'tel'=>'0459668577',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>818,
            'nom'=>'FERRI',
            'prenom'=>'Julie',
            'adresse'=>'88 rue des Pigeons JUNIVILLE 08310',
            'tel'=>'0391920541',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>819,
            'nom'=>'SANTELLI',
            'prenom'=>'Alice',
            'adresse'=>'6 rue des hirondelles SAINT-CREPIN 05600',
            'tel'=>'0478485015',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>820,
            'nom'=>'SAID',
            'prenom'=>'Carole',
            'adresse'=>'78 rue des Pigeons SAINTE-MARIE 05150',
            'tel'=>'0433025835',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>821,
            'nom'=>'DIAZ',
            'prenom'=>'Anne-Ange',
            'adresse'=>'19 rue de la pointe PELVOUX 05340',
            'tel'=>'0411070122',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>822,
            'nom'=>'VICENTE',
            'prenom'=>'Ingrid',
            'adresse'=>'35 rue Malraux QUATRE-CHAMPS 08400',
            'tel'=>'0370478563',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>823,
            'nom'=>'VACHIER',
            'prenom'=>'Alain',
            'adresse'=>'27 rue du stade SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0492470117',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>824,
            'nom'=>'SAEZ',
            'prenom'=>'Vénus',
            'adresse'=>'29 rue de Paris AVANCON 05230',
            'tel'=>'0424123589',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>825,
            'nom'=>'LA ROCCA',
            'prenom'=>'Bernard',
            'adresse'=>'53 rue de la poste BAGERT 09230',
            'tel'=>'0550830599',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>826,
            'nom'=>'RAYBAUD',
            'prenom'=>'Serge',
            'adresse'=>'52 rue de Paris SAINT-FIRMIN 05800',
            'tel'=>'0472679599',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>827,
            'nom'=>'PASQUINI',
            'prenom'=>'Anaelle',
            'adresse'=>'92 rue Blainville SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0474041924',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>828,
            'nom'=>'JACOB',
            'prenom'=>'Charles',
            'adresse'=>'47 rue Beaudelaire AMBRIEF 02200',
            'tel'=>'0356493035',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>829,
            'nom'=>'ROSSIGNOL',
            'prenom'=>'Fatima',
            'adresse'=>'73 rue des Anges FRESSANCOURT 02800',
            'tel'=>'0390943061',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>830,
            'nom'=>'POURCEL',
            'prenom'=>'André',
            'adresse'=>'95 rue Edouard Hériot SAINT-FIRMIN 05800',
            'tel'=>'0483174531',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>831,
            'nom'=>'GUIGUES',
            'prenom'=>'André',
            'adresse'=>'24 rue Louis Aragon REOTIER 05600',
            'tel'=>'0476877380',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>832,
            'nom'=>'GRECH',
            'prenom'=>'Ines',
            'adresse'=>'71 rue Edouard Hériot ASTON 09310',
            'tel'=>'0543065471',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>833,
            'nom'=>'CLARY',
            'prenom'=>'Irénée',
            'adresse'=>'72 rue du capitaine Crochet SAVOURNON 05700',
            'tel'=>'0415947068',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>834,
            'nom'=>'PAPPALARDO',
            'prenom'=>'Armelle',
            'adresse'=>'32 rue de Paris SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0480648434',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>835,
            'nom'=>'GUEYDON',
            'prenom'=>'Serge',
            'adresse'=>'96 rue des oiseaux YONCQ 08210',
            'tel'=>'0397358254',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>836,
            'nom'=>'BOURELLY',
            'prenom'=>'Patrick',
            'adresse'=>'66 rue Blainville FRESSANCOURT 02800',
            'tel'=>'0330907062',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>837,
            'nom'=>'SILVESTRI',
            'prenom'=>'Caline',
            'adresse'=>'84 rue des Epines BRIANCON 05100',
            'tel'=>'0411957355',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>838,
            'nom'=>'RIEU',
            'prenom'=>'Patrice',
            'adresse'=>'93 rue Perdue DOMMARTIN 01380',
            'tel'=>'0430289650',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>839,
            'nom'=>'PEROTTI',
            'prenom'=>'Martin',
            'adresse'=>'96 rue des Pigeons ORCIERES 05170',
            'tel'=>'0492319447',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>840,
            'nom'=>'CHAPUS',
            'prenom'=>'Rosalie',
            'adresse'=>'34 rue des Ormes AX-LES-THERMES 09110',
            'tel'=>'0577827344',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>841,
            'nom'=>'REGIS',
            'prenom'=>'Robert',
            'adresse'=>'97 rue des perles blanches VAUX-CHAMPAGNE 08130',
            'tel'=>'0315818160',
            'specialite_complementaire'=>'null',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>842,
            'nom'=>'DUCROS',
            'prenom'=>'Patricia',
            'adresse'=>'59 rue Pernod SORBIERS 05150',
            'tel'=>'0452990036',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>843,
            'nom'=>'DELERIA',
            'prenom'=>'Patrice',
            'adresse'=>'30 rue de du général Scott SAINT-SAUVEUR 05200',
            'tel'=>'0412740574',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>844,
            'nom'=>'JAYNE',
            'prenom'=>'Alizée',
            'adresse'=>'24 rue Commandant Hériot HERBEUVAL 08370',
            'tel'=>'0372811016',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>845,
            'nom'=>'GANDOLFO',
            'prenom'=>'Amiel',
            'adresse'=>'30 rue des Epines ARROUT 09800',
            'tel'=>'0554912883',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>846,
            'nom'=>'PAOLETTI',
            'prenom'=>'Anne-Laure',
            'adresse'=>'72 rue des Accacias CEYZERIAT 01250',
            'tel'=>'0495757649',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>847,
            'nom'=>'MEFFRE',
            'prenom'=>'Alain',
            'adresse'=>'89 rue de la Pergolat NEUVILLE-LES-DAMES 01400',
            'tel'=>'0443139412',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>848,
            'nom'=>'GUIOT',
            'prenom'=>'Julien',
            'adresse'=>'52 rue Malraux MAYOT 02800',
            'tel'=>'0313537125',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>849,
            'nom'=>'PELLETIER',
            'prenom'=>'Dominique',
            'adresse'=>'26 rue des Pigeons CHEZY-SUR-MARNE 02570',
            'tel'=>'0376713314',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>850,
            'nom'=>'CARMIGNANI',
            'prenom'=>'Prosper',
            'adresse'=>'34 rue des pyramides DOMMARTIN 01380',
            'tel'=>'0437007893',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>851,
            'nom'=>'MESTRE',
            'prenom'=>'Amélie',
            'adresse'=>'84 rue de Marigny AMBRIEF 02200',
            'tel'=>'0362342189',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>852,
            'nom'=>'CAPUTO',
            'prenom'=>'Carole',
            'adresse'=>'14 rue des Lilas SAVOURNON 05700',
            'tel'=>'0440474468',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>853,
            'nom'=>'CATANIA',
            'prenom'=>'Adelphe',
            'adresse'=>'32 rue de Marigny CHABESTAN 05400',
            'tel'=>'0479332407',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>854,
            'nom'=>'SOTO',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'31 rue des pyramides MAYOT 02800',
            'tel'=>'0352060592',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>855,
            'nom'=>'SALA',
            'prenom'=>'Amélie',
            'adresse'=>'90 rue des Néfliers HOUDILCOURT 08190',
            'tel'=>'0360017048',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>856,
            'nom'=>'GUERINI',
            'prenom'=>'Adelphe',
            'adresse'=>'35 rue des Argonautes BOULIGNEUX 01330',
            'tel'=>'0470938471',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>857,
            'nom'=>'BOUCHARD',
            'prenom'=>'Rosalie',
            'adresse'=>'14 rue Blainville FLEVILLE 08250',
            'tel'=>'0320670229',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>858,
            'nom'=>'CARLI',
            'prenom'=>'Caline',
            'adresse'=>'27 rue Pasteur AX-LES-THERMES 09110',
            'tel'=>'0512150549',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>859,
            'nom'=>'MURA',
            'prenom'=>'Astine',
            'adresse'=>'94 rue Debussy MONTIGNY-SUR-MEUSE 08170',
            'tel'=>'0358772408',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>860,
            'nom'=>'CARLES',
            'prenom'=>'Victor',
            'adresse'=>'23 rue St Denis TRAVECY 02800',
            'tel'=>'0330373632',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>861,
            'nom'=>'ANDREU',
            'prenom'=>'Aristote',
            'adresse'=>'55 rue Agniel BEDEILLE 09230',
            'tel'=>'0597171275',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>862,
            'nom'=>'PINTO',
            'prenom'=>'Charles-Edouard',
            'adresse'=>'78 rue de la recette MACHAULT 08310',
            'tel'=>'0325349638',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>863,
            'nom'=>'GARGUILO',
            'prenom'=>'Caline',
            'adresse'=>'19 rue Pernod AX-LES-THERMES 09110',
            'tel'=>'0568016782',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>864,
            'nom'=>'VITALIS',
            'prenom'=>'Aurèle',
            'adresse'=>'9 rue de la gare MONTCY-NOTRE-DAME 08090',
            'tel'=>'0346893168',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>865,
            'nom'=>'ROQUE',
            'prenom'=>'Serge',
            'adresse'=>'99 rue de Paris MONTCY-NOTRE-DAME 08090',
            'tel'=>'0391243175',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>866,
            'nom'=>'MANOUKIAN',
            'prenom'=>'Aline',
            'adresse'=>'66 rue des Cyprés ROCHEBRUNE 05190',
            'tel'=>'0474044568',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>867,
            'nom'=>'CARUSO',
            'prenom'=>'Gilles',
            'adresse'=>'13 rue des Ormes BLYES 01150',
            'tel'=>'0424315941',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>868,
            'nom'=>'RIBES',
            'prenom'=>'Johnny',
            'adresse'=>'99 rue des Epines LAUNOIS-SUR-VENCE 08430',
            'tel'=>'0313668088',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>869,
            'nom'=>'VOLPE',
            'prenom'=>'Jérome',
            'adresse'=>'24 rue des Anses bleues FLOING 08200',
            'tel'=>'0351576826',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>870,
            'nom'=>'POULET',
            'prenom'=>'Amiel',
            'adresse'=>'16 rue des oiseaux OYONNAX 01100',
            'tel'=>'0480872838',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>871,
            'nom'=>'AGRESTI',
            'prenom'=>'Irénée',
            'adresse'=>'24 rue Agniel BOURG-EN-BRESSE 01000',
            'tel'=>'0457782183',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>872,
            'nom'=>'GIUSIANO',
            'prenom'=>'Andrew',
            'adresse'=>'63 rue de du général Scott SAINTE-MARIE 05150',
            'tel'=>'0496424640',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>873,
            'nom'=>'CANAVESE',
            'prenom'=>'Fatima',
            'adresse'=>'9 rue des Cyprés FRESSANCOURT 02800',
            'tel'=>'0399807861',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>874,
            'nom'=>'FRANCESCHINI',
            'prenom'=>'Andrew',
            'adresse'=>'53 rue de la Pergolat CHABESTAN 05400',
            'tel'=>'0448286750',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>875,
            'nom'=>'TOUATI',
            'prenom'=>'Gilles',
            'adresse'=>'47 rue du capitaine Fraquasse BANCIGNY 02140',
            'tel'=>'0397976949',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>876,
            'nom'=>'BOSQ',
            'prenom'=>'Marie',
            'adresse'=>'89 rue Albert Camus MONTCY-NOTRE-DAME 08090',
            'tel'=>'0378321982',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>877,
            'nom'=>'ROCCHI',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'81 rue des Cavaux SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0463951383',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>878,
            'nom'=>'SALVADOR',
            'prenom'=>'Armelle',
            'adresse'=>'76 rue du Mont MONTCEAUX 01090',
            'tel'=>'0415598111',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>879,
            'nom'=>'BERGE',
            'prenom'=>'Anémone',
            'adresse'=>'19 rue Albert Camus CAMON 09500',
            'tel'=>'0573404038',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>880,
            'nom'=>'TISSOT',
            'prenom'=>'Prosper',
            'adresse'=>'67 rue de la gare FLOING 08200',
            'tel'=>'0324668686',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>881,
            'nom'=>'ROQUES',
            'prenom'=>'Anselme',
            'adresse'=>'53 rue des hirondelles FLOING 08200',
            'tel'=>'0327408227',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>882,
            'nom'=>'AGUENI',
            'prenom'=>'Roby',
            'adresse'=>'13 rue du stade OYONNAX 01100',
            'tel'=>'0474204428',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>883,
            'nom'=>'CHAPPE',
            'prenom'=>'Vénus',
            'adresse'=>'50 rue des Argonautes HERBEUVAL 08370',
            'tel'=>'0373456319',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>884,
            'nom'=>'LEANDRI',
            'prenom'=>'Aline',
            'adresse'=>'54 rue de la Tour ARROUT 09800',
            'tel'=>'0573442616',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>885,
            'nom'=>'SUZAN',
            'prenom'=>'Alain',
            'adresse'=>'50 rue Anatole France TRAVECY 02800',
            'tel'=>'0323311091',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>886,
            'nom'=>'GRAZIANO',
            'prenom'=>'Mohammed',
            'adresse'=>'78 rue des Epines BLYES 01150',
            'tel'=>'0431013911',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>887,
            'nom'=>'MORA',
            'prenom'=>'sabine',
            'adresse'=>'80 rue de la Tour AX-LES-THERMES 09110',
            'tel'=>'0516185496',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>888,
            'nom'=>'MOULINAS',
            'prenom'=>'Adelphe',
            'adresse'=>'43 rue de la pointe AZY-SUR-MARNE 02400',
            'tel'=>'0325660790',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>889,
            'nom'=>'PASTORE',
            'prenom'=>'Annie',
            'adresse'=>'96 rue du général de Gaulle AX-LES-THERMES 09110',
            'tel'=>'0599243446',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>890,
            'nom'=>'GUGLIELMI',
            'prenom'=>'John',
            'adresse'=>'82 rue de la recette AGUILCOURT 02190',
            'tel'=>'0366228551',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>891,
            'nom'=>'AMATO',
            'prenom'=>'Aurélien',
            'adresse'=>'66 rue Louis Aragon BETTANT 01500',
            'tel'=>'0473878093',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>892,
            'nom'=>'MEYNIER',
            'prenom'=>'Hypolite',
            'adresse'=>'70 rue des Néfliers CHALLES 01450',
            'tel'=>'0476171240',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>893,
            'nom'=>'CORDIER',
            'prenom'=>'Sophie',
            'adresse'=>'43 rue des Armées BRIANCON 05100',
            'tel'=>'0415807023',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>894,
            'nom'=>'BERNE',
            'prenom'=>'Anselme',
            'adresse'=>'59 rue Petit FRESSANCOURT 02800',
            'tel'=>'0383782513',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>895,
            'nom'=>'TIRAN',
            'prenom'=>'Ines',
            'adresse'=>'43 rue du général de Gaulle AUGIREIN 09800',
            'tel'=>'0598718886',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>896,
            'nom'=>'ZIANI',
            'prenom'=>'Aurélien',
            'adresse'=>'79 rue de la gare BELLEY 01300',
            'tel'=>'0479776039',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>897,
            'nom'=>'MOURADIAN',
            'prenom'=>'Andrew',
            'adresse'=>'18 rue du Mont CHALLES 01450',
            'tel'=>'0433547437',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>898,
            'nom'=>'PINELLI',
            'prenom'=>'Jérome',
            'adresse'=>'89 rue des pyramides MONCEAU-SUR-OISE 02120',
            'tel'=>'0345551167',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>899,
            'nom'=>'KLEIN',
            'prenom'=>'Serge',
            'adresse'=>'97 rue du capitaine Crochet FLOING 08200',
            'tel'=>'0316196835',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>900,
            'nom'=>'PHILIBERT',
            'prenom'=>'Patrice',
            'adresse'=>'25 rue des gatinnes FLEVILLE 08250',
            'tel'=>'0334902877',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>901,
            'nom'=>'TRANI',
            'prenom'=>'Bénédicte',
            'adresse'=>'13 rue Agniel BEZAC 09100',
            'tel'=>'0566740268',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>902,
            'nom'=>'ROMANI',
            'prenom'=>'Jérome',
            'adresse'=>'40 rue des perles blanches SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0446944245',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>903,
            'nom'=>'BELAID',
            'prenom'=>'Jérémie',
            'adresse'=>'78 rue des Epines VAUX-CHAMPAGNE 08130',
            'tel'=>'0358416091',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>904,
            'nom'=>'CALABRESE',
            'prenom'=>'Catherine',
            'adresse'=>'34 rue Malraux MACHAULT 08310',
            'tel'=>'0384057669',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>905,
            'nom'=>'BELLONE',
            'prenom'=>'Prosper',
            'adresse'=>'76 rue des Epines FLOING 08200',
            'tel'=>'0393379729',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>906,
            'nom'=>'DEVAUX',
            'prenom'=>'Patrick',
            'adresse'=>'26 rue Agniel BOURG-EN-BRESSE 01000',
            'tel'=>'0479180299',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>907,
            'nom'=>'ARQUIER',
            'prenom'=>'Julie',
            'adresse'=>'40 rue des Armées AMBRIEF 02200',
            'tel'=>'0361450183',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>908,
            'nom'=>'CHIOUSSE',
            'prenom'=>'Jordan',
            'adresse'=>'27 rue de la rose BANCIGNY 02140',
            'tel'=>'0352416188',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>909,
            'nom'=>'MOURIES',
            'prenom'=>'Julienne',
            'adresse'=>'69 rue des gatinnes AX-LES-THERMES 09110',
            'tel'=>'0580069967',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>910,
            'nom'=>'MAYAN',
            'prenom'=>'Annie',
            'adresse'=>'58 rue du capitaine Fraquasse CHABESTAN 05400',
            'tel'=>'0467360442',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>911,
            'nom'=>'BENVENUTI',
            'prenom'=>'Patrick',
            'adresse'=>'19 rue Pernod SIGOYER 05130',
            'tel'=>'0457375943',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>912,
            'nom'=>'MALET',
            'prenom'=>'Andrew',
            'adresse'=>'83 rue de Paris AMBRIEF 02200',
            'tel'=>'0395359341',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>913,
            'nom'=>'LENZI',
            'prenom'=>'Adelphe',
            'adresse'=>'27 rue Bonaparte CHEZY-SUR-MARNE 02570',
            'tel'=>'0355084339',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>914,
            'nom'=>'BIANCIOTTO',
            'prenom'=>'sabine',
            'adresse'=>'65 rue des Pigeons HERBEUVAL 08370',
            'tel'=>'0360394232',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>915,
            'nom'=>'VILLA',
            'prenom'=>'Irénée',
            'adresse'=>'69 rue de la recette MACHAULT 08310',
            'tel'=>'0383128193',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>916,
            'nom'=>'SEGOND',
            'prenom'=>'Martial',
            'adresse'=>'86 rue du général de Gaulle BARZY-SUR-MARNE 02850',
            'tel'=>'0317141855',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>917,
            'nom'=>'BOURGEOIS',
            'prenom'=>'Roby',
            'adresse'=>'9 rue du général de Gaulle SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0487582509',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>918,
            'nom'=>'ALEXIS',
            'prenom'=>'Aurèle',
            'adresse'=>'87 rue des Armées BARZY-SUR-MARNE 02850',
            'tel'=>'0338003620',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>919,
            'nom'=>'GHIBAUDO',
            'prenom'=>'Sophie',
            'adresse'=>'94 rue de Poligny ARROUT 09800',
            'tel'=>'0557640538',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>920,
            'nom'=>'HEBRARD',
            'prenom'=>'Aurèle',
            'adresse'=>'63 rue des Epines ASTON 09310',
            'tel'=>'0522392505',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>921,
            'nom'=>'DIJON',
            'prenom'=>'Bertrand',
            'adresse'=>'46 rue des Néfliers AUBENTON 02500',
            'tel'=>'0347004937',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>922,
            'nom'=>'SIMONI',
            'prenom'=>'Catherine',
            'adresse'=>'75 rue des Pigeons MEZIERES-SUR-OISE 02240',
            'tel'=>'0361266958',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>923,
            'nom'=>'BERMOND',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'45 rue de la poste MONTCEAUX 01090',
            'tel'=>'0483591358',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>924,
            'nom'=>'BAYOL',
            'prenom'=>'Précilia',
            'adresse'=>'97 rue de Marigny OYONNAX 01100',
            'tel'=>'0492249302',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>925,
            'nom'=>'SIMONETTI',
            'prenom'=>'Julien',
            'adresse'=>'86 rue Pasteur AMBRIEF 02200',
            'tel'=>'0351207619',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>926,
            'nom'=>'DA SILVA',
            'prenom'=>'Yoan',
            'adresse'=>'16 rue des Cyprés ROCHEBRUNE 05190',
            'tel'=>'0447561911',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>927,
            'nom'=>'RUGGIERO',
            'prenom'=>'Martin',
            'adresse'=>'12 rue de Marigny SAVOURNON 05700',
            'tel'=>'0427247399',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>928,
            'nom'=>'BOVERO',
            'prenom'=>'Alizée',
            'adresse'=>'88 rue Blainville ROCHEBRUNE 05190',
            'tel'=>'0426259531',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>929,
            'nom'=>'TREGLIA',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'25 rue des Cavaux SAINT-ANDRE-DE-ROSANS 05150',
            'tel'=>'0453552598',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>930,
            'nom'=>'ARLAUD',
            'prenom'=>'Anémone',
            'adresse'=>'52 rue des Argonautes BRIANCON 05100',
            'tel'=>'0490437250',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>931,
            'nom'=>'LANTELME',
            'prenom'=>'Rosalie',
            'adresse'=>'1 rue Albert Camus BOURG-EN-BRESSE 01000',
            'tel'=>'0436516378',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>932,
            'nom'=>'MAESTRACCI',
            'prenom'=>'Julien',
            'adresse'=>'16 rue Mallarmé JUNIVILLE 08310',
            'tel'=>'0387772024',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>933,
            'nom'=>'BOURGES',
            'prenom'=>'Béatrice',
            'adresse'=>'56 rue de du général Scott BLYES 01150',
            'tel'=>'0497830362',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>934,
            'nom'=>'VERDIER',
            'prenom'=>'Irénée',
            'adresse'=>'28 rue Hector Berlioz YONCQ 08210',
            'tel'=>'0391607943',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>935,
            'nom'=>'RIBOULET',
            'prenom'=>'Bernard',
            'adresse'=>'67 rue des Pigeons AZY-SUR-MARNE 02400',
            'tel'=>'0363260638',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>936,
            'nom'=>'BARTOLINI',
            'prenom'=>'Nohan',
            'adresse'=>'56 rue de la poste BILLIAT 01200',
            'tel'=>'0489588610',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>937,
            'nom'=>'LEMAIRE',
            'prenom'=>'Hector',
            'adresse'=>'56 rue du Mont AUBENTON 02500',
            'tel'=>'0317965994',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>938,
            'nom'=>'LACOMBE',
            'prenom'=>'Vénus',
            'adresse'=>'42 rue Mallarmé SAINT-FIRMIN 05800',
            'tel'=>'0496188645',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>939,
            'nom'=>'KRIKORIAN',
            'prenom'=>'Ingrid',
            'adresse'=>'69 rue des gatinnes SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0474955755',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>940,
            'nom'=>'GIORDANENGO',
            'prenom'=>'Béatrice',
            'adresse'=>'83 rue Mallarmé LAVAL-MORENCY 08150',
            'tel'=>'0353669720',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>941,
            'nom'=>'LAFFONT',
            'prenom'=>'Aristote',
            'adresse'=>'45 rue des Néfliers ORCIERES 05170',
            'tel'=>'0410443514',
            'specialite_complementaire'=>'OSTEOPATHIE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>942,
            'nom'=>'GIULIANI',
            'prenom'=>'Firmin',
            'adresse'=>'86 rue Alphonse Daudet SORBIERS 05150',
            'tel'=>'0474673714',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>943,
            'nom'=>'AUTRAN',
            'prenom'=>'Hypolite',
            'adresse'=>'46 rue Blainville BELLEY 01300',
            'tel'=>'0432841577',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>944,
            'nom'=>'NIEL',
            'prenom'=>'Anne-Laure',
            'adresse'=>'10 rue Debussy BRIANCON 05100',
            'tel'=>'0488339706',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>945,
            'nom'=>'MICHAUD',
            'prenom'=>'Adrien',
            'adresse'=>'16 rue des Lilas CHEZY-SUR-MARNE 02570',
            'tel'=>'0375598648',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>946,
            'nom'=>'QUILICI',
            'prenom'=>'Martial',
            'adresse'=>'48 rue des Cavaux BRIANCON 05100',
            'tel'=>'0497203279',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>947,
            'nom'=>'DELESTRADE',
            'prenom'=>'Adrien',
            'adresse'=>'67 rue Mallarmé NEUVILLE-LES-DAMES 01400',
            'tel'=>'0483807492',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>948,
            'nom'=>'BIGGI',
            'prenom'=>'Andrée',
            'adresse'=>'9 rue Blainville BILLIAT 01200',
            'tel'=>'0443247634',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>949,
            'nom'=>'RAPHAEL',
            'prenom'=>'Austine',
            'adresse'=>'76 rue des Ormes BEDEILLE 09230',
            'tel'=>'0541576058',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>950,
            'nom'=>'TAMISIER',
            'prenom'=>'sabine',
            'adresse'=>'37 rue du stade ARROUT 09800',
            'tel'=>'0574023557',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>951,
            'nom'=>'DONNAT',
            'prenom'=>'Bénédicte',
            'adresse'=>'52 rue Mallarmé SAINT-FIRMIN 05800',
            'tel'=>'0498785723',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>952,
            'nom'=>'AMARA',
            'prenom'=>'Aline',
            'adresse'=>'72 rue des Accacias AX-LES-THERMES 09110',
            'tel'=>'0548451154',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>953,
            'nom'=>'ROIG',
            'prenom'=>'Charles-Edouard',
            'adresse'=>'19 rue des Accacias HOUDILCOURT 08190',
            'tel'=>'0316020754',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>954,
            'nom'=>'ARNAL',
            'prenom'=>'Hector',
            'adresse'=>'65 rue des Lilas BEDEILLE 09230',
            'tel'=>'0574559022',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>955,
            'nom'=>'SAUZE',
            'prenom'=>'Anémone',
            'adresse'=>'5 rue du 14 juillet CHEZY-SUR-MARNE 02570',
            'tel'=>'0337232948',
            'specialite_complementaire'=>'ANGEIOLOGIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>956,
            'nom'=>'ARTUFEL',
            'prenom'=>'Ingrid',
            'adresse'=>'92 rue des Epines AX-LES-THERMES 09110',
            'tel'=>'0561364657',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>957,
            'nom'=>'SUMIAN',
            'prenom'=>'Habib',
            'adresse'=>'22 rue de la pointe MESSINCOURT 08110',
            'tel'=>'0313589708',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>958,
            'nom'=>'AMADOR',
            'prenom'=>'Jérémy',
            'adresse'=>'59 rue des perles blanches YONCQ 08210',
            'tel'=>'0326242380',
            'specialite_complementaire'=>'MEDECINE APPLIQUEE AUX SPORTS',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>959,
            'nom'=>'CECCHI',
            'prenom'=>'Amiel',
            'adresse'=>'96 rue Pasteur ARROUT 09800',
            'tel'=>'0587698522',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>960,
            'nom'=>'MAGGIO',
            'prenom'=>'Austine',
            'adresse'=>'65 rue Mallarmé MONTCEAUX 01090',
            'tel'=>'0470285907',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>961,
            'nom'=>'BENEDETTO',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'32 rue Pernod TRAVECY 02800',
            'tel'=>'0333270659',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>962,
            'nom'=>'GRENIER',
            'prenom'=>'François',
            'adresse'=>'33 rue des Armées JOIGNY-SUR-MEUSE 08700',
            'tel'=>'0349739798',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>963,
            'nom'=>'VALENZA',
            'prenom'=>'Astine',
            'adresse'=>'14 rue de Paris HAUTEVILLE 02120',
            'tel'=>'0351375540',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>964,
            'nom'=>'GONDRAN',
            'prenom'=>'Catherine',
            'adresse'=>'62 rue Petit AUBENTON 02500',
            'tel'=>'0396351922',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>965,
            'nom'=>'CAVALLO',
            'prenom'=>'Dominique',
            'adresse'=>'16 rue Albert Camus MONTCEAUX 01090',
            'tel'=>'0460614067',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>966,
            'nom'=>'DEBONO',
            'prenom'=>'Habib',
            'adresse'=>'43 rue Agniel FEPIN 08170',
            'tel'=>'0334104949',
            'specialite_complementaire'=>'null',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>967,
            'nom'=>'TROUCHE',
            'prenom'=>'Bertrand',
            'adresse'=>'19 rue des Armées BUZAN 09800',
            'tel'=>'0568125818',
            'specialite_complementaire'=>'HOMEOPATHIE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>968,
            'nom'=>'MOUSSAOUI',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'98 rue de la recette CHABESTAN 05400',
            'tel'=>'0456022326',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>969,
            'nom'=>'GAZELLE',
            'prenom'=>'Bernard',
            'adresse'=>'20 rue des Pigeons ARROUT 09800',
            'tel'=>'0573067550',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>970,
            'nom'=>'DI DOMENICO',
            'prenom'=>'Nohan',
            'adresse'=>'43 rue des hirondelles BEDEILLE 09230',
            'tel'=>'0525181569',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>971,
            'nom'=>'RODRIGUES',
            'prenom'=>'Anne-Sophie',
            'adresse'=>'31 rue Blainville BARENTON-SUR-SERRE 02270',
            'tel'=>'0373526813',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>972,
            'nom'=>'CASTILLO',
            'prenom'=>'Alice',
            'adresse'=>'33 rue des Accacias ROCHEBRUNE 05190',
            'tel'=>'0449350884',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>973,
            'nom'=>'TAVERNIER',
            'prenom'=>'Aline',
            'adresse'=>'84 rue du capitaine Crochet MONT-LAURENT 08130',
            'tel'=>'0325576123',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>974,
            'nom'=>'RINALDI',
            'prenom'=>'John',
            'adresse'=>'3 rue de la Tour FRESSANCOURT 02800',
            'tel'=>'0331446881',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>975,
            'nom'=>'BALDACCHINO',
            'prenom'=>'Anne',
            'adresse'=>'96 rue des Anges AUBENTON 02500',
            'tel'=>'0378136627',
            'specialite_complementaire'=>'GERONTOLOGIE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>976,
            'nom'=>'MEDINA',
            'prenom'=>'Julienne',
            'adresse'=>'69 rue des Argonautes MONT-LAURENT 08130',
            'tel'=>'0370869862',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>977,
            'nom'=>'MORGANTI',
            'prenom'=>'Amiel',
            'adresse'=>'64 rue Bonaparte PELVOUX 05340',
            'tel'=>'0488029182',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>978,
            'nom'=>'FERRAT',
            'prenom'=>'sabine',
            'adresse'=>'82 rue Petit MONTCEAUX 01090',
            'tel'=>'0462167372',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>979,
            'nom'=>'COUSIN',
            'prenom'=>'Aurélien',
            'adresse'=>'43 rue de la pointe SAINTE-MARIE 05150',
            'tel'=>'0435284955',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>980,
            'nom'=>'CAMILLERI',
            'prenom'=>'François',
            'adresse'=>'82 rue des gatinnes LAVAL-MORENCY 08150',
            'tel'=>'0342390211',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>981,
            'nom'=>'ALEXANDRE',
            'prenom'=>'Anne-Jeanne',
            'adresse'=>'43 rue Hector Berlioz MONTCEAUX 01090',
            'tel'=>'0423643158',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>982,
            'nom'=>'SASSO',
            'prenom'=>'Gilles',
            'adresse'=>'61 rue de la Pergolat FLEVILLE 08250',
            'tel'=>'0344269218',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>983,
            'nom'=>'SALLES',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'10 rue des Armées JUNIVILLE 08310',
            'tel'=>'0323215933',
            'specialite_complementaire'=>'Pédiatrie',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>984,
            'nom'=>'MOSCA',
            'prenom'=>'Rosalie',
            'adresse'=>'61 rue Lampion MAYOT 02800',
            'tel'=>'0334037246',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>985,
            'nom'=>'HONORE',
            'prenom'=>'Marie',
            'adresse'=>'42 rue de la recette MONTCEAUX 01090',
            'tel'=>'0483490191',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>986,
            'nom'=>'BERENGUIER',
            'prenom'=>'Alain',
            'adresse'=>'49 rue des Chantereines SAINT-SAUVEUR 05200',
            'tel'=>'0444873979',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>987,
            'nom'=>'COUTON',
            'prenom'=>'Yoan',
            'adresse'=>'26 rue Perdue BARENTON-SUR-SERRE 02270',
            'tel'=>'0383462706',
            'specialite_complementaire'=>'ACUPONCTURE',
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>988,
            'nom'=>'POURRIERE',
            'prenom'=>'Anne-Lucie',
            'adresse'=>'30 rue des Néfliers FRESSANCOURT 02800',
            'tel'=>'0375894393',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>989,
            'nom'=>'MAGNE',
            'prenom'=>'Nohan',
            'adresse'=>'35 rue Pernod BELLOC 09600',
            'tel'=>'0584397641',
            'specialite_complementaire'=>'URGENTISTE',
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>990,
            'nom'=>'FERRARIS',
            'prenom'=>'John',
            'adresse'=>'87 rue des Epines JUNIVILLE 08310',
            'tel'=>'0326912283',
            'specialite_complementaire'=>'ALLERGOLOGIE',
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>991,
            'nom'=>'ROY',
            'prenom'=>'Patricia',
            'adresse'=>'11 rue des Armées CAMON 09500',
            'tel'=>'0564584038',
            'specialite_complementaire'=>NULL,
            'departement'=>9
        ] );

        Medecin::create( [
            'id'=>992,
            'nom'=>'MORAND',
            'prenom'=>'Adelphe',
            'adresse'=>'1 rue des Anges AMBRIEF 02200',
            'tel'=>'0341912319',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>993,
            'nom'=>'LEGER',
            'prenom'=>'Anaelle',
            'adresse'=>'34 rue de la Tour BOURG-EN-BRESSE 01000',
            'tel'=>'0421198450',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>994,
            'nom'=>'GENIN',
            'prenom'=>'Jérome',
            'adresse'=>'1 rue du capitaine Crochet MAYOT 02800',
            'tel'=>'0322747123',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>995,
            'nom'=>'BOI',
            'prenom'=>'Hector',
            'adresse'=>'96 rue des Princes AGUILCOURT 02190',
            'tel'=>'0344210000',
            'specialite_complementaire'=>NULL,
            'departement'=>2
        ] );

        Medecin::create( [
            'id'=>996,
            'nom'=>'CAU',
            'prenom'=>'Austine',
            'adresse'=>'48 rue Beaudelaire MACHAULT 08310',
            'tel'=>'0327416806',
            'specialite_complementaire'=>NULL,
            'departement'=>8
        ] );

        Medecin::create( [
            'id'=>997,
            'nom'=>'BOMPARD',
            'prenom'=>'Anne',
            'adresse'=>'37 rue du capitaine Crochet SIGOYER 05130',
            'tel'=>'0440990856',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>998,
            'nom'=>'BOURRELY',
            'prenom'=>'Aude',
            'adresse'=>'87 rue Louis Aragon SAINTE-MARIE 05150',
            'tel'=>'0458331361',
            'specialite_complementaire'=>NULL,
            'departement'=>5
        ] );

        Medecin::create( [
            'id'=>999,
            'nom'=>'GAZEL',
            'prenom'=>'Aurélien',
            'adresse'=>'83 rue des hirondelles SAINT-LAURENT-SUR-SAONE 01750',
            'tel'=>'0419114151',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );

        Medecin::create( [
            'id'=>1000,
            'nom'=>'VADON',
            'prenom'=>'Sophie',
            'adresse'=>'83 rue des Chantereines NEUVILLE-LES-DAMES 01400',
            'tel'=>'0412959203',
            'specialite_complementaire'=>NULL,
            'departement'=>1
        ] );
    }
}
