<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductImageFixerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:image-fixer';

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
        $products = Product::where('status', 1)->get();

        foreach($products as $product)
        {
            $this->download_image($product);
        }

        return Command::SUCCESS;
    }

    /**
     * Download image and save it to download folder in storage folder.
     *
     * @param  string $url
     */
    protected function download_image(Product $product)
    {

        $product_slug = $product->id . "-" . $product->name;
        $product_slug = Str::slug($product_slug, "_");

        $product_base_url = 'https://hidupbanyakrasa.com/requirement/images/object/';

        // IMAGE PRODUCT PROCESSOR
        $imageProductUrl = $product_base_url . $product->image_product;
        $imageProductExt = Str::afterLast($product->image_product, '.');
        $imageProductfileName = "image_product_$product_slug.$imageProductExt";

        try {

            if (!Storage::disk('local_download')->exists($imageProductfileName)) {
                Http::sink(Storage::disk('local_download')->path($imageProductfileName))
                    ->get($imageProductUrl);
            }

            $this->info('Product download successfully');

        } catch (\Throwable $th) {
            //throw $th;

            $this->error($th->getMessage());
        }

        try {
            Storage::copy(
                "downloads/" . $imageProductfileName,
                "public/product_images/" . $imageProductfileName
            );

            $this->info('Product copy successfully & Saved To dabasae');
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
        }

        // IMAGE TEXT PROCESSOR
        $imageTextUrl = $product_base_url . $product->image_text;
        $imageTextExt = Str::afterLast($product->image_text, '.');
        $imageTextfileName = "image_text_$product_slug.$imageTextExt";

        try {

            if (!Storage::disk('local_download')->exists($imageTextfileName)) {
                Http::sink(Storage::disk('local_download')->path($imageTextfileName))
                    ->get($imageTextUrl);
            }

            $this->info('Text download successfully');

        } catch (\Throwable $th) {

            $this->error($th->getMessage());
        }

        try {
            Storage::copy(
                "downloads/" . $imageTextfileName,
                "public/text_product_images/" . $imageTextfileName
            );

            $this->info('Text copy successfully & Saved To dabasae');
        }catch (\Throwable $th) {
            $this->error($th->getMessage());
        }


        // DATABASE UPDATE
        $product->image_product = "product_images/" . $imageProductfileName;
        $product->image_text = "text_product_images/" . $imageTextfileName;
        $product->save();
    }
}
