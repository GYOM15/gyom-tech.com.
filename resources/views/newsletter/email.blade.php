<x-mail::message>
# Introduction

<h3>Email : {{$data['email'] }}</h3>
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>



