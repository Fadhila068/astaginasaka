<?php

namespace App\Controllers;

use App\Models\CompanyProfileModel;
use App\Models\ProductModel;
use App\Models\ProductImageModel;
use App\Models\ProductSpecModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
    protected CompanyProfileModel $companyModel;
    protected ProductModel $productModel;
    protected ProductImageModel $imageModel;
    protected ProductSpecModel $specModel;
    protected CategoryModel $categoryModel;

    public function __construct()
    {
        $this->companyModel  = new CompanyProfileModel();
        $this->productModel  = new ProductModel();
        $this->imageModel    = new ProductImageModel();
        $this->specModel     = new ProductSpecModel();
        $this->categoryModel = new CategoryModel();
    }

    /**
     * Halaman Daftar Produk (Products listing)
     */
    public function index()
    {
        $company  = $this->companyModel->getProfile();
        $products = $this->productModel->getActiveProducts();

        return view('layouts/main', [
            'page'        => 'products',
            'title'       => 'Produk Komoditas Ekspor | ' . esc($company['company_name'] ?? 'Asta Gina Saka'),
            'description' => 'Lihat produk unggulan Gula Nira dan Vanilla kualitas ekspor asal perkebunan Magelang, Jawa Tengah.',
            'company'     => $company,
            'products'    => $products,
        ]);
    }

    /**
     * Halaman Detail Produk (Product detail)
     */
    public function detail(string $slug)
    {
        $company = $this->companyModel->getProfile();
        $product = $this->productModel->getProductBySlug($slug);

        if (empty($product)) {
            return view('layouts/main', [
                'page'        => 'errors/404',
                'title'       => 'Produk Tidak Ditemukan | ' . esc($company['company_name'] ?? 'Asta Gina Saka'),
                'description' => 'Mohon maaf, produk yang Anda cari tidak ditemukan atau telah dipindahkan.',
                'company'     => $company,
            ]);
        }

        $images = $this->imageModel->getProductImages($product['id_product']);
        $specs  = $this->specModel->getProductSpecs($product['id_product']);

        // Format pesan WhatsApp berbahasa Indonesia
        $waMessage = "Halo " . ($company['company_name'] ?? 'Asta Gina Saka') . ", saya tertarik dengan produk " . $product['nama_product'] . " dari Magelang. Mohon info penawaran harga, spesifikasi teknis (COA), MOQ, dan opsi pengirimannya.";

        return view('layouts/main', [
            'page'        => 'product_detail',
            'title'       => esc($product['nama_product']) . ' | ' . esc($company['company_name'] ?? 'Asta Gina Saka'),
            'description' => mb_substr(strip_tags($product['description']), 0, 160),
            'company'     => $company,
            'product'     => $product,
            'images'      => $images,
            'specs'       => $specs,
            'waMessage'   => $waMessage,
        ]);
    }
}

