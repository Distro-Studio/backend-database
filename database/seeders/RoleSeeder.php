<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $created_at = Carbon::now()->subDays(rand(0, 365));
        $updated_at = Carbon::now();

        $roleSuperAdmin = Role::create([
            'name' => 'Super Admin',
            'deskripsi' => 'drew between importance against attention cookies change tool rhythm merely twelve draw remember pipe handsome policeman mixture hay industrial birthday front himself iron declared',
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ]);
        
        $roleSuperAdmin->givePermissionTo([
            // Kelola Users Data Karyawan
            'create.users',
            'edit.users',
            'delete.users',
            'view.users',
            'import.users',
            'export.users',

            'create.dataKaryawan',
            'edit.dataKaryawan',
            'delete.dataKaryawan',
            'view.dataKaryawan',
            'import.dataKaryawan',
            'export.dataKaryawan',

            // Akun
            'create.role',
            'edit.role',
            'delete.role',
            'view.role',
            'import.role',
            'export.role',

            'view.permission',
            'create.permission',
            'edit.permission',

            // Karyawan
            'create.unitkerja',
            'edit.unitkerja',
            'delete.unitkerja',
            'view.unitkerja',
            'import.unitkerja',
            'export.unitkerja',

            'create.jabatan',
            'edit.jabatan',
            'delete.jabatan',
            'view.jabatan',
            'import.jabatan',
            'export.jabatan',

            'create.kompetensi',
            'edit.kompetensi',
            'delete.kompetensi',
            'view.kompetensi',
            'import.kompetensi',
            'export.kompetensi',

            'create.kelompokgaji',
            'edit.kelompokgaji',
            'delete.kelompokgaji',
            'view.kelompokgaji',
            'import.kelompokgaji',
            'export.kelompokgaji',

            // Finance
            'create.premi',
            'edit.premi',
            'delete.premi',
            'view.premi',
            'import.premi',
            'export.premi',

            'create.ter21',
            'edit.ter21',
            'delete.ter21',
            'view.ter21',
            'import.ter21',
            'export.ter21',

            'create.jadwalPenggajian',
            'reset.jadwalPenggajian',

            'create.THR',
            'edit.THR',
            'delete.THR',
            'view.THR',
            'import.THR',
            'export.THR',

            // Managemen Waktu
            'create.shift',
            'edit.shift',
            'delete.shift',
            'view.shift',
            'import.shift',
            'export.shift',

            'create.hariLibur',
            'edit.hariLibur',
            'delete.hariLibur',
            'view.hariLibur',
            'import.hariLibur',
            'export.hariLibur',

            'create.cuti',
            'edit.cuti',
            'delete.cuti',
            'view.cuti',
            'import.cuti',
            'export.cuti',
        ]);
    }
}
