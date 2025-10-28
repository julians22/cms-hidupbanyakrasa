<?php

namespace App\Console\Commands;

use App\Models\Recipe;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RecipeImageFixerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'recipe:image-fixer';

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

        $recipes = Recipe::all();

        foreach($recipes as $recipe)
        {
            $this->info('Fixing Recipe Image');
            $this->download_image($recipe);
            $this->info('Fixing Recipe Image | End');
        }
        return Command::SUCCESS;
    }

    protected function download_image(Recipe $recipe)
    {
        $imageUrl = "https://hidupbanyakrasa.com/requirement/images/uploads/recipes/" . $recipe->photo;

        try {

            Http::sink(Storage::disk('public')->path($recipe->photo))
                ->get($imageUrl);

            $this->info('Recipe download successfully');

        } catch (\Throwable $th) {

            $this->error($th->getMessage());
        }

    }
}
