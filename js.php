

       // Event listener to detect when the page has fully loaded
    window.addEventListener('load', function () {
        // Hide the spinner after the page has loaded
        hideSpinner();
    });

    function showSpinner() {
        document.getElementById('spinner-overlay').style.display = 'flex';
    }

    function hideSpinner() {
        document.getElementById('spinner-overlay').style.display = 'none';
    }

    // Simulate loading by delaying the hiding of the spinner
    // Replace this with your actual loading logic
    setTimeout(function () {
        hideSpinner();
    }, 5000); // Adjust the delay as needed
