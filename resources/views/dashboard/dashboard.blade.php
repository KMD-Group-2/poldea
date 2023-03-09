<x-app-layout>
    <x-topbar :username="$username" :role="$role"/>
    <x-sidebar/>
    @push('scripts')
        <script src="/js/dashboard.js"></script>
    @endpush
</x-app-layout>
