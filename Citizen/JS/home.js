// script.js

function displayDateAndTime() {
    const date = document.getElementById("date");
    const time = document.getElementById("time");

    const now = new Date();

    const days = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
    ];
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];

    date.textContent = `${days[now.getDay()]}, ${months[now.getMonth()]} ${now.getDate()}, ${now.getFullYear()}`;
    time.textContent = `${now.toLocaleTimeString()}`;
}

const slideshow = document.querySelector('.slideshow');
const images = slideshow.getElementsByTagName('img');

let currentImageIndex = 0;

function changeImage() {
    for (let i = 0; i < images.length; i++) {
        images[i].style.display = 'none';
    }

    currentImageIndex = (currentImageIndex + 1) % images.length;
    images[currentImageIndex].style.display = 'block';
}

// Change the image every 5 seconds
setInterval(changeImage, 5000);

// Initial display
changeImage();

// Update the date and time every second
setInterval(displayDateAndTime, 1000);

// Initial display
displayDateAndTime();