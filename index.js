var scrollButton = document.querySelector('#scroll-button');
var scrollCenter = document.querySelector('.scroll-center');

function toggleScrollButton() {
    if (window.innerHeight + window.pageYOffset >= document.body.offsetHeight) {
        scrollCenter.style.opacity = '0';
        scrollCenter.style.cursor = 'default';
    } else {
        scrollCenter.style.opacity = '1';
    }
}

scrollButton.addEventListener('click', function() {
    var sectionElements = document.querySelectorAll('.box-center');
    var currentSection = Array.from(sectionElements).findIndex(function(sectionElement) {
        var rect = sectionElement.getBoundingClientRect();
        return rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2;
    });
  
    if (currentSection === 1) {
        window.scrollBy({
            top: document.body.offsetHeight,
            behavior: 'smooth'
        });
    } else {
        window.scrollBy({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    }
});

window.addEventListener('scroll', toggleScrollButton);


function scrollToSection(sectionNumber) {
    var sectionElements = document.querySelectorAll('.box-center');
    if (sectionElements.length >= sectionNumber) {
        var sectionElement = sectionElements[sectionNumber - 1];
        sectionElement.scrollIntoView({ behavior: 'smooth' });
    }
}

var isOpened = false;

function toggleMenu() {
    var button = document.getElementById('menu-button');
    var menu = document.getElementById("nmenu");

    if(isOpened == false){
        isOpened = true;
        button.style.transition = 'all 0.5s';
        button.style.transform = 'rotate(90deg)';
        menu.style.transition = 'all 0.5s';
        menu.style.transform = 'translateX(0%)';
    }
    else{
        isOpened = false;
        button.style.transform = 'rotate(0deg)';
        menu.style.transition = 'all 0.5s';
        menu.style.transform = 'translateX(-100%)';
    }

  
}

var scrollButton = document.querySelector('#scroll-button');

            function toggleScrollButton() {
                if (document.documentElement.clientHeight + window.pageYOffset >= document.body.offsetHeight) {
                    scrollCenter.style.display = 'none';
                } else {
                    scrollCenter.style.display = 'flex';
                }
            }

            scrollButton.addEventListener('click', function() {
                var sectionElements = document.querySelectorAll('.box-center');
                var currentSection = Array.from(sectionElements).findIndex(function(sectionElement) {
                    var rect = sectionElement.getBoundingClientRect();
                    return rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2;
                });

                if (currentSection === 1) {
                    window.scrollBy({
                        top: document.body.offsetHeight,
                        behavior: 'smooth'
                    });
                } else {
                    window.scrollBy({
                        top: window.innerHeight,
                        behavior: 'smooth'
                    });
                }
            });

            window.addEventListener('scroll', toggleScrollButton);

    


