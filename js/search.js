const searchInput = document.getElementById('searchInput');
const recentSearches = document.getElementById('recentSearches');

// Store recent searches in an array
let recentList = JSON.parse(localStorage.getItem('recentList')) || [];

// Listen for Enter key press
searchInput.addEventListener('keypress', function (event) {
    if (event.key === 'Enter' && searchInput.value.trim() !== '') {
        const query = searchInput.value.trim();
        const url = `https://www.google.com/search?q=${encodeURIComponent(query)}`;
        if (query) {
            // Add to recent list (avoid duplicates)
            if (!recentList.includes(query)) {
                recentList.unshift(query, url);
                if (recentList.length > 5) recentList.pop(); // Keep only last 5
            }
            updateRecentSearches();
            searchInput.value = '';
            localStorage.setItem('recentSearches', JSON.stringify(recentSearches));

            window.open(url, '_blank');
            searchInput.value = '';
            showRecentSearches();
        }
    }
});

// Function to update recent searches list
function updateRecentSearches() {
    // Clear old items
    recentSearches.innerHTML = '<h5>Recent Searches</h5>';
    recentList.forEach(item => {
        const div = document.createElement('div');
        div.className = 'recent-item';
        div.innerHTML = ` <i class="fa-regular fa-clock"></i> ${item}`;
        recentSearches.appendChild(div);
    });
}

