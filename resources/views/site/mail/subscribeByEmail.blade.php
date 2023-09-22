<h1>Xin chào {{ config('app.name') }}</h1>

<h2>Khách Hàng Gửi Yêu Cầu Nhận Bản Tin</h2>
<div><b>Email: </b>{{ $data['send_email_from'] }}</div>
<br>
Cám ơn,<br>
{{ config('app.name') }}
