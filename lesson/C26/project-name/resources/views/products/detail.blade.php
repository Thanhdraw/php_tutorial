<div class="max-w-2xl mx-auto p-4">
    <h2 class="text-3xl font-bold mb-4">{{ $product['name'] }}</h2>

    <div class="bg-white shadow-md rounded-lg p-6 mb-4">
        <p class="text-xl font-semibold text-gray-800 mb-2">Price: ${{ $product['price'] }}</p>
        <p class="text-lg text-gray-600 mb-2">Status:
            <span class="{{ $product['is_new'] ? 'text-green-600' : 'text-yellow-600' }}">
                {{ $product['is_new'] ? 'New' : 'Used' }}
            </span>
        </p>
        <p class="text-gray-600 mb-4">{{ $product['description'] }}</p>
    </div>

    <p class="mt-4">

    </p>
</div>
