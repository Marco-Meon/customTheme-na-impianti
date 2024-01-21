/*  -----------------------------------------------------------------------------------------------
  ! Global scripts
--------------------------------------------------------------------------------------------------- */

/*  ! Toggle Menù */
let hamburger = document.querySelector('.header__hamburger');
hamburger.addEventListener("click", function() {
    document.body.classList.toggle('menu-open');
});

const menuContainer = document.getElementById("menu-item-119");
const subMenuItems = menuContainer.querySelectorAll('.sub-menu');

menuContainer.removeAttribute('href');

menuContainer.addEventListener('click', function(event) {
  if (!menuContainer.hasAttribute('href')) {
    event.preventDefault();
  }
});

subMenuItems.forEach(function(subMenuItem) {
  subMenuItem.addEventListener('click', function() {
    menuContainer.setAttribute('href', '#');
  });
});


/* ! Accordion sub-menù */
const menu_item = document.getElementById("menu-item-119");
menu_item.setAttribute('aria-expanded', 'false');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
  else if (itemToggle == 'true') {
    this.setAttribute('aria-expanded', 'false');
  }
}
menu_item.addEventListener('click', toggleAccordion);

document.body.addEventListener('click', function(event) {
  if (!document.body.classList.contains('menu-open')) {
    menu_item.setAttribute('aria-expanded', 'false');
  }
});


/* ! Animations */
ScrollTrigger.batch(".fade-up",{start: "top 80%",onEnter: (elements, triggers) => {
  gsap.to(elements, {opacity: 1, stagger: 0.3, y:0, duration: 1.5, ease: Power2.easeOut});
}});


/* ! Lenis */
const lenis = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
})

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf)



/*  -----------------------------------------------------------------------------------------------
  ! Home page scripts
--------------------------------------------------------------------------------------------------- */
if (window.location.pathname === '/') {

  /* ! Scroll-down */
  window.addEventListener('scroll', function(e) {
    if(window.scrollY > window.innerHeight){
      document.body.classList.add('scroll-down');
    } else {
      document.body.classList.remove('scroll-down');
    }
  });


  /* Toggle servizi solo per schermi larghi (almeno 798px) */
  $(".option").click(function(){
    $(".option").removeClass("active");
    $(this).addClass("active");
  });


  /* cover animation */
  gsap.to(".text-reveal", {clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)", y:0, duration: 1, stagger: 0.7, ease: Power2.easeOut});

}
