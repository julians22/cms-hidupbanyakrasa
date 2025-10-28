<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ArticleImageFixerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:image-fixer';

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

        $articles = Article::tvc()->get();

        foreach ($articles as $article) {
            $this->info('Fixing Article Image');
            $path = Str::afterLast($article->image_cover, 'com/assets');
            $this->updateArticle($article, $path);
            $this->info('Fixing Article Image | End');
        }

        return Command::SUCCESS;
    }

    protected function updateArticle(Article $article, $path)
    {
        $article->image_source = $path;
        $article->save();
    }
}
