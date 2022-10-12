<?php

use Illuminate\Database\Seeder;
use App\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Napoli',
                'orario_di_partenza' => '2022-10-12 14:30',
                'orario_di_arrivo' => '2022-10-12 20:10',
                'codice_treno' => 65145496,
                'numero_carrozze' => 25,
                'in_orario' => 1,
                'cancellato' => 0
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Venezia',
                'orario_di_partenza' => '2022-10-13 08:30',
                'orario_di_arrivo' => '2022-10-13 10:30',
                'codice_treno' => 551496,
                'numero_carrozze' => 10,
                'in_orario' => 1,
                'cancellato' => 0
            ],
            [
                'azienda' => 'Trenord',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Mantova',
                'orario_di_partenza' => '2022-10-12 11:20',
                'orario_di_arrivo' => '2022-10-12 13:20',
                'codice_treno' => 15141196,
                'numero_carrozze' => 8,
                'in_orario' => 1,
                'cancellato' => 0
            ],
            [
                'azienda' => 'Trenord',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Bologna',
                'orario_di_partenza' => '2022-10-13 19:15',
                'orario_di_arrivo' => '2022-10-13 23:20',
                'codice_treno' => 1441196,
                'numero_carrozze' => 20,
                'in_orario' => 1,
                'cancellato' => 0
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Cremona',
                'orario_di_partenza' => '2022-10-12 16:10',
                'orario_di_arrivo' => '2022-10-12 17:20',
                'codice_treno' => 14119886,
                'numero_carrozze' => 20,
                'in_orario' => 1,
                'cancellato' => 0
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];

            $newTrain->save();
        }
    }
}
