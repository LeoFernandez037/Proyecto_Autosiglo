<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateModels extends Command
{
    protected $signature = 'generate:models';
    protected $description = 'Generate models for all tables in the database';

    public function handle()
    {
        // Obtiene todas las tablas de la base de datos
        $tables = DB::select("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE'");

        foreach ($tables as $table) {
            $tableName = $table->TABLE_NAME; // Obtiene el nombre de la tabla
            $modelName = ucfirst(Str::camel($tableName)); // Genera un nombre de modelo a partir del nombre de la tabla

            $modelTemplate = "<?php\n\nnamespace App\Models;\n\nuse Illuminate\Database\Eloquent\Model;\n\nclass $modelName extends Model\n{\n    protected \$table = '$tableName';\n}\n";

            // Guarda el modelo en el directorio de modelos
            File::put(app_path("Models/$modelName.php"), $modelTemplate);
        }

        $this->info('Models generated successfully.');
    }
}
