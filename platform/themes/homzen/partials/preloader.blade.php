@php
    $logo = theme_option('preloader_icon') ?: (theme_option('logo') ?: 'logo-gae-removebg-preview.png');
@endphp

<div class="preload preload-container gae-preloader-container">
    <div class="gae-preloader-card">
        <div class="gae-logo-wrapper">
            <div class="gae-spinner-ring"></div>
            <div class="gae-spinner-ring-outer"></div>
            <div class="gae-logo-inner">
                {!! RvMedia::image($logo, 'Green Alliance Enterprises', attributes: ['class' => 'gae-preloader-logo'], lazy: false) !!}
            </div>
        </div>

        <div class="gae-preloader-content">
            <h4 class="gae-preloader-title">GREEN ALLIANCE ENTERPRISES</h4>
            <p class="gae-preloader-sub">Fruit & Vegetable Wholesale Market • Ahmedpur East</p>
            <div class="gae-progress-bar">
                <div class="gae-progress-fill"></div>
            </div>
        </div>
    </div>

    <style>
    .gae-preloader-container {
        position: fixed !important;
        inset: 0 !important;
        background: #111827 !important;
        z-index: 999999999 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
    }

    .gae-preloader-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 32px 36px;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(12px);
        max-width: 90vw;
        width: 360px;
    }

    .gae-logo-wrapper {
        position: relative;
        width: 130px;
        height: 130px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 22px;
    }

    .gae-logo-inner {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        background: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
        z-index: 2;
        animation: gae-pulse 2s ease-in-out infinite alternate;
    }

    .gae-preloader-logo {
        max-width: 76px;
        max-height: 76px;
        object-fit: contain;
    }

    .gae-spinner-ring {
        position: absolute;
        inset: 0;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #22c55e;
        border-right-color: #16a34a;
        animation: gae-spin 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        z-index: 1;
    }

    .gae-spinner-ring-outer {
        position: absolute;
        inset: -8px;
        border-radius: 50%;
        border: 2px dashed rgba(34, 197, 94, 0.35);
        animation: gae-spin-reverse 6s linear infinite;
    }

    .gae-preloader-content {
        width: 100%;
    }

    .gae-preloader-title {
        color: #ffffff !important;
        font-size: 15px !important;
        font-weight: 800 !important;
        letter-spacing: 1.5px !important;
        margin: 0 0 6px 0 !important;
        text-transform: uppercase !important;
    }

    .gae-preloader-sub {
        color: #9ca3af !important;
        font-size: 11px !important;
        letter-spacing: 0.5px !important;
        margin: 0 0 18px 0 !important;
        font-weight: 500 !important;
        line-height: 1.4 !important;
    }

    .gae-progress-bar {
        width: 100%;
        height: 4px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
        overflow: hidden;
        position: relative;
    }

    .gae-progress-fill {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 50%;
        background: linear-gradient(90deg, #22c55e, #16a34a, #eab308);
        border-radius: 4px;
        animation: gae-progress-anim 1.6s ease-in-out infinite;
    }

    @keyframes gae-spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @keyframes gae-spin-reverse {
        0% { transform: rotate(360deg); }
        100% { transform: rotate(0deg); }
    }

    @keyframes gae-pulse {
        0% { transform: scale(0.96); }
        100% { transform: scale(1.03); }
    }

    @keyframes gae-progress-anim {
        0% { left: -50%; width: 30%; }
        50% { left: 25%; width: 60%; }
        100% { left: 100%; width: 30%; }
    }
    </style>
</div>
