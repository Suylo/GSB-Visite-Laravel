<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visiteur;

class VisiteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visiteur::create( [
            'id'=>'d51',
            'nom'=>'Debroise',
            'prenom'=>'Michel',
            'login'=>'mdebroise',
            'password'=> bcrypt('aaaa'),
            'adresse'=>'2 Bld Jourdain',
            'cp'=>'44000',
            'ville'=>'Nantes',
            'date_embauche'=>'2001-04-17',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'a131',
            'nom'=>'Aribi',
            'prenom'=>'Alain',
            'login'=>'aribiA',
            'password'=>bcrypt('aaaa'),
            'adresse'=>'8 rue des Charmes',
            'cp'=>'46000',
            'ville'=>'Cahors',
            'date_embauche'=>'2005-12-21',
            'timespan'=>1491751241,
            'ticket'=>'MAQTNXcz8pBL8Jw91uRX'
        ] );

        Visiteur::create( [
            'id'=>'a17',
            'nom'=>'Andre',
            'prenom'=>'David',
            'login'=>'dandre',
            'password'=>bcrypt('oppg5'),
            'adresse'=>'1 rue Petit',
            'cp'=>'46200',
            'ville'=>'Lalbenque',
            'date_embauche'=>'1998-11-23',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'a55',
            'nom'=>'Bedos',
            'prenom'=>'Christian',
            'login'=>'cbedos',
            'password'=>bcrypt('gmhxd'),
            'adresse'=>'1 rue Peranud',
            'cp'=>'46250',
            'ville'=>'Montcuq',
            'date_embauche'=>'1995-01-12',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'a93',
            'nom'=>'Tusseau',
            'prenom'=>'Louis',
            'login'=>'ltusseau',
            'password'=>bcrypt('ktp3s'),
            'adresse'=>'22 rue des Ternes',
            'cp'=>'46123',
            'ville'=>'Gramat',
            'date_embauche'=>'2000-05-01',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'b13',
            'nom'=>'Bentot',
            'prenom'=>'Pascal',
            'login'=>'pbentot',
            'password'=>bcrypt('doyw1'),
            'adresse'=>'11 allée des Cerises',
            'cp'=>'46512',
            'ville'=>'Bessines',
            'date_embauche'=>'1992-07-09',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'b16',
            'nom'=>'Bioret',
            'prenom'=>'Luc',
            'login'=>'lbioret',
            'password'=>bcrypt('hrjfs'),
            'adresse'=>'1 Avenue gambetta',
            'cp'=>'46000',
            'ville'=>'Cahors',
            'date_embauche'=>'1998-05-11',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'b19',
            'nom'=>'Bunisset',
            'prenom'=>'Francis',
            'login'=>'fbunisset',
            'password'=>bcrypt('4vbnd'),
            'adresse'=>'10 rue des Perles',
            'cp'=>'93100',
            'ville'=>'Montreuil',
            'date_embauche'=>'1987-10-21',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'b25',
            'nom'=>'Bunisset',
            'prenom'=>'Denise',
            'login'=>'dbunisset',
            'password'=>bcrypt('s1y1r'),
            'adresse'=>'23 rue Manin',
            'cp'=>'75019',
            'ville'=>'paris',
            'date_embauche'=>'2010-12-05',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'b28',
            'nom'=>'Cacheux',
            'prenom'=>'Bernard',
            'login'=>'bcacheux',
            'password'=>bcrypt('uf7r3'),
            'adresse'=>'114 rue Blanche',
            'cp'=>'75017',
            'ville'=>'Paris',
            'date_embauche'=>'2009-11-12',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'b34',
            'nom'=>'Cadic',
            'prenom'=>'Eric',
            'login'=>'ecadic',
            'password'=>bcrypt('6u8dc'),
            'adresse'=>'123 avenue de la République',
            'cp'=>'75011',
            'ville'=>'Paris',
            'date_embauche'=>'2008-09-23',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'b4',
            'nom'=>'Charoze',
            'prenom'=>'Catherine',
            'login'=>'ccharoze',
            'password'=>bcrypt('u817o'),
            'adresse'=>'100 rue Petit',
            'cp'=>'75019',
            'ville'=>'Paris',
            'date_embauche'=>'2005-11-12',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'b50',
            'nom'=>'Clepkens',
            'prenom'=>'Christophe',
            'login'=>'cclepkens',
            'password'=>bcrypt('bw1us'),
            'adresse'=>'12 allée des Anges',
            'cp'=>'93230',
            'ville'=>'Romainville',
            'date_embauche'=>'2003-08-11',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'b59',
            'nom'=>'Cottin',
            'prenom'=>'Vincenne',
            'login'=>'vcottin',
            'password'=>bcrypt('2hoh9'),
            'adresse'=>'36 rue Des Roches',
            'cp'=>'93100',
            'ville'=>'Monteuil',
            'date_embauche'=>'2001-11-18',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'c14',
            'nom'=>'Daburon',
            'prenom'=>'François',
            'login'=>'fdaburon',
            'password'=>bcrypt('7oqpv'),
            'adresse'=>'13 rue de Chanzy',
            'cp'=>'94000',
            'ville'=>'Créteil',
            'date_embauche'=>'2002-02-11',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'c3',
            'nom'=>'De',
            'prenom'=>'Philippe',
            'login'=>'pde',
            'password'=>bcrypt('gk9kx'),
            'adresse'=>'13 rue Barthes',
            'cp'=>'94000',
            'ville'=>'Créteil',
            'date_embauche'=>'2010-12-14',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'c54',
            'nom'=>'Debelle',
            'prenom'=>'Michel',
            'login'=>'mdebelle',
            'password'=>bcrypt('od5rt'),
            'adresse'=>'181 avenue Barbusse',
            'cp'=>'93210',
            'ville'=>'Rosny',
            'date_embauche'=>'2006-11-23',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'d13',
            'nom'=>'Debelle',
            'prenom'=>'Jeanne',
            'login'=>'jdebelle',
            'password'=>bcrypt('nvwqq'),
            'adresse'=>'134 allée des Joncs',
            'cp'=>'44000',
            'ville'=>'Nantes',
            'date_embauche'=>'2000-05-11',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'e22',
            'nom'=>'Desmarquest',
            'prenom'=>'Nathalie',
            'login'=>'ndesmarquest',
            'password'=>bcrypt('f1fob'),
            'adresse'=>'14 Place d Arc',
            'cp'=>'45000',
            'ville'=>'Orléans',
            'date_embauche'=>'2005-11-12',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'e24',
            'nom'=>'Desnost',
            'prenom'=>'Pierre',
            'login'=>'pdesnost',
            'password'=>bcrypt('4k2o5'),
            'adresse'=>'16 avenue des Cèdres',
            'cp'=>'23200',
            'ville'=>'Guéret',
            'date_embauche'=>'2001-02-05',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'e39',
            'nom'=>'Dudouit',
            'prenom'=>'Frédéric',
            'login'=>'fdudouit',
            'password'=>bcrypt('44im8'),
            'adresse'=>'18 rue de l église',
            'cp'=>'23120',
            'ville'=>'GrandBourg',
            'date_embauche'=>'2000-08-01',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'e49',
            'nom'=>'Duncombe',
            'prenom'=>'Claude',
            'login'=>'cduncombe',
            'password'=>bcrypt('qf77j'),
            'adresse'=>'19 rue de la tour',
            'cp'=>'23100',
            'ville'=>'La souteraine',
            'date_embauche'=>'1987-10-10',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'e5',
            'nom'=>'Enault-Pascreau',
            'prenom'=>'Céline',
            'login'=>'cenault',
            'password'=>bcrypt('y2qdu'),
            'adresse'=>'25 place de la gare',
            'cp'=>'23200',
            'ville'=>'Gueret',
            'date_embauche'=>'1995-09-01',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'e52',
            'nom'=>'Eynde',
            'prenom'=>'Valérie',
            'login'=>'veynde',
            'password'=>bcrypt('i7sn3'),
            'adresse'=>'3 Grand Place',
            'cp'=>'13015',
            'ville'=>'Marseille',
            'date_embauche'=>'1999-11-01',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'f21',
            'nom'=>'Finck',
            'prenom'=>'Jacques',
            'login'=>'jfinck',
            'password'=>bcrypt('mpb3t'),
            'adresse'=>'10 avenue du Prado',
            'cp'=>'13002',
            'ville'=>'Marseille',
            'date_embauche'=>'2001-11-10',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'f39',
            'nom'=>'Frémont',
            'prenom'=>'Fernande',
            'login'=>'ffremont',
            'password'=>bcrypt('xs5tq'),
            'adresse'=>'4 route de la mer',
            'cp'=>'13012',
            'ville'=>'Allauh',
            'date_embauche'=>'1998-10-01',
            'timespan'=>0,
            'ticket'=>NULL
        ] );

        Visiteur::create( [
            'id'=>'f4',
            'nom'=>'Gest',
            'prenom'=>'Alain',
            'login'=>'agest',
            'password'=>bcrypt('dywvt'),
            'adresse'=>'30 avenue de la mer',
            'cp'=>'13025',
            'ville'=>'Berre',
            'date_embauche'=>'1985-11-01',
            'timespan'=>0,
            'ticket'=>NULL
        ] );
    }
}
