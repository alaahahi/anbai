
    // window.addEventListener("scroll", function() {
    //     var scroll = window.pageYOffset || document.documentElement.scrollTop;
    //     var header = document.querySelector(".header");
    
    //     if (scroll >= 200) {
    //         header.classList.add("sticky");
    //     } else {
    //         header.classList.remove("sticky");
    //     }
    // });
    // sticky header end
    // language toggle start
    // if (document.dir == "ltr") {
    //     $('.english').hide();
    //     $('.arabic').show();
    // } else if (document.dir == "rtl") {
    //     $('.english').show();
    //     $('.arabic').hide();
    // }
    // $('.arabic').click(function() {
    //     $('html').attr('dir', 'rtl');
    //     $('body').addClass('rtl').removeClass('ltr');
    //     $('.arabic').hide();
    //     $('.english').show();
    //     localStorage.setItem('rtl', 'true');
    // });
    // $('.english').click(function() {
    //     $('html').attr('dir', 'ltr');
    //     $('body').addClass('ltr').removeClass('rtl');
    //     $('.english').hide();
    //     $('.arabic').show();
    //     localStorage.removeItem('rtl');
    // });
    // if (localStorage.getItem('rtl') === 'true') {
    //     $('.arabic').hide();
    //     $('.english').show();
    //     $('body').addClass('rtl').removeClass('ltr');
    //     $('html').attr('dir', 'rtl');
    // }
    // // language toggle end
    // // dark theme toggle start
    // $('.lightoff').click(function() {
    //     $('body').addClass('dark');
    //     localStorage.setItem('darkClass', 'true');
    // });
    // $('.lighton').click(function() {
    //     $('body').removeClass('dark');
    //     localStorage.removeItem('darkClass');
    // });
    // if (localStorage.getItem('darkClass') === 'true'){
    //     $('body').addClass('dark');
    // }
    
    // $(".nvbtn").click(function() {
    //     $(".hdrnavLst").addClass("active");
    // });
    // $(".hdrnavLst-closebtn").click(function() {
    //     $(".hdrnavLst").removeClass("active");
    // });
    // $("body").click(function(){
    //     $(".hdrnavLst").removeClass("active");
    // })
  



    
    window.addEventListener("scroll", function() {
        var scroll = window.pageYOffset || document.documentElement.scrollTop;
        var header = document.querySelector(".header");
    
        if (scroll >= 200) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    });
    // sticky header end
    // language toggle start
// Check the document direction and show/hide elements accordingly
if (document.dir === "ltr") {
    const englishElements = document.querySelectorAll('.english');
    englishElements.forEach(element => element.style.display = 'none');
    const arabicElements = document.querySelectorAll('.arabic');
    arabicElements.forEach(element => element.style.display = 'flex');
  } else if (document.dir === "rtl") {
    const englishElements = document.querySelectorAll('.english');
    englishElements.forEach(element => element.style.display = 'flex');
    const arabicElements = document.querySelectorAll('.arabic');
    arabicElements.forEach(element => element.style.display = 'none');
  }
  
  // Add click event listener for Arabic elements
  const arabicElements = document.querySelectorAll('.arabic');
  arabicElements.forEach(element => {
    element.addEventListener('click', function () {
      document.querySelector('html').setAttribute('dir', 'rtl');
      document.querySelector('body').classList.add('rtl');
      document.querySelector('body').classList.remove('ltr');
      arabicElements.forEach(elem => elem.style.display = 'none');
      const englishElements = document.querySelectorAll('.english');
      englishElements.forEach(elem => elem.style.display = 'flex');
      localStorage.setItem('rtl', 'true');
    });
  });
  
  // Add click event listener for English elements
  const englishElements = document.querySelectorAll('.english');
  englishElements.forEach(element => {
    element.addEventListener('click', function () {
      document.querySelector('html').setAttribute('dir', 'ltr');
      document.querySelector('body').classList.add('ltr');
      document.querySelector('body').classList.remove('rtl');
      englishElements.forEach(elem => elem.style.display = 'none');
      const arabicElements = document.querySelectorAll('.arabic');
      arabicElements.forEach(elem => elem.style.display = 'flex');
      localStorage.removeItem('rtl');
    });
  });
  
  // Check localStorage for 'rtl' item and apply appropriate styles
  if (localStorage.getItem('rtl') === 'true') {
    const englishElements = document.querySelectorAll('.english');
    englishElements.forEach(element => element.style.display = 'none');
    const arabicElements = document.querySelectorAll('.arabic');
    arabicElements.forEach(element => element.style.display = 'flex');
    document.querySelector('body').classList.add('rtl');
    document.querySelector('body').classList.remove('ltr');
    document.querySelector('html').setAttribute('dir', 'rtl');
  }
  
    // language toggle end
    // dark theme toggle start
// Function to add dark class and set localStorage
function turnOffLight() {
    document.body.classList.add('dark');
    localStorage.setItem('darkClass', 'true');
  }
  
  // Function to remove dark class and remove localStorage item
  function turnOnLight() {
    document.body.classList.remove('dark');
    localStorage.removeItem('darkClass');
  }
  
  // Add click event listener for elements with class 'lightoff'
  const lightOffElements = document.querySelectorAll('.lightoff');
  lightOffElements.forEach(element => {
    element.addEventListener('click', turnOffLight);
  });
  
  // Add click event listener for elements with class 'lighton'
  const lightOnElements = document.querySelectorAll('.lighton');
  lightOnElements.forEach(element => {
    element.addEventListener('click', turnOnLight);
  });
  
  // Check localStorage for 'darkClass' item and apply appropriate styles
  if (localStorage.getItem('darkClass') === 'true') {
    document.body.classList.add('dark');
  }
  
// Function to add the 'active' class to .hdrnavLst
function openNavList() {
    const hdrnavLst = document.querySelector(".hdrnavLst");
    hdrnavLst.classList.add("active");
  }
  
  // Function to remove the 'active' class from .hdrnavLst
  function closeNavList() {
    const hdrnavLst = document.querySelector(".hdrnavLst");
    hdrnavLst.classList.remove("active");
  }
  
  // Add click event listener for elements with class 'nvbtn'
  const nvbtnElements = document.querySelectorAll('.nvbtn');
  nvbtnElements.forEach(element => {
    element.addEventListener('click', openNavList);
  });
  
  // Add click event listener for elements with class 'hdrnavLst-closebtn'
  const hdrnavLstClosebtnElements = document.querySelectorAll('.hdrnavLst-closebtn');
  hdrnavLstClosebtnElements.forEach(element => {
    element.addEventListener('click', closeNavList);
  });
  
  // Add click event listener for the body to close the nav list
  // document.body.addEventListener('click', function() {
  //   closeNavList();
  // });
  
  // Add click event listener for elements with classes 'nvbtn' and 'hdrnavLst' to stop propagation
  const nvbtnAndHdrnavLstElements = document.querySelectorAll('.nvbtn, .hdrnavLst');
  nvbtnAndHdrnavLstElements.forEach(element => {
    element.addEventListener('click', function(event) {
      event.stopPropagation();
    });
  });