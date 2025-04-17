<button {{ $attributes->merge(['class' => 'bg-gray-600 py-2 px-4 rounded-lg border border-gray-500 hover:bg-gray-700 transition-colors duration-300 text-sm hover:cursor-pointer']) }}>
    {{ $slot }}
</button>
