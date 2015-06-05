<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

       // $this->call('ClasseTableSeeder');
        //$this->command->info('Classe table seeded!');

        //$this->call('StudentiTableSeeder');
        //$this->command->info('Studenti table seeded!');

        //$this->call('ReferenteTableSeeder');
        //$this->command->info('Referente table seeded!');
    
       // $this->call('TutorScuolaTableSeeder');
        $this->command->info('TutorScuola table seeded!');

        //$this->call('RappresentanteLegaleTableSeeder');
        //$this->command->info('RappresentanteLegale table seeded!');

        //$this->call('TutorAziendaTableSeeder');
        //$this->command->info('TutorAzienda table seeded!');

        //$this->call('AziendaTableSeeder');
        //$this->command->info('Azienda table seeded!');

       // $this->call('StageTableSeeder');
        //$this->command->info('Stage table seeded!');

        //$this->call('StudentiStageTableSeeder');
        //$this->command->info('StudentiStage table seeded!'); 

        //$this->call('ProgettoFormativoTableSeeder');
       // $this->command->info('ProgettoFormativo table seeded!');

        $this->call('ConfigTableSeeder');
        $this->command->info('Config table seeded!');

        
        $this->call('UsersTableSeeder');
        $this->command->info('Users table seeded!');
    }

}

class ClasseTableSeeder extends Seeder {

    public function run()
    {
        Classe::create(['classe' => '5', 'articolazione' => 'informatica', 'sezione' => 'B']);
        Classe::create(['classe' => '4', 'articolazione' => 'elettronica', 'sezione' => 'A']);
    }

}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create(['username' => 'segreteria', 'password' => Hash::make('badonistage')]);
        User::create(['username' => 'amministrazione', 'password' => Hash::make('badonistageamministrazione')]);
    }

}

class StudentiTableSeeder extends Seeder {

    public function run()
    {
        Studente::create(['nome' => 'Alessandro', 'cognome' => 'Caverio', 'CF' => 'PMOMRS', 'dataNascita' => '1996/06/13', 'comuneNascita' => 'Premana', 'indirizzo' => 'Risorgimento, 57a', 'cap' => '23834', 'comuneResidenza' => 'Premana', 'articolazione' => 'Informatica','classe_id' => '1']);
        Studente::create(['nome' => 'Mario', 'cognome' => 'Rossi', 'CF' => 'HKBJVYIHK', 'dataNascita' => '1512/10/12', 'comuneNascita' => 'Lecco', 'indirizzo' => 'Mazzini,3', 'cap' => '23854', 'comuneResidenza' => 'Lecco', 'articolazione' => 'Informatica', 'classe_id' => '2']);
        Studente::create(['nome' => 'Marco', 'cognome' => 'Verdi', 'CF' => 'sffrsfs', 'dataNascita' => '1512/10/12', 'comuneNascita' => 'Lecco', 'indirizzo' => 'Mazzini,3', 'cap' => '23854', 'comuneResidenza' => 'Lecco', 'articolazione' => 'Informatica', 'classe_id' => '1']);
        Studente::create(['nome' => 'Moris', 'cognome' => 'Nero', 'CF' => 'sffesrf', 'dataNascita' => '1512/10/12', 'comuneNascita' => 'Lecco', 'indirizzo' => 'Mazzini,3', 'cap' => '23854', 'comuneResidenza' => 'Lecco', 'articolazione' => 'Informatica', 'classe_id' => '1']);
        Studente::create(['nome' => 'John', 'cognome' => 'Red', 'CF' => 'gsrfsfe', 'dataNascita' => '1512/10/12', 'comuneNascita' => 'Lecco', 'indirizzo' => 'Mazzini,3', 'cap' => '23854', 'comuneResidenza' => 'Lecco', 'articolazione' => 'Informatica', 'classe_id' => '2']);
    }

}

class StageTableSeeder extends Seeder {

    public function run()
    {
        Stage::create(['descrizione' => 'Di Prova', 'azienda_id' => '1', 'tutor_scuola_id' => '1']);
        Stage::create(['descrizione' => 'Altro Esempio', 'azienda_id' => '2', 'tutor_scuola_id' => '2']);
    }

}


class StudentiStageTableSeeder extends Seeder {

    public function run()
    {
        PartecipazioneStage::create(['studente_id' => '1', 'stage_id' => '1']);
        PartecipazioneStage::create(['studente_id' => '2', 'stage_id' => '1']);
        PartecipazioneStage::create(['studente_id' => '1', 'stage_id' => '2']);
    }

}

