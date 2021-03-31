(() => {
    const   track = document.querySelector('.testimonials__track'),
            testimonials = Array.from(track.children),
            nextButton = document.querySelector('.testimonials__right'),
            prevButton = document.querySelector('.testimonials__left'),
            dotsNav = document.querySelector('.testimonials__nav'),
            dots = Array.from(dotsNav.children),
            testimonialWidth = testimonials[0].getBoundingClientRect().width;

    // position the testimonials side by side
    const setTestimonialPosition = (testimonial, index) => {
        testimonial.style.left = testimonialWidth * index + 'px';
    }
    testimonials.forEach(setTestimonialPosition);

    const moveToSlide = (track, currentSlide, targetSlide) => {
        track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
        currentSlide.classList.remove('currentSlide');
        targetSlide.classList.add('currentSlide')
    }

    const updateDots = (currentDot, targetDot) => {
        currentDot.classList.remove('currentSlide');
        targetDot.classList.add('currentSlide');
    }

    const hideShowArrows = (testimonials, prevButton, nextButton, targetIndex) => {
        if (targetIndex === 0) {
            prevButton.classList.add('hidden');
            nextButton.classList.remove('hidden');
        } else if (targetIndex === testimonials.length -1) {
            prevButton.classList.remove('hidden');
            nextButton.classList.add('hidden');
        } else {
            prevButton.classList.remove('hidden');
            nextButton.classList.remove('hidden');
        }
    }

    //when click left, move to the previous testimonial
    prevButton.addEventListener('click', e => {
        const   currentSlide = track.querySelector('.currentSlide'),
                prevSlide = currentSlide.previousElementSibling,
                currentDot = dotsNav.querySelector('.currentSlide'),
                prevDot = currentDot.previousElementSibling
                prevIndex = testimonials.findIndex(slide => slide === prevSlide);

        moveToSlide(track, currentSlide, prevSlide);
        updateDots(currentDot, prevDot);
        hideShowArrows(testimonials, prevButton, nextButton, prevIndex);
    });
    //when click right, move to the next testimonial
    nextButton.addEventListener('click', e => {
        const   currentSlide = track.querySelector('.currentSlide'),
                nextSlide = currentSlide.nextElementSibling,
                currentDot = dotsNav.querySelector('.currentSlide'),
                nextDot = currentDot.nextElementSibling,
                nextIndex = testimonials.findIndex(slide => slide === nextSlide);

        moveToSlide(track, currentSlide, nextSlide);
        updateDots(currentDot, nextDot);
        hideShowArrows(testimonials, prevButton, nextButton, nextIndex);
    });

    //when nav is clicked, move to the corresponding testimonial
    dotsNav.addEventListener('click', e => {
        // what indicator was clicked?
        const targetDot = e.target.closest('button');

        if (!targetDot) return;

        const   currentSlide = track.querySelector('.currentSlide'),
                currentDot = dotsNav.querySelector('.currentSlide'),
                targetIndex = dots.findIndex(dot => dot === targetDot),
                targetSlide = testimonials[targetIndex];

        moveToSlide(track, currentSlide, targetSlide);
        updateDots(currentDot, targetDot);
        hideShowArrows(testimonials, prevButton, nextButton, targetIndex);
    })
})();