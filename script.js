const carousel=document.querySelector('.carousel');let scrollAmount=0;function scrollTestimonials(){scrollAmount+=1;if(scrollAmount>=carousel.scrollWidth-carousel.clientWidth){scrollAmount=0}
carousel.scrollLeft=scrollAmount;requestAnimationFrame(scrollTestimonials)}
document.addEventListener('DOMContentLoaded',()=>{requestAnimationFrame(scrollTestimonials)});$(document).ready(function(){$('#scrollButton').on('click',function(event){event.preventDefault();const target=$('#nextDiv');const offset=target.offset().top-100;$('html, body').animate({scrollTop:offset},100);console.log('Scroll button clicked')})})


