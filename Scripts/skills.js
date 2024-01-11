function animatePercentage(element, percentage) {
    let currentPercentage = 0;
    const textElement = element.querySelector('.circle-text');
    const interval = setInterval(() => {
        if (currentPercentage >= percentage) {
            clearInterval(interval);
        } else {
            currentPercentage++;
            textElement.textContent = currentPercentage + '%';
        }
    }, 10); // Speed of the count-up animation
}

function showPercentage(element) {
    const percentage = parseInt(element.getAttribute('data-skill-percentage'), 10);
    const circle = element.querySelector('.circle-progress');
    const radius = circle.r.baseVal.value;
    const circumference = 2 * Math.PI * radius;
    const offset = circumference * ((100 - percentage) / 100);

    animatePercentage(element, percentage);

    // This line animates the stroke offset to show progress
    circle.style.strokeDashoffset = offset;
    document.getElementById('skill-description').innerText = element.getAttribute('data-skill-desc');
}

function hidePercentage(element) {
    const circle = element.querySelector('.circle-progress');
    const textElement = element.querySelector('.circle-text');
    const skillName = element.getAttribute('data-skill-name');
    const radius = circle.r.baseVal.value;
    const circumference = 2 * Math.PI * radius;

    // Reset circle progress
    circle.style.strokeDashoffset = circumference;
    // Reset text to the skill name or empty if no initial text is desired
    textElement.textContent = ''; // or textElement.textContent = '';

    // Reset description text
    document.getElementById('skill-description').innerText = 'Hover over a skill for more information.';
}


document.querySelectorAll('.skill').forEach(item => {
    item.addEventListener('mouseover', function() {
        showPercentage(this);
    });
    item.addEventListener('mouseout', function() {
        hidePercentage(this);
    });
});

