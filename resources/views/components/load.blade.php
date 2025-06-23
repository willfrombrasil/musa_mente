<div id="loader" class="loader"></div>

<style>
    .loader {
        border: 8px solid #f3f3f3; /* Light gray */
        border-top: 8px solid #3498db; /* Blue */
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
        margin: auto;
        position: fixed;
        top: 0; left: 0; bottom: 0; right: 0;
        display: none; /* Inicialmente oculto */
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>