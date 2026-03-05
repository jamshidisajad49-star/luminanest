<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curate Your Sanctuary with Lumina Nest - Home Furnishings & Decor</title>
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%238B30E2' d='M12 2L1 12H4.5V22H19.5V12H23L12 2ZM12 4.09L20 11.5H16V20H8V11.5H4L12 4.09Z'%3E%3C/path%3E%3C/svg%3E">
    <link href="https://fonts.bunny.net/css?family=merriweather:400,700" rel="stylesheet">
    <style>
        /*
         *  ITCSS (Inverted Triangle CSS) Structure
         *
         *  1. Settings: Global variables, config switches.
         *  2. Tools: Mixins, functions (e.g., for responsive breakpoints).
         *  3. Generic: Reset, box-sizing, normalize.
         *  4. Elements: Base styles for HTML elements (h1, a, etc.).
         *  5. Objects: Undecorated design patterns (containers, wrappers).
         *  6. Components: Specific UI components (buttons, nav, cards).
         *  7. Utilities: High-specificity, often single-purpose classes.
         *  8. Trumps: Overrides, helper classes (e.g., !important).
         */

        /* ==========================================================================
           1. Settings
           ========================================================================== */
        :root {
            /* Colors */
            --color-primary-50: rgb(247, 241, 253);
            --color-primary-100: rgb(239, 227, 252);
            --color-primary-200: rgb(219, 189, 248);
            --color-primary-300: rgb(193, 143, 244);
            --color-primary-400: rgb(163, 87, 239);
            --color-primary-500: rgb(139, 48, 226); /* Accent color */
            --color-primary-600: rgb(118, 28, 203);
            --color-primary-700: rgb(100, 24, 169);
            --color-primary-800: rgb(84, 25, 137);
            --color-primary-900: rgb(69, 21, 110);

            --color-surface: rgb(252, 252, 253);
            --color-text-primary: rgb(24, 24, 27);
            --color-white: rgb(255, 255, 255);
            --color-black: rgb(0, 0, 0);

            /* Typography */
            --font-family-body: 'Merriweather', serif;
            --font-weight-body: 400;
            --font-weight-heading: 700;

            /* Spacing */
            --spacing-unit: 1rem; /* 16px */
            --section-padding-y: 5rem; /* 80px */
            --border-radius-card: 24px;

            /* Transitions */
            --transition-speed: 0.3s ease-in-out;
        }

        /* Responsive Breakpoints (Mobile-first) */
        --breakpoint-sm: 640px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 1024px;

        /* ==========================================================================
           2. Tools (No mixins or complex functions in vanilla CSS, direct values used)
           ========================================================================== */

        /* ==========================================================================
           3. Generic
           ========================================================================== */
        *, *::before, *::after {
            box-sizing: border-box;
        }

        html {
            font-size: 100%; /* Base for rem units */
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: var(--font-family-body);
            font-weight: var(--font-weight-body);
            line-height: 1.6;
            color: var(--color-text-primary);
            background-color: var(--color-surface);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* ==========================================================================
           4. Elements
           ========================================================================== */
        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-family-body);
            font-weight: var(--font-weight-heading);
            margin-top: 0;
            margin-bottom: 0.5em;
            color: var(--color-primary-800);
            line-height: 1.2;
        }

        h1 { font-size: 2.5rem; /* 40px */ }
        h2 { font-size: 2rem;   /* 32px */ }
        h3 { font-size: 1.75rem; /* 28px */ }
        h4 { font-size: 1.5rem; /* 24px */ }
        p {
            margin-bottom: 1em;
            font-size: 1rem;
        }

        a {
            color: var(--color-primary-500);
            text-decoration: none;
            transition: color var(--transition-speed);
        }

        a:hover {
            color: var(--color-primary-700);
            text-decoration: underline;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* ==========================================================================
           5. Objects (Containers, wrappers)
           ========================================================================== */
        .o-container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: var(--spacing-unit);
            padding-right: var(--spacing-unit);
        }
        
        .o-section {
            padding-top: var(--section-padding-y);
            padding-bottom: var(--section-padding-y);
            position: relative; /* For stacking contexts with effects */
        }

        /* ==========================================================================
           6. Components
           ========================================================================== */

        /* BEM: block--element--modifier */

        /* Site Header */
        .site-header {
            background-color: var(--color-surface);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05); /* Subtle shadow */
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 1rem 0;
        }

        .site-header__wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .site-header__logo {
            font-size: 1.5rem;
            font-weight: var(--font-weight-heading);
            color: var(--color-primary-700);
            text-decoration: none;
            padding-left: var(--spacing-unit); /* Ensure padding for mobile */
        }
        
        /* Navigation */
        .main-nav__toggle {
            display: none; /* Hidden by default, shown on mobile */
            font-size: 2rem;
            background: none;
            border: none;
            color: var(--color-text-primary);
            cursor: pointer;
            padding-right: var(--spacing-unit);
        }

        .main-nav__list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Mobile: stacked */
            position: absolute; /* Mobile: overlay */
            top: 100%;
            left: 0;
            width: 100%;
            background-color: var(--color-surface);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        }

        .main-nav__list--open {
            max-height: 500px; /* Sizing for smooth transition */
            padding-bottom: 1rem;
        }

        .main-nav__item {
            text-align: center;
            padding: 0.75rem var(--spacing-unit);
        }

        .main-nav__link {
            display: block;
            font-size: 1.1rem;
            color: var(--color-text-primary);
            padding: 0.5rem 0;
        }
        
        .main-nav__link:hover {
            color: var(--color-primary-500);
            text-decoration: none;
        }

        /* CTA Button */
        .button {
            display: inline-flex;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: var(--font-weight-heading);
            color: var(--color-white);
            background-color: var(--color-primary-500);
            border: none;
            cursor: pointer;
            transition: background-color var(--transition-speed), transform var(--transition-speed);
            justify-content: center;
            align-items: center;
            text-decoration: none;
        }

        .button--rounded-pill {
            border-radius: 9999px; /* Fully rounded */
        }

        .button:hover {
            background-color: var(--color-primary-600);
            transform: translateY(-2px); /* Subtle lift effect */
            text-decoration: none;
        }

        .site-header__cta {
            display: none; /* Desktop only */
            padding-right: var(--spacing-unit);
        }
        
        /* Mobile-first: Desktop styles */
        @media (min-width: var(--breakpoint-md)) {
            .main-nav {
                display: flex;
                align-items: center;
            }

            .main-nav__toggle {
                display: none;
            }

            .main-nav__list {
                position: static;
                flex-direction: row;
                max-height: none;
                overflow: visible;
                box-shadow: none;
                padding: 0;
            }

            .site-header__logo {
                padding-left: 0; /* Remove extra padding since container padding handles it */
            }

            .main-nav__item {
                padding: 0 1rem;
            }

            .site-header__cta {
                display: block;
            }
        }

        /* Hero Banner */
        .hero-banner {
            background: linear-gradient(135deg, var(--color-primary-50), var(--color-primary-200));
            text-align: center;
            overflow: hidden;
        }
        
        .hero-banner__wrapper {
            display: flex;
            flex-direction: column; /* Mobile: image on top, text below */
            align-items: center;
            gap: 2rem;
        }

        .hero-banner__content {
            padding: 2rem 0;
        }

        .hero-banner__headline {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            color: var(--color-primary-800);
        }
        
        .hero-banner__subheadline {
            font-size: 1.2rem;
            color: var(--color-text-primary);
            max-width: 600px;
            margin: 0 auto 2rem auto;
        }

        .hero-banner__image-container {
            width: 100%; /* Mobile: full width */
            padding-bottom: var(--spacing-unit);
        }
        
        .hero-banner__image {
            border-radius: var(--border-radius-card);
            object-fit: cover;
            width: 100%;
            height: auto;
            transform: scale(1);
            transition: transform var(--transition-speed);
        }

        .hero-banner__image:hover {
            transform: scale(1.02);
        }

        @media (min-width: var(--breakpoint-md)) {
            .hero-banner__wrapper {
                flex-direction: row-reverse; /* Desktop: text on left, image on right */
                text-align: left;
                gap: 4rem;
            }
            
            .hero-banner__content {
                flex: 1;
                padding-left: 0;
            }

            .hero-banner__image-container {
                flex: 1;
                padding-top: var(--spacing-unit);
                padding-right: var(--spacing-unit);
            }

            .hero-banner__headline {
                font-size: 3.5rem; /* Larger on desktop */
            }

            .hero-banner__subheadline {
                margin-left: 0;
                margin-right: 0;
            }
        }

        /* Bento Collections */
        .bento-collections__grid {
            display: grid;
            gap: 1.5rem;
            grid-template-columns: 1fr; /* Mobile: single column */
        }

        .bento-collections__card {
            border: 1px solid var(--color-primary-100);
            border-radius: var(--border-radius-card);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-align: center;
            background-color: var(--color-white);
            transition: transform var(--transition-speed);
        }

        .bento-collections__card:hover {
            transform: scale(1.02); /* Scale subtle effect */
        }

        .bento-collections__image-wrapper {
            /* Ensures aspect ratio for responsive images if desired, or just direct img styling */
            width: 100%;
            height: 250px; /* Fixed height for small images on mobile */
            overflow: hidden;
        }
        .bento-collections__card--large-image {
            height: 400px; /* Fixed height for large images on mobile */
        }

        .bento-collections__image {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Cover the area, crop if needed */
        }
        
        .bento-collections__content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .bento-collections__title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--color-primary-700);
        }
        
        .bento-collections__description {
            font-size: 1rem;
            color: var(--color-text-primary);
        }

        @media (min-width: var(--breakpoint-md)) {
            .bento-collections__grid {
                 /* 2 or 3 columns for desktop, depending on the bento layout logic */
                grid-template-columns: repeat(2, 1fr); /* Default to 2 columns */
            }

            .bento-collections__card {
                height: auto; /* Reset fixed height for desktop to allow grid to manage */
            }

            .bento-collections__image-wrapper {
                height: 100%; /* Let grid manage height */
            }

             /* Bento Zigzag Pattern */
            .bento-collections__card--large-left {
                grid-column: 1 / 2;
                grid-row: span 2;
            }
            .bento-collections__card--small-right-top {
                grid-column: 2 / 3;
                grid-row: 1 / 2;
            }
            .bento-collections__card--small-right-bottom {
                grid-column: 2 / 3;
                grid-row: 2 / 3;
            }
            .bento-collections__card--large-right {
                grid-column: 2 / 3;
                grid-row: span 2;
            }
            .bento-collections__card--small-left {
                grid-column: 1 / 2;
                grid-row: span 1; /* Occupy one row */
            }

            /* Adjust image height for large cards on desktop */
            .bento-collections__card--large-left .bento-collections__image-wrapper,
            .bento-collections__card--large-right .bento-collections__image-wrapper {
                height: 100%; /* Take full height of the card */
            }

            /* Overwrite image sizes for zigzag, ensuring consistent aspect */
            .bento-collections__card--large-left .bento-collections__image,
            .bento-collections__card--large-right .bento-collections__image {
                height: 100%;
                max-height: 768px; /* Max height for large images */
            }
            .bento-collections__card--small-right-top .bento-collections__image,
            .bento-collections__card--small-right-bottom .bento-collections__image,
            .bento-collections__card--small-left .bento-collections__image {
                height: 384px; /* Fixed height for small images on desktop */
            }
        }

        /* Design Services */
        .design-services__title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.2rem;
            color: var(--color-primary-800);
        }

        .design-services__grid {
            display: grid;
            grid-template-columns: 1fr; /* Mobile: 1 column */
            gap: 2.5rem;
            align-items: start;
        }
        
        .design-services__card {
            text-align: center;
            background-color: var(--color-white);
            padding: 2rem;
            border-radius: var(--border-radius-card);
            border: 1px solid var(--color-primary-100);
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform var(--transition-speed);
        }

        .design-services__card:hover {
            transform: scale(1.02);
        }

        .design-services__icon-wrapper {
            width: 128px; /* Consistent size for hexagon */
            height: 128px;
            margin-bottom: 1.5rem;
            overflow: hidden;
            clip-path: polygon(50% 0%, 90% 25%, 90% 75%, 50% 100%, 10% 75%, 10% 25%);
            background-color: var(--color-primary-50);
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 0 8px rgba(139, 48, 226, 0.1); /* Subtle ring effect */
        }

        .design-services__icon-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(80%); /* De-emphasize color to let hexagon shape stand out */
            transition: filter var(--transition-speed);
        }

        .design-services__card:hover .design-services__icon-image {
            filter: grayscale(0%); /* Highlight on hover */
        }

        .design-services__card-title {
            font-size: 1.6rem;
            margin-bottom: 0.75rem;
            color: var(--color-primary-700);
        }

        .design-services__card-description {
            font-size: 1rem;
            color: var(--color-text-primary);
            max-width: 300px;
        }

        @media (min-width: var(--breakpoint-md)) {
            .design-services__grid {
                grid-template-columns: repeat(3, 1fr); /* Desktop: 3 columns */
            }
        }

        /* Brand Philosophy */
        .brand-philosophy {
            background-color: var(--color-surface);
        }

        .brand-philosophy__wrapper {
            display: flex;
            flex-direction: column; /* Mobile: text then image */
            gap: 2rem;
            align-items: center;
        }

        .brand-philosophy__content {
            flex: 1;
            text-align: center;
        }

        .brand-philosophy__title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--color-primary-800);
        }
        
        .brand-philosophy__text {
            font-size: 1.1rem;
            line-height: 1.8;
            max-width: 600px;
            margin: 0 auto;
            color: var(--color-text-primary);
        }
        
        .brand-philosophy__image-container {
            flex: 1;
            width: 100%;
            max-width: 640px; /* Limit image size */
            padding-bottom: var(--spacing-unit); /* Add some padding around the image for vertical spacing */
        }
        
        .brand-philosophy__image {
            border-radius: var(--border-radius-card);
            box-shadow: 0 10px 30px rgba(139, 48, 226, 0.1); /* Subtle shadow effect */
            transition: transform var(--transition-speed);
        }

        .brand-philosophy__image:hover {
            transform: scale(1.02);
        }

        @media (min-width: var(--breakpoint-md)) {
            .brand-philosophy__wrapper {
                flex-direction: row-reverse; /* Desktop: image left, text right */
                text-align: left;
                gap: 4rem;
            }

            .brand-philosophy__content {
                text-align: left;
            }

            .brand-philosophy__text {
                margin-left: 0;
                margin-right: 0;
            }
            
            .brand-philosophy__image-container {
                padding-top: var(--spacing-unit);
                padding-right: var(--spacing-unit); /* Push image slightly right */
            }
        }

        /* Client Testimonials */
        .client-testimonials__title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.2rem;
            color: var(--color-primary-800);
        }

        .client-testimonials__grid {
            display: flex;
            flex-direction: column; /* Mobile: stacked */
            gap: 2rem;
        }

        .client-testimonials__card {
            background-color: var(--color-white);
            border: 1px solid var(--color-primary-100);
            border-radius: var(--border-radius-card);
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); /* Subtle shadow */
            transition: transform var(--transition-speed);
        }
        
        .client-testimonials__card:hover {
            transform: translateY(-5px); /* Subtle lift effect on hover */
        }

        .client-testimonials__avatar-wrapper {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 1.5rem auto;
            border: 3px solid var(--color-primary-300); /* Border around avatar */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .client-testimonials__avatar {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1);
            transition: transform var(--transition-speed);
        }
        
        .client-testimonials__card:hover .client-testimonials__avatar {
            transform: scale(1.1); /* Zoom effect on avatar */
        }

        .client-testimonials__quote {
            font-style: italic;
            font-size: 1.15rem;
            margin-bottom: 1.5rem;
            color: var(--color-text-primary);
        }

        .client-testimonials__author {
            font-weight: var(--font-weight-heading);
            color: var(--color-primary-700);
            font-size: 1.05rem;
        }

        @media (min-width: var(--breakpoint-md)) {
            .client-testimonials__grid {
                flex-direction: row; /* Desktop: in a row */
                justify-content: center;
            }
            .client-testimonials__card {
                flex: 1; /* Distribute space evenly */
                max-width: 380px; /* Max width for cards if grid doesn't manage */
            }
        }

        /* Site Footer */
        .site-footer {
            background-color: var(--color-primary-800); /* Dark background */
            color: var(--color-white); /* Light text for contrast */
            padding-top: var(--section-padding-y);
            padding-bottom: var(--section-padding-y);
            font-size: 0.95rem;
        }

        .site-footer a {
            color: var(--color-primary-200);
        }
        .site-footer a:hover {
            color: var(--color-primary-50);
            text-decoration: underline;
        }

        .site-footer__grid {
            display: grid;
            grid-template-columns: 1fr; /* Mobile: single column */
            gap: 2.5rem;
            border-bottom: 1px solid var(--color-primary-700);
            padding-bottom: 2.5rem;
            margin-bottom: 2.5rem;
        }

        .site-footer__column {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            text-align: center; /* Center content on mobile */
        }
        
        .site-footer__logo {
            font-size: 1.8rem;
            font-weight: var(--font-weight-heading);
            color: var(--color-primary-50);
            margin-bottom: 1rem;
            display: block;
        }

        .site-footer__contact-item {
            display: flex;
            align-items: center;
            justify-content: center; /* Center on mobile */
            gap: 0.5rem;
        }

        .site-footer__contact-item svg {
            fill: var(--color-primary-300);
            width: 20px;
            height: 20px;
        }

        .site-footer__cta-text {
            font-size: 1.2rem;
            font-weight: var(--font-weight-heading);
            margin-bottom: 1.5rem;
            color: var(--color-primary-100);
        }

        .site-footer__map-wrapper {
            background-color: var(--color-primary-700);
            border-radius: var(--border-radius-card);
            overflow: hidden;
            height: 250px;
            width: 100%;
            min-height: 200px;
            border: 1px solid var(--color-primary-500);
        }

        .site-footer__map {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .site-footer__bottom {
            text-align: center;
        }
        
        .site-footer__copyright {
            margin-bottom: 1rem;
            color: var(--color-primary-100);
        }

        .site-footer__legal-links a {
            margin: 0 0.75rem;
        }

        @media (min-width: var(--breakpoint-md)) {
            .site-footer__grid {
                grid-template-columns: 1fr 1.5fr; /* 2 columns: info and map */
                text-align: left; /* Align text left on desktop */
            }

            .site-footer__column {
                align-items: flex-start; /* Align items to start */
            }

            .site-footer__contact-item {
                justify-content: flex-start; /* Align items to start */
            }

            .site-footer__map-wrapper {
                height: 300px;
            }
        }


        /* Cookie Consent Banner */
        .cookie-consent {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: var(--color-primary-900); /* Darker background for contrast */
            color: var(--color-white);
            padding: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            z-index: 1000;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            transform: translateY(100%);
            transition: transform 0.5s ease-out;
        }

        .cookie-consent--show {
            transform: translateY(0);
        }

        .cookie-consent__text {
            text-align: center;
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.4;
            color: var(--color-primary-100);
        }

        .cookie-consent__button {
            background-color: var(--color-primary-500);
            color: var(--color-white);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            cursor: pointer;
            font-weight: var(--font-weight-heading);
            transition: background-color var(--transition-speed);
        }

        .cookie-consent__button:hover {
            background-color: var(--color-primary-600);
        }

        @media (min-width: var(--breakpoint-md)) {
            .cookie-consent {
                flex-direction: row;
                justify-content: space-between;
                padding: 1rem 2rem;
            }
            .cookie-consent__text {
                text-align: left;
                flex-grow: 1;
            }
            .cookie-consent__button {
                margin-left: 1rem;
                flex-shrink: 0;
            }
        }
        
        /* Utility Classes */
        .u-text-center { text-align: center; }
        .u-mb-lg { margin-bottom: 3rem; }
        .u-mb-md { margin-bottom: 2rem; }
        .u-mb-sm { margin-bottom: 1rem; }

        /* Effects */
        .scale-on-hover {
            transition: transform var(--transition-speed);
        }
        .scale-on-hover:hover {
            transform: scale(1.02);
        }

        /* Basic Fade-in on scroll (JS controlled) */
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            will-change: opacity, transform;
        }

        .fade-in-section--is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YTP08B4056"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YTP08B4056');
