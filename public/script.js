//hero section text changing animation
const firstSpans = document.querySelectorAll(".hero-left-info-first span");
const secondSpans = document.querySelectorAll(".hero-left-info-second span");

function toggleVisibility(spans, index) {
    spans.forEach((span, i) => {
        if (i === index) {
            span.style.visibility = "visible";
            span.style.animation = "fadeInOut 2s ease-in-out infinite";
        } else {
            span.style.visibility = "hidden";
            span.style.animation = "none";
        }
    });
}

//button hover effect
let currentIndex = 0;

function changeSpans() {
    toggleVisibility(firstSpans, currentIndex);
    toggleVisibility(secondSpans, currentIndex);
    currentIndex = (currentIndex + 1) % firstSpans.length;
    setTimeout(changeSpans, 2000);
}

changeSpans();

$(window).ready(function () {
    $(".boton").wrapInner("<div class=botontext></div>");

    $(".botontext").clone().appendTo($(".boton"));

    $(".boton").append(
        '<span class="twist"></span><span class="twist"></span><span class="twist"></span><span class="twist"></span>'
    );

    $(".twist").css("width", "25%").css("width", "+=3px");
});

//Counter animation
$(document).ready(function () {
    $(".count").counterUp({
        delay: 10,
        time: 1000,
    });
});
//testimonials SLides
new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 30,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    //Autoplay configuration
    autoplay: {
        delay: 3000,  // Time between slides in milliseconds
        disableOnInteraction: false // Autoplay won't stop after interactions like swiping
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }
});

//corse swiper
new Swiper('.card-wrapper-course', {
    loop: true,
    spaceBetween: 30,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    //Autoplay configuration
    autoplay: {
        delay: 1000,  // Time between slides in milliseconds
        disableOnInteraction: false // Autoplay won't stop after interactions like swiping
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }
});
// nav slider
$(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    asNavFor: ".slider-nav",
});
$(".slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    dots: true,
    arrows: false,
    fade: true,
    focusOnSelect: true,
});

$("a[data-slide]").click(function (e) {
    e.preventDefault();
    var slideno = $(this).data("slide");
    $(".slider-nav").slick("slickGoTo", slideno - 1);
});

$("a[data-slide]").click(function (e) {
    e.preventDefault();
    var slideno = $(this).data("slide");
    $(".slider-nav").slick("slickGoTo", slideno - 1);
});

//number with target counter
const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerText = "0";

  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;
    const increment = target / 300;

    if (count < target) {
      counter.innerText = `${Math.ceil(count + increment)}`;
      requestAnimationFrame(updateCounter);
    } else {
      counter.innerText = target;
    }
  };

  updateCounter();
});



document.addEventListener("DOMContentLoaded", function() {
    const syllabusItems = document.querySelectorAll(".syllabus-item");

    // Create IntersectionObserver to observe when elements enter the viewport
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target); // Stop observing once the animation is triggered
            }
        });
    }, {
        threshold: 0.1 // Trigger when 10% of the element is visible
    });

    // Observe each syllabus item
    syllabusItems.forEach(item => {
        observer.observe(item);
    });
});


//All Courses js
const courses = [
    {
        title: "Web Development Fundamentals",
        description: "Learn HTML, CSS, and JavaScript to build modern websites.",
        image: "https://source.unsplash.com/random/400x300/?web-development",
        category: "web-development",
        level: "beginner",
        duration: "8 weeks",
        rating: 4.8,
    },
    {
        title: "Advanced React and Redux",
        description: "Master advanced concepts in React and state management with Redux.",
        image: "https://source.unsplash.com/random/400x300/?react",
        category: "web-development",
        level: "advanced",
        duration: "10 weeks",
        rating: 4.9,
    },
    {
        title: "Advanced React and Redux",
        description: "Master advanced concepts in React and state management with Redux.",
        image: "https://source.unsplash.com/random/400x300/?react",
        category: "web-development",
        level: "advanced",
        duration: "10 weeks",
        rating: 4.9,
    },
    {
        title: "Advanced React and Redux",
        description: "Master advanced concepts in React and state management with Redux.",
        image: "https://source.unsplash.com/random/400x300/?react",
        category: "web-development",
        level: "advanced",
        duration: "10 weeks",
        rating: 4.9,
    },
    {
        title: "Advanced React and Redux",
        description: "Master advanced concepts in React and state management with Redux.",
        image: "https://source.unsplash.com/random/400x300/?react",
        category: "web-development",
        level: "advanced",
        duration: "10 weeks",
        rating: 4.9,
    },
    {
        title: "Advanced React and Redux",
        description: "Master advanced concepts in React and state management with Redux.",
        image: "https://source.unsplash.com/random/400x300/?react",
        category: "web-development",
        level: "advanced",
        duration: "10 weeks",
        rating: 4.9,
    },
    {
        title: "Advanced React and Redux",
        description: "Master advanced concepts in React and state management with Redux.",
        image: "https://source.unsplash.com/random/400x300/?react",
        category: "web-development",
        level: "advanced",
        duration: "10 weeks",
        rating: 4.9,
    },
    {
        title: "Advanced React and Redux",
        description: "Master advanced concepts in React and state management with Redux.",
        image: "https://source.unsplash.com/random/400x300/?react",
        category: "web-development",
        level: "advanced",
        duration: "10 weeks",
        rating: 4.9,
    },
    // More courses...
];


function createCourseCard(course) {
    return `
<div class="card all-courses" style="width:20rem;height:25rem;">
  <img src="${course.image}" class="card-img-top" alt="${course.title}">
  <div class="card-body">
    <h5 class="card-title">${course.title}</h5>
    <p class="card-text">${course.description}</p>
    <a href="${course.link}" class="btn courses-view" style="background-color:#DC58A4;font-weight:500;">View More</a>
  </div>
</div>
    `;
}




function renderCourses(coursesToRender) {
    const courseGrid = document.getElementById("course-grid");
    courseGrid.innerHTML = coursesToRender.map(createCourseCard).join("");
    animateCourseCards(); // Call animation after rendering
}

function filterCourses() {
    const searchTerm = document.getElementById("search-input").value.toLowerCase();
    const categoryFilter = document.getElementById("category-filter").value;
    const levelFilter = document.getElementById("level-filter").value;

    const filteredCourses = courses.filter((course) => {
        const matchesSearch = course.title.toLowerCase().includes(searchTerm) || course.description.toLowerCase().includes(searchTerm);
        const matchesCategory = categoryFilter === "" || course.category === categoryFilter;
        const matchesLevel = levelFilter === "" || course.level === levelFilter;
        return matchesSearch && matchesCategory && matchesLevel;
    });

    renderCourses(filteredCourses);
}





// Initial render

renderCourses(courses);
document.getElementById("category-filter").addEventListener("change", filterCourses);
document.getElementById("level-filter").addEventListener("change", filterCourses);
document.getElementById("course-search-form").addEventListener("submit", function (e) {
    e.preventDefault();
    filterCourses();
});
// Animation for course cards
function animateCourseCards() {
    const courseCards = document.querySelectorAll(".course-card");
    courseCards.forEach((card, index) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        },
        { threshold: 0.1 }
    );

    courseCards.forEach((card) => observer.observe(card));
}

/*Testimonial sldier*/
