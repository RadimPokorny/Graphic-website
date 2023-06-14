var scrollButton = document.querySelector('.scroll-button');
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

function toggleMenu() {
    var button = document.getElementById("menu-button");
    var menu = document.getElementById("nmenu");

    
    if(button.className == "fa fa-2x fa-bars"){
        button.classList.remove("fa", "fa-2x", "fa-bars");
        button.className="fa fa-2x fa-close"; 
        menu.style.display = 'flex';

    }
    else{
        button.classList.remove("fa", "fa-2x", "fa-close");
        button.className="fa fa-2x fa-bars";    
        menu.style.display = 'none';
    }   
  
}

var scrollButton = document.querySelector('.scroll-button');
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

    


