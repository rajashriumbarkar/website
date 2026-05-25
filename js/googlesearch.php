<style>
/* Color Palette & Variable State Setup */
:root {
    --bg-color: #ffffff;
    --text-color: #202124;
    --nav-text-color: #3c4043;
    --search-bg: #ffffff;
    --search-border: #eceff1;
    --search-shadow-hover: 0 1px 6px rgba(32,33,36,0.28);
    --btn-bg: #f8f9fa;
    --btn-border: #f8f9fa;
    --btn-text: #3c4043;
    --footer-bg: #f2f2f2;
    --footer-border: #e4e4e4;
    --footer-text: #70757a;
}

[data-theme="dark"] {
    --bg-color: #202124;
    --text-color: #e8eaed;
    --nav-text-color: #e8eaed;
    --search-bg: #202124;
    --search-border: #5f6368;
    --search-shadow-hover: 0 1px 6px rgba(0,0,0,0.5);
    --btn-bg: #303134;
    --btn-border: #303134;
    --btn-text: #e8eaed;
    --footer-bg: #171717;
    --footer-border: #212124;
    --footer-text: #9aa0a6;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    background-color: var(--bg-color);
    color: var(--text-color);
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Header Area Design rules */
.header-nav {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 16px 24px;
    height: 60px;
}

.nav-right {
    display: flex;
    align-items: center;
    gap: 15px;
}

.nav-link {
    color: var(--nav-text-color);
    text-decoration: none;
    font-size: 13px;
}

.nav-link:hover {
    text-decoration: underline;
}

.theme-btn {
    background: none;
    border: none;
    cursor: pointer;
    padding: 4px;
    display: flex;
    align-items: center;
}

.icon {
    width: 20px;
    height: 20px;
    fill: var(--footer-text);
}

.profile-avatar {
    width: 32px;
    height: 32px;
    background-color: #4285f4;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
}

/* Content Frame & Logo Styles Mapping */
.main-container {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 20px;
    margin-top: -40px; /* Offset to lift layout like production */
}

.logo-box {
    font-size: 90px;
    font-weight: 500;
    letter-spacing: -4px;
    margin-bottom: 28px;
    user-select: none;
}

.g-blue { color: #4285f4; }
.g-red { color: #ea4335; }
.g-yellow { color: #fbbc05; }
.g-green { color: #34a853; }

#search-form {
    width: 100%;
    max-width: 584px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Core Search Bar Input Box Structure */
.search-capsule {
    width: 100%;
    height: 46px;
    background-color: var(--search-bg);
    border: 1px solid var(--search-border);
    border-radius: 24px;
    display: flex;
    align-items: center;
    padding: 0 14px;
    transition: box-shadow 0.15s;
}

.search-capsule:focus-within,
.search-capsule:hover {
    box-shadow: var(--search-shadow-hover);
    border-color: transparent;
}

#search-input {
    flex: 1;
    background: transparent;
    border: none;
    outline: none;
    color: var(--text-color);
    font-size: 16px;
    padding: 0 10px;
}

.icon-btn {
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
}

.hidden {
    display: none !important;
}

/* Operational Search Forms Row Actions Buttons Area Layout */
.button-group {
    margin-top: 28px;
    display: flex;
    gap: 12px;
}

.action-btn {
    background-color: var(--btn-bg);
    border: 1px solid var(--btn-border);
    color: var(--btn-text);
    padding: 0 16px;
    height: 36px;
    min-width: 54px;
    text-align: center;
    cursor: pointer;
    user-select: none;
    border-radius: 4px;
    font-size: 14px;
}

.action-btn:hover {
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    border-color: #dadce0;
}

/* Structural Footer Core Matrix Options rules styling */
.footer-nav {
    background-color: var(--footer-bg);
    border-top: 1px solid var(--footer-border);
    color: var(--footer-text);
    font-size: 14px;
}

.footer-row-top {
    padding: 15px 30px;
    border-bottom: 1px solid var(--footer-border);
}

.footer-row-bottom {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 15px 30px;
}

.footer-left, .footer-right {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
}

.footer-nav a {
    color: var(--footer-text);
    text-decoration: none;
}

.footer-nav a:hover {
    text-decoration: underline;
}

/* Responsive UI adjustments settings breakpoints boundary constraints */
@media (max-width: 630px) {
    .footer-row-bottom {
        justify-content: center;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }
    .logo-box {
        font-size: 60px;
    }
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Navigation Layout -->
    <header class="header-nav">
        <div class="nav-right">
            <a href="https://mail.google.com" class="nav-link">Gmail</a>
            <a href="https://www.google.com/imghp" class="nav-link">Images</a>
            <button id="theme-toggle" class="theme-btn" aria-label="Toggle dark mode">
                <!-- Theme toggle icon indicator -->
                <svg viewBox="0 0 24 24" class="icon"><path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9c0-.46-.04-.92-.1-1.36-.98 1.37-2.58 2.26-4.4 2.26-3.03 0-5.5-2.47-5.5-5.5 0-1.82.89-3.42 2.26-4.4-.44-.06-.9-.1-1.36-.1z"/></svg>
            </button>
            <div class="profile-avatar">G</div>
        </div>
    </header>

    <!-- Main Content Canvas Box Component -->
    <main class="main-container">
        
        <!-- Google Dynamic SVG Logo Container -->
        <div class="logo-box">
            <span class="g-blue">G</span>
            <span class="g-red">o &emsp;</span>
            <span class="g-yellow">g </span>
            
            <span class="g-blue">r</span>
            <span class="g-green">e</span>
            <span class="g-pink">e</span>
             <span class="g-red">n</span>
        </div>

        <!-- Google Form Search Component Wrapper -->
        <form id="search-form" action="https://www.google.com/search" method="GET" target="_blank">
            <div class="search-capsule">
                <svg class="search-icon icon" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
                
                <input type="text" name="q" id="search-input" autocomplete="off" aria-label="Search" autofocus>
                
                <button type="button" id="clear-btn" class="clear-icon icon-btn hidden" aria-label="Clear context input">
                    <svg viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                </button>
            </div>

            <!-- Submission Action Triggers Block -->
            <div class="button-group">
                <button type="submit" class="action-btn">Google Search</button>
                <button type="button" id="lucky-btn" class="action-btn">I'm Feeling Lucky</button>
            </div>
        </form>
    </main>

    <!-- Footer System UI Boundaries Area -->
    <footer class="footer-nav">
        <div class="footer-row-top">India</div>
        <div class="footer-row-bottom">
            <div class="footer-left">
                <a href="#">About</a>
                <a href="#">Advertising</a>
                <a href="#">Business</a>
                <a href="#">How Search works</a>
            </div>
            <div class="footer-right">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Settings</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const clearBtn = document.getElementById('clear-btn');
    const themeToggle = document.getElementById('theme-toggle');
    const luckyBtn = document.getElementById('lucky-btn');

    // 1. Dynamic Clear (X) Button Utility visibility mapping evaluation paths
    searchInput.addEventListener('input', () => {
        if (searchInput.value.length > 0) {
            clearBtn.classList.remove('hidden');
        } else {
            clearBtn.classList.add('hidden');
        }
    });

    clearBtn.addEventListener('click', () => {
        searchInput.value = '';
        clearBtn.classList.add('hidden');
        searchInput.focus();
    });

    // 2. Prevent empty lookups from executing form actions
    searchForm.addEventListener('submit', (e) => {
        if (!searchInput.value.trim()) {
            e.preventDefault();
        }
    });

    // 3. Im Feeling Lucky redirection action integration hook mockup
    luckyBtn.addEventListener('click', () => {
        const query = searchInput.value.trim();
        if (query) {
            window.open(`https://www.google.com/search?q=${encodeURIComponent(query)}&btnI=I`, '_blank');
        } else {
            window.open('https://doodles.google/', '_blank');
        }
    });

    // 4. Dark Theme Context storage manager configuration setup scripts
    const currentSavedTheme = localStorage.getItem('google-clone-theme') || 'light';
    document.documentElement.setAttribute('data-theme', currentSavedTheme);

    themeToggle.addEventListener('click', () => {
        const activeTheme = document.documentElement.getAttribute('data-theme');
        const targetTheme = activeTheme === 'dark' ? 'light' : 'dark';
        
        document.documentElement.setAttribute('data-theme', targetTheme);
        localStorage.setItem('google-clone-theme', targetTheme);
    });
});
</script>