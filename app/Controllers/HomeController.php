<?php

namespace App\Controllers;

use App\Models\CompanyProfileModel;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class HomeController extends BaseController
{
    protected CompanyProfileModel $companyModel;
    protected ProductModel $productModel;
    protected CategoryModel $categoryModel;

    public function __construct()
    {
        $this->companyModel  = new CompanyProfileModel();
        $this->productModel  = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }

    /**
     * Beranda (Homepage)
     */
    public function index()
    {
        $company  = $this->companyModel->getProfile();
        $products = $this->productModel->getActiveProducts();

        return view('layouts/main', [
            'page'        => 'home',
            'title'       => 'Produsen & Eksportir Gula Nira & Vanilla Magelang | ' . esc($company['company_name'] ?? 'Asta Gina Saka'),
            'description' => 'Produsen dan eksportir resmi Gula Nira murni dan Vanilla Beans berkualitas premium dari perkebunan Magelang, Jawa Tengah untuk pasar lokal dan ekspor.',
            'company'     => $company,
            'products'    => $products,
        ]);
    }

    /**
     * Tentang Kami (About Us)
     */
    public function about()
    {
        $company = $this->companyModel->getProfile();

        return view('layouts/main', [
            'page'        => 'about',
            'title'       => 'Tentang Kami | ' . esc($company['company_name'] ?? 'Asta Gina Saka'),
            'description' => 'Kenali komitmen kami dalam membudidayakan dan mengekspor Gula Nira serta Vanilla berkualitas tinggi dari Magelang, Jawa Tengah.',
            'company'     => $company,
        ]);
    }

    /**
     * Keunggulan Kami (Why Choose Us)
     */
    public function whyUs()
    {
        $company = $this->companyModel->getProfile();

        return view('layouts/main', [
            'page'        => 'whyus',
            'title'       => 'Keunggulan Kami | ' . esc($company['company_name'] ?? 'Asta Gina Saka'),
            'description' => 'Alasan mengapa importir dan mitra industri memilih kami sebagai pemasok utama komoditas Gula Nira dan Vanilla alami dari Jawa Tengah.',
            'company'     => $company,
        ]);
    }

    /**
     * Alur Proses Ekspor (Our Process)
     */
    public function process()
    {
        $company = $this->companyModel->getProfile();

        return view('layouts/main', [
            'page'        => 'process',
            'title'       => 'Proses Pengolahan & Ekspor | ' . esc($company['company_name'] ?? 'Asta Gina Saka'),
            'description' => 'Dari panen di lereng pegunungan Magelang hingga pengiriman & ekspor berstandar fitosanitari internasional.',
            'company'     => $company,
        ]);
    }

    /**
     * Halaman Kontak (Contact)
     */
    public function contact()
    {
        $company = $this->companyModel->getProfile();

        return view('layouts/main', [
            'page'        => 'contact',
            'title'       => 'Hubungi Kami | ' . esc($company['company_name'] ?? 'Asta Gina Saka'),
            'description' => 'Hubungi kantor dan gudang kami di Magelang, Jawa Tengah untuk permintaan penawaran harga (RFQ) Gula Nira dan Vanilla.',
            'company'     => $company,
        ]);
    }

    /**
     * Katalog Produk (Catalog)
     */
    public function catalog()
    {
        $company    = $this->companyModel->getProfile();
        $products   = $this->productModel->getActiveProducts();
        $categories = $this->categoryModel->getCategories();

        return view('layouts/main', [
            'page'        => 'product_catalog',
            'title'       => 'Katalog Produk Ekspor | ' . esc($company['company_name'] ?? 'Asta Gina Saka'),
            'description' => 'Katalog lengkap spesifikasi teknis dan ketentuan pemesanan komoditas Gula Nira dan Vanilla ekspor.',
            'company'     => $company,
            'products'    => $products,
            'categories'  => $categories,
        ]);
    }
}

