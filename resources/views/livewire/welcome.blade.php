
<div class="container mt-5" >

    <style>
         .blurred {
        filter: blur(5px);
        transition: filter 0.3s ease;
        pointer-events: none;
    }

    .loader {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999; /* Optional: keep loader on top */
    }
     .spinner-border.black {
        color: black;
    }
    </style>

    @if(session('delete'))
        <div class="alert alert-success">{{ session('delete') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-danger">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="save" wire:loading.class="blurred">
        <div class="mb-3">
            <input wire:model="name" type="text" class="form-control" placeholder="ناوی کاڵا">
             @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <input wire:model="quantity" type="number" class="form-control" placeholder="ژمارەی سێت">
                 @error('quantity') <span class="error  text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <input wire:model="grain" type="number" step="0.01" class="form-control" placeholder="ژمارەی دانە لە سێت">
                @error('grain') <span class="error  text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-3">
            <input wire:model="price" type="number" step="0.01" class="form-control" placeholder="نرخی دانە">
            @error('price') <span class="error  text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success">خەزنکردن</button>

         <div class="mt-3">
            <input wire:model.live="Search" type="text" step="0.01" class="form-control" placeholder="گەڕان">
        </div>
    </form>

    {{-- Optional: Debugging --}}
    {{-- <pre>{{ $name }} | {{ $quantity }} | {{ $grain }} | {{ $price }}</pre> --}}

    <table class="table mt-5 table-striped" wire:loading.class="blurred">
    <thead class="table-dark text-white">
        <tr>
            <th>#</th>
            <th>نرخ</th>
            <th>دانە</th>
            <th>سێت</th>
            <th>ناوی کاڵا</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($table as $item)
        <tr>
            <td>
              <button class="btn btn-danger" wire:click="Delete({{ $item->id }})"><i class="fa-solid fa-trash"></i></button>
              <button class="btn btn-primary" wire:click="Sell({{ $item->id }})"><i class="fa-solid fa-cart-shopping"></i></button>
            </td>
            <td>{{ $item->price }} IQD</td>
            <td>{{ $item->grain }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>



<p wire:offline class="alert alert-warning offline-alert" >
    ببورە هیج پەیوەندییەک بە ئینتەرنێتەوە نەدۆزرایەوە
</p>



</div>
