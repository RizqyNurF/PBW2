<!-- resources/views/components/TambahButton.blade.php -->

<button {{ $attributes->merge(['class' => 'bg-blue-500 text-white font-semibold px-4 py-2 rounded']) }}>
    {{ $slot }}
</button>
