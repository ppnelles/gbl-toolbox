/* 
Add IE10 classes to html 
To traget use : html[data-useragent*='MSIE 10.0']
*/

var doc = document.documentElement;
doc.setAttribute('addClass', navigator.userAgent);