<?php

namespace Database\Seeders;

use App\Http\Controllers\Role;
use App\Models\Roles;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Roles::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'SuperAdmin'],
            ['name' => 'Sales'],
            ['name' => 'Purchase'],
            ['name' => 'Manager'],
        ];

        foreach ($data as $value) {
            Roles::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
