// cookieConsent.js

; (function () {

    function collectConsentData() {
        const now = new Date();
        const timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone || 'unknown';
        const language = (navigator.languages && navigator.languages[0]) || navigator.language || 'unknown';

        return {
            userAgent: navigator.userAgent,
            language: language,
            platform: navigator.platform,
            screenResolution: `${screen.width}x${screen.height}`,
            timeZone: timeZone,
            currentUrl: window.location.href,
            referrer: document.referrer || null,
            timestamp: now.toISOString()
        };
    }

    function sendConsentData() {
        
    }

    function initCookieConsent() {
        const banner = document.getElementById('cookieConsent');
        const btnAccept = document.getElementById('cookieAccept');
        const btnReject = document.getElementById('cookieReject');
        const btnSettings = document.getElementById('cookieSettings');

        if (!banner || !btnAccept || !btnReject || !btnSettings) return;

        const storedChoice = localStorage.getItem('cookieChoice');
        if (!storedChoice) {
            // show banner after 3 seconds if no prior decision
            setTimeout(() => {
                banner.style.display = 'block';
            }, 3000);
        }

        btnAccept.addEventListener('click', () => {
            localStorage.setItem('cookieChoice', 'accepted');
            banner.style.display = 'none';

            // collect and send data to server
            const consentInfo = collectConsentData();
            sendConsentData(consentInfo);
        });

        btnReject.addEventListener('click', () => {
            localStorage.setItem('cookieChoice', 'rejected');
            banner.style.display = 'none';
            // TODO: you may want to send a minimal 'rejected' log to server if needed
        });

        btnSettings.addEventListener('click', () => {
            // TODO: redirect to your cookie settings page
            window.location.href = 'cookies.php';
        });
    }

    // Auto‑initialize once DOM is ready
    document.addEventListener('DOMContentLoaded', initCookieConsent);
})();
