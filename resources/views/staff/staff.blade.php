<x-app-layout>
    <x-slot name="css">
        <link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" href="/css/responsive.dataTables.min.css" />
    </x-slot>

    <x-topbar/>

    <x-sidebar/>

    <div class="page-wrapper" style="min-height: 559px;">
        <div class="container-fluid">
            <x-staff.breadcrumb/>
            <x-staff.table :staff="$staff"/>
        </div>
    </div>

    @push('scripts')
        <script src="/js/jquery.dataTables.min.js"></script>
        <script src="/js/dataTables.responsive.min.js"></script>
        <script src="/js/staff/sortStaffTable.js"></script>
    @endpush
</x-app-layout>
