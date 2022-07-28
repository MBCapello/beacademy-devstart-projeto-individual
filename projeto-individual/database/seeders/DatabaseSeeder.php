<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Address::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'admin' => true,
            'phone' => '(00) 00000-0000',
            'birth_date' => '00/00/0000',
            'cpf' => '000.000.000-00',
            'password' => 'admin@test',

        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Peter',
            'sex' =>'Macho',
            'type' =>'Cachorro',
            'birth_date' =>'23/01/2022',
            'image' => 'https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313_960_720.jpg',
            'bio'=> 'Brincalhão, adestrado, ótimo para crianças, grande porte quando adulto',
            'available' => true
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Simba',
            'sex' =>'Macho',
            'type' =>'Cachorro',
            'birth_date' =>'30/07/2018',
            'image' =>'https://cdn.pixabay.com/photo/2019/11/07/08/40/puppy-4608266_960_720.jpg',
            'bio'=> 'Animado e companheiro, sabe truques e banstante obediente',
            'available' => true
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Zion',
            'sex' =>'Macho',
            'type' =>'Cachorro',
            'birth_date' =>'02/08/2016',
            'image' => 'https://cdn.pixabay.com/photo/2016/11/29/11/26/dog-1869167_960_720.jpg',
            'bio'=> 'Carinhoso e amigável, esperando um novo lar para chamar de seu ',
            'available' => true
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Mel',
            'sex' =>'Fêmea',
            'type' =>'Cachorro',
            'birth_date' =>'11/04/2017',
            'image' =>'https://cdn.pixabay.com/photo/2017/09/09/19/45/dog-2733224_960_720.jpg',
            'bio'=> 'Dócil e brincalhona esperando uma nova família',
            'available' => true
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Dandara',
            'sex' =>'Fêmea',
            'type' =>'Cachorro',
            'birth_date' =>'02/02/2019',
            'image' =>'https://cdn.pixabay.com/photo/2010/12/13/09/56/dachshund-1920_960_720.jpg',
            'bio'=> 'Esperta e corajosa, querendo um cantinho pra chamar de seu.',
            'available' => true
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Loira',
            'sex' =>'Fêmea',
            'type' =>'Gato',
            'birth_date' =>'10/07/2021',
            'image' => 'https://cdn.pixabay.com/photo/2015/11/16/22/14/cat-1046544_960_720.jpg',
            'bio'=> 'Manhosa e preguiçosa, o nome dela poderia ser segunda-feira.',
            'available' => true
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Thomas',
            'sex' =>'Macho',
            'type' =>'Gato',
            'birth_date' =>'05/05/2022',
            'image' => 'https://cdn.pixabay.com/photo/2017/07/25/01/22/cat-2536662_960_720.jpg',
            'bio'=> 'Um filhotinho super brincalhão para chamar de seu.',
            'available' => true
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Zoe',
            'sex' =>'Fêmea',
            'type' =>'Gato',
            'birth_date' =>'08/01/2022',
            'image' => 'https://cdn.pixabay.com/photo/2016/11/29/01/10/kitten-1866475_960_720.jpg',
            'bio'=> 'Caçadora nata e cheia de energia, precisa de uuma família para brincar com ela.',
            'available' => true
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Frajola',
            'sex' =>'Macho',
            'type' =>'Gato',
            'birth_date' =>'05/12/2018',
            'image' => 'https://cdn.pixabay.com/photo/2018/10/13/20/25/cat-3745065_960_720.jpg',
            'bio'=> 'Frajola ama um cafuné e um ótimo parceiro para sonecas.',
            'available' => true
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Lua',
            'sex' =>'Fêmea',
            'type' =>'Gato',
            'birth_date' =>'29/03/2020',
            'image' =>'https://cdn.pixabay.com/photo/2017/03/27/14/09/black-cat-2178983_960_720.jpg',
            'bio'=> 'Gatos pretos não dão azar é só amor.',
            'available' => true
        ]);

    }
}
