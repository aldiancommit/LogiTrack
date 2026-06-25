<?php

namespace Database\Seeders;

use App\Models\AsetGudang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AsetGudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengosongkan data lama di tabel
        AsetGudang::truncate();

        // 50 Data Barang Aset yang Realistis
        $barangList = [
            'Laptop Asus Zenbook 14', 'Laptop Lenovo ThinkPad L13', 'Laptop HP Pavilion 15', 'MacBook Air M2 13"', 'MacBook Pro M3 14"',
            'Monitor Dell 24 Inch IPS', 'Monitor LG UltraWide 29 Inch', 'Keyboard Logitech MX Keys', 'Mouse Razer DeathAdder V3',
            'Router Cisco ISR 4331', 'Switch Netgear 24-Port Gigabit', 'UPS APC Back-UPS 700VA', 'Printer Epson L3210 All-in-One', 'Scanner Fujitsu ScanSnap',
            'External HDD WD My Passport 2TB', 'External SSD Samsung T7 1TB', 'Flashdisk Sandisk 64GB USB 3.0', 'Projector Epson EB-X06',
            'Webcam Logitech C922 Pro', 'Headset Jabra Evolve 20', 'Kabel LAN Belden Cat6 305m', 'Server Dell PowerEdge R740',
            'NAS Synology DiskStation DS220+', 'IP Phone Grandstream GXP1625', 'Access Point Ubiquiti UniFi U6 Lite', 'Smart TV Samsung 43 Inch',
            'iPad Air 5th Gen 64GB', 'Tablet Samsung Galaxy Tab S9', 'Barcode Scanner Honeywell Voyager', 'Thermal Printer Zebra ZD220',
            'Kamera DSLR Canon EOS 1500D', 'Tripod Manfrotto Compact', 'Microphone Rode Wireless Go II', 'SFP Transceiver Cisco 10G',
            'Crimping Tool AMP Commscope', 'LAN Tester Digital Noyafa', 'Rack Server 20U Wallmount', 'PDU Rack APC 8 Outlet', 'Kabel HDMI Vention 5m',
            'OTG Adapter Type-C to USB-A', 'Hub USB-C Ugreen 5-in-1', 'Kabel Power Server C13-C14 1.8m', 'Converter HDMI to VGA',
            'Kipas Exhaust Server 12cm', 'Baterai UPS 12V 7.2Ah Yuasa', 'Obeng Set Krisbow 32-in-1', 'Tang Potong Stanley 6"',
            'Kabel Ties Nylon 20cm (100pcs)', 'Label Maker Brother P-Touch H110', 'Papan Tulis Whiteboard 90x120cm'
        ];

        foreach ($barangList as $barang) {
            AsetGudang::create([
                'nama_barang' => $barang,
                'kode_serial' => 'SN-' . strtoupper(Str::random(3)) . rand(100000, 999999),
                'kondisi'     => rand(0, 1) ? 'bagus' : 'bekas',
                'jumlah_stok' => rand(1, 50),
            ]);
        }
    }
}
