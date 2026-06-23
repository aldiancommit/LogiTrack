<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function getMenuData()
    {
        // Hanya menyisakan satu grup menu utama untuk LogiTrack
        $menuGroups = [
            [
                'title' => 'MENU UTAMA',
                'items' => [
                    [
                        'icon' => 'grid-icon',
                        'name' => 'LogiTrack Aset',
                        'subItems' => [
                            ['name' => 'Daftar Aset Gudang', 'path' => '/'],
                            ['name' => 'Tambah Aset Baru', 'path' => '/asset/create'],
                        ],
                    ],
                ],
            ],
        ];

        return view('components.sidebar', compact('menuGroups'));
    }
}