class AziendaTableSeeder extends Seeder {

    public function run()
    {
        Azienda::create(['pIva' => '003254788911', 'denominazione' => 'Prosciutto SPA', 'area' => 'Informatica', 'associazione' => 'confindustria', 'settore' => 'Informatica', 'mensa' => 'Pastasciutta', 'descrizione' => 'Azienda informatica che vende prosiutto', 'sedeLegale' => 'Morirai', 'citta' => 'Premana', 'provincia' => 'LC', 'cap' => '58468', 'referente_id' => '1', 'rappresentanteLegale_id' => '1']);
        Azienda::create(['pIva' => '2587413698', 'denominazione' => 'Melone SPA', 'area' => 'Meccanica', 'associazione' => 'Coldiretti', 'settore' => 'Meccanica', 'mensa' => 'Risotto', 'descrizione' => 'Azienda meccanica che vende meloni', 'sedeLegale' => 'Caltanissetta', 'citta' => 'Olginate', 'provincia' => 'LC', 'cap' => '87456', 'referente_id' => '2', 'rappresentanteLegale_id' => '2']);

    }

}

class TutorAziendaTableSeeder extends Seeder {

    public function run()
    {
        TutorAzienda::create(['nome' => 'Walter', 'cognome' => 'Rossi', 'telefono' => '25742854', 'cellulare' => '035478921', 'email' => 'sala@libero.iuty']);
        TutorAzienda::create(['nome' => 'Matteo', 'cognome' => 'Arrigoni', 'telefono' => '311453453', 'cellulare' => '03121311', 'email' => 'felicello@libero.iuty']);    
    }
}


class ReferenteTableSeeder extends Seeder {

    public function run()
    {
        Referente::create(['nome' => 'Luca', 'cognome' => 'Figini', 'telefono' => '533564', 'cellulare' => '63153155', 'email' => 'x@figini.it']);
        Referente::create(['nome' => 'Giovanni', 'cognome' => 'Sala', 'telefono' => '35343456', 'cellulare' => '154235', 'email' => 'sala@libero.iuty']);    
    }
}


class TutorScuolaTableSeeder extends Seeder {

    public function run()
    {
        TutorScuola::create(['nome' => 'Paolo', 'cognome' => 'Achler', 'telefono' => '533564', 'cellulare' => '63153155', 'email' => 'paolo@figini.it']);
        TutorScuola::create(['nome' => 'Carmelo Antonio', 'cognome' => 'Burgio', 'telefono' => '35343456', 'cellulare' => '154235', 'email' => 'burgio@libero.iuty']);    
    }
}


class RappresentanteLegaleTableSeeder extends Seeder {

    public function run()
    {
        RappresentanteLegale::create(['cf' => 'fs45ffc54es', 'nome' => 'Luca', 'cognome' => 'Corti', 'dataN' => '02/10/15', 'luogoN' => 'Lecco', 'telefono' => '533564', 'cellulare' => '63153155', 'email' => 'x@gmail.it']);
        RappresentanteLegale::create(['cf' => 'vx3f5v13x5f', 'nome' => 'Giovanni', 'cognome' => 'Lunghi', 'dataN' => '25/01/15', 'luogoN' => 'Milano', 'telefono' => '35343456', 'cellulare' => '154235', 'email' => 'lunhg@libero.iuty']);    
    }
}



class ProgettoFormativoTableSeeder extends Seeder {

    public function run()
    {
        ProgettoFormativo::create(['dataStipula' => '02/10/15']);
        ProgettoFormativo::create(['dataStipula' => '12/11/15']);    
    }
}

class ConfigTableSeeder extends Seeder {

    public function run()
    {
        AppConfig::create(['chiave' => 'dataInizio1', "valore" => '2015-06-15']);
        AppConfig::create(['chiave' => 'dataFine1', "valore" => '2015-07-15']);

        AppConfig::create(['chiave' => 'dataInizio2', "valore" => '2015-09-15']);
        AppConfig::create(['chiave' => 'dataFine2', "valore" => '2015-10-15']);

        AppConfig::create(['chiave' => 'dataInizio3', "valore" => '2016-04-15']);
        AppConfig::create(['chiave' => 'dataFine3', "valore" => '2016-05-15']);
    }
}
