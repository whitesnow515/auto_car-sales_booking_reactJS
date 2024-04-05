
            function faqq1(elemid, elemid2){
                if (document.getElementById(elemid).style.display == "none"){
                    document.getElementById(elemid2).style.backgroundColor = "#eb8a00";
                    document.getElementById(elemid).style.display = "block";
                } else {
                    document.getElementById(elemid2).style.backgroundColor = "transparent";
                    document.getElementById(elemid).style.display = "none";
                }
            }
            
            function imgviewer(imglink){
                document.getElementById("image").src = imglink;
                // document.getElementById("img-viewer").style.display = "block";
                document.getElementById("img-viewer").style.visibility = "visible";
                document.getElementById("img-viewer").style.opacity = 1;
                document.getElementById("body").style.overflow = "hidden"
            }

            function ximage(){
                // document.getElementById("img-viewer").style.display = "none";
                document.getElementById("img-viewer").style.opacity = 0;
                document.getElementById("img-viewer").style.visibility = "hidden";
                document.getElementById("body").style.overflow = "scroll"
            }

            function toggleFullScreen() {
                if (!document.fullscreenElement &&
                    !document.mozFullScreenElement && !document.webkitFullscreenElement) {
                    if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                    document.getElementById("fs-button").className = "fa-sharp fa-regular fa-compress-wide";
                } else {
                    if (document.cancelFullScreen) {
                        document.cancelFullScreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitCancelFullScreen) {
                        document.webkitCancelFullScreen();
                    }
                    document.getElementById("fs-button").className = "fa-sharp fa-regular fa-expand-wide";
                }
            }