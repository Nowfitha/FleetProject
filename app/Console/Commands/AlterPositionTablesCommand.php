<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Tobuli\Entities\Database;
use Tobuli\Services\DatabaseService;

class AlterPositionTablesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'positions:tables_alter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Performs structural changes on the tables which have bloated structure';

    /**
     * @var DatabaseService
     */
    protected $dbService;

    public function __construct()
    {
        parent::__construct();

        $this->dbService = new DatabaseService();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $databases = $this->dbService->getDatabases();

        /** @var Database $database */
        foreach ($databases as $database) {
            $this->output->writeln('Database ' . $database->host);

            $this->processDatabase($database);

            $this->output->newLine();
        }

        $this->output->success('Done!');

        return 0;
    }

    private function processDatabase(Database $database)
    {
        $dbName = $this->dbService->getDatabaseName($database->id);

        $query = $database->getQuery()
            ->from('information_schema.statistics')
            ->where('table_schema', $database->database)
            ->where('table_name', 'LIKE', 'positions_%')
            ->where('column_name', 'device_id');

        $itemsCount = (clone $query)
            ->selectRaw('COUNT(DISTINCT table_name, index_name) AS ct')
            ->first()
            ->ct;

        if ($itemsCount === 0) {
            $this->output->writeln('Nothing to update.');

            return;
        }

        $builder = DB::connection($dbName)->getSchemaBuilder();

        $progressBar = $this->output->createProgressBar($itemsCount);

        $items = (clone $query)
            ->select(['table_name'])
            ->distinct()
            ->cursor();

        foreach ($items as $item) {
            $builder->table($item->table_name, function (Blueprint $table) use ($item, $builder) {
                if ($builder->hasColumn($item->table_name, 'device_id')) {
                    $table->dropColumn('device_id');
                }

                if ($builder->hasColumn($item->table_name, 'power')) {
                    $table->dropColumn('power');
                }
            });

            $progressBar->advance();
        }
    }
}
