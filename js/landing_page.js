// wait DOM to be loaded
document.addEventListener("DOMContentLoaded", () => {
    initLoader();
    initCursor();
    initHeaderScroll();
    initMobileMenu();
    initHeroChart();
})



// Loader animation

function initLoader() {
    const loader = document.querySelector('.loader');

    // hide loader after animation
    setTimeout(() => {
        loader.classList.add("hidden");
        document.body.style.overflow = "auto";
    }, 2500)
}



// custom cursor
function initCursor() {
    const cursor = document.querySelector('.cursor');
    const cursorFollower = document.querySelector('.cursor-follower');


    document.addEventListener("mousemove", (e) => {
        cursor.style.left = e.clientX + "px";
        cursor.style.top = e.clientY + "px";

        // Add delay to follow for smooth
        setTimeout(() => {
            cursorFollower.style.left = e.clientX + 'px';
            cursorFollower.style.top = e.clientY + 'px';
        }, 50);
    })
}

// Header scroll effect
function initHeaderScroll() {
    const header = document.querySelector('.header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

// Mobile menu
function initMobileMenu() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuClose = document.querySelector('.menu-close');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    const headerD = document.querySelector(".header");
    const hero = document.querySelector(".hero");
    const features = document.getElementById("features");

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.add('active');
        mobileMenu.classList.add('active');
        document.body.style.overflow = 'hidden';
        headerD.style.filter = 'blur(10px)';
        hero.style.filter = 'blur(10px)';
        features.style.filter = 'blur(10px)';



    });

    menuClose.addEventListener('click', () => {
        menuToggle.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.style.overflow = 'auto';
        headerD.style.filter = 'blur(0px)';
        hero.style.filter = 'blur(0px)';
        features.style.filter = 'blur(0px)';
    });

    mobileNavLinks.forEach(link => {
        link.addEventListener('click', () => {
            menuToggle.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
            headerD.style.filter = 'blur(0px)';
            hero.style.filter = 'blur(0px)';
            features.style.filter = 'blur(0px)';
        });
    });
}

function initHeroChart() {
    const ctx = document.getElementById("mainChart");

    if (ctx) {

        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Ingresos',
                        data: [1500, 1800, 1600, 2200, 1900, 2540],
                        borderColor: '#0066ff',
                        backgroundColor: 'rgba(0, 102, 255, 0.1)',
                        tension: 0.4,
                        fill: true
                    },
                    {
                        label: 'Gastos',
                        data: [1200, 1400, 1300, 1800, 1600, 1825],
                        borderColor: '#ff3366',
                        backgroundColor: 'rgba(255, 51, 102, 0.1)',
                        tension: 0.4,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            callback: function (value) {
                                return value + '€';
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        })
    }

}