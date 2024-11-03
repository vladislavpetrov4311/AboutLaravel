<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Imports\ExcelDataImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importData:excel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import test data excel';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Excel::import(new ExcelDataImport() , 'public\Excel\test.xlsx');
    }
}
