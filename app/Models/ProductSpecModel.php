<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductSpecModel extends Model
{
    protected $table            = 'product_specs';
    protected $primaryKey       = 'id_spec';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_product', 'spec_name', 'spec_value'];
    protected $useTimestamps    = false;

    /**
     * Get all specifications for a product (2 Produk Utama: Gula Nira & Vanilla)
     */
    public function getProductSpecs(int $productId): array
    {
        try {
            $specs = $this->where('id_product', $productId)->findAll();
            if (!empty($specs)) {
                return $specs;
            }
        } catch (\Throwable $e) {
            // DB fallback
        }

        $specsMap = [
            1 => [
                ['spec_name' => 'Asal Daerah', 'spec_value' => 'Magelang, Jawa Tengah, Indonesia'],
                ['spec_name' => 'Kualitas / Grade', 'spec_value' => 'Premium Export Grade'],
                ['spec_name' => 'Bentuk / Form', 'spec_value' => 'Butiran Kristal (Granulated) Mesh 16 - 18'],
                ['spec_name' => 'Warna', 'spec_value' => 'Cokelat Keemasan (Golden Brown)'],
                ['spec_name' => 'Kadar Air (Moisture)', 'spec_value' => 'Maksimal 1.5% - 2.0%'],
                ['spec_name' => 'Aroma & Rasa', 'spec_value' => 'Manis Alami, Aroma Karamel Khas Nira'],
                ['spec_name' => 'Kemasan Ekspor', 'spec_value' => 'Sak Kraft 25 Kg (Inner PE Food Grade) / Custom OEM'],
                ['spec_name' => 'Minimum Order (MOQ)', 'spec_value' => '500 Kg'],
                ['spec_name' => 'Masa Simpan', 'spec_value' => '24 Bulan (Simpan di tempat kering & sejuk)'],
            ],
            2 => [
                ['spec_name' => 'Asal Daerah', 'spec_value' => 'Magelang, Jawa Tengah, Indonesia'],
                ['spec_name' => 'Kualitas / Grade', 'spec_value' => 'Gourmet Grade A (Black / Dark Brown)'],
                ['spec_name' => 'Bentuk / Tipe', 'spec_value' => 'Polong Utuh (Whole Beans, Lentur & Berminyak)'],
                ['spec_name' => 'Panjang Polong', 'spec_value' => '16 cm - 20 cm+'],
                ['spec_name' => 'Kadar Air (Moisture)', 'spec_value' => '25% - 33% (Kadar Air Ideal Gourmet)'],
                ['spec_name' => 'Kadar Vanillin', 'spec_value' => '1.8% - 2.4% (Tinggi & Beraroma Kuat)'],
                ['spec_name' => 'Kemasan Ekspor', 'spec_value' => 'Plastik Vakum Multilayer 1 Kg & 5 Kg dalam Karton Master'],
                ['spec_name' => 'Minimum Order (MOQ)', 'spec_value' => '100 Kg'],
                ['spec_name' => 'Masa Simpan', 'spec_value' => '36 Bulan (Kondisi kemasan tertutup rapat)'],
            ]
        ];

        return $specsMap[$productId] ?? [
            ['spec_name' => 'Asal Daerah', 'spec_value' => 'Magelang, Jawa Tengah, Indonesia'],
            ['spec_name' => 'Grade Mutu', 'spec_value' => 'Standar Ekspor Premium'],
            ['spec_name' => 'Kualitas', 'spec_value' => '100% Alami & Teruji Laboratorium'],
        ];
    }
}


