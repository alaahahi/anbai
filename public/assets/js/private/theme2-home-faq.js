// Add click event listener for elements with class 'hfaqBoxQues'
const hfaqBoxQuesElements = document.querySelectorAll('.hfaqBoxQues');
hfaqBoxQuesElements.forEach(element => {
  element.addEventListener('click', function() {
    // Toggle the 'active' class on the clicked element
    this.classList.toggle('active');
    
    // Find the next sibling element with class 'hfaqBox1Accordian-ans'
    const hfaqBox1AccordianAns = this.nextElementSibling;
    if (hfaqBox1AccordianAns) {
      // Toggle the 'active' class on the 'hfaqBox1Accordian-ans' element
      hfaqBox1AccordianAns.classList.toggle('active');
    }
  });
});
