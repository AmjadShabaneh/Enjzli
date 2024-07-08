<table border="1">
    <tr>
        <th>رقم  الطلب</th>
        <th>رقم طلب  الخدمة</th>
        <th>user name</th>
        <th>user_id</th>
    </tr>
    @foreach ($offers as $offer)
    <tr>
        <td>{{$offer->id}}</td>
        <td>{{$offer->service_order_id}}</td>
        @php 
        $userId=$offer->user_id;
        $user=\App\Models\User::find($userId);
        @endphp

        <td>{{$user->name}}</td>
        <td>{{$offer->user_id}}</td>
    </tr>
    @endforeach
  
</table>