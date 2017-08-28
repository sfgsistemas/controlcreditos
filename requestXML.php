<html>
<head>
    <title>SOAP JavaScript Client Test</title>
    <script type="text/javascript">
        function soap() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open('POST', 'https://somesoapurl.com/', true);

            // build SOAP request
            var sr =
                '<?xml version="1.0" encoding="utf-8"?>' +  
                              '<soapenv:Envelope ' + 
                    'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" ' +
                    'xmlns:api="http://127.0.0.1/Integrics/Enswitch/API" ' +
                    'xmlns:xsd="http://www.w3.org/2001/XMLSchema" ' +
                    'xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">' +
                    '<soapenv:Body>' +
                        '<api:some_api_call soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">' +
                            '<username xsi:type="xsd:string">login_username</username>' +
                            '<password xsi:type="xsd:string">password</password>' +
                        '</api:some_api_call>' +
                    '</soapenv:Body>' +
                '</soapenv:Envelope>';

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4) {
                    if (xmlhttp.status == 200) {
                        alert('done. use firebug/console to see network response');
                    }
                }
            }
            // Send the POST request
            xmlhttp.setRequestHeader('Content-Type', 'text/xml');
            xmlhttp.send(sr);
            // send request
            // ...
        }
    </script>
</head>
<body>
    <form name="Demo" action="" method="post">
        <div>
            <input type="button" value="Soap" onclick="soap();" />
        </div>
    </form>
</body>
</html> <!-- typo -->