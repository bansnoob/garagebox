<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full text-center px-4 py-2 border-4 rounded-md font-semibold text-2xl focus:outline-none disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
