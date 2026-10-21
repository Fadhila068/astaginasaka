<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyProfileModel extends Model
{
    protected $table            = 'company_profile';
    protected $primaryKey       = 'id_profile';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'company_name', 'description', 'address', 'email',
        'whatsapp', 'phone', 'logo', 'vision', 'mission',
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Get company profile (cached or static fallback)
     */
    public function getProfile(): array
    {
        $defaultProfile = [
            'id_profile'   => 1,
            'company_name' => 'Asta Gina Saka',
            'tagline'      => 'Produsen & Eksportir Gula Nira dan Vanilla Asli Magelang, Jawa Tengah',
            'description'  => 'Kami adalah perusahaan produsen dan eksportir komoditas alami unggulan asal Magelang, Jawa Tengah, Indonesia. Fokus utama kami adalah memproduksi dan memasok Gula Nira murni dan Vanilla Beans kualitas premium langsung dari kemitraan petani binaan di kawasan lereng pegunungan Magelang dan sekitarnya. Kami berkomitmen menghadirkan produk dengan standar kualitas terbaik, pasokan konsisten, serta layanan perdagangan profesional untuk pasar lokal maupun internasional.',
            'address'      => 'Jl. Mayor Human No. 15, Pakelan, Mertoyudan, Magelang, Jawa Tengah',
            'email'        => 'astaginasakaofficial@gmail.com',
            'whatsapp'     => '6281329996003',
            'phone'        => null,
            'logo'         => 'logo.png',
            'vision'       => 'Menjadi produsen dan eksportir terkemuka produk Gula Nira dan Vanilla alami dari Magelang, Jawa Tengah yang diakui secara global atas kualitas unggul, keberlanjutan lingkungan, dan integritas kemitraan.',
            'mission'      => 'Menghasilkan produk alami berkualitas ekspor terbaik dari kekayaan agrikultur Magelang, memberdayakan petani lokal secara adil dan berkelanjutan, serta memberikan pelayanan pengiriman yang aman, tepat waktu, dan terpercaya bagi seluruh mitra bisnis.',
            'stats'        => [
                ['value' => '100%', 'label' => 'Alami & Bebas Kimia'],
                ['value' => 'Grade A', 'label' => 'Standar Mutu Ekspor'],
                ['value' => '500+ Ton', 'label' => 'Kapasitas Pasokan / Tahun'],
                ['value' => 'FOB / CIF', 'label' => 'Pengiriman Domestik & Global']
            ]
        ];

        try {
            $dbProfile = $this->first();
            if (!empty($dbProfile) && !empty($dbProfile['company_name']) && $dbProfile['company_name'] !== '[COMPANY NAME]') {
                return array_merge($defaultProfile, array_filter($dbProfile));
            }
        } catch (\Throwable $e) {
            // Database not connected or table empty, use rich static fallback
        }

        return $defaultProfile;
    }

    /**
     * Get WhatsApp number
     */
    public function getWhatsApp(): string
    {
        $profile = $this->getProfile();
        return $profile['whatsapp'] ?? '6281329996003';
    }

    /**
     * Get WhatsApp link with optional message
     */
    public function getWhatsAppLink(string $message = ''): string
    {
        $wa = $this->getWhatsApp();
        $link = 'https://wa.me/' . $wa;
        if (!empty($message)) {
            $link .= '?text=' . rawurlencode($message);
        }
        return $link;
    }
}


