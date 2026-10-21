<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed Company Profile
        $this->db->table('company_profile')->insert([
            'company_name' => 'Asta Gina Saka',
            'description'  => 'Kami adalah perusahaan produsen dan eksportir komoditas alami unggulan asal Magelang, Jawa Tengah, Indonesia. Fokus utama kami adalah memproduksi dan memasok Gula Nira murni dan Vanilla Beans kualitas premium langsung dari kemitraan petani binaan di kawasan lereng pegunungan Magelang dan sekitarnya. Kami berkomitmen menghadirkan produk dengan standar kualitas terbaik, pasokan konsisten, serta layanan perdagangan profesional untuk pasar lokal maupun internasional.',
            'address'      => 'Jl. Mayor Human No. 15, Pakelan, Mertoyudan, Magelang, Jawa Tengah',
            'email'        => 'astaginasakaofficial@gmail.com',
            'whatsapp'     => '6281329996003',
            'phone'        => null,
            'logo'         => 'logo.png',
            'vision'       => 'Menjadi produsen dan eksportir terkemuka produk Gula Nira dan Vanilla alami dari Magelang, Jawa Tengah yang diakui secara global atas kualitas unggul, keberlanjutan lingkungan, dan integritas kemitraan.',
            'mission'      => 'Menghasilkan produk alami berkualitas ekspor terbaik dari kekayaan agrikultur Magelang, memberdayakan petani lokal secara adil dan berkelanjutan, serta memberikan pelayanan pengiriman yang aman, tepat waktu, dan terpercaya bagi seluruh mitra bisnis.',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s'),
        ]);

        // Seed Categories (2 Jenis: Gula Nira & Vanilla)
        $this->db->table('categories')->insert([
            'id_category'   => 1,
            'nama_category' => 'Gula Nira',
            'description'   => 'Gula Nira murni (Palm / Coconut Sugar) khas pegunungan Jawa Tengah yang diproses secara alami dan higienis. Memiliki cita rasa karamel yang kaya, indeks glikemik rendah, dan aroma khas yang autentik.',
            'image'         => 'nira-sugar.jpg',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        $this->db->table('categories')->insert([
            'id_category'   => 2,
            'nama_category' => 'Vanilla',
            'description'   => 'Vanilla Beans (Polong Vanili) premium yang dipanen dari perkebunan pilihan di wilayah Jawa Tengah. Diproses melalui fermentasi dan pengeringan alami hingga menghasilkan aroma manis, lembut, dan kandungan vanillin tinggi.',
            'image'         => 'vanilla.jpg',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        // Seed Products (Hanya 2 Jenis Produk)
        $this->db->table('products')->insert([
            'id_product'   => 1,
            'id_category'  => 1,
            'nama_product' => 'Gula Nira Kristal Premium',
            'slug'         => 'gula-nira-kristal-premium',
            'description'  => 'Gula Nira Kristal Premium kami diolah dari nira kelapa dan aren segar pilihan yang dipanen langsung oleh petani binaan di Magelang, Jawa Tengah. Diproses dengan metode higienis dan pengeringan optimal untuk menghasilkan butiran kristal emas alami dengan kadar air rendah (< 2%). Gula Nira kami bebas pengawet, bebas pewarna sintetis, dan memiliki indeks glikemik rendah (Low GI), menjadikannya pemanis alami yang sangat diminati oleh industri makanan, minuman, kafe, bakery, serta pasar ekspor ritel.',
            'origin'       => 'Magelang, Jawa Tengah, Indonesia',
            'packaging'    => 'Sak 25 Kg / Kemasan Vakum 1 Kg / Custom OEM',
            'moq'          => '500 Kg',
            'status'       => 'active',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s'),
        ]);

        $this->db->table('products')->insert([
            'id_product'   => 2,
            'id_category'  => 2,
            'nama_product' => 'Vanilla Beans Premium (Grade A)',
            'slug'         => 'vanilla-beans-premium',
            'description'  => 'Vanilla Beans Premium (Grade A Gourmet) kami dipetik saat kematangan optimal dari perkebunan vanili di kawasan Jawa Tengah. Setiap polong vanili diproses melalui tahap pemeraman (curing) dan penjemuran sinar matahari secara teliti selama berbulan-bulan untuk memunculkan aroma vanillin alami yang kuat, kaya, dan berminyak. Sangat cocok untuk kebutuhan industri kuliner, ekstrak vanili, pembuatan es krim, pastry, wewangian, dan komoditas ekspor premium.',
            'origin'       => 'Magelang, Jawa Tengah, Indonesia',
            'packaging'    => 'Vakum Multilayer 1 Kg / 5 Kg / Master Box',
            'moq'          => '100 Kg',
            'status'       => 'active',
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s'),
        ]);

        // Seed Product Images
        $this->db->table('product_images')->insertBatch([
            [
                'id_product' => 1,
                'image'      => 'nira-sugar.jpg',
                'caption'    => 'Gula Nira Kristal Premium - Butiran Halus Emas',
                'is_primary' => true,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_product' => 1,
                'image'      => 'process.jpg',
                'caption'    => 'Proses Pengolahan & Pengeringan Gula Nira Higienis',
                'is_primary' => false,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_product' => 2,
                'image'      => 'vanilla.jpg',
                'caption'    => 'Polong Vanilla Beans Gourmet Grade A Utuh & Berminyak',
                'is_primary' => true,
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_product' => 2,
                'image'      => 'about.jpg',
                'caption'    => 'Kemitraan Perkebunan Vanili di Jawa Tengah',
                'is_primary' => false,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        // Seed Product Specs - Gula Nira
        $this->db->table('product_specs')->insertBatch([
            ['id_product' => 1, 'spec_name' => 'Asal Daerah', 'spec_value' => 'Magelang, Jawa Tengah, Indonesia'],
            ['id_product' => 1, 'spec_name' => 'Kualitas / Grade', 'spec_value' => 'Premium Export Grade'],
            ['id_product' => 1, 'spec_name' => 'Bentuk / Form', 'spec_value' => 'Butiran Kristal (Granulated) Mesh 16 - 18'],
            ['id_product' => 1, 'spec_name' => 'Warna', 'spec_value' => 'Cokelat Keemasan (Golden Brown)'],
            ['id_product' => 1, 'spec_name' => 'Kadar Air (Moisture)', 'spec_value' => 'Maksimal 1.5% - 2.0%'],
            ['id_product' => 1, 'spec_name' => 'Aroma & Rasa', 'spec_value' => 'Manis Alami, Aroma Karamel Khas Nira'],
            ['id_product' => 1, 'spec_name' => 'Kemasan Ekspor', 'spec_value' => 'Sak Kraft 25 Kg (Inner PE Food Grade) / Custom OEM'],
            ['id_product' => 1, 'spec_name' => 'Minimum Order (MOQ)', 'spec_value' => '500 Kg'],
            ['id_product' => 1, 'spec_name' => 'Masa Simpan', 'spec_value' => '24 Bulan (Simpan di tempat kering & sejuk)'],
        ]);

        // Seed Product Specs - Vanilla Beans
        $this->db->table('product_specs')->insertBatch([
            ['id_product' => 2, 'spec_name' => 'Asal Daerah', 'spec_value' => 'Magelang, Jawa Tengah, Indonesia'],
            ['id_product' => 2, 'spec_name' => 'Kualitas / Grade', 'spec_value' => 'Gourmet Grade A (Black / Dark Brown)'],
            ['id_product' => 2, 'spec_name' => 'Bentuk / Tipe', 'spec_value' => 'Polong Utuh (Whole Beans, Lentur & Berminyak)'],
            ['id_product' => 2, 'spec_name' => 'Panjang Polong', 'spec_value' => '16 cm - 20 cm+'],
            ['id_product' => 2, 'spec_name' => 'Kadar Air (Moisture)', 'spec_value' => '25% - 33% (Kadar Air Ideal Gourmet)'],
            ['id_product' => 2, 'spec_name' => 'Kadar Vanillin', 'spec_value' => '1.8% - 2.4% (Tinggi & Beraroma Kuat)'],
            ['id_product' => 2, 'spec_name' => 'Kemasan Ekspor', 'spec_value' => 'Plastik Vakum Multilayer 1 Kg & 5 Kg dalam Karton Master'],
            ['id_product' => 2, 'spec_name' => 'Minimum Order (MOQ)', 'spec_value' => '100 Kg'],
            ['id_product' => 2, 'spec_name' => 'Masa Simpan', 'spec_value' => '36 Bulan (Kondisi kemasan tertutup rapat)'],
        ]);

        echo "Database seeded successfully with Indonesian content (Magelang, Central Java)!\n";
    }
}

