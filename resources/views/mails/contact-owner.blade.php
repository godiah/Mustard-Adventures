<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Adventure Inquiry</title>
</head>
<body>
    <h2>New Adventure Inquiry</h2>
    <p>You have received a new inquiry from your website:</p>
    <ul>
        <li><strong>First Name:</strong> {{ $details['first_name'] }}</li>
        <li><strong>Last Name:</strong> {{ $details['last_name'] }}</li>
        <li><strong>Adventure Type:</strong> {{ $details['adventure_type'] }}</li>
        <li><strong>Preferred Date:</strong> {{ $details['preferred_date'] }}</li>
        <li><strong>Group Size:</strong> {{ $details['group_size'] }}</li>
        <li><strong>Email:</strong> {{ $details['email'] }}</li>
        <li><strong>Phone:</strong> {{ $details['phone'] }}</li>
    </ul>
    <h3>Message:</h3>
    <p>{{ $details['message'] }}</p>
</body>
</html>