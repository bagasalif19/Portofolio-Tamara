<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio landing page.
     */
    public function index(): View
    {
        $profile = [
            'name' => 'Tamara Hanum Ulinnuha, S.T.',
            'short_name' => 'Tamara Hanum',
            'role' => 'Industrial Engineer | Production & Lean Manufacturing Specialist',
            'tagline' => 'Optimizing manufacturing operations, line balancing, and production flow through Lean and data-driven methodologies.',
            'current_position' => 'Management Trainee – Production @ PT Shoenary Javanesia Inc (KMK Group)',
            'summary' => 'Industrial Engineering graduate from Universitas Islam Indonesia (GPA: 3.80/4.00) with hands-on experience in Production Engineering, production planning, capacity analysis, and manufacturing improvement. Experienced in managing production planning and performance monitoring across cutting and sewing operations, as well as analyzing production bottlenecks, process flow, line balance, and productivity. Proficient in Lean Manufacturing, Value Stream Mapping (VSM), Kaizen, SPC, FMEA, Root Cause Analysis, SAP, and Advanced Excel.',
            'location' => 'Temanggung, Central Java, Indonesia',
            'phone' => '+62 822-3422-1320',
            'phone_digits' => '6282234221320',
            'whatsapp' => 'https://wa.me/6282234221320',
            'email' => 'tamarahanumu@gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/tamarahu',
            'portfolio' => 'https://canva.link/portofolio-tamara-hanum-u',
            'resume' => 'https://canva.link/portofolio-tamara-hanum-u',
            'avatar' => asset('images/tamara_portrait.jpg'),
            'degree_badge' => 'Bachelor of Engineering (S.T.) · Industrial Engineering (GPA 3.80/4.00)',
        ];

        $metrics = [
            [
                'value' => '480+',
                'label' => 'Sewing Operators',
                'description' => 'Across 12 production lines managed & planned',
            ],
            [
                'value' => '+15%',
                'label' => 'Productivity Gain',
                'description' => 'Achieved in manufacturing operations & VSM',
            ],
            [
                'value' => '98%',
                'label' => 'Line Balance',
                'description' => 'Optimized from 96% in assembly process',
            ],
            [
                'value' => '3.80',
                'label' => 'GPA / 4.00',
                'description' => 'Industrial Engineering UII (Cum Laude)',
            ],
        ];

        $about = [
            'paragraphs' => [
                'Saya adalah lulusan Teknik Industri dari Universitas Islam Indonesia (IPK 3.80/4.00) dengan keahlian mendalam di bidang Production Engineering, Production Planning & Inventory Control (PPIC), serta Continuous Improvement (Lean Manufacturing).',
                'Saat ini, saya berkarier sebagai Management Trainee – Production di PT Shoenary Javanesia Inc (KMK Group), bertanggung jawab merencanakan kebutuhan manpower untuk ~480 operator jahit di 12 lini produksi, menyelaraskan alokasi lini dan kapasitas produksi untuk 50–60 Purchase Order ekspor per bulan, serta menyusun pelaporan performa berkala untuk dewan direksi (BOD, BOL, dan COO).',
                'Sebelumnya di PT Yamaha Indonesia, saya memimpin 2 proyek Value Stream Mapping (VSM) dan Kaizen yang sukses menghasilkan peningkatan produktivitas 15%, reduksi manufacturing lead time dari 2.14 menjadi 0.75, penurunan persediaan WIP dari 627 menjadi 370 unit, dan peningkatan efisiensi line balance dari 96% ke 98%.',
            ],
            'hard_skills' => [
                'Production Engineering & Manufacturing' => [
                    'Production Planning',
                    'Capacity Planning',
                    'Line Balancing',
                    'Manpower Planning',
                    'Process Improvement',
                    'Manufacturing Analysis',
                    'Lean Manufacturing',
                    'Value Stream Mapping (VSM)',
                    'Kaizen',
                ],
                'Quality & Problem Solving' => [
                    'SPC (Statistical Process Control)',
                    'FMEA',
                    'Root Cause Analysis (RCA)',
                    '5 Whys',
                    'Fishbone Diagram',
                    'PI-CAPA',
                ],
                'Software & Data Analysis' => [
                    'Microsoft Excel (Advanced & Pivot)',
                    'SAP PP / MM',
                    'FlexSim (3D Simulation)',
                    'SPSS',
                    'SolidWorks',
                    'Fusion 360',
                ],
                'Reporting & Management' => [
                    'Production Performance Monitoring',
                    'KPI Analysis',
                    'Executive Reporting (BOD, BOL, COO)',
                    'Cross-Functional Coordination',
                    'Project Management',
                ],
            ],

            'soft_skills' => [
                'Analytical & Critical Thinking',
                'Data-Driven Problem Solving',
                'Cross-Functional Team Collaboration',
                'Effective Communication',
                'Kaizen & Continuous Improvement Mindset',
                'Workforce & Capacity Optimization',
            ],
        ];

        $experiences = [
            [
                'role' => 'Management Trainee – Production',
                'company' => 'PT Shoenary Javanesia Inc (KMK Group)',
                'period' => 'Okt 2025 – Sekarang',
                'location' => 'Temanggung, Central Java',
                'bullets' => [
                    'Merencanakan kebutuhan tenaga kerja (manpower planning) untuk sekitar 480 operator sewing di 12 lini produksi, menyelaraskan kapasitas tenaga kerja, alokasi lini, dan target produksi untuk 50–60 PO per bulan.',
                    'Merencanakan target produksi, alokasi manpower, dan penugasan lini dengan mempertimbangkan spesifikasi model produk, kapasitas tersedia, dan jadwal produksi master.',
                    'Menyusun laporan persiapan produksi harian (Daily Production Preparation) mencakup alokasi model, target lini, perencanaan tenaga kerja, perubahan layout, dan kebutuhan operasional.',
                    'Memantau kinerja produksi harian terhadap rencana produksi dan master schedule untuk mengidentifikasi gap serta memastikan ketepatan waktu penyelesaian PO dan pemenuhan jadwal ekspor.',
                    'Menyusun laporan eksekutif mingguan BOD, bulanan BOL, dan COO mencakup evaluasi target vs actual, gap analysis, root causes, dan corrective actions.',
                ],
                'tags' => ['#ProductionPlanning', '#ManpowerPlanning', '#LineAllocation', '#SAP_PP_MM', '#CapacityAnalysis', '#BODReporting', '#LeanManufacturing', '#ShoenaryJavanesia'],
            ],
            [
                'role' => 'Production Engineering Intern',
                'company' => 'PT Yamaha Indonesia',
                'period' => 'Feb 2024 – Agu 2024',
                'location' => 'East Jakarta, DKI Jakarta',
                'bullets' => [
                    'Melaksanakan 2 proyek Value Stream Mapping (VSM) dan Kaizen untuk menganalisis aliran produksi end-to-end, mengidentifikasi bottleneck, non-value-added activities, dan inefisiensi proses.',
                    'Menganalisis ST Net (Standard Time Net), manufacturing lead time, inventory barang dalam proses (WIP), downtime mesin, dan line balance untuk mengidentifikasi peluang continuous improvement.',
                    'Merancang dan mengimplementasikan rekomendasi perbaikan proses berbasis temuan VSM yang mencakup line balancing, tata letak stasiun kerja (workstation layout), dan aliran produksi.',
                    'Berkolaborasi aktif dengan tim lintas fungsi untuk mengimplementasikan rencana aksi perbaikan dan memonitor kinerja proses secara berkelanjutan.',
                    'Mencapai hasil perbaikan terukur: peningkatan produktivitas 15%, reduksi lead time dari 2.14 menjadi 0.75, penurunan inventory WIP dari 627 menjadi 370 unit, dan peningkatan line balance dari 96% ke 98%.',
                ],
                'tags' => ['#ValueStreamMapping', '#Kaizen', '#LineBalancing', '#WorkstationLayout', '#LeadTimeReduction', '#StandardTime', '#LeanManufacturing', '#YamahaIndonesia'],
            ],
            [
                'role' => 'PPIC Intern (Production Planning & Inventory Control)',
                'company' => 'CV Jodion Unggul Perkasa',
                'period' => 'Okt 2023 – Nov 2023',
                'location' => 'Yogyakarta, D.I. Yogyakarta',
                'bullets' => [
                    'Membantu penyusunan jadwal produksi berkala berbasis keterbatasan kapasitas mesin (machine capacity constraints) pada lingkungan manufaktur Make-to-Order (MTO).',
                    'Memantau aktivitas produksi harian dan output riil stasiun kerja guna mempertahankan visibilitas kemajuan pesanan dan pemenuhan order secara tepat waktu.',
                ],
                'tags' => ['#PPIC', '#ProductionScheduling', '#MakeToOrder', '#CapacityPlanning', '#InventoryControl', '#OrderFulfillment'],
            ],
        ];

        $projects = [
            [
                'id' => 'vsm-line-balancing',
                'title' => 'Value Stream Mapping & Kaizen Line Balancing Optimization',
                'category' => 'Lean Manufacturing & Process Improvement',
                'year' => '2024',
                'image' => asset('images/project_vsm.jpg'),
                'summary' => 'Proyek optimasi aliran proses produksi end-to-end untuk eliminasi pemborosan, memangkas lead time, dan meningkatkan line balance di PT Yamaha Indonesia.',
                'description' => 'Menganalisis alur nilai proses manufaktur dari penerimaan material hingga perakitan akhir menggunakan Value Stream Mapping (VSM). Melakukan time study ST Net, menata ulang tata letak stasiun kerja untuk memperpendek jarak transfer material, serta meredistribusi elemen kerja antar operator. Berhasil menaikkan produktivitas lini sebesar 15%, mereduksi lead time dari 2.14 menjadi 0.75, menurunkan WIP inventory dari 627 ke 370 unit, dan meningkatkan line balance dari 96% ke 98%.',
                'metrics' => [
                    ['label' => 'Peningkatan Produktivitas', 'val' => '+15%'],
                    ['label' => 'Reduksi Lead Time', 'val' => '2.14 → 0.75'],
                    ['label' => 'Reduksi WIP Inventory', 'val' => '627 → 370'],
                    ['label' => 'Line Balance', 'val' => '96% → 98%'],
                ],
                'tech' => ['Value Stream Mapping (VSM)', 'Kaizen', 'Standard Time (ST Net)', 'Line Balancing', 'Workstation Layout', 'Advanced Excel'],
                'icon' => '📈',
            ],
            [
                'id' => 'spc-fmea-quality',
                'title' => 'Quality Control Analysis & Rework Reduction using SPC, FMEA & Kaizen',
                'category' => 'Quality Engineering & Statistical Analysis',
                'year' => '2024',
                'image' => asset('images/project_spc.jpg'),
                'summary' => 'Analisis komprehensif pengendalian kualitas suku cadang manufaktur untuk mereduksi tingkat cacat (rework) dan meningkatkan produktivitas.',
                'description' => 'Riset proyek akhir sarjana mengintegrasikan Statistical Process Control (SPC), Failure Mode and Effects Analysis (FMEA), serta Kaizen. Memetakan variabilitas proses dengan control charts (p-chart, X-bar R), menentukan Risk Priority Number (RPN) pada proses kritis, dan mengurai akar masalah menggunakan diagram Fishbone dan 5 Whys. Menghasilkan penurunan tingkat rework sebesar 19.67% dan peningkatan produktivitas manufaktur sebesar 15.00%.',
                'metrics' => [
                    ['label' => 'Reduksi Rework', 'val' => '-19.67%'],
                    ['label' => 'Peningkatan Produktivitas', 'val' => '+15.00%'],
                    ['label' => 'Peta Kendali', 'val' => 'SPC Charts'],
                    ['label' => 'Manajemen Risiko', 'val' => 'FMEA & RPN'],
                ],
                'tech' => ['Statistical Process Control (SPC)', 'FMEA', 'Root Cause Analysis', '5 Whys', 'Fishbone Analysis', 'SPSS / Minitab'],
                'icon' => '🎯',
            ],
            [
                'id' => 'sewing-manpower-planning',
                'title' => 'High-Volume Sewing Manpower & Capacity Planning across 12 Lines',
                'category' => 'Production Planning & Workforce Optimization',
                'year' => '2025 – Sekarang',
                'image' => asset('images/project_manpower.jpg'),
                'summary' => 'Perencanaan kapasitas tenaga kerja skala besar untuk 480 operator di 12 lini sewing demi pemenuhan 50–60 PO ekspor per bulan di PT Shoenary Javanesia Inc.',
                'description' => 'Mengembangkan sistem perencanaan kebutuhan tenaga kerja dan pemetaan kapasitas lini sewing. Menyelaraskan alokasi operator dengan tingkat kesulitan model sepatu, menyusun laporan persiapan produksi harian, memantau deviasi performa vs jadwal master ekspor secara real-time, serta menyusun pelaporan berkala BOD, BOL, dan COO dengan analisis gap dan tindakan perbaikan terstruktur.',
                'metrics' => [
                    ['label' => 'Operator Terkelola', 'val' => '~480 Sewing Operators'],
                    ['label' => 'Lini Produksi', 'val' => '12 Production Lines'],
                    ['label' => 'Target PO Ekspor', 'val' => '50–60 PO / Bulan'],
                    ['label' => 'Pelaporan Eksekutif', 'val' => 'BOD, BOL, COO'],
                ],
                'tech' => ['SAP PP / MM', 'Manpower Planning', 'Capacity Analysis', 'Line Allocation', 'Executive Reporting', 'Advanced Excel'],
                'icon' => '🏭',
            ],
            [
                'id' => 'mto-machine-scheduling',
                'title' => 'Make-to-Order (MTO) Machine Capacity Constrained Scheduling',
                'category' => 'PPIC & Operations Scheduling',
                'year' => '2023',
                'image' => null,
                'summary' => 'Perancangan jadwal produksi adaptif dengan memperhitungkan keterbatasan kapasitas mesin pada sistem manufaktur Make-to-Order di CV Jodion Unggul Perkasa.',
                'description' => 'Memetakan alur utilisasi mesin dan kapasitas stasiun kerja kritis untuk meminimalkan waktu tunggu dan keterlambatan pesanan. Menyusun urutan pengerjaan pesanan berbasis kendala kapasitas dan memantau output harian guna menjaga pemenuhan delivery date pelanggan.',
                'metrics' => [
                    ['label' => 'Tipe Sistem', 'val' => 'Make-to-Order (MTO)'],
                    ['label' => 'Fokus Optimasi', 'val' => 'Machine Capacity Constraints'],
                ],
                'tech' => ['PPIC', 'Capacity Planning', 'Production Scheduling', 'MTO Flow', 'Work Order Tracking'],
                'icon' => '⚙️',
            ],
            [
                'id' => 'flexsim-layout-simulation',
                'title' => '3D Plant Layout Simulation & Manufacturing Bottleneck Elimination',
                'category' => 'Modeling & Simulation',
                'year' => '2023 – 2024',
                'image' => null,
                'summary' => 'Pemodelan digital 3D aliran stasiun kerja dan simulasi tata letak fasilitas untuk eliminasi bottleneck dan peningkatan throughput.',
                'description' => 'Membangun simulasi aliran material diskrit menggunakan FlexSim untuk menguji berbagai skenario perubahan tata letak lini kerja tanpa mengganggu operasional riil. Didukung perancangan 3D CAD stasiun kerja ergonomis menggunakan SolidWorks dan Fusion 360.',
                'metrics' => [
                    ['label' => 'Simulasi Diskrit', 'val' => 'FlexSim 3D'],
                    ['label' => 'Desain CAD', 'val' => 'SolidWorks & Fusion 360'],
                ],
                'tech' => ['FlexSim', 'SolidWorks', 'Fusion 360', 'Plant Layout Optimization', 'Ergonomics'],
                'icon' => '🖥️',
            ],
        ];

        $education = [
            'degree' => 'Bachelor of Engineering in Industrial Engineering (S.T.)',
            'institution' => 'Universitas Islam Indonesia (UII) — Yogyakarta',
            'period' => 'Agu 2020 – Sep 2024',
            'gpa' => '3.80 / 4.00',
            'final_project' => 'Quality Control Analysis of Product Parts in a Manufacturing Company using SPC, FMEA, and Kaizen; reduced rework by 19.67% and increased manufacturing productivity by 15.00%.',
        ];

        $certifications = [
            [
                'title' => 'Quality Control Analysis: SPC, FMEA & Kaizen Specialist',
                'issuer' => 'Universitas Islam Indonesia',
                'credential' => 'Pengendalian Kualitas Statistik, Identifikasi Risiko FMEA, dan Kaizen Manufaktur',
                'date' => '2024',
                'verified' => true,
            ],
            [
                'title' => 'Advanced Manufacturing Tools & Enterprise Systems',
                'issuer' => 'Laboratorium Teknik Industri & Pelatihan Terkait',
                'credential' => 'SAP PP/MM, FlexSim 3D Simulation, SPSS Statistics, SolidWorks & Fusion 360',
                'date' => '2023 – 2024',
                'verified' => true,
            ],
        ];

        $organizations = [
            [
                'role' => 'Asisten Laboratorium Fisika Dasar',
                'org' => 'Universitas Islam Indonesia',
                'period' => 'Sep 2023 – Jan 2024',
                'description' => 'Membimbing praktikum mahasiswa dalam eksperimen mekanika, kelistrikan, dan optik, validasi data numerik, serta evaluasi laporan teknis mahasiswa.',
            ],
            [
                'role' => 'Wakil Bendahara Umum (Deputy General Treasurer)',
                'org' => 'LEM FTI UII (Lembaga Eksekutif Mahasiswa)',
                'period' => 'Jul 2023 – Jan 2024',
                'description' => 'Mengelola alokasi anggaran, perencanaan arus kas keuangan organisasi mahasiswa fakultas, transparansi pendanaan, dan audit pertanggungjawaban program kerja.',
            ],
        ];

        return view('portfolio', compact(
            'profile',
            'metrics',
            'about',
            'experiences',
            'projects',
            'education',
            'certifications',
            'organizations'
        ));
    }

    /**
     * Store an incoming contact message.
     */
    public function storeContact(StoreContactMessageRequest $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validated();
        $validated['ip_address'] = $request->ip();

        ContactMessage::create($validated);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Pesan Anda berhasil dikirim! Terima kasih, saya akan segera menghubungi Anda.',
            ]);
        }

        return back()->with('success', 'Pesan Anda berhasil dikirim! Terima kasih, saya akan segera menghubungi Anda.');
    }
}
