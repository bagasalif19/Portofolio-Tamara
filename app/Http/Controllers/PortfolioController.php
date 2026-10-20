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
                'I am an Industrial Engineering graduate from Universitas Islam Indonesia with a GPA of 3.80/4.00, specializing in Production Engineering, Production Planning and Inventory Control (PPIC), and Continuous Improvement (Lean Manufacturing).',
                'I am currently working as a Management Trainee – Production at PT Shoenary Javanesia Inc. (KMK Group), where I am responsible for manpower mapping for approximately 480 sewing operators across 12 production lines, aligning line allocation and production capacity for 50–60 export Purchase Orders per month, and preparing periodic performance reports for senior management, including BOD, BOL, and COO reports.',
                'Previously, at PT Yamaha Indonesia, I led two Value Stream Mapping (VSM) and Kaizen projects, achieving a 15% increase in productivity, reducing manufacturing lead time from 2.14 to 0.75, decreasing work-in-process (WIP) inventory from 627 to 370 units, and improving line balancing efficiency from 96% to 98%.',
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
                'period' => 'Oct 2025 – Present',
                'location' => 'Temanggung, Central Java',
                'bullets' => [
                    'Planned manpower requirements across 12 production lines, aligning workforce capacity, line allocation, and production targets for 50–60 Purchase Orders (POs) per month.',
                    'Prepared daily production preparation reports covering model allocation, line targets, manpower planning, layout changes, and operational requirements.',
                    'Monitored daily production performance against production plans and the master schedule to identify gaps, ensure timely PO completion, and meet export schedules.',
                    'Developed catch-up plans to close production gaps by aligning actual output and remaining production requirements with the production plan.',
                    'Prepared weekly BOD, monthly BOL, and COO executive reports covering target vs. actual performance, gap analysis, root causes, and corrective actions.',
                ],
                'tags' => ['#ProductionPlanning', '#ManpowerPlanning', '#LineAllocation', '#SAP_PP_MM', '#CapacityAnalysis', '#BODReporting', '#LeanManufacturing', '#ShoenaryJavanesia'],
            ],
            [
                'role' => 'Production Engineering Intern',
                'company' => 'PT Yamaha Indonesia',
                'period' => 'Feb 2024 – Aug 2024',
                'location' => 'East Jakarta, DKI Jakarta',
                'bullets' => [
                    'Executed two Value Stream Mapping (VSM) and Kaizen projects to analyze end-to-end production flows and identify bottlenecks, non-value-added activities, and process inefficiencies.',
                    'Analyzed net standard time (ST Net), manufacturing lead time, work-in-process (WIP) inventory, machine downtime, and line balancing to identify continuous improvement opportunities.',
                    'Designed and implemented process improvement recommendations based on VSM findings, focusing on line balancing, workstation layout, and production flow optimization.',
                    'Collaborated with cross-functional teams to implement improvement action plans and continuously monitor process performance.',
                    'Achieved measurable improvements, including a 15% increase in productivity, a reduction in manufacturing lead time from 2.14 to 0.75, a decrease in WIP inventory from 627 to 370 units, and an improvement in line balancing efficiency from 96% to 98%.',
                ],
                'tags' => ['#ValueStreamMapping', '#Kaizen', '#LineBalancing', '#WorkstationLayout', '#LeadTimeReduction', '#StandardTime', '#LeanManufacturing', '#YamahaIndonesia'],
            ],
            [
                'role' => 'PPIC Intern (Production Planning & Inventory Control)',
                'company' => 'CV Jodion Unggul Perkasa',
                'period' => 'Oct 2023 – Nov 2023',
                'location' => 'Yogyakarta, D.I. Yogyakarta',
                'bullets' => [
                    'Assisted in developing periodic production schedules based on machine capacity constraints in a Make-to-Order (MTO) manufacturing environment.',
                    'Monitored daily production activities and actual workstation output to track order progress and support on-time order fulfillment.',
                ],
                'tags' => ['#PPIC', '#ProductionScheduling', '#MakeToOrder', '#CapacityPlanning', '#InventoryControl', '#OrderFulfillment'],
            ],
        ];

        $projects = [
            [
                'id' => 'sewing-manpower-planning',
                'title' => 'High-Volume Sewing Manpower & Capacity Planning across 12 Lines',
                'category' => 'Production Planning & Workforce Optimization',
                'year' => '2025 – Present',
                'image' => asset('images/project_manpower.jpg'),
                'summary' => 'Large-scale workforce capacity planning for ~480 operators across 12 sewing lines to fulfill 50–60 export Purchase Orders (POs) per month at PT Shoenary Javanesia Inc.',
                'description' => 'Developed manpower requirement planning and capacity mapping systems across 12 sewing lines. Aligned operator allocation with footwear model complexity, prepared daily production preparation reports, monitored real-time performance deviations against the master export schedule, and prepared periodic BOD, BOL, and COO executive reports featuring structured gap analyses and corrective action plans.',
                'metrics' => [
                    ['label' => 'Managed Operators', 'val' => '~480 Sewing Operators'],
                    ['label' => 'Production Lines', 'val' => '12 Production Lines'],
                    ['label' => 'Monthly Export POs', 'val' => '50–60 POs / Month'],
                    ['label' => 'Executive Reporting', 'val' => 'BOD, BOL, COO'],
                ],
                'tech' => ['SAP PP / MM', 'Manpower Planning', 'Capacity Analysis', 'Line Allocation', 'Executive Reporting', 'Advanced Excel'],
                'icon' => '🏭',
            ],
            [
                'id' => 'vsm-line-balancing',
                'title' => 'Value Stream Mapping & Kaizen Line Balancing Optimization',
                'category' => 'Lean Manufacturing & Process Improvement',
                'year' => '2024',
                'image' => asset('images/project_vsm.jpg'),
                'summary' => 'Analyzed end-to-end manufacturing flows using VSM and conducted standard time studies to eliminate bottlenecks and optimize line balancing.',
                'description' => 'Analyzed end-to-end manufacturing flows using Value Stream Mapping (VSM) and conducted standard time studies to identify bottlenecks, non-value-added activities, and process inefficiencies. Redesigned workstation layouts and optimized operator task allocation through line balancing and Kaizen initiatives. Achieved a 15% productivity increase, reduced manufacturing lead time from 2.14 to 0.75, decreased WIP inventory from 627 to 370 units, and improved line balancing efficiency from 96% to 98%.',
                'metrics' => [
                    ['label' => 'Productivity Improvement', 'val' => '+15%'],
                    ['label' => 'Lead Time Reduction', 'val' => '2.14 → 0.75'],
                    ['label' => 'WIP Inventory Reduction', 'val' => '627 → 370 Units'],
                    ['label' => 'Line Balancing Efficiency', 'val' => '96% → 98%'],
                ],
                'tech' => ['Value Stream Mapping (VSM)', 'Kaizen', 'Standard Time Study (ST Net)', 'Line Balancing', 'Workstation Layout', 'Advanced Excel'],
                'icon' => '📈',
            ],
            [
                'id' => 'spc-fmea-quality',
                'title' => 'Quality Control Analysis & Rework Reduction Using SPC, FMEA & Kaizen',
                'category' => 'Quality Engineering & Statistical Analysis',
                'year' => '2024',
                'image' => asset('images/project_spc.jpg'),
                'summary' => 'Final-year undergraduate research applying SPC, FMEA, and Kaizen to analyze process variability, mitigate risks, and reduce rework in manufacturing.',
                'description' => 'Conducted a final-year undergraduate research project focused on Statistical Process Control (SPC), Failure Mode and Effects Analysis (FMEA), and Kaizen. Analyzed production variability using control charts, identified critical defects through Pareto analysis, assessed process risks using FMEA, and investigated root causes using Fishbone Diagrams and the 5 Whys method. Achieved a 19.67% reduction in rework and a 15.00% improvement in manufacturing productivity.',
                'metrics' => [
                    ['label' => 'Rework Reduction', 'val' => '-19.67%'],
                    ['label' => 'Productivity Improvement', 'val' => '+15.00%'],
                    ['label' => 'Quality Control Monitoring', 'val' => 'SPC Charts'],
                    ['label' => 'Risk Assessment', 'val' => 'FMEA & RPN'],
                ],
                'tech' => ['Statistical Process Control (SPC)', 'FMEA', 'Root Cause Analysis', '5 Whys', 'Fishbone Analysis'],
                'icon' => '🎯',
            ],
        ];

        $education = [
            'degree' => 'Bachelor of Engineering in Industrial Engineering (S.T.)',
            'institution' => 'Universitas Islam Indonesia (UII) — Yogyakarta',
            'period' => 'Aug 2020 – Sep 2024',
            'gpa' => '3.80 / 4.00',
            'final_project' => 'Quality Control Analysis of Product Parts in a Manufacturing Company using SPC, FMEA, and Kaizen; reduced rework by 19.67% and increased manufacturing productivity by 15.00%.',
        ];

        $certifications = [
            [
                'title' => 'Quality Control Analysis: SPC, FMEA & Kaizen Specialist',
                'issuer' => 'Universitas Islam Indonesia',
                'credential' => 'Statistical Process Control, FMEA Risk Identification, and Manufacturing Kaizen',
                'date' => '2024',
                'verified' => true,
            ],
            [
                'title' => 'Advanced Manufacturing Tools & Enterprise Systems',
                'issuer' => 'Industrial Engineering Laboratory & Professional Training',
                'credential' => 'SAP PP/MM, FlexSim 3D Simulation, SPSS Statistics, SolidWorks & Fusion 360',
                'date' => '2023 – 2024',
                'verified' => true,
            ],
        ];

        $organizations = [
            [
                'role' => 'Basic Physics Laboratory Teaching Assistant',
                'org' => 'Universitas Islam Indonesia',
                'period' => 'Sep 2023 – Jan 2024',
                'description' => 'Guided undergraduate lab practicums in mechanics, electricity, and optics; validated numerical datasets and evaluated technical engineering laboratory reports.',
            ],
            [
                'role' => 'Deputy General Treasurer',
                'org' => 'LEM FTI UII (Faculty Student Executive Board)',
                'period' => 'Jul 2023 – Jan 2024',
                'description' => 'Managed budget allocation, financial cash flow planning for the faculty student council, fund transparency, and accountability audits for executive work programs.',
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
                'message' => 'Your message has been sent successfully! Thank you, I will get back to you shortly.',
            ]);
        }

        return back()->with('success', 'Your message has been sent successfully! Thank you, I will get back to you shortly.');
    }
}
