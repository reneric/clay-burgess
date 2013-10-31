jQuery(function($){
var urlRe = /^\s*url\("?([^"]*)"?\)$/;
	$.fn.cssBackgroundReady = function (handler) {
		var urls, collection, toLoad, loaded;

		collection = this;

		// get all URLs
		urls = (function () {
			var urlObj = {}, urls = [], url;
			collection.each(function () {
				var css = $(this).css('background-image'), parts, i;
				parts = css.split(',');
				for (i = parts.length; i--;) {
					if (urlRe.test(parts[i])) {
						urlObj[parts[i].match(urlRe)[1]] = true;
					}
				}
			});
			for (url in urlObj) {
				if (urlObj.hasOwnProperty(url)) {
					urls.push(url);
				}
			}
			return urls;
		}());

		// invokes the callback once every image was loaded
		loaded = function () {
			toLoad--;
			if (!toLoad && handler) {
				handler.call(collection);
			}
		};

		toLoad = urls.length;

		// load all images
		(function () {
			var i, image;
			for (i = toLoad; i--;) {
				image = new Image();
				image.onload = loaded;
				image.src = urls[i];
			}
		}());

		return collection;
	};
});
/*! signet.js 0.3.1 */
(function(){var a,b,c,d,e,f,g,h,i,j,k,l;null!=(null!=(l=window.console)?l.log:void 0)&&(e=function(a){var b,c,d;return b=null!=(d=document.head.querySelector("meta[name='"+a+"']"))?d.content:void 0,b?function(){var a,d,e,f;for(e=b.split(","),f=[],a=0,d=e.length;d>a;a++)c=e[a],f.push(c.trim());return f}():void 0},a=e("signet:authors"),f=e("signet:links"),i='400 12px "Helvetica Neue", Helvetica, Arial, sans-serif',j=12,k=16,h=function(){var a,b,c,d,e,f;return b=function(){return/MSIE/.test(navigator.userAgent)},a=function(){return/Firefox/.test(navigator.userAgent)},c=function(){return/OPR/.test(navigator.userAgent)&&/Opera/.test(navigator.vendor)},d=function(){return/Safari/.test(navigator.userAgent)&&/Apple Computer/.test(navigator.vendor)},f=function(){var a;return a=navigator.userAgent.match(/AppleWebKit\/(\d+)\.(\d+)(\.|\+|\s)/),a?537.38<=parseInt(a[1],10)+parseInt(a[2],10)/100:!1},e=function(){var a;return a=navigator.userAgent.match(/OPR\/(\d+)\./),a?15<=parseInt(a[1],10):!1},!(b()||a()||c()&&!e()||d()&&!f())}(),b=function(a){var b,c,d,e,f,g,h,i,j;for(g=["log","debug","warn","error"],e={},b={},d=[],c=g.length,h=function(a){return e[a]=console[a],b[a]=function(){return e[a].apply(console,arguments)},console[a]=function(){return d.push([a,arguments])}},c=i=0,j=g.length;j>i;c=++i)f=g[c],h(f);return setTimeout(function(){var b,c,h,i,j;for(h=0,i=g.length;i>h;h++)f=g[h],console[f]=e[f];for(a(),j=[];d.length;)b=d.shift(),f=b[0],c=b[1],j.push(console[f].apply(console,c));return j},0)},d=function(){var b,c,d,e,f,g,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G;if(null!=a?a.length:void 0){if(h){for(j=480,k=(null!=(G=document.body)?G.clientWidth:void 0)||480,c=20,d=c/2,f=60,p=a.length*c+25,z=14,y=-35,w=-24,g=document.createElement("canvas"),g.height=1e3,g.width=k,m=g.getContext("2d"),m.font=i,n=function(a,b,c,d,e){return m.fillStyle=e,m.fillRect(a,b+z,c,d)},o=function(a,b){return m.fillStyle="#444",m.fillText(a,f+10,b+z)},n(0,-z,k,p,"white"),r=B=0,E=a.length;E>B;r=++B)for(b=a[r],o(b,c*r+14),l=b.replace(/\s/g,""),e=c*r+(c-d)/2,v=C=0,F=l.length;F>C;v=++C)x=l[v],t=Math.floor(f*v/l.length),u=Math.ceil(f*(v+1)/l.length-t),q=(2*x.toLowerCase().charCodeAt(0)+5*l.toLowerCase().charCodeAt(0))%256,n(t,e,u,d,"hsl("+q+", 80%, 80%)");return s="font-size: 0; line-height: "+(p+y)+"px; padding: "+Math.floor(p/2)+"px "+k+"px "+Math.ceil(p/2)+'px 0; background-image: url("'+g.toDataURL()+'"); margin-left: '+w+"px",console.log("%c ",s)}for(console.log("Authors:"),A=0,D=a.length;D>A;A++)b=a[A],console.log(b)}},c=function(){var a,b,c,d,e,j,l,m,n,o,p,q,r,s,t,u,v;if(null!=f?f.length:void 0){if(h){for(a={"twitter.com":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAMAAAAolt3jAAABDlBMVEX6/P7Q4/qy0vfd7Pzz+P631fgAjO7B2/kAj+7d6/tnrvKTwvXE3florvI0nPAAhu2PwPXl7/yKvvTd6/xlrfIxmu8/n/ArmO9nrfL8/v/D3Pnc6vsclu+hyvZCoPD1+f4ale+mzPYAjO1mrfIume/y+P7l8PxPpvGozfcAk+7v9v3Z6Pvk7/zA2vkMlO4umu8tme9eqvFlrPIqmO8Aiu1DoPAkl+83nO/9/f/v9f11tPN5tvPs9P01m+8ml+++2fhvsfJ8t/P2+v4AkO5YqPEqme8Ake4zm++/2vkmmO8sme8Aju4vmu8ll+/8/f/+//8Aku40m+8nmO8Aje77/f8omO8pmO/9/v/+/v////82XKzkAAAAr0lEQVR42i2HhXJCQRRDLxQpWiq4Fajj7lbcn+5u/v9H2MdwJpnkEMQFEiHbEyDr3tI35BBe4zifMRps6uXtHyHwAsmwpVX07y+C7+ktkf1sn6rq7w8I/qCyyBTUDquti1JDB/X4rkxY87QrSX1erlb7D2YelQZAHGk9ykxTG+tTcBJIxjY7tu8e5sCFBMfDUgun8rN/CJCx9S5cj+tIzgAHCORx2502ByBg6R1uGa5fdzNEjg+lPgAAAABJRU5ErkJggg==","github.com":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAMAAAAolt3jAAAA1VBMVEUTERIPDg8QDw8TDxMSEhIREREQEBATERETEBAREREQEBATEBMRERERERESEhISEBISEBIREBESERIREBAVFRUQDxAUDxQSERIUDw8TEBAREBASERIQDxASEBISEBIQEBAAAAAREREQDw8QDxAODg4TEBMVDhUQDxATEBMSEhIREBAREBATExMRDxEQEBASEBIRERESEhISEhISEhITERESEBIREBEREBESEhISEREAAAAUFBQAAAAAAAAAAAAQDw8SERITEhIQDw8RDxAQDw8REBASERLudflrAAAAP3RSTlP+/P5EHVs+iE9ZMW4sdmWRYtGa2yX0M4ozUd2L95udHwOG8ekkUST2UlbN3ijFEI5JHDpkiW/m5GaKAScEAgDgPKx8AAAApklEQVR42h3PxXLDUBBE0YnDzGiHOWaUZOldT5dq/v+XovLZ3t60JShni7pezEpIBtOQNxRTMHJvrdRYtTzHeuGjSTGfF5ORR89uFTes3YUKy9QfUKVUMegrs9CQtIRlYqiwWo+8VDQDnlTbgzpX0GS+3tW1tl+en2zB+OfP9Wrl9cVpbEMu1/eHcbZxuDmGe1f8YrDfzXZgT2+fsL6wewBHx8+Q/gFJwSeod8cM9gAAAABJRU5ErkJggg=="},o=["%c\n","line-height: 0; font-size: 0"],e=t=0,v=f.length;v>t;e=++t){n=f[e],c=n.replace(/(https?:\/\/[^\/]+(\/|$))(.*)/,"$1"),p=n.substr(c.length),d=g(c),q=g(p),j=null;for(b in a)if(l=a[b],new RegExp("^(https?://)?(www.)?"+b+"/","i").test(n)){j=l;break}j?(o[0]+="%c"+n+"%c %c %c\n",m=-d):(o[0]+="%c"+n+"\n",m=0),o.push("-webkit-font-smoothing: antialiased; font: "+i+"; margin-left: "+m+"px"),j&&(r=42,m=-q-r,o.push("background: #fff; line-height: "+k+"px; padding: "+(k/2+2)+"px "+r/2+"px "+(k/2+2)+"px "+r/2+"px; font-size: 0; margin-left: "+m+"px"),m=-(r/2)+2,o.push("background: #fff url("+j+"); line-height: "+k+"px; padding: 11px 14px 3px 0; font-size: 0; margin-left: "+m+"px"),o.push(""))}return console.log.apply(console,o)}for(s=0,u=f.length;u>s;s++)n=f[s],console.log(n)}},g=function(a){var b,c;return b=document.createElement("canvas"),c=b.getContext("2d"),c.font=i,c.measureText(a).width},b(function(){return d(),c()}))}).call(this);