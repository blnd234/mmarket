<div class=" container">
    <button class="btn btn-dark mt-5" wire:click="deleteAll">سڕینەوەی فڕۆشراوەکان</button>
    <p align="right" class="text-dark">کۆی گشتی فڕۆشراوەکان ={{ number_format($totalPrice)}}</p>
    <table class="table mt-5 table-striped" wire:loading.class="blurred">
    <thead class="table-dark text-white">
        <tr>
            <th>نرخ</th>
            <th>دانە</th>
            <th>سێت</th>
            <th>ناوی کاڵا</th>
        </tr>
  <tbody>
    @forelse ($sell as $item)
        <tr>
            <td>{{ $item->price }} IQD</td>
            <td>{{ $item->grain }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->name }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4" align="center">هیچ فرۆشراوێک نەدۆزرایەوە</td>
        </tr>
    @endforelse
</tbody>
</table>
</div>
