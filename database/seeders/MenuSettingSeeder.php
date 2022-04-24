<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_settings')->insert([
        
        [
            'menu_setting_id'           	=> '1',
            'menu_setting_name'         	=> 'Beranda',
            'menu_setting_url'     			=> '#',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'         	=> '1',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '1',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '2',
            'menu_setting_name'         	=> 'Tentang STTB',
            'menu_setting_url'     			=> '#',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'         	=> '1',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '2',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '3',
            'menu_setting_name'         	=> 'Akademik',
            'menu_setting_url'     			=> '#',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'         	=> '1',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '3',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '4',
            'menu_setting_name'         	=> 'Pendaftaran',
            'menu_setting_url'     			=> '#',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'         	=> '1',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '4',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '5',
            'menu_setting_name'         	=> 'Mahasiswa',
            'menu_setting_url'     			=> '#',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'         	=> '1',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '5',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '6',
            'menu_setting_name'         	=> 'Program Studi',
            'menu_setting_url'     			=> '#',
            'menu_parent_setting_id'        => '3',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '1',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '7',
            'menu_setting_name'         	=> 'Sejarah',
            'menu_setting_url'     			=> 'sejarah',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '1',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '8',
            'menu_setting_name'         	=> 'Identitas',
            'menu_setting_url'     			=> 'identitas',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '2',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '9',
            'menu_setting_name'         	=> 'Visi & Misi',
            'menu_setting_url'     			=> 'visi-misi',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '3',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '10',
            'menu_setting_name'         	=> 'Struktur Organisasi',
            'menu_setting_url'     			=> 'struktur-organisasi',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '4',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '11',
            'menu_setting_name'         	=> 'Fasilitas dan Layanan',
            'menu_setting_url'     			=> 'fasilitas-layanan',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '5',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '12',
            'menu_setting_name'         	=> 'Berita',
            'menu_setting_url'     			=> 'berita',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '6',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '13',
            'menu_setting_name'         	=> 'Akreditasi',
            'menu_setting_url'     			=> 'akreditasi',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '7',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '14',
            'menu_setting_name'         	=> 'Kerjasama',
            'menu_setting_url'     			=> 'kerjasama',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '8',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '15',
            'menu_setting_name'         	=> 'Capaian Institusi',
            'menu_setting_url'     			=> 'capaian-institusi',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '9',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '16',
            'menu_setting_name'         	=> 'Unduh Dokumen',
            'menu_setting_url'     			=> 'unduh-dokumen',
            'menu_parent_setting_id'        => '2',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '10',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '17',
            'menu_setting_name'         	=> 'Teknik Industri',
            'menu_setting_url'     			=> 'teknik-industri',
            'menu_parent_setting_id'        => '6',
            'menu_setting_level'         	=> '3',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '1',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '18',
            'menu_setting_name'         	=> 'Teknik Informatika',
            'menu_setting_url'     			=> 'teknik-informatika',
            'menu_parent_setting_id'        => '6',
            'menu_setting_level'         	=> '3',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '2',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '19',
            'menu_setting_name'         	=> 'Desain Komunikasi Visual',
            'menu_setting_url'     			=> 'desain-komunikasi-visual',
            'menu_parent_setting_id'        => '6',
            'menu_setting_level'         	=> '3',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '3',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '20',
            'menu_setting_name'         	=> 'Bisnis Digital',
            'menu_setting_url'     			=> 'bisnis-digital',
            'menu_parent_setting_id'        => '6',
            'menu_setting_level'         	=> '3',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '4',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '21',
            'menu_setting_name'         	=> 'Jadwal Seleksi',
            'menu_setting_url'     			=> 'jadwal-seleksi',
            'menu_parent_setting_id'        => '4',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '1',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '22',
            'menu_setting_name'         	=> 'Pendaftaran Online',
            'menu_setting_url'     			=> 'pendaftaran-online',
            'menu_parent_setting_id'        => '4',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '2',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '23',
            'menu_setting_name'         	=> 'Beasiswa',
            'menu_setting_url'     			=> 'beasiswa',
            'menu_parent_setting_id'        => '4',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '3',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '24',
            'menu_setting_name'         	=> 'Biaya Pendidikan',
            'menu_setting_url'     			=> 'biaya-pendidikan',
            'menu_parent_setting_id'        => '4',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '4',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '25',
            'menu_setting_name'         	=> 'Organisasi Mahasiswa',
            'menu_setting_url'     			=> 'organisasi-mahasiswa',
            'menu_parent_setting_id'        => '5',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '1',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '26',
            'menu_setting_name'         	=> 'Prestasi',
            'menu_setting_url'     			=> 'prestasi',
            'menu_parent_setting_id'        => '5',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '2',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '27',
            'menu_setting_name'         	=> 'Kalendar Akademik',
            'menu_setting_url'     			=> 'kalendar-akademik',
            'menu_parent_setting_id'        => '5',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '3',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'           	=> '28',
            'menu_setting_name'         	=> 'Galeri Wisuda',
            'menu_setting_url'     			=> 'galeri-wisuda',
            'menu_parent_setting_id'        => '5',
            'menu_setting_level'         	=> '2',
            'menu_setting_link_eksternal'   => '0',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '4',
            'created_by'					=> '1',
            'created_at'        			=> date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '29',
            'menu_setting_name'             => 'Lokasi Kampus',
            'menu_setting_url'              => '#',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '6',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '30',
            'menu_setting_name'             => 'Kampus Soekarno Hatta',
            'menu_setting_url'              => 'kampus-soekarno-hatta',
            'menu_parent_setting_id'        => '29',
            'menu_setting_level'            => '2',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '1',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '31',
            'menu_setting_name'             => 'Kampus Baleendah',
            'menu_setting_url'              => 'kampus-baleendah',
            'menu_parent_setting_id'        => '29',
            'menu_setting_level'            => '2',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '2',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '32',
            'menu_setting_name'             => 'Tautan Cepat',
            'menu_setting_url'              => '#',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '7',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '33',
            'menu_setting_name'             => 'Perpustakaan',
            'menu_setting_url'              => 'perpustakaan',
            'menu_parent_setting_id'        => '32',
            'menu_setting_level'            => '2',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '1',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '34',
            'menu_setting_name'             => 'Penerimaan Mahasiswa Baru',
            'menu_setting_url'              => 'penerimaan-mahasiswa-baru',
            'menu_parent_setting_id'        => '32',
            'menu_setting_level'            => '2',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '2',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '35',
            'menu_setting_name'             => 'Daftar Sekarang',
            'menu_setting_url'              => 'daftar-sekarang',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '8',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '36',
            'menu_setting_name'             => 'Facebook',
            'menu_setting_url'              => 'https://www.facebook.com/sttbandung/',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '9',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '37',
            'menu_setting_name'             => 'Instagram',
            'menu_setting_url'              => 'https://www.instagram.com/sttbandung/',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '10',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '38',
            'menu_setting_name'             => 'Twitter',
            'menu_setting_url'              => 'https://twitter.com/sttbandung',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '11',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '39',
            'menu_setting_name'             => 'Youtube',
            'menu_setting_url'              => 'https://www.youtube.com/channel/UC7UAhGE1LU1H2Y6hPkaoDFQ',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '12',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '40',
            'menu_setting_name'             => 'TikTok',
            'menu_setting_url'              => 'https://www.tiktok.com/@sttbandung?',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '13',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '41',
            'menu_setting_name'             => 'Kampus',
            'menu_setting_url'              => 'kampus',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '14',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '42',
            'menu_setting_name'             => 'Video',
            'menu_setting_url'              => 'video',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '15',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

        [
            'menu_setting_id'               => '43',
            'menu_setting_name'             => 'Tracer Study Alumni',
            'menu_setting_url'              => 'tracer-study-alumni',
            'menu_parent_setting_id'        => NULL,
            'menu_setting_level'            => '1',
            'menu_setting_link_eksternal'   => '1',
            'menu_setting_status'           => '1',
            'menu_setting_position'         => '16',
            'created_by'                    => '1',
            'created_at'                    => date('Y-m-d H:i:s'),
        ],

    ]);
    }
}