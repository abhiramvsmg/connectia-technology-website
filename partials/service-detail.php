<?php
// Shared "What you get" cards and closing CTA for service pages.
// Expects $sd_name (string) and optional $sd_cards (array).
// If $sd_cards is not supplied, it uses curated service cards, with graceful fallback to $sd_bullets.

$catalog_cards = [
    "Software Development" => [
        [
            "title" => "Custom Workflow Fit",
            "desc" => "Tailor-made software built around your exact operational processes—eliminating rigid templates, manual workarounds, and bloat.",
            "highlight" => "Tailored Architecture",
            "icon_file" => "sd-workflow.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>'
        ],
        [
            "title" => "Scalable Architecture",
            "desc" => "Engineered with modular, high-throughput components designed to scale effortlessly as user demand and transactions surge.",
            "highlight" => "High Concurrency & Growth",
            "icon_file" => "sd-architecture.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>'
        ],
        [
            "title" => "Clean, Maintainable Code",
            "desc" => "Enterprise-grade code with thorough documentation and tests that your future developers will easily understand and build upon.",
            "highlight" => "Future-Ready Standards",
            "icon_file" => "sd-clean-code.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>'
        ]
    ],
    "Website Development" => [
        [
            "title" => "Mobile-First & High Speed",
            "desc" => "Built from the mobile screen up to guarantee sub-second load times, fluid responsive design, and seamless customer retention.",
            "highlight" => "Fast Load Performance",
            "icon_file" => "wd-mobile-first.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>'
        ],
        [
            "title" => "SEO Baked In From Day One",
            "desc" => "Semantic markup, metadata, and Core Web Vitals optimizations built into every page so search engines index and rank you quickly.",
            "highlight" => "Search Engine Ready",
            "icon_file" => "wd-seo.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>'
        ],
        [
            "title" => "Clean, Bloat-Free Code",
            "desc" => "Handcrafted code without unnecessary libraries or heavy scripts, ensuring effortless maintenance and bulletproof stability.",
            "highlight" => "Lightweight & Stable",
            "icon_file" => "wd-clean-code.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>'
        ]
    ],
    "Graphic Design, UI/UX" => [
        [
            "title" => "Memorable Brand Identity",
            "desc" => "Distinctive brand guidelines, logos, and visual assets crafted to reflect your unique values and make an unforgettable first impression.",
            "highlight" => "Distinctive Brand Assets",
            "icon_file" => "ui-brand-identity.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83M16.62 12l-5.74 9.94"/></svg>'
        ],
        [
            "title" => "Behavior-Driven UX",
            "desc" => "Intuitive design systems informed by real user patterns, removing friction to guide users smoothly from entry to conversion.",
            "highlight" => "High Conversion Design",
            "icon_file" => "ui-ux-design.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'
        ],
        [
            "title" => "Prototypes Before Code",
            "desc" => "Clickable interactive prototypes and pixel-perfect design files so you can test and refine the interface before development starts.",
            "highlight" => "Interactive Previews",
            "icon_file" => "ui-prototype.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>'
        ]
    ],
    "Software Testing" => [
        [
            "title" => "Manual & Automated QA",
            "desc" => "Thorough testing coverage spanning cross-browser functionality, regression cycles, and user flows to catch bugs early.",
            "highlight" => "Comprehensive QA",
            "icon_file" => "st-manual-auto.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>'
        ],
        [
            "title" => "Performance & Load Testing",
            "desc" => "Simulating peak user traffic and heavy transaction loads to identify bottlenecks and guarantee resilient uptime under pressure.",
            "highlight" => "Load & Stress Tested",
            "icon_file" => "st-performance.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>'
        ],
        [
            "title" => "Actionable Defect Reports",
            "desc" => "Developer-friendly issue logs with reproducible steps, logs, and stack traces so critical defects get solved permanently.",
            "highlight" => "Fast Remediation",
            "icon_file" => "st-defect-resolution.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>'
        ]
    ],
    "App Design and Development" => [
        [
            "title" => "Native & Cross-Platform",
            "desc" => "Modern iOS, Android, and Flutter/React Native applications engineered for high performance, device sensors, and native feel.",
            "highlight" => "iOS & Android Support",
            "icon_file" => "ma-native-cross.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>'
        ],
        [
            "title" => "Thumb-First Ergonomics",
            "desc" => "Designed specifically for thumb-reach accessibility, quick interactions, and smooth gesture transitions on mobile screens.",
            "highlight" => "Touch-Optimized UI",
            "icon_file" => "ma-thumb-ux.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/></svg>'
        ],
        [
            "title" => "Lifecycle Maintenance",
            "desc" => "Full app store publishing assistance, regular OS version updates, bug monitoring, and scalable backend infrastructure.",
            "highlight" => "Full Lifecycle Support",
            "icon_file" => "ma-lifecycle.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/></svg>'
        ]
    ],
    "Cybersecurity" => [
        [
            "title" => "Audits & Penetration Tests",
            "desc" => "In-depth vulnerability assessments and simulated penetration tests to expose and close security loopholes before attackers can find them.",
            "highlight" => "Proactive Defense",
            "icon_file" => "cs-audit.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'
        ],
        [
            "title" => "Endpoint & Network Shielding",
            "desc" => "Zero-trust network configuration, managed firewalls, and endpoint protections guarding your confidential infrastructure.",
            "highlight" => "Zero-Trust Security",
            "icon_file" => "cs-endpoint.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>'
        ],
        [
            "title" => "24/7 Threat Monitoring",
            "desc" => "Continuous automated oversight and real-time incident alerting to neutralize suspicious network activity immediately.",
            "highlight" => "24/7 Threat Alerting",
            "icon_file" => "cs-threat-monitoring.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>'
        ]
    ],
    "Email and Hosting" => [
        [
            "title" => "Domain-Based Business Email",
            "desc" => "Reliable Google Workspace and Microsoft 365 setups with SPF, DKIM, and DMARC verification to ensure inbox deliverability.",
            "highlight" => "Verified Deliverability",
            "icon_file" => "eh-email.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>'
        ],
        [
            "title" => "Dedicated & Shared Hosting",
            "desc" => "High-speed SSD/NVMe server infrastructure, isolated containers, and optimized configurations tailored to your application's traffic.",
            "highlight" => "NVMe Speed & Storage",
            "icon_file" => "eh-hosting.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>'
        ],
        [
            "title" => "Reliable 99.9% Uptime",
            "desc" => "Continuous health checks, failover redundancies, and automated backups keeping your business applications online without surprise drops.",
            "highlight" => "99.9% Uptime Guarantee",
            "icon_file" => "eh-uptime.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>'
        ]
    ],
    "Technical Support" => [
        [
            "title" => "24/7 Responsive Helpdesk",
            "desc" => "Real engineers on call round-the-clock who understand your tech stack and resolve issues without repetitive hold music.",
            "highlight" => "24/7 Live Assistance",
            "icon_file" => "ts-helpdesk.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>'
        ],
        [
            "title" => "Remote & On-Site Help",
            "desc" => "Immediate remote troubleshooting alongside on-site assistance for network installations, hardware problems, and system maintenance.",
            "highlight" => "Flexible Support Modes",
            "icon_file" => "ts-diagnostics.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>'
        ],
        [
            "title" => "Proactive Maintenance",
            "desc" => "System health diagnostics, security patches, and database optimizations applied routinely so minor bugs never escalate into outages.",
            "highlight" => "Preventive Maintenance",
            "icon_file" => "ts-proactive.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>'
        ]
    ],
    "Data Protection" => [
        [
            "title" => "Automated Cloud Backups",
            "desc" => "Hands-free scheduled snapshots and secure off-site cloud storage providing reliable disaster recovery whenever you need it.",
            "highlight" => "Automated Snapshots",
            "icon_file" => "dp-backup.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>'
        ],
        [
            "title" => "End-to-End Encryption",
            "desc" => "Rigorous encryption protocols protecting databases, customer information, and communications both in transit and at rest.",
            "highlight" => "Rest & Transit Encrypted",
            "icon_file" => "dp-encryption.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/><circle cx="12" cy="16" r="1"/></svg>'
        ],
        [
            "title" => "Compliance Ready",
            "desc" => "Security controls and retention policies that satisfy Indian IT Act regulations and regional data compliance mandates.",
            "highlight" => "Regulatory Compliance",
            "icon_file" => "dp-compliance.svg",
            "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>'
        ]
    ]
];

