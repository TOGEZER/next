document.addEventListener("DOMContentLoaded",function(){var t=document.querySelectorAll(".gambit_hover_row");if(Array.prototype.forEach.call(t,function(t,e){var a=document.gambitFindElementParentRow(t);a.style.overflow="hidden",a.classList.add("has_gambit_hover_row");var r=document.createElement("div");r.classList.add("gambit_hover_inner"),r.setAttribute("data-type",t.getAttribute("data-type")),r.setAttribute("data-amount",t.getAttribute("data-amount")),r.setAttribute("data-inverted",t.getAttribute("data-inverted")),r.style.opacity=Math.abs(parseFloat(t.getAttribute("data-opacity"))/100),r.style.backgroundImage="url("+t.getAttribute("data-bg-image")+")";var o=0;o="tilt"===t.getAttribute("data-type")?.6*-parseInt(t.getAttribute("data-amount"),10)+"%":-parseInt(t.getAttribute("data-amount"),10)+"px",r.style.top=o,r.style.left=o,r.style.right=o,r.style.bottom=o,r.style.zIndex=t.style.zIndex,a.insertBefore(r,a.firstChild)}),!navigator.userAgent.match(/(Mobi|Android)/)){var t=document.querySelectorAll(".has_gambit_hover_row");Array.prototype.forEach.call(t,function(t,e){t.addEventListener("mousemove",function(t){for(var e=t.target.parentNode;!e.classList.contains("has_gambit_hover_row");){if("HTML"===e.tagName)return;e=e.parentNode}var a=e.getBoundingClientRect(),r=t.pageY-(a.top+window.pageYOffset),o=t.pageX-(a.left+window.pageXOffset);r/=e.clientHeight,o/=e.clientWidth;var i=e.querySelectorAll(".gambit_hover_inner");Array.prototype.forEach.call(i,function(t,e){var a,i=parseFloat(t.getAttribute("data-amount")),n="true"===t.getAttribute("data-inverted");if("tilt"===t.getAttribute("data-type")){var s=o*i-i/2,l=(1-r)*i-i/2;n&&(s=(1-o)*i-i/2,l=r*i-i/2),a="perspective(2000px) ",a+="rotateY("+s+"deg) ",a+="rotateX("+l+"deg) ",t.style.webkitTransition="all 0s",t.style.transition="all 0s",t.style.webkitTransform=a,t.style.transform=a}else{var d=o*i-i/2,u=r*i-i/2;n&&(d*=-1,u*=-1),a="translate3D("+d+"px, "+u+"px, 0) ",t.style.webkitTransition="all 0s",t.style.transition="all 0s",t.style.webkitTransform=a,t.style.transform=a}})}),t.addEventListener("mouseout",function(t){for(var e=t.target.parentNode;!e.classList.contains("has_gambit_hover_row");){if("HTML"===e.tagName)return;e=e.parentNode}if(!t.relatedTarget||!e.contains(t.relatedTarget)){var a=e.querySelectorAll(".gambit_hover_inner");Array.prototype.forEach.call(a,function(t,e){parseFloat(t.getAttribute("data-amount"));t.style.webkitTransition="all 3s ease-in-out",t.style.transition="all 3s ease-in-out","tilt"===t.getAttribute("data-type")?(t.style.webkitTransform="perspective(2000px) rotateY(0) rotateX(0)",t.style.transform="perspective(2000px) rotateY(0) rotateX(0)"):(t.style.webkitTransform="translate3D(0, 0, 0)",t.style.transform="translate3D(0, 0, 0)")})}})})}});