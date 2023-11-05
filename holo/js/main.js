anime({
    targets: '.interact .holo1',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1000,
    delay: function(el, i) { return i * 250 },
    direction: 'alternate',
    loop: false,
    complete: playWithLines2
  });

function playWithLines2() {
  anime({
    targets: '.interact .holo1',
    strokeDashoffset: [0, 9],
    easing: 'easeInOutSine',
    duration: 1000,
    delay: function(el, i) { return (i * 250) + 200 },
    direction: 'alternate',
    loop: true
  });
}

  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if ($(window).width() > 700){
    if (y > screen.height - 500) {
      $('.fixed-title').css("opacity", "100")
      $('.fixed-title').fadeIn();
    } else {
      $('.fixed-title').fadeOut();
    }
  }
  });


/*

  anime({
    targets: '.interact .holo1',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1000,
    delay: function(el, i) { return i * 250 },
    direction: 'alternate',
    loop: false
  });

  anime({
    targets: '.interact .holo1',
    strokeDashoffset: [anime.setDashoffset, -20],
    easing: 'easeInOutSine',
    duration: 1000,
    delay: function(el, i) { return (i * 250) + 200 },
    direction: 'alternate',
    loop: true
  });


  */