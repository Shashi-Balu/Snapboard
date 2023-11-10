const moods = ["Moodboard", "Euphoria", "Vision Board", "Imaginative Gallery"];
const dynamicMoodsContainer = document.getElementById("dynamicMoods");

function createMoodElement(mood, index) {
    const h2 = document.createElement("h2");
    h2.textContent = mood;
    h2.classList.add("hero-text", "motion-text");
    h2.style.color = getColorForIndex(index);

    dynamicMoodsContainer.appendChild(h2);

    setTimeout(() => {
        const previousMood = dynamicMoodsContainer.firstElementChild;
        if (previousMood) {
            dynamicMoodsContainer.removeChild(previousMood);
        }
    }, 4000);
}

function getColorForIndex(index) {
    const colors = ["#74b8ab", "#B25699", "#c9c93c", "#FF204E"];
    return colors[index % colors.length];
}

function loopMoods(index) {
    createMoodElement(moods[index], index);

    index = (index + 1) % moods.length;

    setTimeout(() => {
        loopMoods(index);
    }, 4000);
}

// Start the loop
loopMoods(0);
