<?php

namespace App\Console\Commands;

use App\Models\Competition;
use App\Models\Recipe;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CompetitionImageFixerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'competition:image-fixer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        // URL: https://hidupbanyakrasa.com/requirement/images/uploads/recipes/05_CheeseCake.jpg;

        $competitions = Competition::all();

        foreach($competitions as $competition)
        {
            $this->info('Fixing Competition Image');
            $path = Str::afterLast($competition->image, 'com/assets');
            $this->download_image($competition, $path);
            $this->info('Fixing Competition Image | End');
        }
        return Command::SUCCESS;
    }

    protected function download_image(Competition $competition, $path)
    {
        $competition->image = $path;
        $competition->save();
    }
}
