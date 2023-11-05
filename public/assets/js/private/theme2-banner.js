// $(".inputF").focus(function(){
//     $(this).nextAll('.form-input-sm-name').eq(0).show()
// })
// $(".inputF").focusout(function(){
//     $(this).nextAll('.form-input-sm-name').eq(0).hide()
// })
// $(".bannerBox1__link").click(function(){
//     $(this).toggleClass("active");
//     $(".bannerform").toggleClass("active");
// })
// $("body").click(function(){
//     $(".bannerBox1__link").removeClass("active");
//     $(".bannerform").removeClass("active");
// })
// $(".bannerBox1__link,.bannerform").click(function(event){
//     event.stopPropagation();
// })

// const inputF = document.querySelector('.inputF');
// const formInputSmName = document.querySelector('.form-input-sm-name');

// inputF.addEventListener('focus', function() {
//   formInputSmName.classList.add('active');
// });

// inputF.addEventListener('focusout', function() {
//   formInputSmName.classList.remove('active');
// });

const bannerBox1Link = document.querySelector('.bannerBox1__link');
const bannerform = document.querySelector('.bannerform');

// bannerBox1Link.addEventListener('click', function() {
//   this.classList.toggle('active');
//   bannerform.classList.toggle('active');
// });

// // document.body.addEventListener('click', function() {
// //   bannerBox1Link.classList.remove('active');
// //   bannerform.classList.remove('active');
// // });

// bannerBox1Link.addEventListener('click', function(event) {
//   event.stopPropagation();
// });

// bannerform.addEventListener('click', function(event) {
//   event.stopPropagation();
// });
