<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
    $website_author = "Dhanvis UltraTek Inspection Services";
    $website_Description = "Advanced Wind Turbine Blade Inspection & NDT Solutions. PAUT, Ultrasonic Testing, Drone Inspection, Spar Cap & Bond Line Assessment. ISO 9001 | DNV GL | IEC 61400 Compliant. Serving OEMs, Wind Farms & EPC Contractors Globally.";
    $website_keywords = "wind turbine blade inspection, PAUT inspection, phased array ultrasonic testing, wind blade NDT, blade inspection services, spar cap inspection, leading edge erosion assessment, trailing edge inspection, bond line inspection, drone blade inspection, wind turbine tower inspection, composite blade inspection, ultrasonic testing wind blade, visual testing VT, magnetic particle testing MT, dye penetrant testing PT, offshore wind inspection, onshore wind inspection, wind energy NDT, OEM blade inspection, ISO 9712, DNV GL ST-0376, IEC 61400-5, wind blade quality assessment, third party blade inspection, wind blade audit, PAUT data evaluation";
    $favicon = "vl_img/fav32.png";
    ?>
    
    <!-- SEO Meta Tags -->
    <title>Wind Turbine Blade Inspection & NDT Services | PAUT, UT, Drone Inspection - <?=$Config_business_Name;?></title>
    <meta name="description" content="<?=$website_Description;?>">
    <meta name="keywords" content="<?=$website_keywords;?>">
    <meta name="author" content="<?=$website_author;?>">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Wind Turbine Blade Inspection & NDT Services - <?=$Config_business_Name;?>">
    <meta property="og:description" content="<?=$website_Description;?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=$Config_business_URL;?>/services.php">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?=$Config_business_URL;?>/services.php">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=$favicon;?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="css/theme.css">
    
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Wind Turbine Blade Inspection & NDT Services",
        "provider": {
            "@type": "Organization",
            "name": "<?=$Config_business_Name;?>",
            "url": "<?=$Config_business_URL;?>"
        },
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "NDT & Blade Inspection Services",
            "itemListElement": [
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Phased Array Ultrasonic Testing (PAUT)"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Wind Blade PAUT Data Evaluation"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Spar Cap Inspection"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Leading & Trailing Edge Inspection"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Drone-Based Blade Inspection"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Wind Turbine Tower Inspection"}}
            ]
        }
    }
    </script>
