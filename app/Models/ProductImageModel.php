<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductImageModel extends Model
{
    protected $table            = 'product_images';
    protected $primaryKey       = 'id_image';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_product', 'image', 'caption', 'is_primary'];
    protected $useTimestamps    = false;
    protected $createdField     = 'created_at';

    /**
     * Get all images for a product (2 Produk Utama: Gula Nira & Vanilla)
     */
    public function getProductImages(int $productId): array
    {
        try {
            $images = $this->where('id_product', $productId)
                ->orderBy('is_primary', 'DESC')
                ->findAll();
            if (!empty($images)) {
                return $images;
            }
        } catch (\Throwable $e) {
            // DB fallback
        }

        $imageMap = [
            1 => [
                ['id_image' => 1, 'id_product' => 1, 'image' => 'nira-sugar.jpg', 'caption' => 'Gula Nira Kristal Premium - Butiran Halus Emas', 'is_primary' => 1],
                ['id_image' => 2, 'id_product' => 1, 'image' => 'process.jpg', 'caption' => 'Pengolahan & Pengemasan Higienis Gula Nira', 'is_primary' => 0],
                ['id_image' => 3, 'id_product' => 1, 'image' => 'about.jpg', 'caption' => 'Kemitraan Petani Nira di Magelang, Jawa Tengah', 'is_primary' => 0],
            ],
            2 => [
                ['id_image' => 4, 'id_product' => 2, 'image' => 'vanilla.jpg', 'caption' => 'Polong Vanilla Beans Gourmet Grade A Utuh & Berminyak', 'is_primary' => 1],
                ['id_image' => 5, 'id_product' => 2, 'image' => 'hero.jpg', 'caption' => 'Penjemuran Sinar Matahari & Curing Alami', 'is_primary' => 0],
                ['id_image' => 6, 'id_product' => 2, 'image' => 'process.jpg', 'caption' => 'Pengemasan Vakum Food Grade & Uji Kelembaban', 'is_primary' => 0],
            ]
        ];

        return $imageMap[$productId] ?? [
            ['id_image' => 99, 'id_product' => $productId, 'image' => 'hero.jpg', 'caption' => 'Foto Komoditas', 'is_primary' => 1]
        ];
    }

    /**
     * Get primary image for a product
     */
    public function getPrimaryImage(int $productId): ?array
    {
        $images = $this->getProductImages($productId);
        return $images[0] ?? null;
    }
}


