<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelolaUsersData = [
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
        ];

        $kelolaMasterSettings = [
            // Pengaturan Akun
            'create.role',
            'edit.role',
            'delete.role',
            'view.role',
            'import.role',
            'export.role',

            'view.permission',
            'create.permission',
            'edit.permission',

            // Pengaturan Karyawan
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

            // Pengaturan Finance
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

            // Pengaturan Managemen Waktu
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
        ];

        foreach (array_merge($kelolaMasterSettings, $kelolaUsersData) as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
