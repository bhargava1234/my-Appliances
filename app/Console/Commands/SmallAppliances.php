<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Crawler\SmallAppliancesClass;
class SmallAppliances extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:smallAppliances';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $pricesClass = new SmallAppliancesClass();
		$prices = $pricesClass->parseProductList();
	    $this->info('Done!');
    }
}
