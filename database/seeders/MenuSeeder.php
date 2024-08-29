<?php

namespace Database\Seeders;

use App\Models\Configuration\Menu;
use App\Traits\HasMenuPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    use HasMenuPermission;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         *  @var Menu $mm
         */
        $mm = Menu::firstOrCreate(['url' => 'konfigurasi'],['name' => 'Konfigurasi', 'category' => 'MASTER DATA', 'icon' => 'settings']);
        $this->attachMenupermission($mm, ['read'], ['superadmin']);

        $sm = $mm->subMenus()->create(['name' => 'Menu', 'url' => $mm->url. '/menu', 'category' => $mm->category ]);
        $this->attachMenupermission($sm, null, ['superadmin']);
    }
}
