function setCookie(e,o,t){let i=new Date;i.setTime(i.getTime()+864e5*t);let n="expires="+i.toUTCString();document.cookie=e+"="+o+";"+n+";path=/"}function deleteCookie(e){let o=new Date;o.setTime(o.getTime()+864e5);let t="expires="+o.toUTCString();document.cookie=e+"=;"+t+";path=/"}function getCookie(e){let o=e+"=",t=decodeURIComponent(document.cookie).split(";");for(let i=0;i<t.length;i++){let n=t[i];for(;" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(o))return n.substring(o.length,n.length)}return""}function acceptCookieConsent(){deleteCookie("user_cookie_consent"),setCookie("user_cookie_consent",1,30),document.getElementById("cookieNotice").style.display="none"}let cookie_consent=getCookie("user_cookie_consent");function closeCookie(){document.getElementById("cookieNotice").remove()}""!=cookie_consent?document.getElementById("cookieNotice").style.display="none":document.getElementById("cookieNotice").style.display="block",$(document).mouseup(function(e){var o=$(".cookies");o.is(e.target)||0!==o.has(e.target).length||$("#closeCookies").click()});