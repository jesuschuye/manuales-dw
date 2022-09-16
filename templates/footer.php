    <script src="/assets/popper.min.js"></script>
    <script src="/assets/bootstrap520/js/bootstrap.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>    
</body>
</html>