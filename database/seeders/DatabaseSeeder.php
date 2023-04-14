<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\products;
use App\Models\categories;
use App\Models\inventories;
use App\Models\type_user;
use App\Models\usuarios;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Artisan::call('key:generate');
        Schema::disableForeignKeyConstraints();
        $this->call([
            EstadosSeeder::class,
            MunicipiosSeeder::class
        ]);
        Schema::enableForeignKeyConstraints();

        $this->call([
            productsSeeder::class,
            categoriesSeeder::class,
            usuariosSeeder::class,
            type_userSeeder::class,
            inventorySeeder::class,
           
        ]);
            products::factory(10)->create(); 
            categories::factory(10)->create();
            usuarios::factory(10)->create(); 
            type_user::factory(10)->create();
            inventories::factory(10)->create();  
        
    }
}
