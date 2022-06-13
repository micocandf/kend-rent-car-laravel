@component('mail::message')
# Pemesanan Mobil

Halo {{Auth::user()->name}}, Anda telah melakukan pemesanan mobil. Segera lakukan pembayaran dan upload bukti pembayaran.
<br>
<br>
Jika ingin membayar secara tunai, harap hubungi CS dengan format:
<br>
Nama : 
<br>
Kode Transaksi:
<br>
Jumlah Pembayaran:
<br>
Payment: CASH

@component('mail::button', ['url'=>''])
Hubungi CS
@endcomponent

Thanks,<br>
Kend Rent a Car
@endcomponent