<?php

namespace Database\Seeders;
use App\Models\Categoria;
use App\Models\Cepa;
use App\Models\Fuente;
use App\Models\Territorio;
use App\Models\Provincia;
use App\Models\Suelo;
use App\Models\Variedad;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $users = User::create([
            'name' => 'Administrador',
            'email' => 'admin@eticacm.azcuba.cu',
            'password' => '$2y$10$46T4ZZJB1.OGoNye1pvf8eAT93vwujWppJjIzs/uuRu7yuALplD4S',
        ]);

        //Actualizar el codificador de meses
        $mes = Mes::create([
            'nombre' => 'Enero',
        ]);
        $mes = Mes::create([
            'nombre' => 'Febrero',
        ]);
        $mes = Mes::create([
            'nombre' => 'Marzo',
        ]);
        $mes = Mes::create([
            'nombre' => 'Abril',
        ]);
        $mes = Mes::create([
            'nombre' => 'Mayo',
        ]);
        $mes = Mes::create([
            'nombre' => 'Junio',
        ]);
        $mes = Mes::create([
            'nombre' => 'Julio',
        ]);
        $mes = Mes::create([
            'nombre' => 'Agosto',
        ]);
        $mes = Mes::create([
            'nombre' => 'Septiembre',
        ]);
        $mes = Mes::create([
            'nombre' => 'Octubre',
        ]);
        $mes = Mes::create([
            'nombre' => 'Noviembre',
        ]);
        $mes = Mes::create([
            'nombre' => 'Diciembre',
        ]);
              
        
        //Actualizando codificador de cepas
        $cp1 = new Cepa();
        $cp1->nombre = 'Primavera Quedada';
        $cp1->corto = 'PQ';
        $cp1->save();
        
        $cp2 = new Cepa();
        $cp2->nombre = 'Retoño Quedado';
        $cp2->corto = 'RQ';
        $cp2->save();

        $cp = new Cepa();
        $cp->nombre = 'Soca';
        $cp->corto = 'S';
        $cp->save();

        $cp = new Cepa();
        $cp->nombre = 'Soca';
        $cp->corto = 'S';
        $cp->save();

        $cp = new Cepa();
        $cp->nombre = 'Retoño';
        $cp->corto = 'R';
        $cp->save();

        $cp = new Cepa();
        $cp->nombre = 'Fríos';
        $cp->corto = 'F';
        $cp->save();

        $cp = new Cepa();
        $cp->nombre = 'Primavera';
        $cp->corto = 'P';
        $cp->save();

        $cp = new Cepa();
        $cp->nombre = 'Siembra de Frío';
        $cp->corto = 'SF';
        $cp->save();

        $cp = new Cepa();
        $cp->nombre = 'Siembra de Primavera';
        $cp->corto = 'SP';
        $cp->save();

        
        //Actualizar el codificador de territorios
        $territorio = Territorio::create([
            'nombre' => 'SEDE',
        ]);
        $territorio = Territorio::create([
            'nombre' => 'Artemisa - Mayabeque',
        ]);
        $territorio = Territorio::create([
            'nombre' => 'Matanzas',
        ]);
        $territorio = Territorio::create([
            'nombre' => 'Villa Clara-Cfgos',
        ]);
        $territorio = Territorio::create([
            'nombre' => 'Sancti Spiritus',
        ]);
        $territorio = Territorio::create([
            'nombre' => 'Centro Oriental',
        ]);
        $territorio = Territorio::create([
            'nombre' => 'Holguín',
        ]);
        $territorio = Territorio::create([
            'nombre' => 'Oriente Sur',
        ]);
        $territorio = Territorio::create([
            'nombre' => 'Subcontrataciones',
        ]);

        //Actualizar el codificador de provincias
        $provincia = Provincia::create([
            'codigo' => '00',
            'nombre' => 'SEDE',
            'territorio_id' => '1',
        ]);
        $provincia = Provincia::create([
            'codigo' => '01',
            'nombre' => 'Artemisa',
            'territorio_id' => '2',
        ]);
        $provincia = Provincia::create([
            'codigo' => '02',
            'nombre' => 'Mayabeque',
            'territorio_id' => '2',
        ]);
        $provincia = Provincia::create([
            'codigo' => '04',
            'nombre' => 'Matanzas',
            'territorio_id' => '3',
        ]);
        $provincia = Provincia::create([
            'codigo' => '05',
            'nombre' => 'Cienfuegos',
            'territorio_id' => '4',
        ]);
        $provincia = Provincia::create([
            'codigo' => '06',
            'nombre' => 'Villa Clara',
            'territorio_id' => '4',
        ]);
        $provincia = Provincia::create([
            'codigo' => '07',
            'nombre' => 'Sancti Spíritus',
            'territorio_id' => '5',
        ]);
        $provincia = Provincia::create([
            'codigo' => '08',
            'nombre' => 'Ciego de Avila',
            'territorio_id' => '6',
        ]);
        $provincia = Provincia::create([
            'codigo' => '09',
            'nombre' => 'Camagüey',
            'territorio_id' => '6',
        ]);
        $provincia = Provincia::create([
            'codigo' => '10',
            'nombre' => 'Las Tunas',
            'territorio_id' => '6',
        ]);
        $provincia = Provincia::create([
            'codigo' => '11',
            'nombre' => 'Holguín',
            'territorio_id' => '7',
        ]);
        $provincia = Provincia::create([
            'codigo' => '12',
            'nombre' => 'Granma',
            'territorio_id' => '8',
        ]);

        $provincia = Provincia::create([
            'codigo' => '13',
            'nombre' => 'Santiago de Cuba',
            'territorio_id' => '8',
        ]);
        $provincia = Provincia::create([
            'codigo' => '14',
            'nombre' => 'Guantánamo',
            'territorio_id' => '8',
        ]);
        $provincia = Provincia::create([
            'codigo' => '15',
            'nombre' => 'Subcontrataciones',
            'territorio_id' => '9',
        ]);

        //Adicionar codificador de suelo
        $suelo = Suelo::create([
            'nombre' => 'FERRALITICO CALCICO',
        ]);
        $suelo = Suelo::create([
            'nombre' => 'FERRITIZADO',
        ]);
        $suelo = Suelo::create([
            'nombre' => 'FERRALI. CUARCITICO',
        ]);
        $suelo = Suelo::create([
            'nombre' => 'FERSIALIT. CALCICO',
        ]);
        $suelo = Suelo::create([
            'nombre' => 'SIALITIZ. CALCICO',
        ]);
        $suelo = Suelo::create([
            'nombre' => 'SIALITIZ. NO CALCICO',
        ]);
        $suelo = Suelo::create([
            'nombre' => 'VERTISUELO',
        ]);
        $suelo = Suelo::create([
            'nombre' => 'GLEY. SIALITIZADO',
        ]);
        $suelo = Suelo::create([
            'nombre' => 'GLEY. FERRALITIZADO',
        ]);
        $suelo = Suelo::create([
            'nombre' => 'ALUVIAL',
        ]);

        //Actualizando el codificador de variedades
        $variedad = Variedad::create([
            'codigo' => '001',
            'nombre' => 'Ja60-5',
        ]);
        $variedad = Variedad::create([
            'codigo' => '002',
            'nombre' => 'C323-68',
        ]);
        $variedad = Variedad::create([
            'codigo' => '003',
            'nombre' => 'C120-78',
        ]);
        $variedad = Variedad::create([
            'codigo' => '004',
            'nombre' => 'C87-51',
        ]);
        $variedad = Variedad::create([
            'codigo' => '005',
            'nombre' => 'CP52-43',
        ]);
        $variedad = Variedad::create([
            'codigo' => '006',
            'nombre' => 'My5514',
        ]);
        $variedad = Variedad::create([
            'codigo' => '007',
            'nombre' => 'C266-70',
        ]);
        $variedad = Variedad::create([
            'codigo' => '008',
            'nombre' => 'C1051-73',
        ]);
        $variedad = Variedad::create([
            'codigo' => '009',
            'nombre' => 'Ja64-19',
        ]);
        $variedad = Variedad::create([
            'codigo' => '010',
            'nombre' => 'Ty70-17',
        ]);
        $variedad = Variedad::create([
            'codigo' => '011',
            'nombre' => 'C1616-75',
        ]);
        $variedad = Variedad::create([
            'codigo' => '012',
            'nombre' => 'C568-75',
        ]);
        $variedad = Variedad::create([
            'codigo' => '013',
            'nombre' => 'B7274',
        ]);
        $variedad = Variedad::create([
            'codigo' => '014',
            'nombre' => 'B63118',
        ]);
        $variedad = Variedad::create([
            'codigo' => '015',
            'nombre' => 'C294-70',
        ]);
        $variedad = Variedad::create([
            'codigo' => '016',
            'nombre' => 'C290-73',
        ]);
        $variedad = Variedad::create([
            'codigo' => '017',
            'nombre' => 'B77418',
        ]);
        $variedad = Variedad::create([
            'codigo' => '018',
            'nombre' => 'C1324-74',
        ]);
        $variedad = Variedad::create([
            'codigo' => '019',
            'nombre' => 'C751-75',
        ]);
        $variedad = Variedad::create([
            'codigo' => '020',
            'nombre' => 'B42231',
        ]);
        $variedad = Variedad::create([
            'codigo' => '021',
            'nombre' => 'B62163',
        ]);
        $variedad = Variedad::create([
            'codigo' => '022',
            'nombre' => 'C236-51',
        ]);
        $variedad = Variedad::create([
            'codigo' => '023',
            'nombre' => 'C334-64',
        ]);
        $variedad = Variedad::create([
            'codigo' => '024',
            'nombre' => 'C819-67',
        ]);
        $variedad = Variedad::create([
            'codigo' => '025',
            'nombre' => 'C187-68',
        ]);
        $variedad = Variedad::create([
            'codigo' => '026',
            'nombre' => 'C172-72',
        ]);
        $variedad = Variedad::create([
            'codigo' => '027',
            'nombre' => 'C374-72',
        ]);
        $variedad = Variedad::create([
            'codigo' => '028',
            'nombre' => 'C439-72',
        ]);
        $variedad = Variedad::create([
            'codigo' => '029',
            'nombre' => 'Ja60-3',
        ]);
        $variedad = Variedad::create([
            'codigo' => '030',
            'nombre' => 'Ja64-11',
        ]);
        $variedad = Variedad::create([
            'codigo' => '031',
            'nombre' => 'Ja64-20',
        ]);
        $variedad = Variedad::create([
            'codigo' => '032',
            'nombre' => 'My54-65',
        ]);
        $variedad = Variedad::create([
            'codigo' => '033',
            'nombre' => 'My24129',
        ]);
        $variedad = Variedad::create([
            'codigo' => '034',
            'nombre' => 'My5715',
        ]);
        $variedad = Variedad::create([
            'codigo' => '035',
            'nombre' => 'POJ2878',
        ]);
        $variedad = Variedad::create([
            'codigo' => '036',
            'nombre' => 'PPQK',
        ]);
        $variedad = Variedad::create([
            'codigo' => '037',
            'nombre' => 'PR980',
        ]);
        $variedad = Variedad::create([
            'codigo' => '038',
            'nombre' => 'Ty76-16',
        ]);
        $variedad = Variedad::create([
            'codigo' => '039',
            'nombre' => 'Ty76-25',
        ]);
        $variedad = Variedad::create([
            'codigo' => '040',
            'nombre' => 'Ty76-49',
        ]);
        $variedad = Variedad::create([
            'codigo' => '041',
            'nombre' => 'B51129',
        ]);
        $variedad = Variedad::create([
            'codigo' => '042',
            'nombre' => 'CG127-45',
        ]);
        $variedad = Variedad::create([
            'codigo' => '043',
            'nombre' => 'Co997',
        ]);
        $variedad = Variedad::create([
            'codigo' => '044',
            'nombre' => 'B80250',
        ]);
        $variedad = Variedad::create([
            'codigo' => '045',
            'nombre' => 'B80250',
        ]);
        $variedad = Variedad::create([
            'codigo' => '046',
            'nombre' => 'C138-77',
        ]);
        $variedad = Variedad::create([
            'codigo' => '047',
            'nombre' => 'C111-79',
        ]);
        $variedad = Variedad::create([
            'codigo' => '048',
            'nombre' => 'C2180-80',
        ]);
        $variedad = Variedad::create([
            'codigo' => '049',
            'nombre' => 'C132-81',
        ]);
        $variedad = Variedad::create([
            'codigo' => '050',
            'nombre' => 'C137-81',
        ]);
        $variedad = Variedad::create([
            'codigo' => '051',
            'nombre' => 'C140-81',
        ]);
        $variedad = Variedad::create([
            'codigo' => '052',
            'nombre' => 'C130-82',
        ]);
        $variedad = Variedad::create([
            'codigo' => '053',
            'nombre' => 'C203-82',
        ]);
        $variedad = Variedad::create([
            'codigo' => '054',
            'nombre' => 'C128-83',
        ]);
        $variedad = Variedad::create([
            'codigo' => '055',
            'nombre' => 'C85-1',
        ]);
        $variedad = Variedad::create([
            'codigo' => '056',
            'nombre' => 'C85-101',
        ]);
        $variedad = Variedad::create([
            'codigo' => '057',
            'nombre' => 'C85-212',
        ]);
        $variedad = Variedad::create([
            'codigo' => '058',
            'nombre' => 'C85-214',
        ]);
        $variedad = Variedad::create([
            'codigo' => '059',
            'nombre' => 'C85-393',
        ]);
        $variedad = Variedad::create([
            'codigo' => '060',
            'nombre' => 'C86-12',
        ]);
        $variedad = Variedad::create([
            'codigo' => '061',
            'nombre' => 'C85-403',
        ]);
        $variedad = Variedad::create([
            'codigo' => '062',
            'nombre' => 'C86-456',
        ]);
        $variedad = Variedad::create([
            'codigo' => '063',
            'nombre' => 'C86-502',
        ]);
        $variedad = Variedad::create([
            'codigo' => '064',
            'nombre' => 'C86-503',
        ]);
        $variedad = Variedad::create([
            'codigo' => '065',
            'nombre' => 'C86-531',
        ]);
        $variedad = Variedad::create([
            'codigo' => '066',
            'nombre' => 'C86-602',
        ]);
        $variedad = Variedad::create([
            'codigo' => '067',
            'nombre' => 'C88-380',
        ]);
        $variedad = Variedad::create([
            'codigo' => '068',
            'nombre' => 'C88-382',
        ]);
        $variedad = Variedad::create([
            'codigo' => '069',
            'nombre' => 'C89-302',
        ]);
        $variedad = Variedad::create([
            'codigo' => '070',
            'nombre' => 'C91-103',
        ]);
        $variedad = Variedad::create([
            'codigo' => '071',
            'nombre' => 'Ty86-28',
        ]);
        $variedad = Variedad::create([
            'codigo' => '072',
            'nombre' => 'C275-80',
        ]);
        $variedad = Variedad::create([
            'codigo' => '073',
            'nombre' => 'My5778',
        ]);
        $variedad = Variedad::create([
            'codigo' => '074',
            'nombre' => 'H336110',
        ]);
        $variedad = Variedad::create([
            'codigo' => '075',
            'nombre' => 'C227-59',
        ]);
        $variedad = Variedad::create([
            'codigo' => '076',
            'nombre' => 'CB44-52',
        ]);
        $variedad = Variedad::create([
            'codigo' => '077',
            'nombre' => 'Q124',
        ]);
        $variedad = Variedad::create([
            'codigo' => '078',
            'nombre' => 'SP70-1143',
        ]);
        $variedad = Variedad::create([
            'codigo' => '079',
            'nombre' => 'SP70-1143',
        ]);
        $variedad = Variedad::create([
            'codigo' => '080',
            'nombre' => 'SP70-1284',
        ]);
        $variedad = Variedad::create([
            'codigo' => '081',
            'nombre' => 'SP71-1406',
        ]);
        $variedad = Variedad::create([
            'codigo' => '082',
            'nombre' => 'C85-102',
        ]);
        $variedad = Variedad::create([
            'codigo' => '083',
            'nombre' => 'C86-165',
        ]);
        $variedad = Variedad::create([
            'codigo' => '084',
            'nombre' => 'C88-187',
        ]);
        $variedad = Variedad::create([
            'codigo' => '085',
            'nombre' => 'C90-316',
        ]);
        $variedad = Variedad::create([
            'codigo' => '086',
            'nombre' => 'C90-317',
        ]);
        $variedad = Variedad::create([
            'codigo' => '087',
            'nombre' => 'C90-325',
        ]);
        $variedad = Variedad::create([
            'codigo' => '088',
            'nombre' => 'C90-469',
        ]);
        $variedad = Variedad::create([
            'codigo' => '089',
            'nombre' => 'C90-501',
        ]);
        $variedad = Variedad::create([
            'codigo' => '090',
            'nombre' => 'C90-530',
        ]);
        $variedad = Variedad::create([
            'codigo' => '091',
            'nombre' => 'C86-56',
        ]);
        $variedad = Variedad::create([
            'codigo' => '092',
            'nombre' => 'C86-156',
        ]);$variedad = Variedad::create([
            'codigo' => '093',
            'nombre' => 'C86-251',
        ]);
        $variedad = Variedad::create([
            'codigo' => '094',
            'nombre' => 'C86-406',
        ]);
        $variedad = Variedad::create([
            'codigo' => '095',
            'nombre' => 'C88-381',
        ]);
        $variedad = Variedad::create([
            'codigo' => '096',
            'nombre' => 'C88-523',
        ]);
        $variedad = Variedad::create([
            'codigo' => '097',
            'nombre' => 'C89-147',
        ]);
        $variedad = Variedad::create([
            'codigo' => '098',
            'nombre' => 'C89-148',
        ]);
        $variedad = Variedad::create([
            'codigo' => '099',
            'nombre' => 'Otras',
        ]);
        $variedad = Variedad::create([
            'codigo' => '100',
            'nombre' => 'POJ2878(355)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '101',
            'nombre' => 'POJ2878(365)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '102',
            'nombre' => 'Ja60-5(179)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '103',
            'nombre' => 'C87-51(100)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '104',
            'nombre' => 'C87-51(105)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '105',
            'nombre' => 'C87-51(179)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '106',
            'nombre' => 'C236-51(28)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '107',
            'nombre' => 'C236-51(53)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '108',
            'nombre' => 'CP52-43(27)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '109',
            'nombre' => 'POJ2878(112)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '110',
            'nombre' => 'POJ2878(361)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '111',
            'nombre' => 'C137-81(20)',
        ]);
        $variedad = Variedad::create([
            'codigo' => '112',
            'nombre' => 'C89-161',
        ]);
        $variedad = Variedad::create([
            'codigo' => '113',
            'nombre' => 'C89-176',
        ]);
        $variedad = Variedad::create([
            'codigo' => '114',
            'nombre' => 'C89-250',
        ]);
        $variedad = Variedad::create([
            'codigo' => '115',
            'nombre' => 'C90-647',
        ]);
        $variedad = Variedad::create([
            'codigo' => '116',
            'nombre' => 'Q68',
        ]);
        $variedad = Variedad::create([
            'codigo' => '117',
            'nombre' => 'B78505',
        ]);
        $variedad = Variedad::create([
            'codigo' => '118',
            'nombre' => 'C90-105',
        ]);
        $variedad = Variedad::create([
            'codigo' => '119',
            'nombre' => 'C87-252',
        ]);
        $variedad = Variedad::create([
            'codigo' => '120',
            'nombre' => 'C88-356',
        ]);
        $variedad = Variedad::create([
            'codigo' => '121',
            'nombre' => 'C86-403',
        ]);
        $variedad = Variedad::create([
            'codigo' => '122',
            'nombre' => 'C86-554',
        ]);
        $variedad = Variedad::create([
            'codigo' => '123',
            'nombre' => 'C86-226',
        ]);
        $variedad = Variedad::create([
            'codigo' => '124',
            'nombre' => 'RB745433',
        ]);
        $variedad = Variedad::create([
            'codigo' => '125',
            'nombre' => 'C88-556',
        ]);
        $variedad = Variedad::create([
            'codigo' => '126',
            'nombre' => 'C89-372',
        ]);
        $variedad = Variedad::create([
            'codigo' => '127',
            'nombre' => 'C91-115',
        ]);
        $variedad = Variedad::create([
            'codigo' => '128',
            'nombre' => 'C91-356',
        ]);
        $variedad = Variedad::create([
            'codigo' => '129',
            'nombre' => 'C92-203',
        ]);
        $variedad = Variedad::create([
            'codigo' => '130',
            'nombre' => 'C92-325',
        ]);
        $variedad = Variedad::create([
            'codigo' => '131',
            'nombre' => 'C91-367',
        ]);
        $variedad = Variedad::create([
            'codigo' => '132',
            'nombre' => 'C91-367',
        ]);
        $variedad = Variedad::create([
            'codigo' => '133',
            'nombre' => 'C92-514',
        ]);
        $variedad = Variedad::create([
            'codigo' => '134',
            'nombre' => 'C92-524',
        ]);
        $variedad = Variedad::create([
            'codigo' => '135',
            'nombre' => 'C91-522',
        ]);
        $variedad = Variedad::create([
            'codigo' => '136',
            'nombre' => 'C88-553',
        ]);
        $variedad = Variedad::create([
            'codigo' => '137',
            'nombre' => 'C87-635',
        ]);
        $variedad = Variedad::create([
            'codigo' => '138',
            'nombre' => 'C95-416',
        ]);
        $variedad = Variedad::create([
            'codigo' => '139',
            'nombre' => 'C97-445',
        ]);
        

    }
    }
}
