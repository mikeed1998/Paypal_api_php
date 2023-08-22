<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal</title>
</head>
<body>
    <div id="paypal-button-container"></div>

    <script src="https://www.paypal.com/sdk/js?client-id=AXZNaNqMiJUEZqAwS601tRBKOaljArE77iB93c1NER6itk8KiErzVGmEugyUylhGa6OZkI0OMFT0djnL&components=buttons"></script>
    <script>
        paypal.Buttons({
            style: {
                layout: 'vertical',
                color:  'blue',
                shape:  'rect',
                label:  'paypal'
            }
        }).render('#paypal-button-container');
    </script>
</body>
</html>


<!--
    API CREDENTIALS
    app name - test
    client id - AXZNaNqMiJUEZqAwS601tRBKOaljArE77iB93c1NER6itk8KiErzVGmEugyUylhGa6OZkI0OMFT0djnL
    secret key 1 - EHY09W3F-KRvNHTXWWqm4B5nIS6eyn6zkHJntzbwd4dIaOVyW-Rv__tX3NY3vJmh3pK6vorg-sgs9WiL

    SANDBOX ACCOUNT INFO
    Sandbox URL - https://sandbox.paypal.com
    Region - MX
    Email - sb-sdezu27167356@business.example.com
    Password - >rG>6M6i
 -->