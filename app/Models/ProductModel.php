<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id_product';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'id_category', 'nama_product', 'slug', 'description',
        'origin', 'packaging', 'moq', 'status',
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Default static products dataset (2 Produk Utama: Gula Nira & Vanilla)
     */
     public static function getStaticProducts(): array
     {
         return [
             [
                 'id_product'    => 1,
                 'id_category'   => 1,
                 'nama_category' => 'Gula Nira',
                 'nama_product'  => 'Gula Nira Kristal Premium',
                 'slug'          => 'gula-nira-kristal-premium',
                 'short_desc'    => 'Gula Nira murni butiran kristal emas (Low GI) diproses higienis dari perkebunan Magelang, Jawa Tengah.',
                 'description'   => 'Gula Nira Kristal Premium kami diolah dari nira kelapa dan aren segar pilihan yang dipanen langsung oleh petani binaan di Magelang, Jawa Tengah. Diproses dengan metode higienis dan pengeringan optimal untuk menghasilkan butiran kristal emas alami dengan kadar air rendah (< 2%). Gula Nira kami bebas pengawet, bebas pewarna sintetis, dan memiliki indeks glikemik rendah (Low GI), menjadikannya pemanis alami yang sangat diminati oleh industri makanan, minuman, kafe, bakery, serta pasar ekspor ritel.',
                 'origin'        => 'Magelang, Jawa Tengah, Indonesia',
                 'grade'         => 'Premium Export Grade',
                 'packaging'     => 'Sak Kraft 25 Kg / Vakum 1 Kg / Custom OEM',
                 'moq'           => '500 Kg',
                 'shelf_life'    => '24 Bulan',
                 'status'        => 'active',
                 'primary_image' => 'nira-sugar.jpg',
                 'certifications'=> ['Uji Lab Mutu', 'Sertifikat Fitosanitari', 'SKA / COO'],
                 'badge'         => 'Produk Unggulan'
             ],
             [
                 'id_product'    => 2,
                 'id_category'   => 2,
                 'nama_category' => 'Vanilla',
                 'nama_product'  => 'Vanilla Beans Premium (Grade A)',
                 'slug'          => 'vanilla-beans-premium',
                 'short_desc'    => 'Polong vanili utuh Gourmet Grade A berminyak, lentur, dengan kadar vanillin tinggi (> 1.8%).',
                 'description'   => 'Vanilla Beans Premium (Grade A Gourmet) kami dipetik saat kematangan optimal dari perkebunan vanili di kawasan Jawa Tengah. Setiap polong vanili diproses melalui tahap pemeraman (curing) dan penjemuran sinar matahari secara teliti selama berbulan-bulan untuk memunculkan aroma vanillin alami yang kuat, kaya, dan berminyak. Sangat cocok untuk kebutuhan industri kuliner, ekstrak vanili, pembuatan es krim, pastry, wewangian, dan komoditas ekspor premium.',
                 'origin'        => 'Magelang, Jawa Tengah, Indonesia',
                 'grade'         => 'Gourmet Grade A (Black / Dark Brown)',
                 'packaging'     => 'Vakum Multilayer 1 Kg & 5 Kg dalam Karton Master',
                 'moq'           => '100 Kg',
                 'shelf_life'    => '36 Bulan',
                 'status'        => 'active',
                 'primary_image' => 'vanilla.jpg',
                 'certifications'=> ['Sertifikat Fitosanitari', 'SKA / COO', 'COA Lab Analysis'],
                 'badge'         => 'Kualitas Ekspor'
             ]
         ];
     }

    /**
     * Get all active products with category and primary image
     */
    public function getActiveProducts(): array
    {
        try {
            $products = $this->select('products.*, categories.nama_category, product_images.image as primary_image')
                ->join('categories', 'categories.id_category = products.id_category')
                ->join('product_images', 'product_images.id_product = products.id_product AND product_images.is_primary = 1', 'left')
                ->where('products.status', 'active')
                ->findAll();

            if (!empty($products)) {
                return $products;
            }
        } catch (\Throwable $e) {
            // DB fallback
        }

        return self::getStaticProducts();
    }

    /**
     * Get product by slug with category info
     */
    public function getProductBySlug(string $slug): ?array
    {
        try {
            $product = $this->select('products.*, categories.nama_category')
                ->join('categories', 'categories.id_category = products.id_category')
                ->where('products.slug', $slug)
                ->where('products.status', 'active')
                ->first();

            if (!empty($product)) {
                return $product;
            }
        } catch (\Throwable $e) {
            // DB fallback
        }

        foreach (self::getStaticProducts() as $item) {
            if ($item['slug'] === $slug) {
                return $item;
            }
        }

        return null;
    }

    /**
     * Get products by category
     */
    public function getProductsByCategory(int $categoryId): array
    {
        try {
            $products = $this->select('products.*, product_images.image as primary_image')
                ->join('product_images', 'product_images.id_product = products.id_product AND product_images.is_primary = 1', 'left')
                ->where('products.id_category', $categoryId)
                ->where('products.status', 'active')
                ->findAll();

            if (!empty($products)) {
                return $products;
            }
        } catch (\Throwable $e) {
            // DB fallback
        }

        return array_values(array_filter(self::getStaticProducts(), function($item) use ($categoryId) {
            return ($item['id_category'] == $categoryId);
        }));
    }
}


