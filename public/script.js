var backdrop = document.querySelector('.backdrop');
var toggleButton=document.querySelector('.toggle-button');
var mobileNav =document.querySelector('.mobile-nav');




mobileNav.addEventListener("click", function(){
  mobileNav.style.display="none";
  closeMenu();
});

function closeMenu(){
  backdrop.style.display="none";
  mobileNav.style.display="none";
}

toggleButton.addEventListener('click', function(){
  mobileNav.style.display = "block";
  backdrop.style.display = "block";

});