</script>

    
</head>
<body>
    <header class="site-header">
        <div class="o-container site-header__wrapper">
            <a href="#" class="site-header__logo">Lumina Nest</a>
            <nav class="main-nav">
                <button class="main-nav__toggle" aria-label="Toggle navigation">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 6H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <ul class="main-nav__list">
                    <li class="main-nav__item"><a href="#collections" class="main-nav__link">Collections</a></li>
                    <li class="main-nav__item"><a href="#services" class="main-nav__link">Services</a></li>
                    <li class="main-nav__item"><a href="#philosophy" class="main-nav__link">Philosophy</a></li>
                    <li class="main-nav__item"><a href="#testimonials" class="main-nav__link">Testimonials</a></li>
                </ul>
            </nav>
            <a href="#contact" class="button button--rounded-pill site-header__cta">Book Consultation</a>
        </div>
    </header>
<main>
        <section id="hero" class="o-section hero-banner fade-in-section">
            <div class="o-container hero-banner__wrapper">
                <div class="hero-banner__image-container">
                    <img src="images/hero-modern-interior.jpeg" alt="Modern minimal living room decorated by Lumina Nest" width="1024" height="768" class="hero-banner__image">
                </div>
                <div class="hero-banner__content">
                    <h1 class="hero-banner__headline">Curate Your Sanctuary with Lumina Nest</h1>
                    <p class="hero-banner__subheadline">At our core, we believe your living space should be a reflection of your inner peace. Lumina Nest offers bespoke lighting, artisanal textiles, and custom furniture tailored to elevate your living spaces in New York and beyond, crafting environments that inspire and comfort.</p>
                    <a href="#collections" class="button button--rounded-pill">Shop Curated Decor</a>
                </div>
            </div>
        </section>

        <section id="collections" class="o-section bento-collections fade-in-section">
            <div class="o-container">
                <h2 class="u-text-center u-mb-lg">Our Exquisite Collections</h2>
                <div class="bento-collections__grid">
                    <article class="bento-collections__card bento-collections__card--large-left">
                        <div class="bento-collections__image-wrapper bento-collections__card--large-image">
                            <img src="images/collection-lighting-large.jpeg" alt="Elegant bespoke pendant lights by Lumina Nest" width="512" height="768" class="bento-collections__image">
                        </div>
                        <div class="bento-collections__content">
                            <h3 class="bento-collections__title">Bespoke Lighting</h3>
                            <p class="bento-collections__description">Discover unique, handcrafted lighting fixtures that transcend mere utility, becoming illuminating art pieces designed to infuse your space with unparalleled ambiance and character.</p>
                        </div>
                    </article>
                    <article class="bento-collections__card bento-collections__card--small-right-top">
                        <div class="bento-collections__image-wrapper">
                            <img src="images/collection-textiles-small.jpeg" alt="Luxurious handwoven throws on a sofa by Lumina Nest" width="512" height="384" class="bento-collections__image">
                        </div>
                        <div class="bento-collections__content">
                            <h3 class="bento-collections__title">Artisanal Textiles</h3>
                            <p class="bento-collections__description">Wrap yourself in comfort with our ethically sourced, handwoven throws, cushions, and rugs, each telling a story of tradition and craftsmanship.</p>
                        </div>
                    </article>
                    <article class="bento-collections__card bento-collections__card--small-right-bottom">
                        <div class="bento-collections__image-wrapper">
                            <img src="images/collection-decor-small.jpeg" alt="Minimalist ceramic vases and decor pieces by Lumina Nest" width="512" height="384" class="bento-collections__image">
                        </div>
                        <div class="bento-collections__content">
                            <h3 class="bento-collections__title">Curated Decor</h3>
                            <p class="bento-collections__description">Elevate any room with our selection of minimalist centerpieces and refined decorative accents, chosen for their understated elegance and sophisticated appeal.</p>
                        </div>
                    </article>
                    <article class="bento-collections__card bento-collections__card--small-left">
                        <div class="bento-collections__image-wrapper">
                            <img src="images/collection-objects-small.jpeg" alt="Contemporary art sculpture designed for a modern home by Lumina Nest" width="512" height="384" class="bento-collections__image">
                        </div>
                        <div class="bento-collections__content">
                            <h3 class="bento-collections__title">Art Objects</h3>
                            <p class="bento-collections__description">Discover unique gallery-quality furnishings and objects d'art that serve as focal points, adding depth and conversation to your design narrative.</p>
                        </div>
                    </article>
                    <article class="bento-collections__card bento-collections__card--large-right">
                        <div class="bento-collections__image-wrapper bento-collections__card--large-image">
                            <img src="images/collection-furniture-large.jpeg" alt="Custom-built wooden dining table for a client by Lumina Nest" width="512" height="768" class="bento-collections__image">
                        </div>
                        <div class="bento-collections__content">
                            <h3 class="bento-collections__title">Custom Furniture</h3>
                            <p class="bento-collections__description">From initial concept to final fabrication, our custom furniture is built to your exact specifications, ensuring perfect harmony with your space and lifestyle.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="services" class="o-section design-services fade-in-section">
            <div class="o-container">
                <h2 class="design-services__title">Interior Design Consultation</h2>
                <div class="design-services__grid">
                    <article class="design-services__card">
                        <div class="design-services__icon-wrapper">
                            <img src="images/service-planning-hex.jpeg" alt="Blueprint and floor plan icon for space planning" width="256" height="256" class="design-services__icon-image">
                        </div>
                        <h3 class="design-services__card-title">Intelligent Space Planning</h3>
                        <p class="design-services__card-description">We meticulously optimize the flow and functionality of every square foot, ensuring your home is both aesthetically pleasing and profoundly livable, designed to adapt to your evolving needs.</p>
                    </article>
                    <article class="design-services__card">
                        <div class="design-services__icon-wrapper">
                            <img src="images/service-materials-hex.jpeg" alt="Natural fabric swatches and wood samples for material sourcing" width="256" height="256" class="design-services__icon-image">
                        </div>
                        <h3 class="design-services__card-title">Sustainable Material Sourcing</h3>
                        <p class="design-services__card-description">Our commitment extends to sourcing only the finest ethically produced fabrics, sustainably harvested woods, and meticulously crafted metals, aligning luxury with environmental responsibility.</p>
                    </article>
                    <article class="design-services__card">
                        <div class="design-services__icon-wrapper">
                            <img src="images/service-styling-hex.jpeg" alt="Interior designer arranging decor for full-service styling" width="256" height="256" class="design-services__icon-image">
                        </div>
                        <h3 class="design-services__card-title">Full-Service Design & Styling</h3>
                        <p class="design-services__card-description">Experience a seamless, end-to-end design journey. From initial concept development to the final placement of every artisanal detail, our dedicated Lumina Nest team executes your vision flawlessly.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="philosophy" class="o-section brand-philosophy fade-in-section">
            <div class="o-container brand-philosophy__wrapper">
                <div class="brand-philosophy__image-container">
                    <img src="images/philosophy-craftsmanship.jpeg" alt="Artisan meticulously crafting sustainable furniture for Lumina Nest" width="640" height="640" class="brand-philosophy__image">
                </div>
                <div class="brand-philosophy__content">
                    <h2 class="brand-philosophy__title">The Lumina Nest Philosophy</h2>
                    <p class="brand-philosophy__text">At Lumina Nest, based in the vibrant heart of New York, we firmly believe that your immediate environment profoundly shapes your daily well-being and inspiration. We are dedicated to forging enduring relationships with independent artisans across the globe, ensuring we bring you not just products, but stories—sustainably sourced, impeccably designed home furnishings that possess timeless quality and transcend fleeting trends, enriching your home for years to come.</p>
                </div>
            </div>
        </section>

        <section id="testimonials" class="o-section client-testimonials fade-in-section">
            <div class="o-container">
                <h2 class="client-testimonials__title">Voices of Our Clients</h2>
                <div class="client-testimonials__grid">
                    <article class="client-testimonials__card">
                        <div class="client-testimonials__avatar-wrapper">
                            <img src="images/testimonial-elena.jpeg" alt="Portrait of Elena M." width="128" height="128" class="client-testimonials__avatar">
                        </div>
                        <blockquote class="client-testimonials__quote">"Lumina Nest literally transformed our Brooklyn brownstone from a house into a haven. The custom furniture pieces fit the unique architectural nuances of the space flawlessly, and the material quality is simply unparalleled. It feels like home, but elevated."</blockquote>
                        <p class="client-testimonials__author">— Elena Montoya, Brooklyn, NY</p>
                    </article>
                    <article class="client-testimonials__card">
                        <div class="client-testimonials__avatar-wrapper">
                            <img src="images/testimonial-david.jpeg" alt="Portrait of David R." width="128" height="128" class="client-testimonials__avatar">
                        </div>
                        <blockquote class="client-testimonials__quote">"The interior design consultation was an absolute eye-opener. Their team understood my minimalist vision perfectly. The bespoke lighting pieces they suggested are now the undeniable focal point of my living room—they emanate such warmth and sophistication. Truly exceptional service!"</blockquote>
                        <p class="client-testimonials__author">— David Rosenberg, Manhattan, NY</p>
                    </article>
                    <article class="client-testimonials__card">
                        <div class="client-testimonials__avatar-wrapper">
                            <img src="images/testimonial-sarah.jpeg" alt="Portrait of Sarah J." width="128" height="128" class="client-testimonials__avatar">
                        </div>
                        <blockquote class="client-testimonials__quote">"The attention to detail and unwavering commitment to sustainable practices from Lumina Nest is truly inspiring. Their artisanal textiles, especially the handwoven throws, add such a rich texture and comfort to my apartment. They are my absolute go-to for thoughtful, design-forward home elements."</blockquote>
                        <p class="client-testimonials__author">— Sarah Jenkins, Queens, NY</p>
                    </article>
                </div>
            </div>
        </section>
    </main>
