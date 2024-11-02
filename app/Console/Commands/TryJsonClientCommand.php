<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;

class TryJsonClientCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:jsonClient';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import json data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = new \GuzzleHttp\Client(['base_uri' => 'https://jsonplaceholder.typicode.com/' , 'verify' => false]);
        $response = $client->request('GET', 'posts');

        $data = json_decode($response->getBody()->getContents());
        foreach($data as $item) {
            Post::Create([
                'title' => $item->title,
                'post' => $item->body
            ]);
        }
    }
}