// Determine cards to render
if (!empty($sd_cards)) {
    $cards_to_show = $sd_cards;
} elseif (isset($catalog_cards[$sd_name])) {
    $cards_to_show = $catalog_cards[$sd_name];
} else {
    $cards_to_show = [];
    if (!empty($sd_bullets)) {
        foreach ($sd_bullets as $i => $b) {
            $cards_to_show[] = [
                "title" => "Feature 0" . ($i + 1),
                "desc" => $b,
                "highlight" => "Quality Assured",
                "icon" => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'
            ];
        }
    }
}
?>
<div class="py-4 py-lg-5" style="background:#f4f9fc;padding-top:4.5rem;">
    <div class="container">
        <div class="mx-0 mx-lg-5" style="padding-left:12px;padding-right:12px;">
            <div class="text-uppercase font-manrope font-700 light-black">What you get</div>
            <div class="font-manrope font-700 font-size-2xl mt-2 lh-1 light-black"><?php echo htmlspecialchars($sd_name); ?></div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 mx-0 mx-lg-5">
            <?php foreach ($cards_to_show as $i => $card) { ?>
            <div class="col">
                <div class="bg-official-card h-100 p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="service-card-icon-wrap d-flex align-items-center justify-content-center rounded-3" style="width:56px;height:56px;background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.25);">
                                <?php
                                if (!empty($card['icon'])) {
                                    echo $card['icon'];
                                } elseif (!empty($card['icon_file'])) {
                                    echo '<img src="static/images/services/icons/' . htmlspecialchars($card['icon_file']) . '" width="26" height="26" alt="' . htmlspecialchars($card['title']) . '">';
                                } elseif (!empty($card['image'])) {
                                    echo '<img src="' . htmlspecialchars($card['image']) . '" width="28" height="28" alt="' . htmlspecialchars($card['title']) . '">';
                                }
                                ?>
                            </div>
                            <div class="font-manrope font-700 fs-3 text-white" style="opacity:0.45;">0<?php echo $i + 1; ?></div>
                        </div>
                        <h3 class="font-700 font-manrope text-white fs-5 mt-2 mb-2"><?php echo htmlspecialchars($card['title']); ?></h3>
                        <p class="font-roboto-slab lh-base font-14px font-400 text-lighter mb-0" style="opacity:0.9;"><?php echo htmlspecialchars($card['desc']); ?></p>
                    </div>
                    <?php if (!empty($card['highlight'])) { ?>
                    <div class="pt-3 mt-3 border-top border-white border-opacity-10 d-flex align-items-center gap-2 font-13px text-white" style="opacity:0.85;">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#00e5ff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span class="font-roboto-slab"><?php echo htmlspecialchars($card['highlight']); ?></span>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="py-5 text-white" style="background: linear-gradient(90deg, #076baa, #0099bd);">
    <div class="container">
        <div class="mx-0 mx-lg-5 d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-4" style="padding-left:12px;padding-right:12px;">
            <div>
                <div class="font-manrope font-700 font-size-2xl lh-1">So, where does it hurt?</div>
                <p class="font-16px mt-3 mb-0 opacity-0.8">Slow site, security worry, an app that's overdue &mdash; tell us what's actually going on. We'll tell you what to fix first.</p>
            </div>
            <a href="contact.php" class="btn bg-white rounded-2 w-max padding-13-33 font-16px line-height-24px font-600 text-decoration-none" style="color:#076baa;">Talk to Connectia &rarr;</a>
        </div>
    </div>
</div>
