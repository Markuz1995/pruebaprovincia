<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ciudad;
use App\Models\Provincia;
use GuzzleHttp\Promise\Create;

class CreateCity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:city {ciudad} {provincia}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear una nueva ciudad';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $ciudad = $this->argument('ciudad');
        $provincia_descripcion = $this->argument('provincia');

        $provincia = Provincia::create([
            'descripcion' => $provincia_descripcion
        ]);

        Ciudad::create([
            'descripcion' => $ciudad,
            'provincia_id' => $provincia->id,
        ]);

        $this->info('Ciudad creada.');
    }
}
