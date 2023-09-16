<?php

declare(strict_types=1);

use Hyperf\Database\Seeders\Seeder;
use App\Model\Link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <=1000; $i++) {
            var_dump($i); 
            $link = new Link([
                'title' => 'Luiz Fernando website',
                'alias'=> dechex(time() + $i),
                'url' => 'https://github.com/luiz-justino',
                'expires_in' => (new DateTime())->add(new DateInterval('P2D'))->format(
                    DateTimeInterface::W3C)
            ]);
            $link->save();
        }
    }
}
