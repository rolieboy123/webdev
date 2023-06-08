//First select all the elements which are there in our html file
const first = document.querySelector('.first')
const iframe = document.querySelector('iframe')
const button = document.querySelector('button')


//When we click on the button we need to change the code in to the html
button.addEventListener("click",function(){
    var html = first.textContent
    iframe.src = "data:text/html;charset=utf-8," + encodeURI(html)
})

first.addEventListener('keyup',function(){
    var html = first.textContent
    iframe.src = "data:text/html;charset=utf-8," + encodeURI(html)
})