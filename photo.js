(function(){
    var video = document.getElementsByTagName('video')[0],
    vendorUrl = window.URL || window.webkitURL;

    navigator.getMedia = navigator.getUserMedia ||
                         navigator.webkitGetUserMedia ||
                         navigator.mozGetUserMedia ||
                         navigator.msGetUserMedia;
    navigator.getMedia({
        video: true,
        audio: false
    },function(stream){
        video.src = vendorUrl.createObjectURL(stream);
        video.play();
    }, function(error){
        // An error occured
        // error.code
        
    });
    
})();