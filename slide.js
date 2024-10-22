let iAtual = 0;
 
function showSlide(index) {
    const slides = document.querySelectorAll('.dentro img');
    if (slides.length === 0) return;
 
    if (index >= slides.length) iAtual = 0;
    if (index < 0) iAtual = slides.length - 1;
 
    const deslocamento = -iAtual * 33.33;
 
    document.querySelector('.dentro').style.transform = `translateX(${deslocamento}%)`;
}
 
function moveSlide(step) {
    iAtual += step;
    showSlide(iAtual);
}
 
showSlide(iAtual);
 
 
 