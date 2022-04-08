<?php

namespace App\Console\Commands;

use App\Components\ImportDataClient;
use App\Models\Post;
use Illuminate\Console\Command;

class ImportJsonPlaceHolderCommand extends Command
{
    protected $signature = 'import:jsonplaceholder';
    protected $description = 'Get data from jsonplaceholder';

    public function handle()
    {
        $import = new ImportDataClient();
        $responce = $import->client->request('GET', 'posts');
        $data = json_decode($responce->getBody()->getContents());
        foreach ($data as $item) {
            Post::firstOrCreate([
                'title' => $item->title,
            ],[
                'title' => $item->title,
                'content' => $item->body,
                'category_id' => 2
            ]);
        }
    }
}
