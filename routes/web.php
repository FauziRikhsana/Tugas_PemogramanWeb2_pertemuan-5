<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Sistem Jadwal Bus',
        'appName' => 'BusSchedule',
        'heading' => 'Sistem Informasi Jadwal Bus',
        'description' => 'Website untuk melihat jadwal keberangkatan bus.',

        'features' => [
            [
                'title' => 'Jadwal Real-time',
                'desc' => 'Update jadwal bus terbaru'
            ],
            [
                'title' => 'Pencarian Mudah',
                'desc' => 'Cari berdasarkan tujuan'
            ],
            [
                'title' => 'Informasi Lengkap',
                'desc' => 'Detail perjalanan tersedia'
            ]
        ],

        'schedules' => [
            ['tujuan' => 'Bandung - Jakarta', 'jam' => '08:00', 'jenis' => 'Eksekutif'],
            ['tujuan' => 'Bandung - Garut', 'jam' => '09:30', 'jenis' => 'Ekonomi'],
            ['tujuan' => 'Bandung - Cirebon', 'jam' => '11:00', 'jenis' => 'Bisnis'],
        ]
    ]);
});