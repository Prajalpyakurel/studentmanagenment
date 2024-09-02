addEventListener('mousemove', function(e) {
    [1, .1].forEach(function(i) {
      var j = (1 - i) * 9000;
      var x = $(document).height();
      var elem = document.createElement('div');
      var size = Math.ceil(Math.random() * 5 * i) + 'px';
      elem.style.position = 'absolute';
      var k =  j - j / 2;
      y = e.pageY + Math.round(Math.random() * j - j / 2);
      if( y > x){
          y = x - 100;
      }
      elem.style.top = y + 'px' ;
      elem.style.left = e.pageX + Math.round(Math.random() * j - j / 2) + 'px';
      elem.style.width = size;
      elem.style.height = size;
      var al = 'hsla( 240 , ' +
        '100%, ' + Math.floor(Math.random() * (100 - 0 + 1)) +  '%, ' +
        i + ')';
      elem.style.background = al;
      elem.style.borderRadius = size;
      elem.style.pointerEvents = 'none';
      document.body.appendChild(elem);
      window.setTimeout(function() {
        document.body.removeChild(elem);
      }, 500);
    });
  }, false);
$( document ).ready(function() {
    var scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: '#navbar-example'
      })
    let items = document.querySelectorAll('#portfolio .carousel .carousel-item')
    items.forEach((el) => {
        const minPerSlide = 3
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
        }
    })
    // var interval = 0;
    // var rule = '';
    // for(interval=10; interval<=100; interval += 10){
    //     var top = Math.floor(Math.random() * (4000 - 500 + 1)) + 500;
    //     var right = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
    //     rule += interval + '%   { right: ' + right + 'px ; top:' + top + 'px; z-index: -4; opacity: 0.5}';
    // }
    // document.styleSheets[0].insertRule(
    //     key = '\@keyframes circle2 {0% + { right: 400px; top: 724px; z-index: -4; opacity: 0.5}'+ rule + '\}'
    // ); 
    // for(interval=10; interval<=100; interval += 10){
    //     var top = Math.floor(Math.random() * (4000 - 100 + 1)) + 100;
    //     var left = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
    //     rule += interval + '%   { left: ' + left + 'px ; top:' + top + 'px; z-index: -4; opacity: 0.5}';
    // }
    // document.styleSheets[0].insertRule(
    //     key = '\@keyframes circle3  {0%   { left: -173px; top: 625px; z-index: -1; opacity: 0.3;}'+ rule + '\}'
    // ); 
    // for(interval=10; interval<=100; interval += 10){
    //     var top = Math.floor(Math.random() * (4000 - 500 + 1)) + 500;
    //     var right = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
    //     rule += interval + '%   { right: ' + right + 'px ; top:' + top + 'px; z-index: -4; opacity: 0.5}';
    // }
    // document.styleSheets[0].insertRule(
    //     key = '\@keyframes circle4 {0% + { right: -97px; top: 1316.15px; z-index: -4; opacity: 0.5}'+ rule + '\}'
    // ); 
    // for(interval=10; interval<=100; interval += 10){
    //     var top = Math.floor(Math.random() * (4000 - 0 + 1)) + 0;
    //     var right = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
    //     rule += interval + '%   { right: ' + right + 'px ; top:' + top + 'px; z-index: -4; opacity: 0.5}';
    // }
    // document.styleSheets[0].insertRule(
    //     key = '\@keyframes circle1 {0% + { right: -240px; top: 0px; z-index: -4; opacity: 0.5}'+ rule + '\}'
    // ); 
    // for(interval=10; interval<=100; interval += 10){
    //     var top = Math.floor(Math.random() * (4000 - 500 + 1)) + 500;
    //     var left = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
    //     rule += interval + '%   { left: ' + left + 'px ; top:' + top + 'px; z-index: -4; opacity: 0.5}';
    // }
    // document.styleSheets[0].insertRule(
    //     key = '\@keyframes circle5 {0% + { left: 249.31px; top: 2513.09px; z-index: -4; opacity: 0.5}'+ rule + '\}'
    // ); 
    var rule = '', rule1 = '', rule2 = '', rule3 = '', rule4= '';
    for(var interval=10; interval<=100; interval += 10){
        var top1 = Math.floor(Math.random() * (4000 - 500 + 1)) + 500;
        var right1 = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
        var top2 = Math.floor(Math.random() * (4000 - 100 + 1)) + 100;
        var left2 = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
        var top3 = Math.floor(Math.random() * (4000 - 500 + 1)) + 500;
        var right3 = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
        var top4 = Math.floor(Math.random() * (4000 - 0 + 1)) + 0;
        var right4 = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
        var top = Math.floor(Math.random() * (4000 - 500 + 1)) + 500;
        var left = Math.floor(Math.random() * (1400 - 0 + 1)) + 0;
        rule1 += interval + '%   { right: ' + right1 + 'px ; top:' + top1 + 'px; z-index: -4; opacity: 0.5}';
        rule2 += interval + '%   { left: ' + left2 + 'px ; top:' + top2 + 'px; z-index: -4; opacity: 0.5}';
        rule3 += interval + '%   { right: ' + right3 + 'px ; top:' + top3 + 'px; z-index: -4; opacity: 0.5}';       
        rule4 += interval + '%   { right: ' + right4 + 'px ; top:' + top4 + 'px; z-index: -4; opacity: 0.5}';   
        rule += interval + '%   { left: ' + left + 'px ; top:' + top + 'px; z-index: -4; opacity: 0.5}';
    }
    document.styleSheets[0].insertRule(
        key = '\@keyframes circle5 {0% + { left: 249.31px; top: 2513.09px; z-index: -4; opacity: 0.5}'+ rule + '\}'
    ); 
    document.styleSheets[0].insertRule(
        key = '\@keyframes circle1 {0% + { right: -240px; top: 0px; z-index: -4; opacity: 0.5}'+ rule4 + '\}'
    ); 
    document.styleSheets[0].insertRule(
        key = '\@keyframes circle4 {0% + { right: -97px; top: 1316.15px; z-index: -4; opacity: 0.5}'+ rule3 + '\}'
    ); 
    document.styleSheets[0].insertRule(
        key = '\@keyframes circle3  {0%   { left: -173px; top: 625px; z-index: -1; opacity: 0.3;}'+ rule2 + '\}'
    );
    document.styleSheets[0].insertRule(
        key = '\@keyframes circle2 {0% + { right: 400px; top: 724px; z-index: -4; opacity: 0.5}'+ rule1 + '\}'
    ); 
});
// select the html element we want to blur
// const blurTarget = document.querySelector('.blur-target');
// duplicate it
// const duplicate = blurTarget.cloneNode(true);
// place it inside a container-div
// const targetBlurred = document.createElement('div');
// apply blurring svg effect to the container
// targetBlurred.className = 'blurred-content';
// place duplicate inside the container
// targetBlurred.appendChild(duplicate);

// place our blurred duplicate inside the nav bar
// const navContainer = document.querySelector('.nav-container');
// navContainer.appendChild(targetBlurred);
// const contentWrapper = document.querySelector('#content')
//     window.addEventListener('scroll', function () {
//         duplicate.style.marginTop = -this.scrollY + 'px';
//     });
window.addEventListener('scroll', reveal)
function reveal(){
    var reveal = document.querySelectorAll('.blur');     

    console.log(revealheight);
    for(var i =0; i<reveal.length; i++)
    {
        var revealheight = window.innerHeight; 
        var revealtop = reveal[i].getBoundingClientRect().top;
        var revealpoint = 150;
        console.log(revealtop);
        if(revealtop < revealheight - revealpoint){
            reveal[i].classList.add('active');            
        }
        else{
            reveal[i].classList.remove('active'); 
        }
    }
}