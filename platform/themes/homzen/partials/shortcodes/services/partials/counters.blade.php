@php($counters = collect($counters)->filter(fn ($counter) => $counter['number']))
@if($counters->isNotEmpty())
    <style>
    .wrap-counter {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 24px;
        width: 100%;
    }
    .wrap-counter .counter-box {
        display: flex;
        align-items: center;
        gap: 14px;
        flex: 1 1 auto;
    }
    .wrap-counter .counter-box .number {
        white-space: nowrap !important;
        font-family: inherit;
        font-weight: 700;
        color: var(--primary-color, #e03e2d);
    }
    .wrap-counter .counter-box .title-count {
        font-family: inherit;
        font-weight: 700;
        line-height: 1.25;
        letter-spacing: 0.5px;
    }

    @media (max-width: 991px) {
        .wrap-counter {
            display: grid !important;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)) !important;
            gap: 16px !important;
            margin: 20px 0 !important;
        }
        .wrap-counter .counter-box {
            background: #ffffff !important;
            padding: 16px 20px !important;
            border-radius: 12px !important;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06) !important;
            border: 1px solid rgba(0, 0, 0, 0.06) !important;
            justify-content: flex-start !important;
        }
        .wrap-counter .counter-box .number {
            font-size: clamp(28px, 6.5vw, 42px) !important;
            line-height: 1 !important;
        }
        .wrap-counter .counter-box .title-count {
            font-size: 14px !important;
            line-height: 18px !important;
            text-transform: uppercase !important;
        }
    }

    @media (max-width: 480px) {
        .wrap-counter {
            grid-template-columns: 1fr !important;
            gap: 12px !important;
        }
        .wrap-counter .counter-box {
            padding: 14px 18px !important;
        }
        .wrap-counter .counter-box .number {
            font-size: 30px !important;
        }
    }
    </style>

    <div class="flat-counter tf-counter wrap-counter wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration="2000ms">
        @foreach($counters as $counter)
            <div class="counter-box">
                <div class="count-number">
                    <div class="number" {!! is_numeric($counter['number']) ? 'data-speed="2000" data-to="' . $counter['number'] . '" data-inviewport="yes"' : '' !!}>{{ is_numeric($counter['number']) ? number_format((float) $counter['number']) : $counter['number'] }}</div>
                </div>
                <div class="title-count">{{ $counter['label'] }}</div>
            </div>
        @endforeach
    </div>
@endif
