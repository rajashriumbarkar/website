

    const ratingInput = document.getElementById('rating-input');
    const starFill = document.getElementById('star-fill');
    const ratingNumber = document.querySelector('.number-rating');

    ratingInput.addEventListener('input', (e) => {
        const val = parseFloat(e.target.value);
        
        if (val >= 0 && val <= 5) {
            // Calculate percentage (e.g. 3.5 / 5 * 100 = 70%)
            const starPercentage = (val / 5) * 100;
            
            // Set width of the gold stars
            starFill.style.width = starPercentage + "%";
            
            // Update the text display
            ratingNumber.innerText = val.toFixed(1);
        }
    });
    // Initial Ratings
const rating = 3.4; // Example: 3.4 out of 5
const starsTotal = 5;

document.addEventListener('DOMContentLoaded', () => {
    // 1. Calculate percentage
    const starPercentage = (rating / starsTotal) * 100;

    // 2. Round to nearest 10th (optional)
    const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;

    // 3. Set width of stars-inner to percentage
    document.querySelector('.stars-inner').style.width = starPercentageRounded;

    // 4. Update the number rating text
    document.querySelector('.number-rating').innerHTML = rating.toFixed(1);
});