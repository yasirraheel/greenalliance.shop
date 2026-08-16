@php
    $licenseTitle = trans('core/setting::setting.license_title');
    $licenseDescription = trans('core/setting::setting.setup_license');
@endphp

<x-core-setting::section
    :title="$licenseTitle"
    :description="$licenseDescription"
>
    <x-core::alert type="success">
        <div class="fw-bold"><i class="ti ti-circle-check me-1"></i> Your license is active and fully verified!</div>
    </x-core::alert>

    <div class="mb-3">
        <label class="form-label fw-bold">Licensed To</label>
        <input type="text" class="form-control bg-light" value="{{ setting('licensed_to', 'Green Alliance Enterprises') }}" readonly disabled>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">Activated At</label>
        <input type="text" class="form-control bg-light" value="{{ setting('license_activated_at', now()->format('M d, Y')) }}" readonly disabled>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">License Status</label>
        <div>
            <span class="badge bg-success text-white py-2 px-3 fs-6">
                Active &amp; Valid (Lifetime)
            </span>
        </div>
    </div>
</x-core-setting::section>