<footer id="contact" class="site-footer">
        <div class="o-container">
            <div class="site-footer__grid">
                <div class="site-footer__column">
                    <a href="#" class="site-footer__logo">Lumina Nest</a>
                    <p class="site-footer__cta-text">Schedule a Design Consultation Today</p>
                    <div class="site-footer__contact-item">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <span>291 Martense Street, New York, NY 11226</span>
                    </div>
                    <div class="site-footer__contact-item">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.62 10.79V8.47c0-.28.22-.5.5-.5h4.2l-.76-2.29C11.3 5.48 11.23 5 10.63 5h-1a1 1 0 0 0-1 1v.79H6.62C5.9 6.79 5 7.69 5 8.79v5.92c0 1.1.9 2 2 2h.79V18a1 1 0 0 0 1 1h1c.6 0 .66-.48.57-.75l-.76-2.29h4.2c.28 0 .5-.22.5-.5V13.29c0-.76-.78-1.74-1.5-2.02l-2.88-.63c-.15-.03-.25-.1-.28-.24l-.1-.45c-.06-.18-.23-.3-.42-.3h-.84c-.19 0-.36.12-.42.3l-.1.45c-.03.14-.13.21-.28.24l-2.88.63c-.72.28-1.5.26-1.5-.47zm13.11-2.02l-1.57-1.57a.5.5 0 0 0-.71 0l-1.42 1.42a.5.5 0 0 0 0 .71l1.57 1.57a.5.5 0 0 0 .71 0l1.42-1.42a.5.5 0 0 0 0-.71zM18 14.5c0-.82-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5.67 1.5 1.5 1.5 1.5-.67 1.5-1.5z"/></svg>
                        <a href="tel:+19833738431">+1 (983) 373-8431</a>
                    </div>
                    <div class="site-footer__contact-item">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        <a href="mailto:info@luminanest.com">info@luminanest.com</a>
                    </div>
                </div>
                <div class="site-footer__column">
                    <p class="site-footer__cta-text">Find Our Showroom</p>
                    <div class="site-footer__map-wrapper">
                        <iframe
                            title="Google Maps location of Lumina Nest"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.8058223945413!2d-73.9632427845946!3d40.65999907933758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b3a6e9a667b%3A0xe5a1b3a1a5b8a0!2s291%20Martense%20St%2C%20Brooklyn%2C%20NY%2011226%2C%20USA!5e0!3m2!1sen!2sus!4v1678888888888!5m2!1sen!2sus"
                            height="300"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="site-footer__map"
                        ></iframe>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <p class="site-footer__copyright">&copy; 2024 Lumina Nest. All rights reserved.</p>
                <div class="site-footer__legal-links">
                    <a href="./privacy.html">Privacy Policy</a>
                    <a href="./tos.html">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <div id="cookieConsentBanner" class="cookie-consent">
        <p class="cookie-consent__text">We use cookies to improve your experience and analyze traffic. By using our website, you agree to our use of cookies per our <a href="./privacy.html" class="cookie-consent__link">Privacy Policy</a>.</p>
        <button id="acceptCookies" class="cookie-consent__button">Accept</button>
    </div>

    <script>
        // Hamburger menu toggle for mobile
        ((doc) => {
            const navToggle = doc.querySelector('.main-nav__toggle');
            const navList = doc.querySelector('.main-nav__list');

            // JSDoc-style comments for clarity
            /**
             * Toggles the visibility of the mobile navigation menu.
             * Also toggles an ARIA attribute for accessibility.
             * @function
             * @name toggleMobileNav
             * @returns {void}
             */
            const toggleMobileNav = () => {
                navList.classList.toggle('main-nav__list--open');
                const isOpen = navList.classList.contains('main-nav__list--open');
                navToggle.setAttribute('aria-expanded', isOpen);
            };

            if (navToggle && navList) {
                navToggle.addEventListener('click', toggleMobileNav);

                // Close nav when a link is clicked (for UX on single-page sites)
                navList.querySelectorAll('.main-nav__link').forEach(link => {
                    link.addEventListener('click', () => {
                        if (navList.classList.contains('main-nav__list--open')) {
                            toggleMobileNav(); // Close if open
                        }
                    });
                });
            }
        })(document);

        // Cookie Consent logic
        ((doc) => {
            const consentBanner = doc.getElementById('cookieConsentBanner');
            const acceptButton = doc.getElementById('acceptCookies');
            // Randomly generated cookie name prefix for GDPR compliance
            // Will be `consent_someRandomString_accepted`
            const COOKIE_NAME_PREFIX = 'consent_luminanest_'; // Added specific prefix

            // Generate a simple unique ID for the cookie
            // This is a legacy trace, could be simplified but kept for 'realistic imperfections'
            let uniqueId = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
            const FULL_COOKIE_NAME = COOKIE_NAME_PREFIX + uniqueId + '_accepted';

            /**
             * Sets a cookie with a given name, value, and expiration days.
             * @param {string} name - The name of the cookie.
             * @param {string} value - The value to store in the cookie.
             * @param {number} days - Number of days until the cookie expires.
             */
            const setCookie = (name, value, days) => {
                let expires = '';
                if (days) {
                    const date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = '; expires=' + date.toUTCString();
                }
                doc.cookie = name + '=' + (value || '') + expires + '; path=/; SameSite=Lax; Secure';
            };

            /**
             * Retrieves a cookie's value by its name.
             * @param {string} name - The name of the cookie to retrieve.
             * @returns {string|null} The cookie's value, or null if not found.
             */
            const getCookie = (name) => {
                const nameEQ = name + '=';
                const ca = doc.cookie.split(';');
                for (let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            };

            const checkConsent = () => {
                // Find any cookie starting with the prefix.
                // In a real scenario, this would ensure that previous acceptances
                // with older unique IDs are also recognized.
                const cookies = doc.cookie.split(';');
                let consentGiven = false;
                for (let i = 0; i < cookies.length; i++) {
                    let cookie = cookies[i].trim();
                    if (cookie.startsWith(COOKIE_NAME_PREFIX) && cookie.includes('_accepted')) {
                        consentGiven = true;
                        break;
                    }
                }

                if (!consentGiven) {
                    // Slight delay for smoother animation
                    setTimeout(() => {
                         if (consentBanner) { // Check if element exists before adding class
                            consentBanner.classList.add('cookie-consent--show');
                        }
                    }, 500);
                } else if (consentBanner) {
                    consentBanner.style.display = 'none'; // Ensure it's hidden if consent given
                }
            };
            
            if (acceptButton) { // Ensure button exists before adding listener
                acceptButton.addEventListener('click', () => {
                    setCookie(FULL_COOKIE_NAME, 'true', 365); // Store for 1 year
                    if (consentBanner) { // Check if element exists before removing class
                        consentBanner.classList.remove('cookie-consent--show');
                        setTimeout(() => {
                            consentBanner.style.display = 'none';
                        }, 500); // Hide after transition
                    }
                });
            }

            // Initial check when the page loads
            checkConsent();
        })(document);

        // Simple Fade-in on scroll effect for sections
        ((doc) => {
            const sections = doc.querySelectorAll('.fade-in-section');

            /**
             * Callback function for the Intersection Observer.
             * Reveals sections as they enter the viewport.
             * @param {IntersectionObserverEntry[]} entries - Array of observed entries.
             * @param {IntersectionObserver} observer - The IntersectionObserver instance.
             */
            const fadeInObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in-section--is-visible');
                        observer.unobserve(entry.target); // Stop observing once visible
                    }
                });
            }, {
                root: null, // viewport
                threshold: 0.1 // Trigger when 10% of the section is visible
            });

            sections.forEach(section => {
                fadeInObserver.observe(section);
            });
        })(document);
    </script>
</body>
</html>
