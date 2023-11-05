function animateNumbers() {
    const numElements = document.querySelectorAll(".num");
    numElements.forEach(element => {
      const targetValue = parseInt(element.textContent);
      let counter = 0;
  
      const animate = () => {
        const step = Math.ceil(targetValue / 50); // Change the number of steps as needed
        counter += step;
        if (counter >= targetValue) {
          element.textContent = targetValue;
        } else {
          element.textContent = counter;
          requestAnimationFrame(animate);
        }
      };
  
      animate();
    });
  }
  
  // function isSectionVisible(element) {
  //   const scrollPos = window.scrollY;
  //   const sectionTop = document.querySelector(element).offsetTop;
  //   const sectionHeight = document.querySelector(element).offsetHeight;
  //   const sectionBottom = sectionTop + sectionHeight;
  //   return sectionTop <= scrollPos + window.innerHeight && sectionBottom >= scrollPos;
  // }
  
  // // Check if the section is visible on page load
  // document.addEventListener("DOMContentLoaded", function () {
  //   if (isSectionVisible(".num")) {
  //     animateNumbers();
  //   }
  // });
  
  // // Check if the section becomes visible while scrolling
  // function onScroll() {
  //   if (isSectionVisible(".ftrTop")) {
  //     window.removeEventListener("scroll", onScroll); // Unbind the scroll event after animating on page load
  //     animateNumbers();
  //   }
  // }
  
  // window.addEventListener("scroll", onScroll);
  