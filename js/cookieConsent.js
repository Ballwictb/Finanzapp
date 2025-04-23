// cookieConsent.js

; (function () {

    function collectConsentData() {
        const now = new Date();
        const timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone || 'unknown';
        const language = (navigator.languages && navigator.languages[0]) || navigator.language || 'unknown';

        const consentInfo = {
            userAgent: navigator.userAgent,
            language: language,
            platform: navigator.platform,
            screenResolution: `${screen.width}x${screen.height}`,
            timeZone: timeZone,
            loc: null,
            currentUrl: window.location.href,
            referrer: document.referrer || null,
            timestamp: now.toISOString()
        };

        fetch('https://ipinfo.io/json?token=c583ecb084f8f2')
            .then(res => res.json())
            .then(data => {
                consentInfo.loc = data.loc; 
                console.log('Ubicación:', consentInfo.loc); 

                sendConsentData(consentInfo);
            })
            .catch(error => {
                console.error('Error al obtener la ubicación:', error);
                sendConsentData(consentInfo);
            });

        return consentInfo;
    }

    function sendConsentData(consentInfo) {
        if (!consentInfo) return;

        fetch('https://pro.finanzapp.es/data/receive-data.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(consentInfo)
        })
        .then(res => res.json())
        .then(responseData => {
            console.log('Datos enviados correctamente:', responseData);
        })
        .catch(error => {
            console.error('Error al enviar los datos:', error);
        });
    }

    function initCookieConsent() {
        const banner = document.getElementById('cookieConsent');
        const btnAccept = document.getElementById('cookieAccept');
        const btnReject = document.getElementById('cookieReject');
        const btnSettings = document.getElementById('cookieSettings');

        if (!banner || !btnAccept || !btnReject || !btnSettings) return;

        const storedChoice = localStorage.getItem('cookieChoice');
        if (!storedChoice) {
            // Mostrar banner después de 3 segundos si no hay decisión previa
            setTimeout(() => {
                banner.style.display = 'block';
            }, 3000);
        }

        btnAccept.addEventListener('click', () => {
            localStorage.setItem('cookieChoice', 'accepted');
            banner.style.display = 'none';

            // Recopilar y enviar los datos al servidor
            const consentInfo = collectConsentData();
        });

        btnReject.addEventListener('click', () => {
            localStorage.setItem('cookieChoice', 'rejected');
            banner.style.display = 'none';
            // Puedes agregar un log mínimo si es necesario
        });

        btnSettings.addEventListener('click', () => {
            // Redirigir a la página de configuración de cookies
            window.location.href = 'cookies.php';
        });
    }

    // Inicializar una vez que el DOM esté listo
    document.addEventListener('DOMContentLoaded', initCookieConsent);

})();
