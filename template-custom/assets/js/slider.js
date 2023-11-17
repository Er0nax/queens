// select all sliders
const sliders = document.querySelectorAll('.slider-wrapper');

// any slider exist?
if (sliders.length) {

    // loop through sliders
    sliders.forEach((slider) => {

        // select all slider images
        const sliderSlides = slider.querySelector('.slider').children;
        if (Array.from(sliderSlides)[0]) {
            // show first element in slider
            Array.from(sliderSlides)[0].style.display = 'block';
        }

        const sliderButtons = slider.querySelectorAll('.slider-nav-button');
        // sliderButtons given?
        if (sliderButtons.length) {

            // loop through each button
            sliderButtons.forEach((button) => {

                // add event listener
                button.addEventListener('click', () => {

                    // remove all actives from all other buttons
                    sliderButtons.forEach(button => {
                        // remove all active classes
                        button.classList.remove('active');
                    })

                    // switch image
                    Array.from(sliderSlides).forEach(slide => {
                        // hide all images
                        slide.style.display = 'none';
                    })

                    // show new image
                    const slideFromButton = button.getAttribute('data-slide');
                    slider.querySelector('#' + slideFromButton).style.display = 'block';

                    // add active to new slider button
                    button.classList.add('active');
                })
            })
        }
    })
}