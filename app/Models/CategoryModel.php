<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'id_category';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_category', 'description', 'image'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    /**
     * Get all categories (2 Kategori: Gula Nira & Vanilla)
     */
    public function getCategories(): array
    {
        try {
            $categories = $this->findAll();
            if (!empty($categories)) {
                return $categories;
            }
        } catch (\Throwable $e) {
            // DB fallback
        }

        return [
            [
                'id_category'   => 1,
                'nama_category' => 'Gula Nira',
                'description'   => 'Gula Nira murni (Palm / Coconut Sugar) khas pegunungan Jawa Tengah yang diproses secara alami dan higienis. Memiliki cita rasa karamel yang kaya, indeks glikemik rendah, dan aroma khas yang autentik.',
                'image'         => 'nira-sugar.jpg'
            ],
            [
                'id_category'   => 2,
                'nama_category' => 'Vanilla',
                'description'   => 'Vanilla Beans (Polong Vanili) premium yang dipanen dari perkebunan pilihan di wilayah Jawa Tengah. Diproses melalui fermentasi dan pengeringan alami hingga menghasilkan aroma manis, lembut, dan kandungan vanillin tinggi.',
                'image'         => 'vanilla.jpg'
            ]
        ];
    }
}


