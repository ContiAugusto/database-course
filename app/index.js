

    window.onscroll = function() {
        const navbar = document.querySelector('.navbar-layer');
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            navbar.style.backgroundColor = "rgba(8, 18, 36, 0.8)";
        } else {
            navbar.style.backgroundColor = "rgba(8, 18, 36, 1)"; 
        }
    };