</head>
<body>
    <!-- Desktop Header -->
    <?php include 'includes/header-new.php';?>
    
    <!-- Mobile Header -->
    <?php include 'includes/mobile-header-new.php';?>
    
    <!-- Page Banner -->
    <section class="dv-page-banner">
        <video class="dv-page-banner__video" autoplay muted loop playsinline>
            <source src="vl_img/windmill-park.mov" type="video/mp4">
        </video>
        <div class="dv-page-banner__overlay"></div>
        <div class="dv-container">
            <div class="dv-page-banner__content">
                <h1>Wind Blade Inspection & NDT Services</h1>
                <p class="dv-page-banner__subtitle">Advanced Non-Destructive Testing & Structural Integrity Solutions</p>
                <nav class="dv-breadcrumb">
                    <a href="./">Home</a>
                    <span>/</span>
                    <span>Our Services</span>
                </nav>
            </div>
        </div>
    </section>
    
    <!-- Service Introduction -->
    <section class="dv-services-intro">
        <div class="dv-container">
            <div class="dv-services-intro__content">
                <span class="dv-section-badge">ISO 9001 | DNV GL | IEC 61400 Compliant</span>
                <h2>Complete Lifecycle Wind Turbine Blade Inspection Solutions</h2>
                <p>Our service portfolio is structured around the complete lifecycle of wind turbine blades — from manufacturing quality assurance through in-service inspection, maintenance, and life extension. Each service is delivered by certified personnel using approved methodologies, advanced equipment, and internationally compliant reporting frameworks.</p>
                <p>We serve OEM blade manufacturers, independent power producers, EPC contractors, and wind farm operations and maintenance teams across onshore and offshore environments worldwide.</p>
            </div>
        </div>
    </section>

    <!-- Blade Inspection Services Section -->
    <section class="dv-services-section" id="blade-inspection">
        <div class="dv-container">
            <div class="dv-services-header">
                <span class="dv-section-badge">Core Services</span>
                <h2>Blade Inspection Services</h2>
                <p>Comprehensive wind turbine blade inspection services utilizing advanced phased array ultrasonic testing (PAUT), conventional UT, and expert structural assessment methodologies to ensure blade integrity and performance.</p>
            </div>
            
            <div class="dv-services-grid">
                <!-- Service 1: PAUT Inspection -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/1.jpg" alt="Phased Array Ultrasonic Testing (PAUT) Wind Blade Inspection" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="blade-inspection-services.php#paut">Wind Blade PAUT Inspection</a></h3>
                        <p>Semi-automatic and manual Phased Array Ultrasonic Testing for internal structural assessment of wind turbine blades. Multi-element transducer arrays enable simultaneous electronic scanning across multiple focal depths and angles, providing superior defect detection sensitivity and precise sizing capability for spar caps, bond lines, shear webs, and root sections.</p>
                        <div class="dv-service-card__standards">
                            <span>EN 583 Series</span>
                            <span>ISO 13588</span>
                            <span>DNV GL ST-0376</span>
                            <span>IEC 61400-5</span>
                        </div>
                        <a href="blade-inspection-services.php#paut" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- Service 2: PAUT Data Evaluation -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/2.jpg" alt="PAUT Data Evaluation and Interpretation Services" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="blade-inspection-services.php#evaluation">PAUT Data Evaluation & Interpretation</a></h3>
                        <p>Independent PAUT data evaluation for clients requiring expert second-opinion analysis. Our Level II and Level III evaluators perform thorough analysis of A-scan, B-scan, C-scan, and S-scan datasets to accurately identify, size, classify, and report indications in accordance with acceptance criteria. Supports OEM quality departments and technical dispute resolution.</p>
                        <div class="dv-service-card__standards">
                            <span>ISO 9712 Level II/III</span>
                            <span>EN 583-5</span>
                            <span>TomoView</span>
                            <span>UltraVision</span>
                        </div>
                        <a href="blade-inspection-services.php#evaluation" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- Service 3: Spar Cap Inspection -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/3.jpg" alt="Spar Cap Structural Integrity Inspection" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="blade-inspection-services.php#sparcap">Spar Cap Structural Inspection</a></h3>
                        <p>The spar cap is the primary load-bearing structural element of a wind turbine blade. Our inspection employs encoded PAUT scanning and conventional pulse-echo UT to assess full length and cross-section of spar cap laminates, detecting delamination, fibre waviness, voids, and porosity with reliable characterisation for fitness-for-service assessment.</p>
                        <div class="dv-service-card__standards">
                            <span>IEC 61400-5</span>
                            <span>DNV GL ST-0376</span>
                            <span>ASTM E2375</span>
                        </div>
                        <a href="blade-inspection-services.php#sparcap" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- Service 4: Leading & Trailing Edge -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/4.jpg" alt="Leading Edge and Trailing Edge Inspection" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="blade-inspection-services.php#edge">Leading & Trailing Edge Inspection</a></h3>
                        <p>Assessment of aerodynamic surfaces subject to mechanical stress, erosion, moisture ingress, and fatigue loading. Combines visual testing, tap testing, and NDT methods to assess bonding integrity, coating condition, erosion severity, and structural adequacy of critical aerodynamic components per OEM guidance.</p>
                        <div class="dv-service-card__standards">
                            <span>EN 13018</span>
                            <span>IEC 61400-5</span>
                            <span>DNV GL Guidelines</span>
                        </div>
                        <a href="blade-inspection-services.php#edge" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- Service 5: Root & Bond Line -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/5.jpg" alt="Root and Bond Line Inspection Services" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="blade-inspection-services.php#root">Root & Bond Line Inspection</a></h3>
                        <p>The root section and internal bond lines are critical to structural integrity. Our service employs UT, PAUT, and visual inspection to assess root laminate condition, bond adhesive integrity, adhesive gap width, and bonding uniformity. Detects delaminations, voids, disbonds, and adhesive cracks within structural joints.</p>
                        <div class="dv-service-card__standards">
                            <span>DNV GL ST-0376</span>
                            <span>IEC 61400-5</span>
                            <span>EN 583</span>
                        </div>
                        <a href="blade-inspection-services.php#root" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- Service 6: Drone Inspection -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/7.jpg" alt="Drone Based UAV Wind Blade Inspection" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="blade-inspection-services.php#drone">Drone-Based Blade Inspection</a></h3>
                        <p>Safe, efficient, and cost-effective UAV visual examination of wind turbine blades without rope access, aerial platforms, or turbine lowering. DGCA-certified drone operators deploy high-resolution imaging to examine external surfaces for erosion, cracks, lightning strike damage, coating failure, and structural anomalies.</p>
                        <div class="dv-service-card__standards">
                            <span>EN 13018</span>
                            <span>IEC 61400-5</span>
                            <span>DGCA RPAS</span>
                        </div>
                        <a href="blade-inspection-services.php#drone" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- Service 7: Tower Inspection -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/8.png" alt="Wind Turbine Tower Structural Inspection" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="blade-inspection-services.php#tower">Wind Turbine Tower Inspection</a></h3>
                        <p>Structural integrity, coating condition, and corrosion status assessment for onshore and offshore wind turbine towers. Includes visual examination, bolted flange connection assessment, weld inspection using UT and MT, and coating thickness measurement. Reports support O&M planning and life extension programmes.</p>
                        <div class="dv-service-card__standards">
                            <span>ISO 9013</span>
                            <span>ISO 12944</span>
                            <span>DNV GL ST-0359</span>
                        </div>
                        <a href="blade-inspection-services.php#tower" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- Service 8: Third-Party Audit -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/6.jpg" alt="Third Party Blade Inspection and Audit Services" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="blade-inspection-services.php#audit">Third-Party Inspection & Audit</a></h3>
                        <p>Independent third-party inspection and audit services during blade manufacturing, transport, installation, and commissioning. Verifies compliance with project specifications, quality plans, and international standards. Delivered with full technical independence for quality assurance and dispute resolution.</p>
                        <div class="dv-service-card__standards">
                            <span>ISO 9001:2015</span>
                            <span>IEC 61400-5</span>
                            <span>OEM Specifications</span>
                        </div>
                        <a href="blade-inspection-services.php#audit" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    
    <!-- NDT Methods Section -->
    <section class="dv-services-section dv-section--alt" id="ndt-methods">
        <div class="dv-container">
            <div class="dv-services-header">
                <span class="dv-section-badge">Technical Methods</span>
                <h2>NDT Inspection Methods</h2>
                <p>Our certified NDT engineers deploy multiple non-destructive testing methods tailored to specific inspection requirements, material types, and defect detection objectives.</p>
            </div>
            
            <div class="dv-services-grid">
                <!-- NDT 1: Visual Testing -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/1.jpg" alt="Visual Testing VT Blade Inspection" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="non-destructive-testing.php#vt">Visual Testing (VT)</a></h3>
                        <p>Foundational inspection method for all blade programmes. Direct and remote visual examination of external surfaces and internal structural elements using high-resolution cameras, borescopes, and endoscopes. Conducted by qualified VT Level II personnel in accordance with EN 13018 and ISO 17637.</p>
                        <div class="dv-service-card__standards">
                            <span>EN 13018</span>
                            <span>ISO 17637</span>
                            <span>ISO 3059</span>
                        </div>
                        <a href="non-destructive-testing.php#vt" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- NDT 2: Conventional UT -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/3.jpg" alt="Conventional Ultrasonic Testing UT" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="ultrasonic-testing-ut.php">Ultrasonic Testing (UT)</a></h3>
                        <p>Applied for thickness measurement, laminate condition assessment, and defect detection in composite blade materials. Pulse-echo and through-transmission methods selected based on material type and defect sensitivity requirements. Portable digital flaw detectors provide real-time data with full storage capability.</p>
                        <div class="dv-service-card__standards">
                            <span>EN 583-1</span>
                            <span>ASTM E114</span>
                            <span>ISO 16811</span>
                        </div>
                        <a href="ultrasonic-testing-ut.php" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- NDT 3: Phased Array UT -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/2.jpg" alt="Phased Array Ultrasonic Testing PAUT" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="phased-array-ultrasonic-testing.php">Phased Array UT (PAUT)</a></h3>
                        <p>Advanced multi-element transducer technology providing superior defect detection, precise sizing, and comprehensive coverage. Full volumetric coverage of critical blade zones with minimal false-call rate. Encoded scan data ensures complete traceability for client review and certification records.</p>
                        <div class="dv-service-card__standards">
                            <span>ASTM E2491</span>
                            <span>ISO 13588</span>
                            <span>EN 583 Series</span>
                        </div>
                        <a href="phased-array-ultrasonic-testing.php" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- NDT 4: Magnetic Particle Testing -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/4.jpg" alt="Magnetic Particle Testing MT" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="non-destructive-testing.php#mt">Magnetic Particle Testing (MT)</a></h3>
                        <p>Applied to ferromagnetic components including metallic root inserts, fastener systems, studs, and tower attachment hardware. High sensitivity detection of surface and near-surface discontinuities including cracks, seams, and fatigue failures in ferrous materials.</p>
                        <div class="dv-service-card__standards">
                            <span>ISO 17638</span>
                            <span>EN ISO 23278</span>
                            <span>ASTM E1444</span>
                        </div>
                        <a href="non-destructive-testing.php#mt" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- NDT 5: Dye Penetrant Testing -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/5.jpg" alt="Dye Penetrant Testing PT Liquid Penetrant" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="non-destructive-testing.php#pt">Dye Penetrant Testing (PT)</a></h3>
                        <p>Detection of surface-breaking defects in non-porous composite, metallic, and coated components. Particularly effective for gel coat and painted blade surfaces — identifying surface cracks, porosity clusters, delaminations open to the surface, and impact damage. Fluorescent and colour contrast systems available.</p>
                        <div class="dv-service-card__standards">
                            <span>ISO 3452</span>
                            <span>EN ISO 23277</span>
                            <span>ASTM E165</span>
                        </div>
                        <a href="non-destructive-testing.php#pt" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
                
                <!-- NDT 6: Combined NDT -->
                <article class="dv-service-card">
                    <div class="dv-service-card__image">
                        <img src="img/service/single/6.jpg" alt="Comprehensive Non-Destructive Testing NDT" loading="lazy">
                    </div>
                    <div class="dv-service-card__content">
                        <h3><a href="non-destructive-testing.php">Complete NDT Solutions</a></h3>
                        <p>Full range of NDT methods including RT, MT, PT, VT, UT, and PAUT to ensure material integrity without damage. Combination of methods selected based on component type, accessibility, defect sensitivity requirements, and applicable standards for comprehensive structural assessment.</p>
                        <div class="dv-service-card__standards">
                            <span>ASME Section V</span>
                            <span>ISO 9712</span>
                            <span>ASNT SNT-TC-1A</span>
                        </div>
                        <a href="non-destructive-testing.php" class="dv-service-card__link">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"/>
                                <polyline points="12 5 19 12 12 19"/>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <section class="dv-why-choose" id="why-choose">
        <div class="dv-container">
            <div class="dv-services-header">
                <span class="dv-section-badge">Our Advantage</span>
                <h2>Why Choose Us</h2>
                <p>In a global wind energy inspection market defined by technical complexity and stringent quality requirements, our differentiated capability positions us as the preferred inspection partner.</p>
            </div>
            
            <div class="dv-features-grid">
                <div class="dv-feature-card">
                    <div class="dv-feature-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>International Standards Compliance</h3>
                    <p>Every inspection performed in strict accordance with ISO, EN, DNV GL, and IEC standards. Documentation accepted by international OEMs, certification bodies, and regulatory authorities.</p>
                </div>
                
                <div class="dv-feature-card">
                    <div class="dv-feature-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="2" x2="12" y2="12"/>
                            <line x1="12" y1="12" x2="17" y2="17"/>
                        </svg>
                    </div>
                    <h3>Advanced PAUT Technology</h3>
                    <p>Semi-automatic and manual Phased Array UT systems — the gold standard for composite blade inspection — providing superior defect detection, precise sizing, and complete scan data traceability.</p>
                </div>
                
                <div class="dv-feature-card">
                    <div class="dv-feature-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3>Certified & Experienced Personnel</h3>
                    <p>All personnel hold current Level II or Level III certification from ASNT, PCN, and ISO 9712 schemes with demonstrable hands-on experience in wind blade NDT environments.</p>
                </div>
                
                <div class="dv-feature-card">
                    <div class="dv-feature-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M16.94 16.94l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M16.94 7.06l1.42-1.42"/>
                        </svg>
                    </div>
                    <h3>Wind Blade Domain Expertise</h3>
                    <p>We are specialists — not generalists. Exclusive focus on wind turbine blade and structure inspection means deep domain knowledge, proven procedures, and sector-specific competency.</p>
                </div>
                
                <div class="dv-feature-card">
                    <div class="dv-feature-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                        </svg>
                    </div>
                    <h3>Rapid Mobilisation</h3>
                    <p>Inspection readiness for international mobilisation on short notice. Pre-qualified procedures, calibrated equipment sets, and experienced field teams enable responsive deployment.</p>
                </div>
                
                <div class="dv-feature-card">
                    <div class="dv-feature-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10 9 9 9 8 9"/>
                        </svg>
                    </div>
                    <h3>Digital Inspection Reporting</h3>
                    <p>All reports produced in structured electronic formats with annotated scan images, photographic evidence, defect maps, and findings designed for immediate client decision-making.</p>
                </div>
                
                <div class="dv-feature-card">
                    <div class="dv-feature-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                            <polyline points="16 17 21 12 16 7"/>
                            <line x1="21" y1="12" x2="9" y2="12"/>
                        </svg>
                    </div>
                    <h3>Independent Third-Party Capability</h3>
                    <p>Third-party inspection and audit services delivered with full technical independence, providing objective, unbiased inspection intelligence for quality assurance and dispute resolution.</p>
                </div>
                
                <div class="dv-feature-card">
                    <div class="dv-feature-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <line x1="3" y1="9" x2="21" y2="9"/>
                            <line x1="9" y1="21" x2="9" y2="9"/>
                        </svg>
                    </div>
                    <h3>Investor & Tender-Grade Positioning</h3>
                    <p>Inspection outputs and quality documentation meet standards required for international tender pre-qualification, EPC submissions, lender technical due diligence, and asset acquisition.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Standards Section -->
    <section class="dv-standards-section" id="standards">
        <div class="dv-container">
            <div class="dv-services-header">
                <span class="dv-section-badge">Quality Assurance</span>
                <h2>International Standards We Follow</h2>
                <p>We operate within internationally recognised frameworks ensuring outputs accepted by clients, regulators, and certification bodies worldwide.</p>
            </div>
            
            <div class="dv-standards-grid">
                <div class="dv-standard-item">
                    <h4>ISO 9001:2015</h4>
                    <p>Quality Management System</p>
                </div>
                <div class="dv-standard-item">
                    <h4>ISO 9712</h4>
                    <p>NDT Personnel Certification</p>
                </div>
                <div class="dv-standard-item">
                    <h4>IEC 61400</h4>
                    <p>Wind Turbine Standards</p>
                </div>
                <div class="dv-standard-item">
                    <h4>DNV GL ST-0376</h4>
                    <p>Rotor Blade Structural Design</p>
                </div>
                <div class="dv-standard-item">
                    <h4>EN 4179 / NAS 410</h4>
                    <p>Aerospace NDT Qualification</p>
                </div>
                <div class="dv-standard-item">
                    <h4>ASNT SNT-TC-1A</h4>
                    <p>Personnel Qualification</p>
                </div>
                <div class="dv-standard-item">
                    <h4>ISO 14001</h4>
                    <p>Environmental Management</p>
                </div>
                <div class="dv-standard-item">
                    <h4>EN 13018</h4>
                    <p>Visual Testing General Principles</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="dv-cta-section">
        <div class="dv-container">
            <div class="dv-cta-content">
                <h2>Request an Inspection</h2>
                <p>Submit your project details and a member of our inspection engineering team will respond within one business day with a preliminary assessment and indicative scope proposal.</p>
                <div class="dv-cta-buttons">
                    <a href="contact.php" class="dv-btn dv-btn--white">Request Inspection</a>
                    <a href="contact.php#whatsapp" class="dv-btn dv-btn--outline-white">Connect via WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Industries Section -->
    <section class="dv-industries-section" id="industries">
        <div class="dv-container">
            <div class="dv-services-header">
                <span class="dv-section-badge">Who We Serve</span>
                <h2>Industries & Sectors</h2>
                <p>Our inspection expertise is deployed across the full spectrum of wind energy asset classes and related industrial sectors.</p>
            </div>
            
            <div class="dv-industries-grid">
                <div class="dv-industry-card">
                    <h3>Wind Turbine OEM Manufacturing</h3>
                    <p>In-process and final inspection, PAUT data evaluation, quality system development, and third-party audit services aligned with IEC 61400-5, DNV GL ST-0376, and customer-specific NDE specifications.</p>
                </div>
                
                <div class="dv-industry-card">
                    <h3>Wind Farm Operations & Maintenance</h3>
                    <p>Scheduled and responsive inspection support via drone surveys, structural NDT, erosion assessment, and life extension programmes for optimal asset performance and availability.</p>
                </div>
                
                <div class="dv-industry-card">
                    <h3>Offshore Wind Energy</h3>
                    <p>Specialist inspection capability for offshore blade and tower structures, supported by marine logistics, offshore safety certification, and environmentally adapted inspection systems.</p>
                </div>
                
                <div class="dv-industry-card">
                    <h3>EPC Contractors & Project Developers</h3>
                    <p>Independent third-party inspection during blade manufacturing, transport, installation, and commissioning to verify compliance with project specifications and quality plans.</p>
                </div>
                
                <div class="dv-industry-card">
                    <h3>Composite Manufacturing</h3>
                    <p>NDT solutions for advanced composite structures beyond wind energy, including aerospace, marine, and industrial composite manufacturing environments.</p>
                </div>
                
                <div class="dv-industry-card">
                    <h3>Renewable Energy IPPs</h3>
                    <p>Asset management inspection support including technical due diligence, condition assessment, and life extension evaluations for wind energy portfolios.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer-new.php';?>
    
    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/animations.js"></script>
    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('dvHeader');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Mobile menu toggle
        const mobileMenuBtn = document.querySelector('.dv-mobile-menu-btn');
        const mobileNav = document.querySelector('.dv-mobile-nav');
        if (mobileMenuBtn && mobileNav) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileNav.classList.toggle('active');
                this.classList.toggle('active');
            });
        }
    </script>
</body>
</html>
