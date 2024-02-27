$('.beforeAfter').beforeAfter({
    movable: true,
    clickMove: true,
    position: 50,
    onMoveEnter: true,
    separatorColor: '#fafafa',
    bulletColor: '#fafafa',
    // onMoveStart: function(e) {
    //     console.log(event.target);
    // },
    // onMoving: function() {
    //     console.log(event.target);
    // },
    // onMoveEnd: function() {
    //     console.log(event.target);
    // },
});

// $('.beforeAfter').on('mousemove', function(e) {
//     var containerOffset = $(this).offset();
//     var containerWidth = $(this).width();
//     var mouseX = e.pageX - containerOffset.left;

//     var newPosition = mouseX / containerWidth * 100;
//     newPosition = Math.min(100, Math.max(0, newPosition));

//     $(this).find('img:first-child').css('clip-path', 'inset(0 ' + (100 - newPosition) + '% 0 0)');
//     $(this).find('img:last-child').css('clip-path', 'inset(0 0 0 ' + newPosition + '%)');
// });

// $('.beforeAfter').on('mouseleave', function(e) {
//     $(this).find('img').css('clip-path', 'none');
// });
