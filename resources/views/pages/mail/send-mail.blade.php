<table>
    <tr>
        <td>Dear <b>{{ $first_name.''.$last_name}},</b></td>
    </tr>
    <tr>
        <td><p>Welcome To E-shop</p></td>
    </tr>
    <tr>
        <td>Your Email-address: {{ $email }}</td>
    </tr>
    <tr>
        <td>Your Phone Number: {{ $phone_no }}</td>
    </tr>
    <tr>
        <td>Please! <a href="{{ url('/checkout') }}"> Click here </a> to continue your shopping.</td>
    </tr>
</table>
