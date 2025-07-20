# 🏥 Landing Page RSIA Aisyiyah Pekajangan

Landing page resmi untuk **Rumah Sakit Ibu dan Anak (RSIA) Aisyiyah Pekajangan**, dibangun menggunakan Laravel sebagai frontend dan mengonsumsi data dari API internal rumah sakit.

Website ini bertujuan untuk menyediakan informasi publik yang cepat, akurat, dan mudah diakses, khususnya seputar:

- 📰 Berita & Promosi Rumah Sakit
- 🏥 Layanan dan Fasilitas RSIA
- 🗓️ Jadwal Poliklinik

---

## 🎯 Tujuan Pengembangan

Memberikan layanan informasi berbasis web yang:
- Meningkatkan transparansi informasi rumah sakit kepada masyarakat
- Mendukung digitalisasi sistem informasi rumah sakit
- Meningkatkan kepercayaan dan kenyamanan pasien dalam mendapatkan layanan

---

## ✨ Fitur Utama

| Fitur              | Deskripsi                                                                 |
|--------------------|---------------------------------------------------------------------------|
| 🔸 **Berita & Promosi** | Menampilkan update berita, promosi, dan pengumuman penting dari RSIA Aisyiyah. |
| 🔸 **Informasi Layanan** | Penjelasan ringkas mengenai layanan rawat jalan, rawat inap, penunjang medis, dll. |
| 🔸 **Jadwal Poliklinik Spesialis** | Informasi lengkap tentang jam operasional dan pembagian jadwal poli.      |

---

## ⚙️ Teknologi yang Digunakan

- **Laravel 11** sebagai kerangka kerja frontend
- **Blade Template Engine** untuk pembuatan tampilan
- **TailwindCSS** (opsional) untuk styling modern
- **Flowbite"** Master template component (https://flowbite.com/)
- **Axios / HTTP Client Laravel** untuk mengambil data dari API internal rumah sakit
- **API Provider** internal RSIA sebagai sumber data dinamis

---

## 🔌 Arsitektur Singkat

```txt
[Frontend Laravel]
     |
     |── GET/POST (axios/http client)
     ↓
[API Internal RSIA]
     |
     ↓
[Database & Sistem Informasi Rumah Sakit]
