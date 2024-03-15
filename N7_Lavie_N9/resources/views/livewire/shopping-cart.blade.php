<!-- resources/views/livewire/shopping-cart.blade.php -->

<div>
    <h2>Shopping Cart</h2>

    <table>
        <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $item)
            sadasd
            <tr>
                <td>{{ $item->count() }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->qty }}</td>
                <td>
                    <button wire:click="removeItem('{{ $item->rowId }}')">Remove</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@livewireScripts

<script>
    window.addEventListener('cartUpdated', event => {
        window.livewire.emit('refreshComponent');
    });
</script>
