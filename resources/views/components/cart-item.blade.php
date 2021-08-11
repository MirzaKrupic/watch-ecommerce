@props(['watch' => $watch])

<tr>
    <td>
      <div class="media">
        <div class="d-flex">
          <img src="{{ $watch['item']['image_url'] }}" alt="" />
        </div>
        <div class="media-body">
          <p>{{ $watch['item']['name'] }}</p>
        </div>
      </div>
    </td>
    <td>
      <h5>${{ $watch['item']['price'] }}</h5>
    </td>
    <td>
      <h5>{{ $watch['qty'] }}</h5>
    </td>
    <td>
      <h5>${{ $watch['item']['price'] * $watch['qty']  }}</h5>
    </td>
</tr>